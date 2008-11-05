<?php
/**
 * @defgroup Templates Templates
 * @file
 * @ingroup Templates
 */
if( !defined( 'MEDIAWIKI' ) ) die( -1 );

/**
 * HTML template for Special:Collection
 * @ingroup Templates
 */
class CollectionPageTemplate extends QuickTemplate {
	function execute() {		
		$mediapath = $GLOBALS['wgScriptPath'] . '/extensions/Collection/collection/';
?>

<table align="right" style="clear: both; float: right; margin-left: 20px; margin-bottom: 10px;" class="toccolours" width="50%">
	<tbody>
		<tr>
			<td>
				<h2><span class="mw-headline"><?php $this->msg('coll-book_title') ?></span></h2>
				<p><?php $this->msg('coll-book_text') ?></p>
				<div id="ppList">
					<?php foreach ($this->data['podpartners'] as $partner => $partnerData) { ?>
					<p>
						<form action="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'post_zip/')) ?>" method="get">
							<input type="hidden" name="partner" value="<?php echo htmlspecialchars($partner) ?>"/>
							<input type="submit" value="<?php echo wfMsgHtml('coll-order_from_pp', htmlspecialchars($partnerData['name'])) ?>"/>
							<a href="<?php echo htmlspecialchars($partnerData['url']) ?>" target="_blank"><?php echo wfMsgHtml('coll-about_pp', htmlspecialchars($partnerData['name'])) ?>&nbsp;<img src="<?php echo htmlspecialchars($partnerData['logourl']) ?>" alt="<?php echo htmlspecialchars($partnerData['name']) ?>"/></a>
						</form>
					</p>
					<?php } ?>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<table align="right" style="clear: both; float: right; margin-left: 20px; margin-bottom: 10px;" class="toccolours" width="50%">
	<tbody>
		<tr>
			<td>
				<h2><span class="mw-headline"><?php $this->msg('coll-download_title') ?></span></h2>
				<p><?php $this->msg('coll-download_text') ?></p>
				<form id="downloadForm" action="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'render/')) ?>" method="post">
					<?php if (count($this->data['formats']) == 1) {
						$writer = array_rand($this->data['formats']);
						$buttonLabel = wfMsgHtml('coll-download_as', htmlspecialchars($this->data['formats'][$writer]));
					?>
						<input type="hidden" name="writer" value="<?php echo htmlspecialchars($writer) ?>"></input>
					<?php } else {
						$buttonLabel = wfMsgHtml('coll-download');
					?>
					<label for="formatSelect"><?php $this->msg('coll-format_label') ?></label>
					<select id="formatSelect" name="writer">
						<?php foreach ($this->data['formats'] as $writer => $name) { ?>
						<option value="<?php echo htmlspecialchars($writer) ?>"><?php echo htmlspecialchars($name) ?></option>
						<?php	} ?>
					</select>
					<?php } ?>
					<input id="downloadButton" type="submit" value="<?php echo $buttonLabel ?>"></input>
				</form>
			</td>
		</tr>
	</tbody>
</table>

<table align="right" style="clear: both; float: right; margin-left: 20px; margin-bottom: 10px;" class="toccolours" width="50%">
	<tbody>
		<tr>
			<td>
				<h2><span class="mw-headline"><?php $this->msg('coll-save_collection_title') ?></span></h2>
				<?php if ($GLOBALS['wgUser']->isLoggedIn()) { ?>
				<p><?php $this->msg('coll-save_collection_text') ?></p>
					<form id="saveForm" action="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'save_collection/')) ?>" method="post">
						<input id="personalCollType" type="radio" name="colltype" value="personal" checked="checked"></input>
						<label for="personalCollType"><?php $this->msg('coll-personal_collection_label') ?></label>
						<label for="personalCollTitle"><?php echo htmlspecialchars($GLOBALS['wgUser']->getUserPage()->getPrefixedText() . '/' . wfMsgForContent('coll-collections') . '/') ?></label>
						<input id="personalCollTitle" type="text" name="pcollname"></input><br />
						<input id="communityCollType" type="radio" name="colltype" value="community"></input>
						<label for="communityCollType"><?php $this->msg('coll-community_collection_label') ?></label>
						<label for="communityCollTitle"><?php echo htmlspecialchars(Title::makeTitle($GLOBALS['wgCommunityCollectionNamespace'], wfMsgForContent('coll-collections'))->getPrefixedText() . '/') ?></label>
						<input id="communityCollTitle" type="text" name="ccollname" disabled="disabled"></input><br />
						<input id="saveButton" type="submit" value="<?php $this->msg('coll-save_collection') ?>"></input>
					</form>

				<?php } else {
					echo wfMsgExt('coll-login_to_save', array('parse'));
				}
				echo wfMsgExt('coll-save_category', array('parse'));
				?>
			</td>
		</tr>
	</tbody>
</table>

<?php $this->msgWiki('coll-intro_text') ?>

<h2><span class="mw-headline"><?php $this->msg('coll-my_collection') ?></span></h2>

<form action="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'set_titles/')) ?>" method="post">
	<table>
		<tbody>
			<tr>
				<th><label for="titleInput"><?php $this->msg('coll-title') ?></label></th>
				<td><input id="titleInput" type="text" name="collectionTitle" value="<?php echo htmlspecialchars($this->data['collection']['title']) ?>" size="32" /></td>
			</tr>
			<tr>
				<th><label for="subtitleInput"><?php $this->msg('coll-subtitle') ?></label></th>
				<td><input id="subtitleInput" type="text" name="collectionSubtitle" value="<?php echo htmlspecialchars($this->data['collection']['subtitle']) ?>" size="32" /></td>
			</tr>
			<noscript>
				<tr>
					<td colspan="2"><input type="submit" value="<?php $this->msg('coll-update') ?>" /></td>
				</tr>
			</noscript>
		</tbody>
	</table>
</form>

<div id="collectionListContainer">
<?php
$listTemplate = new CollectionListTemplate();
$listTemplate->set( 'collection', $this->data['collection'] );
$listTemplate->execute();
?>
</div>

<br style="clear:both;"/>

<div style="display:none">
	<div id="articleListItem" class="article">
		<a class="removeLink" href="javascript:void(0)" title="<?php $this->msg('coll-remove') ?>"><img src="<?php echo htmlspecialchars($mediapath . "cross.png") ?>" width="11" height="11" alt="<?php $this->msg('remove') ?>" /></a>
		&nbsp;
		<a class="moveUpLink" href="javascript:void(0)" title="<?php $this->msg('coll-move_up') ?>"><img src="<?php echo htmlspecialchars($mediapath . "up.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_up') ?>" /></a>
		<img class="moveUpDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<a class="moveDownLink" href="javascript:void(0)" title="<?php $this->msg('coll-move_down') ?>"><img src="<?php echo htmlspecialchars($mediapath . "down.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_down') ?>" /></a>
		<img class="moveDownDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<a class="articleLink" style="margin-left:1em;"></a>
	</div>
	<div id="chapterListItem" class="chapter" style="margin-top:0.3em;">
		<a class="removeLink" href="javascript:void(0)" title="<?php $this->msg('coll-remove') ?>"><img src="<?php echo htmlspecialchars($mediapath . "cross.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-remove') ?>" /></a>
		&nbsp;
		<a class="moveUpLink" href="javascript:void(0)" title="<?php $this->msg('coll-move_up') ?>"><img src="<?php echo htmlspecialchars($mediapath . "up.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_up') ?>" /></a>
		<img class="moveUpDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<a class="moveDownLink" href="javascript:void(0)" title="<?php $this->msg('coll-move_down') ?>"><img src="<?php echo htmlspecialchars($mediapath . "down.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_down') ?>" /></a>
		<img class="moveDownDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<strong class="chapterTitle" style="margin-left: 0.5em;"></strong> 
		<a class="renameLink" href="javascript:void(0)">[<?php $this->msg('coll-rename') ?>]</a>
	</div>
	<span id="newChapterText"><?php $this->msg('coll-new_chapter') ?></span>
	<span id="renameChapterText"><?php $this->msg('coll-rename_chapter') ?></span>
	<span id="enterTitleText"><?php $this->msg('coll-enter_title') ?></span>
	<span id="collectionExistsText"><?php $this->msg('coll-collection_exists') ?></span>
	<span id="errorResponseText"><?php $this->msg('coll-error_response') ?></span>
	<span id="emptyCollectionText"><?php $this->msg('coll-empty_collection') ?></span>
	<span id="revisionText"><?php $this->msg('coll-revision') ?></span>
	<span id="clearConfirmText"><?php $this->msg('coll-clear_confirm') ?></span>
</div>

<?php
	}
}

/**
 * HTML template for Special:Collection collection item list
 * @ingroup Templates
 */
class CollectionListTemplate extends QuickTemplate {
	function execute() {		
		$mediapath = $GLOBALS['wgScriptPath'] . '/extensions/Collection/collection/';
?>

<h3><span class="mw-headline"><?php $this->msg('coll-contents') ?></span></h3>

<a class="makeVisible" <?php if (!isset($this->data['is_ajax'])) { echo 'style="display:none"'; } ?> onclick="return coll_create_chapter()" href="javascript:void(0);">[<?php $this->msg('coll-create_chapter') ?>]</a>
<?php if (count($this->data['collection']['items']) > 0) { ?>
<span id="sortSpan"><a id="sortLink" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'sort_items/')) ?>">[<?php $this->msg('coll-sort_alphabetically') ?>]</a></span>
<span id="clearSpan"><a id="clearLink" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'clear_collection/')) ?>">[<?php $this->msg('coll-clear_collection') ?>]</a></span>
<?php } ?>

