<?php

/*
 * Collection Extension for MediaWiki
 *
 * Copyright (C) 2008, PediaPress GmbH
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */


# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install the Collection extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/Collection/Collection.php" );
EOT;
	exit( 1 );
}

require_once( "$IP/extensions/Collection/Version.php" );

# ==============================================================================

# Configuration:

/** URL of mw-serve render server */

if ( !isset( $wgCollectionMWServerURL ) ) {
	$wgCollectionMWServeURL = 'http://tools.pediapress.com/mw-serve/';
}

/** Login credentials to this MediaWiki as 'USERNAME:PASSWORD' string */
if ( !isset( $wgCollectionMWServeCredentials ) ) {
	$wgCollectionMWServeCredentials = null;
}

/** Namespace for "community collections" */
if ( !isset( $wgCommunityCollectionNamespace ) ) {
	$wgCommunityCollectionNamespace = NS_MEDIAWIKI;
}

/** Maximum no. of articles in a collection */
if ( !isset( $wgCollectionMaxArticles ) ) {
	$wgCollectionMaxArticles = 500;
}

/** Name of license */
if ( !isset( $wgLicenseName ) ) {
	$wgLicenseName = null;
}

/** HTTP(s) URL pointing to license in wikitext format: */
if ( !isset( $wgLicenseURL ) ) {
	$wgLicenseURL = null;
}

/** Template blacklist article */
if ( !isset( $wgPDFTemplateBlacklist ) ) {
	$wgPDFTemplateBlacklist = 'MediaWiki:PDF Template Blacklist';
}

/** Template exclusion category */
if ( !isset( $wgCollectionTemplateExclusionCategory ) ) {
	$wgCollectionTemplateExclusionCategory = "Exclude in print";
}

/** List of available download formats,
    as mapping of mwlib writer to format name */
if ( !isset( $wgCollectionFormats ) ) {
	$wgCollectionFormats = array(
		'rl' => 'PDF',
	);
}

if ( !isset( $wgCollectionPortletForLoggedInUsersOnly ) ) {
	$wgCollectionPortletForLoggedInUsersOnly = false;
}

# ==============================================================================


$wgExtensionCredits['specialpage'][] = array(
	'name' => 'Collection',
	'version' => '1.1',
	'author' => 'PediaPress GmbH',
	'url' => 'http://www.mediawiki.org/wiki/Extension:Collection',
	'description' => 'Collect articles, generate PDFs',
	'descriptionmsg' => 'coll-desc',
);

# register Special:Collection:

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['Collection'] = $dir . 'Collection.body.php';
$wgExtensionMessagesFiles['Collection'] = $dir . 'Collection.i18n.php';
$wgExtensionAliasesFiles['Collection'] = $dir . 'Collection.alias.php';
$wgSpecialPages['Collection'] = 'Collection';

$wgHooks['SkinTemplateBuildNavUrlsNav_urlsAfterPermalink'][] = 'Collection::createNavURLs';
$wgHooks['MonoBookTemplateToolboxEnd'][] = 'Collection::insertMonoBookToolboxLink';
$wgHooks['SkinBuildSidebar'][] = 'Collection::buildSidebar';
$wgHooks['OutputPageCheckLastModified'][] = 'Collection::checkLastModified';

# register global Ajax functions:

function wfAjaxGetCollection() {
	$json = new Services_JSON();
	if ( isset( $_SESSION['wsCollection'] ) ) {
		$collection = $_SESSION['wsCollection'];
	} else {
		$collection = array();
	}
	return $json->encode( array( 'collection' => $collection ) );
}

$wgAjaxExportList[] = 'wfAjaxGetCollection';

function wfAjaxPostCollection( $collection='' ) {
	$json = new Services_JSON( SERVICES_JSON_LOOSE_TYPE );
	if( session_id() == '' ) {
		wfSetupSession();
	}
	$collection = $json->decode( $collection );
	$_SESSION['wsCollection'] = $collection;
	return $json->encode( array( 'collection' => $collection ) );
}

$wgAjaxExportList[] = 'wfAjaxPostCollection';
