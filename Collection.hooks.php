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

class CollectionHooks {
	/**
	 * SkinTemplateBuildNavUrlsNav_urlsAfterPermalink hook
	 */
	static function createNavURLs( &$skinTemplate, &$nav_urls, &$revid1, &$revid2 ) {
		global $wgArticle;
		global $wgRequest;
		global $wgCollectionFormats;
		global $wgCollectionPortletForLoggedInUsersOnly, $wgUser;

		if( $wgCollectionPortletForLoggedInUsersOnly && !$wgUser->isLoggedIn() ) {
			return true;
		}

		wfLoadExtensionMessages( 'CollectionCore' );

		$action = $wgRequest->getVal('action');

		if ( $skinTemplate->iscontent && ( $action == '' || $action == 'view' || $action == 'purge' ) ) {
			if ( self::_isCollectionPage( $skinTemplate->mTitle, $wgArticle ) ) {
				$params = 'colltitle=' . wfUrlencode( $skinTemplate->mTitle->getPrefixedDBKey() );
				if ( isset( $wgCollectionFormats['rl'] ) ) {
					$nav_urls['printable_version_pdf'] = array(
						'href' => SkinTemplate::makeSpecialUrlSubpage(
							'Book',
							'render_collection/',
							$params . '&writer=rl'),
						'text' => wfMsg( 'coll-printable_version_pdf' ),
					);
				}
				foreach ( $wgCollectionFormats as $writer => $name ) {
				}
			} else {
				$params = 'arttitle=' . $skinTemplate->mTitle->getPrefixedURL();
				if( $wgArticle ) {
					$oldid = $wgArticle->getOldID();
					if ( $oldid ) {
						$params .= '&oldid=' . $oldid;
					} else {
						$params .= '&oldid=' . $wgArticle->getLatest();
					}
				}
				if ( isset( $wgCollectionFormats['rl'] ) ) {
					$nav_urls['printable_version_pdf'] = array(
						'href' => SkinTemplate::makeSpecialUrlSubpage(
							'Book',
							'render_article/',
							$params . '&writer=rl' ),
						'text' => wfMsg( 'coll-printable_version_pdf' )
					);
				}
			}
		}
		return true;
	}

	/**
	 * MonoBookTemplateToolboxEnd hook
	 */
	static function insertMonoBookToolboxLink( &$skinTemplate ) {
		global $wgCollectionFormats;

		if ( !empty( $skinTemplate->data['nav_urls']['printable_version_pdf']['href'] ) ) {
			$href = htmlspecialchars( $skinTemplate->data['nav_urls']['printable_version_pdf']['href'] );
			$label = htmlspecialchars( $skinTemplate->data['nav_urls']['printable_version_pdf']['text'] );
			print <<<EOS

				<li id="t-download-as-pdf"><a href="$href" rel="nofollow">$label</a></li>
EOS
			;
		}
		return true;
	}

	/**
	 * Callback for hook SkinBuildSidebar (MediaWiki >= 1.14)
	 */
	static function buildSidebar( $skin, &$bar ) {
		global $wgArticle;
		global $wgUser;
		global $wgCollectionPortletForLoggedInUsersOnly;

		if( !$wgCollectionPortletForLoggedInUsersOnly || $wgUser->isLoggedIn() ) {
			// We don't want this sidebar gadget polluting the HTTP caches.
			// To stay on the safe side for now, we'll show this only for
			// logged-in users.
			//
			// In theory this could be managed properly for open sessions,
			// but you'd have to inject something for non-open sessions or
			// it would be very confusing.
			$html = self::getPortlet();
			if ( $html ) {
				$bar[ 'coll-create_a_book' ] = $html;
			}
		}
		return true;
	}

	/**
	 * This function is the fallback solution for MediaWiki < 1.14
	 * (where the hook SkinBuildSidebar does not exist)
	 */
	static function printPortlet() {
		wfLoadExtensionMessages( 'CollectionCore' );

		$html = self::getPortlet();

		if ( $html ) {
			$portletTitle = wfMsgHtml( 'coll-create_a_book' );
			print <<<EOS
<div id="p-collection" class="portlet">
	<h5>$portletTitle</h5>
		<div class="pBody">
EOS
			;
			print $html;
			print '</div></div>';
		}
	}

