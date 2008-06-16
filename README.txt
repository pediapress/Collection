.. -*- mode: rst; coding: utf-8 -*-

====================================
*Collection* Extension for MediaWiki
====================================

About the *Collection* Extension
================================

The *Collection* extension for MediaWiki_ allows users to collect articles and
generate PDFs for article collections and single articles.

The extension has been developed for and tested with MediaWiki_ version 1.11
and later.

The extension is being developed under the GNU General Public License by
`PediaPress GmbH`_ in close collaboration with `Wikimedia Foundation`_
and the `Commonwealth of Learning`_.

Copyright (C) 2008, PediaPress GmbH

Prerequisites
=============

Install PHP with cURL support
-----------------------------

Currently Collection extension needs PHP with cURL support,
see http://de2.php.net/manual/en/book.curl.php

Install and Setup a PDF Server
------------------------------

PDF and ZIP file generation is done by a PDF Server, which can run separately
from the MediaWiki installation and can be shared by different MediaWikis.

See ``README.txt`` in the ``pdf-server`` directory for further instructions
how to setup a PDF server.

If you have a low-traffic MediaWiki you can use the public PDF Server running
at http://tools.pediapress.com/cgi-bin/pdfserver.py. In this case, just keep
the configuration variable $wgPDFServer (see below) at its default value.


Installation and Configuration of the Collection Extension
==========================================================

* Checkout the *Collection* extension from the Subversion repository into the
  ``extensions`` directory of your *MediaWiki* installation::
  
    cd extensions/
    svn co http://svn.mediawiki.org/svnroot/mediawiki/trunk/extensions/Collection

* Put this line in your ``LocalSettings.php``::

    require_once("$IP/extensions/Collection/Collection.php");

  and set the following global variables accordingly:

  *$wgPDFServer (string)*
   Set this to the URL of the PDF Server CGI script.
   
   The default is ``"http://tools.pediapress.com/cgi-bin/pdfserver.py"``,
   a public PDF Server for low-traffic MediaWikis.
  
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
  
  *$wgLicenseArticle (string)*
   Title of an article containing the full license text for articles in this
   MediaWiki. For a Wikimedia Commons wiki this could be ``Wikipedia:GFDL``.
   
   Default is ``MediaWiki:GFDL``
   
   If your MediaWiki contains articles with different licenses, make sure
   that each article contains the name of the license and set $wgLicenseArticle
   to an article that contains all needed licenses.
   
   PDF files do not contain the actual title of this license article,
   but the value of the standard MediaWiki variable $wgRightsText (configurable
   in LocalSettings.php).
  
  *$wgPDFTemplateBlackList (string)*
   Title of an article containing blacklisted templates, i.e. templates that
   should be excluded for PDF generation.
   
   Default is ``MediaWiki:PDF Template Blacklist``

* Add a portlet to the skin of your *MediaWiki* installation: Just before the line::

    <div class="portlet" id="p-tb">

  in the file ``skins/MonoBook.php`` or ``skins/Modern.php`` insert
  the following code::

    <?php
      if(isset($GLOBALS['wgSpecialPages']['Collection'])) {
         Collection::printPortlet();
      }
    ?>

* As the current collection of articles is stored in the session, the session
  timeout should be set to some sensible value (at least a few hours, maybe
  one day). Adjust session.cookie_lifetime and session.gc_maxlifetime in your
  ``php.ini`` accordingly.

* Add a page ``Help:Collections`` with the wikitext from the supplied file
  ``Help_Collections.txt``. Adjust the name of the template blacklist according
  to your setting of $wgPDFTemplateBlackList (see above).

.. _MediaWiki: http://www.mediawiki.org/
.. _`PediaPress GmbH`: http://pediapress.com/
.. _`Wikimedia Foundation`: http://wikimediafoundation.org/
.. _`Commonwealth of Learning`: http://www.col.org/
