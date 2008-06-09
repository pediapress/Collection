#! /usr/bin/env python

"""This script is meant to be called as a cron-job every few hours to clean up
old cache directories from pdfserver.py.
"""

import os
import re
import shutil
import sys
import time

max_age = 2*60*60 # 2 hours

def clean(cachedir):
    now = time.time()
    count = 0
    for d in os.listdir(cachedir):
        path = os.path.join(cachedir, d)
        if not os.path.isdir(path) or not re.match(r'^[0-9a-z]+$', d):
            continue
        if now - os.stat(path).st_mtime < max_age:
            continue
        try:
            print 'Removing directory %r.' % path
            shutil.rmtree(path)
            count += 1
        except Exception, e:
            print >>sys.stderr, 'Could not remove directory %r: %s' % (path, e)
    return count

def main(argv=None):
    if argv is None:
        argv = sys.argv
    if len(argv) != 2:
        sys.exit('Usage: %s CACHEDIR' % argv[0])
    cachedir = argv[1]
    if not os.path.isdir(cachedir):
        sys.exit('%r is not a directory' % cachedir)
    count = clean(cachedir)
    if count > 0:
        print 'Removed %d directories.' % count
    else:
        print 'There was nothing to be done.'

if __name__ == '__main__':
    main()
