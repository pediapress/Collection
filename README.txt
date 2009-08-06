.. -*- mode: rst; coding: utf-8 -*-

====================================
*Collection* Extension for MediaWiki
====================================

About the *Collection* Extension
================================

The *Collection* extension for MediaWiki_ allows users to collect articles and
generate PDFs for article collections and single articles.

The extension has been developed for and tested with MediaWiki_ version 1.13
and later. Some features may not be avaialable with older MediaWikis or with
MediaWikis that don't have the `MediaWiki API`_ enabled. One example is that
MediaWikis < 1.13 don't have the capability to edit articles via API, thus
saving of collections is disabled.

The extension is being developed under the GNU General Public License by
`PediaPress GmbH`_ in close collaboration with `Wikimedia Foundation`_
and the `Commonwealth of Learning`_.

Copyright (C) 2008-2009, PediaPress GmbH

Prerequisites
=============

Install PHP with cURL support
-----------------------------

Currently Collection extension needs PHP with cURL support,
see http://de2.php.net/manual/en/book.curl.php

Install and Setup a Render Server
---------------------------------

PDF and ZIP file generation is done by a server, which can run separately
from the MediaWiki installation and can be shared by different MediaWikis.
See the ``mw-serve`` command or the ``mwlib.cgi`` script in the mwlib_
distribution.

If you use a a render server the `MediaWiki API`_ must be enabled
(i.e. just don't override the default value of ``true`` for ``$wgEnableApi``
in your ``LocalSettings.php``).

If you have a low-traffic MediaWiki you can use the public render server running
at http://tools.pediapress.com/mw-serve/. In this case, just keep
the configuration variable $wgCollectionMWServeURL (see below) at its default
value.


Installation and Configuration of the Collection Extension
==========================================================

* Checkout the *Collection* extension from the Subversion repository into the
  ``extensions`` directory of your *MediaWiki* installation::

    cd extensions/
    svn co http://svn.mediawiki.org/svnroot/mediawiki/trunk/extensions/Collection

