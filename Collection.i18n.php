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

$messages = array();

$messages['en'] = array(
	'coll-desc' => '[[Special:Collection|Collect pages]], generate PDFs',
	'coll-collection' => 'Collection',
	'coll-collections' => 'Collections',
	'coll-portlet_title' => 'My Collection',
	'coll-add_page' => 'Add page',
	'coll-remove_page' => 'Remove page',
	'coll-add_category' => 'Add category',
	'coll-load_collection' => 'Load collection',
	'coll-show_collection' => 'Show collection',
	'coll-help_collections' => 'Collections help',
	'coll-empty' => 'empty',
	'coll-page' => 'page',
	'coll-pages' => 'pages',
	'coll-download_as_pdf' => 'Download as PDF',
	'coll-noscript_text' => '<noscript><h1>JavaScript is Required!</h1>
<strong>Your browser does not support JavaScript or JavaScript has been turned off.
This page will not work correctly, unless JavaScript is enabled.</strong></noscript>',
	'coll-intro_text' => "You can collect pages, generate and download a PDF file from page collections and save page collections for later use or to share them.

See [[Help:Collections]] for more information about collections.",
	'coll-pdftoobigcat' => 'The category contains more than %PARAM% pages, only the first %PARAM% pages can be added to your collection.
Do you want to add them?',
	'coll-my_collection' => 'My Collection',
	'coll-download_title' => 'Download Collection as PDF',
	'coll-download_text' => 'To download an automatically generated PDF file of your page collection, click the button.',
	'coll-download_pdf' => 'Download PDF',
	'coll-remove' => 'Remove',
	'coll-move_to_top' => 'Move to top',
	'coll-move_up' => 'Move up',
	'coll-move_down' => 'Move down',
	'coll-move_to_bottom' => 'Move to bottom',
	'coll-title' => 'Title:',
	'coll-subtitle' => 'Subtitle:',
	'coll-contents' => 'Contents',
	'coll-create_chapter' => 'Create new chapter',
	'coll-sort_alphabetically' => 'Sort pages alphabetically',
	'coll-clear_collection' => 'Clear collection',
	'coll-clear_confirm' => 'Do you really want to clear your collection?',
	'coll-rename' => 'Rename',
	'coll-new_chapter' => 'Enter name for new chapter',
	'coll-rename_chapter' => 'Enter new name for chapter',
	'coll-no_such_category' => 'No such category',
	'coll-mwpdf_error_title' => 'Could not generate PDF',
	'coll-mwpdf_error_msg' => 'An error occured during PDF generation.',
	'coll-mwzip_error_title' => 'Could not generate page collection',
	'coll-mwzip_error_msg' => 'An error occured during generation of page collection.',
	'coll-notitle_title' => 'Could not get page title',
	'coll-notitle_title' => 'The title of the page could not be determined.',
	'coll-post_failed_title' => 'POST request failed',
	'coll-post_failed_msg' => 'The POST request failed.',
	'coll-enter_title' => 'Enter title for collection:',
	'coll-error_reponse' => 'Error response from server',
	'coll-empty_collection' => 'Empty collection',
	'coll-revision' => 'Revision: %PARAM%',
	'coll-save_collection_title' => 'Save Collection',
	'coll-save_collection_text' => 'To save this collection for later use, choose a collection type and enter a page title:',
	'coll-login_to_save' => 'If you want to save collections for later use, please <a href="$href">log in or create an account</a>.',
	'coll-personal_collection_label' => 'Personal collection:',
	'coll-community_collection_label' => 'Community collection:',
	'coll-save_collection' => 'Save Collection',
	'coll-overwrite_title' => 'Page exists. Overwrite?',
	'coll-overwrite_text' => 'A page with the name $title already exists.
Do you want it to be replaced with your collection?',
	'coll-yes' => 'Yes',
	'coll-no' => 'No',
	'coll-load_overwrite_text' => 'You already have some pages in your collection.
Do want to overwrite your current collection, append the new content or cancel?',
	'coll-overwrite' => 'Overwrite',
	'coll-append' => 'Append',
	'coll-cancel' => 'Cancel',
	'coll-limit_exceeded_title' => 'Collection Too Big',
	'coll-limit_exceeded_text' => 'Your page collection is too big.
No more pages can be added.',
	'coll-generating_pdf_title' => 'Generating PDF',
	'coll-generating_pdf_text' => "'''Please wait while the PDF file is being generated.'''
This page should automatically refresh every few seconds, if this does not work, please press refresh button of your browser.",
	'coll-pdf_finished_title' => 'PDF Generation Complete',
	'coll-pdf_finished_text' => "The PDF file has been generated.
Click on the link below to download it to your computer.",
	'coll-nopdf_error_title' => 'No PDF file found',
	'coll-nopdf_error_text' => 'Could not find PDF file. Please re-generate the PDF file.',
	'coll-notfound_title' => 'Collection Not Found',
	'coll-notfound_text' => 'Could not find collection page.',
	'coll-return_to_collection' => '<p>Return to <a href="$referrer_link">$referrer_name</a></p>',
	'coll-pages_removed' => 'The following pages could not be rendered and were removed from the PDF file:',
);
