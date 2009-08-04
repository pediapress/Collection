(function() { // don't pollute the global namespace
 
// import the Navpopup-gadget script and CSS:
// Note: we have to user document.write(): if we'd use importScriptURI(), the script is not
// necessarily loaded before the onload event (e.g. in Safari):
document.write('<script type="text/javascript" src="' + wgCollectionNavPopupJSURL + '"></script>');
importStylesheetURI(wgCollectionNavPopupCSSURL);

var bookMode = null;
var collectionArticleList = [];
var collectionPopup;

// map pg.ns.index values to namespace numbers
var popup_gadget_ns_repair = {
		0: 0, 1: -1, 2: 1, 3: 2, 4: 3, 5: 4, 6: 5, 7: 6, 8: 7, 9: 8, 10: 9,
		11: 10, 12: 11, 13: 12, 14: 13, 15: 14, 16: 15, 17: 100, 18: 101
};

// replacement for Navpopup.prototype.unhide()
function collectionPopupUnhide() {
	this.runHooks('unhide', 'before');
	if (typeof this.visible != 'undefined' && !this.visible && !isBadLinkForCollection()) {
		this.mainDiv.innerHTML = getCollectionPopupHTML(this.mainDiv);
		this.mainDiv.style.display = 'inline';
		this.visible = true;
	}
	this.runHooks('unhide', 'after');
}

// replacement for Navpopup.prototype.setInnerHTML()
function collectionPopupSetInnerHTML () {
	if (!isBadLinkForCollection()) {
		this.mainDiv.innerHTML = getCollectionPopupHTML(this.mainDiv);
	}
}

// set the content of the popup
function getCollectionPopupHTML(popup) {
	collectionPopup = popup;
	var title = pg.current.article.value;
	var ns = getNamespaceNumber(pg.current.article.namespace());
	var stripped_title = title;
	if (ns != 0) {
		stripped_title = pg.current.article.stripNamespace();
	}
	stripped_title = stripped_title.replace(/"/, '\\"');
	var popupContent = '<a onclick="';
	var imgPrefix = '<img src="' + wgScriptPath + '/extensions/Collection/images/silk-';
	var imgSuffix = '.png" width="16" height="16" alt="" style="vertical-align: text-bottom" />&nbsp;';
	if (isInCollection(title)) {
		var js = 'popupCollectionCall("RemoveArticle", [' + ns + ', "' + stripped_title + '", 0]); return false;';
		popupContent += escapeQuotesHTML(js);
		popupContent += '" href="#">' + imgPrefix + 'remove' + imgSuffix + wgCollectionRemovePageText + '</a>';
	} else {
		if (ns != 14) {
			var js = 'popupCollectionCall("AddArticle", [' + ns + ', "' + stripped_title + '", 0]); return false;'
			popupContent += escapeQuotesHTML(js);
			popupContent += '" href="#">' + imgPrefix + 'add' + imgSuffix + wgCollectionAddPageText + '</a>'
		} else {
			var js = 'popupCollectionCall("AddCategory", ["' + stripped_title + '"]); return false;'
			popupContent += escapeQuotesHTML(js);
			popupContent += '" href="#">' + imgPrefix + 'add' + imgSuffix + wgCollectionAddCategoryText + '</a>';
		}
	}
	return popupContent;
}

// do XHR, refresh article list
function refreshCollectionArticleList() {
	sajax_request_type = 'POST';
	sajax_do_call('wfAjaxGetCollection', [], function(xhr) {
		var articles = [];
		function add_articles(items) {
			for (var i = 0; i < items.length; i++) {
				var item = items[i];
				if (item.type == 'article') {
					articles.push(item.title);
				} else if (item.type == 'chapter') {
					add_articles(item.items);
				}
			}
		}
		coll = JSON.parse(xhr.responseText);
		if (typeof coll.collection.items != 'undefined' ) {
			add_articles(coll.collection.items);
		}
		startCollectionPopups();
		collectionArticleList = articles;
	});
}
window.refreshCollectionArticleList = refreshCollectionArticleList;

// hide popup, execute func via XHR, refresh article list
function popupCollectionCall(func, args) {
	hideCollectionPopup();
	sajax_request_type = 'POST';
	sajax_do_call('wfAjaxCollection' + func, args, function(xhr) {
		refreshCollectionArticleList();
		sajax_request_type = 'GET';
		var oldid = null;
		if (args.length == 3) {
			oldid = args[2];
		}
		sajax_do_call('wfAjaxCollectionGetBookModeBoxContent', [wgCollectionAddRemoveState, oldid], function(xhr) {
			document.getElementById('coll-book_mode_box').innerHTML = xhr.responseText;
		});
	});
}
window.popupCollectionCall = popupCollectionCall;

// hide the popup
function hideCollectionPopup(popup) {
	collectionPopup.style.display = 'none';
	collectionPopup.visble = false;
}

// stop popups
function stopCollectionPopups() {
	if (bookMode != false) {
		var bodyDiv = document.getElementById("bodyContent");
		var links = bodyDiv.getElementsByTagName('a');
		for (var i = 0; i < links.length; i++) {
			removeTooltip(links[i]);
			links[i].onmousedown = null;
		}
		bookMode = false;
	}
}

// start popups
function startCollectionPopups() { 
	if (bookMode != true) {
		var bodyDiv = document.getElementById("bodyContent");
		var links = bodyDiv.getElementsByTagName('a');
		for (var i = 0; i < links.length; i++) {
						addTooltip(links[i]);
		}
		bookMode = true;
		}
}

// check if an article is in the collection
function isInCollection(title) {
	for (var i = 0; i < collectionArticleList.length; i++) {
				if (collectionArticleList[i] == title) return true;
	}
	return false;
}

// some links shouldn't create popups
function isBadLinkForCollection() {
		var link = pg.current.link.href;
	if (link.match(/#/)) return true;
	if (link.match(/redlink=1/)) return true;
	if (link.match(/action=edit/)) return true;
		var ns = getNamespaceNumber(pg.current.article.namespace());
		for (var i = 0; i < wgCollectionArticleNamespaces.length; i++) {
				if (ns == 14) return false; // NS_CATEGORY
				if (ns == wgCollectionArticleNamespaces[i]) return false;
		}
		return true;
}

function getNamespaceNumber(ns) {
		return popup_gadget_ns_repair[pg.ns.index[ns]];
}

addOnloadHook(function() {
	// replace two methods from the Navpopup object
	Navpopup.prototype.unhide = collectionPopupUnhide;
	Navpopup.prototype.setInnerHTML = collectionPopupSetInnerHTML;
	// disable article fetching:
	pg.option.simplePopups = true;
	refreshCollectionArticleList();
});

})();
