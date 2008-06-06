#! /usr/bin/env python

# ==============================================================================
# CONFIGURATION
# ==============================================================================

# Full URL to this CGI script.
script_url = 'http://example/cgi-bin/pdf-server.py'

# Directory (with read/write access) for cached files.
# These files can be automatically deleted with a cron-job running the
# accompanied script clean-cache.py.
cache_dir = '/var/cache/pdf-server/'

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
import StringIO
import subprocess
import time
import urllib

import simplejson

def uid(max_length=10):
    f = StringIO.StringIO()
    print >>f, "%.20f" % time.time()
    print >>f, os.times()
    print >>f, os.getpid()
    m = md5.new(f.getvalue())
    return m.hexdigest()[:max_length]

class PDFServer(object):
    def __init__(self):
        self.form = cgi.FieldStorage()
        self.headers = {}
        self.content = []
        if not os.path.isdir(cache_dir):
            os.makedirs(cache_dir)
    
    def dispatch(self):
        self.collection_id = self.form.getvalue('collection_id')
        if self.collection_id is None:
            self.collection_id = uid()
            
        # prevent evil guys from doing shit (collection_id is used as part of an fs path)
        if not re.match(r'^[a-z0-9]+$', self.collection_id):
            raise RuntimeError('invalid collection ID')
        self.collection_dir = os.path.join(cache_dir, self.collection_id)
        
        def p(filename):
            return os.path.join(self.collection_dir, filename)
        self.metabook_filename = p('metabook.json')
        self.pdf_filename = p('collection.pdf')
        self.error_filename = p('errors.txt')
        self.progress_filename = p('progress.txt')
        self.removed_filename = p('removed.txt')
        self.generating_templ_filename = p('generating_templ.txt')
        self.finished_templ_filename = p('finished_templ.txt')
        self.removed_templ_filename = p('removed_templ.txt')
        self.error_templ_filename = p('error_templ.txt')
        
        command = self.form.getvalue('command')
        assert command, 'command arg required'
        try:
            method = getattr(self, 'do_%s' % command)
        except AttributeError:
            raise RuntimeError('invalid command %r' % command)
        method()
        for k, v in self.headers.items():
            print '%s: %s' % (k, v)
        print 'Content-Length: %d' % len(self.content)
        print # end of headers
        print self.content
    
    #def do_None(self):
    #    self.render_html('It works.')
    
    def do_pdf_generate(self):
        metabook = self.form.getvalue('metabook')
        assert metabook, 'metabook arg required'
        base_url = self.form.getvalue('base_url')
        assert base_url, 'base_url arg required'
        shared_base_url = self.form.getvalue('shared_base_url')
        assert shared_base_url is not None
        license = self.form.getvalue('license')
        assert license, 'license arg required'
        template_blacklist = self.form.getvalue('template_blacklist')
        assert template_blacklist is not None
        generating_templ = self.form.getvalue('generating_template')
        assert generating_templ, 'generating_template arg required'
        finished_templ = self.form.getvalue('finished_template')
        assert finished_templ, 'finished_template arg required'
        removed_templ = self.form.getvalue('removed_template')
        assert removed_templ, 'removed_template arg required'
        error_templ = self.form.getvalue('error_template')
        assert error_templ, 'error_template arg required'
        
        os.makedirs(self.collection_dir)
        open(self.metabook_filename, 'wb').write(metabook)
        
        rc = subprocess.call(executable=mwpdf_cmd, args=[
            mwpdf_cmd,
            '-d',
            '-l', mwpdf_logfile,
            '-e', self.error_filename,
            '-m', self.metabook_filename,
            '-b', base_url,
            '-s', shared_base_url,
            '--license', license,
            '--template-blacklist', template_blacklist,
            '-r', self.removed_filename,
            '-p', self.progress_filename,
            '-o', self.pdf_filename,
        ])
        if rc != 0:
            raise RuntimeError('command %r failed: rc = %d' % (mwpdf_cmd, rc))
        
        open(self.generating_templ_filename, 'wb').write(generating_templ)
        open(self.finished_templ_filename, 'wb').write(finished_templ)
        open(self.removed_templ_filename, 'wb').write(removed_templ)
        open(self.error_templ_filename, 'wb').write(error_templ)
        
        self.headers['Content-Type'] = 'application/json'
        self.content = simplejson.dumps({
            'query': urllib.urlencode({
                'command': 'pdf_status',
                'collection_id': self.collection_id
            }),
        })
    
    def do_pdf_status(self):
        if os.path.exists(self.pdf_filename):
            url = '%s?%s' % (
                script_url,
                urllib.urlencode({
                    'command': 'pdf_download',
                    'collection_id': self.collection_id,
                }),
            )
            text = open(self.finished_templ_filename, 'rb').read()
            if os.path.exists(self.removed_filename):
                text += open(self.removed_templ_filename, 'rb').read() % {
                    'articles': open(self.removed_filename, 'rb').read()
                }
            self.render_html(text, url=url)
        elif os.path.exists(self.error_filename):
            text = open(self.error_templ_filename, 'rb').read()
            self.render_html(text)
        else:
            progress = 0
            try:
                progress = int(open(self.progress_filename, 'rb').read())
            except (IOError, ValueError):
                pass
            query_args = urllib.urlencode({
                'command': 'pdf_status',
                'collection_id': self.collection_id,
            })
            meta = '<meta http-equiv="refresh" content="5; url=?%s">' % query_args
            text = open(self.generating_templ_filename, 'rb').read()
            self.render_html(text % {'progress': progress}, head_text=meta)
    
    def do_pdf_download(self):
        self.headers['Content-Type'] = 'application/pdf'
        self.headers['Content-Disposition'] = 'attachment; filename="collection.pdf"'
        self.content = open(self.pdf_filename).read()
    
    def do_zip_post(self):
        metabook = self.form.getvalue('metabook')
        assert metabook, 'metabook arg required'
        base_url = self.form.getvalue('base_url')
        assert base_url, 'base_url arg required'
        shared_base_url = self.form.getvalue('shared_base_url')
        assert shared_base_url is not None
        license = self.form.getvalue('license')
        assert license, 'license arg required'
        template_blacklist = self.form.getvalue('template_blacklist')
        assert template_blacklist is not None
        post_url = self.form.getvalue('post_url')
        assert post_url, 'post_url arg required'
        
        os.makedirs(self.collection_dir)
        open(self.metabook_filename, 'wb').write(metabook)
        
        rc = subprocess.call(executable=mwzip_cmd, args=[
            mwzip_cmd,
            '-d',
            '-l', mwzip_logfile,
            '-m', self.metabook_filename,
            '-b', base_url,
            '-s', shared_base_url,
            '--license', license,
            '--template-blacklist', template_blacklist,
            '-p', post_url,
        ])
        if rc != 0:
            raise RuntimeError('cmd %r failed: rc = %d' % (mwzip_cmd, rc))
        
        self.content = 'OK'
    
    def render_html(self, body_text, head_text=None, url=None):
        # escape incoming string to prevent XSS attacks or other evil stuff:
        body_text = cgi.escape(body_text)
        
        # provide some basic formatting instead:
        body_text = body_text.replace('\n\n', '<br>')
        body_text = re.sub(r"'''(.*?)'''", r'<strong>\1</strong>', body_text)
        if url is not None:
            body_text = re.sub(r'\[(.*?)\]', r'<a href="%s">\1</a>' % url, body_text)
        
        self.headers['Content-Type'] = 'text/html'
        self.content = '''<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PDF Server</title>
<style type="text/css"><!--
  body { font: 80%% sans-serif; }
  a { text-decoration: none; color: #002bb8; }
  a:hover { text-decoration: underline }
--></style>
%(head_text)s
</head>
<body>
%(body_text)s
</body>
</html>
''' % {'body_text': body_text, 'head_text': head_text or ''}
    

if __name__ == '__main__':
    PDFServer().dispatch()
