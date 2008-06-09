.. -*- mode: rst; coding: utf-8 -*-

=================================================
PDF Server for the MediaWiki Collection Extension
=================================================

About the PDF Server
====================

The PDF Server is a CGI Python_ script that allows MediaWiki_ installations
with the *Collection* extension to generate PDFs from articles and article
collections and to POST them to a print-on-demand partner to order printed
books.

The software is being developed under the GNU General Public License by
`PediaPress GmbH`_ in close collaboration with `Wikimedia Foundation`_
and the `Commonwealth of Learning`_.

Copyright (C) 2008, PediaPress GmbH


Prerequisites
=============

The software for this PDF Server uses Python_ scripts from the *mwlib* and
*mwlib.rl* distributions which require at least Python 2.5 and two other
Python packages: *PIL* and *ReportLab*.

*PIL*
 Install *PIL* (Pyhon Imaging Library) from
 http://www.pythonware.com/products/pil/.

*ReportLab*
 Download and install ReportLab_ from the Subversion repository::

    svn co http://www.reportlab.co.uk/svn/public/reportlab/trunk reportlab
    cd reportlab/reportlab
    python setup.py install

*mwlib*
 You need to have setuptools/easy_install installed.
 Installation should be as easy as typing::

    easy_install mwlib

 If you don't have setuptools installed, download the source package from
 http://code.pediapress.com/, unpack it and run::

    python setup.py install

*mwlib.rl*
 Install *mwlib.rl* with ``easy_install``::

    easy_install mwlib.rl

 or get the code from http://code.pediapress.com/ and install it with::

    python setup.py install
  
Installation and Configuration
==============================

Copy pdfserver.py to your directory containing CGI files (e.g.
"/usr/lib/cgi-bin/" on a default Apache install on Debian GNU/Linux) make
sure it's executable and the CGI script of your web server is configured
appropriately. Adjust the configuration variables at the top of the script.
If necessary, adjust the first line of the script to point to a valid
Python interpreter (tested with Python 2.5, should work with Python >= 2.3).

Add a cron-job that executes the clean-cache.py script at regular intervals
(recommended is every few hours). Make sure the executed script has the
permissions to delete files and directories created by the CGI script.

If you installed Python software as egg files (e.g. when using easy_install
or setuptools) you might have to set the environment variable PYTHON_EGG_CACHE
for the user that PHP is running as to a directory with write access. For
example on Debian GNU/Linux, this user is www-data, the default egg cache
is /var/www/.python-eggs/ (because $HOME is /var/www/), and the user www-data
usually doesn't have write access in /var/www/.

One way to set environment variables is when configuring the path to ``mw-pdf``
and ``mw-zip`` in ``pdfserver.py``, e.g.::

 mwpdf_cmd = 'PYTHON_EGG_CACHE=/tmp/.python_eggs /usr/local/bin/mw-pdf'
 mwzip_cmd = 'PYTHON_EGG_CACHE=/tmp/.python_eggs /usr/local/bin/mw-zip'


.. _MediaWiki: http://www.mediawiki.org/
.. _Python: http://www.python.org/
.. _ReportLab: http://www.reportlab.co.uk/
.. _`PediaPress GmbH`: http://pediapress.com/
.. _`Wikimedia Foundation`: http://wikimediafoundation.org/
.. _`Commonwealth of Learning`: http://www.col.org/