<div id="collectionList">
<?php
if (count($this->data['collection']['items']) == 0) {
	$this->msg('coll-empty_collection');
}
foreach($this->data['collection']['items'] as $index => $item) {
	if ($item['type'] == 'article') { ?>
	<div class="article">
		<a class="removeLink" onclick="return coll_remove_item(<?php echo $index ?>)" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'remove_item/', 'index=' . $index)) ?>" title="<?php $this->msg('coll-remove') ?>"><img src="<?php echo htmlspecialchars($mediapath . "cross.png") ?>" width="11" height="11" alt="<?php $this->msg('remove') ?>" /></a>
		<?php if ($index == 0) { ?>
			<img class="moveUpDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<?php } else { ?>
			<a class="moveUpLink" onclick="return coll_move_item(<?php echo $index . ', -1' ?>)" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'move_item/', 'delta=-1&index=' . $index)) ?>" title="<?php $this->msg('coll-move_up') ?>"><img src="<?php echo htmlspecialchars($mediapath . "up.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_up') ?>" /></a>
		<?php }
		if ($index == count($this->data['collection']['items']) - 1) { ?>
			<img class="moveDownDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<?php } else { ?>
			<a class="moveDownLink" onclick="return coll_move_item(<?php echo $index . ', 1' ?>)" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'move_item/', 'delta=1&index=' . $index)) ?>" title="<?php $this->msg('coll-move_down') ?>"><img src="<?php echo htmlspecialchars($mediapath . "down.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_down') ?>" /></a>
		<?php }
		if ($item['revision'] && $item['revision'] != $item['latest']) {
			$revision = '('. htmlspecialchars(wfMsg('coll-revision', $item['revision'])) . ')';
			$url = $item['url'] . '?oldid=' . $item['revision'];
		} else {
			$revision = '';
			$url = $item['url'];
		}
		?>
		<a class="articleLink" href="<?php echo $url ?>" style="margin-left:1em;">
			<?php if ($item['displaytitle']) {
				echo htmlspecialchars($item['displaytitle']);
			} else {
				echo htmlspecialchars($item['title']);
			}
			echo ' ' . $revision; ?>
		</a>
	</div>
	<?php } else if ($item['type'] == 'chapter') { ?>
	<div id="chapterListItem" class="chapter" style="margin-top:0.3em;">
		<a class="removeLink" onclick="return coll_remove_item(<?php echo $index ?>)" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'remove_item/', 'index=' . $index)) ?>" title="<?php $this->msg('coll-remove') ?>"><img src="<?php echo htmlspecialchars($mediapath . "cross.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-remove') ?>" /></a>
		<?php if ($index == 0) { ?>
			<img class="moveUpDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<?php } else { ?>
			<a class="moveUpLink" onclick="return coll_move_item(<?php echo $index . ', -1' ?>)" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'move_item/', 'delta=-1&index=' . $index)) ?>" title="<?php $this->msg('coll-move_up') ?>"><img src="<?php echo htmlspecialchars($mediapath . "up.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_up') ?>" /></a>
		<?php }
		if ($index == count($this->data['collection']['items']) - 1) { ?>
			<img class="moveDownDisabled" src="<?php echo htmlspecialchars($mediapath . "trans.png") ?>" width="11" height="11" alt="" />
		<?php } else { ?>
			<a class="moveDownLink" onclick="return coll_move_item(<?php echo $index . ', 1' ?>)" href="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'move_item/', 'delta=1&index=' . $index)) ?>" title="<?php $this->msg('coll-move_down') ?>"><img src="<?php echo htmlspecialchars($mediapath . "down.png") ?>" width="11" height="11" alt="<?php $this->msg('coll-move_down') ?>" /></a>
		<?php } ?>
		<strong class="chapterTitle" style="margin-left: 0.5em;"><?php echo htmlspecialchars($item['title']) ?></strong>
		<a class="makeVisible" <?php if (!isset($this->data['is_ajax'])) { echo 'style="display:none"'; } ?> onclick="return coll_rename_chapter(<?php echo $index . ', \'' . $item['title'] . '\''; ?>)" href="javascript:void(0)">[<?php $this->msg('coll-rename') ?>]</a>
	</div>
	<?php }
} ?>
</div>


