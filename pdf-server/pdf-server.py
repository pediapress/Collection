#! /usr/bin/env python

# TODOs:
# * progress for do_pdf_status()
# * i18n for all messages

# ==============================================================================
# CONFIGURATION
# ==============================================================================

# Full URL to this CGI script.
script_url = 'http://example/cgi-bin/pdf-server.py'

# Directory (with read/write access) for cached files.
# These files can be autmatically deleted with a cron-job running the
# accompanied script clean-cache.py.
cache_dir = '/var/cache/pdf-server/'

# Path to mw-pdf executable.
mwpdf_cmd = '/usr/local/bin/mw-pdf'

# Logfile for mw-pdf.
mwpdf_logfile = '/var/log/mw-pdf.log'

# Path to mw-zip executable.
mwzip_cmd = '/usr/local/bin/bin/mw-zip'

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
import sys
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
        # prevent evil guys from doing shit (collection_id is used as part of an fs path)
        assert re.match(r'^[a-z0-9]+$', self.collection_id)
        if self.collection_id is None:
            self.collection_id = uid()
        self.collection_dir = os.path.join(cache_dir, self.collection_id)
        self.metabook_filename = os.path.join(self.collection_dir, 'metabook.json')
        self.pdf_filename = os.path.join(self.collection_dir, 'collection.pdf')
        self.error_filename = os.path.join(self.collection_dir, 'errors.txt')
        
        getattr(self, 'do_%s' % self.form.getvalue('command'))()
        for k, v in self.headers.items():
            print '%s: %s' % (k, v)
        print 'Content-Length: %d' % len(self.content)
        print # end of headers
        print self.content
    
    #def do_None(self):
    #    self.render_html('It works.')
    
    def do_pdf_generate(self):
        args = {
            'cmd': mwpdf_cmd,
            'logfile': mwpdf_logfile,
            'errorfile': self.error_filename,
            'metabook': self.metabook_filename,
            'base_url': self.form.getvalue('base_url'),
            'shared_base_url': self.form.getvalue('shared_base_url'),
            'license': self.form.getvalue('license'),
            'template_blacklist': self.form.getvalue('template_blacklist'),
            'output': self.pdf_filename,
        }
        
        os.makedirs(self.collection_dir)
        metabook = self.form.getvalue('metabook')
        open(self.metabook_filename, 'wb').write(metabook)
        rc = os.system('%(cmd)s --daemonize -l %(logfile)s -e %(errorfile)s -m %(metabook)s -b %(base_url)s -s %(shared_base_url)s --license %(license)s --template-blacklist %(template_blacklist)s -o %(output)s' % args)
        assert rc == 0, 'Execution of mw-pdf failed.'
        
        self.headers['Content-Type'] = 'application/json'
        self.content = simplejson.dumps({
            'iframe_src': '%s?%s' % (
                script_url,
                urllib.urlencode({
                    'command': 'pdf_status',
                    'collection_id': self.collection_id
                }),
            ),
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
            html = '''<h1>Finished!</h1>
<a href="%s">Download PDF</a>
''' % url
            self.render_html(html)
            # TODO: nicer message.
        elif os.path.exists(self.error_filename):
            self.render_html('error' + open(self.error_filename).read())
             # TODO: print nicer error message
        else:
            query_args = urllib.urlencode({
                'command': 'pdf_status',
                'collection_id': self.collection_id,
            })
            meta = '<meta http-equiv="refresh" content="5; url=?%s">' % query_args
            self.render_html('generating PDF...', head_text=meta)
            # TODO: nicer message. progress percentage.
    
    def do_pdf_download(self):
        self.headers['Content-Type'] = 'application/pdf'
        self.headers['Content-Disposition'] = 'attachment; filename="collection.pdf"'
        self.content = open(self.pdf_filename).read()
    
    def do_zip_post(self):
        os.makedirs(self.collection_dir)
        args = {
            'cmd': mwzip_cmd,
            'logfile': mwzip_logfile,
            'metabook': self.metabook_filename,
            'base_url': self.form.getvalue('base_url'),
            'shared_base_url': self.form.getvalue('shared_base_url'),
            'license': self.form.getvalue('license'),
            'template_blacklist': self.form.getvalue('template_blacklist'),
            'post_url': self.form.getvalue('post_url'),
        }    
        open(self.metabook_filename, 'wb').write(self.form.getvalue('metabook'))
        rc = os.system('%(cmd)s --daemonize -l %(logfile)s -m %(metabook)s -b %(base_url)s -s %(shared_base_url)s --license %(license)s --template-blacklist %(template_blacklist)s -p %(post_url)s' % args)
        assert rc == 0, 'Execution of mw-zip failed.'
        
        self.content = 'OK'
    
    def render_html(self, body_text, head_text=None):
        self.headers['Content-Type'] = 'text/html'
        self.content = '''<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PDF Server</title>
%(head_text)s
</head>
<body>
%(body_text)s
</body>
</html>
''' % {'body_text': body_text, 'head_text': head_text or ''}
    

if __name__ == '__main__':
    PDFServer().dispatch()
