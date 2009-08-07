<?php

/*
 * Collection Extension for MediaWiki
 *
 * Copyright (C) PediaPress GmbH
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
	 * Callback for hook SkinBuildSidebar (MediaWiki >= 1.14)
	 */
	static function buildSidebar( $skin, &$bar ) {
		global $wgUser;
		global $wgCollectionPortletForLoggedInUsersOnly;

		if( !$wgCollectionPortletForLoggedInUsersOnly || $wgUser->isLoggedIn() ) {
			$html = self::getPortlet();
			if( $html ) {
				$bar[ 'coll-print_export' ] = $html;
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
			$portletTitle = wfMsg( 'coll-print_export' );
			print "<div id=\"p-coll-print_export\" class=\"portlet\">
	<h5>$portletTitle</h5>
		<div class=\"pBody\">\n$html\n</div></div>";
		}
	}

	/**
	 * Return HTML-code to be inserted as portlet
	 */
	static function getPortlet() {
		global $wgArticle;
		global $wgRequest;
		global $wgTitle;
		global $wgUser;
		global $wgCollectionArticleNamespaces;
		global $wgCollectionFormats;
		global $wgCollectionPortletFormats;
		global $wgScriptPath;
		
		$namespace = $wgTitle->getNamespace();

		if ( !in_array( $namespace, $wgCollectionArticleNamespaces )
			&& $namespace != NS_CATEGORY ) {
			return false;
		}

		$action = $wgRequest->getVal('action');
		if( $action != '' && $action != 'view' && $action != 'purge' ) {
			return false;
		}

		wfLoadExtensionMessages( 'CollectionCore' );

		$sk = $wgUser->getSkin();

		$out = Xml::element( 'ul', array( 'id' => 'collectionPortletList' ), null );

		$out .= Xml::tags( 'li',
			array( 'id' => 'coll-create_a_book' ),
			$sk->link(
				SpecialPage::getTitleFor( 'Book', 'book_mode/' ),
				wfMsgHtml( 'coll-create_a_book' ),
				array(
					'rel' => 'nofollow',
					'title' => wfMsg( 'coll-create_a_book_tooltip' )
				),
				array( 'referer' => $wgTitle->getPrefixedText() ),
				array( 'known', 'noclasses' )
			)
		);

		$params = array( 'arttitle' => $wgTitle->getPrefixedText() );

		if( $wgArticle ) {
			$oldid = $wgArticle->getOldID();
			if ( $oldid ) {
				$params['oldid'] = $oldid;
			} else {
				$params['oldid'] = $wgArticle->getLatest();
			}
		}

		foreach ( $wgCollectionPortletFormats as $writer ) {
			$params['writer'] = $writer;
			$out .= Xml::tags( 'li',
				array( 'id' => 'coll-download-as-' . $writer ),
				$sk->link(
					SpecialPage::getTitleFor( 'Book', 'render_article/' ),
					wfMsgHtml( 'coll-download_as', htmlspecialchars( $wgCollectionFormats[$writer] ) ),
					array(
						'rel' => 'nofollow',
						'title' => wfMsg( 'coll-download_as_tooltip', $wgCollectionFormats[$writer] )
					),
					$params,
					array( 'known', 'noclasses' )
				)
			);
		}

		$out .= Xml::closeElement( 'ul' );

		return $out;
	}

	/**
	 * Callback for hook SiteNoticeAfter
	 */
	static function renderBookModeBox( &$siteNotice ) {
		global $wgArticle;
		global $wgCollectionArticleNamespaces;
		global $wgCollectionNavPopups;
		global $wgCollectionStyleVersion;
		global $wgCollectionVersion;
		global $wgJsMimeType;
		global $wgRequest;
		global $wgScriptPath;
		global $wgTitle;
		global $wgUser;

		$namespace = $wgTitle->getNamespace();

		$action = $wgRequest->getVal('action');
		if( $action != '' && $action != 'view' && $action != 'purge' ) {
			return true;
		}

		if ( !in_array( $namespace, $wgCollectionArticleNamespaces )
			&& $namespace != NS_CATEGORY ) {
			return true;
		}

		if ( !CollectionSession::hasSession()
			|| !$_SESSION['wsCollection']['enabled'] ) {
			return true;
		}

		wfLoadExtensionMessages( 'CollectionCore' );

		$sk = $wgUser->getSkin();
		$jsPath = "$wgScriptPath/extensions/Collection/js";
		$imagePath = "$wgScriptPath/extensions/Collection/images";
		$ptext = $wgTitle->getPrefixedText();
		$oldid = $wgArticle->getOldID();
		if ( !$oldid  || $oldid == $wgArticle->getLatest() ) {
			$oldid = 0;
		} 
		$html = '';

		$html .= Xml::element( 'script', 
			array(
				'type' => $wgJsMimeType,
				'src' => "$jsPath/bookmode.js?$wgCollectionStyleVersion",
			),
			'', false
		);
		
		// activate popup check:
		if ( $wgCollectionNavPopups ) {
			if ( $namespace == NS_CATEGORY ) {
				$addRemoveState = 'addcategory';
			} else if ( CollectionSession::findArticle( $ptext, $oldid ) == -1 ) {
				$addRemoveState = 'addarticle';
			} else {
				$addRemoveState = 'removearticle';
			}
			$html .= Skin::makeVariablesScript(
				array(
					'wgCollectionNavPopupJSURL' => "$jsPath/Gadget-popups.js?$wgCollectionStyleVersion",
					'wgCollectionNavPopupCSSURL' => "$jsPath/Gadget-navpop.css?$wgCollectionStyleVersion",
					'wgCollectionAddPageText' => wfMsg( 'coll-add_page_popup' ),
					'wgCollectionAddCategoryText' => wfMsg( 'coll-add_category_popup' ),
					'wgCollectionRemovePageText' => wfMsg( 'coll-remove_page_popup' ),
					'wgCollectionArticleNamespaces' => $wgCollectionArticleNamespaces,
					'wgCollectionAddRemoveState' => $addRemoveState,
				)
			);
			$html .= Xml::element( 'script',
				array(
					'type' => $wgJsMimeType,
					'src' => "$jsPath/json2.js?$wgCollectionStyleVersion"
				),
				'', false
			);
			$html .= Xml::element( 'script',
				array(
					'type' => $wgJsMimeType,
					'src' => "$jsPath/popupcheck.js?$wgCollectionStyleVersion"
				),
				'', false
			);
		}


		$html .= Xml::element( 'div',
			array( 'style' => wfMsg( 'coll-book_mode_box_style' ) ),
			null
		);

		$html .= Xml::element( 'img',
			array(
				'src' => "$imagePath/Open_book.png?$wgCollectionStyleVersion",
				'alt' => '',
				'width' => '80',
				'height' => '45',
				'style' => 'float: left; margin-right: 10px',
			),
			'',
			true
		);

		$html .= Xml::tags( 'div',
			array( 'style' => 'margin-bottom: 0.2em;' ),
			Xml::tags( 'div',
				array( 'style' => 'float: right' ),
				$sk->link(
					Title::newFromText( wfMsg( 'coll-helppage' ) ),
					Xml::element('img',
						array(
							'src' => "$imagePath/silk-help.png",
							'alt' => '',
							'width' => '16',
							'height' => '16',
							'style' => 'vertical-align: text-bottom;',
						)
					)
					. '&nbsp;' . wfMsgHtml( 'coll-help' ),
					array( 
						'rel' => 'nofollow',
						'title' => wfMsg( 'coll-help_tooltip' ),
					),
					array(),
					array( 'known', 'noclasses' )
				)
			)
			. Xml::tags( 'strong',
				array( 'style' => 'font-size: 1.0em' ),
				wfMsgHtml( 'coll-book_mode' )
			)
			. ' ('
			. $sk->link(
				SpecialPage::getTitleFor( 'Book', 'stop_book_mode/' ),
				wfMsgHtml( 'coll-disable' ),
				array(
					'rel' => 'nofollow',
					'title' => wfMsg( 'coll-disable_tooltip' ),
				),
				array( 'referer' => $ptext ),
				array( 'known', 'noclasses' )
			)
			. ')'
		);

		$html .= Xml::tags( 'div',
			array(
				'id' => 'coll-book_mode_box',
				'style' => 'margin-bottom: 0.2em;',
			),
			self::getBookModeBoxContent( $addRemoveState, $oldid )
	 	);

		$html .= Xml::closeElement( 'div' );

		$siteNotice .= $html;
		return true;
	}

	static function getBookModeBoxContent( $ajaxHint=null, $oldid=null ) {
		global $wgArticle;
		global $wgJsMimeType;
		global $wgUser;
		global $wgTitle;
		global $wgScriptPath;

		wfLoadExtensionMessages( 'CollectionCore' );

		$namespace = $wgTitle->getNamespace();
		$ptext = $wgTitle->getPrefixedText();

		if ( is_null( $oldid) && !is_null( $wgArticle ) ) {
			$oldid = $wgArticle->getOldID();
			if ( !$oldid  || $oldid == $wgArticle->getLatest() ) {
				$oldid = 0;
			} 
		}

		$sk = $wgUser->getSkin();
		$imagePath = "$wgScriptPath/extensions/Collection/images";

		$html = '';

		if ( $ajaxHint == 'addcategory' || $namespace == NS_CATEGORY ) {
			$id = 'coll-add_category';
			$subpage = 'add_category/';
			$icon = 'silk-add.png';
			$captionMsg = 'coll-add_category';
			$tooltipMsg = 'coll-add_category_tooltip';
			$query = array( 'cattitle' => $wgTitle->getText() );
			$onclick = "collectionCall('AddCategory', ['addcategory', wgTitle]); return false;";
		} else {
			if ( $ajaxHint == 'addarticle'
				|| ($ajaxHint == '' && CollectionSession::findArticle( $ptext, $oldid ) == -1) ) {
				$id = 'coll-add_article';
				$subpage = 'add_article/';
				$icon = 'silk-add.png';
				$captionMsg = 'coll-add_this_page';
				$tooltipMsg = 'coll-add_page_tooltip';
				$query = array( 'arttitle' => $ptext, 'oldid' => $oldid );
				$onclick = "collectionCall('AddArticle', ['removearticle', wgNamespaceNumber, wgTitle, $oldid]); return false;";
			} else {
				$id = 'coll-remove_article';
				$subpage = 'remove_article/';
				$icon = 'silk-remove.png';
				$captionMsg = 'coll-remove_this_page';
				$tooltipMsg = 'coll-remove_page_tooltip';
				$query = array( 'arttitle' => $ptext, 'oldid' => $oldid );
				$onclick = "collectionCall('RemoveArticle', ['addarticle', wgNamespaceNumber, wgTitle, $oldid]); return false;";
			}
		}
		$html .= $sk->link(
			SpecialPage::getTitleFor( 'Book', $subpage ),
			Xml::element('img',
				array(
					'src' => "$imagePath/$icon",
					'alt' => '',
					'width' => '16',
					'height' => '16',
					'style' => 'vertical-align: text-bottom',
				)
			)
			. '&nbsp;' . wfMsgHtml( $captionMsg ),
			array(
				'id' => $id,
				'rel' => 'nofollow',
				'title' => wfMsg( $tooltipMsg ),
				'onclick' => $onclick,
			),
			$query,
			array( 'known', 'noclasses' )
		);

		$numArticles = CollectionSession::countArticles();
		$html .= $sk->link(
			SpecialPage::getTitleFor( 'Book' ),
			Xml::element('img',
				array(
					'src' => "$imagePath/silk-book_open.png",
					'alt' => '',
					'width' => '16',
					'height' => '16',
					'style' => 'vertical-align: text-bottom',
				)
			)
			. '&nbsp;' . wfMsgHtml( 'coll-show_collection' )
				. ' (' . wfMsgHtml( 'coll-n_pages', $numArticles ) . ')',
			array(
				'rel' => 'nofollow',
				'title' => wfMsg( 'coll-show_collection_tooltip' ),
				'style' => 'margin-left: 10px',
			),
			array(),
			array( 'known', 'noclasses' )
		);

		return $html;
	}

	/**
	* OutputPageCheckLastModified hook
	*/
	static function checkLastModified( $modifiedTimes ) {
		if ( CollectionSession::hasSession() ) {
			$modifiedTimes['collection'] = $_SESSION['wsCollection']['timestamp'];
		}
		return true;
	}
}

