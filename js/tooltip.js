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

var jQuery = collection_jQuery;

function is_good_url(href) {
}

function is_tooltip_link() {
	var $this = $(this);
	if (
		this.onclick
		|| $this.parents('span.nopup').length > 0
		|| $this.is('.sortheader')
		|| $this.is('.nopopup')
	) {
		return false;
	}
	return is_good_href(this.href);

	if (!pg.re.basenames.test(h)) { return false; }
	if ( !pg.re.urlNoPopup.test(h) ) { return true;	}
	return (
		(pg.re.email.test(h) || pg.re.contribs.test(h) || pg.re.backlinks.test(h)) &&
		h.indexOf('&limit=') == -1 );
}

function connect() {
	$('a').filter(is_tooltip_link).each(function() {
		$this = $(this);



	});
}

jQuery(function() {
	connect();
});
 
})();

