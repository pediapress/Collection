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
		if( method_exists( $skinTemplate, 'getTitle' ) ) {
			$title = $skinTemplate->getTitle();
		} else {
			$title = $skinTemplate->mTitle;
		}

		if( $skinTemplate->iscontent && ( $action == '' || $action == 'view' || $action == 'purge' ) ) {
			if( self::_isCollectionPage( $title, $wgArticle ) ) {
				$params = 'colltitle=' . wfUrlencode( $title->getPrefixedDBKey() );
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
				$params = 'arttitle=' . $title->getPrefixedURL();
				if( $wgArticle ) {
					$oldid = $wgArticle->getOldID();
					if ( $oldid ) {
						$params .= '&oldid=' . $oldid;
					} else {
						$params .= '&oldid=' . $wgArticle->getLatest();
					}
				}
				if( isset( $wgCollectionFormats['rl'] ) ) {
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

		if( isset( $skinTemplate->data['nav_urls']['printable_version_pdf'] ) ) {
			$href = htmlspecialchars( $skinTemplate->data['nav_urls']['printable_version_pdf']['href'] );
			$label = htmlspecialchars( $skinTemplate->data['nav_urls']['printable_version_pdf']['text'] );
			print "<li id=\"t-download-as-pdf\"><a href=\"$href\" rel=\"nofollow\">$label</a></li>";
		}
		return true;
	}

	/**
	 * Callback for hook SkinBuildSidebar (MediaWiki >= 1.14)
	 */
	static function buildSidebar( $skin, &$bar ) {
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
			if( $html ) {
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

		if( $html ) {
			$portletTitle = wfMsgHtml( 'coll-create_a_book' );
			print "<div id=\"p-collection\" class=\"portlet\">
	<h5>$portletTitle</h5>
		<div class=\"pBody\">\n$html\n</div></div>";
		}
	}

	/**
	 * Return HTML-code to be inserted as portlet
	 */
	static function getPortlet( $ajaxHint='' ) {
		global $wgArticle;
		global $wgTitle;
		global $wgUser;
		global $wgRequest;
		global $wgCollectionArticleNamespaces;
		global $wgScriptPath;
		global $wgCollectionStyleVersion;
		global $wgCollectionNavPopups;
		global $wgJsMimeType;
		
		$sk = $wgUser->getSkin();

		wfLoadExtensionMessages( 'CollectionCore' );

		if( !$ajaxHint ) {
			// we need to re-construct a title object from the request, because
			// the "subpage" (i.e. "par") part has been stripped off by SpecialPage.php
			// in $wgTitle.
			$origTitle = Title::newFromText($wgRequest->getVal('title'));
			if( $origTitle
				&& $origTitle->getLocalUrl() == SkinTemplate::makeSpecialUrl( 'Book' ) ) {
				return;
			}
		}

		$namespace = $wgTitle->getNamespace();

		$numArticles = CollectionSession::countArticles();
		$showShowAndClearLinks = true;
		$addRemoveState = '';

		$out = Xml::element( 'ul', array( 'id' => 'collectionPortletList' ), null );

		if( self::_isCollectionPage( $wgTitle, $wgArticle) ) {
			$out .= Xml::tags(
				'li',
				array( 'id' => 'coll-load_collection' ),
				$sk->link(
					SpecialPage::getTitleFor( 'Book', 'load_collection/' ),
					wfMsgHtml( "coll-load_collection" ),
					array(
						'rel' => 'nofollow',
						'title' => wfMsg( "coll-load_collection_tooltip" ),
					),
					array( 'colltitle' => $wgTitle->getPrefixedUrl() ),
					array( 'known', 'noclasses' )
				)
			);
			$showShowAndClearLinks = false;
		} elseif( $ajaxHint == 'addcategory' || $namespace == NS_CATEGORY ) {
			$addRemoveState = 'addcategory';
			$out .= Xml::tags(
				'li',
				array( 'id' => 'coll-add_category' ),
				$sk->link(
					SpecialPage::getTitleFor( 'Book', 'add_category/' ),
					wfMsgHtml( "coll-add_category" ),
					array(
						'onclick' => "collectionCall('AddCategory', ['addcategory', wgTitle]); return false;",
						'rel' => 'nofollow',
						'title' => wfMsg( "coll-add_category_tooltip" ),
					),
					array( 'cattitle' => $wgTitle->getText() ),
					array( 'known', 'noclasses' )
				)
			);
		} elseif( $ajaxHint || in_array( $namespace, $wgCollectionArticleNamespaces ) ) {
			$params = array( 'arttitle' => $wgTitle->getPrefixedText() );
			if ( !is_null( $wgArticle ) ) {
				$oldid = $wgArticle->getOldID();
				$params['oldid'] = $oldid;
			} else {
				$oldid = 0;
			}

			if ( $ajaxHint == 'addpage'
				|| ($ajaxHint != 'removepage'
					&& CollectionSession::findArticle( $wgTitle->getPrefixedText(), $oldid ) == -1 ) ) {
				$addRemoveState = 'addpage';
				$action  = 'add';
				$uaction = 'Add';
				$other_action = 'remove';
			} else {
				$addRemoveState = 'removepage';
				$action  = 'remove';
				$uaction = 'Remove';	
				$other_action = 'add';
			}

			$out .= Xml::tags(
				'li',
				array( 'id' => "coll-{$action}_page" ),
				$sk->link(
					SpecialPage::getTitleFor( 'Book', "{$action}_article/" ),
					wfMsgHtml( "coll-{$action}_page" ),
					array(
						'onclick' => "collectionCall('{$uaction}Article', ['{$other_action}page', wgNamespaceNumber, wgTitle, $oldid]); return false;",
						'rel' => 'nofollow',
						'title' => wfMsg( "coll-{$action}_page_tooltip" )
					),
					$params,
					array( 'known', 'noclasses' )
				)
			);
		}

		if( $showShowAndClearLinks && $numArticles > 0 ) {
			global $wgLang;
			$articles = wfMsgExt( 'coll-n_pages', array( 'parsemag' ), $wgLang->formatNum( $numArticles ) );
			$out .= Xml::tags(
				'li',
				array( 'id' => 'coll-show_collection' ),
				$sk->link(
					SpecialPage::getTitleFor( 'Book' ),
					wfMsgHtml( 'coll-show_collection' ) . "<br />($articles)" ,
					array(
						'rel' => 'nofollow',
						'title' => wfMsg( 'coll-show_collection_tooltip' )
					),
					array(),
					array( 'known', 'noclasses' )
				)
			);
			$msg = Xml::encodeJsVar( wfMsg( 'coll-clear_collection_confirm' ) );
			$out .= Xml::tags(
				'li',
				array( 'id' => 'coll-clear_collection' ),
				$sk->link(
					SpecialPage::getTitleFor( 'Book', 'clear_collection/' ),
					wfMsgHtml( "coll-clear_collection" ),
					array(
						'onclick' => "if (confirm($msg)) return true; else return false;",
						'rel' => 'nofollow',
						'title' => wfMsg( "coll-clear_collection_tooltip" )
					),
					array( 'return_to' => $wgTitle->getPrefixedText() ),
					array( 'known', 'noclasses' )
				)
			);
		}

		$out .= Xml::tags(
			'li',
			array( 'id' => 'coll-help_collections' ),
			$sk->link(
				Title::newFromText( wfMsgForContent( 'coll-helppage' ) ),
				wfMsgHtml( 'coll-help_collections' ),
				array( 'title' => wfMsg( 'coll-help_collections_tooltip' ) ),
				array(),
				array( 'known', 'noclasses' )
			)
		);
		$out .= '</ul>';
		$out .= Skin::makeVariablesScript(
			array( 'wgCollectionAddRemoveSate' => $addRemoveState )
		);
		$out .= Xml::element(
			'script', 
			array(
				'type' => $wgJsMimeType,
				'src' => "$wgScriptPath/extensions/Collection/collection/portlet.js?$wgCollectionStyleVersion",
			),
			'',
			false
		);

		// activate popup check:
		if ( $wgCollectionNavPopups ) {
			$out .= Skin::makeVariablesScript(
				array(
					'wgCollectionNavPopupJSURL' => "$wgScriptPath/extensions/Collection/collection/Gadget-popups.js?$wgCollectionStyleVersion",
					'wgCollectionNavPopupCSSURL' => "$wgScriptPath/extensions/Collection/collection/Gadget-navpop.css?$wgCollectionStyleVersion",
					'wgCollectionAddPageText' => wfMsg( 'coll-add_page_popup' ),
					'wgCollectionAddCategoryText' => wfMsg( 'coll-add_category_popup' ),
					'wgCollectionRemovePageText' => wfMsg( 'coll-remove_page_popup' ),
					'wgCollectionPopupHelpText' => wfMsg( 'coll-popup_help_text' ),
					'wgCollectionArticleNamespaces' => $wgCollectionArticleNamespaces,
				)
			);
			$out .= Xml::element(
				'script',
				array(
					'type' => $wgJsMimeType,
					'src' => "$wgScriptPath/extensions/Collection/collection/json2.js?$wgCollectionStyleVersion"
				),
				'',
				false
			);
			$out .= Xml::element(
				'script',
				array(
					'type' => $wgJsMimeType,
					'src' => "$wgScriptPath/extensions/Collection/collection/popupcheck.js?$wgCollectionStyleVersion"
				),
				'',
				false
			);
		}

		return $out;
	}

	/**
	 * OutputPageCheckLastModified hook
	 */
	static function checkLastModified( $modifiedTimes ) {
		if( CollectionSession::hasSession() && isset( $_SESSION['wsCollection']['timestamp'] ) ) {
			$modifiedTimes['collection'] = $_SESSION['wsCollection']['timestamp'];
		}
		return true;
	}

	static function _isCollectionPage( $title, $article ) {
		global $wgCommunityCollectionNamespace;

		if( is_null( $title ) || is_null( $article ) ) {
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
		$exists = $dbr->selectField(
			'categorylinks',
			'1',
			array(
				'cl_from' => $pageId,
				'cl_to' => $categoryName
			),
			__METHOD__
		);
		return (bool)$exists;
	}
}
