<?php
/**
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
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

class SpecialCollection extends SpecialPage {
	var $tempfile;

	/**
	 * @param $PODPartners bool|array
	 */
	public function __construct( $PODPartners = false ) {
		parent::__construct( "Book" );
		global $wgCollectionPODPartners;
		if ( $PODPartners ) {
			$this->mPODPartners = $PODPartners;
		} else {
			$this->mPODPartners = $wgCollectionPODPartners;
		}
	}

	/**
	 * @return String
	 */
	function getDescription() {
		return $this->msg( 'coll-collection' )->escaped();
	}

	/**
	 * @param $par null|string
	 */
	function execute( $par ) {
		global $wgCollectionMaxArticles;

		$out = $this->getOutput();
		$request = $this->getRequest();
		$user = $this->getUser();

		// support previous URLs (e.g. used in templates) which used the "$par" part
		// (i.e. subpages of the Special page)
		if ( $par ) {
			if ( $request->wasPosted() ) { // don't redirect POST reqs
				// TODO
			}
			$out->redirect( wfAppendQuery(
				SkinTemplate::makeSpecialUrl( 'Book' ),
				$request->appendQueryArray( array( 'bookcmd' => rtrim( $par, '/' ) ), true )
			) );
			return;
		}

		switch ( $request->getVal( 'bookcmd', '' ) ) {
			case 'book_creator':
				$this->renderBookCreatorPage( $request->getVal( 'referer', '' ), $par );
				return;

			case 'start_book_creator':
				$title = Title::newFromText( $request->getVal( 'referer', '' ) );
				if ( is_null( $title ) ) {
					$title = Title::newMainPage();
				}
				CollectionSession::enable();
				$out->redirect( $title->getFullURL() );
				return;
			case 'stop_book_creator':
				$title = Title::newFromText( $request->getVal( 'referer', '' ) );
				if ( is_null( $title ) || $title->equals( $this->getTitle( $par ) ) ) {
					$title = Title::newMainPage();
				}
				if ( $request->getVal( 'disable' ) ) {
					CollectionSession::disable();
				} elseif ( !$request->getVal( 'continue' ) ) {
					$this->renderStopBookCreatorPage( $title );
					return;
				}
				$out->redirect( $title->getFullURL() );
				return;
			case 'add_article':
				if ( CollectionSession::countArticles() >= $wgCollectionMaxArticles ) {
					self::limitExceeded();
					return;
				}
				$oldid = $request->getInt( 'oldid', 0 );
				$title = Title::newFromText( $request->getVal( 'arttitle', '' ) );
				if ( !$title ) {
					return;
				}
				if ( self::addArticle( $title, $oldid ) ) {
					if ( $oldid == 0 ) {
						$redirectURL = $title->getFullURL();
					} else {
						$redirectURL = $title->getFullURL( 'oldid=' . $oldid );
					}
					$out->redirect( $redirectURL );
				} else {
					$out->showErrorPage(
						'coll-couldnotaddarticle_title',
						'coll-couldnotaddarticle_msg'
					);
				}
				return;
			case 'remove_article':
				$oldid = $request->getInt( 'oldid', 0 );
				$title = Title::newFromText( $request->getVal( 'arttitle', '' ) );
				if ( !$title ) {
					return;
				}
				if ( self::removeArticle( $title, $oldid ) ) {
					if ( $oldid == 0 ) {
						$redirectURL = $title->getFullURL();
					} else {
						$redirectURL = $title->getFullURL( 'oldid=' . $oldid );
					}
					$out->redirect( $redirectURL );
				} else {
					$out->showErrorPage(
						'coll-couldnotremovearticle_title',
						'coll-couldnotremovearticle_msg'
					);
				}
				return;
			case 'clear_collection':
				CollectionSession::clearCollection();
				$redirect = $request->getVal( 'return_to' );
				$redirectURL = SkinTemplate::makeSpecialUrl( 'Book' );
				if ( !empty( $redirect ) ) {
					$title = Title::newFromText( $redirect );
					if ( $title ) {
						$redirectURL = $title->getFullURL();
					}
				}
				$out->redirect( $redirectURL );
				return;
			case 'set_titles':
				self::setTitles(
					$request->getText( 'collectionTitle', '' ),
					$request->getText( 'collectionSubtitle', '' )
				);
				$out->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'sort_items':
				self::sortItems();
				$out->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'add_category':
				$title = Title::makeTitleSafe( NS_CATEGORY, $request->getVal( 'cattitle', '' ) );
				if ( self::addCategory( $title ) ) {
					self::limitExceeded();
					return;
				} else {
					$out->redirect( $request->getVal( 'return_to', $title->getFullURL() ) );
				}
				return;
			case 'remove_item':
				self::removeItem( $request->getInt( 'index', 0 ) );
				$out->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'move_item':
				self::moveItem( $request->getInt( 'index', 0 ), $request->getInt( 'delta', 0 ) );
				$out->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
				return;
			case 'load_collection':
				$title = Title::newFromText( $request->getVal( 'colltitle', '' ) );
				if ( !$title ) {
					return;
				}
				if ( $request->getVal( 'cancel' ) ) {
					$out->redirect( $title->getFullURL() );
					return;
				}
				if ( !CollectionSession::countArticles()
					 || $request->getVal( 'overwrite' )
					 || $request->getVal( 'append' ) ) {
					$collection = $this->loadCollection( $title, $request->getVal( 'append' ) );
					if ( $collection ) {
						CollectionSession::startSession();
						CollectionSession::setCollection( $collection );
						CollectionSession::enable();
						$out->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
					}
					return;
				}
				$this->renderLoadOverwritePage( $title );
				return;
			case 'order_collection':
				$title = Title::newFromText( $request->getVal( 'colltitle', '' ) );
				if ( !$title ) {
					return;
				}
				$collection = $this->loadCollection( $title );
				$partner = $request->getVal( 'partner', key( $this->mPODPartners ) );
				$this->postZIP( $collection, $partner );
				return;
			case 'save_collection':
				if ( $request->getVal( 'abort' ) ) {
					$out->redirect( SkinTemplate::makeSpecialUrl( 'Book' ) );
					return;
				}
				if ( !$user->matchEditToken( $request->getVal( 'token' ) ) ) {
					return;
				}
				$colltype = $request->getVal( 'colltype' );
				$prefixes = self::getBookPagePrefixes();
				$title = null;
				if ( $colltype == 'personal' ) {
					$collname = $request->getVal( 'pcollname' );
					if ( !$user->isAllowed( 'collectionsaveasuserpage' ) || empty( $collname ) ) {
						return;
					}
					$title = Title::newFromText( $prefixes['user-prefix'] . $collname );
				} elseif ( $colltype == 'community' ) {
					$collname = $request->getVal( 'ccollname' );
					if ( !$user->isAllowed( 'collectionsaveascommunitypage' ) || empty( $collname ) ) {
						return;
					}
					$title = Title::newFromText( $prefixes['community-prefix'] . $collname );
				}
				if ( !$title ) {
					return;
				}
				if ( $this->saveCollection( $title, $request->getBool( 'overwrite' ) ) ) {
					$out->redirect( $title->getFullURL() );
				} else {
					$this->renderSaveOverwritePage(
						$colltype,
						$title,
						$request->getVal( 'pcollname' ),
						$request->getVal( 'ccollname' )
					);
				}
				return;
			case 'render':
				$this->renderCollection(
					CollectionSession::getCollection(),
					SpecialPage::getTitleFor( 'Book' ),
					$request->getVal( 'writer', '' )
				);
				return;
			case 'forcerender':
				$this->forceRenderCollection();
				return;
			case 'rendering':
				$this->renderRenderingPage();
				return;
			case 'download':
				$this->download();
				return;
			case 'render_article':
				$title = Title::newFromText( $request->getVal( 'arttitle', '' ) );
				if ( !$title ) {
					return;
				}
				$oldid = $request->getInt( 'oldid', 0 );
				$this->renderArticle( $title, $oldid, $request->getVal( 'writer', 'rl' ) );
				return;
			case 'render_collection':
				$title = Title::newFromText( $request->getVal( 'colltitle', '' ) );
				if ( !$title ) {
					return;
				}
				$collection = $this->loadCollection( $title );
				if ( $collection ) {
					$this->renderCollection( $collection, $title, $request->getVal( 'writer', 'rl' ) );
				}
				return;
			case 'post_zip':
				$partner = $request->getVal( 'partner', 'pediapress' );
				$this->postZIP( CollectionSession::getCollection(), $partner );
				return;
			case 'suggest':
				$add = $request->getVal( 'add' );
				$ban = $request->getVal( 'ban' );
				$remove = $request->getVal( 'remove' );
				$addselected = $request->getVal( 'addselected' );

				if ( $request->getVal( 'resetbans' ) ) {
					CollectionSuggest::run( 'resetbans' );
				} elseif ( isset( $add ) ) {
					CollectionSuggest::run( 'add', $add );
				} elseif ( isset( $ban ) ) {
					CollectionSuggest::run( 'ban', $ban );
				} elseif ( isset( $remove ) ) {
					CollectionSuggest::run( 'remove', $remove );
				} elseif ( isset( $addselected ) ) {
					$articleList = $request->getArray( 'articleList' );
					if ( !is_null( $articleList ) ) {
						CollectionSuggest::run( 'addAll', $articleList );
					} else {
						CollectionSuggest::run();
					}
				} else {
					CollectionSuggest::run();
				}
				return;
			case '':
				$this->renderSpecialPage();
				return;
			default:
				$out->showErrorPage( 'coll-unknown_subpage_title', 'coll-unknown_subpage_text' );
		}
	}

	/**
	 * @param $referer
	 * @param $par
	 * @return mixed
	 */
	function renderBookCreatorPage( $referer, $par ) {
		global $wgJsMimeType;

		$out = $this->getOutput();

		$this->setHeaders();
		$out->setPageTitle( $this->msg( 'coll-book_creator' ) );

		$out->addWikiMsg( 'coll-book_creator_intro' );

		$out->addModules( 'ext.collection.checkLoadFromLocalStorage' );

		$dialogtxt = $this->msg( 'coll-load_local_book' )->text();

		$out->addScript(
			"<script type=\"$wgJsMimeType\">\n" .
			"var collection_dialogtxt = " . Xml::encodeJsVar( $dialogtxt ) . ";\n" .
			"</script>" );

		$title = Title::newFromText( $referer );
		if ( is_null( $title ) || $title->equals( $this->getTitle( $par ) ) ) {
			$title = Title::newMainPage();
		}

		$out->addHTML(
			Xml::tags( 'div',
				array(
					'style' => 'margin: 10px 0;',
				),
				Xml::tags( 'div',
					array(
						'class' => 'collection-button ok',
					),
					Xml::element( 'a',
						array(
							'href' => SkinTemplate::makeSpecialUrl(
								'Book',
								array(
									'bookcmd' => 'start_book_creator',
									'referer' => $referer,
								)
							),
							// TODO: title
						),
						$this->msg( 'coll-start_book_creator' )->text()
					)
				)
				. Xml::tags( 'div',
					array(
						'class' => 'collection-button cancel',
					),
					Linker::link(
						$title,
						$this->msg( 'coll-cancel' )->escaped(),
						array(
							'rel' => 'nofollow',
							// TOOD: title
						),
						array(),
						array( 'known', 'noclasses' )
					)
				)
				. Xml::element( 'div',
					array(
						'style' => 'clear: both;',
					),
					'', false
				)
			)
		);

		$title_string = $this->msg( 'coll-book_creator_text_article' )->inContentLanguage()->text();
		$t = Title::newFromText( $title_string );
		if ( !is_null( $t ) ) {
			$wikiPage = WikiPage::factory( $t );
			if ( $wikiPage->exists() ) {
				$out->addWikiText( '{{:' . $title_string . '}}' );
				return;
			}
		}
		$out->addWikiMsg( 'coll-book_creator_help' );
	}

	/**
	 * @param $referer
	 */
	function renderStopBookCreatorPage( $referer ) {
		$out = $this->getOutput();

		$this->setHeaders();
		$out->setPageTitle( $this->msg( 'coll-book_creator_disable' ) );
		$out->addWikiMsg( 'coll-book_creator_disable_text' );

		$out->addHTML(
			Xml::tags( 'form',
				array(
					'action' => SkinTemplate::makeSpecialUrl(
						'Book',
						array( 'bookcmd' => 'stop_book_creator' )
					),
					'method' => 'post',
				),
				Xml::element( 'input',
					array(
						'type' => 'hidden',
						'name' => 'referer',
						'value' => $referer,
					)
				)
				. Xml::element( 'input',
					array(
						'type' => 'submit',
						'value' => $this->msg( 'coll-book_creator_continue' )->text(),
						'name' => 'continue',
					)
				)
				. Xml::element( 'input',
					array(
						'type' => 'submit',
						'value' => $this->msg( 'coll-book_creator_disable' )->text(),
						'name' => 'disable',
					)
				)
			)
		);
	}

	/**
	 * @return array
	 */
	static function getBookPagePrefixes() {
		global $wgUser, $wgCommunityCollectionNamespace;

		$result = array();

		$t = wfMessage( 'coll-user_book_prefix', $wgUser->getName() )->inContentLanguage();
		if ( $t->isDisabled()  ) {
			$userPageTitle = $wgUser->getUserPage()->getPrefixedText();
			$result['user-prefix'] = $userPageTitle . '/'
				. wfMessage( 'coll-collections' )->inContentLanguage()->text() . '/';
		} else {
			$result['user-prefix'] = $t->text();
		}

		$comBookPrefix = wfMessage( 'coll-community_book_prefix' )->inContentLanguage();
		if ( $comBookPrefix->isDisabled() ) {
			$title = Title::makeTitle(
				$wgCommunityCollectionNamespace,
				wfMessage( 'coll-collections' )->inContentLanguage()->text()
			);
			$result['community-prefix'] = $title->getPrefixedText() . '/';
		} else {
			$result['community-prefix'] = $comBookPrefix->text();
		}
		return $result;
	}

	function renderSpecialPage() {
		global $wgCollectionFormats;

		if ( !CollectionSession::hasSession() ) {
			CollectionSession::startSession();
		}

		$out = $this->getOutput();

		$this->setHeaders();
		$out->setPageTitle( $this->msg( 'coll-manage_your_book' )->text() );
		$out->addModules( 'ext.collection' );

		$template = new CollectionPageTemplate();
		$template->set( 'collection', CollectionSession::getCollection() );
		$template->set( 'podpartners', $this->mPODPartners );
		$template->set( 'formats', $wgCollectionFormats );
		$prefixes = self::getBookPagePrefixes();
		$template->set( 'user-book-prefix', $prefixes['user-prefix'] );
		$template->set( 'community-book-prefix', $prefixes['community-prefix'] );
		$out->addTemplate( $template );
	}

	/**
	 * @param $title string
	 * @param $subtitle string
	 */
	static function setTitles( $title, $subtitle ) {
		$collection = CollectionSession::getCollection();
		$collection['title'] = $title;
		$collection['subtitle'] = $subtitle;
		CollectionSession::setCollection( $collection );
	}

	/**
	 * @param $a array
	 * @param $b array
	 * @return int
	 */
	static function title_cmp( $a, $b ) {
		return strcasecmp( $a['title'], $b['title'] );
	}

	static function sortItems() {
		$collection = CollectionSession::getCollection();
		if ( !isset( $collection['items'] ) || !is_array( $collection['items'] ) ) {
			$collection['items'] = array();
			CollectionSession::setCollection( $collection );
			return;
		}
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
		CollectionSession::setCollection( $collection );
	}

	/**
	 * @param $name string
	 */
	static function addChapter( $name ) {
		$collection = CollectionSession::getCollection();
		if ( !isset( $collection['items'] ) || !is_array( $collection['items'] ) ) {
			$collection['items'] = array();
		}
		array_push( $collection['items'], array(
			'type' => 'chapter',
			'title' => $name,
		) );
		CollectionSession::setCollection( $collection );
	}

	/**
	 * @param $index int
	 * @param $name string
	 */
	static function renameChapter( $index, $name ) {
		if ( !is_int( $index ) ) {
			return;
		}
		$collection = CollectionSession::getCollection();
		if ( $collection['items'][$index]['type'] != 'chapter' ) {
			return;
		}
		$collection['items'][$index]['title'] = $name;
		CollectionSession::setCollection( $collection );
	}

	/**
	 * @param $namespace int
	 * @param $name string
	 * @param int $oldid
	 * @return bool
	 */
	static function addArticleFromName( $namespace, $name, $oldid = 0 ) {
		$title = Title::makeTitleSafe( $namespace, $name );
		if ( !$title ) {
			return false;
		}
		return self::addArticle( $title, $oldid );
	}

	/**
	 * @param $title Title
	 * @param $oldid int
	 * @return bool
	 */
	static function addArticle( $title, $oldid = 0 ) {
		global $wgCollectionHierarchyDelimiter;

		$latest = $title->getLatestRevID();

		$currentVersion = 0;
		if ( $oldid == 0 ) {
			$currentVersion = 1;
			$oldid = $latest;
		}

		$prefixedText = $title->getPrefixedText();

		$index = CollectionSession::findArticle( $prefixedText, $oldid );
		if ( $index != - 1 ) {
			return false;
		}

		if ( !CollectionSession::hasSession() ) {
			CollectionSession::startSession();
		}
		$collection = CollectionSession::getCollection();
		$revision = Revision::newFromTitle( $title, $oldid );
		if ( !$revision ) {
			return false;
		}

		$item = array(
			'type' => 'article',
			'content_type' => 'text/x-wiki',
			'title' => $prefixedText,
			'revision' => strval( $oldid ),
			'latest' => strval( $latest ),
			'timestamp' => wfTimestamp( TS_UNIX, $revision->getTimestamp() ),
			'url' => $title->getCanonicalURL(),
			'currentVersion' => $currentVersion,
		);

		if ( $wgCollectionHierarchyDelimiter != null ) {
			$parts = explode( $wgCollectionHierarchyDelimiter, $prefixedText );
			if ( count( $parts ) > 1 && end( $parts ) != '' ) {
				$item['displaytitle'] = end( $parts );
			}
		}

		$collection['items'][] = $item;
		CollectionSession::setCollection( $collection );
		return true;
	}

	/**
	 * @param $namespace string
	 * @param $name string
	 * @param $oldid int
	 * @return bool
	 */
	static function removeArticleFromName( $namespace, $name, $oldid = 0 ) {
		$title = Title::makeTitleSafe( $namespace, $name );
		return self::removeArticle( $title, $oldid );
	}

	/**
	 * @param $title Title
	 * @param $oldid int
	 * @return bool
	 */
	static function removeArticle( $title, $oldid = 0 ) {
		if ( !CollectionSession::hasSession() ) {
			return false;
		}
		$collection = CollectionSession::getCollection();
		$index = CollectionSession::findArticle( $title->getPrefixedText(), $oldid );
		if ( $index != - 1 ) {
			array_splice( $collection['items'], $index, 1 );
		}
		CollectionSession::setCollection( $collection );
		return true;
	}

	/**
	 * @param $name string
	 * @return bool
	 */
	static function addCategoryFromName( $name ) {
		$title = Title::makeTitleSafe( NS_CATEGORY, $name );
		return self::addCategory( $title );
	}

	/**
	 * @param $title Title
	 * @return bool
	 */
	static function addCategory( $title ) {
		global $wgCollectionMaxArticles, $wgCollectionArticleNamespaces;

		$limit = $wgCollectionMaxArticles - CollectionSession::countArticles();
		if ( $limit <= 0 || !$title ) {
			self::limitExceeded();
			return false;
		}
		$db = wfGetDB( DB_SLAVE );
		$tables = array( 'page', 'categorylinks' );
		$fields = array( 'page_namespace', 'page_title' );
		$options = array(
			'USE INDEX' => 'cl_sortkey',
			'ORDER BY' => 'cl_type, cl_sortkey',
			'LIMIT' => $limit + 1,
		);
		$where = array(
			'cl_from=page_id',
			'cl_to' => $title->getDBkey(),
		);
		$res = $db->select( $tables, $fields, $where, __METHOD__, $options );

		$count = 0;
		$limitExceeded = false;
		foreach ( $res as $row ) {
			if ( ++$count > $limit ) {
				$limitExceeded = true;
				break;
			}
			if ( in_array( $row->page_namespace, $wgCollectionArticleNamespaces ) ) {
				$articleTitle = Title::makeTitle( $row->page_namespace, $row->page_title );
				if ( CollectionSession::findArticle( $articleTitle->getPrefixedText() ) == - 1 ) {
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

	/**
	 * @param $index int
	 * @return bool
	 */
	static function removeItem( $index ) {
		if ( !is_int( $index ) ) {
			return false;
		}
		if ( !CollectionSession::hasSession() ) {
			return false;
		}
		$collection = CollectionSession::getCollection();
		array_splice( $collection['items'], $index, 1 );
		CollectionSession::setCollection( $collection );
		return true;
	}

	/**
	 * @param $index
	 * @param $delta
	 * @return bool
	 */
	static function moveItem( $index, $delta ) {
		if ( !CollectionSession::hasSession() ) {
			return false;
		}
		$collection = CollectionSession::getCollection();
		$saved = $collection['items'][$index + $delta];
		$collection['items'][$index + $delta] = $collection['items'][$index];
		$collection['items'][$index] = $saved;
		CollectionSession::setCollection( $collection );
		return true;
	}

	/**
	 * @param $items array
	 */
	static function setSorting( $items ) {
		if ( !CollectionSession::hasSession() ) {
			return;
		}
		$collection = CollectionSession::getCollection();
		$old_items = $collection['items'];
		$new_items = array();
		foreach ( $items as $new_index => $old_index ) {
			$new_items[$new_index] = $old_items[$old_index];
		}
		$collection['items'] = $new_items;
		CollectionSession::setCollection( $collection );
	}

	/**
	 * @param $collection
	 * @param $line
	 * @param $append
	 * @return array|null
	 */
	function parseCollectionLine( &$collection, $line, $append ) {
		$line = trim( $line );
		if ( !$append && preg_match( '/^===\s*(.*?)\s*===$/', $line, $match ) ) {
			$collection['subtitle'] = $match[ 1 ];
		} elseif ( !$append && preg_match( '/^==\s*(.*?)\s*==$/', $line, $match ) ) {
			$collection['title'] = $match[ 1 ];
		} elseif ( substr( $line, 0, 1 ) == ';' ) { // chapter
			return array(
				'type' => 'chapter',
				'title' => trim( substr( $line, 1 ) ),
			);
		} elseif ( substr( $line, 0, 1 ) == ':' ) { // article
			$articleTitle = trim( substr( $line, 1 ) );
			if ( preg_match( '/^\[\[:?(.*?)(\|(.*?))?\]\]$/', $articleTitle, $match ) ) {
				$articleTitle = $match[1];
				if ( isset( $match[3] ) ) {
					$displayTitle = $match[3];
				} else {
					$displayTitle = null;
				}
				$oldid = - 1;
				$currentVersion = 1;
			} elseif ( preg_match( '/^\[\{\{fullurl:(.*?)\|oldid=(.*?)\}\}\s+(.*?)\]$/', $articleTitle, $match ) ) {
				$articleTitle = $match[1];
				if ( isset( $match[3] ) ) {
					$displayTitle = $match[3];
				} else {
					$displayTitle = null;
				}
				$oldid = $match[2];
				$currentVersion = 0;
			} else {
				return null;
			}

			$articleTitle = Title::newFromText( $articleTitle );
			if ( !$articleTitle ) {
				return null;
			}
			if ( $oldid < 0 ) {
				$article = new WikiPage( $articleTitle );
			} else {
				$article = new Article( $articleTitle, $oldid );
				$oldid = $article->getOldID();
			}
			if ( !$article->exists() ) {
				return null;
			}
			$latest = $article->getLatest();
			if ( !$oldid ) {
				$oldid = $latest;
			}
			$revision = Revision::newFromTitle( $articleTitle, $oldid );

			if ( !$revision ) {
				return null;
			}
			$d = array(
				'type' => 'article',
				'content_type' => 'text/x-wiki',
				'title' => $articleTitle->getPrefixedText(),
				'latest' => $latest,
				'revision' => $oldid,
				'timestamp' => wfTimestamp( TS_UNIX, $revision->getTimestamp() ),
				'url' => $articleTitle->getCanonicalURL(),
				'currentVersion' => $currentVersion,
			);
			if ( $displayTitle ) {
				$d['displaytitle'] = $displayTitle;
			}
			return $d;
		}
		return null;
	}

	/**
	 * @param $title Title
	 * @param $append bool
	 * @return array|bool
	 */
	function loadCollection( $title, $append = false ) {
		$out = $this->getOutput();

		if ( is_null( $title ) ) {
			$out->showErrorPage( 'coll-notitle_title', 'coll-notitle_msg' );
			return null;
		}

		if ( !$title->exists() ) {
			$out->showErrorPage( 'coll-notfound_title', 'coll-notfound_msg' );
			return false;
		}

		if ( !$append || !CollectionSession::hasSession() ) {
			$collection = array(
				'title' => '',
				'subtitle' => '',
			);
			$items = array();
		} else {
			$collection = CollectionSession::getCollection();
			$items = $collection['items'];
		}

		$article = new Article( $title );

		foreach ( preg_split( '/[\r\n]+/', $article->getContent() ) as $line ) {
			$item = $this->parseCollectionLine( $collection, $line, $append );
			if ( !is_null( $item ) ) {
				$items[] = $item;
			}
		}
		$collection['items'] = $items;
		return $collection;
	}

	/**
	 * @param $title Title
	 * @param $forceOverwrite bool
	 * @return bool
	 */
	function saveCollection( $title, $forceOverwrite = false ) {
		$wikiPage = WikiPage::factory( $title );
		if ( $wikiPage->exists() && !$forceOverwrite ) {
			return false;
		}
		$articleText = "{{" . $this->msg( 'coll-savedbook_template' )->inContentLanguage()->text() . "}}\n\n";
		$collection = CollectionSession::getCollection();
		if ( $collection['title'] ) {
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
					if ( $item['currentVersion'] == 1 ) {
						$articleText .= ":[[" . $item['title'];
						if ( isset( $item['displaytitle'] ) && $item['displaytitle'] ) {
							$articleText .= "|" . $item['displaytitle'];
						}
						$articleText .= "]]\n";
					} else {
						$articleText .= ":[{{fullurl:" . $item['title'];
						$articleText .= "|oldid=" . $item['revision'] . "}} ";
						if ( isset( $item['displaytitle'] ) && $item['displaytitle'] ) {
							$articleText .= $item['displaytitle'];
						} else {
							$articleText .= $item['title'];
						}
						$articleText .= "]\n";
					}
				}
				// $articleText .= $item['revision'] . "/" . $item['latest']."\n";
			}
		}
		$t = $this->msg( 'coll-bookscategory' )->inContentLanguage();
		if ( !$t->isDisabled() ) {
			$catTitle = Title::makeTitle( NS_CATEGORY, $t->text() );
			if ( !is_null( $catTitle ) ) {
				$articleText .= "\n[[" . $catTitle->getPrefixedText() . "|" . wfEscapeWikiText( $title->getSubpageText() ) . "]]\n";
			}
		}

		$req = new DerivativeRequest(
			$this->getRequest(),
			array(
				'action' => 'edit',
				'title' => $title->getPrefixedText(),
				'text' => $articleText,
				'token' => $this->getUser()->getEditToken(),
		), true);
		$api = new ApiMain( $req, true );
		$api->execute();
		return true;
	}

	/**
	 * @return array
	 */
	function getLicenseInfos() {
		global $wgCollectionLicenseName, $wgCollectionLicenseURL, $wgRightsIcon;
		global $wgRightsPage, $wgRightsText, $wgRightsUrl;

		$licenseInfo = array(
			"type" => "license",
		);

		$from_msg = $this->msg( 'coll-license_url' )->inContentLanguage();
		if ( !$from_msg->isDisabled() ) {
			$licenseInfo['mw_license_url'] = $from_msg->text();
			return array( $licenseInfo );
		}

		if ( $wgCollectionLicenseName ) {
			$licenseInfo['name'] = $wgCollectionLicenseName;
		} else {
			$licenseInfo['name'] = $this->msg( 'coll-license' )->inContentLanguage()->text();
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

	/**
	 * @param $collection array
	 * @return string
	 */
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
		if ( isset( $collection['items'] ) ) {
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
		}
		$result['items'] = $items;

		$json = new Services_JSON();
		return $json->encode( $result );
	}

	/**
	 * @param $collection
	 * @param $referrer Title
	 * @param $writer
	 */
	function renderCollection( $collection, $referrer, $writer ) {
		global $wgContLang, $wgScriptPath, $wgScriptExtension;

		if ( !$writer ) {
			$writer = 'rl';
		}

		$response = self::mwServeCommand( 'render', array(
			'metabook' => $this->buildJSONCollection( $collection ),
			'base_url' => wfExpandUrl( $wgScriptPath, PROTO_CURRENT ),
			'script_extension' => $wgScriptExtension,
			'template_blacklist' => $this->msg( 'coll-template_blacklist_title' )->inContentLanguage()->plain(),
			'template_exclusion_category' => $this->msg( 'coll-exclusion_category_title' )->inContentLanguage()->plain(),
			'print_template_prefix' => $this->msg( 'coll-print_template_prefix' )->inContentLanguage()->plain(),
			'print_template_pattern' => $this->msg( 'coll-print_template_pattern' )->inContentLanguage()->plain(),
			'language' => $wgContLang->getCode(),
			'writer' => $writer,
		) );

		if ( !$response ) {
			return;
		}

		$query = 'bookcmd=rendering'
			. '&return_to=' . urlencode( $referrer->getPrefixedText() )
			. '&collection_id=' . urlencode( $response['collection_id'] )
			. '&writer=' . urlencode( $response['writer'] );
		if ( isset( $response['is_cached'] ) && $response['is_cached'] ) {
			$query .= '&is_cached=1';
		}
		$redirect = SkinTemplate::makeSpecialUrl( 'Book', $query );
		$this->getOutput()->redirect( $redirect );
	}

	function forceRenderCollection() {
		global $wgContLang, $wgScriptPath, $wgScriptExtension;

		$request = $this->getRequest();

		$collectionID = $request->getVal( 'collection_id', '' );
		$writer = $request->getVal( 'writer', 'rl' );

		$response = self::mwServeCommand( 'render', array(
			'collection_id' => $collectionID,
			'base_url' => wfExpandUrl( $wgScriptPath, PROTO_CURRENT ),
			'script_extension' => $wgScriptExtension,
			'template_blacklist' => $this->msg( 'coll-template_blacklist_title' )->inContentLanguage()->plain(),
			'template_exclusion_category' => $this->msg( 'coll-exclusion_category_title' )->inContentLanguage()->plain(),
			'print_template_prefix' => $this->msg( 'coll-print_template_prefix' )->inContentLanguage()->plain(),
			'print_template_pattern' => $this->msg( 'coll-print_template_pattern' )->inContentLanguage()->plain(),
			'language' => $wgContLang->getCode(),
			'writer' => $writer,
			'force_render' => true
		) );

		if ( !$response ) {
			return;
		}

		$query = 'bookcmd=rendering'
			. '&return_to=' . $request->getVal( 'return_to', '' )
			. '&collection_id=' . urlencode( $response['collection_id'] )
			. '&writer=' . urlencode( $response['writer'] );
		if ( $response['is_cached'] ) {
			$query .= '&is_cached=1';
		}
		$this->getOutput()->redirect( SkinTemplate::makeSpecialUrl( 'Book', $query ) );
	}

	function renderRenderingPage() {
		$request = $this->getRequest();

		$response = self::mwServeCommand( 'render_status', array(
			'collection_id' => $request->getVal( 'collection_id' ),
			'writer' => $request->getVal( 'writer' ),
		) );
		if ( !$response ) {
			return; // FIXME?
		}

		$this->setHeaders();

		$return_to = $request->getVal( 'return_to' );

		$query = 'collection_id=' . urlencode( $response['collection_id'] )
			. '&writer=' . urlencode( $response['writer'] )
			. '&return_to=' . urlencode( $return_to );

		$out = $this->getOutput();

		switch ( $response['state'] ) {
		case 'progress':
			$out->addHeadItem( 'refresh-nojs', '<noscript><meta http-equiv="refresh" content="2" /></noscript>' );
			$out->addInlineScript( 'var collection_id = "' . urlencode( $response['collection_id'] ) . '";' );
			$out->addInlineScript( 'var writer = "' . urlencode( $response['writer'] ) . '";' );
			$out->addInlineScript( 'var collection_rendering = true;' );
			$out->addModules( 'ext.collection' );
			$out->setPageTitle( $this->msg( 'coll-rendering_title' ) );

			if ( isset( $response['status']['status'] ) && $response['status']['status'] ) {
				$statusText = $response['status']['status'];
				if ( isset( $response['status']['article'] ) && $response['status']['article'] ) {
					$statusText .= ' ' . $this->msg( 'coll-rendering_article', $response['status']['article'] )->text();
				} elseif ( isset( $response['status']['page'] ) && $response['status']['page'] ) {
					$statusText .= ' ';
					$statusText .= $this->msg( 'coll-rendering_page' )->numParams( $response['status']['page'] )->text();
				}
				$status = $this->msg( 'coll-rendering_status', $statusText )->text();
			} else {
				$status = '';
			}

			$template = new CollectionRenderingTemplate();
			$template->set( 'status', $status );
			if ( !isset( $response['status']['progress'] ) ) {
				$response['status']['progress'] = 1.00;
			}
			$template->set( 'progress', $response['status']['progress'] );
			$out->addTemplate( $template );
			break;
		case 'finished':
			$out->setPageTitle( $this->msg( 'coll-rendering_finished_title' ) );

			$template = new CollectionFinishedTemplate();
			$template->set( 'download_url', wfExpandUrl( SkinTemplate::makeSpecialUrl( 'Book', 'bookcmd=download&' . $query ), PROTO_CURRENT ) );
			$template->set( 'is_cached', $request->getVal( 'is_cached' ) );
			$template->set( 'query', $query );
			$template->set( 'return_to', $return_to );
			$out->addTemplate( $template );
			break;
		default:
			$out->addWikiText( 'state: ' . $response['state'] );
		}
	}

	function download() {
		global $wgCollectionContentTypeToFilename;

		$request = $this->getRequest();

		$this->tempfile = tmpfile();
		$r = self::mwServeCommand( 'render_status', array(
			'collection_id' => $request->getVal( 'collection_id' ),
			'writer' => $request->getVal( 'writer' ),
		) );

		$info = false;
		if ( isset( $r['url'] ) ) {
			$req = MWHttpRequest::factory( $r['url'] );
			$req->setCallback( array( $this, 'writeToTempFile' ) );
			if ( $req->execute()->isOK() ) {
				$info = true;
			}
			$content_type = $r['content_type'];
			$content_length = $r['content_length'];
			$content_disposition = $r['content_disposition'];
		} else {
			$info = self::mwServeCommand( 'download', array(
				'collection_id' => $request->getVal( 'collection_id' ),
				'writer' => $request->getVal( 'writer' ),
			) );
			$content_type = $info['content_type'];
			$content_length = $info['download_content_length'];
			$content_disposition = null;
		}
		if ( !$info ) {
			$this->getOutput()->showErrorPage( 'coll-download_notfound_title', 'coll-download_notfound_text' );
			return;
		}
		wfResetOutputBuffers();
		header( 'Content-Type: ' . $content_type );
		header( 'Content-Length: ' . $content_length );
		if ( $content_disposition ) {
			header( 'Content-Disposition: ' . $content_disposition );
		} else {
			$ct_enc = explode( ';', $content_type );
			$ct = $ct_enc[0];
			if ( isset( $wgCollectionContentTypeToFilename[$ct] ) ) {
				header( 'Content-Disposition: ' . 'inline; filename=' . $wgCollectionContentTypeToFilename[$ct] );
			}
		}
		fseek( $this->tempfile, 0 );
		fpassthru( $this->tempfile );
		$this->getOutput()->disable();
	}

	/**
	 * @param $res
	 * @param $content
	 * @return int
	 */
	function writeToTempFile( $res, $content ) {
		return fwrite( $this->tempfile, $content );
	}

	/**
	 * @param $title Title
	 * @param $oldid int
	 * @param $writer
	 */
	function renderArticle( $title, $oldid, $writer ) {
		if ( is_null( $title ) ) {
			$this->getOutput()->showErrorPage( 'coll-notitle_title', 'coll-notitle_msg' );
			return;
		}
		$article = array(
			'type' => 'article',
			'content_type' => 'text/x-wiki',
			'title' => $title->getPrefixedText()
		);
		if ( $oldid ) {
			$article['revision'] = strval( $oldid );
		}

		$revision = Revision::newFromTitle( $title, $oldid );
		if ( $revision ) {
			$article['timestamp'] = wfTimestamp( TS_UNIX, $revision->getTimestamp() );
		}

		$this->renderCollection( array( 'items' => array( $article ) ), $title, $writer );
	}

	/**
	 * @param $collection
	 * @param $partner
	 */
	function postZIP( $collection, $partner ) {
		global $wgScriptPath, $wgScriptExtension;

		if ( !isset( $this->mPODPartners[$partner] ) ) {
			$this->getOutput()->showErrorPage( 'coll-invalid_podpartner_title', 'coll-invalid_podpartner_msg' );
			return;
		}

		$response = self::mwServeCommand( 'zip_post', array(
			'metabook' => $this->buildJSONCollection( $collection ),
			'base_url' => wfExpandUrl( $wgScriptPath, PROTO_CURRENT ),
			'script_extension' => $wgScriptExtension,
			'template_blacklist' => $this->msg( 'coll-template_blacklist_title' )->inContentLanguage()->plain(),
			'template_exclusion_category' => $this->msg( 'coll-exclusion_category_title' )->inContentLanguage()->plain(),
			'print_template_prefix' => $this->msg( 'coll-print_template_prefix' )->inContentLanguage()->plain(),
			'print_template_pattern' => $this->msg( 'coll-print_template_pattern' )->inContentLanguage()->plain(),
			'pod_api_url' => $this->mPODPartners[$partner]['posturl'],
		) );
		if ( !$response ) {
			return;
		}
		$this->getOutput()->redirect( $response['redirect_url'] );
	}

	/**
	 * @param $colltype
	 * @param $title
	 * @param $pcollname
	 * @param $ccollname
	 */
	private function renderSaveOverwritePage( $colltype, $title, $pcollname, $ccollname ) {
		$this->setHeaders();
		$this->getOutput()->setPageTitle( $this->msg( 'coll-save_collection' ) );

		$template = new CollectionSaveOverwriteTemplate();
		$template->set( 'title', $title );
		$template->set( 'pcollname', $pcollname );
		$template->set( 'ccollname', $ccollname );
		$template->set( 'colltype', $colltype );
		$this->getOutput()->addTemplate( $template );
	}

	/**
	 * @param $title
	 */
	private function renderLoadOverwritePage( $title ) {
		$this->setHeaders();
		$this->getOutput()->setPageTitle( $this->msg( 'coll-load_collection' ) );

		$template = new CollectionLoadOverwriteTemplate();
		$template->set( 'title', $title );
		$this->getOutput()->addTemplate( $template );
	}

	/**
	 * @param $command
	 * @param $args
	 * @return bool|array
	 */
	static function mwServeCommand( $command, $args ) {
		global $wgOut, $wgCollectionMWServeURL, $wgCollectionMWServeCredentials, $wgCollectionFormatToServeURL;

		$serveURL = $wgCollectionMWServeURL;
		if ( isset ( $args['writer'] ) ) {
			if ( array_key_exists( $args['writer'], $wgCollectionFormatToServeURL ) ) {
				$serveURL = $wgCollectionFormatToServeURL[ $args['writer'] ];
			}
		}

		$args['command'] = $command;
		if ( $wgCollectionMWServeCredentials ) {
			$args['login_credentials'] = $wgCollectionMWServeCredentials;
		}
		$response = Http::post($serveURL, array('postData' => $args));

		if ( !$response ) {
			$wgOut->showErrorPage(
				'coll-post_failed_title',
				'coll-post_failed_msg',
				array( $serveURL )
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
}
