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

(function() {

function refreshCreateABookBox(hint, oldid) {
  sajax_request_type = 'GET';
  sajax_do_call('wfAjaxCollectionGetCreateABookContent', [hint, oldid], function(xhr) {
		console.log('connten:', xhr.reponseText);
    document.getElementById('coll-create_a_book').innerHTML = xhr.responseText;
    if (hint && typeof wgCollectionAddRemoveState != 'undefined') {
      wgCollectionAddRemoveState = hint;
    }
    if (typeof refreshCollectionArticleList == 'function') {
      refreshCollectionArticleList();
    }
  });
}

function collectionCall(func, args) {
console.log('call');
  var hint = args.shift();
  sajax_request_type = 'POST';
  sajax_do_call('wfAjaxCollection' + func, args, function(xhr) {
		var oldid = null;
		if (args.length == 3) {
			oldid = args[2];
		}
		refreshCreateABookBox(hint, oldid);
  });
}

window.collectionCall = collectionCall; // public

})();