<?php
	}
}

/**
 * HTML template for Special:Collection/load_collection/ when overwriting an exisiting collection
 * @ingroup Templates
 */
class CollectionLoadOverwriteTemplate extends QuickTemplate {
	function execute() {
?>

<p><?php $this->msg('coll-load_overwrite_text'); ?></p>

<form action="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'load_collection/')) ?>" method="post">
	<input name="overwrite" type="submit" value="<?php $this->msg('coll-overwrite') ?>"></input>
	<input name="append" type="submit" value="<?php $this->msg('coll-append') ?>"></input>
	<input name="cancel" type="submit" value="<?php $this->msg('coll-cancel') ?>"></input>
	<input name="colltitle" type="hidden" value="<?php echo htmlspecialchars($this->data['title']->getPrefixedText()) ?>"></input>
</form>

<?php
	}
}

/**
 * HTML template for Special:Collection/save_collection/ when overwriting an exisiting collection
 * @ingroup Templates
 */
class CollectionSaveOverwriteTemplate extends QuickTemplate {
	function execute() {
?>

<h2><span class="mw-headline"><?php $this->msg('coll-overwrite_title') ?></span></h2>

<p><?php echo $GLOBALS['wgParser']->parse(wfMsgNoTrans('coll-overwrite_text', $this->data['title']->getPrefixedText()), $GLOBALS['wgTitle'], $GLOBALS['wgOut']->parserOptions(), true)->getText() ?></p>

<form action="<?php echo htmlspecialchars(SkinTemplate::makeSpecialUrlSubpage('Collection', 'save_collection/')) ?>" method="post">
	<input name="overwrite" type="submit" value="<?php $this->msg('coll-yes') ?>"></input>
	<input name="abort" type="submit" value="<?php $this->msg('coll-no') ?>"></input>
	<input name="colltitle" type="hidden" value="<?php echo htmlspecialchars($this->data['title']->getPrefixedText()) ?>"></input>
</form>

<?php
	}
}