* Put this line in your ``LocalSettings.php``::

    require_once("$IP/extensions/Collection/Collection.php");

  and set the following global variables accordingly:

  *$wgCollectionMWServeURL (string)*
   Set this to the URL of a render server (see above).

   The default is ``"http://tools.pediapress.com/mw-serve/"``,
   a public render server for low-traffic MediaWikis hosted by PediaPress.

   Note that the MediaWiki must be accessible from the render server, i.e. if
   your MediaWiki is behind a firewall you cannot use the public render server.

  *$wgCollectionMWServeCert (string)*
   Filename of a SSL certificate in PEM format for the mw-serve render server.
   This needs to be used for self-signed certificates, otherwise CURL will
   throw an error. The default is null, i.e. no certificate.

  *$wgCollectionMWServeCredentials (string)*
   Set this to a string of the form "USERNAME:PASSWORD" (or
   "USERNAME:PASSWORD:DOMAIN" if you're using LDAP), if the MediaWiki
   requires to be logged in to view articles.
   The render server will then login with these credentials using MediaWiki API
   before doing other requests.

   SECURITY NOTICE: If the MediaWiki and the render server communicate over an
   insecure channel (for example on an unencrypted channel over the internet), please
   DO NOT USE THIS SETTING, as the credentials will be exposed to eavesdropping!

  *$wgCollectionFormats*
   An array mapping names of mwlib_ writers to the name of the produced format.
   The default value is::

       array(
           'rl' => 'PDF',
       )

   i.e. only PDF enabled. If you want to add OpenDocument Text in addition to
   PDF you can set $wgCollectionFormats to something like this::

       $wgCollectionFormats = array(
           'rl' => 'PDF',
           'odf' => 'ODT',
       );

   On the public render server tools.pediapress.com, currently the following
   writers are available:

   * docbook: DocBook XML
   * odf: OpenDocument Text
   * rl: PDF
   * xhtml: XHTML 1.0 Transitional

   If you're using your own render server, the list of available writers can be
   listed with the following mwlib_ command::

     $ mw-render --list-writers

	*$wgCollectionPortletFormats (array)*
	 An array containing formats (keys in $wgCollectionFormats) that shall be
	 displayed as "Download as XYZ" links in the "Print/export" portlet.
	 The default value is::

	     array( 'pdf' );

	 i.e. there's one link "Download as PDF".

  *$wgCollectionArticleNamespaces (array)*
   List of namespace numbers for pages which can be added to a collection.
   Category pages (NS_CATEGORY) are always an exception (all articles in a
   category are added, not the category page itself). Default is::

     array(
     	NS_MAIN,
     	NS_TALK,
     	NS_USER,
     	NS_USER_TALK,
     	NS_PROJECT,
     	NS_PROJECT_TALK,
     	NS_MEDIAWIKI,
     	NS_MEDIAWIKI_TALK,
     	100,
     	101,
     	102,
     	103,
     )

  *$wgCommunityCollectionNamespace (integer)*
   Namespace for "community collections", i.e. the namespace where non-personal
   article collection pages are saved.

   Default is ``NS_PROJECT``.

  *$wgCollectionMaxArticles (integer)*
   Maximum number of articles allowed in a collection.

   Default is 500.

  *$wgCollectionLicenseName (string or null)*
   License name for articles in this MediaWiki.
   If set to ``null`` the localized version of the word "License" is used.

   Default is null.

  *$wgCollectionLicenseURL (string or null)*
   HTTP URL of an article containing the full license text in wikitext format
   for articles in this MediaWiki. E.g.

       $wgCollectionLicenseURL = 'http://en.wikipedia.org/w/index.php?title=Wikipedia:Text_of_the_GNU_Free_Documentation_License&action=raw';

   for the GFDL.
   If set to null, the standard MediaWiki variables $wgRightsPage,
   $wgRightsUrl and $wgRightsText are used for license information.

   If your MediaWiki contains articles with different licenses, make sure
   that each article contains the name of the license and set $wgCollectionLicenseURL
   to an article that contains all needed licenses.

* This step is needed for MediaWiki version < 1.14 (at the time of writing
  version 1.14 has not been released):

  Add a portlet to the skin of your *MediaWiki* installation: Just before the line::

    <div class="portlet" id="p-tb">

  in the file ``skins/MonoBook.php`` or ``skins/Modern.php`` insert
  the following code::

    <?php
      if(isset($GLOBALS['wgSpecialPages']['Book'])) {
         CollectionHooks::printPortlet();
      }
    ?>

  *$wgCollectionNavPopups (bool)*
   Flag controlling whether popups to easily add/remove linked articles to your
   collection are enabled.
   
   The Collection popups are only active if

   * JavaScript is enabled,
   * book creator mode is enabled,
   * the current user didn't enable the "Navigation popup gadget" on the MediaWiki
     (see http://en.wikipedia.org/wiki/Navpop) which would result in conflicting
     popups.  

   Default is true, i.e. the Collection popups are enabled.

* If you want to let users save their collections as wiki pages, make sure
  $wgEnableWriteAPI is set to true, i.e. put this line in your LocalSettings.php::

    $wgEnableWriteAPI = true;

  (This is the default for MediaWiki >= 1.14.).

  There are two MediaWiki rights that are checked, before users are allowed
  to save collections: To be able to save collection pages under the User
  namespace, users must have the right 'collectionsaveasuserpage'; to be able
  to save collection pages under the community namespace
  (see $wgCommunityCollectionNamespace), users must have the right
  'collectionsaveascommunitypage'. For example, if all logged-in users shall
  be allowed to save collection pages under the User namespace, but only
  autoconfirmed users, shall be allowed to save collection pages under the
  community namespace, add this to your LocalSettings.php::

    $wgGroupPermissions['user']['collectionsaveasuserpage'] = true;
    $wgGroupPermissions['autoconfirmed']['collectionsaveascommunitypage'] = true;

* As the current collection of articles is stored in the session, the session
  timeout should be set to some sensible value (at least a few hours, maybe
  one day). Adjust session.cookie_lifetime and session.gc_maxlifetime in your
  ``php.ini`` accordingly.

* Add a help page (for example ``Help:Books`` for wikis in English language).
  A repository of help pages in different languages can be found on
  `Meta-Wiki`_.

.. _mwlib: http://code.pediapress.com/wiki/wiki/mwlib
.. _MediaWiki: http://www.mediawiki.org/
.. _`PediaPress GmbH`: http://pediapress.com/
.. _`Wikimedia Foundation`: http://wikimediafoundation.org/
.. _`Commonwealth of Learning`: http://www.col.org/
.. _`MediaWiki API`: http://www.mediawiki.org/wiki/API
.. _`Meta-Wiki`: http://meta.wikimedia.org/wiki/Book_tool/Help/Books
