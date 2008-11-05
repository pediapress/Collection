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

(function() {

/******************************************************************************/

var requiredVersion = '1.0pre';

/******************************************************************************/

/** Shorcut for document.getElementByID()
 */
function $(id) {
	return document.getElementById(id);
};

/**
 * Attach event handler hookFunct to event of type hookName of element
 *
 * @param string or [] hookNames event type(s) (e.g. 'click' or ['laod', 'submit'])
 * @param function hookFunc event handler
 * @param Element element element to attach event handler to
 */
function hookEventOnElement(hookNames, hookFunct, element) {
	if (!element) {
		return;
	}
	if (typeof hookNames == 'string') {
		hookNames = [hookNames];
	}
	forEach(hookNames, function(i, hookName) {
		if (element.addEventListener) {
			element.addEventListener(hookName, hookFunct, false);
		} else if (element.attachEvent) {
			element.attachEvent("on" + hookName, hookFunct);
		}	
	});
}

/**
 * Call function fn with the index and the value of the elments of array.
 * Break the loop if fn returns false.
 *
 * @param Array array array to iterate over
 * @param function fn function to call for each element
 */
function forEach(array, fn) {
	for (var i = 0; i < array.length; i++) {
		if (fn(i, array[i]) == false) {
			break;
		}
	}
}

/**
 * Return text of element with given id. Optionally replace %PARAM% with value
 * of param. This allows usage of localization features in PHP from JavaScript.
 *
 * @param String id elment ID of elment containing text
 * @param String param optionally, a text to replace %PARAM% with
 * @return String text of elment with ID id
 */
function gettext(id, param/*=null*/) {
	var txt = document.getElementById(id).innerHTML;
	if (param) {
		txt = txt.replace(/%PARAM%/g, param);
	}
	return txt;
}

/**
 * Strip whitespace from beginning and end of a string
 */
function trim(s) {
	return s.replace(/^\s+|\s+$/g, '');
}

/******************************************************************************/

function getMWServeStatus() {
	sajax_request_type = "GET";
	try {
		sajax_do_call('wfAjaxGetMWServeStatus', [collection_id, writer], function(xhr) {
			var result;
			result = JSON.parse(xhr.responseText);
			if (result.state == 'progress' ) {
				$('renderingProgress').innerHTML = '' + result.status.progress;
				if (result.status.status) {
					var status = result.status.status;
					if (result.status.article) {
						status += gettext('renderingArticle', result.status.article);
					} else if (result.status.page) {
						status += gettext('renderingPage', result.status.page);
					}
					$('renderingStatus').innerHTML = gettext('renderingStatusText', status);
				}
				setTimeout(getMWServeStatus, 500);
			} else {
				window.location.reload(true);
			}
		});
	} catch (e) {
		alert('XMLHttpRequest failed: ' + e);
	}
}

/******************************************************************************/

function create_chapter() {
	var name = prompt(gettext('newChapterText'));
	if (name) {
		try {
			sajax_do_call('wfAjaxCollectionAddChapter', [name], function(xhr) {
				$('collectionListContainer').innerHTML = xhr.responseText;
			});
		} catch (e) {
			alert('XMLHttpRequest failed: ' + e);
		}
	}
	return false;
}

function rename_chapter(index, old_name) {
	var new_name = prompt(gettext('renameChapterText'), old_name);
	if (new_name) {
		try {
			sajax_do_call('wfAjaxCollectionRenameChapter', [index, new_name], function(xhr) {
				$('collectionListContainer').innerHTML = xhr.responseText;
			});
		} catch (e) {
			alert('XMLHttpRequest failed: ' + e);
		}
	}
}

function remove_item(index) {
	try {
		sajax_do_call('wfAjaxCollectionRemoveItem', [index], function(xhr) {
			$('collectionListContainer').innerHTML = xhr.responseText;
		});
	} catch (e) {
		alert('XMLHttpRequest failed: ' + e);
	}
	return false;
}

function move_item(index, delta) {
	try {
		sajax_do_call('wfAjaxCollectionMoveItem', [index, delta], function(xhr) {
			$('collectionListContainer').innerHTML = xhr.responseText;
		});
	} catch (e) {
		alert('XMLHttpRequest failed: ' + e);
	}
	return false;
}

function set_titles() {
	var title = $('titleInput').value;
	var subtitle = $('subtitleInput').value;
	try {
		sajax_do_call('wfAjaxCollectionSetTitles', [title, subtitle], function(xhr) {});
	} catch (e) {
		alert('XMLHttpRequest failed: ' + e);
	}
	return false;
}

function update_save_button() {
	var saveButton = $('saveButton');
	if (!saveButton) {
		return;
	}
	if ($('personalCollType').checked) {
		$('personalCollTitle').disabled = '';
		$('communityCollTitle').disabled = 'disabled';
		if (!trim($('personalCollTitle').value)) {
			saveButton.disabled = 'disabled';
			return;
		}
	} else if ($('communityCollType').checked) {
		$('communityCollTitle').disabled = '';
		$('personalCollTitle').disabled = 'disabled';
		if (!trim($('communityCollTitle').value)) {
			saveButton.disabled = 'disabled';
			return;
		}
	}
	saveButton.disabled = '';
}

addOnloadHook(function() {
	if (requiredVersion != wgCollectionVersion) {
		alert('ERROR: Version mismatch between JavaScript code and PHP code. Contact admin to fix installation of Collection extension for MediaWiki.');
		return;
	}
	if ($('collectionList')) {
	  	var pattern = new RegExp("\\bmakeVisible\\b");
		forEach(document.getElementsByTagName('a'), function(i, node) {
		  	if (pattern.test(node.className)) {
				node.style.display = 'inline';
	    	}
		});
		window.coll_create_chapter = create_chapter;
		window.coll_remove_item = remove_item;
		window.coll_move_item = move_item;
		window.coll_rename_chapter = rename_chapter;
		update_save_button();
		hookEventOnElement(['keyup', 'change'], update_save_button, $('personalCollTitle'));
		hookEventOnElement(['keyup', 'change'], update_save_button, $('communityCollTitle'));
		hookEventOnElement(['keyup', 'change'], update_save_button, $('personalCollType'));
		hookEventOnElement(['keyup', 'change'], update_save_button, $('communityCollType'));
		hookEventOnElement(['change'], set_titles, $('titleInput'));
		hookEventOnElement(['change'], set_titles, $('subtitleInput'));
	}
	if (typeof collection_rendering != 'undefined') {
		getMWServeStatus();
	}
});

})();
