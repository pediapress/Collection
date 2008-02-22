.. -*- mode: rst; coding: utf-8 -*-

====================================
*Collection* Extension for MediaWiki
====================================

About the *Collection* Extension
================================

The *Collection* extension for MediaWiki_ allows users to collect articles and
generate PDFs for article collections and single articles.

The extension is being developed under the GNU General Public License by
`PediaPress GmbH`_ in close collaboration with `Wikimedia Foundation`_
and the `Commonwealth of Learning`_.

Copyright (C) 2008, PediaPress GmbH


Prerequisites
=============

PDF generation is done with Python_ scripts from the *mwlib* and *mwlib.rl*
distributions which require at least Python 2.5 and two other Python packages:
*PIL* and *ReportLab*.

*PIL*
 Install *PIL* (Pyhon Imaging Library) from
 http://www.pythonware.com/products/pil/.

*ReportLab*
 Download and install ReportLab_ from the Subversion repository::

    svn co http://www.reportlab.co.uk/svn/public/reportlab/trunk reportlab
    cd reportlab
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

 Edit ``example-mwlib.config`` and copy it to some place where you store
 system-wide configuration files (e.g. ``/etc/mwlib.config``).


Installation and Configuration
==============================

* Checkout the *Collection* extension from the Subversion repository into the
  ``extensions`` directory of your *MediaWiki* installation::
  
    cd extensions/
    svn co http://svn.mediawiki.org/svnroot/mediawiki/trunk/extensions/Collection

* Put this line in your ``LocalSettings.php``::

    require_once("$IP/extensions/Collection/Collection.php");

  and set the following global variables accordingly:

  *$wgMWPDFCommand (string)*
   Set this to the path of the ``mw-pdf`` script installed by with *mwlib.rl*.
   
   The default is just ``"mw-pdf"``, assuming that the script is in the system
   ``PATH`` for executables.

  *$wgMWLibConfig (string)*
   The configuration file used by ``mw-pdf`` and ``mw-zip``.
   
   The default is "``/etc/mwlib.config"``.

  *$wgCommunityCollectionNamespace (integer)*
   Namespace for "community collections", i.e. the namespace where non-personal
   article collection pages are saved.
   
   Example: If you keep the default, ``NS_MEDIAWIKI`` and have a non-localized
   (i.e. English) *MediaWiki* installation, collections are saved as subpages of
   ``MediaWiki:Collections``.
   
   Default is ``NS_MEDIAWIKI``.
  
  *$wgCollectionMaxArticles (integer)*
   Maximum number of articles allowed in a collection.
   
   Default is 500.

* Copy or symlink the directory ``collection/`` contained in the directory of
  the *Collection* extension into the ``skins/common`` directory of your
  *MediaWiki* installation.

* Just before the line::

    <div class="portlet" id="p-tb">

  in the file ``skins/MonoBook.php`` of your *MediaWiki* installation insert
  the following code::

    <?php
      if(isset($GLOBALS['wgSpecialPages']['Collection'])) {
         Collection::printPortlet();
      }
    ?>

* If your MediaWiki installation is configured to limit the resources of
  externally executed script (which is the default!), you may want to increase
  the parameter ``max_execution_time`` in your ``php.ini`` to several minutes,
  e.g. to a value of 300 (seconds) yielding a maximal execution time of
  5 minutes, because the generation of PDF files containing many articles can
  sometimes take a while.
  
  Also, the global MediaWiki variables $wgMaxShellMemory and $wgMaxShellFileSize
  (limiting the memory and disk usage of external scripts) might need to be
  adjusted, to higher values.

* Add a page ``Help:Collections`` with the wikitext from the supplied file
  ``Help_Collections.txt``.

.. _MediaWiki: http://www.mediawiki.org/
.. _`PediaPress GmbH`: http://pediapress.com/
.. _Python: http://www.python.org/
.. _ReportLab: http://www.reportlab.co.uk/
.. _`Wikimedia Foundation`: http://wikimediafoundation.org/
.. _`Commonwealth of Learning`: http://www.col.org/