	/**
	 * Return HTML-code to be inserted as portlet
	 */
	static function getPortlet( $ajaxHint='' ) {
		global $wgArticle;
		global $wgTitle;
		global $wgOut;
		global $wgRequest;
		global $wgCollectionArticleNamespaces;
		global $wgJsMimeType;
		global $wgScriptPath;
		global $wgCollectionStyleVersion;
		global $wgCollectionNavPopupJSURL;
		global $wgCollectionNavPopupCSSURL;

		wfLoadExtensionMessages( 'CollectionCore' );

		if (!$ajaxHint) {
			// we need to re-construct a title object from the request, because
			// the "subpage" (i.e. "par") part has been stripped of by SpecialPage.php
			// in $wgTitle.
			$origTitle = Title::newFromUrl($wgRequest->getVal('title'));
			if (!is_null($origTitle)
				&& $origTitle->getLocalUrl() == SkinTemplate::makeSpecialUrl('Book')) {
				return;
			}
		}

		$addArticle = wfMsgHtml( 'coll-add_page' );
		$addArticleTooltip = wfMsgHtml( 'coll-add_page_tooltip' );
		$removeArticle = wfMsgHtml( 'coll-remove_page' );
		$removeArticleTooltip = wfMsgHtml( 'coll-remove_page_tooltip' );
		$addCategory = wfMsgHtml( 'coll-add_category' );
		$addCategoryTooltip = wfMsgHtml( 'coll-add_category_tooltip' );
		$loadCollection = wfMsgHtml( 'coll-load_collection' );
		$loadCollection = wfMsgHtml( 'coll-load_collection_tooltip' );
		$namespace = $wgTitle->getNamespace();

		$numArticles = CollectionSession::countArticles();
		$showShowAndClearLinks = true;
		$addRemoveState = '';

		$out = '<ul id="collectionPortletList">';

		if ( self::_isCollectionPage( $wgTitle, $wgArticle) ) {
			$params = "colltitle=" . $wgTitle->getPrefixedUrl();
			$href = htmlspecialchars( SkinTemplate::makeSpecialUrlSubpage(
				'Book',
				'load_collection/',
				$params ) );
			$out .= "<li><a href=\"$href\" rel=\"nofollow\" title=\"$loadCollectionTooltip\">$loadCollection</a></li>";
			$showShowAndClearLinks = false;

		} else if ( $ajaxHint == 'addcategory' || $namespace == NS_CATEGORY ) {
			$addRemoveState = 'addcategory';
			$params = "cattitle=" . $wgTitle->getPartialURL();
			$href = htmlspecialchars( SkinTemplate::makeSpecialUrlSubpage(
				'Book',
				'add_category/',
				$params ) );
			$out .= <<<EOS
<li>
<a href="$href" onclick="collectionCall('AddCategory', ['addcategory', wgTitle]); return false;" rel="nofollow" title="$addCategoryTooltip">$addCategory</a>
</li>
EOS
			;

		} else if ( $ajaxHint || in_array( $namespace, $wgCollectionArticleNamespaces ) ) {
			$params = "arttitle=" . $wgTitle->getPrefixedUrl();
			if ( !is_null( $wgArticle ) ) {
				$oldid = $wgArticle->getOldID();
				$params .= "&oldid=" . $oldid;
			} else {
				$oldid = null;
			}

			$addLink = false;
			if ( $ajaxHint == 'removepage' ) {
				$addLink = false;
			} else if ( $ajaxHint == 'addpage') {
				$addLink = true;
			} else if ( CollectionSession::findArticle( $wgTitle->getPrefixedText(), $oldid ) == -1 ) {
				$addLink = true;
			}
			if ( $addLink ) {
				$addRemoveState = 'addpage';
				$href = htmlspecialchars( SkinTemplate::makeSpecialUrlSubpage(
					'Book',
					'add_article/',
					$params ) );
				$out .= <<<EOS
<li>
	<a href="$href" onclick="collectionCall('AddArticle', ['removepage', wgNamespaceNumber, wgTitle, $oldid]); return false;" rel="nofollow" title="$addArticleTooltip">$addArticle</a>
</li>
EOS
				;
			} else {
				$addRemoveState = 'removepage';
				$href = htmlspecialchars( SkinTemplate::makeSpecialUrlSubpage(
					'Book',
					'remove_article/',
					$params ) );
				$out .= <<<EOS
<li>
	<a href="$href" onclick="collectionCall('RemoveArticle', ['addpage', wgNamespaceNumber, wgTitle, $oldid]); return false;" rel="nofollow" title="$removeArticleTooltip">$removeArticle</a>
</li>
EOS
				;
			}
		}

		if ( $showShowAndClearLinks && $numArticles > 0 ) {
			global $wgLang;
			$articles = wfMsgExt( 'coll-n_pages', array( 'parsemag' ), $wgLang->formatNum( $numArticles ) );
			$showCollection = wfMsgHtml( 'coll-show_collection' );
			$showCollectionTooltip = wfMsgHtml( 'coll-show_collection_tooltip' );
			$showURL = htmlspecialchars( SkinTemplate::makeSpecialUrl( 'Book') );
			$out .= <<<EOS
							<li><a href="$showURL" rel="nofollow" title="$showCollectionTooltip">$showCollection<br />
								($articles)</a></li>
EOS
			;

			$clearCollection = wfMsgHtml( 'coll-clear_collection' );
			$clearCollectionTooltip = wfMsgHtml( 'coll-clear_collection_tooltip' );
			$params = 'return_to=' . $wgTitle->getFullURL();
			$href = htmlspecialchars( SkinTemplate::makeSpecialUrlSubpage(
				'Book',
				'clear_collection/',
				$params ) );
			$msg = htmlspecialchars( wfMsg( 'coll-clear_collection_confirm' ) );
			$out .= <<<EOS
<li>
	<a href="$href" onclick="if (confirm('$msg')) return true; else return false;" rel="nofollow" title="$clearCollectionTooltip">$clearCollection</a>
</li>
EOS
			;
		}

		$helpCollections = wfMsgHtml( 'coll-help_collections' );
		$helpCollectionsTooltip = wfMsgHtml( 'coll-help_collections_tooltip' );
		$helpURL = htmlspecialchars( Title::newFromText( wfMsgForContent( 'coll-helppage' ) )->getFullURL() );
		$out .= <<<EOS
							<li><a href="$helpURL" title="$helpCollectionsTooltip">$helpCollections</a></li>
EOS
		;

		$out .= <<<EOS
</ul>
<script type="text/javascript">
/* <![CDATA[ */
	wgCollectionAddRemoveState = '$addRemoveState';
/* ]]> */
</script>
<script type="text/javascript" src="$wgScriptPath/extensions/Collection/collection/portlet.js?$wgCollectionStyleVersion"></script>
EOS
		;

		// activate popup check:
		if ( $wgCollectionNavPopupJSURL && $wgCollectionNavPopupCSSURL ) {
			$addPageText = wfMsg( 'coll-add_page_popup' );
			$addCategoryText = wfMsg( 'coll-add_category_popup' );
			$removePageText = wfMsg( 'coll-remove_page_popup' );
			$popupHelpText = wfMsg( 'coll-popup_help_text' );
			$out .= <<<EOS
<script type="text/javascript">
/* <![CDATA[ */
	wgCollectionNavPopupJSURL = '$wgCollectionNavPopupJSURL';
  wgCollectionNavPopupCSSURL = '$wgCollectionNavPopupCSSURL';
  wgCollectionAddPageText = '$addPageText';
  wgCollectionAddCategoryText = '$addCategoryText';
  wgCollectionRemovePageText = '$removePageText';
  wgCollectionPopupHelpText = '$popupHelpText';
	wgCollectionArticleNamespaces = [
EOS
			;
			$out .= implode( ', ', $wgCollectionArticleNamespaces );
			$out .= <<<EOS
];
/* ]]> */
</script>
<script type="text/javascript" src="$wgScriptPath/extensions/Collection/collection/json2.js?$wgCollectionStyleVersion"></script>
<script type="text/javascript" src="$wgScriptPath/extensions/Collection/collection/popupcheck.js?$wgCollectionStyleVersion"></script>
EOS
			;
		}

		return $out;
	}

	/**
	 * OutputPageCheckLastModified hook
	 */
	static function checkLastModified( $modifiedTimes ) {
		if ( CollectionSession::hasSession() && isset( $_SESSION['wsCollection']['timestamp'] ) ) {
			$modifiedTimes['collection'] = $_SESSION['wsCollection']['timestamp'];
		}
		return true;
	}

	static function _isCollectionPage( $title, $article ) {
		global $wgCommunityCollectionNamespace;

		if ( is_null( $title ) || is_null( $article ) ) {
			return false;
		}

		$ns = $title->getNamespace();
		if( $ns == NS_USER || $ns == $wgCommunityCollectionNamespace ) {
			wfLoadExtensionMessages( 'CollectionCore' );
			return self::pageInCategory( $article->getId(), wfMsgForContent( 'coll-bookscategory' ) );
		} else {
			return false;
		}
	}

	static protected function pageInCategory( $pageId, $categoryName ) {
		$dbr = wfGetDB( DB_SLAVE );
		$count = $dbr->selectField( 'categorylinks', 'COUNT(*)',
			array(
				'cl_from' => $pageId,
				'cl_to' => $categoryName ),
			__METHOD__ );
		return ($count > 0);
	}
}
