<?php

/*
 * Collection Extension for MediaWiki
 *
 * Copyright (C) 2008-2009, PediaPress GmbH
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

class SpecialCollection extends SpecialPage {
	var $mPODPartners = array(
		'pediapress' => array(
			'name' => 'PediaPress',
			'url' => 'http://pediapress.com/',
			'posturl' => 'http://pediapress.com/api/collections/',
		),
	);

	public function __construct() {
		parent::__construct( "Book" );
	}

	function getDescription() {
		return wfMsg( 'coll-collection' );
	}

	function execute( $par ) {
		global $wgOut;
		global $wgRequest;
		global $wgUser;
		global $wgContLang;
		global $wgCommunityCollectionNamespace;
		global $wgCollectionMaxArticles;

		wfLoadExtensionMessages( 'CollectionCore' );
		wfLoadExtensionMessages( 'Collection' );

		switch ( $par ) {
			case 'add_article/':
				if ( CollectionSession::countArticles() >= $wgCollectionMaxArticles ) {
					self::limitExceeded();
					return;
				}
				$oldid = $wgRequest->getInt( 'oldid', 0 );
				$title = Title::newFromText( $wgRequest->getVal( 'arttitle', '' ) );
				if ( !$title ) {
					return;
				}
				if ( self::addArticle( $title, $oldid ) ) {
					if ( $oldid == 0 ) {
						$redirectURL = $title->getFullURL();
					} else {
						$redirectURL = $title->getFullURL( 'oldid=' . $oldid );
					}
					$wgOut->redirect( $redirectURL );
				} else {
					$wgOut->showErrorPage(
						'coll-couldnotaddarticle_title',
						'coll-couldnotaddarticle_msg'
					);
				}
				return;
			case 'remove_article/':
				$oldid = $wgRequest->getInt( 'oldid', 0 );
				$title = Title::newFromText( $wgRequest->getVal( 'arttitle', '' ) );
				if ( !$title ) {
					return;
				}
				if ( self::removeArticle( $title, $oldid ) ) {
					if ( $oldid == 0 ) {
						$redirectURL = $title->getFullURL();
					} else {
						$redirectURL = $title->getFullURL( 'oldid=' . $oldid );
					}
					$wgOut->redirect( $redirectURL );
				} else {
					$wgOut->showErrorPage(
						'coll-couldnotremovearticle_title',
						'coll-couldnotremovearticle_msg'
					);
				}
				return;
			case 'clear_collection/':
				CollectionSession::clearCollection();
				$redirect = $wgRequest->getVal( 'return_to' );
				$redirectURL = SkinTemplate::makeSpecialUrl( 'Book' );
				if ( !empty( $redirect ) ) {
					$title = Title::newFromText( $redirect );
					if ( $title ) {
						$redirectURL = $title->getFullURL();
					}
				}
				$wgOut->redirect( $redirectURL );
				return;
			case 'set_titles/':
				self::setTitles( $wgRequest->getText( 'collectionTitle', '' ), $wgRequest->getText( 'collectionSubtitle', '') );
				$wgOut->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'sort_items/':
				self::sortItems();
				$wgOut->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'add_category/':
				$title = Title::makeTitleSafe( NS_CATEGORY, $wgRequest->getVal( 'cattitle', '' ) );
				if ( self::addCategory( $title ) ) {
					self::limitExceeded();
					return;
				} else {
					$wgOut->redirect( $wgRequest->getVal( 'return_to', $title->getFullURL() ) );
				}
				return;
			case 'remove_item/':
				self::removeItem( $wgRequest->getInt( 'index', 0 ) );
				$wgOut->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'move_item/':
				self::moveItem( $wgRequest->getInt( 'index', 0 ), $wgRequest->getInt( 'delta', 0 ) );
				$wgOut->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'load_collection/':
				$title = Title::newFromText( $wgRequest->getVal( 'colltitle', '' ) );
				if ( !$title ) {
					return;
				}
				if ( $wgRequest->getVal( 'cancel' ) ) {
					$wgOut->redirect( $title->getFullURL() );
					return;
				}
				if ( !CollectionSession::countArticles()
					 || $wgRequest->getVal( 'overwrite' )
					 || $wgRequest->getVal( 'append' ) ) {
					$collection = $this->loadCollection( $title, $wgRequest->getVal( 'append' ) );
					if ( $collection ) {
						CollectionSession::startSession();
						$_SESSION['wsCollection'] = $collection;
						$wgOut->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
					}
					return;
				}
				$this->renderLoadOverwritePage( $title );
				return;
			case 'order_collection/':
				$title = Title::newFromText( $wgRequest->getVal( 'colltitle', '' ) );
				if ( !$title ) {
					return;
				}
				$collection = $this->loadCollection( $title );
				$partner = $wgRequest->getVal( 'partner', key( $this->mPODPartners ) );
				return $this->postZIP( $collection, $partner );
			case 'save_collection/':
				if ( $wgRequest->getVal( 'abort' ) ) {
					$wgOut->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
					return;
				}
				if ( !$wgUser->matchEditToken( $wgRequest->getVal( 'token' ) ) ) {
					return;
				}
				$colltype = $wgRequest->getVal( 'colltype' );
				if ( $colltype == 'personal' ) {
					$collname = $wgRequest->getVal( 'pcollname' );
					if ( !$wgUser->isAllowed( 'collectionsaveasuserpage' ) || empty( $collname ) ) {
						return;
					}
					$userPageTitle = $wgUser->getUserPage()->getPrefixedText();
					$title = Title::newFromText(
						$userPageTitle . '/' . wfMsgForContent( 'coll-collections' ) . '/' . $collname
					);
				} elseif ( $colltype == 'community' ) {
					$collname = $wgRequest->getVal( 'ccollname' );
					if ( !$wgUser->isAllowed( 'collectionsaveascommunitypage' ) || empty( $collname ) ) {
						return;
					}
					$title = Title::makeTitle(
						$wgCommunityCollectionNamespace,
						wfMsgForContent( 'coll-collections' ) . '/' . $collname
					);
				}
				if ( !$title ) {
					return;
				}
				if ( $this->saveCollection( $title, $wgRequest->getBool( 'overwrite' ) ) ) {
					$wgOut->redirect( $title->getFullURL() );
				} else {
					$this->renderSaveOverwritePage(
						$colltype,
						$title,
						$wgRequest->getVal( 'pcollname' ),
						$wgRequest->getVal( 'ccollname' )
					);
				}
				return;
			case 'render/':
				return $this->renderCollection(
					$_SESSION['wsCollection'],
					Title::newFromText( $wgContLang->specialPage( 'Book' ) ),
					$wgRequest->getVal( 'writer', '' )
				);
			case 'forcerender/':
				$this->forceRenderCollection();
				return;
			case 'rendering/':
				$this->renderRenderingPage();
				return;
			case 'download/':
				$this->download();
				return;
			case 'render_article/':
				$title = Title::newFromText( $wgRequest->getVal( 'arttitle', '' ) );
				if ( !$title ) {
					return;
				}
				$oldid = $wgRequest->getInt( 'oldid', 0 );
				$this->renderArticle( $title, $oldid, $wgRequest->getVal( 'writer', 'rl' ) );
				return;
			case 'render_collection/':
				$title = Title::newFromText( $wgRequest->getVal( 'colltitle', '' ));
				if ( !$title ) {
					return;
				}
				$collection = $this->loadCollection( $title );
				if ( $collection ) {
					$this->renderCollection( $collection, $title, $wgRequest->getVal( 'writer', 'rl' ) );
				}
				return;
			case 'post_zip/':
				$partner = $wgRequest->getVal( 'partner', 'pediapress' );
				$this->postZIP( $_SESSION['wsCollection'], $partner );
				return;
			case '':
				$this->renderSpecialPage();
				return;
			default:
				$wgOut->showErrorPage( 'coll-unknown_subpage_title', 'coll-unknown_subpage_text' );
		}
		return;
	}

	function renderSpecialPage() {
		global $wgCollectionFormats;
		global $wgCollectionVersion;
		global $wgCollectionStyleVersion;
		global $wgJsMimeType;
		global $wgScriptPath;
		global $wgOut;

		if ( !CollectionSession::hasSession() ) {
			CollectionSession::startSession();
		}

		$this->setHeaders();
		$wgOut->addInlineScript( "var wgCollectionVersion = \"$wgCollectionVersion\";" );
		$wgOut->addScript( "<script type=\"$wgJsMimeType\" src=\"$wgScriptPath/extensions/Collection/collection/jquery.js?$wgCollectionStyleVersion\"></script>" );
		$wgOut->addScript( "<script type=\"$wgJsMimeType\" src=\"$wgScriptPath/extensions/Collection/collection/jquery.ui.js?$wgCollectionStyleVersion\"></script>" );
		$wgOut->addInlineScript( "jQuery.noConflict();" );
		$wgOut->addScript( "<script type=\"$wgJsMimeType\" src=\"$wgScriptPath/extensions/Collection/collection/collection.js?$wgCollectionStyleVersion\"></script>" );

		$template = new CollectionPageTemplate();
		$template->set( 'collection', $_SESSION['wsCollection'] );
		$template->set( 'podpartners', $this->mPODPartners );
		$template->set( 'formats', $wgCollectionFormats);
		$wgOut->addTemplate( $template );
	}

	static function setTitles( $title, $subtitle ) {
		$collection = $_SESSION['wsCollection'];
		$collection['title'] = $title;
		$collection['subtitle'] = $subtitle;
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
	}

	static function title_cmp($a, $b) {
		return strcasecmp($a['title'], $b['title']);
	}

	static function sortItems() {
		$collection = $_SESSION['wsCollection'];
		$articles = array();
		$new_items = array();
		foreach ( $collection['items'] as $item ) {
			if ( $item['type'] == 'chapter' ) {
				usort( $articles, array( __CLASS__, 'title_cmp' ) );
				$new_items = array_merge( $new_items, $articles, array( $item ) );
				$articles = array();
			} elseif ( $item['type'] == 'article' ) {
				$articles[] = $item;
			}
		}
		usort( $articles, array( __CLASS__, 'title_cmp' ) );
		$collection['items'] = array_merge( $new_items, $articles );
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
	}

	static function addChapter( $name ) {
		$collection = $_SESSION['wsCollection'];
		array_unshift( $collection['items'], array(
			'type' => 'chapter',
			'title' => $name,
		) );
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
	}

	static function renameChapter( $index, $name ) {
		if (!is_int( $index ) ) {
			return;
		}
		$collection = $_SESSION['wsCollection'];
		if ( $collection['items'][$index]['type'] != 'chapter' ) {
			return;
		}
		$collection['items'][$index]['title'] = $name;
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
	}

	static function addArticleFromName( $namespace, $name, $oldid=0 ) {
		$title = Title::makeTitleSafe( $namespace, $name );
		if (!$title) return false;
		return self::addArticle( $title, $oldid );
	}

	static function addArticle( $title, $oldid=0 ) {
		$article = new Article( $title, $oldid );
		$latest = $article->getLatest();

		$currentVersion = 0;
		if ( $oldid == 0 ) {
			$currentVersion = 1;
			$oldid = $latest;
		}
		$index = CollectionSession::findArticle( $title->getPrefixedText(), $oldid );
		if ( $index != -1 ) {
			return false;
		}

		if ( !CollectionSession::hasSession() ) {
			CollectionSession::startSession();
		}
		$collection = $_SESSION['wsCollection'];
		$revision = Revision::newFromTitle( $title, $oldid );
		$collection['items'][] = array(
			'type' => 'article',
			'content-type' => 'text/x-wiki',
			'title' => $title->getPrefixedText(),
			'revision' => strval( $oldid ),
			'latest' => strval( $latest ),
			'timestamp' => wfTimestamp( TS_UNIX, $revision->mTimestamp ),
			'url' => $title->getFullURL(),
			'currentVersion' => $currentVersion,
		);
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
		return true;
	}

	static function removeArticleFromName( $namespace, $name, $oldid=0 ) {
		$title = Title::makeTitleSafe( $namespace, $name );
		return self::removeArticle( $title, $oldid );
	}

	static function removeArticle( $title, $oldid=0 ) {
		if ( !CollectionSession::hasSession() ) {
			return false;
		}
		$collection = $_SESSION['wsCollection'];
		$index = CollectionSession::findArticle( $title->getPrefixedText(), $oldid );
		if ( $index != -1 ) {
			array_splice( $collection['items'], $index, 1 );
		}
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
		return true;
	}

	static function addCategoryFromName( $name ) {
		$title = Title::makeTitleSafe( NS_CATEGORY, $name );
		return self::addCategory( $title );
	}

	static function addCategory( $title ) {
		global $wgOut;
		global $wgCollectionMaxArticles;
		global $wgCollectionArticleNamespaces;

		$limit = $wgCollectionMaxArticles - CollectionSession::countArticles();
		if ( $limit <= 0 ) {
			self::limitExceeded();
			return;
		}
		$db = wfGetDB( DB_SLAVE );
		$tables = array( 'page', 'categorylinks' );
		$fields = array( 'cl_from', 'cl_sortkey', 'page_namespace', 'page_title' );
		$options = array(
			'USE INDEX' => 'cl_sortkey',
			'ORDER BY' => 'cl_sortkey',
			'LIMIT' => $limit + 1,
		);
		$where = array(
			'cl_from=page_id',
			'cl_to' => $title->getDBkey(),
		);
		$res = $db->select( $tables, $fields, $where, __METHOD__, $options );
		$members = array();
		$count = 0;
		$limitExceeded = false;
		while ( $row = $db->fetchObject( $res ) ) {
			if ( ++$count > $limit ) {
				$limitExceeded = true;
				break;
			}
			if ( in_array( $row->page_namespace, $wgCollectionArticleNamespaces ) ) {
				$articleTitle = Title::makeTitle( $row->page_namespace, $row->page_title );
				if ( CollectionSession::findArticle( $articleTitle->getPrefixedText() ) == -1 ) {
					self::addArticle( $articleTitle );
				}
			}
		}
		$db->freeResult( $res );
		return $limitExceeded;
	}

	static function limitExceeded() {
		global $wgOut;

		$wgOut->showErrorPage( 'coll-limit_exceeded_title', 'coll-limit_exceeded_text' );
	}

	static function removeItem( $index ) {
		if (!is_int( $index ) ) {
			return false;
		}
		if ( !CollectionSession::hasSession() ) {
			return false;
		}
		$collection = $_SESSION['wsCollection'];
		array_splice( $collection['items'], $index, 1 );
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
		return true;
	}

	static function moveItem( $index, $delta ) {
		if ( !CollectionSession::hasSession() ) {
			return false;
		}
		$collection = $_SESSION['wsCollection'];
		$saved = $collection['items'][$index + $delta];
		$collection['items'][$index + $delta] = $collection['items'][$index];
		$collection['items'][$index] = $saved;
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
		return true;
	}

	static function setSorting( $items ) {
		if ( !CollectionSession::hasSession() ) {
			return;
		}
		$collection = $_SESSION['wsCollection'];
		$old_items = $collection['items'];
		$new_items = array();
		foreach ($items as $new_index => $old_index) {
			$new_items[$new_index] = $old_items[$old_index];
		}
		$collection['items'] = $new_items;
		$_SESSION['wsCollection'] = $collection;
		CollectionSession::touchSession();
	}

	function parseCollectionLine( &$collection, $line, $append ) {
		$line = trim( $line );
		if ( !$append && preg_match( '/^===\s*(.*?)\s*===$/', $line, $match) ) {
			$collection['subtitle'] = $match[ 1 ];
		} elseif ( !$append && preg_match( '/^==\s*(.*?)\s*==$/', $line, $match) ) {
			$collection['title'] = $match[ 1 ];
		} elseif (substr( $line, 0, 1 ) == ';') { // chapter
			return array(
				'type' => 'chapter',
				'title' => trim( substr( $line, 1 ) ),
			);
		} elseif ( substr( $line, 0, 1 ) == ':' ) { // article
			$articleTitle = trim( substr( $line, 1 ) );
			if ( preg_match( '/\[\[:?(.*?)(\|(.*?))?\]\]/', $articleTitle, $match ) ) {
				$articleTitle = $match[1];
				$displayTitle = $match[3];
				$oldid = -1;
				$currentVersion = 1;
			} elseif ( preg_match( '/\[\{\{fullurl:(.*?)\|oldid=(.*?)\}\}\s+(.*?)\]/', $articleTitle, $match ) ) {
				$articleTitle = $match[1];
				$displayTitle = $match[3];
				$oldid = $match[2];
				$currentVersion = 0;
			}

			$articleTitle = Title::newFromText( $articleTitle );
			if( !$articleTitle ) {
				return null;
			}
			if ($oldid < 0) {
				$article = new Article( $articleTitle );
			} else {
				$article = new Article( $articleTitle, $oldid );
			}
			if ( !$article->exists() ) {
				return null;
			}
			$revision = Revision::newFromTitle( $articleTitle, $article->getOldID() );
			$latest = $article->getLatest();
			$oldid = $article->getOldID();
			if ( !$oldid ) {
				$oldid = $latest;
			}
			$d = array(
				'type' => 'article',
				'content-type' => 'text/x-wiki',
				'title' => $articleTitle->getPrefixedText(),
				'latest' => $latest,
				'revision' => $oldid,
				'timestamp' => wfTimestamp( TS_UNIX, $revision->mTimestamp ),
				'url' => $articleTitle->getFullURL(),
				'currentVersion' => $currentVersion,
			);
			if ( $displayTitle ) {
				$d['displaytitle'] = $displayTitle;
			}
			return $d;
		}
		return null;
	}

	function loadCollection( $title, $append=false ) {
		if ( is_null( $title ) ) {
			$wgOut->showErrorPage( 'coll-notitle_title', 'coll-notitle_msg' );
			return;
		}

		$article = new Article( $title );
		if ( !$article->exists() ) {
			$wgOut->showErrorPage( 'coll-notfound_title', 'coll-notfound_msg' );
			return false;
		}

		if ( !$append || !CollectionSession::hasSession() ) {
			$collection = array(
				'title' => '',
				'subtitle' => '',
			);
			$items = array();
		} else {
			$collection = $_SESSION['wsCollection'];
			$items = $collection['items'];
		}

		foreach( preg_split( '/[\r\n]+/', $article->getContent() ) as $line ) {
			$item = $this->parseCollectionLine( $collection, $line, $append );
			if ( !is_null( $item ) ) {
				$items[] = $item;
			}
		}
		$collection['items'] = $items;
		return $collection;
	}

	function saveCollection( $title, $forceOverwrite=false ) {
		global $wgUser;

		$article = new Article( $title );
		if ( $article->exists() && !$forceOverwrite ) {
			return false;
		}
		$articleText = "{{" . wfMsgForContent( 'coll-savedbook_template' ) . "}}\n\n";
		$collection = $_SESSION['wsCollection'];
		if( $collection['title'] ) {
			$articleText .= '== ' . $collection['title'] . " ==\n";
		}
		if ( $collection['subtitle'] ) {
			$articleText .= '=== ' . $collection['subtitle'] . " ===\n";
		}
		if ( !empty( $collection['items'] ) ) {
			foreach ( $collection['items'] as $item ) {
				if ( $item['type'] == 'chapter' ) {
					$articleText .= ';' . $item['title'] . "\n";
				} elseif ( $item['type'] == 'article' ) {
					if ($item['currentVersion'] == 1) {
						$articleText .= ":[[" . $item['title'];
						if ( $item['displaytitle'] ) {
							$articleText .= "|" . $item['displaytitle'];
						}
						$articleText .= "]]\n";
					} else {
						$articleText .= ":[{{fullurl:" . $item['title'];
						$articleText .= "|oldid=" . $item['revision'] . "}} ";
						if ( $item['displaytitle'] ) {
							$articleText .= $item['displaytitle'];
						} else {
							$articleText .= $item['title'];
						}
						$articleText .= "]\n";
					}
				}
				//$articleText .= $item['revision'] . "/" . $item['latest']."\n";
			}
		}
		$catTitle = Title::makeTitle( NS_CATEGORY, wfMsgForContent( 'coll-bookscategory' ) );
		if ( !is_null( $catTitle ) ) {
			$articleText .= "\n[[" . $catTitle->getPrefixedText() . "|" . wfEscapeWikiText( $title->getSubpageText() ) . "]]\n";
		}

		$req = new FauxRequest(array(
			'action' => 'edit',
			'title' => $title->getPrefixedText(),
			'text' => $articleText,
			'token' => $wgUser->editToken(),
		), true);
		$api = new ApiMain($req, true);
		$api->execute();
		return true;
	}

	function getLicenseInfos() {
		global $wgCollectionLicenseName;
		global $wgCollectionLicenseURL;
		global $wgRightsIcon;
		global $wgRightsPage;
		global $wgRightsText;
		global $wgRightsUrl;

		wfLoadExtensionMessages( 'Collection' );

		$licenseInfo = array(
			"type" => "license",
		);

		$from_msg = wfMsgForContent( 'coll-license_url' );
		if ( $from_msg && $from_msg != '-' ) {
			$licenseInfo['mw_license_url'] = $from_msg;
			return array( $licenseInfo );
		}

		if ( $wgCollectionLicenseName ) {
			$licenseInfo['name'] = $wgCollectionLicenseName;
		} else {
			$licenseInfo['name'] = wfMsgForContent( 'coll-license' );
		}

		if ( $wgCollectionLicenseURL ) {
			$licenseInfo['mw_license_url'] = $wgCollectionLicenseURL;
		} else {
			$licenseInfo['mw_rights_icon'] = $wgRightsIcon;
			$licenseInfo['mw_rights_page'] = $wgRightsPage;
			$licenseInfo['mw_rights_url'] = $wgRightsUrl;
			$licenseInfo['mw_rights_text'] = $wgRightsText;
		}

		return array( $licenseInfo );
	}

	function buildJSONCollection( $collection ) {
		$result = array(
			'type' => 'collection',
			'licenses' => $this->getLicenseInfos()
		);

		if ( isset( $collection['title'] ) ) {
			$result['title'] = $collection['title'];
		}
		if ( isset( $collection['subtitle'] ) ) {
			$result['subtitle'] = $collection['subtitle'];
		}

		$items = array();
		$currentChapter = null;
		foreach ( $collection['items'] as $item ) {
			if ( $item['type'] == 'article' ) {
				if ( is_null( $currentChapter ) ) {
					$items[] = $item;
				} else {
					$currentChapter['items'][] = $item;
				}
			} elseif ( $item['type'] == 'chapter' ) {
				if ( !is_null( $currentChapter ) ) {
					$items[] = $currentChapter;
				}
				$currentChapter = $item;
			}
		}
		if ( !is_null( $currentChapter ) ) {
			$items[] = $currentChapter;
		}

		$result['items'] = $items;

		$json = new Services_JSON();
		return $json->encode( $result );
	}

	function renderCollection( $collection, $referrer, $writer ) {
		global $wgOut;
		global $wgContLang;
		global $wgServer;
		global $wgScriptPath;
		global $wgScriptExtension;

		if ( !$writer ) {
			$writer = 'rl';
		}

		$response = self::mwServeCommand( 'render', array(
			'metabook' => $this->buildJSONCollection( $collection ),
			'base_url' => $wgServer . $wgScriptPath,
			'script_extension' => $wgScriptExtension,
			'template_blacklist' => wfMsgForContent( 'coll-template_blacklist_title' ),
			'template_exclusion_category' => wfMsgForContent( 'coll-exclusion_category_title' ),
			'print_template_prefix' => wfMsgForContent( 'coll-print_template_prefix' ),
			'print_template_pattern' => wfMsgForContent( 'coll-print_template_pattern' ),
			'language' => $wgContLang->getCode(),
			'writer' => $writer,
		) );

		if ( !$response ) {
			return;
		}

		$redirect = SkinTemplate::makeSpecialUrlSubpage( 'Book', 'rendering/' );
		$query = 'return_to=' . urlencode( $referrer->getPrefixedText() )
			. '&collection_id=' . urlencode( $response['collection_id'] )
			. '&writer=' . urlencode( $response['writer'] );
		if ( isset( $response['is_cached'] ) && $response['is_cached'] ) {
			$query .= '&is_cached=1';
		}
		$wgOut->redirect( wfAppendQuery( $redirect, $query ) );
	}

	function forceRenderCollection() {
		global $wgOut;
		global $wgContLang;
		global $wgRequest;
		global $wgServer;
		global $wgScriptPath;
		global $wgScriptExtension;

		$collectionID = $wgRequest->getVal( 'collection_id', '' );
		$writer = $wgRequest->getVal( 'writer', 'rl' );

		$response = self::mwServeCommand( 'render', array(
			'collection_id' => $collectionID,
			'base_url' => $wgServer . $wgScriptPath,
			'script_extension' => $wgScriptExtension,
			'template_blacklist' => wfMsgForContent( 'coll-template_blacklist_title' ),
			'template_exclusion_category' => wfMsgForContent( 'coll-exclusion_category_title' ),
			'print_template_prefix' => wfMsgForContent( 'coll-print_template_prefix' ),
			'print_template_pattern' => wfMsgForContent( 'coll-print_template_pattern' ),
			'language' => $wgContLang->getCode(),
			'writer' => $writer,
			'force_render' => true
		) );

		if ( !$response ) {
			return;
		}

		$redirect = SkinTemplate::makeSpecialUrlSubpage( 'Book', 'rendering/' );
		$query = 'return_to=' . $wgRequest->getVal( 'return_to', '' )
			. '&collection_id=' . urlencode( $response['collection_id'] )
			. '&writer=' . urlencode( $response['writer'] );
		if ( $response['is_cached'] ) {
			$query .= '&is_cached=1';
		}
		$wgOut->redirect( wfAppendQuery( $redirect, $query ) );
	}

	function renderRenderingPage() {
		global $wgCollectionVersion;
		global $wgCollectionStyleVersion;
		global $wgJsMimeType;
		global $wgLang;
		global $wgOut;
		global $wgRequest;
		global $wgScriptPath;
		global $wgServer;

		$response = self::mwServeCommand( 'render_status', array(
			'collection_id' => $wgRequest->getVal( 'collection_id' ),
			'writer' => $wgRequest->getVal( 'writer' ),
		) );
		if ( !$response ) {
			return; // FIXME?
		}

		$this->setHeaders();

		$return_to = $wgRequest->getVal( 'return_to' );

		$query = 'collection_id=' . urlencode( $response['collection_id'] )
			. '&writer=' . urlencode( $response['writer'] )
			. '&return_to=' . urlencode( $return_to );

		switch ( $response['state'] ) {
		case 'progress':
			$url = htmlspecialchars( SkinTemplate::makeSpecialUrlSubpage( 'Book', 'rendering/', $query ) );
			$wgOut->addHeadItem( 'refresh-nojs', '<noscript><meta http-equiv="refresh" content="2" /></noscript>');
			$wgOut->addInlineScript( 'var collection_id = "' . urlencode( $response['collection_id']) . '";' );
			$wgOut->addInlineScript( 'var writer = "' . urlencode( $response['writer']) . '";' );
			$wgOut->addInlineScript( 'var collection_rendering = true;' );
			$wgOut->addInlineScript( "var wgCollectionVersion = \"$wgCollectionVersion\";" );
			$wgOut->addScript( "<script type=\"$wgJsMimeType\" src=\"$wgScriptPath/extensions/Collection/collection/jquery.js?$wgCollectionStyleVersion\"></script>" );
			$wgOut->addScript( "<script type=\"$wgJsMimeType\" src=\"$wgScriptPath/extensions/Collection/collection/collection.js?$wgCollectionStyleVersion\"></script>" );
			$wgOut->setPageTitle( wfMsg( 'coll-rendering_title' ) );

			if ( isset($response['status']['status'] ) && $response['status']['status'] ) {
				$statusText = $response['status']['status'];
				if ( isset( $response['status']['article'] ) && $response['status']['article'] ) {
					$statusText .= ' ' . wfMsg( 'coll-rendering_article', $response['status']['article'] );
				} elseif ( isset( $response['status']['page'] ) && $response['status']['page'] ) {
					$statusText .= ' ' . wfMsg( 'coll-rendering_page', $wgLang->formatNum( $response['status']['page'] ) );
				}
				$status = wfMsg( 'coll-rendering_status', $statusText );
			} else {
				$status = '';
			}

			$template = new CollectionRenderingTemplate();
			$template->set( 'status',  $status );
			$template->set( 'progress', $response['status']['progress'] );
			$wgOut->addTemplate( $template );
			break;
		case 'finished':
			$wgOut->setPageTitle( wfMsg( 'coll-rendering_finished_title' ) );

			$template = new CollectionFinishedTemplate();
			$template->set( 'download_url', $wgServer . SkinTemplate::makeSpecialUrlSubpage( 'Book', 'download/', $query ) );
			$template->set( 'is_cached', $wgRequest->getVal( 'is_cached' ) );
			$template->set( 'query', $query );
			$template->set( 'return_to', $return_to );
			$wgOut->addTemplate( $template );
			break;
		default:
			$wgOut->addWikiText( 'state: ' . $response['state'] );
		}
	}

	function download() {
		global $wgOut;
		global $wgRequest;

		$tempfile = tmpfile();
		$headers = self::mwServeCommand( 'download', array(
			'collection_id' => $wgRequest->getVal( 'collection_id' ),
			'writer' => $wgRequest->getVal( 'writer' ),
		), $timeout=false, $toFile=$tempfile );
		if (!$headers) {
			$wgOut->showErrorPage( 'coll-download_notfound_title', 'coll-download_notfound_text' );
			return;
		}
		wfResetOutputBuffers();
		if ( isset( $headers['content-type'] ) ) {
			header( 'Content-Type: ' . $headers['content-type']);
		}
		if ( isset( $headers['content-disposition'] ) ) {
			header( 'Content-Disposition: ' . $headers['content-disposition']);
		}
		if ( isset( $headers['content-length'] ) ) {
			header( 'Content-Length: ' . $headers['content-length']);
		}
		fseek( $tempfile, 0 );
		fpassthru( $tempfile );
		$wgOut->disable();
	}

	function renderArticle( $title, $oldid, $writer ) {
		global $wgOut;

		if ( is_null( $title ) ) {
			$wgOut->showErrorPage( 'coll-notitle_title', 'coll-notitle_msg' );
			return;
		}
		$article = array(
			'type' => 'article',
			'content-type' => 'text/x-wiki',
			'title' => $title->getPrefixedText()
		);
		if ( $oldid ) {
			$article['revision'] = strval( $oldid );
		}

		$revision = Revision::newFromTitle( $title, $oldid );
		$article['timestamp'] = wfTimestamp( TS_UNIX, $revision->mTimestamp );

		$this->renderCollection( array( 'items' => array( $article ) ), $title, $writer );
	}

	function postZIP( $collection, $partner ) {
		global $wgServer;
		global $wgScriptPath;
		global $wgScriptExtension;
		global $wgOut;

		$json = new Services_JSON();

		if ( !isset( $this->mPODPartners[$partner] ) ) {
			$wgOut->showErrorPage( 'coll-invalid_podpartner_title', 'coll-invalid_podpartner_msg' );
			return;
		}

		$response = self::mwServeCommand( 'zip_post', array(
			'metabook' => $this->buildJSONCollection( $collection ),
			'base_url' => $wgServer . $wgScriptPath,
			'script_extension' => $wgScriptExtension,
			'template_blacklist' => wfMsgForContent( 'coll-template_blacklist_title' ),
			'template_exclusion_category' => wfMsgForContent( 'coll-exclusion_category_title' ),
			'print_template_prefix' => wfMsgForContent( 'coll-print_template_prefix' ),
			'print_template_pattern' => wfMsgForContent( 'coll-print_template_pattern' ),
			'pod_api_url' => $this->mPODPartners[$partner]['posturl'],
		) );
		if ( !$response ) {
			return;
		}
		$wgOut->redirect( $response['redirect_url'] );
	}

	private function renderSaveOverwritePage( $colltype, $title, $pcollname, $ccollname ) {
		global $wgOut;

		$this->setHeaders();
		$wgOut->setPageTitle( wfMsg( 'coll-save_collection' ) );

		$template = new CollectionSaveOverwriteTemplate();
		$template->set( 'title', $title );
		$template->set( 'pcollname', $pcollname );
		$template->set( 'ccollname', $ccollname );
		$template->set( 'colltype', $colltype );
		$wgOut->addTemplate( $template );
	}

	private function renderLoadOverwritePage( $title ) {
		global $wgOut;

		$this->setHeaders();
		$wgOut->setPageTitle( wfMsg( 'coll-load_collection' ) );

		$template = new CollectionLoadOverwriteTemplate();
		$template->set( 'title', $title );
		$wgOut->addTemplate( $template );
	}

	static function mwServeCommand( $command, $args, $timeout=true, $toFile=null ) {
		global $wgOut;
		global $wgCollectionMWServeURL;
		global $wgCollectionMWServeCredentials;
		
		$args['command'] = $command;
		if ( $wgCollectionMWServeCredentials ) {
			$args['login_credentials'] = $wgCollectionMWServeCredentials;
		}
		$errorMessage = '';
		$headers = array();
		$response = self::post( $wgCollectionMWServeURL, $args, $errorMessage, $headers, $timeout, $toFile );
		if ( $toFile ) {
			return $headers;
		}
		
		if ( !$response ) {
			$wgOut->showErrorPage(
				'coll-post_failed_title',
				'coll-post_failed_msg',
				array( $wgCollectionMWServeURL, $errorMessage )
			);
			return false;
		}
		
		$json = new Services_JSON( SERVICES_JSON_LOOSE_TYPE );
		$json_response = $json->decode( $response );
		
		if ( !$json_response ) {
			$wgOut->showErrorPage(
				'coll-mwserve_failed_title',
				'coll-mwserve_failed_msg',
				array( $response )
			);
			return false;
		}
		
		if ( isset( $json_response['error'] ) && $json_response['error'] ) {
			$wgOut->showErrorPage(
				'coll-mwserve_failed_title',
				'coll-mwserve_failed_msg',
				array( $json_response['error'] )
			);
			return false;
		}
		
		return $json_response;
	}

	static function post( $url, $postFields, &$errorMessage, &$headers,
		$timeout=true, $toFile=null ) {
		global $wgHTTPTimeout, $wgHTTPProxy, $wgTitle, $wgVersion;
		global $wgCollectionMWServeCert;
		global $wgCollectionVersion;

		$c = curl_init( $url );
		curl_setopt($c, CURLOPT_PROXY, $wgHTTPProxy);
		$userAgent = wfGetAgent();
		if ( !$userAgent ) $userAgent = "Unknown user agent";
		curl_setopt( $c, CURLOPT_USERAGENT, $userAgent . " (via " . Http::userAgent() . ", Collection/$wgCollectionVersion)" );
		curl_setopt( $c, CURLOPT_POST, true );
		curl_setopt( $c, CURLOPT_POSTFIELDS, $postFields );
		curl_setopt( $c, CURLOPT_HTTPHEADER, array( 'Expect:' ) );
		if ( is_object( $wgTitle ) ) {
			curl_setopt( $c, CURLOPT_REFERER, $wgTitle->getFullURL() );
		}
		if ( $timeout ) {
			curl_setopt( $c, CURLOPT_TIMEOUT, $wgHTTPTimeout );
		}
		/* Allow the use of self-signed certificates by referencing
		 * a local (to the mediawiki install) copy of the signing
		 * certificate */
		if ( !($wgCollectionMWServeCert === null) ) {
			curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, TRUE);
			curl_setopt ($c, CURLOPT_CAINFO, $wgCollectionMWServeCert);
		}

		$headerStream = tmpfile();
		curl_setopt( $c, CURLOPT_WRITEHEADER, $headerStream );
		if ( $toFile ) {
			curl_setopt( $c, CURLOPT_FILE, $toFile );
		} else {
			curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
		}

		$result = curl_exec( $c );
		if ( curl_errno( $c ) != CURLE_OK ) {
			$text = false;
			$errorMessage = curl_error( $c );
			$headers = false;
		} elseif ( curl_getinfo( $c, CURLINFO_HTTP_CODE ) != 200 ) {
			$text = false;
			$errorMessage = 'HTTP status ' . curl_getinfo( $c, CURLINFO_HTTP_CODE );
			$headers = false;
		} else {
			$headerSize = curl_getinfo( $c, CURLINFO_HEADER_SIZE );
			fseek( $headerStream, 0 );
			$headerLines = explode( "\n", fread( $headerStream, $headerSize ) );
			foreach( $headerLines as $line ) {
				if ( preg_match( "/^(.+?):\s+(.+)$/", trim( $line ), $matches ) ) {
					$headers[ strtolower( $matches[1] ) ] = $matches[2];
				}
				unset( $matches );
			}
			if ( !$toFile ) {
				$text = $result;
			}
			$errorMessage = '';
		}
		curl_close( $c );
		return $text;
	}
}
