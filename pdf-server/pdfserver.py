#! /usr/bin/env python

# ==============================================================================
# CONFIGURATION
# ==============================================================================

# Full URL to this CGI script.
script_url = 'http://example/cgi-bin/pdfserver.py'

# Directory (with read/write access) for cached files.
# These files can be automatically deleted with a cron-job running the
# accompanied script clean-cache.py.
cache_dir = '/var/cache/pdfserver/'

# (Path to) mw-pdf executable.
mwpdf_cmd = 'mw-pdf'

# Logfile for mw-pdf.
mwpdf_logfile = '/var/log/mw-pdf.log'

# (Path to) mw-zip executable.
mwzip_cmd = 'mw-zip'

# Logfile for mw-zip.
mwzip_logfile = '/var/log/mw-zip.log'

# Directory for error dumps.
traceback_logdir = '/tmp'

# ==============================================================================
# END OF CONFIGURATION
# ==============================================================================


if traceback_logdir is not None:
    import cgitb
    cgitb.enable(display=0, logdir=traceback_logdir)

import cgi
import md5
import os
import re
import simplejson
import StringIO
import subprocess
import time
import urllib

def uid(max_length=10):
    f = StringIO.StringIO()
    print >>f, "%.20f" % time.time()
    print >>f, os.times()
    print >>f, os.getpid()
    m = md5.new(f.getvalue())
    return m.hexdigest()[:max_length]

class PDFServer(object):
    metabook_filename = 'metabook.json'
    pdf_filename = 'collection.pdf'
    error_filename = 'errors.txt'
    progress_filename = 'progress.txt'
    
    def __init__(self, form):
        self.form = form
    
    def json_response(self, data):
        return {
            'content_type': 'application/json',
            'content': simplejson.dumps(data),
        }
    
    def error_response(self, error):
        if isinstance(error, str):
            error = unicode(error, 'utf-8', 'ignore')
        elif not isinstance(error, unicode):
            error = unicode(repr(error), 'ascii')
        return self.json_response({
            'error': error,
        })
    
    def get_cache_dir(self):
        if not os.path.isdir(cache_dir):
            os.makedirs(cache_dir)
        return cache_dir
    
    def get_collection_dir(self, collection_id):
        return os.path.join(self.get_cache_dir(), collection_id)
    
    def get_collection(self):
        collection_id = self.form.getvalue('collection_id')
        if not collection_id or not re.match(r'^[a-z0-9]+$', collection_id):
            raise RuntimeError('invalid collection ID %r' % collection_id)
        collection_dir = self.get_collection_dir(collection_id)
        if not os.path.exists(collection_dir):
            raise RuntimeError('no such collection: %r' % collection_id)
        return collection_id
    
    def new_collection(self):
        while True:
            collection_id = uid()
            collection_dir = self.get_collection_dir(collection_id)
            if os.path.isdir(collection_dir):
                continue
            os.makedirs(collection_dir)
            return collection_id
    
    def get_path(self, collection_id, filename):
        return os.path.join(self.get_collection_dir(collection_id), filename)
    
    def dispatch(self):
        command = self.form.getvalue('command')
        if not command:
            result = self.error_response('no command given')
        else:
            try:
                method = getattr(self, 'do_%s' % command)
            except AttributeError:
                result = self.error_response('invalid command %r' % command)
            else:
                try:
                    result = method()
                except Exception, e:
                    result = self.error_response('error executing command %r: %s' % (command, e))
        
        if 'content_type' in result:
            print 'Content-Type: %s' % result['content_type']
        content = result.get('content', '')
        print 'Content-Length: %d' % len(content)
        print # end of headers
        print content,
    
    def do_pdf_generate(self):
        metabook_data = self.form.getvalue('metabook')
        if not metabook_data:
            return self.error_response('metabook argument required')
        base_url = self.form.getvalue('base_url')
        if not base_url:
            return self.error_response('base_url argument required')
        
        shared_base_url = self.form.getvalue('shared_base_url')
        license = self.form.getvalue('license')
        if not license:
            return self.error_response('license argument required')
        template_blacklist = self.form.getvalue('template_blacklist')
        
        collection_id = self.new_collection()
        
        metabook_path = self.get_path(collection_id, self.metabook_filename)
        f = open(metabook_path, 'wb')
        f.write(metabook_data)
        f.close()
        
        args=[
            mwpdf_cmd,
            '--daemonize',
            '--logfile', mwpdf_logfile,
            '--errorfile', self.get_path(collection_id, self.error_filename),
            '--metabookfile', metabook_path,
            '--baseurl', base_url,
            '--license', license,
            '--progress', self.get_path(collection_id, self.progress_filename),
            '--output', self.get_path(collection_id, self.pdf_filename),
        ]
        if shared_base_url:
            args.extend(['--shared-baseurl', shared_base_url])
        if template_blacklist:
            args.extend(['--template-blacklist', template_blacklist])
        
        rc = subprocess.call(executable=mwpdf_cmd, args=args)
        if rc != 0:
            return self.error_response('command %r failed: rc = %d' % (mwpdf_cmd, rc))
        
        return self.json_response({
            'collection_id': collection_id,
        })
    
    def do_pdf_status(self):
        collection_id = self.get_collection()
        
        if os.path.exists(self.get_path(collection_id, self.pdf_filename)):
            return self.json_response({
                'collection_id': collection_id,
                'state': 'finished',
            })
        
        error_path = self.get_path(collection_id, self.error_filename)
        if os.path.exists(error_path):
            text = unicode(open(error_path, 'rb').read(), 'utf-8', 'ignore')
            return self.json_response({
                'collection_id': collection_id,
                'state': 'failed',
                'error': text,
            })
        
        try:
            progress = int(open(self.get_path(collection_id, self.progress_filename), 'rb').read())
        except IOError:
            progress = 0
        return self.json_response({
            'collection_id': collection_id,
            'state': 'progress',
            'progress': progress,
        })
    
    def do_pdf_download(self):
        return {
            'content_type': 'application/pdf',
            'content': open(self.get_path(self.get_collection(), self.pdf_filename)).read()
        }
    
    def do_zip_post(self):
        metabook_data = self.form.getvalue('metabook')
        if not metabook_data:
            return self.error_response('metabook argument required')    
        base_url = self.form.getvalue('base_url')
        if not base_url:
            return self.error_response('base_url argument required')
        shared_base_url = self.form.getvalue('shared_base_url')
        license = self.form.getvalue('license')
        if not license:
            return self.error_response('license argument required')
        template_blacklist = self.form.getvalue('template_blacklist')
        post_url = self.form.getvalue('post_url')
        if not post_url:
            return self.error_response('post_url argument rquired')
        
        collection_id = self.new_collection()
        
        metabook_path = self.get_path(collection_id, self.metabook_filename)
        open(metabook_path, 'wb').write(metabook_data)
        
        args = [
            mwzip_cmd,
            '--daemonize',
            '--logfile', mwzip_logfile,
            '--metabook', metabook_path,
            '--baseurl', base_url,
            '--license', license,
            '--posturl', post_url,
        ]
        if shared_base_url:
            args.extend(['--shared-baseurl', shared_base_url])
        if template_blacklist:
            args.extend(['--template-blacklist', template_blacklist])
        rc = subprocess.call(executable=mwzip_cmd, args=args)
        if rc != 0:
            return self.error_response('cmd %r failed: rc = %d' % (mwzip_cmd, rc))
        
        return self.json_response({'state': 'ok'})
    

if __name__ == '__main__':
    PDFServer(cgi.FieldStorage()).dispatch()
