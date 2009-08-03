var popupVersion="en:MediaWiki:Gadget-popups.js " + /*/{{subst:Selfsubst/now string|js|/*/ "2009-05-04 15:11:41 (UTC)" /*/}}/*/;
// STARTFILE: main.js
// **********************************************************************
// **                                                                  **
// **             changes to this file affect many users.              **
// **           please discuss on the talk page before editing         **
// **                                                                  **
// **********************************************************************
// **                                                                  **
// ** if you do edit this file, be sure that your editor recognizes it **
// ** as utf8, or the weird and wonderful characters in the namespaces **
// **   below will be completely broken. You can check with the show   **
// **            changes button before submitting the edit.            **
// **                      test: مدیا מיוחד Мэдыя                      **
// **                                                                  **
// **********************************************************************

//////////////////////////////////////////////////
// Globals
//

// Trying to shove as many of these as possible into the pg (popup globals) object
function pg(){}; // dummy to stop errors
window.pg = {
	re: {},               // regexps
	ns: {},               // namespaces
	string: {},           // translatable strings
	wiki: {},             // local site info
	misc: {},             // YUCK PHOOEY
	option: {},           // options, see newOption etc
	optionDefault: {},    // default option values
	flag: {},             // misc flags
	cache: {},            // page and image cache
	structures: {},       // navlink structures
	timer: {},            // all sorts of timers (too damn many)
	counter: {},          // .. and all sorts of counters
	current: {},          // state info
	endoflist: null
};
window.pop = {          // wrap various functions in here
	init: {},
	util: {},
	endoflist: null
};
function popupsReady() {
	if (!window.pg) { return false; }
	if (!pg.flag) { return false; }
	if (!pg.flag.finishedLoading) { return false; }
	return true;
}

/// Local Variables: ///
/// mode:c ///
/// End: ///
// ENDFILE: main.js
// STARTFILE: actions.js
function setupTooltips(container, remove, force, popData) {
	log('setupTooltips, container='+container+', remove='+remove);
	if (!container) {
//<NOLITE>
		// the main initial call
		if (getValueOf('popupOnEditSelection') && window.doSelectionPopup && document && document.editform && document.editform.wpTextbox1) {
			document.editform.wpTextbox1.onmouseup=doSelectionPopup;
		}
//</NOLITE>
		// article/content is a structure-dependent thing
		container = defaultPopupsContainer();
	}

	if (!remove && !force && container.ranSetupTooltipsAlready) { return; }
	container.ranSetupTooltipsAlready = !remove;

	var anchors;
	anchors=container.getElementsByTagName('A');
	setupTooltipsLoop(anchors, 0, 250, 100, remove, popData);
}

function defaultPopupsContainer() {
    if (getValueOf('popupOnlyArticleLinks')) {
	    return document.getElementById('article') ||
		    document.getElementById('content') || 
		    document.getElementById('mw_content') || document;
    }
    return  document;
}

function setupTooltipsLoop(anchors,begin,howmany,sleep, remove, popData) {
	log(simplePrintf('setupTooltipsLoop(%s,%s,%s,%s,%s)', arguments));
	var finish=begin+howmany;
	var loopend = min(finish, anchors.length);
	var j=loopend - begin;
	log ('setupTooltips: anchors.length=' + anchors.length + ', begin=' + begin +
	     ', howmany=' + howmany + ', loopend=' + loopend + ', remove=' + remove);
	var doTooltip= remove ? removeTooltip : addTooltip;
	// try a faster (?) loop construct
	if (j > 0) {
		do {
			var a=anchors[loopend - j];
			if (!a || !a.href) {
				log('got null anchor at index ' + loopend - j);
				continue;
			}
			doTooltip(a, popData);
		} while (--j);
	}
	if (finish < anchors.length) {
		setTimeout(function() {
				setupTooltipsLoop(anchors,finish,howmany,sleep,remove,popData);},
			sleep);
	} else {
		if ( !remove && ! getValueOf('popupTocLinks')) { rmTocTooltips(); }
		pg.flag.finishedLoading=true;
	}
}

// eliminate popups from the TOC
// This also kills any onclick stuff that used to be going on in the toc
function rmTocTooltips() {
	var toc=document.getElementById('toc');
	if (toc) {
		var tocLinks=toc.getElementsByTagName('A');
		var tocLen = tocLinks.length;
		for (j=0; j<tocLen; ++j) {
			removeTooltip(tocLinks[j], true);
		}
	}
}

function addTooltip(a, popData) {
	if ( !isPopupLink(a) ) { return; }
	a.onmouseover=mouseOverWikiLink;
	a.onmouseout= mouseOutWikiLink;
	a.onmousedown = killPopup;
	a.hasPopup = true;
	a.popData = popData;
}

function removeTooltip(a) {
	if ( !a.hasPopup ) { return; }
	a.onmouseover = null;
	a.onmouseout = null;
	if (a.originalTitle) { a.title = a.originalTitle; }
	a.hasPopup=false;
}

function removeTitle(a) {
	if (a.originalTitle) { return; }
	a.originalTitle=a.title;
	a.title='';
}

function restoreTitle(a) {
	if ( a.title || !a.originalTitle ) { return; }
	a.title = a.originalTitle;
	a.originalTitle='';
}

function registerHooks(np) {
	var popupMaxWidth=getValueOf('popupMaxWidth');

	if (typeof popupMaxWidth == 'number') {
		var setMaxWidth = function () {
			np.mainDiv.style.maxWidth = popupMaxWidth + 'px';
			np.maxWidth = popupMaxWidth;

			// hack for IE
			// see http://www.svendtofte.com/code/max_width_in_ie/
			// use setExpression as documented here on msdn: http://tinyurl dot com/dqljn

			if (np.mainDiv.style.setExpression) {
				np.mainDiv.style.setExpression(
					'width', 'document.body.clientWidth > ' +
					popupMaxWidth + ' ? "' +popupMaxWidth + 'px": "auto"');
			}
		};
		np.addHook(setMaxWidth, 'unhide', 'before');
	}
//<NOLITE>
	if (window.addPopupShortcuts && window.rmPopupShortcuts) {
	    np.addHook(addPopupShortcuts, 'unhide', 'after');
	    np.addHook(rmPopupShortcuts, 'hide', 'before');
	}
//</NOLITE>
}


function mouseOverWikiLink(evt) {
	if (!window.popupsReady || !window.popupsReady()) { return; }
	if (!evt && window.event) {evt=window.event};
	return mouseOverWikiLink2(this, evt);
}

function footnoteTarget(a) {
	var aTitle=Title.fromAnchor(a);
	// We want ".3A" rather than "%3A" or "?" here, so use the anchor property directly
	var anch = aTitle.anchor;
	if ( ! /^(cite_note-|_note-|endnote)/.test(anch) ) { return false;	}

	var lTitle=Title.fromURL(location.href);
	if ( lTitle.toString(true) != aTitle.toString(true) ) {	return false; }

	var el=document.getElementById(anch);
	while ( el && typeof el.nodeName == 'string') {
		var nt = el.nodeName.toLowerCase();
		if ( nt == 'li' ) { return el; }
		else if ( nt == 'body' ) { return false; }
		else if ( el.parentNode ) { el=el.parentNode; }
		else { return false; }
	}
	return false;
}

function footnotePreview(x, navpop) {
	setPopupHTML('<hr>' + x.innerHTML, 'popupPreview',  navpop.idNumber,
		     getValueOf('popupSubpopups') ? function() {
		setupTooltips(document.getElementById('popupPreview' + navpop.idNumber));
	} : null);
}

// var modid=0;
// if(!window.opera) { window.opera={postError: console.log}; }

function modifierKeyHandler(a) {
	return function(evt) {
		//		opera.postError('modifierKeyHandler called' + (++modid));
		//		opera.postError(''+evt + modid);
		//		for (var i in evt) {
		//			opera.postError('' + modid + ' ' + i + ' ' + evt[i]);
		//		}
		//		opera.postError(''+evt.ctrlKey + modid);
		var mod=getValueOf('popupModifier');
		if (!mod) { return true; }

		if (!evt && window.event) {evt=window.event};
		//		opera.postError('And now....'+modid);
		//		opera.postError(''+evt+modid);
		//		opera.postError(''+evt.ctrlKey+modid);

		var modPressed = modifierPressed(evt);
		var action = getValueOf('popupModifierAction');

		// FIXME: probable bug - modifierPressed should be modPressed below?
		if ( action == 'disable' && modifierPressed ) { return true; }
		if ( action == 'enable' && !modifierPressed ) { return true; }

		mouseOverWikiLink2(a, evt);
	};
}

function modifierPressed(evt) {
		var mod=getValueOf('popupModifier');
		if (!mod) { return false; }

		if (!evt && window.event) {evt=window.event};
//		opera.postError('And now....'+modid);
//		opera.postError(''+evt+modid);
//		opera.postError(''+evt.ctrlKey+modid);

		return ( evt && mod && evt[mod.toLowerCase() + 'Key'] );

}

function dealWithModifier(a,evt) {
	if (!getValueOf('popupModifier')) { return false; }
	var action = getValueOf('popupModifierAction');
	if ( action == 'enable' && !modifierPressed(evt) ||
	     action == 'disable' && modifierPressed(evt) ) {
		// if the modifier is needed and not pressed, listen for it until
		// we mouseout of this link.
		restoreTitle(a);
		var addHandler='addEventListener';
		var rmHandler='removeEventListener';
		var on='';
		if (!document.addEventListener) {
			addHandler='attachEvent';
			rmHandler='detachEvent';
			on='on';
		}
		if (!document[addHandler]) { // forget it
			return;
		}

		a.modifierKeyHandler=modifierKeyHandler(a);

		switch (action) {
		case 'enable':
			document[addHandler](on+'keydown', a.modifierKeyHandler, false);
			a[addHandler](on+'mouseout', function() {
					document[rmHandler](on+'keydown',
							    a.modifierKeyHandler, false);
				}, true);
			break;
		case 'disable':
			document[addHandler](on+'keyup', a.modifierKeyHandler, false);
		}

		return true;
	}
	return false;
}

function mouseOverWikiLink2(a, evt) {
	if (dealWithModifier(a,evt)) { return; }
	if ( getValueOf('removeTitles') ) { removeTitle(a); }
	if ( a==pg.current.link && a.navpopup && a.navpopup.isVisible() ) { return; }
	pg.current.link=a;

	if (getValueOf('simplePopups') && pg.option.popupStructure===null) {
		// reset *default value* of popupStructure
		setDefault('popupStructure', 'original');
	}

	var article=(new Title()).fromAnchor(a);
	// set global variable (ugh) to hold article (wikipage)
	pg.current.article = article;
	if (pg.timer.image !== null) {
		clearInterval(pg.timer.image);
		pg.timer.image=null;
		pg.counter.checkImages=0;
	}

	if (!a.navpopup) {
		// FIXME: this doesn't behave well if you mouse out of a popup
		// directly into a link with the same href
		if (pg.current.linksHash[a.href] && false) {
			a.navpopup = pg.current.linksHash[a.href];
		}
		else {
			a.navpopup=newNavpopup(a, article);
			pg.current.linksHash[a.href] = a.navpopup;
			pg.current.links.push(a);
		}
	}
	if (a.navpopup.pending===null || a.navpopup.pending!==0) {
		// either fresh popups or those with unfinshed business are redone from scratch
		simplePopupContent(a, article);
	}
	a.navpopup.showSoonIfStable(a.navpopup.delay);

	getValueOf('popupInitialWidth');

	clearInterval(pg.timer.checkPopupPosition);
	pg.timer.checkPopupPosition=setInterval(checkPopupPosition, 600);

	if(getValueOf('simplePopups')) {
		if (getValueOf('popupPreviewButton') && !a.simpleNoMore) {
			var d=document.createElement('div');
			d.className='popupPreviewButtonDiv';
			var s=document.createElement('span');
			d.appendChild(s);
			s.className='popupPreviewButton';
			s['on' + getValueOf('popupPreviewButtonEvent')] = function() {
				a.simpleNoMore=true;
				nonsimplePopupContent(a,article);
			}
			s.innerHTML=popupString('show preview');
			setPopupHTML(d, 'popupPreview', a.navpopup.idNumber);
		}
		return;
	}

	if (a.navpopup.pending!==0 ) {
	    nonsimplePopupContent(a, article);
	}
}

// simplePopupContent: the content that is shown even when simplePopups is true
function simplePopupContent(a, article) {
	/* FIXME hack */ a.navpopup.hasPopupMenu=false;
	a.navpopup.setInnerHTML(popupHTML(a));
	fillEmptySpans({navpopup:a.navpopup});

	var dragHandle = getValueOf('popupDragHandle') || null;
	if (dragHandle && dragHandle != 'all') {
		dragHandle += a.navpopup.idNumber;
	}
	setTimeout(function(){a.navpopup.makeDraggable(dragHandle);}, 150);

//<NOLITE>
	if (getValueOf('popupRedlinkRemoval') && a.className=='new') {
		setPopupHTML('<br>'+popupRedlinkHTML(article), 'popupRedlink', a.navpopup.idNumber);
	}
//</NOLITE>
}

function debugData(navpopup) {
	if(getValueOf('popupDebugging') && navpopup.idNumber) {
		setPopupHTML('idNumber='+navpopup.idNumber + ', pending=' + navpopup.pending,
			     'popupError', navpopup.idNumber);
	}
}

function newNavpopup(a, article) {
	var navpopup = new Navpopup();
	navpopup.fuzz=5;
	navpopup.delay=getValueOf('popupDelay')*1000;
	// increment global counter now
	navpopup.idNumber = ++pg.idNumber;
	navpopup.parentAnchor = a;
	navpopup.parentPopup = (a.popData && a.popData.owner);
	navpopup.article = article;
	registerHooks(navpopup);
	return navpopup;
}


function nonsimplePopupContent(a, article) {
	var diff=null, history=null;
	var params=parseParams(a.href);
	var oldid=(typeof params.oldid=='undefined' ? null : params.oldid);
//<NOLITE>
	if(getValueOf('popupPreviewDiffs') && window.loadDiff) {
		diff=params.diff;
	}
	if(getValueOf('popupPreviewHistory')) {
		history=(params.action=='history');
	}
//</NOLITE>
	a.navpopup.pending=0;
	var x;
	pg.misc.gImage=null;
	if (x=footnoteTarget(a)) {
		footnotePreview(x, a.navpopup);
//<NOLITE>
	} else if ( diff || diff === 0 ) {
		loadDiff(article, oldid, diff, a.navpopup);
	} else if ( history ) {
		loadAPIPreview('history', article, a.navpopup);
	} else if ( pg.re.contribs.test(a.href) ) {
		loadAPIPreview('contribs', article, a.navpopup);
	} else if ( pg.re.backlinks.test(a.href) ) {
		loadAPIPreview('backlinks', article, a.navpopup);
    } else if ( // FIXME should be able to get all preview combinations with options
		article.namespace()==pg.ns.image &&
		( getValueOf('imagePopupsForImages') || ! anchorContainsImage(a) )
		) {
		loadAPIPreview('imagepagepreview', article, a.navpopup);
		loadImages(article);
//</NOLITE>
	} else {
		if (article.namespace() == pg.ns.category &&
				getValueOf('popupCategoryMembers')) {
			loadAPIPreview('category', article, a.navpopup);
		} else if ((article.namespace() == pg.ns.user || article.namespace() == pg.ns.usertalk) &&
				getValueOf('popupUserInfo')) {
			loadAPIPreview('userinfo', article, a.navpopup);
		}
		startArticlePreview(article, oldid, a.navpopup);
	}
}

function pendingNavpopTask(navpop) {
	if (navpop && navpop.pending===null) { navpop.pending=0; }
	++navpop.pending;
	debugData(navpop);
}

function completedNavpopTask(navpop) {
	if (navpop && navpop.pending) { --navpop.pending; }
	debugData(navpop);
}

function startArticlePreview(article, oldid, navpop) {
	navpop.redir=0;
	loadPreview(article, oldid, navpop);
}

function loadPreview(article, oldid, navpop) {
	pendingNavpopTask(navpop);
	if (!navpop.redir) { navpop.originalArticle=article; }
	if (!navpop.visible && getValueOf('popupLazyDownloads')) {
		var id=(navpop.redir) ? 'DOWNLOAD_PREVIEW_REDIR_HOOK' : 'DOWNLOAD_PREVIEW_HOOK';
		navpop.addHook(function() {
				getWiki(article, insertPreview, oldid, navpop);
				return true; }, 'unhide', 'before', id);
	} else {
		getWiki(article, insertPreview, oldid, navpop);
	}
}

function loadPreviewFromRedir(redirMatch, navpop) {
	// redirMatch is a regex match
	var target = new Title().fromWikiText(redirMatch[2]);
	// overwrite (or add) anchor from original target
	// mediawiki does overwrite; eg [[User:Lupin/foo3#Done]]
	if ( navpop.article.anchor ) { target.anchor = navpop.article.anchor; }
	var trailingRubbish=redirMatch[4];
	navpop.redir++;
	navpop.redirTarget=target;
//<NOLITE>
	if (window.redirLink) {
		var warnRedir = redirLink(target, navpop.article);
		setPopupHTML(warnRedir, 'popupWarnRedir', navpop.idNumber);
	}
//</NOLITE>
	navpop.article=target;
	fillEmptySpans({redir: true, redirTarget: target, navpopup:navpop});
	return loadPreview(target, null,  navpop);
}

function insertPreview(download) {
	if (!download.owner) { return; }

	var redirMatch = pg.re.redirect.exec(download.data);
	if (download.owner.redir===0 && redirMatch) {
		completedNavpopTask(download.owner);
		loadPreviewFromRedir(redirMatch, download.owner);
		return;
	}

	if (download.owner.visible || !getValueOf('popupLazyPreviews')) {
	    insertPreviewNow(download);
	} else {
		var id=(download.owner.redir) ? 'PREVIEW_REDIR_HOOK' : 'PREVIEW_HOOK';
		download.owner.addHook( function(){insertPreviewNow(download); return true;},
					'unhide', 'after', id );
	}
}

function insertPreviewNow(download) {
	if (!download.owner) { return; }
	var wikiText=download.data;
	var navpop=download.owner;
	completedNavpopTask(navpop);
	var art=navpop.redirTarget || navpop.originalArticle;

//<NOLITE>
	makeFixDabs(wikiText, navpop);
	if (getValueOf('popupSummaryData') && window.getPageInfo) {
		var info=getPageInfo(wikiText, download);
		setPopupTrailer(getPageInfo(wikiText, download), navpop.idNumber);
	}

	var imagePage='';
	if (art.namespace()==pg.ns.image) { imagePage=art.toString(); }
	else { imagePage=getValidImageFromWikiText(wikiText); }
	if(imagePage) { loadImages(Title.fromWikiText(imagePage)); }
//</NOLITE>

	if (getValueOf('popupPreviews')) { insertArticlePreview(download, art, navpop); }

}

function insertArticlePreview(download, art, navpop) {
	if (download && typeof download.data == typeof ''){
		if (art.namespace()==pg.ns.template && getValueOf('popupPreviewRawTemplates')) {
			// FIXME compare/consolidate with diff escaping code for wikitext
			var h='<hr><tt>' + download.data.entify().split('\\n').join('<br>\\n') + '</tt>';
			setPopupHTML(h, 'popupPreview', navpop.idNumber);
		}
		else {
			var p=prepPreviewmaker(download.data, art, navpop);
			p.showPreview();
		}
	}
}

function prepPreviewmaker(data, article, navpop) {
	// deal with tricksy anchors
	var d=anchorize(data, article.anchorString());
	var urlBase=joinPath([pg.wiki.articlebase, article.urlString()]);
	var p=new Previewmaker(d, urlBase, navpop);
	return p;
}


// Try to imitate the way mediawiki generates HTML anchors from section titles
function anchorize(d, anch) {
	if (!anch) { return d; }
	var anchRe=RegExp('=+\\s*' + literalizeRegex(anch).replace(/[_ ]/g, '[_ ]') + '\\s*=+');
	var match=d.match(anchRe);
	if(match && match.length > 0 && match[0]) { return d.substring(d.indexOf(match[0])); }

	// now try to deal with == foo [[bar|baz]] boom == -> #foo_baz_boom
	var lines=d.split('\n');
	for (var i=0; i<lines.length; ++i) {
		lines[i]=lines[i].replace(RegExp('[[]{2}([^|\\]]*?[|])?(.*?)[\\]]{2}', 'g'), '$2')
			.replace(/'''([^'])/g, '$1').replace(RegExp("''([^'])", 'g'), '$1');
		if (lines[i].match(anchRe)) {
			return d.split('\n').slice(i).join('\n').replace(RegExp('^[^=]*'), '');
		}
	}
	return d;
}

function killPopup() {
	if (getValueOf('popupShortcutKeys') && window.rmPopupShortcuts) { rmPopupShortcuts(); }
	if (!pg) { return; }
	pg.current.link && pg.current.link.navpopup && pg.current.link.navpopup.banish();
	pg.current.link=null;
	abortAllDownloads();
	window.stopImagesDownloading && stopImagesDownloading();
	if (pg.timer.checkPopupPosition !== null) {
		clearInterval(pg.timer.checkPopupPosition);
		pg.timer.checkPopupPosition=null;
	}
	if (pg.timer.checkImages !== null) { clearInterval(pg.timer.checkImages); pg.timer.checkImages=null; }
	if (pg.timer.image !== null) { clearInterval(pg.timer.image); pg.timer.image=null; }
	return true; // preserve default action
}
// ENDFILE: actions.js
// STARTFILE: domdrag.js
/**
   @fileoverview
   The {@link Drag} object, which enables objects to be dragged around.

   <pre>
   *************************************************
   dom-drag.js
   09.25.2001
   www.youngpup.net
   **************************************************
   10.28.2001 - fixed minor bug where events
   sometimes fired off the handle, not the root.
   *************************************************
   Pared down, some hooks added by [[User:Lupin]]

   Copyright Aaron Boodman.
   Saying stupid things daily since March 2001.
   </pre>
*/

/**
   Creates a new Drag object. This is used to make various DOM elements draggable.
   @constructor
*/
function Drag () {
	/**
	   Condition to determine whether or not to drag. This function should take one parameter, an Event.
	   To disable this, set it to <code>null</code>.
	   @type Function
	*/
	this.startCondition = null;
	/**
	   Hook to be run when the drag finishes. This is passed the final coordinates of
	   the dragged object (two integers, x and y). To disables this, set it to <code>null</code>.
	   @type Function
	*/
	this.endHook = null;
}

/**
   Gets an event in a cross-browser manner.
   @param {Event} e
   @private
*/
Drag.prototype.fixE = function(e) {
	if (typeof e == 'undefined') { e = window.event; }
	if (typeof e.layerX == 'undefined') { e.layerX = e.offsetX; }
	if (typeof e.layerY == 'undefined') { e.layerY = e.offsetY; }
	return e;
};
/**
   Initialises the Drag instance by telling it which object you want to be draggable, and what you want to drag it by.
   @param {DOMElement} o The "handle" by which <code>oRoot</code> is dragged.
   @param {DOMElement} oRoot The object which moves when <code>o</code> is dragged, or <code>o</code> if omitted.
*/
Drag.prototype.init = function(o, oRoot) {
	var dragObj      = this;
	this.obj = o;
	o.onmousedown    = function(e) { dragObj.start.apply( dragObj, [e]); };
	o.dragging       = false;
	o.draggable      = true;
	o.hmode          = true;
	o.vmode          = true;

	o.root = oRoot && oRoot !== null ? oRoot : o ;

	if (isNaN(parseInt(o.root.style.left, 10))) { o.root.style.left   = "0px"; }
	if (isNaN(parseInt(o.root.style.top,  10))) { o.root.style.top    = "0px"; }

	o.root.onthisStart  = function(){};
	o.root.onthisEnd    = function(){};
	o.root.onthis       = function(){};
};

/**
   Starts the drag.
   @private
   @param {Event} e
*/
Drag.prototype.start = function(e) {
	var o = this.obj; // = this;
	e = this.fixE(e);
	if (this.startCondition && !this.startCondition(e)) { return; }
	var y = parseInt(o.vmode ? o.root.style.top  : o.root.style.bottom, 10);
	var x = parseInt(o.hmode ? o.root.style.left : o.root.style.right,  10);
	o.root.onthisStart(x, y);

	o.lastMouseX    = e.clientX;
	o.lastMouseY    = e.clientY;

	var dragObj      = this;
	o.onmousemoveDefault    = document.onmousemove;
	o.dragging              = true;
	document.onmousemove    = function(e) { dragObj.drag.apply( dragObj, [e] ); };
	document.onmouseup      = function(e) { dragObj.end.apply( dragObj, [e] ); };
	return false;
};
/**
   Does the drag.
   @param {Event} e
   @private
*/
Drag.prototype.drag = function(e) {
	e = this.fixE(e);
	var o = this.obj;

	var ey    = e.clientY;
	var ex    = e.clientX;
	var y = parseInt(o.vmode ? o.root.style.top  : o.root.style.bottom, 10);
	var x = parseInt(o.hmode ? o.root.style.left : o.root.style.right,  10 );
	var nx, ny;

	nx = x + ((ex - o.lastMouseX) * (o.hmode ? 1 : -1));
	ny = y + ((ey - o.lastMouseY) * (o.vmode ? 1 : -1));

	this.obj.root.style[o.hmode ? "left" : "right"] = nx + "px";
	this.obj.root.style[o.vmode ? "top" : "bottom"] = ny + "px";
	this.obj.lastMouseX    = ex;
	this.obj.lastMouseY    = ey;

	this.obj.root.onthis(nx, ny);
	return false;
};

/**
   Ends the drag.
   @private
*/
Drag.prototype.end = function()  {
	document.onmousemove=this.obj.onmousemoveDefault;
	document.onmouseup   = null;
	this.obj.dragging    = false;
	if (this.endHook) {
		this.endHook( parseInt(this.obj.root.style[this.obj.hmode ? "left" : "right"], 10),
			      parseInt(this.obj.root.style[this.obj.vmode ? "top" : "bottom"], 10));
	}
};
// ENDFILE: domdrag.js
// STARTFILE: structures.js
//<NOLITE>
pg.structures.original={};
pg.structures.original.popupLayout=function () {
	return ['popupError', 'popupImage', 'popupTopLinks', 'popupTitle',
		'popupData', 'popupOtherLinks',
		'popupRedir', ['popupWarnRedir', 'popupRedirTopLinks',
			       'popupRedirTitle', 'popupRedirData', 'popupRedirOtherLinks'],
		'popupMiscTools', ['popupRedlink'],
		'popupPrePreviewSep', 'popupPreview', 'popupSecondPreview', 'popupPreviewMore', 'popupPostPreview', 'popupFixDab'];
};
pg.structures.original.popupRedirSpans=function () {
	return ['popupRedir', 'popupWarnRedir', 'popupRedirTopLinks',
		'popupRedirTitle', 'popupRedirData', 'popupRedirOtherLinks'];
};
pg.structures.original.popupTitle=function (x) {
	log ('defaultstructure.popupTitle');
	if (!getValueOf('popupNavLinks')) {
		return navlinkStringToHTML('<b><<mainlink>></b>',x.article,x.params);
	}
	return '';
};
pg.structures.original.popupTopLinks=function (x) {
	log ('defaultstructure.popupTopLinks');
	if (getValueOf('popupNavLinks')) { return navLinksHTML(x.article, x.hint, x.params); }
	return '';
};
pg.structures.original.popupImage=function(x) {
	log ('original.popupImage, x.article='+x.article+', x.navpop.idNumber='+x.navpop.idNumber);
	return imageHTML(x.article, x.navpop.idNumber);
};
pg.structures.original.popupRedirTitle=pg.structures.original.popupTitle;
pg.structures.original.popupRedirTopLinks=pg.structures.original.popupTopLinks;


function copyStructure(oldStructure, newStructure) {
	pg.structures[newStructure]={};
	for (var prop in pg.structures[oldStructure]) {
		pg.structures[newStructure][prop]=pg.structures[oldStructure][prop];
	}
}

copyStructure('original', 'nostalgia');
pg.structures.nostalgia.popupTopLinks=function(x)  {
	var str='';
	str += '<b><<mainlink|shortcut= >></b>';

	// user links
	// contribs - log - count - email - block
	// count only if applicable; block only if popupAdminLinks
	str += 'if(user){<br><<contribs|shortcut=c>>';
	str+='if(wikimedia){*<<count|shortcut=#>>}';
	str+='if(ipuser){}else{*<<email|shortcut=E>>}if(admin){*<<block|shortcut=b>>}}';

	// editing links
	// talkpage   -> edit|new - history - un|watch - article|edit
	// other page -> edit - history - un|watch - talk|edit|new
	var editstr='<<edit|shortcut=e>>';
	var editOldidStr='if(oldid){<<editOld|shortcut=e>>|<<revert|shortcut=v|rv>>|<<edit|cur>>}else{'
	+ editstr + '}'
	var historystr='<<history|shortcut=h>>';
	var watchstr='<<unwatch|unwatchShort>>|<<watch|shortcut=w|watchThingy>>';

	str+='<br>if(talk){' +
		editOldidStr+'|<<new|shortcut=+>>' + '*' + historystr+'*'+watchstr + '*' +
		'<b><<article|shortcut=a>></b>|<<editArticle|edit>>' +
		'}else{' + // not a talk page
		editOldidStr + '*' + historystr + '*' + watchstr + '*' +
		'<b><<talk|shortcut=t>></b>|<<editTalk|edit>>|<<newTalk|shortcut=+|new>>'
		+ '}';

	// misc links
	str += '<br><<whatLinksHere|shortcut=l>>*<<relatedChanges|shortcut=r>>';
	str += 'if(admin){<br>}else{*}<<move|shortcut=m>>';

	// admin links
	str += 'if(admin){*<<unprotect|unprotectShort>>|<<protect|shortcut=p>>*' +
	'<<undelete|undeleteShort>>|<<delete|shortcut=d>>}';
	return navlinkStringToHTML(str, x.article, x.params);
};
pg.structures.nostalgia.popupRedirTopLinks=pg.structures.nostalgia.popupTopLinks;

/** -- fancy -- **/
copyStructure('original', 'fancy');
pg.structures.fancy.popupTitle=function (x) {
	return navlinkStringToHTML('<font size=+0><<mainlink>></font>',x.article,x.params);
};
pg.structures.fancy.popupTopLinks=function(x) {
	var hist='<<history|shortcut=h|hist>>|<<lastEdit|shortcut=/|last>>if(mainspace_en){|<<editors|shortcut=E|eds>>}';
	var watch='<<unwatch|unwatchShort>>|<<watch|shortcut=w|watchThingy>>';
	var move='<<move|shortcut=m|move>>';
	return navlinkStringToHTML('if(talk){' +
				   '<<edit|shortcut=e>>|<<new|shortcut=+|+>>*' + hist + '*' +
				   '<<article|shortcut=a>>|<<editArticle|edit>>' + '*' + watch + '*' + move +
				   '}else{<<edit|shortcut=e>>*' + hist +
				   '*<<talk|shortcut=t|>>|<<editTalk|edit>>|<<newTalk|shortcut=+|new>>' +
				   '*' + watch + '*' + move+'}<br>', x.article, x.params);
};
pg.structures.fancy.popupOtherLinks=function(x) {
	var admin='<<unprotect|unprotectShort>>|<<protect|shortcut=p>>*<<undelete|undeleteShort>>|<<delete|shortcut=d|del>>';
	var user='<<contribs|shortcut=c>>if(wikimedia){|<<count|shortcut=#|#>>}';
	user+='if(ipuser){|<<arin>>}else{*<<email|shortcut=E|'+
	popupString('email')+'>>}if(admin){*<<block|shortcut=b>>}';

	var normal='<<whatLinksHere|shortcut=l|links here>>*<<relatedChanges|shortcut=r|related>>';
	return navlinkStringToHTML('<br>if(user){' + user + '*}if(admin){'+admin+'if(user){<br>}else{*}}' + normal,
				   x.article, x.params);
};
pg.structures.fancy.popupRedirTitle=pg.structures.fancy.popupTitle;
pg.structures.fancy.popupRedirTopLinks=pg.structures.fancy.popupTopLinks;
pg.structures.fancy.popupRedirOtherLinks=pg.structures.fancy.popupOtherLinks;


/** -- fancy2 -- **/
// hack for [[User:MacGyverMagic]]
copyStructure('fancy', 'fancy2');
pg.structures.fancy2.popupTopLinks=function(x) { // hack out the <br> at the end and put one at the beginning
	return '<br>'+pg.structures.fancy.popupTopLinks(x).replace(RegExp('<br>$','i'),'');
};
pg.structures.fancy2.popupLayout=function () { // move toplinks to after the title
	return ['popupError', 'popupImage', 'popupTitle', 'popupData', 'popupTopLinks', 'popupOtherLinks',
		'popupRedir', ['popupWarnRedir', 'popupRedirTopLinks', 'popupRedirTitle', 'popupRedirData', 'popupRedirOtherLinks'],
		'popupMiscTools', ['popupRedlink'],
		'popupPrePreviewSep', 'popupPreview', 'popupSecondPreview', 'popupPreviewMore', 'popupPostPreview', 'popupFixDab'];
};

/** -- menus -- **/
copyStructure('original', 'menus');
pg.structures.menus.popupLayout=function () {
	return ['popupError', 'popupImage', 'popupTopLinks', 'popupTitle', 'popupOtherLinks',
		'popupRedir', ['popupWarnRedir', 'popupRedirTopLinks', 'popupRedirTitle', 'popupRedirData', 'popupRedirOtherLinks'],
		'popupData', 'popupMiscTools', ['popupRedlink'],
		'popupPrePreviewSep', 'popupPreview', 'popupSecondPreview', 'popupPreviewMore', 'popupPostPreview', 'popupFixDab'];
};
function toggleSticky(uid) {
	var popDiv=document.getElementById('navpopup_maindiv'+uid);
	if (!popDiv) { return; }
	if (!popDiv.navpopup.sticky) { popDiv.navpopup.stick(); }
	else {
		popDiv.navpopup.unstick();
		popDiv.navpopup.hide();
	}
}
pg.structures.menus.popupTopLinks = function (x, shorter) {
	// FIXME maybe this stuff should be cached
	var s=[];
	var dropdiv='<div class="popup_drop">';
	var enddiv='</div>';
	var endspan='</span>';
	var hist='<<history|shortcut=h>>';
	if (!shorter) { hist = '<menurow>' + hist +
			'|<<historyfeed|rss>>if(mainspace_en){|<<editors|shortcut=E>>}</menurow>'; }
	var lastedit='<<lastEdit|shortcut=/|show last edit>>';
	var jsHistory='<<lastContrib|last set of edits>><<sinceMe|changes since mine>>';
	var linkshere='<<whatLinksHere|shortcut=l|what links here>>';
	var related='<<relatedChanges|shortcut=r|related changes>>';
	var search='<menurow><<search|shortcut=s>>if(wikimedia){|<<globalsearch|shortcut=g|global>>}' +
	'|<<google|shortcut=G|web>></menurow>';
	var watch='<menurow><<unwatch|unwatchShort>>|<<watch|shortcut=w|watchThingy>></menurow>';
	var protect='<menurow><<unprotect|unprotectShort>>|' +
	'<<protect|shortcut=p>>|<<protectlog|log>></menurow>';
	var del='<menurow><<undelete|undeleteShort>>|<<delete|shortcut=d>>|' +
	'<<deletelog|log>></menurow>';
	var move='<<move|shortcut=m|move page>>';
	var nullPurge='<menurow><<nullEdit|shortcut=n|null edit>>|<<purge|shortcut=P>></menurow>';
	var viewOptions='<menurow><<view|shortcut=v>>|<<render|shortcut=S>>|<<raw>></menurow>';
	var editRow='if(oldid){' +
	'<menurow><<edit|shortcut=e>>|<<editOld|shortcut=e|this&nbsp;revision>></menurow>' +
	'<menurow><<revert|shortcut=v>>|<<undo>></menurow>' + '}else{<<edit|shortcut=e>>}';
	var markPatrolled='if(rcid){<<markpatrolled|mark patrolled>>}';
	var newTopic='if(talk){<<new|shortcut=+|new topic>>}';
	var protectDelete='if(admin){' + protect + del + '}';

	if (getValueOf('popupActionsMenu')) {
		s.push( '<<mainlink>>*' + dropdiv + menuTitle('actions'));
	} else {
		s.push( dropdiv + '<<mainlink>>');
	}
	s.push( '<menu>')
	s.push( editRow + markPatrolled + newTopic + hist + lastedit )
	if (!shorter) { s.push(jsHistory); }
	s.push( move + linkshere + related)
	if (!shorter) { s.push(nullPurge + search); }
	if (!shorter) { s.push(viewOptions); }
	s.push('<hr>' + watch + protectDelete);
	s.push('<hr>' +
	       'if(talk){<<article|shortcut=a|view article>><<editArticle|edit article>>}' +
	       'else{<<talk|shortcut=t|talk page>><<editTalk|edit talk>>' +
	       '<<newTalk|shortcut=+|new topic>>}</menu>' + enddiv);

	// user menu starts here
	var email='<<email|shortcut=E|email user>>';
	var contribs=	'if(wikimedia){<menurow>}<<contribs|shortcut=c|contributions>>if(wikimedia){</menurow>}' +
	'if(admin){<menurow><<deletedContribs>></menurow>}';


	s.push('if(user){*' + dropdiv + menuTitle('user'));
	s.push('<menu>'); +
	s.push('<menurow><<userPage|shortcut=u|user&nbsp;page>>|<<userSpace|space>></menurow>');
	s.push('<<userTalk|shortcut=t|user talk>><<editUserTalk|edit user talk>>' +
	       '<<newUserTalk|shortcut=+|leave comment>>');
	if(!shorter) { s.push( 'if(ipuser){<<arin>>}else{' + email + '}') }
	else { s.push( 'if(ipuser){}else{' + email + '}') }
	s.push('<hr>' + contribs + '<<userlog|shortcut=L|user log>>');
	s.push('if(wikimedia){<<count|shortcut=#|edit counter>>}');
	s.push('if(admin){<menurow><<unblock|unblockShort>>|<<block|shortcut=b|block user>></menurow>}');
	s.push('<<blocklog|shortcut=B|block log>>' + getValueOf('popupExtraUserMenu'));
	s.push('</menu>'  + enddiv + '}');

	// popups menu starts here
	if (getValueOf('popupSetupMenu') && !x.navpop.hasPopupMenu /* FIXME: hack */) {
		x.navpop.hasPopupMenu=true;
		s.push('*' + dropdiv + menuTitle('popupsMenu') + '<menu>');
		s.push('<<togglePreviews|toggle previews>>');
		s.push('<<purgePopups|reset>>');
		s.push('<<disablePopups|disable>>');
		s.push('</menu>'+enddiv);
	}
	return navlinkStringToHTML(s.join(''), x.article, x.params);
};

function menuTitle(s) {
	return '<a href="#" noPopup=1>' + popupString(s) + '</a>';
}

pg.structures.menus.popupRedirTitle=pg.structures.menus.popupTitle;
pg.structures.menus.popupRedirTopLinks=pg.structures.menus.popupTopLinks;

copyStructure('menus', 'shortmenus');
pg.structures.shortmenus.popupTopLinks=function(x) {
	return pg.structures.menus.popupTopLinks(x,true);
};
pg.structures.shortmenus.popupRedirTopLinks=pg.structures.shortmenus.popupTopLinks;

copyStructure('shortmenus', 'dabshortmenus');
pg.structures.dabshortmenus.popupLayout=function () {
	return ['popupError', 'popupImage', 'popupTopLinks', 'popupTitle', 'popupOtherLinks',
		'popupRedir', ['popupWarnRedir', 'popupRedirTopLinks', 'popupRedirTitle', 'popupRedirData', 'popupRedirOtherLinks'],
		'popupData', 'popupMiscTools', ['popupRedlink'], 'popupFixDab',
		'popupPrePreviewSep', 'popupPreview', 'popupSecondPreview', 'popupPreviewMore', 'popupPostPreview'];
};

copyStructure('menus', 'dabmenus');
pg.structures.dabmenus.popupLayout=pg.structures.dabshortmenus.popupLayout;


//</NOLITE>
pg.structures.lite={};
pg.structures.lite.popupLayout=function () {
	return ['popupTitle', 'popupPreview' ];
};
pg.structures.lite.popupTitle=function (x) {
	log (x.article + ': structures.lite.popupTitle');
	//return navlinkStringToHTML('<b><<mainlink>></b>',x.article,x.params);
	return '<div><span class="popup_mainlink"><b>' + x.article.toString() + '</b></span></div>';
};
// ENDFILE: structures.js
// STARTFILE: autoedit.js
//<NOLITE>
function getParamValue(paramName, h) {
	if (typeof h == 'undefined' ) { h = document.location.href; }
	var cmdRe=RegExp('[&?]'+paramName+'=([^&]*)');
	var m=cmdRe.exec(h);
	if (m) {
		try {
			return decodeURIComponent(m[1]);
		} catch (someError) {}
	}
	return null;
}

function substitute(data,cmdBody) {
	// alert('sub\nfrom: '+cmdBody.from+'\nto: '+cmdBody.to+'\nflags: '+cmdBody.flags);
	var fromRe=RegExp(cmdBody.from, cmdBody.flags);
	return data.replace(fromRe, cmdBody.to);
}

function execCmds(data, cmdList) {
	for (var i=0; i<cmdList.length; ++i) {
		data=cmdList[i].action(data, cmdList[i]);
	}
	return data;
}

function parseCmd(str) {
	// returns a list of commands
	if (!str.length) { return []; }
	var p=false;
	switch (str.charAt(0)) {
	case 's':
		p=parseSubstitute(str);
		break;
	default:
		return false;
	}
	if (p) { return [p].concat(parseCmd(p.remainder)); }
	return false;
}

function unEscape(str, sep) {
	return str.split('\\\\').join('\\').split('\\'+sep).join(sep).split('\\n').join('\n');
}


function parseSubstitute(str) {
	// takes a string like s/a/b/flags;othercmds and parses it

	var from,to,flags,tmp;

	if (str.length<4) { return false; }
	var sep=str.charAt(1);
	str=str.substring(2);

	tmp=skipOver(str,sep);
	if (tmp) { from=tmp.segment; str=tmp.remainder; }
	else { return false; }

	tmp=skipOver(str,sep);
	if (tmp) { to=tmp.segment; str=tmp.remainder; }
	else { return false; }

	flags='';
	if (str.length) {
		tmp=skipOver(str,';') || skipToEnd(str, ';');
		if (tmp) {flags=tmp.segment; str=tmp.remainder; }
	}

	return {action: substitute, from: from, to: to, flags: flags, remainder: str};

}

function skipOver(str,sep) {
	var endSegment=findNext(str,sep);
	if (endSegment<0) { return false; }
	var segment=unEscape(str.substring(0,endSegment), sep);
	return {segment: segment, remainder: str.substring(endSegment+1)};
}

function skipToEnd(str,sep) {
	return {segment: str, remainder: ''};
}

function findNext(str, ch) {
	for (var i=0; i<str.length; ++i) {
		if (str.charAt(i)=='\\') { i+=2; }
		if (str.charAt(i)==ch) { return i; }
	}
	return -1;
}

function setCheckbox(param, box) {
	var val=getParamValue(param);
	if (val!==null) {
		switch (val) {
		case '1': case 'yes': case 'true':
			box.checked=true;
			break;
		case '0': case 'no':  case 'false':
			box.checked=false;
		}
	}
}

function autoEdit() {
	if (!setupPopups.completed) { setupPopups(); }
	if (!document.editform || !window.wgEnableAPI || !wgEnableAPI ) { return false; }
	if (window.autoEdit.alreadyRan) { return false; }
	window.autoEdit.alreadyRan=true;
	var cmdString=getParamValue('autoedit');
	if (cmdString) {
		try {
			var editbox=document.editform.wpTextbox1;
		} catch (dang) { return; }
		var cmdList=parseCmd(cmdString);
		var input=editbox.value;
		var output=execCmds(input, cmdList);
		editbox.value=output;
		// wikEd user script compatibility
		if (typeof(wikEdUseWikEd) != 'undefined') {
			if (wikEdUseWikEd == true) {
				WikEdUpdateFrame();
			}
		}
	}
	setCheckbox('autominor', document.editform.wpMinoredit);
	setCheckbox('autowatch', document.editform.wpWatchthis);

	var rvid = getParamValue('autorv');
	if (rvid) {
		var url=pg.wiki.wikibase + '/api.php?action=query&format=json&prop=revisions&revids='+rvid;
		startDownload(url, null, autoEdit2);
	} else { autoEdit2(); }
}

function autoEdit2(d) {
	var summary=getParamValue('autosummary');
	var summaryprompt=getParamValue('autosummaryprompt');
	var summarynotice='';
	if (d && d.data && getParamValue('autorv')) {
		var s = getRvSummary(summary, d.data);
		if (s===false) {
			summaryprompt=true;
			summarynotice=popupString('Failed to get revision information, please edit manually.\n\n');
			summary = simplePrintf(summary, [getParamValue('autorv'), '(unknown)', '(unknown)']);
		} else { summary = s; }
	}
	if (summaryprompt) {
		var txt= summarynotice +
			popupString('Enter a non-empty edit summary or press cancel to abort');
		var response=prompt(txt, summary);
		if (response) { summary=response; }
		else { return; }
	}
	if (summary) { document.editform.wpSummary.value=summary; }
	// Attempt to avoid possible premature clicking of the save button
	// (maybe delays in updates to the DOM are to blame?? or a red herring)
	setTimeout(autoEdit3, 100);
}

function autoClickToken() {
    return document.cookie.substr(document.cookie.indexOf("session=")+8,4);
}

function autoEdit3() {
    if( getParamValue('actoken') != autoClickToken()) return;

	var btn=getParamValue('autoclick');
	if (btn) {
		if (document.editform && document.editform[btn]) {
			var button=document.editform[btn];
			var msg=tprintf('The %s button has been automatically clicked. Please wait for the next page to load.',
					[ button.value ]);
			bannerMessage(msg);
			document.title='('+document.title+')';
			button.click();
		} else {
			alert(tprintf('Could not find button %s. Please check the settings in your javascript file.',
				      [ btn ]));
		}
	}
}

function bannerMessage(s) {
	var headings=document.getElementsByTagName('h1');
	if (headings) {
		var div=document.createElement('div');
		div.innerHTML='<font size=+1><b>' + s + '</b></font>';
		headings[0].parentNode.insertBefore(div, headings[0]);
	}
}

function getRvSummary(template, json) {
	try {
	    var o=getJsObj(json);
	    var edit = anyChild(o.query.pages).revisions[0];
	} catch (badness) {return false;}
	var timestamp = edit.timestamp.split(/[A-Z]/g).join(' ').replace(/^ *| *$/g, '');
	return simplePrintf(template, [edit.revid, timestamp, edit.user]);
}

//</NOLITE>
// ENDFILE: autoedit.js
// STARTFILE: downloader.js
/**
   @fileoverview
   {@link Downloader}, a xmlhttprequest wrapper, and helper functions.
*/

/**
   Creates a new Downloader
   @constructor
   @class The Downloader class. Create a new instance of this class to download stuff.
   @param {String} url The url to download. This can be omitted and supplied later.
*/
function Downloader(url) {
	// Source: http://jibbering.com/2002/4/httprequest.html
	/** xmlhttprequest object which we're wrapping */
	this.http = false;

	/*@cc_on @*/
	/*@if (@_jscript_version >= 5)
	// JScript gives us Conditional compilation,
	// we can cope with old IE versions.
	// and security blocked creation of the objects.
	try {
	this.http = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
	this.http = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
	// this.http = false;
	}
	}
	@end @*/

	if (! this.http && typeof XMLHttpRequest!='undefined') { this.http = new XMLHttpRequest(); }
	/**
	    The url to download
	    @type String
	*/
	this.url = url;
	/**
	    A universally unique ID number
	    @type integer
	*/
	this.id=null;
	/**
	    Modification date, to be culled from the incoming headers
	    @type Date
	    @private
	*/
	this.lastModified = null;
	/**
	    What to do when the download completes successfully
	    @type Function
	    @private
	*/
	this.callbackFunction = null;
	/**
	    What to do on failure
	    @type Function
	    @private
	*/
	this.onFailure = null;
	/**
	    Flag set on <code>abort</code>
	    @type boolean
	*/
	this.aborted = false;
	/**
	   HTTP method. See http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html for possibilities.
	   @type String
	*/
	this.method='GET';
	/**
	    Async flag.
	    @type boolean
	*/
	this.async=true;
}

new Downloader();

/** Submits the http request. */
Downloader.prototype.send = function (x) {
	if (!this.http) { return null; }
	return this.http.send(x);
};
/** Aborts the download, setting the <code>aborted</code> field to true.  */
Downloader.prototype.abort = function () {
	if (!this.http) { return null; }
	this.aborted=true;
	return this.http.abort();
};
/** Returns the downloaded data. */
Downloader.prototype.getData = function () {if (!this.http) { return null; } return this.http.responseText;};
/** Prepares the download. */
Downloader.prototype.setTarget = function () {
	if (!this.http) { return null; }
	this.http.open(this.method, this.url, this.async);
};
/** Gets the state of the download. */
Downloader.prototype.getReadyState=function () {if (!this.http) { return null; } return this.http.readyState;};

pg.misc.downloadsInProgress = { };

/** Starts the download.
    Note that setTarget {@link Downloader#setTarget} must be run first
*/
Downloader.prototype.start=function () {
	if (!this.http) { return; }
	pg.misc.downloadsInProgress[this.id] = this;
	this.http.send(null);
};

/** Gets the 'Last-Modified' date from the download headers.
    Should be run after the download completes.
    Returns <code>null</code> on failure.
    @return {Date}
*/
Downloader.prototype.getLastModifiedDate=function () {
	if(!this.http) { return null; }
	var lastmod=null;
	try {
		lastmod=this.http.getResponseHeader('Last-Modified');
	} catch (err) {}
	if (lastmod) { return new Date(lastmod); }
	return null;
};

/** Sets the callback function.
    @param {Function} f callback function, called as <code>f(this)</code> on success
*/
Downloader.prototype.setCallback = function (f) {
	if(!this.http) { return; }
	this.http.onreadystatechange = f;
};

Downloader.prototype.getStatus = function() { if (!this.http) { return null; } return this.http.status; };

//////////////////////////////////////////////////
// helper functions

/** Creates a new {@link Downloader} and prepares it for action.
    @param {String} url The url to download
    @param {integer} id The ID of the {@link Downloader} object
    @param {Function} callback The callback function invoked on success
    @return {String/Downloader} the {@link Downloader} object created, or 'ohdear' if an unsupported browser
*/
function newDownload(url, id, callback, onfailure) {
	var d=new Downloader(url);
	if (!d.http) { return 'ohdear'; }
	d.id=id;
	d.setTarget();
	if (!onfailure) {
		onfailure=2;
	}
	var f = function () {
		if (d.getReadyState() == 4) {
			delete pg.misc.downloadsInProgress[this.id];
			try {
				if ( d.getStatus() == 200 ) {
					d.data=d.getData();
					d.lastModified=d.getLastModifiedDate();
					callback(d);
				} else if (typeof onfailure == typeof 1) {
					if (onfailure > 0) {
						// retry
						newDownload(url, id, callback, onfailure - 1);
					}
				} else if (typeof onfailure == 'function') {
					onfailure(d,url,id,callback);
				}
			} catch (somerr) { /* ignore it */ }
		}
	};
	d.setCallback(f);
	return d;
}
/** Simulates a download from cached data.
    The supplied data is put into a {@link Downloader} as if it had downloaded it.
    @param {String} url The url.
    @param {integer} id The ID.
    @param {Function} callback The callback, which is invoked immediately as <code>callback(d)</code>,
    where <code>d</code> is the new {@link Downloader}.
    @param {String} data The (cached) data.
    @param {Date} lastModified The (cached) last modified date.
*/
function fakeDownload(url, id, callback, data, lastModified, owner) {
	var d=newDownload(url,callback);
	d.owner=owner;
	d.id=id; d.data=data;
	d.lastModified=lastModified;
	return callback(d);
}

/**
   Starts a download.
   @param {String} url The url to download
   @param {integer} id The ID of the {@link Downloader} object
   @param {Function} callback The callback function invoked on success
   @return {String/Downloader} the {@link Downloader} object created, or 'ohdear' if an unsupported browser
*/
function startDownload(url, id, callback) {
	var d=newDownload(url, id, callback);
	if (typeof d == typeof '' ) { return d; }
	d.start();
	return d;
}

/**
   Aborts all downloads which have been started.
*/
function abortAllDownloads() {
	for ( var x in pg.misc.downloadsInProgress ) {
		try {
			pg.misc.downloadsInProgress[x].aborted=true;
			pg.misc.downloadsInProgress[x].abort();
			delete pg.misc.downloadsInProgress[x];
		} catch (e) { }
	}
}
// ENDFILE: downloader.js
// STARTFILE: livepreview.js
// TODO: location is often not correct (eg relative links in previews)

/**
 * InstaView - a Mediawiki to HTML converter in JavaScript
 * Version 0.6.1
 * Copyright (C) Pedro Fayolle 2005-2006
 * http://en.wikipedia.org/wiki/User:Pilaf
 * Distributed under the BSD license
 *
 * Changelog:
 *
 * 0.6.1
 * - Fixed problem caused by \r characters
 * - Improved inline formatting parser
 *
 * 0.6
 * - Changed name to InstaView
 * - Some major code reorganizations and factored out some common functions
 * - Handled conversion of relative links (i.e. [[/foo]])
 * - Fixed misrendering of adjacent definition list items
 * - Fixed bug in table headings handling
 * - Changed date format in signatures to reflect Mediawiki's
 * - Fixed handling of [[:Image:...]]
 * - Updated MD5 function (hopefully it will work with UTF-8)
 * - Fixed bug in handling of links inside images
 *
 * To do:
 * - Better support for <math>
 * - Full support for <nowiki>
 * - Parser-based (as opposed to RegExp-based) inline wikicode handling (make it one-pass and bullet-proof)
 * - Support for templates (through AJAX)
 * - Support for coloured links (AJAX)
 */


var Insta = {}

function setupLivePreview() {

    // options
    Insta.conf =
	{
	    baseUrl: '',

	    user: {},

	    wiki: {
		lang: pg.wiki.lang,
		interwiki: pg.wiki.interwiki,
		default_thumb_width: 180
	    },

	    paths: {
		articles: '/' + joinPath([pg.wiki.prePath, pg.wiki.articlePath]) + '/',
		math: '/math/', // FIXME
		images: ( window.getImageUrlStart ? getImageUrlStart(pg.wiki.hostname) : ''),
		images_fallback: 'http://upload.wikimedia.org/wikipedia/commons/',
		magnify_icon: 'skins/common/images/magnify-clip.png'
	    },

	    locale: {
		user: pg.ns.user,
		image: pg.ns.image,
		category: pg.ns.category,
		// shouldn't be used in popup previews, i think
		months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
	    }
	}

    // options with default values or backreferences
    with (Insta.conf) {
	user.name = user.name || 'Wikipedian'
	user.signature = '[['+locale.user+':'+user.name+'|'+user.name+']]'
	//paths.images = 'http://upload.wikimedia.org/wikipedia/' + wiki.lang + '/'
    }

    // define constants
    Insta.BLOCK_IMAGE = new RegExp('^\\[\\[(?:File|Image|'+Insta.conf.locale.image+
				       '):.*?\\|.*?(?:frame|thumbnail|thumb|none|right|left|center)', 'i');

}


Insta.dump = function(from, to)
{
	if (typeof from == 'string') from = document.getElementById(from)
	if (typeof to == 'string') to = document.getElementById(to)
	to.innerHTML = this.convert(from.value)
}

Insta.convert = function(wiki)
{
	var	ll = (typeof wiki == 'string')? wiki.replace(/\r/g,'').split(/\n/): wiki, // lines of wikicode
		o='',	// output
		p=0,	// para flag
		$r	// result of passing a regexp to $()

	// some shorthands
	function remain() { return ll.length }
	function sh() { return ll.shift() } // shift
	function ps(s) { o+=s } // push

	function f() // similar to C's printf, uses ? as placeholders, ?? to escape question marks
	{
		var i=1,a=arguments,f=a[0],o='',c,p
		for (;i<a.length; i++) if ((p=f.indexOf('?'))+1) {
			// allow character escaping
			i -= c=f.charAt(p+1)=='?'?1:0
			o += f.substring(0,p)+(c?'?':a[i])
			f=f.substr(p+1+c)
		} else break;
		return o+f
	}

	function html_entities(s) { return s.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;") }

	function max(a,b) { return (a>b)?a:b }
	function min(a,b) { return (a<b)?a:b }

	// return the first non matching character position between two strings
	function str_imatch(a, b)
	{
		for (var i=0, l=min(a.length, b.length); i<l; i++) if (a.charAt(i)!=b.charAt(i)) break
		return i
	}

	// compare current line against a string or regexp
	// if passed a string it will compare only the first string.length characters
	// if passed a regexp the result is stored in $r
	function $(c) { return (typeof c == 'string') ? (ll[0].substr(0,c.length)==c) : ($r = ll[0].match(c)) }

	function $$(c) { return ll[0]==c } // compare current line against a string
	function _(p) { return ll[0].charAt(p) } // return char at pos p

	function endl(s) { ps(s); sh() }

	function parse_list()
	{
		var prev='';

		while (remain() && $(/^([*#:;]+)(.*)$/)) {

			var l_match = $r

			sh()

			var ipos = str_imatch(prev, l_match[1])

			// close uncontinued lists
			for (var i=prev.length-1; i >= ipos; i--) {

				var pi = prev.charAt(i)

				if (pi=='*') ps('</ul>')
				else if (pi=='#') ps('</ol>')
				// close a dl only if the new item is not a dl item (:, ; or empty)
				else switch (l_match[1].charAt(i)) { case'':case'*':case'#': ps('</dl>') }
			}

			// open new lists
			for (var i=ipos; i<l_match[1].length; i++) {

				var li = l_match[1].charAt(i)

				if (li=='*') ps('<ul>')
				else if (li=='#') ps('<ol>')
				// open a new dl only if the prev item is not a dl item (:, ; or empty)
				else switch(prev.charAt(i)) { case'':case'*':case'#': ps('<dl>') }
			}

			switch (l_match[1].charAt(l_match[1].length-1)) {

				case '*': case '#':
					ps('<li>' + parse_inline_nowiki(l_match[2])); break

				case ';':
					ps('<dt>')

					var dt_match

					// handle ;dt :dd format
					if (dt_match = l_match[2].match(/(.*?)(:.*?)$/)) {

						ps(parse_inline_nowiki(dt_match[1]))
						ll.unshift(dt_match[2])

					} else ps(parse_inline_nowiki(l_match[2]))

					break

				case ':':
					ps('<dd>' + parse_inline_nowiki(l_match[2]))
			}

			prev=l_match[1]
		}

		// close remaining lists
		for (var i=prev.length-1; i>=0; i--)
			ps(f('</?>', (prev.charAt(i)=='*')? 'ul': ((prev.charAt(i)=='#')? 'ol': 'dl')))
	}

	function parse_table()
	{
		endl(f('<table?>', $(/^\{\|( .*)$/)? $r[1]: ''))

		for (;remain();) if ($('|')) switch (_(1)) {
			case '}': endl('</table>'); return
			case '-': endl(f('<tr ?>', $(/\|-*(.*)/)[1])); break
			default: parse_table_data()
		}
		else if ($('!')) parse_table_data()
		else sh()
	}

	function parse_table_data()
	{
		var td_line, match_i

		// 1: "|+", '|' or '+'
		// 2: ??
		// 3: attributes ??
		// TODO: finish commenting this regexp
		var td_match = sh().match(/^(\|\+|\||!)((?:([^[|]*?)\|(?!\|))?(.*))$/)

		if (td_match[1] == '|+') ps('<caption');
		else ps('<t' + ((td_match[1]=='|')?'d':'h'))

		if (typeof td_match[3] != 'undefined') {

			ps(' ' + td_match[3])
			match_i = 4

		} else match_i = 2

		ps('>')

		if (td_match[1] != '|+') {

			// use || or !! as a cell separator depending on context
			// NOTE: when split() is passed a regexp make sure to use non-capturing brackets
			td_line = td_match[match_i].split((td_match[1] == '|')? '||': /(?:\|\||!!)/)

			ps(parse_inline_nowiki(td_line.shift()))

			while (td_line.length) ll.unshift(td_match[1] + td_line.pop())

		} else ps(td_match[match_i])

		var tc = 0, td = []

		for (;remain(); td.push(sh()))
		if ($('|')) {
			if (!tc) break // we're at the outer-most level (no nested tables), skip to td parse
			else if (_(1)=='}') tc--
		}
		else if (!tc && $('!')) break
		else if ($('{|')) tc++

		if (td.length) ps(Insta.convert(td))
	}

	function parse_pre()
	{
		ps('<pre>')
		do endl(parse_inline_nowiki(ll[0].substring(1)) + "\n"); while (remain() && $(' '))
		ps('</pre>')
	}

	function parse_block_image()
	{
		ps(parse_image(sh()))
	}

	function parse_image(str)
	{
//<NOLITE>
		// get what's in between "[[Image:" and "]]"
		var tag = str.substring(str.indexOf(':') + 1, str.length - 2);

		var width;
		var attr = [], filename, caption = '';
		var thumb=0, frame=0, center=0;
		var align='';

		if (tag.match(/\|/)) {
			// manage nested links
			var nesting = 0;
			var last_attr;
			for (var i = tag.length-1; i > 0; i--) {
				if (tag.charAt(i) == '|' && !nesting) {
					last_attr = tag.substr(i+1);
					tag = tag.substring(0, i);
					break;
				} else switch (tag.substr(i-1, 2)) {
					case ']]':
						nesting++;
						i--;
						break;
					case '[[':
						nesting--;
						i--;
				}
			}

			attr = tag.split(/\s*\|\s*/);
			attr.push(last_attr);
			filename = attr.shift();

			var w_match;

			for (;attr.length; attr.shift())
			if (w_match = attr[0].match(/^(\d*)(?:[px]*\d*)?px$/)) width = w_match[1]
			else switch(attr[0]) {
				case 'thumb':
				case 'thumbnail':
					thumb=true;
				case 'frame':
					frame=true;
					break;
				case 'none':
				case 'right':
				case 'left':
					center=false;
					align=attr[0];
					break;
				case 'center':
					center=true;
					align='none';
					break;
				default:
					if (attr.length == 1) caption = attr[0];
			}

		} else filename = tag;


		var o='';

		if (frame) {

			if (align=='') align = 'right';

			o += f("<div class='thumb t?'>", align);

			if (thumb) {
				if (!width) width = Insta.conf.wiki.default_thumb_width;

				o += f("<div style='width:?px;'>?", 2+width*1, make_image(filename, caption, width)) +
					f("<div class='thumbcaption'><div class='magnify' style='float:right'><a href='?' class='internal' title='Enlarge'><img src='?'></a></div>?</div>",
						Insta.conf.paths.articles + Insta.conf.locale.image + ':' + filename,
						Insta.conf.paths.magnify_icon,
						parse_inline_nowiki(caption)
					)
			} else {
				o += '<div>' + make_image(filename, caption) + f("<div class='thumbcaption'>?</div>", parse_inline_nowiki(caption))
			}

			o += '</div></div>';

		} else if (align != '') {
			o += f("<div class='float?'><span>?</span></div>", align, make_image(filename, caption, width));
		} else {
			return make_image(filename, caption, width);
		}

		return center? f("<div class='center'>?</div>", o): o;
//</NOLITE>
	}

	function parse_inline_nowiki(str)
	{
		var start, lastend=0
		var substart=0, nestlev=0, open, close, subloop;
		var html='';

		while (-1 != (start = str.indexOf('<nowiki>', substart))) {
			html += parse_inline_wiki(str.substring(lastend, start));
			start += 8;
			substart = start;
			subloop = true;
			do {
				open = str.indexOf('<nowiki>', substart);
				close = str.indexOf('</nowiki>', substart);
				if (close<=open || open==-1) {
					if (close==-1) {
						return html + html_entities(str.substr(start));
					}
					substart = close+9;
					if (nestlev) {
						nestlev--;
					} else {
						lastend = substart;
						html += html_entities(str.substring(start, lastend-9));
						subloop = false;
					}
				} else {
					substart = open+8;
					nestlev++;
				}
			} while (subloop)
		}

		return html + parse_inline_wiki(str.substr(lastend));
	}

	function make_image(filename, caption, width)
	{
//<NOLITE>
		// uppercase first letter in file name
		filename = filename.charAt(0).toUpperCase() + filename.substr(1);
		// replace spaces with underscores
		filename = filename.replace(/ /g, '_');

		caption = strip_inline_wiki(caption);

		var md5 = hex_md5(filename);

		var source = md5.charAt(0) + '/' + md5.substr(0,2) + '/' + filename;

		if (width) width = "width='" + width + "px'";

		var img = f("<img onerror=\"this.onerror=null;this.src='?'\" src='?' ? ?>", Insta.conf.paths.images_fallback + source, Insta.conf.paths.images + source, (caption!='')? "alt='" + caption + "'" : '', width);

		return f("<a class='image' ? href='?'>?</a>", (caption!='')? "title='" + caption + "'" : '', Insta.conf.paths.articles + Insta.conf.locale.image + ':' + filename, img);
//</NOLITE>
	}

	function parse_inline_images(str)
	{
//<NOLITE>
		var start, substart=0, nestlev=0;
		var loop, close, open, wiki, html;

		while (-1 != (start=str.indexOf('[[', substart))) {
			if(str.substr(start+2).match(RegExp('^(Image|File|' + Insta.conf.locale.image + '):','i'))) {
				loop=true;
				substart=start;
				do {
					substart+=2;
					close=str.indexOf(']]',substart);
					open=str.indexOf('[[',substart);
					if (close<=open||open==-1) {
						if (close==-1) return str;
						substart=close;
						if (nestlev) {
							nestlev--;
						} else {
							wiki=str.substring(start,close+2);
							html=parse_image(wiki);
							str=str.replace(wiki,html);
							substart=start+html.length;
							loop=false;
						}
					} else {
						substart=open;
						nestlev++;
					}
				} while (loop)

			} else break;
		}

//</NOLITE>
		return str;
	}

	// the output of this function doesn't respect the FILO structure of HTML
	// but since most browsers can handle it I'll save myself the hassle
	function parse_inline_formatting(str)
	{
		var em,st,i,li,o='';
		while ((i=str.indexOf("''",li))+1) {
			o += str.substring(li,i);
			li=i+2;
			if (str.charAt(i+2)=="'") {
				li++;
				st=!st;
				o+=st?'<strong>':'</strong>';
			} else {
				em=!em;
				o+=em?'<em>':'</em>';
			}
		}
		return o+str.substr(li);
	}

	function parse_inline_wiki(str)
	{
		var aux_match;

		str = parse_inline_images(str);
		str = parse_inline_formatting(str);

		// math
		while (aux_match = str.match(/<(?:)math>(.*?)<\/math>/i)) {
			var math_md5 = hex_md5(aux_match[1]);
			str = str.replace(aux_match[0], f("<img src='?.png'>", Insta.conf.paths.math+math_md5));
		}

		// Build a Mediawiki-formatted date string
		var date = new Date;
		var minutes = date.getUTCMinutes();
		if (minutes < 10) minutes = '0' + minutes;
		var date = f("?:?, ? ? ? (UTC)", date.getUTCHours(), minutes, date.getUTCDate(), Insta.conf.locale.months[date.getUTCMonth()], date.getUTCFullYear());

		// text formatting
		return str.
			// signatures
			replace(/~{5}(?!~)/g, date).
			replace(/~{4}(?!~)/g, Insta.conf.user.name+' '+date).
			replace(/~{3}(?!~)/g, Insta.conf.user.name).

			// [[:Category:...]], [[:Image:...]], etc...
			replace(RegExp('\\[\\[:((?:'+Insta.conf.locale.category+'|Image|File|'+Insta.conf.locale.image+'|'+Insta.conf.wiki.interwiki+'):[^|]*?)\\]\\](\w*)','gi'), "<a href='"+Insta.conf.paths.articles+"$1'>$1$2</a>").
			// remove straight category and interwiki tags
			replace(RegExp('\\[\\[(?:'+Insta.conf.locale.category+'|'+Insta.conf.wiki.interwiki+'):.*?\\]\\]','gi'),'').

			// [[:Category:...|Links]], [[:Image:...|Links]], etc...
			replace(RegExp('\\[\\[:((?:'+Insta.conf.locale.category+'|Image|File|'+Insta.conf.locale.image+'|'+Insta.conf.wiki.interwiki+'):.*?)\\|([^\\]]+?)\\]\\](\\w*)','gi'), "<a href='"+Insta.conf.paths.articles+"$1'>$2$3</a>").

			// [[/Relative links]]
			replace(/\[\[(\/[^|]*?)\]\]/g, f("<a href='?$1'>$1</a>", Insta.conf.baseUrl)).

			// [[/Replaced|Relative links]]
			replace(/\[\[(\/.*?)\|(.+?)\]\]/g, f("<a href='?$1'>$2</a>", Insta.conf.baseUrl)).

			// [[Common links]]
			replace(/\[\[([^|]*?)\]\](\w*)/g, f("<a href='?$1'>$1$2</a>", Insta.conf.paths.articles)).

			// [[Replaced|Links]]
			replace(/\[\[(.*?)\|([^\]]+?)\]\](\w*)/g, f("<a href='?$1'>$2$3</a>", Insta.conf.paths.articles)).

			// [[Stripped:Namespace|Namespace]]
			replace(/\[\[([^\]]*?:)?(.*?)( *\(.*?\))?\|\]\]/g, f("<a href='?$1$2$3'>$2</a>", Insta.conf.paths.articles)).

			// External links
			replace(/\[(https?|news|ftp|mailto|gopher|irc):(\/*)([^\]]*?) (.*?)\]/g, "<a class='external' href='$1:$2$3'>$4</a>").
			replace(/\[http:\/\/(.*?)\]/g, "<a class='external' href='http://$1'>[#]</a>").
			replace(/\[(news|ftp|mailto|gopher|irc):(\/*)(.*?)\]/g, "<a class='external' href='$1:$2$3'>$1:$2$3</a>").
			replace(/(^| )(https?|news|ftp|mailto|gopher|irc):(\/*)([^ $]*[^.,!?;: $])/g, "$1<a class='external' href='$2:$3$4'>$2:$3$4</a>").

			replace('__NOTOC__','').
			replace('__NOEDITSECTION__','');
	}
/*
*/
	function strip_inline_wiki(str)
	{
		return str
			.replace(/\[\[[^\]]*\|(.*?)\]\]/g,'$1')
			.replace(/\[\[(.*?)\]\]/g,'$1')
			.replace(/''(.*?)''/g,'$1');
	}

	// begin parsing
	for (;remain();) if ($(/^(={1,6})(.*)\1(.*)$/)) {
		p=0
		endl(f('<h?>?</h?>?', $r[1].length, parse_inline_nowiki($r[2]), $r[1].length, $r[3]))

	} else if ($(/^[*#:;]/)) {
		p=0
		parse_list()

	} else if ($(' ')) {
		p=0
		parse_pre()

	} else if ($('{|')) {
		p=0
		parse_table()

	} else if ($(/^----+$/)) {
		p=0
		endl('<hr>')

	} else if ($(Insta.BLOCK_IMAGE)) {
		p=0
		parse_block_image()

	} else {

		// handle paragraphs
		if ($$('')) {
			if (p = (remain()>1 && ll[1]==(''))) endl('<p><br>')
		} else {
			if(!p) {
				ps('<p>')
				p=1
			}
			ps(parse_inline_nowiki(ll[0]) + ' ')
		}

		sh();
	}

	return o
};

window.wiki2html=function(txt,baseurl) {
    Insta.conf.baseUrl=baseurl;
    return Insta.convert(txt);
};
// ENDFILE: livepreview.js
// STARTFILE: pageinfo.js
//<NOLITE>
function popupFilterPageSize(data) {
	return formatBytes(data.length);
}

function popupFilterCountLinks(data) {
	var num=countLinks(data);
	return String(num) + '&nbsp;' + ((num!=1)?popupString('wikiLinks'):popupString('wikiLink'));
}

function popupFilterCountImages(data) {
	var num=countImages(data);
	return String(num) + '&nbsp;' + ((num!=1)?popupString('images'):popupString('image'));
}

function popupFilterCountCategories(data) {
	var num=countCategories(data);
	return String(num) + '&nbsp;' + ((num!=1)?popupString('categories'):popupString('category'));
}


function popupFilterLastModified(data,download) {
	var lastmod=download.lastModified;
	var now=new Date();
	var age=now-lastmod;
	if (lastmod && getValueOf('popupLastModified')) {
		return (tprintf('%s old', [formatAge(age)])).replace(RegExp(' ','g'), '&nbsp;');
	}
	return '';
}

function formatAge(age) {
	// coerce into a number
	var a=0+age, aa=a;

	var seclen  = 1000;
	var minlen  = 60*seclen;
	var hourlen = 60*minlen;
	var daylen  = 24*hourlen;
	var weeklen = 7*daylen;

	var numweeks = (a-a%weeklen)/weeklen; a = a-numweeks*weeklen; var sweeks = addunit(numweeks, 'week');
	var numdays  = (a-a%daylen)/daylen;   a = a-numdays*daylen;   var sdays  = addunit(numdays, 'day');
	var numhours = (a-a%hourlen)/hourlen; a = a-numhours*hourlen; var shours = addunit(numhours,'hour');
	var nummins  = (a-a%minlen)/minlen;   a = a-nummins*minlen;   var smins  = addunit(nummins, 'minute');
	var numsecs  = (a-a%seclen)/seclen;   a = a-numsecs*seclen;   var ssecs  = addunit(numsecs, 'second');

	if (aa > 4*weeklen) { return sweeks; }
	if (aa > weeklen)   { return sweeks + ' ' + sdays; }
	if (aa > daylen)    { return sdays  + ' ' + shours; }
	if (aa > 6*hourlen) { return shours; }
	if (aa > hourlen)   { return shours + ' ' + smins; }
	if (aa > 10*minlen) { return smins; }
	if (aa > minlen)    { return smins  + ' ' + ssecs; }
	return ssecs;
}

function addunit(num,str) { return '' + num + ' ' + ((num!=1) ? popupString(str+'s') : popupString(str)) ;}

function runPopupFilters(list, data, download) {
	var ret=[];
	for (var i=0; i<list.length; ++i) {
		if (list[i] && typeof list[i] == 'function') {
			var s=list[i](data, download, download.owner.article);
			if (s) { ret.push(s); }
		}
	}
	return ret;
}

function getPageInfo(data, download) {
	if (!data || data.length === 0) { return popupString('Empty page'); }

	var popupFilters=getValueOf('popupFilters') || [];
	var extraPopupFilters = getValueOf('extraPopupFilters') || [];
	var pageInfoArray = runPopupFilters(popupFilters.concat(extraPopupFilters), data, download);

	var pageInfo=pageInfoArray.join(', ');
	if (pageInfo !== '' ) { pageInfo = upcaseFirst(pageInfo); }
	return pageInfo;
}


// this could be improved!
function countLinks(wikiText) { return wikiText.split('[[').length - 1; }

// if N = # matches, n = # brackets, then
// String.parenSplit(regex) intersperses the N+1 split elements
// with Nn other elements. So total length is
// L= N+1 + Nn = N(n+1)+1. So N=(L-1)/(n+1).

function countImages(wikiText) {
	return (wikiText.parenSplit(pg.re.image).length - 1) / (pg.re.imageBracketCount + 1);
}

function countCategories(wikiText) {
	return (wikiText.parenSplit(pg.re.category).length - 1) / (pg.re.categoryBracketCount + 1);
}

function popupFilterStubDetect(data, download, article)     {
	var counts=stubCount(data, article);
	if (counts.real) { return popupString('stub'); }
	if (counts.sect) { return popupString('section stub'); }
	return '';
}

function popupFilterDisambigDetect(data, download, article) {
	if (getValueOf('popupOnlyArticleDabStub') && article.namespace()) { return ''; }
	return (isDisambig(data, article)) ? popupString('disambig') : '';
}

function formatBytes(num) {
	return (num > 949) ? (Math.round(num/100)/10+popupString('kB')) : (num +'&nbsp;' + popupString('bytes')) ;
}
//</NOLITE>
// ENDFILE: pageinfo.js
// STARTFILE: titles.js
/**
   @fileoverview Defines the {@link Title} class, and associated crufty functions.

   <code>Title</code> deals with article titles and their various
   forms.  {@link Stringwrapper} is the parent class of
   <code>Title</code>, which exists simply to make things a little
   neater.

*/

/**
   Creates a new Stringwrapper.
   @constructor

   @class the Stringwrapper class. This base class is not really
   useful on its own; it just wraps various common string operations.
*/
function Stringwrapper() {
	/**
	   Wrapper for this.toString().indexOf()
	   @param {String} x
	   @type integer
	*/
	this.indexOf=function(x){return this.toString().indexOf(x);};
	/**
	   Returns this.value.
	   @type String
	*/
	this.toString=function(){return this.value;};
	/**
	   Wrapper for {@link String#parenSplit} applied to this.toString()
	   @param {RegExp} x
	   @type Array
	*/
	this.parenSplit=function(x){return this.toString().parenSplit(x);};
	/**
	   Wrapper for this.toString().substring()
	   @param {String} x
	   @param {String} y (optional)
	   @type String
	*/
	this.substring=function(x,y){
		if (typeof y=='undefined') { return this.toString().substring(x); }
		return this.toString().substring(x,y);
	};
	/**
	   Wrapper for this.toString().split()
	   @param {String} x
	   @type Array
	*/
	this.split=function(x){return this.toString().split(x);};
	/**
	   Wrapper for this.toString().replace()
	   @param {String} x
	   @param {String} y
	   @type String
	*/
	this.replace=function(x,y){ return this.toString().replace(x,y); };
}


/**
   Creates a new <code>Title</code>.
   @constructor

   @class The Title class. Holds article titles and converts them into
   various forms. Also deals with anchors, by which we mean the bits
   of the article URL after a # character, representing locations
   within an article.

   @param {String} value The initial value to assign to the
   article. This must be the canonical title (see {@link
   Title#value}. Omit this in the constructor and use another function
   to set the title if this is unavailable.
*/
function Title(val) {
	/**
	   The canonical article title. This must be in UTF-8 with no
	   entities, escaping or nasties. Also, underscores should be
	   replaced with spaces.
	   @type String
	   @private
	*/
	this.value=null;
	/**
	   The canonical form of the anchor. This should be exactly as
	   it appears in the URL, i.e. with the .C3.0A bits in.
	   @type String
	*/
	this.anchor='';

	this.setUtf(val);
}
Title.prototype=new Stringwrapper();
/**
   Returns the canonical representation of the article title, optionally without anchor.
   @param {boolean} omitAnchor
   @fixme Decide specs for anchor
   @return String The article title and the anchor.
*/
Title.prototype.toString=function(omitAnchor) {
	return this.value + ( (!omitAnchor && this.anchor) ? '#' + this.anchorString() : '' );
};
Title.prototype.anchorString=function() {
	if (!this.anchor) { return ''; }
	var split=this.anchor.parenSplit(/((?:[.][0-9A-F]{2})+)/);
	var len=split.length;
	for (var j=1; j<len; j+=2) {
		// FIXME s/decodeURI/decodeURIComponent/g ?
		split[j]=decodeURIComponent(split[j].split('.').join('%')).split('_').join(' ');
	}
	return split.join('');
};
Title.prototype.urlAnchor=function() {
	var split=this.anchor.parenSplit('/((?:[%][0-9A-F]{2})+)/');
	var len=split.length;
	for (var j=1; j<len; j+=2) {
		split[j]=split[j].split('%').join('.');
	}
	return split.join('');
};
Title.prototype.anchorFromUtf=function(str) {
	this.anchor=encodeURIComponent(str.split(' ').join('_'))
	.split('%3A').join(':').split("'").join('%27').split('%').join('.');
};
Title.fromURL=function(h) {
	return new Title().fromURL(h);
};
Title.prototype.fromURL=function(h) {
	if (typeof h != 'string') {
		this.value=null;
		return this;
	}

	// NOTE : playing with decodeURI, encodeURI, escape, unescape,
	// we seem to be able to replicate the IE borked encoding

	// IE doesn't do this new-fangled utf-8 thing.
	// and it's worse than that.
	// IE seems to treat the query string differently to the rest of the url
	// the query is treated as bona-fide utf8, but the first bit of the url is pissed around with

	// we fix up & for all browsers, just in case.
	var splitted=h.split('?');
	splitted[0]=splitted[0].split('&').join('%26');

	if (pg.flag.linksLikeIE6) {
		splitted[0]=encodeURI(decode_utf8(splitted[0]));
	}

	h=splitted.join('?');

	var contribs=pg.re.contribs.exec(h);
	if (contribs !== null) {
		if (contribs[1]=='title=') { contribs[3]=contribs[3].split('+').join(' '); }
		var u=new Title(contribs[3]);
		this.setUtf(this.decodeNasties(pg.ns.user + ':' + u.stripNamespace()));
		return this;
	}

	var email=pg.re.email.exec(h);
	if (email !== null) {
		this.setUtf(this.decodeNasties(pg.ns.user + ':' + new Title(email[3]).stripNamespace()));
		return this;
	}

	var backlinks=pg.re.backlinks.exec(h);
	if (backlinks) {
		this.setUtf(this.decodeNasties(new Title(backlinks[3])));
		return this;
	}

	// no more special cases to check --
	// hopefully it's not a disguised user-related or specially treated special page
	var m=pg.re.main.exec(h);
	if(m===null) { this.value=null; }
	else {
        var fromBotInterface = /[?](.+[&])?title=/.test(h);
        if (fromBotInterface) {
            m[2]=m[2].split('+').join('_');
        }
        var extracted = m[2] + (m[3] ? '#' + m[3] : '');
        if (/%25[0-9A-Fa-f]{2}/.test(extracted)) {
            // Fix Safari issue
            // Safari sometimes encodes % as %25 in UTF-8 encoded strings like %E5%A3 -> %25E5%25A3.
            this.setUtf(decodeURIComponent(unescape(extracted)));
        } else {
            this.setUtf(this.decodeNasties(extracted));
        }
    }
	return this;
};
Title.prototype.decodeNasties=function(txt) {
	var ret= this.decodeEscapes(decodeURI(txt));
	ret = ret.replace(/[_ ]*$/, '');
	return ret;
};
Title.prototype.decodeEscapes=function(txt) {
	var split=txt.parenSplit(/((?:[%][0-9A-Fa-f]{2})+)/);
	var len=split.length;
	for (var i=1; i<len; i=i+2) {
		// FIXME is decodeURIComponent better?
		split[i]=unescape(split[i]);
	}
	return split.join('');
};
Title.fromAnchor=function(a) {
	return new Title().fromAnchor(a);
};
Title.prototype.fromAnchor=function(a) {
	if (!a) { this.value=null; return this; }
	return this.fromURL(a.href);
};
Title.fromWikiText=function(txt) {
	return new Title().fromWikiText(txt);
};
Title.prototype.fromWikiText=function(txt) {
	// FIXME - testing needed
	if (!pg.flag.linksLikeIE6) { txt=myDecodeURI(txt); }
	this.setUtf(txt);
	return this;
};
Title.prototype.hintValue=function(){
	if(!this.value) { return ''; }
	return safeDecodeURI(this.value);
};
//<NOLITE>
Title.prototype.toUserName=function(withNs) {
	if (this.namespace() != pg.ns.user && this.namespace() != pg.ns.usertalk) {
		this.value=null;
		return;
	}
	this.value = (withNs ? pg.ns.user + ':' : '') + this.stripNamespace().split('/')[0];
};
Title.prototype.userName=function(withNs) {
	var t=(new Title(this.value));
	t.toUserName(withNs);
	if (t.value) { return t; }
	return null;
};
Title.prototype.toTalkPage=function() {
	// convert article to a talk page, or if we can't return null
	// or, in other words, return null if this ALREADY IS a talk page
	// and return the corresponding talk page otherwise
	if (this.value===null) { return null; }
	var talkRegex=namespaceListToRegex(pg.ns.talkList);
	if (talkRegex.exec(this.value)) { this.value=null; return null;}

	var nsReg=namespaceListToRegex(pg.ns.withTalkList);
	var splitted=this.value.parenSplit(nsReg);
	if (splitted.length<2) {
		this.value= (pg.ns.talkList[0]+':'+this.value).split(' ').join('_');
		return this.value;
	}
	for (var i=0; i< pg.ns.withTalkList.length; ++i) {
		if (splitted[1]==pg.ns.withTalkList[i]) {
			splitted[1]=pg.ns.talkList[i];
			this.value=splitted.join(':').substring(1).split(' ').join('_');
			return this.value;
		}
	}
	this.value=null;
	return null;
};
//</NOLITE>
Title.prototype.namespace=function() {
	var n=this.value.indexOf(':');
	if (n<0) { return ''; }
	var list=pg.ns.list;
	for (var i=0; i<list.length; ++i) {
		if (upcaseFirst(list[i]) == this.value.substring(0,n)) { return list[i]; }
	}
	return '';
};
//<NOLITE>
Title.prototype.talkPage=function() {
	var t=new Title(this.value);
	t.toTalkPage();
	if (t.value) { return t; }
	return null;
};
Title.prototype.isTalkPage=function() {
	if (this.talkPage()===null) { return true; }
	return false;
};
Title.prototype.toArticleFromTalkPage=function() {
	var talkRegex=namespaceListToRegex(pg.ns.talkList);
	var splitted=this.value.parenSplit(talkRegex);
	if (splitted.length < 2 || splitted[0].length > 0) { this.value=null; return null; }
	if (splitted[1]==pg.ns.talkList[0]) {
		splitted[1]='';
		this.value=splitted.join(':').substring(2).split(' ').join('_');
		return this.value;
	}
	for (var i=1; i< pg.ns.talkList.length; ++i) {
		if (splitted[1]==pg.ns.talkList[i] || splitted[1]==pg.ns.talkList[i].split(' ').join('_')) {
			splitted[1]=pg.ns.withTalkList[i];
			this.value= splitted.join(':').substring(1).split(' ').join('_');
			return this.value;
		    }
	}
	this.value=null;
	return this.value;
};
Title.prototype.articleFromTalkPage=function() {
	var t=new Title(this.value);
	t.toArticleFromTalkPage();
	if (t.value) { return t; }
	return null;
};
Title.prototype.articleFromTalkOrArticle=function() {
	var t=new Title(this.value);
	if ( t.toArticleFromTalkPage() ) { return t; }
	return this;
};
Title.prototype.isIpUser=function() {
	return pg.re.ipUser.test(this.userName());
};
//</NOLITE>
Title.prototype.stripNamespace=function(){ // returns a string, not a Title
	var n=this.value.indexOf(':');
	if (n<0) { return this.value; }
	var list=pg.ns.list;
	for (var i=0; i<list.length; ++i) {
		if (upcaseFirst(list[i]) == this.value.substring(0,n)) { return this.value.substring(n+1); }
	}
	return this.value;
};
Title.prototype.setUtf=function(value){
	if (!value) { this.value=''; return; }
	var anch=value.indexOf('#');
	if(anch < 0) { this.value=value.split('_').join(' '); this.anchor=''; return; }
	this.value=value.substring(0,anch).split('_').join(' ');
	this.anchor=value.substring(anch+1);
	this.ns=null; // wait until namespace() is called
};
Title.prototype.setUrl=function(urlfrag) {
	var anch=urlfrag.indexOf('#');
	this.value=safeDecodeURI(urlfrag.substring(0,anch));
	this.anchor=value.substring(anch+1);
};
Title.prototype.append=function(x){
	this.setUtf(this.value + x);
};
Title.prototype.urlString=function(x) {
	x || ( x={} );
	var v=this.toString(true);
	if (!x.omitAnchor && this.anchor) { v+= '#' + this.urlAnchor(); }
	if (!x.keepSpaces) { v=v.split(' ').join('_'); }
	return encodeURI(v).split('&').join('%26').split('?').join('%3F').split('+').join('%2B');
};
Title.prototype.removeAnchor=function() {
	return new Title(this.toString(true));
};
Title.prototype.toUrl=function() {
	return pg.wiki.titlebase + this.urlString();
};


function paramValue(param, url) {
	var s=url.parenSplit(RegExp('[?&]' + literalizeRegex(param) + '=([^?&]*)'));
	if (!url) { return null; }
	return s[1] || null;
}

function parseParams(url) {
	var ret={};
	if (url.indexOf('?')==-1) { return ret; }
	var s=url.split('?').slice(1).join();
	var t=s.split('&');
	for (var i=0; i<t.length; ++i) {
		var z=t[i].split('=');
		z.push(null);
		ret[z[0]]=z[1];
	}
	return ret;
}

// all sorts of stuff here
// FIXME almost everything needs to be rewritten

function oldidFromAnchor(a) { return paramValue('oldid', a.href); }
//function diffFromAnchor(a) { return paramValue('diff', a.href); }


function wikiMarkupToAddressFragment (str) { // for images
	var ret = safeDecodeURI(str);
	ret = ret.split(' ').join('_');
	ret = encodeURI(ret);
	return ret;
}

// (a) myDecodeURI (first standard decodeURI, then pg.re.urlNoPopup)
// (b) change spaces to underscores
// (c) encodeURI (just the straight one, no pg.re.urlNoPopup)

function myDecodeURI (str) {
	var ret;
	// FIXME decodeURIComponent??
	try { ret=decodeURI(str.toString()); }
	catch (summat) { return str; }
	for (var i=0; i<pg.misc.decodeExtras.length; ++i) {
		var from=pg.misc.decodeExtras[i].from;
		var to=pg.misc.decodeExtras[i].to;
		ret=ret.split(from).join(to);
	}
	return ret;
}

function safeDecodeURI(str) { var ret=myDecodeURI(str); return ret || str; }

///////////
// TESTS //
///////////

//<NOLITE>
function isIpUser(user) {return pg.re.ipUser.test(user);}

function isDisambig(data, article) {
	if (!getValueOf('popupAllDabsStubs') && article.namespace()) { return false; }
	return ! article.isTalkPage() && pg.re.disambig.test(data);
}

function stubCount(data, article) {
	if (!getValueOf('popupAllDabsStubs') && article.namespace()) { return false; }
	var sectStub=0;
	var realStub=0;
	if (pg.re.stub.test(data)) {
		var s=data.parenSplit(pg.re.stub);
		for (var i=1; i<s.length; i=i+2) {
			if (s[i]) { ++sectStub; }
			else { ++realStub; }
		}
	}
	return { real: realStub, sect: sectStub };
}

function isValidImageName(str){ // extend as needed...
	return ( str.indexOf('{') == -1 );
}

function isInStrippableNamespace(article) {
	return ( findInArray( pg.ns.nonArticleList, article.namespace() ) > -1 );
}

function isInMainNamespace(article) { return !isInStrippableNamespace(article); }

function anchorContainsImage(a) {
	// iterate over children of anchor a
	// see if any are images
	if (a===null) { return false; }
	kids=a.childNodes;
	for (var i=0; i<kids.length; ++i) { if (kids[i].nodeName=='IMG') { return true; } }
	return false;
}
//</NOLITE>
function isPopupLink(a) {
	// NB for performance reasons, TOC links generally return true
	// they should be stripped out later

	if (!markNopopupSpanLinks.done) { markNopopupSpanLinks(); }
	if (a.inNopopupSpan || a.className=='sortheader') { return false; }

	// FIXME is this faster inline?
	if (a.onmousedown || a.getAttribute('nopopup')) { return false; }
	var h=a.href;
	if (!pg.re.basenames.test(h)) { return false; }
	if ( !pg.re.urlNoPopup.test(h) ) { return true;	}
	return (
		(pg.re.email.test(h) || pg.re.contribs.test(h) || pg.re.backlinks.test(h)) &&
		h.indexOf('&limit=') == -1 );
}

function markNopopupSpanLinks() {
	var s=document.getElementsByTagName('span');
	for (var i=0; i<s.length; ++i) {
		if (s[i].className && s[i].className.toLowerCase()=='nopopups') {
			var as=s[i].getElementsByTagName('a');
			for (var j=0; j<as.length; ++j) {
				as[j].inNopopupSpan=true;
			}
		}
	}
	markNopopupSpanLinks.done=true;
}
// ENDFILE: titles.js
// STARTFILE: cookies.js
//<NOLITE>
//////////////////////////////////////////////////
// Cookie handling
// from http://www.quirksmode.org/js/cookies.html

var Cookie= {
	create: function(name,value,days)
	{
		var expires;
		if (days)
		{
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			expires = "; expires="+date.toGMTString();
		}
		else { expires = ""; }
		document.cookie = name+"="+value+expires+"; path=/";
	},

	read: function(name)
	{
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++)
		{
			var c = ca[i];
			while (c.charAt(0)==' ') { c = c.substring(1,c.length); }
			if (c.indexOf(nameEQ) === 0) { return c.substring(nameEQ.length,c.length); }
		}
		return null;
	},

	erase: function(name)
	{
		Cookie.create(name,"",-1);
	}
};
//</NOLITE>
// ENDFILE: cookies.js
// STARTFILE: getpage.js
//////////////////////////////////////////////////
// Wiki-specific downloading
//

// Schematic for a getWiki call
//
//   getWiki->-getPageWithCaching
//                    |
//       false        |          true
// getPage<-[findPictureInCache]->-onComplete(a fake download)
//   \.
//     (async)->addPageToCache(download)->-onComplete(download)


/** @todo {document}
    @param {Title} article
    @param {Function} onComplete
    @param {integer} oldid
    @param {Navapopup} owner
*/
function getWiki(article, onComplete, oldid, owner) {
	// set ctype=text/css to get around opera gzip bug
	var url = pg.wiki.titlebase + article.removeAnchor().urlString() +
	    '&action=raw&ctype=text/css';
	if (oldid || oldid===0 || oldid==='0') { url += '&oldid='+oldid; }
	url += '&maxage=0&smaxage=0';

	getPageWithCaching(url, onComplete, owner);
}

// check cache to see if page exists

function getPageWithCaching(url, onComplete, owner) {
	log('getPageWithCaching, url='+url);
	var i=findInPageCache(url);
	if (i > -1) {
		var d=fakeDownload(url, owner.idNumber, onComplete,
				   pg.cache.pages[i].data, pg.cache.pages[i].lastModified,
				   owner);
	} else {
		var d=getPage(url, onComplete, owner);
		if (d && owner && owner.addDownload) {
			owner.addDownload(d);
			d.owner=owner;
		}
	}
}

function getPage(url, onComplete, owner) {
	log('getPage');
	var callback= function (d) { if (!d.aborted) {addPageToCache(d); onComplete(d);} };
	return startDownload(url, owner.idNumber, callback);
}

function findInPageCache(url) {
	for (var i=0; i<pg.cache.pages.length; ++i) {
		if (url==pg.cache.pages[i].url) { return i; }
	}
	return -1;
}

function addPageToCache(download) {
	log('addPageToCache '+download.url);
	var page = {url: download.url, data: download.data, lastModified: download.lastModified};
	return pg.cache.pages.push(page);
}
// ENDFILE: getpage.js
// STARTFILE: md5-2.2alpha.js
//<NOLITE>
/*
 * A JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Digest Algorithm, as defined in RFC 1321.
 * Version 2.2-alpha Copyright (C) Paul Johnston 1999 - 2005
 * Other contributors: Greg Holt, Andrew Kepert, Ydnar, Lostinet
 * Distributed under the BSD License
 * See http://pajhome.org.uk/crypt/md5 for more info.
 */

/*
 * Configurable variables. You may need to tweak these to be compatible with
 * the server-side, but the defaults work in most cases.
 */
var hexcase = 0;   /* hex output format. 0 - lowercase; 1 - uppercase	     */
var b64pad  = ""; /* base-64 pad character. "=" for strict RFC compliance   */

/*
 * These are the functions you'll usually want to call
 * They take string arguments and return either hex or base-64 encoded strings
 */
function hex_md5(s)    { return rstr2hex(rstr_md5(str2rstr_utf8(s))); }
function b64_md5(s)    { return rstr2b64(rstr_md5(str2rstr_utf8(s))); }
function any_md5(s, e) { return rstr2any(rstr_md5(str2rstr_utf8(s)), e); }
function hex_hmac_md5(k, d)
  { return rstr2hex(rstr_hmac_md5(str2rstr_utf8(k), str2rstr_utf8(d))); }
function b64_hmac_md5(k, d)
  { return rstr2b64(rstr_hmac_md5(str2rstr_utf8(k), str2rstr_utf8(d))); }
function any_hmac_md5(k, d, e)
  { return rstr2any(rstr_hmac_md5(str2rstr_utf8(k), str2rstr_utf8(d)), e); }

/*
 * Perform a simple self-test to see if the VM is working
 */
function md5_vm_test()
{
  return hex_md5("abc") == "900150983cd24fb0d6963f7d28e17f72";
}

/*
 * Calculate the MD5 of a raw string
 */
function rstr_md5(s)
{
  return binl2rstr(binl_md5(rstr2binl(s), s.length * 8));
}

/*
 * Calculate the HMAC-MD5, of a key and some data (raw strings)
 */
function rstr_hmac_md5(key, data)
{
  var bkey = rstr2binl(key);
  if(bkey.length > 16) bkey = binl_md5(bkey, key.length * 8);

  var ipad = Array(16), opad = Array(16);
  for(var i = 0; i < 16; i++)
  {
    ipad[i] = bkey[i] ^ 0x36363636;
    opad[i] = bkey[i] ^ 0x5C5C5C5C;
  }

  var hash = binl_md5(ipad.concat(rstr2binl(data)), 512 + data.length * 8);
  return binl2rstr(binl_md5(opad.concat(hash), 512 + 128));
}

/*
 * Convert a raw string to a hex string
 */
function rstr2hex(input)
{
  var hex_tab = hexcase ? "0123456789ABCDEF" : "0123456789abcdef";
  var output = "";
  var x;
  for(var i = 0; i < input.length; i++)
  {
    x = input.charCodeAt(i);
    output += hex_tab.charAt((x >>> 4) & 0x0F)
	   +  hex_tab.charAt( x	       & 0x0F);
  }
  return output;
}

/*
 * Convert a raw string to a base-64 string
 */
function rstr2b64(input)
{
  var tab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
  var output = "";
  var len = input.length;
  for(var i = 0; i < len; i += 3)
  {
    var triplet = (input.charCodeAt(i) << 16)
		| (i + 1 < len ? input.charCodeAt(i+1) << 8 : 0)
		| (i + 2 < len ? input.charCodeAt(i+2)	    : 0);
    for(var j = 0; j < 4; j++)
    {
      if(i * 8 + j * 6 > input.length * 8) output += b64pad;
      else output += tab.charAt((triplet >>> 6*(3-j)) & 0x3F);
    }
  }
  return output;
}

/*
 * Convert a raw string to an arbitrary string encoding
 */
function rstr2any(input, encoding)
{
  var divisor = encoding.length;
  var remainders = Array();
  var i, q, x, quotient;

  /* Convert to an array of 16-bit big-endian values, forming the dividend */
  var dividend = Array(input.length / 2);
  for(i = 0; i < dividend.length; i++)
  {
    dividend[i] = (input.charCodeAt(i * 2) << 8) | input.charCodeAt(i * 2 + 1);
  }

  /*
   * Repeatedly perform a long division. The binary array forms the dividend,
   * the length of the encoding is the divisor. Once computed, the quotient
   * forms the dividend for the next step. We stop when the dividend is zero.
   * All remainders are stored for later use.
   */
  while(dividend.length > 0)
  {
    quotient = Array();
    x = 0;
    for(i = 0; i < dividend.length; i++)
    {
      x = (x << 16) + dividend[i];
      q = Math.floor(x / divisor);
      x -= q * divisor;
      if(quotient.length > 0 || q > 0)
	quotient[quotient.length] = q;
    }
    remainders[remainders.length] = x;
    dividend = quotient;
  }

  /* Convert the remainders to the output string */
  var output = "";
  for(i = remainders.length - 1; i >= 0; i--)
    output += encoding.charAt(remainders[i]);

  return output;
}

/*
 * Encode a string as utf-8.
 * For efficiency, this assumes the input is valid utf-16.
 */
function str2rstr_utf8(input)
{
  var output = "";
  var i = -1;
  var x, y;

  while(++i < input.length)
  {
    /* Decode utf-16 surrogate pairs */
    x = input.charCodeAt(i);
    y = i + 1 < input.length ? input.charCodeAt(i + 1) : 0;
    if(0xD800 <= x && x <= 0xDBFF && 0xDC00 <= y && y <= 0xDFFF)
    {
      x = 0x10000 + ((x & 0x03FF) << 10) + (y & 0x03FF);
      i++;
    }

    /* Encode output as utf-8 */
    if(x <= 0x7F)
      output += String.fromCharCode(x);
    else if(x <= 0x7FF)
      output += String.fromCharCode(0xC0 | ((x >>> 6 ) & 0x1F),
				    0x80 | ( x	       & 0x3F));
    else if(x <= 0xFFFF)
      output += String.fromCharCode(0xE0 | ((x >>> 12) & 0x0F),
				    0x80 | ((x >>> 6 ) & 0x3F),
				    0x80 | ( x	       & 0x3F));
    else if(x <= 0x1FFFFF)
      output += String.fromCharCode(0xF0 | ((x >>> 18) & 0x07),
				    0x80 | ((x >>> 12) & 0x3F),
				    0x80 | ((x >>> 6 ) & 0x3F),
				    0x80 | ( x	       & 0x3F));
  }
  return output;
}

/*
 * Encode a string as utf-16
 */
function str2rstr_utf16le(input)
{
  var output = "";
  for(var i = 0; i < input.length; i++)
    output += String.fromCharCode( input.charCodeAt(i)	      & 0xFF,
				  (input.charCodeAt(i) >>> 8) & 0xFF);
  return output;
}

function str2rstr_utf16be(input)
{
  var output = "";
  for(var i = 0; i < input.length; i++)
    output += String.fromCharCode((input.charCodeAt(i) >>> 8) & 0xFF,
				   input.charCodeAt(i)	      & 0xFF);
  return output;
}

/*
 * Convert a raw string to an array of little-endian words
 * Characters >255 have their high-byte silently ignored.
 */
function rstr2binl(input)
{
  var output = Array(input.length >> 2);
  for(var i = 0; i < output.length; i++)
    output[i] = 0;
  for(var i = 0; i < input.length * 8; i += 8)
    output[i>>5] |= (input.charCodeAt(i / 8) & 0xFF) << (i%32);
  return output;
}

/*
 * Convert an array of little-endian words to a string
 */
function binl2rstr(input)
{
  var output = "";
  for(var i = 0; i < input.length * 32; i += 8)
    output += String.fromCharCode((input[i>>5] >>> (i % 32)) & 0xFF);
  return output;
}

/*
 * Calculate the MD5 of an array of little-endian words, and a bit length.
 */
function binl_md5(x, len)
{
  /* append padding */
  x[len >> 5] |= 0x80 << ((len) % 32);
  x[(((len + 64) >>> 9) << 4) + 14] = len;

  var a =  1732584193;
  var b = -271733879;
  var c = -1732584194;
  var d =  271733878;

  for(var i = 0; i < x.length; i += 16)
  {
    var olda = a;
    var oldb = b;
    var oldc = c;
    var oldd = d;

    a = md5_ff(a, b, c, d, x[i+ 0], 7 , -680876936);
    d = md5_ff(d, a, b, c, x[i+ 1], 12, -389564586);
    c = md5_ff(c, d, a, b, x[i+ 2], 17,	 606105819);
    b = md5_ff(b, c, d, a, x[i+ 3], 22, -1044525330);
    a = md5_ff(a, b, c, d, x[i+ 4], 7 , -176418897);
    d = md5_ff(d, a, b, c, x[i+ 5], 12,	 1200080426);
    c = md5_ff(c, d, a, b, x[i+ 6], 17, -1473231341);
    b = md5_ff(b, c, d, a, x[i+ 7], 22, -45705983);
    a = md5_ff(a, b, c, d, x[i+ 8], 7 ,	 1770035416);
    d = md5_ff(d, a, b, c, x[i+ 9], 12, -1958414417);
    c = md5_ff(c, d, a, b, x[i+10], 17, -42063);
    b = md5_ff(b, c, d, a, x[i+11], 22, -1990404162);
    a = md5_ff(a, b, c, d, x[i+12], 7 ,	 1804603682);
    d = md5_ff(d, a, b, c, x[i+13], 12, -40341101);
    c = md5_ff(c, d, a, b, x[i+14], 17, -1502002290);
    b = md5_ff(b, c, d, a, x[i+15], 22,	 1236535329);

    a = md5_gg(a, b, c, d, x[i+ 1], 5 , -165796510);
    d = md5_gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
    c = md5_gg(c, d, a, b, x[i+11], 14,	 643717713);
    b = md5_gg(b, c, d, a, x[i+ 0], 20, -373897302);
    a = md5_gg(a, b, c, d, x[i+ 5], 5 , -701558691);
    d = md5_gg(d, a, b, c, x[i+10], 9 ,	 38016083);
    c = md5_gg(c, d, a, b, x[i+15], 14, -660478335);
    b = md5_gg(b, c, d, a, x[i+ 4], 20, -405537848);
    a = md5_gg(a, b, c, d, x[i+ 9], 5 ,	 568446438);
    d = md5_gg(d, a, b, c, x[i+14], 9 , -1019803690);
    c = md5_gg(c, d, a, b, x[i+ 3], 14, -187363961);
    b = md5_gg(b, c, d, a, x[i+ 8], 20,	 1163531501);
    a = md5_gg(a, b, c, d, x[i+13], 5 , -1444681467);
    d = md5_gg(d, a, b, c, x[i+ 2], 9 , -51403784);
    c = md5_gg(c, d, a, b, x[i+ 7], 14,	 1735328473);
    b = md5_gg(b, c, d, a, x[i+12], 20, -1926607734);

    a = md5_hh(a, b, c, d, x[i+ 5], 4 , -378558);
    d = md5_hh(d, a, b, c, x[i+ 8], 11, -2022574463);
    c = md5_hh(c, d, a, b, x[i+11], 16,	 1839030562);
    b = md5_hh(b, c, d, a, x[i+14], 23, -35309556);
    a = md5_hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
    d = md5_hh(d, a, b, c, x[i+ 4], 11,	 1272893353);
    c = md5_hh(c, d, a, b, x[i+ 7], 16, -155497632);
    b = md5_hh(b, c, d, a, x[i+10], 23, -1094730640);
    a = md5_hh(a, b, c, d, x[i+13], 4 ,	 681279174);
    d = md5_hh(d, a, b, c, x[i+ 0], 11, -358537222);
    c = md5_hh(c, d, a, b, x[i+ 3], 16, -722521979);
    b = md5_hh(b, c, d, a, x[i+ 6], 23,	 76029189);
    a = md5_hh(a, b, c, d, x[i+ 9], 4 , -640364487);
    d = md5_hh(d, a, b, c, x[i+12], 11, -421815835);
    c = md5_hh(c, d, a, b, x[i+15], 16,	 530742520);
    b = md5_hh(b, c, d, a, x[i+ 2], 23, -995338651);

    a = md5_ii(a, b, c, d, x[i+ 0], 6 , -198630844);
    d = md5_ii(d, a, b, c, x[i+ 7], 10,	 1126891415);
    c = md5_ii(c, d, a, b, x[i+14], 15, -1416354905);
    b = md5_ii(b, c, d, a, x[i+ 5], 21, -57434055);
    a = md5_ii(a, b, c, d, x[i+12], 6 ,	 1700485571);
    d = md5_ii(d, a, b, c, x[i+ 3], 10, -1894986606);
    c = md5_ii(c, d, a, b, x[i+10], 15, -1051523);
    b = md5_ii(b, c, d, a, x[i+ 1], 21, -2054922799);
    a = md5_ii(a, b, c, d, x[i+ 8], 6 ,	 1873313359);
    d = md5_ii(d, a, b, c, x[i+15], 10, -30611744);
    c = md5_ii(c, d, a, b, x[i+ 6], 15, -1560198380);
    b = md5_ii(b, c, d, a, x[i+13], 21,	 1309151649);
    a = md5_ii(a, b, c, d, x[i+ 4], 6 , -145523070);
    d = md5_ii(d, a, b, c, x[i+11], 10, -1120210379);
    c = md5_ii(c, d, a, b, x[i+ 2], 15,	 718787259);
    b = md5_ii(b, c, d, a, x[i+ 9], 21, -343485551);

    a = safe_add(a, olda);
    b = safe_add(b, oldb);
    c = safe_add(c, oldc);
    d = safe_add(d, oldd);
  }
  return Array(a, b, c, d);
}

/*
 * These functions implement the four basic operations the algorithm uses.
 */
function md5_cmn(q, a, b, x, s, t)
{
  return safe_add(bit_rol(safe_add(safe_add(a, q), safe_add(x, t)), s),b);
}
function md5_ff(a, b, c, d, x, s, t)
{
  return md5_cmn((b & c) | ((~b) & d), a, b, x, s, t);
}
function md5_gg(a, b, c, d, x, s, t)
{
  return md5_cmn((b & d) | (c & (~d)), a, b, x, s, t);
}
function md5_hh(a, b, c, d, x, s, t)
{
  return md5_cmn(b ^ c ^ d, a, b, x, s, t);
}
function md5_ii(a, b, c, d, x, s, t)
{
  return md5_cmn(c ^ (b | (~d)), a, b, x, s, t);
}

/*
 * Add integers, wrapping at 2^32. This uses 16-bit operations internally
 * to work around bugs in some JS interpreters.
 */
function safe_add(x, y)
{
  var lsw = (x & 0xFFFF) + (y & 0xFFFF);
  var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
  return (msw << 16) | (lsw & 0xFFFF);
}

/*
 * Bitwise rotate a 32-bit number to the left.
 */
function bit_rol(num, cnt)
{
  return (num << cnt) | (num >>> (32 - cnt));
}
//</NOLITE>
// ENDFILE: md5-2.2alpha.js
// STARTFILE: parensplit.js
//////////////////////////////////////////////////
// parenSplit

// String.prototype.parenSplit should do what ECMAscript says
// String.prototype.split does, interspersing paren matches between
// the split elements

if (String('abc'.split(/(b)/))!='a,b,c') {
	// broken String.split, e.g. konq, IE
	String.prototype.parenSplit=function (re) {
		re=nonGlobalRegex(re);
		var s=this;
		var m=re.exec(s);
		var ret=[];
		while (m && s) {
			// without the following loop, we have
			// 'ab'.parenSplit(/a|(b)/) != 'ab'.split(/a|(b)/)
			for(var i=0; i<m.length; ++i) {
				if (typeof m[i]=='undefined') m[i]='';
			}
			ret.push(s.substring(0,m.index));
			ret = ret.concat(m.slice(1));
			s=s.substring(m.index + m[0].length);
			m=re.exec(s);
		}
		ret.push(s);
		return ret;
	};
} else {
	String.prototype.parenSplit=function (re) { return this.split(re); };
	String.prototype.parenSplit.isNative=true;
}

function nonGlobalRegex(re) {
	var s=re.toString();
	flags='';
	for (var j=s.length; s.charAt(j) != '/'; --j) {
		if (s.charAt(j) != 'g') { flags += s.charAt(j); }
	}
	var t=s.substring(1,j);
	return RegExp(t,flags);
}
// ENDFILE: parensplit.js
// STARTFILE: tools.js
// IE madness with encoding
// ========================
//
// suppose throughout that the page is in utf8, like wikipedia
//
// if a is an anchor DOM element and a.href should consist of
//
// http://host.name.here/wiki/foo?bar=baz
//
// then IE gives foo as "latin1-encoded" utf8; we have foo = decode_utf8(decodeURI(foo_ie))
// but IE gives bar=baz correctly as plain utf8
//
// ---------------------------------
//
// IE's xmlhttp doesn't understand utf8 urls. Have to use encodeURI here.
//
// ---------------------------------
//
// summat else

// Source: http://aktuell.de.selfhtml.org/artikel/javascript/utf8b64/utf8.htm

//<NOLITE>
function encode_utf8(rohtext) {
	// dient der Normalisierung des Zeilenumbruchs
	rohtext = rohtext.replace(/\r\n/g,"\n");
	var utftext = "";
	for(var n=0; n<rohtext.length; n++)
	{
		// ermitteln des Unicodes des  aktuellen Zeichens
		var c=rohtext.charCodeAt(n);
		// alle Zeichen von 0-127 => 1byte
		if (c<128)
			utftext += String.fromCharCode(c);
		// alle Zeichen von 127 bis 2047 => 2byte
		else if((c>127) && (c<2048)) {
			utftext += String.fromCharCode((c>>6)|192);
			utftext += String.fromCharCode((c&63)|128);}
		// alle Zeichen von 2048 bis 66536 => 3byte
		else {
			utftext += String.fromCharCode((c>>12)|224);
			utftext += String.fromCharCode(((c>>6)&63)|128);
			utftext += String.fromCharCode((c&63)|128);}
	}
	return utftext;
}

function getJsObj(json) {
	try {
		var json_ret = eval('(' + json + ')');
	} catch (someError) {
		errlog('Something went wrong with getJsobj, json='+json);
		return 1;
	}
	if( json_ret['warnings'] ) {
		for( var w=0; w < json_ret['warnings'].length; w++ ) {
			log( json_ret['warnings'][w]['*'] );
		}
	} else if ( json_ret['error'] ) {
		errlog( json_ret['error'].code + ': ' + json_ret['error'].info );
	}
	return json_ret;
}

function anyChild(obj) {
	for (var p in obj) {
		return obj[p];
	}
	return null;
}

//</NOLITE>

function decode_utf8(utftext) {
	var plaintext = ""; var i=0, c=0, c1=0, c2=0;
	// while-Schleife, weil einige Zeichen uebersprungen werden
	while(i<utftext.length)
	{
		c = utftext.charCodeAt(i);
		if (c<128) {
			plaintext += String.fromCharCode(c);
			i++;}
		else if((c>191) && (c<224)) {
			c2 = utftext.charCodeAt(i+1);
			plaintext += String.fromCharCode(((c&31)<<6) | (c2&63));
			i+=2;}
		else {
			c2 = utftext.charCodeAt(i+1); c3 = utftext.charCodeAt(i+2);
			plaintext += String.fromCharCode(((c&15)<<12) | ((c2&63)<<6) | (c3&63));
			i+=3;}
	}
	return plaintext;
}


function upcaseFirst(str) {
	if (typeof str != typeof '' || str=='') return '';
	return str.charAt(0).toUpperCase() + str.substring(1);
}


function findInArray(arr, foo) {
	if (!arr || !arr.length) { return -1; }
	var len=arr.length;
	for (var i=0; i<len; ++i) { if (arr[i]==foo) { return i; } }
	return -1;
}

function nextOne (array, value) {
	// NB if the array has two consecutive entries equal
	//    then this will loop on successive calls
	var i=findInArray(array, value);
	if (i<0) { return null; }
	return array[i+1];
}

function literalizeRegex(str){
	return str.replace(RegExp('([-.|()\\+?*^${}\\[\\]])', 'g'), '\\$1');
}

String.prototype.entify=function() {
	//var shy='&shy;';
	return this.split('&').join('&amp;').split('<').join('&lt;').split('>').join('&gt;'/*+shy*/).split('"').join('&quot;');
};

function findThis(array, value) {
	if (typeof array.length == 'undefined') { return null; }
	for (var i=0; i<array.length; ++i) {
		if (array[i]==value) { return i; }
	}
	return null;
}

function removeNulls(list) {
	var ret=[];
	for (var i=0; i<list.length; ++i) {
		if (list[i]) {
			ret.push(list[i]);
		}
	}
	return ret;
}
function joinPath(list) {
	return removeNulls(list).join('/');
}


function simplePrintf(str, subs) {
	if (!str || !subs) { return str; }
	var ret=[];
	var s=str.parenSplit(/(%s|\$[0-9]+)/);
	var i=0;
	do {
		ret.push(s.shift());
		if ( !s.length ) { break; }
		var cmd=s.shift();
		if (cmd == '%s') {
			if ( i < subs.length ) { ret.push(subs[i]); } else { ret.push(cmd); }
			++i;
		} else {
			var j=parseInt( cmd.replace('$', ''), 10 ) - 1;
			if ( j > -1 && j < subs.length ) { ret.push(subs[j]); } else { ret.push(cmd); }
		}
	} while (s.length > 0);
	return ret.join('');
}

function max(a,b){return a<b ? b : a;}
function min(a,b){return a>b ? b : a;}

function isString(x) { return (typeof x === 'string' || x instanceof String); }
//function isNumber(x) { return (typeof x === 'number' || x instanceof Number); }
function isRegExp(x) { return x instanceof RegExp; }
function isArray (x) { return x instanceof Array; }
function isObject(x) { return x instanceof Object; }
function isFunction(x) {
    return !isRegExp(x) && (typeof x === 'function' || x instanceof Function);
}

function repeatString(s,mult) {
	var ret='';
	for (var i=0; i<mult; ++i) { ret += s; }
	return ret;
}

function zeroFill(s, min) {
	min = min || 2;
	var t=s.toString();
	return repeatString('0', min - t.length) + t;
}

function map(f, o) {
	if (isArray(o)) { return map_array(f,o); }
	return map_object(f,o);
}
function map_array(f,o) {
	var ret=[];
	for (var i=0; i<o.length; ++i) {
		ret.push(f(o[i]));
	}
	return ret;
}
function map_object(f,o) {
	var ret={};
	for (var i in o) { ret[o]=f(o[i]); }
	return ret;
}
// ENDFILE: tools.js
// STARTFILE: dab.js
//<NOLITE>
//////////////////////////////////////////////////
// Dab-fixing code
//


function retargetDab(newTarget, oldTarget, friendlyCurrentArticleName, titleToEdit) {
	log('retargetDab: newTarget='+newTarget + ' oldTarget=' + oldTarget);
	return changeLinkTargetLink(
	{newTarget: newTarget,
			text: newTarget.split(' ').join('&nbsp;'),
			hint: tprintf('disambigHint', [newTarget]),
			summary: simplePrintf(
				    getValueOf('popupFixDabsSummary'), [friendlyCurrentArticleName, newTarget ]),
			clickButton: 'wpDiff', minor: true, oldTarget: oldTarget,
			watch: getValueOf('popupWatchDisambiggedPages'),
			title: titleToEdit});
}

function listLinks(wikitext, oldTarget, titleToEdit) {
	// mediawiki strips trailing spaces, so we do the same
	// testcase: http://en.wikipedia.org/w/index.php?title=Radial&oldid=97365633
	var reg=RegExp('\\[\\[([^|]*?) *(\\||\\]\\])', 'gi');
	var ret=[];
	var splitted=wikitext.parenSplit(reg);
	// ^[a-z]+ should match interwiki links, hopefully (case-insensitive)
	// and ^[a-z]* should match those and [[:Category...]] style links too
	var omitRegex=RegExp('^[a-z]*:|^[Ss]pecial:|^[Ii]mage|^[Cc]ategory');
	var friendlyCurrentArticleName= oldTarget.toString();
	var wikPos = getValueOf('popupDabWiktionary');

	for (var i=1; i<splitted.length; i=i+3) {
		if (typeof splitted[i] == typeof 'string' && splitted[i].length>0 && !omitRegex.test(splitted[i])) {
			ret.push( retargetDab(splitted[i], oldTarget, friendlyCurrentArticleName, titleToEdit) );
		} /* if */
	} /* for loop */

	ret = rmDupesFromSortedList(ret.sort());

	if (wikPos) {
		var wikTarget='wiktionary:' +
			friendlyCurrentArticleName.replace( RegExp('^(.+)\\s+[(][^)]+[)]\\s*$'), '$1' );

		var meth;
		if (wikPos.toLowerCase() == 'first') { meth = 'unshift'; }
		else { meth = 'push'; }

		ret[meth]( retargetDab(wikTarget, oldTarget, friendlyCurrentArticleName, titleToEdit) );
	}

	ret.push(changeLinkTargetLink(
	{ newTarget: null,
			text: popupString('remove this link').split(' ').join('&nbsp;'),
			hint: popupString("remove all links to this disambig page from this article"),
			clickButton: "wpDiff", oldTarget: oldTarget,
			summary: simplePrintf(getValueOf('popupRmDabLinkSummary'), [friendlyCurrentArticleName]),
			watch: getValueOf('popupWatchDisambiggedPages'),
			title: titleToEdit
			}));
	return ret;
}

function rmDupesFromSortedList(list) {
	var ret=[];
	for (var i=0; i<list.length; ++i) {
		if (ret.length===0 || list[i]!=ret[ret.length-1]) { ret.push(list[i]); }
	}
	return ret;
}

function makeFixDab(data, navpop) {
	// grab title from parent popup if there is one; default exists in changeLinkTargetLink
	var titleToEdit=(navpop.parentPopup && navpop.parentPopup.article.toString());
	var list=listLinks(data, navpop.originalArticle, titleToEdit);
	if (list.length===0) { log('listLinks returned empty list'); return null; }
	var html='<hr>' + popupString('Click to disambiguate this link to:') + '<br>';
	html+=list.join(', ');
	return html;
}


function makeFixDabs(wikiText, navpop) {
	if (getValueOf('popupFixDabs') && isDisambig(wikiText, navpop.article) &&
	    Title.fromURL(location.href).namespace() != pg.ns.special &&
	    navpop.article.talkPage() ) {
		setPopupHTML(makeFixDab(wikiText, navpop), 'popupFixDab', navpop.idNumber);
	}
}

function popupRedlinkHTML(article) {
	return changeLinkTargetLink(
		{ newTarget: null, text: popupString('remove this link').split(' ').join('&nbsp;'),
			hint: popupString("remove all links to this page from this article"),
			clickButton: "wpDiff",
			oldTarget: article.toString(),
			summary: simplePrintf(getValueOf('popupRedlinkSummary'), [article.toString()])});
}
//</NOLITE>
// ENDFILE: dab.js
// STARTFILE: htmloutput.js

function appendPopupContent(obj, elementId, popupId, onSuccess) {
	return setPopupHTML(obj, elementId, popupId, onSuccess, true);
}

// this has to use a timer loop as we don't know if the DOM element exists when we want to set the text
function setPopupHTML (str, elementId, popupId, onSuccess, append) {
	if (elementId=='popupPreview') {
	}
	if (typeof popupId === 'undefined') {
		//console.error('popupId is not defined in setPopupHTML, html='+str.substring(0,100));
		popupId = pg.idNumber;
	}

	var popupElement=document.getElementById(elementId+popupId);
	if (popupElement) {
		if (!append) { popupElement.innerHTML=''; }
		if (isString(str)) {
			popupElement.innerHTML+=str;
		} else {
			popupElement.appendChild(str);
		}
		if (onSuccess) { onSuccess(); }
		setTimeout(checkPopupPosition, 100);
		return true;
	} else {
		// call this function again in a little while...
		setTimeout(function(){
				setPopupHTML(str,elementId,popupId,onSuccess);
			}, 600);
	}
	return null;
}

//<NOLITE>
function setImageStatus(str, id) {return; } // setPopupHTML(str, 'popupImageStatus', id);}
function setPopupTrailer(str,id) {return setPopupHTML(str, 'popupData', id);}
//</NOLITE>


function fillEmptySpans(args) { return fillEmptySpans2(args); }

// args.navpopup is mandatory
// optional: args.redir, args.redirTarget
// FIXME: ye gods, this is ugly stuff
function fillEmptySpans2(args) { // if redir is present and true then redirTarget is mandatory
	var redir=true;
	if (typeof args != 'object' || typeof args.redir == 'undefined' || !args.redir) { redir=false; }
	var a=args.navpopup.parentAnchor;

	var article, hint=null, oldid=null, params={};
	if (redir && typeof args.redirTarget == typeof {}) {
		article=args.redirTarget;
		//hint=article.hintValue();
	} else {
		article=(new Title()).fromAnchor(a);
		hint=a.originalTitle || article.hintValue();
		params=parseParams(a.href);
		oldid=(getValueOf('popupHistoricalLinks')) ? params.oldid : null;
		rcid=params.rcid;
	}
	var x={ article:article, hint: hint, oldid: oldid, rcid: rcid, navpop:args.navpopup, params:params };

	var structure=pg.structures[getValueOf('popupStructure')];
	if (typeof structure != 'object') {
		setPopupHTML('popupError', 'Unknown structure (this should never happen): '+
			     pg.option.popupStructure, args.navpopup.idNumber);
		return;
	}
	var spans=flatten(pg.misc.layout);
	var numspans = spans.length;
	var redirs=pg.misc.redirSpans;

	for (var i=0; i<numspans; ++i) {
		var f=findThis(redirs, spans[i]);
		//log('redir='+redir+', f='+f+', spans[i]='+spans[i]);
		if ( (f!==null && !redir) || (f===null && redir) ) {
			//log('skipping this set of the loop');
			continue;
		}
		var structurefn=structure[spans[i]];
		var setfn = setPopupHTML;
		if (getValueOf('popupActiveNavlinks') && 
		    (spans[i].indexOf('popupTopLinks')==0 || spans[i].indexOf('popupRedirTopLinks')==0)
			    ) {
			setfn = setPopupTipsAndHTML;
		}
		switch (typeof structurefn) {
		case 'function':
			//log('running '+spans[i]+'({article:'+x.article+', hint:'+x.hint+', oldid: '+x.oldid+'})');
			setfn(structurefn(x), spans[i], args.navpopup.idNumber);
			break;
		case 'string':
			setfn(structurefn, spans[i], args.navpopup.idNumber);
			break;
		default:
			errlog('unknown thing with label '+spans[i]);
			break;
		}
	}
}

// flatten an array
function flatten(list, start) {
	var ret=[];
	if (typeof start == 'undefined') { start=0; }
	for (var i=start; i<list.length; ++i) {
		if (typeof list[i] == typeof []) {
			return ret.concat(flatten(list[i])).concat(flatten(list, i+1));
		}
		else { ret.push(list[i]); }
	}
	return ret;
}

// Generate html for whole popup
function popupHTML (a) {
	getValueOf('popupStructure');
	var structure=pg.structures[pg.option.popupStructure];
	if (typeof structure != 'object') {
		//return 'Unknown structure: '+pg.option.popupStructure;
		// override user choice
		pg.option.popupStructure=pg.optionDefault.popupStructure;
		return popupHTML(a);
	}
	if (typeof structure.popupLayout != 'function') { return 'Bad layout'; }
	pg.misc.layout=structure.popupLayout();
	if (typeof structure.popupRedirSpans == 'function') { pg.misc.redirSpans=structure.popupRedirSpans(); }
	else { pg.misc.redirSpans=[]; }
	return makeEmptySpans(pg.misc.layout, a.navpopup);
}

function makeEmptySpans (list, navpop) {
	var ret='';
	for (var i=0; i<list.length; ++i) {
		if (typeof list[i] == typeof '') {
		    ret += emptySpanHTML(list[i], navpop.idNumber, 'div');
		} else if (typeof list[i] == typeof [] && list[i].length > 0 ) {
			ret = ret.parenSplit(RegExp('(</[^>]*?>$)')).join(makeEmptySpans(list[i], navpop));
		} else if (typeof list[i] == typeof {} && list[i].nodeType ) {
			ret += emptySpanHTML(list[i].name, navpop.idNumber, list[i].nodeType);
		}
	}
	return ret;
}


function emptySpanHTML(name, id, tag, classname) {
	tag = tag || 'span';
	if (!classname) { classname = emptySpanHTML.classAliases[name]; }
	classname = classname || name;
	if (name == getValueOf('popupDragHandle')) { classname += ' popupDragHandle'; }
	return simplePrintf('<%s id="%s" class="%s"></%s>', [tag, name + id, classname, tag]);
}
emptySpanHTML.classAliases={ 'popupSecondPreview': 'popupPreview' };

// generate html for popup image
// <a id="popupImageLinkn"><img id="popupImagen">
// where n=idNumber
function imageHTML(article, idNumber) {
	return simplePrintf('<a id="popupImageLink$1">' +
			    '<img align="right" valign="top" id="popupImg$1" style="display: none;"></img>' +
			    '</a>', [ idNumber ]);
}

function popTipsSoonFn(id, when, popData) {
	when || ( when=250 );
	var popTips=function(){ setupTooltips(document.getElementById(id), false, true, popData); };
	return function() { setTimeout( popTips, when, popData ); };
}

function setPopupTipsAndHTML(html, divname, idnumber, popData) {
	setPopupHTML(html, divname, idnumber,
		     getValueOf('popupSubpopups') ? 
		     popTipsSoonFn(divname + idnumber, null, popData) : 
		     null);
}
// ENDFILE: htmloutput.js
// STARTFILE: mouseout.js
//////////////////////////////////////////////////
// fuzzy checks

function fuzzyCursorOffMenus(x,y, fuzz, parent) {
	if (!parent) { return null; }
	var uls=parent.getElementsByTagName('ul');
	for (var i=0; i<uls.length; ++i) {
		if (uls[i].className=='popup_menu') {
			if (uls[i].offsetWidth > 0) return false;
		} // else {document.title+='.';}
	}
	return true;
}

function checkPopupPosition () { // stop the popup running off the right of the screen
	// FIXME avoid pg.current.link
	pg.current.link && pg.current.link.navpopup &&
	    pg.current.link.navpopup.limitHorizontalPosition();
}

function mouseOutWikiLink () {
	if (!window.popupsReady || !window.popupsReady()) { return; }
	//console ('mouseOutWikiLink');
	var a=this;
	if (a.navpopup==null) return;
	if ( ! a.navpopup.isVisible() ) {
		a.navpopup.banish();
		return;
	}
	Navpopup.tracker.addHook(posCheckerHook(a.navpopup));
}

function posCheckerHook(navpop) {
	return function() {
		if (!navpop.isVisible()) { return true; /* remove this hook */ }
		if (Navpopup.tracker.dirty) {
		    return false;
		}
		var x=Navpopup.tracker.x, y=Navpopup.tracker.y;
		var mouseOverNavpop = navpop.isWithin(x,y,navpop.fuzz, navpop.mainDiv) ||
		    !fuzzyCursorOffMenus(x,y,navpop.fuzz, navpop.mainDiv);

		// FIXME it'd be prettier to do this internal to the Navpopup objects
		var t=getValueOf('popupHideDelay');
		if (t) { t = t * 1000; }
		if (!t) {
			if(!mouseOverNavpop) {
			    navpop.banish();
			    return true; /* remove this hook */
			}
			return false;
		}
		// we have a hide delay set
		var d=+(new Date());
		if ( !navpop.mouseLeavingTime ) {
			navpop.mouseLeavingTime = d;
			return false;
		}
		if ( mouseOverNavpop ) {
			navpop.mouseLeavingTime=null;
			return false;
		}
		if (d - navpop.mouseLeavingTime > t) {
			navpop.mouseLeavingTime=null;
			navpop.banish(); return true; /* remove this hook */
		}
		return false;
	};
}

function runStopPopupTimer(navpop) {
	// at this point, we should have left the link but remain within the popup
	// so we call this function again until we leave the popup.
	if (!navpop.stopPopupTimer) {
		navpop.stopPopupTimer=setInterval(posCheckerHook(navpop), 500);
		navpop.addHook(function(){clearInterval(navpop.stopPopupTimer);},
			       'hide', 'before');
	}
}
// ENDFILE: mouseout.js
// STARTFILE: previewmaker.js
/**
   @fileoverview
   Defines the {@link Previewmaker} object, which generates short previews from wiki markup.
*/

/**
   Creates a new Previewmaker
   @constructor
   @class The Previewmaker class. Use an instance of this to generate short previews from Wikitext.
   @param {String} wikiText The Wikitext source of the page we wish to preview.
   @param {String} baseUrl The url we should prepend when creating relative urls.
   @param {Navpopup} owner The navpop associated to this preview generator
*/
function Previewmaker(wikiText, baseUrl, owner) {
	/** The wikitext which is manipulated to generate the preview. */
	this.originalData=wikiText;
	this.setData();
	this.baseUrl=baseUrl;
	this.owner=owner;
	this.maxCharacters=getValueOf('popupMaxPreviewCharacters');
	this.maxSentences=getValueOf('popupMaxPreviewSentences');
}
Previewmaker.prototype.setData=function() {
	var maxSize=max(10000, 2*this.maxCharacters);
	this.data=this.originalData.substring(0,maxSize);
};
/** Remove HTML comments
    @private
*/
Previewmaker.prototype.killComments = function () {
	// this also kills trailing spaces and one trailing newline, eg [[diamyo]]
	this.data=this.data.replace(RegExp('<!--[\\s\\S]*?--> *\\n?', 'g'), '');
};
/**
   @private
*/
Previewmaker.prototype.killDivs = function () {
	// say goodbye, divs (can be nested, so use * not *?)
	this.data=this.data.replace(RegExp('< *div[^>]* *>[\\s\\S]*?< */ *div *>',
					   'gi'), '');
};
/**
   @private
*/
Previewmaker.prototype.killGalleries = function () {
	this.data=this.data.replace(RegExp('< *gallery[^>]* *>[\\s\\S]*?< */ *gallery *>',
					   'gi'), '');
};
/**
   @private
*/
Previewmaker.prototype.kill = function(opening, closing, subopening, subclosing, repl) {
	var oldk=this.data;
	var k=this.killStuff(this.data, opening, closing, subopening, subclosing, repl);
	while (k.length < oldk.length) {
		oldk=k;
		k=this.killStuff(k, opening, closing, subopening, subclosing, repl);
	}
	this.data=k;
};
/**
   @private
*/
Previewmaker.prototype.killStuff = function (txt, opening, closing, subopening, subclosing, repl) {
	var op=this.makeRegexp(opening);
	var cl=this.makeRegexp(closing, '^');
	var sb=subopening ? this.makeRegexp(subopening, '^') : null;
	var sc=subclosing ? this.makeRegexp(subclosing, '^') : cl;
	if (!op || !cl) {
	    alert('Navigation Popups error: op or cl is null! something is wrong.');
	    return;
	}
	if (!op.test(txt)) { return txt; }
	var ret='';
	var opResult = op.exec(txt);
	ret = txt.substring(0,opResult.index);
	txt=txt.substring(opResult.index+opResult[0].length);
	var depth = 1;
	while (txt.length > 0) {
		var removal=0;
		if (depth==1 && cl.test(txt)) {
			depth--;
			removal=cl.exec(txt)[0].length;
		} else if (depth > 1 && sc.test(txt)) {
			depth--;
			removal=sc.exec(txt)[0].length;
		}else if (sb && sb.test(txt)) {
			depth++;
			removal=sb.exec(txt)[0].length;
		}
		if ( !removal ) { removal = 1; }
		txt=txt.substring(removal);
		if (depth==0) { break; }
	}
	return ret + (repl || '') + txt;
};
/**
   @private
*/
Previewmaker.prototype.makeRegexp = function (x, prefix, suffix) {
	prefix = prefix || '';
	suffix = suffix || '';
	var reStr='';
	var flags='';
	if (isString(x)) {
		reStr=prefix + literalizeRegex(x) + suffix;
	} else if (isRegExp(x)) {
		var s=x.toString().substring(1);
		var sp=s.split('/');
		flags=sp[sp.length-1];
		sp[sp.length-1]='';
		s=sp.join('/');
		s=s.substring(0,s.length-1);
		reStr= prefix + s + suffix;
	} else {
		log ('makeRegexp failed');
	}

	log ('makeRegexp: got reStr=' + reStr + ', flags=' + flags);
	return RegExp(reStr, flags);
};
/**
   @private
*/
Previewmaker.prototype.killBoxTemplates = function () {

	// taxobox removal... in fact, there's a saudiprincebox_begin, so let's be more general
	// also, have float_begin, ... float_end
	this.kill(RegExp('[{][{][^{}\\s|]*?(float|box)[_ ](begin|start)', 'i'),	/[}][}]\s*/, '{{');

	// infoboxes etc
	// from [[User:Zyxw/popups.js]]: kill frames too
	this.kill(RegExp('[{][{][^{}\\s|]*?(infobox|elementbox|frame)[_ ]', 'i'), /[}][}]\s*/, '{{');

};
/**
   @private
*/
Previewmaker.prototype.killTemplates = function () {
	this.kill('{{', '}}', '{', '}', ' ');
};
/**
   @private
*/
Previewmaker.prototype.killTables = function () {
	// tables are bad, too
	// this can be slow, but it's an inprovement over a browser hang
	// torture test: [[Comparison_of_Intel_Central_Processing_Units]]
	this.kill('{|', /[|]}\s*/, '{|');
	this.kill(/<table.*?>/i, /<\/table.*?>/i, /<table.*?>/i);
	// remove lines starting with a pipe for the hell of it (?)
	this.data=this.data.replace(RegExp('^[|].*$', 'mg'), '');
};
/**
   @private
*/
Previewmaker.prototype.killImages = function () {
	// images and categories are a nono
	this.kill(RegExp('[[][[]\\s*(Image|File|' + pg.ns.image + '|' + pg.ns.category + ')\\s*:', 'i'),
		  /\]\]\s*/, '[', ']');
};
/**
   @private
*/
Previewmaker.prototype.killHTML = function () {
	// kill <ref ...>...</ref>
	this.kill(/<ref\b.*?>/i, /<\/ref>/i);

	// let's also delete entire lines starting with <. it's worth a try.
	this.data=this.data.replace(RegExp('(^|\\n) *<.*', 'g'), '\n');

	// and those pesky html tags, but not <nowiki> or <blockquote>
	var splitted=this.data.parenSplit(/(<.*?>)/);
	var len=splitted.length;
	for (var i=1; i<len; i=i+2) {
		switch (splitted[i]) {
		case '<nowiki>':
		case '</nowiki>':
			break;
		default:
			if (! /^< *\/? *blockquote\b/i.test(splitted[i])) {
				splitted[i]='';
			}
		}
	}
	this.data=splitted.join('');
};
/**
   @private
*/
Previewmaker.prototype.killChunks = function() { // heuristics alert
	// chunks of italic text? you crazy, man?
	var italicChunkRegex=new RegExp
	("((^|\\n)\\s*:*\\s*''[^']([^']|'''|'[^']){20}(.|\\n[^\\n])*''[.!?\\s]*\\n)+", 'g');
	// keep stuff separated, though, so stick in \n (fixes [[Union Jack]]?
	this.data=this.data.replace(italicChunkRegex, '\n');
};
/**
   @private
*/
Previewmaker.prototype.mopup = function () {
	// we simply *can't* be doing with horizontal rules right now
	this.data=this.data.replace(RegExp('^-{4,}','mg'),'');

	// no indented lines
	this.data=this.data.replace(RegExp('(^|\\n) *:[^\\n]*','g'), '');

	// replace __TOC__, __NOTOC__ and whatever else there is
	// this'll probably do
	this.data=this.data.replace(RegExp('^__[A-Z_]*__ *$', 'gmi'),'');
};
/**
   @private
*/
Previewmaker.prototype.firstBit = function () {
	// dont't be givin' me no subsequent paragraphs, you hear me?
	/// first we "normalize" section headings, removing whitespace after, adding before
	var d=this.data;

	if (getValueOf('popupPreviewCutHeadings')) {
		this.data=this.data.replace(RegExp('\\s*(==+[^=]*==+)\\s*', 'g'), '\n\n$1 ');
		/// then we want to get rid of paragraph breaks whose text ends badly
		this.data=this.data.replace(RegExp('([:;]) *\\n{2,}', 'g'), '$1\n');

		this.data=this.data.replace(RegExp('^[\\s\\n]*'), '');
		stuff=(RegExp('^([^\\n]|\\n[^\\n\\s])*')).exec(this.data);
		if (stuff) { d = stuff[0]; }
		if (!getValueOf('popupPreviewFirstParOnly')) { d = this.data; }

		/// now put \n\n after sections so that bullets and numbered lists work
		d=d.replace(RegExp('(==+[^=]*==+)\\s*', 'g'), '$1\n\n');
	}


	// superfluous sentences are RIGHT OUT.
	// note: exactly 1 set of parens here needed to make the slice work
	d = d.parenSplit(RegExp('([!?.]+["'+"'"+']*\\s)','g'));
	// leading space is bad, mmkay?
	d[0]=d[0].replace(RegExp('^\\s*'), '');

	var notSentenceEnds=RegExp('([^.][a-z][.] *[a-z]|etc|sic|Dr|Mr|Mrs|Ms|St|no|op|cit|\\[[^\\]]*|\\s[A-Zvclm])$', 'i');
	d = this.fixSentenceEnds(d, notSentenceEnds);

	this.fullLength=d.join('').length;
	var maxChars=getValueOf('popupMaxPreviewCharacters') + this.extraCharacters;
	var n=this.maxSentences;
	var dd=this.firstSentences(d,n); 

	do {
		dd=this.firstSentences(d,n); --n;
	} while ( dd.length > this.maxCharacters && n != 0 );

	this.data = dd;
};
/**
   @private
*/
Previewmaker.prototype.fixSentenceEnds = function(strs, reg) {
	// take an array of strings, strs
	// join strs[i] to strs[i+1] & strs[i+2] if strs[i] matches regex reg

	var abbrevRe=/\b[a-z][^a-z]*$/i;

	for (var i=0; i<strs.length-2; ++i) {
		if (reg.test(strs[i])) {
			a=[];
			for (var j=0; j<strs.length; ++j) {
				if (j<i)   a[j]=strs[j];
				if (j==i)  a[i]=strs[i]+strs[i+1]+strs[i+2];
				if (j>i+2) a[j-2]=strs[j];
			}
			return this.fixSentenceEnds(a,reg);
		}
		// BUGGY STUFF - trying to fix up [[S. C. Johnson & Son]] preview
		if (false && abbrevRe.test(strs[i])) {
			var j=i, buf='';
			do {
				buf=buf+strs[i]+strs[i+1];
				i=i+2;
			} while (i<strs.length-2 && abbrevRe.test(strs[i]));
			strs[i]=buf+strs[i];
			var a=(j?strs.slice(0,j-1):[]).concat(strs.slice(i));
			return this.fixSentenceEnds(a,reg);
		}
	}
	return strs;
};
/**
   @private
*/
Previewmaker.prototype.firstSentences = function(strs, howmany) {
	var t=strs.slice(0, 2*howmany);
	return t.join('');
};
/**
   @private
*/
Previewmaker.prototype.killBadWhitespace = function() {
	// also cleans up isolated '''', eg [[Suntory Sungoliath]]
	this.data=this.data.replace(RegExp('^ *\'+ *$', 'gm'), '');
};
/**
   Runs the various methods to generate the preview.
   The preview is stored in the <code>html</html> field.
   @private
*/
Previewmaker.prototype.makePreview = function() {
	if (this.owner.article.namespace()!=pg.ns.template &&
				this.owner.article.namespace()!=pg.ns.image ) {
		this.killComments();
		this.killDivs();
		this.killGalleries();
		this.killBoxTemplates();

		if (getValueOf('popupPreviewKillTemplates')) {
			this.killTemplates();
		} else {
			this.killMultilineTemplates();
		}
		this.killTables();
		this.killImages();
		this.killHTML();
		this.killChunks();
		this.mopup();

		this.firstBit();
		this.killBadWhitespace();
	}
	else
	{
		this.killHTML();
	}
	this.html=wiki2html(this.data, this.baseUrl); // needs livepreview
	this.fixHTML();
	this.stripLongTemplates();
};
/**
   @private
*/
Previewmaker.prototype.esWiki2HtmlPart = function(data) {
  var reLinks = /(?:\[\[([^|\]]*)(?:\|([^|\]]*))*]]([a-z]*))/gi; //match a wikilink
  reLinks.lastIndex = 0; //reset regex

  var match;
  var result = "";
  var postfixIndex = 0;
  while ((match = reLinks.exec(data)) != null) //match all wikilinks
  {
    //FIXME: the way that link is built here isn't perfect. It is clickable, but popups preview won't recognize it in some cases.
    result += escapeQuotesHTML(data.substring(postfixIndex, match.index)) + 
              "<a href='"+Insta.conf.paths.articles+match[1]+"'>"+escapeQuotesHTML((match[2]?match[2]:match[1])+match[3])+"</a>";
    postfixIndex = reLinks.lastIndex;
  }
  //append the rest
  result += escapeQuotesHTML(data.substring(postfixIndex));
  
  return result;
};
Previewmaker.prototype.editSummaryPreview=function() {
	var reAes   = /\/\* *(.*?) *\*\//g; //match the first section marker
	reAes.lastIndex = 0; //reset regex
	
	var match;
	
	match = reAes.exec(this.data);
	if (match)
	{
		//we have a section link. Split it, process it, combine it.
		var prefix = this.data.substring(0,match.index-1);
		var section = match[1];
		var postfix = this.data.substring(reAes.lastIndex);
		
		var start = "<span class='autocomment'>";
		var end = "</span>";
		if (prefix.length>0) start = this.esWiki2HtmlPart(prefix) + " " + start + "- ";
		if (postfix.length>0) end = ": " + end + this.esWiki2HtmlPart(postfix);
		

		var t=new Title().fromURL(this.baseUrl);
		t.anchorFromUtf(section);
		var sectionLink = Insta.conf.paths.articles + t.toString(true).split("'").join('%27') + '#' + t.anchor.split("'").join('%27');
		return start + "<a href='"+sectionLink+"'>&rarr;</a> "+escapeQuotesHTML(section) + end;
	}
	
	//else there's no section link, htmlify the whole thing.
	return this.esWiki2HtmlPart(this.data);
};

//<NOLITE>
/** Test function for debugging preview problems one step at a time.
 */
function previewSteps(txt) {
	try {
		txt=txt || document.editform.wpTextbox1.value;
	} catch (err) {
		if (pg.cache.pages.length > 0) {
			txt=pg.cache.pages[pg.cache.pages.length-1].data;
		} else {
			alert('provide text or use an edit page');
		}
	}
	txt=txt.substring(0,10000);
	var base=pg.wiki.articlebase + Title.fromURL(document.location.href).urlString();
	var p=new Previewmaker(txt, base, pg.current.link.navpopup);
	if (this.owner.article.namespace() != pg.ns.template) {
		p.killComments(); if (!confirm('done killComments(). Continue?\n---\n' + p.data)) { return; }
		p.killDivs(); if (!confirm('done killDivs(). Continue?\n---\n' + p.data)) { return; }
		p.killGalleries(); if (!confirm('done killGalleries(). Continue?\n---\n' + p.data)) { return; }
		p.killBoxTemplates(); if (!confirm('done killBoxTemplates(). Continue?\n---\n' + p.data)) { return; }

		if (getValueOf('popupPreviewKillTemplates')) {
			p.killTemplates(); if (!confirm('done killTemplates(). Continue?\n---\n' + p.data)) { return; }
		} else {
			p.killMultilineTemplates(); if (!confirm('done killMultilineTemplates(). Continue?\n---\n' + p.data)) { return; }
		}

		p.killTables(); if (!confirm('done killTables(). Continue?\n---\n' + p.data)) { return; }
		p.killImages(); if (!confirm('done killImages(). Continue?\n---\n' + p.data)) { return; }
		p.killHTML(); if (!confirm('done killHTML(). Continue?\n---\n' + p.data)) { return; }
		p.killChunks(); if (!confirm('done killChunks(). Continue?\n---\n' + p.data)) { return; }
		p.mopup(); if (!confirm('done mopup(). Continue?\n---\n' + p.data)) { return; }

		p.firstBit(); if (!confirm('done firstBit(). Continue?\n---\n' + p.data)) { return; }
		p.killBadWhitespace(); if (!confirm('done killBadWhitespace(). Continue?\n---\n' + p.data)) { return; }
	}

	p.html=wiki2html(p.data, base); // needs livepreview
	p.fixHTML(); if (!confirm('done fixHTML(). Continue?\n---\n' + p.html)) { return; }
	p.stripLongTemplates(); if (!confirm('done stripLongTemplates(). Continue?\n---\n' + p.html)) { return; }
	alert('finished preview - end result follows.\n---\n' + p.html);
}
//</NOLITE>

/**
   Works around a quoting bug in livepreview.
   <code>wiki2html('[[Foo\'s "bar"]]')</code> gives @literal{<a href='Foo's "bar"'>}
   which doesn't do very well. We change this into @literal{<a href="Foo's %22bar%22">}
   @private
*/
Previewmaker.prototype.fixHTML = function() {
	if(!this.html) return;
	// all links seem to have potential issues with quotation marks
	var splitted=this.html.parenSplit(/href='([^>]*)'/g);
	var ret='';
	for (var i=0; i<splitted.length; ++i) {
		if(i%2==0) { ret += splitted[i]; continue; }
		if(i%2==1) { ret += 'href="' + splitted[i].split('"').join('%22') + '"'; }
	}
	// fix question marks in wiki links
	// maybe this'll break some stuff :-(
	ret=ret.replace(RegExp('\(<a href="/' + pg.wiki.articlePath + '/[^"]*\)[?]\(.*?"\)', 'g'), '$1%3F$2');
	// FIXME fix up % too
	this.html=ret;
};
/**
   Generates the preview and displays it in the current popup.

   Does nothing if the generated preview is invalid or consists of whitespace only.
   Also activates wikilinks in the preview for subpopups if the popupSubpopups option is true.
*/
Previewmaker.prototype.showPreview = function () {
	this.makePreview();
	if (typeof this.html != typeof '') return;
	if (RegExp('^\\s*$').test(this.html)) return;
	setPopupHTML('<hr>', 'popupPrePreviewSep', this.owner.idNumber);
	setPopupTipsAndHTML(this.html, 'popupPreview', this.owner.idNumber, { owner: this.owner });
	var more = (this.fullLength > this.data.length) ? this.moreLink() : '';
	setPopupHTML(more, 'popupPreviewMore', this.owner.idNumber);
};
/**
   @private
*/
Previewmaker.prototype.moreLink=function() {
	var a=document.createElement('a');
	a.className='popupMoreLink';
	a.innerHTML=popupString('more...');
	var savedThis=this;
	a.onclick=function() {
		savedThis.maxCharacters+=2000;
		savedThis.maxSentences+=20;
		savedThis.setData();
		savedThis.showPreview();
	}
	return a;
}

/**
   @private
*/
Previewmaker.prototype.stripLongTemplates = function() {
	// operates on the HTML!
	this.html=this.html.replace(RegExp('^.{0,1000}[{][{][^}]*?(<(p|br)( /)?>\\s*){2,}([^{}]*?[}][}])?', 'gi'), '');
	this.html=this.html.split('\n').join(' '); // workaround for <pre> templates
	this.html=this.html.replace(RegExp('[{][{][^}]*<pre>[^}]*[}][}]','gi'), '');
};
/**
   @private
*/
Previewmaker.prototype.killMultilineTemplates = function() {
	this.kill('{{{', '}}}');
	this.kill(RegExp('\\s*[{][{][^{}]*\\n'), '}}', '{{');
};
// ENDFILE: previewmaker.js
// STARTFILE: querypreview.js
function loadAPIPreview(queryType, article, navpop) {
	var art=new Title(article).urlString();
	var url=pg.wiki.wikibase + '/api.php?format=json&action=query&';
	var htmlGenerator=function(a,d){alert('invalid html generator');};
	switch (queryType) {
	case 'history':
		url += 'meta=userinfo&uiprop=options&titles=' + art + '&prop=revisions&rvlimit=' +
			getValueOf('popupHistoryPreviewLimit');
		htmlGenerator=APIhistoryPreviewHTML;
		break;
	case 'category':
		url += 'list=categorymembers&cmtitle=' + art;
		htmlGenerator=APIcategoryPreviewHTML;
		break;
	case 'userinfo':
		var usernameart = encodeURIComponent( new Title( article ).userName() );
		url += 'list=users&usprop=blockinfo|groups|editcount|registration&ususers=' + usernameart;
		htmlGenerator=APIuserInfoPreviewHTML;
		break;
	case 'contribs':
	    var usernameart = encodeURIComponent( new Title( article ).userName() );
		url += 'list=usercontribs&meta=userinfo&uiprop=options&ucuser=' + usernameart +
			'&uclimit=' + getValueOf('popupContribsPreviewLimit');
		htmlGenerator=APIcontribsPreviewHTML;
		break;
	case 'imagepagepreview':
		var trail='';
		if (getValueOf('popupImageLinks')) { trail = '&list=imageusage&iutitle=' + art; }
		url += 'titles=' + art + '&prop=revisions|imageinfo&rvprop=content' + trail;
		htmlGenerator=APIimagepagePreviewHTML;
		break;
	case 'backlinks':
		url += 'list=backlinks&bltitle=' + art;
		htmlGenerator=APIbacklinksPreviewHTML;
		break;
	}
	pendingNavpopTask(navpop);
	if( !window.wgEnableAPI || !wgEnableAPI ) {
		/* The API is not available */
		htmlGenerator=function(a,d){
			return 'This function of navigation popups now requires a MediaWiki ' + 
			'installation with the <a href="http://www.mediawiki.org/wiki/API">API</a> enabled.'; };
	}
	var callback=function(d){
	    log( "callback of API functions was hit" );
		showAPIPreview(queryType, htmlGenerator(article,d,navpop), navpop.idNumber, navpop, d);
	};
	var go = function(){
	    getPageWithCaching(url, callback, navpop);
		return true;
	}
	if (navpop.visible || !getValueOf('popupLazyDownloads')) { go(); }
	else { navpop.addHook(go, 'unhide', 'before', 'DOWNLOAD_'+queryType+'_QUERY_DATA'); }
}

function linkList(list) {
	list.sort(function(x,y) { return (x==y ? 0 : (x<y ? -1 : 1)); });
	var buf=[];
	for (var i=0; i<list.length; ++i) {
		buf.push(wikiLink({article: new Title(list[i]),
				   text:    list[i].split(' ').join('&nbsp;'),
				   action:  'view'}));
	}
	return buf.join(', ');
}

function getTimeOffset(tz) {
	if( tz ) {
		if( tz.indexOf('|') > -1 ) {
			// New format
			return parseInt(tz.split('|')[1],10);
		} else if ( tz.indexOf(':') > -1 ) {
			// Old format
			return( parseInt(tz,10)*60 + parseInt(tz.split(':')[1],10) );
		}
	}
	return 0;
}

function editPreviewTable(article, h, reallyContribs, timeOffset) {
	var html=['<table>'];
	var day=null;
	var curart=article;
	for (var i=0; i<h.length; ++i) {
		if (reallyContribs) { 
		    var page=h[i]['title']; curart = new Title(page);
		}
		var minor=typeof h[i]['minor']=='undefined' ? '' : '<b>m </b>';
		var editDate=adjustDate(getDateFromTimestamp(h[i].timestamp), timeOffset);
		var thisDay = dayFormat(editDate);
		var thisTime = timeFormat(editDate);
		if (thisDay==day) { thisDay=''; }
		else { day=thisDay; }
		if (thisDay) {
			html.push( '<tr><td colspan=3><span class="popup_history_date">' +
				  thisDay+'</span></td></tr>' );
		}
		html.push('<tr class="popup_history_row_' + ( (i%2) ? 'odd' : 'even') + '">');
		html.push('<td>(<a href="' + pg.wiki.titlebase + new Title(curart).urlString() +
			'&diff=prev&oldid=' + h[i]['revid'] + '">' + popupString('last') + '</a>)</td>');
		html.push('<td>' +
			'<a href="' + pg.wiki.titlebase + new Title(curart).urlString() +
			'&oldid=' + h[i]['revid'] + '">' + thisTime + '</a></td>');
		var col3url='', col3txt='';
		if (!reallyContribs) {
			var user=h[i]['user'];
			col3url=pg.wiki.titlebase + pg.ns.user + ':' + new Title(user).urlString();
			col3txt=user;
		} else {
			col3url=pg.wiki.titlebase + curart.urlString();
			col3txt=escapeQuotesHTML(page);
		}
		html.push('<td>' + (reallyContribs ? minor : '') +
			'<a href="' + col3url + '">' + col3txt + '</a></td>');
		var comment='';
		var c=h[i].comment || h[i]['*'];
		if (c) {
			comment=new Previewmaker(c, new Title(curart).toUrl()).editSummaryPreview();
		}
		html.push('<td>' + (!reallyContribs ? minor : '') + comment + '</td>');
		html.push('</tr>');
		html=[html.join('')];
	}
	html.push('</table>');
	return html.join('');
}

function getDateFromTimestamp(t) {
	var s=t.split(/[^0-9]/);
	switch(s.length) {
	case 0: return null;
	case 1: return new Date(s[0]);
	case 2: return new Date(s[0], s[1]-1);
	case 3: return new Date(s[0], s[1]-1, s[2]);
	case 4: return new Date(s[0], s[1]-1, s[2], s[3]);
	case 5: return new Date(s[0], s[1]-1, s[2], s[3], s[4]);
	case 6: return new Date(s[0], s[1]-1, s[2], s[3], s[4], s[5]);
	default: return new Date(s[0], s[1]-1, s[2], s[3], s[4], s[5], s[6]);
	}
}

function adjustDate(d, offset) {
	// offset is in minutes
	var o=offset * 60 * 1000;
	return new Date( +d + o);
}

function dayFormat(editDate, utc) {
	if (utc) { return map(zeroFill, [editDate.getUTCFullYear(), editDate.getUTCMonth()+1, editDate.getUTCDate()]).join('-'); }
	return map(zeroFill, [editDate.getFullYear(), editDate.getMonth()+1, editDate.getDate()]).join('-');
}

function timeFormat(editDate, utc) {
	if (utc) { return map(zeroFill, [editDate.getUTCHours(), editDate.getUTCMinutes(), editDate.getUTCSeconds()]).join(':'); }
	return map(zeroFill, [editDate.getHours(), editDate.getMinutes(), editDate.getSeconds()]).join(':');
}

function showAPIPreview(queryType, html, id, navpop, download) {
    // DJ: done
	var target='popupPreview';
	switch (queryType) {
	case 'imagelinks':
	case 'category':
	case 'userinfo':
		target='popupPostPreview'; break;
	}
	setPopupTipsAndHTML(html, target, id);
	completedNavpopTask(navpop);
}

function APIbacklinksPreviewHTML(article, download, navpop) {
    try {
	    var jsObj=getJsObj(download.data);
   	    var list=jsObj.query.backlinks;
	} catch (someError) { return 'backlinksPreviewHTML went wonky'; }
	var html=[];
	if (!list) { return popupString('No backlinks found'); }
	for ( i in list ) {
		var t=new Title(list[i]['title']);
		html.push('<a href="' + pg.wiki.titlebase + t.urlString() + '">' + t + '</a>');
	}
	html=html.join(', ');
	if (jsObj['query-continue'] && jsObj['query-continue'].backlinks && jsObj['query-continue'].backlinks.blcontinue) {
		html += popupString(' and more');
	}
	return html;
}

function APIsharedImagePagePreviewHTML(obj) {
	log( "APIsharedImagePagePreviewHTML" );
	var popupid = obj['requestid'];
	if( obj['query'] && obj['query']['pages'] )
	{
		var page=anyChild(obj['query']['pages']);
		var content=(page && page.revisions ) ? page.revisions[0]['*'] : null;
		if( content ) 
		{
			/* Not entirely safe, but the best we can do */
			var p=new Previewmaker(content, pg.current.link.navpopup.article, pg.current.link.navpopup);
			p.makePreview();
			setPopupHTML( p.html, "popupSecondPreview", popupid );
		}
	}
}

function APIimagepagePreviewHTML(article, download, navpop) {
	try {
	    var jsObj=getJsObj(download.data);
		var page=anyChild(jsObj.query.pages);
		var content=(page && page.revisions ) ? page.revisions[0]['*'] : null;
	} catch (someError) {
		return 'API imagepage preview failed :(';
	}
	var ret='';
	if (content) {
		var p=prepPreviewmaker(content, article, navpop);
		p.makePreview();
		if (p.html) { ret += '<hr>' + p.html; }
	}
	if (content!==null && getValueOf('popupSummaryData')) {
		var info=getPageInfo(content, download);
		log(info);
		setPopupTrailer(info, navpop.idNumber);
	}
	if (page && page.imagerepository == "shared" ) {
		var art=new Title(article).urlString();
		var shared_url =  pg.wiki.commonsbase + '/api.php?format=json&callback=APIsharedImagePagePreviewHTML' +
							'&requestid=' + navpop.idNumber +
							'&action=query&prop=revisions&rvprop=content&titles=' + art;
		ret = ret +'<hr>' + popupString( 'Image from Commons') +
				': <a href="' + pg.wiki.commonsbase + '/index.php?title=' + art + '">' +
				popupString( 'Description page') + '</a>';
		importScriptURI( shared_url );
	}
	showAPIPreview('imagelinks', APIimagelinksPreviewHTML(article,download), navpop.idNumber, download);
	return ret;
}

function APIimagelinksPreviewHTML(article, download) {
	try {
		var jsobj=getJsObj(download.data);
		var list=jsobj.query.imageusage;
		if (!list) { return popupString('No image links found'); }
	} catch(someError) { return 'Image links preview generation failed :('; }
	var ret=[];
	for (var i=0; i < list.length; i++) {
		ret.push(list[i]['title']);
	}
	if (ret.length === 0) { return popupString('No image links found'); }
	return '<h2>' + popupString('File links') + '</h2>' + linkList(ret);
}

function APIcategoryPreviewHTML(article, download) {
    try{
        var jsobj=getJsObj(download.data);
        var list=jsobj.query.categorymembers;
    } catch(someError) { return 'Category preview failed :('; }
	var ret=[];
	for (var p=0; p < list.length; p++) { 
	   ret.push(list[p]['title']); 
	}
	if (ret.length === 0) { return popupString('Empty category'); }
	ret = '<h2>' + tprintf('Category members (%s shown)', [ret.length]) + '</h2>' +linkList(ret);
	if (jsobj['query-continue'] && jsobj['query-continue'].categorymembers && jsobj['query-continue'].categorymembers.cmcontinue) {
		ret += popupString(' and more');
	}
	return ret;
}

function APIuserInfoPreviewHTML(article, download) {
	try{
		var jsobj=getJsObj(download.data);
		var user=anyChild(jsobj.query.users);
	} catch(someError) { return 'Userinfo preview failed :('; }
	if (!user || user.invalid == '') {
		return '<hr>' + popupString( 'Invalid or IP user');
	} else if (user.missing == '') {
		return '<hr>' + popupString( 'Not a registered username');
	}
	var ret=[];
	if( user.blockedby )
		ret.push('<b>' + popupString('BLOCKED') + '</b>');
	for( var i=0; (user.groups && i < user.groups.length); i++)
	{
		ret.push( user.groups[i] );
	}
	if( user.editcount && user.registration )
		ret.push( user.editcount + popupString(' edits since: ') + dayFormat(getDateFromTimestamp(user.registration)) );
	ret = '<hr>' + ret.join( ', ' );
	return ret;
}

function APIcontribsPreviewHTML(article, download, navpop) {
    return APIhistoryPreviewHTML(article, download, navpop, true);
}

function APIhistoryPreviewHTML(article, download, navpop, reallyContribs) {
    try {
		var jsobj=getJsObj(download.data);
		var tz=jsobj.query.userinfo.options.timecorrection;
		if( reallyContribs )
		    var edits=jsobj.query.usercontribs;
		else 
		    var edits=anyChild(jsobj.query.pages)['revisions'];
	} catch (someError) {
		return 'History preview failed :-(';
	}
	var timeOffset = getTimeOffset(tz);
	Cookie.create('popTz', timeOffset, 1);

	var ret=editPreviewTable(article, edits, reallyContribs, timeOffset);
	return ret;
}


//</NOLITE>
// ENDFILE: querypreview.js
// STARTFILE: debug.js
////////////////////////////////////////////////////////////////////
// Debugging functions
////////////////////////////////////////////////////////////////////

function log(){}; // dummy to stop errors
function setupDebugging() {
//<NOLITE>
	if (window.popupDebug) { // popupDebug is set from .version
		window.log=function(x) { //if(gMsg!='')gMsg += '\n'; gMsg+=time() + ' ' + x; };
			window.console.log(x);
		}
		window.errlog=function(x) {
			window.console.error(x);
		}
		log('Initializing logger');
	} else {
//</NOLITE>
		window.log = function(x) {};
		window.errlog = function(x) {};
//<NOLITE>
	}
//</NOLITE>
}
// ENDFILE: debug.js
// STARTFILE: images.js
//<NOLITE>
// FIXME rewrite ALL of this
// How the URLs for images in the popup come about

//   loadPreview
//          |
//       getWiki
//          |<----------------see other schematic for details
//    insertPreview      (insertPreview = onComplete)
//          |
//          |            insertPreview gets a wikiText fragment from
//          |                       the wikiText downloaded by getWiki
//          |
//  [wikiMarkupToAddressFragment]
//       |
//       |                     mouseOverWikiLink  (gets an "address fragment",
//       |                            |            no processing needed)
//       \->-*loadThisImage---<----loadImages
//                  |
//           [image(Thumb)URL]-->--hopefully valid image urls

// FIXME get rid of pg.idNumber

function sequentialLoadThisImage (image) {
	if (!getValueOf('popupImages')) { return false; }
	if (!isValidImageName(image)) { return false; }

	var imageUrls=getImageUrls(image);
	if (!imageUrls) { return null; }

	var img=new Image();
	img.isNew=true;
	img.pg.idNumber=pg.idNumber;
	img.counter=1;

	img.onload = function () {
		// clear status thingy
		setImageStatus('');

		var i=findThis(imageUrls, this.src);
		var goodSrc=this.src;

		var setPopupImage=function () {
			var popupImage=document.getElementById("popupImage"+this.pg.idNumber);
			if (popupImage && typeof popupImage.src != 'undefined') {
				clearInterval(pg.timer.image);
				popupImage.src=goodSrc;
				popupImage.width=getValueOf('popupImageSize');
				popupImage.style.display='inline';
				setPopupImageLink(image, pg.wiki.imageSources[i].wiki);
				return true;
			} else { return false; }
		};
		pg.timer.image=setInterval(setPopupImage, 250);
		pg.cache.images.push(goodSrc);
	};

	img.onerror = function () {
		pg.cache.badImageUrls.push(this.src);
	};

	img.setNext = function () {
		var currentSrc=null;
		var newSrc;
		if (!this.isNew) { currentSrc=this.src; }
		this.isNew=false;

		newSrc= (currentSrc) ? nextOne(imageUrls, currentSrc) : imageUrls[0];

		while (findThis(pg.cache.badImageUrls, newSrc))  {
			newSrc=nextOne(imageUrls, newSrc);
			if (!newSrc) {
				setImageStatus (' :-(');
				return;
			}
		}
		setImageStatus(' '+findThis(imageUrls, newSrc));
		this.src=newSrc;
	};

	// start the ball rolling
	img.setNext();

}

function loadThisImageAtThisUrl(image, url) {
	log('loading "best" image:\n'+url);
	pg.misc.gImage=new Title(image.toString());
	pg.misc.imageArray = [];
	pg.misc.imageArray[0] = new Image();
	pg.misc.imageArray[0].src=url;
	if (pg.timer.image || pg.timer.image===0) {
		clearInterval(pg.timer.image);
		pg.counter.checkImages=0;
	}
	pg.timer.image=setInterval(checkImages, 250);
	return;
}

// methinks this is unbelievably silly
// it dovetails with the parallel image loader function
function checkImages() {
	//log('checkImages: pg.counter.loop='+pg.counter.loop+'; pg.counter.checkImages='+pg.counter.checkImages);
	if (pg.timer.checkImages || pg.timer.checkImages===0) {
		clearInterval(pg.timer.checkImages);
		pg.timer.checkImages=null;
		if (pg.counter.loop > 10) {pg.counter.loop=0; log('too many iterations of checkImages'); return;}
		pg.counter.loop++;
	} else pg.counter.checkImages++;

	var status =  ( pg.counter.checkImages % 2 ) ? ':' : '.' ;
	setImageStatus(status);

	if (pg.counter.checkImages > 100) {
		pg.counter.checkImages = 0;
		log ('pg.counter.checkImages too big in checkImages; returning');
		clearInterval(pg.timer.image);
	}

	var popupImage=null;
	popupImage=document.getElementById("popupImg"+pg.idNumber);
	if (popupImage == null) {
		// this doesn't seem to happen any more in practise for some reason
		// still, I'll leave it in
		log('checkImages: document.getElementById("popupImg'+pg.idNumber+'") is null! retrying in 333ms...');
		pg.timer.checkImages=setInterval("checkImages()",333);
		return;
	}

	log('checkImages: found element popupImg'+pg.idNumber+', and src='+popupImage.src);

	// get the first image to successfully load
	// and put it in the popupImage
	for(var i = 0; i < pg.misc.imageArray.length; ++i) {
		if(isImageOk(pg.misc.imageArray[i])) {
			// stop all the gubbins, assign the image and return

			log('checkImages: got at pos '+i+', src='+pg.misc.imageArray[i].src);
			clearInterval(pg.timer.image);

			if(pg.misc.gImage && pg.misc.gImage.namespace() == pg.ns.image) {
				popupImage.src=pg.misc.imageArray[i].src;
				popupImage.width=getValueOf('popupImageSize');
				popupImage.style.display='inline';
				// should we check to see if it's already there? maybe...
				pg.cache.images.push(pg.misc.imageArray[i].src);

				setPopupImageLink(pg.misc.gImage, pg.wiki.imageSources[i].wiki);
				stopImagesDownloading();
			}

			setImageStatus('');

			// reset evil nonconstant globals
			delete pg.misc.imageArray; pg.misc.imageArray=[];
			pg.timer.image=null;

			pg.counter.checkImages=0;
			pg.counter.loop=0;

			return popupImage.src;
		}
	}
	log('checkImages: no good image found. retrying in a tic...');
	pg.timer.checkImages=setInterval("checkImages()",333);
}

function stopImagesDownloading() {
	pg.misc.gImage=null;
	if (pg.misc.imageArray == null) { return null; }
	for (var i=0; i<pg.misc.imageArray.length; ++i) {
		//pg.misc.imageArray[i].src=''; // this is a REALLY BAD IDEA
		delete pg.misc.imageArray[i];
		//pg.misc.imageArray[i] = new Image();
	}
	pg.misc.imageArray = [];
}

function toggleSize() {
	var imgContainer=this;
	if (!imgContainer) { alert('imgContainer is null :/'); return;}
	img=imgContainer.firstChild;
	if (!img) { alert('img is null :/'); return;}
	if (!img.style.width || img.style.width=='') { img.style.width='100%'; }
	else { img.style.width=''; }
}

function setPopupImageLink (img, wiki) {
	if( wiki === null || img === null ) { return null; }

	var a=document.getElementById("popupImageLink"+pg.idNumber);
	if (a === null) { return null; }

	switch (getValueOf('popupThumbAction')) {
	case 'imagepage':
		if (pg.current.article.namespace()!=pg.ns.image) {
			a.href=pg.wiki.titlebase + img.urlString();
			// FIXME: unreliable pg.idNumber
			popTipsSoonFn('popupImage' + pg.idNumber)();
			break;
		} // else fall through
	case 'sizetoggle':
		a.onclick=toggleSize;
		a.title=popupString('Toggle image size');
		return;
	case 'linkfull':
		var linkURL = imageURL(img, wiki);
		if (linkURL) {
			a.href = linkURL;
			a.title=popupString('Open full-size image');
		}
		return;
	}
}

function isImageOk(img) {
	// IE test
	if (!img.complete) { return false; }

	// gecko test
	if (typeof img.naturalWidth != "undefined" && img.naturalWidth == 0) { return false; }

	// test for konqueror and opera

	// note that img.width must not be defined in the html with a width="..."
	// for this to work.

	// konq seems to give "broken images" width 16, presumably an icon width
	// this test would probably work in gecko too, *except for very small images*
	if (typeof img.width == 'undefined' || img.width <=  16) { return false; }

	// No other way of checking: assume it's ok.
	return true;
}

// those odd a/a5/ bits of image urls
function imagePathComponent(article) { // article is string, no namespace
	// FIXME needs testing with odd characters
	var forhash=article.split(' ').join('_');
	var hash=hex_md5(forhash);
	return hash.substring(0,1) + '/' + hash.substring(0,2) + '/';
}

function getImageUrlStart(wiki) { // this returns a trailing slash
	switch (wiki) {
	case 'en.wikipedia.org':  return 'http://upload.wikimedia.org/wikipedia/en/';
	case pg.wiki.commons:     return 'http://upload.wikimedia.org/wikipedia/commons/';
	case 'en.wiktionary.org': return 'http://en.wiktionary.org/upload/en/';
	case 'secure.wikimedia.org':
	    return joinPath(['http://upload.wikimedia.org', pg.wiki.prePath]) + '/'; break;
	default: // unsupported - take a guess
		if (pg.wiki.wikimedia) {
			return 'http://upload.wikimedia.org/wikipedia/' + pg.wiki.lang +'/';
		}
		/* this should work for wikicities */
		return 'http://' + wiki + '/images/';
	}
}

function imageURL(img, wiki) {
	if (getValueOf('popupImagesFromThisWikiOnly') && wiki != pg.wiki.hostname) return null;
	var imgurl=null;
	var pathcpt = imagePathComponent(img.stripNamespace());
	imgurl=getImageUrlStart(wiki) + pathcpt + img.stripNamespace().split(' ').join('_');
	return imgurl;
}

function imageThumbURL(img, wiki, width) {
	//
	// eg http://upload.wikimedia.org/wikipedia/en/thumb/6/61/
	//           Rubiks_cube_solved.jpg/120px-Rubiks_cube_solved.jpg
	//           ^^^^^^^^^^^^^^^^^^^^^^^
	//          wikicities omits this bit
	//  AND wikicities needs a new pathcpt for each filename including thumbs

	if (getValueOf('popupImagesFromThisWikiOnly') && wiki != pg.wiki.hostname) return null;
	if (getValueOf('popupNeverGetThumbs')) return null;

	var imgurl=null;
	var stripped=img.stripNamespace();
	var pathcpt;
	if (pg.wiki.wikimedia) pathcpt = imagePathComponent(stripped);
	else pathcpt = imagePathComponent(width+'px-'+stripped);
	imgurl=getImageUrlStart(wiki) +  "thumb/" + pathcpt;
	if (pg.wiki.wikimedia) imgurl += stripped + '/';
	imgurl += width +"px-" + stripped;
	return imgurl;
}

function loadImages(image) {
	if (typeof image.stripNamespace != 'function') { alert('loadImages bad'); }
	if (getValueOf('popupLoadImagesSequentially')) { return sequentialLoadThisImage(image); }
	return parallelLoadThisImage(image);
}

function getImageUrls(image) {
	if (typeof image.stripNamespace != 'function') { alert('getImageUrls bad'); }
	var imageUrls=[];
	for (var i=0; i<pg.wiki.imageSources.length; ++i) {
		var url;
		if (pg.wiki.imageSources[i].thumb) {
			url=imageThumbURL(image, pg.wiki.imageSources[i].wiki, pg.wiki.imageSources[i].width);
		} else { url=imageURL(image, pg.wiki.imageSources[i].wiki); }
		for (var j=0; j<pg.cache.images.length; ++j) {
			if (url == pg.cache.images[j]) {
				loadThisImageAtThisUrl(image, url);
				return null;
			}
		}
		if (url!=null) imageUrls.push(url);
	}
	return imageUrls;
}


// this is probably very wasteful indeed of bandwidth
// hey ho

function parallelLoadThisImage (image) {
	if (typeof image.stripNamespace != 'function') { alert('parallelLoadThisImage bad'); }
	if (!getValueOf('popupImages')) return;
	if (!isValidImageName(image)) return false;

	var imageUrls=getImageUrls(image);
	if (!imageUrls) return null;

	for (var i=0; i<imageUrls.length; ++i) {
		var url = imageUrls[i];
		pg.misc.imageArray[i]=new Image();
		pg.misc.imageArray[i].src=url;
	}
	if (pg.timer.image != null) {
		clearInterval(pg.timer.image);
		pg.counter.checkImages=0;
	}
	pg.misc.gImage=new Title(image.toString());
	pg.timer.image=setInterval("checkImages()", 250);
	return true;
}

function getValidImageFromWikiText(wikiText) {
	var imagePage=null;
	// nb in pg.re.image we're interested in the second bracketed expression
	// this may change if the regex changes :-(
	//var match=pg.re.image.exec(wikiText);
	var matched=null;
	var match;
	// strip html comments, used by evil bots :-(
	var t = removeMatchesUnless(wikiText, RegExp('(<!--[\\s\\S]*?-->)'), 1,
				    RegExp('^<!--[^[]*popup', 'i'));

	while ( match = pg.re.image.exec(t) ) {
		// now find a sane image name - exclude templates by seeking {
		var m = match[2] || match[6];
		var pxWidth=match[4];
		if ( isValidImageName(m) &&
		     (!pxWidth || parseInt(pxWidth,10) >= getValueOf('popupMinImageWidth')) ) {
			matched=m;
			break;
		}
	}
	pg.re.image.lastIndex=0;
	if (!matched) { return null; }
	return pg.ns.image+':'+upcaseFirst(matched);
}

function removeMatchesUnless(str, re1, parencount, re2) {
    var split=str.parenSplit(re1);
    var c=parencount + 1;
    for (var i=0; i<split.length; ++i) {
	if ( i%c === 0 || re2.test(split[i]) ) { continue; }
	split[i]='';
    }
    return split.join('');
}

//</NOLITE>
// ENDFILE: images.js
// STARTFILE: namespaces.js
// Set up namespaces and other non-strings.js localization
// (currently that means redirs too)

// Put the right namespace list into pg.ns.list, based on pg.wiki.lang
// Default to english if nothing seems to fit
function setNamespaceList() {
	var m="Media";
	var list = [m, "Special", "Talk", "User", "User talk", "Wikipedia", "Wikipedia talk", "File", "File talk", "MediaWiki", "MediaWiki talk", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk", "Portal", "Portal talk"];
	var nsIndex = { '': 0, 'Special': 1,
			'Talk': 2, 'User': 3, 'User talk': 4, 'Wikipedia': 5,
			'Wikipedia talk': 6, 'Image': 7, 'File': 7, 'Image talk': 8, 'File talk' : 8, 'MediaWiki': 9,
			'MediaWiki talk': 10, 'Template': 11, 'Template talk': 12,
			'Help': 13, 'Help talk': 14, 'Category': 15, 'Category talk':16,
			'Portal': 17, 'Portal talk': 18};
	var nsLists = {
//<NOLITE>
		"af": [m, "Spesiaal", "Bespreking", "Gebruiker", "Gebruikerbespreking", "Wikipedia", "Wikipediabespreking", "Beeld", "Beeldbespreking", "MediaWiki", "MediaWikibespreking", "Sjabloon", "Sjabloonbespreking", "Hulp", "Hulpbespreking", "Kategorie", "Kategoriebespreking"],
		"als": [m, "Spezial", "Diskussion", "Benutzer", "Benutzer Diskussion", "Wikipedia", "Wikipedia Diskussion", "Bild", "Bild Diskussion", "MediaWiki", "MediaWiki Diskussion", "Vorlage", "Vorlage Diskussion", "Hilfe", "Hilfe Diskussion", "Kategorie", "Kategorie Diskussion"],
		"ar": ["ملف", "خاص", "نقاش", "مستخدم", "نقاش المستخدم", "ويكيبيديا", "نقاش ويكيبيديا", "صورة", "نقاش الصورة", "ميدياويكي", "نقاش ميدياويكي", "Template", "نقاش Template", "مساعدة", "نقاش المساعدة", "تصنيف", "نقاش التصنيف"],
		"ast": [m, "Especial", "Discusión", "Usuariu", "Usuariu discusión", "Uiquipedia", "Uiquipedia discusión", "Imaxen", "Imaxen discusión", "MediaWiki", "MediaWiki discusión", "Plantilla", "Plantilla discusión", "Ayuda", "Ayuda discusión", "Categoría", "Categoría discusión"],
		"be": ["Мэдыя", "Спэцыяльныя", "Абмеркаваньне", "Удзельнік", "Гутаркі ўдзельніка", "Вікіпэдыя", "Абмеркаваньне Вікіпэдыя", "Выява", "Абмеркаваньне выявы", "MediaWiki", "Абмеркаваньне MediaWiki", "Шаблён", "Абмеркаваньне шаблёну", "Дапамога", "Абмеркаваньне дапамогі", "Катэгорыя", "Абмеркаваньне катэгорыі"],
		"bg": ["Медия", "Специални", "Беседа", "Потребител", "Потребител беседа", "Уикипедия", "Уикипедия беседа", "Картинка", "Картинка беседа", "МедияУики", "МедияУики беседа", "Шаблон", "Шаблон беседа", "Помощ", "Помощ беседа", "Категория", "Категория беседа"],
		"bm": [m, "Special", "Discuter", "Utilisateur", "Discussion Utilisateur", "Wikipedia", "Discussion Wikipedia", "Image", "Discussion Image", "MediaWiki", "Discussion MediaWiki", "Modèle", "Discussion Modèle", "Aide", "Discussion Aide", "Catégorie", "Discussion Catégorie"],
		"bn": ["বিশেষ", "আলাপ", "ব্যবহারকারী", "ব্যবহারকারী আলাপ", "উইকিপেডিয়া", "উইকিপেডিয়া আলাপ", "চিত্র", "চিত্র আলাপ", "MediaWik i আলাপ", m, "MediaWiki", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"br": [m, "Dibar", "Kaozeal", "Implijer", "Kaozeadenn Implijer", "Wikipedia", "Kaozeadenn Wikipedia", "Skeudenn", "Kaozeadenn Skeudenn", "MediaWiki", "Kaozeadenn MediaWiki", "Patrom", "Kaozeadenn Patrom", "Skoazell", "Kaozeadenn Skoazell", "Rummad", "Kaozeadenn Rummad"],
		"ca": [m, "Especial", "Discussió", "Usuari", "Usuari Discussió", "Viquipèdia", "Viquipèdia Discussió", "Imatge", "Imatge Discussió", "MediaWiki", "MediaWiki Discussió", "Template", "Template Discussió", "Ajuda", "Ajuda Discussió", "Categoria", "Categoria Discussió"],
		"cs": ["Média", "Speciální", "Diskuse", "Wikipedista", "Wikipedista diskuse", "Wikipedie", "Wikipedie diskuse", "Soubor", "Soubor diskuse", "MediaWiki", "MediaWiki diskuse", "Šablona", "Šablona diskuse", "Nápověda", "Nápověda diskuse", "Kategorie", "Kategorie diskuse"],
		"csb": [m, "Specjalnô", "Diskùsëjô", "Brëkòwnik", "Diskùsëjô brëkòwnika", "Wiki", "Diskùsëjô Wiki", "Òbrôzk", "Diskùsëjô òbrôzków", "MediaWiki", "Diskùsëjô MediaWiki", "Szablóna", "Diskùsëjô Szablónë", "Pòmòc", "Diskùsëjô Pòmòcë", "Kategòrëjô", "Diskùsëjô Kategòrëji"],
		"cv": ["Медиа", "Ятарлă", "Сӳтсе явасси", "Хутшăнакан", "Хутшăнаканăн канашлу страници", "Wikipedia", "0", "Ӳкерчĕк", "Ӳкерчĕке сӳтсе явмалли", "MediaWiki", "MediaWiki сӳтсе явмалли", "Шаблон", "Шаблона сӳтсе явмалли", "Пулăшу", "Пулăшăва сӳтсе явмалли", "Категори", "Категорине сӳтсе явмалли"],
		"cy": [m, "Arbennig", "Sgwrs", "Defnyddiwr", "Sgwrs Defnyddiwr", "Wicipedia", "Sgwrs Wicipedia", "Delwedd", "Sgwrs Delwedd", "MediaWiki", "Sgwrs MediaWiki", "Nodyn", "Sgwrs Nodyn", "Help", "Help talk", "Category", "Category talk"],
		"da": [m, "Speciel", "Diskussion", "Bruger", "Brugerdiskussion", "Wikipedia", "Wikipedia-diskussion", "Billede", "Billeddiskussion", "MediaWiki", "MediaWiki-diskussion", "Skabelon", "Skabelondiskussion", "Hjælp", "Hjælpdiskussion", "Kategori", "Kategoridiskussion", "Portal", "Portaldiskussion"],
		"de": [m, "Spezial", "Diskussion", "Benutzer", "Benutzer Diskussion", "Wikipedia", "Wikipedia Diskussion", "Bild", "Bild Diskussion", "MediaWiki", "MediaWiki Diskussion", "Vorlage", "Vorlage Diskussion", "Hilfe", "Hilfe Diskussion", "Kategorie", "Kategorie Diskussion", "Portal", "Portal Diskussion"],
		"el": ["Μέσον", "Ειδικό", "Συζήτηση", "Χρήστης", "Συζήτηση χρήστη", "Βικιπαίδεια", "Βικιπαίδεια συζήτηση", "Εικόνα", "Συζήτηση εικόνας", "MediaWiki", "MediaWiki talk", "Πρότυπο", "Συζήτηση προτύπου", "Βοήθεια", "Συζήτηση βοήθειας", "Κατηγορία", "Συζήτηση κατηγορίας"],
		"eo": [m, "Speciala", "Diskuto", "Vikipediisto", "Vikipediista diskuto", "Vikipedio", "Vikipedio diskuto", "Dosiero", "Dosiera diskuto", "MediaWiki", "MediaWiki diskuto", "Ŝablono", "Ŝablona diskuto", "Helpo", "Helpa diskuto", "Kategorio", "Kategoria diskuto"],
		"es": [m, "Especial", "Discusión", "Usuario", "Usuario Discusión", "Wikipedia", "Wikipedia Discusión", "Imagen", "Imagen Discusión", "MediaWiki", "MediaWiki Discusión", "Plantilla", "Plantilla Discusión", "Ayuda", "Ayuda Discusión", "Categoría", "Categoría Discusión"],
		"et": ["Meedia", "Eri", "Arutelu", "Kasutaja", "Kasutaja arutelu", "Vikipeedia", "Vikipeedia arutelu", "Pilt", "Pildi arutelu", "MediaWiki", "MediaWiki arutelu", "Mall", "Malli arutelu", "Juhend", "Juhendi arutelu", "Kategooria", "Kategooria arutelu"],
		"eu": [m, "Aparteko", "Eztabaida", "Lankide", "Lankide eztabaida", "Wikipedia", "Wikipedia eztabaida", "Irudi", "Irudi eztabaida", "MediaWiki", "MediaWiki eztabaida", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"fa": ["مدیا", "ویژه", "بحث", "کاربر", "بحث کاربر", "ویکی‌پدیا", "بحث ویکی‌پدیا", "تصویر", "بحث تصویر", "مدیاویکی", "بحث مدیاویکی", "الگو", "بحث الگو", "راهنما", "بحث راهنما", "رده", "بحث رده"],
		"fi": [m, "Toiminnot", "Keskustelu", "Käyttäjä", "Keskustelu käyttäjästä", "Wikipedia", "Keskustelu Wikipediasta", "Kuva", "Keskustelu kuvasta", "MediaWiki", "MediaWiki talk", "Malline", "Keskustelu mallineesta", "Ohje", "Keskustelu ohjeesta", "Luokka", "Keskustelu luokasta"],
		"fo": ["Miðil", "Serstakur", "Kjak", "Brúkari", "Brúkari kjak", "Wikipedia", "Wikipedia kjak", "Mynd", "Mynd kjak", "MidiaWiki", "MidiaWiki kjak", "Fyrimynd", "Fyrimynd kjak", "Hjálp", "Hjálp kjak", "Bólkur", "Bólkur kjak"],
		"fr": [m, "Spécial", "Discuter", "Utilisateur", "Discussion Utilisateur", "Wikipédia", "Discussion Wikipédia", "Image", "Discussion Image", "MediaWiki", "Discussion MediaWiki", "Modèle", "Discussion Modèle", "Aide", "Discussion Aide", "Catégorie", "Discussion Catégorie", "Portail", "Discussion Portail"],
		"fur": [m, "Speciâl", "Discussion", "Utent", "Discussion utent", "Vichipedie", "Discussion Vichipedie", "Figure", "Discussion figure", "MediaWiki", "Discussion MediaWiki", "Model", "Discussion model", "Jutori", "Discussion jutori", "Categorie", "Discussion categorie"],
		"fy": [m, "Wiki", "Oerlis", "Meidogger", "Meidogger oerlis", "Wikipedy", "Wikipedy oerlis", "Ofbyld", "Ofbyld oerlis", "MediaWiki", "MediaWiki oerlis", "Berjocht", "Berjocht oerlis", "Hulp", "Hulp oerlis", "Kategory", "Kategory oerlis"],
		"ga": ["Meán", "Speisialta", "Plé", "Úsáideoir", "Plé úsáideora", "Vicipéid", "Plé Vicipéide", "Íomhá", "Plé íomhá", "MediaWiki", "Plé MediaWiki", "Teimpléad", "Plé teimpléid", "Cabhair", "Plé cabhrach", "Catagóir", "Plé catagóire"],
		"gu": [m, "Special", "Talk", "User", "User talk", "વિકિપીડિયા", "વિકિપીડિયા talk", "Image", "Image talk", "MediaWiki", "MediaWiki talk", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"he": [m, "מיוחד", "שיחה", "משתמש", "שיחת משתמש", "ויקיפדיה", "שיחת ויקיפדיה", "תמונה", "שיחת תמונה", "MediaWiki", "שיחת MediaWiki", "תבנית", "שיחת תבנית", "עזרה", "שיחת עזרה", "קטגוריה", "שיחת קטגוריה"],
		"hi": [m, "विशेष", "वार्ता", "सदस्य", "सदस्य वार्ता", "विकिपीडिया", "विकिपीडिया वार्ता", "चित्र", "चित्र वार्ता", "MediaWiki", "MediaWiki talk", "Template", "Template talk", "श्रेणी", "श्रेणी वार्ता", "Help", "Help talk"],
		"hr": ["Mediji", "Posebno", "Razgovor", "Suradnik", "Razgovor sa suradnikom", "Wikipedia", "Razgovor Wikipedia", "Slika", "Razgovor o slici", "MediaWiki", "MediaWiki razgovor", "Predložak", "Razgovor o predlošku", "Pomoć", "Razgovor o pomoći", "Kategorija", "Razgovor o kategoriji"],
		"hu": [ "Média", "Speciális", "Vita", "Szerkesztő", "Szerkesztővita", "Wikipédia", "Wikipédia-vita", "Kép", "Képvita", "MediaWiki", "MediaWiki-vita", "Sablon", "Sablonvita", "Segítség", "Segítségvita", "Kategória", "Kategóriavita", "Portál", "Portálvita"],
		"ia": [m, "Special", "Discussion", "Usator", "Discussion Usator", "Wikipedia", "Discussion Wikipedia", "Imagine", "Discussion Imagine", "MediaWiki", "Discussion MediaWiki", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"id": [m, "Istimewa", "Bicara", "Pengguna", "Bicara Pengguna", "Wikipedia", "Pembicaraan Wikipedia", "Gambar", "Pembicaraan Gambar", "MediaWiki", "Pembicaraan MediaWiki", "Templat", "Pembicaraan Templat", "Bantuan", "Pembicaraan Bantuan", "Kategori", "Pembicaraan Kategori"],
		"is": ["Miðill", "Kerfissíða", "Spjall", "Notandi", "Notandaspjall", "Wikipedia", "Wikipediaspjall", "Mynd", "Myndaspjall", "Melding", "Meldingarspjall", "Snið", "Sniðaspjall", "Hjálp", "Hjálparspjall", "Flokkur", "Flokkaspjall"],
		"it": [m, "Speciale", "Discussione", "Utente", "Discussioni utente", "Wikipedia", "Discussioni Wikipedia", "File", "Discussioni file", "MediaWiki", "Discussioni MediaWiki", "Template", "Discussioni template", "Aiuto", "Discussioni aiuto", "Categoria", "Discussioni categoria", "Portale", "Discussioni portale", "Progetto", "Discussioni progetto"],
		"ja": [m, "特別", "ノート", "利用者", "利用者‐会話", "Wikipedia", "Wikipedia‐ノート", "画像", "画像‐ノート", "MediaWiki", "MediaWiki‐ノート", "Template", "Template‐ノート", "Help", "Help‐ノート", "Category", "Category‐ノート"],
		"ka": ["მედია", "სპეციალური", "განხილვა", "მომხმარებელი", "მომხმარებელი განხილვა", "ვიკიპედია", "ვიკიპედია განხილვა", "სურათი", "სურათი განხილვა", "მედიავიკი", "მედიავიკი განხილვა", "თარგი", "თარგი განხილვა", "დახმარება", "დახმარება განხილვა", "კატეგორია", "კატეგორია განხილვა"],
		"ko": [m, "특수기능", "토론", "사용자", "사용자토론", "위키백과", "위키백과토론", "그림", "그림토론", "분류", "분류토론", "MediaWiki", "MediaWiki talk", "Template", "Template talk", "Help", "Help talk"],
		"ku": ["Medya", "Taybet", "Nîqaş", "Bikarhêner", "Bikarhêner nîqaş", "Wîkîpediya", "Wîkîpediya nîqaş", "Wêne", "Wêne nîqaş", "MediaWiki", "MediaWiki nîqaş", "Şablon", "Şablon nîqaş", "Alîkarî", "Alîkarî nîqaş", "Kategorî", "Kategorî nîqaş"],
		"la": ["Specialis", "Disputatio", "Usor", "Disputatio Usoris", "Vicipaedia", "Disputatio Vicipaediae", "Imago", "Disputatio Imaginis", "MediaWiki", "Disputatio MediaWiki", "Formula", "Disputatio Formulae", "Auxilium", "Disputatio Auxilii", "Categoria", "Disputatio Categoriae", m],
		"li": [m, "Speciaal", "Euverlik", "Gebroeker", "Euverlik gebroeker", "Wikipedia", "Euverlik Wikipedia", "Aafbeilding", "Euverlik afbeelding", "MediaWiki", "Euverlik MediaWiki", "Sjabloon", "Euverlik sjabloon", "Help", "Euverlik help", "Kategorie", "Euverlik kategorie"],
		"lt": ["Medija", "Specialus", "Aptarimas", "Naudotojas", "Naudotojo aptarimas", "Wikipedia", "Wikipedia aptarimas", "Vaizdas", "Vaizdo aptarimas", "MediaWiki", "MediaWiki aptarimas", "Šablonas", "Šablono aptarimas", "Pagalba", "Pagalbos aptarimas", "Kategorija", "Kategorijos aptarimas"],
		"mk": ["Медија", "Специјални", "Разговор", "Корисник", "Корисник разговор", "Wikipedia", "Wikipedia разговор", "Слика", "Слика разговор", "МедијаВики", "МедијаВики разговор", "Шаблон", "Шаблон разговор", "Помош", "Помош разговор", "Категорија", "Категорија разговор"],
		"ms": [m, "Istimewa", "Perbualan", "Pengguna", "Perbualan Pengguna", "Wikipedia", "Perbualan Wikipedia", "Imej", "Imej Perbualan", "MediaWiki", "MediaWiki Perbualan", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"mt": [m, "Special", "Talk", "User", "User talk", "Wikipedija", "Wikipedija talk", "Image", "Image talk", "MediaWiki", "MediaWiki talk", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"nap": [m, "Speciale", "Discussione", "Utente", "Discussioni utente", "Wikipedia", "Discussioni Wikipedia", "Immagine", "Discussioni immagine", "MediaWiki", "Discussioni MediaWiki", "Template", "Discussioni template", "Aiuto", "Discussioni aiuto", "Categoria", "Discussioni categoria"],
		"nds": [m, "Spezial", "Diskuschoon", "Bruker", "Bruker Diskuschoon", "Wikipedia", "Wikipedia Diskuschoon", "Bild", "Bild Diskuschoon", "MediaWiki", "MediaWiki Diskuschoon", "Vörlaag", "Vörlaag Diskuschoon", "Hülp", "Hülp Diskuschoon", "Kategorie", "Kategorie Diskuschoon"],
		"nl": [m, "Speciaal", "Overleg", "Gebruiker", "Overleg gebruiker", "Wikipedia", "Overleg Wikipedia", "Afbeelding", "Overleg afbeelding", "MediaWiki", "Overleg MediaWiki", "Sjabloon", "Overleg sjabloon", "Help", "Overleg help", "Categorie", "Overleg categorie"],
		"nn": ["Filpeikar", "Spesial", "Diskusjon", "Brukar", "Brukardiskusjon", "Wikipedia", "Wikipedia-diskusjon", "Fil", "Fildiskusjon", "MediaWiki", "MediaWiki-diskusjon", "Mal", "Maldiskusjon", "Hjelp", "Hjelpdiskusjon", "Kategori", "Kategoridiskusjon"],
		"no": ["Medium", "Spesial", "Diskusjon", "Bruker", "Brukerdiskusjon", "Wikipedia", "Wikipedia-diskusjon", "Bilde", "Bildediskusjon", "MediaWiki", "MediaWiki-diskusjon", "Mal", "Maldiskusjon", "Hjelp", "Hjelpdiskusjon", "Kategori", "Kategoridiskusjon"],
		"nv": [m, "Special", "Naaltsoos baa yinísht'į́", "Choinish'įįhí", "Choinish'įįhí baa yinísht'į́", "Wikiibíídiiya", "Wikiibíídiiya baa yinísht'į́", "E'elyaaígíí", "E'elyaaígíí baa yinísht'į́", "MediaWiki", "MediaWiki baa yinísht'į́", "Template", "Template talk", "Aná'álwo'", "Aná'álwo' baa yinísht'į́", "T'ááłáhági át'éego", "T'ááłáhági át'éego baa yinísht'į́"],
		"oc": ["Especial", "Discutir", "Utilisator", "Discutida Utilisator", "Oiquipedià", "Discutida Oiquipedià", "Image", "Discutida Image", "MediaWiki", "MediaWiki talk", "Template", "Template talk", m, "Help", "Help talk", "Category", "Category talk"],
		"os": [m, "Сæрмагонд", "Дискусси", "Архайæг", "Архайæджы дискусси", "Wikipedia", "0", "Ныв", "Нывы тыххæй дискусси", "MediaWiki", "Дискусси MediaWiki", "Шаблон", "Шаблоны тыххæй дискусси", "Æххуыс", "Æххуысы тыххæй дискусси", "Категори", "Категорийы тыххæй дискусси"],
		"pa": ["ਮੀਡੀਆ", "ਖਾਸ", "ਚਰਚਾ", "ਮੈਂਬਰ", "ਮੈਂਬਰ ਚਰਚਾ", "Wikipedia", "Wikipedia ਚਰਚਾ", "ਤਸਵੀਰ", "ਤਸਵੀਰ ਚਰਚਾ", "ਮੀਡੀਆਵਿਕਿ", "ਮੀਡੀਆਵਿਕਿ ਚਰਚਾ", "ਨਮੂਨਾ", "ਨਮੂਨਾ ਚਰਚਾ", "ਮਦਦ", "ਮਦਦ ਚਰਚਾ", "ਸ਼੍ਰੇਣੀ", "ਸ਼੍ਰੇਣੀ ਚਰਚਾ"],
		"pl": [m, "Specjalna", "Dyskusja", "Wikipedysta", "Dyskusja Wikipedysty", "Wikipedia", "Dyskusja Wikipedii", "Grafika", "Dyskusja grafiki", "MediaWiki", "Dyskusja MediaWiki", "Szablon", "Dyskusja szablonu", "Pomoc", "Dyskusja pomocy", "Kategoria", "Dyskusja kategorii", "Portal", "Dyskusja portalu"],
		"pt": [m, "Especial", "Discussão", "Usuário", "Usuário Discussão", "Wikipedia", "Wikipedia Discussão", "Imagem", "Imagem Discussão", "MediaWiki", "MediaWiki Discussão", "Predefinição", "Predefinição Discussão", "Ajuda", "Ajuda Discussão", "Categoria", "Categoria Discussão"],
		"ro": [m, "Special", "Discuţie", "Utilizator", "Discuţie Utilizator", "Wikipedia", "Discuţie Wikipedia", "Imagine", "Discuţie Imagine", "MediaWiki", "Discuţie MediaWiki", "Format", "Discuţie Format", "Ajutor", "Discuţie Ajutor", "Categorie", "Discuţie Categorie"],
		"ru": ["Медиа", "Служебная", "Обсуждение", "Участник", "Обсуждение участника", "Википедия", "Обсуждение Википедии", "Изображение", "Обсуждение изображения", "MediaWiki", "Обсуждение MediaWiki", "Шаблон", "Обсуждение шаблона", "Справка", "Обсуждение справки", "Категория", "Обсуждение категории"],
		"sc": ["Speciale", "Contièndha", "Utente", "Utente discussioni", "Wikipedia", "Wikipedia discussioni", "Immàgini", "Immàgini contièndha", m, "MediaWiki", "MediaWiki talk", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"sk": ["Médiá", "Špeciálne", "Diskusia", "Redaktor", "Diskusia s redaktorom", "Wikipédia", "Diskusia k Wikipédii", "Obrázok", "Diskusia k obrázku", "MediaWiki", "Diskusia k MediaWiki", "Šablóna", "Diskusia k šablóne", "Pomoc", "Diskusia k pomoci", "Kategória", "Diskusia ku kategórii"],
		"sl": [m, "Posebno", "Pogovor", "Uporabnik", "Uporabniški pogovor", "Wikipedija", "Pogovor k Wikipediji", "Slika", "Pogovor k sliki", "MediaWiki", "MediaWiki talk", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"sq": [m, "Speciale", "Diskutim", "Përdoruesi", "Përdoruesi diskutim", "Wikipedia", "Wikipedia diskutim", "Figura", "Figura diskutim", "MediaWiki", "MediaWiki diskutim", "Stampa", "Stampa diskutim", "Ndihmë", "Ndihmë diskutim", "Category", "Category talk"],
		"sr": [m, "Посебно", "Разговор", "Корисник", "Разговор са корисником", "Википедија", "Разговор о Википедији", "Слика", "Разговор о слици", "МедијаВики", "Разговор о МедијаВикију", "Шаблон", "Разговор о шаблону", "Помоћ", "Разговор о помоћи", "Категорија", "Разговор о категорији", "Портал", "Разговор о порталу"],
		"sv": [m, "Special", "Diskussion", "Användare", "Användardiskussion", "Wikipedia", "Wikipediadiskussion", "Bild", "Bilddiskussion", "MediaWiki", "MediaWiki diskussion", "Mall", "Malldiskussion", "Hjälp", "Hjälp diskussion", "Kategori", "Kategoridiskussion"],
		"ta": ["ஊடகம்", "சிறப்பு", "பேச்சு", "பயனர்", "பயனர் பேச்சு", "Wikipedia", "Wikipedia பேச்சு", "படிமம்", "படிமப் பேச்சு", "மீடியாவிக்கி", "மீடியாவிக்கி பேச்சு", "வார்ப்புரு", "வார்ப்புரு பேச்சு", "உதவி", "உதவி பேச்சு", "பகுப்பு", "பகுப்பு பேச்சு"],
		"th": [m, "พิเศษ", "พูดคุย", "ผู้ใช้", "คุยเกี่ยวกับผู้ใช้", "Wikipedia", "Wikipedia talk", "ภาพ", "คุยเกี่ยวกับภาพ", "MediaWiki", "คุยเกี่ยวกับ MediaWiki", "Template", "Template talk", "Help", "Help talk", "Category", "Category talk"],
		"tlh": ["Doch", "le'", "ja'chuq", "lo'wI'", "lo'wI' ja'chuq", "wIqIpe'DIya", "wIqIpe'DIya ja'chuq", "nagh beQ", "nagh beQ ja'chuq", "MediaWiki", "MediaWiki ja'chuq", "chen'ay'", "chen'ay' ja'chuq", "QaH", "QaH ja'chuq", "Segh", "Segh ja'chuq"],
		"tr": [m, "Özel", "Tartışma", "Kullanıcı", "Kullanıcı mesaj", "Vikipedi", "Vikipedi tartışma", "Resim", "Resim tartışma", "MedyaViki", "MedyaViki tartışma", "Şablon", "Şablon tartışma", "Yardım", "Yardım tartışma", "Kategori", "Kategori tartışma"],
		"tt": [m, "Maxsus", "Bäxäs", "Äğzä", "Äğzä bäxäse", "Wikipedia", "Wikipedia bäxäse", "Räsem", "Räsem bäxäse", "MediaWiki", "MediaWiki bäxäse", "Ürnäk", "Ürnäk bäxäse", "Yärdäm", "Yärdäm bäxäse", "Törkem", "Törkem bäxäse"],
		"uk": ["Медіа", "Спеціальні", "Обговорення", "Користувач", "Обговорення користувача", "Wikipedia", "Обговорення Wikipedia", "Зображення", "Обговорення зображення", "MediaWiki", "Обговорення MediaWiki", "Шаблон", "Обговорення шаблону", "Довідка", "Обговорення довідки", "Категорія", "Обговорення категорії"],
		"vi": ["Phương tiện", "Đặc biệt", "Thảo luận", "Thành viên", "Thảo luận Thành viên", "Wikipedia", "Thảo luận Wikipedia", "Hình", "Thảo luận Hình", "MediaWiki", "Thảo luận MediaWiki", "Tiêu bản", "Thảo luận Tiêu bản", "Trợ giúp", "Thảo luận Trợ giúp", "Thể loại", "Thảo luận Thể loại"],
		"wa": [m, "Sipeciås", "Copene", "Uzeu", "Uzeu copene", "Wikipedia", "Wikipedia copene", "Imådje", "Imådje copene", "MediaWiki", "MediaWiki copene", "Modele", "Modele copene", "Aidance", "Aidance copene", "Categoreye", "Categoreye copene"]
//</NOLITE>
	};
	pg.ns.list = nsLists[pg.wiki.lang] || list;
	pg.ns.index = nsIndex;
}

function namespaceListToRegex(list) {return RegExp('^('+list.join('|').split(' ').join('[ _]')+'):');};
// function setNamespaceList is ugly as sin, moved to later in the code

function setNamespaces() {
	setNamespaceList();
	pg.ns.withTalkList=[null]; // NB root (article) corresponds with this entry, null
	pg.ns.talkList=[pg.ns.list[2]];

	// if the number of namespaces changes then this will have to be changed
	// maybe the easiest way is to specify the arrays by hand as in the comments following the loop

	for (var i=3; i+1<pg.ns.list.length; i=i+2) {
		pg.ns.withTalkList.push(pg.ns.list[i]);
		pg.ns.talkList.push(pg.ns.list[i+1]);
	}

	// ALERT! SILLY HARDCODED VALUES FOLLOW!
	pg.ns.special   = pg.ns.list[pg.ns.index.Special];
	pg.ns.image     = pg.ns.list[pg.ns.index.File];
	pg.ns.user      = pg.ns.list[pg.ns.index.User];
	pg.ns.usertalk  = pg.ns.list[pg.ns.index['User talk']];
	pg.ns.category  = pg.ns.list[pg.ns.index.Category];
	pg.ns.template  = pg.ns.list[pg.ns.index.Template];
	pg.ns.nonArticleList=pg.ns.list.slice(0,2).concat(pg.ns.list.slice(2));
}


function setRedirs() {
	var r='redirect';
	var R='REDIRECT';
	var redirLists={
//<NOLITE>
		'ar':  [ R, 'تحويل' ],
		'be':  [ r, 'перанакіраваньне' ],
		'bg':  [ r, 'пренасочване', 'виж' ],
		'bs':  [ r, 'Preusmjeri', 'preusmjeri', 'PREUSMJERI' ],
		'cs':  [ R, 'PŘESMĚRUJ' ],
		'cy':  [ r, 'ail-cyfeirio' ],
		'et':  [ r, 'suuna' ],
		'ga':  [ r, 'athsheoladh' ],
		'he':  [ R, 'הפניה' ],
		'hu':  [ R, 'ÁTIRÁNYÍTÁS' ],
		'is':  [ r, 'tilvísun', 'TILVÍSUN' ],
		'mk':  [ r, 'пренасочување', 'види' ],
		'nds': [ r, 'wiederleiden' ],
		'nn':  [ r, 'omdiriger' ],
		'pt':  [ R, 'redir' ],
		'ru':  [ R, 'ПЕРЕНАПРАВЛЕНИЕ', 'ПЕРЕНАПР' ],
		'sk':  [ r, 'presmeruj' ],
		'sr':  [ r, 'Преусмери', 'преусмери', 'ПРЕУСМЕРИ', 'Preusmeri', 'preusmeri', 'PREUSMERI' ],
		'tt':  [ 'yünältü' ],
		'vi':  [ r, 'đổi' ] // no comma
//</NOLITE>
	};
	var redirList=redirLists[ pg.wiki.lang ] || [r, R];
	// Mediawiki is very tolerant about what comes after the #redirect at the start
	pg.re.redirect=RegExp('^\\s*[#](' + redirList.join('|') + ').*?\\[{2}([^\\|\\]]*)(|[^\\]]*)?\\]{2}\\s*(.*)', 'i');
}

function setInterwiki() {
	if (pg.wiki.wikimedia) {
		pg.wiki.interwiki='aa|ab|af|ak|als|am|an|ang|ar|arc|arz|as|ast|av|ay|az|ba|be|ber|bg|bh|bi|bm|bn|bdf|bo|br|bs|ca|ce|ceb|ch|cho|chr|chy|co|commons|cr|cs|csb|cu|cv|cy|da|de|dsb|dv|dz|el|en|eo|es|et|eu|fa|ff|fi|fiu-vro|fj|fo|fr|fur|fy|ga|gd|gil|gl|gn|got|gu|gv|ha|haw|he|hi|ho|hr|hsb|ht|hu|hy|hz|ia|id|ie|ig|ii|ik|ilo|io|is|it|iu|ja|jbo|jv|ka|kg|ki|kj|kk|kl|km|kn|ko|kr|ks|ksh|ku|kv|kw|ky|la|lad|lan|lb|lg|li|ln|lmo|lo|lt|lu|lv|map-bms|mg|mh|mi|mk|ml|mn|mo|mr|ms|mt|stq|mus|my|na|nah|nap|nb|nd|nds|nds-nl|ne|new|ng|nl|nn|no|nr|nv|ny|oc|oj|om|or|os|pa|pam|pi|pl|pms|ps|pt|qu|rm|rn|ro|roa-rup|ru|rw|sa|sc|scn|sco|sd|se|sg|sh|si|simple|sk|sl|sm|smg|sn|so|sq|sr|ss|st|stq|su|sv|sw|szl|ta|te|tg|th|ti|tk|tl|tlh|tn|to|tpi|tr|ts|tt|tum|tw|ty|ug|uk|ur|uz|ve|vi|vk|vo|wa|war|wen|wo|xh|yi|yo|za|zh|zh-min-nan|zh-yue|zu';
		pg.re.interwiki=RegExp('^'+pg.wiki.interwiki+':');
	} else {
		pg.wiki.interwiki=null;
		pg.re.interwiki=RegExp('^$');
	}
}

function nsRe(label) {
	var l=upcaseFirst(label);
	return nsRegexString(pg.ns.list[pg.ns.index[l]], l);
}

function nsReImage() {
	var str = pg.ns.list[pg.ns.index["File"]];
	return '(?:' + str + '|' + encodeURI(str) + '|' + upcaseFirst(str) + '|Image|' + upcaseFirst('Image') + ')';
}

function nsRegexString(str, extra) {
	return '(?:' + str + '|' + encodeURI(str) + (extra ? '|' + extra : '') + ')';
}

function nsRegex(str, extra) {
	return RegExp(nsRegexString(str, extra));
}
// ENDFILE: namespaces.js
// STARTFILE: selpop.js
//<NOLITE>
function getEditboxSelection() {
	// see http://www.webgurusforum.com/8/12/0
	try {
		var editbox=document.editform.wpTextbox1;
	} catch (dang) { return; }
	// IE, Opera
	if (document.selection) { return document.selection.createRange().text; }
	// Mozilla
	var selStart = editbox.selectionStart;
	var selEnd = editbox.selectionEnd;
	return (editbox.value).substring(selStart, selEnd);
}

function doSelectionPopup() {
	// popup if the selection looks like [[foo|anything afterwards at all
	// or [[foo|bar]]text without ']]'
	// or [[foo|bar]]
	var sel=getEditboxSelection();
	var open=sel.indexOf('[[');
	var pipe=sel.indexOf('|');
	var close=sel.indexOf(']]');
	if (open == -1 || ( pipe == -1 && close == -1) ) { return; }
	if (pipe != -1 && open > pipe || close != -1 && open > close) { return; }
	if (getValueOf('popupOnEditSelection')=='boxpreview') {
		return doSeparateSelectionPopup(sel);
	}
	var article=new Title(sel.substring(open+2, (pipe < 0) ? close : pipe)).urlString();
	if (close > 0 && sel.substring(close+2).indexOf('[[') >= 0) { 
		return; 
	}
	var a=document.createElement('a');
	a.href=pg.wiki.titlebase + article;
	mouseOverWikiLink2(a);
	if (a.navpopup) {
		a.navpopup.addHook(function(){runStopPopupTimer(a.navpopup);}, 'unhide', 'after');
	}
}

function doSeparateSelectionPopup(str) {
	var div=document.getElementById('selectionPreview');
	if (!div) {
		div = document.createElement('div');
		div.id='selectionPreview';
		try { var box=document.editform.wpTextbox1; }
		catch (oopsie) { return; }
		box.parentNode.insertBefore(div, box);
	}
	div.innerHTML=wiki2html(str);
	div.ranSetupTooltipsAlready = false;
	popTipsSoonFn('selectionPreview')();
}
//</NOLITE>
// ENDFILE: selpop.js
// STARTFILE: navpopup.js
/**
   @fileoverview  Defines two classes: {@link Navpopup} and {@link Mousetracker}.

   <code>Navpopup</code> describes popups: when they appear, where, what
   they look like and so on.

   <code>Mousetracker</code> "captures" the mouse using
   <code>document.onmousemove</code>.
*/


/**
   Creates a new Mousetracker.
   @constructor
   @class The Mousetracker class. This monitors mouse movements and manages associated hooks.
*/
function Mousetracker() {
	/**
	   Interval to regularly run the hooks anyway, in milliseconds.
	   @type Integer
	*/
	this.loopDelay=400;

	/**
	   Timer for the loop.
	   @type Timer
	*/
	this.timer=null;

	/**
	   Flag - are we switched on?
	   @type Boolean
	*/
	this.active=false;
	/**
	   Flag - are we probably inaccurate, i.e. not reflecting the actual mouse position?
	*/
	this.dirty=true;
	/**
	   Array of hook functions.
	   @private
	   @type Array
	*/
	this.hooks=[];
}

/**
   Adds a hook, to be called when we get events.
   @param {Function} f A function which is called as
   <code>f(x,y)</code>. It should return <code>true</code> when it
   wants to be removed, and <code>false</code> otherwise.
*/
Mousetracker.prototype.addHook = function (f) {
	this.hooks.push(f);
};

/**
   Runs hooks, passing them the x
   and y coords of the mouse.  Hook functions that return true are
   passed to {@link Mousetracker#removeHooks} for removal.
   @private
*/
Mousetracker.prototype.runHooks = function () {
	if (!this.hooks || !this.hooks.length) { return; }
	//log('Mousetracker.runHooks; we got some hooks to run');
	var remove=false;
	var removeObj={};
	// this method gets called a LOT -
	// pre-cache some variables
	var x=this.x, y=this.y, len = this.hooks.length;

	for (var i=0; i<len; ++i) {
		//~ run the hook function, and remove it if it returns true
		if (this.hooks[i](x, y)===true) {
			remove=true;
			removeObj[i]=true;
		}
	}
	if (remove) { this.removeHooks(removeObj); }
};

/**
   Removes hooks.
   @private
   @param {Object} removeObj An object whose keys are the index
   numbers of functions for removal, with values that evaluate to true
*/
Mousetracker.prototype.removeHooks = function(removeObj) {
	var newHooks=[];
	var len = this.hooks.length;
	for (var i=0; i<len; ++i) {
		if (! removeObj[i]) { newHooks.push(this.hooks[i]); }
	}
	this.hooks=newHooks;
};


/**
   Event handler for mouse wiggles.
   We simply grab the event, set x and y and run the hooks.
   This makes the cpu all hot and bothered :-(
   @private
   @param {Event} e Mousemove event
*/
Mousetracker.prototype.track=function (e) {
	//~ Apparently this is needed in IE.
	e = e || window.event;
	var x, y;
	if (e) {
		if (e.pageX) { x=e.pageX; y=e.pageY; }
		else if (typeof e.clientX!='undefined') {
			var left, top, docElt = window.document.documentElement;

			if (docElt) { left=docElt.scrollLeft; }
			left = left || window.document.body.scrollLeft || window.document.scrollLeft || 0;

			if (docElt) { top=docElt.scrollTop; }
			top = top || window.document.body.scrollTop || window.document.scrollTop || 0;

			x=e.clientX + left;
			y=e.clientY + top;
		} else { return; }
		this.setPosition(x,y);
	}
};

/**
   Sets the x and y coordinates stored and takes appropriate action,
   running hooks as appropriate.
   @param {Integer} x, y Screen coordinates to set
*/

Mousetracker.prototype.setPosition=function(x,y) {
	this.x = x;
	this.y = y;
	if (this.dirty || this.hooks.length === 0) { this.dirty=false; return; }
	if (typeof this.lastHook_x != 'number') { this.lastHook_x = -100; this.lastHook_y=-100; }
	var diff = (this.lastHook_x - x)*(this.lastHook_y - y);
	diff = (diff >= 0) ? diff : -diff;
	if ( diff > 1 ) {
		this.lastHook_x=x;
		this.lastHook_y=y;
		if (this.dirty) { this.dirty = false; }
		else { this.runHooks(); }
	}
}

/**
   Sets things in motion, unless they are already that is, registering an event handler on <code>document.onmousemove</code>.
   A half-hearted attempt is made to preserve the old event handler if there is one.
*/
Mousetracker.prototype.enable = function () {
	if (this.active) { return; }
	this.active=true;
	//~ Save the current handler for mousemove events. This isn't too
	//~ robust, of course.
	this.savedHandler=document.onmousemove;
	//~ Gotta save @tt{this} again for the closure, and use apply for
	//~ the member function.
	var savedThis=this;
	document.onmousemove=function (e) {savedThis.track.apply(savedThis, [e]);};
	if (this.loopDelay) { this.timer = setInterval(function() { //log('loop delay in mousetracker is working');
								    savedThis.runHooks();}, this.loopDelay); }
};

/**
   Disables the tracker, removing the event handler.
*/
Mousetracker.prototype.disable = function () {
	if (!this.active) { return; }
	if (typeof this.savedHandler=='function') {
		document.onmousemove=this.savedHandler;
	} else { delete document.onmousemove; }
	if (this.timer) { clearInterval(this.timer); }
	this.active=false;
};

/**
   Creates a new Navpopup.
   Gets a UID for the popup and
   @param init Contructor object. If <code>init.draggable</code> is true or absent, the popup becomes draggable.
   @constructor
   @class The Navpopup class. This generates popup hints, and does some management of them.
*/
function Navpopup(init) {
	//alert('new Navpopup(init)');
	/** UID for each Navpopup instance.
	    Read-only.
	    @type integer
	*/
	this.uid=Navpopup.uid++;
	/**
	   Read-only flag for current visibility of the popup.
	   @type boolean
	   @private
	*/
	this.visible=false;
	/** Flag to be set when we want to cancel a previous request to
	    show the popup in a little while.
	    @private
	    @type boolean
	*/
	this.noshow=false;
	/** Categorised list of hooks.
	    @see #runHooks
	    @see #addHook
	    @private
	    @type Object
	*/
	this.hooks={
		'create': [],
		'unhide': [],
		'hide': []
	};
	/** list of unique IDs of hook functions, to avoid duplicates
	    @private
	*/
	this.hookIds={};
	/** List of downloads associated with the popup.
	    @private
	    @type Array
	*/
	this.downloads=[];
	/** Number of uncompleted downloads.
	    @type integer
	*/
	this.pending=null;
	/** Tolerance in pixels when detecting whether the mouse has left the popup.
	    @type integer
	*/
	this.fuzz=5;
	/** Flag to toggle running {@link #limitHorizontalPosition} to regulate the popup's position.
	    @type boolean
	*/
	this.constrained=true;
	/** The popup width in pixels.
	    @private
	    @type integer
	*/
	this.width=0;
	/** The popup width in pixels.
	    @private
	    @type integer
	*/
	this.height=0;
	/** The main content DIV element.
	    @type HTMLDivElement
	*/
	this.mainDiv=null;
	this.createMainDiv();

//	if (!init || typeof init.draggable=='undefined' || init.draggable) {
//		this.makeDraggable(true);
//	}
}

/**
   A UID for each Navpopup. This constructor property is just a counter.
   @type integer
   @private
*/
Navpopup.uid=0;

/**
   Retrieves the {@link #visible} attribute, indicating whether the popup is currently visible.
   @type boolean
*/
Navpopup.prototype.isVisible=function() {
	return this.visible;
};

/**
   Repositions popup using CSS style.
   @private
   @param {integer} x x-coordinate (px)
   @param {integer} y y-coordinate (px)
   @param {boolean} noLimitHor Don't call {@link #limitHorizontalPosition}
*/
Navpopup.prototype.reposition= function (x,y, noLimitHor) {
	log ('reposition('+x+','+y+','+noLimitHor+')');
	if (typeof x != 'undefined' && x!==null) { this.left=x; }
	if (typeof y != 'undefined' && y!==null) { this.top=y; }
	if (typeof this.left != 'undefined' && typeof this.top != 'undefined') {
		this.mainDiv.style.left=this.left + 'px';
		this.mainDiv.style.top=this.top + 'px';
	}
	if (!noLimitHor) { this.limitHorizontalPosition(); }
	//console.log('navpop'+this.uid+' - (left,top)=(' + this.left + ',' + this.top + '), css=('
	//+ this.mainDiv.style.left + ',' + this.mainDiv.style.top + ')');
};

/**
   Prevents popups from being in silly locations. Hopefully.
   Should not be run if {@link #constrained} is true.
   @private
*/
Navpopup.prototype.limitHorizontalPosition=function() {
	if (!this.constrained || this.tooWide) { return; }
	this.updateDimensions();
	var x=this.left;
	var w=this.width;
	var cWidth=document.body.clientWidth;


//	log('limitHorizontalPosition: x='+x+
//		    ', this.left=' + this.left +
//		    ', this.width=' + this.width +
//		    ', cWidth=' + cWidth);


	if ( (x+w) >= cWidth ||
	     ( x > 0 && this.maxWidth && this.width < this.maxWidth && this.height > this.width
	       && x > cWidth - this.maxWidth ) ) {
		// This is a very nasty hack. There has to be a better way!
		// We find the "natural" width of the div by positioning it at the far left
		// then reset it so that it should be flush right (well, nearly)
		this.mainDiv.style.left='-10000px';
		this.mainDiv.style.width = this.maxWidth + 'px';
		var naturalWidth=parseInt(this.mainDiv.offsetWidth, 10);
		var newLeft=cWidth - naturalWidth - 1;
		if (newLeft < 0) { newLeft = 0; this.tooWide=true; } // still unstable for really wide popups?
		log ('limitHorizontalPosition: moving to ('+newLeft + ','+ this.top+');' + ' naturalWidth=' + naturalWidth + ', clientWidth=' + cWidth);
		this.reposition(newLeft, null, true);
	}
};

/**
   Counter indicating the z-order of the "highest" popup.
   We start the z-index at 1000 so that popups are above everything
   else on the screen.
   @private
   @type integer
*/
Navpopup.highest=1000;

/**
   Brings popup to the top of the z-order.
   We increment the {@link #highest} property of the contructor here.
   @private
*/
Navpopup.prototype.raise = function () {
	this.mainDiv.style.zIndex=Navpopup.highest + 1;
	++Navpopup.highest;
};

/**
   Shows the popup provided {@link #noshow} is not true.
   Updates the position, brings the popup to the top of the z-order and unhides it.
*/
Navpopup.prototype.show = function () {
	//document.title+='s';
	if (this.noshow) { return; }
	//document.title+='t';
	this.reposition();
	this.raise();
	this.unhide();
};


/**
   Runs the {@link #show} method in a little while, unless we're
   already visible.
   @param {integer} time Delay in milliseconds
   @see #showSoonIfStable
*/
Navpopup.prototype.showSoon = function (time) {
	if (this.visible) { return; }
	this.noshow=false;
	//~ We have to save the value of @tt{this} so that the closure below
	//~ works.
	var savedThis=this;
	//this.start_x = Navpopup.tracker.x;
	//this.start_y = Navpopup.tracker.y;
	setTimeout(function () {
		if (Navpopup.tracker.active) {
			savedThis.reposition.apply(savedThis, [Navpopup.tracker.x + 2, Navpopup.tracker.y + 2]);
		}
		//~ Have to use apply to invoke his member function here
		savedThis.show.apply(savedThis, []);
	}, time);
};

/**
   Checks to see if the mouse pointer has
   stabilised (checking every <code>time</code>/2 milliseconds) and runs the
   {@link #show} method if it has. This method makes {@link #showSoon} redundant.
   @param {integer} time The minimum time (ms) before the popup may be shown.
*/
Navpopup.prototype.showSoonIfStable = function (time) {
	log ('showSoonIfStable, time='+time);
	if (this.visible) { return; }
	this.noshow = false;

	//~ initialize these variables so that we never run @tt{show} after
	//~ just half the time
	this.stable_x = -10000; this.stable_y = -10000;

	var stableShow = function() {
		log('stableShow called');
		var new_x = Navpopup.tracker.x, new_y = Navpopup.tracker.y;
		var dx = savedThis.stable_x - new_x, dy = savedThis.stable_y - new_y;
		var fuzz2 = 0; // savedThis.fuzz * savedThis.fuzz;
		//document.title += '[' + [savedThis.stable_x,new_x, savedThis.stable_y,new_y, dx, dy, fuzz2].join(',') + '] ';
		if ( dx * dx <= fuzz2 && dy * dy <= fuzz2 ) {
			log ('mouse is stable');
			clearInterval(savedThis.showSoonStableTimer);
			savedThis.reposition.apply(savedThis, [new_x + 2, new_y + 2]);
			savedThis.show.apply(savedThis, []);
			return;
		}
		savedThis.stable_x = new_x; savedThis.stable_y = new_y;
	};
	var savedThis = this;
	this.showSoonStableTimer = setInterval(stableShow, time/2);
};

/**
   Makes the popup unhidable until we call {@link #unstick}.
*/
Navpopup.prototype.stick=function() {
	this.noshow=false;
	this.sticky=true;
};

/**
   Allows the popup to be hidden.
*/
Navpopup.prototype.unstick=function() {
	this.sticky=false;
};

/**
   Sets the {@link #noshow} flag and hides the popup. This should be called
   when the mouse leaves the link before
   (or after) it's actually been displayed.
*/
Navpopup.prototype.banish = function () {
	log ('banish called');
	// hide and prevent showing with showSoon in the future
	this.noshow=true;
	if (this.showSoonStableTimer) {
		log('clearing showSoonStableTimer');
		clearInterval(this.showSoonStableTimer);
	}
	this.hide();
};

/**
   Runs hooks added with {@link #addHook}.
   @private
   @param {String} key Key name of the {@link #hooks} array - one of 'create', 'unhide', 'hide'
   @param {String} when Controls exactly when the hook is run: either 'before' or 'after'
*/
Navpopup.prototype.runHooks = function (key, when) {
	if (!this.hooks[key]) { return; }
	var keyHooks=this.hooks[key];
	var len=keyHooks.length;
	for (var i=0; i< len; ++i) {
		if (keyHooks[i] && keyHooks[i].when == when) {
			if (keyHooks[i].hook.apply(this, [])) {
				// remove the hook
				if (keyHooks[i].hookId) {
					delete this.hookIds[keyHooks[i].hookId];
				}
				keyHooks[i]=null;
			}
		}
	}
};

/**
   Adds a hook to the popup. Hook functions are run with <code>this</code> set to refer to the Navpopup instance, and no arguments.
   @param {Function} hook The hook function. Functions that return true are deleted.
   @param {String} key Key name of the {@link #hooks} array - one of 'create', 'unhide', 'hide'
   @param {String} when Controls exactly when the hook is run: either 'before' or 'after'
   @param {String} uid A truthy string identifying the hook function; if it matches another hook in this position, it won't be added again.
*/
Navpopup.prototype.addHook = function ( hook, key, when, uid ) {
	when = when || 'after';
	if (!this.hooks[key]) { return; }
	// if uid is specified, don't add duplicates
	var hookId=null;
	if (uid) {
		hookId=[key,when,uid].join('|');
		if (this.hookIds[hookId]) {
			return;
		}
		this.hookIds[hookId]=true;
	}
	this.hooks[key].push( {hook: hook, when: when, hookId: hookId} );
};

/**
   Creates the main DIV element, which contains all the actual popup content.
   Runs hooks with key 'create'.
   @private
*/
Navpopup.prototype.createMainDiv = function () {
	if (this.mainDiv) { return; }
	this.runHooks('create', 'before');
	var mainDiv=document.createElement('div');

	var savedThis=this;
	mainDiv.onclick=function(e) {savedThis.onclickHandler(e);};
	mainDiv.className=(this.className) ? this.className : 'navpopup_maindiv';
	mainDiv.id=mainDiv.className + this.uid;

	mainDiv.style.position='absolute';
	mainDiv.style.display='none';
	mainDiv.className='navpopup';

	// easy access to javascript object through DOM functions
	mainDiv.navpopup=this;

	this.mainDiv=mainDiv;
	document.body.appendChild(mainDiv);
	this.runHooks('create', 'after');
};
/**
   Calls the {@link #raise} method.
   @private
*/
Navpopup.prototype.onclickHandler=function(e) {
	this.raise();
};
/**
   Makes the popup draggable, using a {@link Drag} object.
   @private
*/
Navpopup.prototype.makeDraggable=function(handleName) {
	if (!this.mainDiv) { this.createMainDiv(); }
	var drag=new Drag();
	if (!handleName) {
	    drag.startCondition=function(e) {
		try { if (!e.shiftKey) { return false; } } catch (err) { return false; }
		return true;
	    };
	}
	var dragHandle = document.getElementById(handleName) || this.mainDiv;
	var np=this;
	drag.endHook=function(x,y) {
		Navpopup.tracker.dirty=true;
		np.reposition(x,y);
	};
	drag.init(dragHandle,this.mainDiv);
};

/** Hides the popup using CSS. Runs hooks with key 'hide'.
    Sets {@link #visible} appropriately.     {@link #banish} should be called externally instead of this method.

    @private
*/
Navpopup.prototype.hide = function () {
	this.runHooks('hide', 'before');
	this.abortDownloads();
	if (this.sticky) { return; }
	if (typeof this.visible != 'undefined' && this.visible) {
		this.mainDiv.style.display='none';
		this.visible=false;
	}
	this.runHooks('hide', 'after');
};

/** Shows the popup using CSS. Runs hooks with key 'unhide'.
    Sets {@link #visible} appropriately.   {@link #show} should be called externally instead of this method.
    @private
*/
Navpopup.prototype.unhide = function () {
	this.runHooks('unhide', 'before');
	if (typeof this.visible != 'undefined' && !this.visible) {
		this.mainDiv.style.display='inline';
		this.visible=true;
	}
	this.runHooks('unhide', 'after');
};

/**
   Sets the <code>innerHTML</code> attribute of the main div containing the popup content.
   @param {String} html The HTML to set.
*/
Navpopup.prototype.setInnerHTML = function (html) {
	this.mainDiv.innerHTML = html;
};

/**
   Updates the {@link #width} and {@link #height} attributes with the CSS properties.
   @private
*/
Navpopup.prototype.updateDimensions = function () {
	this.width=parseInt(this.mainDiv.offsetWidth, 10);
	this.height=parseInt(this.mainDiv.offsetHeight, 10);
};

/**
   Checks if the point (x,y) is within {@link #fuzz} of the
   {@link #mainDiv}.
   @param {integer} x x-coordinate (px)
   @param {integer} y y-coordinate (px)
   @type boolean
*/
Navpopup.prototype.isWithin = function(x,y) {
	//~ If we're not even visible, no point should be considered as
	//~ being within the popup.
	if (!this.visible) { return false; }
	this.updateDimensions();
	var fuzz=this.fuzz || 0;
	//~ Use a simple box metric here.
	return (x+fuzz >= this.left && x-fuzz <= this.left + this.width &&
		y+fuzz >= this.top  && y-fuzz <= this.top  + this.height);
};

/**
   Adds a download to {@link #downloads}.
   @param {Downloader} download
*/
Navpopup.prototype.addDownload=function(download) {
	if (!download) { return; }
	this.downloads.push(download);
};
/**
   Aborts the downloads listed in {@link #downloads}.
   @see Downloader#abort
*/
Navpopup.prototype.abortDownloads=function() {
	for(var i=0; i<this.downloads.length; ++i) {
		var d=this.downloads[i];
		if (d && d.abort) { d.abort(); }
	}
	this.downloads=[];
};


/**
   A {@link Mousetracker} instance which is a property of the constructor (pseudo-global).
*/
Navpopup.tracker=new Mousetracker();
// ENDFILE: navpopup.js
// STARTFILE: diff.js
//<NOLITE>
/*
 * Javascript Diff Algorithm
 *  By John Resig (http://ejohn.org/) and [[:en:User:Lupin]]
 *
 * More Info:
 *  http://ejohn.org/projects/javascript-diff-algorithm/
 */

function delFmt(x) {
	if (!x.length) { return ''; }
	return "<del class='popupDiff'>" + x.join('') +"</del>";
}
function insFmt(x) {
	if (!x.length) { return ''; }
	return "<ins class='popupDiff'>" + x.join('') +"</ins>";
}

function countCrossings(a, b, i, eject) {
	// count the crossings on the edge starting at b[i]
	if (!b[i].row && b[i].row !== 0) { return -1; }
	var count=0;
	for (var j=0; j<a.length; ++j) {
		if (!a[j].row && a[j].row !== 0) { continue; }
		if ( (j-b[i].row)*(i-a[j].row) > 0) {
			if(eject) { return true; }
			count++;
		}
	}
	return count;
}

function shortenDiffString(str, context) {
	var re=RegExp('(<del[\\s\\S]*?</del>|<ins[\\s\\S]*?</ins>)');
	var splitted=str.parenSplit(re);
	var ret=[''];
	for (var i=0; i<splitted.length; i+=2) {
		if (splitted[i].length < 2*context) {
			ret[ret.length-1] += splitted[i];
			if (i+1<splitted.length) { ret[ret.length-1] += splitted[i+1]; }
			continue;
		}
		else {
			if (i > 0) { ret[ret.length-1] += splitted[i].substring(0,context); }
			if (i+1 < splitted.length) {
			    ret.push(splitted[i].substring(splitted[i].length-context) +
				     splitted[i+1]);
			}
		}
	}
	while (ret.length > 0 && !ret[0]) { ret = ret.slice(1); }
	return ret;
}


function diffString( o, n, simpleSplit ) {
	var splitRe=RegExp('([[]{2}|[\]]{2}|[{]{2,3}|[}]{2,3}|[|]|=|[*:]+|\\s|\\b)');

	o=o.entify(); n=n.entify();
	var out, i;
	if (simpleSplit) { out = diff( o.split(/\b/), n.split(/\b/) ); }
	else { out = diff( o.parenSplit(splitRe), n.parenSplit(splitRe) ); }
	var str = "";
	var acc=[]; // accumulator for prettier output

	// crossing pairings -- eg 'A B' vs 'B A' -- cause problems, so let's iron them out
	// this doesn't always do things optimally but it should be fast enough
	var maxOutputPair=0;
	for (i=0; i<out.n.length; ++i) {
	    if ( out.n[i].paired ) {
		if( maxOutputPair > out.n[i].row ) {
		    // tangle - delete pairing
		    out.o[ out.n[i].row ]=out.o[ out.n[i].row ].text;
		    out.n[i]=out.n[i].text;
		}
		if (maxOutputPair < out.n[i].row) { maxOutputPair = out.n[i].row; }
	    }
	}

	// output the stuff preceding the first paired old line
	for (i=0; i<out.o.length && !out.o[i].paired; ++i) { acc.push( out.o[i] ); }
	str += delFmt(acc); acc=[];

	// main loop
	for ( i = 0; i < out.n.length; ++i ) {
		// output unpaired new "lines"
		while ( i < out.n.length && !out.n[i].paired ) { acc.push( out.n[i++] ); }
		str += insFmt(acc); acc=[];
		if ( i < out.n.length ) { // this new "line" is paired with the (out.n[i].row)th old "line"
			str += out.n[i].text;
			// output unpaired old rows starting after this new line's partner
			var m = out.n[i].row + 1;
			while ( m < out.o.length && !out.o[m].paired ) { acc.push ( out.o[m++] ); }
			str += delFmt(acc); acc=[];
		}
	}
	return str;
}

// see http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Global_Objects:Object
// FIXME: use obj.hasOwnProperty instead of this kludge!
window.jsReservedProperties=RegExp('^(constructor|prototype|__((define|lookup)[GS]etter)__' +
				   '|eval|hasOwnProperty|propertyIsEnumerable' +
				   '|to(Source|String|LocaleString)|(un)?watch|valueOf)$');
function diffBugAlert(word) {
	if (!diffBugAlert.list[word]) {
		diffBugAlert.list[word]=1;
		alert('Bad word: '+word+'\n\nPlease report this bug.');
	}
}
diffBugAlert.list={};

function makeDiffHashtable(src) {
	var ret={};
	for ( var i = 0; i < src.length; i++ ) {
		if ( jsReservedProperties.test(src[i]) ) { src[i] += '<!-- -->'; }
		if ( !ret[ src[i] ] ) {	ret[ src[i] ] = []; }
		try { ret[ src[i] ].push( i ); } catch (err) { diffBugAlert(src[i]); }
	}
	return ret;
}

function diff( o, n ) {

	// pass 1: make hashtable ns with new rows as keys
	var ns = makeDiffHashtable(n);

	// pass 2: make hashtable os with old rows as keys
	var os = makeDiffHashtable(o);

	// pass 3: pair unique new rows and matching unique old rows
	var i;
	for ( i in ns ) {
		if ( ns[i].length == 1 && os[i] && os[i].length == 1 ) {
			n[ ns[i][0] ] = { text: n[ ns[i][0] ], row: os[i][0], paired: true };
			o[ os[i][0] ] = { text: o[ os[i][0] ], row: ns[i][0], paired: true };
		}
	}

	// pass 4: pair matching rows immediately following paired rows (not necessarily unique)
	for ( i = 0; i < n.length - 1; i++ ) {
		if ( n[i].paired && ! n[i+1].paired && n[i].row + 1 < o.length && ! o[ n[i].row + 1 ].paired &&
		     n[i+1] == o[ n[i].row + 1 ] ) {
			n[i+1] = { text: n[i+1], row: n[i].row + 1, paired: true };
			o[n[i].row+1] = { text: o[n[i].row+1], row: i + 1, paired: true };
		}
	}

	// pass 5: pair matching rows immediately preceding paired rows (not necessarily unique)
	for ( i = n.length - 1; i > 0; i-- ) {
		if ( n[i].paired && ! n[i-1].paired && n[i].row > 0 && ! o[ n[i].row - 1 ].paired &&
		     n[i-1] == o[ n[i].row - 1 ] ) {
			n[i-1] = { text: n[i-1], row: n[i].row - 1, paired: true };
			o[n[i].row-1] = { text: o[n[i].row-1], row: i - 1, paired: true };
		}
	}

	return { o: o, n: n };
}
//</NOLITE>
// ENDFILE: diff.js
// STARTFILE: init.js
function setSiteInfo() {
	if (window.popupLocalDebug) {
		pg.wiki.hostname = 'en.wikipedia.org';
	} else {
		pg.wiki.hostname = location.hostname; // use in preference to location.hostname for flexibility (?)
	}
		pg.wiki.wikimedia=RegExp('(wiki([pm]edia|source|books|news|quote|versity)|wiktionary)[.]org').test(pg.wiki.hostname);
	pg.wiki.wikia=RegExp('[.]wikia[.]com$', 'i').test(pg.wiki.hostname);
	pg.wiki.isLocal=RegExp('^localhost').test(pg.wiki.hostname);
	pg.wiki.commons=( pg.wiki.wikimedia && pg.wiki.hostname != 'commons.wikimedia.org') ? 'commons.wikimedia.org' : null;
	pg.wiki.commonslang = pg.wiki.commons ? pg.wiki.commons.split('.')[0] : null;
	pg.wiki.lang = pg.wiki.hostname.split('.')[0];
	// toolDbName needs pg.wiki.lang and pg.wiki.hostname
	pg.wiki.prePath='';
	if (pg.wiki.hostname == 'secure.wikimedia.org') {
	    var s=document.location.href.split('/');
	    pg.wiki.prePath=s.slice(3,5).join('/');
	    pg.wiki.lang=s[4];
	}
	var port = location.port ? ':' + location.port : '';
	pg.wiki.sitebase = joinPath([pg.wiki.hostname + port, pg.wiki.prePath]);
}

function getArticlePath() {
	if (isFunction(window.siteArticlePath)) {
		return siteArticlePath();
	}
	return 'wiki';
}

function getBotInterfacePath() {
	if (isFunction(window.siteBotInterfacePath)) {
		return siteBotInterfacePath();
	}
	var botInterfacePath = pg.wiki.articlePath.replace(/\/index[.]php$/, '');
	if (pg.wiki.wikimedia) { botInterfacePath = 'w'; } // as in http://some.thing.com/w/index.php?title=foo
	else if (pg.wiki.wikia) { botInterfacePath = ''; }
	return botInterfacePath;
}

function setTitleBase() {
	var protocol = ( window.popupLocalDebug ? 'http:' : location.protocol );
	pg.wiki.articlePath = getArticlePath();  // as in http://some.thing.com/wiki/Article
	pg.wiki.botInterfacePath = getBotInterfacePath();
	// default mediawiki setting is paths like http://some.thing.com/articlePath/index.php?title=foo

	var titletail = joinPath([pg.wiki.botInterfacePath, 'index.php?title=']);
	var titletail2 = joinPath([pg.wiki.botInterfacePath, 'wiki.phtml?title=']);

	// other sites may need to add code here to set titletail depending on how their urls work

	pg.wiki.titlebase   = protocol + '//' + joinPath([pg.wiki.sitebase, titletail]);
	pg.wiki.titlebase2  = protocol + '//' + joinPath([pg.wiki.sitebase, titletail2]);
	pg.wiki.wikibase    = protocol + '//' + joinPath([pg.wiki.sitebase, pg.wiki.botInterfacePath]);
	pg.wiki.articlebase = protocol + '//' + joinPath([pg.wiki.sitebase, pg.wiki.articlePath]);
	pg.wiki.commonsbase = protocol + '//' + joinPath([pg.wiki.commons, pg.wiki.botInterfacePath]);
	pg.re.basenames = RegExp( '^(' +
				  map( literalizeRegex, [ pg.wiki.titlebase, pg.wiki.titlebase2,
							  pg.wiki.articlebase ]).join('|') + ')' );
}


//////////////////////////////////////////////////
// Global regexps

function setMainRegex() {
	var reStart='[^:]*://';
	var preTitles = joinPath([literalizeRegex(pg.wiki.botInterfacePath), '(?:index[.]php|wiki[.]phtml)[?]title=']);
	// slightly ugly hack when pg.wiki.articlePath is empty
	preTitles += '|' + literalizeRegex( ( pg.wiki.articlePath ? pg.wiki.articlePath + '/' : ''));

	var reEnd='/(' + preTitles + ')([^&?#]*)[^#]*(?:#(.+))?';
	pg.re.main = RegExp(reStart + literalizeRegex(pg.wiki.sitebase) + reEnd);
}

function setRegexps() {
	setMainRegex();
	var sp=nsRe('Special');
	pg.re.urlNoPopup=RegExp('((title=|/)' + sp +  '(?:%3A|:)|section=[0-9])') ;
	pg.re.contribs  =RegExp('(title=|/)'  + sp + '(?:%3A|:)Contributions' + '(&target=|/|/' + pg.ns.user+':)(.*)') ;
	pg.re.email     =RegExp('(title=|/)'  + sp + '(?:%3A|:)Emailuser'     + '(&target=|/|/(?:' + pg.ns.user+':)?)(.*)') ;
	pg.re.backlinks =RegExp('(title=|/)'  + sp + '(?:%3A|:)Whatlinkshere' + '(&target=|/)([^&]*)');

//<NOLITE>
	var im=nsReImage();
	// note: tries to get images in infobox templates too, e.g. movie pages, album pages etc
	//                      (^|\[\[)image: *([^|\]]*[^|\] ]) *
	//                      (^|\[\[)image: *([^|\]]*[^|\] ])([^0-9\]]*([0-9]+) *px)?
	//                                                        $4 = 120 as in 120px
	pg.re.image = RegExp('(^|\\[\\[)' + im + ': *([^|\\]]*[^|\\] ])' +
			     '([^0-9\\]]*([0-9]+) *px)?|(?:\\n *[|]?|[|]) *' +
			     '(' + getValueOf('popupImageVarsRegexp') + ')' +
			     ' *= *(?:\\[\\[ *)?(?:' + im + ':)?' +
			     '([^|]*?)(?:\\]\\])? *[|]? *\\n', 'img') ;
	pg.re.imageBracketCount = 6;

	pg.re.category = RegExp('\\[\\[' +nsRe('Category') +
				': *([^|\\]]*[^|\\] ]) *', 'i');
	pg.re.categoryBracketCount = 1;

	pg.re.ipUser=RegExp('('+nsRe('User')+':)?' +
			    '((25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\\.){3}' +
			    '(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])');

	pg.re.stub= RegExp(getValueOf('popupStubRegexp'), 'im');
	pg.re.disambig=RegExp(getValueOf('popupDabRegexp'), 'im');

//</NOLITE>
	// FIXME replace with general parameter parsing function, this is daft
	pg.re.oldid=RegExp('[?&]oldid=([^&]*)');
	pg.re.diff=RegExp('[?&]diff=([^&]*)');
}


//<NOLITE>
//////////////////////////////////////////////////
// Image sources

function setImageSources() {
	pg.wiki.imageSources=[];

	// frequently seen thumbs
	pg.wiki.imageSources.push(
	{wiki: pg.wiki.hostname, thumb: true,  width: 180}, // default
	{wiki: pg.wiki.hostname, thumb: true,  width: 120} // gallery
		);

	// frequently seen thumbs on commons
	if (pg.wiki.commons) {
		pg.wiki.imageSources.push(
		{wiki: pg.wiki.commons, thumb: true,  width: 180},
		{wiki: pg.wiki.commons, thumb: true,  width: 120}
			);
	}

	// unusual thumb sizes and full-size
	pg.wiki.imageSources.push(
	{wiki: pg.wiki.hostname, thumb: true,  width: 200}, // common?
	{wiki: pg.wiki.hostname, thumb: true,  width: 250}, // common?
	{wiki: pg.wiki.hostname, thumb: true,  width: 300},
	{wiki: pg.wiki.hostname, thumb: true,  width: 210},
	{wiki: pg.wiki.hostname, thumb: true,  width: 230},
	{wiki: pg.wiki.hostname, thumb: false, width: 0} // no comma
		);

	// full-size on commons
	if (pg.wiki.commons) {
		pg.wiki.imageSources.push({wiki: pg.wiki.commons, thumb: false, width: 0});
	}
}
//</NOLITE>

//////////////////////////////////////////////////
// miscellany

function setupCache() {
	// page caching
	pg.cache.pages = [];
	pg.cache.images = [];

	// global array for 404'ed image urls
	pg.cache.badImageUrls=[];
}

function setMisc() {
	pg.current.link=null;
	pg.current.links=[];
	pg.current.linksHash={};

	// downloading images are put here
	pg.misc.imageArray=[];

	setupCache();
	// FIXME what is this for?
	pg.misc.gImage=null; // global for image

	// check to see if images are done with this timer
	pg.timer.image=null;

	// These are for checkImages()
	pg.counter.checkImages=0;
	pg.timer.checkImages=null;
	pg.timer.checkPopupPosition=null;
	pg.counter.loop=0;

	// ids change with each popup: popupImage0, popupImage1 etc
	pg.idNumber=0;

	// for myDecodeURI
	pg.misc.decodeExtras = [
		{from: '%2C', to: ',' },
		{from: '_',   to: ' ' },
		{from: '%24', to: '$'},
		{from: '%26',   to: '&' } // no ,
		];

}

function leadingInteger(s){
	var n=s.match(/^(\d*)/)[1];
	if (n) { return +n; }
	return null;
}

function setBrowserHacks() {
	var useOriginal=false;
	// browser-specific hacks
	if (typeof window.opera != 'undefined') {
		//if (leadingInteger(opera.version()) < 9)
		{ useOriginal=true; } // v9 beta still seems to have buggy css
		setDefault('popupNavLinkSeparator', ' &#183; ');
	} else if (navigator.appName=='Konqueror') {
		setDefault('popupNavLinkSeparator', ' &bull; ');
		pg.flag.isKonq=true;
	} else if ( navigator.vendor && navigator.vendor.toLowerCase().indexOf('apple computer')===0) {
		pg.flag.isSafari=true;
		var webkit=+navigator.userAgent.replace(RegExp('^.*AppleWebKit[/](\\d+).*', 'i'), '$1');
		if (webkit < 420) { useOriginal=true; }
	} else if (navigator.appName.indexOf("Microsoft")!=-1) {
		setDefault('popupNavLinkSeparator', ' &#183; ');
		useOriginal=true;
		var ver=+navigator.userAgent.replace(RegExp('^.*MSIE (\\d+).*'), '$1');
		pg.flag.isIE=true;
		pg.flag.IEVersion=ver;
	}
	if (pg.flag.isIE && pg.flag.IEVersion < 7 || pg.flag.isKonq || webkit < 420 ) {
		pg.flag.linksLikeIE6=true;
	}
	if (useOriginal && pg.structures.original) {
		setDefault('popupStructure','original');
	}
}

function setupPopups() {
	// NB translatable strings should be set up first (strings.js)
	// basics
	setupDebugging();
	setSiteInfo();
	setTitleBase();
	setOptions(); // see options.js

	// namespaces etc
	setNamespaces();
	setInterwiki();

	// regexps
	setRegexps();
	setRedirs();

	// other stuff
	window.setImageSources && setImageSources();
	setBrowserHacks();
	setMisc();
	setupLivePreview();

	// main deal here
	setupTooltips();
	Navpopup.tracker.enable();

	setupPopups.completed = true;
}
// ENDFILE: init.js
// STARTFILE: navlinks.js
//<NOLITE>
//////////////////////////////////////////////////
// navlinks... let the fun begin
//

function defaultNavlinkSpec() {
	var str='';
	str += '<b><<mainlink|shortcut= >></b>';
	if (getValueOf('popupLastEditLink')) {
		str += '*<<lastEdit|shortcut=/>>|<<lastContrib>>|<<sinceMe>>if(oldid){|<<oldEdit>>|<<diffCur>>}';
	}

	// user links
	// contribs - log - count - email - block
	// count only if applicable; block only if popupAdminLinks
	str += 'if(user){<br><<contribs|shortcut=c>>*<<userlog|shortcut=L|log>>';
	str+='if(ipuser){*<<arin>>}if(wikimedia){*<<count|shortcut=#>>}';
	str+='if(ipuser){}else{*<<email|shortcut=E>>}if(admin){*<<block|shortcut=b>>|<<blocklog|log>>}}';

	// editing links
	// talkpage   -> edit|new - history - un|watch - article|edit
	// other page -> edit - history - un|watch - talk|edit|new
	var editstr='<<edit|shortcut=e>>';
	var editOldidStr='if(oldid){<<editOld|shortcut=e>>|<<revert|shortcut=v|rv>>|<<edit|cur>>}else{' + editstr + '}'
		var historystr='<<history|shortcut=h>>if(mainspace_en){|<<editors|shortcut=E|>>}';
	var watchstr='<<unwatch|unwatchShort>>|<<watch|shortcut=w|watchThingy>>';

	str+='<br>if(talk){' +
		editOldidStr+'|<<new|shortcut=+>>' + '*' + historystr+'*'+watchstr + '*' +
		'<b><<article|shortcut=a>></b>|<<editArticle|edit>>' +
		'}else{' + // not a talk page
		editOldidStr + '*' + historystr + '*' + watchstr + '*' +
		'<b><<talk|shortcut=t>></b>|<<editTalk|edit>>|<<newTalk|shortcut=+|new>>'
		+ '}';

	// misc links
	str += '<br><<whatLinksHere|shortcut=l>>*<<relatedChanges|shortcut=r>>*<<move|shortcut=m>>';

	// admin links
	str += 'if(admin){<br><<unprotect|unprotectShort>>|<<protect|shortcut=p>>|<<protectlog|log>>*' +
		'<<undelete|undeleteShort>>|<<delete|shortcut=d>>|<<deletelog|log>>}';
	return str;
}

function navLinksHTML (article, hint, params) { //oldid, rcid) {
	var str = '<span class="popupNavLinks">' + defaultNavlinkSpec() + '</span>';
	// BAM
	return navlinkStringToHTML(str, article, params);
}

function expandConditionalNavlinkString(s,article,z,recursionCount) {
	var oldid=z.oldid, rcid=z.rcid, diff=z.diff;
	// nested conditionals (up to 10 deep) are ok, hopefully! (work from the inside out)
	if (typeof recursionCount!=typeof 0) { recursionCount=0; }
	var conditionalSplitRegex=RegExp(
		//(1     if    \\(    (2    2)    \\)      {(3    3)}  (4   else      {(5     5)}  4)1)
		'(;?\\s*if\\s*\\(\\s*([\\w]*)\\s*\\)\\s*\\{([^{}]*)\\}(\\s*else\\s*\\{([^{}]*?)\\}|))', 'i');
	var splitted=s.parenSplit(conditionalSplitRegex);
	// $1: whole conditional
	// $2: test condition
	// $3: true expansion
	// $4: else clause (possibly empty)
	// $5: false expansion (possibly null)
	var numParens=5;
	var ret = splitted[0];
	for (var i=1; i<splitted.length; i=i+numParens+1) {

		var testString=splitted[i+2-1];
		var trueString=splitted[i+3-1];
		var falseString=splitted[i+5-1];
		if (typeof falseString=='undefined' || !falseString) { falseString=''; }
		var testResult=null;

		switch (testString) {
		case 'user':
			testResult=(article.userName())?true:false;
			break;
		case 'talk':
			testResult=(article.talkPage())?false:true; // talkPage converts _articles_ to talkPages
			break;
		case 'admin':
			testResult=getValueOf('popupAdminLinks')?true:false;
			break;
		case 'oldid':
			testResult=(typeof oldid != 'undefined' && oldid)?true:false;
			break;
		case 'rcid':
			testResult=(typeof rcid != 'undefined' && rcid)?true:false;
			break;
		case 'ipuser':
			testResult=(article.isIpUser())?true:false;
			break;
		case 'mainspace_en':
			testResult=isInMainNamespace(article) &&
				pg.wiki.hostname=='en.wikipedia.org';
			break;
		case 'wikimedia':
			testResult=(pg.wiki.wikimedia) ? true : false;
			break;
		case 'diff':
			testResult=(typeof diff != 'undefined' && diff)?true:false;
			break;
		}

		switch(testResult) {
		case null: ret+=splitted[i];  break;
		case true: ret+=trueString;   break;
		case false: ret+=falseString; break;
		}

		// append non-conditional string
		ret += splitted[i+numParens];
	}
	if (conditionalSplitRegex.test(ret) && recursionCount < 10) {
		return expandConditionalNavlinkString(ret,article,z,recursionCount+1);
	}
	return ret;
}

function navlinkStringToArray(s, article, params) {
	s=expandConditionalNavlinkString(s,article,params);
	var splitted=s.parenSplit(RegExp('<<(.*?)>>'));
	var ret=[];
	for (var i=0; i<splitted.length; ++i) {
		if (i%2) { // i odd, so s is a tag
			var t=new navlinkTag();
			var ss=splitted[i].split('|');
			t.id=ss[0];
			for (var j=1; j<ss.length; ++j) {
				var sss=ss[j].split('=');
				if (sss.length>1) {
					t[sss[0]]=sss[1];
				}
				else { // no assignment (no "="), so treat this as a title (overwriting the last one)
					t.text=popupString(sss[0]);
				}
			}
			t.article=article;
			var oldid=params.oldid, rcid=params.rcid, diff=params.diff;
			if (typeof oldid != 'undefined' && oldid != null) { t.oldid=oldid; }
			if (typeof rcid != 'undefined' && rcid != null) { t.rcid=rcid; }
			if (typeof diff != 'undefined' && diff != null) { t.diff=diff; }
			if (!t.text && t.id != 'mainlink') { t.text=popupString(t.id); }
			ret.push(t);
		}
		else { // plain HTML
			ret.push(splitted[i]);
		}
	}
	return ret;
}


function navlinkSubstituteHTML(s) {
	return s.split('*').join(getValueOf('popupNavLinkSeparator'))
		.split('<menurow>').join('<li class="popup_menu_row">')
		.split('</menurow>').join('</li>')
		.split('<menu>').join('<ul class="popup_menu">')
		.split('</menu>').join('</ul>');

}

function navlinkDepth(magic,s) {
	return s.split('<' + magic + '>').length - s.split('</' + magic + '>').length;
}


// navlinkString: * becomes the separator
//                <<foo|bar=baz|fubar>> becomes a foo-link with attribute bar='baz'
//                                      and visible text 'fubar'
//                if(test){...} and if(test){...}else{...} work too (nested ok)

function navlinkStringToHTML(s,article,params) {
	//limitAlert(navlinkStringToHTML, 5, 'navlinkStringToHTML\n' + article + '\n' + (typeof article));
	var p=navlinkStringToArray(s,article,params);
	var html='';
	var menudepth = 0; // nested menus not currently allowed, but doesn't do any harm to code for it
	var menurowdepth = 0;
	var wrapping = null;
	for (var i=0; i<p.length; ++i) {
		if (typeof p[i] == typeof '') {
			html+=navlinkSubstituteHTML(p[i]);
			menudepth += navlinkDepth('menu', p[i]);
			menurowdepth += navlinkDepth('menurow', p[i]);
//			if (menudepth === 0) {
//				tagType='span';
//			} else if (menurowdepth === 0) {
//				tagType='li';
//			} else {
//				tagType = null;
//			}
		} else if (typeof p[i].type != 'undefined' && p[i].type=='navlinkTag') {
			if (menudepth > 0 && menurowdepth === 0) {
				html += '<li class="popup_menu_item">' + p[i].html() + '</li>';
			} else {
				html+=p[i].html();
			}
		}
	}
	return html;
}

function navlinkTag() {
	this.type='navlinkTag';
}

navlinkTag.prototype.html=function () {
	this.getNewWin();
	this.getPrintFunction();
	var html='';
	var opening, closing;
	var tagType='span';
	if (!tagType) {
		opening = ''; closing = '';
	} else {
		opening = '<' + tagType + ' class="popup_' + this.id + '">';
		closing = '</' + tagType + '>';
	}
	if (typeof this.print!='function') {
		errlog ('Oh dear - invalid print function for a navlinkTag, id='+this.id);
	} else {
		html=this.print(this);
		if (typeof html != typeof '') {html='';}
		else if (typeof this.shortcut!='undefined') html=addPopupShortcut(html, this.shortcut);
	}
	return opening + html + closing;
};

navlinkTag.prototype.getNewWin=function() {
	getValueOf('popupLinksNewWindow');
	if (typeof pg.option.popupLinksNewWindow[this.id] === 'undefined') { this.newWin=null; }
	this.newWin=pg.option.popupLinksNewWindow[this.id];
}

navlinkTag.prototype.getPrintFunction=function() { //think about this some more
	// this.id and this.article should already be defined
	if (typeof this.id!=typeof '' || typeof this.article!=typeof {} ) { return; }
	var html='';
	var a,t;

	this.noPopup=1;
	switch (this.id) {
	case 'contribs': case 'history': case 'whatLinksHere':
	case 'userPage': case 'monobook': case 'userTalk':
	case 'talk': case 'article': case 'lastEdit':
		this.noPopup=null;
	}
	switch (this.id) {
	case 'email':     case 'contribs':  case 'block':     case 'unblock':
	case 'userlog':   case 'userSpace': case 'deletedContribs':
		this.article=this.article.userName();
	}

	switch (this.id) {
	case 'userTalk': case 'newUserTalk': case 'editUserTalk':
	case 'userPage': case 'monobook': case 'editMonobook': case 'blocklog':
		this.article=this.article.userName(true);
	// fall through; no break
	case 'pagelog': case 'deletelog': case 'protectlog':
	delete this.oldid;
	}

	if (this.id=='editMonobook' || this.id=='monobook') { this.article.append('/monobook.js'); }

	if (this.id != 'mainlink') {
		// FIXME anchor handling should be done differently with Title object
		this.article=this.article.removeAnchor();
		// if (typeof this.text=='undefined') this.text=popupString(this.id);
	}

	switch (this.id) {
	case 'undelete':       this.print=specialLink; this.specialpage='Undelete'; this.sep='/'; break;
	case 'whatLinksHere':  this.print=specialLink; this.specialpage='Whatlinkshere'; break;
	case 'relatedChanges': this.print=specialLink; this.specialpage='Recentchangeslinked'; break;
	case 'move':           this.print=specialLink; this.specialpage='Movepage'; break;
	case 'contribs':       this.print=specialLink; this.specialpage='Contributions'; break;
	case 'deletedContribs':this.print=specialLink; this.specialpage='Deletedcontributions'; break;
	case 'email':          this.print=specialLink; this.specialpage='Emailuser'; break;
	case 'block':          this.print=specialLink; this.specialpage='Blockip'; this.sep='&ip='; break;
	case 'unblock':        this.print=specialLink; this.specialpage='Ipblocklist'; this.sep='&action=unblock&ip='; break;
	case 'userlog':        this.print=specialLink; this.specialpage='Log'; this.sep='&user='; break;
	case 'blocklog':       this.print=specialLink; this.specialpage='Log'; this.sep='&type=block&page='; break;
	case 'pagelog':        this.print=specialLink; this.specialpage='Log'; this.sep='&page='; break;
	case 'protectlog':     this.print=specialLink; this.specialpage='Log'; this.sep='&type=protect&page='; break;
	case 'deletelog':      this.print=specialLink; this.specialpage='Log'; this.sep='&type=delete&page='; break;
	case 'userSpace':      this.print=specialLink; this.specialpage='Prefixindex'; this.sep='&namespace=2&from='; break;
	case 'search':         this.print=specialLink; this.specialpage='Search'; this.sep='&fulltext=Search&search='; break;
	case 'history': case 'historyfeed': case 'unwatch': case 'watch':
	case 'unprotect': case 'protect':
	this.print=wikiLink; this.action=this.id; break;

	case 'delete':
	this.print=wikiLink; this.action='delete';
	if (this.article.namespace()==pg.ns.image) {
	    var img=this.article.stripNamespace();
	    this.action+='&image='+img;
	}
	break;

	case 'markpatrolled':
	case 'edit': // editOld should keep the oldid, but edit should not.
	delete this.oldid; // fall through
	case 'view': case 'purge': case 'render':
	this.print=wikiLink;
	this.action=this.id; break;
	case 'raw':
	this.print=wikiLink; this.action='raw&ctype=text/css'; break;
	case 'new':
	this.print=wikiLink; this.action='edit&section=new'; break;
	case 'mainlink':
	if (typeof this.text=='undefined') { this.text=this.article.toString().entify(); }
	if (getValueOf('popupSimplifyMainLink') && isInStrippableNamespace(this.article)) {
	    var s=this.text.split('/'); this.text=s[s.length-1];
	    if (this.text=='' && s.length > 1) { this.text=s[s.length-2]; }
	}
	this.print=titledWikiLink;
	if (typeof this.title=='undefined' && pg.current.link && typeof pg.current.link.href != 'undefined') {
	    this.title=safeDecodeURI((pg.current.link.originalTitle)?pg.current.link.originalTitle:this.article);
	    if (typeof this.oldid != 'undefined' && this.oldid) {
		this.title=tprintf('Revision %s of %s', [this.oldid, this.title]);
	    }
	}
	this.action='view'; break;
	case 'userPage':
	case 'article':
	case 'monobook':
	case 'editMonobook':
	case 'editArticle':
	delete this.oldid;
	//alert(this.id+'\n'+this.article + '\n'+ typeof this.article);
	this.article=this.article.articleFromTalkOrArticle();
	//alert(this.id+'\n'+this.article + '\n'+ typeof this.article);
	this.print=wikiLink;
	if (this.id.indexOf('edit')==0) {
	    this.action='edit';
	} else { this.action='view';}
	break;
	case 'userTalk':
	case 'talk':
	this.article=this.article.talkPage();
	delete this.oldid;
	this.print=wikiLink;
	this.action='view'; break;
	case 'arin':
	this.print=arinLink; break;
	case 'count':
	this.print=editCounterLink; break;
	case 'google':
	this.print=googleLink; break;
	case 'editors':
	this.print=editorListLink; break;
	case 'globalsearch':
	this.print=globalSearchLink; break;
	case 'lastEdit':
	this.print=titledDiffLink;
	this.title=popupString('Show the last edit');
	this.from='prev'; this.to='cur'; break;
	case 'oldEdit':
	this.print=titledDiffLink;
	this.title=popupString('Show the edit made to get revision') + ' ' + this.oldid;
	this.from='prev'; this.to=this.oldid; break;
	case 'editOld':
	this.print=wikiLink; this.action='edit'; break;
	case 'undo':
	this.print=wikiLink; this.action='edit&undo='; break;
	case 'markpatrolled':
	this.print=wikiLink; this.action='markpatrolled';
	case 'revert':
	this.print=wikiLink; this.action='revert'; break;
	case 'nullEdit':
	this.print=wikiLink; this.action='nullEdit'; break;
	case 'diffCur':
	this.print=titledDiffLink;
	this.title=tprintf('Show changes since revision %s', [this.oldid]);
	this.from=this.oldid; this.to='cur'; break;
	case 'editUserTalk':
	case 'editTalk':
	delete this.oldid;
	this.article=this.article.talkPage();
	this.action='edit'; this.print=wikiLink; break;
	case 'newUserTalk':
	case 'newTalk':
	this.article=this.article.talkPage();
	this.action='edit&section=new'; this.print=wikiLink; break;
	case 'lastContrib':
	case 'sinceMe':
	this.print=magicHistoryLink;
	break;
	case 'togglePreviews':
	this.text=popupString(pg.option.simplePopups ? 'enable previews' : 'disable previews');
	case 'disablePopups': case 'purgePopups':
	this.print=popupMenuLink;
	break;
	default:
	this.print=function () {return 'Unknown navlink type: '+this.id+''};
	}
};
//
//  end navlinks
//////////////////////////////////////////////////
//</NOLITE>
// ENDFILE: navlinks.js
// STARTFILE: shortcutkeys.js
//<NOLITE>
function popupHandleKeypress(evt) {
	var keyCode = window.event ? window.event.keyCode : ( evt.keyCode ? evt.keyCode : evt.which);
	if (!keyCode || !pg.current.link || !pg.current.link.navpopup) { return; }
	if (keyCode==27) { // escape
		killPopup();
		return false; // swallow keypress
	}

	var letter=String.fromCharCode(keyCode);
	var links=pg.current.link.navpopup.mainDiv.getElementsByTagName('A');
	var startLink=0;
	var i,j;

	if (popupHandleKeypress.lastPopupLinkSelected) {
		for (i=0; i<links.length; ++i) {
			if (links[i]==popupHandleKeypress.lastPopupLinkSelected) { startLink=i; }
		}
	}
	for (j=0; j<links.length; ++j) {
		i=(startLink + j + 1) % links.length;
		if (links[i].getAttribute('popupkey')==letter) {
			if (evt && evt.preventDefault) evt.preventDefault();
			links[i].focus();
			popupHandleKeypress.lastPopupLinkSelected=links[i];
			return false; // swallow keypress
		}
	}

	// pass keypress on
	if (document.oldPopupOnkeypress) { return document.oldPopupOnkeypress(evt); }
	return true;
}

function addPopupShortcuts() {
	if (document.onkeypress!=popupHandleKeypress) {
		document.oldPopupOnkeypress=document.onkeypress;
	}
	document.onkeypress=popupHandleKeypress;
}

function rmPopupShortcuts() {
	popupHandleKeypress.lastPopupLinkSelected=null;
	try {
		if (document.oldPopupOnkeypress && document.oldPopupOnkeypress==popupHandleKeypress) {
			// panic
			document.onkeypress=null; //function () {};
			return;
		}
		document.onkeypress=document.oldPopupOnkeypress;
	} catch (nasties) { /* IE goes here */ }
}


function addLinkProperty(html, property) {
	// take "<a href=...>...</a> and add a property
	// not sophisticated at all, easily broken
	var i=html.indexOf('>');
	if (i<0) { return html; }
	return html.substring(0,i) + ' ' + property + html.substring(i);
}

function addPopupShortcut(html, key) {
	if (!getValueOf('popupShortcutKeys')) { return html; }
	var ret= addLinkProperty(html, 'popupkey="'+key+'"');
	if (key==' ') { key=popupString('spacebar'); }
	return ret.replace(RegExp('^(.*?)(title=")(.*?)(".*)$', 'i'),'$1$2$3 ['+key+']$4');
}
//</NOLITE>
// ENDFILE: shortcutkeys.js
// STARTFILE: diffpreview.js
//<NOLITE>
function loadDiff(article, oldid, diff, navpop) {
	navpop.diffData={};
	var oldRev, newRev;
	switch (diff) {
	case 'cur':
		switch ( oldid ) {
		case null:
		case '':
		case 'prev':
			// eg newmessages diff link
			oldRev='0&direction=prev';
			newRev=0;
			break;
		default:
			oldRev = oldid;
			newRev = 0;
		}
		break;
	case 'prev':
		oldRev = ( oldid || 0 ) + '&direction=prev'; newRev = oldid; break;
	case 'next':
		oldRev = oldid; newRev = oldid + '&direction=next';
		break;
	default:
		oldRev = oldid || 0; newRev = diff || 0; break;
	}
	oldRev = oldRev || 0;
	newRev = newRev || 0;

	var go = function() {
		pendingNavpopTask(navpop);
		getWiki(article, doneDiffNew, newRev, navpop);

		pendingNavpopTask(navpop);
		getWiki(article, doneDiffOld, oldRev, navpop);

		var tz = Cookie.read('popTz');
		if ( (window.wgEnableAPI || wgEnableAPI) && getValueOf('popupAdjustDiffDates') && tz===null) {
		    pendingNavpopTask(navpop);
		    getPageWithCaching(pg.wiki.wikibase + '/api.php?format=json&action=query&meta=userinfo&uiprop=options',
				       function(d) {
					       completedNavpopTask(navpop);
					       setTimecorrectionCookie(d);
					       if (diffDownloadsComplete(navpop)) { insertDiff(navpop); }
				       },  navpop);
		}
		return true; // remove hook once run
	}
	if (navpop.visible || !getValueOf('popupLazyDownloads')) { go(); }
	else { navpop.addHook(go, 'unhide', 'before', 'DOWNLOAD_DIFFS'); }
}

function setTimecorrectionCookie(d) {
	try {
		var jsobj=getJsObj(d.data);
		var tz=jsobj.query.userinfo.options.timecorrection;
	} catch (someError) {
		logerr( 'setTimecorretion failed' );
		return;
	}
    Cookie.create( 'popTz', getTimeOffset(tz), 1);
}

function doneDiff(download, isOld) {
	if (!download.owner || !download.owner.diffData) { return; }
	var navpop=download.owner;
	var label= (isOld) ? 'Old' : 'New';
	var otherLabel=(isOld) ? 'New' : 'Old';
	navpop.diffData[label]=download;
	completedNavpopTask(download.owner);
	if (diffDownloadsComplete(navpop)) { insertDiff(navpop); }
}

function diffDownloadsComplete(navpop) {
	if ( Cookie.read('popTz')===null) { return false; }
	return navpop.diffData.Old && navpop.diffData.New;
}

function doneDiffNew(download) { doneDiff(download, false); }
function doneDiffOld(download) { doneDiff(download, true);  }

function rmBoringLines(a,b,context) {

	if (typeof context == 'undefined') { context=2; }
	// this is fairly slow... i think it's quicker than doing a word-based diff from the off, though
	var aa=[], aaa=[];
	var bb=[], bbb=[];
	var i, j;

	// first, gather all disconnected nodes in a and all crossing nodes in a and b
	for (i=0; i<a.length; ++i ) {
		if(!a[i].paired) { aa[i]=1; }
		else if (countCrossings(b,a,i, true)) {
			aa[i]=1;
			bb[ a[i].row ] = 1;
		}
	}

	// pick up remaining disconnected nodes in b
	for (i=0; i<b.length; ++i ) {
		if (bb[i]==1) { continue; }
		if(!b[i].paired) { bb[i]=1; }
	}

	// another pass to gather context: we want the neighbours of included nodes which are not yet included
	// we have to add in partners of these nodes, but we don't want to add context for *those* nodes in the next pass
	for (i=0; i<b.length; ++i) {
		if ( bb[i] == 1 ) {
			for (j=max(0,i-context); j < min(b.length, i+context); ++j) {
				if ( !bb[j] ) { bb[j] = 1; aa[ b[j].row ] = 0.5; }
			}
		}
	}

	for (i=0; i<a.length; ++i) {
		if ( aa[i] == 1 ) {
			for (j=max(0,i-context); j < min(a.length, i+context); ++j) {
				if ( !aa[j] ) { aa[j] = 1; bb[ a[j].row ] = 0.5; }
			}
		}
	}

	for (i=0; i<bb.length; ++i) {
		if (bb[i] > 0) { // it's a row we need
			if (b[i].paired) { bbb.push(b[i].text); } // joined; partner should be in aa
			else {
				bbb.push(b[i]);
			}
		}
	}
	for (i=0; i<aa.length; ++i) {
		if (aa[i] > 0) { // it's a row we need
			if (a[i].paired) { aaa.push(a[i].text); } // joined; partner should be in aa
			else {
				aaa.push(a[i]);
			}
		}
	}

	return { a: aaa, b: bbb};
}

function stripOuterCommonLines(a,b,context) {
	var i=0;
	while (i<a.length && i < b.length && a[i]==b[i]) { ++i; }
	var j=a.length-1; var k=b.length-1;
	while ( j>=0 && k>=0 && a[j]==b[k] ) { --j; --k; }

	return { a: a.slice(max(0,i - 1 - context), min(a.length+1, j + context+1)),
			    b: b.slice(max(0,i - 1 - context), min(b.length+1, k + context+1)) };
}

function insertDiff(navpop) {
	// for speed reasons, we first do a line-based diff, discard stuff that seems boring, then do a word-based diff
	// FIXME: sometimes this gives misleading diffs as distant chunks are squashed together
	var oldlines=navpop.diffData.Old.data.split('\n');
	var newlines=navpop.diffData.New.data.split('\n');
	var inner=stripOuterCommonLines(oldlines,newlines,getValueOf('popupDiffContextLines'));
	oldlines=inner.a; newlines=inner.b;
	var truncated=false;
	getValueOf('popupDiffMaxLines');
	if (oldlines.length > pg.option.popupDiffMaxLines || newlines.length > pg.option.popupDiffMaxLines) {
		// truncate
		truncated=true;
		inner=stripOuterCommonLines(oldlines.slice(0,pg.option.popupDiffMaxLines),
					    newlines.slice(0,pg.option.popupDiffMaxLines),
					    pg.option.popupDiffContextLines);
		oldlines=inner.a; newlines=inner.b;
	}

	var lineDiff=diff(oldlines, newlines);
	var lines2=rmBoringLines(lineDiff.o, lineDiff.n);
	var oldlines2=lines2.a; var newlines2=lines2.b;

	var simpleSplit = !String.prototype.parenSplit.isNative;
	var html='<hr>';
	if (getValueOf('popupDiffDates')) {
		html += diffDatesTable(navpop.diffData.Old, navpop.diffData.New);
		html += '<hr>';
	}
	html += shortenDiffString(
		diffString(oldlines2.join('\n'), newlines2.join('\n'), simpleSplit),
		getValueOf('popupDiffContextCharacters') ).join('<hr>');
	setPopupTipsAndHTML(html.split('\n').join('<br>') +
		     (truncated ? '<hr><b>'+popupString('Diff truncated for performance reasons')+'</b>' : '') ,
			    'popupPreview', navpop.idNumber);
}

function diffDatesTable( oldDl, newDl ) {
	var html='<table class="popup_diff_dates">';
	html += diffDatesTableRow( newDl, tprintf('New revision'));
	html += diffDatesTableRow( oldDl, tprintf('Old revision'));
	html += '</table>';
	return html;
}
function diffDatesTableRow( dl, label ) {
	var txt='';
	if (!dl) {
		txt=popupString('Something went wrong :-(');
	} else if (!dl.lastModified) {
		txt= (/^\s*$/.test(dl.data)) ?
			popupString('Empty revision, maybe non-existent') : popupString('Unknown date');
	} else {
		var datePrint=getValueOf('popupDiffDatePrinter');
		if (typeof dl.lastModified[datePrint] == 'function') {
			if (getValueOf('popupAdjustDiffDates')) {
				var off;
				if (off=Cookie.read('popTz')) {
					var d2=adjustDate(dl.lastModified, off);
					txt = dayFormat(d2, true) + ' ' + timeFormat(d2, true);
				}
			} else {
				txt = dl.lastModified[datePrint]();
			}
		} else {
			txt = tprintf('Invalid %s %s', ['popupDiffDatePrinter', datePrint]);
		}
	}
	var revlink = generalLink({url: dl.url.replace(/&.*?(oldid=[0-9]+(?:&direction=[^&]*)?).*/, '&$1'),
				   text: label, title: label});
	return simplePrintf('<tr><td>%s</td><td>%s</td></tr>', [ revlink, txt ]);
}
//</NOLITE>
// ENDFILE: diffpreview.js
// STARTFILE: links.js
//<NOLITE>
/////////////////////
// LINK GENERATION //
/////////////////////

// titledDiffLink --> titledWikiLink --> generalLink
// wikiLink       --> titledWikiLink --> generalLink
// editCounterLink --> generalLink

function titledDiffLink(l) { // article, text, title, from, to) {
	return titledWikiLink({article: l.article, action: l.to + '&oldid=' + l.from,
				newWin: l.newWin,
				noPopup: l.noPopup,
				text: l.text, title: l.title,
				/* hack: no oldid here */
				actionName: 'diff'});
}


function wikiLink(l) {
	//{article:article, action:action, text:text, oldid, newid}) {
	if (! (typeof l.article == typeof {}
	       && typeof l.action == typeof '' && typeof l.text==typeof '')) return null;
	if (typeof l.oldid == 'undefined') { l.oldid=null; }
	var savedOldid = l.oldid;
	if (!/^(edit|view|revert|render)$|^raw/.test(l.action)) { l.oldid=null; }
	var hint=popupString(l.action + 'Hint'); // revertHint etc etc etc
	var oldidData=[l.oldid, safeDecodeURI(l.article)];
	var revisionString = tprintf('revision %s of %s', oldidData);
	log('revisionString='+revisionString);
	switch (l.action) {
	case 'edit&section=new': hint = popupString('newSectionHint');  break;
	case 'edit&undo=':
		if (l.diff && l.diff != 'prev' && savedOldid ) {
		  l.action += l.diff + '&undoafter=' + savedOldid;
		} else if (savedOldid) {
		  l.action += savedOldid;
		}
		hint = popupString('undoHint');
		break;
	case 'raw&ctype=text/css': hint=popupString('rawHint'); break;
	case 'revert':
	    if (!window.wgEnableAPI || !wgEnableAPI) {
	    	alert( 'This function of navigation popups now requires a MediaWiki ' + 
			'installation with the API enabled.');
			break;
	    }
		var p=parseParams(pg.current.link.href);
		l.action='edit&autoclick=wpSave&actoken=' + autoClickToken() + '&autosummary=' + revertSummary(l.oldid, p.diff);
		if (p.diff=='prev') {
			l.action += '&direction=prev';
			revisionString = tprintf('the revision prior to revision %s of %s', oldidData);
		}
		if (getValueOf('popupRevertSummaryPrompt')) { l.action += '&autosummaryprompt=true'; }
		if (getValueOf('popupMinorReverts')) { l.action += '&autominor=true'; }
		log('revisionString is now '+revisionString);
		break;
	case 'nullEdit':
		l.action='edit&autoclick=wpSave&actoken=' + autoClickToken() + '&autosummary=null';
		break;
	case 'historyfeed':
		l.action='history&feed=rss';
		break;
	case 'markpatrolled':
		l.action='markpatrolled&rcid='+l.rcid;
	}

	if (hint) {
		if (l.oldid) {
			hint = simplePrintf(hint, [revisionString]);
		}
		else {
			hint = simplePrintf(hint, [safeDecodeURI(l.article)]);
		}
	}
	else {
		hint = safeDecodeURI(l.article + '&action=' + l.action) + (l.oldid) ? '&oldid='+l.oldid : '';
	}

	return titledWikiLink({article: l.article, action: l.action, text: l.text, newWin:l.newWin,
				title: hint, oldid: l.oldid, noPopup: l.noPopup});
}

function revertSummary(oldid, diff) {
	var ret='';
	if (diff == 'prev') {
		ret=getValueOf('popupQueriedRevertToPreviousSummary');
	} else { ret = getValueOf('popupQueriedRevertSummary'); }
	return ret + '&autorv=' + oldid;
}

function titledWikiLink(l) {
	// possible properties of argument:
	// article, action, text, title, oldid, actionName, className, noPopup
	// oldid = null is fine here

	// article and action are mandatory args

	if (typeof l.article == 'undefined' || typeof l.action=='undefined') {
		errlog('got undefined article or action in titledWikiLink');
		return null;
	}

	var base = pg.wiki.titlebase +  l.article.urlString();
	var url=base;

	if (typeof l.actionName=='undefined' || !l.actionName) { l.actionName='action'; }

	// no need to add &action=view, and this confuses anchors
	if (l.action != 'view') { url = base + '&' + l.actionName + '=' + l.action; }

	if (typeof l.oldid!='undefined' && l.oldid) { url+='&oldid='+l.oldid; }

	var cssClass=pg.misc.defaultNavlinkClassname;
	if (typeof l.className!='undefined' && l.className) { cssClass=l.className; }

	return generalNavLink({url: url, newWin: l.newWin,
				title: (typeof l.title != 'undefined') ? l.title : null,
				text: (typeof l.text!='undefined')?l.text:null,
				className: cssClass, noPopup:l.noPopup});
}

function getLastContrib(wikipage, newWin) {
	getHistoryInfo(wikipage, function(x){processLastContribInfo(x,{page: wikipage, newWin: newWin})});
}
function processLastContribInfo(info, stuff) {
	if(!info.edits || !info.edits.length) { alert('Popups: an odd thing happened. Please retry.'); return; }
	if(!info.firstNewEditor) {
		alert(tprintf('Only found one editor: %s made %s edits', [info.edits[0].editor,info.edits.length]));
		return;
	}
	var newUrl=pg.wiki.titlebase + new Title(stuff.page).urlString() + '&diff=cur&oldid='+info.firstNewEditor.oldid;
	displayUrl(newUrl, stuff.newWin);
}
function getDiffSinceMyEdit(wikipage, newWin) {
	getHistoryInfo(wikipage, function(x){processDiffSinceMyEdit(x,{page: wikipage, newWin: newWin})});
}
function processDiffSinceMyEdit(info, stuff) {
	if(!info.edits || !info.edits.length) { alert('Popups: something fishy happened. Please try again.'); return; }
	var friendlyName=stuff.page.split('_').join(' ');
	if(!info.myLastEdit) {
		alert(tprintf('Couldn\'t find an edit by %s\nin the last %s edits to\n%s',
			      [info.userName, getValueOf('popupHistoryLimit'), friendlyName]));
		return;
	}
	if(info.myLastEdit.index==0) {
		alert(tprintf("%s seems to be the last editor to the page %s", [info.userName, friendlyName]));
		return;
	}
	var newUrl=pg.wiki.titlebase + new Title(stuff.page).urlString() + '&diff=cur&oldid='+ info.myLastEdit.oldid;
	displayUrl(newUrl, stuff.newWin);
}
function displayUrl(url, newWin){
	if(newWin) { window.open(url); }
	else { document.location=url; }
}

function purgePopups() {
	processAllPopups(true);
	setupCache(); // deletes all cached items (not browser cached, though...)
	pg.option={};
	abortAllDownloads();
}

function processAllPopups(nullify, banish) {
	for (var i=0; i<pg.current.links.length; ++i) {
		if (!pg.current.links[i].navpopup) { continue; }
		(nullify || banish) && pg.current.links[i].navpopup.banish();
		pg.current.links[i].simpleNoMore=false;
		nullify && (pg.current.links[i].navpopup=null);
	}
}

function disablePopups(){
	processAllPopups(false, true);
	setupTooltips(null, true);
}

function togglePreviews() {
	processAllPopups(true, true);
	pg.option.simplePopups=!pg.option.simplePopups;
	abortAllDownloads();
}

function magicHistoryLink(l) {
	// FIXME use onclick change href trick to sort this out instead of window.open

	var jsUrl='', title='';
	switch(l.id) {
	case 'lastContrib':
		jsUrl=simplePrintf('javascript:getLastContrib(\'%s\',%s)',
			[l.article.toString(true).split("'").join("\\'"), l.newWin]);
		title=popupString('lastContribHint');
		break;
	case 'sinceMe':
		jsUrl=simplePrintf('javascript:getDiffSinceMyEdit(\'%s\',%s)',
			[l.article.toString(true).split("'").join("\\'"), l.newWin]);
		title=popupString('sinceMeHint');
		break;
	}

	return generalNavLink({url: jsUrl, newWin: false, // can't have new windows with JS links, I think
				title: title, text: l.text, noPopup: l.noPopup});
}

function popupMenuLink(l) {
	var jsUrl=simplePrintf('javascript:%s()', [l.id]);
	var title=popupString(simplePrintf('%sHint', [l.id]));
	return generalNavLink({url: jsUrl, newWin:false, title:title, text:l.text, noPopup:l.noPopup});
}

function specialLink(l) {
	// properties: article, specialpage, text, sep
	if (typeof l.specialpage=='undefined'||!l.specialpage) return null;
	var base = pg.wiki.titlebase +  pg.ns.special+':'+l.specialpage;
	if (typeof l.sep == 'undefined' || l.sep===null) l.sep='&target=';
	var article=l.article.urlString({keepSpaces: l.specialpage=='Search'});
	var hint=popupString(l.specialpage+'Hint');
	switch (l.specialpage) {
	case 'Log':
	    switch (l.sep) {
	    case '&user=': hint=popupString('userLogHint'); break;
	    case '&type=block&page=': hint=popupString('blockLogHint'); break;
	    case '&page=': hint=popupString('pageLogHint'); break;
	    case '&type=protect&page=': hint=popupString('protectLogHint'); break;
	    case '&type=delete&page=': hint=popupString('deleteLogHint'); break;
	    default: log('Unknown log type, sep=' + l.sep); hint='Missing hint (FIXME)';
	    }
	    break;
	case 'Prefixindex': article += '/'; break;
	}
	if (hint) hint = simplePrintf(hint, [safeDecodeURI(l.article)]);
	else hint = safeDecodeURI(l.specialpage+':'+l.article) ;

	var url = base + l.sep + article;
	return generalNavLink({url: url, title: hint, text: l.text, newWin:l.newWin, noPopup:l.noPopup});
}

function generalLink(l) {
	// l.url, l.text, l.title, l.newWin, l.className, l.noPopup
	if (typeof l.url=='undefined') return null;

	// only quotation marks in the url can screw us up now... I think
	var url=l.url.split('"').join('%22');

	var ret='<a href="' + url + '"';
	if (typeof l.title!='undefined' && l.title) { ret += ' title="' + l.title + '"'; }
	if (l.noPopup) { ret += ' noPopup=1'; }
	var newWin;
	if (typeof l.newWin=='undefined' || l.newWin===null) { newWin=getValueOf('popupNewWindows'); }
	else { newWin=l.newWin; }
	if (newWin) { ret += ' target="_blank"'; }
	if (typeof l.className!='undefined'&&l.className) { ret+=' class="'+l.className+'"'; }
	ret += '>';
	if (typeof l.text==typeof '') { ret+= l.text; }
	ret +='</a>';
	return ret;
}

function appendParamsToLink(linkstr, params) {
	var sp=linkstr.parenSplit(RegExp('(href="[^"]+?)"', 'i'));
	if (sp.length<2) return null;
	var ret=sp.shift() + sp.shift();
	ret += '&' + params + '"';
	ret += sp.join('');
	return ret;
}

function changeLinkTargetLink(x) { // newTarget, text, hint, summary, clickButton, minor, title (optional) {
	if (x.newTarget) {
		log ('changeLinkTargetLink: newTarget=' + x.newTarget);
	}
	// optional: oldTarget (in wikitext)
	// if x.newTarget omitted or null, remove the link

	//x.text=encodeURI(x.text);  // this buggers things up on zh.wikipedia.org and doesn't seem necessary
	x.clickButton=encodeURI(x.clickButton);

	// FIXME: first character of page title as well as namespace should be case insensitive
	// eg [[category:foo]] and [[Category:Foo]] are equivalent
	// this'll break if charAt(0) is nasty
	var cA=literalizeRegex(x.oldTarget);
	var chs=cA.charAt(0).toUpperCase();
	chs='['+chs + chs.toLowerCase()+']';
	var currentArticleRegexBit=encodeURIComponent(chs+cA.substring(1));
	currentArticleRegexBit=currentArticleRegexBit
		.split(RegExp('[_ ]+', 'g')).join('[_ ]+')
		.split('\\(').join('(?:%2528|\\()')
		.split('\\)').join('(?:%2529|\\))');
	// leading and trailing space should be ignored, and anchor bits optional:
	currentArticleRegexBit = '\\s*(' + currentArticleRegexBit + '(?:#[^\\[\\|]*)?)\\s*';
	// e.g. Computer (archaic) -> \s*([Cc]omputer[_ ](?:%2528|\()archaic(?:%2528|\)))\s*

	// autoedit=s~\[\[([Cc]ad)\]\]~[[Computer-aided%20design|$1]]~g;s~\[\[([Cc]AD)[|]~[[Computer-aided%20design|~g

	var title=x.title || wgPageName.split('_').join(' ');
	var lk=titledWikiLink({article: new Title(title), newWin:x.newWin,
						action:  'edit',
						text:    x.text,
						title:   x.hint,
						className: 'popup_change_title_link'
						});
	var cmd='';
	if (x.newTarget) {
		// escape '&' and other nasties
		var t=encodeURIComponent(x.newTarget);
		var s=encodeURIComponent(literalizeRegex(x.newTarget));
		cmd += 's~\\[\\['+currentArticleRegexBit+'\\]\\]~[['+t+'|$1]]~g;';
		cmd += 's~\\[\\['+currentArticleRegexBit+'[|]~[['+t+'|~g;';
		cmd += 's~\\[\\['+s + '\\|' + s + '\\]\\]~[[' + t + ']]~g';
	} else {
		cmd += 's~\\[\\['+currentArticleRegexBit+'\\]\\]~$1~g;';
		cmd += 's~\\[\\['+currentArticleRegexBit+'[|](.*?)\\]\\]~$2~g';
	}
	cmd += '&autoclick='+x.clickButton + '&actoken=' + autoClickToken();
	cmd += ( x.minor == null ) ? '' : '&autominor='+x.minor;
	cmd += ( x.watch == null ) ? '' : '&autowatch='+x.watch;
	cmd += '&autosummary='+encodeURIComponent(x.summary);
	return appendParamsToLink(lk, 'autoedit='+cmd);
}


function redirLink(redirMatch, article) {
	// NB redirMatch is in wikiText
	var ret='';

	if (getValueOf('popupAppendRedirNavLinks') && getValueOf('popupNavLinks')) {
		ret += '<hr>';
		if (getValueOf('popupFixRedirs') && typeof autoEdit != 'undefined' && autoEdit) {
			log('redirLink: newTarget=' + redirMatch);
			ret += addPopupShortcut(
				changeLinkTargetLink(
				{newTarget: redirMatch, text: popupString('Redirects'),
					hint: popupString('Fix this redirect'),
						summary: simplePrintf(getValueOf('popupFixRedirsSummary'),
								      [article.toString(), redirMatch ]),
						oldTarget: article.toString(),
						clickButton: getValueOf('popupRedirAutoClick'), minor: true,
						watch: getValueOf('popupWatchRedirredPages')})
				, 'R');
			ret += popupString(' to ');
		}
		else ret += popupString('Redirects') + popupString(' to ');
		return ret;
	}

	else return '<br> ' + popupString('Redirects') + popupString(' to ') +
		     titledWikiLink({article: new Title().fromWikiText(redirMatch), action: 'view',  /* FIXME: newWin */
						      text: safeDecodeURI(redirMatch), title: popupString('Bypass redirect')});
}

function arinLink(l) {
	if (!saneLinkCheck(l)) { return null; }
	if ( ! l.article.isIpUser() || ! pg.wiki.wikimedia) return null;

	var uN=l.article.userName();

	return generalNavLink({url:'http://ws.arin.net/cgi-bin/whois.pl?queryinput=' + encodeURIComponent(uN), newWin:l.newWin,
				title: tprintf('Look up %s in ARIN whois database', [uN]),
				text: l.text, noPopup:1});
}

function toolDbName(cookieStyle) {
	var ret=null;
	var theWiki=pg.wiki.hostname.split('.')[1];
	if (pg.wiki.hostname==pg.wiki.commons) {
		ret = 'commonswiki';
	} else {
		switch(theWiki) {
		case 'wikipedia':
		case 'wikimedia':
			ret = pg.wiki.lang + 'wiki';
			break;
		default:
			ret = pg.wiki.lang + theWiki;
			break;
		}
	}
	if (!cookieStyle) { ret+= '_p'; }
	return ret;
}

function saneLinkCheck(l) {
	if (typeof l.article != typeof {} || typeof l.text != typeof '') { return false; }
	return true;
}
function editCounterLink(l) {
	if(!saneLinkCheck(l)) return null;
	if (! pg.wiki.wikimedia) return null;
	var uN=l.article.userName();
	var tool=getValueOf('popupEditCounterTool');
	var url;
	var soxredToolUrl='http://toolserver.org/~soxred93/count/index.php?name=$1&lang=$2&wiki=$3';
	var kateToolUrl='http://toolserver.org/~$3/cgi-bin/Tool1/wannabe_kate?username=$1&site=en.wikipedia.org&$2';

	switch(tool) {
	case 'custom':
		url=simplePrintf(getValueOf('popupEditCounterUrl'), [ encodeURIcomponent(uN), toolDbName() ]);
		break;
	case 'kate':
	case 'interiot':
		url=simplePrintf(kateToolUrl, [ encodeURIComponent(uN), toolDbName(), tool ]);
		break;
	default:
	    var theWiki=pg.wiki.hostname.split('.');
		url=simplePrintf(soxredToolUrl, [ encodeURIComponent(uN), theWiki[0], theWiki[1] ]);
	}
	return generalNavLink({url:url, title: tprintf('editCounterLinkHint', [uN]),
				newWin:l.newWin, text: l.text, noPopup:1});
}


function globalSearchLink(l) {
	if(!saneLinkCheck(l)) return null;

	var base='http://vs.aka-online.de/cgi-bin/globalwpsearch.pl?timeout=120&search=';
	var article=l.article.urlString({keepSpaces:true});

	return generalNavLink({url:base + article, newWin:l.newWin,
				title: tprintf('globalSearchHint', [article]),
				text: l.text, noPopup:1});
}

function googleLink(l) {
	if(!saneLinkCheck(l)) return null;

	var base='http://www.google.com/search?q=';
	var article=l.article.urlString({keepSpaces:true});

	return generalNavLink({url:base + '%22' + article + '%22', newWin:l.newWin,
				title: tprintf('googleSearchHint', [article]),
				text: l.text, noPopup:1});
}

function editorListLink(l) {
	if(!saneLinkCheck(l)) return null;
	var article= l.article.articleFromTalkPage() || l.article;
	var base='http://toolserver.org/~tim/cgi-bin/contribution-counter?page=';
	return generalNavLink({url:base+article.urlString(),
				title: tprintf('editorListHint', [article]),
				newWin:l.newWin, text: l.text, noPopup:1});
}

function generalNavLink(l) {
	l.className = (l.className==null) ? 'popupNavLink' : l.className;
	return generalLink(l);
}

//////////////////////////////////////////////////
// magic history links
//

function getHistoryInfo(wikipage, whatNext) {
	log('getHistoryInfo');
	getHistory(wikipage, whatNext ? function(d){whatNext(processHistory(d));} : processHistory);
}

// FIXME eliminate pg.idNumber ... how? :-(

function getHistory(wikipage, onComplete) {
	log('getHistory');
	if( !window.wgEnableAPI || !wgEnableAPI ) {
		alert( 'This function of navigation popups now requires a MediaWiki ' + 
			'installation with the API enabled.');
		return false;
	}
	var url = pg.wiki.wikibase + '/api.php?format=json&action=query&prop=revisions&titles=' +
			new Title(wikipage).urlString() + '&rvlimit=' + getValueOf('popupHistoryLimit');
	log('getHistory: url='+url);
	return startDownload(url, pg.idNumber+'history', onComplete);
}

function processHistory(download) {
	var jsobj = getJsObj(download.data);
	try {
		window.x=jsobj;
		var p=jsobj['query']['pages']
		for (var pageid in p) {
			var revisions=p[pageid]['revisions'];
			// we only get the first one
			break;
		}
	} catch (someError) {
		log('Something went wrong with JSON business');
		return finishProcessHistory([]);
	}
	var edits=[];
	for (var i=0; i<revisions.length; ++i) {
		edits.push({ oldid: revisions[i]['revid'], editor: revisions[i]['user'] });
	}
	log('processed ' + edits.length + ' edits');
	return finishProcessHistory(edits, wgUserName);
}


function finishProcessHistory(edits, userName) {
	var histInfo={};

	histInfo.edits=edits;
	histInfo.userName=userName;

	for (var i=0; i<edits.length; ++i) {
		if (typeof histInfo.myLastEdit == 'undefined' && userName && edits[i].editor==userName) {
			histInfo.myLastEdit={index: i, oldid: edits[i].oldid, previd: (i==0 ? null : edits[i-1].oldid)};
		}
		if (typeof histInfo.firstNewEditor == 'undefined' && edits[i].editor != edits[0].editor) {
			histInfo.firstNewEditor={index:i, oldid:edits[i].oldid, previd: (i==0 ? null : edits[i-1].oldid)};
		}
	}
	//pg.misc.historyInfo=histInfo;
	return histInfo;
}
//</NOLITE>
// ENDFILE: links.js
// STARTFILE: options.js
//////////////////////////////////////////////////
// options

// check for cookies and existing value, else use default
function defaultize(x) {
	var val=null;
	if (x!='popupCookies') {
		defaultize('popupCookies');
		if (pg.option.popupCookies && (val=Cookie.read(x))) {
			pg.option[x]=val;
			return;
		}
	}
	if (pg.option[x]===null || typeof pg.option[x]=='undefined') {
		if (typeof window[x] != 'undefined' ) pg.option[x]=window[x];
		else pg.option[x]=pg.optionDefault[x];
	}
}

function newOption(x, def) {
	pg.optionDefault[x]=def;
}

function setDefault(x, def) {
	return newOption(x, def);
}

function getValueOf(varName) {
	defaultize(varName);
	return pg.option[varName];
}

function useDefaultOptions() { // for testing
	for (var p in pg.optionDefault) {
		pg.option[p]=pg.optionDefault[p];
		if (typeof window[p]!='undefined') { delete window[p]; }
	}
}

function setOptions() {
	// user-settable parameters and defaults

	// Basic options
	newOption('popupDelay',               0.5);
	newOption('popupHideDelay',           0.5);
	newOption('simplePopups',             false);
	newOption('popupStructure',           'shortmenus');   // see later - default for popupStructure is 'original' if simplePopups is true
	newOption('popupActionsMenu',         true);
	newOption('popupSetupMenu',           true);
	newOption('popupAdminLinks',          false);
	newOption('popupShortcutKeys',        false);
	newOption('popupHistoricalLinks',     true);
	newOption('popupOnlyArticleLinks',    true);
	newOption('removeTitles',             true);
	newOption('popupMaxWidth',            350);
	newOption('popupInitialWidth',        false); // integer or false
	newOption('popupSimplifyMainLink',    true);
	newOption('popupAppendRedirNavLinks', true);
	newOption('popupTocLinks',            false);
	newOption('popupSubpopups',           true);
	newOption('popupDragHandle',          false /* 'popupTopLinks'*/);
	newOption('popupLazyPreviews',        true);
	newOption('popupLazyDownloads',       true);
	newOption('popupAllDabsStubs',        false);
	newOption('popupDebugging',           false);
	newOption('popupAdjustDiffDates',     true);
	newOption('popupActiveNavlinks',      true);
	newOption('popupModifier',            false); // ctrl, shift, alt or meta
	newOption('popupModifierAction',      'enable'); // or 'disable'

//<NOLITE>
	// images
	newOption('popupImages',                 true);
	newOption('imagePopupsForImages',        true);
	newOption('popupNeverGetThumbs',         false);
	newOption('popupImagesFromThisWikiOnly', false);
	newOption('popupMinImageWidth',          50);
	newOption('popupLoadImagesSequentially', false);
	//newOption('popupImagesToggleSize',       true);
	newOption('popupThumbAction',            'imagepage'); //'sizetoggle');
	newOption('popupImageSize',              60);

	// redirs, dabs, reversion
	newOption('popupFixRedirs',             false);
	newOption('popupRedirAutoClick',        'wpDiff');
	newOption('popupFixDabs',               false);
	newOption('popupRevertSummaryPrompt',   false);
	newOption('popupMinorReverts',          false);
	newOption('popupRedlinkRemoval',        false);
	newOption('popupWatchDisambiggedPages', null);
	newOption('popupWatchRedirredPages',    null);
	newOption('popupDabWiktionary',         'last');

	// navlinks
	newOption('popupNavLinks',          true);
	newOption('popupNavLinkSeparator',  ' &sdot; ');
	newOption('popupLastEditLink',      true);
	newOption('popupEditCounterTool',   'soxred');
	newOption('popupEditCounterUrl',    '');
	newOption('popupExtraUserMenu',     '');
//</NOLITE>

	// previews etc
	newOption('popupPreviews',             true);
	newOption('popupSummaryData',          true);
	newOption('popupMaxPreviewSentences',  5);
	newOption('popupMaxPreviewCharacters', 600);
	newOption('popupLastModified',         true);
	newOption('popupPreviewKillTemplates', true);
	newOption('popupPreviewRawTemplates',  true);
	newOption('popupPreviewFirstParOnly',  true);
	newOption('popupPreviewCutHeadings',   true);
	newOption('popupPreviewButton',        false);
	newOption('popupPreviewButtonEvent',   'click');

//<NOLITE>
	// diffs
	newOption('popupPreviewDiffs',          true);
	newOption('popupDiffMaxLines',          100);
	newOption('popupDiffContextLines',      2);
	newOption('popupDiffContextCharacters', 40);
	newOption('popupDiffDates',             true);
	newOption('popupDiffDatePrinter',       'toLocaleString');

	// edit summaries. God, these are ugly.
	newOption('popupFixDabsSummary',           popupString('defaultpopupFixDabsSummary') );
	newOption('popupExtendedRevertSummary',    popupString('defaultpopupExtendedRevertSummary') );
	newOption('popupTimeOffset',               null);
	newOption('popupRevertSummary',            popupString('defaultpopupRevertSummary') );
	newOption('popupRevertToPreviousSummary',  popupString('defaultpopupRevertToPreviousSummary') );
	newOption('popupQueriedRevertSummary',            popupString('defaultpopupQueriedRevertSummary') );
	newOption('popupQueriedRevertToPreviousSummary',  popupString('defaultpopupQueriedRevertToPreviousSummary') );
	newOption('popupFixRedirsSummary',         popupString('defaultpopupFixRedirsSummary') );
	newOption('popupRedlinkSummary',           popupString('defaultpopupRedlinkSummary') );
	newOption('popupRmDabLinkSummary',         popupString('defaultpopupRmDabLinkSummary') );
//</NOLITE>
	// misc
	newOption('popupCookies',             false);
	newOption('popupHistoryLimit',        50);
//<NOLITE>
	newOption('popupFilters',             [popupFilterStubDetect,     popupFilterDisambigDetect,
					       popupFilterPageSize,       popupFilterCountLinks,
					       popupFilterCountImages,    popupFilterCountCategories,
					       popupFilterLastModified]);
	newOption('extraPopupFilters',        []);
	newOption('popupOnEditSelection', 'cursor');
	newOption('popupPreviewHistory',      true);
	newOption('popupImageLinks',          true);
	newOption('popupCategoryMembers',     true);
	newOption('popupUserInfo',            true);
	newOption('popupHistoryPreviewLimit', 25);
	newOption('popupContribsPreviewLimit',25);
//</NOLITE>

	// new windows
	newOption('popupNewWindows',     false);
	newOption('popupLinksNewWindow', {'lastContrib': true, 'sinceMe': true});

	// regexps
	newOption('popupDabRegexp', '([{][{]\\s*disambig|disambig\\s*[}][}]|disamb\\s*[}][}]|dab\\s*[}][}])|[{][{]\\s*(((geo|hn|road?|school|number)dis)|[234][lc][acw]|shipindex)(\\s*[|][^}]*)?\\s*[}][}]|is a .*disambiguation.*page');
	newOption('popupStubRegexp', '(sect)?stub[}][}]|This .*-related article is a .*stub');
	newOption('popupImageVarsRegexp', 'image|image_(?:file|skyline|name|flag|seal)|cover|badge|logo');
}
// ENDFILE: options.js
// STARTFILE: strings.js
//<NOLITE>
//////////////////////////////////////////////////
// Translatable strings
//////////////////////////////////////////////////
//
// See instructions at
// http://en.wikipedia.org/wiki/Wikipedia:Tools/Navigation_popups/Translation

pg.string = {
	/////////////////////////////////////
	// summary data, searching etc.
	/////////////////////////////////////
	'article': 'article',
	'category': 'category',
	'categories': 'categories',
	'image': 'image',
	'images': 'images',
	'stub': 'stub',
	'section stub': 'section stub',
	'Empty page': 'Empty page',
	'kB': 'kB',
	'bytes': 'bytes',
	'day': 'day',
	'days': 'days',
	'hour': 'hour',
	'hours': 'hours',
	'minute': 'minute',
	'minutes': 'minutes',
	'second': 'second',
	'seconds': 'seconds',
	'week': 'week',
	'weeks': 'weeks',
	'search': 'search',
	'SearchHint': 'Find English Wikipedia articles containing %s',
	'web': 'web',
	'global': 'global',
	'globalSearchHint': 'Search across Wikipedias in different languages for %s',
	'googleSearchHint': 'Google for %s',
	/////////////////////////////////////
	// article-related actions and info
	// (some actions also apply to user pages)
	/////////////////////////////////////
	'actions': 'actions',         ///// view articles and view talk
	'popupsMenu': 'popups',
	'togglePreviewsHint': 'Toggle preview generation in popups on this page',
	'enable previews': 'enable previews',
	'disable preview': 'disable previews',
	'toggle previews': 'toggle previews',
	'show preview': 'show preview',
	'reset': 'reset',
	'more...': 'more...',
	'disable': 'disable popups',
	'disablePopupsHint': 'Disable popups on this page. Reload page to re-enable.',
	'historyfeedHint': 'RSS feed of recent changes to this page',
	'purgePopupsHint': 'Reset popups, clearing all cached popup data.',
	'PopupsHint': 'Reset popups, clearing all cached popup data.',
	'spacebar': 'space',
	'view': 'view',
	'view article': 'view article',
	'viewHint': 'Go to %s',
	'talk': 'talk',
	'talk page': 'talk page',
	'this&nbsp;revision': 'this&nbsp;revision',
	'revision %s of %s': 'revision %s of %s',
	'Revision %s of %s': 'Revision %s of %s',
	'the revision prior to revision %s of %s': 'the revision prior to revision %s of %s',
	'Toggle image size': 'Click to toggle image size',
	'del': 'del',                 ///// delete, protect, move
	'delete': 'delete',
	'deleteHint': 'Delete %s',
	'undeleteShort': 'un',
	'UndeleteHint': 'Show the deletion history for %s',
	'protect': 'protect',
	'protectHint': 'Restrict editing rights to %s',
	'unprotectShort': 'un',
	'unprotectHint': 'Allow %s to be edited by anyone again',
	'move': 'move',
	'move page': 'move page',
	'MovepageHint': 'Change the title of %s',
	'edit': 'edit',               ///// edit articles and talk
	'edit article': 'edit article',
	'editHint': 'Change the content of %s',
	'edit talk': 'edit talk',
	'new': 'new',
	'new topic': 'new topic',
	'newSectionHint': 'Start a new section on %s',
	'null edit': 'null edit',
	'nullEditHint': 'Submit an edit to %s, making no changes ',
	'hist': 'hist',               ///// history, diffs, editors, related
	'history': 'history',
	'historyHint': 'List the changes made to %s',
	'last': 'last',
	'lastEdit': 'lastEdit',
	'mark patrolled': 'mark patrolled',
	'markpatrolledHint': 'Mark this edit as patrolled',
	'show last edit': 'most recent edit',
	'Show the last edit': 'Show the effects of the most recent change',
	'lastContrib': 'lastContrib',
	'last set of edits': 'latest edits',
	'lastContribHint': 'Show the net effect of changes made by the last editor',
	'cur': 'cur',
	'diffCur': 'diffCur',
	'Show changes since revision %s': 'Show changes since revision %s',
	'%s old': '%s old', // as in 4 weeks old
	'oldEdit': 'oldEdit',
	'purge': 'purge',
	'purgeHint': 'Demand a fresh copy of %s',
	'raw': 'source',
	'rawHint': 'Download the source of %s',
	'render': 'simple',
	'renderHint': 'Show a plain HTML version of %s',
	'Show the edit made to get revision': 'Show the edit made to get revision',
	'sinceMe': 'sinceMe',
	'changes since mine': 'diff my edit',
	'sinceMeHint': 'Show changes since my last edit',
	'Couldn\'t find an edit by %s\nin the last %s edits to\n%s': 'Couldn\'t find an edit by %s\nin the last %s edits to\n%s',
	'eds': 'eds',
	'editors': 'editors',
	'editorListHint': 'List the users who have edited %s',
	'related': 'related',
	'relatedChanges': 'relatedChanges',
	'related changes': 'related changes',
	'RecentchangeslinkedHint': 'Show changes in articles related to %s',
	'editOld': 'editOld',          ///// edit old version, or revert
	'rv': 'rv',
	'revert': 'revert',
	'revertHint': 'Revert to %s',
	'defaultpopupRedlinkSummary': 'Removing link to empty page [[%s]] using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupFixDabsSummary': 'Disambiguate [[%s]] to [[%s]] using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupFixRedirsSummary': 'Redirect bypass from [[%s]] to [[%s]] using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupExtendedRevertSummary': 'Revert to revision dated %s by %s, oldid %s using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupRevertToPreviousSummary': 'Revert to the revision prior to revision %s using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupRevertSummary': 'Revert to revision %s using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupQueriedRevertToPreviousSummary': 'Revert to the revision prior to revision $1 dated $2 by $3 using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupQueriedRevertSummary': 'Revert to revision $1 dated $2 by $3 using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'defaultpopupRmDabLinkSummary': 'Remove link to dab page [[%s]] using [[:en:Wikipedia:Tools/Navigation_popups|popups]]',
	'Redirects': 'Redirects', // as in Redirects to ...
	' to ': ' to ',           // as in Redirects to ...
	'Bypass redirect': 'Bypass redirect',
	'Fix this redirect': 'Fix this redirect',
	'disambig': 'disambig',          ///// add or remove dab etc.
	'disambigHint': 'Disambiguate this link to [[%s]]',
	'Click to disambiguate this link to:': 'Click to disambiguate this link to:',
	'remove this link': 'remove this link',
	'remove all links to this page from this article': 'remove all links to this page from this article',
	'remove all links to this disambig page from this article': 'remove all links to this disambig page from this article',
	'mainlink': 'mainlink',          ///// links, watch, unwatch
	'wikiLink': 'wikiLink',
	'wikiLinks': 'wikiLinks',
	'links here': 'links here',
	'whatLinksHere': 'whatLinksHere',
	'what links here': 'what links here',
	'WhatlinkshereHint': 'List the pages that are hyperlinked to %s',
	'unwatchShort': 'un',
	'watchThingy': 'watch',  // called watchThingy because {}.watch is a function
	'watchHint': 'Add %s to my watchlist',
	'unwatchHint': 'Remove %s from my watchlist',
	'Only found one editor: %s made %s edits': 'Only found one editor: %s made %s edits',
	'%s seems to be the last editor to the page %s': '%s seems to be the last editor to the page %s',
	'rss': 'rss',
	/////////////////////////////////////
	// diff previews
	/////////////////////////////////////
	'Diff truncated for performance reasons': 'Diff truncated for performance reasons',
	'Old revision': 'Old revision',
	'New revision': 'New revision',
	'Something went wrong :-(': 'Something went wrong :-(',
	'Empty revision, maybe non-existent': 'Empty revision, maybe non-existent',
	'Unknown date': 'Unknown date',
	/////////////////////////////////////
	// other special previews
	/////////////////////////////////////
	'Empty category': 'Empty category',
	'Category members (%s shown)': 'Category members (%s shown)',
	'No image links found': 'No image links found',
	'File links': 'File links',
	'No image found': 'No image found',
	'Image from Commons': 'Image from Commons',
	'Description page': 'Description page',
	/////////////////////////////////////
	// user-related actions and info
	/////////////////////////////////////
	'user': 'user',               ///// user page, talk, email, space
	'user&nbsp;page': 'user&nbsp;page',
	'user talk': 'user talk',
	'edit user talk': 'edit user talk',
	'leave comment': 'leave comment',
	'email': 'email',
	'email user': 'email user',
	'EmailuserHint': 'Send an email to %s',
	'space': 'space', // short form for userSpace link
	'PrefixindexHint': 'Show pages in the userspace of %s',
	'count': 'count',             ///// contributions, log
	'edit counter': 'edit counter',
	'editCounterLinkHint': 'Count the contributions made by %s',
	'contribs': 'contribs',
	'contributions': 'contributions',
	'deletedContribs': 'deleted contributions',
	'DeletedcontributionsHint': 'List deleted edits made by %s',
	'ContributionsHint': 'List the contributions made by %s',
	'log': 'log',
	'user log': 'user log',
	'userLogHint': 'Show %s\'s user log',
	'arin': 'ARIN lookup',             ///// ARIN lookup, block user or IP
	'Look up %s in ARIN whois database': 'Look up %s in the ARIN whois database',
	'unblockShort': 'un',
	'block': 'block',
	'block user': 'block user',
	'IpblocklistHint': 'Unblock %s',
	'BlockipHint': 'Prevent %s from editing',
	'block log': 'block log',
	'blockLogHint': 'Show the block log for %s',
	'protectLogHint': 'Show the protection log for %s',
	'pageLogHint': 'Show the page log for %s',
	'deleteLogHint': 'Show the deletion log for %s',
	'Invalid %s %s': 'The option %s is invalid: %s',
	'No backlinks found': 'No backlinks found',
	' and more': ' and more',
	'undo': 'undo',
	'undoHint': 'undo this edit',
	'Download preview data': 'Download preview data',
	'Invalid or IP user': 'Invalid or IP user',
	'Not a registered username': 'Not a registered username',
	'BLOCKED': 'BLOCKED',
	' edits since: ': ' edits since: ',
	/////////////////////////////////////
	// Autoediting
	/////////////////////////////////////
	'Enter a non-empty edit summary or press cancel to abort': 'Enter a non-empty edit summary or press cancel to abort',
	'Failed to get revision information, please edit manually.\n\n': 'Failed to get revision information, please edit manually.\n\n',
	'The %s button has been automatically clicked. Please wait for the next page to load.': 'The %s button has been automatically clicked. Please wait for the next page to load.',
	'Could not find button %s. Please check the settings in your javascript file.': 'Could not find button %s. Please check the settings in your javascript file.',
	/////////////////////////////////////
	// Popups setup
	/////////////////////////////////////
	'Open full-size image': 'Open full-size image',
	'zxy': 'zxy'
};


function popupString(str) {
	if (typeof popupStrings != 'undefined' && popupStrings && popupStrings[str]) { return popupStrings[str]; }
	if (pg.string[str]) { return pg.string[str]; }
	return str;
}


function tprintf(str,subs) {
	if (typeof subs != typeof []) { subs = [subs]; }
	return simplePrintf(popupString(str), subs);
}

//</NOLITE>
// ENDFILE: strings.js


////////////////////////////////////////////////////////////////////
// Run things
////////////////////////////////////////////////////////////////////

hookEvent('load', setupPopups);
hookEvent('load', autoEdit);
