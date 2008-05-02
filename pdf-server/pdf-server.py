#! /usr/bin/env python

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
mwzip_cmd = '/usr/local/bin/mw-zip'

# Logfile for mw-zip.
mwzip_logfile = '/var/log/mw-zip.log'

# Directory for error dumps.
traceback_logdir = '/tmp'

# ==============================================================================
# END OF CONFIGURATION
# ==============================================================================




# TODOs:
# * progress (percentage) for do_pdf_status()


if traceback_logdir is not None:
    import cgitb
    cgitb.enable(display=0, logdir=traceback_logdir)

import cgi
import md5
import os
import re
import StringIO
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
        assert re.match(r'^[a-z0-9]+$', self.collection_id)
        self.collection_dir = os.path.join(cache_dir, self.collection_id)
        self.metabook_filename = os.path.join(self.collection_dir, 'metabook.json')
        self.pdf_filename = os.path.join(self.collection_dir, 'collection.pdf')
        self.error_filename = os.path.join(self.collection_dir, 'errors.txt')
        self.removed_filename = os.path.join(self.collection_dir, 'removed.txt')
        self.generating_templ_filename = os.path.join(self.collection_dir, 'generating.html')
        self.finished_templ_filename = os.path.join(self.collection_dir, 'finished.html')
        self.removed_templ_filename = os.path.join(self.collection_dir, 'removed.html')
        self.error_templ_filename = os.path.join(self.collection_dir, 'error.html')
        
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
            'removed': self.removed_filename,
            'output': self.pdf_filename,
        }
        
        os.makedirs(self.collection_dir)
        metabook = self.form.getvalue('metabook')
        open(self.metabook_filename, 'wb').write(metabook)
        rc = os.system('%(cmd)s --daemonize -l %(logfile)s -e %(errorfile)s -m %(metabook)s -b %(base_url)s -s %(shared_base_url)s --license %(license)s --template-blacklist %(template_blacklist)s -r $(removed)s -o %(output)s' % args)
        assert rc == 0, 'Execution of mw-pdf failed.'
        
        open(self.generating_templ_filename, 'wb').write(self.form.getvalue('generating_template'))
        open(self.finished_templ_filename, 'wb').write(self.form.getvalue('finished_template'))
        open(self.removed_templ_filename, 'wb').write(self.form.getvalue('removed_template'))
        open(self.error_templ_filename, 'wb').write(self.form.getvalue('error_template'))
        
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
            html = open(self.finished_templ_filename, 'rb').read()
            if os.path.exists(self.removed_filename):
                html += open(self.removed_templ_filename, 'rb').read() % {
                    'articles': open(self.removed_filename, 'rb').read()
                }
            self.render_html(html.replace('http://URL', url))
        elif os.path.exists(self.error_filename):
            html = open(self.error_templ_filename, 'rb').read()
            self.render_html(html)
        else:
            query_args = urllib.urlencode({
                'command': 'pdf_status',
                'collection_id': self.collection_id,
            })
            meta = '<meta http-equiv="refresh" content="5; url=?%s">' % query_args
            html = open(self.generating_templ_filename, 'rb').read()
            self.render_html(html, head_text=meta)
    
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
