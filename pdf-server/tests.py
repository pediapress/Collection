#! /usr/bin/env py.test

import os
import shutil
import simplejson
from StringIO import StringIO
import sys
import tempfile
import time

import pdfserver

def setup_module(module):
    pdfserver.cache_dir = tempfile.mkdtemp()
    fd, pdfserver.mwpdf_logfile = tempfile.mkstemp()
    os.close(fd)
    fd, pdfserver.mwzip_logfile = tempfile.mkstemp()
    os.close(fd)

def teardown_module(module):
    shutil.rmtree(pdfserver.cache_dir)
    os.unlink(pdfserver.mwpdf_logfile)
    os.unlink(pdfserver.mwzip_logfile)

class FakeFieldStorage(object):
    def __init__(self, data):
        self.data = data
    
    def getvalue(self, name):
        return self.data.get(name)
    
def make_call(data):
    s = pdfserver.PDFServer(FakeFieldStorage(data))
    
    sio = StringIO()
    sys.stdout, old_stdout = sio, sys.stdout
    s.dispatch()
    sys.stdout = old_stdout
    
    in_headers = True
    content_type = None
    content_length = 0
    content = []
    for line in sio.getvalue().split('\n'):
        if in_headers:
            if not line:
                in_headers = False
            else:
                name, value = line.lower().split(' ', 1)
                if name == 'content-type:':
                    content_type = value
                if name == 'content-length:':
                    content_length = int(value)
        else:
            content.append(line)
    content = '\n'.join(content)
    assert len(content) == content_length, 'invalid content_length: %d != %d' % (len(content), content_length)
    if content_type == 'application/json':
        return simplejson.loads(content)
    elif content_type == 'application/pdf':
        return 'pdf'
    else:
        raise RuntimeError('unexpected content_type %r' % content_type)
    

def test_no_command():
    result = make_call({})
    assert 'no command' in result['error']

def test_missings_args():
    for cmd in ('pdf_generate', 'zip_post'):
        result = make_call({
            'command': cmd,
        })
        assert 'argument required' in result['error']

def test_no_collection_id():
    result = make_call({
        'command': 'pdf_status',
    })
    assert 'collection ID' in result['error']

def test_pdf_generate():
    result = make_call({
        'command': 'pdf_generate',
        'base_url': 'http://en.wikipedia.org/w/',
        'metabook': simplejson.dumps({
            'title': 'A Title',
            'subtitle': 'A Subtitle',
            'items': [
                {
                    'type': 'article',
                    'title': 'Main page',
                }
            ]
        }),
        'license': 'Wikipedia:GFDL',
    })
    collection_id = result['collection_id']
    last_progress = -1
    while True:
        time.sleep(0.5)
        result = make_call({
            'command': 'pdf_status',
            'collection_id': collection_id,
        })
        assert result['collection_id'] == collection_id
        if result['state'] == 'progress':
            progress = result['progress']
            print 'progress:', progress
            assert progress >= last_progress
            last_progress = progress
        elif result['state'] == 'finished':
            break
        else:
            print result
            raise RuntimeError('unexpected state %r' % result['state'])
    
    result = make_call({
        'command': 'pdf_download',
        'collection_id': collection_id,
    })
    assert result == 'pdf'

def test_zip_post():
    result = make_call({
        'command': 'zip_post',
        'base_url': 'http://en.wikipedia.org/w/',
        'metabook': simplejson.dumps({
            'title': 'A Title',
            'subtitle': 'A Subtitle',
            'items': [
                {
                    'type': 'article',
                    'title': 'Main page',
                }
            ]
        }),
        'license': 'Wikipedia:GFDL',
        'post_url': 'http://localhost:1234/',
    })
    print result
    assert result['state'] == 'ok'