/**
 * HTML template for Special:Collection/rendering/ (in progress)
 * @ingroup Templates
 */
class CollectionRenderingTemplate extends QuickTemplate {
	function execute() {
?>


<span style="display:none" id="renderingStatusText"><?php echo wfMsg('coll-rendering_status', '%PARAM%') ?></span>
<span style="display:none" id="renderingArticle"><?php echo wfMsg('coll-rendering_article', '%PARAM%') ?></span>
<span style="display:none" id="renderingPage"><?php echo wfMsg('coll-rendering_page', '%PARAM%') ?></span>

<?php echo wfMsg('coll-rendering_text',	$GLOBALS['wgLang']->formatNum($this->data['progress']), $this->data['status']) ?>

<?php
	}
}

/**
 * HTML template for Special:Collection/rendering/ (finished)
 * @ingroup Templates
 */
class CollectionFinishedTemplate extends QuickTemplate {
	function execute() {

echo $GLOBALS['wgParser']->parse(
	wfMsgNoTrans('coll-rendering_finished_text', $this->data['download_url']),
	$GLOBALS['wgTitle'],
	$GLOBALS['wgOut']->parserOptions(),
	true
)->getText();

if ($this->data['is_cached']) {
	$forceRenderURL = SkinTemplate::makeSpecialUrlSubpage('Collection', 'forcerender/', $this->data['query']);
	echo wfMsg('coll-is_cached', htmlspecialchars($forceRenderURL));
}
if ($GLOBALS['wgCollectionTemplateExclusionCategory']) {
	echo $GLOBALS['wgParser']->parse(
		wfMsgNoTrans('coll-excluded-templates', $GLOBALS['wgCollectionTemplateExclusionCategory']),
		$GLOBALS['wgTitle'],
		$GLOBALS['wgOut']->parserOptions(),
		true
	)->getText();
}
if ($GLOBALS['wgPDFTemplateBlacklist']) {
	echo $GLOBALS['wgParser']->parse(
		wfMsgNoTrans('coll-blacklisted-templates', $GLOBALS['wgPDFTemplateBlacklist']),
		$GLOBALS['wgTitle'],
		$GLOBALS['wgOut']->parserOptions(),
		true
	)->getText();
}
if ($this->data['return_to']) {
	// We are doing this the hard way (i.e. via the HTML detour), to prevent
	// the parser from replacing [[:Special:Collection]] with a selflink.
	$t = Title::newFromText($this->data['return_to']);
	echo wfMsg(
		'coll-return_to_collection',
		htmlspecialchars($t->getFullURL()),
		htmlspecialchars($this->data['return_to'])
	);
}
?>

<?php
	}
}

