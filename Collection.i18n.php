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
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

$messages = array();

$messages['en'] = array(
	'coll-desc'                       => '[[Special:Book|Create books]]',
	'coll-book_creator_intro'         => "<big>With the ''book creator'' you can create a book containing wiki pages of your choice. You can export the book in different formats (for example PDF or ODF) or order a printed copy.</big>",
	'coll-manage_your_book'           => 'Manage your book',
	'coll-book_creator_help'          => 'See [[{{MediaWiki:Coll-helppage}}|the help page about books]] for more information.',
	'coll-start_book_creator'         => 'Start book creator',
	'coll-book_creator_continue'      => 'Continue using book creator',
	'coll-book_creator_disable_text'  => "''Book creator'' will be disabled and the book you are working on will be removed.",
	'coll-book_creator_text_article'  => '{{MediaWiki:Coll-helppage}}/Book creator text',
	'coll-collection'                 => 'Book',
	'coll-collections'                => 'Books',
	'coll-exclusion_category_title'   => 'Exclude in print',
	'coll-template_blacklist_title'   => 'MediaWiki:PDF Template Blacklist', # do not translate or duplicate this message to other languages
	'coll-print_template_prefix'      => 'Print',
	'coll-print_template_pattern'     => '$1/Print',
	'coll-unknown_subpage_title'      => 'Unknown subpage',
	'coll-unknown_subpage_text'       => 'This subpage of [[Special:Book|Book]] does not exist',
	'coll-couldnotaddarticle_title'   => 'Could not add wiki page',
	'coll-couldnotaddarticle_msg'     => 'The wiki page could not be added.',
	'coll-couldnotremovearticle_title' => 'Could not remove wiki page',
	'coll-couldnotremovearticle_msg'  => 'The wiki page could not be removed.',
	'coll-noscript_text'              => '<h1>JavaScript is required!</h1>
<strong>Your browser does not support JavaScript or JavaScript has been turned off.
This page will not work correctly, unless JavaScript is enabled.</strong>',
	'coll-savedbook_template'         => 'saved_book',
	'coll-your_book'                  => 'Your book',
	'coll-download_title'             => 'Download',
	'coll-download_text'              => 'To download your book choose a format and click the button.',
	'coll-download_as_text'           => 'To download your book in $1 format click the button.',
	'coll-download'                   => 'Download',
	'coll-format_label'               => 'Format:',
	'coll-remove'                     => 'Remove',
	'coll-show'                       => 'Show',
	'coll-move_to_top'                => 'Move to top',
	'coll-move_up'                    => 'Move up',
	'coll-move_down'                  => 'Move down',
	'coll-move_to_bottom'             => 'Move to bottom',
	'coll-title'                      => 'Title:',
	'coll-subtitle'                   => 'Subtitle:',
	'coll-contents'                   => 'Contents',
	'coll-drag_and_drop'              => 'Use drag & drop to reorder wiki pages and chapters',
	'coll-create_chapter'             => 'Create chapter',
	'coll-sort_alphabetically'        => 'Sort alphabetically',
	'coll-rename'                     => 'Rename',
	'coll-new_chapter'                => 'Enter name for new chapter',
	'coll-rename_chapter'             => 'Enter new name for chapter',
	'coll-no_such_category'           => 'No such category',
	'coll-notitle_title'              => 'Could not get page title',
	'coll-notitle_title'              => 'The title of the page could not be determined.',
	'coll-post_failed_title'          => 'POST request failed',
	'coll-post_failed_msg'            => 'The POST request to $1 failed ($2).',
	'coll-mwserve_failed_title'       => 'Render server error',
	'coll-mwserve_failed_msg'         => 'An error occured on the render server: <nowiki>$1</nowiki>',
	'coll-error_reponse'              => 'Error response from server',
	'coll-empty_collection'           => 'Empty book',
	'coll-revision'                   => 'Revision: $1',
	'coll-save_collection_title'      => 'Save and share your book',
	'coll-save_collection_text'       => 'Choose a storage location for your book:',
	'coll-login_to_save'              => 'If you want to save books for later use, please [[Special:UserLogin|log in or create an account]].',
	'coll-personal_collection_label'  => 'Personal book:',
	'coll-community_collection_label' => 'Community book:',
	'coll-save_collection'            => 'Save book',
	'coll-save_category'              => 'All saved books are added to the category [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title'            => 'Page exists.
Overwrite?',
	'coll-overwrite_text'             => 'A page with the name [[:$1]] already exists.
Do you want it to be replaced with your book?',
	'coll-yes'                        => 'Yes',
	'coll-no'                         => 'No',
	'coll-load_overwrite_text'        => 'You already have some pages in your book.
Do you want to overwrite your current book, append the new content, or cancel loading this book?',
	'coll-overwrite'                  => 'Overwrite',
	'coll-append'                     => 'Append',
	'coll-cancel'                     => 'Cancel',
	'coll-update'                     => 'Update',
	'coll-limit_exceeded_title'       => 'Book too big',
	'coll-limit_exceeded_text'        => 'Your book is too big.
No more pages can be added.',
	'coll-rendering_title'            => 'Rendering',
	'coll-rendering_text'             => "<p><strong>Please wait while the document is being generated.</strong></p>

<p><strong>Progress:</strong> <span id=\"renderingProgress\">$1</span>% <span id=\"renderingStatus\">$2</span></p>

<p>This page should automatically refresh every few seconds.
If this does not work, please press your browser's refresh button.</p>",
	'coll-rendering_status'           => "<strong>Status:</strong> $1",
	'coll-rendering_article'          => '(wiki page: $1)',
	'coll-rendering_page'             => '(page: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rendering page info text',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rendering collection info text',
	'coll-rendering_finished_title'   => 'Rendering finished',
	'coll-rendering_finished_text'    => "<strong>The document file has been generated.</strong>
<strong>[$1 Download the file]</strong> to your computer.

Notes:
* Not satisfied with the output? See [[{{MediaWiki:Coll-helppage}}|the help page about books]] for possibilities to improve it.",
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rendering page info text',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rendering collection info text',
	'coll-notfound_title'             => 'Book not found',
	'coll-notfound_text'              => 'Could not find book page.',
	'coll-download_notfound_title'    => 'File not found',
	'coll-download_notfound_text'     => 'The file you are trying to download does not exist:
Maybe it has been deleted and needs to be regenerated.',
	'coll-download_failed_title'      => 'Error during download',
	'coll-download_failed_text'       => 'There was an error when downloading the file: $1',
	'coll-is_cached'                  => '<ul><li>A cached version of the document has been found, so no rendering was necessary.
<a href="$1">Force re-rendering.</a></li></ul>',
	'coll-excluded-templates'         => '* Templates in category [[:Category:$1|$1]] have been excluded.',
	'coll-blacklisted-templates'      => '* Templates on blacklist [[:$1]] have been excluded.',
	'coll-return_to_collection'       => '<p>Return to <a href="$1">$2</a></p>',
	'coll-book_title'                 => 'Order as a printed book',
	'coll-book_text'                  => 'Get a printed book from our print-on-demand partner.',
	'coll-order_from_pp'              => 'Preview with $1',
	'coll-about_pp'                   => 'About $1',
	'coll-invalid_podpartner_title'   => 'Invalid POD partner',
	'coll-invalid_podpartner_msg'     => 'The supplied POD partner is invalid.
Please contact your MediaWiki administrator.',
	'coll-license'                    => 'License',
	'coll-license_url'                => '-',
	'coll-return_to'                  => "Return to [[:$1]]",
	'coll-more_info'                  => 'Show more information',
	'coll-hide_info'                  => 'Hide information',
	'coll-order_info_article'         => '{{MediaWiki:Coll-helppage}}/PediaPress order information',
	'coll-suggest_title'              => 'Suggested pages for your book',
	'coll-suggest_intro_text'         => 'Suggestions are based on the current set of wiki pages in your book.
The list is updated whenever you click on the add or remove buttons.',
	'coll-suggested_articles'         => 'Suggestions',
	'coll-suggest_reset_bans'         => 'reset',
	'coll-suggest_reset_bans_tooltip' => 'Show previously removed suggestions',
	'coll-suggest_add_selected'       => 'Add selected pages',
	'coll-suggest_ban_selected'       => 'Remove selected pages',
	'coll-suggest_your_book'          => 'Your book',
	'coll-suggest_show'               => 'show',
	'coll-suggest_ban_tooltip'        => 'Remove this page from the list of suggestions',
	'coll-suggest_article_ban'        => "Page <strong>$1</strong> has been removed from the suggestions ($2).",
	'coll-suggest_article_add'        => "Page <strong>$1</strong> has been added to your book ($2).",
	'coll-suggest_article_remove'     => "Page <strong>$1</strong> has been removed from your book ($2).",
	'coll-suggest_undo_tooltip'       => 'Undo this action',
	'coll-suggest_undo'               => 'undo',
	'coll-load_local_book'            => 'Click OK to continue with your book %TITLE% which contains %NUMPAGES% wiki pages. Click Cancel to delete it and start with an empty book.',

	'right-collectionsaveasuserpage'  => 'Save books as user page',
	'right-collectionsaveascommunitypage' => 'Save books as community page',
);

/** Message documentation (Message documentation)
 * @author Aleator
 * @author Aotake
 * @author Bennylin
 * @author Darth Kule
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Jon Harald Søby
 * @author Lloffiwr
 * @author Mormegil
 * @author Purodha
 * @author Rancher
 * @author Raymond
 * @author Rex
 * @author Siebrand
 * @author Wmr89502270
 */
$messages['qqq'] = array(
	'coll-desc' => '{{desc}}',
	'coll-manage_your_book' => 'Used as a title.',
	'coll-collection' => '{{Identical|Book}}',
	'coll-collections' => '{{Identical|Book}}',
	'coll-exclusion_category_title' => 'The message text is the name of a category.',
	'coll-print_template_prefix' => 'Prefix added to the templates name if you want to get a special for-print version of the template. So in a page instead of Template:Foo Template:PrintFoo is used if it exists.
{{Identical|Print}}',
	'coll-print_template_pattern' => 'Use print templates being subpages of regular templates.

$1 is a placeholder and will be replaced by content during the rendering process.',
	'coll-savedbook_template' => 'This is the name of a template that is inserted at the top of pages for saved collections ([[wikipedia:Template:Saved_book|example]]).',
	'coll-your_book' => '{{Identical|Books}}',
	'coll-download_title' => '{{Identical|Download}}',
	'coll-download' => '{{Identical|Download}}',
	'coll-format_label' => '{{Identical|Format}}',
	'coll-remove' => '{{Identical|Remove}}',
	'coll-show' => '{{Identical|Show}}',
	'coll-title' => '{{Identical|Title}}',
	'coll-contents' => '{{Identical|Contents}}',
	'coll-post_failed_msg' => '* $1 is a URL.
* $2 is (probably) an explanation of the error.',
	'coll-empty_collection' => 'Translate "empty" as in "an empty book" (adj), not "empty the book" (verb)',
	'coll-revision' => '{{Identical|Revision}}',
	'coll-save_collection' => '',
	'coll-save_category' => 'Do not change <nowiki>{{MediaWiki:Coll-bookscategory}}</nowiki>. The link and category name should be in the content language.',
	'coll-yes' => '{{Identical|Yes}}

This is a label on a submit button. The related question is in the message {{msg-mw|Coll-overwrite_text}}.',
	'coll-no' => '{{Identical|No}}

This is a label on a submit button. The related question is in the message {{msg-mw|Coll-overwrite_text}}.',
	'coll-append' => '{{Identical|Append}}',
	'coll-cancel' => '{{Identical|Cancel}}',
	'coll-update' => '{{Identical|Update}}',
	'coll-rendering_text' => 'This message appears after the download button has been clicked in the download box of the special page "Book", while the software is generating the document.

The variables are:
* $1 - a percentage
* $2 - the message {{msg-mw|Coll-rendering_status}}',
	'coll-rendering_status' => 'Part of the message {{msg-mw|Coll-rendering_text|notext=Yes}}.

The variable $1 is another message string, as follows:
*For a book in PDF format:
**first the message in the Mwlib extension with the text "layouting" followed by the message {{msg-mw|Coll-rendering_article}}
**then the message in the Mwlib extension with the text "rendering"
*For a book in OpenDocument format:
**first the text "parsing" (source message not yet identified)
**then the text "preprocessing" (source message not yet identified)
**then the text "rendering" (source message not yet identified)

{{Identical|Status}}',
	'coll-rendering_finished_text' => 'This is the first part of the text of the special page "Rendering finished", which appears after clicking \'download book\' and the book has been generated.  

$1 is not text; it is the http:// address of the book.',
	'coll-excluded-templates' => "Part of the text of the special page 'Rendering finished' which appears after clicking on 'Download' and a book has been generated.",
	'coll-blacklisted-templates' => "Part of the text of the special page 'Rendering finished' which appears after clicking on 'Download' and a book has been generated.",
	'coll-return_to_collection' => 'Part of the text of the special page \'Rendering finished\' which appears after clicking on \'Download\' and a book has been generated. <nowiki><a href="$1">$2</a></nowiki> does not need translating. It is a wiki link back to the "Special:Book" page.',
	'coll-order_from_pp' => '* $1 is the name of a print provider (a company name)',
	'coll-about_pp' => '{{Identical|About}}',
	'coll-invalid_podpartner_title' => 'POD means print-on-demand',
	'coll-invalid_podpartner_msg' => 'POD means print-on-demand.',
	'coll-license' => '{{Identical|License}}',
	'coll-return_to' => '{{Identical|Return to $1}}',
	'coll-order_info_article' => '{{doc-important|Do not translate "<nowiki>{{MediaWiki:Coll-helppage}}/</nowiki>"}}
Sub page of {{msg-mw|coll-helppage}} ({{int:coll-helppage}})

The contents of this page appear in the "Order as a printed book" box on <nowiki>[[Special:Book]]</nowiki> when a user clicks on "Show more information" (i.e. it\'s hidden by default). The page contains general information on how to order a book from PediaPress. This can be seen e.g. on en.wp, when logged-in. The title of the sub-page "PediaPress order information" does not appear in the box, only the contents of the sub-page.',
	'coll-suggest_reset_bans' => '{{Identical|Reset}}',
	'coll-suggest_your_book' => '{{Identical|Book}}',
	'coll-suggest_show' => '{{Identical|Show}}',
	'coll-suggest_article_add' => 'Message shown when the user chose to add a suggested page to his/her book.
* <tt>$1</tt> is the title of the added page.
* <tt>$2</tt> is a link captioned {{msg-mw|coll-suggest_undo}}',
	'coll-suggest_undo_tooltip' => '{{Identical|Undo}}',
	'coll-suggest_undo' => '{{Identical|Undo}}',
	'coll-load_local_book' => 'PLURAL support not yet available for collection extension. See the discussion on [[Thread:Support/PLURAL support for Coll-load local book/reply]].

Do not translate <code>OK</code> and <code>Cancel</code>, they are part of a local popup on the client machine which is not localized at the moment.',
	'right-collectionsaveasuserpage' => '{{doc-right|collectionsaveasuserpage}}',
	'right-collectionsaveascommunitypage' => '{{doc-right|collectionsaveascommunitypage}}',
);

/** Faeag Rotuma (Faeag Rotuma)
 * @author Jose77
 */
$messages['rtm'] = array(
	'coll-cancel' => "Mao'ạki",
	'coll-about_pp' => 'Hün se $1',
);

/** Karelian (Karjala)
 * @author Flrn
 */
$messages['krl'] = array(
	'coll-cancel' => 'Keskevytä',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'coll-cancel' => 'Tiaki',
);

/** Goanese Konkani (Latin) (कोंकणी/Konknni  (Latin))
 * @author Deepak D'Souza
 */
$messages['gom-latn'] = array(
	'coll-return_to' => '[[:$1]] ak patim vos',
);

/** Abkhazian (Аҧсуа)
 * @author Temuri rajavi
 */
$messages['ab'] = array(
	'coll-rename' => 'Ахьӡ аҧсахра',
);

/** Afrikaans (Afrikaans)
 * @author Anrie
 * @author Arnobarnard
 * @author Naudefj
 * @author SPQRobin
 */
$messages['af'] = array(
	'coll-desc' => '[[Special:Book|Skep boeke]]',
	'coll-book_creator_intro' => "<big>Met die ''boekmaker'' kan u 'n boek saamstel met wikiblaaie van u keuse. U kan die boek in verskillende formate eksporteer (byvoorbeeld PDF of ODF) of 'n gedrukte kopie bestel.</big>",
	'coll-manage_your_book' => 'Beheer u boek',
	'coll-book_creator_help' => 'Sien [[{{MediaWiki:Coll-helppage}}|die hulpblad oor boeke]] vir meer inligting.',
	'coll-start_book_creator' => 'Begin die boekmaker',
	'coll-book_creator_continue' => 'Gaan voort om die boekmaker te gebruik',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Boekmaker-teks',
	'coll-collection' => 'Boek',
	'coll-collections' => 'Boeke',
	'coll-exclusion_category_title' => 'Laat weg met afdrukke',
	'coll-print_template_prefix' => 'Afdruk',
	'coll-print_template_pattern' => '$1/Druk',
	'coll-unknown_subpage_title' => 'Onbekende subbladsy',
	'coll-unknown_subpage_text' => 'Hierdie subbladsy van [[Special:Book|Boek]] bestaan nie.',
	'coll-couldnotaddarticle_title' => 'Die wikiblad kon nie bygevoeg word nie',
	'coll-couldnotaddarticle_msg' => 'Die wikiblad kon nie bygevoeg word nie.',
	'coll-couldnotremovearticle_title' => 'Kon nie wikibladsy verwyder nie',
	'coll-couldnotremovearticle_msg' => 'Die wikibladsy kon nie verwyder word nie.',
	'coll-noscript_text' => '<h1>JavaScript word benodig!</h1>
<strong>U blaaier ondersteun nie JavaScript of JavaScript is uitgeskakel.
Hierdie bladsy sal nie korrek werk tensy JavaScript aangeskakel word nie.</strong>',
	'coll-savedbook_template' => 'gestoorde_boek',
	'coll-your_book' => 'U boek',
	'coll-download_title' => 'Aflaai',
	'coll-download' => 'Aflaai',
	'coll-format_label' => 'Formaat:',
	'coll-remove' => 'Skrap',
	'coll-show' => 'Wys',
	'coll-move_to_top' => 'Skuif tot bo',
	'coll-move_up' => 'Skuif op',
	'coll-move_down' => 'Skuif af',
	'coll-move_to_bottom' => 'Skuif tot onder',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Subtitel:',
	'coll-contents' => 'Inhoud',
	'coll-create_chapter' => 'Skep hoofstuk',
	'coll-sort_alphabetically' => 'Sorteer alfabeties',
	'coll-rename' => 'Hernoem',
	'coll-new_chapter' => 'Voer naam vir nuwe hoofstuk in',
	'coll-rename_chapter' => 'Voer nuwe naam vir hoofstuk in',
	'coll-no_such_category' => "Geen so 'n kategorie",
	'coll-notitle_title' => 'Die titel van die bladsy kon nie bepaal word nie.',
	'coll-post_failed_title' => 'POST-versoek het gefaal',
	'coll-post_failed_msg' => 'Die POST-versoek na $1 het misluk ($2).',
	'coll-error_reponse' => "Die bediener het 'n fout teruggestuur",
	'coll-empty_collection' => 'Leë boek',
	'coll-revision' => 'Weergawe: $1',
	'coll-save_collection_title' => 'Stoor en deel u boek',
	'coll-personal_collection_label' => 'Persoonlike boek:',
	'coll-community_collection_label' => 'Gemeenskaplike boek:',
	'coll-save_collection' => 'Stoor boek',
	'coll-overwrite_title' => 'Die bladsy bestaan al.
Oorskryf?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nee',
	'coll-overwrite' => 'Oorskryf',
	'coll-append' => 'Byvoeg',
	'coll-cancel' => 'Kanselleer',
	'coll-update' => 'Opdateer',
	'coll-limit_exceeded_title' => 'Boek is te groot',
	'coll-limit_exceeded_text' => 'U boek is te groot.
Daar kan nie meer bladsye byvoeg nie.',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikibladsy: $1)',
	'coll-rendering_page' => '(bladsy: $1)',
	'coll-notfound_title' => 'Boek nie gevind nie',
	'coll-notfound_text' => 'Kon nie die boekbladsy vind nie.',
	'coll-download_notfound_title' => 'Die lêer is nie gevind nie',
	'coll-download_failed_title' => 'Fout tydens aflaai',
	'coll-download_failed_text' => "Daar was 'n fout met die aflaai van lêer: $1",
	'coll-excluded-templates' => '* Sjablone in die kategorie [[:Category:$1|$1]] is uitgesluit.',
	'coll-blacklisted-templates' => '* Sjablone op die swartlys [[:$1]] is uitgesluit.',
	'coll-return_to_collection' => '<p>Keer terug na <a href="$1">$2</a></p>',
	'coll-book_title' => "Bestel as 'n gedrukte boek",
	'coll-order_from_pp' => 'Voorskou met $1',
	'coll-about_pp' => 'Aangaande $1',
	'coll-invalid_podpartner_title' => 'Ongeldige POD-vennoot (print on demand partner)',
	'coll-license' => 'Lisensie',
	'coll-return_to' => 'Terug na [[:$1]]',
	'coll-more_info' => 'Wys meer inligting',
	'coll-hide_info' => 'Versteek inligting',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Bestelinligting PediaPress',
	'coll-suggested_articles' => 'Voorstelle',
	'coll-suggest_reset_bans' => 'herstel',
	'coll-suggest_reset_bans_tooltip' => 'Wys voorheen verwyder voorstelle',
	'coll-suggest_add_selected' => 'Voeg geselekteerde bladsye by',
	'coll-suggest_ban_selected' => 'Verwyder geselekteerde bladsye',
	'coll-suggest_your_book' => 'U boek',
	'coll-suggest_show' => 'wys',
	'coll-suggest_ban_tooltip' => 'Verwyder hierdie bladsy uit die lys van voorstelle',
	'coll-suggest_article_ban' => 'Bladsy <strong>$1</strong> is verwyder uit die voorstelle ($2).',
	'coll-suggest_article_add' => 'Bladsy <strong>$1</strong> is by u boek ($2) bygevoeg.',
	'coll-suggest_article_remove' => 'Bladsy <strong>$1</strong> is uit u boek ($2) verwyder.',
	'coll-suggest_undo_tooltip' => 'Maak die aksie ongedaan',
	'coll-suggest_undo' => 'maak ongedaan',
	'right-collectionsaveasuserpage' => 'Stoor boeke as gebruikerbladsy',
	'right-collectionsaveascommunitypage' => 'Stoor boeke as gemeenskapsbladsy',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'coll-unknown_subpage_title' => 'subpage Panjohur',
	'coll-unknown_subpage_text' => 'Kjo subpage e [[Special:Book|Libri]] nuk ekziston',
	'coll-couldnotaddarticle_title' => 'Nuk mund të shtoni faqe wiki',
	'coll-couldnotaddarticle_msg' => 'Faqe wiki nuk mund të shtohet.',
	'coll-couldnotremovearticle_title' => 'Nuk mund të hiqni faqe wiki',
	'coll-couldnotremovearticle_msg' => 'Faqe wiki nuk mund të hiqet.',
	'coll-noscript_text' => '<h1> Nevojitet JavaScript! </h1> <strong>Shfletuesi juaj nuk përmban JavaScript-in apo JavaScript ka qenë i fikur. Kjo faqe nuk do të funksionoj në rregull, përveç nëse JavaScript është aktivizuar.</strong>',
	'coll-savedbook_template' => 'saved_book',
	'coll-your_book' => 'libri juaj',
	'coll-download_title' => 'Shkarko',
	'coll-download_text' => 'Për të shkarkuar librin tuaj të zgjidhni një format dhe klikoni butonin.',
	'coll-download_as_text' => 'Për të shkarkuar librin tuaj në formatin $1  klikoni butonin.',
	'coll-download' => 'Shkarko',
	'coll-format_label' => 'Formati:',
	'coll-remove' => 'Heq',
	'coll-show' => 'Tregoj',
	'coll-move_to_top' => 'Dërgo në krye',
	'coll-move_up' => 'Ngre',
	'coll-move_down' => 'Leviz poshtë',
	'coll-move_to_bottom' => 'Dërgo në fund',
	'coll-title' => 'Titulli:',
	'coll-subtitle' => 'Subtitle:',
	'coll-contents' => 'Përmbajtje',
	'coll-drag_and_drop' => 'Përdorimi drag & drop për Reorder faqet wiki dhe kapituj',
	'coll-create_chapter' => 'kapitull Krijo',
	'coll-sort_alphabetically' => 'Renditur alfabetike',
	'coll-rename' => 'Riemërtoj',
	'coll-new_chapter' => 'Fusni emrin e kapitull të ri',
	'coll-rename_chapter' => 'Shkruani emër të ri për kapitullin',
	'coll-no_such_category' => 'Nuk ka kategori të tilla',
	'coll-notitle_title' => 'Titulli i faqes nuk mund të përcaktohet.',
	'coll-post_failed_title' => 'kërkesë PAS dështuar',
	'coll-post_failed_msg' => 'Kërkesa PAS tek $1 dështoi ($2).',
	'coll-mwserve_failed_title' => 'gabim Render server',
	'coll-mwserve_failed_msg' => 'Ka ndodhur një gabim në server të bëjnë: <nowiki> $1 </nowiki>',
	'coll-error_reponse' => 'Gabim përgjigje nga serveri',
	'coll-empty_collection' => 'Libri Bosh',
	'coll-revision' => 'Revision: $1',
	'coll-save_collection_title' => 'Save and share librin tuaj',
	'coll-save_collection_text' => 'Zgjidhni një vend depozitimi për librin tuaj:',
	'coll-login_to_save' => 'Nëse dëshironi të kurseni libra për përdorim më vonë, ju lutem [[Special:UserLogin|të hyni ose të hapni një llogari]].',
	'coll-personal_collection_label' => 'libër Personale:',
	'coll-community_collection_label' => 'Komuniteti libër:',
	'coll-save_collection' => 'Libri Ruaj',
	'coll-save_category' => 'Të gjitha librat e ruajtur janë shtuar në [[:Category:{{MediaWiki:Coll-bookscategory }}|{{MediaWiki:Coll-bookscategory}}]]',
	'coll-overwrite_title' => 'Page ekziston. Mbishkruaj?',
	'coll-overwrite_text' => 'Një faqe me të emri [[:$1]] ekziston.
A ju dëshironi që ajo të zëvendësohet me librin tuaj?',
	'coll-yes' => 'Po',
	'coll-no' => 'Jo',
	'coll-load_overwrite_text' => 'Ju tashmë keni disa faqe në librin tuaj. A doni ta prishësh aktuale librin tuaj, append përmbajtje të re, apo anulimin e ngarkimit këtë libër?',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'coll-title' => 'አርዕስት፡',
	'coll-yes' => 'አዎ',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'coll-yes' => 'Sí',
	'coll-no' => 'No',
	'coll-cancel' => 'Cancelar',
	'coll-suggest_undo_tooltip' => 'Desfer ista acción',
	'coll-suggest_undo' => 'desfer',
);

/** Arabic (العربية)
 * @author Antime
 * @author Ciphers
 * @author Meno25
 * @author Orango
 * @author OsamaK
 * @author Prof.Sherif
 */
$messages['ar'] = array(
	'coll-desc' => '[[Special:Book|ينشيء كتبا]]',
	'coll-book_creator_intro' => "<big>تستطيع مع ''منشئ الكتب'' إنشاء كتاب يتكون من صفحات ويكي بحسب اختيارك. تستطيع تصدير كتابك بأنساق مختلفة (PDF أو ODF على سبيل المثال) أو طلب نسخة مطبوعة.</big>",
	'coll-manage_your_book' => 'إدارة كتابك',
	'coll-book_creator_help' => 'انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة المتعلقة بالكتب]] للمزيد من المعلومات.',
	'coll-start_book_creator' => 'ابدأ منشئ الكتب',
	'coll-book_creator_continue' => 'واصل استخدام منشئ الكتب',
	'coll-book_creator_disable_text' => "''منشئ الكتب'' سيتم تعطيله والكتاب الذي تعمل عليه ستتم إزالته.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/نص وضع الكتب',
	'coll-collection' => 'كتاب',
	'coll-collections' => 'كتب',
	'coll-exclusion_category_title' => 'استثن في الطباعة',
	'coll-print_template_prefix' => 'طباعة',
	'coll-print_template_pattern' => '$1/طبع',
	'coll-unknown_subpage_title' => 'صفحة فرعية غير معروفة',
	'coll-unknown_subpage_text' => 'هذه الصفحة الفرعية [[Special:Book|للكتاب]] غير موجودة',
	'coll-couldnotaddarticle_title' => 'لم يمكن إضافة صفحة الويكي',
	'coll-couldnotaddarticle_msg' => 'صفحة الويكي لم يمكن إضافتها.',
	'coll-couldnotremovearticle_title' => 'لم يمكن إزالة صفحة الويكي',
	'coll-couldnotremovearticle_msg' => 'صفحة الويكي لم يمكن إزالتها.',
	'coll-noscript_text' => '<h1>الجافاسكريبت مطلوب!</h1>
<strong>متصفحك لا يدعم جافاسكريبت جافاسكريبت أو الجافاسكريبت تم تعطيلها.
هذه الصفحة لن تعمل بطريقة صحيحة، إلا إذا تم تفعيل الجافاسكريبت.</strong>',
	'coll-savedbook_template' => 'كتاب_محفوظ',
	'coll-your_book' => 'كتابك',
	'coll-download_title' => 'تنزيل',
	'coll-download_text' => 'لتنزيل كتابك اختر نسقا واضغط الزر.',
	'coll-download_as_text' => 'لتنزيل كتابك بصيغة $1 اضغط الزر.',
	'coll-download' => 'نزّل',
	'coll-format_label' => 'الصيغة:',
	'coll-remove' => 'إزالة',
	'coll-show' => 'عرض',
	'coll-move_to_top' => 'حرك إلى الأعلى',
	'coll-move_up' => 'حرك إلى الأعلى',
	'coll-move_down' => 'حرك إلى الأسفل قليلا',
	'coll-move_to_bottom' => 'حرك إلى الأسفل',
	'coll-title' => 'العنوان:',
	'coll-subtitle' => 'العنوان الفرعي:',
	'coll-contents' => 'محتويات',
	'coll-drag_and_drop' => 'استخدم السحب والإلقاء لطلب صفحات وفصول ويكي',
	'coll-create_chapter' => 'إنشاء الفصل',
	'coll-sort_alphabetically' => 'رتب أبجديا',
	'coll-rename' => 'إعادة تسمية',
	'coll-new_chapter' => 'أدخل الاسم للفرع الجديد',
	'coll-rename_chapter' => 'أدخل الاسم الجديد للفرع',
	'coll-no_such_category' => 'لا تصنيف كهذا',
	'coll-notitle_title' => 'عنوان الصفحة لم يمكن تحديده.',
	'coll-post_failed_title' => 'طلب POST فشل',
	'coll-post_failed_msg' => 'طلب POST إلى $1 فشل ($2).',
	'coll-mwserve_failed_title' => 'خطأ عرض من الخادم',
	'coll-mwserve_failed_msg' => 'حدث خطأ في خادم العرض: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'خطأ استجابة من الخادم',
	'coll-empty_collection' => 'كتاب فارغ',
	'coll-revision' => 'النسخة: $1',
	'coll-save_collection_title' => 'احفظ وشارك كتابك',
	'coll-save_collection_text' => 'اختر موقعا:',
	'coll-login_to_save' => 'لو كنت تريد حفظ الكتب من أجل الاستخدام فيما بعد، من فضلك [[Special:UserLogin|قم بتسجيل الدخول أو إنشاء حساب]].',
	'coll-personal_collection_label' => 'كتاب شخصي:',
	'coll-community_collection_label' => 'كتاب مجتمع:',
	'coll-save_collection' => 'احفظ الكتاب',
	'coll-save_category' => 'كل الكتب المحفوظة تتم إضافتها إلى التصنيف [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'الصفحة موجودة.
كتابة عليها؟',
	'coll-overwrite_text' => 'صفحة بنفس الاسم [[:$1]] موجودة بالفعل.
هل تريد استبدالها بمجموعتك؟',
	'coll-yes' => 'نعم',
	'coll-no' => 'لا',
	'coll-load_overwrite_text' => 'لديك بالفعل عدة صفحات في كتابك.
هل تريد الكتابة على كتابك الحالي، إضافة المحتوى الجديد أو إلغاء تحميل هذا الكتاب؟',
	'coll-overwrite' => 'كتابة عليها',
	'coll-append' => 'انتظار',
	'coll-cancel' => 'ألغِ',
	'coll-update' => 'حدّث',
	'coll-limit_exceeded_title' => 'الكتاب كبير جدا',
	'coll-limit_exceeded_text' => 'كتابك كبير جدا.
لا مزيد من الصفحات يمكن إضافتها.',
	'coll-rendering_title' => 'عرض',
	'coll-rendering_text' => '<p><strong>من فضلك انتظر أثناء توليد الوثيقة.</strong></p>

<p><strong>التقدم:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>هذه الصفحة ينبغي أن يتم تحديثها كل عدة ثوان.
لو أن هذا لا يعمل، من فضلك اضغط زر التحديث في متصفحك.</p>',
	'coll-rendering_status' => '<strong>الحالة:</strong> $1',
	'coll-rendering_article' => '(المقالة: $1)',
	'coll-rendering_page' => '(الصفحة: $1)',
	'coll-rendering_finished_title' => 'العرض انتهى',
	'coll-rendering_finished_text' => '<strong>ملف الوثيقة تم توليده.</strong>
<strong>[$1 نزل الملف]</strong> إلى حاسوبك.

ملاحظات:
* غير راض عن الخرج؟ انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] للاحتمالات لتحسينه.',
	'coll-notfound_title' => 'الكتاب غير موجود',
	'coll-notfound_text' => 'لم يمكن العثور على صفحة الكتاب.',
	'coll-download_notfound_title' => 'الملف لم يتم إيجاده',
	'coll-download_notfound_text' => 'الملف الذي تحاول تنزيله غير موجود: ربما يكون قد مسح و يحتاج إلى إعادة توليد.',
	'coll-download_failed_title' => 'خطأ أثناء التنزيل',
	'coll-download_failed_text' => 'وُجد خطأ أثناء تنزيل الملف: $1',
	'coll-is_cached' => '<ul><li>نسخة مخزنة من الوثيقة تم العثور عليها، لذا لا تحديث كان ضروريا. <a href="$1">إجبار على إعادة التحديث.</a></li></ul>',
	'coll-excluded-templates' => '* القوالب في التصنيف [[:Category:$1|$1]] تم إقصاؤها.',
	'coll-blacklisted-templates' => '* القوالب في القائمة السوداء [[:$1]] تم إقصاؤها.',
	'coll-return_to_collection' => '<p>ارجع إلى <a href="$1">$2</a></p>',
	'coll-book_title' => 'طلب ككتاب مطبوع',
	'coll-book_text' => 'احصل على كتاب مطبوع من شريكنا للطباعة عند الطلب:',
	'coll-order_from_pp' => 'معاينة مع $1',
	'coll-about_pp' => 'حول $1',
	'coll-invalid_podpartner_title' => 'شريك POD غير صحيح',
	'coll-invalid_podpartner_msg' => 'شريك POD الموفر غير صحيح.
من فضلك اتصل بإداري ميدياويكي الخاص بك.',
	'coll-license' => 'ترخيص',
	'coll-return_to' => 'رجوع إلى [[:$1]]',
	'coll-more_info' => 'عرض المزيد من المعلومات',
	'coll-hide_info' => 'إخفاء المعلومات',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/معلومات الطلب من بيديابرس',
	'coll-suggest_title' => 'صفحات كتابك المقترحة',
	'coll-suggest_intro_text' => 'المقترحات مبنية على صفحات كتابك الحالية.
سوف تُحدّث هذه القائمة كلما نقرت زر الإضافة أو الإزالة.',
	'coll-suggested_articles' => 'اقتراحات',
	'coll-suggest_reset_bans' => 'إعادة ضبط',
	'coll-suggest_reset_bans_tooltip' => 'اعرض الاقتراحات المزالة سابقا',
	'coll-suggest_add_selected' => 'أضف الصفحات المختارة',
	'coll-suggest_ban_selected' => 'أزل الصفحات المختارة',
	'coll-suggest_your_book' => 'كتابك',
	'coll-suggest_show' => 'عرض',
	'coll-suggest_ban_tooltip' => 'أزل هذه الصفحة من قائمة المقترحات',
	'coll-suggest_article_ban' => 'الصفحة <strong>$1</strong> تمت إزالتها من الاقتراحات ($2).',
	'coll-suggest_article_add' => 'الصفحة <strong>$1</strong> تمت إضافتها إلى كتابك ($2).',
	'coll-suggest_article_remove' => 'الصفحة <strong>$1</strong> تمت إزالتها من كتابك ($2).',
	'coll-suggest_undo_tooltip' => 'استرجع هذه الإجراء',
	'coll-suggest_undo' => 'ارجع',
	'right-collectionsaveasuserpage' => 'احفظ الكتب كصفحة مستخدم',
	'right-collectionsaveascommunitypage' => 'احفظ الكتب كصفحة مجتمع',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author 334a
 * @author Basharh
 */
$messages['arc'] = array(
	'coll-collection' => 'ܟܬܒܐ',
	'coll-collections' => 'ܟܬܒ̈ܐ',
	'coll-print_template_prefix' => 'ܛܒܘܥ',
	'coll-print_template_pattern' => '$1/ܛܒܘܥ',
	'coll-savedbook_template' => 'ܟܬܒܐ_ܠܒܝܟܐ',
	'coll-your_book' => 'ܟܬܒܐ ܕܝܠܟ',
	'coll-download' => 'ܐܚܬ:',
	'coll-show' => 'ܚܘܝ',
	'coll-move_to_top' => 'ܫܢܝ ܠܥܠ ܡܢ ܟܠ',
	'coll-move_up' => 'ܫܢܝ ܠܥܠ',
	'coll-move_down' => 'ܫܢܝ ܠܬܚܬ',
	'coll-move_to_bottom' => 'ܫܢܝ ܠܬܚܬ ܡܢ ܟܠ',
	'coll-title' => 'ܟܘܢܝܐ:',
	'coll-subtitle' => 'ܟܘܢܝܐ ܦܪܥܝܐ:',
	'coll-contents' => 'ܚܒܝܫܬ̈ܐ',
	'coll-empty_collection' => 'ܟܬܒܐ ܣܦܝܩܐ',
	'coll-save_collection' => 'ܠܒܘܟ ܟܬܒܐ',
	'coll-yes' => 'ܐܝܢ',
	'coll-no' => 'ܠܐ',
	'coll-cancel' => 'ܒܛܘܠ',
	'coll-update' => 'ܚܕܬ',
	'coll-rendering_status' => '<strong>ܐܝܟܢܝܘܬܐ:</strong> $1',
	'coll-rendering_article' => '(ܕܦܐ ܕܘܝܩܝ: $1)',
	'coll-rendering_page' => '(ܕܦܐ: $1)',
	'coll-notfound_title' => 'ܟܬܒܐ ܠܝܬ ܠܗ ܐܝܬܘܬܐ',
	'coll-download_notfound_title' => 'ܠܦܦܐ ܠܐ ܐܫܟܚܬ',
	'coll-more_info' => 'ܚܘܝ ܝܕ̈ܥܬܐ ܝܬܝܪ',
	'coll-suggest_your_book' => 'ܟܬܒܐ ܕܝܠܟ',
	'coll-suggest_show' => 'ܚܘܝ',
	'coll-suggest_undo' => 'ܠܐ ܬܥܒܕ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'coll-desc' => '[[Special:Book|ينشيء كتبا]]',
	'coll-book_creator_intro' => "<big>تستطيع مع ''منشئ الكتب'' إنشاء كتاب يتكون من صفحات ويكى بحسب اختيارك. تستطيع تصدير كتابك بأنساق مختلفه (PDF أو ODF على سبيل المثال) أو طلب نسخه مطبوعه.</big>",
	'coll-manage_your_book' => 'إداره كتابك',
	'coll-book_creator_help' => 'انظر [[{{MediaWiki:Coll-helppage}}|صفحه المساعده المتعلقه بالكتب]] للمزيد من المعلومات.',
	'coll-start_book_creator' => 'ابدأ منشئ الكتب',
	'coll-book_creator_continue' => 'واصل استخدام منشئ الكتب',
	'coll-book_creator_disable_text' => "''منشئ الكتب'' سيتم تعطيله والكتاب الذى تعمل عليه ستتم إزالته.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/نص وضع الكتب',
	'coll-collection' => 'كتاب',
	'coll-collections' => 'كتب',
	'coll-exclusion_category_title' => 'استثن فى الطباعة',
	'coll-print_template_prefix' => 'طباعة',
	'coll-print_template_pattern' => '$1/طبع',
	'coll-unknown_subpage_title' => 'صفحه فرعيه غير معروفة',
	'coll-unknown_subpage_text' => 'هذه الصفحه الفرعيه [[Special:Book|للكتاب]] غير موجودة',
	'coll-couldnotaddarticle_title' => 'لم يمكن إضافه صفحه الويكي',
	'coll-couldnotaddarticle_msg' => 'صفحه الويكى لم يمكن إضافتها.',
	'coll-couldnotremovearticle_title' => 'لم يمكن إزاله صفحه الويكي',
	'coll-couldnotremovearticle_msg' => 'صفحه الويكى لم يمكن إزالتها.',
	'coll-noscript_text' => '<h1>الجافاسكريبت مطلوب!</h1>
<strong>متصفحك لا يدعم جافاسكريبت جافاسكريبت أو الجافاسكريبت تم تعطيلها.
هذه الصفحه لن تعمل بطريقه صحيحه، إلا إذا تم تفعيل الجافاسكريبت.</strong>',
	'coll-savedbook_template' => 'كتاب_محفوظ',
	'coll-your_book' => 'كتابك',
	'coll-download_title' => 'تنزيل',
	'coll-download_text' => 'لتنزيل كتابك اختر نسقا واضغط الزر.',
	'coll-download_as_text' => 'لتنزيل كتابك بصيغه $1 اضغط الزر.',
	'coll-download' => 'تحميل',
	'coll-format_label' => 'الصيغة:',
	'coll-remove' => 'إزالة',
	'coll-show' => 'عرض',
	'coll-move_to_top' => 'حرك إلى الأعلى',
	'coll-move_up' => 'حرك إلى الأعلى',
	'coll-move_down' => 'حرك إلى الأسفل قليلا',
	'coll-move_to_bottom' => 'حرك إلى الأسفل',
	'coll-title' => 'العنوان:',
	'coll-subtitle' => 'العنوان الفرعي:',
	'coll-contents' => 'محتويات',
	'coll-drag_and_drop' => 'استخدم السحب والإلقاء لطلب صفحات وفصول ويكي',
	'coll-create_chapter' => 'إنشاء الفصل',
	'coll-sort_alphabetically' => 'رتب أبجديا',
	'coll-rename' => 'إعاده تسمية',
	'coll-new_chapter' => 'أدخل الاسم للفرع الجديد',
	'coll-rename_chapter' => 'أدخل الاسم الجديد للفرع',
	'coll-no_such_category' => 'لا تصنيف كهذا',
	'coll-notitle_title' => 'عنوان الصفحه لم يمكن تحديده.',
	'coll-post_failed_title' => 'طلب POST فشل',
	'coll-post_failed_msg' => 'طلب POST إلى $1 فشل ($2).',
	'coll-mwserve_failed_title' => 'خطأ عرض من الخادم',
	'coll-mwserve_failed_msg' => 'حدث خطأ فى خادم العرض: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'خطأ استجابه من الخادم',
	'coll-empty_collection' => 'كتاب فارغ',
	'coll-revision' => 'النسخة: $1',
	'coll-save_collection_title' => 'احفظ وشارك كتابك',
	'coll-save_collection_text' => 'اختر موقعا:',
	'coll-login_to_save' => 'لو كنت تريد حفظ الكتب من أجل الاستخدام فيما بعد، من فضلك [[Special:UserLogin|قم بتسجيل الدخول أو إنشاء حساب]].',
	'coll-personal_collection_label' => 'كتاب شخصي:',
	'coll-community_collection_label' => 'كتاب مجتمع:',
	'coll-save_collection' => 'احفظ الكتاب',
	'coll-save_category' => 'كل الكتب المحفوظه تتم إضافتها إلى التصنيف [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'الصفحه موجوده.
كتابه عليها؟',
	'coll-overwrite_text' => 'صفحه بنفس الاسم [[:$1]] موجوده بالفعل.
هل تريد استبدالها بمجموعتك؟',
	'coll-yes' => 'نعم',
	'coll-no' => 'لا',
	'coll-load_overwrite_text' => 'لديك بالفعل عده صفحات فى كتابك.
هل تريد الكتابه على كتابك الحالى، إضافه المحتوى الجديد أو إلغاء تحميل هذا الكتاب؟',
	'coll-overwrite' => 'كتابه عليها',
	'coll-append' => 'انتظار',
	'coll-cancel' => 'ألغِ',
	'coll-update' => 'حدّث',
	'coll-limit_exceeded_title' => 'الكتاب كبير جدا',
	'coll-limit_exceeded_text' => 'كتابك كبير جدا.
لا مزيد من الصفحات يمكن إضافتها.',
	'coll-rendering_title' => 'عرض',
	'coll-rendering_text' => '<p><strong>من فضلك انتظر أثناء توليد الوثيقه.</strong></p>

<p><strong>التقدم:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>هذه الصفحه ينبغى أن يتم تحديثها كل عده ثوان.
لو أن هذا لا يعمل، من فضلك اضغط زر التحديث فى متصفحك.</p>',
	'coll-rendering_status' => '<strong>الحالة:</strong> $1',
	'coll-rendering_article' => '(المقالة: $1)',
	'coll-rendering_page' => '(الصفحة: $1)',
	'coll-rendering_finished_title' => 'العرض انتهى',
	'coll-rendering_finished_text' => '<strong>ملف الوثيقه تم توليده.</strong>
<strong>[$1 نزل الملف]</strong> إلى حاسوبك.

ملاحظات:
* غير راض عن الخرج؟ انظر [[{{MediaWiki:Coll-helppage}}|صفحه المساعده حول المجموعات]] للاحتمالات لتحسينه.',
	'coll-notfound_title' => 'الكتاب غير موجود',
	'coll-notfound_text' => 'لم يمكن العثور على صفحه الكتاب.',
	'coll-download_notfound_title' => 'الملف لم يتم إيجاده',
	'coll-download_notfound_text' => 'الملف الذى تحاول تنزيله غير موجود: ربما يكون قد مسح و يحتاج إلى إعاده توليد.',
	'coll-download_failed_title' => 'خطأ أثناء التنزيل',
	'coll-download_failed_text' => 'وُجد خطأ أثناء تنزيل الملف: $1',
	'coll-is_cached' => '<ul><li>نسخه مخزنه من الوثيقه تم العثور عليها، لذا لا تحديث كان ضروريا. <a href="$1">إجبار على إعاده التحديث.</a></li></ul>',
	'coll-excluded-templates' => '* القوالب فى التصنيف [[:Category:$1|$1]] تم إقصاؤها.',
	'coll-blacklisted-templates' => '* القوالب فى القائمه السوداء [[:$1]] تم إقصاؤها.',
	'coll-return_to_collection' => '<p>ارجع إلى <a href="$1">$2</a></p>',
	'coll-book_title' => 'طلب ككتاب مطبوع',
	'coll-book_text' => 'احصل على كتاب مطبوع من شريكنا للطباعه عند الطلب:',
	'coll-order_from_pp' => 'معاينه مع $1',
	'coll-about_pp' => 'حول $1',
	'coll-invalid_podpartner_title' => 'شريك POD غير صحيح',
	'coll-invalid_podpartner_msg' => 'شريك POD الموفر غير صحيح.
من فضلك اتصل بإدارى ميدياويكى الخاص بك.',
	'coll-license' => 'ترخيص',
	'coll-return_to' => 'رجوع إلى [[:$1]]',
	'coll-more_info' => 'عرض المزيد من المعلومات',
	'coll-hide_info' => 'إخفاء المعلومات',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/معلومات الطلب من بيديابرس',
	'coll-suggest_title' => 'صفحات كتابك المقترحة',
	'coll-suggest_intro_text' => 'المقترحات مبنيه على صفحات كتابك الحاليه.
سوف تُحدّث هذه القائمه كلما نقرت زر الإضافه أو الإزاله.',
	'coll-suggested_articles' => 'اقتراحات',
	'coll-suggest_reset_bans' => 'إعاده ضبط',
	'coll-suggest_reset_bans_tooltip' => 'اعرض الاقتراحات المزاله سابقا',
	'coll-suggest_add_selected' => 'أضف الصفحات المختارة',
	'coll-suggest_ban_selected' => 'أزل الصفحات المختارة',
	'coll-suggest_your_book' => 'كتابك',
	'coll-suggest_show' => 'عرض',
	'coll-suggest_ban_tooltip' => 'أزل هذه الصفحه من قائمه المقترحات',
	'coll-suggest_article_ban' => 'الصفحه <strong>$1</strong> تمت إزالتها من الاقتراحات ($2).',
	'coll-suggest_article_add' => 'الصفحه <strong>$1</strong> تمت إضافتها إلى كتابك ($2).',
	'coll-suggest_article_remove' => 'الصفحه <strong>$1</strong> تمت إزالتها من كتابك ($2).',
	'coll-suggest_undo_tooltip' => 'استرجع هذه الإجراء',
	'coll-suggest_undo' => 'ارجع',
	'right-collectionsaveasuserpage' => 'احفظ الكتب كصفحه مستخدم',
	'right-collectionsaveascommunitypage' => 'احفظ الكتب كصفحه مجتمع',
);

/** Asturian (Asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'coll-desc' => '[[Special:Book|Crear llibros]]',
	'coll-collection' => 'Llibru',
	'coll-collections' => 'Llibros',
	'coll-download_title' => 'Descargar',
	'coll-download_text' => 'Pa descargar el llibru, escueyi un formatu y calca nel botón.',
	'coll-download_as_text' => 'Pa descargar el llibru en formatu $1 calca nel botón.',
	'coll-download' => 'Descargar',
	'coll-format_label' => 'Formatu:',
	'coll-remove' => 'Desaniciar',
	'coll-show' => 'Amosar',
	'coll-move_to_top' => 'Mover al principiu',
	'coll-move_up' => 'Xubir',
	'coll-move_down' => 'Baxar',
	'coll-move_to_bottom' => 'Mover al final',
	'coll-title' => 'Títulu:',
	'coll-subtitle' => 'Subtítulu:',
	'coll-contents' => 'Conteníu',
	'coll-create_chapter' => 'Crear un capítulu',
	'coll-sort_alphabetically' => 'Ordenar alfabéticamente',
	'coll-rename' => 'Renomar',
	'coll-new_chapter' => "Escribi'l nome del nuevu capítulu",
	'coll-rename_chapter' => "Escribi'l nuevu nome del capítulu",
	'coll-yes' => 'Sí',
	'coll-no' => 'Non',
	'coll-about_pp' => 'Tocante a $1',
);

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'coll-collection' => 'Kitab',
	'coll-collections' => 'Kitablar',
	'coll-print_template_prefix' => 'Çap',
	'coll-print_template_pattern' => '$1/Çap',
	'coll-download_title' => 'Yüklə',
	'coll-download' => 'Yüklə',
	'coll-format_label' => 'Format:',
	'coll-show' => 'Göstər',
	'coll-title' => 'Başlıq:',
	'coll-subtitle' => 'Altbaşlıq:',
	'coll-yes' => 'Bəli',
	'coll-no' => 'Xeyr',
	'coll-cancel' => 'Ləğv et',
	'coll-rendering_article' => '(viki səhifə: $1)',
	'coll-rendering_page' => '(səhifə: $1)',
	'coll-license' => 'Lisenziya',
	'coll-suggest_reset_bans' => 'qur',
	'coll-suggest_show' => 'göstər',
);

/** Bashkir (Башҡортса)
 * @author Assele
 * @author Haqmar
 */
$messages['ba'] = array(
	'coll-desc' => '[[Special:Book|Китаптар яһай]]',
	'coll-book_creator_intro' => "<big>''Китап оҫтаһы'' ярҙамы менән һеҙ һайлаған вики-биттәрҙән торған китап яһай алаһығыҙ. Китапты төрлө форматтарға сығара (мәҫәлән, PDF йәки ODF) йәки баҫылған өлгөһөнә заказ бирә алаһығыҙ.</big>",
	'coll-manage_your_book' => 'Китабығыҙҙы идаралау',
	'coll-book_creator_help' => 'Өҫтәмә мәғлүмәт өсөн [[{{MediaWiki:Coll-helppage}}|китаптар тураһында белешмә]] битен ҡарағыҙ.',
	'coll-start_book_creator' => 'Китап оҫтаһын башлатырға',
	'coll-book_creator_continue' => 'Китап оҫтаһын ҡулланыуҙы дауам итергә',
	'coll-book_creator_disable_text' => 'Китап оҫтаһы ябыласаҡ һәм һеҙ яһап башлаған китап юйыласаҡ.',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Китап оҫтаһы тексты',
	'coll-collection' => 'Китап',
	'coll-collections' => 'Китаптар',
	'coll-exclusion_category_title' => 'Баҫҡан ваҡытта иҫәпкә алынмаясаҡтар',
	'coll-print_template_prefix' => 'Баҫыу',
	'coll-print_template_pattern' => '$1/Баҫыу',
	'coll-unknown_subpage_title' => 'Билдәһеҙ эске бит',
	'coll-unknown_subpage_text' => '[[Special:Book|Китаптың]] бындай эске бите юҡ',
	'coll-couldnotaddarticle_title' => 'Вики битен өҫтәп булманы',
	'coll-couldnotaddarticle_msg' => 'Был битте өҫтәп булмай',
	'coll-couldnotremovearticle_title' => 'Вики битен юйып булманы',
	'coll-couldnotremovearticle_msg' => 'Был битте юйып булмай',
	'coll-noscript_text' => '<h1>JavaScript кәрәк!</h1>
<strong>Браузерығыҙҙа JavaScript эшләмәй йәки ул һүндерелгән.
JavaScript ғәмәлдә булмаған саҡта был бит дөрөҫ эшләмәйәсәк.</strong>',
	'coll-savedbook_template' => 'һаҡланған китап',
	'coll-your_book' => 'Китабығыҙ',
	'coll-download_title' => 'Күсереп алырға',
	'coll-download_text' => 'Китабығыҙҙы күсереп алыр өсөн формат һайлағыҙ һәм төймәгә баҫығыҙ.',
	'coll-download_as_text' => 'Китабығыҙҙы $1 форматында күсереп алыр өсөн, төймәгә баҫығыҙ.',
	'coll-download' => 'Күсереп алырға',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Юйырға',
	'coll-show' => 'Күрһәтергә',
	'coll-move_to_top' => 'Иң өҫкә күсерергә',
	'coll-move_up' => 'Өҫкә күсерергә',
	'coll-move_down' => 'Аҫҡа күсерергә',
	'coll-move_to_bottom' => 'Иң аҫҡа күсерергә',
	'coll-title' => 'Башлыҡ:',
	'coll-subtitle' => 'Өҫтәмә исем:',
	'coll-contents' => 'Эстәлек',
	'coll-drag_and_drop' => 'Вики биттәрҙең һәм бүлектәрҙең тәртибен үҙгәртеү өсөн, уларҙы күсерегеҙ',
	'coll-create_chapter' => 'Бүлек яһарға',
	'coll-sort_alphabetically' => 'Әлифба буйынса теҙергә',
	'coll-rename' => 'Яңы исем бирергә',
	'coll-new_chapter' => 'Бүлектең яңы исемен керетегеҙ',
	'coll-rename_chapter' => 'Бүлектең яңы исемен керетегеҙ',
	'coll-no_such_category' => 'Бындай категория юҡ',
	'coll-notitle_title' => 'Биттең башлығын билдәләп булмай.',
	'coll-post_failed_title' => 'POST-һорау хатаһы',
	'coll-post_failed_msg' => '$1 өсөн POST-һорау хатаһы ($2).',
	'coll-mwserve_failed_title' => 'Төшөрөү серверы хатаһы',
	'coll-mwserve_failed_msg' => 'Төшөрөү серверында хата килеп сыҡты: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Серверҙан яуап хатаһы',
	'coll-empty_collection' => 'Буш китап',
	'coll-revision' => 'Өлгө: $1',
	'coll-save_collection_title' => 'Китапты һаҡларға һәм уның менән бүлешергә',
	'coll-save_collection_text' => 'Китабығыҙҙы һаҡлау өсөн урын һайлағыҙ:',
	'coll-login_to_save' => 'Китапты артабан ҡулланыу маҡсатында һаҡлар өсөн, зинһар, [[Special:UserLogin|танылығыҙ йәки иҫәп яҙмаһын булдырығыҙ]].',
	'coll-personal_collection_label' => 'Шәхси китап:',
	'coll-community_collection_label' => 'Берләшмә китабы:',
	'coll-save_collection' => 'Китапты һаҡларға',
	'coll-save_category' => 'Бөтә һаҡланған китаптар [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] категорияһына өҫтәлә.',
	'coll-overwrite_title' => 'Бит бар.
Өҫтөнә яҙырғамы?',
	'coll-overwrite_text' => '[[:$1]] исемле бит бар инде.
Уның һеҙҙең китабығыҙға алыштырылыуын теләйһегеҙме?',
	'coll-yes' => 'Эйе',
	'coll-no' => 'Юҡ',
	'coll-load_overwrite_text' => 'Һеҙҙең китабығыҙҙа бер нисә бит бар инде.
Һеҙ ағымдағы китапты яңынан яҙҙырырға, яңы эстәлек өҫтәргә йәки был китапты тейәүҙе кире алырға теләһегеҙме?',
	'coll-overwrite' => 'Яңынан яҙҙырырға',
	'coll-append' => 'Өҫтәргә',
	'coll-cancel' => 'Кире алырға',
	'coll-update' => 'Яңыртырға',
	'coll-limit_exceeded_title' => 'Китап бигерәк ҙур',
	'coll-limit_exceeded_text' => 'Һеҙҙең китабығыҙ бигерәк ҙур.
Уға биттәр өҫтәп булмай.',
	'coll-rendering_title' => 'Яһау',
	'coll-rendering_text' => '<p><strong>Зинһар, документ булдырылғансы көтөгөҙ.</strong></p>

<p><strong>Эш барышы:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Был бит бер нисә секунд һайын үҙенән-үҙе яңырырға тейеш.
Әгәр яңырмаһа, зинһар, браузерығыҙҙың яңыртыу төймәһенә баҫығыҙ.</p>',
	'coll-rendering_status' => '<strong>Торошо:</strong> $1',
	'coll-rendering_article' => '(вики бит: $1)',
	'coll-rendering_page' => '(бит: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Бит тураһында мәғлүмәт текстын күһәтеү',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Йыйынтыҡ тураһында мәғлүмәт текстын күһәтеү',
	'coll-rendering_finished_title' => 'Төшөрөү тамамланды',
	'coll-rendering_finished_text' => '<strong>Документ булдырылды.</strong>
<strong>[$1 Файлды күсереп алырға]</strong>.

Иҫкәрмә:
* Һөҙөмтә менән ҡәнәғәт түгелһегеҙме? Яҡшыртыу мөмкинлектәре тураһында [[{{MediaWiki:Coll-helppage}}|китаптар тураһында белешмә битендә]] уҡығыҙ.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Бит тураһында мәғлүмәт текстын күһәтеү',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Йыйынтыҡ тураһында мәғлүмәт текстын күһәтеү',
	'coll-notfound_title' => 'Китап табылманы',
	'coll-notfound_text' => 'Китаптың битен табып булмай.',
	'coll-download_notfound_title' => 'Файл табылманы',
	'coll-download_notfound_text' => 'Һеҙ күсереп алырға теләгән файл юҡ. Ул юйылған һәм уны тергеҙергә кәрәк булыуы ихтимал.',
	'coll-download_failed_title' => 'Күсереп алыу ваҡытында хата',
	'coll-download_failed_text' => 'Файды күсереп алыу ваҡытында хата килеп сыҡты: $1',
	'coll-is_cached' => '<ul><li> Был документтың кэшланған өлгөһө табылды, төшөрөү талап ителмәне.
<a href="$1">Яңынан төшөрөргә.</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]] категорияһының ҡалыптары төшөрөп ҡалдырылды.',
	'coll-blacklisted-templates' => '* [[:$1]] ҡара исемлегендәге ҡалыптар төшөрөп ҡалдырылды.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a> китабына кире ҡайтырға</p>',
	'coll-book_title' => 'Баҫтырылған китап рәүешендә заказ бирергә',
	'coll-book_text' => 'Баҫтырылған китапты беҙҙең партнерҙан алырға:',
	'coll-order_from_pp' => '$1 ярҙамында ҡарап сығыу',
	'coll-about_pp' => '$1 тураһында',
	'coll-invalid_podpartner_title' => 'POD (һорау буйынса баҫтырыусы) партнер дөрөҫ түгел',
	'coll-invalid_podpartner_msg' => 'Һайланған POD (һорау буйынса баҫтырыусы) партнер дөрөҫ түгел.
Зинһар, MediaWiki хакимына мөрәжәғәт итегеҙ.',
	'coll-license' => 'Рөхсәтнамә',
	'coll-return_to' => '[[:$1]] битенә кире ҡайтырға',
	'coll-more_info' => 'Күберәк мәғлүмәт күрһәтергә',
	'coll-hide_info' => 'Мәғлүмәтте йәшерергә',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress заказы тураһында мәғлүмәт',
	'coll-suggest_title' => 'Һеҙҙең китабығыҙ өсөн тәҡдим ителгән биттәр',
	'coll-suggest_intro_text' => 'Тәҡдимдәр һеҙҙең китабығыҙҙағы ағымдағы вики биттәр йыйынтығына нигеҙләнгән.
Был исемлек һеҙ өҫтәү йәки юйыу төймәләренә баҫҡан һайын яңыра.',
	'coll-suggested_articles' => 'Тәҡдимдәр',
	'coll-suggest_reset_bans' => 'баштағы өлгөнө ҡайтарырға',
	'coll-suggest_reset_bans_tooltip' => 'Алда юйылған тәҡдимдәрҙе күрһәтергә',
	'coll-suggest_add_selected' => 'Һайланған биттәрҙе өҫтәргә',
	'coll-suggest_ban_selected' => 'Һайланған биттәрҙе юйырға',
	'coll-suggest_your_book' => 'Китабығыҙ',
	'coll-suggest_show' => 'күрһәтергә',
	'coll-suggest_ban_tooltip' => 'Был битте тәҡдимдәр исемлегенән юйырға',
	'coll-suggest_article_ban' => '<strong>$1</strong> бите тәҡдимдәр исемлегенән юйылды ($2).',
	'coll-suggest_article_add' => '<strong>$1</strong> бите китабығыҙға өҫтәлде ($2).',
	'coll-suggest_article_remove' => '<strong>$1</strong> бите китабығыҙҙан юйылды ($2).',
	'coll-suggest_undo_tooltip' => 'Был ғәмәлде кире алырға',
	'coll-suggest_undo' => 'кире алырға',
	'coll-load_local_book' => '%NUMPAGES% вики битле %TITLE% китабығыҙ менән дауам итеү өсөн, "OK" төймәһен баҫығыҙ. Уны юйып, буш китаптан башлау өсөн, "Кире алырға" төймәһен баҫығыҙ.',
	'right-collectionsaveasuserpage' => 'Китаптарҙы ҡатнашыусының бите рәүешендә һаҡлау',
	'right-collectionsaveascommunitypage' => 'Китаптарҙы берләшмәнең бите рәүешендә һаҡлау',
);

/** Bavarian (Boarisch)
 * @author Mucalexx
 */
$messages['bar'] = array(
	'coll-community_collection_label' => 'Gmoahschoftlichs Buach',
);

/** Belarusian (Беларуская)
 * @author Тест
 */
$messages['be'] = array(
	'coll-format_label' => 'Фармат:',
	'coll-license' => 'Ліцэнзія',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'coll-desc' => '[[Special:Book|Стварэньне кніг]]',
	'coll-book_creator_intro' => "<big>Разам з ''майстрам стварэньня кнігі'' Вы можаце стварыць кнігу, якая ўтрымлівае вікі-старонкі па Вашаму выбару. Вы можаце экспартаваць кнігу ў розныя фарматы (напрыклад у PDF альбо ODF) альбо можаце замовіць надрукаваную копію.</big>",
	'coll-manage_your_book' => 'Кіраваньне Вашай кнігай',
	'coll-book_creator_help' => 'Глядзіце [[{{MediaWiki:Coll-helppage}}|старонку дапамогі па кнігах]] для дадатковай інфармацыі.',
	'coll-start_book_creator' => 'Пачаць стварэньне кнігі з дапамогай майстра',
	'coll-book_creator_continue' => 'Працягваць выкарыстаньне майстра стварэньня кнігі',
	'coll-book_creator_disable_text' => "''Майстар стварэньня кнігі'' будзе выключаны, і кніга, над якой Вы працуеце, будзе выдаленая.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Тэкст майстра стварэньня кнігі',
	'coll-collection' => 'Кніга',
	'coll-collections' => 'Кнігі',
	'coll-exclusion_category_title' => 'Выключэньні з друку',
	'coll-print_template_prefix' => 'Друк',
	'coll-print_template_pattern' => '$1/Для друку',
	'coll-unknown_subpage_title' => 'Невядомая падстаронка',
	'coll-unknown_subpage_text' => 'Гэтай падстаронкі [[Special:Book|кнігі]] не існуе',
	'coll-couldnotaddarticle_title' => 'Немагчыма дадаць вікі-старонку',
	'coll-couldnotaddarticle_msg' => 'Вікі-старонка ня можа быць дададзеная.',
	'coll-couldnotremovearticle_title' => 'Немагчыма выдаліць вікі-старонку',
	'coll-couldnotremovearticle_msg' => 'Вікі-старонка ня можа быць выдаленая.',
	'coll-noscript_text' => '<h1>Патрэбны JavaScript!</h1>
<strong>Ваш браўзэр не падтрымлівае JavaScript альбо падтрымка JavaScript была адключаная.
Гэтая старонка ня будзе працаваць правільна, калі JavaScript адключаны.</strong>',
	'coll-savedbook_template' => 'захаваныя_кнігі',
	'coll-your_book' => 'Ваша кніга',
	'coll-download_title' => 'Загрузіць',
	'coll-download_text' => 'Каб загрузіць Вашу кнігу, выберыце фармат і націсьніце кнопку.',
	'coll-download_as_text' => 'Націсьніце кнопку, каб загрузіць Вашу кнігу ў фармаце $1.',
	'coll-download' => 'Загрузіць',
	'coll-format_label' => 'Фармат:',
	'coll-remove' => 'Выдаліць',
	'coll-show' => 'Паказаць',
	'coll-move_to_top' => 'Перанесьці ўверх',
	'coll-move_up' => 'Перанесьці вышэй',
	'coll-move_down' => 'Перанесьці ніжэй',
	'coll-move_to_bottom' => 'Перанесьці ўніз',
	'coll-title' => 'Назва:',
	'coll-subtitle' => 'Падзагаловак:',
	'coll-contents' => 'Зьмест',
	'coll-drag_and_drop' => 'Карыстайся мышкай, каб зьмяніць пасьлядоўнасьць вікі-старонак і разьдзелаў',
	'coll-create_chapter' => 'Стварыць разьдзел',
	'coll-sort_alphabetically' => 'Сартаваць па альфабэце',
	'coll-rename' => 'Перайменаваць',
	'coll-new_chapter' => 'Увядзіце назву для новага разьдзелу',
	'coll-rename_chapter' => 'Увядзіце новую назву разьдзелу',
	'coll-no_such_category' => 'Няма такой катэгорыі',
	'coll-notitle_title' => 'Назва старонкі ня можа быць вызначана.',
	'coll-post_failed_title' => 'POST-запыт ня выкананы',
	'coll-post_failed_msg' => 'POST-запыт да $1 ня выкананы ($2).',
	'coll-mwserve_failed_title' => 'Памылка сэрвэра адлюстраваньня',
	'coll-mwserve_failed_msg' => 'На сэрвэры адлюстраваньня ўзьнікла памылка: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Памылка адказу сэрвэра',
	'coll-empty_collection' => 'Пустая кніга',
	'coll-revision' => 'Вэрсія: $1',
	'coll-save_collection_title' => 'Захаваць Вашую кнігу і адкрыць да яе доступ',
	'coll-save_collection_text' => 'Выберыце месцазнаходжаньне:',
	'coll-login_to_save' => 'Калі Вы жадаеце захаваць кнігу для далейшага карыстаньня, калі ласка, [[Special:UserLogin|увайдзіце ў сыстэму альбо стварыце рахунак]].',
	'coll-personal_collection_label' => 'Асабістая кніга:',
	'coll-community_collection_label' => 'Кніга супольнасьці:',
	'coll-save_collection' => 'Захаваць кнігу',
	'coll-save_category' => 'Усе захаваныя кнігі дададзеныя ў катэгорыю [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Старонка ўжо існуе. 
Перазапісаць?',
	'coll-overwrite_text' => 'Старонка з назвай [[:$1]] ужо існуе.
Вы жадаеце, каб яна была перазапісана Вашай калекцыяй?',
	'coll-yes' => 'Так',
	'coll-no' => 'Не',
	'coll-load_overwrite_text' => 'У Вашай кнізе ўжо існуе некалькі старонак.
Вы жадаеце перазапісаць Вашу цяперашнюю кнігу, дадаць новы зьмест альбо адмяніць загрузку гэтай кнігі?',
	'coll-overwrite' => 'Перазапісаць',
	'coll-append' => 'Дадаць',
	'coll-cancel' => 'Скасаваць',
	'coll-update' => 'Абнавіць',
	'coll-limit_exceeded_title' => 'Кніга занадта вялікая',
	'coll-limit_exceeded_text' => 'Ваша кніга занадта вялікая.
Да яе болей немагчыма дадаваць старонкі.',
	'coll-rendering_title' => 'Адлюстраваньне',
	'coll-rendering_text' => '<p><strong>Пачакайце, пакуль ствараецца дакумэнт.</strong></p>

<p><strong>Прагрэс:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Гэта старонка павінна аўтаматычна абнаўляцца кожныя некалькі сэкундаў.
Калі гэтага не адбываецца, калі ласка, націсьніце кнопку «Абнавіць» у Вашым браўзэры.</p>',
	'coll-rendering_status' => '<strong>Статус:</strong> $1',
	'coll-rendering_article' => '(вікі-старонка: $1)',
	'coll-rendering_page' => '(старонка: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Генэрацыя тэксту са старонкі',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Генэрацыя тэксту з калекцыі',
	'coll-rendering_finished_title' => 'Адлюстраваньне скончана',
	'coll-rendering_finished_text' => '<strong>Файл дакумэнту быў створаны.</strong>
<strong>[$1 Загрузіць файл]</strong> на Ваш кампутар.

Заўвага:
* Не задаволены створаным дакумэнтам? Глядзіце [[{{MediaWiki:Coll-helppage}}|старонку дапамогі па калекцыі]], каб даведацца, як яго палепшыць.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Стварэньне тэксту з інфармацыяй пра старонку',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Стварэньне тэксту з інфармацыяй пра калекцыю',
	'coll-notfound_title' => 'Кніга ня знойдзеная',
	'coll-notfound_text' => 'Немагчыма знайсьці старонку кнігі.',
	'coll-download_notfound_title' => 'Файл ня знойдзены',
	'coll-download_notfound_text' => 'Файл, які Вы спрабуеце загрузіць, не існуе. Магчыма, ён быў выдалены і патрабуе абнаўленьня.',
	'coll-download_failed_title' => 'Памылка пад час загрузкі',
	'coll-download_failed_text' => 'Адбылася памылка пад час загрузкі файла: $1',
	'coll-is_cached' => '<ul><li>Была знойдзеная кэшаваная вэрсія гэтага дакумэнта, таму перамалёўка не спатрэбілася. <a href="$1">Запусьціць прымусовую перамалёўку.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблёны ў катэгорыі [[:Category:$1|$1]] былі выключаны.',
	'coll-blacklisted-templates' => '* Шаблёны ў чорным сьпісе [[:$1]] былі выключаны.',
	'coll-return_to_collection' => '<p>Вярнуцца да <a href="$1">$2</a></p>',
	'coll-book_title' => 'Замовіць як друкаваную кнігу',
	'coll-book_text' => 'Атрымаць друкаваную кнігу ад нашага партнэра, які займаецца паслугамі друкаваньня па замове:',
	'coll-order_from_pp' => 'Папярэдні прагляд праз $1',
	'coll-about_pp' => 'Пра $1',
	'coll-invalid_podpartner_title' => 'Нядзейны партнэр, які друкуе па замове',
	'coll-invalid_podpartner_msg' => 'Выбраны партнэр, які друкуе па замове, нядзейны.
Калі ласка, зьвяжыцеся з Вашым адміністратарам MediaWiki.',
	'coll-license' => 'Ліцэнзія',
	'coll-return_to' => 'Вярнуцца да [[:$1]]',
	'coll-more_info' => 'Паказаць болей інфармацыі',
	'coll-hide_info' => 'Схаваць інфармацыю',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Інфармацыя пра заказ у PediaPress',
	'coll-suggest_title' => 'Прапанаваныя старонкі для Вашай кнігі',
	'coll-suggest_intro_text' => 'Прапановы заснаваныя на цяперашніх наладах вікі-старонак у Вашай кнізе.
Сьпіс будзе абноўлены, калі б Вы не націснулі на кнопкі дадаць альбо выдаліць.',
	'coll-suggested_articles' => 'Прапановы',
	'coll-suggest_reset_bans' => 'скінуць',
	'coll-suggest_reset_bans_tooltip' => 'Паказаць выдаленыя раней прапановы',
	'coll-suggest_add_selected' => 'Дадаць выбраныя старонкі',
	'coll-suggest_ban_selected' => 'Выдаліць выбраныя старонкі',
	'coll-suggest_your_book' => 'Ваша кніга',
	'coll-suggest_show' => 'паказаць',
	'coll-suggest_ban_tooltip' => 'Выдаліць гэту старонку са сьпісу прапаноў',
	'coll-suggest_article_ban' => 'Старонка <strong>$1</strong> была выдаленая з прапаноў ($2).',
	'coll-suggest_article_add' => 'Старонка <strong>$1</strong> была дададзеная ў Вашую кнігу ($2).',
	'coll-suggest_article_remove' => 'Старонка <strong>$1</strong> была выдаленая з Вашай кнігі ($2).',
	'coll-suggest_undo_tooltip' => 'Адмяніць гэтае дзеяньне',
	'coll-suggest_undo' => 'адмяніць',
	'coll-load_local_book' => 'Націсьніце «Добра» каб працягваць працу з Вашай кнігай %TITLE%, якая ўтрымлівае %NUMPAGES% вікі-старонак. Націсьніце «Адмена», каб выдаліць яе і пачаць з пустой кнігі.',
	'right-collectionsaveasuserpage' => 'захаваньне кніг як старонак ўдзельніка',
	'right-collectionsaveascommunitypage' => 'захаваньне кніг як старонак супольнасьці',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Spiritia
 * @author Turin
 */
$messages['bg'] = array(
	'coll-desc' => '[[Special:Book|Създаване на книги]]',
	'coll-manage_your_book' => 'Управление на книгата ви',
	'coll-book_creator_help' => 'Вижте [[{{MediaWiki:Coll-helppage}}|страницата с помощ за книги]] за повече подробности.',
	'coll-collection' => 'Книга',
	'coll-collections' => 'Книги',
	'coll-print_template_prefix' => 'Отпечатване',
	'coll-unknown_subpage_title' => 'Непозната подстраница',
	'coll-unknown_subpage_text' => 'Тази подстраница на [[Special:Book|книгата]] не съществува',
	'coll-couldnotaddarticle_title' => 'Грешка при добавяне на уики-страницата',
	'coll-couldnotaddarticle_msg' => 'Уики-страницата не може да бъде добавена.',
	'coll-couldnotremovearticle_title' => 'Грешка при премахване на уики-страницата',
	'coll-couldnotremovearticle_msg' => 'Уики-страницата не може да бъде премахната.',
	'coll-noscript_text' => '<h1>Изисква се Джаваскрипт!</h1>
<strong>Използваният браузър не поддържа Джаваскрипт или поддръжката на Джаваскрипт е изключена.
Тази страница не може да работи правилно докато Джаваскриптът не бъде активиран.</strong>',
	'coll-your_book' => 'Вашата книга',
	'coll-download_title' => 'Изтегляне',
	'coll-download_text' => 'За да изтеглите книгата си, изберете формат и натиснете бутона.',
	'coll-download_as_text' => 'За да изтеглите книгата си във формат $1, натиснете бутона.',
	'coll-download' => 'Изтегляне',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Премахване',
	'coll-show' => 'Показване',
	'coll-move_to_top' => 'Преместване в началото',
	'coll-move_up' => 'Преместване нагоре',
	'coll-move_down' => 'Преместване надолу',
	'coll-move_to_bottom' => 'Преместване в края',
	'coll-title' => 'Заглавие:',
	'coll-subtitle' => 'Подзаглавие:',
	'coll-contents' => 'Съдържание',
	'coll-create_chapter' => 'Създаване на глава',
	'coll-sort_alphabetically' => 'Подреждане по азбучен ред',
	'coll-rename' => 'Преименуване',
	'coll-new_chapter' => 'Въведете име за новата глава',
	'coll-rename_chapter' => 'Въведете ново име за главата',
	'coll-no_such_category' => 'Няма такава категория',
	'coll-notitle_title' => 'Заглавието на страницата не може да бъде определено.',
	'coll-post_failed_title' => 'Грешка при заявката POST',
	'coll-post_failed_msg' => 'Грешка при заявката POST до $1 ($2).',
	'coll-error_reponse' => 'Съобщение за грешка от сървъра',
	'coll-empty_collection' => 'Празна книга',
	'coll-revision' => 'Версия: $1',
	'coll-save_collection_title' => 'Съхраняване и споделяне',
	'coll-save_collection_text' => 'Изберете местоположение за съхраняване на книгата ви:',
	'coll-login_to_save' => 'Ако искате да запазите книгите си за следваща употреба, моля [[Special:UserLogin|влезте или се регистрирайте]].',
	'coll-personal_collection_label' => 'Лична книга:',
	'coll-community_collection_label' => 'Книга на общността:',
	'coll-save_collection' => 'Съхраняване',
	'coll-save_category' => 'Всички записани книги са добавени към категорията [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Страницата съществува. Заместване?',
	'coll-overwrite_text' => 'Вече съществува страница с име [[:$1]].
Да бъде ли заменена с книгата ви?',
	'coll-yes' => 'Да',
	'coll-no' => 'Не',
	'coll-overwrite' => 'Заместване',
	'coll-append' => 'Добавяне',
	'coll-cancel' => 'Отказ',
	'coll-update' => 'Актуализиране',
	'coll-limit_exceeded_title' => 'Книгата е прекалено голяма',
	'coll-limit_exceeded_text' => 'Вашата книга е прекалено голяма.
Не може да се добавят повече страници.',
	'coll-rendering_status' => '<strong>Статут:</strong> $1',
	'coll-rendering_article' => '(уики-страница: $1)',
	'coll-rendering_page' => '(страница: $1)',
	'coll-notfound_title' => 'Книгата не е открита',
	'coll-notfound_text' => 'Страницата от книга не е открита.',
	'coll-download_notfound_title' => 'Файлът не беше намерен',
	'coll-download_failed_title' => 'Грешка при изтеглянето',
	'coll-download_failed_text' => 'Получи се грешка при изтеглянето на файла: $1',
	'coll-excluded-templates' => '* Шаблоните в категория [[:Category:$1|$1]] бяха изключени.',
	'coll-return_to_collection' => '<p>Връщане към <a href="$1">$2</a></p>',
	'coll-book_title' => 'Поръчване на печатно копие от книгата',
	'coll-book_text' => 'Получаване на печатно копие от нашия партньор за отпечатване по поръчка.',
	'coll-order_from_pp' => 'Предварителен преглед с $1',
	'coll-about_pp' => 'За $1',
	'coll-license' => 'Лиценз',
	'coll-return_to' => 'Връщане към [[:$1]]',
	'coll-more_info' => 'Показване на повече информация',
	'coll-hide_info' => 'Скриване на информацията',
	'coll-suggest_title' => 'Предложени страници към книгата ви',
	'coll-suggested_articles' => 'Предположения',
	'coll-suggest_reset_bans_tooltip' => 'Показване на предишно премахнати предложения',
	'coll-suggest_add_selected' => 'Добавяне на избраните страници',
	'coll-suggest_ban_selected' => 'Премахване на избраните страници',
	'coll-suggest_your_book' => 'Вашата книга',
	'coll-suggest_show' => 'показване',
	'coll-suggest_ban_tooltip' => 'Премахване на тази страница от списъка с предложеиня',
	'coll-suggest_article_ban' => 'Страницата <strong>$1</strong> е премахната от списъка с предложения ($2).',
	'coll-suggest_article_add' => 'Страницата <strong>$1</strong> е добавена към книгата ви ($2).',
	'coll-suggest_article_remove' => 'Страницата <strong>$1</strong> е премахната от книгата ви ($2).',
	'coll-suggest_undo_tooltip' => 'Отмяна на това действие',
	'coll-suggest_undo' => 'отмяна',
	'right-collectionsaveasuserpage' => 'Запазване на книгата като потребителска страница',
	'right-collectionsaveascommunitypage' => 'Запазване на книгата като страница на общността',
);

/** Bahasa Banjar (Bahasa Banjar)
 * @author J Subhi
 */
$messages['bjn'] = array(
	'coll-show' => 'Tampaiakan',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Jayantanth
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'coll-desc' => '[[Special:Book|বই তৈরি]]',
	'coll-book_creator_intro' => "<big>''বই প্রস্তুতকারণ'' দিয়ে আপনি পছন্দের উইকি পাতাগুলো নিয়ে বই  তৈরি করতে পারেন। আপনি বিভিন্ন ফরমেটে আপনার বই এক্সপোর্ট করতে পারেন (যেমন PDF বা ODF) অথবা মুদ্রণ কপির জন্য অর্ডার দিতে পারেন।</big>",
	'coll-manage_your_book' => 'বই ব্যবস্থাপনা',
	'coll-book_creator_help' => 'আরও তথ্যের জন্য [[{{MediaWiki:Coll-helppage}}|বই সংক্রান্ত সহায়তা]] দেখুন।',
	'coll-start_book_creator' => 'বই প্রস্তুতকারক আরম্ভ করো',
	'coll-book_creator_continue' => 'বই প্রস্তুতকারক বহাল রাখো',
	'coll-book_creator_disable_text' => "''বই প্রস্তুতকারক'' নিস্ক্রিয় করা হবে এবং আপনি যে বই নিয়ে কাজ করছেন তা অপসারণ করা হবে।",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/বই প্রস্তুতকারণ লেখ',
	'coll-collection' => 'বই',
	'coll-collections' => 'বইসমূহ',
	'coll-exclusion_category_title' => 'মুদ্রণে বাদ রাখো',
	'coll-print_template_prefix' => 'মুদ্রণ',
	'coll-print_template_pattern' => '$1/মুদ্রণ',
	'coll-unknown_subpage_title' => 'অজানা উপপাতা',
	'coll-unknown_subpage_text' => '[[Special:Book|বই]] এর এই উপপাতাটি নাই।',
	'coll-couldnotaddarticle_title' => 'উইকি পাতা যোগ করা যাচ্ছে না',
	'coll-couldnotaddarticle_msg' => 'উইকি পাতা যোগ করা যাবে না।',
	'coll-couldnotremovearticle_title' => 'উইকি পাতাটি অপসারণ করা যাচ্ছে না',
	'coll-couldnotremovearticle_msg' => 'এই উইকি পাতা অপসারণ করা যাবে না।',
	'coll-noscript_text' => '<h1>JavaScript প্রয়োজন!</h1>
<strong>আপনার ব্রাউজার JavaScript সমর্থন করে না অথবা JavaScript নিস্ক্রিয় করা রয়েছে।
JavaScript সক্রিয় না করা পর্যন্ত, এই পাতাটি ঠিক মত কাজ করবে না।</strong>',
	'coll-savedbook_template' => 'সংরক্ষিত_বই',
	'coll-your_book' => 'আপনার বই',
	'coll-download_title' => 'ডাউনলোড',
	'coll-download_text' => 'বই ডাউনলোড করতে ফরমেট পছন্দ করুন এবং বোতামে ক্লিক করুন।',
	'coll-download_as_text' => '$1 ফরম্যাটে আপনার বইটি ডাউনলোড করতে বোতামটি ক্লিক করুন।',
	'coll-download' => 'ডাউনলোড',
	'coll-format_label' => 'বিন্যাস/ফরম্যাট:',
	'coll-remove' => 'অপসারণ',
	'coll-show' => 'দেখাও',
	'coll-move_to_top' => 'শীর্ষে তুলুন',
	'coll-move_up' => 'উপরে তুলুন',
	'coll-move_down' => 'নিচে নামান',
	'coll-move_to_bottom' => 'নিচে স্থানান্তর করো',
	'coll-title' => 'শিরোনাম:',
	'coll-subtitle' => 'উপশিরোনাম',
	'coll-contents' => 'বিষয়বস্তু',
	'coll-drag_and_drop' => 'উইকি পাতা এবং অধ্যায়ের ক্রম পুনরায় ঠিক করতে ড্র্যাগ এন্ড ড্রপ ব্যবহার করুন',
	'coll-create_chapter' => 'পরিচ্ছেদ তৈরি করুন',
	'coll-sort_alphabetically' => 'বর্ণানুক্রমিক সাজান',
	'coll-rename' => 'নামান্তর',
	'coll-new_chapter' => 'নতুন অধ্যায়ের নাম লিখুন',
	'coll-rename_chapter' => 'অধ্যায়ের নতুন নাম লিখুন',
	'coll-no_such_category' => 'এমন কোনো বিষয়শ্রেণি নেই',
	'coll-notitle_title' => 'এই পাতার জন্য শিরোনামটি চিহ্নিত করা যাচ্ছে না।',
	'coll-post_failed_title' => 'POST অনুরোধ ব্যর্থ',
	'coll-post_failed_msg' => '$1 এর POST অনুরোধ ব্যর্থ হয়েছে ($2)।',
	'coll-mwserve_failed_title' => 'রেন্ডার সার্ভার ত্রুটি',
	'coll-mwserve_failed_msg' => 'রেন্ডার সার্ভারে একটি ত্রুটি ঘটেছে: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'সার্ভার থেকে ত্রুটি পাওয়া গেছে',
	'coll-empty_collection' => 'শূন্য বই',
	'coll-revision' => 'পরিমার্জন:$1',
	'coll-save_collection_title' => 'সংরক্ষণ করুন এবং আপনার বই শেয়ার করুন',
	'coll-save_collection_text' => 'আপনার বইয়ের জন্য একটি সংরক্ষণাগার অবস্থান বেছে নিন:',
	'coll-login_to_save' => 'এই বইটি পরবর্তীতে ব্যবহার করতে চাইলে, অনুগ্রহ করে [[Special:UserLogin|প্রবেশ বা নতুন অ্যাকাউন্ট তৈরি করুন]]',
	'coll-personal_collection_label' => 'ব্যক্তিগত বই:',
	'coll-community_collection_label' => 'সম্প্রদায়ের বই:',
	'coll-save_collection' => 'বই সংরক্ষণ করুন',
	'coll-save_category' => 'সমস্ত বই [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] বিষয়শ্রেণীতে সংরক্ষণ করা হয়।',
	'coll-overwrite_title' => 'পাতাটি বর্তমানে আছে</br>
আপনি কি ওভাররাইট করবেন?',
	'coll-overwrite_text' => '[[:$1]] নামের একটি পাতা ইতিমধ্যে রয়েছে। </br>
আপনি কি আপনার বই এই নামে প্রতিস্থাপন করতে চান?',
	'coll-yes' => 'হ্যাঁ',
	'coll-no' => 'না',
	'coll-load_overwrite_text' => 'আপনার বইয়ে আগে থেকেই কিছু পাতা রয়েছে।
আপনি কি বর্তমান বই দিয়ে তা প্রতিস্থাপন করবেন, নতুন কন্টেন্ট আগের কন্টেন্টের শেষে যোগ করবেন, নাকি এই বইটি লোড বাতিল করবেন?',
	'coll-overwrite' => 'প্রতিস্থাপন',
	'coll-append' => 'পরিশেষ যোগ',
	'coll-cancel' => 'বাতিল',
	'coll-update' => 'হালনাগাদ',
	'coll-limit_exceeded_title' => 'বইটি বেশি বড় হয়েছে',
	'coll-limit_exceeded_text' => 'আপনার বইটি বেশি বড় হয়ে গেছে।
নতুন কোনো পাতা যোগ করা সম্ভব নয়।',
	'coll-rendering_title' => 'রেন্ডারিং',
	'coll-rendering_text' => '<p><strong>আপনার বইটি তৈরি করা হচ্ছে অনুগ্রহ করে অপেক্ষা করুন।</strong></p>

<p><strong>অগ্রগতি:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>এই পাতাটি কয়েক সেকেন্ড পরপর স্বয়ংক্রিয়ভাবে হালনাগাদ হবে।
যদি তা না হয়, তাহলে আপনার ব্রাউজারের রিফ্রেস বোতামটি ক্লিক করুন।</p>',
	'coll-rendering_status' => '<strong>অবস্থা:</strong> $1',
	'coll-rendering_article' => '(উইকি পাতা: $1)',
	'coll-rendering_page' => '(পাতা: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/পাতার তথ্যের লেখা মুদ্রিত হচ্ছে',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/সংগ্রহের তথ্যাদির লেখা মুদ্রিত হচ্ছে',
	'coll-rendering_finished_title' => 'রেন্ডারিং সম্পন্ন হয়েছে',
	'coll-rendering_finished_text' => '<strong>ডকুমেন্ট ফাইল তৈরি হয়ে গেছে।</strong>
আপনার কম্পিউটারে <strong>[$1 ফাইলটি ডাউলোড করুন]</strong> ।

টীকা:
* আউটপুটে আপনি সন্তুষ্ট নন? উন্নয়নের সম্ভাবনা জানতে [[{{MediaWiki:Coll-helppage}}|বই সংক্রান্ত সহায়িকা]] দেখুন।',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/পাতার তথ্যাদির লেখা মুদ্রিত হচ্ছে',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/সংগ্রহের তথ্যাদির লেখা মুদ্রিত হচ্ছে',
	'coll-notfound_title' => 'বই পাওয়া যায়নি',
	'coll-notfound_text' => 'বইয়ের পাতা খুঁজে পাওয়া যায়নি।',
	'coll-download_notfound_title' => 'ফাইল পাওয়া যায়নি',
	'coll-download_notfound_text' => 'যে ফাইলটি আপনি ডাউনলোড করতে চাইছেন তা নাই:
সম্ভবত ফাইলটি মুছে ফেলা হয়েছে নতুবা তৈরি করতে হবে।',
	'coll-download_failed_title' => 'ডাউনলোডের সময় ত্রুটি',
	'coll-download_failed_text' => 'যে ফাইলটি ডাউনলোড করতে ত্রুটি দেখা দিয়েছে: $1',
	'coll-is_cached' => '<ul><li>ডকুমেন্টের ক্যাশকৃত সংস্করণ পাওয়া গেছে, তাই রেন্ডারিং এর প্রয়োজন নাই।
<a href="$1">জোড় পূর্বক রি-রেন্ডারিং করুন।</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]]  বিষয়শ্রেণীতে থাকা টেম্পলেট বাদ দেওয়া হয়েছে।',
	'coll-blacklisted-templates' => '* টেম্পলেটের কালোতালিকা [[:$1]] বাদ দেওয়া হয়েছে।',
	'coll-return_to_collection' => '<p><a href="$1">$2</a> এ ফিরে যান</p>',
	'coll-book_title' => 'মুদ্রিত বই হিসেবে অর্ডার দিন',
	'coll-book_text' => 'আমাদের প্রিন্ট-অন-ডিমান্ড সহযোগী প্রতিষ্ঠানের কাছ থেকে মুদ্রিত বই সংগ্রহ করুন।',
	'coll-order_from_pp' => 'যা দ্বারা প্রাকপ্রদর্শিত $1',
	'coll-about_pp' => 'পরিচিতি $1',
	'coll-invalid_podpartner_title' => 'ভুল POD সহযোগী প্রতিষ্ঠান',
	'coll-invalid_podpartner_msg' => 'আপনার দেওয়া POD সহযোগী প্রতিষ্ঠানটি ভুল।
অনুগ্রহ করে আপনার মিডিয়াউইকি প্রশাসকের সাথে যোগাযোগ করুন।',
	'coll-license' => 'লাইসেন্স',
	'coll-return_to' => '[[:$1]] এ ফিরে যাও',
	'coll-more_info' => 'আরও তথ্য দেখাও',
	'coll-hide_info' => 'তথ্য আড়াল করো',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress অর্ডারের তথ্য',
	'coll-suggest_title' => 'আপনার বইয়ের জন্য যে পাতাগুলো পরামর্শ দেওয়া হচ্ছে',
	'coll-suggest_intro_text' => 'পরামর্শগুলো আপনার বইতে থাকা বর্তমান উইকি পাতা গুলোর উপর ভিত্তি করে করা হয়েছে।
এই তালিকাটি যোগ অথবা অপসারণ বোতাম ক্লিক করার সাথে সাথেই হালনাগাদ হবে।',
	'coll-suggested_articles' => 'পরামর্শসমূহ',
	'coll-suggest_reset_bans' => 'পুনরায় আরম্ভ',
	'coll-suggest_reset_bans_tooltip' => 'পূর্বে অপসারিত পরামর্শগুলো দেখাও',
	'coll-suggest_add_selected' => 'নির্বাচিত পাতাগুলো যোগ করো',
	'coll-suggest_ban_selected' => 'নির্বাচিত পাতাগুলো অপসারণ করো',
	'coll-suggest_your_book' => 'আপনার বই',
	'coll-suggest_show' => 'দেখাও',
	'coll-suggest_ban_tooltip' => 'পরামর্শের তালিকা থেকে এই পাতাটি অপসারণ করো',
	'coll-suggest_article_ban' => '<strong>$1</strong> পাতাটি ($2) পরামর্শ তালিকা থেকে অপসারণ করা হয়েছে।',
	'coll-suggest_article_add' => '<strong>$1</strong> পাতাটি আপনার ($2) বইয়ে যোগ করা হয়েছে।',
	'coll-suggest_article_remove' => '<strong>$1</strong> পাতা আপনার ($2) বই থেকে অপসারণ করা হয়েছে।',
	'coll-suggest_undo_tooltip' => 'এই কাজটি আনডু করো',
	'coll-suggest_undo' => 'পূর্বাবস্থায় আনো',
	'right-collectionsaveasuserpage' => 'বইগুলো ব্যবহারকারী পাতা হিসেবে সংরক্ষণ করো',
	'right-collectionsaveascommunitypage' => 'বইগুলো কমিউনিটি পাতা হিসেবে সংরক্ষণ করো',
);

/** Breton (Brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'coll-desc' => '[[Special:Book|Sevel levrioù]]',
	'coll-book_creator_intro' => "<big>Gant ar ''c'hrouer levrioù'' e c'hallit sevel ul levr a ya d'e ober pajennoù wiki dibabet ganeoc'h. Gallout a rit ezporzhiañ al levr e furmadoù disheñvel (evel, da skouer, PDF pe ODF) pe urzhiañ ur stumm moullet anezhañ.</big>",
	'coll-manage_your_book' => 'Merañ ho levr',
	'coll-book_creator_help' => "Gwelet [[{{MediaWiki:Coll-helppage}}|ar bajenn skoazell diwar-benn al levrioù]] evit gouzout hiroc'h.",
	'coll-start_book_creator' => "Lañsañ ar c'hrouer levrioù",
	'coll-book_creator_continue' => "Kenderc'hel da implijout ar c'hrouer levrioù",
	'coll-book_creator_disable_text' => "Diweredekaet e vo ar ''c'hrouer levrioù'' ha diverket al levr a labourit warnañ.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Testenn ar mod levr',
	'coll-collection' => 'Levr',
	'coll-collections' => 'Levrioù',
	'coll-exclusion_category_title' => 'Lakaat a-gostez pa vo moullet',
	'coll-print_template_prefix' => 'Moullañ',
	'coll-print_template_pattern' => '$1/Moullañ',
	'coll-unknown_subpage_title' => 'Ispajenn dianav',
	'coll-unknown_subpage_text' => "N'eus ket eus an ispajenn-mañ el [[Special:Book|Levr]]",
	'coll-couldnotaddarticle_title' => 'Dibosupl ouzhpennañ ar bajenn wiki',
	'coll-couldnotaddarticle_msg' => "N'eus ket bet gallet ouzhpennañ ar bajenn.",
	'coll-couldnotremovearticle_title' => 'Dibosupl lemel kuit ar bajenn wiki',
	'coll-couldnotremovearticle_msg' => "N'eus ket bet gallet lemel kuit pajenn ar wiki.",
	'coll-noscript_text' => "<h1>Rekis eo JavaScript!</h1>
<strong>N'eo ket skoret JavaScript gant ho merdeer pe diweredekaet eo JavaScript ganeoc'h.
Ne'z aio ket plaen ar bajenn-mañ en-dro e-keit ha ma ne vo ket gweredekaet JavaScript.</strong>",
	'coll-savedbook_template' => 'levr enrollet',
	'coll-your_book' => 'Ho levr',
	'coll-download_title' => 'Pellgargañ',
	'coll-download_text' => 'Evit pellgargañ ho levr, dibabit ur furmad ha klikit war ar bouton.',
	'coll-download_as_text' => 'Evit pellgargañ ho levr er furmad $1, klikit war ar bouton.',
	'coll-download' => 'Pellgargañ',
	'coll-format_label' => 'Furmad :',
	'coll-remove' => 'Dilemel',
	'coll-show' => 'Diskouez',
	'coll-move_to_top' => "Mont d'al laez-tout",
	'coll-move_up' => 'Pignat',
	'coll-move_down' => 'Diskenn',
	'coll-move_to_bottom' => 'Mont betek an traoñ',
	'coll-title' => 'Titl :',
	'coll-subtitle' => 'Istitl :',
	'coll-contents' => 'Danvez',
	'coll-drag_and_drop' => "Grit gant riklañ-dilec'hiañ evit adurzhiañ ar rannbennadoù hag ar pajennoù wiki.",
	'coll-create_chapter' => 'Krouiñ ur rannbennad',
	'coll-sort_alphabetically' => 'Urzhiañ en urzh al lizherenneg',
	'coll-rename' => 'Adenvel',
	'coll-new_chapter' => 'Merkañ anv ar rannbennad nevez',
	'coll-rename_chapter' => 'Merkañ titl nevez ar rannbennad-mañ',
	'coll-no_such_category' => "N'eus ket eus ar rummad-mañ",
	'coll-notitle_title' => "N'eus ket bet gallet didermeniñ titl ar bajenn.",
	'coll-post_failed_title' => "C'hwitet eo ar goulenn POST",
	'coll-post_failed_msg' => "C'hwitet ($2) eo ar goulenn POST war-du $1.",
	'coll-mwserve_failed_title' => 'Fazi gant ar servijer amdreiñ',
	'coll-mwserve_failed_msg' => 'Ur fazi zo bet war ar servijer amdreiñ : <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Respont fazi distro gant ar servijer',
	'coll-empty_collection' => 'Levr goullo',
	'coll-revision' => 'Adweladenn : $1',
	'coll-save_collection_title' => 'Enrollañ ho levr ha rannañ anezhañ gant tud all',
	'coll-save_collection_text' => "Dibabit ul lec'h stokañ evit ho levr :",
	'coll-login_to_save' => "Mar fell deoc'h enrollañ levrioù da vezañ implijet diwezhatoc'h, [[Special:UserLogin|en em lugit pe krouit ur gont]]",
	'coll-personal_collection_label' => 'Levr personel',
	'coll-community_collection_label' => 'Levr eus ar gumuniezh',
	'coll-save_collection' => 'Enrollañ al levr',
	'coll-save_category' => 'Emañ renket an holl levrioù enrollet er rummad [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => "Bez'ez eus eus ar bajenn c'hoazh.
Skrivañ war-c'horre ?",
	'coll-overwrite_text' => "Ur bajenn dezhi an anv [[:$1]] zo dija.
Ha fellout a ra deoc'h erlerc'hiañ anezhi en ho levr?",
	'coll-yes' => 'Ya',
	'coll-no' => 'Ket',
	'coll-load_overwrite_text' => "Un nebeud pajennoù zo en ho levr dija.
Ha fellout a ra deoc'h frikañ ho levr a-vremañ, ouzhpennañ an danvez nevez ennañ, pe nullañ kargadenn al levr-mañ ?",
	'coll-overwrite' => "Skrivañ war-c'horre",
	'coll-append' => 'Ouzhpennañ',
	'coll-cancel' => 'Nullañ',
	'coll-update' => 'Hizivaat',
	'coll-limit_exceeded_title' => 'Levr re vras',
	'coll-limit_exceeded_text' => "Re vras eo ho levr.
N'haller ket ouzhpennañ pajennoù ennañ ken.",
	'coll-rendering_title' => 'O pledin ganti',
	'coll-rendering_text' => '<p><strong>Gortozit p\'emeur o c\'henel an teul mar plij.</strong></p>

<p><strong>Araokadur :</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Freskaet e tlefe ar bajenn-mañ bezañ ent emgefre bep un nebeud eilennoù.
Ma ne\'z a ket en-dro, pouezit war bouton freskaat ho merdeer.</p>',
	'coll-rendering_status' => '<strong>Stad :</strong> $1',
	'coll-rendering_article' => '(pajenn wiki : $1)',
	'coll-rendering_page' => '(pajenn : $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Testenn titouroù war deouez ar pajennoù',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Testenn titouroù war deouez an dastumadegoù',
	'coll-rendering_finished_title' => 'Argerzh echu',
	'coll-rendering_finished_text' => "<strong>Ganet eo bet ar restr teul.</strong>
<strong>[$1 Pellgargit ar restr]</strong> war hoc'h urzhiataer.

Notennoù :
* N'eo ket an disoc'h diouzhoc'h ? Gwelit [[{{MediaWiki:Coll-helppage}}|ar bajenn skoazell diwar-benn al levrioù]] evit kavout doareoù da wellaat an traoù.",
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Deouez testenn titouroù ar bajenn',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Deouez testenn titouroù an dastumadeg',
	'coll-notfound_title' => "N'eo ket bet kavet al levr",
	'coll-notfound_text' => "N'eus ket bet tu da gavout pajenn al levr.",
	'coll-download_notfound_title' => "N'eo ket bet kavet ar restr",
	'coll-download_notfound_text' => "O klask pellgargañ ur restr n'eus ket anezhi emaoc'h :
Marteze eo bet diverket hag ezhomm zo he genel en-dro.",
	'coll-download_failed_title' => 'Fazi e-ser pellgargañ',
	'coll-download_failed_text' => 'Ur fazi zo bet e-ser pellgargañ ar restr : $1',
	'coll-is_cached' => '<ul><li>Kavet ez eus bet ur stumm krubuilhet eus an teul, setu n\'eo ket bet dav amdreiñ.
<a href="$1">Amdreiñ dre ret.</a></li></ul>',
	'coll-excluded-templates' => "* N'eo ket bet kemeret patromoù zo e kont er rummad [[:Category:$1|$1]].",
	'coll-blacklisted-templates' => "* N'eo ket bet kemeret ar patromoù war al listenn zu e kont [[:$1]].",
	'coll-return_to_collection' => '<p>Distreiñ da <a href="$1">$2</a></p>',
	'coll-book_title' => 'Urzhiañ dindan stumm ul levr moullet',
	'coll-book_text' => "Kaout ul levr moullet dre hor c'heveler moullañ diouzh ar goulenn :",
	'coll-order_from_pp' => 'Rakwelet gant $1',
	'coll-about_pp' => 'Diwar-benn $1',
	'coll-invalid_podpartner_title' => 'Keveler moullañ diouzh ar goulenn (POD) direizh',
	'coll-invalid_podpartner_msg' => "N'eo ket mat ar c'heveler moullañ diouzh ar goulenn (POD) merket.
Kit e darempred gant ur merour MediaWiki.",
	'coll-license' => 'Aotre-implijout',
	'coll-return_to' => 'Distreiñ da [[:$1]]',
	'coll-more_info' => "Diskouez muioc'h a ditouroù",
	'coll-hide_info' => 'Kuzhat an titouroù',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress urzhiañ titouroù',
	'coll-suggest_title' => 'Pajennoù kinniget evit ho levr',
	'coll-suggest_intro_text' => "Diazezet eo ar c'hinnigoù war an torkad pajennoù wiki zo en ho levr evit poent.
Hizivaet e vez ar roll bep tro ma klikit war ar bouton ouzhpennañ pe tennañ.",
	'coll-suggested_articles' => 'Kinnigoù',
	'coll-suggest_reset_bans' => 'adderaouekaat',
	'coll-suggest_reset_bans_tooltip' => "Diskouez ar c'hinnigoù kozh tennet kuit a-raok",
	'coll-suggest_add_selected' => 'Ouzhpennañ ar pajennoù diuzet',
	'coll-suggest_ban_selected' => 'Diverkañ ar pajennoù diuzet',
	'coll-suggest_your_book' => 'Ho levr',
	'coll-suggest_show' => 'diskouez',
	'coll-suggest_ban_tooltip' => "Tennañ kuit ar bajenn-mañ eus roll ar c'hinnigoù",
	'coll-suggest_article_ban' => "Tennet eo bet ar bajenn <strong>$1</strong> eus ar c'hinnigoù ($2).",
	'coll-suggest_article_add' => "Ouzhpennet eo bet ar bajenn <strong>$1</strong> d'ho levr ($2).",
	'coll-suggest_article_remove' => 'Tennnet eo bet ar bajenn <strong>$1</strong> eus ho levr ($2).',
	'coll-suggest_undo_tooltip' => 'Dizober an ober-mañ',
	'coll-suggest_undo' => 'dizober',
	'coll-load_local_book' => "Klikit war Mat eo evit kenderc'hel ho levr %TITLE% hag en deus %NUMPAGES% pajenn wiki. Klikit war Nullañ evit dilemel ha kregiñ gant ul levr goullo.",
	'right-collectionsaveasuserpage' => 'Enrollañ levrioù evel pajenn implijer',
	'right-collectionsaveascommunitypage' => 'Enrollañ levrioù evel ur bajenn eus ar gumuniezh',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'coll-desc' => '[[Special:Book|Napravite knjige]]',
	'coll-book_creator_intro' => "<big>Pomoću ''pravljenja knjiga'' možete napraviti knjigu koja sadrži wiki stranice po Vašem izboru. Možete izvesti knjigu u raznim formatima (na primjer PDF ili ODF) ili naručiti štampanu kopiju.</big>",
	'coll-manage_your_book' => 'Upravljanje Vašom knjigom',
	'coll-book_creator_help' => 'Pogledajte [[{{MediaWiki:Coll-helppage}}|stranicu pomoći za knjige]] za više informacija.',
	'coll-start_book_creator' => 'Započni pravljenje knjiga',
	'coll-book_creator_continue' => 'Nastavi korištenje pravljenja knjiga',
	'coll-book_creator_disable_text' => "''Pravljenje knjiga'' će biti onemogućeno a knjiga na kojoj radite će biti uklonjena.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst pravljenja knjiga',
	'coll-collection' => 'Knjiga',
	'coll-collections' => 'Knjige',
	'coll-exclusion_category_title' => 'Isključivanja pri štampanju',
	'coll-print_template_prefix' => 'Štampanje',
	'coll-print_template_pattern' => '$1/Štampaj',
	'coll-unknown_subpage_title' => 'Nepoznata podstranica',
	'coll-unknown_subpage_text' => 'Ova podstranica [[Special:Book|knjige]] ne postoji',
	'coll-couldnotaddarticle_title' => 'Ne može se dodati wiki stranica',
	'coll-couldnotaddarticle_msg' => 'Wiki stranica se nije mogla dodati.',
	'coll-couldnotremovearticle_title' => 'Ne može se ukloniti wiki stranica',
	'coll-couldnotremovearticle_msg' => 'Wiki stranica se nije mogla ukloniti.',
	'coll-noscript_text' => '<h1>JavaScript je neophodan!</h1>
<strong>Vaš preglednik ne podržava JavaScript ili je JavaScript isključen.
Ova stranica se neće pravilno prikazati, sve dok se JavaScript ne omogući.</strong>',
	'coll-savedbook_template' => 'spremljena_knjiga',
	'coll-your_book' => 'Vaša knjiga',
	'coll-download_title' => 'Učitavanje',
	'coll-download_text' => 'Da bi ste preuzeli vašu knjigu odaberite format i kliknite dugme.',
	'coll-download_as_text' => 'Da bi ste preuzeli vašu knjigu u formatu $1 kliknite na dugme.',
	'coll-download' => 'Učitavanje',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ukloni',
	'coll-show' => 'Pokaži',
	'coll-move_to_top' => 'Pomjeri na vrh',
	'coll-move_up' => 'Premjesti gore',
	'coll-move_down' => 'Premjesti dole',
	'coll-move_to_bottom' => 'Premjesti na dno',
	'coll-title' => 'Naslov:',
	'coll-subtitle' => 'Podnaslov:',
	'coll-contents' => 'Sadržaj',
	'coll-drag_and_drop' => 'Koristi mogućnost povuci-i-spusti za preuređenje wiki stranica i poglavlja',
	'coll-create_chapter' => 'Napravi poglavlje',
	'coll-sort_alphabetically' => 'Poredaj po abecedi',
	'coll-rename' => 'Promijeni ime',
	'coll-new_chapter' => 'Unesi ime za novo poglavlje',
	'coll-rename_chapter' => 'Unesite novo ime za poglavlje',
	'coll-no_such_category' => 'Nema takve kategorije',
	'coll-notitle_title' => 'Naslov ove stranice nije mogao biti određen.',
	'coll-post_failed_title' => 'POST zahtjev nije uspio',
	'coll-post_failed_msg' => 'POST zahtjev za $1 nije uspio ($2).',
	'coll-mwserve_failed_title' => 'Serverska greška pri iscrtavanju',
	'coll-mwserve_failed_msg' => 'Desila se greška pri iscrtavanju na serveru: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Greška pri odgovoru sa servera',
	'coll-empty_collection' => 'Prazna knjiga',
	'coll-revision' => 'Revizija: $1',
	'coll-save_collection_title' => 'Spremanje i dijeljenje vlastite knjige',
	'coll-save_collection_text' => 'Odaberi lokaciju:',
	'coll-login_to_save' => 'Ako želite spremiti knjige za kasniju upotrebu molimo Vas [[Special:UserLogin|prijavite se ili napravite račun]].',
	'coll-personal_collection_label' => 'Lična knjiga:',
	'coll-community_collection_label' => 'Knjiga zajednice:',
	'coll-save_collection' => 'Sačuvaj knjigu',
	'coll-save_category' => 'Sve spremljene knjige su dodane u kategoriju [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Stranica postoji.
Prepiši preko postojeće?',
	'coll-overwrite_text' => 'Stranica pod imenom [[:$1]] već postoji.
Da li želite da je zamijenite sa Vašom kolekcijom?',
	'coll-yes' => 'Da',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Već imate neke stranice u Vašoj knjizi.
Da li želite prepisati preko Vaše postojeće knjige, primjenite novi sadržaj ili odustanete od punjenja ove knjige?',
	'coll-overwrite' => 'Prepisati',
	'coll-append' => 'Prispoji',
	'coll-cancel' => 'Odustani',
	'coll-update' => 'Ažuriranje',
	'coll-limit_exceeded_title' => 'Knjiga prevelika',
	'coll-limit_exceeded_text' => 'Vaša knjiga je prevelika.
Ne može se dodati ni jedna stranica.',
	'coll-rendering_title' => 'Iscrtavanje',
	'coll-rendering_text' => '<p><strong>Molimo pričekajte dok se dokument generiše.</strong></p>

<p><strong>Izvršeno:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Ova stranica bi se trebala osvježiti svakih par sekundi.
Ukoliko se to ne desi, molimo kliknite dugme za osvježavanje u Vašem pregledniku.</p>',
	'coll-rendering_status' => '<strong>Stanje:</strong> $1',
	'coll-rendering_article' => '(wiki stranica: $1)',
	'coll-rendering_page' => '(stranica: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Stranica za iscrtavanje informativnog teksta',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Iscrtavanje kolekcije informativnog teksta',
	'coll-rendering_finished_title' => 'Iscrtavanje završeno',
	'coll-rendering_finished_text' => '<strong>Datoteka dokumenta je generisana.</strong>
<strong>[$1 Spremite datoteku]</strong> na Vaš računar.

Napomene:
* Da li ste zadovoljni sa rezultatom? Pogledajte [[{{MediaWiki:Coll-helppage}}|stranicu pomoći kod kolekcija]] za moguća poboljšanja rezultata.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Stranica za iscrtavanje informativnog teksta',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Iscrtavanje kolekcije informativnog teksta',
	'coll-notfound_title' => 'Knjiga nije pronađena',
	'coll-notfound_text' => 'Nije moguće pronaći stranicu knjige.',
	'coll-download_notfound_title' => 'Datoteka nije pronađena',
	'coll-download_notfound_text' => 'Datoteka koju pokušavate da skinete ne postoji: Možda je obrisana i treba biti regenerisana.',
	'coll-download_failed_title' => 'Greška pri preuzimanju',
	'coll-download_failed_text' => 'Desila se greška pri preuzimanju datoteke: $1',
	'coll-is_cached' => '<ul><li>Pronađena je keširana verzija dokumenta, tako da je ponovno iscrtavanje nepotrebno. <a href="$1">Traži ponovno iscrtavanje.</a></li></ul>',
	'coll-excluded-templates' => '* Šabloni u kategoriji [[:Category:$1|$1]] su isključeni.',
	'coll-blacklisted-templates' => '* Šabloni sa spiska nepoželjnih [[:$1]] su isključeni.',
	'coll-return_to_collection' => '<p>Povratak na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Naruči kao štampanu knjigu',
	'coll-book_text' => 'Preuzmite štampanu knjigu od našeg print-on-demand partnera:',
	'coll-order_from_pp' => 'Pregled sa $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'POD partner nije validan',
	'coll-invalid_podpartner_msg' => 'Pruženi POD partner nije validan.
Molimo da kontaktirate Vašeg MediaWiki administratora.',
	'coll-license' => 'Licenca',
	'coll-return_to' => 'Vrati na [[:$1]]',
	'coll-more_info' => 'Prikaži više informacija',
	'coll-hide_info' => 'Sakrij informacije',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress informacije o narudžbi',
	'coll-suggest_title' => 'Predložene stranice za Vašu knjigu',
	'coll-suggest_intro_text' => 'Prijedlozi su zasnovani na trenutnom setu wiki stranica u Vašoj knjizi.
Spisak se ažurira kad god kliknete na dugme za dodavanje ili uklanjanje.',
	'coll-suggested_articles' => 'Prijedlozi',
	'coll-suggest_reset_bans' => 'poništi',
	'coll-suggest_reset_bans_tooltip' => 'Pokaži prethodno uklonjene prijedloge',
	'coll-suggest_add_selected' => 'Dodaj odabrane stranice',
	'coll-suggest_ban_selected' => 'Ukloni odabrane stranice',
	'coll-suggest_your_book' => 'Vaša knjiga',
	'coll-suggest_show' => 'pokaži',
	'coll-suggest_ban_tooltip' => 'Ukloni ovu stranicu iz spiska prijedloga',
	'coll-suggest_article_ban' => 'Stranica <strong>$1</strong> je uklonjena iz prijedloga ($2).',
	'coll-suggest_article_add' => 'Stranica <strong>$1</strong> je dodana u Vašu knjigu ($2).',
	'coll-suggest_article_remove' => 'Stranica <strong>$1</strong> je uklonjena iz Vaše knjige ($2).',
	'coll-suggest_undo_tooltip' => 'Vrati ovu akciju',
	'coll-suggest_undo' => 'vrati',
	'coll-load_local_book' => 'Kliknite OK da nastavite sa vašom knjigom %TITLE% koja sadrži %NUMPAGES% wiki stranica. Kliknite Cancel da je obrišete i da započnete sa praznom knjigom.',
	'right-collectionsaveasuserpage' => 'Spremanje knjiga u vidu korisničkih stranica',
	'right-collectionsaveascommunitypage' => 'Spremanje knjiga kao stranica zajednice',
);

/** Catalan (Català)
 * @author Aleator
 * @author El libre
 * @author Jordi Roqué
 * @author Martorell
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Vriullop
 */
$messages['ca'] = array(
	'coll-desc' => '[[Special:Book|Crea llibres]]',
	'coll-book_creator_intro' => "<big>Amb el ''mode llibre'', podeu crear un llibre format per les pàgines wiki que volgueu. Podeu exportar-lo en diferents formats (per exemple PDF o ODF) o  demanar una còpia impresa.</big>",
	'coll-manage_your_book' => 'Gestioneu la vostra biblioteca',
	'coll-book_creator_help' => "Veure [[{{MediaWiki:Coll-helppage}}|la pàgina d'ajuda sobre els llibres]] per més informació.",
	'coll-start_book_creator' => 'Inicia el creador de llibres',
	'coll-book_creator_continue' => 'Continua utilitzant el creador de llibres',
	'coll-book_creator_disable_text' => "Es desactivarà el ''creador de llibres'' i s'esborrarà el llibre en el que esteu treballant",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text en mode llibre',
	'coll-collection' => 'Llibre',
	'coll-collections' => 'Llibres',
	'coll-exclusion_category_title' => 'Excloure en imprimir',
	'coll-print_template_prefix' => 'Imprimir',
	'coll-print_template_pattern' => '$1/Imprimir',
	'coll-unknown_subpage_title' => 'Subpàgina desconeguda',
	'coll-unknown_subpage_text' => 'No existeix aquesta subpàgina de [[Special:Book|Llibre]]',
	'coll-couldnotaddarticle_title' => "No s'ha pogut afegir la pàgina wiki",
	'coll-couldnotaddarticle_msg' => "No s'ha pogut afegir la pàgina wiki.",
	'coll-couldnotremovearticle_title' => "No s'ha pogut eliminar la pàgina",
	'coll-couldnotremovearticle_msg' => "No s'ha pogut eliminar la pàgina wiki.",
	'coll-noscript_text' => "<h1>Es necessita JavaScript!</h1>
<strong>El vostre navegador no admet el JavaScript o el té desactivat.
Aquesta pàgina no funcionarà correctament si no l'activeu.</strong>",
	'coll-savedbook_template' => 'llibre_desat',
	'coll-your_book' => 'El vostre llibre',
	'coll-download_title' => 'Descarrega',
	'coll-download_text' => 'Per a descarregar el vostre llibre escolliu el format i cliqueu el botó.',
	'coll-download_as_text' => 'Per a descarregar el vostre llibre en format $1 cliqueu el botó.',
	'coll-download' => 'Descarregar',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Elimina',
	'coll-show' => 'Mostrar',
	'coll-move_to_top' => 'Moure al principi',
	'coll-move_up' => 'Pujar',
	'coll-move_down' => 'Baixar',
	'coll-move_to_bottom' => 'Moure al final',
	'coll-title' => 'Títol:',
	'coll-subtitle' => 'Subtítol:',
	'coll-contents' => 'Contingut',
	'coll-drag_and_drop' => 'Arrossegueu el cursor per a reordenar els capítols i les pàgines wiki',
	'coll-create_chapter' => 'Crear un nou capítol',
	'coll-sort_alphabetically' => 'Ordena alfabèticament',
	'coll-rename' => 'Reanomena',
	'coll-new_chapter' => 'Introduïu un nom per al nou capítol',
	'coll-rename_chapter' => 'Introduïu un nou nom per al capítol',
	'coll-no_such_category' => 'No existeix tal categoria',
	'coll-notitle_title' => "No s'ha pogut determinar el títol de la pàgina.",
	'coll-post_failed_title' => 'La petició POST ha fallat',
	'coll-post_failed_msg' => 'La petició POST a $1 ha fallat ($2).',
	'coll-mwserve_failed_title' => 'Error en el servidor de renderització',
	'coll-mwserve_failed_msg' => "S'ha produït un error al servidor de renderització: <nowiki>$1</nowiki>",
	'coll-error_reponse' => "Resposta d'error del servidor",
	'coll-empty_collection' => 'Llibre buit',
	'coll-revision' => 'Revisió: $1',
	'coll-save_collection_title' => 'Deseu i compartiu el vostre llibre',
	'coll-save_collection_text' => 'Escolliu on desar el vostre llibre:',
	'coll-login_to_save' => 'Si voleu desar un llibre per a ús posterior, si us plau [[Special:UserLogin|iniciï la sessió o crei un compte]]',
	'coll-personal_collection_label' => 'Llibre personal:',
	'coll-community_collection_label' => 'Llibre de la comunitat:',
	'coll-save_collection' => 'Desa llibre',
	'coll-save_category' => 'Tots els llibres queden desats en la categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La pàgina existeix. Voleu substituir-la?',
	'coll-overwrite_text' => 'Ja existeix una pàgina amb el mateix nom [[:$1]].
Voleu substituir-la amb el vostre llibre?',
	'coll-yes' => 'Sí',
	'coll-no' => 'No',
	'coll-load_overwrite_text' => "Ja teniu algunes pàgines al vostre llibre.
Voleu sobreescriure el vostre llibre actual, annexar el nou contingut, o canceŀlar la càrrega d'aquest llibre?",
	'coll-overwrite' => 'Sobreescriu',
	'coll-append' => 'Annexa',
	'coll-cancel' => 'Canceŀla',
	'coll-update' => 'Actualitza',
	'coll-limit_exceeded_title' => 'Llibre massa gran',
	'coll-limit_exceeded_text' => 'El vostre llibre és massa gran.
No es poden afegir més pàgines.',
	'coll-rendering_title' => 'Renderització',
	'coll-rendering_text' => '<p><strong>Si us plau, esperi mentre es genera el document.</strong></p>

<p><strong>Progrés:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Aquesta pàgina es refresca cada pocs segons.
Si no és així, premi el botó de refresc del vostre navegador.</p>',
	'coll-rendering_status' => '<strong>Estat:</strong> $1',
	'coll-rendering_article' => '(pàgina wiki: $1)',
	'coll-rendering_page' => '(pàgina: $1)',
	'coll-rendering_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Processant text d'informació de la pàgina",
	'coll-rendering_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Processant text d'informació de la col·lecció",
	'coll-rendering_finished_title' => 'Renderització finalitzada',
	'coll-rendering_finished_text' => "<strong>S'ha generat l'arxiu.</strong>
<strong>[$1 Descarregueu l'arxiu]</strong> al vostre ordinador.

Notes:
* No esteu satisfet amb el resultat? Vegeu [[{{MediaWiki:Coll-helppage}}|la pàgina d'ajuda sobre llibres]] per a conéixer més opcions per millorar-lo.",
	'coll-finished_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Processant texte d'informació de la pàgina",
	'coll-finished_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Processant text d'informació de la col·lecció",
	'coll-notfound_title' => 'Llibre no trobat',
	'coll-notfound_text' => "No s'ha pogut trobar la pàgina del llibre.",
	'coll-download_notfound_title' => "No s'ha trobat el fitxer",
	'coll-download_notfound_text' => 'El fitxer que intenteu descarregar no existeix: Potser ha estat esborrat i cal que sigui regenerat.',
	'coll-download_failed_title' => 'Error durant la baixada',
	'coll-download_failed_text' => "S'ha produït un error en descarregar l'arxiu: $1",
	'coll-is_cached' => '<ul><li>S\'ha trobat una versió del document en la memòria cau i per tant no ha estat necessària cap renderització. <a href="$1">Forçar renderització.</a></li></ul>',
	'coll-excluded-templates' => "* No s'han inclòs les plantilles de la categoria [[:Category:$1|$1]].",
	'coll-blacklisted-templates' => "* S'han exclòs les plantilles de la llista negra [[:$1]].",
	'coll-return_to_collection' => '<p>Tornar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Encarrega-ho com a llibre imprès',
	'coll-book_text' => "Obtenir el llibre imprès del nostre soci de peticions d'impressió:",
	'coll-order_from_pp' => 'Previsualització amb $1',
	'coll-about_pp' => 'Quant a $1',
	'coll-invalid_podpartner_title' => "Soci de peticions d'impressió no vàlid",
	'coll-invalid_podpartner_msg' => "El soci de peticions d'impressió indicat no és vàlid.
Si us plau, contacteu amb el vostre administrador de MediaWiki.",
	'coll-license' => 'Llicència',
	'coll-return_to' => 'Tornar a [[:$1]]',
	'coll-more_info' => 'Mostra més informació',
	'coll-hide_info' => 'Amaga informació',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Ordena informacó de PediaPress',
	'coll-suggest_title' => 'Pàgines suggerides per al vostre llibre',
	'coll-suggest_intro_text' => "Els suggeriments estan basats en la llista actual de pàgines al llibre.
La llista s'actualitza cada vegada que feu clic als botons d'afegir o treure.",
	'coll-suggested_articles' => 'Suggeriments',
	'coll-suggest_reset_bans' => 'restablir',
	'coll-suggest_reset_bans_tooltip' => 'Mostra els suggeriments descartats',
	'coll-suggest_add_selected' => 'Afegeix les pàgines seleccionades',
	'coll-suggest_ban_selected' => 'Elimina les pàgines seleccionades',
	'coll-suggest_your_book' => 'El teu llibre',
	'coll-suggest_show' => 'mostra',
	'coll-suggest_ban_tooltip' => 'Treu aquesta pàgina de la llista de suggeriments',
	'coll-suggest_article_ban' => 'La pàgina <strong>$1</strong> ha estat retirada dels suggeriments ($2).',
	'coll-suggest_article_add' => 'La pàgina <strong>$1</strong> ha estat afegida al llibre ($2).',
	'coll-suggest_article_remove' => 'La pàgina <strong>$1</strong> ha estat retirada del vostre llibre ($2).',
	'coll-suggest_undo_tooltip' => "Desfés l'acció",
	'coll-suggest_undo' => 'desfés',
	'coll-load_local_book' => 'Feu clic a OK per a continuar el vostre llibre %TITLE% que conté %NUMPAGES% pàgines del wiki. Feu clic a Canceŀla per a esborrar-lo i començar amb un llibre buit.',
	'right-collectionsaveasuserpage' => "Desar els llibres com a pàgina d'usuari",
	'right-collectionsaveascommunitypage' => 'Desar els llibres com una pàgina de la comunitat',
);

/** Chechen (Нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'coll-collections' => 'Жайнаш',
	'coll-couldnotaddarticle_msg' => 'Хlара яззам чутоьхна хила цамега.',
	'coll-couldnotremovearticle_msg' => 'Хlара яззам дlабайина хила цамега.',
	'coll-no_such_category' => 'Ишта кадегар яц',
	'coll-yes' => 'Хlаъ',
	'coll-rendering_article' => '(яззам: $1)',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'coll-desc' => '[[Special:Book|Vytváření knih]]',
	'coll-book_creator_intro' => "<big>Pomocí ''editoru knih'' si můžete vytvořit knihu sestávající z libovolných stránek wiki. Knihu pak můžete vyexportovat do různých formátů (např. PDF či ODF) nebo si objednat tištěnou verzi.</big>",
	'coll-manage_your_book' => 'Správa knihy',
	'coll-book_creator_help' => 'Další informace najdete na [[{{MediaWiki:Coll-helppage}}|stránce nápovědy ke knihám]].',
	'coll-start_book_creator' => 'Spustit editor knih',
	'coll-book_creator_continue' => 'Nechat editor knih zapnutý',
	'coll-book_creator_disable_text' => "''Editor knih'' bude vypnut a kniha, na které pracujete, bude smazána.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text k editoru knih',
	'coll-collection' => 'Kniha',
	'coll-collections' => 'Knihy',
	'coll-exclusion_category_title' => 'Netisknout',
	'coll-print_template_prefix' => 'Tisk',
	'coll-print_template_pattern' => '$1/Tisk',
	'coll-unknown_subpage_title' => 'Neznámá podstránka',
	'coll-unknown_subpage_text' => 'Tato podstránka [[Special:Book|knihy]] neexistuje',
	'coll-couldnotaddarticle_title' => 'Nepodařilo se přidat stránku',
	'coll-couldnotaddarticle_msg' => 'Stránka nemohla být přidána.',
	'coll-couldnotremovearticle_title' => 'Stránka nemohla být odebrána',
	'coll-couldnotremovearticle_msg' => 'Nepodařilo se odebrat stránku.',
	'coll-noscript_text' => '<h1>Je vyžadován JavaScript!</h1>
<strong>Váš prohlížeč nepodporuje JavaScript nebo máte JavaScript vypnutý.
Tato stránka nebude správně fungovat, dokud JavaScript nezapnete.</strong>',
	'coll-savedbook_template' => 'uložená_kniha',
	'coll-your_book' => 'Vaše kniha',
	'coll-download_title' => 'Stáhnout',
	'coll-download_text' => 'Pro stažení knihy si zvolte formát a klikněte na tlačítko.',
	'coll-download_as_text' => 'Verzi ve formátu $1 si můžete stáhnout kliknutím na tlačítko.',
	'coll-download' => 'Stáhnout',
	'coll-format_label' => 'Formát:',
	'coll-remove' => 'Odstranit',
	'coll-show' => 'Zobrazit',
	'coll-move_to_top' => 'Přesunout nahoru',
	'coll-move_up' => 'Přesunout výše',
	'coll-move_down' => 'Přesunout níže',
	'coll-move_to_bottom' => 'Přesunout dolů',
	'coll-title' => 'Název:',
	'coll-subtitle' => 'Podtitul:',
	'coll-contents' => 'Obsah',
	'coll-drag_and_drop' => 'Pořadí článků a kapitol můžete změnit přetáhnutím myší',
	'coll-create_chapter' => 'Vytvořit kapitolu',
	'coll-sort_alphabetically' => 'Seřadit abecedně',
	'coll-rename' => 'Přejmenovat',
	'coll-new_chapter' => 'Zadejte název nové kapitoly',
	'coll-rename_chapter' => 'Zadejte nový název kapitoly',
	'coll-no_such_category' => 'Taková kategorie neexistuje',
	'coll-notitle_title' => 'Nebylo možné určit název stránky.',
	'coll-post_failed_title' => 'Chyba požadavku POST',
	'coll-post_failed_msg' => 'Chyba při požadavku POST na server $1 ($2).',
	'coll-mwserve_failed_title' => 'Chyba vykreslovacího serveru',
	'coll-mwserve_failed_msg' => 'Na vykreslovacím serveru došlo k chybě: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Chybná odpověď serveru',
	'coll-empty_collection' => 'Prázdná kniha',
	'coll-revision' => 'Revize: $1',
	'coll-save_collection_title' => 'Uložit a sdílet tuto knihu',
	'coll-save_collection_text' => 'Zvolte si umístění:',
	'coll-login_to_save' => 'Pokud chcete ukládat knihy pro pozdější použití, prosím, [[Special:UserLogin|přihlaste se nebo si vytvořte účet]].',
	'coll-personal_collection_label' => 'Osobní kniha:',
	'coll-community_collection_label' => 'Komunitní kniha:',
	'coll-save_collection' => 'Uložit knihu',
	'coll-save_category' => 'Všechny uložené knihy se přidávají do kategorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Stránka existuje. Přepsat?',
	'coll-overwrite_text' => 'Stránka s názvem [[:$1]] už existuje.
Chcete ji nahradit svojí kolekcí?',
	'coll-yes' => 'Ano',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Ve vaší knize se už nacházejí nějaké stránky.
Chcete přepsat svoji existující knihu, přidat do ní obsah nebo zrušit operaci s touto knihou?',
	'coll-overwrite' => 'Přepsat',
	'coll-append' => 'Přidat',
	'coll-cancel' => 'Storno',
	'coll-update' => 'Aktualizovat',
	'coll-limit_exceeded_title' => 'Kniha je příliš velká',
	'coll-limit_exceeded_text' => 'Vaše kniha je příliš velká.
Není možné přidat další stránky.',
	'coll-rendering_title' => 'Vykreslování',
	'coll-rendering_text' => '<p><strong>Prosím čekejte, dokument se připravuje.</strong></p>

<p><strong>Dokončeno:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Tato stránka se každých několik sekund automaticky obnoví.
Pokud to nefunguje, stiskněte v prohlížeči tlačítko <i>obnovit</i>.</p>',
	'coll-rendering_status' => '<strong>Stav:</strong> $1',
	'coll-rendering_article' => '(článek: $1)',
	'coll-rendering_page' => '(stránka: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informace při vykreslování stránky',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informace při vykreslování knihy',
	'coll-rendering_finished_title' => 'Vykreslování dokončeno',
	'coll-rendering_finished_text' => '<strong>Soubor s dokumentem byl vytvořen.</strong>
Můžete si ho <strong>[$1 stáhnout do svého počítače]</strong>.

Poznámky:
* Nejste spokojeni s výsledkem? Podívejte se na [[{{MediaWiki:Coll-helppage}}|stránku s nápovědou ke kolekcím]], jak ho vylepšit.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informace při vykreslování stránky',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informace při vykreslování knihy',
	'coll-notfound_title' => 'Kniha nenalezena',
	'coll-notfound_text' => 'Nebylo možné najít stránku knihy.',
	'coll-download_notfound_title' => 'Soubor nenalezen',
	'coll-download_notfound_text' => 'Soubor, který se snažíte stáhnout, neexistuje: Možná byl smazán a je potřeba ho znovu vytvořit.',
	'coll-download_failed_title' => 'Chyba při stahování',
	'coll-download_failed_text' => 'Při stahování souboru došlo k chybě: $1',
	'coll-is_cached' => '<ul><li>Byla nalezena cachovaná verze tohoto dokumentu, takže nebylo třeba vykreslovat. <a href="$1">Vynutit nové vykreslení.</a></li></ul>',
	'coll-excluded-templates' => '* Šablony v kategorii [[:Category:$1|$1]] byly vynechány.',
	'coll-blacklisted-templates' => '* Šablony na černé listině [[:$1]] byly vynechány.',
	'coll-return_to_collection' => '<p>Vrátit se na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Objednat jako tištěnou knihu',
	'coll-book_text' => 'Od našeho partnera pro tisk na vyžádání můžete získat tištěnou knihu:',
	'coll-order_from_pp' => 'Náhled knihy prostřednictvím {{grammar:2sg|$1}}',
	'coll-about_pp' => 'O {{grammar:7sg|$1}}',
	'coll-invalid_podpartner_title' => 'Neplatný partner pro tisk na vyžádání',
	'coll-invalid_podpartner_msg' => 'Zvolený partner pro tisk na vyžádání není platný.
Kontaktujte svého správce MediaWiki.',
	'coll-license' => 'Licence',
	'coll-return_to' => 'Návrat na stránku „[[:$1]]“.',
	'coll-more_info' => 'Zobrazit další informace',
	'coll-hide_info' => 'Skrýt informace',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Objednávky od PediaPress',
	'coll-suggest_title' => 'Doporučené stránky pro vaší knihu',
	'coll-suggest_intro_text' => 'Návrhy byly vybrány podle stránek, které už v knize máte.
Seznam se aktualizuje při každém kliknutím na tlačítka přidat a odebrat.',
	'coll-suggested_articles' => 'Návrhy',
	'coll-suggest_reset_bans' => 'obnovit',
	'coll-suggest_reset_bans_tooltip' => 'Zobrazit dříve odstraněné návrhy',
	'coll-suggest_add_selected' => 'Přidat vybrané stránky',
	'coll-suggest_ban_selected' => 'Odstranit vybrané stránky',
	'coll-suggest_your_book' => 'Vaše kniha',
	'coll-suggest_show' => 'zobrazit',
	'coll-suggest_ban_tooltip' => 'Odstranit tuto stránku ze seznamu návrhů',
	'coll-suggest_article_ban' => 'Stránka <strong>$1</strong> byla odstraněna ze seznamu návrhů. ($2)',
	'coll-suggest_article_add' => 'Stránka <strong>$1</strong> byla přidána do vaší knihy. ($2)',
	'coll-suggest_article_remove' => 'Stránka <strong>$1</strong> byla odstraněna z vaší knihy. ($2)',
	'coll-suggest_undo_tooltip' => 'Vrátit tuto akci zpět',
	'coll-suggest_undo' => 'zpět',
	'coll-load_local_book' => 'Pokračovat v tvorbě knihy %TITLE%, která obsahuje %NUMPAGES% stran wiki, můžete kliknutím na OK. Kliknutím na Storno ji smažete a začnete s prázdnou knihou.',
	'right-collectionsaveasuserpage' => 'Ukládání knih jako uživatelských stránek',
	'right-collectionsaveascommunitypage' => 'Ukládání knih jako stránek komunity',
);

/** Church Slavic (Словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'coll-no' => 'нѣ́тъ',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'coll-desc' => '[[Special:Book|Llunio llyfrau]]',
	'coll-book_creator_intro' => "<big>Gallwch ddefnyddio'r ''teclyn llyfr'' i lunio llyfr yn cynnwys tudalennau'r wici o'ch dewis eich hun. Gallwch allforio'r llyfr ar sawl ffurf (er enghraifft PDF neu ODF), neu gallwch archebu copi ohono ar bapur.</big>",
	'coll-manage_your_book' => "Rheoli'ch llyfr",
	'coll-book_creator_help' => 'Gweler [[{{MediaWiki:Coll-helppage}}|y dudalen gymorth ar lyfrau]] i gael rhagor o wybodaeth.',
	'coll-start_book_creator' => "Dechrau'r teclyn llunio llyfr",
	'coll-book_creator_continue' => "Parhau i ddefnyddio'r lluniwr llyfrau",
	'coll-book_creator_disable_text' => "Fe gaiff y ''lluniwr llyfrau'' ei analluogi a chaiff y llyfr yr ydych wrthi'n llunio ei ddiddymu.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Testun ar lun llyfr',
	'coll-collection' => 'Llyfr',
	'coll-collections' => 'Llyfrau',
	'coll-exclusion_category_title' => 'Hepgor wrth argraffu',
	'coll-print_template_prefix' => 'Argraffu',
	'coll-print_template_pattern' => '$1/Argraffu',
	'coll-unknown_subpage_title' => 'Isdudalen anhysbys',
	'coll-unknown_subpage_text' => "Nid yw'r isdudalen [[Special:Book|llyfr]] hon ar gael",
	'coll-couldnotaddarticle_title' => 'Aflwyddiant ychwanegu tudalen wici',
	'coll-couldnotaddarticle_msg' => "Ni lwyddwyd ychwanegu'r dudalen wici",
	'coll-couldnotremovearticle_title' => 'Aflwyddiant tynnu tudalen wici',
	'coll-couldnotremovearticle_msg' => "Ni lwyddwyd tynnu'r dudalen wici.",
	'coll-noscript_text' => "<h1>Rhaid cael JavaScript!</h1>
<strong>Nid yw'ch porwr yn gallu defnyddio JavaScript, neu mae JavaScript wedi ei ddiffodd.
Ni fydd y dudalen hon yn gweithio'n gywir os nad yw JavaScript wedi ei alluogi.</strong>",
	'coll-savedbook_template' => 'Llyfr ar gadw',
	'coll-your_book' => 'Eich llyfr',
	'coll-download_title' => 'Islwytho',
	'coll-download_text' => "I lwytho'th llyfr i lawr dewiswch fformat ac yna pwyswch ar y botwm.",
	'coll-download_as_text' => "I lwytho'th llyfr i lawr ar fformat $1 pwyswch y botwm.",
	'coll-download' => 'Islwytho',
	'coll-format_label' => 'Fformat:',
	'coll-remove' => 'Tynnu',
	'coll-show' => 'Dangos',
	'coll-move_to_top' => "Symud i'r brig",
	'coll-move_up' => 'Symud am lan',
	'coll-move_down' => 'Symud am lawr',
	'coll-move_to_bottom' => "Symud i'r gwaelod",
	'coll-title' => 'Teitl:',
	'coll-subtitle' => 'Isdeitl:',
	'coll-contents' => 'Cynnwys',
	'coll-drag_and_drop' => "Ad-drefnu'r tudalennau a'r penodau trwy lusgosod.",
	'coll-create_chapter' => 'Llunio pennod',
	'coll-sort_alphabetically' => 'Gosod yn nhrefn yr wyddor',
	'coll-rename' => 'Ailenwi',
	'coll-new_chapter' => 'Rhowch enw ar y bennod newydd',
	'coll-rename_chapter' => 'Rhowch yr enw newydd ar y bennod',
	'coll-no_such_category' => 'Y categori ddim ar gael',
	'coll-notitle_title' => 'Ni lwyddwyd i ddirnad teitl y dudalen.',
	'coll-post_failed_title' => 'Methodd y cais POST',
	'coll-post_failed_msg' => 'Methodd y cais POST i $1 ($2).',
	'coll-mwserve_failed_title' => 'Gwall gan y gweinydd cynhyrchu',
	'coll-mwserve_failed_msg' => 'Digwyddodd gwall ar y gweinydd cynhyrchu: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Hysbysiad gwall oddi wrth y gweinydd',
	'coll-empty_collection' => "Gwacáu'r llyfr",
	'coll-revision' => 'Diwygiad: $1',
	'coll-save_collection_title' => "Cadw'r llyfr a'i rannu",
	'coll-save_collection_text' => "Dewiswch fan i roi'ch llyfr ar gadw:",
	'coll-login_to_save' => 'Os ydych am roi llyfr ar gadw er mwyn ei ddefnyddio rhywdro arall, rhaid ichi [[Special:UserLogin|fewngofnodi neu greu cyfrif]].',
	'coll-personal_collection_label' => 'Llyfr personol:',
	'coll-community_collection_label' => 'Llyfr cymunedol:',
	'coll-save_collection' => "Rhoi'r llyfr ar gadw",
	'coll-save_category' => 'Mae llyfrau i gyd yn cael eu gosod yn y categori [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] wrth eu cadw.',
	'coll-overwrite_title' => 'Y dudalen ar gael yn barod.
Am drosysgrifo?',
	'coll-overwrite_text' => "Mae tudalen a'r enw [[:$1]] eisoes ar gael.
Ydych chi am i'ch llyfr ddisodli'r dudalen?",
	'coll-yes' => 'Ydw',
	'coll-no' => 'Nacydw',
	'coll-load_overwrite_text' => "Mae rhai tudalennau eisoes i gael yn eich llyfr.
Ydych chi am drosysgrifo eich llyfr presennol, neu ychwanegu deunydd newydd ato, neu ddiddymu llwytho'r llyfr?",
	'coll-overwrite' => 'Trosysgrifo',
	'coll-append' => 'Atodi',
	'coll-cancel' => 'Diddymu',
	'coll-update' => 'Diweddaru',
	'coll-limit_exceeded_title' => 'Y llyfr yn rhy fawr',
	'coll-limit_exceeded_text' => "Mae'ch llyfr yn rhy fawr.
Ni ellir ychwanegu rhagor o dudalennau.",
	'coll-rendering_title' => "Wrthi'n cynhyrchu",
	'coll-rendering_text' => '<p><strong>Mae\'r ddogfen wrthi\'n cael ei chynhyrchu.</strong></p>

<p><strong>Wedi cwblhau:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Fe ddylai\'r dudalen hon ail-lwytho\'n awtomatig bob yn ychydig eiliadau.
Os nac ydy\'n ail-lwytho o ran ei hun, gwasgwch y botwm ail-lwytho ar eich porwr.</p>',
	'coll-rendering_status' => '<strong>Statws:</strong> $1',
	'coll-rendering_article' => '(tudalen wici: $1)',
	'coll-rendering_page' => '(tudalen: $1)',
	'coll-rendering_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Wrthi'n cynhyrchu'r wybodaeth am y dudalen",
	'coll-rendering_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Wrthi'n cynhyrchu'r wybodaeth am y casgliad",
	'coll-rendering_finished_title' => 'Wedi gorffen cynhyrchu',
	'coll-rendering_finished_text' => "<strong>Mae ffeil y ddogfen wedi cael ei gynhyrchu.</strong>
<strong>[$1 Llwytho'r ffeil i lawr]</strong> i'ch cyfrifiadur.

Nodiadau:
* Os nad ydych yn bles â'r cynnyrch gwelwch [[{{MediaWiki:Coll-helppage}}|y dudalen gymorth ar gynhyrchu llyfrau]] er mwyn deall sut mae gwella arno.",
	'coll-finished_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Wrthi'n cynhyrchu'r wybodaeth am y dudalen",
	'coll-finished_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Wrthi'n cynhyrchu'r wybodaeth am y casgliad",
	'coll-notfound_title' => 'Heb ganfod y llyfr',
	'coll-notfound_text' => 'Heb ganfod y dudalen yn y llyfr.',
	'coll-download_notfound_title' => 'Heb lwyddo canfod y ffeil',
	'coll-download_notfound_text' => "Nid yw'r ffeil yr ydych yn ceisio ei lwytho i lawr ar gael:
Efallai ei fod wedi ei ddileu ac felly bod angen ei gynhyrchu o'r newydd.",
	'coll-download_failed_title' => 'Cafwyd gwall wrth islwytho',
	'coll-download_failed_text' => "Cafwyd gwall wrth islwytho'r ffeil: $1",
	'coll-is_cached' => '<ul><li>Cafwyd hyd i fersiwn o\'r ddogfen mewn celc, felly nid oedd rhaid ei gynhyrchu.
<a href="$1">Gorfodi ei chynhyrchu o\'r newydd.</a></li></ul>',
	'coll-excluded-templates' => '* Wedi hepgor y nodiadau yn y categori [[:Category:$1|$1]].',
	'coll-blacklisted-templates' => '* Ni chynhwyswyd nodiadau sydd ar y rhestr gwaharddedig [[:$1]].',
	'coll-return_to_collection' => '<p>Dychwelyd i\'r dudalen <a href="$1">$2</a></p>',
	'coll-book_title' => 'Archebu fel llyfr printiedig',
	'coll-book_text' => "Archebu llyfr oddi wrth ein partner argraffu ''print-on-demand''.",
	'coll-order_from_pp' => 'Gweld rhagolwg ar $1',
	'coll-about_pp' => 'Ynglŷn â $1',
	'coll-invalid_podpartner_title' => 'Partner POD annilys',
	'coll-invalid_podpartner_msg' => "Nid yw'r partner argraffu POD yn ddilys.
Cysylltwch â'ch gweinyddwyr MediaWiki.",
	'coll-license' => 'Trwydded',
	'coll-return_to' => 'Yn ôl i [[:$1]]',
	'coll-more_info' => 'Dangos rhagor o wybodaeth',
	'coll-hide_info' => "Cuddio'r wybodaeth",
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Gwybodaeth am archebu oddi wrth PediaPress',
	'coll-suggest_title' => 'Awgrymu tudalennau ar gyfer eich llyfr',
	'coll-suggest_intro_text' => "Mae'r awgrymiadau hyn wedi eu seilio ar y detholiad presennol o dudalennau wici yn eich llyfr.
Mae'r rhestr yn cael ei adnewyddu bob tro yr ydych yn pwyso ar y botymau ychwanegu neu tynnu.",
	'coll-suggested_articles' => 'Awgrymiadau',
	'coll-suggest_reset_bans' => 'ailosod',
	'coll-suggest_reset_bans_tooltip' => 'Dangos yr awgrymiadau a dynnwyd i ffwrdd ynghynt',
	'coll-suggest_add_selected' => "Ychwanegu'r tudalennau dethol",
	'coll-suggest_ban_selected' => "Tynnu'r tudalennau dethol",
	'coll-suggest_your_book' => 'Eich llyfr',
	'coll-suggest_show' => 'dangos',
	'coll-suggest_ban_tooltip' => "Tynnu'r dudalen hon o'r rhestr awgrymiadau",
	'coll-suggest_article_ban' => "Tynnwyd y dudalen <strong>$1</strong> o'r awgrymiadau ($2).",
	'coll-suggest_article_add' => 'Ychwanegwyd y dudalen <strong>$1</strong> at eich llyfr ($2).',
	'coll-suggest_article_remove' => "Tynnwyd y dudalen <strong>$1</strong> o'ch llyfr ($2).",
	'coll-suggest_undo_tooltip' => 'Dadwneud y weithred hon',
	'coll-suggest_undo' => 'dadwneud',
	'coll-load_local_book' => "Pwyswch ar 'Iawn' i barhau â'ch llyfr %TITLE%, ag iddo %NUMPAGES% o dudalennau wici. Pwyswch ar 'Diddymu' i'w ddileu a dechrau eto gyda llyfr gwag.",
	'right-collectionsaveasuserpage' => 'Gallu cadw llyfrau ar dudalennau yn y parth defnyddiwr',
	'right-collectionsaveascommunitypage' => 'Gallu rhoi llyfrau ar gadw ar dudalennau cymunedol',
);

/** Danish (Dansk)
 * @author Hylle
 * @author Jon Harald Søby
 * @author Peter Alberti
 * @author Thomas81
 */
$messages['da'] = array(
	'coll-desc' => '[[Special:Book|Skab bøger]]',
	'coll-book_creator_intro' => '<big>Med bogværktøjslinien kan du oprette en bog, der indeholder valgfrie wiki-artikler. Du kan eksportere bogen i forskellige formater (fx PDF eller ODF) eller bestille et trykt eksemplar.</big>',
	'coll-manage_your_book' => 'Administrer din bog',
	'coll-book_creator_help' => 'Se [[{{MediaWiki:Coll-helppage}}|hjælpesiden om bøger]] for mere information.',
	'coll-start_book_creator' => 'Start bogværktøjslinien',
	'coll-book_creator_continue' => 'Forsæt med at bruge bogværktøjslinien',
	'coll-book_creator_disable_text' => "''Bogværktøjet'' vil blive deaktiveret, og den bog du arbejder på vil blive fjernet.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Bogskabertekst',
	'coll-collection' => 'Bog',
	'coll-collections' => 'Bøger',
	'coll-exclusion_category_title' => 'Udeluk på tryk',
	'coll-print_template_prefix' => 'Udskriv',
	'coll-print_template_pattern' => '$1/udskriv',
	'coll-unknown_subpage_title' => 'Ukendt underside',
	'coll-unknown_subpage_text' => 'Denne underside til [[Special:Book|Bog]] findes ikke',
	'coll-couldnotaddarticle_title' => 'Kunne ikke tilføje wiki-artiklen',
	'coll-couldnotaddarticle_msg' => 'Wiki-siden kunne ikke tilføjes.',
	'coll-couldnotremovearticle_title' => 'Kunne ikke fjerne wiki-artikel',
	'coll-couldnotremovearticle_msg' => 'Wiki-siden kunne ikke fjernes.',
	'coll-noscript_text' => '<h1>JavaScript er påkrævet!</h1> 
<strong>Din browser understøtter ikke JavaScript eller JavaScript er slået fra. 
Denne side vil ikke virke korrekt, medmindre JavaScript er aktiveret.</strong>',
	'coll-savedbook_template' => 'gemt_bog',
	'coll-your_book' => 'Din bog',
	'coll-download_title' => 'Download',
	'coll-download_text' => 'For at downloade din bog skal du vælge et format og klikke på knappen.',
	'coll-download_as_text' => 'Klik på knappen for at downloade din bog i $1-format.',
	'coll-download' => 'Download',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Fjern',
	'coll-show' => 'Vis',
	'coll-move_to_top' => 'Flyt til toppen',
	'coll-move_up' => 'Flyt op',
	'coll-move_down' => 'Flyt ned',
	'coll-move_to_bottom' => 'Flyt til bunden',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Undertitel:',
	'coll-contents' => 'Indhold',
	'coll-drag_and_drop' => 'Brug drag & drop for at ændre rækkefølgen på wiki-artikler og kapitler',
	'coll-create_chapter' => 'Opret kapitel',
	'coll-sort_alphabetically' => 'Sorter alfabetisk',
	'coll-rename' => 'Omdøb',
	'coll-new_chapter' => 'Indtast navnet på nyt kapitel',
	'coll-rename_chapter' => 'Indtast nyt navn til kapitel',
	'coll-no_such_category' => 'Ingen kategori med det navn',
	'coll-notitle_title' => 'Sidens titel kunne ikke bestemmes.',
	'coll-post_failed_title' => 'POST-forespørgsel mislykkedes',
	'coll-post_failed_msg' => 'POST-forespørgslen til $1 mislykkedes ($2).',
	'coll-mwserve_failed_title' => 'Genererings-serverfejl',
	'coll-mwserve_failed_msg' => 'En fejl opstod på renderingsserveren: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Fejlrespons fra serveren',
	'coll-empty_collection' => 'Tom bog',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Gem og del din bog',
	'coll-save_collection_text' => 'Vælg en placering til din bog:',
	'coll-login_to_save' => 'Hvis du vil gemme bøger til senere brug, skal du [[Special:UserLogin|logge ind eller oprette en konto]].',
	'coll-personal_collection_label' => 'Personlig bog:',
	'coll-community_collection_label' => 'Fællesskabsbog:',
	'coll-save_collection' => 'Gem bog',
	'coll-save_category' => 'Alle gemte bøger tilføjes til kategorien [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Siden eksisterer.
Overskriv den?',
	'coll-overwrite_text' => 'En side med navnet [[:$1]] eksisterer allerede.
Ønsker du at erstatte den med din bog?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nej',
	'coll-load_overwrite_text' => 'Du har allerede nogle sider i din bog. 
Vil du overskrive din aktuelle bog, tilføje det nye indhold, eller afbryde indlæsningen af denne bog?',
	'coll-overwrite' => 'Overskriv',
	'coll-append' => 'Tilføj',
	'coll-cancel' => 'Afbryd',
	'coll-update' => 'Opdater',
	'coll-limit_exceeded_title' => 'Bogen er for stor',
	'coll-limit_exceeded_text' => 'Din bog er for stor. 
Der kan ikke tilføjes flere sider.',
	'coll-rendering_title' => 'Genererer',
	'coll-rendering_text' => '<p><strong>Vent venligst mens dokumentet bliver genereret.</strong></p>

<p><strong>Status:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Denne side skulle opdatere sig selv automatisk med få sekunders mellemrum. Hvis dette ikke virker, så tryk venligst på opdater-knappen i din browser.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikiartikel: $1)',
	'coll-rendering_page' => '(side: $1)',
	'coll-rendering_finished_title' => 'Generering færdig',
	'coll-rendering_finished_text' => '<strong>Dit dokument er blevet genereret.</strong>
<strong>[$1 Download filen]</strong> til din computer. 

Note: 
* Er du ikke tilfreds med resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjælpesiden omkring bøger]] for eventuelle muligheder til at forbedre det.',
	'coll-notfound_title' => 'Bog ikke fundet',
	'coll-notfound_text' => 'Kunne ikke finde bogsiden.',
	'coll-download_notfound_title' => 'Fil ikke fundet',
	'coll-download_notfound_text' => 'Filen du forsøger at downloade eksisterer ikke: 
Måske er den blevet slettet og skal regenereres.',
	'coll-download_failed_title' => 'Fejl under download',
	'coll-download_failed_text' => 'Det opstod en fejl ved download af filen: $1',
	'coll-is_cached' => '<ul><li>En cachet version af dokumentet er blevet fundet, så en ny generering var unødvendig. 
<a href="$1">Fremtving gen-generering.</a> </li></ul>',
	'coll-excluded-templates' => '* Skabeloner i kategorien [[:Category:$1|$1]], er blevet udelukket.',
	'coll-blacklisted-templates' => '* Skabeloner på sortlisten [[:$1]] er blevet udelukket.',
	'coll-return_to_collection' => '<p>Tilbage til <a href="$1">$2</a></p>',
	'coll-book_title' => 'Bestil som en trykt bog',
	'coll-book_text' => 'Bestil en trykt udgave fra vores print-on-demand partner.',
	'coll-order_from_pp' => 'Forhåndsvis med $1',
	'coll-about_pp' => 'Om $1',
	'coll-invalid_podpartner_title' => 'Ugyldig POD-partner',
	'coll-invalid_podpartner_msg' => 'Den valgte POD partner er ugyldig. 
Kontakt venligst din MediaWiki-administrator.',
	'coll-license' => 'Licens',
	'coll-return_to' => 'Tilbage til [[:$1]]',
	'coll-more_info' => 'Vis mere information',
	'coll-hide_info' => 'Skjul information',
	'coll-order_info_article' => '((MediaWiki:Coll-Helppage))/PediaPress ordreoplysninger',
	'coll-suggest_title' => 'Foreslåede sider til din bog',
	'coll-suggested_articles' => 'Forslag',
	'coll-suggest_reset_bans' => 'nulstil',
	'coll-suggest_add_selected' => 'Tilføj valgte sider',
	'coll-suggest_ban_selected' => 'Fjern valgte sider',
	'coll-suggest_your_book' => 'Din bog',
	'coll-suggest_show' => 'vis',
	'coll-suggest_article_ban' => 'Siden <strong>$1</strong> er blevet fjernet fra forslagene ($2).',
	'coll-suggest_article_add' => 'Siden <strong>$1</strong> er blevet tilføjet til din bog ($2).',
	'coll-suggest_article_remove' => 'Siden <strong>$1</strong> er blevet fjernet fra din bog ($2).',
	'coll-suggest_undo_tooltip' => 'Fortryd denne handling',
	'coll-suggest_undo' => 'fortryd',
	'right-collectionsaveasuserpage' => 'Gem bøger som brugerside',
);

/** German (Deutsch)
 * @author Heuler06
 * @author Jbeigel
 * @author Kghbln
 * @author Melancholie
 * @author Metalhead64
 * @author Pill
 * @author Purodha
 * @author Raimond Spekking
 * @author Revolus
 * @author The Evil IP address
 * @author Umherirrender
 * @author VolkerHaas
 */
$messages['de'] = array(
	'coll-desc' => 'Ermöglicht eine [[Special:Book|Spezialseite]] zum Erstellen von Büchern',
	'coll-book_creator_intro' => "<big>Mit der ''Buchfunktion'' kannst du ein Buch aus beliebigen Wikiseiten erstellen.
Du kannst das Buch in unterschiedlichen Formaten exportieren (beispielsweise PDF oder ODF) oder in gedruckter Form bestellen.</big>",
	'coll-manage_your_book' => 'Dein Buch verwalten',
	'coll-book_creator_help' => 'Siehe die [[{{MediaWiki:Coll-helppage}}|Hilfe zu Büchern]] für weitere Informationen.',
	'coll-start_book_creator' => 'Buchfunktion starten',
	'coll-book_creator_continue' => 'Buchgenerator verwenden',
	'coll-book_creator_disable_text' => "Der ''Buchgenerator'' wird deaktiviert und das Buch, an dem du arbeitest, wird gelöscht.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text für Buchmodus',
	'coll-collection' => 'Buch',
	'coll-collections' => 'Bücher',
	'coll-exclusion_category_title' => 'Vom Druck ausschließen',
	'coll-print_template_prefix' => 'Drucken',
	'coll-print_template_pattern' => '$1/Druck',
	'coll-unknown_subpage_title' => 'Unbekannte Unterseite',
	'coll-unknown_subpage_text' => 'Diese Unterseite von [[Special:Book|Buch]] existiert nicht',
	'coll-couldnotaddarticle_title' => 'Wikiseite konnte nicht hinzugefügt werden',
	'coll-couldnotaddarticle_msg' => 'Die Wikiseite konnte nicht hinzugefügt werden.',
	'coll-couldnotremovearticle_title' => 'Wikiseite konnte nicht entfernt werden',
	'coll-couldnotremovearticle_msg' => 'Die Wikiseite konnte nicht entfernt werden.',
	'coll-noscript_text' => '<h1>JavaScript wird benötigt!</h1>
<strong>Dein Browser unterstützt kein JavaScript oder JavaScript wurde deaktiviert.
Diese Seite wird nicht richtig funktionieren, solange JavaScript nicht verfügbar ist.</strong>',
	'coll-savedbook_template' => 'Gespeichertes Buch',
	'coll-your_book' => 'Dein Buch',
	'coll-download_title' => 'Herunterladen',
	'coll-download_text' => 'Um eine Offline-Version deines Buches herunterzuladen, wähle ein Format und klicke auf die Schaltfläche.',
	'coll-download_as_text' => 'Um eine Offline-Version deines Buches im Format $1 herunterzuladen, klicke auf die Schaltfläche.',
	'coll-download' => 'Herunterladen',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Entfernen',
	'coll-show' => 'Zeigen',
	'coll-move_to_top' => 'an den Anfang',
	'coll-move_up' => 'hoch',
	'coll-move_down' => 'herunter',
	'coll-move_to_bottom' => 'an das Ende',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Untertitel:',
	'coll-contents' => 'Inhalt',
	'coll-drag_and_drop' => 'Mit der Maus kannst du Wikiseiten und Kapitel verschieben, um die Reihenfolge zu ändern',
	'coll-create_chapter' => 'Kapitel erzeugen',
	'coll-sort_alphabetically' => 'Alphabetisch sortieren',
	'coll-rename' => 'Umbenennen',
	'coll-new_chapter' => 'Gib einen Namen für ein neues Kapitel ein',
	'coll-rename_chapter' => 'Gib einen neuen Namen für das Kapitel ein',
	'coll-no_such_category' => 'Kategorie nicht vorhanden',
	'coll-notitle_title' => 'Der Titel der Seite konnte nicht bestimmt werden.',
	'coll-post_failed_title' => 'POST-Anfrage fehlgeschlagen',
	'coll-post_failed_msg' => 'Die POST-Anfrage an $1 ist fehlgeschlagen ($2).',
	'coll-mwserve_failed_title' => 'Serverfehler',
	'coll-mwserve_failed_msg' => 'Auf dem Render-Server ist ein Fehler aufgetreten: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Fehlermeldung vom Server',
	'coll-empty_collection' => 'Leeres Buch',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Dein Buch speichern und teilen',
	'coll-save_collection_text' => 'Wähle einen Speicherort für dein Buch:',
	'coll-login_to_save' => 'Wenn du Bücher speichern möchtest, [[Special:UserLogin|melde dich bitte an oder erstelle ein Benutzerkonto]].',
	'coll-personal_collection_label' => 'Persönliches Buch:',
	'coll-community_collection_label' => 'Gemeinschaftliches Buch:',
	'coll-save_collection' => 'Buch speichern',
	'coll-save_category' => 'Alle gespeicherten Bücher werden der Kategorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] zugeordnet.',
	'coll-overwrite_title' => 'Seite vorhanden, überschreiben?',
	'coll-overwrite_text' => 'Eine Seite mit dem Namen [[:$1]] ist bereits vorhanden. Möchtest du sie durch dein Buch ersetzen?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nein',
	'coll-load_overwrite_text' => 'Dein Buch enthält bereits Seiten.
Möchtest du das aktuelle Buch überschreiben, die neuen Seiten anhängen oder das Laden dieses Buches abbrechen?',
	'coll-overwrite' => 'Überschreiben',
	'coll-append' => 'Anhängen',
	'coll-cancel' => 'Abbrechen',
	'coll-update' => 'Aktualisieren',
	'coll-limit_exceeded_title' => 'Buch zu groß',
	'coll-limit_exceeded_text' => 'Dein Buch ist zu groß. Es können keine Seiten mehr hinzugefügt werden.',
	'coll-rendering_title' => 'Beim Erstellen',
	'coll-rendering_text' => '<p><strong>Bitte habe etwas Geduld, während das Dokument erstellt wird.</strong></p>

<p><strong>Fortschritt:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Diese Seite sollte sich alle paar Sekunden von selbst aktualisieren.
Sollte dies nicht geschehen, drücke bitte den „Aktualisieren“-Knopf (meist F5) deines Browsers.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(Wikiseite: $1)',
	'coll-rendering_page' => '(Seite: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informationen über die Darstellung von Seiten',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informationen über das Darstellen von Sammlungen',
	'coll-rendering_finished_title' => 'Fertig erstellt',
	'coll-rendering_finished_text' => '<strong>Die Datei wurde erfolgreich erstellt.</strong>
<strong>[$1 Dokument herunterladen]</strong>.

Hinweise:
* Bist du mit dem Ergebnis nicht zufrieden? Möglichkeiten zur Verbesserung der Ausgabe findest du auf der [[{{MediaWiki:Coll-helppage}}|Hilfeseite über Bücher]].',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Darstellung der Seiteninformation',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Darstellung des Buchs',
	'coll-notfound_title' => 'Buch nicht gefunden',
	'coll-notfound_text' => 'Dein Buch konnte nicht gefunden werden.',
	'coll-download_notfound_title' => 'Datei nicht gefunden',
	'coll-download_notfound_text' => 'Die Datei, die du versuchst herunterzuladen, existiert nicht: Möglicherweise wurde sie gelöscht oder sie muss neu generiert werden.',
	'coll-download_failed_title' => 'Fehler beim Herunterladen',
	'coll-download_failed_text' => 'Es gab einen Fehler beim Herunterladen der Datei: $1',
	'coll-is_cached' => '<ul><li>Es ist eine zwischengespeicherte Version des Dokumentes vorhanden, so dass kein Rendern notwendig war. <a href="$1">Neurendern erzwingen.</a></li></ul>',
	'coll-excluded-templates' => '* Vorlagen aus der Kategorie „[[:Category:$1|$1]]“ wurden ausgeschlossen.',
	'coll-blacklisted-templates' => '* Vorlagen von der Schwarzen Liste [[:$1]] wurden ausgeschlossen.',
	'coll-return_to_collection' => 'Zurück zu <a href="$1">$2</a>',
	'coll-book_title' => 'Als gedrucktes Buch bestellen',
	'coll-book_text' => 'Bestelle eine gedruckte Buchausgabe bei unserem Print-on-Demand-Partner.',
	'coll-order_from_pp' => 'Vorschau bei $1',
	'coll-about_pp' => 'Über $1',
	'coll-invalid_podpartner_title' => 'Ungültiger Print-on-Demand-Partner',
	'coll-invalid_podpartner_msg' => 'Die Angaben zum Print-on-Demand-Partner sind fehlerhaft. Bitte kontaktiere den MediaWiki-Administrator.',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Zurück zu [[:$1]]',
	'coll-more_info' => 'Weitere Informationen zeigen',
	'coll-hide_info' => 'Informationen verstecken',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress Bestellinformation',
	'coll-suggest_title' => 'Vorgeschlagene Seiten für dein Buch',
	'coll-suggest_intro_text' => 'Die Vorschläge basieren auf die aktuell in deinem Buch vorhandenen Wikiseiten.
Immer, wenn du auf die Hinzufügen- oder Entfernen-Buttons klickst, wird die Liste aktualisiert.',
	'coll-suggested_articles' => 'Vorschläge',
	'coll-suggest_reset_bans' => 'zurücksetzen',
	'coll-suggest_reset_bans_tooltip' => 'Zuletzt entfernte Vorschläge anzeigen',
	'coll-suggest_add_selected' => 'Ausgewählte Seiten hinzufügen',
	'coll-suggest_ban_selected' => 'Ausgewählte Seiten entfernen',
	'coll-suggest_your_book' => 'Dein Buch',
	'coll-suggest_show' => 'zeigen',
	'coll-suggest_ban_tooltip' => 'Diese Seite aus der Vorschlagsliste entfernen',
	'coll-suggest_article_ban' => 'Die Seite <strong>$1</strong> wurde aus den Vorschlägen entfernt ($2).',
	'coll-suggest_article_add' => 'Die Seite <strong>$1</strong> wurde zu deinem Buch hinzugefügt ($2).',
	'coll-suggest_article_remove' => 'Die Seite <strong>$1</strong> wurde aus deinem Buch entfernt ($2).',
	'coll-suggest_undo_tooltip' => 'Diese Aktion rückgängig machen',
	'coll-suggest_undo' => 'rückgängig',
	'coll-load_local_book' => 'Klicke auf OK, um mit deinem Buch %TITLE% fortzufahren, bestehend aus %NUMPAGES% Wikiseiten. Klicke auf Abbrechen, um es zu löschen und um mit einem leeren Buch zu starten.',
	'right-collectionsaveasuserpage' => 'Bücher als Benutzerseite speichern',
	'right-collectionsaveascommunitypage' => 'Bücher als Gemeinschaftsseite speichern',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Dst
 * @author MichaelFrey
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'coll-book_creator_intro' => "<big>Mit der ''Buchfunktion'' können Sie ein Buch aus beliebigen Wikiseiten erstellen.
Sie können das Buch in unterschiedlichen Formaten exportieren (beispielsweise PDF oder ODF) oder in gedruckter Form bestellen.</big>",
	'coll-manage_your_book' => 'Ihr Buch verwalten',
	'coll-book_creator_disable_text' => "Der ''Buchgenerator'' wird deaktiviert und das Buch, an dem Sie arbeiten, wird gelöscht.",
	'coll-noscript_text' => '<h1>JavaScript wird benötigt!</h1>
<strong>Ihr Browser unterstützt kein JavaScript oder JavaScript wurde deaktiviert.
Diese Seite wird nicht richtig funktionieren, solange JavaScript nicht verfügbar ist.</strong>',
	'coll-your_book' => 'Ihr Buch',
	'coll-download_text' => 'Um eine Offline-Version Ihres Buches herunterzuladen, wählen Sie bitte ein Format und klicken Sie auf die Schaltfläche.',
	'coll-download_as_text' => 'Um eine Offline-Version Ihres Buches im Format $1 herunterzuladen, klicken Sie bitte auf die Schaltfläche.',
	'coll-drag_and_drop' => 'Mit der Maus können Sie Wikiseiten und Kapitel verschieben, um die Reihenfolge zu ändern',
	'coll-new_chapter' => 'Geben Sie einen Namen für ein neues Kapitel ein',
	'coll-rename_chapter' => 'Geben Sie einen neuen Namen für das Kapitel ein',
	'coll-save_collection_title' => 'Ihr Buch speichern und teilen',
	'coll-save_collection_text' => 'Wählen Sie einen Speicherort für Ihr Buch:',
	'coll-login_to_save' => 'Wenn Sie Bücher speichern möchten, [[Special:UserLogin|melden Sie sich bitte an oder erstellen ein Benutzerkonto]].',
	'coll-overwrite_text' => 'Eine Seite mit dem Namen [[:$1]] ist bereits vorhanden. Möchten Sie diese durch Ihr Buch ersetzen?',
	'coll-load_overwrite_text' => 'Ihr Buch enthält bereits Seiten.
Möchten Sie das aktuelle Buch überschreiben, die neuen Seiten anhängen oder das Laden dieses Buches abbrechen?',
	'coll-limit_exceeded_text' => 'Ihr Buch ist zu groß. Es können keine Seiten mehr hinzugefügt werden.',
	'coll-rendering_text' => '<p><strong>Bitte haben Sie etwas Geduld, während das Dokument erstellt wird.</strong></p>

<p><strong>Fortschritt:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Diese Seite sollte sich alle paar Sekunden von selbst aktualisieren.
Sollte dies nicht geschehen, drücken Sie bitte den „Aktualisieren“-Knopf (meist F5) Ihres Browsers.</p>',
	'coll-rendering_finished_text' => '<strong>Die Datei wurde erfolgreich erstellt.</strong>
<strong>[$1 Dokument herunterladen]</strong>.

Hinweise:
* Sind Sie mit dem Ergebnis nicht zufrieden? Möglichkeiten zur Verbesserung der Ausgabe finden Sie auf der [[{{MediaWiki:Coll-helppage}}|Hilfeseite über Bücher]].',
	'coll-notfound_text' => 'Ihr Buch konnte nicht gefunden werden.',
	'coll-download_notfound_text' => 'Die Datei, die Sie versuchen herunterzuladen, existiert nicht: Möglicherweise wurde sie gelöscht oder sie muss neu generiert werden.',
	'coll-book_text' => 'Bestellen Sie eine gedruckte Buchausgabe bei unserem Print-on-Demand-Partner.',
	'coll-invalid_podpartner_msg' => 'Die Angaben zum Print-on-Demand-Partner sind fehlerhaft. Bitte kontaktieren Sie den MediaWiki-Administrator.',
	'coll-suggest_title' => 'Vorgeschlagene Seiten für Ihr Buch',
	'coll-suggest_intro_text' => 'Die Vorschläge basieren auf die aktuell in Ihrem Buch vorhandenen Wikiseiten.
Immer, wenn Sie auf die Hinzufügen- oder Entfernen-Buttons klicken, wird die Liste aktualisiert.',
	'coll-suggest_your_book' => 'Ihr Buch',
	'coll-suggest_article_add' => 'Die Seite <strong>$1</strong> wurde zu Ihrem Buch hinzugefügt ($2).',
	'coll-suggest_article_remove' => 'Die Seite <strong>$1</strong> wurde aus Ihrem Buch entfernt ($2).',
);

/** Zazaki (Zazaki)
 * @author Mirzali
 * @author Xoser
 */
$messages['diq'] = array(
	'coll-desc' => '[[Special:Book|Kitabî viraze]]',
	'coll-book_creator_intro' => '<big>Pê "viraştoğê kitabî ti eşkeno yew kitabê ke pelanê wîkîyan ra virazo. Ti eşkeno kitab formatanê bînan de (mavacî PDF ya zi ODF) export bike ya zi kitab şipariş bike.</big>',
	'coll-manage_your_book' => 'Kitabê xo îdare bike',
	'coll-book_creator_help' => 'Qe enformasyonî [[{{MediaWiki:Coll-helppage}}|elê yardimî ke ser kitabî]] bivîne.',
	'coll-start_book_creator' => 'Viraştoğê kitabî başli bike',
	'coll-book_creator_continue' => 'Viraştoğê kitabî de dewam bike',
	'coll-book_creator_disable_text' => "\"kitab viraştoğ'' qefiliyeno u kitabê ke ti ho ser hebîtiyeno ey wedariyeno.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Nuşteyê kitab viraştoğî',
	'coll-collection' => 'Kitab',
	'coll-collections' => 'Kitaban',
	'coll-exclusion_category_title' => 'Çap meke',
	'coll-print_template_prefix' => 'Çap bike',
	'coll-print_template_pattern' => '$1/Çap bike',
	'coll-unknown_subpage_title' => 'Senameyê binî yê nizanyeno',
	'coll-unknown_subpage_text' => 'Ena binê sername yê [[Special:Book|Book]]î çini yo',
	'coll-couldnotaddarticle_title' => 'Nieşkeno pelê wîkîyî de bike',
	'coll-couldnotaddarticle_msg' => 'Ena pelê wîkîyî de nibiyo.',
	'coll-couldnotremovearticle_title' => 'Nieşkeno pelê wîkîyî wedare',
	'coll-couldnotremovearticle_msg' => 'Ena pelê wîkîyî niwedariya.',
	'coll-noscript_text' => '<h1>JavaScript lazim o!</h1>
<strong>Ya browserê tu de JavaScript çini yo ya zi JavaScript qefilnayiyo.
Heta ti JavaScript a nike, ena pel hewl nihebitiyeno.</strong>',
	'coll-savedbook_template' => 'kitab_keydke',
	'coll-your_book' => 'Kitabê tu',
	'coll-download_title' => 'Bar bike',
	'coll-download_text' => 'Eka ti wazeno kitabê xo bar bike, yew formet weçine u goceke klik bike.',
	'coll-download_as_text' => 'Eka ti wazeno kitabê xo formetê $1î de bar bike, goceke klik bike.',
	'coll-download' => 'Bar bike',
	'coll-format_label' => 'Formet:',
	'coll-remove' => 'Wedarne',
	'coll-show' => 'Bimucne',
	'coll-move_to_top' => 'Ser rê şî',
	'coll-move_up' => 'Yew sire şî cêr',
	'coll-move_down' => 'Yew sire şî cor',
	'coll-move_to_bottom' => 'Bin rê şî',
	'coll-title' => 'Sername:',
	'coll-subtitle' => 'Sernameyê binî',
	'coll-contents' => 'Tedeesteyî',
	'coll-drag_and_drop' => 'Pê drag & drop pelan u qisimanê wîkîyî sira bike',
	'coll-create_chapter' => 'Qisim viraze',
	'coll-sort_alphabetically' => 'Goreyê alfabeyî ra sira bike',
	'coll-rename' => 'Reyna name bide',
	'coll-new_chapter' => 'Qismê newî ra yew sername binuse',
	'coll-rename_chapter' => 'Qism ra yew sernameyê newî binuse',
	'coll-no_such_category' => 'Ena kategorî çini yo',
	'coll-notitle_title' => 'Sernameyê pelî mizan çita wo.',
	'coll-post_failed_title' => 'Telebê POSTî nibiyo',
	'coll-post_failed_msg' => '$1 rê talebê POSTî nibiyo ($2).',
	'coll-mwserve_failed_title' => 'Ğeletê servera render',
	'coll-mwserve_failed_msg' => 'Servera render de yew ğelet biyo: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Server ra responseyê ğeletî',
	'coll-empty_collection' => 'Kitabê vengî',
	'coll-revision' => 'Revizyon: $1',
	'coll-save_collection_title' => 'Kitabê xo qeyd ke',
	'coll-save_collection_text' => 'Qe kitabê tu rê yew embar weçine:',
	'coll-login_to_save' => 'Eka ti wazena kitabê xo bace biwane, ma rica keno [[Special:UserLogin|Cıkewt ya zi yew hesab vıraz]].',
	'coll-personal_collection_label' => 'Kitabê şexsî:',
	'coll-community_collection_label' => 'Kitabê cemaetî:',
	'coll-save_collection' => 'Kitab qeyd biker',
	'coll-save_category' => 'Kitabanê ke qeyd biyê înan kategorî rê de bîyo [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Pele zaten est o.
Sero binusi?',
	'coll-overwrite_text' => 'Yew pel ser nameyê [[:$1]]î zatî esto.
Ti wazeno ey kitab pê kitabê xo rê bivurne?',
	'coll-yes' => 'Ye',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Kitabê xo de zatî pelan esto. 
Ti wazeno ser kitabê xo de binuse, kontendê newe ya zi bar kerdişê kitabî îptal bike?',
	'coll-overwrite' => 'Sero binuş',
	'coll-append' => 'Penî ra de biker',
	'coll-cancel' => 'Îptal biker',
	'coll-update' => 'Rocaniye',
	'coll-limit_exceeded_title' => 'Kitab zaf gird o.',
	'coll-limit_exceeded_text' => 'Kitabê tu zaf gird o.
Ma nieşkenî pel de biker.',
	'coll-rendering_title' => 'Render keno',
	'coll-rendering_text' => '<p><strong>Yew di dekika vinder nika dokumant ho viraziyeno.</strong></p>

<p><strong>Progress:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Ena pele gani xo xo otomatik rocaniye biko.
Eka ena nihebitiyeno, ma rica keno browser xo reyna ciwane bike</p>',
	'coll-rendering_status' => 'strong>Statu:</strong> $1',
	'coll-rendering_article' => '(pelê wîkîyî: $1)',
	'coll-rendering_page' => '(pel: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Enformasyonê nuştişê pele render keni',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Enformasyonê tope pele render keni',
	'coll-rendering_finished_title' => 'Render kerdişî qediya',
	'coll-rendering_finished_text' => '<strong>Ena dosyayê documentî viraziyayo.</strong>
<strong>[$1 Dosya bar bike]</strong> komputerê xo.

Notan:
* Ti ena miwazeno? [[{{MediaWiki:Coll-helppage}}|Qe kitaban de pelê yardimî]] bivîne ke belki ti hewlyer keno.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Enformasyonê nuştişê pele render keni',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Enformasyonê tope pele render keni',
	'coll-notfound_title' => 'Kitab nedîy',
	'coll-notfound_text' => 'Pelê kitabî nedîy',
	'coll-download_notfound_title' => 'Dosya nedîy',
	'coll-download_notfound_text' => 'Dosyayê ke ti wazeno bar bike îtiya de çini yo:
Belki o dosya esteriyayo u gani reyna viraziyayo.',
	'coll-download_failed_title' => 'Bar kerdişî de ğeletî biyo',
	'coll-download_failed_text' => 'Ma key dosya bar kerdî, yew ğelet biyo: $1',
	'coll-is_cached' => '<ul><li>Ma yew versiyonê cachedî nidiy, aye ra ma gani render kerd.
<a href="$1">Reyna Render bike.</a></li></ul>',
	'coll-excluded-templates' => '* Templatanê ke ho ho caetegoriyê [[:Category:$1|$1]]î de înan de nikerd.',
	'coll-blacklisted-templates' => '* Templatanê ke ho listeyê ma siyayî [[:$1]] de înan de nikerd.',
	'coll-return_to_collection' => '<p>Reyna şi <a href="$1">$2</a></p>',
	'coll-book_title' => 'Kitab çap bike u hind sipariş bike',
	'coll-book_text' => 'Kitab xo partnerê ma ra biger.',
	'coll-order_from_pp' => 'Verqayt be $1',
	'coll-about_pp' => 'Heqa $1',
	'coll-invalid_podpartner_title' => 'Partnerê PODî ğeletî',
	'coll-invalid_podpartner_msg' => 'Partnerê PODî raşt niyo.
Ma rica keno îdarekarê MedîyaWîkîyî ra yew mesaj bişirav.',
	'coll-license' => 'Lisans',
	'coll-return_to' => 'Reyna şi [[:$1]]',
	'coll-more_info' => 'Enformasyon bimucne',
	'coll-hide_info' => 'Enformasyon binumne',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress enformasyon şîparîş bike',
	'coll-suggest_title' => 'Kitabê tu rê pelanê tavsîyayî',
	'coll-suggest_intro_text' => 'Tevsiyayan sero setanê pel ê wîkî newe ke kitabê tu de.
Çi wext ti gocakanê de kerdişî u wedarayîşî ra klik bike, liste beno rocaniye.',
	'coll-suggested_articles' => 'Tavsiyeyan',
	'coll-suggest_reset_bans' => 'sifir bike',
	'coll-suggest_reset_bans_tooltip' => 'Tavsiyayan ke vernî de wedariye înan bimucne',
	'coll-suggest_add_selected' => 'Pelanê weçinaye de bike',
	'coll-suggest_ban_selected' => 'Pelanê weçinaye wedarne',
	'coll-suggest_your_book' => 'Kitabê tu',
	'coll-suggest_show' => 'bimucne',
	'coll-suggest_ban_tooltip' => 'Ena pel listeyê tavsiye rê wedarne',
	'coll-suggest_article_ban' => 'Pel <strong>$1</strong> tavsiyeran ra wedarne ($2).',
	'coll-suggest_article_add' => 'Pel <strong>$1</strong> kitabê tu rê de biyo ($2).',
	'coll-suggest_article_remove' => 'Pel <strong>$1</strong> kitabê tu ra wedarnaye ($2).',
	'coll-suggest_undo_tooltip' => 'Hereket reyna biyar',
	'coll-suggest_undo' => 'reyna biyar',
	'coll-load_local_book' => 'OK rê bitexne ke ti kitabê xo %TITLE% de %NUMPAGES% pelanê wikiyi esta ay de dewam bike. Cancel ra bitexne ke wedarne u yew kitabê newi ra dest pê bike.',
	'right-collectionsaveasuserpage' => 'Kitab ze pelê karberî qeyd bike',
	'right-collectionsaveascommunitypage' => 'Kitab ze pelê cemeatî qeyd bike',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'coll-desc' => '[[Special:Book|Knigły napóraś]]',
	'coll-book_creator_intro' => "<big>Z ''funkciju knigłow'' móžoš knigły napóraś, kótarež wopśimuju wikiboki twójeje wólby. Móžoš knigły do rozdźělnych formatow eksportěrowaś (na pśikład PDF abo ODF) abo wuśišćany eksemplar skazaś.",
	'coll-manage_your_book' => 'Twóje knigły zrědowaś',
	'coll-book_creator_help' => 'Glědaj [[{{MediaWiki:Coll-helppage}}|bok pomocy wó knigłach]] za dalšne informacije.',
	'coll-start_book_creator' => 'Funkciju knigłow startowaś',
	'coll-book_creator_continue' => 'Funkciju knigłow dalej wužywaś',
	'coll-book_creator_disable_text' => "''Funkcija knigłow'' buźo se znjemóžnjaś a knigły, kótarež wobźěłujoš, buźo se z twójogo wobglědowaka wótpóraś.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst funkcije knigłow',
	'coll-collection' => 'Knigły',
	'coll-collections' => 'Knigły',
	'coll-exclusion_category_title' => 'Wót śišća wuzamknuś',
	'coll-print_template_prefix' => 'Śišćaś',
	'coll-print_template_pattern' => '$1/Śišćaś',
	'coll-unknown_subpage_title' => 'Njeznaty pódbok',
	'coll-unknown_subpage_text' => 'Toś ten pódbok [[Special:Book|knigłow]] njeeksistěrujo',
	'coll-couldnotaddarticle_title' => 'Nastawk njejo se dał pśidaś',
	'coll-couldnotaddarticle_msg' => 'Nastawk njejo se dał pśidaś.',
	'coll-couldnotremovearticle_title' => 'Nastawk njejo se dał wótpóraś.',
	'coll-couldnotremovearticle_msg' => 'Nastawk njejo se dał wótpóraś.',
	'coll-noscript_text' => '<h1>JavaScript jo trěbny!</h1>
<strong>Twój wobglědowak njepódpěrujo JavaScript abo JavaScript jo znjemóžnjony.
Toś ten bok njebuźo pšawje funkcioněrowaś, tak dłujko až JavaScript njejo zmóžnjony.</strong>',
	'coll-savedbook_template' => 'składowane_knigły',
	'coll-your_book' => 'Twóje knigły',
	'coll-download_title' => 'Ześěgnuś',
	'coll-download_text' => 'Aby ześěgnuł swóje knigły, wubjeŕ format a klikni na tłocašk.',
	'coll-download_as_text' => 'Aby ześěgnuł swóje knigły we formaśe $1, klikni na tłocašk.',
	'coll-download' => 'Ześěgnuś',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Wótwónoźeś',
	'coll-show' => 'Pokazaś',
	'coll-move_to_top' => 'Górjej',
	'coll-move_up' => 'Górjej',
	'coll-move_down' => 'Dołoj',
	'coll-move_to_bottom' => 'Dołoj',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Pódtitel:',
	'coll-contents' => 'Wopśimjeśe',
	'coll-drag_and_drop' => 'Pśesuni z myšku, aby pśerědował wikijowe boki a kapitle',
	'coll-create_chapter' => 'Kapitel napóraś',
	'coll-sort_alphabetically' => 'Alfabetiski sortěrowaś',
	'coll-rename' => 'Pśemjeniś',
	'coll-new_chapter' => 'Zapódaj mě za nowy kapitel',
	'coll-rename_chapter' => 'Zapódaj nowe mě za kapitel',
	'coll-no_such_category' => 'Njejo taka kategorija',
	'coll-notitle_title' => 'Titel boka njejo se dał zwěsćiś.',
	'coll-post_failed_title' => 'POST-napšašanje jo se njeraźiło',
	'coll-post_failed_msg' => 'POST-napšašanje do $1 jo se njeraźiło ($2).',
	'coll-mwserve_failed_title' => 'Zmólka kresleńskego serwera',
	'coll-mwserve_failed_msg' => 'Na kresleńskem serwerje jo zmólka nastała: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Powěźeńka zmólki wót serwera',
	'coll-empty_collection' => 'Prozne knigły',
	'coll-revision' => 'Wersija: $1',
	'coll-save_collection_title' => 'Twóje knigły składowaś a źěliś',
	'coll-save_collection_text' => 'Wubjeŕ městno:',
	'coll-login_to_save' => 'Jolic coš knigły za póznjejše wužywanje składowaś, [[Special:UserLogin|pśizjaw se abo załož konto]].',
	'coll-personal_collection_label' => 'Wósobinske knigły:',
	'coll-community_collection_label' => 'Knigły zgromaźeństwa:',
	'coll-save_collection' => 'Knigły składowaś',
	'coll-save_category' => 'Wšykne skłaźone knigły pśidawaju se kategoriji [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Bok eksistěrujo.
Pśepisaś?',
	'coll-overwrite_text' => 'Bok z mjenim [[:$1]] južo eksistěrujo.
Coš jen pśez swóju zběrku wuměniś?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Ně',
	'coll-load_overwrite_text' => 'Maš južo někotare boki w swójich knigłach.
Coš swóje aktualne knigły pśepisaś, nowe wopśimjeśe pśipowjesyś abo zacytowanje toś tych knigłow pśetergnuś?',
	'coll-overwrite' => 'Pśepisaś',
	'coll-append' => 'Pśipowjesyś',
	'coll-cancel' => 'Pśetergnuś',
	'coll-update' => 'Aktualizěrowaś',
	'coll-limit_exceeded_title' => 'Knigły pśewjelike',
	'coll-limit_exceeded_text' => 'Twóje knigły su pśewjelike.
Njedaju se boki pśidaś.',
	'coll-rendering_title' => 'Twórjenje',
	'coll-rendering_text' => '<p><strong>Pšosym pócakaj, mjaztym až se dokument napórajo.</strong></p>

<p><strong>Póstup:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Toś ten bok by se dejał kuždy pór sekundow wótnowiś.
Jolic to njefunkcioněrujo, klikni pšosym tłocašk "Znowego" swójogo wobglědowaka.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikijowy bok: $1)',
	'coll-rendering_page' => '(bok: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Cerjenje infoteksta boka',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Cerjenje infoteksta zběrki',
	'coll-rendering_finished_title' => 'Twórjenje dokóńcone',
	'coll-rendering_finished_text' => '<strong>Dokumentowa dataja jo se napórała.</strong>
<strong>[$1 Ześěgni dataju]</strong> do swójogo licadła.

Pśispomnjeśa:
* Njespokojom z wudaśim? Glědaj [[{{MediaWiki:Coll-helppage}}|bok pomocy wó zběrkach]] za móžnosći, jo  pólěpšyś.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informaciski tekst boka wuceriś',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informaciski tekst zběrki wuceriś',
	'coll-notfound_title' => 'Knigły njenamakane',
	'coll-notfound_text' => 'Bok knigłow njejo se dał namakaś.',
	'coll-download_notfound_title' => 'Dataja njenamakana',
	'coll-download_notfound_text' => 'Dataja, kótaruž wopytujoš ześěgowaś, njeeksistěrujo: Snaź jo se wulašowała a musy se znowego napóraś.',
	'coll-download_failed_title' => 'Zmólka pśi ześěgnjenju',
	'coll-download_failed_text' => 'Pśi ześěgnjenju dataje jo zmólka nastała: $1',
	'coll-is_cached' => '<ul><li>Mjazyskładowana wersija dokumenta jo se namakała, tak až kreslenje njejo było trěbne. <a href="$1">Kreslenje wunuziś.</a></li></ul>',
	'coll-excluded-templates' => '* Pśedłogi w kategoriji [[:Category:$1|$1]] su se wuzamknuli.',
	'coll-blacklisted-templates' => '* Pśedłogi na cornej lisćinje [[:$1]] su se wuzamknuli.',
	'coll-return_to_collection' => '<p>Slědk k <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ako wuśišćane knigły skazaś',
	'coll-book_text' => 'Wuśišćane knigły wót našogo partnera za śišć na pominanje skazaś:',
	'coll-order_from_pp' => 'Pśeglěd pla $1',
	'coll-about_pp' => 'Wó $1',
	'coll-invalid_podpartner_title' => 'Njepłaśiwy partner za śišć na pominanje',
	'coll-invalid_podpartner_msg' => 'Pódany partner za śišć na pominanje jo njepłaśiwy.
Skontaktuj pšosym swójogo administratora MediaWiki',
	'coll-license' => 'Licenca',
	'coll-return_to' => 'Slědk k bokoju [[:$1]]',
	'coll-more_info' => 'Dalšne informacije pokazaś',
	'coll-hide_info' => 'Informacije schowaś',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress skazańske informacije',
	'coll-suggest_title' => 'Naraźone boki za twóje knigły',
	'coll-suggest_intro_text' => 'Naraźenja bazěruju na aktualnu sajźbu wikibokow w twójich knigłach.
Lisćina se aktualizěrujo, gažkuli kliknjoš na tłocašk "pśidaś" abo "wótpóraś".',
	'coll-suggested_articles' => 'Naraźenja',
	'coll-suggest_reset_bans' => 'slědk stajiś',
	'coll-suggest_reset_bans_tooltip' => 'Do togo wótpórane naraźenja pokazaś',
	'coll-suggest_add_selected' => 'Wubrane boki pśidaś',
	'coll-suggest_ban_selected' => 'Wubrane boki wótpóraś',
	'coll-suggest_your_book' => 'Twóje knigły',
	'coll-suggest_show' => 'pokazaś',
	'coll-suggest_ban_tooltip' => 'Toś ten bok z lisćiny naraźenjow wótpóraś',
	'coll-suggest_article_ban' => 'Bok <strong>$1</strong> jo se z naraźenjow wótpórał ($2).',
	'coll-suggest_article_add' => 'Bok <strong>$1</strong> jo se twójim knigłam pśidał ($2).',
	'coll-suggest_article_remove' => 'Bok <strong>$1</strong> jo se z twójich knigłow wótpórał ($2).',
	'coll-suggest_undo_tooltip' => 'Akciju slědk wześ',
	'coll-suggest_undo' => 'slědk wześ',
	'coll-load_local_book' => 'Klikni na W pórědku, aby pókšacowak z knigłami %TITLE%, kótaraž wopśimujo %NUMPAGES% {{PLURAL:%NUMPAGES%|wikibok|wikiboka|wikiboki|wikibokow}}. Klikni na Pśetergnuś, aby ju wulašował a startuj z proznymi knigłami.',
	'right-collectionsaveasuserpage' => 'Knigły ako wužywarski bok składowaś',
	'right-collectionsaveascommunitypage' => 'Knigły ako bok zgromaźeństwa składowaś',
);

/** Ewe (Eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'coll-contents' => 'Emenyawo',
	'coll-notfound_title' => 'Womekpɔ agbalẽa o',
	'coll-license' => 'Mɔɖeɖe',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Crazymadlover
 * @author Evropi
 * @author Geraki
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'coll-desc' => '[[Special:Book|Δημιουργία βιβλίων]]',
	'coll-book_creator_intro' => "<big>Με τη ''λειτουργία βιβλίου'' μπορείτε να δημιουργήσετε ένα βιβλίο που αποτελείται από βικισελίδες της επιλογής σας. Μπορείτε να εξάγετε το βιβλίο σε διαφορετικές μορφές (για παράδειγμα PDF ή ODF) ή να παραγγείλετε ένα εκτυπωμένο αντίγραφο.</big>",
	'coll-manage_your_book' => 'Διαχείριση του βιβλίου σας',
	'coll-book_creator_help' => 'Δείτε [[{{MediaWiki:Coll-helppage}}|τη σελίδα βοήθειας για τα βιβλία]] για περισσότερες πληροφορίες.',
	'coll-start_book_creator' => 'Έναρξη δημιουργίας βιβλίου',
	'coll-book_creator_continue' => 'Συνέχιση χρήσης του δημιουργού βιβλίων',
	'coll-book_creator_disable_text' => "Ο ''δημιουργός βιβλίων'' θα απενεργοποιηθεί και το βιβλίο πάνω στο οποίο δουλεύετε θα αφαιρεθεί.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Κείμενο κατάστασης βιβλίου',
	'coll-collection' => 'Βιβλίο',
	'coll-collections' => 'Βιβλία',
	'coll-exclusion_category_title' => 'Εξαίρεση στην εκτύπωση',
	'coll-print_template_prefix' => 'Εκτύπωση',
	'coll-print_template_pattern' => '$1/Εκτύπωση',
	'coll-unknown_subpage_title' => 'Άγνωστη υποσελίδα',
	'coll-unknown_subpage_text' => 'Αυτή η υποσελίδα [[Special:Book|Βιβλίου]] δεν υπάρχει',
	'coll-couldnotaddarticle_title' => 'Δεν ήταν εφικτό να προστεθεί σελίδα βίκι.',
	'coll-couldnotaddarticle_msg' => 'Η σελίδα βίκι δεν ήταν δυνατό να προστεθεί.',
	'coll-couldnotremovearticle_title' => 'Δεν ήταν εφικτό να αφαιρεθεί αυτή η σελίδα βίκι',
	'coll-couldnotremovearticle_msg' => 'Η σελίδα βίκι δεν μπορούσε να αφαιρεθεί.',
	'coll-noscript_text' => '<h1>Χρειάζεται JavaScript!</h1>
<strong>Ο περιηγητής σας δεν υποστηρίζει JavaScript ή η JavaScript έχει απενεργοποιηθεί.
Αυτή η σελίδα δεν θα λειτουργεί κανονικά, εκτός και αν ενεργοποιηθεί η JavaScript.</strong>',
	'coll-savedbook_template' => 'αποθηκευμένο_βιβλίο',
	'coll-your_book' => 'Το βιβλίο σας',
	'coll-download_title' => 'Λήψη',
	'coll-download_text' => 'Για να κατεβάσετε το βιβλίο σας επιλέξτε την μορφή και πατήστε το κουμπί.',
	'coll-download_as_text' => 'Για να κατεβάσετε το βιβλίο σας σε μορφή $1 πατήστε το κουμπί.',
	'coll-download' => 'Λήψη',
	'coll-format_label' => 'Μορφή:',
	'coll-remove' => 'Αφαίρεση',
	'coll-show' => 'Εμφάνιση',
	'coll-move_to_top' => 'Μετακίνηση στην κορυφή',
	'coll-move_up' => 'Μετακίνηση επάνω',
	'coll-move_down' => 'Μετακίνηση κάτω',
	'coll-move_to_bottom' => 'Μετακίνηση στον πάτο',
	'coll-title' => 'Τίτλος:',
	'coll-subtitle' => 'Υπότιτλος:',
	'coll-contents' => 'Περιεχόμενα',
	'coll-drag_and_drop' => 'Χρησιμοποιήστε drag & drop για να ταξινομήσετε σελίδες wiki και κεφάλαια',
	'coll-create_chapter' => 'Δημιουργία κεφαλαίου',
	'coll-sort_alphabetically' => 'Ταξινόμηση αλφαβητικά',
	'coll-rename' => 'Μετονομασία',
	'coll-new_chapter' => 'Γράψτε όνομα για το νέο κεφάλαιο',
	'coll-rename_chapter' => 'Γράψτε νέο όνομα για το κεφάλαιο',
	'coll-no_such_category' => 'Δεν υπάρχει τέτοια κατηγορία',
	'coll-notitle_title' => 'Ο τίτλος της σελίδας δεν μπόρεσε να προσδιοριστεί.',
	'coll-post_failed_title' => 'Η αίτηση POST απέτυχε',
	'coll-post_failed_msg' => 'Το αίτημα POST στο  $1 απέτυχε ($2).',
	'coll-mwserve_failed_title' => 'Σφάλμα διακομιστή μορφοποίησης',
	'coll-mwserve_failed_msg' => 'Ένα σφάλμα συνέβη στον διακομιστή μορφοποίησης: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Σφάλμα απάντησης από τον διακομιστή',
	'coll-empty_collection' => 'Άδειο βιβλίο',
	'coll-revision' => 'Έκδοση: $1',
	'coll-save_collection_title' => 'Αποθήκευση και μοίρασμα του βιβλίου σας',
	'coll-save_collection_text' => 'Επιλογή μιας τοποθεσίας αποθήκευσης για το βιβλίο σας:',
	'coll-login_to_save' => 'Αν θέλετε να αποθηκεύσετε βιβλία για μεταγενέστερη χρήση, παρακαλούμε [[Special:UserLogin|συνδεθείτε ή δημιουργήστε ένα λογαριασμό]].',
	'coll-personal_collection_label' => 'Προσωπικό βιβλίο:',
	'coll-community_collection_label' => 'Κοινοτικό βιβλίο:',
	'coll-save_collection' => 'Αποθήκευση βιβλίου',
	'coll-save_category' => 'Όλα τα αποθηκευμένα βιβλία προστίθενται στην κατηγορία [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Η σελίδα υπάρχει.
Επικάλυψη;',
	'coll-overwrite_text' => 'Μια σελίδα με το όνομα [[:$1]] υπάρχει ήδη.
Θέλετε να αντικατασταθεί με το βιβλίο σας;',
	'coll-yes' => 'Ναι',
	'coll-no' => 'Όχι',
	'coll-load_overwrite_text' => 'Έχετε ήδη ορισμένες σελίδες στο βιβλίο σας.
Θέλετε να επικαλύψετε το τρέχον βιβλίο σας, να προσθέσετε νέο περιεχόμενο, ή να ακυρώσετε το φόρτωμα αυτού του βιβλίου;',
	'coll-overwrite' => 'Επικάλυψη',
	'coll-append' => 'Προσθήκη',
	'coll-cancel' => 'Ακύρωση',
	'coll-update' => 'Ενημέρωση',
	'coll-limit_exceeded_title' => 'Το βιβλίο είναι πολύ μεγάλο',
	'coll-limit_exceeded_text' => 'Το βιβλίο σας είναι πολύ μεγάλο.
Δεν μπορούν να προστεθούν άλλες σελίδες.',
	'coll-rendering_title' => 'Μορφοποίηση',
	'coll-rendering_text' => '<p><strong>Παρακαλούμε περιμένετε όσο το έγγραφό σας δημιουργείται.</strong></p>

<p><strong>Πρόοδος:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Αυτή η σελίδα θα πρέπει να ανανεώνεται αυτόματα κάθε λίγα δευτερόλεπτα. 
Αν δεν δουλεύει, παρακαλούμε πατήστε το κουμπί ανανέωσης στον περιηγητή σας.</p>',
	'coll-rendering_status' => '<strong>Πρόοδος:</strong> $1',
	'coll-rendering_article' => '(σελίδα wiki: $1)',
	'coll-rendering_page' => '(σελίδα: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Μορφοποίηση κειμένου πληροφοριών σελίδας',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Μορφοποίηση κειμένου πληροφοριών συλλογής',
	'coll-rendering_finished_title' => 'Η μορφοποίηση ολοκληρώθηκε',
	'coll-rendering_finished_text' => '<strong>Το αρχείο εγγράφου έχει δημιουργηθεί.</strong>
<strong>[$1 Κατεβάστε το αρχείο]</strong> στον υπολογιστή σας.

Σημειώσεις:
* Δεν είστε ικανοποιημένος με το αποτέλεσμα; Δείτε την [[{{MediaWiki:Coll-helppage}}|σελίδα βοήθειας για τα βιβλία]] για πιθανούς τρόπους να το βελτιώσετε.',
	'coll-notfound_title' => 'Το βιβλίο δεν βρέθηκε',
	'coll-notfound_text' => 'Δεν βρέθηκε η σελίδα βιβλίου.',
	'coll-download_notfound_title' => 'Το αρχείο δεν βρέθηκε',
	'coll-download_notfound_text' => 'Το αρχείο που προσπαθείτε να κατεβάσετε δεν υπάρχει: Ίσως έχει διαγραφεί και πρέπει να επαναπαραχθεί.',
	'coll-download_failed_title' => 'Σφάλμα κατά το κατέβασμα',
	'coll-download_failed_text' => 'Προέκυψε σφάλμα κατά το κατέβασμα του αρχείου: $1',
	'coll-is_cached' => '<ul><li>Μια αποθηκευμένη έκδοση του εγγράφου έχει βρεθεί, οπότε καμία μορφοποίηση δεν ήταν απαραίτητη. <a href="$1">Επιβολή επαναμορφοποίησης .</a></li></ul>',
	'coll-excluded-templates' => '* Πρότυπα στην κατηγορία [[:Category:$1|$1]] έχουν εξαιρεθεί.',
	'coll-blacklisted-templates' => '* Πρότυπα στην μαύρη λίστα [[:$1]] έχουν εξαιρεθεί.',
	'coll-return_to_collection' => '<p>Επιστροφή στο <a href="$1">$2</a></p>',
	'coll-book_title' => 'Παραγγελία ως εκτυπωμένο βιβλίο',
	'coll-book_text' => 'Πάρτε ένα τυπωμένο βιβλίο από τον συνεργάτη μας εκτύπωσης-κατά-παραγγελία:',
	'coll-order_from_pp' => 'Προεπισκόπηση με $1',
	'coll-about_pp' => 'Σχετικά με το $1',
	'coll-invalid_podpartner_title' => 'Ανύπαρκτος συνεργάτης ΕΚΠ',
	'coll-invalid_podpartner_msg' => 'Ο ζητούμενος συνεργάτης ΕΚΠ δεν υπάρχει.
Παρακαλούμε επικοινωνήστε με ένα διαχειριστή του MediaWiki.',
	'coll-license' => 'Άδεια',
	'coll-return_to' => 'Επιστροφή στο [[:$1]]',
	'coll-more_info' => 'Εμφάνιση περισσότερων πληροφοριών',
	'coll-hide_info' => 'Απόκρυψη πληροφοριών',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress απαίτηση για πληροφόρηση',
	'coll-suggest_title' => 'Προτεινόμενες σελίδες για το βιβλίο σας',
	'coll-suggest_intro_text' => 'Οι υποδείξεις βασίζονται στην τρέχουσα ρύθμιση βικισελίδων στο βιβλίο σας.
Η λίστα θα ανανεώνεται κάθε φορά που θα κάνετε κλικ στα κουμπιά προσθήκης και αφαίρεσης.',
	'coll-suggested_articles' => 'Υποδείξεις',
	'coll-suggest_reset_bans' => 'ρύθμιση ξανά',
	'coll-suggest_reset_bans_tooltip' => 'Εμφάνιση προτάσεων που έχουν αφαιρεθεί προηγουμένως',
	'coll-suggest_add_selected' => 'Προσθήκη επιλεγμένων σελίδων',
	'coll-suggest_ban_selected' => 'Αφαίρεση επιλεγμένων σελίδων',
	'coll-suggest_your_book' => 'Το βιβλίο σας',
	'coll-suggest_show' => 'προβολή',
	'coll-suggest_ban_tooltip' => 'Αφαιρέστε αυτή τη σελίδα από τον κατάλογο των προτάσεων',
	'coll-suggest_article_ban' => 'Η σελίδα <strong>$1</strong> έχει αφαιρεθεί από τις προτάσεις ($2).',
	'coll-suggest_article_add' => 'Η σελίδα <strong>$1</strong> έχει προστεθεί στο βιβλίο σας ($2).',
	'coll-suggest_article_remove' => 'Η σελίδα <strong>$1</strong> έχει αφαιρεθεί από το βιβλίο σας ($2).',
	'coll-suggest_undo_tooltip' => 'Αναίρεση αυτής της ενέργειας',
	'coll-suggest_undo' => 'αναίρεση',
	'right-collectionsaveasuserpage' => 'Αποθήκευση βιβλίων ως σελίδας χρήστη',
	'right-collectionsaveascommunitypage' => 'Αποθήκευση βιβλίων ως σελίδας κοινότητας',
);

/** Esperanto (Esperanto)
 * @author Airon90
 * @author Amikeco
 * @author ArnoLagrange
 * @author Castelobranco
 * @author Petrus Adamus
 * @author Yekrats
 * @author Александр Сигачёв
 */
$messages['eo'] = array(
	'coll-desc' => '[[Special:Book|Krei librojn]]',
	'coll-book_creator_intro' => "<big>Per la ''libro-kreilo'' vi povas krei libron enhavantan vikipaĝojn de via elekto. Vi povas eksporti la libro en variaj formoj (ekz-e PDF aŭ ODF) aŭ peti presitan kopion.</big>",
	'coll-manage_your_book' => 'Administri vian libron',
	'coll-book_creator_help' => 'Vidi [[{{MediaWiki:Coll-helppage}}|la help-paĝon pri libroj]] por pliaj informoj.',
	'coll-start_book_creator' => 'Komenci libro-kreilon',
	'coll-book_creator_continue' => 'Daŭre uzante libro-kreilon',
	'coll-book_creator_disable_text' => "''Libra kreilo'' estos malŝalta kaj la libro kiun vi laboras estos forigita.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Teksto por libra reĝimo',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libroj',
	'coll-exclusion_category_title' => 'Ekskludi de printado',
	'coll-print_template_prefix' => 'Printi',
	'coll-print_template_pattern' => '$1/Printi',
	'coll-unknown_subpage_title' => 'Nekonata subpaĝo',
	'coll-unknown_subpage_text' => 'Ĉi tiu subpaĝo de [[Special:Book|Libro]] ne ekzistas',
	'coll-couldnotaddarticle_title' => 'Ne eblis aldoni vikian paĝon',
	'coll-couldnotaddarticle_msg' => 'Ne eblis aldoni ĉi tiun vikian paĝon.',
	'coll-couldnotremovearticle_title' => 'Ne povis forigi vikipaĝon',
	'coll-couldnotremovearticle_msg' => 'Ne eblis forigi ĉi tiun vikian paĝon.',
	'coll-noscript_text' => '<h1>JavaScript-o estas deviga!<h1>
<strong>Via retumilo ne subtenas JavaScript-on aŭ JavaScript-o estis malŝaltita.
Ĉi tiu paĝo ne funkcius bone, ĝis JavaScript-o estas ŝaltita.</strong>',
	'coll-savedbook_template' => 'konservita_libro',
	'coll-your_book' => 'Via libro',
	'coll-download_title' => 'Elŝuti',
	'coll-download_text' => 'Por elŝuti vian libron, elektu formato kaj klaku la butonon.',
	'coll-download_as_text' => 'Por elŝuti vian libron en formato $1, klaku la butonon.',
	'coll-download' => 'Elŝuto',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Forigi',
	'coll-show' => 'Montri',
	'coll-move_to_top' => 'Movi superen',
	'coll-move_up' => 'Movi supren',
	'coll-move_down' => 'Movi suben',
	'coll-move_to_bottom' => 'Movi malsuperen',
	'coll-title' => 'Titolo:',
	'coll-subtitle' => 'Subtitolo:',
	'coll-contents' => 'Enhavaĵoj',
	'coll-drag_and_drop' => 'Uzu musan tren-kaj-maltenon por reordigi vikiajn paĝojn kaj ĉapitrojn',
	'coll-create_chapter' => 'Krei ĉapitron',
	'coll-sort_alphabetically' => 'Ordigi laŭ alfabeto',
	'coll-rename' => 'Alinomigi',
	'coll-new_chapter' => 'Enigi nomon por nova ĉapitro',
	'coll-rename_chapter' => 'Enigi novan nomon por ĉapitro',
	'coll-no_such_category' => 'Nenia kategorio',
	'coll-notitle_title' => 'La titolo de la paĝo ne estis determinebla.',
	'coll-post_failed_title' => 'POST-peto malsukcesis',
	'coll-post_failed_msg' => 'La POST-peto por $1 malsukcesis ($2).',
	'coll-mwserve_failed_title' => 'Eraro kun montrada servilo',
	'coll-mwserve_failed_msg' => 'Eraro okazis en la montrada servilo: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Erara respondo de servilo',
	'coll-empty_collection' => 'Malplena libro',
	'coll-revision' => 'Versio: $1',
	'coll-save_collection_title' => 'Konservi kaj permesigi vian libron',
	'coll-save_collection_text' => 'Elektu konservlokon por via libro:',
	'coll-login_to_save' => 'Se vi volas konservi librojn por posta uzo, bonvolu [[Special:UserLogin|ensaluti aŭ krei novan konton]].',
	'coll-personal_collection_label' => 'Propra libro:',
	'coll-community_collection_label' => 'Komuna libro:',
	'coll-save_collection' => 'Konservi libron',
	'coll-save_category' => 'Ĉiuj konservitaj libroj estas aldonitaj al la kategorio [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Paĝo ekzistas. Ĉu anstataŭigi?',
	'coll-overwrite_text' => 'Paĝo kun la nomo [[:$1]] jam ekzistas.
Ĉu vi volas anstatŭigi ĝin kun via kolekto?',
	'coll-yes' => 'Jes',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Vi jam havas iujn paĝojn en via libro.
Ĉu vi volas anstataŭigi vian nunan libron, aldoni la novan enhavon, aŭ nuligi ŝarĝadon de ĉi tiu libro?',
	'coll-overwrite' => 'Anstataŭigu',
	'coll-append' => 'Aldoni',
	'coll-cancel' => 'Nuligi',
	'coll-update' => 'Ĝisdatigi',
	'coll-limit_exceeded_title' => 'Libro tro granda',
	'coll-limit_exceeded_text' => 'Via libro estas tro granda.
Neniom da pliaj paĝoj estas aldoneblaj.',
	'coll-rendering_title' => 'Generante',
	'coll-rendering_text' => '<p><strong>Bonvolu atendi dum la dokumento generiĝas.</strong></p>

<p><strong>Progreso:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Ĉi tiu paĝo aŭtomate refreŝiĝas ĉiuj kelksekundoj.
Se ne funkcias, bonvolu klaki refreŝigo-butonon de via retumilo.</p>',
	'coll-rendering_status' => '<strong>Statuso:</strong> $1',
	'coll-rendering_article' => '(vikipaĝo: $1)',
	'coll-rendering_page' => '(paĝo: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Generanta helpan paĝon',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Generanta helpan paĝon pri kolektoj',
	'coll-rendering_finished_title' => 'Generado finiĝis.',
	'coll-rendering_finished_text' => '<strong>La dokumento estis generita.</strong>
<strong>[$1 Elŝuti la dosieron]</strong> al via komputilo.

Notoj:
* Ĉu la eligo ne plaĉus al vi? Vidu [[{{MediaWiki:Coll-helppage}}|la helpan paĝon pri kolektoj]] por fojoj por plibonigi ĝin.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informoteksto pri bildigante paĝon',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informoteksto pri bildigante kolekton',
	'coll-notfound_title' => 'Libro ne trovita',
	'coll-notfound_text' => 'Ne povis trovi libran paĝon.',
	'coll-download_notfound_title' => 'Dosiero ne trovita',
	'coll-download_notfound_text' => 'La dosiero kiun vi celas elŝuti ne ekzistas. Eble ĝi estis forigita kaj bezonas esti regenerata.',
	'coll-download_failed_title' => 'Eraro dum elŝuto',
	'coll-download_failed_text' => 'Estis eraro kiam elŝutante la dosieron: $1',
	'coll-is_cached' => '<ul><li>Kaŝmemora versio de la dokumento estis trovita, tial bildigado ne bezonis.<a href="$1">Devigi re-bildigadon.</a></li></ul>',
	'coll-excluded-templates' => '* Ŝablonoj en kategorio [[:Category:$1|$1]] estis ekskluzivita.',
	'coll-blacklisted-templates' => '* Ŝablonoj en nigralisto [[:$1]] estis malebligitaj.',
	'coll-return_to_collection' => '<p>Reiru al <a href="$1">$2</a></p>',
	'coll-book_title' => 'Mendi kiel presitan libron',
	'coll-book_text' => 'Akiri presitan libron de nia ek-eldoneja partnero:',
	'coll-order_from_pp' => 'Antaŭvidi kun $1',
	'coll-about_pp' => 'Pri $1',
	'coll-invalid_podpartner_title' => 'Malvalida ek-eldoneja partnero',
	'coll-invalid_podpartner_msg' => 'La donita ek-eldoneja partnero estas malvalida.
Bonvolu kontakti vian administranton de MediaWiki.',
	'coll-license' => 'Permesilo',
	'coll-return_to' => 'Reiri al [[:$1]]',
	'coll-more_info' => 'Montri plian informon',
	'coll-hide_info' => 'Kaŝi informon',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress mendo-informo',
	'coll-suggest_title' => 'Sugestitaj paĝoj por via libro',
	'coll-suggest_intro_text' => 'Sugestoj estas bazita de la nuna aro de vikipaĝoj en via libro.
La listo estas ĝisdatigita iam ajn vi klakas la butonojn aldoni aŭ forigi.',
	'coll-suggested_articles' => 'Sugestoj',
	'coll-suggest_reset_bans' => 'restarigi',
	'coll-suggest_reset_bans_tooltip' => 'Montri antaŭe forigitajn sugestojn',
	'coll-suggest_add_selected' => 'Aldoni elektitajn paĝojn',
	'coll-suggest_ban_selected' => 'Forigi elektitajn paĝojn',
	'coll-suggest_your_book' => 'Via libro',
	'coll-suggest_show' => 'montri',
	'coll-suggest_ban_tooltip' => 'Forigi ĉi tiun paĝon el la listo de sugestoj',
	'coll-suggest_article_ban' => 'Paĝo <strong>$1</strong> estis forigita de la sugestoj ($2).',
	'coll-suggest_article_add' => 'Paĝo <strong>$1</strong> estis aldonita al via libro ($2).',
	'coll-suggest_article_remove' => 'Paĝo <strong>$1</strong> estis forigita de via libro ($2).',
	'coll-suggest_undo_tooltip' => 'Malfari ĉi tiun agon',
	'coll-suggest_undo' => 'malfari',
	'coll-load_local_book' => 'Alklaki OK por daŭrigi kun via libro %TITOLO% kiu enhavas %NUMPAGES% viki-paĝojn. Alklaki "Nuligi" por komenci kun malplena libro.',
	'right-collectionsaveasuserpage' => 'Konservi librojn kiel uzanto-paĝo',
	'right-collectionsaveascommunitypage' => 'Konservi librojn kiel komunuma paĝo',
);

/** Spanish (Español)
 * @author Baiji
 * @author Crazymadlover
 * @author Dferg
 * @author Imre
 * @author Jatrobat
 * @author Lin linao
 * @author Locos epraix
 * @author Manuelt15
 * @author McDutchie
 * @author Mor
 * @author Pertile
 * @author Platonides
 * @author Remember the dot
 * @author Sanbec
 * @author Translationista
 */
$messages['es'] = array(
	'coll-desc' => '[[Special:Book|Crear libros]]',
	'coll-book_creator_intro' => "<big>Con el ''creador de libros'' puedes crear un libro consistente de páginas wiki de tu preferencia. Puedes exportar tu libro en diferentes formatos (por ejemplo PDF o ODF) u ordenar una copia impresa.</big>",
	'coll-manage_your_book' => 'Gestionar tu libro',
	'coll-book_creator_help' => 'Para más información véase [[{{MediaWiki:Coll-helppage}}|la página de ayuda acerca de los libros]].',
	'coll-start_book_creator' => 'Comenzar creador de libro',
	'coll-book_creator_continue' => 'Continuar usando creador de libro',
	'coll-book_creator_disable_text' => "''Creador de libros'' se descargará y el libro en que estás trabajando será eliminado.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Texto en modo libro',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libros',
	'coll-exclusion_category_title' => 'Excluir al imprimir',
	'coll-print_template_prefix' => 'Imprimir',
	'coll-print_template_pattern' => '$1/Imprimir',
	'coll-unknown_subpage_title' => 'Subpágina desconocida',
	'coll-unknown_subpage_text' => 'Esta subpágina del [[Special:Book|libro]] no existe',
	'coll-couldnotaddarticle_title' => 'No pudo agregar página wiki',
	'coll-couldnotaddarticle_msg' => 'La página wiki no pudo ser agregada.',
	'coll-couldnotremovearticle_title' => 'No es posible eliminar la página wiki',
	'coll-couldnotremovearticle_msg' => 'La página wiki no pudo ser eliminada.',
	'coll-noscript_text' => '<h1>¡Se necesita JavaScript!</h1>
<strong>Tu navegador no permite JavaScript o está deshabilitado.
Esta página no funcionará correctamente mientras no esté habilitado.</strong>',
	'coll-savedbook_template' => 'libro_guardado',
	'coll-your_book' => 'Tu libro',
	'coll-download_title' => 'Descargar',
	'coll-download_text' => 'Para descargar tu libro escoge un formato y pulsa el botón.',
	'coll-download_as_text' => 'Para descargar tu libro en el formato $1 pulsa el botón.',
	'coll-download' => 'Descargar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Quitar',
	'coll-show' => 'Mostrar',
	'coll-move_to_top' => 'Mover al principio',
	'coll-move_up' => 'Mover arriba',
	'coll-move_down' => 'Mover abajo',
	'coll-move_to_bottom' => 'Mover al final',
	'coll-title' => 'Título:',
	'coll-subtitle' => 'Subtítulo:',
	'coll-contents' => 'Contenidos',
	'coll-drag_and_drop' => "Usa arrastrar y soltar (''drag & drop'') para reordenar capítulos y páginas wiki",
	'coll-create_chapter' => 'Crear capítulo',
	'coll-sort_alphabetically' => 'Ordenar alfabéticamente',
	'coll-rename' => 'Renombrar',
	'coll-new_chapter' => 'Introducir nombre del capítulo nuevo',
	'coll-rename_chapter' => 'Introducir un nombre nuevo para el capítulo',
	'coll-no_such_category' => 'No existe tal categoría',
	'coll-notitle_title' => 'No se puede determinar el título de la página.',
	'coll-post_failed_title' => 'Falló la solicitud POST',
	'coll-post_failed_msg' => 'La solicitud POST  a $1 ha fallado ($2).',
	'coll-mwserve_failed_title' => 'Error del servidor de procesado',
	'coll-mwserve_failed_msg' => 'Ha ocurrido un error en el servidor de procesado: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Respuesta de error del servidor',
	'coll-empty_collection' => 'libro vacío',
	'coll-revision' => 'Revisión: $1',
	'coll-save_collection_title' => 'Guardar y compartir tu libro',
	'coll-save_collection_text' => 'Escoge una localización:',
	'coll-login_to_save' => 'Si quieres guardar libros para uso posterior, por favor [[Special:UserLogin|identifícate o crea una cuenta]].',
	'coll-personal_collection_label' => 'libro personal:',
	'coll-community_collection_label' => 'libro de la comunidad:',
	'coll-save_collection' => 'Guardar libro',
	'coll-save_category' => 'Todos los libros grabados están agregados a la categoría [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La página ya existe.
¿Sobreescribir?',
	'coll-overwrite_text' => 'Ya existe una página con el nombre [[:$1]].
¿Quieres reemplazarla con tu compilación?',
	'coll-yes' => 'Sí',
	'coll-no' => 'No',
	'coll-load_overwrite_text' => 'Ya tienes algunas páginas en tu libro.
¿Quieres sobreescribir tu libro actual, añadir el nuevo contenido o cancelar la carga de este libro?',
	'coll-overwrite' => 'Sobrescribir',
	'coll-append' => 'Anexar',
	'coll-cancel' => 'Cancelar',
	'coll-update' => 'Actualizar',
	'coll-limit_exceeded_title' => 'libro demasiado grande',
	'coll-limit_exceeded_text' => 'Tu libro es demasiado grande.
No se pueden añadir más páginas.',
	'coll-rendering_title' => 'Procesando',
	'coll-rendering_text' => '<p><strong>Por favos, espera mientras se genera el documento.</strong></p>

<p><strong>Avance:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Esta página se refrescará automáticamente cada pocos segundos.
Si no funciona, pulsa el botón de refrescar de tu navegador.</p>',
	'coll-rendering_status' => '<strong>Estatus:</strong> $1',
	'coll-rendering_article' => '(página wiki: $1)',
	'coll-rendering_page' => '(página: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/ Procesando texto de información de la página',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/ Procesando texto de información de la colección',
	'coll-rendering_finished_title' => 'Proceso finalizado',
	'coll-rendering_finished_text' => '<strong>Se ha generado el documento.</strong>
<strong>[$1 Descarga el archivo]</strong>.

Notas:
* ¿No estás satisfecho con el resultado? Mira [[{{MediaWiki:Coll-helppage}}|la página de ayuda sobre libros]] para ver las  posibilidades de mejorarlo.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo de la página de renderización',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo de la colección de renderización',
	'coll-notfound_title' => 'No se encuentra el libro',
	'coll-notfound_text' => 'No se encuentra la página de libro.',
	'coll-download_notfound_title' => 'Archivo no encontrado',
	'coll-download_notfound_text' => 'El archivo que estás tratando de descargar no existe: Puede ser que haya sido borrado y necesite ser regenerado.',
	'coll-download_failed_title' => 'Error durante descarga',
	'coll-download_failed_text' => 'Hubo un error cuando se descargaba el archivo: $1',
	'coll-is_cached' => '<ul><li>Se ha encontrado una versión procesada del documento, por lo que no es necesario procesarlo. <a href="$1">Forzar reprocesado.</a></li></ul>',
	'coll-excluded-templates' => '* Se han excluido las plantillas de la categoría [[:Category:$1|$1]].',
	'coll-blacklisted-templates' => '* Se han excluido las plantillas [[:$1]] por estar en la lista negra.',
	'coll-return_to_collection' => '<p>Volver a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Solicitar el libro impreso',
	'coll-book_text' => 'Obtener un libro impreso de uno de nuestros socios para solicitudes de impresión:',
	'coll-order_from_pp' => 'Previsualizar con $1',
	'coll-about_pp' => 'Acerca de $1',
	'coll-invalid_podpartner_title' => 'Socio de solicitudes de impresión (POD) no válido',
	'coll-invalid_podpartner_msg' => 'El socio para solicitudes de impresión (POD) indicado no es válido.
Por favor, contacta con tu administrador MediaWiki.',
	'coll-license' => 'Licencia',
	'coll-return_to' => 'Volver a [[:$1]].',
	'coll-more_info' => 'Mostrar más información',
	'coll-hide_info' => 'Ocultar información',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress ordenar información',
	'coll-suggest_title' => 'Páginas sugeridas para tu libro',
	'coll-suggest_intro_text' => 'Las sugerencias están basadas en el conjunto actual de páginas wiki de tu libro.
La lista se actualiza cada vez que haces click en los botones de agregar o quitar.',
	'coll-suggested_articles' => 'Sugerencias',
	'coll-suggest_reset_bans' => 'reestablecer',
	'coll-suggest_reset_bans_tooltip' => 'Mostrar sugerencias previamente eliminadas',
	'coll-suggest_add_selected' => 'Agregar páginas seleccionadas',
	'coll-suggest_ban_selected' => 'Quitar las páginas seleccionadas',
	'coll-suggest_your_book' => 'Tu libro',
	'coll-suggest_show' => 'mostrar',
	'coll-suggest_ban_tooltip' => 'Quitar esta página de la lista de sugerencias',
	'coll-suggest_article_ban' => 'La página <strong>$1</strong> ha sido eliminada de las sugerencias ($2).',
	'coll-suggest_article_add' => 'Página <strong>$1</strong> ha sido agregada a tu libro ($2).',
	'coll-suggest_article_remove' => 'La página <strong>$1</strong> ha sido eliminada de tu libro ($2).',
	'coll-suggest_undo_tooltip' => 'Deshacer esta acción',
	'coll-suggest_undo' => 'deshacer',
	'coll-load_local_book' => 'Haz click en OK para continuar con tu libro %TITLE% que contiene %NUMPAGES% página wiki. Haz click en Cancelar para borrarlo y comenzar con un libro vacío.',
	'right-collectionsaveasuserpage' => 'Grabar libros como página de usuario',
	'right-collectionsaveascommunitypage' => 'Grabar libros como página de la comunidad',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'coll-desc' => '[[Special:Book|Loo raamatuid]]',
	'coll-book_creator_intro' => '<big>Raamatuloojaga saad luua suvalistest viki lehekülgedest koosneva raamatu. Saad oma raamatu erinevatesse vormingutesse (näiteks PDF või ODF) eksportida või tellida trükitud eksemplari.</big>',
	'coll-manage_your_book' => 'Raamatu haldamine',
	'coll-book_creator_help' => 'Täiendava teabe jaoks vaata [[{{MediaWiki:Coll-helppage}}|raamatute abilehte]].',
	'coll-start_book_creator' => 'Käivita raamatulooja',
	'coll-book_creator_continue' => 'Jätka raamatulooja kasutamist',
	'coll-book_creator_disable_text' => "''Raamatulooja'' lülitatakse välja ja raamat, mille loomise kallal töötad, eemaldatakse.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Raamatulooja tekst',
	'coll-collection' => 'Raamat',
	'coll-collections' => 'Raamatud',
	'coll-exclusion_category_title' => 'Trükikeeluga',
	'coll-print_template_prefix' => 'Prindi',
	'coll-print_template_pattern' => '$1/Trükk',
	'coll-unknown_subpage_title' => 'Tundmatu alaleht',
	'coll-unknown_subpage_text' => 'Sellist [[Special:Book|raamatu]] alamlehekülge pole.',
	'coll-couldnotaddarticle_title' => 'Vikilehekülge ei saa lisada',
	'coll-couldnotaddarticle_msg' => 'Vikilehekülge ei saa lisada.',
	'coll-couldnotremovearticle_title' => 'Vikilehekülge ei saa eemaldada',
	'coll-couldnotremovearticle_msg' => 'Vikilehekülge ei saa eemaldada.',
	'coll-noscript_text' => '<h1>Vaja on JavaScripti!</h1>
<strong>Sinu veebilehitsejal puudub JavaScripti tugi või JavaScript on välja lülitatud.
See lehekülg ei tööta korralikult, kui JavaScript pole lubatud.</strong>',
	'coll-savedbook_template' => 'Talletatud raamat',
	'coll-your_book' => 'Sinu raamat',
	'coll-download_title' => 'Allalaadimine',
	'coll-download_text' => 'Raamatu allalaadimiseks vali vorming ja klõpsa nuppu.',
	'coll-download_as_text' => '$1-vormingus raamatu allalaadimiseks klõpsa nuppu.',
	'coll-download' => 'Laadi alla',
	'coll-format_label' => 'Vorming:',
	'coll-remove' => 'Eemalda',
	'coll-show' => 'Näita',
	'coll-move_to_top' => 'Liiguta üles',
	'coll-move_up' => 'Liigu üles',
	'coll-move_down' => 'Liigu alla',
	'coll-move_to_bottom' => 'Mine lõppu',
	'coll-title' => 'Pealkiri:',
	'coll-subtitle' => 'Alapealkiri:',
	'coll-contents' => 'Sisukord',
	'coll-drag_and_drop' => 'Kasuta vikilehekülgede ja peatükkide ümberjärjestamiseks pukseerimist.',
	'coll-create_chapter' => 'Loo peatükk',
	'coll-sort_alphabetically' => 'Järjesta&nbsp;tähestikuliselt',
	'coll-rename' => 'Nimeta ümber',
	'coll-new_chapter' => 'Sisesta uue peatüki pealkiri',
	'coll-rename_chapter' => 'Sisesta uue peatüki pealkiri',
	'coll-no_such_category' => 'Sellist kategooriat ei ole',
	'coll-notitle_title' => 'Lehekülje pealkirja ei saa määrata.',
	'coll-mwserve_failed_title' => 'Küljendamisserveri tõrge',
	'coll-mwserve_failed_msg' => 'Küljendamisserveril ilmnes tõrge: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Tõrketeade serverist',
	'coll-empty_collection' => 'Tühi raamat',
	'coll-revision' => 'Redaktsioon: $1',
	'coll-save_collection_title' => 'Raamatu salvestamine ja jagamine',
	'coll-save_collection_text' => 'Vali oma raamatu talletuskoht:',
	'coll-login_to_save' => 'Kui tahad raamatud hilisemaks kasutamiseks salvestada, [[Special:UserLogin|logi palun sisse või loo konto]].',
	'coll-personal_collection_label' => 'Eraraamat:',
	'coll-community_collection_label' => 'Ühisraamat:',
	'coll-save_collection' => 'Salvesta raamat',
	'coll-save_category' => 'Kõik salvestatud raamatud lisatakse kategooriasse [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Lehekülg eksisteerib.
Kas kirjutada üle?',
	'coll-overwrite_text' => 'Lehekülg pealkirjaga [[:$1]] on juba olemas.
Kas tahad selle oma raamatuga asendada?',
	'coll-yes' => 'Jah',
	'coll-no' => 'Ei',
	'coll-load_overwrite_text' => 'Su raamatus on juba mõni lehekülg.
Kas soovid oma praeguse raamatu üle kirjutada, uue sisu liita või selle raamatu laadimise tühistada?',
	'coll-overwrite' => 'Kirjuta üle',
	'coll-append' => 'Lisa',
	'coll-cancel' => 'Loobu',
	'coll-update' => 'Uuenda',
	'coll-limit_exceeded_title' => 'Raamat on liiga suur',
	'coll-limit_exceeded_text' => 'Su raamat on liiga suur.
Rohkem lehekülgi ei saa lisada.',
	'coll-rendering_title' => 'Küljendamine',
	'coll-rendering_text' => '<p><strong>Palun oota kuni dokumenti luuakse.</strong></p>

<p><strong>Edenemine:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>See lehekülg peaks ennast iga paari sekundi järel uuesti laadima.
Kui see ei toimi, vajuta palun oma veebilehitseja värskendusnuppu.</p>',
	'coll-rendering_status' => '<strong>Olek:</strong> $1',
	'coll-rendering_article' => '(vikilehekülg: $1)',
	'coll-rendering_page' => '(lehekülg: $1)',
	'coll-rendering_finished_title' => 'Küljendamine on lõppenud',
	'coll-rendering_finished_text' => '<strong>Dokumendifail on loodud.</strong>
<strong>[$1 Laadi fail]</strong> oma arvutisse alla.

Märkused:
* Sa ei ole väljastatuga rahul? Vaata [[{{MediaWiki:Coll-helppage}}|raamatute abilehte]] võimalike lahenduste jaoks.',
	'coll-notfound_title' => 'Raamatut ei leidu',
	'coll-notfound_text' => 'Raamatu lehekülge ei leidu.',
	'coll-download_notfound_title' => 'Faili ei leidu',
	'coll-download_notfound_text' => 'Faili, mida üritad alla laadida, ei ole olemas.
Võib-olla on see kustutatud ja tuleb taasluua.',
	'coll-download_failed_title' => 'Tõrge allalaadimisel',
	'coll-download_failed_text' => 'Allalaadimisel ilmnes tõrge: $1',
	'coll-is_cached' => '<ul><li>Leitud on dokumendi puhverdatud versioon ja küljendamine polnud vajalik.
<a href="$1">Käse taasküljendada.</a></li></ul>',
	'coll-excluded-templates' => '* Mallid kategoorias [[:Category:$1|$1]] on välja jäetud.',
	'coll-blacklisted-templates' => '* Mustas nimekirjas [[:$1]] olevad mallid on välja jäetud.',
	'coll-return_to_collection' => '<p>Naase leheküljele <a href="$1">$2</a></p>',
	'coll-book_title' => 'Trükitud raamatu tellimine',
	'coll-book_text' => 'Hangi trükitud raamat meie nõudetrükkimispartnerilt.',
	'coll-order_from_pp' => 'Vaata trükikoja $1 eelvaadet',
	'coll-about_pp' => 'Trükikoja $1 teave',
	'coll-license' => 'Litsents',
	'coll-return_to' => 'Naase [[:$1]]',
	'coll-more_info' => 'Näita lisainfot',
	'coll-hide_info' => 'Peida info',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPressi tellimisteave',
	'coll-suggest_title' => 'Raamatusse pakutavad leheküljed',
	'coll-suggest_intro_text' => 'Lehekülgede soovitamisel on lähtutud hetkel raamatus olevatest lehekülgedest. Seda loetelu uuendatakse iga kord, kui klõpsad lisamis- või eemaldamisnupul.',
	'coll-suggested_articles' => 'Soovitused',
	'coll-suggest_reset_bans' => 'lähtesta',
	'coll-suggest_reset_bans_tooltip' => 'Näita varem eemaldatud soovitusi',
	'coll-suggest_add_selected' => 'Lisa valitud leheküljed',
	'coll-suggest_ban_selected' => 'Eemalda valitud leheküljed',
	'coll-suggest_your_book' => 'Sinu raamat',
	'coll-suggest_show' => 'näita',
	'coll-suggest_ban_tooltip' => 'Eemalda see lehekülg pakutavate lehekülgede loetelust',
	'coll-suggest_article_ban' => 'Lehekülg <strong>$1</strong> on soovituste hulgast eemaldatud ($2).',
	'coll-suggest_article_add' => 'Lehekülg <strong>$1</strong> on raamatusse lisatud ($2).',
	'coll-suggest_article_remove' => 'Lehekülg <strong>$1</strong> on raamatust eemaldatud ($2).',
	'coll-suggest_undo_tooltip' => 'Võta see toiming tagasi',
	'coll-suggest_undo' => 'võta tagasi',
	'right-collectionsaveasuserpage' => 'Salvestada raamatud kasutajaleheküljena',
	'right-collectionsaveascommunitypage' => 'Salvestada raamat ühisleheküljena',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Kobazulo
 * @author Theklan
 */
$messages['eu'] = array(
	'coll-desc' => '[[Special:Book|Liburuak sortu]]',
	'coll-book_creator_intro' => "<big>''Liburu sortzailearekin'' zuk aukeratzen dituzun artikuluak dituen liburua sor dezakezu. Liburu hau formatu ezberdinetara esportatu ahal duzu (adibidez PDF edo ODF) edo kopia bat inprimatzea eskatu.</big>",
	'coll-manage_your_book' => 'Zure liburua kudeatu',
	'coll-book_creator_help' => 'Ikus [[{{MediaWiki:Coll-helppage}}|liburuen laguntza orrialdea]] informazio gehiagorako.',
	'coll-start_book_creator' => 'Hasi liburu sortzailearekin',
	'coll-book_creator_continue' => 'Jarraitu liburu sortzailea erabiltzen',
	'coll-book_creator_disable_text' => "''Liburu sortzailea'' ezgaituta geratuko da eta lantzen ari zaren liburua desagertuko da.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Liburu sortzailearen testua',
	'coll-collection' => 'Liburua',
	'coll-collections' => 'Liburuak',
	'coll-exclusion_category_title' => 'Inprimatzerakoan ez bildu',
	'coll-print_template_prefix' => 'Inprimatu',
	'coll-print_template_pattern' => '$1/Inprimatu',
	'coll-unknown_subpage_title' => 'Azpiorrialde ezezaguna',
	'coll-unknown_subpage_text' => '[[Special:Book|Liburu]] honen azpiorrialde hau ez da existitzen',
	'coll-couldnotaddarticle_title' => 'Ezin da wiki orrialdea gehitu',
	'coll-couldnotaddarticle_msg' => 'Wiki orrialdea ezin izan da gehitu.',
	'coll-couldnotremovearticle_title' => 'Ezin da wiki orrialdea kendu',
	'coll-couldnotremovearticle_msg' => 'Wiki orrialdea ezin izan da kendu.',
	'coll-noscript_text' => '<h1>JavaScript beharrezkoa da!</h1>
<strong>Zure nabigatzaileak ezin du JavaScripteduki edo JavaScript itzalita du.
Orrialde honek ez du egoki funtzionatuko JavaScript pizten ez den bitartean.</strong>',
	'coll-savedbook_template' => 'gordetako_liburua',
	'coll-your_book' => 'Zure liburua',
	'coll-download_title' => 'Jaitsi',
	'coll-download_text' => 'Zure liburua jaisteko formatu bat aukeratu eta botoian klik egin.',
	'coll-download_as_text' => 'Zure liburua $1 formatuan jaisteko botoia sakatu',
	'coll-download' => 'Jaitsi',
	'coll-format_label' => 'Formatua:',
	'coll-remove' => 'Ezabatu',
	'coll-show' => 'Erakutsi',
	'coll-move_to_top' => 'Gora igo',
	'coll-move_up' => 'Gora igo',
	'coll-move_down' => 'Behera jaitsi',
	'coll-move_to_bottom' => 'Beheraino jaitsi',
	'coll-title' => 'Izenburua:',
	'coll-subtitle' => 'Azpititulua:',
	'coll-contents' => 'Edukiak',
	'coll-drag_and_drop' => 'Wiki orrialdeak eta atalak ordenatzeko drag & drop erabili',
	'coll-create_chapter' => 'Atala sortu',
	'coll-sort_alphabetically' => 'Alfabetikoki ordenatu',
	'coll-rename' => 'Izena aldatu',
	'coll-new_chapter' => 'Atal berriarentzat izena sartu',
	'coll-rename_chapter' => 'Atalarentzat izen berria sartu',
	'coll-no_such_category' => 'Ez dago horrelako atalik',
	'coll-notitle_title' => 'Orrialdearen izenburua ezin izan da determinatu.',
	'coll-post_failed_title' => 'POST eskariak huts egin du',
	'coll-post_failed_msg' => '$1(r)i eginiko POST eskariak huts eign du ($2).',
	'coll-mwserve_failed_title' => 'Render zerbitzariaren akatsa',
	'coll-mwserve_failed_msg' => 'Akats bat suertatu da render zerbitzarian: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Zerbitzariaren erantzun akatsa',
	'coll-empty_collection' => 'Liburu hutsa',
	'coll-revision' => 'Berrikuspena: $1',
	'coll-save_collection_title' => 'Gorde eta partekatu zure liburua',
	'coll-save_collection_text' => 'Kokapen bat aukeratu:',
	'coll-login_to_save' => 'Beranduago erabiltzeko liburuak gorde nahi badituzu erabil ezazu [[Special:UserLogin|saioa hasi edo kontua sortu]].',
	'coll-personal_collection_label' => 'Norberaren liburua:',
	'coll-community_collection_label' => 'Komunitatearen liburua:',
	'coll-save_collection' => 'Liburua gorde',
	'coll-save_category' => 'Gordetako liburu guztiak [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] kategorian gordetzen dira.',
	'coll-overwrite_title' => 'Orrialdea bada.
Gainetik idatzi?',
	'coll-overwrite_text' => '[[:$1]] izena duen orrialde bat badago dagoeneko.
Nahi al duzu zure bildumarekin aldatzea?',
	'coll-yes' => 'Bai',
	'coll-no' => 'Ez',
	'coll-load_overwrite_text' => 'Dagoeneko orri batzuk dituzu zure liburuan.
Nahi al duzu zure liburuaren gainetik idaztea, eduki berriak zerrendatzea edo liburu honen kargatzea ezeztatzea?',
	'coll-overwrite' => 'Gainetik idatzi',
	'coll-append' => 'Zerrendatu',
	'coll-cancel' => 'Utzi',
	'coll-update' => 'Eguneratu',
	'coll-limit_exceeded_title' => 'Liburua handiegia da',
	'coll-limit_exceeded_text' => 'Zure liburua handiegia da.
Ezin dira orri gehiago gehitu.',
	'coll-rendering_title' => 'Renderizatzen',
	'coll-rendering_text' => '<p><strong>Itxoin dokumentua sortzen den artean, mesedez.</strong></p>

<p><strong>Garapena:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Orrialde hau automatikoki berrituko da segundu gutxiro.
Horrela ez bada zure nabigatzailean berritu botoiari eman.</p>',
	'coll-rendering_status' => '<strong>Egoera:</strong> $1',
	'coll-rendering_article' => '(wiki orrialdea: $1)',
	'coll-rendering_page' => '(orrialdea: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Orrialdea testuan bilakatzen',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Bilduma testuan bilakatzen',
	'coll-rendering_finished_title' => 'Renderizazioa bukatu da',
	'coll-rendering_finished_text' => '<strong>Dokumentuaren fitxategia sortu da.</strong>
<strong>[$1 Jaitsi fitxategia]</strong> zure ordenagailuan.

Oharrak:
* Ez zaizu emaitza gustatu? Ikus [[{{MediaWiki:Coll-helppage}}|bildumen inguruko laguntza orrialdea]] berau hobetzeko aukerak ikusteko.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Orrialdearen informazio testua prozesatzen',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Bilduraren informazio testua prozesatzen',
	'coll-notfound_title' => 'Liburua ez da aurkitu',
	'coll-notfound_text' => 'Ezin izan da liburuko orria aurkitu.',
	'coll-download_notfound_title' => 'Ez da fitxategirik aurkitu',
	'coll-download_notfound_text' => 'Jaisten saiatzen ari zaren fitxategia ez da existitzen:
Agian ezabatua izan da eta birsortzea behar du.',
	'coll-download_failed_title' => 'Akatsa suertatu da jaisterakoan',
	'coll-download_failed_text' => 'Akats bat egon da $1 fitxategia jaisten ari zela',
	'coll-is_cached' => '<ul><li>Katxean dokumentuaren bertsio bat aurktiu da, beraz renderizatzea ez da beharrezkoa izan. <a href="$1">Berriro renderizatzera derrigortu.</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]] kategorian dauden txantiloiak ez dira sartu.',
	'coll-blacklisted-templates' => '* [[:$1]] zerrenda beltzeko txantiloiak ez dira sartu.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a>(e)ra itzuli</p>',
	'coll-book_title' => 'Inprimatutako liburu gisa eskatu',
	'coll-book_text' => 'Eska iezaiozu inprimatutako liburu bat gure eskatutakoa-inprimatu kideari:',
	'coll-order_from_pp' => '$1-(e)kin aurrikusi',
	'coll-about_pp' => '$1(r)i buruz',
	'coll-invalid_podpartner_title' => 'EI kide ez baliagarria',
	'coll-invalid_podpartner_msg' => 'Jarritako EI kidea ez da baliagarria.
Kontakta ezazu, mesedez MediaWiki administratzailea.',
	'coll-license' => 'Lizentzia',
	'coll-return_to' => '[[:$1]]era itzuli',
	'coll-more_info' => 'Informazio gehiago erakutsi',
	'coll-hide_info' => 'Informazioa ezkutatu',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress eskaera informazioa',
	'coll-suggest_title' => 'Zure liburuarentzako orrialde gomendioak',
	'coll-suggest_intro_text' => 'Gomendioak orain dituzun orrialdeetan oinarriturik agertzen dira.
Zerrenda gaurkotzen da gehitu edo kendu botoietan klik egiten duzun bakoitzean.',
	'coll-suggested_articles' => 'Iradokizunak',
	'coll-suggest_reset_bans' => 'hasieratu',
	'coll-suggest_reset_bans_tooltip' => 'Erakutsi aurretik ezabatutako gomendioak',
	'coll-suggest_add_selected' => 'Gehitu aukeratutako orrialdeak',
	'coll-suggest_ban_selected' => 'Kendu aukeratutako orrialdeak',
	'coll-suggest_your_book' => 'Zure liburua',
	'coll-suggest_show' => 'erakutsi',
	'coll-suggest_ban_tooltip' => 'Ezabatu orrialde hau gomendio zerrendatik',
	'coll-suggest_article_ban' => '<strong>$1</strong> orrialdea gomendioen artetik ezabatua izan da ($2).',
	'coll-suggest_article_add' => '<strong>$1</strong> orrialdea zure liburura gehitu da ($2).',
	'coll-suggest_article_remove' => '<strong>$1</strong> orrialdea zure liburutik ezabatu da ($2).',
	'coll-suggest_undo_tooltip' => 'Ekintza hau desegin',
	'coll-suggest_undo' => 'desegin',
	'coll-load_local_book' => 'Egin klik OK gainean jarraitzeko zure %TITLE% liburuarekin, %NUMPAGES% wiki orrialde dituena. Klik egin Cancel gainean ezabatzeko eta berri hasteko liburu huts batekin.',
	'right-collectionsaveasuserpage' => 'Gorde liburuak lankide orrialde bezala',
	'right-collectionsaveascommunitypage' => 'Gorde liburuak komunitate orrialde bezala',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Komeil 4life
 * @author Ladsgroup
 * @author Sahim
 * @author Spacebirdy
 * @author Wayiran
 */
$messages['fa'] = array(
	'coll-desc' => '[[Special:Book|ایجاد کتاب]]',
	'coll-book_creator_intro' => "<big>با ''کتاب‌ساز'' می‌توانید کتابی بسازید که دارای صفحات ویکی دلخواه شماست. می‌توانید کتاب را در فرمت‌های مختلف (برای مثال پی‌دی‌اف یا اودی‌اف) برون‌بری کنید یا سفارش یک کپی چاپی را بدهید.</big>",
	'coll-manage_your_book' => 'کتاب خود را مدیریت کنید',
	'coll-book_creator_help' => 'برای اطلاعات بیشتر [[{{MediaWiki:Coll-helppage}}|صفحهٔ راهنمای کتاب‌ها]] را ببینید.',
	'coll-start_book_creator' => 'کتاب‌ساز را آغاز کن',
	'coll-book_creator_continue' => 'به استفاده از کتاب‌ساز ادامه بده',
	'coll-book_creator_disable_text' => "''پدیدآور کتاب'' غیرفعال خواهد شد و کتابی که شما بر آن کار می‌کنید حذف خواهد شد.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/متن پدیدآور کتاب',
	'coll-collection' => 'کتاب',
	'coll-collections' => 'کتاب‌ها',
	'coll-exclusion_category_title' => 'مستثنی از چاپ',
	'coll-print_template_prefix' => 'چاپ',
	'coll-print_template_pattern' => 'چاپ/$1',
	'coll-unknown_subpage_title' => 'زیرصفحهٔ ناشناس',
	'coll-unknown_subpage_text' => 'این زیرصفحه از [[Special:Book|کتاب]] وجود ندارد',
	'coll-couldnotaddarticle_title' => 'نتوانست صفحه ویکی را اضافه کند',
	'coll-couldnotaddarticle_msg' => 'صفحهٔ ویکی نتوانست اضافه شود.',
	'coll-couldnotremovearticle_title' => 'نتوانست صفحه ویکی را حذف کند',
	'coll-couldnotremovearticle_msg' => 'صفحهٔ ویکی نتوانست حذف شود.',
	'coll-noscript_text' => '<h1>جاوااسکریپت لازم دارید!</h1>
<strong>مرورگر شما جاوااسکریپت را پشتیبانی نمی‌کند یا جاوااسکیریپت شما خاموش است.
این صفحه به طور صحیح عمل نخواهد کرد، مگر اینکه جاوااسکیریپت فعال شود.</strong>',
	'coll-savedbook_template' => 'کتاب_ذخیره‌شده',
	'coll-your_book' => 'کتاب شما',
	'coll-download_title' => 'دریافت',
	'coll-download_text' => 'برای بارگیری کتابتان یک قالب برگزینید و دکمه را بزنید.',
	'coll-download_as_text' => 'برای بارگیری کتابتان در قالب $1 دکمه را بزنید.',
	'coll-download' => 'دریافت',
	'coll-format_label' => 'قالب:',
	'coll-remove' => 'حذف',
	'coll-show' => 'نمایش',
	'coll-move_to_top' => 'حرکت به ابتدا',
	'coll-move_up' => 'حرکت به بالا',
	'coll-move_down' => 'حرکت به پایین',
	'coll-move_to_bottom' => 'حرکت به انتها',
	'coll-title' => 'عنوان:',
	'coll-subtitle' => 'زیرعنوان:',
	'coll-contents' => 'محتویات',
	'coll-drag_and_drop' => 'از کشیدن و رها کردن برای مرتب کردن صفحه‌های ویکی و فصل‌ها استفاده کنید',
	'coll-create_chapter' => 'ایجاد فصل',
	'coll-sort_alphabetically' => 'مرتب‌سازی الفبایی',
	'coll-rename' => 'تغییر نام',
	'coll-new_chapter' => 'برای بخش جدید یک نام وارد کنید',
	'coll-rename_chapter' => 'برای بخش یک نام جدید وارد کنید',
	'coll-no_such_category' => 'چنین رده‌ای وجود ندارد',
	'coll-notitle_title' => 'عنوان صفحه قابل تشخیص نبود.',
	'coll-post_failed_title' => 'خطا در درخواست POST',
	'coll-post_failed_msg' => 'درخواست POST به $1 شکست خورد ($2).',
	'coll-mwserve_failed_title' => 'خطا در کارگزار ترجمه‌کننده',
	'coll-mwserve_failed_msg' => 'خطایی در کارگزار ترجمه‌کننده رخ داد: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'پیغام خطا از طرف کارگزار',
	'coll-empty_collection' => 'کتاب خالی',
	'coll-revision' => 'نسخه: $1',
	'coll-save_collection_title' => 'کتابتان را ذخیره کنید و به اشتراک بگذارید',
	'coll-save_collection_text' => 'انتخاب یک مکان:',
	'coll-login_to_save' => 'اگر می‌خواهید کتاب‌ها را برای کاربران بعدی ذخیره کنید، لطفا [[Special:UserLogin|به سامانه وارد شوید یا یک حساب کاربری بسازید]].',
	'coll-personal_collection_label' => 'کتاب شخصی:',
	'coll-community_collection_label' => 'کتاب عمومی:',
	'coll-save_collection' => 'ذخیره کردن کتاب',
	'coll-save_category' => 'همه کتابهای ذخیره شده در رده‌ها اضافه شده‌اند [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'صفحه وجود دارد.
رونویسی شود؟',
	'coll-overwrite_text' => 'یک صفحه با نام [[:$1]] در حال حاضر موجود است.

آیا می‌خواهید این صفحه جایگزین صفحه موجود شود؟',
	'coll-yes' => 'بله',
	'coll-no' => 'خیر',
	'coll-load_overwrite_text' => 'شما همینک صفحه‌هایی در کتاب خود دارید.
آیا می‌خواهید کتاب فعلی را رونویسی کنید، محتوای جدید را به آن بیفزایید یا بارگیری این کتاب را متوقف کنید؟',
	'coll-overwrite' => 'رونویسی',
	'coll-append' => 'افزودن',
	'coll-cancel' => 'لغو',
	'coll-update' => 'به روز رسانی',
	'coll-limit_exceeded_title' => 'کتاب بیش از اندازه بزرگ است',
	'coll-limit_exceeded_text' => 'کتاب شما بیش از اندازه بزرگ است است.
امکان افزودن صفحهٔ جدیدی را ندارید.',
	'coll-rendering_title' => 'در حال ترجمه دادن',
	'coll-rendering_text' => '<p><strong>لطفاً در مدتی که سند در حال ایجاد است شکیبا باشید.</strong></p>

<p><strong>پیشرفت:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>این صفحه باید به طور خودکار هر چند ثانیه یکبار تازه شود.
اگر این کار صورت نمی‌گیرد، لطفاً دکمهٔ تازه کردن صفحه را در مرورگر خود بزنید.</p>',
	'coll-rendering_status' => '<strong>وضعیت:</strong> $1',
	'coll-rendering_article' => '(صفحهٔ ویکی: $1)',
	'coll-rendering_page' => '(صفحه: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/تحویل متن اطلاعات صفحه',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/تحویل مجموعه متون اطلاعات',
	'coll-rendering_finished_title' => 'رندرکردن به پایان رسید',
	'coll-rendering_finished_text' => '<strong>پروندهٔ سند ایجاد شده‌است.</strong>
بر روی رایانهٔ خود آن را <strong>[$1 بارگیری کنید]</strong>.

نکته‌ها:
* از خروجی راضی نیستید؟ برای مطلع‌شدن از امکان‌های بهبوددادن آن [[{{MediaWiki:Coll-helppage}}|صفحهٔ راهنما در رابطه با کتاب‌ها]] را ببینید.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/تحویل متن اطلاعات صفحه',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/تحویل مجموعه متون اطلاعات',
	'coll-notfound_title' => 'کتاب پیدا نشد',
	'coll-notfound_text' => 'صفحهٔ کتاب پیدا نشد.',
	'coll-download_notfound_title' => 'پرونده یافت نشد',
	'coll-download_notfound_text' => 'پرونده‌ای که برای بارگیری‌اش تلاش می‌کنید وجود ندارد:
شاید پاک شده باشد و به بازتولید نیاز داشته باشد.',
	'coll-download_failed_title' => 'خطا در طول بارگیری',
	'coll-download_failed_text' => 'هنگام بارگیری پروندهٔ $1 خطا داده شد',
	'coll-is_cached' => '<ul><li>یک نسخهٔ کاشه‌گیری شده از این سند پیدا شد، به همین خاطر ترجمه لازم نبود. <a href="$1">ترجمهٔ اجباری.</a></li></ul>',
	'coll-excluded-templates' => '* از الگوهای ردهٔ [[:Category:$1|$1]] صرف نظر شده‌است.',
	'coll-blacklisted-templates' => '* از الگوهای فهرست سیاه [[:$1]] صرف نظر شده‌است.',
	'coll-return_to_collection' => '<p>بازگشت به <a href="$1">$2</a></p>',
	'coll-book_title' => 'سفارش به صورت کتاب چاپ شده',
	'coll-book_text' => 'با مراجعه به این شرکای چاپ-با-درخواست یک کتاب چاپ شده تهیه کنید:',
	'coll-order_from_pp' => 'پیش‌نمایش با $1',
	'coll-about_pp' => 'دربارهٔ $1',
	'coll-invalid_podpartner_title' => 'شریک چاپ-با-درخواست غیر مجاز',
	'coll-invalid_podpartner_msg' => 'شریک چاپ-با-درخواست تعیین شده غیر مجاز است.
لطفاً با مدیر مدیاویکی خود تماس بگیرید.',
	'coll-license' => 'اجازه‌نامه',
	'coll-return_to' => 'بازگشت به [[:$1]]',
	'coll-more_info' => 'اطلاعات بیشتر را نشان بده',
	'coll-hide_info' => 'اطلاعات را پنهان کن',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/دسته‌بندی اطلاعات پدیاپرس',
	'coll-suggest_title' => 'صفحات پیشنهادی برای کتابتان',
	'coll-suggest_intro_text' => 'پیشنهادات بر پایهٔ مجموعهٔ کنونی صفحات ویکی در کتاب شما قرار دارند.
هر گاه که بر دکمه‌های افزودن یا حذف کلیک کنید، فهرست به‌روز خواهد شد.',
	'coll-suggested_articles' => 'پیشنهادات',
	'coll-suggest_reset_bans' => 'بازنشانی',
	'coll-suggest_reset_bans_tooltip' => 'نمایش قبل از پاک کردن پیشنهاد‌ها',
	'coll-suggest_add_selected' => 'اضافه‌کردن صفحه‌های انتخاب شده',
	'coll-suggest_ban_selected' => 'حذف صفحه‌های انتخاب شده',
	'coll-suggest_your_book' => 'کتاب شما',
	'coll-suggest_show' => 'نمایش',
	'coll-suggest_ban_tooltip' => 'این صفحه را از فهرست پیشنهادات حذف کنید',
	'coll-suggest_article_ban' => 'صفحهٔ <strong>$1</strong> از پیشنهادات حذف شده است ($2).',
	'coll-suggest_article_add' => 'صفحهٔ <strong>$1</strong> به کتاب شما افزوده شده است ($2).',
	'coll-suggest_article_remove' => 'صفحهٔ <strong>$1</strong> از کتاب شما حذف شده است ($2).',
	'coll-suggest_undo_tooltip' => 'این اقدام را خنثی کن',
	'coll-suggest_undo' => 'خنثی‌سازی',
	'coll-load_local_book' => 'برای ادامه با کتاب %TITLE% که دارندهٔ %NUMPAGES% صفحهٔ ویکی است، بروی پذیرش کلیک کنید. برای پاک کردنش و آغاز با کتابی خالی، بروی لغو کلیک کنید.',
	'right-collectionsaveasuserpage' => 'ذخیره کردن کتاب‌ها به صورت یک صفحهٔ کاربری',
	'right-collectionsaveascommunitypage' => 'ذخیره کردن کتاب‌ها به صورت یک صفحه عمومی',
);

/** Finnish (Suomi)
 * @author Cimon Avaro
 * @author Crt
 * @author Nike
 * @author Olli
 * @author Silvonen
 * @author Str4nd
 * @author Tarmo
 * @author Zache
 */
$messages['fi'] = array(
	'coll-desc' => '[[Special:Book|Laadi kirjoja]].',
	'coll-book_creator_intro' => "<big>''Kirjan luontitilassa'' voit luoda kirjan, joka koostuu haluamistasi wikisivuista. Voit viedä kirjasi eri muodoissa (esimerkiksi PDF- tai ODF-tiedostona) tai tilata sen painettuna.</big>",
	'coll-manage_your_book' => 'Hallinnoi kirjaa',
	'coll-book_creator_help' => 'Katso [[{{MediaWiki:Coll-helppage}}|ohjesivulta lisätietoja kirjoista]].',
	'coll-start_book_creator' => 'Käynnistä kirjan luontitila',
	'coll-book_creator_continue' => 'Jatka kirjan luontitilan käyttämistä',
	'coll-book_creator_disable_text' => "''Kirjan luontitila'' poistetaan käytöstä ja kirja, jota olet tekemässä poistetaan.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Kirjan luontitilan teksti',
	'coll-collection' => 'Kirja',
	'coll-collections' => 'Kirjat',
	'coll-exclusion_category_title' => 'Tulosteesta poisjätettävät',
	'coll-print_template_prefix' => 'Tulosta',
	'coll-print_template_pattern' => '$1/Tulosta',
	'coll-unknown_subpage_title' => 'Tuntematon alasivu',
	'coll-unknown_subpage_text' => 'Tätä [[Special:Book|kirjan]] alasivua ei ole olemassa',
	'coll-couldnotaddarticle_title' => 'Wikisivua ei voitu lisätä',
	'coll-couldnotaddarticle_msg' => 'Wikisivua ei voitu lisätä.',
	'coll-couldnotremovearticle_title' => 'Wikisivua ei voitu poistaa',
	'coll-couldnotremovearticle_msg' => 'Wikisivua ei voitu poistaa.',
	'coll-noscript_text' => '<h1>Vaatii toimiakseen JavaScriptin</h1>
<strong>Selaimesi ei tue JavaScriptiä tai JavaScript on poistettu käytöstä.
Tämä sivu ei toimi oikein, ellei JavaScript ole käytössä.</strong>',
	'coll-savedbook_template' => 'tallennettu_kirja',
	'coll-your_book' => 'Sinun kirjasi',
	'coll-download_title' => 'Lataa',
	'coll-download_text' => 'Ladataksesi kirjan, valitse tiedostomuoto ja napsauta painiketta.',
	'coll-download_as_text' => 'Voit ladata kirjasi $1-muodossa napsauttamalla painiketta.',
	'coll-download' => 'Lataa',
	'coll-format_label' => 'Muoto',
	'coll-remove' => 'Poista',
	'coll-show' => 'Näytä',
	'coll-move_to_top' => 'Siirrä alkuun',
	'coll-move_up' => 'Siirrä ylös',
	'coll-move_down' => 'Siirrä alas',
	'coll-move_to_bottom' => 'Siirrä loppuun',
	'coll-title' => 'Otsikko',
	'coll-subtitle' => 'Alaotsikko',
	'coll-contents' => 'Sisältö',
	'coll-drag_and_drop' => 'Raahaa wikisivut ja luvut haluamaasi järjestykseen.',
	'coll-create_chapter' => 'Luo luku',
	'coll-sort_alphabetically' => 'Lajittele aakkosjärjestykseen',
	'coll-rename' => 'Vaihda nimeä',
	'coll-new_chapter' => 'Anna uuden luvun nimi',
	'coll-rename_chapter' => 'Anna uuden luvun nimi',
	'coll-no_such_category' => 'Luokkaa ei ole',
	'coll-notitle_title' => 'Sivun otsikkoa ei voitu päätellä.',
	'coll-post_failed_title' => 'POST-pyyntö epäonnistui',
	'coll-post_failed_msg' => 'POST-pyyntö palvelimelle $1 epäonnistui ($2).',
	'coll-mwserve_failed_title' => 'Virhe renderöintipalvelimella',
	'coll-mwserve_failed_msg' => 'Renderöintipalvelimella tapahtui virhe: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Palvelin antoi virheilmoituksen',
	'coll-empty_collection' => 'Tyhjä kirja',
	'coll-revision' => 'Versio: $1',
	'coll-save_collection_title' => 'Tallenna ja jaa kirja',
	'coll-save_collection_text' => 'Valitse sijainti:',
	'coll-login_to_save' => 'Jos haluat tallentaa kirjat myöhempää käyttöä varten, [[Special:UserLogin|kirjaudu sisään tai luo tunnus]].',
	'coll-personal_collection_label' => 'Henkilökohtainen kirja:',
	'coll-community_collection_label' => 'Yhteinen kirja:',
	'coll-save_collection' => 'Tallenna kirja',
	'coll-save_category' => 'Kaikki tallennetut kirjat lisätään luokkaan [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Sivu on olemassa.
Korvataanko?',
	'coll-overwrite_text' => 'Sivu nimellä [[:$1]] on jo olemassa.
Haluatko korvata sen kokoelmallasi?',
	'coll-yes' => 'Kyllä',
	'coll-no' => 'Ei',
	'coll-load_overwrite_text' => 'Sinulla on jo joitain sivuja kirjassasi.
Haluatko korvata nykyisen kirjasi, lisätä uuden sisällön, vai peruuttaa tämän kirjan sisällön lataamisen?',
	'coll-overwrite' => 'Korvaa',
	'coll-append' => 'Lisää perään',
	'coll-cancel' => 'Peruuta',
	'coll-update' => 'Päivitä',
	'coll-limit_exceeded_title' => 'Kirja on liian suuri',
	'coll-limit_exceeded_text' => 'Kirjasi on liian suuri.
Sivuja ei voi lisätä enempää.',
	'coll-rendering_title' => 'Renderöidään',
	'coll-rendering_text' => '<p><strong>Ole hyvä ja odota, kun dokumenttiasi valmistellaan.</strong></p>

<p><strong>Eteneminen:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Tämän sivun pitäisi päivittyä muutaman sekunnin välein.
Jos näin ei käy, paina selaimesi päivityspainiketta.</p>',
	'coll-rendering_status' => '<strong>Tila:</strong> $1',
	'coll-rendering_article' => '(wikisivu: $1)',
	'coll-rendering_page' => '(sivu: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Muotoillaan sivu -tiedote',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Muotoillaan kokoelma -tiedote',
	'coll-rendering_finished_title' => 'Renderöinti valmis',
	'coll-rendering_finished_text' => '<strong>Tiedosto on generoitu.</strong>
<strong>[$1 Lataa tiedosto]</strong> tietokoneellesi.

Huomautuksia:
* Etkö ole tyytyväinen lopputulokseen? Katso [[{{MediaWiki:Coll-helppage}}|kirjojen ohjesivulta]] mahdollisuuksista parantaa sitä.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Muotoillaan sivu -tiedote',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Muotoillaan kokoelma -tiedote',
	'coll-notfound_title' => 'Kirjaa ei löydy',
	'coll-notfound_text' => 'Kirjan sivua ei löydy.',
	'coll-download_notfound_title' => 'Tiedostoa ei löydy',
	'coll-download_notfound_text' => 'Tiedostoa, jota yritit ladata ei ole olemassa: Se on ehkä poistettu ja tarvitsee luoda uudelleen.',
	'coll-download_failed_title' => 'Virhe ladatessa',
	'coll-download_failed_text' => 'Virhe ladatessa tiedostoa: $1',
	'coll-is_cached' => '<ul><li>Dokumentti löytyi välimuistista, joten renderöintiä ei tarvittu. <a href="$1">Pakota uudelleenrenderöinti.</a></li></ul>',
	'coll-excluded-templates' => '* Mallineet luokassa [[:Category:$1|$1]] on ohitettu.',
	'coll-blacklisted-templates' => '* Mallineet sulkulistalla [[:$1]] on ohitettu.',
	'coll-return_to_collection' => '<p>Palaa takaisin sivulle <a href="$1">$2</a></p>',
	'coll-book_title' => 'Tilaa painettuna kirjana',
	'coll-book_text' => 'Hanki painettuna kirjana pikapainosta.',
	'coll-order_from_pp' => 'Esikatsele kohteessa $1',
	'coll-about_pp' => 'Tietoja kohteesta $1',
	'coll-invalid_podpartner_title' => 'Epäkelpo POD-partneri',
	'coll-invalid_podpartner_msg' => 'Annettu POD-partneri ei kelpaa.
Ota yhteys MediaWiki-ylläpitäjääsi.',
	'coll-license' => 'Lisenssi',
	'coll-return_to' => 'Palaa sivulle [[:$1]]',
	'coll-more_info' => 'Näytä lisätietoja',
	'coll-hide_info' => 'Piilota tiedot',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPressin tilaustiedot',
	'coll-suggest_title' => 'Ehdotetut sivut kirjaasi',
	'coll-suggest_intro_text' => 'Ehdotukset perustuvat kirjasi nykyisiin wikisivuihin.
Lista päivittyy aina kun napsautat lisää- tai poista-painikkeita.',
	'coll-suggested_articles' => 'Ehdotukset',
	'coll-suggest_reset_bans' => 'tyhjennä',
	'coll-suggest_reset_bans_tooltip' => 'Näytä äskettäin poistetut ehdotukset',
	'coll-suggest_add_selected' => 'Lisää valitut sivut',
	'coll-suggest_ban_selected' => 'Poista valitut sivut',
	'coll-suggest_your_book' => 'Kirjasi',
	'coll-suggest_show' => 'näytä',
	'coll-suggest_ban_tooltip' => 'Poista tämä sivu ehdotuksista',
	'coll-suggest_article_ban' => 'Sivu <strong>$1</strong> on poistettu ehdotuksista ($2).',
	'coll-suggest_article_add' => 'Sivu <strong>$1</strong> on lisätty kirjaasi ($2).',
	'coll-suggest_article_remove' => 'Sivu <strong>$1</strong> on poistettu kirjastasi ($2).',
	'coll-suggest_undo_tooltip' => 'Kumoa tämä toiminto',
	'coll-suggest_undo' => 'kumoa',
	'coll-load_local_book' => 'Napsauta OK jatkaaksesi kirjan %TITLE% (%NUMPAGES% sivua) työstämistä. Napsauta Peruuta poistaaksesi sen ja aloittaaksesi uuden kirjan.',
	'right-collectionsaveasuserpage' => 'Tallentaa kirjoja käyttäjäsivuna',
	'right-collectionsaveascommunitypage' => 'Tallentaa kirjoja yhteisösivuina',
);

/** French (Français)
 * @author Antaya
 * @author Crochet.david
 * @author Dodoïste
 * @author Grondin
 * @author Guillom
 * @author IAlex
 * @author Jean-Frédéric
 * @author Korrigan
 * @author McDutchie
 * @author Meithal
 * @author Peter17
 * @author PieRRoMaN
 * @author Verdy p
 * @author Zetud
 */
$messages['fr'] = array(
	'coll-desc' => 'Permet de [[Special:Book|créer des livres]]',
	'coll-book_creator_intro' => "<big>Avec le ''créateur de livres'', vous pouvez créer un livre contenant les pages du wiki de votre choix. Vous pouvez exporter le livre dans différents formats (par exemple PDF ou ODF) ou en commander une copie imprimée.</big>",
	'coll-manage_your_book' => 'Gérer votre livre',
	'coll-book_creator_help' => 'Consultez [[{{MediaWiki:Coll-helppage}}|la page d’aide sur les livres]] pour plus d’informations.',
	'coll-start_book_creator' => 'Démarrer le créateur de livres',
	'coll-book_creator_continue' => 'Continuer en utilisant le créateur de livres',
	'coll-book_creator_disable_text' => "Le ''créateur de livres'' sera désactivé et les livres sur lesquels vous travaillez seront supprimés de la session de votre navigateur.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Texte du créateur de livres',
	'coll-collection' => 'Livre',
	'coll-collections' => 'Livres',
	'coll-exclusion_category_title' => "Exclure lors de l'impression",
	'coll-print_template_prefix' => 'Imprimer',
	'coll-print_template_pattern' => '$1/Imprimer',
	'coll-unknown_subpage_title' => 'Sous-page inconnue',
	'coll-unknown_subpage_text' => 'Cette sous-page de [[Special:Book|livre]] n’existe pas',
	'coll-couldnotaddarticle_title' => 'Impossible d’ajouter la page du wiki',
	'coll-couldnotaddarticle_msg' => 'La page du wiki ne peut pas être ajouté.',
	'coll-couldnotremovearticle_title' => 'Impossible de supprimer la page du wiki',
	'coll-couldnotremovearticle_msg' => 'La page du wiki ne peut pas être enlevée.',
	'coll-noscript_text' => '<h1>Javascript est nécessaire !</h1>
<strong>Votre navigateur ne supporte pas Javascript ou bien vous l’avez désactivé.
Cette page ne fonctionnera pas correctement tant que Javascript n’est pas activé.</strong>',
	'coll-savedbook_template' => 'Livre sauvegardé',
	'coll-your_book' => 'Votre livre',
	'coll-download_title' => 'Télécharger',
	'coll-download_text' => 'Pour télécharger votre livre, choisissez un format et cliquez sur le bouton.',
	'coll-download_as_text' => 'Pour télécharger votre livre au format $1, cliquez sur le bouton.',
	'coll-download' => 'Télécharger',
	'coll-format_label' => 'Format :',
	'coll-remove' => 'Enlever',
	'coll-show' => 'Afficher',
	'coll-move_to_top' => 'Déplacer tout en haut',
	'coll-move_up' => 'Monter',
	'coll-move_down' => 'Descendre',
	'coll-move_to_bottom' => 'Déplacer tout en bas',
	'coll-title' => 'Titre :',
	'coll-subtitle' => 'Sous-titre :',
	'coll-contents' => 'Contenus',
	'coll-drag_and_drop' => 'Utiliser le glisser-déposer pour réordonner les pages wiki et chapitres.',
	'coll-create_chapter' => 'Créer un chapitre',
	'coll-sort_alphabetically' => 'Trier alphabétiquement',
	'coll-rename' => 'Renommer',
	'coll-new_chapter' => 'Entrer le titre du nouveau chapitre',
	'coll-rename_chapter' => 'Entrer le nouveau titre de ce chapitre',
	'coll-no_such_category' => 'Catégorie introuvable',
	'coll-notitle_title' => 'Le titre de la page n’a pas pu être déterminé.',
	'coll-post_failed_title' => 'La requête POST a échoué',
	'coll-post_failed_msg' => 'La requête POST vers $1 a échoué ($2).',
	'coll-mwserve_failed_title' => 'Erreur du serveur de rendu',
	'coll-mwserve_failed_msg' => 'Une erreur est survenue sur le serveur de rendu : <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Réponse d’erreur retournée par le serveur',
	'coll-empty_collection' => 'Livre vide',
	'coll-revision' => 'Version : $1',
	'coll-save_collection_title' => 'Sauvegarder et partager votre livre',
	'coll-save_collection_text' => 'Choisissez un emplacement de stockage pour votre livre :',
	'coll-login_to_save' => 'Si vous voulez sauvegarder des livres pour une utilisation ultérieure, veuillez [[Special:UserLogin|vous connecter ou créer un compte]].',
	'coll-personal_collection_label' => 'Livre personnel :',
	'coll-community_collection_label' => 'Livre collectif :',
	'coll-save_collection' => 'Sauvegarder le livre',
	'coll-save_category' => 'Tous les livres sont sauvegardés dans la catégorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La page existe déjà.
L’écraser ?',
	'coll-overwrite_text' => 'Une page nommée [[:$1]] existe déjà.
Voulez-vous la remplacer par votre livre ?',
	'coll-yes' => 'Oui',
	'coll-no' => 'Non',
	'coll-load_overwrite_text' => 'Vous avez déjà des pages dans votre livre.
Voulez-vous écraser votre livre actuel, y ajouter le nouveau contenu ou bien annuler le chargement de ce livre ?',
	'coll-overwrite' => 'Écraser',
	'coll-append' => 'Ajouter',
	'coll-cancel' => 'Annuler',
	'coll-update' => 'Mettre à jour',
	'coll-limit_exceeded_title' => 'Livre trop grand',
	'coll-limit_exceeded_text' => 'Votre livre est trop grand.
Plus aucune page ne peut y être ajoutée.',
	'coll-rendering_title' => 'Rendu',
	'coll-rendering_text' => '<p><strong>Veuillez patienter pendant la génération du document.</strong></p>

<p><strong>Progression :</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Cette page devrait s’actualiser automatiquement par intervalles réguliers de quelques secondes.
Si tel n’était pas le cas, veuillez cliquer sur le bouton Actualiser de votre navigateur.</p>',
	'coll-rendering_status' => '<strong>État :</strong> $1',
	'coll-rendering_article' => '(page wiki : $1)',
	'coll-rendering_page' => '(page : $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informations sur le rendu des pages',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informations sur le rendu des collections',
	'coll-rendering_finished_title' => 'Rendu terminé',
	'coll-rendering_finished_text' => '<strong>Le fichier document a été généré.</strong>
<strong>[$1 Télécharger le fichier]</strong> sur votre ordinateur.

Notes :
* Vous n’êtes pas satisfait du résultat ? Consultez [[{{MediaWiki:Coll-helppage}}|la page d’aide des livres]] pour les façons possibles de l’améliorer.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informations sur le rendu des pages',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informations sur le rendu des collections',
	'coll-notfound_title' => 'Livre non trouvé',
	'coll-notfound_text' => 'La page du livre n’a pas pu être trouvée.',
	'coll-download_notfound_title' => 'Fichier introuvable',
	'coll-download_notfound_text' => "Le fichier que vous essayez de télécharger n'existe pas : il a peut-être été supprimé et doit être généré à nouveau",
	'coll-download_failed_title' => 'Erreur lors du téléchargement',
	'coll-download_failed_text' => 'Une erreur est survenue pendant le téléchargement du fichier : $1',
	'coll-is_cached' => '<ul><li>Une version en cache du document a été trouvée, aussi aucun rendu n’était nécessaire. <a href="$1">Forcer un nouveau rendu.</a></li></ul>',
	'coll-excluded-templates' => '* Des modèles de la catégorie [[:Category:$1|$1]] ont été exclus.',
	'coll-blacklisted-templates' => '* Des modèles de la liste noire ([[:$1]]) ont été exclus.',
	'coll-return_to_collection' => '<p>Revenir à la page <a href="$1">$2</a></p>',
	'coll-book_title' => 'Commander sous la forme d‘un livre imprimé',
	'coll-book_text' => 'Obtenez un livre imprimé par notre partenaire d’impression à la demande :',
	'coll-order_from_pp' => 'Aperçu avec $1',
	'coll-about_pp' => 'À propos de $1',
	'coll-invalid_podpartner_title' => 'Partenaire d’impression à la demande incorrect.',
	'coll-invalid_podpartner_msg' => 'Le partenaire d’impression à la demande indiqué est incorrect.
Veuillez contacter votre administrateur MediaWiki.',
	'coll-license' => 'Licence',
	'coll-return_to' => 'Retourner vers [[:$1]]',
	'coll-more_info' => 'Afficher d’autres informations',
	'coll-hide_info' => 'Masquer les informations',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress commander des informations',
	'coll-suggest_title' => 'Pages suggérées pour votre livre',
	'coll-suggest_intro_text' => "Les suggestions sont fondées sur l'ensemble des pages wiki actuellement dans votre livre.
La liste est mise à jour à chaque fois que vous cliquez sur les boutons d'ajout ou de suppression.",
	'coll-suggested_articles' => 'Suggestions',
	'coll-suggest_reset_bans' => 'réinitialiser',
	'coll-suggest_reset_bans_tooltip' => 'Montrer les suggestions précédemment supprimées',
	'coll-suggest_add_selected' => 'Ajouter les pages sélectionnées',
	'coll-suggest_ban_selected' => 'Supprimer les pages sélectionnées',
	'coll-suggest_your_book' => 'Votre livre',
	'coll-suggest_show' => 'afficher',
	'coll-suggest_ban_tooltip' => 'Supprimer cette page de la liste des suggestions',
	'coll-suggest_article_ban' => 'La page <strong>$1</strong> a été retirée des suggestions ($2).',
	'coll-suggest_article_add' => 'La page <strong>$1</strong> a été ajoutée à votre livre ($2).',
	'coll-suggest_article_remove' => 'La page <strong>$1</strong> a été retirée de votre livre ($2).',
	'coll-suggest_undo_tooltip' => 'Défaire cette action',
	'coll-suggest_undo' => 'défaire',
	'coll-load_local_book' => 'Cliquez sur OK pour continuer votre livre %TITLE% qui contient %NUMPAGES% pages wiki. Cliquez sur Annuler pour le supprimer et commencer avec un livre vide.',
	'right-collectionsaveasuserpage' => 'Sauvegarder des livres sur des pages utilisateur',
	'right-collectionsaveascommunitypage' => 'Sauvegarder des livres sur des pages communautaires',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'coll-desc' => 'Pèrmèt de [[Special:Book|fâre des lévros]].',
	'coll-manage_your_book' => 'Administrar voutron lévro',
	'coll-book_creator_help' => 'Vêde la [[{{MediaWiki:Coll-helppage}}|pâge d’éde sur los lévros]] por més d’enformacions.',
	'coll-start_book_creator' => 'Emmodar lo crèator de lévros',
	'coll-book_creator_continue' => 'Continuar en utilisent lo crèator de lévros',
	'coll-book_creator_disable_text' => "Lo ''crèator de lévros'' serat dèsactivâ et pués los lévros sur losquints vos travalyéd seront suprimâs de la sèance de voutron navigator.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tèxto du crèator de lévros',
	'coll-collection' => 'Lévro',
	'coll-collections' => 'Lévros',
	'coll-exclusion_category_title' => 'Èxcllure pendent l’emprèssion',
	'coll-print_template_prefix' => 'Emprimar',
	'coll-print_template_pattern' => '$1/Emprimar',
	'coll-unknown_subpage_title' => 'Sot-pâge encognua',
	'coll-unknown_subpage_text' => 'Ceta sot-pâge de [[Special:Book|lévro]]  ègziste pas',
	'coll-couldnotaddarticle_title' => 'Empossiblo d’apondre la pâge du vouiqui',
	'coll-couldnotaddarticle_msg' => 'La pâge du vouiqui pôt pas étre apondua.',
	'coll-couldnotremovearticle_title' => 'Empossiblo d’enlevar la pâge du vouiqui',
	'coll-couldnotremovearticle_msg' => 'La pâge du vouiqui pôt pas étre enlevâ.',
	'coll-savedbook_template' => 'lévro_sôvâ',
	'coll-your_book' => 'Voutron lévro',
	'coll-download_title' => 'Tèlèchargiér',
	'coll-download_text' => 'Por tèlèchargiér voutron lévro chouèsésséd un format et pués clicâd sur lo boton.',
	'coll-download_as_text' => 'Por tèlèchargiér una vèrsion de voutron lévro u format $1, clicâd sur lo boton.',
	'coll-download' => 'Tèlèchargiér',
	'coll-format_label' => 'Format :',
	'coll-remove' => 'Enlevar',
	'coll-show' => 'Fâre vêre',
	'coll-move_to_top' => 'Dèplaciér tot lé-d’amont',
	'coll-move_up' => 'Alar amont',
	'coll-move_down' => 'Alar avâl',
	'coll-move_to_bottom' => 'Dèplaciér tot lé-d’avâl',
	'coll-title' => 'Titro :',
	'coll-subtitle' => 'Sot-titro :',
	'coll-contents' => 'Contegnu',
	'coll-drag_and_drop' => 'Utilisar lo glissiér-dèposar por tornar ordonar les pâges vouiqui et los chapitros.',
	'coll-create_chapter' => 'Fâre un chapitro',
	'coll-sort_alphabetically' => 'Triyér per ôrdre alfabètico',
	'coll-rename' => 'Renomar',
	'coll-new_chapter' => 'Buchiér lo titro du chapitro novél',
	'coll-rename_chapter' => 'Buchiér lo titro novél de ceti chapitro',
	'coll-no_such_category' => 'Catègorie entrovâbla',
	'coll-notitle_title' => 'Lo titro de la pâge at pas possu étre dètèrmenâ.',
	'coll-post_failed_title' => 'La requéta POST at pas reussia',
	'coll-post_failed_msg' => 'La requéta POST de vers $1 at pas reussia ($2).',
	'coll-mwserve_failed_title' => 'Èrror du sèrvor de rendu',
	'coll-mwserve_failed_msg' => 'Una èrror est arrevâ sur lo sèrvor de rendu : <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Rèponsa d’èrror retornâ per lo sèrvor',
	'coll-empty_collection' => 'Lévro vouedo',
	'coll-revision' => 'Vèrsion : $1',
	'coll-save_collection_title' => 'Sôvar et partagiér voutron lévro',
	'coll-save_collection_text' => 'Chouèsésséd un emplacement de stocâjo por voutron lévro :',
	'coll-login_to_save' => 'Se vos voléd sôvar des lévros por un usâjo a vegnir, vos volyéd [[Special:UserLogin|branchiér ou ben fâre un compto]].',
	'coll-personal_collection_label' => 'Lévro a sè :',
	'coll-community_collection_label' => 'Lévro colèctif :',
	'coll-save_collection' => 'Sôvar lo lévro',
	'coll-save_category' => 'Tôs los lévros sont sôvâs dens la catègorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La pâge ègziste ja.
L’ècllafar ?',
	'coll-overwrite_text' => 'Una pâge apelâ [[:$1]] ègziste ja.
La voléd-vos remplaciér per voutron lévro ?',
	'coll-yes' => 'Ouè',
	'coll-no' => 'Nan',
	'coll-overwrite' => 'Ècllafar',
	'coll-append' => 'Apondre',
	'coll-cancel' => 'Anular',
	'coll-update' => 'Betar a jorn',
	'coll-limit_exceeded_title' => 'Lévro trop grant',
	'coll-limit_exceeded_text' => 'Voutron lévro est trop grant.
Niona pâge y pôt étre apondua.',
	'coll-rendering_title' => 'Rendu',
	'coll-rendering_status' => '<strong>Ètat :</strong> $1',
	'coll-rendering_article' => '(pâge vouiqui : $1)',
	'coll-rendering_page' => '(pâge : $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Tèxto d’enformacion sur lo rendu de les pâges',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Tèxto d’enformacion sur lo rendu de les colèccions',
	'coll-rendering_finished_title' => 'Rendu chavonâ',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Tèxto d’enformacion sur lo rendu de les pâges',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Tèxto d’enformacion sur lo rendu de les colèccions',
	'coll-notfound_title' => 'Lévro entrovâblo',
	'coll-notfound_text' => 'La pâge du lévro at pas possu étre trovâ.',
	'coll-download_notfound_title' => 'Fichiér entrovâblo',
	'coll-download_notfound_text' => 'Lo fichiér que vos tâchiéd de tèlèchargiér ègziste pas :
il at pôt-étre étâ suprimâ et dêt étre refêt.',
	'coll-download_failed_title' => 'Èrror pendent lo tèlèchargement',
	'coll-download_failed_text' => 'Una èrror est arrevâ pendent lo tèlèchargement du fichiér : $1',
	'coll-is_cached' => '<ul><li>Una vèrsion en cache du document at étâ trovâ, nion rendu ére nècèssèro.
<a href="$1">Forciér un novél rendu.</a></li></ul>',
	'coll-excluded-templates' => '* Des modèlos de la catègorie [[:Category:$1|$1]] ont étâ èxcllus.',
	'coll-blacklisted-templates' => '* Des modèlos de la lista nêre [[:$1]] ont étâ èxcllus.',
	'coll-return_to_collection' => '<p>Tornar a la pâge <a href="$1">$2</a></p>',
	'coll-book_title' => 'Comandar desot la fôrma d’un lévro emprimâ',
	'coll-book_text' => 'Avéd un lévro emprimâ per noutron partenèro d’emprèssion a la demanda :',
	'coll-order_from_pp' => 'Apèrçu avouéc $1',
	'coll-about_pp' => 'A propôs de $1',
	'coll-invalid_podpartner_title' => 'Partenèro d’emprèssion a la demanda fôx.',
	'coll-invalid_podpartner_msg' => 'Lo partenèro d’emprèssion a la demanda balyê est fôx.
Vos volyéd veriér vers voutron administrator MediaWiki.',
	'coll-license' => 'Licence',
	'coll-return_to' => 'Tornar a [[:$1]]',
	'coll-more_info' => 'Fâre vêre d’ôtres enformacions',
	'coll-hide_info' => 'Cachiér les enformacions',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress comandar des enformacions',
	'coll-suggest_title' => 'Pâges conselyês por voutron lévro',
	'coll-suggest_intro_text' => 'Los consèlys sont basâs sur l’ensemblo de les pâges vouiqui d’ora dens voutron lévro.
La lista est betâ a jorn a châque côp que vos clicâd sur los botons d’aponsa ou ben de suprèssion.',
	'coll-suggested_articles' => 'Consèlys',
	'coll-suggest_reset_bans' => 'tornar inicialisar',
	'coll-suggest_reset_bans_tooltip' => 'Montrar los consèlys enlevâs dês devant',
	'coll-suggest_add_selected' => 'Apondre les pâges chouèsies',
	'coll-suggest_ban_selected' => 'Enlevar les pâges chouèsies',
	'coll-suggest_your_book' => 'Voutron lévro',
	'coll-suggest_show' => 'fâre vêre',
	'coll-suggest_ban_tooltip' => 'Enlevar ceta pâge de la lista des consèlys',
	'coll-suggest_article_ban' => 'La pâge <strong>$1</strong> at étâ enlevâ des consèlys ($2).',
	'coll-suggest_article_add' => 'La pâge <strong>$1</strong> at étâ apondua a voutron lévro ($2).',
	'coll-suggest_article_remove' => 'La pâge <strong>$1</strong> at étâ enlevâ de voutron lévro ($2).',
	'coll-suggest_undo_tooltip' => 'Dèfâre ceta accion',
	'coll-suggest_undo' => 'dèfâre',
	'right-collectionsaveasuserpage' => 'Sôvar des lévros sur des pâges utilisator',
	'right-collectionsaveascommunitypage' => 'Sôvar des lévros sur des pâges a la comunôtât',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'coll-collection' => 'Libri',
	'coll-collections' => 'Libris',
	'coll-print_template_prefix' => 'Stampe',
	'coll-your_book' => 'Il to libri',
	'coll-download_title' => 'Discjame',
	'coll-download' => 'Discjame',
	'coll-title' => 'Titul:',
	'coll-rename' => 'Gambie non',
	'coll-save_collection' => 'Salve libri',
	'coll-yes' => 'Sì',
	'coll-no' => 'No',
	'coll-rendering_status' => '<strong>Stât:</strong> $1',
	'coll-rendering_page' => '(pagjine: $1)',
	'coll-about_pp' => 'Informazions su $1',
	'coll-suggested_articles' => 'Sugjeriments',
	'coll-suggest_add_selected' => 'Zonte lis pagjinis selezionadis',
	'coll-suggest_ban_selected' => 'Gjave lis pagjinis selezionadis',
	'coll-suggest_show' => 'mostre',
);

/** Western Frisian (Frysk)
 * @author SK-luuut
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'coll-yes' => 'Ja',
	'coll-cancel' => 'Ofbrekke',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'coll-desc' => '[[Special:Book|Crear libros]]',
	'coll-book_creator_intro' => "<big>Co ''creador de libros'' pode crear un libro composto por páxinas do wiki da súa escolla. Pode exportar o libro en diferentes formatos (por exemplo, PDF ou ODF) ou solicitar unha copia impresa.</big>",
	'coll-manage_your_book' => 'Xestionar o seu libro',
	'coll-book_creator_help' => 'Olle [[{{MediaWiki:Coll-helppage}}|a páxina de axuda sobre os libros]] para obter máis información.',
	'coll-start_book_creator' => 'Iniciar o creador de libros',
	'coll-book_creator_continue' => 'Continuar usando o creador de libros',
	'coll-book_creator_disable_text' => "O ''creador de libros'' será desactivado e o libro no que está a traballar será eliminado da sesión do seu navegador.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Texto do creador de libros',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libros',
	'coll-exclusion_category_title' => 'Excluír na impresión',
	'coll-print_template_prefix' => 'Imprimir',
	'coll-print_template_pattern' => '$1/Imprimir',
	'coll-unknown_subpage_title' => 'Subpáxina descoñecida',
	'coll-unknown_subpage_text' => 'Esta subpáxina de [[Special:Book|Libro]] non existe',
	'coll-couldnotaddarticle_title' => 'Non se puido engadir o artigo',
	'coll-couldnotaddarticle_msg' => 'O artigo non puido ser engadido.',
	'coll-couldnotremovearticle_title' => 'Non se puido eliminar o artigo',
	'coll-couldnotremovearticle_msg' => 'O artigo non puido ser eliminado.',
	'coll-noscript_text' => '<h1>Requírese o JavaScript!</h1>
<strong>O seu navegador non soporta o JavaScript ou o JavaScript foi deshabilitado.
Esta páxina non funcionará correctamente, polo menos ata que o JavaScript sexa habilitado.</strong>',
	'coll-savedbook_template' => 'libro_gardado',
	'coll-your_book' => 'O seu libro',
	'coll-download_title' => 'Descargar',
	'coll-download_text' => 'Para descargar o seu libro, escolla un formato e faga clic no botón.',
	'coll-download_as_text' => 'Para descargar o seu libro en formato $1, prema no botón.',
	'coll-download' => 'Descargar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Eliminar',
	'coll-show' => 'Mostrar',
	'coll-move_to_top' => 'Ir arriba',
	'coll-move_up' => 'Mover arriba',
	'coll-move_down' => 'Mover abaixo',
	'coll-move_to_bottom' => 'Ir abaixo',
	'coll-title' => 'Título:',
	'coll-subtitle' => 'Subtítulo:',
	'coll-contents' => 'Contidos',
	'coll-drag_and_drop' => 'Use amosar e agochar para reordenar as páxinas e os capítulos wiki',
	'coll-create_chapter' => 'Crear un capítulo',
	'coll-sort_alphabetically' => 'Ordenar alfabeticamente',
	'coll-rename' => 'Renomear',
	'coll-new_chapter' => 'Insira un nome para o novo capítulo',
	'coll-rename_chapter' => 'Insira un novo nome para o capítulo',
	'coll-no_such_category' => 'Non existe tal categoría',
	'coll-notitle_title' => 'O título da páxina non pode ser determinado.',
	'coll-post_failed_title' => 'A solicitude do POST fallou',
	'coll-post_failed_msg' => 'Fallou o POST solicitado a $1 ($2).',
	'coll-mwserve_failed_title' => 'Erro no servidor de renderización',
	'coll-mwserve_failed_msg' => 'Produciuse un erro no servidor de renderización: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Ocorreu un erro no servidor',
	'coll-empty_collection' => 'Libro baleiro',
	'coll-revision' => 'Revisión: $1',
	'coll-save_collection_title' => 'Gardar e compartir o seu libro',
	'coll-save_collection_text' => 'Escolla unha localización:',
	'coll-login_to_save' => 'Se quere gardar os libros para un uso posterior, por favor, [[Special:UserLogin|acceda ao sistema ou cree unha conta]].',
	'coll-personal_collection_label' => 'Libro persoal:',
	'coll-community_collection_label' => 'Libro da comunidade:',
	'coll-save_collection' => 'Gardar o libro',
	'coll-save_category' => 'Todos os libros son engadidos á categoría [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'A páxina existe.
Quere sobrescribila?',
	'coll-overwrite_text' => 'Xa existe unha páxina chamada [[:$1]].
Quere reemprazala coa súa colección?',
	'coll-yes' => 'Si',
	'coll-no' => 'Non',
	'coll-load_overwrite_text' => 'Xa ten algunhas páxinas no seu libro.
Desexa sobrescribir o seu libro actual, anexar o novo contido ou cancelar a carga deste libro?',
	'coll-overwrite' => 'Sobrescribir',
	'coll-append' => 'Anexar',
	'coll-cancel' => 'Cancelar',
	'coll-update' => 'Actualizar',
	'coll-limit_exceeded_title' => 'Libro moi grande',
	'coll-limit_exceeded_text' => 'O seu libro é moi grande.
Non se poden engadir máis páxinas.',
	'coll-rendering_title' => 'Renderizando',
	'coll-rendering_text' => '<p><strong>Por favor, agarde mentres se xera o documento.</strong></p>

<p><strong>Progreso:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Esta páxina debería refrescarse cada poucos segundos.
Se non vai, prema no botón "Refrescar" do seu navegador.</p>',
	'coll-rendering_status' => '<strong>Estado:</strong> $1',
	'coll-rendering_article' => '(páxina wiki: $1)',
	'coll-rendering_page' => '(páxina: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre o renderizado de páxinas',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre o renderizado de coleccións',
	'coll-rendering_finished_title' => 'Finalizou a renderización',
	'coll-rendering_finished_text' => '<strong>Xerouse o documento.</strong>
<strong>[$1 Descargue o ficheiro]</strong> no seu ordenador.

Notas:
*Non está satisfeito co ficheiro obtido? Vexa [[{{MediaWiki:Coll-helppage}}|a páxina de axuda acerca dos libros]] para comprobar as posibilidades de melloralo.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre o renderizado de páxinas',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre o renderizado de coleccións',
	'coll-notfound_title' => 'Non se pode atopar o libro',
	'coll-notfound_text' => 'Non se pode atopar a páxina do libro.',
	'coll-download_notfound_title' => 'Non se atopou o ficheiro',
	'coll-download_notfound_text' => 'O ficheiro que está intentando descargar non existe: talvez foi borrado e necesita ser rexerado.',
	'coll-download_failed_title' => 'Produciuse un erro durante a descarga',
	'coll-download_failed_text' => 'Houbo un erro durante a descarga do ficheiro: $1',
	'coll-is_cached' => '<ul><li>Atopouse unha versión do documento na memoria caché, polo que non vai ser necesaria a renderización. <a href="$1">Forzala.</a></li></ul>',
	'coll-excluded-templates' => '* O modelos que están na categoría "[[:Category:$1|$1]]" foron excluídos.',
	'coll-blacklisted-templates' => '* O modelos da lista negra "[[:$1]]" foron excluídos.',
	'coll-return_to_collection' => '<p>Volver a "<a href="$1">$2</a>"</p>',
	'coll-book_title' => 'Encargar como un libro impreso',
	'coll-book_text' => 'Obteña un libro impreso desde un dos nosos seguintes compañeiros de solicitudes de impresión:',
	'coll-order_from_pp' => 'Vista previa con $1',
	'coll-about_pp' => 'Acerca de $1',
	'coll-invalid_podpartner_title' => 'Compañeiro de solicitudes de impresión (POD) inválido',
	'coll-invalid_podpartner_msg' => 'O compañeiro de solicitudes de impresión (POD) indicado é inválido.
Por favor, contacte co seu administrador MediaWiki.',
	'coll-license' => 'Licenza',
	'coll-return_to' => 'Volver a "[[:$1]]"',
	'coll-more_info' => 'Obter máis información',
	'coll-hide_info' => 'Agochar a información',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Información de pedido a PediaPress',
	'coll-suggest_title' => 'Páxinas recomendadas para o seu libro',
	'coll-suggest_intro_text' => 'As suxestións están baseadas no conxunto actual de páxinas do wiki no seu libro.
A lista actualízase sempre que preme no botón engadir ou eliminar.',
	'coll-suggested_articles' => 'Suxestións',
	'coll-suggest_reset_bans' => 'restablecer',
	'coll-suggest_reset_bans_tooltip' => 'Mostrar as suxestións previamente eliminadas',
	'coll-suggest_add_selected' => 'Engadir as páxinas seleccionadas',
	'coll-suggest_ban_selected' => 'Eliminar as páxinas seleccionadas',
	'coll-suggest_your_book' => 'O seu libro',
	'coll-suggest_show' => 'mostrar',
	'coll-suggest_ban_tooltip' => 'Eliminar esta páxina da lista de suxestións',
	'coll-suggest_article_ban' => 'A páxina "<strong>$1</strong>" foi eliminada das suxestións ($2).',
	'coll-suggest_article_add' => 'A páxina "<strong>$1</strong>" foi engadida ao seu libro ($2).',
	'coll-suggest_article_remove' => 'A páxina "<strong>$1</strong>" foi eliminada do seu libro ($2).',
	'coll-suggest_undo_tooltip' => 'Desfacer esta acción',
	'coll-suggest_undo' => 'desfacer',
	'coll-load_local_book' => 'Prema en "Aceptar" para continuar co seu libro titulado "%TITLE%", formado por %NUMPAGES% páxinas wiki. Prema en "Cancelar" para borralo e comezar un libro novo.',
	'right-collectionsaveasuserpage' => 'Gardar libros como unha páxina de usuario',
	'right-collectionsaveascommunitypage' => 'Gardar libros como unha páxina da comunidade',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'coll-collection' => 'Βιβλίον',
	'coll-collections' => 'Βιβλία',
	'coll-download_title' => 'καταφορτίζειν',
	'coll-download' => 'Καταφόρτισις',
	'coll-remove' => 'Άφαιρεῖν',
	'coll-show' => 'Δεικνύναι',
	'coll-title' => 'Ἐπιγραφή:',
	'coll-subtitle' => 'Ὑποεπιγραφή:',
	'coll-contents' => 'Περιεχόμενα',
	'coll-rename' => 'Ἐπανωνομάζειν',
	'coll-revision' => 'Ἀναθεώρησις: $1',
	'coll-yes' => 'Ναί',
	'coll-no' => 'Οὐ',
	'coll-cancel' => 'Ἀκυροῦν',
	'coll-update' => 'Ἐνημεροῦν',
	'coll-rendering_title' => 'Ἀπόδοσις',
	'coll-rendering_status' => '<strong>Κατάστασις:</strong> $1',
	'coll-about_pp' => 'Περὶ $1',
	'coll-license' => 'Ἄδεια',
	'coll-return_to' => 'Ἐπανιέναι εἰς [[:$1]]',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 * @author J. 'mach' wust
 * @author Melancholie
 */
$messages['gsw'] = array(
	'coll-desc' => '[[Special:Book|Leg Biecher aa]]',
	'coll-book_creator_intro' => "<big>Mit em ''Buechmodus'' chasch Du ne Buech us beliebige Wikisyte aalege.
Du chasch d Buech in unterschidlige Format exportiere (zem Byschpel PDF oder ODF) oder in ere druckte Form bstelle.</big>",
	'coll-manage_your_book' => 'Dyy Buech verwalte',
	'coll-book_creator_help' => 'Luege d [[{{MediaWiki:Coll-helppage}}|Hilf zue Biecher]] fir meh Informatione.',
	'coll-start_book_creator' => 'Buechmodus starte',
	'coll-book_creator_continue' => 'Buechgenerator wyter verwände',
	'coll-book_creator_disable_text' => "Dr ''Buchgenerator'' wird deaktiviert un s Buech, wu Du dra schaffsch, wird glescht.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text fir Buechmodus',
	'coll-collection' => 'Buech',
	'coll-collections' => 'Biecher',
	'coll-exclusion_category_title' => 'Vum Druck usschließe',
	'coll-print_template_prefix' => 'Drucke',
	'coll-print_template_pattern' => '$1/Druck',
	'coll-unknown_subpage_title' => 'Nit bekannti Untersyte',
	'coll-unknown_subpage_text' => 'Die Untersyte vu dr [[Special:Book|Buech]] git s nit',
	'coll-couldnotaddarticle_title' => 'Cha d Wikisyte nit zuefiege',
	'coll-couldnotaddarticle_msg' => 'D Wikisyte het nit chenne zuegfiegt wäre.',
	'coll-couldnotremovearticle_title' => 'D Wikisyte het nit chenne usegnuu wäre',
	'coll-couldnotremovearticle_msg' => 'D Wikisyte het nit chenne uusegnuu wäre.',
	'coll-noscript_text' => '<h1>S brucht JavaScript!</h1>
<strong>Dyy Browser unterstitzt kei JavaScript oder s JavaScript isch deaktiviert.
Die Syte funktioniert eso lang nit richtig, solang JavaScript nit verfiegbar isch.</strong>',
	'coll-savedbook_template' => 'gspycheret_Buech',
	'coll-your_book' => 'Dyy Buech',
	'coll-download_title' => 'Abelade',
	'coll-download_text' => 'Go Dyy Buech abelade, wehl e Format un druck uf d Schaltflächi.',
	'coll-download_as_text' => 'Go Dyy Buech im Format $1 abelade, druck uf d Schaltflächi.',
	'coll-download' => 'Abelade',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Useneh',
	'coll-show' => 'Zeige',
	'coll-move_to_top' => 'an dr Aafang',
	'coll-move_up' => 'ufe',
	'coll-move_down' => 'abe',
	'coll-move_to_bottom' => 'an s Änd',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Untertitel:',
	'coll-contents' => 'Inhalt',
	'coll-drag_and_drop' => 'Mit dr Muus chasch Syten un Kapitel verschiebe go d Reihefolg ändere',
	'coll-create_chapter' => 'Kapitel aalege',
	'coll-sort_alphabetically' => 'Noch em Alfabet sortiere',
	'coll-rename' => 'Umnänne',
	'coll-new_chapter' => 'Gib e Name fir e nej Kapitel yy',
	'coll-rename_chapter' => 'Gib e neije Name fir s Kapitel yy',
	'coll-no_such_category' => 'Kategorii git s nit',
	'coll-notitle_title' => 'Dr Titel vu dr Syte het nit chenne bstimmt wäre.',
	'coll-post_failed_title' => 'POST-Aafrog isch fählgschlage',
	'coll-post_failed_msg' => 'D POST-Aafrog an $1 isch fählgschlage ($2).',
	'coll-mwserve_failed_title' => 'Serverfähler',
	'coll-mwserve_failed_msg' => 'Uf em Renderer-Server het s e Fähler gee: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Fählermäldig vum Server',
	'coll-empty_collection' => 'Leers Buech',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Spychere un teil Dyy Buech',
	'coll-save_collection_text' => 'Wehl e Ort:',
	'coll-login_to_save' => 'Wänn Du mechtsch Biecher spychere, no [[Special:UserLogin|mäld Di bitte aa oder leg e Benutzerkonto aa]].',
	'coll-personal_collection_label' => 'Persenlig Buech:',
	'coll-community_collection_label' => 'Community-Buech:',
	'coll-save_collection' => 'Buech spychere',
	'coll-save_category' => 'Alli gspycherete Biecher wäre in d Kategorii [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] yygfiegt.',
	'coll-overwrite_title' => 'Syte git s scho, iberschryybe?',
	'coll-overwrite_text' => 'E Syte mit em Name [[:$1]] git s scho. Mechtsch si dur Dyyni Sammlig ersetze?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Nei',
	'coll-load_overwrite_text' => 'In Dyym Buech het s scho Syte.
Mechtsch di aktuäll Buech iberschryybe, di neije Syte aahänke oder s Lade vu däm Buech abbräche?',
	'coll-overwrite' => 'Iberschryybe',
	'coll-append' => 'Aahänke',
	'coll-cancel' => 'Abbräche',
	'coll-update' => 'Aktualisiere',
	'coll-limit_exceeded_title' => 'Buech z groß',
	'coll-limit_exceeded_text' => 'Dyy Buech isch z groß. S chenne kei Syte meh zuegfiegt wäre',
	'coll-rendering_title' => 'Am Aalege',
	'coll-rendering_text' => '<p><strong>Bitte haa Geduld, derwylscht s Dokumänt aagleit wird.</strong></p>

<p><strong>Fortschritt:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Die Syte sott si alli paar Sekunde vu sälber aktualisiere.
Wänn des aber nit gschiht, no druck bitte dr „Aktualisiere“-Chnopf (meischt F5) vu Dyynem Browser.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(Artikel: $1)',
	'coll-rendering_page' => '(Syte: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Am Rendere vum Syteninfotext',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Am Rendere vum Sammligsinfotext',
	'coll-rendering_finished_title' => 'Fertig aagleit',
	'coll-rendering_finished_text' => '<strong>D Datei isch mit Erfolg aagleit wore.</strong>
<strong>[$1 Dokument abelade]</strong>.

Hiiwyys:
* Bisch mit em Ergebnis nit zfride? Megligkeite d Uusgab z verbessere findsch uf dr [[{{MediaWiki:Coll-helppage}}|Hilfsyte iber d Sammlige]].',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rendere vu dr Syteinformation',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rendere vum Buech',
	'coll-notfound_title' => 'Buech nit gfunde',
	'coll-notfound_text' => 'Dyyni Buech het nit chenne gfunde wäre.',
	'coll-download_notfound_title' => 'Datei nit gfunde',
	'coll-download_notfound_text' => 'D Datei, wu Du versuechsch abezlade, git s nit: Villicht isch si glescht wore oder si muess nej generiert wäre.',
	'coll-download_failed_title' => 'Fähler bim Abelade',
	'coll-download_failed_text' => 'S het e Fähler gee bim Abelade vu dr Datei: $1',
	'coll-is_cached' => '<ul><li>S git e Version vum Dokumänt, wu zwischegspycheret isch, so dass kei Erstellig notwändig gsi isch (<a href="$1">Nejerstellig erzwinge</a>).</li></ul>',
	'coll-excluded-templates' => '* Vorlage us dr Kategorii [[:Category:$1|$1]] sin usgschlosse wore.',
	'coll-blacklisted-templates' => '* Vorlage vu dr Schwarze Lischt [[:$1]] sin usgschlosse wore.',
	'coll-return_to_collection' => 'Zruck zue <a href="$1">$2</a>',
	'coll-book_title' => 'As druckts Buech bstelle',
	'coll-book_text' => 'Bstell e druckti Buechusgab bi unserem Print-on-Demand-Partner:',
	'coll-order_from_pp' => 'Vorschau bi $1',
	'coll-about_pp' => 'Iber $1',
	'coll-invalid_podpartner_title' => 'Nit giltige Print-on-Demand-Partner',
	'coll-invalid_podpartner_msg' => 'In dr Aagabe zum Print-on-Demand-Partner het s Fähler. Bitte nimm Kontakt uf zu MediaWiki-Administrator.',
	'coll-license' => 'Lizänz',
	'coll-return_to' => 'Zruck zue [[:$1]]',
	'coll-more_info' => 'Meh Informatione zeige',
	'coll-hide_info' => 'Informatione verstecke',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress Bstellinformation',
	'coll-suggest_title' => 'Vorgschlageni Syte fir Dyy Buech',
	'coll-suggest_intro_text' => 'Vorschleg basieren uf dr aktuälle Wikisytenyystellige in Dyym Buech.
Alliwyl, wänn Du uf d Zuefiege- oder Useneh-Schaltflechine drucksch, wird die Lischt aktualisiert.',
	'coll-suggested_articles' => 'Vorschleg',
	'coll-suggest_reset_bans' => 'zrucksetze',
	'coll-suggest_reset_bans_tooltip' => 'Vorschleg aazeige, wu zletscht uusegnuu wore sin',
	'coll-suggest_add_selected' => 'Uusgwehlti Syte zuefiege',
	'coll-suggest_ban_selected' => 'Uusgwehlti Syte uuseneh',
	'coll-suggest_your_book' => 'Dyy Buech',
	'coll-suggest_show' => 'zeige',
	'coll-suggest_ban_tooltip' => 'Die Syte us dr Vorschlagslischt uuseneh',
	'coll-suggest_article_ban' => 'D Syte <strong>$1</strong> isch us dr Vorschleg uusegnuu wore ($2).',
	'coll-suggest_article_add' => 'D Syte <strong>$1</strong> isch zue Dyym Buech zuegfiegt wore ($2).',
	'coll-suggest_article_remove' => 'D Syte <strong>$1</strong> isch us Dyym Buech uusegnuu wore ($2).',
	'coll-suggest_undo_tooltip' => 'Die Aktion ruckgängig mache',
	'coll-suggest_undo' => 'ruckgängig',
	'coll-load_local_book' => 'Druck uf OK, go mit Dyym Buech %TITLE% wytermache, wu us %NUMPAGES% Wikisyte bstoht. Druck uf Abbräche go s wider lesche un mit eme lääre Buech aafange.',
	'right-collectionsaveasuserpage' => 'Biecher as Benutzersyte spychere',
	'right-collectionsaveascommunitypage' => 'Biecher as Gmeinschaftssyte spychere',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'coll-desc' => '[[ખાસ:પુસ્તક|પુસ્તક બનાવો]]',
	'coll-collection' => 'પુસ્તક',
	'coll-collections' => 'પુસ્તકો',
	'coll-exclusion_category_title' => 'છપાઇમાં સામેલ નહીં',
	'coll-print_template_prefix' => 'છપાઇ',
	'coll-print_template_pattern' => '$1/છપાઇ',
	'coll-unknown_subpage_title' => 'અજ્ઞાત ઉપપાનું',
	'coll-unknown_subpage_text' => '[[ખાસ:પુસ્તક|પુસ્તક]]નું આ ઉપપાનું ઉપલબ્ધ નથી',
	'coll-noscript_text' => '<h1>જાવાસ્ક્રિપ્ટ જરૂરી!</h1>
<strong>તમારું બ્રાઉઝર જાવાસ્ક્રિપ્ટને સમર્થન કરતું નથી અથવાતો જાવાસ્ક્રિપ્ટ નિષ્ક્રિય કરેલ છે.</br>
જ્યાં સુધી જાવાસ્ક્રિપ્ટ સક્રિય કરાશે નહીં ત્યાં સુધી આ પાનું બરાબર કામ આપશે નહીં.</strong>',
	'coll-savedbook_template' => 'સાચવેલ_પુસ્તક',
	'coll-your_book' => 'તમારૂં પુસ્તક',
	'coll-download_title' => 'ડાઉનલોડ',
	'coll-download_text' => 'વૃત્તાન્ત ડાઉનલોડ કરવા માટે શૈલી પસંદ કરો અને બટન પર ક્લિક કરો.',
	'coll-download_as_text' => '$1 શૈલીમાં વૃત્તાન્ત ડાઉનલોડ કરવા માટે બટન ક્લિક કરો.',
	'coll-download' => 'ડાઉનલોડ',
	'coll-format_label' => 'શૈલી:',
	'coll-remove' => 'દુર કરો',
	'coll-show' => 'બતાવો',
	'coll-move_to_top' => 'મથાળે લઇ જાઓ',
	'coll-move_up' => 'ઉપર લઇ જાઓ',
	'coll-move_down' => 'નીચે લઇ જાઓ',
	'coll-move_to_bottom' => 'તળીયે લઇ જાઓ',
	'coll-title' => 'મથાળું:',
	'coll-subtitle' => 'પેટામથાળું:',
	'coll-contents' => 'વિષય સૂચિ',
	'coll-drag_and_drop' => 'વિકિ પાનાઓ અને પ્રકરણોને ફરી ગોઠવવા માટે ઘસડી અને મૂકો',
	'coll-create_chapter' => 'પ્રકરણ બનાવો',
	'coll-sort_alphabetically' => 'મૂળાક્ષરો પ્રમાણે ગોઠવો',
	'coll-rename' => 'નામ બદલો',
	'coll-new_chapter' => 'નવા પ્રકરણને નામ આપો',
	'coll-rename_chapter' => 'પ્રકરણને નવું નામ આપો',
	'coll-no_such_category' => 'આવી કોઇ શ્રેણી નથી',
	'coll-notitle_title' => 'પાનાનું મથાળું નિર્ધારિત થઇ શકતું નથી.',
	'coll-post_failed_title' => 'પ્રસિધ્ધ કરવાની વિનંતી નિષ્ફળ',
	'coll-post_failed_msg' => '$1ને પ્રસિધ્ધ કરવાની વિનંતી નિષ્ફળ ($2).',
	'coll-error_reponse' => 'સર્વર પરથી ત્રુટિ પ્રતિક્રિયા',
	'coll-empty_collection' => 'ખાલી પુસ્તક',
	'coll-revision' => 'સુધારો: $1',
	'coll-save_collection_title' => 'તમારૂં પુસ્તક સાચવો અને વહેંચો',
	'coll-save_collection_text' => 'તમારૂં પુસ્તક સાચવવા માટેની જગ્યા પસંદ કરો:',
	'coll-personal_collection_label' => 'વ્યક્તિગત પુસ્તક:',
	'coll-community_collection_label' => 'સમૂહ પુસ્તક',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'coll-collection' => 'Lioar',
	'coll-collections' => 'Lioaryn',
	'coll-title' => 'Ard-ennym:',
	'coll-contents' => 'Cummal',
	'coll-create_chapter' => 'Croo cabdil noa',
	'coll-sort_alphabetically' => 'Rang-oardraghey rere yn abbyrlhit',
	'coll-personal_collection_label' => 'Lioar phersoonagh:',
	'coll-community_collection_label' => 'Lioar voodeeys:',
	'coll-yes' => 'Ta',
	'coll-no' => 'Cha',
	'coll-cancel' => 'Dolley magh',
	'coll-about_pp' => 'Mychione $1',
);

/** Hausa (هَوُسَ) */
$messages['ha'] = array(
	'coll-cancel' => 'Soke',
	'coll-suggest_show' => 'nuna',
);

/** Hawaiian (Hawai`i)
 * @author Singularity
 */
$messages['haw'] = array(
	'coll-remove' => 'Kāpae',
	'coll-contents' => 'Papa kuhikuhi',
	'coll-about_pp' => 'E pili ana iā $1',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotem Liss
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'coll-desc' => '[[Special:Book|איסוף דפים לספר]], יצירת קובצי PDF',
	'coll-book_creator_intro' => '<big>באמצעות "יוצר הספרים" ניתן ליצור ספר הכולל דפי ויקי לבחירתך. ניתן לייצא את הספר שלך בסוגי קבצים שונים (לדוגמה, PDF או ODF) או להזמין עותק מודפס.</big>',
	'coll-manage_your_book' => 'ניהול הספר שלכם',
	'coll-book_creator_help' => 'ניתן לעיין ב[[{{MediaWiki:Coll-helppage}}|דף העזרה אודות ספרים]] למידע נוסף.',
	'coll-start_book_creator' => 'הפעלת יוצר הספרים',
	'coll-book_creator_continue' => 'המשך השימוש במצב ספר',
	'coll-book_creator_disable_text' => "''מצב ספר'' יבוטל והספר שאתם עובדים עליו יוסר.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/טקסט במצב ספר',
	'coll-collection' => 'ספר',
	'coll-collections' => 'ספרים',
	'coll-exclusion_category_title' => 'דפים שאינם להדפסה',
	'coll-print_template_prefix' => 'הדפסה',
	'coll-print_template_pattern' => '$1/הדפסה',
	'coll-unknown_subpage_title' => 'דף משנה בלתי ידוע',
	'coll-unknown_subpage_text' => 'דף משנה זה של ה[[Special:Book|ספר]] אינו קיים',
	'coll-couldnotaddarticle_title' => 'דף הוויקי לא נוסף',
	'coll-couldnotaddarticle_msg' => 'לא ניתן היה להוסיף את דף הוויקי.',
	'coll-couldnotremovearticle_title' => 'דף הוויקי לא הוסר',
	'coll-couldnotremovearticle_msg' => 'לא ניתן היה להסיר את דף הוויקי.',
	'coll-noscript_text' => '<h1>JavaScript נדרש!</h1>
<strong>הדפדפן שלכם אינו תומך ב־JavaScript או שביטלתם את JavaScript בדפדפן זה.
דף זה לא יעבוד כדרוש, אלא אם כן JavaScript יופעל.</strong>',
	'coll-savedbook_template' => 'ספר_שמור',
	'coll-your_book' => 'הספר שלכם',
	'coll-download_title' => 'הורדה',
	'coll-download_text' => 'להורדת הספר שלכם, בחרו פורמט ולחצו על הכפתור.',
	'coll-download_as_text' => 'להורדת הספר שלכם בפורמט $1, לחצו על הכפתור.',
	'coll-download' => 'הורדה',
	'coll-format_label' => 'פורמט:',
	'coll-remove' => 'הסרה',
	'coll-show' => 'הצגה',
	'coll-move_to_top' => 'העברה לראש',
	'coll-move_up' => 'העברה למעלה',
	'coll-move_down' => 'העברה למטה',
	'coll-move_to_bottom' => 'העברה לתחתית',
	'coll-title' => 'כותרת:',
	'coll-subtitle' => 'כותרת משנה:',
	'coll-contents' => 'תכנים',
	'coll-drag_and_drop' => 'השתמשו בגרירה ושחרור כדי לסדר מחדש את הערכים ואת הפרקים',
	'coll-create_chapter' => 'פרק חדש',
	'coll-sort_alphabetically' => 'סידור אלפביתי',
	'coll-rename' => 'שינוי שם',
	'coll-new_chapter' => 'הקלידו שם לפרק החדש',
	'coll-rename_chapter' => 'הקלידו שם חדש לפרק',
	'coll-no_such_category' => 'אין קטגוריה כזו',
	'coll-notitle_title' => 'לא ניתן היה לבדוק מהי כותרת הדף.',
	'coll-post_failed_title' => 'בקשת ה־POST נכשלה',
	'coll-post_failed_msg' => 'בקשת ה־POST ל־$1 נכשלה ($2).',
	'coll-mwserve_failed_title' => 'שגיאה בשרת היצירה',
	'coll-mwserve_failed_msg' => 'אירעה שגיאה בשרת יצירת המסמכים: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'שגיאה בשרת',
	'coll-empty_collection' => 'ספר ריק',
	'coll-revision' => 'גרסה: $1',
	'coll-save_collection_title' => 'שמירת ושיתוף הספר',
	'coll-save_collection_text' => 'בחרו מקום לאיחסון הספר שלכם:',
	'coll-login_to_save' => 'אם ברצונכם לשמור ספרים לשימוש מאוחר יותר, אנא [[Special:UserLogin|היכנסו לחשבון או צרו חשבון]].',
	'coll-personal_collection_label' => 'ספר פרטי:',
	'coll-community_collection_label' => 'ספר קהילתי:',
	'coll-save_collection' => 'שמירת הספר',
	'coll-save_category' => 'כל הספרים השמורים מתווספים לקטגוריה [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-collections}}]].',
	'coll-overwrite_title' => 'הדף כבר קיים.
האם לדרוס אותו?',
	'coll-overwrite_text' => 'דף בשם [[:$1]] כבר קיים.
האם ברצונכם להחליף אותו עם הספר שלכם?',
	'coll-yes' => 'כן',
	'coll-no' => 'לא',
	'coll-load_overwrite_text' => 'כבר יש לכם מספר דפים בספר שלכם.
האם ברצונכם לדרוס את הספר הנוכחי שלכם, להוסיף את התוכן החדש או לבטל את פתיחת הספר הזה?',
	'coll-overwrite' => 'דריסה',
	'coll-append' => 'הוספת התוכן',
	'coll-cancel' => 'ביטול',
	'coll-update' => 'עדכון',
	'coll-limit_exceeded_title' => 'הספר גדול מדי',
	'coll-limit_exceeded_text' => 'הספר שלכם גדול מדי.
לא ניתן להוסיף דפים נוספים.',
	'coll-rendering_title' => 'ביצירה',
	'coll-rendering_text' => '<p><strong>אנא המתינו בעת יצירת המסמך.</strong></p>

<p><strong>התקדמות התהליך:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>הדפדפן אמור לבצע ריענון אוטומטי לדף זה כל מספר שניות.
אם זה לא עובד, אנא לחצו על כפתור הריענון בדפדפן שלכם.</p>',
	'coll-rendering_status' => '<strong>מצב:</strong> $1',
	'coll-rendering_article' => '(דף תוכן: $1)',
	'coll-rendering_page' => '(דף: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/הכנת טקסט של מידע על הדף',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/הכנת טקסט של מידע על האוסף',
	'coll-rendering_finished_title' => 'היצירה הסתיימה',
	'coll-rendering_finished_text' => '<strong>קובץ המסמך נוצר.</strong>
<strong>[$1 הורדת הקובץ]</strong> למחשבכם.

הערות:
* אינכם מרוצים מהפלט? ב[[{{MediaWiki:Coll-helppage}}|דף העזרה על ספרים]] תוכלו למצוא אפשרויות לשיפורו.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/הכנת טקסט של מידע על הדף',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/הכנסת טקסט של מידע על הדף',
	'coll-notfound_title' => 'הספר לא נמצא',
	'coll-notfound_text' => 'לא ניתן למצוא את דף הספר.',
	'coll-download_notfound_title' => 'הקובץ לא נמצא',
	'coll-download_notfound_text' => 'הקובץ שאתם מנסים להוריד לא נמצא: אולי הוא נמחק ויש ליצור אותו מחדש.',
	'coll-download_failed_title' => 'שגיאה במהלך ההורדה',
	'coll-download_failed_text' => 'ארעה שגיאה בעת הורדת הקובץ: $1',
	'coll-is_cached' => '<ul><li>גרסה שמורה של המסמך נמצאה, כך שאין צורך ביצירתו. <a href="$1">יצירה מחדש.</a></li></ul>',
	'coll-excluded-templates' => '* תבניות בקטגוריה [[:Category:$1|$1]] אינן כלולות.',
	'coll-blacklisted-templates' => '* תבניות ברשימה השחורה [[:$1]] אינן כלולות.',
	'coll-return_to_collection' => '<p>חזרה ל<a href="$1">$2</a></p>',
	'coll-book_title' => 'הזמנה כספר מודפס',
	'coll-book_text' => 'קבלת ספר מודפס משירות ההדפסה לפי דרישה.',
	'coll-order_from_pp' => 'הצגה מקדימה באמצעות $1',
	'coll-about_pp' => 'אודות $1',
	'coll-invalid_podpartner_title' => 'שירות שגוי',
	'coll-invalid_podpartner_msg' => 'שירות ההדפסה לפי דרישה שהוזן שגוי.
אנא צרו קשר עם מנהל של מדיה־ויקי.',
	'coll-license' => 'רישיון',
	'coll-return_to' => 'חזרה ל[[:$1]]',
	'coll-more_info' => 'הצגת מידע נוסף',
	'coll-hide_info' => 'הסתרת מידע',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/מידע על הזמנה ב-PediaPress',
	'coll-suggest_title' => 'דפים מוצעים לספר',
	'coll-suggest_intro_text' => 'ההצעות מבוססות על האוסף הנוכחי של דפי הוויקי בתוך הספר.
הרשימה תעודכן בעת הלחיצה על כפתורי ההוספה או ההסרה.',
	'coll-suggested_articles' => 'הצעות',
	'coll-suggest_reset_bans' => 'איפוס',
	'coll-suggest_reset_bans_tooltip' => 'הצגת הצעות שהוסרו בעבר',
	'coll-suggest_add_selected' => 'הוספת הדפים שנבחרו',
	'coll-suggest_ban_selected' => 'הסרת הדפים שנבחרו',
	'coll-suggest_your_book' => 'הספר שלכם',
	'coll-suggest_show' => 'הצגה',
	'coll-suggest_ban_tooltip' => 'הסרת דף זה מרשימת ההצעות',
	'coll-suggest_article_ban' => 'הדף <strong>$1</strong> הוסר מרשימת ההצעות ($2).',
	'coll-suggest_article_add' => 'הדף <strong>$1</strong> נוסף לספר שלכם ($2).',
	'coll-suggest_article_remove' => 'הדף <strong>$1</strong> הוסר מהספר שלכם ($2).',
	'coll-suggest_undo_tooltip' => 'ביטול פעולה זו',
	'coll-suggest_undo' => 'ביטול',
	'coll-load_local_book' => 'נא ללחוץ על אישור כדי להמשיך עם הספר שלך %TITLE% המכיל %NUMPAGES% עמודי ויקי. יש ללחוץ על ביטול כדי למחוק אותו ולהתחיל עם ספר ריק.',
	'right-collectionsaveasuserpage' => 'שמירת ספרים כדפי משתמש',
	'right-collectionsaveascommunitypage' => 'שמירת ספרים כדפי קהילה',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'coll-desc' => '[[Special:Collection|पन्ने जमा करें]], पीडीएफ बनायें',
	'coll-collection' => 'कलेक्शन',
	'coll-collections' => 'कलेक्शन',
	'coll-download_title' => 'कलेक्शन पीडिएफ डाउनलोड करें',
	'coll-download_text' => 'आपके कलेक्शनका पीडिएफ अवतरण डाउनलोड करने के लिये, दिये हुए बटन पर क्लिक करें।',
	'coll-remove' => 'हटायें',
	'coll-move_to_top' => 'सबसे उपर भेजें',
	'coll-move_up' => 'उपर भेजें',
	'coll-move_down' => 'नीचे भेजें',
	'coll-move_to_bottom' => 'सबसे नीचे भेजें',
	'coll-title' => 'शीर्षक:',
	'coll-subtitle' => 'उपशीर्षक:',
	'coll-contents' => 'अनुक्रम',
	'coll-create_chapter' => 'नया अध्याय बनायें',
	'coll-sort_alphabetically' => 'अक्षरोंके अनुसार पन्ने लगायें',
	'coll-rename' => 'नाम बदलें',
	'coll-new_chapter' => 'नये अध्याय के लिये नाम दें',
	'coll-rename_chapter' => 'नये अध्याय के लिये नाम दें',
	'coll-no_such_category' => 'ऐसी श्रेणी नहीं हैं',
	'coll-notitle_title' => 'इस पन्ने का शीर्षक निश्चित नहीं कर पा रहें हैं।',
	'coll-post_failed_title' => 'POST माँग पूरी नहीं हुई हैं',
	'coll-post_failed_msg' => 'POST माँग पूरी नहीं हुई हैं ($2)',
	'coll-error_reponse' => 'सर्वरसे गलत रिस्पॉन्स मिला हैं',
	'coll-empty_collection' => 'खाली कलेक्शन',
	'coll-revision' => 'अवतरण: $1',
	'coll-save_collection_title' => 'कलेक्शन संजोयें',
	'coll-save_collection_text' => 'इस कलेक्शनको फिरसे इस्तेमाल में लाने के लिये इसे एक नाम दें और इसका प्रकार चुनकर इसे संजोयें:',
	'coll-login_to_save' => 'अगर आप बादमें इस्तेमाल के लिये यह कलेक्शन संजोना चाहतें हैं, तो कृपया [[Special:UserLogin|लॉग इन करें या नया खाता खोलें]]।',
	'coll-personal_collection_label' => 'वैयक्तिक कलेक्शन:',
	'coll-community_collection_label' => 'सामूहिक कलेक्शन:',
	'coll-save_collection' => 'कलेक्शन संजोयें',
	'coll-overwrite_title' => 'पन्ना अस्तित्व में हैं। पुनर्लेखन करें?',
	'coll-overwrite_text' => '[[:$1]] नामका पन्ना पहले से अस्तित्वमें हैं।
क्या आप उसपर अपना कलेक्शन पुनर्लिखना चाहतें हैं?',
	'coll-yes' => 'हां',
	'coll-no' => 'नहीं',
	'coll-load_overwrite_text' => 'आपके कलेक्शनमें पहले से कुछ पन्ने हैं।
क्या आप आपका कलेक्शन दुबारा बनाना चाहतें हैं, या यह पन्ने बढाना चाहतें हैं?',
	'coll-overwrite' => 'पुनर्लेखन करें',
	'coll-append' => 'बढायें',
	'coll-cancel' => 'रद्द करें',
	'coll-limit_exceeded_title' => 'कलेक्शन बहुत बडा हुआ हैं',
	'coll-limit_exceeded_text' => 'आपका कलेक्शन बहुत बडा हुआ हैं।
और पन्ने बढा नहीं सकतें।',
	'coll-notfound_title' => 'कलेक्शन मिला नहीं',
	'coll-notfound_text' => 'कलेक्शन पन्ना मिला नहीं।',
	'coll-return_to_collection' => '<p><a href="$1">$2</a></p> पर वापस जायें',
	'coll-book_title' => 'छपा हुआ अवतरण माँगे',
	'coll-book_text' => 'आप नीचे दिये हुए प्रिन्ट-ऑन-डिमांड पार्टनर्ससे आपके कलेक्शनमें उपलब्ध पन्नोंका छपा हुआ अवतरण पा सकतें हैं:',
	'coll-order_from_pp' => '$1 से बुक मंगायें',
	'coll-about_pp' => '$1 के बारे में',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'coll-cancel' => 'Kanselahon',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author Ex13
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'coll-desc' => '[[Special:Book|Stvori zbirku]]',
	'coll-book_creator_intro' => "<big>S ''kreatorom knjiga'' možete stvoriti knjigu koja se sastoji od proizvoljnih wiki stranica. Možete izvesti odnosno snimiti svoju knjigu u različitim formatima (npr. PDF ili ODF) ili naručiti tiskani primjerak.</big>",
	'coll-manage_your_book' => 'Upravljanje Vašom zbirkom',
	'coll-book_creator_help' => 'Pogledajte [[{{MediaWiki:Coll-helppage}}|stranicu za pomoć o knjigama]] za više informacija.',
	'coll-start_book_creator' => 'Pokrenite uređivanje wikiknjige',
	'coll-book_creator_continue' => 'Nastavi s uporabom uređivača zbirke',
	'coll-book_creator_disable_text' => "''Uređivač zbirke'' će biti onemogućen, a zbirka na kojoj radite bit će uklonjena.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst načina zbirke',
	'coll-collection' => 'Zbirka',
	'coll-collections' => 'Zbirke',
	'coll-exclusion_category_title' => 'Izuzmi u ispisu',
	'coll-print_template_prefix' => 'Ispiši',
	'coll-print_template_pattern' => '$1/Tiskaj',
	'coll-unknown_subpage_title' => 'Nepoznata podstranica',
	'coll-unknown_subpage_text' => 'Ova podstranica [[Special:Book|zbirke]] ne postoji',
	'coll-couldnotaddarticle_title' => 'Nije bilo moguće dodati wiki stranicu',
	'coll-couldnotaddarticle_msg' => 'Wiki stranica nije mogla biti dodana.',
	'coll-couldnotremovearticle_title' => 'Nije bilo moguće ukloniti wiki stranicu',
	'coll-couldnotremovearticle_msg' => 'Wiki stranica ne može biti uklonjena.',
	'coll-noscript_text' => '<h1>Potreban je JavaScript!</h1>
<strong>Vaš preglednik nema podršku za JavaScript ili je isključena. Ova stranica neće raditi ispravno, ako JavaScript nije omogućen.</strong>',
	'coll-savedbook_template' => 'snimljena_zbirka',
	'coll-your_book' => 'Vaša zbirka',
	'coll-download_title' => 'Preuzmi',
	'coll-download_text' => 'Za preuzimanje vaše knjige odaberite format i kliknite na gumb.',
	'coll-download_as_text' => 'Za preuzimanje vaše knjige u $1 formatu kliknite na gumb.',
	'coll-download' => 'Preuzmi',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ukloni',
	'coll-show' => 'Pokaži',
	'coll-move_to_top' => 'Premjesti na vrh',
	'coll-move_up' => 'Premjesti gore',
	'coll-move_down' => 'Premjesti dolje',
	'coll-move_to_bottom' => 'Premjesti na dno',
	'coll-title' => 'Naslov:',
	'coll-subtitle' => 'Podnaslov:',
	'coll-contents' => 'Sadržaj',
	'coll-drag_and_drop' => 'Koristite "povuci i stavi" za preslagivanje wiki stranica i poglavlja.',
	'coll-create_chapter' => 'Napravi poglavlje',
	'coll-sort_alphabetically' => 'Rasporedi abecedno',
	'coll-rename' => 'Preimenuj',
	'coll-new_chapter' => 'Upišite ime za novo poglavlje',
	'coll-rename_chapter' => 'Upišite novo ime za poglavlje',
	'coll-no_such_category' => 'Nema takve kategorije',
	'coll-notitle_title' => 'Naslov stranice nije mogao biti određen',
	'coll-post_failed_title' => 'POST zahtjev je neuspješan',
	'coll-post_failed_msg' => 'POST zahtjev za $1 je neuspješan ($2).',
	'coll-mwserve_failed_title' => 'Greška na serveru za izvođenje zahtjeva',
	'coll-mwserve_failed_msg' => 'Dogodila se greška na serveru za izvođenje zahtijeva: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Greška u odgovoru sa servera',
	'coll-empty_collection' => 'Prazna zbirka',
	'coll-revision' => 'Izmjena: $1',
	'coll-save_collection_title' => 'Spremi i dijeli svoju zbirku',
	'coll-save_collection_text' => 'Odaberite lokaciju:',
	'coll-login_to_save' => 'Ako želite spremiti zbirke za kasniju uporabu, molimo [[Special:UserLogin|prijavite se ili napravite suradnički račun]].',
	'coll-personal_collection_label' => 'Osobna zbirka:',
	'coll-community_collection_label' => 'Zajednička zbirka:',
	'coll-save_collection' => 'Spremi zbirku',
	'coll-save_category' => 'Sve snimljene knjige dodane su u kategoriju [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Stranica postoji.
Prepisati preko?',
	'coll-overwrite_text' => 'Stranica s nazivom [[:$1]] već postoji.
Želite li da bude zamijenjena s vašom zbirkom?',
	'coll-yes' => 'Da',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Već imate neke stranice u svojoj zbirci.
Želite li prepisati svoju trenutačnu zbirku novoj, samo dodati novi sadržaj ili zaustaviti učitavanje ove zbirke?',
	'coll-overwrite' => 'Prepisati preko',
	'coll-append' => 'Nadodaj',
	'coll-cancel' => 'Zaustavi',
	'coll-update' => 'Ažuriranje',
	'coll-limit_exceeded_title' => 'Knjiga je prevelika',
	'coll-limit_exceeded_text' => 'Vaša zbirka je prevelika.
Nove stranice ne mogu biti dodane.',
	'coll-rendering_title' => 'Izvođenje',
	'coll-rendering_text' => '<p><strong>Molimo pričekajte dok se dokument radi.</strong></p>

<p><strong>Razvoj:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Ova stranice bi se trebala automatski osvježiti svakih par sekundi.
Ako ovo ne radi, molimo pritisnite tipku za osvježavanje u svom pregledniku.</p>',
	'coll-rendering_status' => '<strong>Stanje:</strong> $1',
	'coll-rendering_article' => '(wiki stranica: $1)',
	'coll-rendering_page' => '(stranica: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Info tekst stranice za stvaranje knjige',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Info tekst stranice za stvaranje zbirki',
	'coll-rendering_finished_title' => 'Izvođenje završeno',
	'coll-rendering_finished_text' => '<strong>Datoteka dokumenta je stvorena.</strong>
<strong>[$1 Preuzmite datoteku]</strong> na svoje računalo.

Napomene:
* Niste zadovoljni dobivenim rezultatom? Pogledajte [[{{MediaWiki:Coll-helppage}}|
stranicu za pomoć o zbirkama]] za mogućnosti njegovog poboljšanja.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Info tekst stranice za stvaranje knjige',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Info tekst stranice za stvaranje zbirki',
	'coll-notfound_title' => 'Zbirka nije nađena',
	'coll-notfound_text' => 'Ne mogu pronaći stranicu zbirke.',
	'coll-download_notfound_title' => 'Datoteka nije pronađena',
	'coll-download_notfound_text' => 'Datoteka koju pokušavate preuzeti ne postoji: možda je obrisana i treba biti obnovljena.',
	'coll-download_failed_title' => 'Pogreška tijekom preuzimanja',
	'coll-download_failed_text' => 'Došlo je do pogreške pri preuzimanju datoteke: $1',
	'coll-is_cached' => '<ul><li>Pronađena je verzija datoteke u pričuvnoj memoriji, stoga izvođenje datoteke nije potrebno.
<a href="$1">Zahtijevaj ponovno izvođenje.</a></li></ul>',
	'coll-excluded-templates' => '* Predlošci u kategoriji [[:Category:$1|$1]] su ostali isključeni.',
	'coll-blacklisted-templates' => '* Predlošci na crnoj listi [[:$1]] su ostali isključeni.',
	'coll-return_to_collection' => '<p>Vrati se na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Naručite kao ispisanu zbirku',
	'coll-book_text' => 'Naručiti ispisanu zbirku od sljedećih partnera za ispisivanje na zahtjev (POD):',
	'coll-order_from_pp' => 'Pregledaj s $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Neispravan POD partner',
	'coll-invalid_podpartner_msg' => 'Ponuđeni POD partner nije valjan.
Molimo kontaktirajte svog MediaWiki administratora.',
	'coll-license' => 'Licencija',
	'coll-return_to' => 'Vrati se na [[:$1]]',
	'coll-more_info' => 'Prikaži više informacija',
	'coll-hide_info' => 'Sakrij informacije',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/informacije o narudžbi PediaPressa',
	'coll-suggest_title' => 'Predložene stranice za vašu knjigu',
	'coll-suggest_intro_text' => 'Prijedlozi se temelje na trenutnom skupu wiki stranica u vašoj knjizi.
Popis se ažurira svaki put kada dodate ili uklonite neku stranicu.',
	'coll-suggested_articles' => 'Prijedlozi',
	'coll-suggest_reset_bans' => 'poništi',
	'coll-suggest_reset_bans_tooltip' => 'Pokaži ranije uklonjene prijedloge',
	'coll-suggest_add_selected' => 'Dodaj odabrane stranice',
	'coll-suggest_ban_selected' => 'Ukloni odabrane stranice',
	'coll-suggest_your_book' => 'Vaša zbirka',
	'coll-suggest_show' => 'prikaži',
	'coll-suggest_ban_tooltip' => 'Ukloni ovu stranicu s popisa prijedloga',
	'coll-suggest_article_ban' => 'Stranica <strong>$1</strong> uklonjena je iz popisa prijedloga ($2).',
	'coll-suggest_article_add' => 'Stranica <strong>$1</strong> dodana je u vašu knjigu ($2).',
	'coll-suggest_article_remove' => 'Stranica <strong>$1</strong> uklonjena je iz vaše knjige ($2).',
	'coll-suggest_undo_tooltip' => 'Vrati zadnju akciju',
	'coll-suggest_undo' => 'vrati',
	'coll-load_local_book' => 'Kliknite OK za nastavak svoje knjige %NASLOV% koja sadrži %NUMPAGES% wiki stranica. Kliknite Odustani da biste ju izbrisali i počeli s praznom knjigom.',
	'right-collectionsaveasuserpage' => 'Spremi zbirke kao suradničku stranicu',
	'right-collectionsaveascommunitypage' => 'Spremi zbirke kao stranicu zajednice',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'coll-desc' => '[[Special:Book|Knihi wutworić]]',
	'coll-book_creator_intro' => "<big>Z ''knižnej funkciju'' móžeš knihu wutworić, kotraž wikistrony twojeje wólby wobsahuje. Móžeš knihu do rozdźělnych formatow eksportować (na přikład PDF abo ODF) abo wućišćany eksemplar skazać.</big>",
	'coll-manage_your_book' => 'Twoju knihu zrjadować',
	'coll-book_creator_help' => 'Hlej [[{{MediaWiki:Coll-helppage}}|stronu pomocy wo knihach]] za dalše informacije.',
	'coll-start_book_creator' => 'Knižnu funkciju startować',
	'coll-book_creator_continue' => 'Knižnu funkciju dale wužiwać',
	'coll-book_creator_disable_text' => "''Knižna funkcija'' budźe so znjemóžnjeć a kniha, kotruž wobdźěłuješ, budźe so z twojeho posedźenja wobhladowaka wotstronjeć.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst knižneje funkcije',
	'coll-collection' => 'Kniha',
	'coll-collections' => 'Knihi',
	'coll-exclusion_category_title' => 'Wot ćišćenja wuzamknyć',
	'coll-print_template_prefix' => 'Ćišćeć',
	'coll-print_template_pattern' => '$1/Ćišćeć',
	'coll-unknown_subpage_title' => 'Njeznata podstrona',
	'coll-unknown_subpage_text' => 'Tuta podstrona [[Special:Book|knihi]] njeeksistuje',
	'coll-couldnotaddarticle_title' => 'Nastawk njeda so přidać',
	'coll-couldnotaddarticle_msg' => 'Nastawk njeje so přidać dał.',
	'coll-couldnotremovearticle_title' => 'Nastawk njeda so wotstronić',
	'coll-couldnotremovearticle_msg' => 'Nastawk njeje so wotstronić dał.',
	'coll-noscript_text' => '<h1>JavaScript je trěbny!</h1>
<strong>Twój wobhladowak njepodpěruje JavaScript abo JavaScript je wupinjeny.
Tuta strona njebudźe prawje fungować, doniž JavaScript zmóžnjeny njeje.</strong>',
	'coll-savedbook_template' => 'składowana_kniha',
	'coll-your_book' => 'Twoja kniha',
	'coll-download_title' => 'Sćahnyć',
	'coll-download_text' => 'Zo by swoju knihu sćahnył, wubjer format a klikń na tłóčatko.',
	'coll-download_as_text' => 'Zo by swoju knihu w formaće $1 sćahnył, klikń na tłóčatko.',
	'coll-download' => 'Sćahnyć',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Wotstronić',
	'coll-show' => 'Pokazać',
	'coll-move_to_top' => 'Cyle horje přesunyć',
	'coll-move_up' => 'Horje přesunyć',
	'coll-move_down' => 'Dele přesunyć',
	'coll-move_to_bottom' => 'Cyle dele přesunyć',
	'coll-title' => 'Titul:',
	'coll-subtitle' => 'Podtitul:',
	'coll-contents' => 'Wobsah',
	'coll-drag_and_drop' => 'Přez přesunjenje z myšu móžeš wikijowe strony a kapitle přerjadować',
	'coll-create_chapter' => 'Kapitl wutworić',
	'coll-sort_alphabetically' => 'Alfabetisce sortěrować',
	'coll-rename' => 'Přemjenować',
	'coll-new_chapter' => 'Zapodaj mjeno za nowy kapitl',
	'coll-rename_chapter' => 'Zapodaj nowe mjeno za kapitl',
	'coll-no_such_category' => 'Žana tajka kategorija',
	'coll-notitle_title' => 'Titul strony njeda so zwěsćić.',
	'coll-post_failed_title' => 'Naprašowanje POST njeporadźiło',
	'coll-post_failed_msg' => 'Naprašowanje POST do $1 je so njeporadźiło ($2).',
	'coll-mwserve_failed_title' => 'Zmylk tworjenskeho serwera',
	'coll-mwserve_failed_msg' => 'Zmylk je na serwerje tworjenja wustupił: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Serwer je zmylk zdźělił',
	'coll-empty_collection' => 'Prózdna kniha',
	'coll-revision' => 'Wersija: $1',
	'coll-save_collection_title' => 'Twoju knihu składować a dźělić',
	'coll-save_collection_text' => 'Wubjer městno:',
	'coll-login_to_save' => 'Jeli chceš knihi za pozdźiše wužiwanje składować, [[Special:UserLogin|přizjew so abo wutwor konto]].',
	'coll-personal_collection_label' => 'Wosobinska kniha:',
	'coll-community_collection_label' => 'Kniha zhromadźenstwa:',
	'coll-save_collection' => 'Knihu składować',
	'coll-save_category' => 'Wšě składowane knihi přidawaja so kategoriji [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Strona eksistuje. Přepisać?',
	'coll-overwrite_text' => 'Strona z mjenom [[:$1]] hižo eksistuje.
Chceš ju přez swoju zběrku narunać?',
	'coll-yes' => 'Haj',
	'coll-no' => 'Ně',
	'coll-load_overwrite_text' => 'Maš hižo někotre strony w swojej knize.
Chceš swoju aktualnu knihu přepisać, nowy wobsah přidać abo začitanje tuteje knihi přetorhnyć?',
	'coll-overwrite' => 'Přepisać',
	'coll-append' => 'Připójsnyć',
	'coll-cancel' => 'Přetorhnyć',
	'coll-update' => 'Aktualizować',
	'coll-limit_exceeded_title' => 'Kniha přewulka',
	'coll-limit_exceeded_text' => 'Twoja kniha je přewulka.
Njadadźa so hižo žane strony přidać.',
	'coll-rendering_title' => 'Tworjenje',
	'coll-rendering_text' => '<p><strong>Prošu počakń trochu, doniž dokument njeje so wutworjeny.</strong></p>

<p><strong>Postup:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Tuta strona dyrbjała so awtomatisce kóžde por sekundow aktualizować.
Jeli so to njestawa, klikń prošu na tłóčatko "Znowa" swojeho wobhladowaka.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikistrona: $1)',
	'coll-rendering_page' => '(strona: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rysowanje infoteksta strony',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Rysowanje infoteksta zběrki',
	'coll-rendering_finished_title' => 'Tworjenje dokónčene',
	'coll-rendering_finished_text' => '<strong>Dokumentowa dataja je so wuspěšnje wutworiła.</strong>
<strong>[$1 Dataju na twój ličak sćahnyć]</strong>.

Přispomnjenka:
* Njejsy spokojny z wudaćom? Hlej [[{{MediaWiki:Coll-helppage}}|stronu pomocy wo zběrkach]] za móžnosće je polěpšić.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informaciski tekst strony rysować',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informaciski tekst zběrki rysować',
	'coll-notfound_title' => 'Kniha njenamakana',
	'coll-notfound_text' => 'Strona knihi njebu namakana.',
	'coll-download_notfound_title' => 'Dataja njenamakana',
	'coll-download_notfound_text' => 'Dataja, kotruž pospytuješ sćahować, njeeksistuje: Snano bu wona wušmórnjena a dyrbi so znowa wutworić.',
	'coll-download_failed_title' => 'Zmylk při sćehnjenju',
	'coll-download_failed_text' => 'Při sćehnjenju dataje je zmylk wustupił: $1',
	'coll-is_cached' => '<ul><li>Pufrowana wersija dokumenta bu namakana, tohodla tworjenje njeje trěbne było. <a href="$1">Znowatworjenje wunuzować.</a></li></ul>',
	'coll-excluded-templates' => '* Předłohi w kategoriji [[:Category:$1|$1]] buchu wuzamknjene.',
	'coll-blacklisted-templates' => '* Předłohi na čornej lisćinje [[:$1]] buchu wuzamknjene.',
	'coll-return_to_collection' => '<p>Wróćo k <a href="$1">$2</a></p>',
	'coll-book_title' => 'Jako wućišćanu knihu skazać',
	'coll-book_text' => 'Wućišćanu knihu wot našeho partnera za ćišćenje na žadanje:',
	'coll-order_from_pp' => 'Přehlad pola $1',
	'coll-about_pp' => 'Wo $1',
	'coll-invalid_podpartner_title' => 'Njepłaćiwy partner za ćišć na žadanje',
	'coll-invalid_podpartner_msg' => 'Podaty partner za ćišć na žadanje je njepłaćiwy.
Skontaktuj prošu swojeho administratora MediaWiki.',
	'coll-license' => 'Licenca',
	'coll-return_to' => 'Wróćo k stronje [[:$1]]',
	'coll-more_info' => 'Dalše informacije pokazać',
	'coll-hide_info' => 'Informacije schować',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress skazanske informacije',
	'coll-suggest_title' => 'Namjetowane strony za twoju knihu',
	'coll-suggest_intro_text' => 'Namjety bazuja na aktualnu sadźbu wikistronow w twojej knize.
Lisćina aktualizuje so, hdyžkuli kliknješ na tłóčatko "přidać" abo "wotstronić".',
	'coll-suggested_articles' => 'Namjety',
	'coll-suggest_reset_bans' => 'wróćo stajić',
	'coll-suggest_reset_bans_tooltip' => 'Prjedy wotstronjene namjety pokazać',
	'coll-suggest_add_selected' => 'Wubrane strony přidać',
	'coll-suggest_ban_selected' => 'Wubrane strony wotstronić',
	'coll-suggest_your_book' => 'Twoja kniha',
	'coll-suggest_show' => 'pokazać',
	'coll-suggest_ban_tooltip' => 'Tutu stronu z lisćiny namjetow wotstronić',
	'coll-suggest_article_ban' => 'Strona <strong>$1</strong> bu z namjetow wotstronjena ($2).',
	'coll-suggest_article_add' => 'Strona <strong>$1</strong> bu twojej knize přidata ($2).',
	'coll-suggest_article_remove' => 'Strona <strong>$1</strong> bu z twojeje knihi wotstronjena ($2).',
	'coll-suggest_undo_tooltip' => 'Tutu akciju cofnyć',
	'coll-suggest_undo' => 'cofnyć',
	'coll-load_local_book' => 'Klikń W porjadku, zo by ze swojej knihu %TITLE% pokročował , kotraž %NUMPAGES% {{PLURAL:%NUMPAGES%|wikistronu|wikistronje|wikistrony|wikistronow}} wobsahuje. Klikń na Přetorhnyć, zo by ju zhašał a startuj z prózdnej knihu.',
	'right-collectionsaveasuserpage' => 'Knihi jako wužiwarsku stronu składować',
	'right-collectionsaveascommunitypage' => 'Knihi jako stronu zhromadźenstwa składować',
);

/** Haitian (Kreyòl ayisyen)
 * @author Boukman
 */
$messages['ht'] = array(
	'coll-suggest_undo_tooltip' => 'Defè aksyon sa a',
	'coll-suggest_undo' => 'Defè',
);

/** Hungarian (Magyar)
 * @author Bdamokos
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'coll-desc' => '[[Special:Book|Könyvek készítése]]',
	'coll-book_creator_intro' => "<big>A ''könyvkészítővel'' összeállíthatsz egy könyvet az általad választott wikilapokból. A könyvet letöltheted különböző formátumokban (például PDF vagy ODF), vagy rendelhetsz egy nyomtatott példányt.</big>",
	'coll-manage_your_book' => 'Könyv kezelése',
	'coll-book_creator_help' => 'Lásd a [[{{MediaWiki:Coll-helppage}}|könyvekről szóló segítséglapot]] további információkért.',
	'coll-start_book_creator' => 'Könyvkészítő indítása',
	'coll-book_creator_continue' => 'A könyvkészítő használatának folytatása',
	'coll-book_creator_disable_text' => "A ''könyvkészítő'' le lesz tiltva, és a könyv amit jelenleg készítesz el lesz távolítva.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Könyvmód szöveg',
	'coll-collection' => 'Könyv',
	'coll-collections' => 'Könyvek',
	'coll-exclusion_category_title' => 'Nyomtatásban kihagyandó',
	'coll-print_template_prefix' => 'Nyomtatott',
	'coll-print_template_pattern' => '$1/nyomtatott',
	'coll-unknown_subpage_title' => 'Ismeretlen allap',
	'coll-unknown_subpage_text' => 'A [[Special:Book|Könyv]]nek nincs ilyen allapja.',
	'coll-couldnotaddarticle_title' => 'Nem lehet hozzáadni a wiki lapot',
	'coll-couldnotaddarticle_msg' => 'A wikilapot nem sikerült hozzáadni.',
	'coll-couldnotremovearticle_title' => 'Nem lehet eltávolítani a wiki lapot',
	'coll-couldnotremovearticle_msg' => 'A wiki lapot nem lehet eltávolítani.',
	'coll-noscript_text' => '<h1>A lap használatához JavaScript szükséges!</h1>
<strong>A böngésződ nem támogatja a JavaScriptet, vagy az ki lett kapcsolva.
Ez az oldal nem fog megfelelően működni, amíg a JavaScript nincs bekapcsolva.</strong>',
	'coll-savedbook_template' => 'elmentett_könyv',
	'coll-your_book' => 'A te könyved',
	'coll-download_title' => 'Letöltés',
	'coll-download_text' => 'A könyved letöltéséhez válaszd ki a formátumot, majd kattints a gombra.',
	'coll-download_as_text' => 'A könyved $1 formátumú változatának letöltéséhez kattints a gombra!',
	'coll-download' => 'Letöltés',
	'coll-format_label' => 'Formátum:',
	'coll-remove' => 'Eltávolítás',
	'coll-show' => 'Mutat',
	'coll-move_to_top' => 'Mozgatás legfelülre',
	'coll-move_up' => 'Mozgatás felfelé',
	'coll-move_down' => 'Mozgatás lefelé',
	'coll-move_to_bottom' => 'Mozgatás legalulra',
	'coll-title' => 'Cím:',
	'coll-subtitle' => 'Alcím:',
	'coll-contents' => 'Tartalomjegyzék',
	'coll-drag_and_drop' => 'Fogd és vidd módszerrel rendezd át a lapok és fejezetek sorrendjét',
	'coll-create_chapter' => 'Fejezet készítése',
	'coll-sort_alphabetically' => 'Rendezés ábécésorrend szerint',
	'coll-rename' => 'Átnevezés',
	'coll-new_chapter' => 'Add meg az új fejezet címét',
	'coll-rename_chapter' => 'Add meg a fejezet új címét',
	'coll-no_such_category' => 'Nincs ilyen kategória',
	'coll-notitle_title' => 'Nem sikerült megállapítani a lap címét.',
	'coll-post_failed_title' => 'A POST kérés nem sikerült',
	'coll-post_failed_msg' => 'A(z) $1 számára küldött POST kérés nem sikerült ($2).',
	'coll-mwserve_failed_title' => 'A renderelő szerver hibát észlelt',
	'coll-mwserve_failed_msg' => 'Hiba történt a renderelő szerveren: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Hibaüzenet érkezett a szervertől',
	'coll-empty_collection' => 'Üres könyv',
	'coll-revision' => 'Változat: $1',
	'coll-save_collection_title' => 'Könyv elmentése és megosztása',
	'coll-save_collection_text' => 'Válassz egy tárolási helyet a könyvednek:',
	'coll-login_to_save' => 'Amennyiben elszeretnéd menteni a könyved későbbi használatra, [[Special:UserLogin|jelentkezz be vagy készíts egy felhasználói fiókot]].',
	'coll-personal_collection_label' => 'Személyes könyv:',
	'coll-community_collection_label' => 'Közösségi könyv:',
	'coll-save_collection' => 'Könyv mentése',
	'coll-save_category' => 'Minden mentett könyv bekerül a(z) [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] kategóriába.',
	'coll-overwrite_title' => 'A lap már létezik.
Felülírjam?',
	'coll-overwrite_text' => 'Már létezik „[[:$1]]” című lap.
Szeretnéd lecserélni a saját könyvedre?',
	'coll-yes' => 'Igen',
	'coll-no' => 'Nem',
	'coll-load_overwrite_text' => 'Már van néhány lap a könyvedben.
Szeretnéd felülírni, az új tartalmat hozzáfűzni könyvhöz vagy abbahagyni a betöltését?',
	'coll-overwrite' => 'Felülírás',
	'coll-append' => 'Hozzáfűzés',
	'coll-cancel' => 'Mégse',
	'coll-update' => 'Frissítés',
	'coll-limit_exceeded_title' => 'A könyv túl nagy',
	'coll-limit_exceeded_text' => 'A könyved túl nagy.
Nem adhatsz hozzá több lapot.',
	'coll-rendering_title' => 'Renderelés',
	'coll-rendering_text' => '<p><strong>Kérlek várj amíg a dokumentum elkészül!</strong></p>

<p><strong>Állapot:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Ez az oldal automatikusan frissül pár másodpercenként.
Ha ez nem történik meg, kérlek nyomd meg a böngésződ frissítés gombját!</p>',
	'coll-rendering_status' => '<strong>Állapot:</strong> $1',
	'coll-rendering_article' => '(lap: $1)',
	'coll-rendering_page' => '(oldal: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Lap információinak renderelése',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Gyűjtemény információinak renderelése',
	'coll-rendering_finished_title' => 'A renderelés befejeződött',
	'coll-rendering_finished_text' => '<strong>A dokumentum elkészült.</strong>
<strong>[$1 Fájl letöltése]</strong> a számítógépedre.

Megjegyzés:
* Nem vagy elégedett az eredménnyel? Lásd a  [[{{MediaWiki:Coll-helppage}}|könyvekről szóló segítség oldalt]] a javítási lehetőségekről.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Lapinformációk renderelése',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Gyűjtemény információinak renderelése',
	'coll-notfound_title' => 'A könyv nem található',
	'coll-notfound_text' => 'A könyvoldal nem található.',
	'coll-download_notfound_title' => 'A fájl nem található',
	'coll-download_notfound_text' => 'A fájl, amit megpróbáltál letölteni, nem létezik. Valószínűleg törölve lett, így újra el kell készíteni.',
	'coll-download_failed_title' => 'Hiba a letöltés közben',
	'coll-download_failed_text' => 'Hiba történt a fájl letöltése közben: $1',
	'coll-is_cached' => '<ul><li>Sikerült megtalálni a dokumentum egy gyorsítótárazott változatát, így nem kellett újra elkészíteni.<a href="$1">Mindenképpen készítse el újra.</a></li></ul>',
	'coll-excluded-templates' => 'A(z) [[:Category:$1|$1]] kategóriában lévő sablonok figyelmen kívül lettek hagyva.',
	'coll-blacklisted-templates' => '* A(z) [[:$1]] feketelistán található sablonok figyelmen kívül lettek hagyva.',
	'coll-return_to_collection' => '<p>Visszatérés ide: <a href="$1">$2</a></p>',
	'coll-book_title' => 'Megrendelés nyomtatott könyvként',
	'coll-book_text' => 'Nyomtatott könyv rendelése a kérésre nyomtató partnerünktől:',
	'coll-order_from_pp' => 'Előnézet: $1',
	'coll-about_pp' => 'A $1ről',
	'coll-invalid_podpartner_title' => 'Érvénytelen nyomdai partner',
	'coll-invalid_podpartner_msg' => 'A megadott nyomdai partner érvénytelen.
Kérlek lépj kapcsolatba a MediaWiki adminisztrátorával.',
	'coll-license' => 'Licenc',
	'coll-return_to' => 'Visszatérés a(z) [[:$1]] laphoz',
	'coll-more_info' => 'További információk megjelenítése',
	'coll-hide_info' => 'További információk elrejtése',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress rendelési információk',
	'coll-suggest_title' => 'Javasolt lapok a könyvedbe',
	'coll-suggest_intro_text' => 'A javaslatok jelenleg a könyvedben szereplő wikilapokon alapulnak.
A lista minden alkalommal frissül, amikor a „hozzáadás” vagy „eltávolítás” gombra kattintasz.',
	'coll-suggested_articles' => 'Javaslatok',
	'coll-suggest_reset_bans' => 'alaphelyzet',
	'coll-suggest_reset_bans_tooltip' => 'Előzőleg eltávolított javaslatok mutatása',
	'coll-suggest_add_selected' => 'Kiválasztott lapok hozzáadása',
	'coll-suggest_ban_selected' => 'Kijelölt lapok eltávolítása',
	'coll-suggest_your_book' => 'A könyved',
	'coll-suggest_show' => 'mutat',
	'coll-suggest_ban_tooltip' => 'Távolítsd el ezt az oldalt a javaslatok listájáról',
	'coll-suggest_article_ban' => 'A(z) <strong>$1</strong> lap eltávolítva a javaslatok listájáról ($2).',
	'coll-suggest_article_add' => 'A(z) <strong>$1</strong> lap hozzáadva a könyvedhez ($2).',
	'coll-suggest_article_remove' => 'A(z) <strong>$1</strong> lap eltávolítva a könyvedből ($2).',
	'coll-suggest_undo_tooltip' => 'Művelet visszavonása',
	'coll-suggest_undo' => 'visszavonás',
	'coll-load_local_book' => 'Kattints az „OK” gombra a(z) %TITLE% című könyved folytatásához, ami %NUMPAGES% wikilapot tartalmaz. Kattints a „Mégse” gombra a törléséhez, és kezdéshez egy üres könyvvel.',
	'right-collectionsaveasuserpage' => 'Könyvek mentése mint felhasználói lap',
	'right-collectionsaveascommunitypage' => 'Könyvek mentése közösségi lapként',
);

/** Armenian (Հայերեն)
 * @author Chaojoker
 * @author Teak
 */
$messages['hy'] = array(
	'coll-desc' => '[[Special:Book|Ստեղծել գրքեր]]',
	'coll-collection' => 'Գիրք',
	'coll-collections' => 'Գրքեր',
	'coll-exclusion_category_title' => 'Չընդգրկել տպագրման մեջ',
	'coll-print_template_prefix' => 'Տպման',
	'coll-print_template_pattern' => '$1/Տպման',
	'coll-unknown_subpage_title' => 'Անհայտ ենթաէջ',
	'coll-unknown_subpage_text' => '[[Special:Book|Գրքի]] այս ենթաէջը գոյություն չունի',
	'coll-noscript_text' => '<h1>Պահանջո՜ւմ է JavaScript։</h1>
<strong>Ձեր զննարկիչը չունի JavaScript հնարավորություն կամ JavaScript-ը անջատած է։
Այս էջը ճիշտ չի գործի, եթե JavaScript-ը միացված չէ։</strong>',
	'coll-savedbook_template' => 'պահպանված_գիրք',
	'coll-your_book' => 'Ձեր գիրքը',
	'coll-download_title' => 'Քաշել',
	'coll-download_text' => 'Որևէ տարբերակ քաշելու համար ընտրեք ֆորմատը և սեղմեք կոճակը։',
	'coll-download_as_text' => '$1 ֆորմատով տարբերակը քաշելու համար սեղմեք կոճակը։',
	'coll-download' => 'Քաշել',
	'coll-format_label' => 'Ֆորմատ.',
	'coll-remove' => 'Ջնջել',
	'coll-show' => 'Ցույց տալ',
	'coll-move_to_top' => 'Տեղափոխել ամենավերև',
	'coll-move_up' => 'Տեղափոխել վերև',
	'coll-move_down' => 'Տեղափոխել ներքև',
	'coll-move_to_bottom' => 'Տեղափոխել ամենատակը',
	'coll-title' => 'Վերնագիր.',
	'coll-subtitle' => 'Ենթավերնագիր.',
	'coll-contents' => 'Բովանդակություն',
	'coll-drag_and_drop' => 'Վիքի էջերը և գլուխները վերադասավորելու համար քաշեք-տարեք մկնիկով',
	'coll-create_chapter' => 'Ստեղծել նոր գլուխ',
	'coll-sort_alphabetically' => 'Դասավորել այբուբենով',
	'coll-rename' => 'Վերանվանել',
	'coll-new_chapter' => 'Մուտքագրեք նոր գլխի վերնագիրը',
	'coll-rename_chapter' => 'Մուտքագրեք գլխի նոր վերնագիրը',
	'coll-no_such_category' => 'Այդպիսի կատեգորիա չկա',
	'coll-notitle_title' => 'Էջի անվանումը հնարավոր չէ որոշել։',
	'coll-post_failed_title' => 'POST հայցումը ձախողվեց',
	'coll-post_failed_msg' => 'POST հայցումը $1-ին ձախողվեց ($2)։',
	'coll-mwserve_failed_title' => 'Ստեղծման սերվերի սխալ',
	'coll-mwserve_failed_msg' => 'Ստեղծման սերվերի վրա սխալ է տեղի ունեցել. <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Սխալ պատասխան սերվերից',
	'coll-empty_collection' => 'Դատարկ գիրք',
	'coll-revision' => 'Տարբերակ. $1',
	'coll-save_collection_title' => 'Պահպանել գիրքը և կիսել ուրիշների հետ',
	'coll-save_collection_text' => 'Ընտրեք ձեր գրքի պահպանման վայրը.',
	'coll-login_to_save' => 'Եթե դուք ուզում եք պահպանել գիրքը հետագա օգտագործման համար, ապապ խնդրում ենք [[Special:UserLogin|մտնել համակարգ կամ գրանցվել]]։',
	'coll-personal_collection_label' => 'Անձնական գիրք.',
	'coll-community_collection_label' => 'Համայնքի գիրք.',
	'coll-save_collection' => 'Պահպանել գիրքը',
	'coll-save_category' => 'Բոլոր գրքերը պահպանված են [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] կատեգորիայում։',
	'coll-overwrite_title' => 'Այդպիսի էջ գոյություն ունի։
Վերգրե՞լ։',
	'coll-overwrite_text' => '[[:$1]] էջը արդեն գոյություն ունի։
Ցանկանո՞ւմ եք այն փոխարինել ձեր գրքով։',
	'coll-yes' => 'Այո',
	'coll-no' => 'Ոչ',
	'coll-load_overwrite_text' => 'Դուք արդեն ունեք որոշ էջեր ձեր գրքում։
Ցանկանում եք վերգրե՞լ ընթացիք գիրքը, ավելացնե՞լ նոր նյութը, թե բեկանե՞լ գրքի բեռնումը։',
	'coll-overwrite' => 'Վերգրել',
	'coll-append' => 'Ավելացնել',
	'coll-cancel' => 'Բեկանել',
	'coll-update' => 'Թարմացնել',
	'coll-limit_exceeded_title' => 'Գիրքը շատ մեծ է',
	'coll-limit_exceeded_text' => 'Ձեր գիրքը շատ մեծ է։
Նոր էջեր չեն կարող ավելացվել։',
	'coll-rendering_title' => 'Ստեղծում',
	'coll-rendering_text' => '<p><strong>Խնդրում ենք սպասել մինչև նիշքը ստեղծվում է։</strong></p>

<p><strong>Ընթացքը.</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Այս էջը պետք է ավտոմատիկ թարմացվի վայրկյանում մի քանի անգամ։
Եթե դա տեղի չի ունենում, ապա խնդրում ենք սեղմել ձեր զննարկիչի «թարմացնել» կոճակը։</p>',
	'coll-rendering_status' => '<strong>Կարգավիճակ.</strong> $1',
	'coll-rendering_article' => '(վիքի էջ. $1)',
	'coll-rendering_page' => '(էջ. $1)',
	'coll-rendering_finished_title' => 'Ստեղծումն ավարտված է',
	'coll-rendering_finished_text' => '<strong>Նիշքը ստեղծված է։</strong>
<strong>[$1 Քաշել նիշքը]</strong> ձեր համակարգչի մեջ։

Նշում.
* Բավարարված չե՞ք արդյունքով։ Տես [[{{MediaWiki:Coll-helppage}}|գրքերի մասին օգնության էջը]] այն լավացնելու հնարավորությունների համար։',
	'coll-notfound_title' => 'Գիրքը չգտնվեց',
	'coll-notfound_text' => 'Հնարավոր չէ գտնել գրքի էջը։',
	'coll-is_cached' => '<ul><li>Այս նիշքի պատճենը կա հիշապահեստում (քեշում), ուստի ստեղծում չի պահանջվում։ <a href="$1">Հարկադրել վերստեղծում։</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]] կատեգորիայի կաղապարները չեն ընդգրկվել։',
	'coll-blacklisted-templates' => '* [[:$1]] սև ցուցակի կաղապարները չեն ընդգրկվել։',
	'coll-return_to_collection' => '<p>Վերադառնալ <a href="$1">$2</a></p>',
	'coll-book_title' => 'Պատվիրել որպես տպագիր գիրք',
	'coll-book_text' => 'Ստանալ տպագիր գիրքը մեր գործակցից.',
	'coll-order_from_pp' => 'Պատվիրել գիրքը $1-ից',
	'coll-about_pp' => '$1-ի մասին',
	'coll-invalid_podpartner_title' => 'Չգործող POD գործընկեր',
	'coll-invalid_podpartner_msg' => 'Առաջարկված POD գործընկերը չի գործում։
Խնդրում ենք կապնվել ձեր MediaWiki ադմինիստրատորի հետ։',
	'coll-license' => 'Արտոնագիր',
	'coll-return_to' => 'Վերադառնալ [[:$1]]',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'coll-desc' => '[[Special:Book|Crear libros]]',
	'coll-book_creator_intro' => "<big>Con le ''creator de libros'' tu pote crear un libro continente paginas wiki de tu preferentia. Tu pote exportar le libro in differente formatos (per examplo PDF o ODF) o ordinar un copia imprimite.</big>",
	'coll-manage_your_book' => 'Gerer tu libro',
	'coll-book_creator_help' => 'Vide [[{{MediaWiki:Coll-helppage}}|le pagina de adjuta super libros]] pro plus informationes.',
	'coll-start_book_creator' => 'Comenciar le creator de libros',
	'coll-book_creator_continue' => 'Continuar a usar le creator de libros',
	'coll-book_creator_disable_text' => "Le ''creator de libros'' essera disactivate e le libro al qual tu labora essera removite.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Texto del creator de libros',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libros',
	'coll-exclusion_category_title' => 'Excluder del impression',
	'coll-print_template_prefix' => 'Imprimer',
	'coll-print_template_pattern' => '$1/Imprimer',
	'coll-unknown_subpage_title' => 'Subpagina incognite',
	'coll-unknown_subpage_text' => 'Iste subpagina de [[Special:Book|Libro]] non existe',
	'coll-couldnotaddarticle_title' => 'Non poteva adder pagina wiki',
	'coll-couldnotaddarticle_msg' => 'Le pagina wiki non poteva esser addite.',
	'coll-couldnotremovearticle_title' => 'Non poteva remover pagina wiki',
	'coll-couldnotremovearticle_msg' => 'Le pagina wiki non poteva esser removite.',
	'coll-noscript_text' => '<h1>JavaScript es requirite!</h1>
<strong>Tu navigator non supporta JavaScript o JavaScript ha essite disactivate.
Iste pagina non functionara correctemente si JavaScript non es activate.</strong>',
	'coll-savedbook_template' => 'libro_immagazinate',
	'coll-your_book' => 'Tu libro',
	'coll-download_title' => 'Discargar',
	'coll-download_text' => 'Pro discargar tu libro, selige un formato e clicca super le button.',
	'coll-download_as_text' => 'Pro discargar tu libro le formato $1, clicca super le button.',
	'coll-download' => 'Discargar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Remover',
	'coll-show' => 'Monstrar',
	'coll-move_to_top' => 'Displaciar al initio',
	'coll-move_up' => 'Displaciar in alto',
	'coll-move_down' => 'Displaciar a basso',
	'coll-move_to_bottom' => 'Displaciar al fin',
	'coll-title' => 'Titulo:',
	'coll-subtitle' => 'Subtitulo:',
	'coll-contents' => 'Contento',
	'coll-drag_and_drop' => 'Usa "traher & lassar cader" pro reordinar le paginas wiki e le capitulos',
	'coll-create_chapter' => 'Crear capitulo',
	'coll-sort_alphabetically' => 'Ordinar alphabeticamente',
	'coll-rename' => 'Renominar',
	'coll-new_chapter' => 'Entra nomine pro nove capitulo',
	'coll-rename_chapter' => 'Entra nove nomine pro capitulo',
	'coll-no_such_category' => 'Categoria non existe',
	'coll-notitle_title' => 'Le titulo del pagina non poteva esser determinate.',
	'coll-post_failed_title' => 'Requesta POST fallite',
	'coll-post_failed_msg' => 'Le requesta POST a $1 falleva ($2).',
	'coll-mwserve_failed_title' => 'Error del servitor de renditiones',
	'coll-mwserve_failed_msg' => 'Un error ha occurrite in le servitor de renditiones: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Responsa de error ab servitor',
	'coll-empty_collection' => 'Libro vacue',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Salveguardar e condivider tu libro',
	'coll-save_collection_text' => 'Selige un location:',
	'coll-login_to_save' => 'Si tu vole salveguardar libros pro uso futur, per favor [[Special:UserLogin|aperi un session o crea un conto]].',
	'coll-personal_collection_label' => 'Libro personal:',
	'coll-community_collection_label' => 'Libro communitari:',
	'coll-save_collection' => 'Salveguardar libro',
	'coll-save_category' => 'Tote le libros immagazinate es addite al categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Le pagina existe ja.
Superscriber lo?',
	'coll-overwrite_text' => 'Existe ja un pagina con le nomine [[:$1]].
Esque tu vole reimplaciar lo con tu collection?',
	'coll-yes' => 'Si',
	'coll-no' => 'No',
	'coll-load_overwrite_text' => 'Tu ha ja alcun paginas in tu libro.
Esque tu vole superscriber tu libro actual, adjunger le nove contento, o cancellar le cargamento de iste libro?',
	'coll-overwrite' => 'Superscriber',
	'coll-append' => 'Appender',
	'coll-cancel' => 'Cancellar',
	'coll-update' => 'Actualisar',
	'coll-limit_exceeded_title' => 'Libro troppo grande',
	'coll-limit_exceeded_text' => 'Tu libro es troppo grande.
Non es possibile adder plus paginas.',
	'coll-rendering_title' => 'Rendition',
	'coll-rendering_text' => '<p><strong>Per favor attende durante le generation del documento.</strong></p>

<p><strong>Progresso:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Iste pagina deberea refrescar se automaticamente cata pauc secundas.
Si isto non functiona, per favor preme le button de refrescar in tu navigator.</p>',
	'coll-rendering_status' => '<strong>Stato:</strong> $1',
	'coll-rendering_article' => '(pagina wiki: $1)',
	'coll-rendering_page' => '(pagina: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto de information super le rendition de paginas',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto de information super le rendition de collectiones',
	'coll-rendering_finished_title' => 'Rendition finite',
	'coll-rendering_finished_text' => '<strong>Le file del documento ha essite generate.</strong>
<strong>[$1 Discarga le file]</strong> verso tu computator.

Notas:
* Non satisfacite con le resultato? Vide [[{{MediaWiki:Coll-helppage}}|le pagina de adjuta super le libros]] pro possibilitates de meliorar lo.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informative super le rendition de paginas',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informative super le rendition de collectiones',
	'coll-notfound_title' => 'Libro non trovate',
	'coll-notfound_text' => 'Non poteva trovar le pagina del libro.',
	'coll-download_notfound_title' => 'File non trovate',
	'coll-download_notfound_text' => 'Le file que tu tenta discargar non existe. Forsan illo ha essite delite e debe esser regenerate.',
	'coll-download_failed_title' => 'Error durante le discargamento',
	'coll-download_failed_text' => 'Il occurreva un error durante le discargamento del file: $1',
	'coll-is_cached' => '<ul><li>Un version del documento ha essite trovate in le cache, ergo non esseva necessari facer un altere rendition. <a href="$1">Fortiar le re-rendition.</a></li></ul>',
	'coll-excluded-templates' => '* Le patronos in le categoria [[:Category:$1|$1]] ha essite excludite.',
	'coll-blacklisted-templates' => '* Le patronos in le lista nigre [[:$1]] ha essite excludite.',
	'coll-return_to_collection' => '<p>Retornar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Commandar como libro imprimite',
	'coll-book_text' => 'Obtene un libro imprimite de nostre partenario de impression a requesta (print on demand):',
	'coll-order_from_pp' => 'Previsualisar con $1',
	'coll-about_pp' => 'A proposito de $1',
	'coll-invalid_podpartner_title' => 'Partenario de impression a requesta (POD) non valide',
	'coll-invalid_podpartner_msg' => 'Le partenario indicate de impression a requesta (POD) non es valide.
Per favor contacta tu administrator de MediaWiki.',
	'coll-license' => 'Licentia',
	'coll-return_to' => 'Retornar a [[:$1]]',
	'coll-more_info' => 'Monstrar plus informationes',
	'coll-hide_info' => 'Celar informationes',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Commanda a PediaPress',
	'coll-suggest_title' => 'Paginas suggerite pro tu libro',
	'coll-suggest_intro_text' => 'Le suggestiones es basate super le collection actual de paginas wiki in tu libro.
Le lista es actualisate cata vice que tu clicca super le buttones "adder" o "remover".',
	'coll-suggested_articles' => 'Suggestiones',
	'coll-suggest_reset_bans' => 'reinitialisar',
	'coll-suggest_reset_bans_tooltip' => 'Monstrar suggestiones previemente removite',
	'coll-suggest_add_selected' => 'Adder paginas seligite',
	'coll-suggest_ban_selected' => 'Remover paginas seligite',
	'coll-suggest_your_book' => 'Tu libro',
	'coll-suggest_show' => 'monstrar',
	'coll-suggest_ban_tooltip' => 'Remover iste pagina del lista de suggestiones',
	'coll-suggest_article_ban' => 'Le pagina <strong>$1</strong> ha essite removite del suggestiones ($2).',
	'coll-suggest_article_add' => 'Le pagina <strong>$1</strong> ha essite addite a tu libro ($2).',
	'coll-suggest_article_remove' => 'Le pagina <strong>$1</strong> ha essite removite de tu libro ($2).',
	'coll-suggest_undo_tooltip' => 'Disfacer iste action',
	'coll-suggest_undo' => 'disfacer',
	'coll-load_local_book' => 'Clicca super OK pro continuar con tu libro %TITLE% que contine %NUMPAGES% paginas wiki. Clicca super Cancellar pro deler lo e comenciar con un libro vacue.',
	'right-collectionsaveasuserpage' => 'Salveguardar libros como pagina de usator',
	'right-collectionsaveascommunitypage' => 'Salveguardar libros como pagina de communitate',
);

/** Indonesian (Bahasa Indonesia)
 * @author -iNu-
 * @author Bennylin
 * @author Farras
 * @author Irwangatot
 * @author IvanLanin
 * @author Iwan Novirion
 * @author Rex
 */
$messages['id'] = array(
	'coll-desc' => '[[Special:Book|Buat buku]]',
	'coll-book_creator_intro' => "<big>Dengan ''pembuat buku'', Anda dapat membuat buku berisi halaman wiki pilihan Anda. Anda dapat mengekspor buku dalam berbagai format (misalnya, PDF atau ODF) atau memesan versi cetaknya.</big>",
	'coll-manage_your_book' => 'Pengelolaan buku',
	'coll-book_creator_help' => 'Lihat [[{{MediaWiki:Coll-helppage}}|halaman bantuan tentang buku]] untuk informasi selengkapnya.',
	'coll-start_book_creator' => 'Mulai pembuat buku',
	'coll-book_creator_continue' => 'Lanjutkan penggunaan pembuat buku',
	'coll-book_creator_disable_text' => "''Pembuat buku'' akan dinonaktifkan dan buku yang sedang Anda kerjakan akan dihapus.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Teks pembuat buku',
	'coll-collection' => 'Buku',
	'coll-collections' => 'Buku',
	'coll-exclusion_category_title' => 'Halaman yang tidak turut dicetak',
	'coll-print_template_prefix' => 'Cetak',
	'coll-print_template_pattern' => '$1/Cetak',
	'coll-unknown_subpage_title' => 'Subhalaman tak dikenal',
	'coll-unknown_subpage_text' => 'Subhalaman dari [[Special:Book|buku]] ini tak tersedia',
	'coll-couldnotaddarticle_title' => 'Tidak dapat menambahkan halaman wiki',
	'coll-couldnotaddarticle_msg' => 'Halaman wiki ini tidak dapat ditambahkan.',
	'coll-couldnotremovearticle_title' => 'Tidak dapat membuang halaman wiki',
	'coll-couldnotremovearticle_msg' => 'Halaman wiki tidak dapat dibuang.',
	'coll-noscript_text' => '<h1>Diperlukan JavaScript!</h1>
<strong>Penjelajah web Anda tidak mendukung JavaScript atau JavaScript telah dimatikan.
Halaman ini tidak akan bekerja dengan benar, kecuali jika JavaScript diaktifkan.</strong>',
	'coll-savedbook_template' => 'buku_tersimpan',
	'coll-your_book' => 'Buku Anda',
	'coll-download_title' => 'Unduh',
	'coll-download_text' => 'Untuk mengunduh buku Anda, pilih format dan klik tombol Unduh.',
	'coll-download_as_text' => 'Untuk mengunduh buku Anda dengan format $1, klik tombol Unduh.',
	'coll-download' => 'Unduh',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Hapus',
	'coll-show' => 'Tampilkan',
	'coll-move_to_top' => 'Pindahkan ke paling atas',
	'coll-move_up' => 'Pindahkan ke atas',
	'coll-move_down' => 'Pindahkan ke bawah',
	'coll-move_to_bottom' => 'Pindahkan ke paling bawah',
	'coll-title' => 'Judul:',
	'coll-subtitle' => 'Subjudul:',
	'coll-contents' => 'Daftar isi',
	'coll-drag_and_drop' => 'Seret & lepas untuk mengubah urutan halaman wiki dan bab',
	'coll-create_chapter' => 'Buat bab',
	'coll-sort_alphabetically' => 'Urutkan secara alfabetis',
	'coll-rename' => 'Ganti nama',
	'coll-new_chapter' => 'Masukkan nama bab baru',
	'coll-rename_chapter' => 'Masukkan nama baru bab',
	'coll-no_such_category' => 'Tidak ada kategori tersebut',
	'coll-notitle_title' => 'Judul halaman tidak bisa ditentukan.',
	'coll-post_failed_title' => 'Permintaan POST gagal',
	'coll-post_failed_msg' => 'Permintaan POST untuk $1 gagal ($2).',
	'coll-mwserve_failed_title' => 'Kesalahan server pengolahan',
	'coll-mwserve_failed_msg' => 'Terjadi suatu kesalahan berikut pada server pengolahan: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Respons kesalahan dari server',
	'coll-empty_collection' => 'Buku kosong',
	'coll-revision' => 'Revisi: $1',
	'coll-save_collection_title' => 'Simpan dan bagikan buku Anda',
	'coll-save_collection_text' => 'Pilih suatu tempat penyimpanan untuk buku Anda:',
	'coll-login_to_save' => 'Jika Anda ingin menyimpan buku untuk digunakan nanti, silakan [[Special:UserLogin|masuk log atau buat akun]].',
	'coll-personal_collection_label' => 'Buku pribadi:',
	'coll-community_collection_label' => 'Buku komunitas:',
	'coll-save_collection' => 'Simpan buku',
	'coll-save_category' => 'Semua buku disimpan di kategori  [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Halaman sudah ada.
Timpa?',
	'coll-overwrite_text' => 'Suatu halaman dengan nama [[:$1]] sudah ada.
Apakah Anda ingin menggantikannya dengan buku Anda?',
	'coll-yes' => 'Ya',
	'coll-no' => 'Tidak',
	'coll-load_overwrite_text' => 'Anda telah memiliki beberapa halaman pada buku Anda.
Apakah Anda ingin menimpa buku Anda itu, menambahkan isi baru, atau batal memuat buku ini?',
	'coll-overwrite' => 'Timpa',
	'coll-append' => 'Tambah',
	'coll-cancel' => 'Batalkan',
	'coll-update' => 'Perbarui',
	'coll-limit_exceeded_title' => 'Buku terlalu besar',
	'coll-limit_exceeded_text' => 'Buku Anda terlalu besar.
Tidak bisa menambahkan halaman lagi.',
	'coll-rendering_title' => 'Pengolahan',
	'coll-rendering_text' => '<p><strong>Harap tunggu buku ini dibuat.</strong></p>

<p><strong>Kemajuan:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Halaman ini seharusnya dimuat ulang secara otomatis setiap beberapa detik.
Jika tidak, silakan tekan tombol muat ulang di penjelajah web Anda.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(halaman wiki: $1)',
	'coll-rendering_page' => '(halaman: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Mengubah teks halaman info',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Mengubah teks koleksi info',
	'coll-rendering_finished_title' => 'Pengolahan selesai',
	'coll-rendering_finished_text' => '<strong>Berkas dokumen telah dibuat.</strong>
<strong>[$1 Unduh berkas]</strong> ke komputer Anda.

Catatan:
* Tidak puas dengan hasilnya? Lihat [[{{MediaWiki:Coll-helppage}}|halaman bantuan tentang buku]] untuk kemungkinan mengembangkannya.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Mengubah teks info halaman',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Mengubah teks info koleksi',
	'coll-notfound_title' => 'Buku tak ditemukan',
	'coll-notfound_text' => 'Tidak dapat menemukan halaman buku.',
	'coll-download_notfound_title' => 'Berkas tak ditemukan',
	'coll-download_notfound_text' => 'Berkas yang Anda coba unduh tidak ada: Mungkin sudah dihapus dan perlu dibuat ulang.',
	'coll-download_failed_title' => 'Kesalahan selama pengunduhan',
	'coll-download_failed_text' => 'Terjadi kesalahan ketika mengunduh berkas: $1',
	'coll-is_cached' => '<ul><li>Versi tersimpan dari dokumen ini telah ditemukan, sehingga tidak diperlukan pengolahan apa pun. <a href="$1">Paksa pengolahan ulang.</a></li></ul>',
	'coll-excluded-templates' => '* Templat di kategori [[:Category:$1|$1]] telah dikecualikan.',
	'coll-blacklisted-templates' => '* Templat pada daftar hitam[[:$1]] telah dikecualikan.',
	'coll-return_to_collection' => '<p>Kembali ke <a href="$1">$2</a></p>',
	'coll-book_title' => 'Pesan sebagai buku tercetak',
	'coll-book_text' => 'Dapatkan buku tercetak dari rekanan cetak-sesuai-permintaan kami.',
	'coll-order_from_pp' => 'Pesan buku dari $1',
	'coll-about_pp' => 'Tentang $1',
	'coll-invalid_podpartner_title' => 'Rekanan POD tak valid',
	'coll-invalid_podpartner_msg' => 'Rekanan POD yang diberikan tak valid.
Silakan hubungi pengelola MediaWiki Anda.',
	'coll-license' => 'Lisensi',
	'coll-return_to' => 'Kembali ke [[:$1]]',
	'coll-more_info' => 'Tampilkan informasi lebih lanjut',
	'coll-hide_info' => 'Sembunyikan informasi',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informasi pemesanan dari PediaPress',
	'coll-suggest_title' => 'Halaman yang disarankan untuk buku Anda',
	'coll-suggest_intro_text' => 'Saran berdasarkan pada pengaturan halaman wiki dalam buku Anda.
Daftar diperbarui kapan pun Anda mengeklik tombol tambah atau hapus.',
	'coll-suggested_articles' => 'Disarankan',
	'coll-suggest_reset_bans' => 'tata ulang',
	'coll-suggest_reset_bans_tooltip' => 'Tampilkan saran yang dihapus sebelumnya',
	'coll-suggest_add_selected' => 'Tambahkan halaman yang dipilih',
	'coll-suggest_ban_selected' => 'Hapus halaman yang dipilih',
	'coll-suggest_your_book' => 'Buku anda',
	'coll-suggest_show' => 'tampilkan',
	'coll-suggest_ban_tooltip' => 'Hapus halaman ini dari daftar yang disarankan',
	'coll-suggest_article_ban' => 'Halaman <strong>$1</strong> telah dihapus dari saran ($2).',
	'coll-suggest_article_add' => 'Halaman <strong>$1</strong> telah ditambahkan pada ke dalam buku Anda ($2).',
	'coll-suggest_article_remove' => 'Halaman <strong>$1</strong> telah dihapus dari buku Anda ($2).',
	'coll-suggest_undo_tooltip' => 'Batalkan pilihan ini',
	'coll-suggest_undo' => 'batalkan',
	'coll-load_local_book' => 'Klik OK untuk melanjutkan dengan buku Anda yang berjudul %TITLE% yang berisi %NUMPAGES% halaman wiki. Klik Batal untuk menghapusnya dan memulai dengan buku kosong.',
	'right-collectionsaveasuserpage' => 'Menyimpan koleksi buku sebagai halaman pengguna',
	'right-collectionsaveascommunitypage' => 'Menyimpan koleksi buku sebagai halaman komunitas',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'coll-show' => 'Zi',
	'coll-title' => 'Íshí:',
	'coll-cancel' => 'Kàchá',
	'coll-about_pp' => 'Maka $1',
	'coll-suggest_show' => 'zi',
);

/** Ingush (ГІалгІай Ğalğaj)
 * @author Amire80
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'coll-collection' => 'Китаб',
	'coll-collections' => 'Китабаш',
	'coll-your_book' => 'Хьа китаб',
	'coll-yes' => 'XӀаа',
	'coll-no' => 'A',
	'coll-notfound_title' => 'Китаб корая яц',
	'coll-download_notfound_title' => 'Паьл корая яц',
	'coll-suggest_your_book' => 'Хьа китаб',
	'coll-suggest_show' => 'хьахокха',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'coll-desc' => '[[Special:Book|Kreez libri]]',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libri',
	'coll-print_template_prefix' => 'Imprimar',
	'coll-your_book' => 'Vua libro',
	'coll-format_label' => 'Formato:',
	'coll-show' => 'Montrez',
	'coll-title' => 'Titulo:',
	'coll-contents' => 'Kontenajo',
	'coll-rename' => 'Rinomar',
	'coll-empty_collection' => 'Vakua libro',
	'coll-save_collection' => 'Registragar libro',
	'coll-yes' => 'Yes',
	'coll-no' => 'No',
	'coll-cancel' => 'Anular',
	'coll-update' => 'Aktualigar',
	'coll-limit_exceeded_title' => 'Libro tro granda',
	'coll-limit_exceeded_text' => 'Vua libro esas tro granda.
On ne povas adjuntar plusa pagini.',
	'coll-rendering_status' => '<strong>Stando:</strong> $1',
	'coll-rendering_page' => '(pagino: $1)',
	'coll-download_notfound_title' => 'Arkivo ne trovesis',
	'coll-about_pp' => 'Pri $1',
	'coll-suggest_your_book' => 'Vua libro',
	'coll-suggest_undo' => 'desfacar',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'coll-collection' => 'Safn',
	'coll-collections' => 'Söfn',
	'coll-remove' => 'Fjarlægja',
	'coll-title' => 'Titill:',
	'coll-rename' => 'Endurnefna',
	'coll-new_chapter' => 'Sláðu inn nafn á nýjum kafla',
	'coll-rename_chapter' => 'Sláðu inn nýtt nafn fyrir kafla',
	'coll-no_such_category' => 'Flokkur ekki til',
	'coll-save_collection' => 'Vista safn',
	'coll-yes' => 'Já',
	'coll-no' => 'Nei',
	'coll-overwrite' => 'Yfirrita',
	'coll-append' => 'Auka við',
	'coll-cancel' => 'Hætta við',
	'coll-limit_exceeded_title' => 'Safn of stórt',
	'coll-notfound_title' => 'Safn fannst ekki',
	'coll-order_from_pp' => 'Panta bók frá $1',
	'coll-about_pp' => 'Um $1',
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Civvì
 * @author Darth Kule
 * @author Melos
 * @author Nemo bis
 * @author Pietrodn
 * @author Stefano-c
 */
$messages['it'] = array(
	'coll-desc' => '[[Special:Book|Crea libri]]',
	'coll-book_creator_intro' => "<big>Con il ''creatore di libri'' è possibile creare un libro contenente pagine wiki a propria scelta. È possibile esportare il libro in diversi formati (per esempio PDF e ODF) oppure ordinare una copia stampata.</big>",
	'coll-manage_your_book' => 'Gestisci il tuo libro',
	'coll-book_creator_help' => 'Vedi [[{{MediaWiki:Coll-helppage}}|la pagina di aiuto sui libri]] per maggiori informazioni.',
	'coll-start_book_creator' => 'Avvia il creatore di libri',
	'coll-book_creator_continue' => 'Continua a usare il creatore di libri',
	'coll-book_creator_disable_text' => "Il ''creatore di libri'' verrà disattivato e il libro a cui si sta lavorando sarà rimosso.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Testo del creatore di libri',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libri',
	'coll-exclusion_category_title' => 'Escludi dalla stampa',
	'coll-print_template_prefix' => 'Stampa',
	'coll-print_template_pattern' => '$1/Stampa',
	'coll-unknown_subpage_title' => 'Sottopagina sconosciuta',
	'coll-unknown_subpage_text' => 'Questa sottopagina di [[Special:Book|Libro]] non esiste',
	'coll-couldnotaddarticle_title' => 'Impossibile aggiungere pagina wiki',
	'coll-couldnotaddarticle_msg' => 'La pagina wiki non può essere aggiunta.',
	'coll-couldnotremovearticle_title' => 'Impossibile rimuovere la pagina wiki',
	'coll-couldnotremovearticle_msg' => 'La pagina wiki non può essere rimossa.',
	'coll-noscript_text' => '<h1>È necessario avere JavaScript!</h1>
<strong>Il tuo browser non supporta JavaScript oppure JavaScript è stato disattivato.
La pagina non funzionerà correttamente se non verrà attivato JavaScript.</strong>',
	'coll-savedbook_template' => 'libro_salvato',
	'coll-your_book' => 'Il tuo libro',
	'coll-download_title' => 'Scarica',
	'coll-download_text' => 'Per scaricare il tuo libro scegli un formato e fai clic sul pulsante.',
	'coll-download_as_text' => 'Per scaricare il tuo libro nel formato $1 fai clic sul pulsante.',
	'coll-download' => 'Scarica',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Rimuovi',
	'coll-show' => 'Mostra',
	'coll-move_to_top' => "Sposta all'inizio",
	'coll-move_up' => 'Sposta più su',
	'coll-move_down' => 'Sposta più giù',
	'coll-move_to_bottom' => 'Sposta in fondo',
	'coll-title' => 'Titolo:',
	'coll-subtitle' => 'Sottotitolo:',
	'coll-contents' => 'Indice',
	'coll-drag_and_drop' => 'Usa il drag and drop per riordinare le pagine wiki e i capitoli',
	'coll-create_chapter' => 'Crea capitolo',
	'coll-sort_alphabetically' => 'Ordina alfabeticamente',
	'coll-rename' => 'Rinomina',
	'coll-new_chapter' => 'Inserisci il nome per il nuovo capitolo',
	'coll-rename_chapter' => 'Inserisci un nuovo nome per il capitolo',
	'coll-no_such_category' => 'Nessuna categoria',
	'coll-notitle_title' => 'Non è stato possibile determinare il titolo della pagina.',
	'coll-post_failed_title' => 'Richiesta POST fallita',
	'coll-post_failed_msg' => 'La richiesta POST a $1 è fallita ($2).',
	'coll-mwserve_failed_title' => 'Errore server conversione',
	'coll-mwserve_failed_msg' => 'Si è verificato un errore sul server di conversione: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Errore risposta dal server',
	'coll-empty_collection' => 'Libro vuoto',
	'coll-revision' => 'Revisione: $1',
	'coll-save_collection_title' => 'Salva e condividi il tuo libro',
	'coll-save_collection_text' => 'Scegli una locazione:',
	'coll-login_to_save' => 'Se vuoi salvare il libro per utilizzarlo in seguito, [[Special:UserLogin|entra o crea un nuovo accesso]].',
	'coll-personal_collection_label' => 'Libro personale:',
	'coll-community_collection_label' => 'Libro della comunità:',
	'coll-save_collection' => 'Salva libro',
	'coll-save_category' => 'Tutti i libri salvati sono aggiunti alla categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La pagina esiste già.
Sovrascriverla?',
	'coll-overwrite_text' => 'Una pagina con il nome [[:$1]] esiste già.
Si desidera che sia sostituita con la raccolta?',
	'coll-yes' => 'Sì',
	'coll-no' => 'No',
	'coll-load_overwrite_text' => 'Il libro contiene già delle pagine.
Si desidera sovrascrivere il libro corrente, aggiungere il nuovo contenuto o annullare il caricamento di questo libro?',
	'coll-overwrite' => 'Sovrascrivi',
	'coll-append' => 'Aggiungi',
	'coll-cancel' => 'Annulla',
	'coll-update' => 'Aggiorna',
	'coll-limit_exceeded_title' => 'Libro troppo grande',
	'coll-limit_exceeded_text' => 'Il tuo libro è troppo grande. Non è più possibile aggiungervi pagine.',
	'coll-rendering_title' => 'Conversione',
	'coll-rendering_text' => '<p><strong>Attendere mentre il documento viene generato.</strong></p>

<p><strong>Avanzamento:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Questa pagina dovrebbe aggiornarsi automaticamente ogni pochi secondi.
Se ciò non succede, premi il pulsante di aggiornamento del tuo browser.</p>',
	'coll-rendering_status' => '<strong>Stato:</strong> $1',
	'coll-rendering_article' => '(pagina wiki: $1)',
	'coll-rendering_page' => '(pagina: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informazioni sul rendering delle pagine',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informazioni sul rendering di collezioni',
	'coll-rendering_finished_title' => 'Conversione terminata',
	'coll-rendering_finished_text' => '<strong>Il documento è stato generato.</strong>
<strong>[$1 Scarica il file]</strong> sul tuo computer.

Note:
* Non sei soddisfatto del risultato? Leggi [[{{MediaWiki:Coll-helppage}}|la pagina di aiuto sulle raccolte]] riguardo alle possibilità per migliorarlo.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informazioni sul rendering delle pagine',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informazioni sul rendering di collezioni',
	'coll-notfound_title' => 'Libro non trovato',
	'coll-notfound_text' => 'Non è possibile trovare la pagina del libro.',
	'coll-download_notfound_title' => 'File non trovato',
	'coll-download_notfound_text' => 'Il file che si sta cercando di scaricare non esiste; è possibile che sia stato cancellato e debba essere creato di nuovo.',
	'coll-download_failed_title' => 'Errore durante il download',
	'coll-download_failed_text' => 'Si è verificato un errore durante il download del file: $1',
	'coll-is_cached' => '<ul><li>Una versione del documento è stata trovata nella cache; la conversione non è stata necessaria. <a href="$1">Forza la ri-conversione.</a></li></ul>',
	'coll-excluded-templates' => '* I template nella categoria [[:Category:$1|$1]] sono stati esclusi.',
	'coll-blacklisted-templates' => '* I template nella blacklist [[:$1]] sono stati esclusi.',
	'coll-return_to_collection' => '<p>Torna a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ordina come libro stampato',
	'coll-book_text' => 'Ottieni un libro stampato da uno dei nostri partner di stampa su richiesta (print-on-demand):',
	'coll-order_from_pp' => 'Anteprima con $1',
	'coll-about_pp' => 'Informazioni su $1',
	'coll-invalid_podpartner_title' => 'Partner POD non valido',
	'coll-invalid_podpartner_msg' => 'Il partner POD fornito non è valido. Contatta il tuo amministratore MediaWiki.',
	'coll-license' => 'Licenza',
	'coll-return_to' => 'Torna a [[:$1]]',
	'coll-more_info' => 'Mostra ulteriori informazioni',
	'coll-hide_info' => 'Nascondi informazioni',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informazioni ordine PediaPress',
	'coll-suggest_title' => 'Pagine suggerite per il proprio libro',
	'coll-suggest_intro_text' => 'I suggerimenti sono basati sulla raccolta attuale di pagine presenti nel proprio libro.
L\'elenco viene aggiornato ogni qualvolta si fa clic sui pulsanti "aggiungi" o "rimuovi".',
	'coll-suggested_articles' => 'Suggerimenti',
	'coll-suggest_reset_bans' => 'reimposta',
	'coll-suggest_reset_bans_tooltip' => 'Mostra suggerimenti precedentemente rimossi',
	'coll-suggest_add_selected' => 'Aggiungi pagine selezionate',
	'coll-suggest_ban_selected' => 'Rimuovi pagine selezionate',
	'coll-suggest_your_book' => 'Il tuo libro',
	'coll-suggest_show' => 'mostra',
	'coll-suggest_ban_tooltip' => "Rimuovi questa pagina dall'elenco dei suggerimenti",
	'coll-suggest_article_ban' => 'La pagina <strong>$1</strong> è stata rimossa dai suggerimenti ($2).',
	'coll-suggest_article_add' => 'La pagina <strong>$1</strong> è stata aggiunta al tuo libro ($2).',
	'coll-suggest_article_remove' => 'La pagina <strong>$1</strong> è stata rimossa dal tuo libro ($2).',
	'coll-suggest_undo_tooltip' => 'Annulla questa azione',
	'coll-suggest_undo' => 'annulla',
	'coll-load_local_book' => 'Fai clic su OK per continuare con il tuo libro %TITLE% composto da %NUMPAGES% pagine wiki. Clicca Annulla per cancellarlo e cominciare con un libro vuoto.',
	'right-collectionsaveasuserpage' => 'Salva libri in pagine utente',
	'right-collectionsaveascommunitypage' => 'Salva libri nelle pagine della comunità',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Marine-Blue
 * @author 青子守歌
 */
$messages['ja'] = array(
	'coll-desc' => '[[Special:Book|ブックを作成する]]',
	'coll-book_creator_intro' => '<big>「ブッククリエーター」を使うと、あなたが選んだウィキページを含むブックを作成することができます。ブックは様々な形式で書き出したり（例えば PDF や ODF）、印刷版を注文したりできます。</big>',
	'coll-manage_your_book' => 'あなたのブックを管理',
	'coll-book_creator_help' => 'より詳しくは[[{{MediaWiki:Coll-helppage}}|ブックについてのヘルプ]]を参照してください。',
	'coll-start_book_creator' => 'ブッククリエーターを開始',
	'coll-book_creator_continue' => 'ブッククリエーターを使い続ける',
	'coll-book_creator_disable_text' => '「ブッククリエーター」は無効化され、あなたが作業しているブックは削除されます。',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/ブッククリエーター本文',
	'coll-collection' => 'ブック',
	'coll-collections' => 'ブック',
	'coll-exclusion_category_title' => '印刷から除外',
	'coll-print_template_prefix' => '印刷用',
	'coll-print_template_pattern' => '$1/印刷用',
	'coll-unknown_subpage_title' => '不明なサブページ',
	'coll-unknown_subpage_text' => 'この[[Special:Book|ブック]]のサブページは存在しません',
	'coll-couldnotaddarticle_title' => 'ページを追加できませんでした',
	'coll-couldnotaddarticle_msg' => 'このページは追加できませんでした。',
	'coll-couldnotremovearticle_title' => 'ページを削除できませんでした',
	'coll-couldnotremovearticle_msg' => 'このページは削除できませんでした。',
	'coll-noscript_text' => '<h1>JavaScriptを利用しています！</h1>
<strong>ご利用のブラウザは JavaScript をサポートしていないか、JavaScript が無効になっています。このページは、JavaScript が有効になっていない場合、正しく動作しません。</strong>',
	'coll-savedbook_template' => '保存済みブック',
	'coll-your_book' => 'あなたのブック',
	'coll-download_title' => 'ダウンロード',
	'coll-download_text' => 'あなたのブックをダウンロードするには、形式を選択してボタンを押してください。',
	'coll-download_as_text' => 'あなたのブックを $1 形式でダウンロードするにはこのボタンを押してください。',
	'coll-download' => 'ダウンロード',
	'coll-format_label' => '形式:',
	'coll-remove' => '削除',
	'coll-show' => '表示',
	'coll-move_to_top' => '先頭へ',
	'coll-move_up' => '上へ',
	'coll-move_down' => '下へ',
	'coll-move_to_bottom' => '最後尾へ',
	'coll-title' => 'タイトル:',
	'coll-subtitle' => 'サブタイトル:',
	'coll-contents' => '内容',
	'coll-drag_and_drop' => 'ドラッグ・アンド・ドロップでウィキページや章を並べ換えます',
	'coll-create_chapter' => '新しい章を作成',
	'coll-sort_alphabetically' => 'ページを辞書順にソート',
	'coll-rename' => '改名',
	'coll-new_chapter' => '新しい章見出しを入力',
	'coll-rename_chapter' => '新しい章見出しを入力',
	'coll-no_such_category' => '指定されたカテゴリは存在しません',
	'coll-notitle_title' => 'ページタイトルが未設定です。',
	'coll-post_failed_title' => 'POST要求の失敗',
	'coll-post_failed_msg' => '$1へのPOST要求は失敗しました ($2)。',
	'coll-mwserve_failed_title' => 'レンダリングサーバーのエラー',
	'coll-mwserve_failed_msg' => 'レンダリングサーバーでエラーが発生しました: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'サーバからのエラー応答',
	'coll-empty_collection' => '空のブック',
	'coll-revision' => '版：$1',
	'coll-save_collection_title' => 'ブックを保存して共有する',
	'coll-save_collection_text' => '保存先の選択:',
	'coll-login_to_save' => '後の利用のためブックを保存するには、[[Special:UserLogin|ログインまたはアカウント作成]]を行ってください。',
	'coll-personal_collection_label' => '個人的なブック:',
	'coll-community_collection_label' => '共有するブック:',
	'coll-save_collection' => 'ブックを保存',
	'coll-save_category' => '保存したブックはすべて、カテゴリ「[[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]」に加えられます。',
	'coll-overwrite_title' => '同名のページが存在します。上書きしますか？',
	'coll-overwrite_text' => '[[:$1]] という名前のページが既に存在しています。これをあなたのブックに置き換えますか？',
	'coll-yes' => 'はい',
	'coll-no' => 'いいえ',
	'coll-load_overwrite_text' => 'あなたのブックには既にページがいくつかあります。現在のブックを上書きする、ブックに追加する、このブックの読み込みを中止する、のいずれかを選択してください。',
	'coll-overwrite' => '上書き',
	'coll-append' => '追加',
	'coll-cancel' => '中止',
	'coll-update' => '更新',
	'coll-limit_exceeded_title' => 'ブックが大きすぎます',
	'coll-limit_exceeded_text' => 'あなたのブックは大きすぎます。これ以上のページを追加することはできません。',
	'coll-rendering_title' => 'レンダリング中',
	'coll-rendering_text' => '<p><strong>ドキュメントが生成されるあいだ、しばらくお待ちください。</strong></p>

<p><strong>進捗:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>このページは数秒毎に自動的に更新されます。更新されない場合は、ブラウザの更新ボタンを押してください。</p>',
	'coll-rendering_status' => '<strong>状況:</strong> $1',
	'coll-rendering_article' => '(ウィキページ: $1)',
	'coll-rendering_page' => '(ページ: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/ページ情報文を生成中',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/コレクション情報文を生成中',
	'coll-rendering_finished_title' => 'レンダリング完了',
	'coll-rendering_finished_text' => '<strong>ドキュメントファイルは生成されました。</strong>
あなたのコンピュータに<strong>[$1 ファイルをダウンロード]</strong>してください。

注:
* 出力に満足できませんか？改善が可能か、[[{{MediaWiki:Coll-helppage}}|ブックについてのヘルプページ]]をご覧ください。',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/ページ情報テキストを生成中',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/コレクション情報テキストを生成中',
	'coll-notfound_title' => 'ブックが見つかりません',
	'coll-notfound_text' => 'ブックの保存ページが見つかりませんでした。',
	'coll-download_notfound_title' => 'ファイルが見つかりません',
	'coll-download_notfound_text' => 'あなたがダウンロードしようとしたファイルは存在しません。削除された場合は再生成が必要となります。',
	'coll-download_failed_title' => 'ダウンロード中にエラー',
	'coll-download_failed_text' => '次のファイルのダウンロード中にエラーがおきました: $1',
	'coll-is_cached' => '<ul><li>ドキュメントのキャッシュ済み版がみつかりましたので、レンダリングは必要ありません。<a href="$1">強制的に再レンダリングする。</a></li></ul>',
	'coll-excluded-templates' => '* カテゴリ [[:Category:$1|$1]] にあるテンプレートは除外されています。',
	'coll-blacklisted-templates' => '* ブラックリスト [[:$1]] にあるテンプレートは除外されています。',
	'coll-return_to_collection' => '<p><a href="$1">$2</a></p>に戻る',
	'coll-book_title' => '印刷済みの本として注文',
	'coll-book_text' => '印刷済みの本をわれわれのオンデマンド印刷パートナーから入手:',
	'coll-order_from_pp' => '$1でプレビュー',
	'coll-about_pp' => '$1について',
	'coll-invalid_podpartner_title' => '無効なオンデマンド印刷パートナー',
	'coll-invalid_podpartner_msg' => '提供されたオンデマンド印刷パートナーは無効です。MediaWiki の管理者に連絡してください。',
	'coll-license' => 'ライセンス',
	'coll-return_to' => '[[:$1]]に戻る',
	'coll-more_info' => '詳細を表示',
	'coll-hide_info' => '詳細を非表示',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress注文情報',
	'coll-suggest_title' => 'ブックに追加するページの候補',
	'coll-suggest_intro_text' => '現在のあなたのブックに含まれるウィキページ群に基づき、候補を一覧表示しています。あなたが追加や除去のボタンを押すとすぐに一覧は更新されます。',
	'coll-suggested_articles' => '候補',
	'coll-suggest_reset_bans' => 'リセット',
	'coll-suggest_reset_bans_tooltip' => '以前に一覧から取り除いた候補を表示',
	'coll-suggest_add_selected' => '選択したページを追加',
	'coll-suggest_ban_selected' => '選択したページを除去',
	'coll-suggest_your_book' => 'あなたのブック',
	'coll-suggest_show' => '表示',
	'coll-suggest_ban_tooltip' => 'このページを候補の一覧から除く',
	'coll-suggest_article_ban' => 'ページ「<strong>$1</strong>」は候補の一覧から除去されました（$2）。',
	'coll-suggest_article_add' => 'ページ「<strong>$1</strong>」はあなたのブックに追加されました（$2）。',
	'coll-suggest_article_remove' => 'ページ「<strong>$1</strong>」はあなたのブックから除去されました（$2）。',
	'coll-suggest_undo_tooltip' => 'この操作を取り消し',
	'coll-suggest_undo' => '取り消し',
	'coll-load_local_book' => 'OKをクリックすると %NUMPAGES% 件のウィキページを含む本を %TITLE% という題で作成します。この本を削除して新しい本を作成する場合はキャンセルをクリックしてください。',
	'right-collectionsaveasuserpage' => 'ブックを利用者ページとして保存',
	'right-collectionsaveascommunitypage' => 'ブックを共有ページとして保存',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'coll-desc' => '[[Special:Book|Gawé buku]]',
	'coll-collection' => 'Buku',
	'coll-collections' => 'Buku',
	'coll-exclusion_category_title' => 'Ora mèlu dicithak',
	'coll-print_template_prefix' => 'Cithak',
	'coll-unknown_subpage_title' => 'Anak-kaca sing ora dikenal',
	'coll-unknown_subpage_text' => 'Anak-kaca saka [[Special:Book|Buku]] iki ora ana',
	'coll-noscript_text' => '<h1>JavaScript diperlokaké!</h1>
<strong>Browser panjenengan ora ndhukung JavaScript utawa JavaScript wis dipatèni.
Kaca iki ora bakal tampil kanthi bener, kajaba JavaScript di aktifaké.</strong>',
	'coll-your_book' => 'Buku panjenengan',
	'coll-download_title' => 'Undhuh',
	'coll-download_text' => 'Kanggo ngundhuh buku panjenengan piliha sawijining format lan klik tombolé.',
	'coll-download' => 'Undhuh',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ilangana',
	'coll-show' => 'Tuduhaké',
	'coll-move_to_top' => 'Pindhah menyang ndhuwur',
	'coll-move_up' => 'Munggah',
	'coll-move_down' => 'Mudhun',
	'coll-move_to_bottom' => 'Pindhah menyang dhasar ngisor',
	'coll-title' => 'Irah-irahan (judhul):',
	'coll-subtitle' => 'Subjudhul:',
	'coll-contents' => 'Isi',
	'coll-drag_and_drop' => "Gunakaké ''drag & drop'' kanggo nata kaca lan bab ing wiki",
	'coll-create_chapter' => 'Gawé bab',
	'coll-sort_alphabetically' => 'Sortir miturut abjad',
	'coll-rename' => 'Ganti jeneng',
	'coll-new_chapter' => 'Lebokna jeneng anyar kanggo bab',
	'coll-rename_chapter' => 'Lebokna jeneng anyar kanggo bab',
	'coll-no_such_category' => 'Ora ana kategori kaya mengkono',
	'coll-notitle_title' => 'Irah-irahan kaca iki ora bisa ditemtokaké.',
	'coll-post_failed_title' => 'Panyuwunan POST gagal',
	'coll-post_failed_msg' => 'Panyuwunan POST menyang $1 gagal ($2).',
	'coll-mwserve_failed_title' => 'Ana kasalahan server',
	'coll-mwserve_failed_msg' => 'Ana kasalahan ing server: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Rèspon kasalahan saka server',
	'coll-empty_collection' => 'Buku kothong',
	'coll-revision' => 'Révisi: $1',
	'coll-save_collection_title' => 'Simpen lan tuduhaké buku panjenengan',
	'coll-save_collection_text' => 'Pilih lokasi',
	'coll-login_to_save' => 'Yèn panjenengan arep nyimpen buku kanggo mangsa ngarep, mangga[[Special:UserLogin|mlebu log utawa gawé akun]].',
	'coll-personal_collection_label' => 'Buku pribadi:',
	'coll-community_collection_label' => 'Buku komunitas:',
	'coll-save_collection' => 'Simpen buku',
	'coll-save_category' => 'Kabèh buku disimpen ing kategori [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Kaca wis ana. Ditindhes waé?',
	'coll-overwrite_text' => 'Kaca kanthi jeneng [[:$1]] wis ana.
Apa arep diganti nganggo kolèksi panjenengan?',
	'coll-yes' => 'Iya',
	'coll-no' => 'Ora',
	'coll-load_overwrite_text' => 'Panjenengan wis duwé sawetara kaca jroning buku panjenengan.
Apa arep nindhes buku panjenengan iku, nambah isi anyar, utawa mbatalaké ngunggah buku iki?',
	'coll-overwrite' => 'Timpanen',
	'coll-append' => 'Lampirna',
	'coll-cancel' => 'Batal',
	'coll-update' => 'Mutakir',
	'coll-limit_exceeded_title' => 'Buku kagedhèn',
	'coll-limit_exceeded_text' => 'Buku panjenengan kagedhèn.
Ora bisa nambah kaca manèh.',
	'coll-rendering_title' => 'Nggawé/ngowahi',
	'coll-rendering_text' => "<p><strong>Mangga ditunggu sauntara dokumèn lagi digawé.</strong></p>

<p><strong>Kamajuan:</strong> <span id=\"renderingProgress\">\$1</span>% <span id=\"renderingStatus\">\$2</span></p>

<p>Kaca iki samesthiné ''refresh'' sacara otomatis saben sawetara detik.
Yèn ora mangkono, mangga pencèt tombol ''refresh'' ing ''browser'' panjenengan.</p>",
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(kaca wiki: $1)',
	'coll-rendering_page' => '(kaca: $1)',
	'coll-rendering_finished_title' => 'Rampung ngowahi/gawé',
	'coll-rendering_finished_text' => "<strong>Berkas dokumèn wis digawé.</strong>
<strong>[$1 Undhuh berkas]</strong> menyang komputer panjenengan.

Cathetan:
* Kurang rena karo wetonan (''output'')é? Pirsani [[{{MediaWiki:Coll-helppage}}|kaca pitulung bab kolèksi]] kanggo kamungkinan ningkataké.",
	'coll-notfound_title' => 'Buku ora ketemu',
	'coll-notfound_text' => 'Ora bisa nemokaké kaca buku.',
	'coll-is_cached' => "<ul><li>Dokumèn vèrsi ''cache'' wis ditemokaké, mula ora perlu ana pangowahan (''rendering''). <a href=\"\$1\">Peksa ''re-rendering''.</a></li></ul>",
	'coll-excluded-templates' => '* Cithakan-cithakan ing kategori [[:Category:$1|$1]] wis di wetokaké.',
	'coll-blacklisted-templates' => '* Cithakan-cithakan ing dhaptar-ireng [[:$1]] wis diwetokaké.',
	'coll-return_to_collection' => '<p>Bali menyang <a href="$1">$2</a></p>',
	'coll-book_title' => 'Urut kaya buku cithakan',
	'coll-book_text' => "Jupuken buku cithakan saka partner ''print-on-demand'' kita:",
	'coll-order_from_pp' => 'Pesen buku saka $1',
	'coll-about_pp' => 'Perkara $1',
	'coll-invalid_podpartner_title' => 'Partner POD ora sah',
	'coll-invalid_podpartner_msg' => 'Partner POD sing disadiyakaké ora sah.
Mangga hubungi pangurus MediaWiki panjenengan.',
	'coll-license' => 'Lisènsi',
	'coll-return_to' => 'Bali menyang [[:$1]]',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author Malafaya
 * @author Sopho
 * @author Temuri rajavi
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'coll-desc' => '[[Special:Book|წიგნის შექმნა]]',
	'coll-book_creator_intro' => '<big>წიგნის ოსტატის მეშვეობით თქვენ შეგიძლიათ შექმნათ წიგნი, რომელიც შეიცავს თქვენს მიერ არჩეულ ვიკი-გვერდებს. თქვენ შეგიძლიათ მოახდინოთ წიგნების ექსპორტირება სხვადასხვა ფორმატებში (მაგ. PDF ან ODF) ან გამოიწეროთ დაბეჭდილი ვერსია.</big>',
	'coll-manage_your_book' => 'თქვენი წიგნის მართვა',
	'coll-book_creator_help' => 'მეტი ინფორმაციისათვის იხილეთ [[{{MediaWiki:Coll-helppage}}|დახმარების გვერდი წიგნებზე]].',
	'coll-start_book_creator' => 'წიგნის ოსტატის ჩართვა',
	'coll-book_creator_continue' => 'წიგნის ოსტატის გამოყენების გაგრძელება',
	'coll-book_creator_disable_text' => "'''წიგნის ოსტატი''' გაითიშება, ხოლო წიგნი რომელზეც თქვენ მუშაობთ გაითიშება.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/წიგნის ოსტატის ტექსტი',
	'coll-collection' => 'წიგნი',
	'coll-collections' => 'წიგნები',
	'coll-exclusion_category_title' => 'დაუბეჭდავი',
	'coll-print_template_prefix' => 'დაბეჭვდა',
	'coll-print_template_pattern' => '$1/დაბეჭვდა',
	'coll-unknown_subpage_title' => 'უცნობი ქვეგვერდი',
	'coll-unknown_subpage_text' => '[[Special:Book|წიგნის]] ეს ქვეგვერდები არ არსებობს',
	'coll-couldnotaddarticle_title' => 'შეუძლებელია ვიკი-გვერდის დამატება',
	'coll-couldnotaddarticle_msg' => 'შეუძლებელია ვიკი-გვერდის დამატება.',
	'coll-couldnotremovearticle_title' => 'შეუძლებელია ვიკი-გვერდის მოშორება',
	'coll-couldnotremovearticle_msg' => 'შეუძლებელია ვიკი-გვერდის წაშლა.',
	'coll-noscript_text' => '<h1>საჭიროა JavaScript!</h1>
<strong>თქვენ ინტერნეტ მიმომხილველს არა აქვს JavaScript მხარდაჭერა ან ეს მხარდაჭერა გათიშულია.
ეს გვერდი ცერ იმუშავებს სწორად, სანამ JavaScript არ ჩაირთვება.</strong>',
	'coll-savedbook_template' => 'შენახული_წიგნი',
	'coll-your_book' => 'თქვენი წიგნი',
	'coll-download_title' => 'ჩამოტვირთვა',
	'coll-download_text' => 'წიგნის ფადმოსაწერად აირჩიეთ ფორმატი და დააჭირეთ ღილაკს.',
	'coll-download_as_text' => 'დააჭირეთ თქვენი თქვენი წიგნის $1 ფორმატში გადასაწერად.',
	'coll-download' => 'ჩამოტვირთვა',
	'coll-format_label' => 'ფორმატი:',
	'coll-remove' => 'წაშლა',
	'coll-show' => 'ჩვენება',
	'coll-move_to_top' => 'ასწიეთ',
	'coll-move_up' => 'ჩაუშვითშ',
	'coll-move_down' => 'ქვემოთ გადატანა',
	'coll-move_to_bottom' => 'ფსკერამდე ჩასვლა',
	'coll-title' => 'სათაური:',
	'coll-subtitle' => 'ქვესათაური:',
	'coll-contents' => 'შინაარსი',
	'coll-drag_and_drop' => 'ვიკი გვერდებისა და თავების დასალაგებლად, გადმოიტანეთ ისინი თაგვით.',
	'coll-create_chapter' => 'თავის შექმნა',
	'coll-sort_alphabetically' => 'ანბანზე დალაგება',
	'coll-rename' => 'გადრქმევა',
	'coll-new_chapter' => 'შეიყვანეთ თავის ახალი სათაური',
	'coll-rename_chapter' => 'შეიყვანეთ თავის ახალი სათაური',
	'coll-no_such_category' => 'ამგვარი კატეგორია არ არსებობს',
	'coll-notitle_title' => 'გვერდის სათაურის აღქმა ვერ ხერხდება',
	'coll-post_failed_title' => 'POST-მოთხოვნა არ შესრულდა',
	'coll-post_failed_msg' => 'POST-მოთხოვნა $1-სადმი ვერ შესრულდა ($2).',
	'coll-mwserve_failed_title' => 'ჩახატვის სერვერის შეცდომა',
	'coll-mwserve_failed_msg' => 'ჩახატვის სერვერზე შეცდომა: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'სერვერისგან პასუხის მიღების შეცდომა',
	'coll-empty_collection' => 'ცარიელი წიგნი',
	'coll-revision' => 'ვერსია: $1',
	'coll-save_collection_title' => 'წიგნის შენახვა და მისი ხილვის დაშვება',
	'coll-save_collection_text' => 'აირჩიეთ თქვენი წიგნის მდებარეობა:',
	'coll-login_to_save' => 'წიგნის შენახვისთვის და მომვალი გამოყენებისთვის [[Special:UserLogin|წარადგინეთ თავი სისტემისადმი ან შექმენით ანგარიში]].',
	'coll-personal_collection_label' => 'პირადი წიგნი:',
	'coll-community_collection_label' => 'საზოგადოების წიგნი:',
	'coll-save_collection' => 'წიგნის შენახვა',
	'coll-save_category' => 'ყველა შენახული წიგნი ინახება [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] კატეგორიაში.',
	'coll-overwrite_title' => 'გვერდი უკვე არსებობს.
გსურთ მისი გადაწერა?',
	'coll-overwrite_text' => 'გვერდი სახელით  [[:$1]] უკვე არსებობს.
გსურთ მისი შეცვლა თქვენი გვერდით?',
	'coll-yes' => 'ჰო',
	'coll-no' => 'არა',
	'coll-load_overwrite_text' => 'თქვენ უკვე გაგაჩნიათ რამდენიმე გვერდი წიგნში. 
გსურთ თქვენი მოქმედი წიგნის თავიდან გადაწერა, ახალი მატერიალის დამატება თუ ამ წიგნის ატვირთვის გაუქმება?',
	'coll-overwrite' => 'თავიდან გადაწერა',
	'coll-append' => 'თანდართვა',
	'coll-cancel' => 'გაუქმება',
	'coll-update' => 'განახლება',
	'coll-limit_exceeded_title' => 'ძალიან დიდი წიგნი',
	'coll-limit_exceeded_text' => 'წიგნს აქვვს ძალიან დიდი ზომა.
დამატებითი გვერდების ჩამატება შეუძლებელია.',
	'coll-rendering_title' => 'შექმნა',
	'coll-rendering_text' => '<p><strong>გთხოვთ დაიცადოთ, მიმდინარეობს დოკუმენტის შექმნა.</strong></p>

<p><strong>მუშაობის პროგრესი:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>ეს გვერდი უნდა განახლდეს ყოველ რამდენიმე წამში.
თუ ეს არ ხდება, გთხოვთ დააჭიროთ ბროუზერის «განახლების» ღილაკს.</p>',
	'coll-rendering_status' => '<strong>სტატუსი:</strong> $1',
	'coll-rendering_article' => '(სტატია: $1)',
	'coll-rendering_page' => '(გვერდი: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/გვერდის შესახებ ტექსტის გადაყვანა',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/კოლექციის შესახებ ტექსტის გადაყვანა',
	'coll-rendering_finished_title' => 'შექმნა დასრულებულია',
	'coll-rendering_finished_text' => '<strong>დოკუმენტის ფაილი შექმნილია.</strong>
<strong>[$1 ფაილის კომპიუტერზე]</strong> ჩამოტვირთვა.

აღნიშვნა:
* რეზულტატით უკმაყოფილებლობის შემთხვევაში შეიხედეთ [[{{MediaWiki:Coll-helppage}}|წიგნებზე დამხმარე გვერდზე]], შესაძლოა ამ გვერდზე აღწერილია გაუმჯობესების საშუალება.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/გვერდის ტექსტში გადაყვანა',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/კოლექციის ტექსტში გადაყვანა',
	'coll-notfound_title' => 'წიგნი არ არის ნაპოვნი',
	'coll-notfound_text' => 'შეუძლებელია გვერდის წიგნის პოვნა',
	'coll-download_notfound_title' => 'ფაილი არ იქნა მოძიებული',
	'coll-download_notfound_text' => 'ფაილი, რომლის ატვირთვასაც ცდილობს, არ არსებობს. შესაძლოა იგი წაიშალა და საჭიროა მისი აღდგენა.',
	'coll-download_failed_title' => 'შეცდომა ჩაწერისას',
	'coll-download_failed_text' => 'წარმოიშვა შეცდომა შემდეგ ფაილის ჩაწერისას: $1',
	'coll-is_cached' => '<ul><li>აღმოჩენილია ამ დოკუმენტის ქეშირებული ვერსია, რენდირება საჭირო არ გახდა.<a href="$1">რენდირების მაინც გაშვება.</a></li></ul>',
	'coll-excluded-templates' => '* თარგები კატეგორიიდან [[:Category:$1|$1]] ამოღებული იქნენ.',
	'coll-blacklisted-templates' => '* შავი სიის თარგები [[:$1]] ამოღებული იქნენ.',
	'coll-return_to_collection' => '<p>დაბრუნება <a href="$1">$2</a></p>',
	'coll-book_title' => 'დაბეჭდელი წიგნის შეკვეთა',
	'coll-book_text' => 'ჩვენი პარტნიორისგან დაბეჭდილი წიგნის შეკვეთა:',
	'coll-order_from_pp' => 'წინასწარ გადახედვა $1 მესვეობით',
	'coll-about_pp' => '$1-ის შესახებ',
	'coll-invalid_podpartner_title' => 'არასწორი POD პარნიორი.',
	'coll-invalid_podpartner_msg' => 'მოცემული POD-პარტნიორი არასწორია.
დაუკავშირდით MediaWiki-ს თქვენს ადმინისტრატორს.',
	'coll-license' => 'ლიცენზია',
	'coll-return_to' => 'დაბრუნება [[:$1]]-ზე.',
	'coll-more_info' => 'უფრო მეტი ინფორმაციის ჩვენება',
	'coll-hide_info' => 'ინფორმაციის დამალვა',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/ინფორმაცია PediaPress-ის შეკვვეთაზე',
	'coll-suggest_title' => 'შემოთავაზებული გვერდები თქვენი წიგნისათვის',
	'coll-suggest_intro_text' => 'მოსაზრებატა სია დაფუძნებულია თქვენს წიგნში უკვე არსებულ გვერდებზე.
სია ახლდება ყოველთვის, როდესაც თქვენ დააჭერთ განახლების ან წაშლის გვერდს.',
	'coll-suggested_articles' => 'წინადადებები',
	'coll-suggest_reset_bans' => 'გადატვირთვა',
	'coll-suggest_reset_bans_tooltip' => 'აჩვენეთ ადრე წაშლილი მოსაზრებები',
	'coll-suggest_add_selected' => 'არჩეული გვერდების დამატება',
	'coll-suggest_ban_selected' => 'არჩეული გვერდების წაშლა',
	'coll-suggest_your_book' => 'თქვენი წიგნი',
	'coll-suggest_show' => 'ჩვენება',
	'coll-suggest_ban_tooltip' => 'წინადადებების სიიდან ამ გვერდის ამოღება',
	'coll-suggest_article_ban' => 'გვერდი <strong>$1</strong> იყო წაშლილი მოსაზრებათა რიგიდან ($2).',
	'coll-suggest_article_add' => 'თქვენ ($2) წიგნში იყო ჩამატებული გვერდი <strong>$1</strong>.',
	'coll-suggest_article_remove' => 'თქვენი წიგნიდან ($2) წაიშალა გვერდი <strong>$1</strong>.',
	'coll-suggest_undo_tooltip' => 'ცვლილების გაუქმება',
	'coll-suggest_undo' => 'გაუქმება',
	'coll-load_local_book' => 'დააჭირეთ «OK თქვენ %NUMPAGES% გვერდების შემცვლელ %TITLE% წიგნთან მუშაობის გაგრძელებისთვის. დაააჭირეთ «გაუქმება» ღილაკს რომ წაშალოთ იგი და დაიწყოთ ცარიელი წიგნი.',
	'right-collectionsaveasuserpage' => 'შეინახე წიგნი, როგორც მომხმარებლის გვერდი',
	'right-collectionsaveascommunitypage' => 'შეინახეთ წიგნი, როგორც საზოგადოების გვერდი',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'coll-desc' => '[[Special:Book|បង្កើត​សៀវភៅ]]',
	'coll-book_creator_intro' => "<big>អ្នកអាចបង្កើតសៀវភៅមួយដែលមានទំព័រវិគីតាមតែអ្នកជ្រើសរើស​ ដោយប្រើ''ឧបករណ៍បង្កើតសៀវភៅ''។ អ្នកអាចនាំចេញសៀវភៅនេះជាច្រើទំរង់ (ដូចជា PDF ឬ ODF) ឬបញ្ជាកក់ច្បាប់ចំលងបោះពុម្ភ។</big>",
	'coll-manage_your_book' => 'រៀបចំសៀវភៅរបស់អ្នក',
	'coll-book_creator_help' => 'សូមមើល [[{{MediaWiki:Coll-helppage}}|ទំព័រជំនួយអំពីសៀវភៅ]] សំរាប់ព័ត៌មានបន្ថែម។',
	'coll-start_book_creator' => 'បើកប្រើឧបករណ៍បង្កើតសៀវភៅ',
	'coll-book_creator_continue' => 'បន្តប្រើឧបករណ៍បង្កើតសៀវភៅ',
	'coll-book_creator_disable_text' => "''ឧបករណ៍បង្កើតសៀវភៅ'' និងត្រូវបិទឈប់ប្រើ ហើយសៀវភៅដែលអ្នកកំពុងបង្កើតនឹងត្រូវដកចេញ។",
	'coll-collection' => 'សៀវភៅ',
	'coll-collections' => 'សៀវភៅ',
	'coll-print_template_prefix' => 'បោះពុម្ព',
	'coll-print_template_pattern' => '$1/បោះពុម្ព',
	'coll-unknown_subpage_title' => 'ទំពររងមិនស្គាល់',
	'coll-unknown_subpage_text' => 'ទំព័ររងក្នុង[[Special:Book|សៀវភៅ]]នេះមិនមានទេ',
	'coll-couldnotaddarticle_title' => 'មិនអាចបន្ថែមទំព័រវិគី',
	'coll-couldnotaddarticle_msg' => 'ទំព័រវិគីនេះមិនអាចបន្ថែមបានទេ។',
	'coll-couldnotremovearticle_title' => 'មិនអាចដកចេញទំព័រវិគី',
	'coll-couldnotremovearticle_msg' => 'ទំព័រវិគីនេះមិនអាចដកចេញបានទេ។',
	'coll-noscript_text' => '<h1>ត្រូវការ JavaScript!</h1>
<strong>ឧបករណ៍រាវរក (browser) របស់អ្នកមិនគាំទ្រ JavaScript ឬ JavaScript ត្រូវបានបិទ។
ទំព័រនេះមិនអាចដំណើរការបានត្រឹមត្រូវទេ លុះត្រាតែអ្នកបើកឱ្យ JavaScript ដើរ។</strong>',
	'coll-savedbook_template' => 'សៀវភៅដែលបានរក្សាទុកហើយ',
	'coll-your_book' => 'សៀវភៅ​របស់អ្នក',
	'coll-download_title' => 'ទាញយក',
	'coll-download_text' => 'ដើម្បីទាញយកសៀវភៅរបស់អ្នក សូមជ្រើសរើសទំរង់ដែលចង់ទាញយក រួចចុចប៊ូតុង។',
	'coll-download_as_text' => 'ដើម្បីទាញយកសៀវភៅរបស់អ្នក ក្នុងទំរង់ជា $1 សូមចុចប៊ូតុង។',
	'coll-download' => 'ទាញយក',
	'coll-format_label' => 'ទម្រង់:',
	'coll-remove' => 'ដកចេញ',
	'coll-show' => 'បង្ហាញ',
	'coll-move_to_top' => 'ទៅ​លើគេបំផុត',
	'coll-move_up' => 'រំកិលឡើង',
	'coll-move_down' => 'រំកិលចុះ',
	'coll-move_to_bottom' => 'ទៅក្រោមគេបំផុត',
	'coll-title' => 'ចំណងជើង៖',
	'coll-subtitle' => 'ចំណងជើងរង៖',
	'coll-contents' => 'ខ្លឹមសារ',
	'coll-drag_and_drop' => 'ប្រើមុខងារ «ចាប់ដាក់» ដើម្បីរៀបលំដាប់ទំព័រវិគីនិងជំពូក',
	'coll-create_chapter' => 'បង្កើត​ជំពូកថ្មី',
	'coll-sort_alphabetically' => 'តម្រៀប​ទំព័រ​​តាម​អក្ខរក្រម',
	'coll-rename' => 'ប្តូរឈ្មោះ',
	'coll-new_chapter' => 'ដាក់ឈ្មោះឱ្យ ជំពូកថ្មី',
	'coll-rename_chapter' => 'ដាក់ឈ្មោះថ្មី ឱ្យជំពូក',
	'coll-no_such_category' => 'គ្មានចំណាត់ថ្នាក់ក្រុមបែបនេះទេ',
	'coll-notitle_title' => 'មិន​អាចកំណត់​ចំណងជើង​នៃទំព័រ',
	'coll-empty_collection' => 'សៀវភៅទទេ',
	'coll-revision' => 'កំណែ​ប្រែ​៖ $1',
	'coll-save_collection_title' => 'រក្សាទុក​និង​ចែករំលែក​សៀវភៅ',
	'coll-save_collection_text' => 'ជ្រើសរើស​តំបន់៖',
	'coll-login_to_save' => 'ប្រសិនបើ​អ្នក​ចង់​រក្សាទុក​សៀវភៅ​សម្រាប់​ប្រើប្រាស់​លើកក្រោយ សូម​[[Special:UserLogin|កត់ឈ្មោះចូល​ឬ​បង្កើត​គណនី]]​។',
	'coll-personal_collection_label' => 'សៀវភៅ​ផ្ទាល់ខ្លួន៖',
	'coll-community_collection_label' => 'សៀវភៅ​សហគមន៍៖',
	'coll-save_collection' => 'រក្សាទុកសៀវភៅ',
	'coll-save_category' => 'សៀវភៅទាំងអស់ដែលបានរក្សាទុកត្រូវបានបន្ថែមទៅក្នុងចំណាត់ថ្នាក់ក្រុម[[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]',
	'coll-overwrite_title' => 'ទំព័រ​មានហើយ។ សរសេរ​ជាន់ពីលើ ?',
	'coll-overwrite_text' => 'ទំព័រដែលមានឈ្មោះ [[:$1]] មានរួចហើយ។ តើអ្នកចង់ជំនួសវាដោយកម្រងឯកសាររបស់អ្នកឬ?',
	'coll-yes' => 'បាទ / ចាស៎',
	'coll-no' => 'ទេ',
	'coll-load_overwrite_text' => 'អ្នក​មាន​ទំព័រ​ខ្លះនៅក្នុង​សៀវភៅ​នេះ​រួចហើយ​។ តើ​អ្នក​ចង់​សរសេរ​ជាន់ពីលើ​សៀវភៅ​បច្ចុប្បន្ន​របស់​អ្នក ដោយ​បន្ថែម​មាតិកា​ថ្មី ឬក៏​ច្រានចោល​ការផ្ទុក​សៀវភៅនេះ​?',
	'coll-overwrite' => 'សរសេរជាន់ពីលើ',
	'coll-append' => 'បន្ថែមនៅចុង',
	'coll-cancel' => 'បោះបង់',
	'coll-update' => 'ធ្វើឱ្យទាន់សម័យ',
	'coll-limit_exceeded_title' => 'សៀវភៅ​ធំជ្រុល',
	'coll-limit_exceeded_text' => 'សៀវភៅ​របស់អ្នក​ធំជ្រុលពេកហើយ​។ អ្នក​មិន​អាច​បន្ថែម​ទំព័រ​ទៅក្នុង​វា​ទៀតទេ​។',
	'coll-rendering_status' => '<strong>ស្ថានភាព៖</strong> $1',
	'coll-rendering_article' => '(ទំព័រវិគី៖ $1)',
	'coll-rendering_page' => '(ទំព័រ៖ $1)',
	'coll-notfound_title' => 'រកមិនឃើញ​សៀវភៅ',
	'coll-notfound_text' => 'រកមិនឃើញសៀវភៅទេ។',
	'coll-download_notfound_title' => 'ឯកសារ​រកមិនឃើញ​',
	'coll-download_notfound_text' => 'ឯកសារដែលអ្នកព្យាយាមទាញយកមិនមានទេ៖
នេះប្រហែលជាវាត្រូវបានគេលុបចោល​ហើយត្រូវការអោយបង្កើតឡើងវិញ។',
	'coll-download_failed_title' => 'បញ្ហាពេលកំពុងទាញយក',
	'coll-download_failed_text' => 'មានបញ្ហាមួយកើតឡើងពេលកំពុងទាញយកឯកសារ៖ $1',
	'coll-return_to_collection' => '<p>ត្រឡប់ទៅកាន់<a href="$1">$2</a></p>វិញ',
	'coll-book_title' => 'ទិញសៀវភៅដែលបានបោះពុម្ព',
	'coll-order_from_pp' => 'ការមើលមុនពី $1',
	'coll-about_pp' => 'អំពី$1',
	'coll-license' => 'អាជ្ញាប័ណ្ណ',
	'coll-return_to' => 'ត្រឡប់ទៅកាន់ [[:$1]]',
	'coll-more_info' => 'បង្ហាញ​ព័ត៌មានបន្ថែម​',
	'coll-hide_info' => 'លាក់​ព័ត៌មាន​',
	'coll-suggest_your_book' => 'សៀវភៅ​របស់អ្នក',
	'coll-suggest_show' => 'បង្ហាញ',
	'coll-suggest_ban_tooltip' => 'ដកទំព័រនេះចេញពីបញ្ជីបេក្ខភាព',
	'coll-suggest_article_ban' => 'ទំព័រ <strong>$1</strong> ត្រូវបានដកចេញពីបញ្ជីបេក្ខភាព($2)រួចហើយ។',
	'coll-suggest_article_add' => 'ទំព័រ <strong>$1</strong> ត្រូវបានបន្ថែមចូលទៅក្នុងសៀវភៅរបស់អ្នក($2)ហើយ។',
	'coll-suggest_article_remove' => 'ទំព័រ <strong>$1</strong> ត្រូវបានដកចេញពីសៀវភៅរបស់អ្នក($2)ហើយ។',
	'coll-suggest_undo_tooltip' => 'ត្រឡប់វិញ',
	'coll-suggest_undo' => 'ត្រឡប់វិញ',
	'coll-load_local_book' => 'ចុច «យល់ព្រម» ដើម្បីបន្តជាមួយសៀវភៅរបស់អ្នក %TITLE% ដែលមានទំព័រវិគីចំនួន %NUMPAGES%។ ចុច «ចាកចេញ» ដើម្បីលុបវាចោលរួចចាប់ផ្ដើមជាមួយសៀវភៅទទេមួយ។',
	'right-collectionsaveasuserpage' => 'រក្សា​ទុកសៀវភៅ​​ជា​ទំព័រអ្នកប្រើប្រាស់',
	'right-collectionsaveascommunitypage' => 'រក្សា​ទុកសៀវភៅ​​ជា​ទំព័រ​សហគមន៍​',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'coll-download_title' => 'ಡೌನ್‍ಲೋಡ್',
	'coll-download' => 'ಡೌನ್‍ಲೋಡ್',
	'coll-show' => 'ತೋರಿಸು',
	'coll-title' => 'ಶೀರ್ಷಿಕೆ:',
	'coll-yes' => 'ಹೌದು',
	'coll-no' => 'ಇಲ್ಲ',
	'coll-cancel' => 'ರದ್ದು ಮಾಡು',
	'coll-rendering_status' => '<strong>ಸ್ಥಾನಮಾನ:</strong> $1',
	'coll-suggest_show' => 'ತೋರಿಸು',
);

/** Korean (한국어)
 * @author Albamhandae
 * @author Ilovesabbath
 * @author Klutzy
 * @author Kwj2772
 * @author Yknok29
 */
$messages['ko'] = array(
	'coll-desc' => '[[Special:Book|책 만들기]]',
	'coll-book_creator_intro' => "<big>''책 생성기''로 당신의 선택에 따라 위키 문서를 담은 책을 생성할 수 있습니다.  다른 포맷(PDF 또는 ODF)으로 책을 내보낼 수 있으며 인쇄된 책을 주문할 수도 있습니다.</big>",
	'coll-manage_your_book' => '책 관리하기',
	'coll-book_creator_help' => '자세한 정보에 대해서는 [[{{MediaWiki:Coll-helppage}}|책에 대한 도움말]]을 참고하십시오.',
	'coll-start_book_creator' => '책 생성기 시작하기',
	'coll-book_creator_continue' => '책 생성기를 이용해 진행하기',
	'coll-book_creator_disable_text' => "'''책 생성기'''가 비활성화되고 작업하던 책이 제거될 것입니다.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/책 생성기',
	'coll-collection' => '책',
	'coll-collections' => '책',
	'coll-exclusion_category_title' => '인쇄시 제외할 문서',
	'coll-print_template_prefix' => '인쇄',
	'coll-print_template_pattern' => '$1/인쇄',
	'coll-unknown_subpage_title' => '알 수 없는 하위 문서',
	'coll-unknown_subpage_text' => '[[Special:Book|책]]의 이 하위 문서가 없습니다.',
	'coll-couldnotaddarticle_title' => '문서 추가 실패',
	'coll-couldnotaddarticle_msg' => '이 위키 문서를 추가하지 못했습니다.',
	'coll-couldnotremovearticle_title' => '문서 제거 실패',
	'coll-couldnotremovearticle_msg' => '해당 문서를 제거하지 못했습니다.',
	'coll-noscript_text' => '<h1>자바스크립트가 필요합니다!</h1>
<strong>당신의 브라우저는 자바스크립트를 지원하지 않거나 비활성화되어 있습니다.
자바스크립트가 활성화되지 않으면 이 문서는 제대로 동작하지 않을 수 있습니다.</strong>',
	'coll-savedbook_template' => '책_완성본',
	'coll-your_book' => '당신의 책',
	'coll-download_title' => '다운로드',
	'coll-download_text' => '책을 다운로드하려면 원하는 형식을 선택한 다음 버튼을 클릭해주세요.',
	'coll-download_as_text' => '$1 형식으로 된 책을 다운로드하려면 버튼을 클릭해주세요.',
	'coll-download' => '다운로드',
	'coll-format_label' => '포맷:',
	'coll-remove' => '제거',
	'coll-show' => '보이기',
	'coll-move_to_top' => '맨 위로 이동',
	'coll-move_up' => '위로 옮기기',
	'coll-move_down' => '아래로 옮기기',
	'coll-move_to_bottom' => '맨 아래로 이동',
	'coll-title' => '제목:',
	'coll-subtitle' => '부제목:',
	'coll-contents' => '내용',
	'coll-drag_and_drop' => '드래그&드롭 기능을 이용해 책 내용의 정렬이 가능합니다',
	'coll-create_chapter' => '새로운 장 만들기',
	'coll-sort_alphabetically' => '알파벳순으로 정렬',
	'coll-rename' => '이름 바꾸기',
	'coll-new_chapter' => '새 장의 이름 입력',
	'coll-rename_chapter' => '새 장의 제목 입력',
	'coll-no_such_category' => '해당 분류가 존재하지 않음',
	'coll-notitle_title' => '제목이 없습니다.',
	'coll-post_failed_title' => 'POST 요청에 실패하였습니다.',
	'coll-post_failed_msg' => '$1로의 POST 요청 실패 ($2)',
	'coll-mwserve_failed_title' => '렌더 서버 오류',
	'coll-mwserve_failed_msg' => '렌더링 서버에서 오류가 발생했습니다: <nowiki>$1</nowiki>',
	'coll-error_reponse' => '서버 오류',
	'coll-empty_collection' => '빈 책',
	'coll-revision' => '판: $1',
	'coll-save_collection_title' => '책 저장/공유',
	'coll-save_collection_text' => '책을 저장할 위치:',
	'coll-login_to_save' => '나중에 사용하기 위해 책을 저장하길 원하신다면 [[Special:UserLogin|로그인하거나 계정을 생성]]해 주세요.',
	'coll-personal_collection_label' => '개인 책:',
	'coll-community_collection_label' => '공동체 책:',
	'coll-save_collection' => '책 저장',
	'coll-save_category' => '모든 저장된 책은 [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] 분류에 포함됩니다.',
	'coll-overwrite_title' => '문서가 존재합니다.
덮어쓰시겠습니까?',
	'coll-overwrite_text' => '[[:$1]]이라는 이름을 가진 문서가 이미 존재합니다.
정말로 당신의 책을 바꾸시겠습니까?',
	'coll-yes' => '예',
	'coll-no' => '아니오',
	'coll-load_overwrite_text' => '기존 책에 이미 다른 내용이 들어 있습니다. 기존 책을 지우고 새로 만들거나, 이어서 사용하거나, 또는 책 불러오기를 취소할 수 있습니다.',
	'coll-overwrite' => '덮어쓰기',
	'coll-append' => '더하기',
	'coll-cancel' => '취소',
	'coll-update' => '업데이트',
	'coll-limit_exceeded_title' => '책이 너무 큽니다.',
	'coll-limit_exceeded_text' => '책 내용이 너무 많습니다. 더 이상 내용을 추가할 수 없습니다.',
	'coll-rendering_title' => '렌더링',
	'coll-rendering_text' => '<p><strong>문서가 생성될 때까지 잠시 기다려주십시오.</strong></p>

<p><strong>진행률:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>이 문서는 몇 초마다 새로고쳐져야 합니다.
만약 제대로 동작하지 않는다면, 브라우저를 새로고침하십시오.</p>',
	'coll-rendering_status' => '<strong>상태:</strong> $1',
	'coll-rendering_article' => '(문서: $1)',
	'coll-rendering_page' => '(페이지: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/책 만들기',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/책 만들기',
	'coll-rendering_finished_title' => '렌더링 완료',
	'coll-rendering_finished_text' => '<strong>문서 파일이 생성되었습니다.</strong>
이 파일을 당신의 컴퓨터로 <strong>[$1 다운로드]</strong>하십시오.

참고:
* 출력 결과에 만족하지 않으신가요? 이 기능을 향상시킬 수 있도록 [[{{MediaWiki:Coll-helppage}}|책에 대한 도움말 문서]]를 참고해 주세요.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/책 만들기',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/책 만들기',
	'coll-notfound_title' => '책을 찾을 수 없음',
	'coll-notfound_text' => '해당 페이지를 찾을 수 없습니다.',
	'coll-download_notfound_title' => '파일을 찾을 수 없습니다.',
	'coll-download_notfound_text' => '다운로드 받을 파일이 없습니다: 파일을 지웠을 가능성이 있으며, 다시 만들 필요가 있습니다.',
	'coll-download_failed_title' => '다운로드 중 오류',
	'coll-download_failed_text' => '파일을 다운로드하는 중 오류가 있었습니다: $1',
	'coll-is_cached' => '<ul><li>이 문서의 캐시된 버전이 발견되었습니다. 따라서 다시 렌더링하지 않으셔도 됩니다. <a href="$1">다시 렌더링하기</a></li></ul>',
	'coll-excluded-templates' => '[[:Category:$1|$1]] 분류에 속한 틀은 제외되었습니다.',
	'coll-blacklisted-templates' => '틀 블랙리스트 [[:$1]]에 있는 틀은 제외되었습니다.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a>(으)로 돌아갑니다.</p>',
	'coll-book_title' => '인쇄된 책으로 주문',
	'coll-book_text' => '인쇄 협력자를 통해 책을 인쇄합니다.',
	'coll-order_from_pp' => '$1에서 책 미리 보기',
	'coll-about_pp' => '$1에 대하여',
	'coll-invalid_podpartner_title' => '인쇄 협력자 정보 잘못됨',
	'coll-invalid_podpartner_msg' => '제공받은 인쇄 협력자 정보가 잘못되었습니다. 관리자에게 해당 문제를 연락해주세요.',
	'coll-license' => '라이선스',
	'coll-return_to' => '[[:$1]](으)로 돌아갑니다.',
	'coll-more_info' => '정보 더 보기',
	'coll-hide_info' => '정보 숨기기',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress 주문 정보',
	'coll-suggest_title' => '당신의 책에 넣을 문서 제안',
	'coll-suggest_intro_text' => '문서 제안은 지금 당신의 책에 있는 위키 문서의 집합을 바탕으로 이루어집니다.
추가 또는 제거 버튼을 누를 때마다 목록이 업데이트됩니다.',
	'coll-suggested_articles' => '추천하는 문서',
	'coll-suggest_reset_bans' => '초기화',
	'coll-suggest_reset_bans_tooltip' => '이전에 지운 문서 제안을 표시합니다.',
	'coll-suggest_add_selected' => '선택한 문서를 추가하기',
	'coll-suggest_ban_selected' => '선택한 문서 지우기',
	'coll-suggest_your_book' => '당신의 책',
	'coll-suggest_show' => '보기',
	'coll-suggest_ban_tooltip' => '이 문서를 문서 제안 목록에서 빼기',
	'coll-suggest_article_ban' => '<strong>$1</strong> 문서가 문서 제안 목록에서 지워졌습니다 ($2).',
	'coll-suggest_article_add' => '<strong>$1</strong> 문서가 문서 제안 목록에 추가되었습니다 ($2).',
	'coll-suggest_article_remove' => '<strong>$1</strong> 문서를 당신의 책에서 뺐습니다 ($2).',
	'coll-suggest_undo_tooltip' => '이 동작 되돌리기',
	'coll-suggest_undo' => '되돌리기',
	'coll-load_local_book' => '문서 %NUMPAGES%개를 포함하고 있는 %TITLE% 책을 계속 작업하시려면 확인을 클릭하십시오. 책을 삭제하고 새 책으로 다시 시작하려면 취소를 클릭하십시오',
	'right-collectionsaveasuserpage' => '사용자 문서에 책 저장하기',
	'right-collectionsaveascommunitypage' => '프로젝트 문서에 책 저장하기',
);

/** Krio (Krio)
 * @author Protostar
 */
$messages['kri'] = array(
	'coll-collection' => 'Buk',
	'coll-collections' => 'Buk-dèm',
	'coll-exclusion_category_title' => 'Nò put dis-ya da di print',
	'coll-print_template_prefix' => 'Print',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'coll-contents' => 'Manga Sulud',
	'coll-cancel' => 'Kanselar',
	'coll-about_pp' => 'Angut sa Iwan $1',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'coll-desc' => '[[Special:Book|Böösher ußjäve]]',
	'coll-book_creator_intro' => '<big>Mem „Bööscher Maache“ kanns De e Booch met Sigge uss_em Wiki maache, di De sellver ußjesöhk häs. Ding Booch kanns De en ongerscheidlijje Fommaate expotteere, zem Beishpöll als <i lang="en">PDF</i> udder <i lang="en">ODF</i>, un De kanns et och jedröck beshtelle.</big>',
	'coll-manage_your_book' => 'Donn Ding Booch beärrbeide',
	'coll-book_creator_help' => 'Loor op dä [[{{MediaWiki:Coll-helppage}}|Hölpsigg övver et Bööscher-Maache]], wann De mieh weße wells.',
	'coll-start_book_creator' => 'Donn et Bööschermaache aanfange',
	'coll-book_creator_continue' => 'Donn mem Bööschermaache wigger maache',
	'coll-book_creator_disable_text' => 'Et „Bööschermache“ weed affjeschalldt, un dat Booch, woh De draan aam werke bes, jeiht verschött.',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Övver et Bööschermaache',
	'coll-collection' => 'Booch',
	'coll-collections' => 'Bööscher',
	'coll-exclusion_category_title' => 'Nit metdrökke',
	'coll-print_template_prefix' => 'Dröcke',
	'coll-print_template_pattern' => '$1/Dröcke',
	'coll-unknown_subpage_title' => 'Unbekannte Ungersigg',
	'coll-unknown_subpage_text' => 'Di Ungersigg fun „[[Special:Book|Booch]]“ jidd_et nit',
	'coll-couldnotaddarticle_title' => 'Kunnt de Wiki-Sigg nit dobei donn',
	'coll-couldnotaddarticle_msg' => 'Di Sigg vum Wiki kunnt nit dobei jedonn wääde.',
	'coll-couldnotremovearticle_title' => 'Kunnt de Wiki-Sigg nit fott lohße',
	'coll-couldnotremovearticle_msg' => 'Di Sigg vum Wiki kunnt nit fott jelohße wääde.',
	'coll-noscript_text' => '<h1>Bruch JavaSkripp!</h1>
<strong>Dinge Brauser kann kei JavaSkripp udder et es affjeschalldt.
Di Sigg hee weed oohne JavaSkripp nit donn.</strong>',
	'coll-savedbook_template' => 'Avjespeichert_Booch',
	'coll-your_book' => 'Ding Boch',
	'coll-download_title' => 'Eronger laade',
	'coll-download_text' => 'Öm Ding Booch eronger ze laade, söhk Der e Fommaat uß, un donn op dat Knöppsche klecke.',
	'coll-download_as_text' => 'Öm Ding Booch em $1-Fommaat erunger ze laade, donn dä Knopp klekke.',
	'coll-download' => 'Eronger laade',
	'coll-format_label' => 'Fommaat:',
	'coll-remove' => 'Fott lohße',
	'coll-show' => 'Zeich',
	'coll-move_to_top' => 'Aan der Aanfang donn',
	'coll-move_up' => 'Erop schuve',
	'coll-move_down' => 'Eronger schuve',
	'coll-move_to_bottom' => 'An et Engk donn',
	'coll-title' => 'Tittel:',
	'coll-subtitle' => 'Ongertittel:',
	'coll-contents' => 'Enhallt',
	'coll-drag_and_drop' => 'Donn de Sigge un Kapittelle met de Muuß aan Dingem Kompjuter eröm trekke un schuve, wann De se en en ander Reijefollesch han wells.',
	'coll-create_chapter' => 'Kapittel neu aanlääje',
	'coll-sort_alphabetically' => 'Noh_m Allfabeet zoteere',
	'coll-rename' => 'Ömnänne',
	'coll-new_chapter' => 'Jif ene Name för e neu Kapittel aan',
	'coll-rename_chapter' => 'Jif ene neu Name för dat Kapittel en',
	'coll-no_such_category' => 'Di Saachjrupp jidd_et nit',
	'coll-notitle_title' => 'Mer kunnte dä Tittel för di Sigg nit erus fenge.',
	'coll-post_failed_title' => 'Dä Oproof es donevve jejange (POST)',
	'coll-post_failed_msg' => "Dä Oproof es donevve jejange (POST noh $1 — ''$2'')",
	'coll-mwserve_failed_title' => 'Fähler en dämm Server för et Darstelle',
	'coll-mwserve_failed_msg' => 'En dämm Server för et Darstelle es ene Fähler opjetrodde: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Dä Server meldt ene Fähler',
	'coll-empty_collection' => 'En däm Booch es nix dren',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Et Booch öffentlesch afspeichere',
	'coll-save_collection_text' => 'Sök ene Plaz uß:',
	'coll-login_to_save' => 'Wann De Bööscher afspeichere wells, för se spääder noch ens ze bruche,
donn [[Special:UserLogin|enlogge, udder Desch aanmelde]].',
	'coll-personal_collection_label' => 'Ding persöönlesh Booch:',
	'coll-community_collection_label' => 'En öffentlesch Booch:',
	'coll-save_collection' => 'Dat Booch avspeichere',
	'coll-save_category' => 'Böösher wäde en dä {{int:Category}} [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] jesammt.',
	'coll-overwrite_title' => 'Die Sigg jidd et ald. Överschrieve?',
	'coll-overwrite_text' => 'En Sigg met dämm Name [[:$1]] jidd_et alld.
Wells De se met Dinge Sammlong övverschriive?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Nä',
	'coll-load_overwrite_text' => 'En Dingem Booch sinn_er ald Sigge dren.
Wells de dat Booch övverschrieve, di neu Saache dran 
aanhänge, udder wells de dat Booch lever doch nit laade?',
	'coll-overwrite' => 'Ußtuusche',
	'coll-append' => 'Aanhänge',
	'coll-cancel' => 'Ophüre',
	'coll-update' => 'De Änderunge fasshallde',
	'coll-limit_exceeded_title' => 'Dat Booch es zo jruhß',
	'coll-limit_exceeded_text' => 'Ding Booch es zo jrooß jewoode.
Mer künne kein Sigge mieh do_bei donn.',
	'coll-rendering_title' => 'Am Ußjävve',
	'coll-rendering_text' => '<p><strong>Donn e Momäntsche waade bes de Datei paraat jemaat es.</strong></p>

<p><strong>Jedonn:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Di Sigg hee sullt alle paa Sekunde neu aanjezeisch wääde. Wann dat nit klapp, donn eijfach op Dingem Brauser singe Knopp zom neu Aanzeije klekke!</p>',
	'coll-rendering_status' => '<strong>Shtattus:</strong> $1',
	'coll-rendering_article' => '(Wiki-Sigge-Tittel: $1)',
	'coll-rendering_page' => '(Sigg Nommer: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Aanjaabe zom Sigge Ußjävve',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Aanjaabe zom Booch Ußjävve',
	'coll-rendering_finished_title' => 'Et Ußjävve eß jedonn',
	'coll-rendering_finished_text' => '<strong>De Datei es paraat jestallt. [$1 Donn se erunger lade].</strong>

Opjepaß:
* Wann De nit zefredde beß, met dämm, wat eruß jekumme eß, dann loor Der op dä [[{{MediaWiki:Coll-helppage}}|Hölpsigg övver Sammlonge]] aan, wat mer velleisch besser maache künnt.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Aanjaabe zom Ußjävve vun de Aanjabe zoh de Sigge',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Aanjaabe zom Booch Ußjävve',
	'coll-notfound_title' => 'Booch nit jefonge',
	'coll-notfound_text' => 'Mer kunnte de Sigg för dat Booch nit fenge.',
	'coll-download_notfound_title' => 'Di Datei ham_mer nit jefonge',
	'coll-download_notfound_text' => 'Di Dattei, di De eronger laade wells, di jidd_et jaa_nit: müjjelesch, dat se fottjeschmeße wood, un neu opjebout wääde moß.',
	'coll-download_failed_title' => 'Fähler beim eronger Laade',
	'coll-download_failed_text' => 'Ene Fähler es opjetrodde beim eronger Laade vun dä Dattei „$1“',
	'coll-is_cached' => '<ul><li>Mer han en Version fun dämm Dokkemänt em ZwescheShpeicher, et moot nit widder neu ußjejovve wääde. <a href="$1">Doch neu widder ußjevve.</a></li></ul>',
	'coll-excluded-templates' => '* De Schablone us dä Saachjropp [[:Category:$1|$1]] wore ußjeschloße.',
	'coll-blacklisted-templates' => '* Schabloone en de „Schwatze Leß“ ([[:$1]]) sin nit met dobei.',
	'coll-return_to_collection' => '<p>Jangk Retur noh <a href="$1">$2</a></p>',
	'coll-book_title' => 'Donn der Drock vun däm Booch beshtälle',
	'coll-book_text' => 'Donn e Booch bestelle en de Dröckerei:',
	'coll-order_from_pp' => 'Vör-Aansich vun däm Booch bei $1',
	'coll-about_pp' => 'Üvver $1',
	'coll-invalid_podpartner_title' => 'Verkeehte Aajabe zom Dröcke udder zor Dröckerei',
	'coll-invalid_podpartner_msg' => 'De Aajabe zom Dröcke un wä dat maache sull sin verkeeht.
Don dat enem Wikki-Köbes obb et Bruut schmiere.',
	'coll-license' => 'Lizänz',
	'coll-return_to' => 'Jangk zerök noh [[:$1]]',
	'coll-more_info' => 'Mieh Enfommazjuhne aanzeije',
	'coll-hide_info' => 'Winnijer Enfommazjuhne aanzeije',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Wie mer bei <i lang="en">PediaPress</i> beshtelle kann',
	'coll-suggest_title' => 'Sigge-Vörshlähsch för Ding Booch',
	'coll-suggest_intro_text' => 'Vöschlähsch jonn vun dä Sigge uß, di De ald en Dingem Booch dren häs.
Di Leß weed neu opjebout, wann De op dä „Dobei donn“ udder dä „{{int:coll-remove}}“ Knopp klecks.',
	'coll-suggested_articles' => 'Vörschlähsch',
	'coll-suggest_reset_bans' => 'Zerök säze',
	'coll-suggest_reset_bans_tooltip' => 'Donn de dovör fotjenumme Vörschläsch för Sigge aanzeije',
	'coll-suggest_add_selected' => 'Donn de ußjesöhk Sigge derbei',
	'coll-suggest_ban_selected' => 'Donn de ußjesöhk Sigge fott nämme',
	'coll-suggest_your_book' => 'Ding Booch',
	'coll-suggest_show' => 'aanzeije',
	'coll-suggest_ban_tooltip' => 'Nämm di Sigg uß dä Leß met Vörschlähsch för Ding Booch eruß',
	'coll-suggest_article_ban' => 'De Sigg „$1“ es uß dä Vörschlähsch för Ding Booch fott jenumme ($2).',
	'coll-suggest_article_add' => 'De Sigg „$1“ es en Ding Booch erin jekumme ($2).',
	'coll-suggest_article_remove' => 'De Sigg „$1“ es uß Dingem Booch fott jenumme ($2).',
	'coll-suggest_undo_tooltip' => 'Donn zeröck nämme, wat De jedonn hats',
	'coll-suggest_undo' => 'zeröck nämme',
	'coll-load_local_book' => 'Donn „OK“ ußwähle, öm met Dingem Booch mem Naame %TITLE% un %NUMPAGES% Wikisigge dren wigger ze maache.
Donn „Cancel“ ußwähle, för et fott ze schmiiße un met enem läddijje Booch neu aanzefange.',
	'right-collectionsaveasuserpage' => 'E Boch als enem Metmaacher sing Sigg avspeichere',
	'right-collectionsaveascommunitypage' => 'E Boch als en Jemeinschaffß_Sigg avspeichere',
);

/** Kurdish (Latin) (Kurdî (Latin))
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'coll-collection' => 'Pirtûk',
	'coll-title' => 'Sernav:',
);

/** Cornish (Kernowek)
 * @author Kernoweger
 * @author Kw-Moon
 */
$messages['kw'] = array(
	'coll-rename' => 'Dashenwel',
	'coll-cancel' => 'Hedhy',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'coll-desc' => '[[Special:Book|Bicher uleeën]]',
	'coll-book_creator_intro' => "<big>Mam ''Buchmodus (book creator)'' kënnt Dir e Buch uleeën dat aus Wikisäite besteet déi Dir eraussicht. Dir kënnt Äert Buch a verschidde Formater (zum Beispill PDF oder ODF) exportéieren oder eng gedréckte Kopie bestellen.</big>",
	'coll-manage_your_book' => 'Geréiert Äert Buch',
	'coll-book_creator_help' => "Kuckt d'[[{{MediaWiki:Coll-helppage}}|Hëllef fir Bicher]] fir méi Informatiounen.",
	'coll-start_book_creator' => 'Buchfonctioun starten',
	'coll-book_creator_continue' => "D'Buchfonctioun weider benotzen",
	'coll-book_creator_disable_text' => "''Buchfonctioun'' gëtt ausgeschalt an d'Buch un deem Dir schafft gëtt ewechgeholl.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text vun der Buchfonctioun',
	'coll-collection' => 'Buch',
	'coll-collections' => 'Bicher',
	'coll-exclusion_category_title' => 'Net mat drécken',
	'coll-print_template_prefix' => 'Drécken',
	'coll-print_template_pattern' => '$1/Drock',
	'coll-unknown_subpage_title' => 'Onbekannten Ënnersäit',
	'coll-unknown_subpage_text' => 'Dës Ënnersäit vum [[Special:Book|Buch]] gëtt et net',
	'coll-couldnotaddarticle_title' => 'Wikisäit konnt net derbäigesat ginn',
	'coll-couldnotaddarticle_msg' => "D'Wikisäit konnt net derbäigesat ginn.",
	'coll-couldnotremovearticle_title' => 'Wikisäit konnt net ewechgeholl ginn',
	'coll-couldnotremovearticle_msg' => "D'Wikisäit konnt net ewechgeholl ginn.",
	'coll-noscript_text' => '<h1>JavaScript gëtt gebraucht!</h1>
<strong>Äre Browser ënnerstëtzt Java Script net oder JavaScript ass ausgeschalt.
Dës Säit fonctionnéiert net richteg, ausser wa JavaScript ageschalt ass</strong>',
	'coll-savedbook_template' => 'gespäichert Buch',
	'coll-your_book' => 'Äert Buch',
	'coll-download_title' => 'Eroflueden',
	'coll-download_text' => 'Fir Äert Buch erofzelueden, wielt w.e.g. e Format a klickt op de Knäppchen.',
	'coll-download_as_text' => 'Fir Äert Buch am Format $1 erofzelueden, klickt w.e.g. op de Knäppchen.',
	'coll-download' => 'Eroflueden',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ewechhuelen',
	'coll-show' => 'Weisen',
	'coll-move_to_top' => 'No ganz uewe réckelen',
	'coll-move_up' => 'Eropréckelen',
	'coll-move_down' => 'Erofréckelen',
	'coll-move_to_bottom' => 'No ganz ënne réckelen',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Ënnertitel:',
	'coll-contents' => 'Inhalter',
	'coll-drag_and_drop' => "Benotzt d'Maus fir Wikisäiten a Kapitelen anescht ze zortéieren",
	'coll-create_chapter' => 'E Kapitel maachen',
	'coll-sort_alphabetically' => 'Alphabetesch sortéieren',
	'coll-rename' => 'Ëmbenennen',
	'coll-new_chapter' => 'Gitt den Numm fir dat neit Kapitel un',
	'coll-rename_chapter' => "Gitt en neien Numm fir d'Kapitel un",
	'coll-no_such_category' => 'Keng esou Kategorie',
	'coll-notitle_title' => 'Den Titel vun der Säit konnt net festgestallt ginn.',
	'coll-post_failed_title' => 'POST Ufro huet net fonctionnéiert',
	'coll-post_failed_msg' => "D'POST Ufro u(n) $1 huet net fonctionnéiert ($2).",
	'coll-mwserve_failed_title' => 'Feeler vum Server',
	'coll-mwserve_failed_msg' => 'Op dem Render-Server ass e Feeler geschitt: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Feelermeldng vum Server',
	'coll-empty_collection' => 'Eidelt Buch',
	'coll-revision' => 'Versioun: $1',
	'coll-save_collection_title' => 'Buch späicheren an deelen',
	'coll-save_collection_text' => 'Wielt eng Plaz:',
	'coll-login_to_save' => 'Wann Dir Bicher fir de spéidere Gebrauch späichere wëllt, da [[Special:UserLogin|loggt Iech an oder maacht e Benotzerkont op]].',
	'coll-personal_collection_label' => 'Perséinlecht Buch',
	'coll-community_collection_label' => 'Kollektiv-Buch:',
	'coll-save_collection' => 'Buch späicheren',
	'coll-save_category' => "All gespäichert Bicher ginn an d'Kategorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] derbäigesat.",
	'coll-overwrite_title' => "D'Säit gëtt et. Iwwerschreiwen?",
	'coll-overwrite_text' => 'Et gëtt schonn eng Säit mam Numm [[:$1]].
Wëllt Dir déi duerch är Sammlung ersetzen?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Neen',
	'coll-load_overwrite_text' => "Dir hutt schon e puer Säiten an Ärem Buch.
Wëllt Dir Äert aktuellt Buch iwwerschreiwen, den neien Inhalt hannendrun hänken, oder d'Luede vun dësem Buch ofbriechen?",
	'coll-overwrite' => 'Iwwerschreiwen',
	'coll-append' => 'Derbäisetzen',
	'coll-cancel' => 'Annulléieren',
	'coll-update' => 'Aktualiséieren',
	'coll-limit_exceeded_title' => 'Buch ze grouss',
	'coll-limit_exceeded_text' => 'Äert Buch ass ze grouss.
Et kënne keng Säite méi derbäigesat ginn.',
	'coll-rendering_title' => 'Maachen',
	'coll-rendering_text' => '<p><strong>Gedëllegt Iech w.e.g. bis d\'Dokument zesummegestallt ass.</strong></p>

<p><strong>Fortschrëtt:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Dës Säit gëtt normalerweis automatesch aktualiséiert.
Wann dat net sollt de fall sinn, da klickt w.e.g. op den Aktualiséieren/Refresh Knäppche vun ärem Browser.</p>',
	'coll-rendering_status' => '<strong>Statut :</strong> $1',
	'coll-rendering_article' => '(Wiki Säit: $1)',
	'coll-rendering_page' => '(Säit: $1)',
	'coll-rendering_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Informatiounstext iwwert d'Verschaffe vu Säiten",
	'coll-rendering_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Informatiounstext iwwert d'Duerstelle vu Sammlungen",
	'coll-rendering_finished_title' => 'Fäerdeg gemaach',
	'coll-rendering_finished_text' => "<strong>De Fichier gouf generéiert.</strong>
<strong>[$1 Luet de Fichier]</strong> op Äre Computer.

Opgepasst:
*Sidd Dir net zefridde mam Resultat? Kuckt [[{{MediaWiki:Coll-helppage}}|d'Hëllefssäit iwwer Bicher]] fir Méiglechkeete fir et ze verbesseren.",
	'coll-finished_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Informatiounstext iwwert d'Verschaffe vu Säiten",
	'coll-notfound_title' => 'Buch net fonnt',
	'coll-notfound_text' => "D'Buch-Säit konnt net fonnt ginn.",
	'coll-download_notfound_title' => 'Fichier gouf net fonnt',
	'coll-download_notfound_text' => 'De Fichier deen Dir versicht erofzeluede gëtt et net: Méiglecherweis gouf e geläscht a muss nees generéiert ginn.',
	'coll-download_failed_title' => 'Feeler beim eroflueden',
	'coll-download_failed_text' => 'Et gouf e Feeler beim erofluede vum Fichier: $1',
	'coll-is_cached' => "<ul><li>Eng tëschegespäichert Versioun vum dkument gouf fonnt, dofir war kee ''rendering'' néideg.
<a href=\"\$1\">''re-rendering'' erzwengen.</a></li></ul>",
	'coll-excluded-templates' => '* Schablounen aus der Kategorie [[:Category:$1|$1]] goufen ausgeschloss',
	'coll-blacklisted-templates' => '* Schablounen op der schwaarzer Lëscht (blacklist) [[:$1]] goufen ausgeschloss.',
	'coll-return_to_collection' => '<p>Zréck op <a href="$1">$2</a></p>',
	'coll-book_title' => 'Als gedréckte Buch bestellen',
	'coll-book_text' => 'Bestellt e gedréckte Buch vun eisem Print-On-Demand Partner:',
	'coll-order_from_pp' => 'Mat $1 kucken',
	'coll-about_pp' => 'Iwwer $1',
	'coll-invalid_podpartner_title' => 'Ongëltege Print-On-Demand (POD) Partner',
	'coll-invalid_podpartner_msg' => 'Donnéeën vum Print-On-Demand (POD) Partner sinn net valabel.
Kontaktéiert w.e.g. Äre MediaWiki Adminstrateur.',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Zréck op [[:$1]]',
	'coll-more_info' => 'Méi Informatioune weisen',
	'coll-hide_info' => 'Informatioune verstoppen',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress Bestellinformatiounen',
	'coll-suggest_title' => 'Virgeschloe Säite fir Äert Buch',
	'coll-suggest_intro_text' => "D'Virschléi baséieren op den aktuelle Säiten an Ärem Buch.
D'Lëscht gëtt all kéier aktuliséiert wann dir op d'Knäppecher derbäisetzen oder ewechuele klickt.",
	'coll-suggested_articles' => 'Virschléi',
	'coll-suggest_reset_bans' => 'zrécksetzen',
	'coll-suggest_reset_bans_tooltip' => 'Virschléi weisen déi virdrun ewechgeholl goufen',
	'coll-suggest_add_selected' => 'Erausgesichte Säiten derbäisetzen',
	'coll-suggest_ban_selected' => 'Erausgesichte Säiten ewechhuelen',
	'coll-suggest_your_book' => 'Äert Buch',
	'coll-suggest_show' => 'weisen',
	'coll-suggest_ban_tooltip' => 'Dës Säit vun der Lëscht vun de Virschléi erofhuelen',
	'coll-suggest_article_ban' => "D'Säit <strong>$1</strong> gouf vun de Virschléi ewechgeholl ($2).",
	'coll-suggest_article_add' => "D'Säit <strong>$1</strong> gouf bäi Äert Buch derbäigesat ($2).",
	'coll-suggest_article_remove' => "D'Säit <strong>$1</strong> gouf aus Ärem Buch erausgeholl ($2).",
	'coll-suggest_undo_tooltip' => 'Dës Aktioun réckgängeg maachen',
	'coll-suggest_undo' => 'réckgängeg maachen',
	'coll-load_local_book' => 'Klickt OK fir mat Ärem Buch %TITLE% dat %NUMPAGES% Wikisäiten huet weiderzefueren. Klickt Ofbriechen fir et ze läschen a mat engem eidele Buch unzefänken.',
	'right-collectionsaveasuserpage' => 'Bicher als Benotzersäit späicheren',
	'right-collectionsaveascommunitypage' => 'Bicher als Gemeinschaftssäit späicheren',
);

/** Limburgish (Limburgs)
 * @author Aelske
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'coll-desc' => '[[Special:Book|Maak book]]',
	'coll-book_creator_intro' => "<big>Mit de ''Bokemaker'' kins se e book make det wikipagina's nao dien eige inzich bevat.
De kins t book exportere in versjillende bestandjsformate (bv. PDF of ODF) of e gedruk exemplaar bestelle.</big>",
	'coll-manage_your_book' => 'Behieër die book',
	'coll-book_creator_help' => 'Zuuch [[{{MediaWiki:Coll-helppage}}|hulppagina veur beuk]] veur meer informatie.',
	'coll-start_book_creator' => 'Begin bokemaker',
	'coll-book_creator_continue' => 'Gank door mitte bokemaker',
	'coll-book_creator_disable_text' => "De ''bokemaker'' wurt oetgezat en t book wo se aan werks wurt verwiederd.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Bokemakerteks',
	'coll-collection' => 'Book',
	'coll-collections' => 'Beuk',
	'coll-exclusion_category_title' => "Laot eweg bie 't oetdrejje",
	'coll-print_template_prefix' => 'Oetdrej',
	'coll-print_template_pattern' => '$1/Oetdrej',
	'coll-unknown_subpage_title' => 'Ónbekèndje óngerpaasj',
	'coll-unknown_subpage_text' => 'Dees óngerpaasj ven [[Special:Book|Book]] besteit neet',
	'coll-couldnotaddarticle_title' => 'De wikipagina kos neet toegevoeg waere',
	'coll-couldnotaddarticle_msg' => 'De wikipagina kos neet toegevoeg waere.',
	'coll-couldnotremovearticle_title' => 'De wikipagina kos neet verwiederd waere',
	'coll-couldnotremovearticle_msg' => 'De wikipagina kos neet verwiederd waere.',
	'coll-noscript_text' => "<h1JavaScript is beneudj!</h1>
<strong>Diene toeaner óngerstäöntj gènne JavaScript ódder 't is aafgezatj.
Dees paasj wèrk neet goed, bezieje-s doe JavaScript aanzèts.</strong>",
	'coll-savedbook_template' => 'vasgezatj_book',
	'coll-your_book' => 'Dien book',
	'coll-download_title' => 'Haol óp',
	'coll-download_text' => 'Kees e formaat en klik oppe downloadknoep.',
	'coll-download_as_text' => 'Klik óppe knoep om die book es $1 te downloade.',
	'coll-download' => 'Haol óp',
	'coll-format_label' => 'Fórmaat:',
	'coll-remove' => 'weggoeje',
	'coll-show' => 'Toean',
	'coll-move_to_top' => 'Gans euveróppes',
	'coll-move_up' => 'Euveróppes',
	'coll-move_down' => 'Óngeróppes',
	'coll-move_to_bottom' => 'Gans óngeróppes',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Óngertitel:',
	'coll-contents' => 'Inhawd',
	'coll-drag_and_drop' => "De kins de wikipazjena's en huidstukke sleipe óm ze te ordene",
	'coll-create_chapter' => 'Huidstök make',
	'coll-sort_alphabetically' => 'Alfabetisch sortere',
	'coll-rename' => 'Hèrnömme',
	'coll-new_chapter' => "Veur de naam van 't nuuj hoofstök in",
	'coll-rename_chapter' => "Veur 'ne nuuje naam in veur 't huidstök",
	'coll-no_such_category' => 'De kattegorie besteit neet',
	'coll-notitle_title' => "De titel ven g'r pazjena kós neet vasgesteldj waere.",
	'coll-post_failed_title' => 'POST-verzeuk mislök',
	'coll-post_failed_msg' => "'t POS-verzeuk göch $1 is mislók ($2).",
	'coll-mwserve_failed_title' => 'Fout inne renderserver',
	'coll-mwserve_failed_msg' => 'De renderserver goof de vólgendje foutmèljing: <nowiki>$1</nowiki>',
	'coll-error_reponse' => "De server haet 'n foutmèljing trökgegaeve",
	'coll-empty_collection' => 'Laeg book',
	'coll-revision' => 'Versie: $1',
	'coll-save_collection_title' => 'Dien book ópslaon èn deile',
	'coll-save_collection_text' => "Kees 'n lokaasje:",
	'coll-login_to_save' => "Es se beuk wils ópslaon veur later gebroek, [[Special:UserLogin|mèlj öch den aaf óf maak 'ne gebroeker aan]].",
	'coll-personal_collection_label' => 'Perseunlik book:',
	'coll-community_collection_label' => 'Gemeinsjappelik book:',
	'coll-save_collection' => 'Slaon book óp',
	'coll-save_category' => 'Beuk waere ópslaon inne kattegorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'De paasj besteit al. Euversjrieve?',
	'coll-overwrite_text' => "D'r besteit al 'n pazjena mitte naam [[:$1]].
Wils se daen pazjena vervange doear öch kolleksje?",
	'coll-yes' => 'Jao',
	'coll-no' => 'Nae',
	'coll-load_overwrite_text' => "De höbs al 'n aantal paazjes in dien book.
Wils se dien hujig book euversjrieve, de nuuj paazjes d'raanzètte óf 't laaje ven dit book aafbraeke?",
	'coll-overwrite' => 'Euversjrieve',
	'coll-append' => "D'raanzètte",
	'coll-cancel' => 'Aafbraeke',
	'coll-update' => 'Vervèrse',
	'coll-limit_exceeded_title' => 'Book is te groet',
	'coll-limit_exceeded_text' => "Dien book is tö groeat.
De kins gein paazjes mieë d'raanzètte.",
	'coll-rendering_title' => 'Renderendj',
	'coll-rendering_text' => '<p><strong>Het document wörd aangemaak.</strong></p>

<p><strong>Voortgang:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Deze pazjena wörd regelmatig biegewerk.
As dit neet werk, klik dan op de knoep "Vernuuje" in diene browser.</p>',
	'coll-rendering_status' => '<strong>Staat:</strong> $1',
	'coll-rendering_article' => '(wikipaasj: $1)',
	'coll-rendering_page' => '(paasj: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Paginarenderinformatie',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Verzamelingrenderinformatie',
	'coll-rendering_finished_title' => 'Rendere aafgeröndj',
	'coll-rendering_finished_text' => '<strong>Het document is aangemaak.</strong>
<strong>[$1 t bestandj downloade]</strong>.

Opmerkinge:
* Neet tevrede mit de oetveur? Op de [[{{MediaWiki:Coll-helppage}}|hulppagina euver collecties]] staon tips om deze te verbaetere.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informatieteks biw pagina rendere',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informatieteks bie verzameling renderen',
	'coll-notfound_title' => 'Book neet gevónje',
	'coll-notfound_text' => 'Bookpaasj is neet gevónje.',
	'coll-download_notfound_title' => 'Bestandj neet gevónje',
	'coll-download_notfound_text' => "'t Bestandj det se perbieërs óp te haole besteit neet: Mesjiens is 't gewösj èn mót 't ópnuuj gemaak waere.",
	'coll-download_failed_title' => 'Fout bie t downloade',
	'coll-download_failed_text' => "d'r Is 'n fout opgetraoje bie 't downloade: $1",
	'coll-is_cached' => '<ul><li>d\'r Is \'n versje ven \'t dokument besjikber inne cache, dös opnuuj rendere woor neet neudig.
<a href="$1">Opnuuj rendere.</a></li></ul>',
	'coll-excluded-templates' => '* Sjeblone in de categorie [[:Category:$1|$1]] waere genegeerdj.',
	'coll-blacklisted-templates' => '* Sjebloeaner óppe zwarte lies [[:$1]] waere genegeerdj.',
	'coll-return_to_collection' => '<p>Trökgaon nao <a href="$1">$2</a></p>',
	'coll-book_title' => 'Bestèl es gedrök book',
	'coll-book_text' => "De kins 'n gedrök book bestèlle bie 'ne print-on-demandpartner:",
	'coll-order_from_pp' => 'Veurvertoning van $1',
	'coll-about_pp' => 'Euver $1',
	'coll-invalid_podpartner_title' => 'Óngèljige print-on-demandpartner',
	'coll-invalid_podpartner_msg' => "D'n ópgegaeve print-on-demandpartner is óngèljig.
Nöm kóntak op mèt eure MediaWikiadmin.",
	'coll-license' => 'Lisens',
	'coll-return_to' => 'Trök göch [[:$1]]',
	'coll-more_info' => 'Toean mieër inlichtinger',
	'coll-hide_info' => 'Verbèrg inlichtinger',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Bestèlinlichtinger PediaPress',
	'coll-suggest_title' => 'Paginasuggesties veur die book',
	'coll-suggest_intro_text' => "Suggesties zeen gebaseerd op de hudige selectie van wikipagina's in die book.
De lies wurt biegewerk es se op de knoep 'voog toe' of 'verwieder' kliks.",
	'coll-suggested_articles' => 'Suggesties',
	'coll-suggest_reset_bans' => 'Reset',
	'coll-suggest_reset_bans_tooltip' => 'Tuun eerder verwiederde suggesties',
	'coll-suggest_add_selected' => "Voeg geselecteerde pagina's toe",
	'coll-suggest_ban_selected' => "Verwieder geselecteerde pagina's",
	'coll-suggest_your_book' => 'Dien book',
	'coll-suggest_show' => 'toean',
	'coll-suggest_ban_tooltip' => 'Verwieder dees pagina oete lies met suggesties',
	'coll-suggest_article_ban' => 'De pagina <strong>$1</strong> is verwiederd oet de suggesties ($2).',
	'coll-suggest_article_add' => 'De pagina <strong>$1</strong> is toegevoeg aan die book ($2).',
	'coll-suggest_article_remove' => 'De pagina <strong>$1</strong> is verwiederd oet die book ($2).',
	'coll-suggest_undo_tooltip' => 'Maak dees hanjeling óngedaon',
	'coll-suggest_undo' => 'maak óngedaon',
	'coll-load_local_book' => 'Klik "gank" om door te gaon mit die book %TITLE% det %NUMPAGES% wikipagina\'s bevat. Klik op "braek aaf" om \'t te verwiedere en opnuuj te beginne mit e laeg book.',
	'right-collectionsaveasuserpage' => 'Slaon book óp es gebroekerspagina',
	'right-collectionsaveascommunitypage' => 'Slaon book óp es gemeinsjapspagina',
);

/** Lao (ລາວ)
 * @author Passawuth
 */
$messages['lo'] = array(
	'coll-remove' => 'ເອົາອອກ',
	'coll-yes' => 'ໃຊ່',
	'coll-no' => 'ບໍ່ໃຊ່',
);

/** Lithuanian (Lietuvių)
 * @author Homo
 * @author Matasg
 */
$messages['lt'] = array(
	'coll-desc' => '[[Special:Book|Kurti knygas]]',
	'coll-collection' => 'Knyga',
	'coll-collections' => 'Knygos',
	'coll-print_template_prefix' => 'Spausdinti',
	'coll-download_title' => 'Atsisiųsti',
	'coll-remove' => 'Pašalinti',
	'coll-rename' => 'Pervadinti',
	'coll-no_such_category' => 'Nėra tokios kategorijos',
	'coll-yes' => 'Taip',
	'coll-no' => 'Ne',
	'coll-cancel' => 'Atšaukti',
	'coll-update' => 'Atnaujinti',
	'coll-notfound_title' => 'Knyga nerasta',
	'coll-download_notfound_title' => 'Failas nerastas',
	'coll-book_title' => 'Užsisakyti spausdintą knygą',
	'coll-order_from_pp' => 'Užsisakyti knygą iš $1',
	'coll-about_pp' => 'Apie $1',
	'coll-license' => 'Licencija',
	'coll-return_to' => 'Grįžti į [[:$1]]',
	'coll-more_info' => 'Rodyti daugiau informacijos',
	'coll-hide_info' => 'Slėpti informaciją',
);

/** Latgalian (Latgaļu)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'coll-show' => 'Paruodeit',
	'coll-update' => 'Atjaunynuot',
	'coll-about_pp' => 'Ap $1',
	'coll-suggest_show' => 'ruodeit',
);

/** Latvian (Latviešu)
 * @author GreenZeb
 * @author Papuass
 */
$messages['lv'] = array(
	'coll-format_label' => 'Formāts:',
	'coll-remove' => 'Noņemt',
	'coll-show' => 'Rādīt',
	'coll-move_to_top' => 'Pārvietot uz augšu',
	'coll-move_up' => 'Pārvietot augšup',
	'coll-move_down' => 'Pārvietot lejup',
	'coll-move_to_bottom' => 'Pārvietot uz leju',
	'coll-save_collection' => 'Saglabāt grāmatu',
	'coll-overwrite_title' => 'Lapa pastāv.
Pārrakstīt?',
	'coll-yes' => 'Jā',
	'coll-no' => 'Nē',
	'coll-overwrite' => 'Pārrakstīt',
	'coll-append' => 'Pievienot',
	'coll-cancel' => 'Atcelt',
	'coll-update' => 'Atjaunināt',
	'coll-limit_exceeded_title' => 'Grāmata ir pārāk liela',
	'coll-download_notfound_title' => 'Fails nav atrasts',
	'coll-about_pp' => 'Par $1',
	'coll-license' => 'Licence',
	'coll-return_to' => 'Atgriezties uz [[:$1]]',
	'coll-more_info' => 'Parādīt vairāk informācijas',
	'coll-hide_info' => 'Paslēpt informāciju',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress pasūtījuma informācija',
	'coll-suggest_title' => 'Ieteiktās lapas jūsu grāmatai',
	'coll-suggested_articles' => 'Ieteikumi',
	'coll-suggest_your_book' => 'Tava grāmata',
);

/** Eastern Mari (Олык Марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'coll-contents' => 'Вуйлымаш',
	'coll-cancel' => 'Чараш',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'coll-desc' => '[[Special:Book|Создавање на книги]]',
	'coll-book_creator_intro' => "<big>Со ''книговезницата'' можете да создадете книга која содржи вики-страници по ваш избор. Можете да ја извезувате книгата во различни формати (на пр. PDF или ODF) или пак да порачате отпечатен примерок.</big>",
	'coll-manage_your_book' => 'Раководење со вашата книга',
	'coll-book_creator_help' => 'За повеќе информации, погледајте ја нашата [[{{MediaWiki:Coll-helppage}}|помош за книги]].',
	'coll-start_book_creator' => 'Пушти ја книговезницата',
	'coll-book_creator_continue' => 'Продолжи со користење на книговезницата',
	'coll-book_creator_disable_text' => "''Книговезницата'' ќе биде оневозможена и книгата на која работите ќе биде отстранета.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Текст на книговезницата',
	'coll-collection' => 'Книга',
	'coll-collections' => 'Книги',
	'coll-exclusion_category_title' => 'Испушти при печатење',
	'coll-print_template_prefix' => 'Печатење',
	'coll-print_template_pattern' => '$1/Печатење',
	'coll-unknown_subpage_title' => 'Непозната потстраница',
	'coll-unknown_subpage_text' => 'Оваа потстраница на [[Special:Book|книгата]] не постои',
	'coll-couldnotaddarticle_title' => 'Не можев да ја додадам вики-страницата',
	'coll-couldnotaddarticle_msg' => 'Вики-страницата не може да се додаде.',
	'coll-couldnotremovearticle_title' => 'Не можев да ја отстранам вики-страницата',
	'coll-couldnotremovearticle_msg' => 'Вики-страницата не може да се отстрани.',
	'coll-noscript_text' => '<h1>Потребен е JavaScript!</h1>
<strong>Вашиот прелистувач не поддржува JavaScript или JavaScript е исклучен.
Страницава нема да работи правилно ако не е овозможен JavaScript.</strong>',
	'coll-savedbook_template' => 'зачувана_книга',
	'coll-your_book' => 'Вашата книга',
	'coll-download_title' => 'Преземи',
	'coll-download_text' => 'За да ја преземете книгата, одберете формат и кикнете го копчето.',
	'coll-download_as_text' => 'Кликнете го копчето за да ја преземете книгата во $1 формат.',
	'coll-download' => 'Преземи',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Отстрани',
	'coll-show' => 'Прикажи',
	'coll-move_to_top' => 'Премести најгоре',
	'coll-move_up' => 'Премести нагоре',
	'coll-move_down' => 'Премести надолу',
	'coll-move_to_bottom' => 'Премести најдолу',
	'coll-title' => 'Наслов:',
	'coll-subtitle' => 'Поднаслов:',
	'coll-contents' => 'Содржина',
	'coll-drag_and_drop' => 'Влечете и пуштајте ги вики-страниците и главите за да ги подредите како што сакате',
	'coll-create_chapter' => 'Создај глава',
	'coll-sort_alphabetically' => 'Подреди по азбучен ред',
	'coll-rename' => 'Преименувај',
	'coll-new_chapter' => 'Внесете име за новата глава',
	'coll-rename_chapter' => 'Внесете ново име за главата',
	'coll-no_such_category' => 'Нема таква категорија',
	'coll-notitle_title' => 'Насловот на страницата не може да се определи.',
	'coll-post_failed_title' => 'POST-барањето не успеа',
	'coll-post_failed_msg' => 'POST-барањето од $1 не успеа ($2).',
	'coll-mwserve_failed_title' => 'Грешка во опслужувачот за исцртување',
	'coll-mwserve_failed_msg' => 'Настана грешка во опслужувачот за отцртување: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Опслужувачот одговори со грешка',
	'coll-empty_collection' => 'Празна книга',
	'coll-revision' => 'Ревизија: $1',
	'coll-save_collection_title' => 'Зачувај и сподели ја книгата',
	'coll-save_collection_text' => 'Одберете место за чување на вашата книга:',
	'coll-login_to_save' => 'Ако сакате да зачувувате книги за подоцнежна употреба, [[Special:UserLogin|најавете се или направете сметка]].',
	'coll-personal_collection_label' => 'Лична книга:',
	'coll-community_collection_label' => 'Книга на заедницата:',
	'coll-save_collection' => 'Зачувај',
	'coll-save_category' => 'Сите зачувани книги се додаваат во категоријата [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Страницата постои.
Да ја заменам?',
	'coll-overwrite_text' => 'Страницата со име [[:$1]] веќе постои,
Дали сакате да ја замените со вашата книга?',
	'coll-yes' => 'Да',
	'coll-no' => 'Не',
	'coll-load_overwrite_text' => 'Веќе имате некои страници во книгата.
Дали сакате да ја замените вашата тековна книга, да ја додадете новата содржина, или пак да го откажете вчитувањето на оваа книга?',
	'coll-overwrite' => 'Замени',
	'coll-append' => 'Додај',
	'coll-cancel' => 'Откажи',
	'coll-update' => 'Обнови',
	'coll-limit_exceeded_title' => 'Книгата е преголема',
	'coll-limit_exceeded_text' => 'Книгата е преголема.
Не можам да додавам повеќе страници.',
	'coll-rendering_title' => 'Отцртување',
	'coll-rendering_text' => '<p><strong>Ве молиме почекајте додека се создава документот.</strong></p>

<p><strong>Прогрес:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Оваа страница треба да се обновува автоматски по еднаш на неколку секунди.
Ако ова не работи, притиснете го копчето за превчитување во прелистувачот.</p>',
	'coll-rendering_status' => '<strong>Статус:</strong> $1',
	'coll-rendering_article' => '(вики-страница: $1)',
	'coll-rendering_page' => '(страница: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Информативен текст за испишувањето на страници',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Информативен текст за испишувањето на збирки',
	'coll-rendering_finished_title' => 'Отцртувањето заврши',
	'coll-rendering_finished_text' => '<strong>Податотеката на документот е создадена.</strong>
<strong>[$1 Преземете ја податотеката]</strong> на вашиот сметач.

Белешки:
* Не сте задоволни со резултатот? Погледајте ја нашата [[{{MediaWiki:Coll-helppage}}|страница за помош со книги]] за да ги видите можностите за нејзино подобрување.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Изработка на информативен текст за страницата',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Изработка на информативен текст за збирката',
	'coll-notfound_title' => 'Книгата не е пронајдена',
	'coll-notfound_text' => 'Не можев да ја пронајдам страницата.',
	'coll-download_notfound_title' => 'Податотеката не е пронајдена',
	'coll-download_notfound_text' => 'Податотеката која сакате да ја преземете не постои:
Можеби била избришана и треба да се создаде одново.',
	'coll-download_failed_title' => 'Грешка при преземањето',
	'coll-download_failed_text' => 'Настана грешка при преземањето на податотеката: $1',
	'coll-is_cached' => '<ul><li>Пронајдена е кеширана верзија на документот, па затоа немаше потреба да се отцртува.
<a href="$1">Сепак отцртај.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблоните во категоријата [[:Category:$1|$1]] се исклучени.',
	'coll-blacklisted-templates' => '* Шаблоните на црниот список [[:$1]] се исклучени.',
	'coll-return_to_collection' => '<p>Назад на <a href="$1">$2</a></p>',
	'coll-book_title' => 'Порачај во печатен облик',
	'coll-book_text' => 'Порачајте ја книгата во печатен облик од нашиот партнер.',
	'coll-order_from_pp' => 'Прегледај со $1',
	'coll-about_pp' => 'За $1',
	'coll-invalid_podpartner_title' => 'Неважечки POD партнер',
	'coll-invalid_podpartner_msg' => 'Наведениот POD партнер е неважечки.
Контактирајте го вашиот MediaWiki администратор.',
	'coll-license' => 'Лиценца',
	'coll-return_to' => 'Врати се на [[:$1]]',
	'coll-more_info' => 'Прикажи повеќе информации',
	'coll-hide_info' => 'Скриј ги информациите',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Информации за порачувањето од PediaPress',
	'coll-suggest_title' => 'Предложени страници за вашата книга',
	'coll-suggest_intro_text' => 'Предлозите се засновани на тековниот збир од вики-страници во вашата книга.
Списокот се обновува секојпат кога ќе кликнете на копчето за додавање или отстранување.',
	'coll-suggested_articles' => 'Предлози',
	'coll-suggest_reset_bans' => 'врати по основно',
	'coll-suggest_reset_bans_tooltip' => 'Прикажи претходно отстранети предлози',
	'coll-suggest_add_selected' => 'Додај ги избраните страници',
	'coll-suggest_ban_selected' => 'Отстрани ги избраните страници',
	'coll-suggest_your_book' => 'Вашата книга',
	'coll-suggest_show' => 'прикажи',
	'coll-suggest_ban_tooltip' => 'Отстрани ја страницава од списокот на предлози',
	'coll-suggest_article_ban' => 'Страницата <strong>$1</strong> е отстранета од предлозите ($2).',
	'coll-suggest_article_add' => 'Страницата <strong>$1</strong> е додадена во вашата книга ($2).',
	'coll-suggest_article_remove' => 'Страницата <strong>$1</strong> е отстранета од вашата книга ($2).',
	'coll-suggest_undo_tooltip' => 'Врати го ова дејство',
	'coll-suggest_undo' => 'врати',
	'coll-load_local_book' => 'Кликнете на „ОК“ за да продолжите со книгата %TITLE% којашто содржи %NUMPAGES% вики-страници. Кликнете на „Откажи“ за да ја избришете и да започнете со празна книга.',
	'right-collectionsaveasuserpage' => 'Зачувување на книги како корисничка страница',
	'right-collectionsaveascommunitypage' => 'Зачувување на книги како страница на заедницата',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'coll-desc' => '[[Special:Book|പുസ്തകം സൃഷ്ടിക്കുക]]',
	'coll-book_creator_intro' => '<big>പുസ്തകസൃഷ്ടി ഉപകരണം ഉപയോഗിച്ച് താങ്കൾക്ക് ഇഷ്ടമുള്ള വിക്കിതാളുകൾ യോജിപ്പിച്ച് താങ്കൾക്ക് പുസ്തകം സൃഷ്ടിക്കാൻ കഴിയുന്നതാണ്. അത് താങ്കളുടെ ഇച്ഛാനുസരണം ഏതെങ്കിലും ഫോർമാറ്റിൽ (ഉദാ: പി.ഡി.എഫ്. അല്ലെങ്കിൽ ഒ.ഡി.എഫ്.) എടുക്കാവുന്നതോ അച്ചടിച്ച പകർപ്പ് ആവശ്യപ്പെടാവുന്നതോ ആണ്.</big>',
	'coll-manage_your_book' => 'താങ്കളുടെ പുസ്തകത്തിന്റെ കൈകാര്യനിർവഹണം',
	'coll-book_creator_help' => 'കൂടുതൽ വിവരങ്ങൾക്ക് [[{{MediaWiki:Coll-helppage}}|പുസ്തകങ്ങളെ സംബന്ധിച്ച സഹായം]] താൾ കാണുക.',
	'coll-start_book_creator' => 'പുസ്തക സൃഷ്ടി ഉപകരണം പ്രവർത്തിപ്പിക്കുക',
	'coll-book_creator_continue' => 'പുസ്തകസൃഷ്ടി ഉപകരണം ഉപയോഗിക്കുന്നത് തുടരുക',
	'coll-book_creator_disable_text' => "''പുസ്തക സൃഷ്ടി ഉപകരണം'' പ്രവർത്തനരഹിതവും, താങ്കൾ ചെയ്തുകൊണ്ടിരിക്കുന്ന പുസ്തകം നീക്കംചെയ്യുകയും ചെയ്യുന്നതാണ്.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/പുസ്തക സൃഷ്ടി ഉപകരണത്തിന്റെ എഴുത്ത്',
	'coll-collection' => 'പുസ്തകം',
	'coll-collections' => 'പുസ്തകങ്ങൾ',
	'coll-exclusion_category_title' => 'അച്ചടിയിൽ നിന്ന് ഒഴിവാക്കുക',
	'coll-print_template_prefix' => 'അച്ചടിയ്ക്കുക',
	'coll-print_template_pattern' => '$1/അച്ചടിയ്ക്കുക',
	'coll-unknown_subpage_title' => 'അജ്ഞാതമായ ഉപതാൾ',
	'coll-unknown_subpage_text' => '[[Special:Book|പുസ്തകത്തിലെ]] ഈ ഉപതാൾ നിലനിൽക്കുന്നില്ല',
	'coll-couldnotaddarticle_title' => 'വിക്കി താൾ കൂട്ടിച്ചേർക്കാൻ കഴിയില്ല',
	'coll-couldnotaddarticle_msg' => 'വിക്കി താൾ കൂട്ടിച്ചേർക്കാൻ കഴിഞ്ഞില്ല.',
	'coll-couldnotremovearticle_title' => 'വിക്കിതാൾ നീക്കം ചെയ്യാൻ കഴിയില്ല',
	'coll-couldnotremovearticle_msg' => 'വിക്കി താൾ നീക്കം ചെയ്യാൻ കഴിയില്ല.',
	'coll-noscript_text' => '<h1>ജാവാസ്ക്രിപ്റ്റ് വേണ്ടിയിരിക്കുന്നു!</h1>
<strong>താങ്കളുടെ ബ്രൗസർ ജാവാസ്ക്രിപ്റ്റ് പിന്തുണയില്ലാത്തതോ ജാവാസ്ക്രിപ്റ്റ് സജ്ജമാക്കാത്തതോ ആണ്.
ജാവാസ്ക്രിപ്റ്റ് സജ്ജമാക്കിയില്ലെങ്കിൽ, ഈ താൾ ശരിയായ രീതിയിൽ പ്രവർത്തിക്കില്ല.</strong>',
	'coll-savedbook_template' => 'ശേഖരിക്കപ്പെട്ട_പുസ്തകം',
	'coll-your_book' => 'താങ്കളുടെ പുസ്തകം',
	'coll-download_title' => 'ഡൗൺലോഡ്',
	'coll-download_text' => 'താങ്കളുടെ പുസ്തകം ഡൗൺലോഡ് ചെയ്യുന്നതിനായി ഫോർമാറ്റ് തിരഞ്ഞെടുത്ത ശേഷം ബട്ടൺ ഞെക്കുക.',
	'coll-download_as_text' => 'താങ്കളുടെ പുസ്തകം $1 ഫോർമാറ്റിൽ ഡൗൺലോഡ് ചെയ്യാൻ ബട്ടൺ അമർത്തുക.',
	'coll-download' => 'ഡൗൺലോഡ്',
	'coll-format_label' => 'തരം:',
	'coll-remove' => 'നീക്കം ചെയ്യുക',
	'coll-show' => 'പ്രദർശിപ്പിക്കുക',
	'coll-move_to_top' => 'ഏറ്റവും മുകളിലേക്ക് നീങ്ങുക',
	'coll-move_up' => 'മുകളിലേക്കു നീങ്ങുക',
	'coll-move_down' => 'താഴേക്ക് നീങ്ങുക',
	'coll-move_to_bottom' => 'ഏറ്റവും താഴേക്ക് നീങ്ങുക',
	'coll-title' => 'തലക്കെട്ട്:',
	'coll-subtitle' => 'ഉപശീർഷകം:',
	'coll-contents' => 'ഉള്ളടക്കം',
	'coll-drag_and_drop' => 'വിക്കി താളുകളും അദ്ധ്യായങ്ങളും ക്രമം മാറ്റാൻ വലിച്ചിടൽ ഉപയോഗിക്കുക',
	'coll-create_chapter' => 'അദ്ധ്യായം സൃഷ്ടിക്കുക',
	'coll-sort_alphabetically' => 'താളുകൾ അകാദാരിക്രമത്തിൽ ക്രമീകരിക്കുക',
	'coll-rename' => 'പുനഃർനാമകരണം ചെയ്യുക',
	'coll-new_chapter' => 'പുതിയ അദ്ധ്യായത്തിനു ഒരു പേരു കൊടുക്കുക',
	'coll-rename_chapter' => 'അദ്ധ്യായത്തിനു പുതിയൊരു പേരു കൊടുക്കുക',
	'coll-no_such_category' => 'അങ്ങനെ ഒരു വർഗ്ഗം നിലവിലില്ല',
	'coll-notitle_title' => 'താളിന്റെ തലക്കെട്ട് നിർണ്ണയിക്കുന്നതിനു കഴിഞ്ഞില്ല.',
	'coll-post_failed_title' => 'POST അഭ്യർത്ഥന പരാജയപ്പെട്ടു',
	'coll-post_failed_msg' => '$1 എന്നതിലേയ്ക്കുള്ള POST അഭ്യർത്ഥന പരാജയപ്പെട്ടു ($2).',
	'coll-mwserve_failed_title' => 'റെൻഡർ സെർവർ പിഴവ്',
	'coll-mwserve_failed_msg' => 'റെൻഡർ സെ‌‌ർവറിൽ പിഴവ് സംഭവിച്ചിരിക്കുന്നു: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'സെർവറിൽ നിന്നു പിഴവാണെന്ന മറുപടി കിട്ടി.',
	'coll-empty_collection' => 'ശൂന്യമായ പുസ്തകം',
	'coll-revision' => 'പതിപ്പ്: $1',
	'coll-save_collection_title' => 'താങ്കളുടെ പുസ്തകം സേവ് ചെയ്യുക പങ്ക് വെയ്ക്കുക',
	'coll-save_collection_text' => 'താങ്കളുടെ പുസ്തകം ശേഖരിച്ചു വെയ്ക്കേണ്ട സ്ഥലം തിരഞ്ഞെടുത്തു നൽകുക:',
	'coll-login_to_save' => 'പുസ്തകങ്ങൾ പിന്നീടുള്ള ഉപയോഗത്തിനായി സൂക്ഷിക്കണമെങ്കിൽ, ദയവായി [[Special:UserLogin|ലോഗിൻ ചെയ്യുകയോ പുതിയൊരു അംഗത്വം ഉണ്ടാക്കുകയോ ചെയ്യുക]].',
	'coll-personal_collection_label' => 'സ്വകാര്യ പുസ്തകം:',
	'coll-community_collection_label' => 'സമൂഹ പുസ്തകം:',
	'coll-save_collection' => 'പുസ്തകം സേവ് ചെയ്യുക',
	'coll-save_category' => 'സേവ് ചെയ്ത പുസ്തകങ്ങളെല്ലാം [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] വർഗ്ഗത്തിലേയ്ക്ക് ചേർത്തിരിക്കുന്നു.',
	'coll-overwrite_title' => 'താൾ നിലവിലുണ്ട്. അതിനെ ഓവർറൈറ്റ് ചെയ്യട്ടെ?',
	'coll-overwrite_text' => '[[:$1]] എന്ന പേരിൽ ഒരു താൾ നിലവിലുണ്ട്. താങ്കളുടെ പുസ്തകം ആ താളിനു ബദലാക്കണോ?',
	'coll-yes' => 'ശരി',
	'coll-no' => 'ഇല്ല',
	'coll-load_overwrite_text' => 'താങ്കളുടെ പുസ്തകത്തിൽ ഇപ്പോൾ തന്നെ കുറച്ചു താളുകൾ ഉണ്ട്.
താങ്കൾക്കു നിലവിലുള്ള പുസ്തകം മാറ്റണോ, പുതിയ താളുകൾ നിലവിലുള്ളതിൽ ചേർക്കണോ, അതോ പുസ്തകം ശേഖരിക്കുന്നതു റദ്ദാക്കണമോ?',
	'coll-overwrite' => 'ഓവർറൈറ്റ്',
	'coll-append' => 'കൂട്ടിചേർക്കുക',
	'coll-cancel' => 'റദ്ദാക്കുക',
	'coll-update' => 'പുതുക്കുക',
	'coll-limit_exceeded_title' => 'പുസ്തകത്തിന്റെ വലിപ്പം വളരെ കൂടുതലാണ്‌',
	'coll-limit_exceeded_text' => 'താങ്കളുടെ പുസ്തകം വളരെ വലുതാണ്‌.
ഇനി കൂടുതൽ താളുകൾ ചേർക്കുന്നതിനു സാദ്ധ്യമല്ല.',
	'coll-rendering_title' => 'റെൻഡർ ചെയ്യുന്നു',
	'coll-rendering_text' => '<p><strong>പ്രമാണം സൃഷ്ടിക്കപ്പെടുന്നതു വരെ ദയവായി കാത്തിരിക്കുക.</strong></p>
<p><strong>പുരോഗതി:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>
<p>ഏതാനം സെക്കന്റുകൾക്കിടയിൽ ഈ താൾ പുതുക്കിക്കൊണ്ടിരിക്കും, ഇപ്രകാരം പ്രവർത്തിക്കുന്നില്ലങ്കിൽ ദയവായി താങ്കളുടെ ബ്രൗസറിലെ റിഫ്രഷ് ബട്ടൺ അമർത്തുക.</p>',
	'coll-rendering_status' => '<strong>സ്ഥിതി:</strong> $1',
	'coll-rendering_article' => '(‌‌വിക്കി താൾ:$1)',
	'coll-rendering_page' => '(താൾ: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/താളിന്റെ വിവരങ്ങളുള്ള എഴുത്ത് പ്രദർശനയോഗ്യമാക്കുന്നു',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/ശേഖരത്തിന്റെ വിവരങ്ങളുള്ള എഴുത്ത് പ്രദർശനയോഗ്യമാക്കുന്നു',
	'coll-rendering_finished_title' => 'റെൻഡർ ചെയ്യൽ പൂർണ്ണം',
	'coll-rendering_finished_text' => '<strong>വിവര പ്രമാണം സൃഷ്ടിച്ചിരിക്കുന്നു.</strong>
താങ്കളുടെ കമ്പ്യൂട്ടറിലേയ്ക്ക് <strong>[$1 പ്രമാണം ഡൗൺലോഡ് ചെയ്യുക]</strong>.

കുറിപ്പുകൾ:
* ലഭ്യമായതിൽ സംതൃപ്തനല്ലേ? അത് മെച്ചപ്പെടുത്താനുള്ള സാധ്യതകളെ കുറിച്ചറിയാൻ [[{{MediaWiki:Coll-helppage}}|പുസ്തകങ്ങൾ സംബന്ധിച്ച സഹായം താൾ കാണുക]]',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/താളിന്റെ വിവരങ്ങളുള്ള എഴുത്ത് പ്രദർശനയോഗ്യമാക്കുന്നു',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/ശേഖരത്തിന്റെ വിവരങ്ങളുള്ള എഴുത്ത് പ്രദർശനയോഗ്യമാക്കുന്നു',
	'coll-notfound_title' => 'പുസ്തകം കണ്ടെത്താനായില്ല',
	'coll-notfound_text' => 'പുസ്തക താൾ കണ്ടെത്താൻ കഴിഞ്ഞില്ല.',
	'coll-download_notfound_title' => 'പ്രമാണം കണ്ടെത്താൻ കഴിഞ്ഞില്ല',
	'coll-download_notfound_text' => 'താങ്കൾ ഡൗൺലോഡ് ചെയ്യാൻ ശ്രമിക്കുന്ന പ്രമാണം നിലവിലില്ല:
ചിലപ്പോളത് മായ്ക്കപ്പെട്ടിരിക്കുന്നതാവാം, അങ്ങനെയെങ്കിൽ അത് പുനഃസൃഷ്ടിക്കേണ്ടതുണ്ട്.',
	'coll-download_failed_title' => 'ഡൗൺലോഡ് ചെയ്യുമ്പോൾ പിഴവ് സംഭവിച്ചു',
	'coll-download_failed_text' => '$1 എന്ന പ്രമാണം ഡൗൺലോഡ് ചെയ്തുകൊണ്ടിരിക്കുമ്പോൾ ഒരു പിഴവ് സംഭവിച്ചിരിക്കുന്നു',
	'coll-is_cached' => '<ul><li>പ്രമാണത്തിന്റെ സംഭരിച്ചു വെച്ച പതിപ്പ് കണ്ടെത്താനായി, അതുകൊണ്ട് റെൻഡറിങ് ആവശ്യമില്ല.
<a href="$1">പുനർ-റെൻഡറിങ് ചെയ്യുക.</a></li></ul>',
	'coll-excluded-templates' => '*[[:Category:$1|$1]] എന്ന വർഗ്ഗത്തിലുൾപ്പെട്ട ഫലകങ്ങൾ ഒഴിവാക്കി.',
	'coll-blacklisted-templates' => '*കരിമ്പട്ടികയിലുള്ള ഫലകങ്ങൾ [[:$1]] ഒഴിവാക്കിയിരിക്കുന്നു.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a></p>-ലേക്കു തിരിച്ചു പോവുക',
	'coll-book_title' => 'അച്ചടിച്ച പുസ്തകം ഓർഡർ ചെയ്യുക',
	'coll-book_text' => 'ഞങ്ങളുടെ ആവശ്യപ്പെട്ടാൽ-അച്ചടിച്ചു-തരുന്ന പങ്കാളിയുടെ പക്കൽ നിന്നും അച്ചടിച്ച പുസ്തകം സ്വന്തമാക്കുക.',
	'coll-order_from_pp' => '$1 വഴി എങ്ങനെയുണ്ടെന്നു കാണുക',
	'coll-about_pp' => '$1-നെ കുറിച്ച്',
	'coll-invalid_podpartner_title' => 'അസാധുവായ POD പങ്കാളി',
	'coll-invalid_podpartner_msg' => 'നൽകിയ POD പങ്കാളി അസാധുവാണ്.
ദയവായി താങ്കളുടെ മീഡിയവിക്കി കാര്യനിർവാഹകനെ ബന്ധപ്പെടുക.',
	'coll-license' => 'അനുമതി',
	'coll-return_to' => '[[:$1]] താളിലേയ്ക്ക് തിരിച്ചു പോവുക',
	'coll-more_info' => 'കൂടുതൽ വിവരങ്ങൾ പ്രദർശിപ്പിക്കുക',
	'coll-hide_info' => 'വിവരങ്ങൾ മറയ്ക്കുക',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/പീഡിയപ്രസ്സ് ആവശ്യപ്പെടൽ വിവരങ്ങൾ',
	'coll-suggest_title' => 'താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് നിർദ്ദേശിക്കുന്ന താളുകൾ',
	'coll-suggest_intro_text' => 'താങ്കളുടെ പുസ്തകത്തിൽ ഇപ്പോഴുള്ള വിക്കിതാളുകളുടെ ഗണത്തെ അധിഷ്ഠിതമാക്കിയുള്ള നിർദ്ദേശങ്ങളാണിത്.
ചേർക്കാനോ നീക്കംചെയ്യാനോ ഉള്ള ബട്ടണുകൾ ഞെക്കുമ്പോൾ പട്ടിക പുതുക്കപ്പെടുന്നതാണ്.',
	'coll-suggested_articles' => 'നിർദ്ദേശങ്ങൾ',
	'coll-suggest_reset_bans' => 'പുനഃക്രമീകരിക്കുക',
	'coll-suggest_reset_bans_tooltip' => 'മുമ്പ് നീക്കം ചെയ്ത നിർദ്ദേശങ്ങൾ പ്രദർശിപ്പിക്കുക',
	'coll-suggest_add_selected' => 'തിരഞ്ഞെടുത്ത താളുകൾ ചേർക്കുക',
	'coll-suggest_ban_selected' => 'തിരഞ്ഞെടുത്ത താളുകൾ നീക്കംചെയ്യുക',
	'coll-suggest_your_book' => 'താങ്കളുടെ പുസ്തകം',
	'coll-suggest_show' => 'പ്രദർശിപ്പിക്കുക',
	'coll-suggest_ban_tooltip' => 'ഈ താൾ നിർദ്ദേശങ്ങളുടെ പട്ടികയിൽ നിന്നും നീക്കം ചെയ്യുക',
	'coll-suggest_article_ban' => 'നിർദ്ദേശങ്ങളിൽ നിന്നും <strong>$1</strong> എന്ന താൾ നീക്കം ചെയ്തിരിക്കുന്നു ($2).',
	'coll-suggest_article_add' => 'താൾ <strong>$1</strong>, താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് ചേർത്തു ($2).',
	'coll-suggest_article_remove' => 'താൾ <strong>$1</strong>, താങ്കളുടെ പുസ്തകത്തിൽ നിന്നും നീക്കം ചെയ്തു ($2).',
	'coll-suggest_undo_tooltip' => 'ഈ പ്രവൃത്തി തിരസ്കരിക്കുക',
	'coll-suggest_undo' => 'പ്രവൃത്തി തിരസ്കരിക്കുക',
	'coll-load_local_book' => '%NUMPAGES% വിക്കി താളുകൾ ഉൾക്കൊള്ളുന്ന %TITLE% പുസ്തകത്തിന്റെ പ്രവൃത്തികൾ തുടരാൻ ശരി എന്നത് ഞെക്കുക. അത് മായ്ച്ച് ശൂന്യമായ പുസ്തകത്തിൽ തുടങ്ങാൻ റദ്ദാക്കുക ഞെക്കുക.',
	'right-collectionsaveasuserpage' => 'പുസ്തകങ്ങൾ ഉപയോക്തൃതാളായി സേവ് ചെയ്യുക',
	'right-collectionsaveascommunitypage' => 'പുസ്തകങ്ങൾ സമൂഹ താളായി സേവ് ചെയ്യുക',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'coll-show' => 'Үзүүлэх',
	'coll-yes' => 'Тийм',
	'coll-no' => 'Үгүй',
	'coll-cancel' => 'Цуцлах',
	'coll-suggest_show' => 'үзүүлэх',
);

/** Marathi (मराठी)
 * @author Htt
 * @author Kaustubh
 * @author Mahitgar
 */
$messages['mr'] = array(
	'coll-desc' => '[[Special:Collection|पाने गोळा करा]], पीडीएफ तयार करा',
	'coll-collection' => 'गोळा केलेली पाने',
	'coll-collections' => 'गोळा केलेली पाने',
	'coll-noscript_text' => '<h1>जावास्क्रीप्ट आवश्यक!</h1>
<strong>तुमचा ब्राउझार जावास्क्रीप्ट वापरू शकत नाही किंवा वापर बंद केलेला आहे.
जावास्क्रीप्ट चालू केल्याशिवाय हे पान व्यवस्थित काम करणार नाही.</strong>',
	'coll-download_title' => 'उतरवा',
	'coll-download_text' => 'तुम्ही गोळा केलेल्या पानांच्या पीडीएफ आवृत्त्या गोळा करण्यासाठी, दिलेली कळ दाबा.',
	'coll-remove' => 'वगळा',
	'coll-move_to_top' => 'सर्वात वर हलवा',
	'coll-move_up' => 'वर हलवा',
	'coll-move_down' => 'खाली हलवा',
	'coll-move_to_bottom' => 'सर्वात खाली हलवा',
	'coll-title' => 'शीर्षक:',
	'coll-subtitle' => 'उपशीर्षक:',
	'coll-contents' => 'अनुक्रमणिका',
	'coll-create_chapter' => 'नवीन धडा बनवा',
	'coll-sort_alphabetically' => 'अक्षरांप्रमाणे पानांचे वर्गीकरण करा',
	'coll-rename' => 'नाव बदला',
	'coll-new_chapter' => 'नवीन धड्याचे नाव लिहा',
	'coll-rename_chapter' => 'नवीन धड्याचे नाव लिहा',
	'coll-no_such_category' => 'असा वर्ग अस्तित्वात नाही',
	'coll-notitle_title' => 'या पानाचे शीर्षक ठरविता आलेले नाही.',
	'coll-post_failed_title' => 'पोस्ट (POST) ची मागणी पूर्ण झालेली नाही',
	'coll-post_failed_msg' => '$1 ची पोस्ट (POST) मागणी पूर्ण झालेली नाही ($2).',
	'coll-error_reponse' => 'सर्व्हर कडून चुकीचा संदेश आलेला आहे',
	'coll-empty_collection' => 'रिकामे कलेक्शन',
	'coll-revision' => 'आवृत्ती: $1',
	'coll-save_collection_title' => 'कलेक्शन जतन करा',
	'coll-save_collection_text' => 'हे कलेक्शन नंतर वापरण्यासाठी पानाला शीर्षक देउन तसेच कलेक्शनचा प्रकार निवडून जतन करा:',
	'coll-login_to_save' => 'जर तुम्ही कलेक्शन नंतर वापरण्यासाठी जतन करू इच्छित असाल, तर कृपया [[Special:UserLogin|प्रवेश करा अथवा सदस्य नोंदणी करा]].',
	'coll-personal_collection_label' => 'वैयक्तिक कलेक्शन:',
	'coll-community_collection_label' => 'सामुहिक कलेक्शन:',
	'coll-save_collection' => 'कलेक्शन जतन करा',
	'coll-overwrite_title' => 'पान अस्तित्वात आहे. पुनर्लेखन करायचे का?',
	'coll-overwrite_text' => '[[:$1]] या नावाचे पान अगोदरच अस्तित्वात आहे.
तुम्ही त्यावर तुमचे कलेक्शन पुनर्लेखित करू इच्छिता का?',
	'coll-yes' => 'होय',
	'coll-no' => 'नाही',
	'coll-load_overwrite_text' => 'तुमच्या कलेक्शन मध्ये अगोदरच काही पाने आहेत.
तुम्ही तुमचे कलेक्शन पुनर्लेखित करू इच्छिता, की पाने वाढवू इच्छिता की रद्द करु इच्छिता?',
	'coll-overwrite' => 'पुनर्लेखन करा',
	'coll-append' => 'वाढवा',
	'coll-cancel' => 'रद्द करा',
	'coll-limit_exceeded_title' => 'कलेक्शन खूप मोठे झालेले आहे',
	'coll-limit_exceeded_text' => 'तुमचे पानांचे कलेक्शन खूप मोठे झालेले आहे.
आणखी पाने वाढविता येणार नाहीत.',
	'coll-notfound_title' => 'कलेक्शन सापडले नाही',
	'coll-notfound_text' => 'कलेक्शन पान सापडले नाही.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a></p> कडे परत जा',
	'coll-book_title' => 'छापील आवृत्तीची मागणी नोंदवा',
	'coll-book_text' => 'तुम्ही खाली दिलेल्या मागणीनुसार छपाई करणार्‍या जोडीदारांच्या संकेतस्थळाला भेट देऊन तुमच्या कलेक्शन मधील पानांची छापील आवृत्ती मिळवू शकता:',
	'coll-order_from_pp' => '$1 कडून छापील प्रत मागवा',
	'coll-about_pp' => '$1 बद्दल',
	'coll-invalid_podpartner_title' => 'चुकीचा POD भागीदार',
	'coll-invalid_podpartner_msg' => 'दिलेला POD भागीदार चुकीचा आहे.
कृपया मीडियाविकि प्रबंधकाशी संपर्क करा.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Aviator
 * @author Izzudin
 * @author Kurniasan
 */
$messages['ms'] = array(
	'coll-desc' => '[[Special:Book|Mencipta buku]]',
	'coll-book_creator_intro' => "<big>Dengan ''pencipta buku'', anda dapat mencipta buku yang terdiri daripada laman-laman wiki sembarangan. Anda boleh mengeksport buku dalam format-format berbeza (contohnya PDF atau ODF) ataupun memesan salinan tercetak.</big>",
	'coll-manage_your_book' => 'Urus buku anda',
	'coll-book_creator_help' => 'Lihat [[{{MediaWiki:Coll-helppage}}|laman bantuan tentang buku]] untuk maklumat lanjut.',
	'coll-start_book_creator' => 'Mulakan pencipta buku',
	'coll-book_creator_continue' => 'Terus menggunakan pencipta buku',
	'coll-book_creator_disable_text' => "''Pencipta buku'' akan dilumpuhkan dan buku yang sedang anda kerjakan akan dihapuskan.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Teks mod buku',
	'coll-collection' => 'Buku',
	'coll-collections' => 'Buku',
	'coll-exclusion_category_title' => 'Tidak dicetak',
	'coll-print_template_prefix' => 'Cetak',
	'coll-print_template_pattern' => '$1/Cetak',
	'coll-unknown_subpage_title' => 'Sublaman tidak dikenali',
	'coll-unknown_subpage_text' => 'Sublaman [[Special:Book|Buku]] ini tidak wujud',
	'coll-couldnotaddarticle_title' => 'Tidak dapat menambah laman wiki',
	'coll-couldnotaddarticle_msg' => 'Laman wiki tidak dapat ditambah.',
	'coll-couldnotremovearticle_title' => 'Tidak dapat membuang laman wiki',
	'coll-couldnotremovearticle_msg' => 'Laman wiki tidak dapat dibuang.',
	'coll-noscript_text' => '<h1>JavaScript diperlukan!</h1>
<strong>JavaScript tidak disokong oleh pelayar anda atau telah dilumpuhkan. Laman ini tidak dapat berfungsi dengan betul sekiranya ciri JavaScript tidak diaktifkan.</strong>',
	'coll-savedbook_template' => 'saved_book',
	'coll-your_book' => 'Buku anda',
	'coll-download_title' => 'Muat turun',
	'coll-download_text' => 'Untuk memuat turun buku anda, pilih format dan klik butang yang berkenaan.',
	'coll-download_as_text' => 'Untuk memuat turun buku anda dalam format $1, klik butang yang berkenaan.',
	'coll-download' => 'Muat turun',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Buang',
	'coll-show' => 'Paparkan',
	'coll-move_to_top' => 'Naikkan ke puncak',
	'coll-move_up' => 'Naikkan',
	'coll-move_down' => 'Turunkan',
	'coll-move_to_bottom' => 'Turunkan ke dasar',
	'coll-title' => 'Tajuk:',
	'coll-subtitle' => 'Tajuk kecil:',
	'coll-contents' => 'Kandungan',
	'coll-drag_and_drop' => 'Seret dan letak untuk menyusun semula laman dan bab',
	'coll-create_chapter' => 'Cipta bab',
	'coll-sort_alphabetically' => 'Susun mengikut tertib abjad',
	'coll-rename' => 'Tukar nama',
	'coll-new_chapter' => 'Masukkan nama untuk bab baru',
	'coll-rename_chapter' => 'Masukkan nama baru untuk bab',
	'coll-no_such_category' => 'Kategori tidak wujud',
	'coll-notitle_title' => 'Tajuk laman tidak dapat dipastikan.',
	'coll-post_failed_title' => 'Permintaan POST gagal',
	'coll-post_failed_msg' => 'Permintaan POST terhadap $1 gagal ($2).',
	'coll-mwserve_failed_title' => 'Ralat pelayan jana',
	'coll-mwserve_failed_msg' => 'Terdapat ralat pada pelayan jana: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Jawapan ralat daripada pelayan',
	'coll-empty_collection' => 'Buku kosong',
	'coll-revision' => 'Semakan: $1',
	'coll-save_collection_title' => 'Simpan dan kongsi buku anda',
	'coll-save_collection_text' => 'Pilih lokasi:',
	'coll-login_to_save' => 'Jika anda mahu menyimpan buku anda untuk kegunaan masa depan, sila [[Special:UserLogin|log masuk atau buka akaun baru]].',
	'coll-personal_collection_label' => 'Buku peribadi:',
	'coll-community_collection_label' => 'Buku komuniti:',
	'coll-save_collection' => 'Simpan buku',
	'coll-save_category' => 'Semua buku tersimpan ditambah ke kategori [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Laman telah pun wujud. Tulis ganti?',
	'coll-overwrite_text' => 'Laman yang bernama [[:$1]] sudah pun wujud.
Adakah anda ingin menggantinya dengan buku anda?',
	'coll-yes' => 'Ya',
	'coll-no' => 'Tidak',
	'coll-load_overwrite_text' => 'Buku anda telah pun mengandungi beberapa laman. Adakah anda mahu menulis ganti buku anda, menambah kandungan baru tersebut, atau batal?',
	'coll-overwrite' => 'Tulis ganti',
	'coll-append' => 'Tambah',
	'coll-cancel' => 'Batalkan',
	'coll-update' => 'Kemas kini',
	'coll-limit_exceeded_title' => 'Buku terlalu besar',
	'coll-limit_exceeded_text' => 'Buku anda terlalu besar dan laman tidak boleh ditambah lagi.',
	'coll-rendering_title' => 'Menjana',
	'coll-rendering_text' => '<p><strong>Sila tunggu sementara dokumen tersebut dijana.</strong></p>

<p><strong>Perkembangan:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Laman ini akan disegarkan semula secara automatik dalam beberapa saat.
Jika tidak, sila tekan butang \'\'refresh\'\' di pelayar web anda.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(laman wiki: $1)',
	'coll-rendering_page' => '(laman: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Merender teks maklumat laman',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Merender teks maklumat koleksi',
	'coll-rendering_finished_title' => 'Penjanaan selesai',
	'coll-rendering_finished_text' => '<strong>Fail dokumen tersebut telah dijana.</strong>
<strong>[$1 Muat turun fail ini]</strong> ke dalam komputer anda.

Catatan:
* Tidak berpuas hati dengan output yang dihasilkan? Lihat [[{{MediaWiki:Coll-helppage}}|laman bantuan mengenai koleksi]] untuk mengetahui bagaimana anda boleh memperbaikinya lagi.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Merender teks maklumat laman',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Merender teks maklumat koleksi',
	'coll-notfound_title' => 'Buku tidak dijumpai',
	'coll-notfound_text' => 'Laman buku tidak dapat dijumpai.',
	'coll-download_notfound_title' => 'Tidak menemui fail',
	'coll-download_notfound_text' => 'Fail yang anda cuba muat turun tidak wujud:
Mungkin ia telah dipadam dan perlu dijanakan semula.',
	'coll-download_failed_title' => 'Berlaku ralat ketika memuat turun',
	'coll-download_failed_text' => 'Berlaku ralat ketika memuat turun fail ini: $1',
	'coll-is_cached' => '<ul><li>Versi tercache bagi dokumen itu telah ditemui, jadi penjanaan tidak diperlukan. <a href="$1">Arahkan penjanaan semula.</a></li></ul>',
	'coll-excluded-templates' => '* Templat-templat dalam kategori [[:Category:$1|$1]] telah dikecualikan.',
	'coll-blacklisted-templates' => '* Templat-templat dalam senarai hitam [[:$1]] telah dikecualikan.',
	'coll-return_to_collection' => '<p>Kembali ke <a href="$1">$2</a></p>',
	'coll-book_title' => 'Tempah buku bercetak',
	'coll-book_text' => 'Dapatkan buku bercetak daripada rakan percetakan kami:',
	'coll-order_from_pp' => 'Pralihat dengan $1',
	'coll-about_pp' => 'Perihal $1',
	'coll-invalid_podpartner_title' => 'Rakan POD tidak sah',
	'coll-invalid_podpartner_msg' => 'Rakan POD yang dibekalkan tidak sah. Sila hubungi pentadbir MediaWiki anda.',
	'coll-license' => 'Lesen',
	'coll-return_to' => 'Kembali ke [[:$1]]',
	'coll-more_info' => 'Paparkan maklumat lanjut',
	'coll-hide_info' => 'Sorokkan maklumat',
	'coll-order_info_article' => 'Maklumat pesanan {{MediaWiki:Coll-helppage}}/PediaPress',
	'coll-suggest_title' => 'Laman-laman cadangan untuk buku anda',
	'coll-suggest_intro_text' => 'Cadangan-cadangan ini adalah berdasarkan laman-laman wiki semasa dalam buku anda. Senarai ini akan dikemaskinikan setiap kali anda mengklik butang tambah atau buang.',
	'coll-suggested_articles' => 'Cadangan',
	'coll-suggest_reset_bans' => 'set semula',
	'coll-suggest_reset_bans_tooltip' => 'Papar cadangan-cadangan yang telah dibuang',
	'coll-suggest_add_selected' => 'Tambah laman-laman yang dipilih',
	'coll-suggest_ban_selected' => 'Buang laman-laman yang dipilih',
	'coll-suggest_your_book' => 'Buku anda',
	'coll-suggest_show' => 'paparkan',
	'coll-suggest_ban_tooltip' => 'Buang laman ini daripada senarai cadangan',
	'coll-suggest_article_ban' => 'Laman <strong>$1</strong> telah dibuang daripada senarai cadangan ($2).',
	'coll-suggest_article_add' => 'Laman <strong>$1</strong> telah ditambah ke dalam buku anda ($2).',
	'coll-suggest_article_remove' => 'Laman <strong>$1</strong> telah dibuang daripada buku anda ($2).',
	'coll-suggest_undo_tooltip' => 'Buat asal tindakan ini',
	'coll-suggest_undo' => 'buat asal',
	'coll-load_local_book' => 'Klik OK untuk meneruskan dengan buku anda, %TITLE%, yang mengandungi %NUMPAGES% laman wiki. Klik Cancel untuk menghapuskannya dan mula dengan buku kosong.',
	'right-collectionsaveasuserpage' => 'Menyimpan buku-buku sebagai laman pengguna',
	'right-collectionsaveascommunitypage' => 'Menyimpan buku-buku sebagai laman masyarakat',
);

/** Maltese (Malti)
 * @author Roderick Mallia
 */
$messages['mt'] = array(
	'coll-cancel' => 'Annulla',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'coll-collection' => 'Кинига',
	'coll-collections' => 'Кинигат',
	'coll-print_template_prefix' => 'Нолдамс',
	'coll-download_title' => 'Таргамо',
	'coll-download' => 'Таргамс',
	'coll-format_label' => 'Форматозо:',
	'coll-remove' => 'Нардык',
	'coll-show' => 'Невтемс',
	'coll-move_to_top' => 'Печтевтемс тёкшос',
	'coll-move_up' => 'Печтевтемс верев',
	'coll-move_down' => 'Печтевтемс алов',
	'coll-move_to_bottom' => 'Печтевтемс алксонтень',
	'coll-title' => 'Коняксозо:',
	'coll-contents' => 'Потмокс',
	'coll-rename' => 'Лемдемс одов',
	'coll-no_such_category' => 'Истямо категория арась',
	'coll-empty_collection' => 'Чаво кинига',
	'coll-save_collection_title' => 'Ванстомс пурнавксот ды панжомс лиятненень',
	'coll-community_collection_label' => 'Велень-сядонь пурнавксось:',
	'coll-save_collection' => 'Ванстомс киниганть',
	'coll-yes' => 'Истя',
	'coll-no' => 'Арась',
	'coll-overwrite' => 'Нардамс сёрмадомсто',
	'coll-notfound_title' => 'Кинигась а муеви',
	'coll-suggested_articles' => 'Мельть-ушодкст',
	'coll-suggest_show' => 'невтемс',
);

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'coll-about_pp' => 'دربارهٔ $1',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'coll-print_template_prefix' => 'Tictepoztlahcuilōz',
	'coll-show' => 'Tiquittāz',
	'coll-title' => 'Tōcāitl:',
	'coll-revision' => 'Tlachiyaliztli: $1',
	'coll-yes' => 'Quēmah',
	'coll-no' => 'Ahmo',
	'coll-cancel' => 'Ticcuepāz',
	'coll-update' => 'Tiquiyancuīyāz',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'coll-desc' => '[[Special:Book|Böker opstellen]]',
	'coll-collection' => 'Book',
	'coll-collections' => 'Böker',
	'coll-exclusion_category_title' => 'Bi’t Drucken weglaten',
	'coll-print_template_prefix' => 'Drucken',
	'coll-print_template_pattern' => '$1/Drucken',
	'coll-unknown_subpage_title' => 'Unbekannt Ünnersied',
	'coll-unknown_subpage_text' => 'Disse Ünnersied vun dat [[Special:Book|Book]] gifft dat nich',
	'coll-noscript_text' => '<h1>Javascript nödig!</h1>
<strong>Dien Browser ünnerstütt keen Javascript oder Javascript is utschalt.
Disse Sied löppt blot richtig, wenn Javascript an is.</strong>',
	'coll-savedbook_template' => 'Spiekert Book',
	'coll-your_book' => 'Dien Book',
	'coll-download_title' => 'Dalladen',
	'coll-download_text' => 'En Offline-Version daltoladen, wähl en Format un klick op den Knoop.',
	'coll-download_as_text' => 'Üm en Version in Format $1 daltoladen, klick op den Knopp.',
	'coll-download' => 'Dalladen',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Rutnehmen',
	'coll-show' => 'Wiesen',
	'coll-move_to_top' => 'ganz na baven',
	'coll-move_up' => 'na baven',
	'coll-move_down' => 'dal',
	'coll-move_to_bottom' => 'ganz dal',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Ünnertitel:',
	'coll-contents' => 'Inholt',
	'coll-drag_and_drop' => 'Mit de Muus kannst du Sieden un Kapittels schuven un ümsorteren',
	'coll-create_chapter' => 'Kapittel opstellen',
	'coll-sort_alphabetically' => 'Alphabeetsch sorteren',
	'coll-rename' => 'Ne’en Naam geven',
	'coll-new_chapter' => 'Ne’en Naam för dat ne’e Kapittel angeven',
	'coll-rename_chapter' => 'Ne’en Naam för dat Kapittel angeven',
	'coll-no_such_category' => 'So’n Kategorie gifft dat nich',
	'coll-notitle_title' => 'De Titel vun de Sied kunn nich faststellt warrn.',
	'coll-post_failed_title' => 'POST-Anfraag hett nich klappt',
	'coll-post_failed_msg' => 'POST-Anfraag an $1 hett nich klappt ($2).',
	'coll-mwserve_failed_title' => 'Render-Serverfehler',
	'coll-mwserve_failed_msg' => 'Op’n Render-Server hett dat en Fehler geven: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Fehlernaricht vun’n Server',
	'coll-empty_collection' => 'Leddig Book',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Spieker un deel dien Book',
	'coll-save_collection_text' => 'En Oort wählen:',
	'coll-login_to_save' => 'Wenn du Böker för later spiekern wullt, denn [[Special:UserLogin|mell di an oder stell en Brukerkonto op]].',
	'coll-personal_collection_label' => 'Persöönlich Book:',
	'coll-community_collection_label' => 'Gemeenschopsbook:',
	'coll-save_collection' => 'Book spiekern',
	'coll-save_category' => 'All Böker warrt in de Kategorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] insorteert.',
	'coll-overwrite_title' => 'Sied gifft dat al. Överschrieven?',
	'coll-overwrite_text' => 'Dat gifft al en Sied mit’n Naam [[:$1]]. Wullt du ehr gegen dien Sammlung utwesseln?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Nee',
	'coll-load_overwrite_text' => 'In dien Book sünd al welk Sieden in.
Wullt du dat aktuelle Book överschrieven, de ne’en Sieden achtern ranhängen oder dat Laden vun dit Book afbreken?',
	'coll-overwrite' => 'Överschrieven',
	'coll-append' => 'Tofögen',
	'coll-cancel' => 'Afbreken',
	'coll-update' => 'Opfrischen',
	'coll-limit_exceeded_title' => 'Book to groot',
	'coll-limit_exceeded_text' => 'Dien Book is to groot.
Köönt keen Sieden mehr toföögt warrn.',
	'coll-rendering_title' => 'An’t Rendern',
	'coll-rendering_text' => '<p><strong>Wees gedüllig, solang de Datei opstellt warrt.</strong></p>

<p><strong>Foortgang:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Disse Sied schull sik normalerwies alle poor Sekunnen sülvst opfrischen.
Wenn dat aver nich so is, denn kannst du op den „Opfrischen“-Knopp vun dien Browser klicken.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(Wikisied: $1)',
	'coll-rendering_page' => '(Sied: $1)',
	'coll-rendering_finished_title' => 'Rendern trech',
	'coll-rendering_finished_text' => '<strong>De Datei is nu tohoopstellt.</strong>
<strong>[$1 Datei dalladen]</strong>.

Henwiesen:
* Büst du nich tofreden mit de Datei? Üm de Utgaav to verbetern, gifft dat Tipps bi de [[{{MediaWiki:Coll-helppage}}|Hülp to Böker]].',
	'coll-notfound_title' => 'Book nich funnen',
	'coll-notfound_text' => 'Booksied kunn nich funnen warrn.',
	'coll-download_notfound_title' => 'Datei nich funnen',
	'coll-download_notfound_text' => 'De Datei, de du dalladen wullst, de gifft dat nich: Villicht is se wegdaan worrn oder se mutt nee opstellt warrn.',
	'coll-is_cached' => '<ul><li>Dat geev en twischenspiekert Version vun dat Dokument, nee Rendern weer nich nödig. <a href="$1">Nu nee rendern.</a></li></ul>',
	'coll-excluded-templates' => '* Vörlagen ut de Kategorie [[:Category:$1|$1]] sünd utslaten bleven.',
	'coll-blacklisted-templates' => '* Vörlagen vun de Swarte List [[:$1]] sünd utslaten bleven.',
	'coll-return_to_collection' => '<p>Trüch na <a href="$1">$2</a></p>',
	'coll-book_title' => 'As druckt Book bestellen',
	'coll-book_text' => 'Bestell en druckt Book bi een vun uns Print-on-Demand-Partners:',
	'coll-order_from_pp' => 'Book bestellen bi $1',
	'coll-about_pp' => 'Över $1',
	'coll-invalid_podpartner_title' => 'Ungülligen Print-on-Demand-Partner',
	'coll-invalid_podpartner_msg' => 'De Angaven to’n Print-on-Demand-Partner sünd verkehrt. Neem Kuktakt op mit den MediaWiki-Administrater.',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Trüch na [[:$1]]',
	'coll-more_info' => 'Wies mehr Infos',
	'coll-hide_info' => 'Informatschonen versteken',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress Bestellinformatschoon',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'coll-desc' => '[[Special:Book|Boeken maken]]',
	'coll-collection' => 'Boek',
	'coll-collections' => 'Boeken',
	'coll-exclusion_category_title' => 'Vortlaoten bie t aofdrokken',
	'coll-print_template_prefix' => 'Aofdrokken',
	'coll-print_template_pattern' => '$1/Aofdrokken',
	'coll-unknown_subpage_title' => 'Onbekende subpagina',
	'coll-unknown_subpage_text' => 'Disse subpagina van [[Special:Book|Boek]] besteet niet',
	'coll-savedbook_template' => 'op-esleugen_boek',
	'coll-your_book' => 'Joew boek',
	'coll-download_title' => 'Binnenhaolen',
	'coll-download_text' => 'Kies n bestaandsfermaot en klik op de knoppe um joew boek binnen te haolen.',
	'coll-rename' => 'Herneumen',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'coll-title' => 'शीर्षक:',
	'coll-revision' => 'संशोधन: $1',
	'coll-save_collection' => 'किताब संग्रह गर्ने',
);

/** Dutch (Nederlands)
 * @author Erwin
 * @author GerardM
 * @author McDutchie
 * @author Mwpnl
 * @author Romaine
 * @author SPQRobin
 * @author Siebrand
 * @author Tvdm
 */
$messages['nl'] = array(
	'coll-desc' => '[[Special:Book|Boeken maken]]',
	'coll-book_creator_intro' => "<big>Met de ''Boekenmaker'' kunt u een boek maken dat wikipagina's naar uw eigen inzicht bevat.
U kunt het boek exporteren in verschillende bestandsformaten (bijvoorbeeld PDF of ODF) of een gedrukt exemplaar bestellen.</big>",
	'coll-manage_your_book' => 'Uw boek beheren',
	'coll-book_creator_help' => 'Zie de [[{{MediaWiki:Coll-helppage}}|hulppagina over boeken]] voor meer informatie.',
	'coll-start_book_creator' => 'Boekenmaker starten',
	'coll-book_creator_continue' => 'Doorgaan met de Boekenmaker',
	'coll-book_creator_disable_text' => "De ''Boekenmaker'' wordt uitgeschakeld en het boek waar u aan werkt wordt verwijderd.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Boekenmakertekst',
	'coll-collection' => 'Boek',
	'coll-collections' => 'Boeken',
	'coll-exclusion_category_title' => 'Weglaten bij afdrukken',
	'coll-print_template_prefix' => 'Afdruk',
	'coll-print_template_pattern' => '$1/Afdrukken',
	'coll-unknown_subpage_title' => 'Onbekende subpagina',
	'coll-unknown_subpage_text' => 'Deze subpagina van [[Special:Book|Boek]] bestaat niet',
	'coll-couldnotaddarticle_title' => 'De wikipagina kon niet toegevoegd worden',
	'coll-couldnotaddarticle_msg' => 'De wikipagina kon niet toegevoegd worden.',
	'coll-couldnotremovearticle_title' => 'De wikipagina kon niet verwijderd worden',
	'coll-couldnotremovearticle_msg' => 'De wikipagina kon niet verwijderd worden.',
	'coll-noscript_text' => '<h1>JavaScript is vereist!</h1>
<strong>Uw browser ondersteunt geen JavaScript of JavaScript is uitgeschakeld.
Deze pagina werkt niet correct tenzij u JavaScript inschakelt.</strong>',
	'coll-savedbook_template' => 'opgeslagen_boek',
	'coll-your_book' => 'Uw boek',
	'coll-download_title' => 'Downloaden',
	'coll-download_text' => 'Kies een bestandsformaat en klik op de knop om uw boek te downloaden.',
	'coll-download_as_text' => 'Klik op de knop om uw boek te downloaden in het bestandsformaat $1.',
	'coll-download' => 'Downloaden',
	'coll-format_label' => 'Formaat:',
	'coll-remove' => 'Verwijderen',
	'coll-show' => 'Weergeven',
	'coll-move_to_top' => 'Helemaal naar boven',
	'coll-move_up' => 'Naar boven',
	'coll-move_down' => 'Naar onderen',
	'coll-move_to_bottom' => 'Helemaal naar onderen',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Ondertitel:',
	'coll-contents' => 'Inhoud',
	'coll-drag_and_drop' => "U kunt de wikipagina's en hoofstukken slepen om ze te ordenen",
	'coll-create_chapter' => 'Hoofdstuk maken',
	'coll-sort_alphabetically' => 'Alfabetisch sorteren',
	'coll-rename' => 'Hernoemen',
	'coll-new_chapter' => 'Voer de naam van het nieuwe hoofdstuk in',
	'coll-rename_chapter' => 'Voer een nieuwe naam in voor het hoofdstuk',
	'coll-no_such_category' => 'De categorie bestaat niet',
	'coll-notitle_title' => 'De titel van de pagina kon niet vastgesteld worden.',
	'coll-post_failed_title' => 'POST-verzoek mislukt',
	'coll-post_failed_msg' => 'Het POST-verzoek naar $1 is mislukt ($2).',
	'coll-mwserve_failed_title' => 'Fout in de renderserver',
	'coll-mwserve_failed_msg' => 'De renderserver gaf de volgende foutmelding: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'De server heeft een foutmelding teruggegeven',
	'coll-empty_collection' => 'Leeg boek',
	'coll-revision' => 'Versie: $1',
	'coll-save_collection_title' => 'Uw boek opslaan en delen',
	'coll-save_collection_text' => 'Kies een locatie:',
	'coll-login_to_save' => 'Indien u boeken wilt opslaan voor later gebruik, [[Special:UserLogin|meldt u zich dan aan of maak een gebruiker aan]].',
	'coll-personal_collection_label' => 'Persoonlijk boek:',
	'coll-community_collection_label' => 'Gemeenschappelijk boek:',
	'coll-save_collection' => 'Boek opslaan',
	'coll-save_category' => 'Alle opgeslagen boeken worden toegevoegd aan de categorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'De pagina bestaat al. Overschrijven?',
	'coll-overwrite_text' => "Er bestaat al een pagina met de naam [[:$1]].
Wil u die pagina vervangen door uw verzameling wikipagina's?",
	'coll-yes' => 'Ja',
	'coll-no' => 'Nee',
	'coll-load_overwrite_text' => "U hebt al een aantal pagina's in uw boek.
Wilt u uw huidige boek overschrijven, de nieuwe pagina's toevoegen óf het laden van dit boek annuleren?",
	'coll-overwrite' => 'Overschrijven',
	'coll-append' => 'Toevoegen',
	'coll-cancel' => 'Annuleren',
	'coll-update' => 'Verversen',
	'coll-limit_exceeded_title' => 'Boek is te groot',
	'coll-limit_exceeded_text' => "Uw boek is te groot.
U kunt geen pagina's meer toevoegen.",
	'coll-rendering_title' => 'Bezig met renderen',
	'coll-rendering_text' => '<p><strong>Het document wordt aangemaakt.</strong></p>

<p><strong>Voortgang:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Deze pagina wordt regelmatig bijgewerkt.
Als dit niet werkt, klik dan op de knop "Vernieuwen" in uw browser.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikipagina: $1)',
	'coll-rendering_page' => '(pagina: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Paginarenderinformatie',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Verzamelingrenderinformatie',
	'coll-rendering_finished_title' => 'Renderen afgerond',
	'coll-rendering_finished_text' => '<strong>Het document is aangemaakt.</strong>
<strong>[$1 Het bestand downloaden]</strong>.

Opmerkingen:
* Niet tevreden met de uitvoer? Op de [[{{MediaWiki:Coll-helppage}}|hulppagina over boeken]] staan tips om deze uitvoer te verbeteren.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informatietekst bij renderen pagina',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informatietekst bij renderen verzameling',
	'coll-notfound_title' => 'Boek niet gevonden',
	'coll-notfound_text' => 'Boekpagina is niet gevonden.',
	'coll-download_notfound_title' => 'Het bestand is niet gevonden',
	'coll-download_notfound_text' => 'Het bestand dat u probeert te downloaden bestaat niet.
Het is mogelijk verwijderd en moet opnieuw aangemaakt worden.',
	'coll-download_failed_title' => 'Fout bij het downloaden',
	'coll-download_failed_text' => 'Er is een fout opgetreden bij het downloaden: $1',
	'coll-is_cached' => '<ul><li>Er is een versie van het document beschikbaar in de cache, dus opnieuw renderen was niet nodig.
<a href="$1">Opnieuw renderen.</a></li></ul>',
	'coll-excluded-templates' => '* Sjablonen in de categorie [[:Category:$1|$1]] worden genegeerd.',
	'coll-blacklisted-templates' => '* Sjablonen op de zwarte lijst [[:$1]] worden genegeerd.',
	'coll-return_to_collection' => '<p>Teruggaan naar <a href="$1">$2</a></p>',
	'coll-book_title' => 'Als gedrukt boek bestellen',
	'coll-book_text' => 'U kunt een gedrukt boek bestellen bij een print-on-demand-partner:',
	'coll-order_from_pp' => 'Voorvertoning van $1',
	'coll-about_pp' => 'Over $1',
	'coll-invalid_podpartner_title' => 'Ongeldige print on demand-partner',
	'coll-invalid_podpartner_msg' => 'De opgegeven print on demand-partner is ongeldig.
Neem contact op met uw MediaWiki-beheerder.',
	'coll-license' => 'Licentie',
	'coll-return_to' => 'Terug naar [[:$1]]',
	'coll-more_info' => 'Meer informatie weergeven',
	'coll-hide_info' => 'Informatie verbergen',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Bestelinformatie PediaPress',
	'coll-suggest_title' => 'Paginasuggesties voor uw boek',
	'coll-suggest_intro_text' => "Suggesties zijn gebaseerd op de huidige selectie van wikipagina's in uw boek.
De lijst wordt bijgewerkt als u op de knop 'toevoegen' of 'verwijderen' klikt.",
	'coll-suggested_articles' => 'Suggesties',
	'coll-suggest_reset_bans' => 'opnieuw instellen',
	'coll-suggest_reset_bans_tooltip' => 'Eerder verwijderde suggesties weergeven',
	'coll-suggest_add_selected' => "Geselecteerde pagina's toevoegen",
	'coll-suggest_ban_selected' => "Geselecteerde pagina's verwijderen",
	'coll-suggest_your_book' => 'Uw boek',
	'coll-suggest_show' => 'weergeven',
	'coll-suggest_ban_tooltip' => 'Deze pagina uit de lijst met suggesties verwijderen',
	'coll-suggest_article_ban' => 'De pagina <strong>$1</strong> is verwijderd uit de suggesties ($2).',
	'coll-suggest_article_add' => 'De pagina <strong>$1</strong> is toegevoegd aan uw boek ($2).',
	'coll-suggest_article_remove' => 'De pagina <strong>$1</strong> is verwijderd uit uw boek ($2).',
	'coll-suggest_undo_tooltip' => 'Deze handeling ongedaan maken',
	'coll-suggest_undo' => 'ongedaan maken',
	'coll-load_local_book' => 'Klik "OK" om door te gaan met uw boek %TITLE% dat %NUMPAGES% wikipagina\'s bevat. Klik op "Annuleren" om het te verwijderen en opnieuw te beginnen met een leeg boek.',
	'right-collectionsaveasuserpage' => 'Boeken opslaan als gebruikerspagina',
	'right-collectionsaveascommunitypage' => 'Boeken opslaan als gemeenschapspagina',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'coll-desc' => '[[Special:Book|Opprett bøker]]',
	'coll-book_creator_intro' => "<big>Med ''bokfunksjonen'' kan du laga ei bok som inneheld wikisider du sjølv vel ut. Du kan eksportera boka til ulike format (til dømes PDF eller ODF) eller tinga ein trykt kopi.</big>",
	'coll-manage_your_book' => 'Administrér boka di',
	'coll-book_creator_help' => 'Sjå [[{{MediaWiki:Coll-helppage}}|hjelpesida om bøker]] for meir informasjon.',
	'coll-start_book_creator' => 'Start bokfunksjonen',
	'coll-book_creator_continue' => 'Hald fram med å bruka funksjonen for oppretting av bok',
	'coll-book_creator_disable_text' => "''Bokskaparen'' vert slegen av og boka du held på med vil verta fjerna.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Bokskapartekst',
	'coll-collection' => 'Bok',
	'coll-collections' => 'Bøker',
	'coll-exclusion_category_title' => 'Ekskluder ved utskrift',
	'coll-print_template_prefix' => 'Skriv ut',
	'coll-print_template_pattern' => '$1/Skriv ut',
	'coll-unknown_subpage_title' => 'Ukjend undersida',
	'coll-unknown_subpage_text' => 'Denne undersida av [[Special:Book|Bok]] finst ikkje',
	'coll-couldnotaddarticle_title' => 'Kunne ikkje leggja til wikiside',
	'coll-couldnotaddarticle_msg' => 'Wikisida kunne ikkje leggjast til.',
	'coll-couldnotremovearticle_title' => 'Kunne ikkje fjerna wikisida',
	'coll-couldnotremovearticle_msg' => 'Wikisida kunne ikkje fjernast.',
	'coll-noscript_text' => '<h1>JavaScript er påkravd!</h1>
<strong>Nettlesaren din støttar ikkje JavaScript, eller JavaScript har blitt slege av. 
Denne sida vil ikkje fungera på rett måte med mindre JavaScript er slege på.</strong>',
	'coll-savedbook_template' => 'lagra_bok',
	'coll-your_book' => 'Boka di',
	'coll-download_title' => 'Last ned',
	'coll-download_text' => 'For å lasta ned boka di, vel eit format og trykk på knappen.',
	'coll-download_as_text' => 'For å lasta ned boka di i $1-format, trykk på knappen.',
	'coll-download' => 'Last ned',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Fjern',
	'coll-show' => 'Vis',
	'coll-move_to_top' => 'Flytt til toppen',
	'coll-move_up' => 'Flytt opp',
	'coll-move_down' => 'Flytt ned',
	'coll-move_to_bottom' => 'Flytt til botnen',
	'coll-title' => 'Tittel:',
	'coll-subtitle' => 'Undertittel:',
	'coll-contents' => 'Innhald',
	'coll-drag_and_drop' => 'Nytt dra og slepp for å endra på rekkjefølgja på wikisider og kapittel',
	'coll-create_chapter' => 'Opprett kapittel',
	'coll-sort_alphabetically' => 'Sorter alfabetisk',
	'coll-rename' => 'Gje nytt namn',
	'coll-new_chapter' => 'Skriv inn namn for det nye kapittelet',
	'coll-rename_chapter' => 'Skriv inn det nye namnet til kapittelet',
	'coll-no_such_category' => 'Ingen kategori ved dette namnet',
	'coll-notitle_title' => 'Fann ikkje ut tittelen på sida.',
	'coll-post_failed_title' => 'POST-førespurnaden mislukkast',
	'coll-post_failed_msg' => 'POST-førespurnaden til $1 mislukkast ($2).',
	'coll-mwserve_failed_title' => 'Renderingstenarfeil',
	'coll-mwserve_failed_msg' => 'Ein feil oppstod på renderingstenaren: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Feilrespons frå tenaren',
	'coll-empty_collection' => 'Tom bok',
	'coll-revision' => 'Versjon: $1',
	'coll-save_collection_title' => 'Lagra og del boka di',
	'coll-save_collection_text' => 'Vel ei plassering:',
	'coll-login_to_save' => 'Om du vil lagra bøkene for seinare bruk, [[Special:UserLogin|logg inn eller opprett ein konto]].',
	'coll-personal_collection_label' => 'Personleg bok:',
	'coll-community_collection_label' => 'Fellesskapsbok:',
	'coll-save_collection' => 'Lagra bok',
	'coll-save_category' => 'Alle lagra bøker vert lagde til i kategorien [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Sida finst.
Skriva over ho?',
	'coll-overwrite_text' => 'Ei sida med namnet [[:$1]] finst frå før. 
Vil du at ho skal verta erstatta med boka di?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nei',
	'coll-load_overwrite_text' => 'Du har allereie nokre sider i boka di.
Vil du erstatta den noverande boka di, leggja til det nye innhaldet eller avbryta lastinga av boka?',
	'coll-overwrite' => 'Erstatta',
	'coll-append' => 'Leggja til',
	'coll-cancel' => 'Avbryt',
	'coll-update' => 'Oppdater',
	'coll-limit_exceeded_title' => 'Boka er for stor',
	'coll-limit_exceeded_text' => 'Boka di er for stor.
Fleire sider kan ikkje verta lagt til.',
	'coll-rendering_title' => 'Opprettar',
	'coll-rendering_text' => '<p><strong>Vent medan dokumentet vert oppretta.</strong></p>

<p><strong>Framgang:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Denne sida bør automatisk verta lasta inn på nytt med eit par sekunds mellomrom. Om dette ikkje fungerer, trykk på oppdateringsknappen i nettlesaren din.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikisida: $1)',
	'coll-rendering_page' => '(sida: $1)',
	'coll-rendering_finished_title' => 'Oppretta',
	'coll-rendering_finished_text' => '<strong>Dokumentfila er vorten oppretta.</strong>
<strong>[$1 Last ned fila]</strong> til datamaskina di.

Merk:
* Ikkje nøgd med resultatet? Sjå [[{{MediaWiki:Coll-helppage}}|hjelpesida for bøker]] for moglegheiter til å betra det.',
	'coll-notfound_title' => 'Boka vart ikkje funnen',
	'coll-notfound_text' => 'Kunne ikkje finna boksida.',
	'coll-download_notfound_title' => 'Fann ikkje fil',
	'coll-download_notfound_text' => 'Fila du freistar å lasta ned finst ikkje: kan henda er ho vorten sletta og treng å verta regenerert.',
	'coll-download_failed_title' => 'Feil i løpet av nedlastinga',
	'coll-download_failed_text' => 'Det vart ein feil i samband med nedlasdting av fila: $1',
	'coll-is_cached' => '<ul><li>Ein mellomlagra versjon av dokumentet vart funnen, so ingen rendering var naudsynleg. <a href="$1">Tving ny rendering.</a></li></ul>',
	'coll-excluded-templates' => '* Malar i kategorien [[:Category:$1|$1]] har vortne utelatne.',
	'coll-blacklisted-templates' => '* Malar på svartelista ([[:$1]]) har vortne utelatne.',
	'coll-return_to_collection' => '<p>Attende til <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ting som ei trykt bok',
	'coll-book_text' => 'Få ei printa bok frå print-på-tinging-partnaren vår:',
	'coll-order_from_pp' => 'Førehandsvis med $1',
	'coll-about_pp' => 'Om $1',
	'coll-invalid_podpartner_title' => 'Ikkje gyldig POD-partnar',
	'coll-invalid_podpartner_msg' => 'Den oppgjevne POD-partneran er ugyldig.
Kontakt MediaWiki-administratoren din.',
	'coll-license' => 'Lisens',
	'coll-return_to' => 'Attende til [[:$1]]',
	'coll-more_info' => 'Syn meir informasjon',
	'coll-hide_info' => 'Skjul informasjon',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress tingingsinformasjon',
	'coll-suggest_title' => 'Framlegg til sider for boka di',
	'coll-suggest_intro_text' => 'Framlegg er baserte på dei noverande wikisidene i boka di.
Lista vert oppdatert kvar gong du trykkjer på «legg til»- eller «fjern»-knappen.',
	'coll-suggested_articles' => 'Framlegg',
	'coll-suggest_reset_bans' => 'nullstill',
	'coll-suggest_reset_bans_tooltip' => 'Syn tidlegare fjerna framlegg',
	'coll-suggest_add_selected' => 'Legg til valde sider',
	'coll-suggest_ban_selected' => 'Fjern valde sider',
	'coll-suggest_your_book' => 'Boka di',
	'coll-suggest_show' => 'syn',
	'coll-suggest_ban_tooltip' => 'Fjern denne sida frå lista over framlegg',
	'coll-suggest_article_ban' => 'Sida <strong>$1</strong> er vorten fjerna frå framlegga ($2).',
	'coll-suggest_article_add' => 'Sida <strong>$1</strong> vart lagd til i boka di ($2).',
	'coll-suggest_article_remove' => 'Sida <strong>$1</strong> vart fjerna frå boka di ($2).',
	'coll-suggest_undo_tooltip' => 'Gjer om denne handlinga',
	'coll-suggest_undo' => 'gjer om',
	'right-collectionsaveasuserpage' => 'Lagre bøker som brukarsider',
	'right-collectionsaveascommunitypage' => 'Lagre bøker som ei sams side',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Boivie
 * @author H92
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 * @author Simny
 */
$messages['no'] = array(
	'coll-desc' => '[[Special:Book|Lag bøker]]',
	'coll-book_creator_intro' => "<big>Med ''bokfunksjonen'' kan du lage ei bok av valgfrie wikisider. Du kan eksportere boka til ulike formater, for eksempel PDF eller ODF, eller bestille en trykt kopi.</big>",
	'coll-manage_your_book' => 'Administrer boken din',
	'coll-book_creator_help' => 'Se [[{{MediaWiki:Coll-helppage}}|hjelpesiden om bøker]] for mer informasjon.',
	'coll-start_book_creator' => 'Start bokfunksjonen',
	'coll-book_creator_continue' => 'Fortsett å bruke bokskaperen',
	'coll-book_creator_disable_text' => "''Bokskaperen'' vil bli slått av og boken du jobber med vil bli fjernet.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Bokskapertekst',
	'coll-collection' => 'Bok',
	'coll-collections' => 'Bøker',
	'coll-exclusion_category_title' => 'Ekskluder ved utskrift',
	'coll-print_template_prefix' => 'Skriv ut',
	'coll-print_template_pattern' => '$1/Skriv ut',
	'coll-unknown_subpage_title' => 'Ukjent underside',
	'coll-unknown_subpage_text' => "Denne undersiden av ''[[Special:Book|Bok]]'' finnes ikke",
	'coll-couldnotaddarticle_title' => 'Kunne ikke legge til wikiside',
	'coll-couldnotaddarticle_msg' => 'Wikisiden kunne ikke legges til.',
	'coll-couldnotremovearticle_title' => 'Kunne ikke fjerne wikisiden',
	'coll-couldnotremovearticle_msg' => 'Wikisiden kunne ikke fjernes.',
	'coll-noscript_text' => '<h1>JavaScript er påkrevd!</h1>
<strong>Nettleseren din støtter ikke JavaScript, eller JavaScript har blitt slått av. Denne siden vil ikke fungere riktig med mindre JavaScript er slått på.</strong>',
	'coll-savedbook_template' => 'lagret_bok',
	'coll-your_book' => 'Din bok',
	'coll-download_title' => 'Last ned',
	'coll-download_text' => 'For å laste ned boken din, velg et format og trykk på knappen.',
	'coll-download_as_text' => 'For å laste ned boken din i $1-format, trykk på knappen.',
	'coll-download' => 'Last ned',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Fjern',
	'coll-show' => 'Vis',
	'coll-move_to_top' => 'Flytt til toppen',
	'coll-move_up' => 'Flytt opp',
	'coll-move_down' => 'Flytt ned',
	'coll-move_to_bottom' => 'Flytt til bunnen',
	'coll-title' => 'Tittel:',
	'coll-subtitle' => 'Undertittel:',
	'coll-contents' => 'Innhold',
	'coll-drag_and_drop' => 'For å bruke dra og slipp for å endre på wikisider og kapitler',
	'coll-create_chapter' => 'Opprett kapittel',
	'coll-sort_alphabetically' => 'Sorter alfabetisk',
	'coll-rename' => 'Gi nytt navn',
	'coll-new_chapter' => 'Skriv inn navn for det nye kapittelet',
	'coll-rename_chapter' => 'Skriv inn kapittelets nye navn',
	'coll-no_such_category' => 'Ingen kategori ved dette navnet',
	'coll-notitle_title' => 'Fant ikke ut av sidens tittel.',
	'coll-post_failed_title' => 'POST-forespørsel mislyktes',
	'coll-post_failed_msg' => 'POST-forespørselen til $1 mislyktes ($2).',
	'coll-mwserve_failed_title' => 'Rendreringsserverfeil',
	'coll-mwserve_failed_msg' => 'En feil oppsto på rendreringsserveren: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Feilrespons fra tjeneren',
	'coll-empty_collection' => 'Tom bok',
	'coll-revision' => 'Revisjon: $1',
	'coll-save_collection_title' => 'Lagre og del boka',
	'coll-save_collection_text' => 'Velg en plassering:',
	'coll-login_to_save' => 'Om du vil lagre bøker for senere bruk, [[Special:UserLogin|logg inn eller opprett en konto]].',
	'coll-personal_collection_label' => 'Personlig bok:',
	'coll-community_collection_label' => 'Fellesskapsbok:',
	'coll-save_collection' => 'Lagre bok',
	'coll-save_category' => 'Alle lagrede bøker blir lagret i kategorien [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Siden finnes. Erstatte den?',
	'coll-overwrite_text' => 'En side ved navn [[:$1]] finnes fra før. Vil du erstatte den med samlingen din?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nei',
	'coll-load_overwrite_text' => 'Du har allerede noen sider i boka di.
Vil du erstatte den eksisterende boka, legge til det nye innholdet eller avbryte lasting av boka?',
	'coll-overwrite' => 'Erstatte',
	'coll-append' => 'Legge til',
	'coll-cancel' => 'Avbryt',
	'coll-update' => 'Oppdater',
	'coll-limit_exceeded_title' => 'Boka er for stor',
	'coll-limit_exceeded_text' => 'Boka er for stor.
Ingen flere sider kan legges til.',
	'coll-rendering_title' => 'Oppretter',
	'coll-rendering_text' => '<p><strong>Venligst vent mens dokumentet genereres.</strong></p>

<p><strong>Fremskritt:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Denne siden bør automatisk lastes på nytt med et par sekunders mellomrom. Hvis dette ikke fungerer, trykk på oppdateringsknappen i din nettleser.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikiside: $1)',
	'coll-rendering_page' => '(side: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informasjonstekst om sidegjengivelse',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informasjonstekst om samlingsgjengivelse',
	'coll-rendering_finished_title' => 'Opprettet',
	'coll-rendering_finished_text' => '<strong>Dokumentfilen har blitt laget.</strong>
<strong>[$1 Last ned filen]</strong> til din datamaskin.

Merk:
* Ikke fornøyd med resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjelpsiden om samlinger]] for muligheter til å forbedre den.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Gjengir sideinformasjonstekst',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Gjengir samlingsinformasjonstekst',
	'coll-notfound_title' => 'Bok ikke funnet',
	'coll-notfound_text' => 'Kunne ikke finne bokside.',
	'coll-download_notfound_title' => 'Fil ikke funnet',
	'coll-download_notfound_text' => 'Filen du forsøker å laste ned finnes ikke: Kanskje den har blitt slettet eller trenger å bli regenerert.',
	'coll-download_failed_title' => 'Feil under nedlasting',
	'coll-download_failed_text' => 'Det oppsto en feil under nedlasting av filen: $1',
	'coll-is_cached' => '<ul><li>En mellomlagret versjon av dokumentet ble funnet, så ingen rendrering var nødvendig. <a href="$1">Tving ny rendrering.</a></li></ul>',
	'coll-excluded-templates' => '* Maler i kategorien [[:Category:$1|$1]] har blitt utelatt.',
	'coll-blacklisted-templates' => '* Maler på svartelisten ([[:$1]]) har blitt utelatt.',
	'coll-return_to_collection' => '<p>Tilbake til <a href="$1">$2</a></p>',
	'coll-book_title' => 'Bestill som en trykket bok',
	'coll-book_text' => 'Få en printet bok fra vår print-på-bestilling-partner:',
	'coll-order_from_pp' => 'Forhåndsvis med $1',
	'coll-about_pp' => 'Om $1',
	'coll-invalid_podpartner_title' => 'Ugyldig POD-partner',
	'coll-invalid_podpartner_msg' => 'Den oppgitte POD-partneren er ugyldig.
Kontakt din MediaWiki-administrator.',
	'coll-license' => 'Lisens',
	'coll-return_to' => 'Tilbake til [[:$1]]',
	'coll-more_info' => 'Vis mer informasjon',
	'coll-hide_info' => 'Skjul informasjon',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Bestillingsinformasjon PediaPress',
	'coll-suggest_title' => 'Foreslåtte sider for boken din',
	'coll-suggest_intro_text' => 'Forslag er basert på nåværende wikisider i boken din.
Listen oppdateres når du klikker på legg til- eller fjern-knappene.',
	'coll-suggested_articles' => 'Forslag',
	'coll-suggest_reset_bans' => 'nullstill',
	'coll-suggest_reset_bans_tooltip' => 'Vis tidligere fjernede forslag',
	'coll-suggest_add_selected' => 'Legg til valgte sider',
	'coll-suggest_ban_selected' => 'Fjern valgte sider',
	'coll-suggest_your_book' => 'Din bok',
	'coll-suggest_show' => 'vis',
	'coll-suggest_ban_tooltip' => 'Fjern denne siden fra listen over forslag',
	'coll-suggest_article_ban' => 'Siden <strong>$1</strong> har blitt fjernet fra forslagene ($2).',
	'coll-suggest_article_add' => 'Siden <strong>$1</strong> har blitt lagt til boken din ($2).',
	'coll-suggest_article_remove' => 'Siden <strong>$1</strong> har blitt fjernet fra boken din ($2).',
	'coll-suggest_undo_tooltip' => 'Angre denne handligen',
	'coll-suggest_undo' => 'Angre',
	'coll-load_local_book' => 'Klikk OK for å fortsette med boken din %TITLE% som inneholder %NUMPAGES% wikisider. Klikk Avbryt for å slette den og starte med en tom bok.',
	'right-collectionsaveasuserpage' => 'Lagre bøker som brukersider',
	'right-collectionsaveascommunitypage' => 'Lagre bøker som samfunnsside',
);

/** Occitan (Occitan)
 * @author Cedric31
 * @author Jfblanc
 */
$messages['oc'] = array(
	'coll-desc' => '[[Special:Book|Crear de libres]]',
	'coll-book_creator_intro' => "<big>Amb lo ''mòde libre'' podètz crear un libre que se compausa de paginas del wiki qu'auretz causidas. Podètz exportar vòstre libre en de formats diferents (per exemple PDF o ODF) o comandar una còpia estampada.</big>",
	'coll-manage_your_book' => 'Gerir vòstre libre',
	'coll-book_creator_help' => "Vejatz [[{{MediaWiki:Coll-helppage}}|la pagina d'ajuda suls libres]] per mai d'entresenhas.",
	'coll-start_book_creator' => 'Aviar lo mòde libre',
	'coll-book_creator_continue' => 'Contunhar en utilizant lo creator de libres',
	'coll-book_creator_disable_text' => "Lo ''creator de libres'' serà desactivat e los libres suls quals trabalhatz seràn suprimits de la sesilha de vòstre navigador.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tèxte del mòde libre',
	'coll-collection' => 'Libre',
	'coll-collections' => 'Libres',
	'coll-exclusion_category_title' => "Exclaure al moment de l'estampatge",
	'coll-print_template_prefix' => 'Estampar',
	'coll-print_template_pattern' => '$1/Print',
	'coll-unknown_subpage_title' => 'Sospagina desconeguda',
	'coll-unknown_subpage_text' => 'Aquesta sospagina de [[Special:Book|libre]] existís pas',
	'coll-couldnotaddarticle_title' => 'Impossible d’apondre la pagina del wiki',
	'coll-couldnotaddarticle_msg' => 'La pagina del wiki pòt pas èsser aponduda.',
	'coll-couldnotremovearticle_title' => 'Impossible de suprimir la pagina del wiki',
	'coll-couldnotremovearticle_msg' => 'La pagina del wiki pòt pas èsser levada.',
	'coll-noscript_text' => "<h1>Javascript es necessari !</h1>
<strong>Vòstre navigador supòrta pas Javascript o se l'a desactivat.
Aquesta pagina s'aficharà pas corrèctament tant que javascript serà pas activat.</strong>",
	'coll-savedbook_template' => 'libre_salvat',
	'coll-your_book' => 'Vòstre libre',
	'coll-download_title' => 'Telecargar',
	'coll-download_text' => 'Per telecargar vòstre libre, causissètz un format e picatz sul boton.',
	'coll-download_as_text' => 'Per telecargar una version de vòstre libre al format $1 clicatz sul boton.',
	'coll-download' => 'Telecargar',
	'coll-format_label' => 'Format :',
	'coll-remove' => 'Levar',
	'coll-show' => 'Visionar',
	'coll-move_to_top' => 'Desplaçar tot en naut',
	'coll-move_up' => 'Pujar',
	'coll-move_down' => 'Davalar',
	'coll-move_to_bottom' => 'Desplaçar tot en bas',
	'coll-title' => 'Títol :',
	'coll-subtitle' => 'Sostítol :',
	'coll-contents' => 'Contengut',
	'coll-drag_and_drop' => 'Utilizar lissar-depausar per reordenar las paginas e los capítols wiki.',
	'coll-create_chapter' => 'Crear un capítol',
	'coll-sort_alphabetically' => 'Triar per òrdre alfabetic',
	'coll-rename' => 'Tornar nomenar',
	'coll-new_chapter' => 'Entrar lo títol del capitol novèl',
	'coll-rename_chapter' => 'Entrar lo títol novèl pel capitol',
	'coll-no_such_category' => 'Pas de tala categoria',
	'coll-notitle_title' => 'Lo títol de la pagina pòt pas èsser determinat.',
	'coll-post_failed_title' => 'Fracàs de la requèsta POST',
	'coll-post_failed_msg' => 'La requèsta POST cap a $1 a pas capitat ($2).',
	'coll-mwserve_failed_title' => 'Error del servidor del rendut',
	'coll-mwserve_failed_msg' => 'Una error es intervenguda sul servidor balhant lo rendut : <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Lo servidor a rencontrat una error',
	'coll-empty_collection' => 'Libre void',
	'coll-revision' => 'Version : $1',
	'coll-save_collection_title' => 'Salvar e partejar vòstre libre',
	'coll-save_collection_text' => 'Causissètz un emplaçament :',
	'coll-login_to_save' => 'Se volètz salvar vòstre libre, [[Special:UserLogin|vos cal connectar o vos crear un compte]].',
	'coll-personal_collection_label' => 'Libre personal :',
	'coll-community_collection_label' => 'Libre collectiu :',
	'coll-save_collection' => 'Salvar lo libre',
	'coll-save_category' => 'Totes los libres son salvats dins la categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => "La pagina existís. L'espotir ?",
	'coll-overwrite_text' => 'Una pagina amb lo títol [[:$1]] existís ja.
La volètz remplaçar per vòstra compilacion ?',
	'coll-yes' => 'Òc',
	'coll-no' => 'Non',
	'coll-load_overwrite_text' => "Ja avètz de paginas dins vòstre libre.
Volètz espotir vòstre libre actual, i apondre lo contengut o alara anullar lo cargament d'aqueste ?",
	'coll-overwrite' => 'Espotir',
	'coll-append' => 'Apondre',
	'coll-cancel' => 'Anullar',
	'coll-update' => 'Metre a jorn',
	'coll-limit_exceeded_title' => 'Libre tròp grand',
	'coll-limit_exceeded_text' => 'Vòstre libre es tròp grand.
Cap de pagina pòt pas èsser aponduda.',
	'coll-rendering_title' => 'Rendut',
	'coll-rendering_text' => '<p><strong>Pacientatz pendent que lo document es en cors de creacion.</strong></p>

<p><strong>Progression :</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Aquesta pagina se deuriá actualizar automaticament per intervals regulars de qualques segondas.
S\'èra pas lo cas, clicatz sul boton d’actualizacion de vòstre navigador.</p>',
	'coll-rendering_status' => '<strong>Estatut :</strong> $1',
	'coll-rendering_article' => '(pagina wiki : $1)',
	'coll-rendering_page' => '(pagina : $1)',
	'coll-rendering_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Tèxte d'informacion sul rendut de las paginas",
	'coll-rendering_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Tèxte d'informacion sul rendut de las colleccions",
	'coll-rendering_finished_title' => 'Rendut acabat',
	'coll-rendering_finished_text' => '<strong>Lo fichièr document es estat creat.</strong>
<strong>[$1 Telecargatz-lo]</strong> sus vòstre ordenador.

Nòtas :
* Pas satisfach(a) de la sortida ? Vejatz [[{{MediaWiki:Coll-helppage}}|la pagina d’ajuda que concernís las colleccions]] per las possibilitats de melhorament.',
	'coll-finished_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Rendut del tèxte d'informacion de la pagina",
	'coll-finished_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Rendut del tèxte d'informacion de la colleccion",
	'coll-notfound_title' => 'Libre pas trobat',
	'coll-notfound_text' => 'Pòt pas trobar lo libre.',
	'coll-download_notfound_title' => 'Fichièr introbable',
	'coll-download_notfound_text' => "Lo fichièr qu'ensajatz de telecargar existís pas : benlèu es estat suprimit e deu èsser generit tornamai.",
	'coll-download_failed_title' => 'Error al moment del telecargament',
	'coll-download_failed_text' => "Una error s'es producha pendent lo telecargament del fichièr : $1",
	'coll-is_cached' => '<ul><li>Una version en escondedor del document es estada trobada, cap de rendut èra pas necessari. <a href="$1">Forçar lo rendut un còp de mai.</a></li></ul>',
	'coll-excluded-templates' => '* De modèls dins la categoria [[:Category:$1|$1]] son estats excluts.',
	'coll-blacklisted-templates' => '* De modèls dins la tièra negra [[:$1]] son estats excluts.',
	'coll-return_to_collection' => '<p>Tornar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Comandar tal coma un libre estampat',
	'coll-book_text' => 'Obtenètz un libre estampat a partir de vòstre partenari d’estampatge a la demanda :',
	'coll-order_from_pp' => 'Apercebut amb $1',
	'coll-about_pp' => 'A prepaus de $1',
	'coll-invalid_podpartner_title' => 'Partenari POD incorrècte.',
	'coll-invalid_podpartner_msg' => 'Lo partenari POD indicat es incorrècte.
Contactatz vòstre administrator MediaWiki.',
	'coll-license' => 'Licéncia',
	'coll-return_to' => 'Tornar cap a [[:$1]]',
	'coll-more_info' => 'Afichar d’autras informacions',
	'coll-hide_info' => 'Amagar las informacions',
	'coll-order_info_article' => "{{MediaWiki:Coll-helppage}}/PediaPress comandar d'informacions",
	'coll-suggest_title' => 'Paginas suggeridas per vòstre libre',
	'coll-suggest_intro_text' => "Las suggestions son fondadas sus l'ensemble de las paginas wiki actualament dins vòstre libre.
La lista es mesa a jorn a cada còp que clicatz suls botons d'apondon o de supression.",
	'coll-suggested_articles' => 'Suggestions',
	'coll-suggest_reset_bans' => 'reïnicializar',
	'coll-suggest_reset_bans_tooltip' => 'Far veire las suggestions suprimidas precedentament',
	'coll-suggest_add_selected' => 'Apondre las paginas seleccionadas',
	'coll-suggest_ban_selected' => 'Suprimir las paginas seleccionadas',
	'coll-suggest_your_book' => 'Vòstre libre',
	'coll-suggest_show' => 'afichar',
	'coll-suggest_ban_tooltip' => 'Suprimir aquesta pagina de la lista de las suggestions',
	'coll-suggest_article_ban' => 'La pagina <strong>$1</strong> es estada levada de las suggestions ($2).',
	'coll-suggest_article_add' => 'La pagina <strong>$1</strong> es estada aponduda a vòstre libre ($2).',
	'coll-suggest_article_remove' => 'La pagina <strong>$1</strong> es estada levada de vòstre libre ($2).',
	'coll-suggest_undo_tooltip' => 'Desfar aquesta accion',
	'coll-suggest_undo' => 'desfar',
	'right-collectionsaveasuserpage' => "Salvar de libres sus de paginas d'utilizaire",
	'right-collectionsaveascommunitypage' => 'Salvar de libres sus de paginas comunautàrias',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Odisha1
 * @author Psubhashish
 */
$messages['or'] = array(
	'coll-print_template_prefix' => 'ପ୍ରିଣ୍ଟ',
	'coll-download_title' => 'ଡାଉନଲୋଡ',
	'coll-download' => 'ଡାଉନଲୋଡ',
	'coll-remove' => 'ବାହାର କରିବା',
	'coll-show' => 'ଦେଖାଇବେ',
	'coll-title' => 'ନାଆଁ:',
	'coll-contents' => 'ଭିତର ଚିଜ',
	'coll-return_to_collection' => '<p><a href="$1">$2</a>କୁ ଫେରିଯାଆନ୍ତୁ</p>',
);

/** Ossetic (Ирон)
 * @author Amikeco
 * @author Bouron
 */
$messages['os'] = array(
	'coll-download_title' => 'Æрбавгæн',
	'coll-download' => 'Æрбавгæн',
	'coll-title' => 'Сæргонд:',
	'coll-yes' => 'О',
	'coll-no' => 'Нæ',
	'coll-cancel' => 'Ныууадзын',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'coll-collection' => 'Buch',
	'coll-collections' => 'Bicher',
	'coll-print_template_prefix' => 'Drucke',
	'coll-print_template_pattern' => '$1/Druck',
	'coll-your_book' => 'Dei Buch',
	'coll-download_title' => 'Runnerlaade',
	'coll-download' => 'Runnerlaade',
	'coll-remove' => 'Lösche',
	'coll-show' => 'Zeige',
	'coll-title' => 'Titel:',
	'coll-rename' => 'Naame ennere',
	'coll-empty_collection' => 'Leeres Buch',
	'coll-revision' => 'Version: $1',
	'coll-yes' => 'Ya',
	'coll-no' => 'Nee',
	'coll-overwrite' => 'Iwwerschreiwe',
	'coll-limit_exceeded_title' => 'Buch zu gross',
	'coll-rendering_article' => '(Wikiblatt: $1)',
	'coll-rendering_page' => '(Blatt: $1)',
	'coll-about_pp' => 'Iwwer $1',
	'coll-return_to' => 'Zerick zu [[:$1]]',
	'coll-suggest_your_book' => 'Dei Buch',
	'coll-suggest_show' => 'zeige',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Jwitos
 * @author Leinad
 * @author Masti
 * @author McMonster
 * @author Qblik
 * @author Sp5uhe
 * @author Wpedzich
 */
$messages['pl'] = array(
	'coll-desc' => '[[Special:Book|Tworzenie książki]]',
	'coll-book_creator_intro' => "<big>W trybie ''kompletowania książki'' możesz utworzyć książkę z wybranych stron wiki. Książkę możesz wyeksportować w różnych formatach (np. PDF czy ODF) lub zamówić jej wydrukowaną kopię.</big>",
	'coll-manage_your_book' => 'Zarządzaj swoją książką',
	'coll-book_creator_help' => 'Więcej informacji odnajdziesz na stronie [[{{MediaWiki:Coll-helppage}}|pomocy dotyczącej książek]].',
	'coll-start_book_creator' => 'Włącz kreatora książki',
	'coll-book_creator_continue' => 'Chcę nadal korzystać z kreatora książki',
	'coll-book_creator_disable_text' => "''Kreator książki'' zostanie wyłączony, a książka nad którą pracowałeś zostanie usunięta.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst trybu książki',
	'coll-collection' => 'Książka',
	'coll-collections' => 'Książki',
	'coll-exclusion_category_title' => 'Omiń w druku',
	'coll-print_template_prefix' => 'Drukuj',
	'coll-print_template_pattern' => '$1/Wydruk',
	'coll-unknown_subpage_title' => 'Nieznana podstrona',
	'coll-unknown_subpage_text' => 'Podstrona należąca do [[Special:Book|książki]] nie istnieje',
	'coll-couldnotaddarticle_title' => 'Nie można było dodać strony wiki',
	'coll-couldnotaddarticle_msg' => 'Strona wiki nie może zostać dodana.',
	'coll-couldnotremovearticle_title' => 'Nie można usunąć strony wiki',
	'coll-couldnotremovearticle_msg' => 'Strona wiki nie może zostać usunięta.',
	'coll-noscript_text' => '<h1>Potrzebny JavaScript!</h1>
<strong>Twoja przeglądarka nie obsługuje JavaScriptu lub został on wyłączony.
Strona nie będzie działać poprawnie, dopóki JavaScript nie zostanie włączony.</strong>',
	'coll-savedbook_template' => 'zapisane_książki',
	'coll-your_book' => 'Twoja książka',
	'coll-download_title' => 'Pobierz',
	'coll-download_text' => 'Aby pobrać wersję offline wybierz format i naciśnij przycisk.',
	'coll-download_as_text' => 'Aby ściągnąć książkę w formacie $1 kliknij przycisk.',
	'coll-download' => 'Pobierz',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Usuń',
	'coll-show' => 'Pokaż',
	'coll-move_to_top' => 'Przenieś na górę',
	'coll-move_up' => 'Przenieś w górę',
	'coll-move_down' => 'Przenieś w dół',
	'coll-move_to_bottom' => 'Przenieś na dół',
	'coll-title' => 'Tytuł:',
	'coll-subtitle' => 'Podtytuł:',
	'coll-contents' => 'Spis treści',
	'coll-drag_and_drop' => 'Przeciągnij i upuść, by zmienić kolejność stron i rozdziałów',
	'coll-create_chapter' => 'Utwórz rozdział',
	'coll-sort_alphabetically' => 'Sortuj alfabetycznie',
	'coll-rename' => 'Zmień nazwę',
	'coll-new_chapter' => 'Wprowadź nazwę dla nowego rozdziału',
	'coll-rename_chapter' => 'Wprowadź nową nazwę dla rozdziału',
	'coll-no_such_category' => 'Brak takiej kategorii',
	'coll-notitle_title' => 'Tytuł strony nie może być określony.',
	'coll-post_failed_title' => 'Nieudane żądanie POST',
	'coll-post_failed_msg' => 'Żądanie POST do $1 nie powiodło się ($2).',
	'coll-mwserve_failed_title' => 'Błąd serwera w renderowaniu',
	'coll-mwserve_failed_msg' => 'W serwerze renderującym wystąpił błąd <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Błąd odpowiedzi serwera',
	'coll-empty_collection' => 'Książka jest pusta',
	'coll-revision' => 'Wersja $1',
	'coll-save_collection_title' => 'Zapisz i udostępnij książkę',
	'coll-save_collection_text' => 'Wybierz lokalizację:',
	'coll-login_to_save' => 'Jeśli chcesz zapisać książkę, [[Special:UserLogin|zaloguj się lub utwórz konto]].',
	'coll-personal_collection_label' => 'Książka osobista:',
	'coll-community_collection_label' => 'Ksiązka społeczności:',
	'coll-save_collection' => 'Zapisz książkę',
	'coll-save_category' => 'Wszystkie zapisywane książki dodawane są do kategorii [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Strona już istnieje. Nadpisać?',
	'coll-overwrite_text' => 'Strona pod tytułem [[:$1]] już istnieje.
Chcesz ją zastąpić swoją kolekcją?',
	'coll-yes' => 'Tak',
	'coll-no' => 'Nie',
	'coll-load_overwrite_text' => 'Masz już strony w swojej książce.
Czy chcesz nadpisać swoją obecną książkę, dodać do niej nowe strony czy anulować ładowanie tej książki?',
	'coll-overwrite' => 'Nadpisz',
	'coll-append' => 'Dopisz',
	'coll-cancel' => 'Anuluj',
	'coll-update' => 'Uaktualnij',
	'coll-limit_exceeded_title' => 'Zbyt duża książka',
	'coll-limit_exceeded_text' => 'Twoja książka jest zbyt duża.
Nie można dodać więcej stron.',
	'coll-rendering_title' => 'Renderowanie',
	'coll-rendering_text' => '<p><strong>Proszę czekać, trwa generowanie dokumentu.</strong></p>

<p><strong>Postęp:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Strona powinna automatycznie odświeżać się co kilka sekund.
Jeśli tak nie jest, proszę wymusić odświeżenie w przeglądarce.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wiki strona: $1)',
	'coll-rendering_page' => '(strona: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informacje na temat renderowania strony',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informacje na temat renderowania kolekcji',
	'coll-rendering_finished_title' => 'Renderowanie zakończone',
	'coll-rendering_finished_text' => '<strong>Dokument został wygenerowany.</strong>
<strong>[$1 Pobierz plik]</strong> na swój komputer.

Uwaga:
* Nie jesteś zadowolony z wygenerowanego dokumentu? Zajrzyj na [[{{MediaWiki:Coll-helppage}}|stronę pomocy dotyczącą kolekcji]], aby dowiedzieć się jakie są możliwości poprawy dokumentu.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst informacyjny przetwarzania strony',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Tekst informacyjny przetwarzania kolekcji',
	'coll-notfound_title' => 'Książki nie odnaleziono',
	'coll-notfound_text' => 'Nie udało się odnaleźć strony z ksiązki.',
	'coll-download_notfound_title' => 'Nie odnaleziono pliku',
	'coll-download_notfound_text' => 'Plik, który próbujesz pobrać, nie istnieje. Prawdopodobnie został usunięty i wymaga ponownego wygenerowania.',
	'coll-download_failed_title' => 'Błąd podczas pobierania',
	'coll-download_failed_text' => 'Wystąpił błąd podczas pobierania pliku $1',
	'coll-is_cached' => '<ul><li>Dokument odnaleziono w pamięci podręcznej, więc nie ma potrzeby renderowania.
<a href="$1">Wymuś ponowne wygenerowanie.</a></li></ul>',
	'coll-excluded-templates' => '* Szablony w kategorii [[:Category:$1|$1]] zostały pominięte.',
	'coll-blacklisted-templates' => '* Szablony z czarnej listy [[:$1]] zostały pominięte.',
	'coll-return_to_collection' => '<p>Powróć do <a href="$1">$2</a></p>',
	'coll-book_title' => 'Zamów w formie wydrukowanej książki',
	'coll-book_text' => 'Zamów wydrukowaną książkę od jednego z naszych partnerów realizujących usługę wydruku na żądanie:',
	'coll-order_from_pp' => 'Zamów książkę z $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Niesprawny usługodawca wydruku na żądanie',
	'coll-invalid_podpartner_msg' => 'Wybrany partner wydruku na żądanie nie funkcjonuje.
Skontaktuj się z administratorem tego serwisu MediaWiki.',
	'coll-license' => 'Licencja',
	'coll-return_to' => 'Powrót do [[:$1]]',
	'coll-more_info' => 'Pokaż więcej informacji',
	'coll-hide_info' => 'Ukryj informacje',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Zamawianie PediaPress',
	'coll-suggest_title' => 'Strony proponowane aby je dodać do książki',
	'coll-suggest_intro_text' => 'Propozycje generowane są na podstawie analizy aktualnego zestawu stron wiki wchodzących w skład książki.
Lista jest aktualizowana, gdy klikniesz na przyciski dodaj lub usuń.',
	'coll-suggested_articles' => 'Propozycje',
	'coll-suggest_reset_bans' => 'reset',
	'coll-suggest_reset_bans_tooltip' => 'Pokaż wcześniej usunięte sugestie',
	'coll-suggest_add_selected' => 'Dodaj wybrane strony',
	'coll-suggest_ban_selected' => 'Usuń wybrane strony',
	'coll-suggest_your_book' => 'Moja książka',
	'coll-suggest_show' => 'pokaż',
	'coll-suggest_ban_tooltip' => 'Usuń tę stronę z listy proponowanych',
	'coll-suggest_article_ban' => 'Strona <strong>$1</strong> została usunięta z listy sugerowanych ($2).',
	'coll-suggest_article_add' => 'Strona <strong>$1</strong> została dodana do Twojej książki ($2).',
	'coll-suggest_article_remove' => 'Strona <strong>$1</strong> została usunięta z Twojej książki ($2).',
	'coll-suggest_undo_tooltip' => 'Cofnij tę operację',
	'coll-suggest_undo' => 'cofnij',
	'coll-load_local_book' => 'Kliknij „OK” aby kontynuować tworzenie książki %TITLE% zawierającej %NUMPAGES% stron wiki. Kliknij „Anuluj” aby usunąć istniejącą i rozpocząć tworzenie nowej książki.',
	'right-collectionsaveasuserpage' => 'Zapisywanie książek jako strony użytkownika',
	'right-collectionsaveascommunitypage' => 'Zapisywanie książek jako wspólnej strony',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'coll-desc' => '[[Special:Book|Crea lìber]]',
	'coll-book_creator_intro' => "<big>Con ël ''creator ëd lìber'' a peul creé un lìber contenent dle pàgine dla wiki ch'as sern chiel. A peul esporté ël lìber an formà diferent (për esempi PDF o ODF) o ordiné na còpia stampà.</big>",
	'coll-manage_your_book' => 'Gestì sò lìber',
	'coll-book_creator_help' => "Varda [[{{MediaWiki:Coll-helppage}}|la pàgina d'agiut an sij lìber]] për savèjne ëd pi.",
	'coll-start_book_creator' => 'Fà parte ël creator ëd lìber',
	'coll-book_creator_continue' => 'Continua a dovré ël creator ëd lìber',
	'coll-book_creator_disable_text' => "Ël ''creator ëd lìber'' a sarà disabilità e ël lìber al qual a l'é ancamin ch'a travaja a sarà gavà.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Test dël creator ëd lìber',
	'coll-collection' => 'Lìber',
	'coll-collections' => 'Lìber',
	'coll-exclusion_category_title' => 'Lassé fòra da la stampa',
	'coll-print_template_prefix' => 'Stampa',
	'coll-print_template_pattern' => '$1/Stampa',
	'coll-unknown_subpage_title' => 'Sot-pàgina pa conossùa',
	'coll-unknown_subpage_text' => 'Costa sot-pàgina ëd [[Special:Book|Lìber]] a esist pa',
	'coll-couldnotaddarticle_title' => 'As peul pa gionté la pàgina dla wiki',
	'coll-couldnotaddarticle_msg' => 'La pàgina wiki as peul pa giontesse',
	'coll-couldnotremovearticle_title' => 'As peul pa gavessa la pàgina dla wiki',
	'coll-couldnotremovearticle_msg' => 'La pàgina wiki as peul pa gavesse.',
	'coll-noscript_text' => "<h1>A-i é damanca ëd javaScript!</h1>
<strong>Sò navigador a manten pa JavaScript o JavaScript a l'é stàit disabilità.
Sta pàgina-sì a travajërà pa bin, gavà che che JavaScript a sia abilità.</strong>.",
	'coll-savedbook_template' => 'lìber_salvà',
	'coll-your_book' => 'Tò lìber',
	'coll-download_title' => 'Dëscaria',
	'coll-download_text' => 'Për dëscarié tò lìber sern un formà e sgnaca ël boton.',
	'coll-download_as_text' => 'Për dëscarié tò lìber an formà $1 sgnaca ël boton.',
	'coll-download' => 'Dëscaria',
	'coll-format_label' => 'Formà:',
	'coll-remove' => 'Gava',
	'coll-show' => 'Smon',
	'coll-move_to_top' => 'Va an sima',
	'coll-move_up' => 'Va an su',
	'coll-move_down' => 'Va giù',
	'coll-move_to_bottom' => 'Va al fond',
	'coll-title' => 'Tìtol:',
	'coll-subtitle' => 'Sot-tìtol:',
	'coll-contents' => 'Contnù',
	'coll-drag_and_drop' => 'Dovré ël tiré & lassé për riordiné le pàgine wiki e ij capìtoj',
	'coll-create_chapter' => 'Crea capìtol',
	'coll-sort_alphabetically' => 'Órdina alfabeticament',
	'coll-rename' => 'Arbatia',
	'coll-new_chapter' => 'Anserì ël tìtol dël neuv capìtol',
	'coll-rename_chapter' => "Anserì ël neuv tìtol d'ës capìtol",
	'coll-no_such_category' => 'Gnun-a categorìa parèj',
	'coll-notitle_title' => 'Ël tìtol ëd la pàgina a peul pa esse determinà.',
	'coll-post_failed_title' => 'Arcesta POST falìa',
	'coll-post_failed_msg' => "L'arcesta POST a $1 a l'é falìa ($2).",
	'coll-mwserve_failed_title' => 'Eror dël servent ëd conversion',
	'coll-mwserve_failed_msg' => "A l'é capitaje n'eron an sël servent ëd conversion: <nowiki>$1</nowiki>",
	'coll-error_reponse' => "Arspòsta d'eror dal sërvent",
	'coll-empty_collection' => 'Lìber veuid',
	'coll-revision' => 'Revision: $1',
	'coll-save_collection_title' => 'Salvé e partagé sò lìber',
	'coll-save_collection_text' => 'Sern na locassion ëd memorisassion për tò lìber:',
	'coll-login_to_save' => "S'a veul salvé dij lìber da dovré apress, për piasì [[Special:UserLogin|ch'a intra ant ël sistema o ch'a crea un cont]].",
	'coll-personal_collection_label' => 'Lìber përsonal:',
	'coll-community_collection_label' => 'Lìber ëd comunità:',
	'coll-save_collection' => 'Salva lìber',
	'coll-save_category' => 'Tùit ij lìber salvà a son giontà a la categorìa [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La pàgina a esist.
Coatela?',
	'coll-overwrite_text' => "Na pàgina con ël nòm [[:$1]] a esist già.
It veule ch'a sia rimpiassà con tò lìber?",
	'coll-yes' => 'É!',
	'coll-no' => 'Nò',
	'coll-load_overwrite_text' => "A l'ha già dle pàgine an sò lìber.
Veul-lo coaté tò lìber corent, gionté contnù neuv, o scancelé ël cariament d'ës lìber?",
	'coll-overwrite' => 'Coata',
	'coll-append' => 'Gionta',
	'coll-cancel' => 'Scancelé',
	'coll-update' => 'Modìfica',
	'coll-limit_exceeded_title' => 'Lìber tròp gròss',
	'coll-limit_exceeded_text' => "Tò lìber a l'é tròp gròss.
Pa pi gnun-e pàgine a peulo esse giontà.",
	'coll-rendering_title' => 'Rapresentassion',
	'coll-rendering_text' => '<p><strong>Për piasì, ch\'a speta antramentre ël document a l\'é generà.</strong></p>

<p><strong>Progress:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Sta pàgina-sì a dovrìa agiornesse automaticament minca pòchi second.
Se sòn a marcia pa, për piasì ch\'a sgnaca ël boton ëd rinfresch ëd sò navigador.</p>',
	'coll-rendering_status' => '<strong>Stat:</strong> $1',
	'coll-rendering_article' => '(pàgina wiki: $1)',
	'coll-rendering_page' => '(pàgina: $1)',
	'coll-rendering_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Test d'anformassion an sl'arpresentassion ëd le pàgine",
	'coll-rendering_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Rapresentassion dël test d'anformassion dla colession",
	'coll-rendering_finished_title' => 'Conversion finìa',
	'coll-rendering_finished_text' => "<strong>L'archivi document a l'é stàit generà.</strong>
<strong>[$1 Dëscariél'archivi]</strong> su sò ordinator.

Nòte:
* Pa sodisfàit ëd l'arzultà? Ch'a varda [[{{MediaWiki:Coll-helppage}}|la pàgina d'agiut an sij lìber]] për dle possibilità d'ameliorelo.",
	'coll-finished_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/Visualisassion dël test d'anformassion ëd la pàgina",
	'coll-finished_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/Visualisassion dël test d'anformassion dla colession",
	'coll-notfound_title' => 'Lìber pa trovà',
	'coll-notfound_text' => "La pàgina dël lìber a l'é pa podusse trové.",
	'coll-download_notfound_title' => 'Archivi pa trovà',
	'coll-download_notfound_text' => "L'archivi ch'a preuva a dëscarié a esist pa.
A peul esse ch'a sia stàit scancelà e ch'a venta torna generelo.",
	'coll-download_failed_title' => 'Eror durant ël dëscariament.',
	'coll-download_failed_text' => "A l'é staje n'eror durant ël dëscariament ëd l'archivi: $1",
	'coll-is_cached' => '<ul><li>A l\'é trovasse na version memorisà dël document, parèj a- é pa damanca ëd conversion.
<a href="$1">Forsé la conversion.</a></li></ul>',
	'coll-excluded-templates' => '* Jë stamp an categorìa [[:Category:$1|$1]] a son ëstàit escludù.',
	'coll-blacklisted-templates' => '* Jë stamp ant la lista nèira [[:$1]] a son ëstàit escludù.',
	'coll-return_to_collection' => '<p>Torné andaré a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Órdina com un lìber stampà',
	'coll-book_text' => 'Pijé un lìber stampà da nòstr sòcio dë stampa su arcesta.',
	'coll-order_from_pp' => 'Preuva con $1',
	'coll-about_pp' => 'A propòsit ëd $1',
	'coll-invalid_podpartner_title' => 'Sòcio a la stampa su arcesta nen vàlid',
	'coll-invalid_podpartner_msg' => "Ël sòcio dë stampa su arcesta dàit a l'é nen bon.
Për piasì, ch'a contata sò aministrator MediaWiki.",
	'coll-license' => 'Licensa',
	'coll-return_to' => 'Torné andaré a [[:$1]]',
	'coll-more_info' => "Smon-e pi d'anformassion",
	'coll-hide_info' => 'Stërma anformassion',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Anformassion órdin PediaPress',
	'coll-suggest_title' => 'Pàgine sugerìe për tò lìber',
	'coll-suggest_intro_text' => "Ij sugeriment a son basà an sl'ansema corent dle pàgine wiki an sò lìber.
La lista a l'é modificà minca vira ch'a sgnaca an sij boton për gionté o gavé.",
	'coll-suggested_articles' => 'Sugeriment',
	'coll-suggest_reset_bans' => 'spian-a',
	'coll-suggest_reset_bans_tooltip' => 'Smon-e ij sugeriment gavà prima',
	'coll-suggest_add_selected' => 'Gionté le pàgine selessionà',
	'coll-suggest_ban_selected' => 'Gavé le pàgine selessionà',
	'coll-suggest_your_book' => 'Tò lìber',
	'coll-suggest_show' => 'smon-e',
	'coll-suggest_ban_tooltip' => 'Gava sta pàgina-sì da la lista ëd sugeriment',
	'coll-suggest_article_ban' => "La pàgina <strong>$1</strong> a l'é stàita gavà dai sugeriment ($2).",
	'coll-suggest_article_add' => "La pàgina <strong>$1</strong> a l'é stàita giontà a sò lìber ($2).",
	'coll-suggest_article_remove' => "La pàgina <strong>$1</strong> a l'é stàita gavà da sò lìber ($2).",
	'coll-suggest_undo_tooltip' => "Anula st'assion-sì",
	'coll-suggest_undo' => "buta 'me ch'a l'era",
	'coll-load_local_book' => "Sgnaca Va bin për continué con tò lìber %TITLE% ch'a conten %NUMPAGES% pàgine wiki. Sgnaca Scancelé për scancelelo e parte con un lìber veuid.",
	'right-collectionsaveasuserpage' => "Salvé dij lìber ansima a dle pàgine d'utent",
	'right-collectionsaveascommunitypage' => 'Salvé dij lìber com dle pàgine dla comunità',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'coll-desc' => '[[Special:Book|کتابونه جوړول]]',
	'coll-start_book_creator' => 'کتاب جوړونکی پرانيستل',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/د کتاب جوړونکي متن',
	'coll-collection' => 'کتاب',
	'coll-collections' => 'کتابونه',
	'coll-print_template_prefix' => 'چاپول',
	'coll-print_template_pattern' => '$1/چاپول',
	'coll-your_book' => 'ستاسې کتاب',
	'coll-download_title' => 'ښکته کول',
	'coll-download' => 'ښکته کول',
	'coll-format_label' => 'بڼه:',
	'coll-remove' => 'غورځول',
	'coll-show' => 'ښکاره کول',
	'coll-title' => 'سرليک:',
	'coll-subtitle' => 'لمنليک:',
	'coll-contents' => 'منځپانګه',
	'coll-create_chapter' => 'څپرکی جوړول',
	'coll-sort_alphabetically' => 'د ابېڅو له مخې اوډل',
	'coll-rename' => 'نوم بدلول',
	'coll-new_chapter' => 'د نوي څپرکي لپاره نوم وليکۍ',
	'coll-rename_chapter' => 'د څپرکي لپاره يو نوی نوم وليکۍ',
	'coll-no_such_category' => 'داسې هېڅ کومه وېشنيزه نشته',
	'coll-empty_collection' => 'تش کتاب',
	'coll-save_collection_title' => 'خپل کتاب شريک او خوندي کول',
	'coll-personal_collection_label' => 'شخصي کتاب:',
	'coll-save_collection' => 'کتاب خوندي کول',
	'coll-yes' => 'هو',
	'coll-no' => 'نه',
	'coll-cancel' => 'ناګارل',
	'coll-update' => 'اوسمهالول',
	'coll-limit_exceeded_title' => 'کتاب ډېر لوی دی',
	'coll-rendering_article' => '(د ويکي مخ: $1)',
	'coll-rendering_page' => '(مخ: $1)',
	'coll-notfound_title' => 'کتاب و نه موندل شو',
	'coll-download_notfound_title' => 'دوتنه و نه موندل شوه',
	'coll-about_pp' => 'د $1 په اړه',
	'coll-license' => 'منښتليک',
	'coll-more_info' => 'نور مالومات ښکاره کول',
	'coll-hide_info' => 'مالومات پټول',
	'coll-suggest_title' => 'ستاسې د کتاب لپاره وړانديز شوي مخونه',
	'coll-suggested_articles' => 'وړانديزونه',
	'coll-suggest_add_selected' => 'ټاکلي مخونه ورګډول',
	'coll-suggest_ban_selected' => 'ټاکلي مخونه لرې کول',
	'coll-suggest_your_book' => 'ستاسې کتاب',
	'coll-suggest_show' => 'ښکاره کول',
	'coll-suggest_undo' => 'ناکړل',
);

/** Portuguese (Português)
 * @author 555
 * @author Giro720
 * @author Hamilton Abreu
 * @author Helder.wiki
 * @author Heldergeovane
 * @author Lijealso
 * @author Luckas Blade
 * @author MF-Warburg
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'coll-desc' => '[[Special:Book|Criar livros]]',
	'coll-book_creator_intro' => "<big>Com o ''criador de livros'' pode criar um livro que contém as páginas wiki que escolher. Pode exportar o livro em formatos diferentes (por exemplo, PDF ou ODF) ou solicitar uma cópia impressa.</big>",
	'coll-manage_your_book' => 'Gerir o livro',
	'coll-book_creator_help' => 'Consulte [[{{MediaWiki:Coll-helppage}}|a página de ajuda sobre livros]] para mais detalhes.',
	'coll-start_book_creator' => 'Iniciar o criador de livros',
	'coll-book_creator_continue' => 'Continue a usar o criador de livros',
	'coll-book_creator_disable_text' => "O ''criador de livros'' será desactivado e o livro no qual está a trabalhar será removido.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Texto do criador de livros',
	'coll-collection' => 'Livro',
	'coll-collections' => 'Livros',
	'coll-exclusion_category_title' => 'Excluir ao imprimir',
	'coll-print_template_prefix' => 'Imprime',
	'coll-print_template_pattern' => '$1/Imprimir',
	'coll-unknown_subpage_title' => 'Subpágina desconhecida',
	'coll-unknown_subpage_text' => 'Não existe esta sub-página do [[Special:Book|Livro]]',
	'coll-couldnotaddarticle_title' => 'Não foi possível adicionar a página wiki',
	'coll-couldnotaddarticle_msg' => 'Não foi possível adicionar a página wiki.',
	'coll-couldnotremovearticle_title' => 'Não foi possível remover a página wiki',
	'coll-couldnotremovearticle_msg' => 'Não foi possível remover a página wiki.',
	'coll-noscript_text' => '<h1>É necessário o JavaScript!</h1>
<strong>Ou o seu browser não suporta JavaScript ou o JavaScript foi desactivado.
Esta página não funcionará correctamente sem o JavaScript.</strong>',
	'coll-savedbook_template' => 'livro_gravado',
	'coll-your_book' => 'O seu livro',
	'coll-download_title' => 'Descarregar',
	'coll-download_text' => 'Para descarregar o seu livro, escolha um formato e clique o botão.',
	'coll-download_as_text' => 'Para descarregar o seu livro no formato $1, clique o botão.',
	'coll-download' => 'Descarregar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Remover',
	'coll-show' => 'Mostrar',
	'coll-move_to_top' => 'Mover para o topo',
	'coll-move_up' => 'Mover acima',
	'coll-move_down' => 'Mover abaixo',
	'coll-move_to_bottom' => 'Mover para o fundo',
	'coll-title' => 'Título:',
	'coll-subtitle' => 'Subtítulo:',
	'coll-contents' => 'Conteúdo',
	'coll-drag_and_drop' => 'Para reordenar as páginas wiki e os capítulos, arraste-os com o rato e largue-os',
	'coll-create_chapter' => 'Criar capítulo',
	'coll-sort_alphabetically' => 'Ordenar alfabeticamente',
	'coll-rename' => 'Alterar o nome',
	'coll-new_chapter' => 'Introduza o nome do novo capítulo',
	'coll-rename_chapter' => 'Introduza um nome novo para o capítulo',
	'coll-no_such_category' => 'Essa categoria não existe',
	'coll-notitle_title' => 'Não foi possível determinar o título da página.',
	'coll-post_failed_title' => 'Pedido POST falhou',
	'coll-post_failed_msg' => 'O pedido POST feito a $1 falhou ($2).',
	'coll-mwserve_failed_title' => 'Erro no servidor de composição do ficheiro',
	'coll-mwserve_failed_msg' => 'Ocorreu um erro no servidor de composição do ficheiro: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Resposta de erro do servidor',
	'coll-empty_collection' => 'Livro vazio',
	'coll-revision' => 'Revisão: $1',
	'coll-save_collection_title' => 'Grave e partilhe o seu livro',
	'coll-save_collection_text' => 'Escolha a localização do seu livro:',
	'coll-login_to_save' => 'Se pretende gravar livros para usar mais tarde, por favor, [[Special:UserLogin|autentique-se ou crie uma conta]].',
	'coll-personal_collection_label' => 'Livro pessoal:',
	'coll-community_collection_label' => 'Livro comunitário:',
	'coll-save_collection' => 'Gravar livro',
	'coll-save_category' => 'Todos os livros gravados são adicionados à categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'A página existe. Escrever por cima?',
	'coll-overwrite_text' => 'Uma página com o nome [[:$1]] já existe.
Deseja substituí-la com o seu livro?',
	'coll-yes' => 'Sim',
	'coll-no' => 'Não',
	'coll-load_overwrite_text' => 'O seu livro já possui algumas páginas.
Pretende substituir o livro actual, adicionar-lhe o novo conteúdo ou cancelar o carregamento deste novo livro?',
	'coll-overwrite' => 'Substituir',
	'coll-append' => 'Adicionar',
	'coll-cancel' => 'Cancelar',
	'coll-update' => 'Actualizar',
	'coll-limit_exceeded_title' => 'Livro demasiado grande',
	'coll-limit_exceeded_text' => 'O seu livro é demasiado grande.
Não podem ser adicionadas mais páginas.',
	'coll-rendering_title' => 'A compor ficheiro',
	'coll-rendering_text' => '<p><strong>Por favor, aguarde enquanto o documento é gerado.</strong></p>

<p><strong>Progresso:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Esta página deverá actualizar-se automaticamente com frequência.
Se não o fizer, por favor use o botão "actualizar" ("refresh") do seu browser.</p>',
	'coll-rendering_status' => '<strong>Estado:</strong> $1',
	'coll-rendering_article' => '(página wiki: $1)',
	'coll-rendering_page' => '(página: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre composição de páginas',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre composição de colecções',
	'coll-rendering_finished_title' => 'Composição do ficheiro concluída',
	'coll-rendering_finished_text' => '<strong>O ficheiro foi gerado.</strong>
<strong>[$1 Transfira o ficheiro]</strong> para o seu computador.

Notas:
* Não está satisfeito com o resultado? Consulte [[{{MediaWiki:Coll-helppage}}|a página de ajuda sobre livros]] para conhecer as possibilidades de aprimoramento.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre composição de páginas',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre composição de colecções',
	'coll-notfound_title' => 'Livro não foi encontrado',
	'coll-notfound_text' => 'Não foi possível encontrar a página do livro.',
	'coll-download_notfound_title' => 'Ficheiro não encontrado',
	'coll-download_notfound_text' => 'O ficheiro que está a tentar descarregar não existe:
Talvez tenha sido apagado e precise de ser regenerado.',
	'coll-download_failed_title' => 'Erro durante o descarregamento',
	'coll-download_failed_text' => 'Ocorreu um erro ao descarregar o ficheiro: $1',
	'coll-is_cached' => '<ul><li>Foi encontrada uma versão deste documento em cache, dispensando a sua composição.
<a href="$1">Forçar nova composição.</a></li></ul>',
	'coll-excluded-templates' => '* As predefinições na categoria [[:Category:$1|$1]] foram excluídas.',
	'coll-blacklisted-templates' => '* As predefinições na lista negra [[:$1]] foram excluídas.',
	'coll-return_to_collection' => '<p>Regressar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Encomendar como livro impresso',
	'coll-book_text' => 'Adquira um livro impresso pelo nosso parceiro de impressão por encomenda.',
	'coll-order_from_pp' => 'Antever o livro por $1',
	'coll-about_pp' => 'Sobre $1',
	'coll-invalid_podpartner_title' => 'Parceiro de impressão por encomenda inválido',
	'coll-invalid_podpartner_msg' => 'O parceiro de impressão por encomenda é inválido.
Por favor, contacte o seu administrador MediaWiki.',
	'coll-license' => 'Licença',
	'coll-return_to' => 'Voltar para [[:$1]]',
	'coll-more_info' => 'Mostrar mais informação',
	'coll-hide_info' => 'Ocultar informação',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informação sobre encomendas PediaPress',
	'coll-suggest_title' => 'Páginas sugeridas para o seu livro',
	'coll-suggest_intro_text' => 'As sugestões são baseadas no conjunto actual de páginas wiki no seu livro.
A lista é actualizada sempre que clica os botões de adicionar ou remover.',
	'coll-suggested_articles' => 'Sugestões',
	'coll-suggest_reset_bans' => 'restabelecer',
	'coll-suggest_reset_bans_tooltip' => 'Mostrar sugestões removidas anteriomente',
	'coll-suggest_add_selected' => 'Adicionar páginas seleccionadas',
	'coll-suggest_ban_selected' => 'Remover páginas seleccionadas',
	'coll-suggest_your_book' => 'O seu livro',
	'coll-suggest_show' => 'mostrar',
	'coll-suggest_ban_tooltip' => 'Remover esta página da lista de sugestões',
	'coll-suggest_article_ban' => 'A página <strong>$1</strong> foi removida das sugestões ($2).',
	'coll-suggest_article_add' => 'A página <strong>$1</strong> foi adicionada ao seu livro ($2).',
	'coll-suggest_article_remove' => 'A página <strong>$1</strong> foi removida do seu livro ($2).',
	'coll-suggest_undo_tooltip' => 'Desfazer esta acção',
	'coll-suggest_undo' => 'desfazer',
	'coll-load_local_book' => 'Clique OK para continuar com o seu livro %TITLE% que contém %NUMPAGES% páginas wiki. Clique Cancelar para apagá-lo e começar com um livro vazio.',
	'right-collectionsaveasuserpage' => 'Gravar livros como página de utilizador',
	'right-collectionsaveascommunitypage' => 'Gravar livros como página comunitária',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 * @author Hamilton Abreu
 * @author Helder.wiki
 * @author Heldergeovane
 * @author Jorge Morais
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'coll-desc' => '[[Special:Book|Criar livros]]',
	'coll-book_creator_intro' => "<big>Com o ''criador de livros'' você pode criar um livro contendo as páginas wiki que desejar. Você pode exportar o livro para diferentes formatos (por exemplo PDF ou ODF) ou fazer o pedido de uma cópia impressa.</big>",
	'coll-manage_your_book' => 'Gerir o seu livro',
	'coll-book_creator_help' => 'Veja [[{{MediaWiki:Coll-helppage}}|a página de ajuda sobre livros]] para mais informações.',
	'coll-start_book_creator' => 'Iniciar o criador de livros',
	'coll-book_creator_continue' => 'Continuar usando o criador de livros',
	'coll-book_creator_disable_text' => "O ''criador de livros'' será desabilitado e o livro no qual você está trabalhando será removido.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Texto do criador de livros',
	'coll-collection' => 'Livro',
	'coll-collections' => 'Livros',
	'coll-exclusion_category_title' => 'Excluir ao imprimir',
	'coll-print_template_prefix' => 'Imprimir',
	'coll-print_template_pattern' => '$1/Imprimir',
	'coll-unknown_subpage_title' => 'Subpágina desconhecida',
	'coll-unknown_subpage_text' => 'Esta subpágina do [[Special:Book|Livro]] não existe',
	'coll-couldnotaddarticle_title' => 'Não foi possível adicionar a página wiki',
	'coll-couldnotaddarticle_msg' => 'A página wiki não pôde ser adicionada.',
	'coll-couldnotremovearticle_title' => 'Não pôde remover a página wiki',
	'coll-couldnotremovearticle_msg' => 'A página wiki não pôde ser removida.',
	'coll-noscript_text' => '<h1>É necessário o JavaScript!</h1>
<strong>O seu navegador não suporta JavaScript, ou o JavaScript foi desativado.
Esta página não funcionará corretamente, a menos que o JavaScript seja ativado.</strong>',
	'coll-savedbook_template' => 'livro_salvo',
	'coll-your_book' => 'Seu livro',
	'coll-download_title' => 'Baixar',
	'coll-download_text' => 'Para baixar o seu livro escolha um formato e pressione o botão.',
	'coll-download_as_text' => 'Para baixar o seu livro no formato $1, clique no botão.',
	'coll-download' => 'Baixar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Remover',
	'coll-show' => 'Exibir',
	'coll-move_to_top' => 'Mover para o topo',
	'coll-move_up' => 'Mover acima',
	'coll-move_down' => 'Mover abaixo',
	'coll-move_to_bottom' => 'Mover para o fundo',
	'coll-title' => 'Título:',
	'coll-subtitle' => 'Subtítulo:',
	'coll-contents' => 'Conteúdo',
	'coll-drag_and_drop' => 'Arraste-e-solte para re-ordenar as páginas wiki e os capítulos',
	'coll-create_chapter' => 'Criar capítulo',
	'coll-sort_alphabetically' => 'Ordenar alfabeticamente',
	'coll-rename' => 'Renomear',
	'coll-new_chapter' => 'Introduza o nome para um novo capítulo',
	'coll-rename_chapter' => 'Introduza um novo nome para o capítulo',
	'coll-no_such_category' => 'Não existe esta categoria',
	'coll-notitle_title' => 'Não foi possível determinar o título da página.',
	'coll-post_failed_title' => 'Pedido POST falhou',
	'coll-post_failed_msg' => 'O pedido POST feito em $1 falhou ($2).',
	'coll-mwserve_failed_title' => 'Erro no servidor de renderização',
	'coll-mwserve_failed_msg' => 'Ocorreu um erro no servidor de renderização: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Resposta de erro do servidor',
	'coll-empty_collection' => 'Livro vazio',
	'coll-revision' => 'Revisão: $1',
	'coll-save_collection_title' => 'Salvar e compartilhar o seu livro',
	'coll-save_collection_text' => 'Defina a localização:',
	'coll-login_to_save' => 'Se pretende salvar livros para uso posterior, por favor, [[Special:UserLogin|autentique-se ou crie uma conta]].',
	'coll-personal_collection_label' => 'Livro pessoal:',
	'coll-community_collection_label' => 'Livro comunitário:',
	'coll-save_collection' => 'Salvar livro',
	'coll-save_category' => 'Todos os livros salvos são adicionados à categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'A página já existe.
Sobrescrever?',
	'coll-overwrite_text' => 'Um página com o nome [[:$1]] já existe.
Deseja substituí-la com o seu livro?',
	'coll-yes' => 'Sim',
	'coll-no' => 'Não',
	'coll-load_overwrite_text' => 'Você já possui algumas páginas no seu livro.
Pretende sobrescrever o seu livro atual, adicionar o novo conteúdo, ou cancelar o carregamento deste livro?',
	'coll-overwrite' => 'Sobrescrever',
	'coll-append' => 'Adicionar',
	'coll-cancel' => 'Cancelar',
	'coll-update' => 'Atualizar',
	'coll-limit_exceeded_title' => 'Livro grande demais',
	'coll-limit_exceeded_text' => 'O seu livro é grande demais.
Não é possível adicionar mais páginas.',
	'coll-rendering_title' => 'Renderizando',
	'coll-rendering_text' => '<p><strong>Por favor, aguarde enquanto o documento é gerado.</strong></p>

<p><strong>Progresso:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Este página deverá se atualizar automaticamente a cada poucos segundos.
Se isto não funcionar, por favor utilize o botão atualizar do seu navegador.</p>',
	'coll-rendering_status' => '<strong>Estado:</strong> $1',
	'coll-rendering_article' => '(página wiki: $1)',
	'coll-rendering_page' => '(página: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre renderização de páginas',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre renderização de coleções',
	'coll-rendering_finished_title' => 'Renderização concluída',
	'coll-rendering_finished_text' => '<strong>O arquivo do documento foi gerado.</strong>
<strong>[$1 Baixe o arquivo]</strong> para o seu computador.

Notas:
* Não está satisfeito com o resultado? Veja [[{{MediaWiki:Coll-helppage}}|a página de ajuda sobre livros]] para possibilidades de aprimoramentos.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre renderização de páginas',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Texto informativo sobre renderização de coleções',
	'coll-notfound_title' => 'Livro não encontrado',
	'coll-notfound_text' => 'Não foi possível encontrar a página do livro.',
	'coll-download_notfound_title' => 'Arquivo não encontrado',
	'coll-download_notfound_text' => 'O arquivo que você está tentando baixar não existe:
Talvez ele tenha sido removido e precise ser regenerado.',
	'coll-download_failed_title' => 'Erro ao baixar o arquivo',
	'coll-download_failed_text' => 'Houve um erro ao baixar o arquivo: $1',
	'coll-is_cached' => '<ul><li>Foi encontrada uma versão deste documento em cache, de modo que não foi necessária uma renderização.
<a href="$1">Forçar nova renderização.</a></li></ul>',
	'coll-excluded-templates' => '* Predefinições na categoria [[:Category:$1|$1]] foram excluídas.',
	'coll-blacklisted-templates' => '* Predefinições na lista negra [[:$1]] foram excluídas.',
	'coll-return_to_collection' => '<p>Retornar para <a href="$1">$2</a></p>',
	'coll-book_title' => 'Encomendar como um livro impresso',
	'coll-book_text' => 'Adquira um livro impresso de nosso parceiro de impressão sob demanda:',
	'coll-order_from_pp' => 'Previsualizar com $1',
	'coll-about_pp' => 'Sobre $1',
	'coll-invalid_podpartner_title' => 'Parceiro de impressão sob demanda inválido',
	'coll-invalid_podpartner_msg' => 'O parceiro de impressão sob demanda fornecido é inválido.
Por favor, contate o seu administrador MediaWiki.',
	'coll-license' => 'Licença',
	'coll-return_to' => 'Voltar para [[:$1]]',
	'coll-more_info' => 'Exibir mais informações',
	'coll-hide_info' => 'Esconder informações',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informações sobre pedidos feitos à PediaPress',
	'coll-suggest_title' => 'Páginas sugeridas para seu livro',
	'coll-suggest_intro_text' => 'Sugestões são baseadas no conjunto atual de páginas wiki no seu livro.
A lista é atualizada toda vez que você clica nos botões adicionar ou remover.',
	'coll-suggested_articles' => 'Sugestões',
	'coll-suggest_reset_bans' => 'restabelecer',
	'coll-suggest_reset_bans_tooltip' => 'Mostrar sugestões removidas anteriormente',
	'coll-suggest_add_selected' => 'Adicionar páginas selecionadas',
	'coll-suggest_ban_selected' => 'Remover páginas selecionadas',
	'coll-suggest_your_book' => 'Seu livro',
	'coll-suggest_show' => 'mostrar',
	'coll-suggest_ban_tooltip' => 'Remover esta página da lista de sugestões',
	'coll-suggest_article_ban' => 'A página <strong>$1</strong> foi removida das sugestões ($2).',
	'coll-suggest_article_add' => 'A página <strong>$1</strong> foi adicionada ao seu livro ($2).',
	'coll-suggest_article_remove' => 'A página <strong>$1</strong> foi removida do seu livro ($2).',
	'coll-suggest_undo_tooltip' => 'Desfazer esta ação',
	'coll-suggest_undo' => 'desfazer',
	'coll-load_local_book' => 'Clique OK para continuar com o seu livro %TITLE% que contém %NUMPAGES% páginas wiki. Clique Cancelar para apagá-lo e começar com um livro vazio.',
	'right-collectionsaveasuserpage' => 'Salvar livros como página de usuário',
	'right-collectionsaveascommunitypage' => 'Salvar livros como páginas comunitárias',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'coll-more_info' => 'Aswan willaykunata rikuchiy',
	'coll-hide_info' => 'Willaykunata pakay',
);

/** Romansh (Rumantsch)
 * @author Gion-andri
 */
$messages['rm'] = array(
	'coll-desc' => '[[Special:Book|Crear cudeschs]]',
	'coll-book_creator_intro' => "<big>Cun il ''generatur da cudeschs'' pos ti crear cudeschs che cuntegnan paginas da wiki tenor tia schelta. Ti pos exportar il cudesch en differents formats (per exempel PDF u ODF) u empustar in exemplar stampà.</big>",
	'coll-manage_your_book' => 'Administrar tes cudesch',
	'coll-book_creator_help' => "Legia [[{{MediaWiki:Coll-helppage}}|la pagina d'agid davart cudeschs]] per dapli infurmaziuns.",
	'coll-start_book_creator' => 'Activar il generatur da cudeschs',
	'coll-book_creator_continue' => 'Cuntinuar dad utilisar il generatur da cudeschs',
	'coll-book_creator_disable_text' => "Il ''generatur da cudeschs'' vegn deactivà ed il cudesch vid il qual ti lavuras vegn stizzà.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text per il modus da cudeschs',
	'coll-collection' => 'Cudesch',
	'coll-collections' => 'Cudeschs',
	'coll-exclusion_category_title' => 'Excluder da la stampa',
	'coll-print_template_prefix' => 'Stampar',
	'coll-print_template_pattern' => '$1/Stampa',
	'coll-unknown_subpage_title' => 'Sutpagina nunenconuschenta',
	'coll-unknown_subpage_text' => "Questa sutpagina da [[Special:Book|Cudesch]] n'exista betg",
	'coll-couldnotaddarticle_title' => 'Impussibel dad agiuntar la pagina da wiki',
	'coll-couldnotaddarticle_msg' => 'La pagina da wiki na pudeva betg vegnir agiuntada.',
	'coll-couldnotremovearticle_title' => 'Impussibel dad allontanar la pagina da wiki',
	'coll-couldnotremovearticle_msg' => 'La pagina da wiki na pudeva betg vegnir allontanada.',
	'coll-noscript_text' => '<h1>Questa pagina basegna JavaScript!</h1>
<strong>Tes navigatur na sustegna betg JavaScript u che ti has deactivà JavaScript.
Questa pagina na funcziuna betg correctamain fin che ti activeschas JavaScript.</strong>',
	'coll-savedbook_template' => 'cudesch_memorisà',
	'coll-your_book' => 'Tes cudesch',
	'coll-download_title' => 'Telechargiar',
	'coll-download_text' => 'Per telechargiar tes cudesch stos ti tscherner in format e cliccar sin il buttun.',
	'coll-download_as_text' => 'Per telechargiar tes cudesch en il format $1, clicca sin il buttun.',
	'coll-download' => 'Telechargiar',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Allontanar',
	'coll-show' => 'Mussar',
	'coll-move_to_top' => "Spustar a l'entschatta",
	'coll-move_up' => 'Ensi',
	'coll-move_down' => 'Engiu',
	'coll-move_to_bottom' => 'Spustar a la fin',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Suttitel:',
	'coll-contents' => 'Cuntegn',
	'coll-drag_and_drop' => 'Utilisescha drag & drop per midar las successiuns da las paginas da wiki ed ils chapitels',
	'coll-create_chapter' => 'Crear in chapitel',
	'coll-sort_alphabetically' => 'Zavrar alfabeticamain',
	'coll-rename' => 'Renumnar',
	'coll-new_chapter' => 'Endatescha in num per il chapitel nov',
	'coll-rename_chapter' => 'Endatescha in num per il chapitel',
	'coll-no_such_category' => "Questa categoria n'exista betg",
	'coll-notitle_title' => 'Betg pussaivel dad eruir il titel da la pagina.',
	'coll-post_failed_title' => "La dumonda da POST n'è betg reussida",
	'coll-post_failed_msg' => "La dumonda da POST a $1 n'è betg reussida ($2).",
	'coll-mwserve_failed_title' => 'Errur dal server per calcular graficas',
	'coll-mwserve_failed_msg' => 'Ina errur è capitada sin il server per calcular graficas: <nowiki>$1</nowiki>',
	'coll-error_reponse' => "Resposta d'errur dal server",
	'coll-empty_collection' => 'Cudesch vid',
	'coll-revision' => 'Versiun: $1',
	'coll-save_collection_title' => 'Memorisar e cundivider tes cudesch',
	'coll-save_collection_text' => 'Tscherna il lieu per memorisar tes cudesch:',
	'coll-login_to_save' => "Sche ti vuls memorisar cudeschs per als utilisar pli tard stos ti [[Special:UserLogin|t'annunziar u crear in conto]].",
	'coll-personal_collection_label' => 'Cudesch persunal:',
	'coll-community_collection_label' => 'Cudesch da la communitad:',
	'coll-save_collection' => 'Memorisar il cudesch',
	'coll-save_category' => 'Tut ils cudeschs memorisads vegnan agiuntads a la categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Pagina exista gia. 
Remplazzar?',
	'coll-overwrite_text' => 'Ina pagina cun il num [[:$1]] exista gia.
La vuls ti remplazzar cun tes cudesch?',
	'coll-yes' => 'Gea',
	'coll-no' => 'Na',
	'coll-load_overwrite_text' => 'Tes cudesch cuntegnia gia intginas paginas.
Vuls ti remplazzar tes cudesch actual, agiuntar cuntegn nov u interrumper da chargiar quest cudesch?',
	'coll-overwrite' => 'Remplazzar',
	'coll-append' => 'Agiuntar',
	'coll-cancel' => 'Interrumper',
	'coll-update' => 'Actualisar',
	'coll-limit_exceeded_title' => 'Il cudesch è memia grond',
	'coll-limit_exceeded_text' => 'Tes cudesch è memia grond.
I na pon betg vegnir agiuntadas ulteriuras paginas.',
	'coll-rendering_title' => 'Calcular graficas',
	'coll-rendering_text' => '<p><strong>Spetga durant ch\'il document vegn generà.</strong></p>

<p><strong>Progress:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Questa pagina duess rechargiar automaticamain mintga per secundas. 
Sche quai na funcziuna betg, clicca en tes navigatur il buttun per rechargiar.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(pagina wiki: $1)',
	'coll-rendering_page' => '(pagina: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Infurmaziuns davart la calculaziun grafica da las paginas',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Infurmaziuns davart la calculaziun grafica da collecziuns',
	'coll-rendering_finished_title' => 'Terminà la calculaziun grafica',
	'coll-rendering_finished_text' => "<strong>La datoteca dal document è vegnida generada.</strong>
<strong>[$1 Telechargiar la datoteca]</strong> sin tes computer.

Remartga:
* Betg cuntent cun il resultat? Legia [[{{MediaWiki:Coll-helppage}}|la pagina d'agid davart cudeschs]] per pussaivladads per optimar el.",
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Infurmaziuns davart la calculaziun grafica da las paginas',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Infurmaziuns davart la calculaziun grafica da collecziuns',
	'coll-notfound_title' => 'Betg chattà il cudesch',
	'coll-notfound_text' => 'Betg pussaivel da chattar la pagina dal cudesch.',
	'coll-download_notfound_title' => 'Betg chattà la datoteca',
	'coll-download_notfound_text' => "La datoteca che ti emprovas da telechargiar n'exista betg:
Forsa è ella vegnida stizzada e sto vegnir regenerada.",
	'coll-download_failed_title' => 'Errur durant telechargiar',
	'coll-download_failed_text' => 'I ha dà ina errur durant telechargiar la datoteca: $1',
	'coll-is_cached' => '<ul><li>En il cache è vegnida chattada ina versiun da quest document, pia n\'è nagina calculaziun grafica necessaria.
<a href="$1">Sfurzar da recalcular la grafica.</a></li></ul>',
	'coll-excluded-templates' => '* Models en la categoria [[:Category:$1|$1]] èn vegnids exclus.',
	'coll-blacklisted-templates' => '* Models sin la glista naira [[:$1]] èn vegnids exclus.',
	'coll-return_to_collection' => '<p>Turnar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Empustar sco cudesch stampà',
	'coll-book_text' => 'Empustar in cudesch stampà tar noss partenari per la stampa sin dumonda.',
	'coll-order_from_pp' => 'Prevista tar $1',
	'coll-about_pp' => 'Davart $1',
	'coll-invalid_podpartner_title' => 'Partenari da stampa sin dumonda nunvalid',
	'coll-invalid_podpartner_msg' => "Il partenari per la stampa sin dumonda inditgà n'è betg valaivel. 
Contactescha tes administratur da MediaWiki.",
	'coll-license' => 'Licenza',
	'coll-return_to' => 'Turnar a [[:$1]]',
	'coll-more_info' => 'Mussar ulteriuras infurmaziuns',
	'coll-hide_info' => 'Zuppentar infurmaziuns',
	'coll-order_info_article' => "{{MediaWiki:Coll-helppage}}/Infurmaziuns per l'empustaziun tar PediaPress",
	'coll-suggest_title' => 'Paginas proponidas per tes cudesch',
	'coll-suggest_intro_text' => 'Las propostas sa basan sin ils artitgels actuals en tes cudesch.
La glista vegn actualisada sche ti cliccas sin ils buttuns per agiuntar u allontanar.',
	'coll-suggested_articles' => 'Propostas',
	'coll-suggest_reset_bans' => 'redefinir',
	'coll-suggest_reset_bans_tooltip' => 'Mussar las propostas allontanadas ultimamain',
	'coll-suggest_add_selected' => 'Agiuntar las paginas tschernidas',
	'coll-suggest_ban_selected' => 'Allontanar las paginas tschernidas',
	'coll-suggest_your_book' => 'Tes cudesch',
	'coll-suggest_show' => 'mussar',
	'coll-suggest_ban_tooltip' => 'Allontanar questa pagina da la glista da propostas',
	'coll-suggest_article_ban' => 'La pagina <strong>$1</strong> è vegnida allontanada da las propostas ($2).',
	'coll-suggest_article_add' => 'La pagina <strong>$1</strong> è vegnida agiuntada a tes cudesch ($2).',
	'coll-suggest_article_remove' => 'La pagina <strong>$1</strong> è vegnida allontanada da tes cudesch ($2).',
	'coll-suggest_undo_tooltip' => 'Revocar questa acziun',
	'coll-suggest_undo' => 'revocar',
	'coll-load_local_book' => 'Clicca sin OK per cuntinuar cun tes cudesch %TITLE% che cuntegna %NUMPAGES% paginas da wiki. Clicca sin Interrumper per al stizzar e cumenzar cun in cudesch vid.',
	'right-collectionsaveasuserpage' => "Memorisar cudeschs sco pagina d'utilisader",
	'right-collectionsaveascommunitypage' => 'Memorisar cudeschs sco pagina da la communitad',
);

/** Romanian (Română)
 * @author Cin
 * @author Danutz
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 * @author Stelistcristi
 * @author Strainu
 */
$messages['ro'] = array(
	'coll-desc' => '[[Special:Book|Creare de cărți]]',
	'coll-book_creator_intro' => "<big>Folosind ''creatorul de cărți'' puteți întocmi o carte care să conțină pagini wiki alese de dumneavoastră. O puteți exporta apoi în diverse formate de fișiere (cum ar fi de pildă PDF sau ODF) sau puteți comanda o copie tipărită a acesteia.</big>",
	'coll-manage_your_book' => 'Gestionați-vă cartea',
	'coll-book_creator_help' => 'Consultați [[{{MediaWiki:Coll-helppage}}|pagina de ajutor despre cărți]] pentru mai multe informații.',
	'coll-start_book_creator' => 'Pornește creatorul de cărți',
	'coll-book_creator_continue' => 'Continuați utilizarea creatorului de cărți',
	'coll-book_creator_disable_text' => "''Creatorul de cărți'' va fi dezactivat, iar cartea la care lucrați va fi ștearsă.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text creator de cărți',
	'coll-collection' => 'Carte',
	'coll-collections' => 'Cărți',
	'coll-exclusion_category_title' => 'Excludere de la tipărire',
	'coll-print_template_prefix' => 'Tipărește',
	'coll-print_template_pattern' => '$1/Tipărire',
	'coll-unknown_subpage_title' => 'Subpagină necunoscută',
	'coll-unknown_subpage_text' => 'Această subpagină a [[Special:Book|cărții]] nu există',
	'coll-couldnotaddarticle_title' => 'Nu s-a putut adăuga pagina',
	'coll-couldnotaddarticle_msg' => 'Pagina nu a putut fi adăugată.',
	'coll-couldnotremovearticle_title' => 'Nu se poate elimina pagina',
	'coll-couldnotremovearticle_msg' => 'Pagina nu a putut fi eliminată.',
	'coll-noscript_text' => '<h1>Este necesar JavaScript!</h1>
<strong>Navigatorul dumneavoastră fie nu suportă JavaScript, fie acest serviciu a fost oprit.
Această pagină nu va putea fi corect încărcată atât timp cât JavaScript nu este pornit.</strong>',
	'coll-savedbook_template' => 'carte_salvată',
	'coll-your_book' => 'Cartea dumneavoastră',
	'coll-download_title' => 'Descărcare',
	'coll-download_text' => 'Pentru descărcarea cărții dumneavoastră alegeți un format și apăsați butonul.',
	'coll-download_as_text' => 'Pentru descărcarea cărții dumneavoastră în formatul $1, apăsați butonul.',
	'coll-download' => 'Descărcare',
	'coll-format_label' => 'Formatare:',
	'coll-remove' => 'Eliminare',
	'coll-show' => 'Afișare',
	'coll-move_to_top' => 'Mergi la început',
	'coll-move_up' => 'Mergi sus',
	'coll-move_down' => 'Mergi jos',
	'coll-move_to_bottom' => 'Mergi la bază',
	'coll-title' => 'Titlu:',
	'coll-subtitle' => 'Subtitlu:',
	'coll-contents' => 'Cuprins',
	'coll-drag_and_drop' => 'Folosiți funcția „glisare și plasare” pentru a ordona paginile și capitolele.',
	'coll-create_chapter' => 'Creare capitol',
	'coll-sort_alphabetically' => 'Ordonează alfabetic',
	'coll-rename' => 'Redenumire',
	'coll-new_chapter' => 'Introduceți numele noului capitol',
	'coll-rename_chapter' => 'Introduceți noul nume al capitolului',
	'coll-no_such_category' => 'Nu există o asemenea categorie',
	'coll-notitle_title' => 'Titlul paginii nu a putut fi determinat.',
	'coll-post_failed_title' => 'Cerere POST eșuată',
	'coll-post_failed_msg' => 'Cererea POST către $1 a eșuat ($2).',
	'coll-mwserve_failed_title' => 'Eroare de randare din partea serverului',
	'coll-mwserve_failed_msg' => 'A apărut o eroare pe serverul de randare: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Mesaj de eroare de la server',
	'coll-empty_collection' => 'Carte fără conținut',
	'coll-revision' => 'Versiune: $1',
	'coll-save_collection_title' => 'Salvarea și partajarea cărții',
	'coll-save_collection_text' => 'Alegeți o locație de depozitare pentru cartea dumneavoastră:',
	'coll-login_to_save' => 'Dacă doriți să salvați cărțile pentru o folosire ulterioară, vă rugăm [[Special:UserLogin|să vă autentificați sau să vă creați un cont]].',
	'coll-personal_collection_label' => 'Carte personală:',
	'coll-community_collection_label' => 'Carte a comunității:',
	'coll-save_collection' => 'Salvează cartea',
	'coll-save_category' => 'Toate cărțile salvate sunt introduse în categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Pagina există.
Suprascriu?',
	'coll-overwrite_text' => 'O pagină cu numele [[:$1]] există deja.
Doriți ca aceasta să fie înlocuită de cartea dumneavoastră?',
	'coll-yes' => 'Da',
	'coll-no' => 'Nu',
	'coll-load_overwrite_text' => 'Cartea dumneavoastră conține deja câteva pagini.
Ce doriți să faceți în continuare: să suprascrieți actuala carte, să adăugați noul conținut sau să revocați încărcarea acestei cărți?',
	'coll-overwrite' => 'Suprascriere',
	'coll-append' => 'Adăugare',
	'coll-cancel' => 'Renunțare',
	'coll-update' => 'Actualizează',
	'coll-limit_exceeded_title' => 'Carte prea mare',
	'coll-limit_exceeded_text' => 'Cartea dumneavoastră este prea mare.
Nicio altă pagină nu mai poate fi adăugată.',
	'coll-rendering_title' => 'Se generează',
	'coll-rendering_text' => '<p><strong>Vă rugăm să așteptați până când documentul este generat.</strong></p>

<p><strong>Progres:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Această pagină ar trebui să se reîmprospăteze automat la fiecare câteva secunde.
Dacă nu se întâmplă așa, vă rugăm să apăsați butonul de reîncărcare al navigatorului dumneavoastră.</p>',
	'coll-rendering_status' => '<strong>Stare:</strong> $1',
	'coll-rendering_article' => '(pagină wiki: $1)',
	'coll-rendering_page' => '(pagină: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informații despre generarea paginilor',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informații despre generarea colecțiilor',
	'coll-rendering_finished_title' => 'Generare finalizată',
	'coll-rendering_finished_text' => '<strong>Fișierul documentului a fost generat.</strong>
<strong>[$1 Descărcați-l]</strong> în calculatorul dumneavoastră.

Note:
* Nu sunteți mulțumit de rezultat? Consultați [[{{MediaWiki:Coll-helppage}}|pagina de ajutor destinată cărților]] pentru posibile modalități de îmbunătățire.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informații despre generarea paginilor',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informații despre generarea colecțiilor',
	'coll-notfound_title' => 'Cartea nu a fost găsită',
	'coll-notfound_text' => 'Pagina cărții nu a putut fi găsită.',
	'coll-download_notfound_title' => 'Fișierul nu a putut fi găsit',
	'coll-download_notfound_text' => 'Fișierul pe care încercați să îl descărcați nu există:
Este posibil ca acesta să fi fost șters și trebuie regenerat.',
	'coll-download_failed_title' => 'Eroare în timpul descărcării',
	'coll-download_failed_text' => 'S-a produs o eroare în timpul descărcării fișierului: $1',
	'coll-is_cached' => '<ul><li>O versiune din cache a documentului a fost găsită, deci nu a mai fost necesară o regenerare.
<a href="$1">Forțează regenerarea.</a></li></ul>',
	'coll-excluded-templates' => '* Formatele din categoria [[:Category:$1|$1]] au fost excluse.',
	'coll-blacklisted-templates' => '* Formatele aflate în lista neagră de la [[:$1]] au fost excluse.',
	'coll-return_to_collection' => '<p>Înapoi la <a href="$1">$2</a></p>',
	'coll-book_title' => 'Comandarea ca document tipărit',
	'coll-book_text' => 'Obțineți o carte tipărită de la partenerul nostru.',
	'coll-order_from_pp' => 'Previzualizează cu $1',
	'coll-about_pp' => 'Despre $1',
	'coll-invalid_podpartner_title' => 'Partener de tipărire incorect',
	'coll-invalid_podpartner_msg' => 'Partenerul ales pentru tipărire este incorect.
Vă rugăm să contactați administratorul sitului MediaWiki.',
	'coll-license' => 'Licență',
	'coll-return_to' => 'Înapoi la [[:$1]]',
	'coll-more_info' => 'Arată mai multe informații',
	'coll-hide_info' => 'Ascunde informațiile',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informații despre comanda către PediaPress',
	'coll-suggest_title' => 'Pagini sugerate pentru cartea dumneavoastră',
	'coll-suggest_intro_text' => 'Sugestiile se bazează pe actualul conținut al cărții dumneavoastră.
Această listă este actualizată de fiecare dată când apăsați butoanele de adăugare sau eliminare.',
	'coll-suggested_articles' => 'Sugestii',
	'coll-suggest_reset_bans' => 'resetează',
	'coll-suggest_reset_bans_tooltip' => 'Afișarea sugestiilor eliminate anterior',
	'coll-suggest_add_selected' => 'Adaugă paginile selectate',
	'coll-suggest_ban_selected' => 'Elimină paginile selectate',
	'coll-suggest_your_book' => 'Cartea dumneavoastră',
	'coll-suggest_show' => 'arată',
	'coll-suggest_ban_tooltip' => 'Elimină această pagină din lista cu sugestii',
	'coll-suggest_article_ban' => 'Pagina <strong>$1</strong> a fost eliminată de la sugestii ($2).',
	'coll-suggest_article_add' => 'Pagina <strong>$1</strong> a fost adăugată în cartea dumneavoastră ($2).',
	'coll-suggest_article_remove' => 'Pagina <strong>$1</strong> a fost eliminată din cartea dumneavostră ($2).',
	'coll-suggest_undo_tooltip' => 'Anularea acestei acțiuni',
	'coll-suggest_undo' => 'anulează',
	'coll-load_local_book' => 'Apăsați OK pentru a continua cu actuala carte (intitulată %TITLE%), care conține %NUMPAGES% pagini. Apăsați Renunțare pentru a o șterge și a începe o nouă carte.',
	'right-collectionsaveasuserpage' => 'Salvează cartea ca pagină de utilizator',
	'right-collectionsaveascommunitypage' => 'Salvează cartea ca o pagină a comunității',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'coll-desc' => '[[Special:Book|Ccreje le libbre]]',
	'coll-manage_your_book' => "Gestisce 'u libbre tune",
	'coll-start_book_creator' => "Accuminze 'nu crijatore de libbre",
	'coll-book_creator_continue' => "Condinue ad ausà 'u crijatore de libbre",
	'coll-book_creator_disable_text' => "'U ''Crijatore de libbre'' avrà da essere disabbiletate e le libbre sus a cui tu stè fatijanne honne a essere luàte.",
	'coll-book_creator_text_article' => "{{MediaWiki:Coll-helppage}}/Teste d'u crijatore de libbre",
	'coll-collection' => 'Libbre',
	'coll-collections' => 'Libbre',
	'coll-exclusion_category_title' => 'Esclude in stambe',
	'coll-print_template_prefix' => 'Stambe',
	'coll-print_template_pattern' => '$1/Stambe',
	'coll-unknown_subpage_title' => 'Sottopàgene scanusciute',
	'coll-unknown_subpage_text' => "Sta sottepàgene de [[Special:Book|Libbre]] non g'esiste",
	'coll-couldnotaddarticle_title' => "Non ge puè aggiungere 'na pàgene de Uicchi",
	'coll-couldnotaddarticle_msg' => "'A pàgene de uicchi non ge pòte essere aggiunde.",
	'coll-couldnotremovearticle_title' => "Non ge puè luà 'na pàgene de Uicchi",
	'coll-couldnotremovearticle_msg' => "'A pàgene de uicchi non ge pòte essere luàte.",
	'coll-savedbook_template' => 'libbre_reggistrate',
	'coll-your_book' => "'U libbre tune",
	'coll-download_title' => 'Scareche',
	'coll-download_text' => "Pè scarecà 'nu libbre scacchie 'nu furmate e cazze 'u bottone.",
	'coll-download_as_text' => "Pè scarecà 'nu libbre jndr'ô furmate $1 cazze 'u bottone.",
	'coll-download' => 'Scareche',
	'coll-format_label' => 'Formate:',
	'coll-remove' => 'Live',
	'coll-show' => 'Fà vedè',
	'coll-move_to_top' => 'Spuèste susa sus',
	'coll-move_up' => "'Nghiane",
	'coll-move_down' => 'Scinne',
	'coll-move_to_bottom' => 'Spuèste sotta sotte',
	'coll-title' => 'Titele:',
	'coll-subtitle' => 'Sotto titele:',
	'coll-contents' => 'Condenute',
	'coll-create_chapter' => "Ccreja 'nu capitele",
	'coll-sort_alphabetically' => 'Ordene alfabbeticamende',
	'coll-rename' => 'Renomene',
	'coll-new_chapter' => "Mitte 'u nome pu capitele nuève",
	'coll-rename_chapter' => "Mitte 'u nome nuève pu capitele",
	'coll-no_such_category' => 'Nisciuna categorije',
	'coll-notitle_title' => "'U titele d'a pàgene non ge pòte essere determinte.",
	'coll-post_failed_title' => 'Richieste de POST fallite',
	'coll-post_failed_msg' => "'A richieste de POST a $1 ha fallite ($2).",
	'coll-mwserve_failed_title' => 'Server de rendere in errore',
	'coll-error_reponse' => "Resposte cu l'errore da 'u server",
	'coll-empty_collection' => 'Libbre vacande',
	'coll-revision' => 'Revisione: $1',
	'coll-save_collection_title' => "Reggistre e condivide 'u libbre tune",
	'coll-save_collection_text' => "Scacchie 'na posiziune de archivijaziune pè 'u libbre tue:",
	'coll-login_to_save' => "Ce tu vuè cu salve 'nu libbre pè le ausà cchiù nnande, sì pregate de [[Special:UserLogin|trasè o crijà 'nu cunde utinde]].",
	'coll-personal_collection_label' => 'Libbre personale:',
	'coll-community_collection_label' => "Libbre d'a comunitate:",
	'coll-save_collection' => "Reggistre 'u libbre",
	'coll-overwrite_title' => "'A pàgene esiste.
Agghia sovrascrivere?",
	'coll-overwrite_text' => "'Na pàgene cu 'u nome [[:$1]] esiste ggià.
A vuè cange cu 'u libbre tune?",
	'coll-yes' => 'Sine',
	'coll-no' => 'None',
	'coll-overwrite' => 'Sovrascrive',
	'coll-append' => 'Mitte in code',
	'coll-cancel' => 'Annulle',
	'coll-update' => 'Aggiorne',
	'coll-limit_exceeded_title' => 'Libbre troppe gruésse',
	'coll-limit_exceeded_text' => "'U libbre tue jè grnne assaje.
Non ge puè sckaffà cchiù otre pàgene.",
	'coll-rendering_title' => 'Esecuzione',
	'coll-rendering_status' => '<strong>State:</strong> $1',
	'coll-rendering_article' => '(pàgene de uicchi: $1)',
	'coll-rendering_page' => '(pàgene: $1)',
	'coll-rendering_finished_title' => 'Renderizzazzione spicciate',
	'coll-notfound_title' => 'Libbre non acchiate',
	'coll-notfound_text' => "'Mbossibbele acchiere 'a pàgene d'u libbre.",
	'coll-download_notfound_title' => 'File non acchiate',
	'coll-download_failed_title' => "Errore durande 'u download",
	'coll-download_failed_text' => "S'a verificate 'n'errore quanne ste scarecave 'u file: $1",
	'coll-excluded-templates' => "* Le template jndr'à categorije [[:Category:$1|$1]] onne state escluse.",
	'coll-blacklisted-templates' => '* Le template sus a lista gnore [[:$1]] onne state escluse.',
	'coll-book_title' => "Ordene cumme 'nu libbre stambate",
	'coll-order_from_pp' => 'Andeprime cu $1',
	'coll-about_pp' => 'Sus a $1',
	'coll-invalid_podpartner_title' => 'Partner POD invalide',
	'coll-license' => 'Licenze',
	'coll-return_to' => 'Tuèrne a [[:$1]]',
	'coll-more_info' => "Fa vedè cchiù 'mbormaziune",
	'coll-hide_info' => "Scunne le 'mbormaziune",
	'coll-order_info_article' => "{{MediaWiki:Coll-helppage}}/'Mbormaziune sus a l'ordine de PediaPress",
	'coll-suggested_articles' => 'Suggereminde',
	'coll-suggest_reset_bans' => 'azeere',
	'coll-suggest_reset_bans_tooltip' => 'Visualizze le commende luàte precedentemènde',
	'coll-suggest_add_selected' => 'Aggiunge le pàggene scacchiate',
	'coll-suggest_ban_selected' => 'Live le pàggene scacchiate',
	'coll-suggest_your_book' => "'U libbre tune",
	'coll-suggest_show' => 'fà vedè',
	'coll-suggest_ban_tooltip' => "Luà stà pàgene d'a liste de le suggerimènde",
	'coll-suggest_article_ban' => "'A pàgene <strong>$1</strong> ha state luàte da le suggerimènde ($2).",
	'coll-suggest_article_add' => "'A pàgene <strong>$1</strong> ha state aggiunde a le libbre ($2).",
	'coll-suggest_article_remove' => "'A pàgene <strong>$1</strong> ha state luàte da le libbre ($2).",
	'coll-suggest_undo_tooltip' => "Annulle st'azione",
	'coll-suggest_undo' => 'annulle',
	'right-collectionsaveasuserpage' => "Salve 'u libbre cumme pàgene utinde",
	'right-collectionsaveascommunitypage' => "Salve 'a pàgene cumme portale d'a comunitate",
);

/** Russian (Русский)
 * @author Ahonc
 * @author Aleksandrit
 * @author Amikeco
 * @author EugeneZelenko
 * @author Ferrer
 * @author Innv
 * @author Kaganer
 * @author Lockal
 * @author MaxSem
 * @author Putnik
 * @author Sergey kudryavtsev
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'coll-desc' => '[[Special:Book|Создаёт книги]]',
	'coll-book_creator_intro' => "<big>С помощью ''книжного мастера'' вы можете создать книгу, содержащую выбранные вами вики-страницы. Вы сможете экспортировать книги в различные форматы (например, в PDF или ODF) или заказать печатный экземпляр.</big>",
	'coll-manage_your_book' => 'Управление вашей книгой',
	'coll-book_creator_help' => 'Дополнительную информацию см. в [[{{MediaWiki:Coll-helppage}}|справке о книгах]].',
	'coll-start_book_creator' => 'Запустить книжного мастера',
	'coll-book_creator_continue' => 'Продолжить использование книжного мастера',
	'coll-book_creator_disable_text' => "''Книжный мастер'' будет отключён, книга, над которой вы сейчас работаете — удалена.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Текст книжного мастера',
	'coll-collection' => 'Книга',
	'coll-collections' => 'Книги',
	'coll-exclusion_category_title' => 'Исключения из печати',
	'coll-print_template_prefix' => 'Печать',
	'coll-print_template_pattern' => '$1/Печать',
	'coll-unknown_subpage_title' => 'Неизвестная подстраница',
	'coll-unknown_subpage_text' => 'Этой подстраницы [[Special:Book|книги]] не существует',
	'coll-couldnotaddarticle_title' => 'Не удалось добавить статью',
	'coll-couldnotaddarticle_msg' => 'Эта статья не может быть добавлена.',
	'coll-couldnotremovearticle_title' => 'Не удалось удалить статью',
	'coll-couldnotremovearticle_msg' => 'Эта статья не может быть удалена.',
	'coll-noscript_text' => '<h1>Требуется JavaScript!</h1>
<strong>Ваш браузер не поддерживает JavaScript или данная поддержка была отключена.
Эта страница не будет работать правильно, если JavaScript не включен.</strong>',
	'coll-savedbook_template' => 'сохранённая книга',
	'coll-your_book' => 'Ваша книга',
	'coll-download_title' => 'Скачать',
	'coll-download_text' => 'Чтобы скачать свою книгу, выберите формат и нажмите кнопку.',
	'coll-download_as_text' => 'Нажмите кнопку, чтобы скачать свою книгу в формате $1.',
	'coll-download' => 'Загрузить',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Удалить',
	'coll-show' => 'Показать',
	'coll-move_to_top' => 'Передвинуть наверх',
	'coll-move_up' => 'Передвинуть выше',
	'coll-move_down' => 'Передвинуть ниже',
	'coll-move_to_bottom' => 'Передвинуть вниз',
	'coll-title' => 'Заголовок:',
	'coll-subtitle' => 'Подзаголовок:',
	'coll-contents' => 'Содержание',
	'coll-drag_and_drop' => 'Чтобы упорядочить вики-страницы и главы, перетаскивайте их мышкой',
	'coll-create_chapter' => 'Создать главу',
	'coll-sort_alphabetically' => 'Упорядочивать по алфавиту',
	'coll-rename' => 'Переименовать',
	'coll-new_chapter' => 'Введите имя для новой главы',
	'coll-rename_chapter' => 'Введите новое имя главы',
	'coll-no_such_category' => 'Нет такой категории',
	'coll-notitle_title' => 'Заголовок страницы не может быть определён.',
	'coll-post_failed_title' => 'POST-запрос не выполнен',
	'coll-post_failed_msg' => 'POST-запрос к $1 не выполнен ($2).',
	'coll-mwserve_failed_title' => 'Ошибка сервера отрисовки',
	'coll-mwserve_failed_msg' => 'На сервере отрисовки произошла ошибка: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Ошибка ответа сервера',
	'coll-empty_collection' => 'Пустая книга',
	'coll-revision' => 'Версия: $1',
	'coll-save_collection_title' => 'Сохранить книгу и открыть к ней доступ',
	'coll-save_collection_text' => 'Выберите местоположение для вашей книги:',
	'coll-login_to_save' => 'Чтобы сохранить книгу для дальнейшего использования, пожалуйста, [[Special:UserLogin|авторизуйтесь или создайте учётную запись]].',
	'coll-personal_collection_label' => 'Личная книга:',
	'coll-community_collection_label' => 'Книга сообщества:',
	'coll-save_collection' => 'Сохранить книгу',
	'coll-save_category' => 'Все сохраняемые книги добавляются в категорию [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Страница существует. Перезаписать?',
	'coll-overwrite_text' => 'Страница с именем [[:$1]] уже существует.
Вы хотите чтобы она была заменена вашей коллекцией?',
	'coll-yes' => 'Да',
	'coll-no' => 'Нет',
	'coll-load_overwrite_text' => 'У вас уже есть несколько страниц в книге.
Вы хотите перезаписать вашу текущую книгу, добавить новый материал или отменить загрузку этой книги?',
	'coll-overwrite' => 'Перезаписать',
	'coll-append' => 'Добавить',
	'coll-cancel' => 'Отменить',
	'coll-update' => 'Обновить',
	'coll-limit_exceeded_title' => 'Слишком большая книга',
	'coll-limit_exceeded_text' => 'Книга имеет слишком большой размер.
В неё больше нельзя добавлять страницы.',
	'coll-rendering_title' => 'Создание',
	'coll-rendering_text' => '<p><strong>Пожалуйста, подождите — идёт создание документа.</strong></p>

<p><strong>Ход работы:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Эта страница должна обновляться раз в несколько секунд.
Если этого не происходит, нажмите кнопку «обновить» браузера.</p>',
	'coll-rendering_status' => '<strong>Статус:</strong> $1',
	'coll-rendering_article' => '(статья: $1)',
	'coll-rendering_page' => '(страница: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Отрисовка текста сведений о странице',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Отрисовка текста сведений о коллекции',
	'coll-rendering_finished_title' => 'Отрисовка завершена',
	'coll-rendering_finished_text' => '<strong>Файл документа создан.</strong>
<strong>[$1 Скачать файл]</strong> на свой компьютер.

Замечание:
* Не удовлетворены результатом? Возможности его улучшения описаны на [[{{MediaWiki:Coll-helppage}}|справочной странице о книгах]].',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Отрисовка текста сведений о странице',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Отрисовка текста сведений о коллекции',
	'coll-notfound_title' => 'Книга не найдена',
	'coll-notfound_text' => 'Невозможно найти страницу книги.',
	'coll-download_notfound_title' => 'Файл не найден',
	'coll-download_notfound_text' => 'Файла, который вы пытаетесь загрузить, не существует. Может быть, он был удален, и его необходимо воссоздать.',
	'coll-download_failed_title' => 'Ошибка в процессе скачивания',
	'coll-download_failed_text' => 'Обнаружена ошибка при скачивании файла: $1',
	'coll-is_cached' => '<ul><li>Найдена закэшированная версия этого документа, отрисовка не потребовалась. <a href="$1">Всё-таки запустить отрисовку.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблоны из категории [[:Category:$1|$1]] были исключены.',
	'coll-blacklisted-templates' => '* Шаблоны из чёрного списка [[:$1]] были исключены.',
	'coll-return_to_collection' => '<p>Назад к <a href="$1">$2</a></p>',
	'coll-book_title' => 'Заказать печатную книгу',
	'coll-book_text' => 'Получить печатную книгу от нашего партнёра:',
	'coll-order_from_pp' => 'Предпросмотр посредством $1',
	'coll-about_pp' => 'О $1',
	'coll-invalid_podpartner_title' => 'Недействительный POD-партнёр',
	'coll-invalid_podpartner_msg' => 'Предоставляемый POD-партнёр недействителен.
Пожалуйста, свяжитесь с вашим администратором MediaWiki.',
	'coll-license' => 'Лицензия',
	'coll-return_to' => 'Возврат к [[:$1]]',
	'coll-more_info' => 'Показать больше информации',
	'coll-hide_info' => 'Скрыть информацию',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Информация о заказе PediaPress',
	'coll-suggest_title' => 'Предлагаемые для вашей книги страницы',
	'coll-suggest_intro_text' => 'Предложения основываются на текущем наборе вики-страниц вашей книги.
Список обновляется всякий раз, когда вы нажмете на кнопки добавления или удаления.',
	'coll-suggested_articles' => 'Предложения',
	'coll-suggest_reset_bans' => 'сбросить',
	'coll-suggest_reset_bans_tooltip' => 'Показать ранее удалённые предложения',
	'coll-suggest_add_selected' => 'Добавить выбранные страницы',
	'coll-suggest_ban_selected' => 'Удалить выбранные страницы',
	'coll-suggest_your_book' => 'Ваша книга',
	'coll-suggest_show' => 'показывать',
	'coll-suggest_ban_tooltip' => 'Удалить эту страницу из списка предложений',
	'coll-suggest_article_ban' => 'Страница <strong>$1</strong> была удалена из списка предложений ($2).',
	'coll-suggest_article_add' => 'В вашу книгу ($2) была добавлена страница <strong>$1</strong>.',
	'coll-suggest_article_remove' => 'Из вашей книги ($2) была удалена страница <strong>$1</strong>.',
	'coll-suggest_undo_tooltip' => 'Отменить это действие',
	'coll-suggest_undo' => 'отменить',
	'coll-load_local_book' => 'Нажмите «ОК», чтобы продолжить работу с вашей книгой %TITLE%, содержащей %NUMPAGES% вики-страниц. Нажмите «Отмена», чтобы удалить её и начать с пустой книги.',
	'right-collectionsaveasuserpage' => 'сохранение книг как страниц участника',
	'right-collectionsaveascommunitypage' => 'сохранение книг как страниц сообщества',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'coll-desc' => '[[Special:Book|Створює книгы]]',
	'coll-book_creator_intro' => "<big>За помочі ''едітора книг'' собі можете створити книгу з вами выбраных вікі-сторінок. Пак собі книгу можете експортовати до різных форматів (наприклад PDF ці ODF) або собі обїднати друковану верзію.</big>",
	'coll-manage_your_book' => 'Управлїня вашой книгы',
	'coll-book_creator_help' => 'Далшы інформації найдете на [[{{MediaWiki:Coll-helppage}}|сторінцї помочі ку книгам]].',
	'coll-start_book_creator' => 'Спустити едітор книг',
	'coll-book_creator_continue' => 'Охабити едітор книг запнутый',
	'coll-book_creator_disable_text' => "''Едітор книг'' буде выпнутый і книга, на котрій робите, буде змазана.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Текст ку едітору книг',
	'coll-collection' => 'Книга',
	'coll-collections' => 'Книгы',
	'coll-exclusion_category_title' => 'Не друковати',
	'coll-print_template_prefix' => 'Друк',
	'coll-print_template_pattern' => '$1/Друк',
	'coll-unknown_subpage_title' => 'Незнама підсторінка',
	'coll-unknown_subpage_text' => 'Тота підсторінка [[Special:Book|книгы]] не єствує',
	'coll-couldnotaddarticle_title' => 'Не подарило ся придати сторінку',
	'coll-couldnotaddarticle_msg' => 'Вікі сторінка не може быти придана.',
	'coll-couldnotremovearticle_title' => 'Сторінка не могла быти одобрана',
	'coll-couldnotremovearticle_msg' => 'Вікі сторінка не могла быти одстранена.',
	'coll-noscript_text' => '<h1>Треба JavaScript!</h1>
<strong>Ваш переглядач не підпорує JavaScript або маєте JavaScript выпнутый.
Тота сторінка не буде правилно фунґовати, покы JavaScript не запнете.</strong>',
	'coll-savedbook_template' => 'уложена книга',
	'coll-your_book' => 'Ваша книга',
	'coll-download_title' => 'Скачати',
	'coll-download_text' => 'Про скачаня книгы собі звольте формат і клікните на клапку.',
	'coll-download_as_text' => 'Верзію у форматї $1 собі можете скачати клікнутём на клапку.',
	'coll-download' => 'Скачати',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Одстранити',
	'coll-show' => 'Вказати',
	'coll-move_to_top' => 'Пересунути горі',
	'coll-move_up' => 'Пересунути высше',
	'coll-move_down' => 'Пересунути ниже',
	'coll-move_to_bottom' => 'Пересунути долов',
	'coll-title' => 'Назва:',
	'coll-subtitle' => 'Підтітул:',
	'coll-contents' => 'Обсяг',
	'coll-drag_and_drop' => 'Порадок статей і капітол можете змінити перетягнутём мышкы',
	'coll-create_chapter' => 'Створити капітолу',
	'coll-sort_alphabetically' => 'Сортовати за алфавітом',
	'coll-rename' => 'Переменовати',
	'coll-new_chapter' => 'Задайте назву новой капітолы',
	'coll-rename_chapter' => 'Задайте нову назву капітолы',
	'coll-no_such_category' => 'Така катеґорія не єствує',
	'coll-notitle_title' => 'Не было можне становити назву сторінкы.',
	'coll-post_failed_title' => 'Хыба пожадавку POST',
	'coll-post_failed_msg' => 'Хыба почас пожадавку POST на сервер $1 ($2).',
	'coll-mwserve_failed_title' => 'Хына выкреслёвачого сервера',
	'coll-mwserve_failed_msg' => 'На выкреслёвачім сервері дішло ку хыбі: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Хыбна одповідь сервера',
	'coll-empty_collection' => 'Порожня книга',
	'coll-revision' => 'Ревізія: $1',
	'coll-save_collection_title' => 'Уложыти і здїляти тоту книгу',
	'coll-save_collection_text' => 'Выберте собі уміщіня:',
	'coll-login_to_save' => 'Кідь хочете укладати книгы про пізнїше схоснованя, просиме, [[Special:UserLogin|приголосьте ся або собі створьте конто]].',
	'coll-personal_collection_label' => 'Особна книга:',
	'coll-community_collection_label' => 'Комунітна книга:',
	'coll-save_collection' => 'Уложыти книгу',
	'coll-save_category' => 'Вшыткы уложены книгы ся придавають [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Сторінка єствує.
Переписати?',
	'coll-overwrite_text' => 'Сторінка з назвов [[:$1]] уж єствує.
Хочете єй нагородити своёв колексіёв?',
	'coll-yes' => 'Гей',
	'coll-no' => 'Нїт',
	'coll-load_overwrite_text' => 'У вашій книзї ся находять даякы сторінкы.
Хочете переписати свою книгу, придати до нёй обсяг або зрушыти дїю з тов книгов?',
	'coll-overwrite' => 'Переписати',
	'coll-append' => 'Придати',
	'coll-cancel' => 'Сторно',
	'coll-update' => 'Обновити',
	'coll-limit_exceeded_title' => 'Книга барзже велика',
	'coll-limit_exceeded_text' => 'Ваша книга є барз велика.
До нёй не є можне веце придавати сторінкы.',
	'coll-rendering_title' => 'Выкреслёваня',
	'coll-rendering_text' => '<p><strong>Просиме чекайте, документ ся рихтує.</strong></p>

<p><strong>Докінчено:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Тота сторінка ся каждых пару секунд автоматічно обновить.
Кідь то не фунґує стисните в переглядачі клапку <i>обновити</i>.</p>',
	'coll-rendering_status' => '<strong>Статус:</strong> $1',
	'coll-rendering_article' => '(сторінка: $1)',
	'coll-rendering_page' => '(сторінка: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Інформація про выкреслёваня сторінкы',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Інформація про выкреслёваня колекції',
	'coll-rendering_finished_title' => 'Выкреслёваня скінчіло',
	'coll-rendering_finished_text' => '<strong>Файл з документом быв створеный.</strong>
Можете собі го <strong>[$1 скачати до свого компютера]</strong>.

Позначкы:
* Не сьте спокійны з резултатом? Попозерайте ся на [[{{MediaWiki:Coll-helppage}}|сторінку помочі ку колекціям]], як го вылїпшыти.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Інформація про выкреслёваня сторінкы',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Інформація про выкреслёваня колекції',
	'coll-notfound_title' => 'Книга не найджена',
	'coll-notfound_text' => 'Не было можне найти сторінку книгы.',
	'coll-download_notfound_title' => 'Файл не найдженый',
	'coll-download_notfound_text' => 'Файл, котрый ся намагаєте скачати, не єствує. Може быв змазаный і є треба го знову створити.',
	'coll-download_failed_title' => 'Хыба почас скачаня',
	'coll-download_failed_text' => 'Почас скачаня файлу дішло ку хыбі: $1',
	'coll-is_cached' => '<ul><li>Была найджена кешована верзія того документу, также не было треба выкреслёвати. <a href="$1">Вынутити нове выкреслїня.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблоны в катеґорії [[:Category:$1|$1]] были выключены.',
	'coll-blacklisted-templates' => '* Шаблоны в чорному списку [[:$1]] были выключены.',
	'coll-return_to_collection' => '<p>Назад до <a href="$1">$2</a></p>',
	'coll-book_title' => 'Обїднати як друковану книгу',
	'coll-book_text' => 'Обтримати друковану книгу од нашого партнера.',
	'coll-order_from_pp' => 'Нагляд книгы средством {{grammar:2sg|$1}}',
	'coll-about_pp' => 'О {{grammar:7sg|$1}}',
	'coll-invalid_podpartner_title' => 'Неплатный POD-партнер',
	'coll-invalid_podpartner_msg' => 'Зволеный POD-партнер про друка на пожаданя не є платный.
Контактуйте свого адміністратора MediaWiki.',
	'coll-license' => 'Ліценція',
	'coll-return_to' => 'Навернутя до [[:$1]]',
	'coll-more_info' => 'Указати далшы інформації',
	'coll-hide_info' => 'Сховати інформацію',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Обїднавкы од PediaPress',
	'coll-suggest_title' => 'Пропонованы сторінкы про вашу книгу',
	'coll-suggest_intro_text' => 'Пропозіції были выбраны подля сторінок, котры уж в книзї маєте.
Список ся актуалізує по каждім клікнутю на клапкы одобрати і придати.',
	'coll-suggested_articles' => 'Пропозіції',
	'coll-suggest_reset_bans' => 'обновити',
	'coll-suggest_reset_bans_tooltip' => 'Указати скоре одстранены пропозіції',
	'coll-suggest_add_selected' => 'Придати выбраны сторінкы',
	'coll-suggest_ban_selected' => 'Одстранити выбраны сторінкы',
	'coll-suggest_your_book' => 'Ваша книга',
	'coll-suggest_show' => 'вказати',
	'coll-suggest_ban_tooltip' => 'Одстранити тоту сторінку із списку пропозіцій',
	'coll-suggest_article_ban' => 'Сторінка <strong>$1</strong> вылучена з пропозіцій ($2).',
	'coll-suggest_article_add' => 'Сторінка <strong>$1</strong> придана до вашой книгы ($2).',
	'coll-suggest_article_remove' => 'Сторінка <strong>$1</strong> вылучена до вашой книгы ($2).',
	'coll-suggest_undo_tooltip' => 'Вернути тоту дїю назад',
	'coll-suggest_undo' => 'вернути назад',
	'coll-load_local_book' => 'Продовжыти в створёваню книгы %TITLE%,  котра обсягує %NUMPAGES% сторінок вікі, можете клікнути на ОК. Клікнутём на Сторно єй змажете і зачнете з порожнёв книгов.',
	'right-collectionsaveasuserpage' => 'Укладаня книг як хосновательскых сторінок',
	'right-collectionsaveascommunitypage' => 'Укладаня книг як сторінок комуніты',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'coll-desc' => '[[Special:Book|Кинигэлэри айар]]',
	'coll-book_creator_intro' => '!<big>"Кинигэ маастарын" режимигэр киирэн бэйэҥ талбыт биики сирэйдэргиттэн турар кинигэ оҥоруоххун сөп. Бэйэҥ кинигэлэргин араас формаатынан экспортыаххын сөп (холобур, PDF эбэтэр ODF), эбэтэр бэчээттэммит барылын сакаастыаххытын сөп.</big>',
	'coll-manage_your_book' => 'Кинигэҥ туруорууларын салайыы',
	'coll-book_creator_help' => 'Сиһилии [[{{MediaWiki:Coll-helppage}}|кинигэ туһунан көмө сирэйи]] көр.',
	'coll-start_book_creator' => 'Кинигэ таҥааччыны холбуурга',
	'coll-book_creator_continue' => 'Кинигэни оҥорооччуну салгыы туһаныы',
	'coll-book_creator_disable_text' => '"Кинигэ оҥорооччу" араарыллыа, билигин оҥоро олорор кинигэҥ сотуллуо.',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Кинигэ режимин тиэкиһэ',
	'coll-collection' => 'Кинигэ',
	'coll-collections' => 'Кинигэлэр',
	'coll-exclusion_category_title' => 'Бэчээккэ ыытыллыбат',
	'coll-print_template_prefix' => 'Бэчээт',
	'coll-print_template_pattern' => '$1/Бэчээт',
	'coll-unknown_subpage_title' => 'Биллибэт алын сирэй (подстраница)',
	'coll-unknown_subpage_text' => '[[Special:Book|Кинигэҕэ]] бу сирэй суох',
	'coll-couldnotaddarticle_title' => 'Ыстатыйа кыайан эбиллибэтэ',
	'coll-couldnotaddarticle_msg' => 'Бу ыстатыйа кыайан эбиллэр кыаҕа суох.',
	'coll-couldnotremovearticle_title' => 'Ыстатыйа кыайан сотуллубата',
	'coll-couldnotremovearticle_msg' => 'Бу ыстатыйа сотуллар кыаҕа суох.',
	'coll-noscript_text' => '<h1>JavaScript ирдэнэр!</h1>
<strong>Эн брааузерыҥ JavaScript`ы өйөөбөт эбит эбэтэр JavaScript араарыллыбыт. Бу сирэй JavaScript холбоммотох буоллаҕына сөпкө үлэлиэ уонна көстүө суоҕа.</strong>',
	'coll-savedbook_template' => 'уларытыыта_бигэргэтиллибит_кинигэ',
	'coll-your_book' => 'Эн кинигэҥ',
	'coll-download_title' => 'Хачайдаа',
	'coll-download_text' => 'Кинигэҕин киллэрэргэ формаатын ый уонна анал тимэҕи баттаа.',
	'coll-download_as_text' => '$1 форматтаах кинигэни киллэрэргэ тимэҕи баттаа.',
	'coll-download' => 'Хачайдаа',
	'coll-format_label' => 'Формаата:',
	'coll-remove' => 'Сот',
	'coll-show' => 'Көрдөр',
	'coll-move_to_top' => 'Үөһэ таһаар',
	'coll-move_up' => 'Арыый үөһэ таһаар',
	'coll-move_down' => 'Арыый аллара түһэр',
	'coll-move_to_bottom' => 'Олох аллара түһэр',
	'coll-title' => 'Аата:',
	'coll-subtitle' => 'Аатын быһаарыы:',
	'coll-contents' => 'Иһинээҕитэ',
	'coll-drag_and_drop' => 'Сирэйдэри уонна сирэйдэр бөлөхтөрүн бэрээдэктииргэ мышканнан туһан',
	'coll-create_chapter' => 'Баһы (главааны) оҥоруу',
	'coll-sort_alphabetically' => 'Алпабыытынан наардааһын',
	'coll-rename' => 'Аатын уларытыы',
	'coll-new_chapter' => 'Саҥа бас (глава) аатын киллэр',
	'coll-rename_chapter' => 'Түһүмэх (глава) саҥа аатын киллэрии',
	'coll-no_such_category' => 'Маннык категория суох',
	'coll-notitle_title' => 'Сирэй аата кыайан биллибэтэ.',
	'coll-post_failed_title' => 'POST-ыйытык толоруллубата',
	'coll-post_failed_msg' => 'Манна $1 анаммыт POST-ыйытык толоруллубата ($2).',
	'coll-mwserve_failed_title' => 'Render сиэрбэрэ сыыһалаах',
	'coll-mwserve_failed_msg' => 'Отрисовка сиэрбэригэр алҕас таҕыста: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Сиэрбэр эппиэтин алҕаһа',
	'coll-empty_collection' => 'Кураанах кинигэ',
	'coll-revision' => 'Барыл: $1',
	'coll-save_collection_title' => 'Кинигэни бигэргэтэргэ уонна дьоҥҥо көстөр гынарга',
	'coll-save_collection_text' => 'Кинигэҥ миэстэтин тал:',
	'coll-login_to_save' => 'Кинигэни кэлин туһанаары гынар буоллаххына, бука диэн, [[Special:UserLogin|ааккын эт эбэтэр саҥа аатта бэлиэтээ]].',
	'coll-personal_collection_label' => 'Тус бэйэ кинигэтэ:',
	'coll-community_collection_label' => 'Бөлөх кинигэтэ:',
	'coll-save_collection' => 'Уларытыыларын бигэргэт',
	'coll-save_category' => 'Киллэриллэр кинигэлэр бары бу категорияҕа киирэллэр: [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Маннык сирэй баар эбит.
Хос суруттараҕын дуо?',
	'coll-overwrite_text' => 'Маннык [[:$1]] ааттаах сирэй баар эбит.
Ол эн кинигэҕинэн солбуллуон баҕараҕын дуо?',
	'coll-yes' => 'Сөп',
	'coll-no' => 'Суох',
	'coll-load_overwrite_text' => 'Кинигэҕэр хас да сирэй баар эбит.
Баар кинигэни хос суруттараары, саҥа матырыйаалы эбээри гвнаҕын дуу, эбэтэр кинигэни сурутууну тохтотоҕун дуу?',
	'coll-overwrite' => 'Хос суруттар',
	'coll-append' => 'Эбэн биэр',
	'coll-cancel' => 'Тохтот',
	'coll-update' => 'Саҥардан биэр',
	'coll-limit_exceeded_title' => 'Наһаа улахан эбит',
	'coll-limit_exceeded_text' => 'Кинигэ наһаа улахан.
Сирэй эбэр сатаммат.',
	'coll-rendering_title' => 'Оҥоруу',
	'coll-rendering_text' => '<p><strong>Бука диэн кэтэс, оҥоһулла турар.</strong></p>

<p><strong>Үлэ хаамыыта:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Бу сирэй аҕыйах сөкүүндэҕэ биирдэ уларыйыахтаах.
Уларыйбат буоллаҕына брааузерыҥ "саҥардыы" тимэҕин баттаа.</p>',
	'coll-rendering_status' => '<strong>Стаатуһа:</strong> $1',
	'coll-rendering_article' => '(ыстатыйа: $1)',
	'coll-rendering_page' => '(сирэй: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Сирэй туһунан тиэкиһи ортисовкалааһын',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Кэллиэксийэ туһунан тиэкис отрисовката (Rendering)',
	'coll-rendering_finished_title' => 'Оҥоһулунна',
	'coll-rendering_finished_text' => '<strong>Дөкүмүөн билэтэ оҥоһулунна.</strong>
Бэйэ көмпүүтэригэр <strong>[$1 билэни хачайдаа]</strong>.

Биллэрии:
* Оччото суох дуо? [[{{MediaWiki:Coll-helppage}}|Кинигэлэри оҥорорго көмөҕө]] тупсарыы туһунан суруллубут.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Сирэй туһунан тиэкиһи ортисовкалааһын',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Кэллиэксийэ туһунан тиэкис отрисовката',
	'coll-notfound_title' => 'Кинигэ көстүбэтэ',
	'coll-notfound_text' => 'Кинигэ сирэйин булар табыллыбата.',
	'coll-download_notfound_title' => 'Билэ көстүбэтэ',
	'coll-download_notfound_text' => 'Киллэрэ сатыыр билэҥ суох. Баҕар сотуллубута буолуо, оччоҕо кинини бастаан төннөрүөххэ наада.',
	'coll-download_failed_title' => 'Хачайдааһын кэмигэр алҕас тахсыбыт',
	'coll-download_failed_text' => 'Билэни хачайдыыр кэмҥэ алҕас таҕыста: $1',
	'coll-is_cached' => '<ul><li>Бу дөкүмүөн кээштэммит барыла баар эбит, отрисовка наадата суох буолан оҥоһуллубата. <a href="$1">Ол да буоллар отрисовканы оҥорорго.</a></li></ul>',
	'coll-excluded-templates' => '* [[:Категория:$1|$1]] категорияттан халыыптар сотулуннулар.',
	'coll-blacklisted-templates' => 'Халыыптар [[:$1]] хара тиһиктэн (чёрный список) сотулуннулар.',
	'coll-return_to_collection' => '<p>Манна төнүн <a href="$1">$2</a></p>',
	'coll-book_title' => 'Бэчээттэммит кинигэни сакаастааһын',
	'coll-book_text' => 'Бэчээттэммит кинигэни биһиги партнербутуттан ылыы:',
	'coll-order_from_pp' => 'Эрдэ көрүү, бу нөҥүө - $1',
	'coll-about_pp' => '$1 туһунан',
	'coll-invalid_podpartner_title' => 'Дьиҥэ суох POD-партнёр',
	'coll-invalid_podpartner_msg' => 'Дьиҥэ суох POD-партнёр эбит.
Бука диэн MediaWiki дьаһабылын кытта кэпсэт.',
	'coll-license' => 'Лицензия',
	'coll-return_to' => 'Манна төннүү: [[:$1]]',
	'coll-more_info' => 'Өссө эбии көрдөр',
	'coll-hide_info' => 'Кистээ',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress сакаастааһын туһунан',
	'coll-suggest_title' => 'Эн кинигэҕэр анаан бэриллэр сирэйдэр',
	'coll-suggest_intro_text' => 'Саҥа этиилэр билиҥҥи биики-сирэйдэриҥ бөлөхтөрүгэр олоҕуран бэриллэллэр.
Эбэр-көҕүрэтэр тимэхтэри баттаатаххына тиһик саҥардыллан биэрэр.',
	'coll-suggested_articles' => 'Этии киллэрии',
	'coll-suggest_reset_bans' => 'саҥаттан',
	'coll-suggest_reset_bans_tooltip' => 'Урут сотуллубут этиилэри көрдөрүү',
	'coll-suggest_add_selected' => 'Талбыт сирэйдэрбин эп',
	'coll-suggest_ban_selected' => 'Талбыт сирэйдэрбин сот',
	'coll-suggest_your_book' => 'Эн кинигэҥ',
	'coll-suggest_show' => 'көрдөрүү',
	'coll-suggest_ban_tooltip' => 'Саҥа этиилэр тиһиктэриттэн бу сирэйи сот',
	'coll-suggest_article_ban' => '<strong>$1</strong> сирэй саҥа этиилэр ($2) тиһиктэриттэн сотулунна.',
	'coll-suggest_article_add' => 'Эн ($2) кинигэҕэр <strong>$1</strong> сирэй эбилиннэ.',
	'coll-suggest_article_remove' => 'Эн ($2) кинигэҕиттэн <strong>$1</strong> сирэй сотулунна.',
	'coll-suggest_undo_tooltip' => 'Бу дьайыыны төннөрөргө',
	'coll-suggest_undo' => 'төннөрөргө',
	'coll-load_local_book' => '«Сөп» диэни баттаан, %TITLE% ахсааннаах сирэйдээх кинигэҕэр салгыы үлэлээ. «Төннөр» диэни баттаан, ол кинигэни сотон баран, саҥа кинигэни саҕалаа.',
	'right-collectionsaveasuserpage' => 'кинигэлэри кытааччы тус сирэйин курдук хаалларыы',
	'right-collectionsaveascommunitypage' => 'кинигэлэри бөлөх тус сирэйин курдук хаалларыы',
);

/** Sardinian (Sardu)
 * @author Andria
 */
$messages['sc'] = array(
	'coll-collection' => 'Libru',
	'coll-collections' => 'Libros',
	'coll-print_template_prefix' => 'Imprenta',
	'coll-print_template_pattern' => '$1/Imprenta',
	'coll-show' => 'Ammustra',
	'coll-yes' => 'Eja',
	'coll-suggest_show' => 'ammustra',
);

/** Sicilian (Sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'coll-collection' => 'Libbru',
	'coll-collections' => 'Libbra',
	'coll-savedbook_template' => 'libbru_sarvatu',
	'coll-show' => 'Ammustra',
	'coll-title' => 'Tìtulu:',
	'coll-rename' => 'Cancia nomu',
	'coll-empty_collection' => 'Libbru vacanti',
	'coll-save_collection' => 'Sarva libbru',
	'coll-yes' => 'Sè',
	'coll-no' => 'Nò',
	'coll-limit_exceeded_title' => "Libbru troppu 'ranni",
	'coll-limit_exceeded_text' => "Lu tò libbru è troppu 'ranni. Nun ci pò metteri autri paggini.",
	'coll-rendering_page' => '(paggina: $1)',
	'coll-suggest_show' => 'ammustra',
);

/** Serbo-Croatian (Srpskohrvatski / Српскохрватски)
 * @author OC Ripper
 */
$messages['sh'] = array(
	'coll-show' => 'Prikaži',
);

/** Sinhala (සිංහල)
 * @author බිඟුවා
 */
$messages['si'] = array(
	'coll-manage_your_book' => 'ඔබේ පොත හසුරවන්න',
	'coll-collection' => 'පොත',
	'coll-collections' => 'පොත්',
	'coll-print_template_prefix' => 'මුද්‍රණය කරන්න',
	'coll-your_book' => 'ඔබේ පොත',
	'coll-download_title' => 'භාගත කිරීම',
	'coll-download' => 'භාගත කිරීම',
	'coll-remove' => 'ඉවත් කරන්න',
	'coll-show' => 'පෙන්වන්න',
	'coll-title' => 'ශීර්ෂය:',
	'coll-subtitle' => 'උප ශීර්ෂය:',
	'coll-contents' => 'පටුන',
	'coll-create_chapter' => 'මාතෘකාවක් නිර්මාණය කරන්න',
	'coll-sort_alphabetically' => 'අකාරාදි පිළිවෙලට සකසන්න',
	'coll-rename' => 'නැවත නාමකාරණය',
	'coll-cancel' => 'අත් හරින්න',
	'coll-update' => 'යාවත්කාලීන කළ',
	'coll-suggested_articles' => 'යෝජනා',
	'coll-suggest_reset_bans' => 'ප්‍රත්‍යාරම්භ කරන්න',
	'coll-suggest_show' => 'පෙන්වන්න',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Mormegil
 */
$messages['sk'] = array(
	'coll-desc' => '[[Special:Book|Tvorba kníh]]',
	'coll-book_creator_intro' => "<big>V režime ''tvorba knihy'' si môžete vytvoriť knihu zo stránok wiki, ktoré si zvolíte. Knihu môžete exportovať v rozličných formátoch (napr. PDF alebo ODF) alebo si objednať tlačenú kópiu.</big>",
	'coll-manage_your_book' => 'Spravovať vašu knihu',
	'coll-book_creator_help' => 'Ďalšie informácie nájdete na [[{{MediaWiki:Coll-helppage}}|stránke Pomocníka o knihách]].',
	'coll-start_book_creator' => 'Spustiť tvorbu knihy',
	'coll-book_creator_continue' => 'Pokračovať v používaní tvorby knihy',
	'coll-book_creator_disable_text' => "''Tvorba knihy'' bude vypnutá a kniha, na ktorej pracujete bude odstránená.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Text režimu knihy',
	'coll-collection' => 'Kniha',
	'coll-collections' => 'Knihy',
	'coll-exclusion_category_title' => 'Pri tlačení vynechať',
	'coll-print_template_prefix' => 'Tlačiť',
	'coll-print_template_pattern' => '$1/Tlač',
	'coll-unknown_subpage_title' => 'Neznáma podstránka',
	'coll-unknown_subpage_text' => 'Táto podstránka [[Special:Book|Knihy]] neexistuje',
	'coll-couldnotaddarticle_title' => 'Nepodarilo sa pridať stránku wiki',
	'coll-couldnotaddarticle_msg' => 'Wiki stránku nebolo možné pridať.',
	'coll-couldnotremovearticle_title' => 'Wiki stránku nebolo možné odstrániť',
	'coll-couldnotremovearticle_msg' => 'Wiki stránku nebolo možné odstrániť.',
	'coll-noscript_text' => '<h1>Vyžaduje sa JavaScript!</h1>
<strong>Váš prehliadač nepodporuje JavaScript alebo máte JavaScript vypnutý.
Táto stránka nebude správne fungovať ak nezapnete JavaScript.</strong>',
	'coll-savedbook_template' => 'uložená_kniha',
	'coll-your_book' => 'Vaša kniha',
	'coll-download_title' => 'Stiahnuť',
	'coll-download_text' => 'Po zvolení formátu a kliknutí na tlačidlo si môžete svoju knihu stiahnuť.',
	'coll-download_as_text' => 'Svoju knihu vo formáte $1 môžete stiahnuť kliknutím na tlačidlo.',
	'coll-download' => 'Stiahnuť',
	'coll-format_label' => 'Formát:',
	'coll-remove' => 'Odstrániť',
	'coll-show' => 'Zobraziť',
	'coll-move_to_top' => 'Presunúť na vrch',
	'coll-move_up' => 'Presunúť vyššie',
	'coll-move_down' => 'Presunúť nižšie',
	'coll-move_to_bottom' => 'Presunúť na spodok',
	'coll-title' => 'Názov:',
	'coll-subtitle' => 'Podnázov:',
	'coll-contents' => 'Obsah',
	'coll-drag_and_drop' => 'Zmeniť poradie článkov a kapitol môžete pomocou ťahaj&pusť.',
	'coll-create_chapter' => 'Vytvoriť kapitolu',
	'coll-sort_alphabetically' => 'Zoradiť abecedne',
	'coll-rename' => 'Premenovať',
	'coll-new_chapter' => 'Zadajte názov novej kapitoly',
	'coll-rename_chapter' => 'Zadajte nový názov kapitoly',
	'coll-no_such_category' => 'Taká kategória neexistuje',
	'coll-notitle_title' => 'Názov stránky nebolo možné určiť.',
	'coll-post_failed_title' => 'Chyba požiadavky POST',
	'coll-post_failed_msg' => 'Chyba požiadavky POST na $1 ($2).',
	'coll-mwserve_failed_title' => 'Chyba vykresľovacieho servera',
	'coll-mwserve_failed_msg' => 'Vyskytla sa chyba vykresľovacieho servera: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Chybná odpoveď servera',
	'coll-empty_collection' => 'Prázdna kniha',
	'coll-revision' => 'Revízia: $1',
	'coll-save_collection_title' => 'Uložiť a zdieľať svoju knihu',
	'coll-save_collection_text' => 'Vyberte umiestnenie:',
	'coll-login_to_save' => 'Ak chcete ukladať knihy pre neskoršie použitie, prosím, [[Special:UserLogin|prihláste sa alebo si vytvorte účet]].',
	'coll-personal_collection_label' => 'Osobná kniha:',
	'coll-community_collection_label' => 'Komunitná kniha:',
	'coll-save_collection' => 'Uložiť knihu',
	'coll-save_category' => 'Všetky knihy sa pridávajú do kategórie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Stránka existuje. Prepísať?',
	'coll-overwrite_text' => 'Stránka s názvom [[:$1]] už existuje.
Chcete ju nahradiť svojou kolekciou?',
	'coll-yes' => 'Áno',
	'coll-no' => 'Nie',
	'coll-load_overwrite_text' => 'Vo vašej knihe sa už nachádzajú stránky.
Chcete prepísať svoju existujúcu knihu, pridať do nej obsah alebo zrušiť načítanie tejto knihy?',
	'coll-overwrite' => 'Prepísať',
	'coll-append' => 'Pridať',
	'coll-cancel' => 'Zrušiť',
	'coll-update' => 'Aktualizovať',
	'coll-limit_exceeded_title' => 'Kniha je príliš veľká',
	'coll-limit_exceeded_text' => 'Vaša kniha je príliš veľká.
Nie je možné pridať ďalšie stránky.',
	'coll-rendering_title' => 'Vykresľovanie',
	'coll-rendering_text' => '<p><strong>Prosím, čakajte, kým sa vytvorí dokument.</strong></p>

<p><strong>Priebeh:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Táto stránka by sa mala vždy po niekoľkých sekundách obnoviť.
Ak to nefunguje, stlačte prosím tlačidlo obnoviť vo vašom prehlidači.</p>',
	'coll-rendering_status' => '<strong>Stav:</strong> $1',
	'coll-rendering_article' => '(wiki stránka: $1)',
	'coll-rendering_page' => '(stránka: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Vykresľovanie info textu stránky',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Vykresľovanie info textu kolekcie',
	'coll-rendering_finished_title' => 'Vykresľovanie je dokončené',
	'coll-rendering_finished_text' => '<strong>Súbor dokumentu bol vytvorený.</strong>
Môžete ho <strong>[$1 stiahnuť]</strong> na svoj počítač.

Poznámky:
* Nie ste spokojný s výstupom? Spôsoby možnej nápravy nájdete na [[{{MediaWiki:Coll-helppage}}|stránke pomocníka o kolekciách]].',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Vykresľovanie info textu stránky',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Vykresľovanie info textu kolekcie',
	'coll-notfound_title' => 'Kniha nenájdená',
	'coll-notfound_text' => 'Nebolo možné nájsť stránku knihy.',
	'coll-download_notfound_title' => 'Súbor nenájdený',
	'coll-download_notfound_text' => 'Súbor, ktorý sa pokúšate stiahnuť neexistuje: Možno bol zamzaný a je potrebné ho znova vytvoriť.',
	'coll-download_failed_title' => 'Chyba počas sťahovania',
	'coll-download_failed_text' => 'Vyskytla sa chyba počas sťahovania súboru: $1',
	'coll-is_cached' => '<ul><li>Bola nájdená verzia dokumentu vo vyrovnávacej pamäti, takže vykresľovanie nebolo potrebné. <a href="$1">Vynútiť opätovné vykreslenie.</a></li></ul>',
	'coll-excluded-templates' => '* Boli vynechané šablóny v kategórii [[:Category:$1|$1]].',
	'coll-blacklisted-templates' => '* Boli vynechané šablóny na čiernej listine [[:$1]].',
	'coll-return_to_collection' => '<p>Vrátiť sa na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Objednať ako tlačenú knihu',
	'coll-book_text' => 'Môžete si objednať tlačenú knihu od jedného z našich partnerov, ktorí robia tlač na vyžiadanie:',
	'coll-order_from_pp' => 'Náhľad pomocou $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Neplatný POD partner',
	'coll-invalid_podpartner_msg' => 'Zadaný POD partner je neplatný.
Prosím, kontaktujte svojho správcu MediaWiki.',
	'coll-license' => 'Licencia',
	'coll-return_to' => 'Návrat na [[:$1]]',
	'coll-more_info' => 'Zobraziť viac informácií',
	'coll-hide_info' => 'Skryť informácie',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informácie o objednávkach PediaPress',
	'coll-suggest_title' => 'Navrhované stránky pre vašu knihu',
	'coll-suggest_intro_text' => 'Návrhy sa robia na základe stránok, ktoré sa momentálne nachádzajú vo vašej knihe.
Zoznam sa aktualizuje vždy po kliknutí na tlačidlo Pridať alebo Odstrániť.',
	'coll-suggested_articles' => 'Návrhy',
	'coll-suggest_reset_bans' => 'obnoviť',
	'coll-suggest_reset_bans_tooltip' => 'Zobraziť v minulosti odstránené návrhy',
	'coll-suggest_add_selected' => 'Pridať vybrané stránky',
	'coll-suggest_ban_selected' => 'Odstrániť vybrané stránky',
	'coll-suggest_your_book' => 'Vaša kniha',
	'coll-suggest_show' => 'zobraziť',
	'coll-suggest_ban_tooltip' => 'Odstrániť túto stránku zo zoznamu návrhov',
	'coll-suggest_article_ban' => 'Stránka <strong>$1</strong> bola odstránená z návrhov ($2).',
	'coll-suggest_article_add' => 'Stránka <strong>$1</strong> bola pridaná do vašej knihy ($2).',
	'coll-suggest_article_remove' => 'Stránka <strong>$1</strong> bola odstránená z vašej knihy ($2).',
	'coll-suggest_undo_tooltip' => 'Vrátiť túto operáciu späť',
	'coll-suggest_undo' => 'vrátiť',
	'coll-load_local_book' => 'Kliknutím na tlačidlo OK pokračujte vo vašej knihe %TITLE%, ktorá obsahuje %NUMPAGES% stránok wiki. Kliknutím na tlačidlo Zrušiť ju vymažete a začnete s prázdnou knihu.',
	'right-collectionsaveasuserpage' => 'Uložiť knihy ako používateľskú stránku',
	'right-collectionsaveascommunitypage' => 'Uložiť knihy ako komunitnú stránku',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 * @author Freakolowsky
 * @author Smihael
 */
$messages['sl'] = array(
	'coll-desc' => '[[Special:Book|Ustvari e-knjige]]',
	'coll-book_creator_intro' => "<big>Z ''Ustvarjalcem knjig'' lahko ustvarite knjigo, ki vsebuje wiki strani po vaši izbiri. Knjigo lahko nato izvozite v različnih oblikah (na primer PDF ali ODF), ali pa naročite natisnjen izvod.</big>",
	'coll-manage_your_book' => 'Uredite vašo knjigo',
	'coll-book_creator_help' => 'Glej [[{{MediaWiki:Coll-helppage}}|pomoč o knjigah]] za več informacij.',
	'coll-start_book_creator' => 'Zaženi ustvarjalca knjig',
	'coll-book_creator_continue' => 'Nadaljuj uporabo ustvarjalca knjig',
	'coll-book_creator_disable_text' => "''Ustvarjalec knjig'' bo onemogočen in knjiga katero sestavljate bo odstranjena.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Besedilo ustvarjalca knjig',
	'coll-collection' => 'Knjiga',
	'coll-collections' => 'Knjige',
	'coll-exclusion_category_title' => 'Izključi v tiskovini',
	'coll-print_template_prefix' => 'Natisni',
	'coll-print_template_pattern' => '$1/Natisni',
	'coll-unknown_subpage_title' => 'Neznana podstran',
	'coll-unknown_subpage_text' => 'Ta podstran [[Special:Book|knjige]] ne obstaja',
	'coll-couldnotaddarticle_title' => 'Wiki stran ni mogoče dodati',
	'coll-couldnotaddarticle_msg' => 'Wiki stran ni bilo mogoče dodati.',
	'coll-couldnotremovearticle_title' => 'Wiki stran ni mogoče odstraniti',
	'coll-couldnotremovearticle_msg' => 'Wiki stran ni bilo mogoče odstraniti.',
	'coll-noscript_text' => '<h1>Zahtevan je JavaScript!</h1>
<strong>Vaš brskalnik ne podpira JavaScripta ali je podpora zanj izključena.
Ta stran ne bo delovala pravilno bren omogočenega JavaScripta.</strong>',
	'coll-savedbook_template' => 'shranjena_knjiga',
	'coll-your_book' => 'Vaša knjiga',
	'coll-download_title' => 'Prenesi',
	'coll-download_text' => 'Če želite prenesti knjigo, izberite obliko in kliknite gumb.',
	'coll-download_as_text' => 'Za prenos vaše knjige v obliki $1 kliknite gumb.',
	'coll-download' => 'Prenesi',
	'coll-format_label' => 'Oblika:',
	'coll-remove' => 'Odstrani',
	'coll-show' => 'Pokaži',
	'coll-move_to_top' => 'Premakni na vrh',
	'coll-move_up' => 'Premakni gor',
	'coll-move_down' => 'Premakni dol',
	'coll-move_to_bottom' => 'Premakni na dno',
	'coll-title' => 'Naslov:',
	'coll-subtitle' => 'Podnaslov:',
	'coll-contents' => 'Vsebina',
	'coll-drag_and_drop' => 'Uporabite metodo povleci in spusti, da preuredite vrstni red wiki-strani in poglavij',
	'coll-create_chapter' => 'Ustvari poglavje',
	'coll-sort_alphabetically' => 'Razvrsti po abecedi',
	'coll-rename' => 'Preimenuj',
	'coll-new_chapter' => 'Vnesite ime za novo poglavje',
	'coll-rename_chapter' => 'Vnesite novo ime za poglavje',
	'coll-no_such_category' => 'Ne obstaja nobena taka kategorija',
	'coll-notitle_title' => 'Naslov strani ni bi bilo mogoče določiti.',
	'coll-post_failed_title' => 'Zahteva POST ni uspela',
	'coll-post_failed_msg' => 'Zahteva POST za $1 ni uspela ($2).',
	'coll-mwserve_failed_title' => 'Napaka na prevajalnem strežniku',
	'coll-mwserve_failed_msg' => 'Na prevajalnem strežniku je prišlo do napake: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Strežnik je vrnil napako',
	'coll-empty_collection' => 'Prazna knjiga',
	'coll-revision' => 'Redakcija: $1',
	'coll-save_collection_title' => 'Shranite in delite vaše knjige',
	'coll-save_collection_text' => 'Izberite mesto za shranjevanje vaše knjige:',
	'coll-login_to_save' => 'Če želite shraniti knjige za kasnejšo uporabo, se prosimo [[Special:UserLogin|prijavite ali ustvarite račun]].',
	'coll-personal_collection_label' => 'Osebna knjiga:',
	'coll-community_collection_label' => 'Skupna knjiga:',
	'coll-save_collection' => 'Shrani knjigo',
	'coll-save_category' => 'Vse shranjene knjige so dodane k kategoriji [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]',
	'coll-overwrite_title' => 'Stran obstaja.
Jo prepišem?',
	'coll-overwrite_text' => 'Stran z imenom [[:$1]] že obstaja. 
Ali želite, da se nadomesti z vašo knjigo?',
	'coll-yes' => 'Da',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Vaša knjiga že vsebuje nekaj strani.
Ali želite prepisati vsebino vaše knjige, dodati vsebino ali prekiniti nalaganje te knjige.',
	'coll-overwrite' => 'Prepiši',
	'coll-append' => 'Pripni',
	'coll-cancel' => 'Prekliči',
	'coll-update' => 'Posodobi',
	'coll-limit_exceeded_title' => 'Knjiga je prevelika',
	'coll-limit_exceeded_text' => 'Vaša knjiga je prevelika.
Ne morete dodati več strani.',
	'coll-rendering_title' => 'Upodabljanje',
	'coll-rendering_text' => '<p><strong>Prosimo, počakajte, da se dokument pripravi.</strong></p>

<p><strong>Napredek:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p> 

<p>Ta stran se samodejno osveži vsakih nekaj sekund.
Če se ne, prosimo, pritisnite gumb za osvežitev znotraj brskalnika.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wiki-stran: $1)',
	'coll-rendering_page' => '(stran: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informativno besedilo prevajalne strani',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informativno besedilo prevajalne zbirke',
	'coll-rendering_finished_title' => 'Upodabljanje končano',
	'coll-rendering_finished_text' => '<strong>Datoteka je bila ustvarjena. [$1 Prenesi datoteko]</strong> na vaš računalnik.

Opombe:
* Niste zadovoljni z ustvarjeno datoteko? Glej [[{{MediaWiki:Coll-helppage}}|stran s pomočjo za razširitev Knjige]] za možnosti izboljšav.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Ustvarjanje informativnega besedila strani',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Ustvarjanje informativnega besedila zbirke',
	'coll-notfound_title' => 'Knjiga ni bila najdena',
	'coll-notfound_text' => 'Stran v knjigi ni bila najdena.',
	'coll-download_notfound_title' => 'Datoteke ni mogoče najti',
	'coll-download_notfound_text' => 'Datoteka, ki jo poskušate prenesti ne obstaja:
Morda je bila izbrisana in jo je potrebno regenerirati.',
	'coll-download_failed_title' => 'Napaka med prenosom',
	'coll-download_failed_text' => 'Pri prenosu datoteke je prišlo do napake: $1',
	'coll-is_cached' => '<ul><li>Najdena je bila shranjena različica tega dokumenta, zato upodabljanje ni bilo potrebno. <a href="$1">Vsili ponovno upodabljanje.</a></li></ul>',
	'coll-excluded-templates' => '* Predloge v kategoriji [[:Category:$1|$1]], so bile izključene.',
	'coll-blacklisted-templates' => '* Predloge na črnem seznamu [[:$1]], so bile izključene.',
	'coll-return_to_collection' => '<p>Vrnitev na: <a href="$1">$2</a></p>',
	'coll-book_title' => 'Naroči kot tiskano knjigo',
	'coll-book_text' => 'Naroči tiskano knjigo od našega partnerja za tisk na zahtevo:',
	'coll-order_from_pp' => 'Predoglej pri $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Neveljaven partner TNZ',
	'coll-invalid_podpartner_msg' => 'Izbran POD partner ni veljaven.
Kontaktirajte vašega MediaWiki skrbnika.',
	'coll-license' => 'Dovoljenje',
	'coll-return_to' => 'Nazaj na [[:$1]]',
	'coll-more_info' => 'Prikaži več informacij',
	'coll-hide_info' => 'Skrij informacije',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress podatki naročila',
	'coll-suggest_title' => 'Predlagane strani za vašo knjigo',
	'coll-suggest_intro_text' => 'Predlogi temeljijo na trenutnem izboru strani wiki v vaši knjigi.
Seznam je posodobljen, ko kliknete na gumbe za dodajanje ali odstranjevanje.',
	'coll-suggested_articles' => 'Predlogi',
	'coll-suggest_reset_bans' => 'ponastavi',
	'coll-suggest_reset_bans_tooltip' => 'Prikaži prejšnje odstranjene predloge',
	'coll-suggest_add_selected' => 'Dodaj izbrane strani',
	'coll-suggest_ban_selected' => 'Odstrani izbrane strani',
	'coll-suggest_your_book' => 'Vaša knjiga',
	'coll-suggest_show' => 'prikaži',
	'coll-suggest_ban_tooltip' => 'Odstrani to stran s seznama predlogov',
	'coll-suggest_article_ban' => 'Stran <strong>$1</strong> je bila odstranjena iz predlogov ($2).',
	'coll-suggest_article_add' => 'Stran <strong>$1</strong> je bila dodana vaši knjigi ($2).',
	'coll-suggest_article_remove' => 'Stran <strong>$1</strong> je bila odstranjena iz vaše knjige ($2).',
	'coll-suggest_undo_tooltip' => 'Razveljavi to dejanje',
	'coll-suggest_undo' => 'razveljavi',
	'coll-load_local_book' => 'Kliknite V redu za nadaljevanje z vašo knjigo %TITLE%, ki vsebuje %NUMPAGES% wikistrani. Kliknite Prekliči za njen izbris in začnite s prazno knjigo.',
	'right-collectionsaveasuserpage' => 'Shranjevanje knjig kot uporabniške strani',
	'right-collectionsaveascommunitypage' => 'Shranjevanje knjig kot strani občestva',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Nikola Smolenski
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Јованвб
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 * @author Обрадовић Горан
 */
$messages['sr-ec'] = array(
	'coll-desc' => '[[Special:Book|Писац књига]]',
	'coll-book_creator_intro' => "<big>Са ''писцем књига'' можете направити књигу која садржи жељене странице са викије. Њу можете сачувати у различитим форматима (нпр. PDF или ODF) или је наручити у штампаном издању.</big>",
	'coll-manage_your_book' => 'Управљање књигама',
	'coll-book_creator_help' => 'Погледајте [[{{MediaWiki:Coll-helppage}}|страницу за помоћ о књигама]] за више информација.',
	'coll-start_book_creator' => 'Покрени писца књига',
	'coll-book_creator_continue' => 'Настави са коришћењем уређивача књига',
	'coll-book_creator_disable_text' => "''Писац књига'' ће бити онемогућен, а књига на којој радите уклоњена.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/текст писца књига',
	'coll-collection' => 'Књига',
	'coll-collections' => 'Књиге',
	'coll-exclusion_category_title' => 'Изузето из штампања',
	'coll-print_template_prefix' => 'Штампање',
	'coll-print_template_pattern' => '$1/штампање',
	'coll-unknown_subpage_title' => 'Непозната подстраница',
	'coll-unknown_subpage_text' => 'Ова подстраница [[Special:Book|књиге]] не постоји.',
	'coll-couldnotaddarticle_title' => 'Додавање странице није успело',
	'coll-couldnotaddarticle_msg' => 'Додавање странице није извршено.',
	'coll-couldnotremovearticle_title' => 'Уклањање странице није успело',
	'coll-couldnotremovearticle_msg' => 'Уклањање странице није извршено.',
	'coll-noscript_text' => '<h1>Потребан је јаваскрипт</h1>
<strong>Ваш прегледач не подржава јаваскрипт или он није омогућен.
Ова страница неће радити исправно без њега.</strong>',
	'coll-savedbook_template' => 'сачувана_књига',
	'coll-your_book' => 'Ваша књига',
	'coll-download_title' => 'Преузимање',
	'coll-download_text' => 'Изаберите жељени формат и кликните на дугме за преузимање.',
	'coll-download_as_text' => 'Кликните на дугме да бисте преузели књигу у формату $1.',
	'coll-download' => 'Преузми',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Уклони',
	'coll-show' => 'Прикажи',
	'coll-move_to_top' => 'Помери на врх',
	'coll-move_up' => 'Помери нагоре',
	'coll-move_down' => 'Помери надоле',
	'coll-move_to_bottom' => 'Помери на дно',
	'coll-title' => 'Наслов:',
	'coll-subtitle' => 'Поднаслов:',
	'coll-contents' => 'Садржај',
	'coll-drag_and_drop' => 'Можете прераспоредити странице и поглавља превлачивши их.',
	'coll-create_chapter' => 'Направи поглавље',
	'coll-sort_alphabetically' => 'Поређај по азбучном реду',
	'coll-rename' => 'Преименуј',
	'coll-new_chapter' => 'Унесите назив новог поглавља:',
	'coll-rename_chapter' => 'Унесите нови назив поглавља:',
	'coll-no_such_category' => 'Нема такве категорије',
	'coll-notitle_title' => 'Наслов ове странице није одређен.',
	'coll-post_failed_title' => 'Захтев POST није успео',
	'coll-post_failed_msg' => 'Захтев POST за $1 није успео ($2).',
	'coll-mwserve_failed_title' => 'Грешка при израђивању',
	'coll-mwserve_failed_msg' => 'Дошло је до грешке при израђивању: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Сервер је одговорио грешком',
	'coll-empty_collection' => 'Књига је празна.',
	'coll-revision' => 'Измена: $1',
	'coll-save_collection_title' => 'Чување и дељење књиге',
	'coll-save_collection_text' => 'Изаберите место за смештање своје књиге:',
	'coll-login_to_save' => 'Ако желите да сачувате књиге за касније, [[Special:UserLogin|пријавите се или отворите налог]].',
	'coll-personal_collection_label' => 'Лична књига:',
	'coll-community_collection_label' => 'Заједничка књига:',
	'coll-save_collection' => 'Сачувај књигу',
	'coll-save_category' => 'Све сачуване књиге су додате у категорију [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Страница већ постоји.
Заменити је?',
	'coll-overwrite_text' => 'Страница с именом [[:$1]] већ постоји.
Желите ли да је замените са својом књигом?',
	'coll-yes' => 'Да',
	'coll-no' => 'Не',
	'coll-load_overwrite_text' => 'Неке странице већ поседујете у својој књизи.
Желите ли да замените текућу књигу, додате нови садржај или поништите учитавање ове књиге?',
	'coll-overwrite' => 'Замени',
	'coll-append' => 'Додај',
	'coll-cancel' => 'Откажи',
	'coll-update' => 'Ажурирај',
	'coll-limit_exceeded_title' => 'Књига је превелика',
	'coll-limit_exceeded_text' => 'Ваша књига је превелика.
Не можете додати још страница.',
	'coll-rendering_title' => 'Израђивање',
	'coll-rendering_text' => '<p><strong>Сачекајте да се документ изгради.</strong></p>

<p><strong>Напредак:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Страница би требало да се освежи за неколико секунди, у зависности од количине садржаја.
Ако се то не догоди, кликните на дугме за поновно учитавање странице у свом прегледачу.</p>',
	'coll-rendering_status' => '<strong>Стање:</strong> $1',
	'coll-rendering_article' => '(страница викија: $1)',
	'coll-rendering_page' => '(страница: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/израђивање текста',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/израђивање збирног текста',
	'coll-rendering_finished_title' => 'Израђивање је завршено',
	'coll-rendering_finished_text' => '<strong>Документ је направљен.</strong>
<strong>[$1 Преузмите датотеку]</strong> на свој рачунар.

Напомена:
* Незадовољни сте резултатом? Погледајте [[{{MediaWiki:Coll-helppage}}|страницу за помоћ о књигама]] где ћете наћи објашњење како да га побољшате.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/израђивање текста',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/израђивање збирног текста',
	'coll-notfound_title' => 'Књига није пронађена',
	'coll-notfound_text' => 'Страница књиге није пронађена.',
	'coll-download_notfound_title' => 'Датотека није пронађена',
	'coll-download_notfound_text' => 'Датотека коју желите да преузмете не постоји.
Можда је обрисана и потребно је поновно стварање.',
	'coll-download_failed_title' => 'Грешка при преузимању',
	'coll-download_failed_text' => 'Дошло је до грешке при преузимању датотеке: $1',
	'coll-is_cached' => '<ul><li>Пронађено је раније издање документа. Израђивање није неопходно.
<a href="$1">Приморај поновно израђивање.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблони у категорији [[:Category:$1|$1]] су искључени.',
	'coll-blacklisted-templates' => '* Шаблони на црној листи [[:$1]] су искључени.',
	'coll-return_to_collection' => '<p>Назад на <a href="$1">$2</a></p>',
	'coll-book_title' => 'Наручивање у штампаном издању',
	'coll-book_text' => 'Поручите штампану књигу од нашег партнера.',
	'coll-order_from_pp' => 'Прегледај са $1-ом',
	'coll-about_pp' => 'О $1-у',
	'coll-invalid_podpartner_title' => 'Неисправан партнер за штампање на захтев',
	'coll-invalid_podpartner_msg' => 'Изабрани партнер за штампање на захтев је неисправан.
Контактирајте администратора Медијавикија.',
	'coll-license' => 'Лиценца',
	'coll-return_to' => 'Назад на [[:$1]]',
	'coll-more_info' => 'Прикажи више података',
	'coll-hide_info' => 'Сакриј податке',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/подаци о наручивању на Педијапресу',
	'coll-suggest_title' => 'Предложене странице за вашу књигу',
	'coll-suggest_intro_text' => 'Предлози су засновани на текућем скупу страница у вашој књизи.
Списак се ажурира сваки пут када кликнете на дугмиће за додавање и уклањање.',
	'coll-suggested_articles' => 'Предлози',
	'coll-suggest_reset_bans' => 'поништи',
	'coll-suggest_reset_bans_tooltip' => 'Прикажи скорашње уклоњене предлоге',
	'coll-suggest_add_selected' => 'Додај изабране странице',
	'coll-suggest_ban_selected' => 'Уклони изабране странице',
	'coll-suggest_your_book' => 'Ваша књига',
	'coll-suggest_show' => 'прикажи',
	'coll-suggest_ban_tooltip' => 'Уклоните ову страницу са списка предлога',
	'coll-suggest_article_ban' => 'Страница <strong>$1</strong> је уклоњена из предлога ($2).',
	'coll-suggest_article_add' => 'Страница <strong>$1</strong> је додата у вашу књигу ($2).',
	'coll-suggest_article_remove' => 'Страница <strong>$1</strong> је уклоњена из ваше књиге ($2).',
	'coll-suggest_undo_tooltip' => 'Поништите ову радњу',
	'coll-suggest_undo' => 'поништи',
	'coll-load_local_book' => 'Кликните на OK да наставите рад с књигом %TITLE% која садржи %NUMPAGES% страница. Кликните на Cancel да је обришете и започнете с празном књигом.',
	'right-collectionsaveasuserpage' => 'чување књига у виду корисничке странице',
	'right-collectionsaveascommunitypage' => 'чување књига у виду заједничке странице',
);

/** Serbian Latin ekavian (‪Srpski (latinica)‬)
 * @author Michaello
 * @author Rancher
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 */
$messages['sr-el'] = array(
	'coll-desc' => '[[Special:Book|Napravi knjige]]',
	'coll-manage_your_book' => 'Uredi svoju knjigu',
	'coll-book_creator_help' => 'Vidi [[{{MediaWiki:Coll-helppage}}|pomoćnu stranu o knjigama]] za više podataka.',
	'coll-start_book_creator' => 'Započni uređivač knjiga',
	'coll-book_creator_continue' => 'Nastavi sa korišćenjem uređivača knjiga',
	'coll-book_creator_disable_text' => "''Uređivač knjiga'' će biti onemogućen a knjiga na kojoj radite će biti uklonjena.",
	'coll-collection' => 'Knjiga',
	'coll-collections' => 'Knjige',
	'coll-exclusion_category_title' => 'Izuzmi pri štampanju',
	'coll-print_template_prefix' => 'Štampaj',
	'coll-print_template_pattern' => '$1/Štampa',
	'coll-unknown_subpage_title' => 'Nepoznata podstrana',
	'coll-unknown_subpage_text' => 'Ova podstrana [[Special:Book|knjige]] ne postoji',
	'coll-couldnotaddarticle_title' => 'Dodavanje viki strane nije uspelo',
	'coll-couldnotaddarticle_msg' => 'Dodavanje viki stranice nije moguće.',
	'coll-couldnotremovearticle_title' => 'Uklanjanje viki stranice nije moguće',
	'coll-couldnotremovearticle_msg' => 'Viki stranicu nije moguće ukloniti.',
	'coll-noscript_text' => '<h1>Javaskript je neophodan!</h1>
<strong>Vaš brovzer ne podržava javaskript, ili je javaskript isključen.
Ova stranica neće raditi ispravno bez javaskripta.</strong>',
	'coll-savedbook_template' => 'snimljena_knjiga',
	'coll-your_book' => 'Vaša knjiga',
	'coll-download_title' => 'Preuzmi',
	'coll-download_text' => 'Izaberite željeni format i pritisnite dugme da biste preuzeli Vašu knjigu.',
	'coll-download_as_text' => 'Pritisnite dugme da biste preuzeli vašu knjigu u $1 formatu.',
	'coll-download' => 'Preuzmi',
	'coll-format_label' => 'Vrsta:',
	'coll-remove' => 'Ukloni',
	'coll-show' => 'Prikaži',
	'coll-move_to_top' => 'Pomeri na vrh',
	'coll-move_up' => 'Pomeri gore',
	'coll-move_down' => 'Pomeri dole',
	'coll-move_to_bottom' => 'Pomeri na dno',
	'coll-title' => 'Naslov:',
	'coll-subtitle' => 'Podnaslov:',
	'coll-contents' => 'Sadržaj',
	'coll-drag_and_drop' => 'Možete prerasporediti viki stranice i poglavlja prevlačivši ih',
	'coll-create_chapter' => 'Napravi poglavlje',
	'coll-sort_alphabetically' => 'Poređaj azbučno',
	'coll-rename' => 'Preimenuj',
	'coll-new_chapter' => 'Unesite ime novog poglavlja',
	'coll-rename_chapter' => 'Unesite novo ime poglavlja',
	'coll-no_such_category' => 'Nema takve kategorije',
	'coll-notitle_title' => 'Naslov ove stranice nije mogao biti utvrđen.',
	'coll-post_failed_title' => 'POST zahtev nije uspeo',
	'coll-post_failed_msg' => 'POST zahtev za $1 nije uspeo ($2).',
	'coll-mwserve_failed_title' => 'Greška na serveru za izrađivanje',
	'coll-mwserve_failed_msg' => 'Na serveru za izrađivanje desila se greška: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Greška u odgovoru servera',
	'coll-empty_collection' => 'Prazna knjiga',
	'coll-revision' => 'Revizija: $1',
	'coll-save_collection_title' => 'Snimi i deli svoju knjigu',
	'coll-save_collection_text' => 'Izaberite mesto za smeštanje svoje knjige:',
	'coll-login_to_save' => 'Ukoliko želite da snimite knjige za kasniju upotrebu, [[Special:UserLogin|prijavite se ili napravite nalog]].',
	'coll-personal_collection_label' => 'Lična knjiga:',
	'coll-community_collection_label' => 'Zajednička knjiga:',
	'coll-save_collection' => 'Snimi knjigu',
	'coll-save_category' => 'Sve snimljene knjige su dodate u kategoriju [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Stranica već postoji.
Da je prebrišem?',
	'coll-overwrite_text' => 'Stranica sa imenom [[:$1]] već postoji.
Da li želite da bude prebrisana vašom knjigom?',
	'coll-yes' => 'Da',
	'coll-no' => 'Ne',
	'coll-load_overwrite_text' => 'Već imate neke stranice u svojoj knjizi.
Da li želite da prebrišete svoju trenutnu knjigu, dodate novi sadržaj, ili poništite učitavanje ove knjige?',
	'coll-overwrite' => 'Prebriši',
	'coll-append' => 'Nadoveži',
	'coll-cancel' => 'Otkaži',
	'coll-update' => 'Ažuriraj',
	'coll-limit_exceeded_title' => 'Knjiga je prevelika',
	'coll-limit_exceeded_text' => 'Vaša knjiga je prevelika.

Ne može joj se dodati još strana.',
	'coll-rendering_title' => 'Izrađujem',
	'coll-rendering_text' => '<p><strong>Molim sačekajte dok se dokument stvara.</strong></p>

<p><strong>Napredak:</strong> <span id=&quot;renderingProgress&quot;>$1</span>% <span id=&quot;renderingStatus&quot;>$2</span></p>

<p>Ova stranica bi trebalo da se sama osvežava svakih par sekundi.
Ako ovo ne radi, pritisnite dugme za osvežavanje svog brovzera.</p>',
	'coll-rendering_status' => '<strong>Stanje:</strong> $1',
	'coll-rendering_article' => '(viki stranica: $1)',
	'coll-rendering_page' => '(stranica: $1)',
	'coll-rendering_finished_title' => 'Izrađivanje je završeno',
	'coll-rendering_finished_text' => '<strong>Fajl sa dokumentom je napravljen.</strong>
<strong>[$1 Preuzmite fajl]</strong> na svoj kompjuter.

Napomena:
* Nezadovoljni ste izlazom? Pogledajte [[{{MediaWiki:Coll-helppage}}|stranu pomoći o knjigama]] za mogućnosti da ga poboljšate.',
	'coll-notfound_title' => 'Knjiga nije pronađena',
	'coll-notfound_text' => 'Ne mogu da nađem stranu knjige.',
	'coll-download_notfound_title' => 'Fajl nije pronađen',
	'coll-download_notfound_text' => 'Fajl koji pokušavate da preuzmete ne postoji: moguće je da je je obrisan i mora biti ponovo napravljen.',
	'coll-download_failed_title' => 'Greška prilikom skidanja',
	'coll-download_failed_text' => 'Javila se greška prilikom skidanja fajla: $1',
	'coll-is_cached' => '<ul><li>Izrađena verzija dokumenta je pronađena, tako da izrađivanje nije neophodno. <a href="$1">Nametni ponovno izrađivanje.</a></li></ul>',
	'coll-excluded-templates' => '* Šabloni u kategoriji [[:Category:$1|$1]] su isključeni.',
	'coll-blacklisted-templates' => '* Šabloni na crnoj listi [[:$1]] su isključeni.',
	'coll-return_to_collection' => '<p>Nazad na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Naruči kao odštampanu knjigu',
	'coll-book_text' => 'Dobijte odštampanu knjigu od našeg partnera za štampanje na zahtev:',
	'coll-order_from_pp' => 'Pregledaj sa $1',
	'coll-about_pp' => 'O „$1“',
	'coll-invalid_podpartner_title' => 'Neispravan partner za štampanje na zahtev',
	'coll-invalid_podpartner_msg' => 'Odabrani partner za štampanje na zahtev je neispravan.
Molim kontaktirajte svog MedijaViki administratora.',
	'coll-license' => 'Licenca',
	'coll-return_to' => 'Vrati na [[:$1]]',
	'coll-more_info' => 'Pokaži više informacija',
	'coll-hide_info' => 'Skloni informacije',
	'coll-suggest_title' => 'Strane predložene za vašu knjigu',
	'coll-suggested_articles' => 'Predlozi',
	'coll-suggest_reset_bans' => 'poništi',
	'coll-suggest_reset_bans_tooltip' => 'Prikaži skoro uklonjene predloge',
	'coll-suggest_add_selected' => 'Dodaj označene strane',
	'coll-suggest_ban_selected' => 'Ukloni odabrane strane',
	'coll-suggest_your_book' => 'Tvoja knjiga',
	'coll-suggest_show' => 'pokaži',
	'coll-suggest_ban_tooltip' => 'Ukloni ovu stranu sa spiska predloga',
	'coll-suggest_undo_tooltip' => 'Poništi ovu akciju',
	'coll-suggest_undo' => 'poništi',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'coll-desc' => '[[Special:Bouk|Bouke moakje]]',
	'coll-collection' => 'Bouk',
	'coll-collections' => 'Bouke',
	'coll-noscript_text' => '<h1>JavaScript is nöödich!</h1>
<strong>Dien Browser unnerstutset neen Javascript of Javascript wuude deaktivierd. Disse Siede däd nit gjucht funktionierje, soloange Javascript nit ferföigboar is.</strong>',
	'coll-download_title' => 'Deelleede',
	'coll-download_text' => 'Uum ne Offline-Version fon dien Bouk deeltouleeden, wääl n Formoat un klik ap ap ju Schaltfläche.',
	'coll-download' => 'Deelleede',
	'coll-format_label' => 'Formoat:',
	'coll-remove' => 'Wächhoalje',
	'coll-move_to_top' => 'ätter dän Ounfang',
	'coll-move_up' => 'hooch',
	'coll-move_down' => 'häärdeel',
	'coll-move_to_bottom' => 'ätter dän Eend',
	'coll-title' => 'Tittel:',
	'coll-subtitle' => 'Unnertittel:',
	'coll-contents' => 'Inhoold',
	'coll-create_chapter' => 'Kapittel moakje',
	'coll-sort_alphabetically' => 'Alphabetisk sortierje',
	'coll-rename' => 'Uumebenaame',
	'coll-new_chapter' => 'Reek n Noome foar n näi Kapittel ien',
	'coll-rename_chapter' => 'Reek n näien Noome foar dät Kapittel ien',
	'coll-no_such_category' => 'Sun Kategorie rakt dät nit',
	'coll-notitle_title' => 'Die Tittel fon ju Siede kuud nit bestimd wäide.',
	'coll-post_failed_title' => 'POST-Anfroage failsloain',
	'coll-post_failed_msg' => 'Ju POST-Anfroage an $1 is failsloain ($2).',
	'coll-mwserve_failed_title' => 'Serverfailer',
	'coll-mwserve_failed_msg' => 'Ap dän Renderer-Server is n Failer aptreeden: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Failermäldenge fon dän Server',
	'coll-empty_collection' => 'Loos Bouk',
	'coll-revision' => 'Version: $1',
	'coll-save_collection_title' => 'Dien Bouk spiekerje un deele',
	'coll-save_collection_text' => 'Wääl n Spiekersteede foar dien Bouk:',
	'coll-login_to_save' => 'Wan du Bouke spiekerje moatest, [[Special:UserLogin|mäld die an of moak n Benutserkonto]].',
	'coll-personal_collection_label' => 'Persöönelk Bouk:',
	'coll-community_collection_label' => 'Gemeenskuppelk Bouk:',
	'coll-save_collection' => 'Bouk spiekerje',
	'coll-save_category' => 'Aal spiekerde Bouke wäide ju Kategorie [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] touoardend.',
	'coll-overwrite_title' => 'Siede bestoant. Uurschrieuwe?',
	'coll-overwrite_text' => 'Ne Siede mäd dän Noome [[:$1]] bestoant al.
Moatest du ju truch dien Kollektion ärsätte?',
	'coll-yes' => 'Jee',
	'coll-no' => 'Noa',
	'coll-load_overwrite_text' => 'Dien Kollektion änthaalt al wäkke Sieden.
Moatest du dät aktuelle Bouk uurschrieuwe, do näie Sieden anhongje of dät Leeden fon dit Bouk oubreeke?',
	'coll-overwrite' => 'Uurschrieuwe',
	'coll-append' => 'Anhongje',
	'coll-cancel' => 'Oubreeke',
	'coll-update' => 'Aktualisierje',
	'coll-limit_exceeded_title' => 'Bouk tou groot',
	'coll-limit_exceeded_text' => 'Dien Bouk is tou groot. Deer konnen neen Sieden moor bietouföiged wäide.',
	'coll-rendering_title' => 'An t Moakjen',
	'coll-rendering_text' => '<p><strong>Täif, bit dät Dokument moaked wuuden is.</strong></p>

<p><strong>Foutskrit:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Disse Siede schuul sik älke poor Sekunden fonsälwen aktualisierje.
Fals dit daach nit geböärt, druk dan dän „Aktualisierje“-Knoop (maast F5) fon dien Browser.</p>',
	'coll-rendering_status' => '<strong>Stoatus:</strong> $1',
	'coll-rendering_article' => '(Wikisiede: $1)',
	'coll-rendering_page' => '(Siede: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informatione uur ju Deerstaalenge fon Sieden',
	'coll-rendering_finished_title' => 'Kloor moaked',
	'coll-rendering_finished_text' => '<strong>Ju Doatäi wuud mäd Ärfoulch moaked.</strong>
<strong>[$1 Klik hier],</strong> uum ju Doatäi deeltouleeden.</strong>

Bäst du nit mäd dät Resultoat toufree?
Muugelkhaide tou ju Ferbeeterenge fon ju Uutgoawe finst du ap ju [[{{MediaWiki:Coll-helppage}}|Hälpesiede uur do Siedenkollektione]].',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Deerstaalenge fon ju Siedeninformation',
	'coll-notfound_title' => 'Bouk nit fuunen',
	'coll-notfound_text' => 'Dien Bouk kuud nit fuunen wäide.',
	'coll-download_notfound_title' => 'Doatäi nit fuunen',
	'coll-is_cached' => '<ul><li>Der is ne twiskespiekerde Version fon dät Dokument foarhounden, so dät neen Renderjen nöödich waas. <a href="$1">Näiränderjen outwinge.</a></li></ul>',
	'coll-excluded-templates' => '* Foarloagen uut ju Kategorie [[:Category:$1|$1]] wuuden uutsleeten.',
	'coll-blacklisted-templates' => '* Foarloagen fon ju swotte Lieste [[:$1]] wuuden uutsleeten.',
	'coll-return_to_collection' => 'Tourääch tou <a href="$1">$2</a>',
	'coll-book_title' => 'As drukt Bouk bestaale',
	'coll-book_text' => "Bestaal ne drukte Boukuutgoawe bie uus ''Print-on-Demand''-Partner.",
	'coll-order_from_pp' => 'Foarbekiek bie $1',
	'coll-about_pp' => 'Uur $1',
	'coll-invalid_podpartner_title' => 'Uungultiger Print-on-Demand-Paatender',
	'coll-invalid_podpartner_msg' => 'Do Angoawen tou dän Print-on-Demand-Paatender sunt failerhaft.
Kontaktier dän MediaWiki-Administrator.',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Tourääch tou [[:$1]]',
	'coll-more_info' => 'Wiedere Informatione wiese',
	'coll-hide_info' => 'Informatione fersteete',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress Bestaalinformation',
	'coll-suggest_title' => 'Foarsloaine Sieden foar dien Bouk',
	'coll-suggested_articles' => 'Foarsleeke',
	'coll-suggest_reset_bans' => 'touräächsätte',
	'coll-suggest_reset_bans_tooltip' => 'Toulääst wächhoalde Foarsleeke wiese',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'coll-move_to_top' => 'Mindahkeun ka luhur',
	'coll-move_up' => 'Pindahkeun ka luhur',
	'coll-move_down' => 'Mindahkeun ka handap',
	'coll-move_to_bottom' => 'Mindahkeun ka handap',
	'coll-title' => 'Judul:',
	'coll-contents' => 'eusi',
	'coll-rename' => 'Ganti ngaran',
	'coll-yes' => 'Enya',
	'coll-no' => 'Teu',
	'coll-append' => 'Tambahkeun',
	'coll-cancel' => 'Bolay',
	'coll-return_to_collection' => '<p>Balik deui ka <a href="$1">$2</a></p>',
	'coll-about_pp' => 'Ngeunaan $1',
);

/** Swedish (Svenska)
 * @author Ainali
 * @author Boivie
 * @author Dafer45
 * @author GameOn
 * @author H92
 * @author Jon Harald Søby
 * @author Lokal Profil
 * @author M.M.S.
 * @author MagnusA
 * @author Najami
 * @author Per
 * @author Rotsee
 * @author Sannab
 */
$messages['sv'] = array(
	'coll-desc' => '[[Special:Book|Skapa böcker]]',
	'coll-book_creator_intro' => "<big>Med ''bokfunktionen'' kan du skapa en bok som innehåller valfria wikisidor. Du kan exportera boken i olika format (till exempel PDF eller ODF) eller beställa en tryckt kopia.</big>",
	'coll-manage_your_book' => 'Hantera din bok',
	'coll-book_creator_help' => 'Se [[{{MediaWiki:Coll-helppage}}|hjälpsidan om böcker]] för mer information.',
	'coll-start_book_creator' => 'Starta bokfunktionen',
	'coll-book_creator_continue' => 'Fortsätt använda bokskapare',
	'coll-book_creator_disable_text' => "''Bokskapare'' kommer att avaktiveras och boken du arbetar med kommer tas bort.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Bokskapartext',
	'coll-collection' => 'Bok',
	'coll-collections' => 'Böcker',
	'coll-exclusion_category_title' => 'Uteslut vid utskrift',
	'coll-print_template_prefix' => 'Utskrift',
	'coll-print_template_pattern' => '$1/Skriv ut',
	'coll-unknown_subpage_title' => 'Okänd undersida',
	'coll-unknown_subpage_text' => 'Denna undersida till [[Special:Book|Bok]] existerar inte',
	'coll-couldnotaddarticle_title' => 'Kunde inte lägga till wikisida',
	'coll-couldnotaddarticle_msg' => 'Wikisidan kunde inte läggas till.',
	'coll-couldnotremovearticle_title' => 'Kunde inte ta bort wikisida',
	'coll-couldnotremovearticle_msg' => 'Wikisidan kunde inte tas bort.',
	'coll-noscript_text' => '<h1>JavaScript är nödvändigt!</h1>
<strong>Din webbläsare stödjer inte JavaScript eller så har JavaScript stängts av.
Denna sida kommer inte att fungera korrekt innan JavaScript finns tillgängligt.</strong>',
	'coll-savedbook_template' => 'sparad_bok',
	'coll-your_book' => 'Din bok',
	'coll-download_title' => 'Hämta',
	'coll-download_text' => 'För att ladda ner din bok, välj ett format och klicka på knappen.',
	'coll-download_as_text' => 'Klicka på knappen för att ladda ner din bok i formatet $1.',
	'coll-download' => 'Hämta',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ta bort',
	'coll-show' => 'Visa',
	'coll-move_to_top' => 'Flytta till toppen',
	'coll-move_up' => 'Flytta upp',
	'coll-move_down' => 'Flytta ner',
	'coll-move_to_bottom' => 'Flytta till botten',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Undertitel:',
	'coll-contents' => 'Innehåll',
	'coll-drag_and_drop' => 'Använd dra & släpp för att ändra ordning på wikisidor och kapitel',
	'coll-create_chapter' => 'Skapa kapitel',
	'coll-sort_alphabetically' => 'Sortera alfabetiskt',
	'coll-rename' => 'Byt namn',
	'coll-new_chapter' => 'Välj ett namn för det nya kapitlet',
	'coll-rename_chapter' => 'Välj ett nytt namn för kapitlet',
	'coll-no_such_category' => 'Ingen sådan kategori',
	'coll-notitle_title' => 'Titeln av sidan kunde inte fastställas.',
	'coll-post_failed_title' => 'POST-begäran avslagen',
	'coll-post_failed_msg' => 'POST-begäran till $1 avslagen ($2).',
	'coll-mwserve_failed_title' => 'Render-serverfel',
	'coll-mwserve_failed_msg' => 'Ett fel uppstod på renderservern: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Felrespons från servern',
	'coll-empty_collection' => 'Tom bok',
	'coll-revision' => 'Revision: $1',
	'coll-save_collection_title' => 'Spara och dela din bok',
	'coll-save_collection_text' => 'Välj en plats:',
	'coll-login_to_save' => 'Om du vill spara böcker för senare bruk, var god [[Special:UserLogin|logga in eller skapa ett konto]].',
	'coll-personal_collection_label' => 'Personlig bok:',
	'coll-community_collection_label' => 'Gemensam bok:',
	'coll-save_collection' => 'Spara bok',
	'coll-save_category' => 'Alla sparade böcker läggs till i kategorin [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Sidan existerar. 
Vill du skriva över den?',
	'coll-overwrite_text' => 'En sida med namnet [[:$1]] finns redan.
Vill du ersätta den med din samling?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nej',
	'coll-load_overwrite_text' => 'Du har redan några sidor i din bok.
Vill du ersätta din nuvarande bok, lägga till det nya innehållet eller avbryta hämtningen av denna bok?',
	'coll-overwrite' => 'Skriv över',
	'coll-append' => 'Lägga till',
	'coll-cancel' => 'Avbryt',
	'coll-update' => 'Uppdatera',
	'coll-limit_exceeded_title' => 'För stor bok',
	'coll-limit_exceeded_text' => 'Din bok är för stor.
Inga mer sidor kan läggas till.',
	'coll-rendering_title' => 'Skapar',
	'coll-rendering_text' => '<p><strong>Var god vänta under tiden dokumentet skapas.</strong></p>

<p><strong>Tillstånd:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Denna sida ska automatiskt uppdateras med några sekunders mellanrum.
Om det inte fungerar, var god tryck på uppdateringsknappen i din webbläsare.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wikisida: $1)',
	'coll-rendering_page' => '(sida: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informationstext om sidrendering',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informationstext om samlingsrendering',
	'coll-rendering_finished_title' => 'Rendering avslutad',
	'coll-rendering_finished_text' => '<strong>Dokumentfilen har skapats.</strong>
<strong>[$1 Hämta filen]</strong> till din dator.

Noter:
* Inte nöjd med resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjälpsidan om samlingar]] för möjligheter att förbättra det.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Informationstext om sidrendering',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Återger informationstext om samlingar',
	'coll-notfound_title' => 'Bok inte funnen',
	'coll-notfound_text' => 'Kunde inte hitta boksida.',
	'coll-download_notfound_title' => 'Hittade inte filen',
	'coll-download_notfound_text' => 'Filen du försöker ladda ner finns inte: den kan ha raderats och behöver återskapas.',
	'coll-download_failed_title' => 'Fel under nedladdning',
	'coll-download_failed_text' => 'Det blev ett fel vid nedladdning av filen: $1',
	'coll-is_cached' => '<ul><li>En cachad version av dokumentet har hittats, så ingen rendering behövdes. <a href="$1">Framtvinga omrendering.</a></li></ul>',
	'coll-excluded-templates' => '* Mallar i kategorin [[:Category:$1|$1]] har uteslutits.',
	'coll-blacklisted-templates' => '* Mallar på svartalistan [[:$1]] har uteslutits.',
	'coll-return_to_collection' => '<p>Tillbaka till <a href="$1">$2</a></p>',
	'coll-book_title' => 'Beställ som en utskriven bok',
	'coll-book_text' => 'Få en tryckt bok från vår print-on-demand-partner:',
	'coll-order_from_pp' => 'Förhandsgranska med $1',
	'coll-about_pp' => 'Om $1',
	'coll-invalid_podpartner_title' => 'Ogiltig POD-partner',
	'coll-invalid_podpartner_msg' => 'Den erbjudna POD-partnern är ogiltig.
Var god kontakta din MediaWiki-administratör.',
	'coll-license' => 'Licens',
	'coll-return_to' => 'Tillbaka till [[:$1]]',
	'coll-more_info' => 'Visa mer information',
	'coll-hide_info' => 'Göm information',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Beställningsinformation PediaPress',
	'coll-suggest_title' => 'Föreslagna sidor för din bok',
	'coll-suggest_intro_text' => 'Förslag baseras på nuvarande wikisidor i din bok.
Listan uppdateras när du klickar på lägg till- eller ta bort-knappar.',
	'coll-suggested_articles' => 'Förslag',
	'coll-suggest_reset_bans' => 'återställ',
	'coll-suggest_reset_bans_tooltip' => 'Visa tidigare borttagna förslag',
	'coll-suggest_add_selected' => 'Lägg till valda sidor',
	'coll-suggest_ban_selected' => 'Ta bort valda sidor',
	'coll-suggest_your_book' => 'Din bok',
	'coll-suggest_show' => 'visa',
	'coll-suggest_ban_tooltip' => 'Ta bort denna sida från förslagslistan',
	'coll-suggest_article_ban' => 'Sidan <strong>$1</strong> har tagits bort från förslagen ($2).',
	'coll-suggest_article_add' => 'Sidan <strong>$1</strong> har blivit tillagt till din bok ($2).',
	'coll-suggest_article_remove' => 'Sidan <strong>$1</strong> har blivit borttagen från din bok ($2).',
	'coll-suggest_undo_tooltip' => 'Gör denna handling ogjord',
	'coll-suggest_undo' => 'gör ogjord',
	'coll-load_local_book' => 'Klicka på OK för att fortsätta med din bok %TITLE% som innehåller %NUMPAGES% wiki sidor. Klicka på Avbryt för att ta bort den och börja med en tom bok.',
	'right-collectionsaveasuserpage' => 'Spara böcker som användarsidor',
	'right-collectionsaveascommunitypage' => 'Spara böcker som gemenskapssida',
);

/** Swahili (Kiswahili)
 * @author Ikiwaner
 * @author Lloffiwr
 */
$messages['sw'] = array(
	'coll-collection' => 'Kitabu',
	'coll-collections' => 'Vitabu',
	'coll-print_template_prefix' => 'Chapisha',
	'coll-your_book' => 'Kitabu chako',
	'coll-download' => 'Pakua',
	'coll-remove' => 'Ondoa',
	'coll-show' => 'Onyesha',
	'coll-title' => 'Cheo:',
	'coll-contents' => 'Yaliyomo',
	'coll-empty_collection' => 'Kitabu kitupu',
	'coll-revision' => 'Pitio la $1',
	'coll-save_collection' => 'Hifadhi kitabu',
	'coll-yes' => 'Ndiyo',
	'coll-no' => 'Siyo',
	'coll-cancel' => 'Batilisha',
	'coll-update' => 'Sasisha',
	'coll-limit_exceeded_title' => 'Kitabu ni kubwa mno',
	'coll-rendering_page' => '(ukurasa: $1)',
	'coll-download_notfound_title' => 'Faili halikupatikana',
	'coll-about_pp' => 'Kuhusu $1',
	'coll-more_info' => 'Onyesha taarifa zaidi',
	'coll-hide_info' => 'Ficha taarifa',
	'coll-suggested_articles' => 'Mapendekezo',
	'coll-suggest_your_book' => 'Kitabu chako',
	'coll-suggest_show' => 'fichua',
	'coll-suggest_undo' => 'tengua',
);

/** Tamil (தமிழ்)
 * @author TRYPPN
 * @author செல்வா
 */
$messages['ta'] = array(
	'coll-collection' => 'புத்தகம்',
	'coll-collections' => 'நூல்கள்',
	'coll-print_template_prefix' => 'அச்சிடு',
	'coll-download_title' => 'இறக்கு (பதிவிறக்கம் செய்)',
	'coll-download' => 'பதிவிறக்கம் செய்',
	'coll-remove' => 'நீக்குக',
	'coll-show' => 'காட்டு',
	'coll-move_to_top' => 'மேல்பகுதிக்கு நகர்த்து',
	'coll-move_up' => 'மேல்நோக்கி நகர்த்து',
	'coll-move_down' => 'கீழ்நோக்கி நகர்த்து',
	'coll-move_to_bottom' => 'கீழ்பகுதிக்கு நகர்த்து',
	'coll-title' => 'தலைப்பு:',
	'coll-subtitle' => 'துணைத்தலைப்பு:',
	'coll-contents' => 'பொருளடக்கம்',
	'coll-rename' => 'பெயர் மாற்றம் செய்',
	'coll-overwrite_title' => 'பக்கம் இருக்கிறது.
மேல் எழுதவா ?',
	'coll-yes' => 'ஆம்',
	'coll-no' => 'இல்லை',
	'coll-overwrite' => 'மேலெழுதுதல்',
	'coll-append' => 'கடையிணைப்பு',
	'coll-cancel' => 'விட்டுவிடு',
	'coll-update' => 'புதுப்பி',
	'coll-license' => 'அனுமதி',
	'coll-suggest_show' => 'காட்டு',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Kiranmayee
 * @author Veeven
 * @author వైజాసత్య
 */
$messages['te'] = array(
	'coll-desc' => '[[Special:Book|పుస్తకాలను తయారుచేసుకోండి]]',
	'coll-manage_your_book' => 'మీ పుస్తకాన్ని నిర్వహించండి',
	'coll-book_creator_help' => 'మరింత సమాచారం కొరకు [[{{MediaWiki:Coll-helppage}}|పుస్తకాల గురించిన సహాయపు పేజీ]]ని చూడండి.',
	'coll-start_book_creator' => 'పుస్తకం సృష్టికర్తను ప్రారంభించు',
	'coll-book_creator_continue' => 'పుస్తకం సృష్టికర్తను వాడటం కొనసాగించు',
	'coll-book_creator_disable_text' => "''పుస్తకం సృష్టికర్త'' అచేతనం చెయ్యబడుతుంది, మీరు పనిచేస్తున్న పుస్తకం తీసెయ్యబడుతుంది.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/పుస్తకము సృష్టికర్త  పాఠ్యము',
	'coll-collection' => 'పుస్తకం',
	'coll-collections' => 'పుస్తకాలు',
	'coll-exclusion_category_title' => 'ముద్రణలో చేర్చవద్దు',
	'coll-print_template_prefix' => 'ముద్రించు',
	'coll-print_template_pattern' => '$1/ముద్రించు',
	'coll-unknown_subpage_title' => 'గుర్తుతెలియని ఉపపేజి',
	'coll-unknown_subpage_text' => '[[Special:Book|పుస్తకం]] యొక్క ఉపపేజీ లేనే లేదు',
	'coll-couldnotaddarticle_title' => 'వికి పేజిని కలుపలేకపోయాము',
	'coll-couldnotaddarticle_msg' => 'వికీ పేజీని చేర్చలేకపోయాం.',
	'coll-couldnotremovearticle_title' => 'వికి పేజిని తొలగించలేకపోయాము',
	'coll-couldnotremovearticle_msg' => 'వికీ పేజీని తొలగించలేకపోయాం.',
	'coll-noscript_text' => '<h1>JavaScript ఆవశ్యకం!</h1>
<strong>మీ బ్రౌజరు JavaScript కు మద్దతివ్వదు. లేదా JavaScript అచేతనం చెయ్యబడి ఉంది.
JavaScript చేతనం చేస్తే తప్ప, ఈ పేజీ సరిగ్గా పనిచెయ్యదు.</strong>',
	'coll-savedbook_template' => 'భద్రపరచిన_పుస్తకం',
	'coll-your_book' => 'మీ పుస్తకం',
	'coll-download_title' => 'దింపుకోండి',
	'coll-download_text' => 'మీ పుస్తకాన్ని దిగుమతి చేసుకోడానికి, ఫైలు ఫార్మాటుని ఎంచుకుని, ఈ బొత్తాన్ని నొక్కండి.',
	'coll-download_as_text' => 'మీ పుస్తకాన్ని $1 ఫార్మాట్లో దించుకోవడానికి ఈ బొత్తాన్ని నొక్కండి.',
	'coll-download' => 'దిగుమతి',
	'coll-format_label' => 'ఫార్మాటు:',
	'coll-remove' => 'తొలగించు',
	'coll-show' => 'చూపించు',
	'coll-move_to_top' => 'అన్నిటికన్నా పైన పెట్టు',
	'coll-move_up' => 'పైకి కదుపు',
	'coll-move_down' => 'క్రిందికి కదుపు',
	'coll-move_to_bottom' => 'అడుగునకు కదుపు',
	'coll-title' => 'శీర్షిక:',
	'coll-subtitle' => 'ఉపశీర్షిక:',
	'coll-contents' => 'విషయాలు',
	'coll-drag_and_drop' => 'వికీ పేజీలు, అధ్యాయాలను తిరిగి పేర్చడానికి డ్రాగ్ & డ్రాపును వాడండి',
	'coll-create_chapter' => 'కొత్త అధ్యాయాన్ని సృష్టించు',
	'coll-sort_alphabetically' => 'పుస్తకములోని పేజీలను అక్షరక్రమంలో అమర్చు',
	'coll-rename' => 'పేరుమార్చు',
	'coll-new_chapter' => 'కొత్త అధ్యాయానికి పేరు సూచించండి',
	'coll-rename_chapter' => 'పుటకు క్రొత్త పేరు ఇవ్వండి',
	'coll-no_such_category' => 'అటువంటి వర్గం లేదు',
	'coll-notitle_title' => 'ఆ పేజీ యొక్క శీర్షికని నిర్ణయించలేకున్నాం.',
	'coll-post_failed_title' => 'POST అభ్యర్థన విఫలమైంది',
	'coll-post_failed_msg' => '$1 కు  POST అభ్యర్ధన విఫలమైంది ($2).',
	'coll-error_reponse' => 'సర్వరునుండి పొరపాటు అని స్పందన వచ్చింది',
	'coll-empty_collection' => 'ఖాళీ పుస్తకం',
	'coll-revision' => 'కూర్పు: $1',
	'coll-save_collection_title' => 'మీ పుస్తకమును భద్రపరచి పంచుకోండి',
	'coll-save_collection_text' => 'మీ పుస్తకమును భద్రపరచుకోవడానికి ఒక భద్రపరచు స్థలమును ఎన్నుకోండి:',
	'coll-login_to_save' => 'మీ పుస్తకములను మీరు తర్వాత వాడుకోవడానికి భద్రపరచుకోవాలనుకుంటే, [[Special:UserLogin|లోనికి ప్రవేశించండి లేదా ఖాతా సృష్టించుకోండి]].',
	'coll-personal_collection_label' => 'వ్యక్తిగత పుస్తకము:',
	'coll-community_collection_label' => 'సామూహిక పుస్తకం:',
	'coll-save_collection' => 'పుస్తకముని భద్రపరచు',
	'coll-save_category' => 'భద్రపరచిన పుస్తకాలన్నీ [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] వర్గానికి చేర్చబడ్డాయి.',
	'coll-overwrite_title' => 'పేజీ ఉంది. దానిపైనే రాసేయాలా?',
	'coll-overwrite_text' => '[[:$1]] అనే పేరుతో ఓ పేజీ ఇప్పటికే ఉంది.
దాని స్ధానంలో మీ సేకరణని ఉంచాలా?',
	'coll-yes' => 'అవును',
	'coll-no' => 'కాదు',
	'coll-load_overwrite_text' => 'మీ పుస్తకంలో ఈసరికే కొన్ని పేజీలున్నాయి.
మీ పుస్తకన్ని ఓవరురైటు చేస్తారా? కొత్త కంటెంటును పాతిదాని వెనుక చేరుస్తారా? లేక పుస్తకం లోడు చెయ్యడాన్ని రద్దు చేస్తారా?',
	'coll-overwrite' => 'ఓవరురైటు చెయ్యి',
	'coll-append' => 'జతచేయి',
	'coll-cancel' => 'రద్దు',
	'coll-update' => 'తాజాకరించు',
	'coll-limit_exceeded_title' => 'పుస్తకం మరీ పెద్దగా ఉంది',
	'coll-limit_exceeded_text' => 'మీ పుస్తకము చాలా పెద్దగా ఉంది.
మరిన్ని పేజీలు చేర్చలేము.',
	'coll-rendering_text' => '<p><strong>పత్రం జనరేటు చేస్తున్నాం, వేచియుండండి.</strong></p>

<p><strong>ప్రగతి:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>ఈ పేజీ కొన్ని సెకండ్లకోసారి ఆటోమాటిగ్గా రిఫ్రెష్ కావాల్సి ఉంది. 
అలా కాకపోతే, బ్రౌజరు రిఫ్రెష్ బొత్తాన్ని నొక్కండి.</p>',
	'coll-rendering_status' => '<strong>స్థితి:</strong> $1',
	'coll-rendering_article' => '(వికీ పేజీ: $1)',
	'coll-rendering_page' => '  (పేజీ: $1)',
	'coll-rendering_finished_title' => 'రెండరింగు పూర్తైంది',
	'coll-rendering_finished_text' => '<strong>పత్రం ఫైలు సృష్టించబడింది.</strong>
<strong>[$1 ఫైలును మీ కంప్యూటర్లోకి దించుకోండి]</strong>.

గమనికలు:
* ఔట్ పుట్ సంతృప్తికరంగా లేదా? దాన్ని మెరుగుపరచే సంభావ్యతల కోసం [[{{MediaWiki:Coll-helppage}}|the help page about books]] చూడండి.',
	'coll-notfound_title' => 'పుస్తకము కనబడలేదు',
	'coll-notfound_text' => 'పుస్తకము పేజీ కనబడలేదు.',
	'coll-download_notfound_title' => 'ఫైలు దొరకలేదు',
	'coll-download_notfound_text' => 'మీరు దింపుకోవాలని ప్రయత్నిస్తున్న ఫైలు ఉనికిలో లేదు:
బహుశా దాన్ని తొలగించి ఉంటారు మరియు దాన్ని మళ్ళీ తయారుచేయాల్సి ఉంటుంది.',
	'coll-download_failed_title' => 'దించుకోవడంలో లోపం తలెత్తింది',
	'coll-download_failed_text' => 'ఈ ఫైలును దించుకునేటపుడు లోపం తలెత్తింది: $1',
	'coll-is_cached' => '<ul><li>కాషెలో ఈ పత్రపు కూర్పు ఒకటి కనిపించింది. అంచేత రెండరింగు అవసరం లేదు.
<a href="$1">మళ్ళీ రెండరింగు చెయ్యాలని ఫోర్సు చెయ్యి.</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]] వర్గంలోని మూసలను చేర్చలేదు.',
	'coll-blacklisted-templates' => '* నిరోధ జాబితా [[:$1]] లోని మూసలను చేర్చలేదు.',
	'coll-return_to_collection' => '<p>తిరిగి <a href="$1">$2</a></p>కి',
	'coll-book_title' => 'ముద్రించిన పుస్తకములా తెప్పించుకోండి',
	'coll-order_from_pp' => '$1 తో మునుజూపు',
	'coll-about_pp' => '$1 గురించి',
	'coll-invalid_podpartner_title' => 'సరైన POD భాగస్వామి కాదు',
	'coll-license' => 'లైసెన్సు',
	'coll-return_to' => 'తిరిగి [[:$1]]కి',
	'coll-more_info' => 'మరింత సమాచారాన్ని చూపించు',
	'coll-hide_info' => 'సమాచారాన్ని దాచు',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/పీడియాప్రెస్ ఆర్డరు సమాచారం',
	'coll-suggest_title' => 'మీ పుస్తకానికై సూచించబడిన పేజీలు',
	'coll-suggested_articles' => 'సలహాలు',
	'coll-suggest_reset_bans' => 'మునుపటివలె',
	'coll-suggest_reset_bans_tooltip' => 'గతంలో తొలగించిన సూచనలని చూపించు',
	'coll-suggest_add_selected' => 'ఎంచుకున్న పేజీలను చేర్చు',
	'coll-suggest_ban_selected' => 'ఎంచుకున్న పేజీలను తీసివేయి',
	'coll-suggest_your_book' => 'మీ పుస్తకము',
	'coll-suggest_show' => 'చూపు',
	'coll-suggest_ban_tooltip' => 'ఈ పేజీని సూచనల జాబితా నుండి తొలగించు',
	'coll-suggest_article_ban' => '<strong>$1</strong> పేజీని సూచనల్లోని తొలగించాం ($2).',
	'coll-suggest_article_add' => '<strong>$1</strong> అనే పేజీని మీ పుస్తకంలో చేర్చాం ($2).',
	'coll-suggest_article_remove' => '<strong>$1</strong> అనే పుటని మీ పుస్తకంలో నుండి తొలగించాం ($2).',
	'coll-suggest_undo_tooltip' => 'ఈ చర్యను రద్దు చెయ్యి',
	'coll-suggest_undo' => 'రద్దు చెయ్యి',
	'right-collectionsaveasuserpage' => 'పుస్తకములను సభ్యుని పేజి లాగ భద్రపరచుము',
	'right-collectionsaveascommunitypage' => 'పుస్తకములను కమ్యూనిటీ పేజి లాగ భద్రపరచుము',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'coll-collection' => 'Livru',
	'coll-collections' => 'Livru sira',
	'coll-your_book' => 'Ita-nia livru',
	'coll-remove' => 'Hasai',
	'coll-title' => 'Títulu:',
	'coll-contents' => 'Konteúdu',
	'coll-yes' => 'Sin',
	'coll-no' => 'Lae',
	'coll-cancel' => 'Para',
	'coll-about_pp' => 'Kona-ba $1',
	'coll-return_to' => 'Fali ba [[:$1]]',
	'coll-suggest_your_book' => 'Ita-nia livru',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'coll-desc' => '[[Special:Collection|Гирдоварии саҳифаҳо]], тавлиди PDFҳо',
	'coll-collection' => 'Гирдоварӣ',
	'coll-collections' => 'Гирдовариҳо',
	'coll-print_template_prefix' => 'Чоп',
	'coll-unknown_subpage_title' => 'Зерсаҳифаи ношинос',
	'coll-noscript_text' => '<h1>ҶаваСкрипт Лозим аст!</h1>
<strong>Мурургари шумо ҶаваСкриптро дастгирӣ намекунад ё ҶаваСкрипт хомӯш карда шудааст.
Ин саҳифа дуруст кор хоҳад карда, дар ҳолате, ки ҶаваСкрипт фаъол карда шуда бошад.</strong>',
	'coll-your_book' => 'Китоби шумо',
	'coll-download_title' => 'Дарёфт',
	'coll-download_text' => 'Барои бор кардани нусхаи бурунхатии як қолаберо интихоб карда тугмаро пахш кунед.',
	'coll-download' => 'Дарёфт',
	'coll-format_label' => 'Қолаб:',
	'coll-remove' => 'Ҳазф',
	'coll-show' => 'Намоиш',
	'coll-move_to_top' => 'Ҳаракат бо боло',
	'coll-move_up' => 'Ба боло',
	'coll-move_down' => 'Ба поён',
	'coll-move_to_bottom' => 'Ҳаракат ба поён',
	'coll-title' => 'Унвон:',
	'coll-subtitle' => 'Зерунвон:',
	'coll-contents' => 'Мундариҷа',
	'coll-create_chapter' => 'Эҷоди фасл',
	'coll-sort_alphabetically' => 'Ба тартиб даровардан аз рӯи алифбо',
	'coll-rename' => 'Тағйири ном',
	'coll-new_chapter' => 'Барои фасли ҷадид номеро ворид кунед',
	'coll-rename_chapter' => 'Барои фасл номи ҷадидеро ворид кунед',
	'coll-no_such_category' => 'Чунин гурӯҳ вуҷуд надорад',
	'coll-notitle_title' => 'Унвони саҳифа мушаххас шуда наметавонад.',
	'coll-mwserve_failed_title' => 'Хато дар коргузори тарҷумакунанда',
	'coll-error_reponse' => 'Посухи хатое аз хидматгузор',
	'coll-empty_collection' => 'Холӣ кардани гирдовари',
	'coll-revision' => 'Нусха: $1',
	'coll-save_collection_title' => 'Захира ва бо ҳам дидани гирдовариатон',
	'coll-save_collection_text' => 'Интихоби як макон:',
	'coll-login_to_save' => 'Агар майли захира кардани гирдовариҳоро барои истифодаи баъдӣ дошта бошед, лутфан [[Special:UserLogin|ба систем ворид шавед ё ҳисоби ҷадидиро эчод кунед]].',
	'coll-personal_collection_label' => 'Гирдоварии шахсӣ:',
	'coll-community_collection_label' => 'Гирдоварии умум:',
	'coll-save_collection' => 'Захираи Гирдовари',
	'coll-overwrite_title' => 'Саҳифа вуҷуд дорад. Ба рӯи он аз навишта шавад?',
	'coll-overwrite_text' => 'Саҳифае бо номи [[:$1]] аллакай вуҷуд дорад.
Оё шумо мехоҳед онро бо гирдоварии худ иваз кунед?',
	'coll-yes' => 'Бале',
	'coll-no' => 'Не',
	'coll-load_overwrite_text' => 'Шумо аллакай якчанд саҳифаҳоеро дар гирдоварии худ доред.
Оё шумо мехоҳед рӯи гирдоварии кунуниатон нависед, мӯҳтавои ҷадидро пайваст ё лағв кунед?',
	'coll-overwrite' => 'Ба рӯй навиштан',
	'coll-append' => 'Афзудан',
	'coll-cancel' => 'Лағв',
	'coll-update' => 'Барӯз кардан',
	'coll-limit_exceeded_title' => 'Гирдовари Хеле Бузург',
	'coll-limit_exceeded_text' => 'Саҳифаи гирдоварии шумо хеле бузург аст.
Аз ин зиёд саҳифаҳо наметавонанд илова шаванд.',
	'coll-rendering_title' => 'Дар ҳоли тарҷума додан',
	'coll-rendering_status' => '<strong>Вазъият:</strong> $1',
	'coll-rendering_article' => '(саҳифаи вики: $1)',
	'coll-rendering_page' => '(саҳифа: $1)',
	'coll-notfound_title' => 'Китоб ёфт нашуд',
	'coll-notfound_text' => 'Саҳифаи гирдоварӣ ёфт нашуд.',
	'coll-return_to_collection' => '<p>Бозгашт ба <a href="$1">$2</a></p>',
	'coll-book_title' => 'Фармудани Китоби Чопӣ',
	'coll-book_text' => 'Шумо метавонед китоби ба табъ расидаро, ки саҳифаи гирдовариҳои шуморо дорост бо ташриф овардан ба яке аз ҳамкорони чоп-дархост фармоед:',
	'coll-order_from_pp' => 'Фармудани китоб аз $1',
	'coll-about_pp' => 'Дар бораи $1',
	'coll-invalid_podpartner_title' => 'Шарики Чоп-бо-дархости номӯътабар',
	'coll-license' => 'Иҷозатнома',
	'coll-return_to' => 'Бозгашт ба [[:$1]]',
);

/** Tajik (Latin) (Тоҷикӣ (Latin))
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'coll-print_template_prefix' => 'Cop',
	'coll-unknown_subpage_title' => 'Zersahifai noşinos',
	'coll-noscript_text' => "<h1>ÇavaSkript Lozim ast!</h1>
<strong>Mururgari şumo ÇavaSkriptro dastgirī namekunad jo ÇavaSkript xomūş karda şudaast.
In sahifa durust kor xohad karda, dar holate, ki ÇavaSkript fa'ol karda şuda boşad.</strong>",
	'coll-your_book' => 'Kitobi şumo',
	'coll-download_title' => 'Darjoft',
	'coll-download' => 'Darjoft',
	'coll-format_label' => 'Qolab:',
	'coll-remove' => 'Hazf',
	'coll-show' => 'Namoiş',
	'coll-move_to_top' => 'Harakat bo bolo',
	'coll-move_up' => 'Ba bolo',
	'coll-move_down' => 'Ba pojon',
	'coll-move_to_bottom' => 'Harakat ba pojon',
	'coll-title' => 'Unvon:',
	'coll-subtitle' => 'Zerunvon:',
	'coll-contents' => 'Mundariça',
	'coll-create_chapter' => 'Eçodi fasl',
	'coll-sort_alphabetically' => 'Ba tartib darovardan az rūi alifbo',
	'coll-rename' => 'Taƣjiri nom',
	'coll-new_chapter' => 'Baroi fasli çadid nomero vorid kuned',
	'coll-rename_chapter' => 'Baroi fasl nomi çadidero vorid kuned',
	'coll-no_such_category' => 'Cunin gurūh vuçud nadorad',
	'coll-notitle_title' => 'Unvoni sahifa muşaxxas şuda nametavonad.',
	'coll-mwserve_failed_title' => 'Xato dar korguzori tarçumakunanda',
	'coll-error_reponse' => 'Posuxi xatoe az xidmatguzor',
	'coll-revision' => 'Nusxa: $1',
	'coll-save_collection_text' => 'Intixobi jak makon:',
	'coll-overwrite_title' => 'Sahifa vuçud dorad. Ba rūi on az navişta şavad?',
	'coll-overwrite_text' => 'Sahifae bo nomi [[:$1]] allakaj vuçud dorad.
Ojo şumo mexohed onro bo girdovariji xud ivaz kuned?',
	'coll-yes' => 'Bale',
	'coll-no' => 'Ne',
	'coll-overwrite' => 'Ba rūj naviştan',
	'coll-append' => 'Afzudan',
	'coll-cancel' => 'Laƣv',
	'coll-update' => 'Barūz kardan',
	'coll-rendering_title' => 'Dar holi tarçuma dodan',
	'coll-rendering_status' => "<strong>Vaz'ijat:</strong> $1",
	'coll-rendering_article' => '(sahifai viki: $1)',
	'coll-rendering_page' => '(sahifa: $1)',
	'coll-notfound_title' => 'Kitob joft naşud',
	'coll-return_to_collection' => '<p>Bozgaşt ba <a href="$1">$2</a></p>',
	'coll-about_pp' => 'Dar borai $1',
	'coll-invalid_podpartner_title' => "Şariki Cop-bo-darxosti nomū'tabar",
	'coll-license' => 'Içozatnoma',
	'coll-return_to' => 'Bozgaşt ba [[:$1]]',
);

/** Thai (ไทย)
 * @author Ans
 * @author Harley Hartwell
 * @author Korrawit
 * @author Manop
 * @author Octahedron80
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'coll-desc' => '[[Special:Book|สร้างหนังสือ]]',
	'coll-book_creator_intro' => "<big>ด้วย ''ตัวสร้างหนังสือ'' คุณสามารถสร้างหนังสือจากหน้าวิกิที่คุณเลือกได้ คุณสามารถดาวน์โหลดหนังสือในรูปแบบไฟล์ต่าง ๆ เช่น PDF หรือ ODF หรือสั่งพิมพ์หนังสือออกมาเป็นเล่มได้</big>",
	'coll-manage_your_book' => 'จัดการหนังสือของคุณ',
	'coll-book_creator_help' => 'ดู [[{{MediaWiki:Coll-helppage}}|หน้าความช่วยเหลือเกี่ยวกับหนังสือ]] สำหรับข้อมูลเพิ่มเติม',
	'coll-start_book_creator' => 'เริ่มใช้ตัวสร้างหนังสือ',
	'coll-book_creator_continue' => 'ใช้ตัวสร้างหนังสือต่อไป',
	'coll-book_creator_disable_text' => "''ตัวสร้างหนังสือ'' จะถูกยกเลิก และหนังสือที่คุณกำลังสร้างอยู่จะถูกลบออก",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/ข้อความตัวสร้างหนังสือ',
	'coll-collection' => 'หนังสือ',
	'coll-collections' => 'หนังสือ',
	'coll-exclusion_category_title' => 'ไม่รวมในส่วนพิมพ์',
	'coll-print_template_prefix' => 'พิมพ์',
	'coll-print_template_pattern' => '$1/พิมพ์',
	'coll-unknown_subpage_title' => 'หน้าย่อยที่ไม่รู้จัก',
	'coll-unknown_subpage_text' => '[[Special:Book|หนังสือ]] ไม่มีหน้าย่อยนี้',
	'coll-couldnotaddarticle_title' => 'ไม่สามารถเพิ่มหน้าวิกิได้',
	'coll-couldnotaddarticle_msg' => 'หน้าวิกิไม่สามารถเพิ่มลงไปได้',
	'coll-couldnotremovearticle_title' => 'ไม่สามารถลบหน้าวิกิได้',
	'coll-couldnotremovearticle_msg' => 'หน้าวิกิไม่สามารถถูกลบออกได้',
	'coll-noscript_text' => '<h1>จำเป็นต้องใช้จาวาสคริปต์!</h1>
<strong>เบราว์เซอร์ของคุณไม่รองรับจาวาสคริปต์หรือจาวาสคริปต์ถูกปิดการใช้งาน
หน้านี้จะไม่สามารถทำงานได้อย่างถูกต้อง ถ้าไม่มีการเปิดใช้จาวาสคริปต์</strong>',
	'coll-savedbook_template' => 'หนังสือที่บันทึก',
	'coll-your_book' => 'หนังสือของคุณ',
	'coll-download_title' => 'ดาวน์โหลด',
	'coll-download_text' => 'เพื่อดาวน์โหลดหนังสือของคุณ เลือกรูปแบบและคลิกปุ่ม',
	'coll-download_as_text' => 'เพื่อดาวน์โหลดหนังสือของคุณในรูปแบบ $1 คลิกปุ่ม',
	'coll-download' => 'ดาวน์โหลด',
	'coll-format_label' => 'รูปแบบ:',
	'coll-remove' => 'ลบออก',
	'coll-show' => 'แสดง',
	'coll-move_to_top' => 'ย้ายไปบนสุด',
	'coll-move_up' => 'ย้ายขึ้น',
	'coll-move_down' => 'ย้ายลง',
	'coll-move_to_bottom' => 'ย้ายไปล่างสุด',
	'coll-title' => 'ชื่อเรื่อง:',
	'coll-subtitle' => 'ชื่อเรื่องย่อย:',
	'coll-contents' => 'เนื้อหา',
	'coll-drag_and_drop' => 'ใช้การลากและปล่อย เพื่อจัดลำดับบทและหน้าวิกิ',
	'coll-create_chapter' => 'สร้างบท',
	'coll-sort_alphabetically' => 'เรียงตามลำดับตัวอักษร',
	'coll-rename' => 'เปลี่ยนชื่อ',
	'coll-new_chapter' => 'ใส่ชื่อสำหรับบทใหม่',
	'coll-rename_chapter' => 'ใส่ชื่อใหม่สำหรับบทนี้',
	'coll-no_such_category' => 'ไม่มีหมวดหมู่ดังกล่าว',
	'coll-notitle_title' => 'หัวเรื่องของหน้าไม่สามารถกำหนดได้',
	'coll-post_failed_title' => 'คำสั่ง POST ผิดพลาด',
	'coll-post_failed_msg' => 'คำสั่ง POST ไปที่ $1 ผิดพลาด ($2)',
	'coll-mwserve_failed_title' => 'ความผิดพลาดของเซิร์ฟเวอร์เรนเดอร์',
	'coll-mwserve_failed_msg' => 'เกิดข้อผิดพลาดในเซิร์ฟเวอร์แปลงข้อมูล: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'มีความผิดพลาดตอบกลับมาจากเซิร์ฟเวอร์',
	'coll-empty_collection' => 'หนังสือว่าง',
	'coll-revision' => 'รุ่น: $1',
	'coll-save_collection_title' => 'บันทึกและแบ่งปันหนังสือของคุณ',
	'coll-save_collection_text' => 'เลือกตำแหน่งที่จะเก็บสำหรับหนังสือของคุณ:',
	'coll-login_to_save' => 'หากคุณต้องการบันทึกหนังสือเพื่อใช้ในภายหลัง กรุณา[[Special:UserLogin|ล็อกอินหรือสร้างบัญชีผู้ใช้]]',
	'coll-personal_collection_label' => 'หนังสือส่วนตัว:',
	'coll-community_collection_label' => 'หนังสือชุมชน:',
	'coll-save_collection' => 'บันทึกหนังสือ',
	'coll-save_category' => 'หนังสือที่บันทึกทั้งหมดถูกเพิ่มในหมวดหมู่ [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]',
	'coll-overwrite_title' => 'มีหน้านี้แล้ว
เขียนทับ?',
	'coll-overwrite_text' => 'หน้าที่อยู่ภายใต้ชื่อ [[:$1]] มีอยู่แล้ว
คุณต้องการแทนที่หน้านั้นด้วยหนังสือคุณหรือไม่',
	'coll-yes' => 'ใช่',
	'coll-no' => 'ไม่ใช่',
	'coll-load_overwrite_text' => 'หนังสือของคุณพอมีหน้าบรรจุอยู่บ้างแล้ว
คุณต้องการจะทำสิ่งไหนระหว่าง เขียนทับลงในหนังสือของคุณ เพิ่มเนื้อหาต่อท้าย หรือยกเลิกการโหลดหนังสือนี้',
	'coll-overwrite' => 'เขียนทับ',
	'coll-append' => 'เพิ่มต่อท้าย',
	'coll-cancel' => 'ยกเลิก',
	'coll-update' => 'อัปเดต',
	'coll-limit_exceeded_title' => 'หนังสือใหญ่เกินไป',
	'coll-limit_exceeded_text' => 'หนังสือของคุณใหญ่เกินไป
ไม่สามารถเพิ่มหน้าใดเข้าไปได้อีก',
	'coll-rendering_title' => 'กำลังเรนเดอร์',
	'coll-rendering_text' => '<p><strong>โปรดรอในระหว่างที่หนังสือถูกสร้าง</strong></p>

<p><strong>ความคืบหน้า:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>หน้านี้ควรรีเฟรชตัวเองทุก ๆ สองถึงสามวินาที
หากหน้านี้ไม่รีเฟรชตัวเอง กรุณากดปุ่มรีเฟรชบนเบราว์เซอร์ของคุณ</p>',
	'coll-rendering_status' => '<strong>สถานะ:</strong> $1',
	'coll-rendering_article' => '(หน้าวิกิ: $1)',
	'coll-rendering_page' => '(หน้า: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/กำลังแปลงหน้าเป็นข้อความ',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/ข้อความกำลังแปลงข้อมูลหน้า',
	'coll-rendering_finished_title' => 'การเรนเดอร์เสร็จสิ้น',
	'coll-rendering_finished_text' => '<strong>สร้างหนังสือเสร็จเรียบร้อยแล้ว</strong>
<strong>[$1 ดาวน์โหลดหนังสือ]</strong> ลงเครื่องคอมพิวเตอร์ของคุณ

หมายเหตุ:
* หากคุณไม่พอใจกับการแสดงผลหนังสือที่ออกมา ให้ดูที่ [[{{MediaWiki:Coll-helppage}}|หน้าความช่วยเหลือเกี่ยวกับหนังสือ]] สำหรับความเป็นไปได้ที่จะปรับปรุงการแสดงผล',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/ข้อความกำลังแปลงข้อมูลหน้า',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/ข้อความกำลังแปลงข้อมูลที่รวบรวม',
	'coll-notfound_title' => 'ไม่พบหนังสือที่ต้องการ',
	'coll-notfound_text' => 'ไม่สามารถค้นหาหน้าหนังสือ',
	'coll-download_notfound_title' => 'ไม่พบไฟล์',
	'coll-download_notfound_text' => 'ไฟล์ที่คุณกำลังพยายามดาวน์โหลดนั้นไม่ปรากฏ:
ไฟล์อาจจะถูกลบหรือต้องการการสร้างใหม่อีกครั้งหนึ่ง',
	'coll-download_failed_title' => 'เกิดความผิดพลาดระหว่างการดาวน์โหลด',
	'coll-download_failed_text' => 'มีความผิดพลาดเกิดขึ้นเมื่อดาวน์โหลดไฟล์: $1',
	'coll-is_cached' => '<ul><li>พบรุ่นที่เก็บไว้ของหนังสือนี้ จึงไม่จำเป็นต้องสร้างหนังสือนี้ใหม่
<a href="$1">บังคับสร้างหนังสือนี้ใหม่</a></li></ul>',
	'coll-excluded-templates' => '* แม่แบบในหมวดหมู่ [[:Category:$1|$1]] ไม่ถูกนำเข้ามารวม',
	'coll-blacklisted-templates' => '* แม่แบบในบัญชีดำ [[:$1]] ไม่ได้ถูกรวมไว้',
	'coll-return_to_collection' => '<p>กลับไปที่ <a href="$1">$2</a></p>',
	'coll-book_title' => 'สั่งหนังสือเป็นรูปเล่ม',
	'coll-book_text' => 'รับหนังสือที่พิมพ์แล้วจากบริษัทรับพิมพ์หนังสือ',
	'coll-order_from_pp' => 'แสดงตัวอย่างหนังสือ และสั่งหนังสือจาก $1',
	'coll-about_pp' => 'เกี่ยวกับ $1',
	'coll-invalid_podpartner_title' => 'ส่วนร่วม POD ไม่ถูกต้อง',
	'coll-invalid_podpartner_msg' => 'ส่วนร่วม POD ที่จัดหาไม่ถูกต้อง
กรุณาติดต่อผู้ดูแลมีเดียวิกิของคุณ',
	'coll-license' => 'สัญญาอนุญาต (license)',
	'coll-return_to' => 'กลับไปที่ [[:$1]]',
	'coll-more_info' => 'แสดงข้อมูลเพิ่มเติม',
	'coll-hide_info' => 'ซ่อนข้อมูลเพิ่มเติม',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/ข้อมูลการสั่งซื้อ PediaPress',
	'coll-suggest_title' => 'หน้าแนะนำสำหรับหนังสือของคุณ',
	'coll-suggest_intro_text' => 'คำแนะนำทั้งหมดนั้นอ้างอิงจากชุดของหน้าวิกิในหนังสือของคุณ
รายการนี้จะถูกปรับปรุงเมื่อคุณคลิกเพิ่มหรือลบ',
	'coll-suggested_articles' => 'คำแนะนำ',
	'coll-suggest_reset_bans' => 'ล้าง',
	'coll-suggest_reset_bans_tooltip' => 'แสดงคำแนะนำที่ผ่านมาที่ถูกลบ',
	'coll-suggest_add_selected' => 'เพิ่มหน้าที่เลือก',
	'coll-suggest_ban_selected' => 'ลบหน้าที่เลือก',
	'coll-suggest_your_book' => 'หนังสือของคุณ',
	'coll-suggest_show' => 'แสดง',
	'coll-suggest_ban_tooltip' => 'นำหน้านี้ออกจากรายการคำแนะนำ',
	'coll-suggest_article_ban' => 'หน้า <strong>$1</strong> ถูกลบออกจากรายการคำแนะนำแล้ว ($2)',
	'coll-suggest_article_add' => 'เพิ่มหน้า <strong>$1</strong> ลงไปในหนังสือของคุณแล้ว ($2)',
	'coll-suggest_article_remove' => 'นำหน้า <strong>$1</strong> ออกจากหนังสือของคุณแล้ว ($2)',
	'coll-suggest_undo_tooltip' => 'ย้อนการกระทำนี้',
	'coll-suggest_undo' => 'ย้อนกลับ',
	'coll-load_local_book' => 'คลิกตกลงเพื่อดำเนินการต่อกับหนังสือ %TITLE% ของคุณซึ่งประกอบด้วยหน้าวิกิ %NUMPAGES% หน้า คลิกยกเลิกเพื่อลบออกและเริ่มต้นใหม่ด้วยหนังสือว่าง',
	'right-collectionsaveasuserpage' => 'บันทึกหนังสือในหน้าผู้ใช้',
	'right-collectionsaveascommunitypage' => 'บันทึกหนังสือเป็นหนังสือส่วนรวม',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'coll-desc' => '[[Special:Book|Kitap döret]]',
	'coll-manage_your_book' => 'Öz kitabyňy dolandyr',
	'coll-book_creator_help' => 'Has köp maglumat üçin [[{{MediaWiki:Coll-helppage}}|kitaplar hakdaky ýardam sahypasyna]] serediň.',
	'coll-start_book_creator' => 'Kitap döredijini başlat',
	'coll-book_creator_continue' => 'Kitap döredijini ulanmaga dowam et',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Kitap dörediji teksti',
	'coll-collection' => 'Kitap',
	'coll-collections' => 'Kitaplar',
	'coll-exclusion_category_title' => 'Printe goşma',
	'coll-print_template_prefix' => 'Print et',
	'coll-print_template_pattern' => '$1/Print et',
	'coll-unknown_subpage_title' => 'Näbelli kiçi sahypa',
	'coll-unknown_subpage_text' => '[[Special:Book|Kitabyň]] bu kimi sahypasy ýok',
	'coll-couldnotaddarticle_title' => 'Wiki sahypasyny goşup bolmaýar',
	'coll-couldnotaddarticle_msg' => 'Wiki sahypasyny goşup bolmady.',
	'coll-couldnotremovearticle_title' => 'Wiki sahypasyny aýryp bolmady',
	'coll-couldnotremovearticle_msg' => 'Wiki sahypasyny aýryp bolmady',
	'coll-savedbook_template' => 'ýazdyrylan_kitap',
	'coll-your_book' => 'Kitabyňyz',
	'coll-download_title' => 'Düşür',
	'coll-download_text' => 'Kitabyňyzy düşürmek üçin bir format saýlaň we düwmä tyklaň.',
	'coll-download_as_text' => 'Kitabyňyzy $1 formatynda düşürmek üçin düwmä tyklaň.',
	'coll-download' => 'Düşür',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Aýyr',
	'coll-show' => 'Görkez',
	'coll-move_to_top' => 'Iň ýokaryk geçir',
	'coll-move_up' => 'Ýokarlygyna geçir',
	'coll-move_down' => 'Aşaklygyna geçir',
	'coll-move_to_bottom' => 'Iň aşak geçir',
	'coll-title' => 'At:',
	'coll-subtitle' => 'Kiçi at:',
	'coll-contents' => 'Mazmuny',
	'coll-drag_and_drop' => 'Wiki sahypalaryny we  bölümleri gaýtadan tertiplemek üçin süýre & goý-y ulanyň',
	'coll-create_chapter' => 'Bap döret',
	'coll-sort_alphabetically' => 'Elipbiý boýunça düz',
	'coll-rename' => 'Adyny üýtget',
	'coll-new_chapter' => 'Täze bap üçin at ýazyň',
	'coll-rename_chapter' => 'Bap üçin täze at ýazyň',
	'coll-no_such_category' => 'Beýle kategoriýa ýok',
	'coll-notitle_title' => 'Sahypanyň adyny kesgitläp bolmady.',
	'coll-post_failed_title' => 'POST talaby şowsuz',
	'coll-post_failed_msg' => '$1 üçin POST talaby şowsuz ($2).',
	'coll-mwserve_failed_title' => 'Iş serweri säwligi',
	'coll-mwserve_failed_msg' => 'İş serwerinde bir säwlik döredi: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Serwerden säwlik jogaby',
	'coll-empty_collection' => 'Boş kitap',
	'coll-revision' => 'Wersiýa: $1',
	'coll-save_collection_title' => 'Kitabyňy ýazdyr we paýlaş',
	'coll-save_collection_text' => 'Kitabyňyz üçin bir ýer saýlaň:',
	'coll-login_to_save' => 'Kitaplaryňyzy soňundan ulanmak üçin ýazdyrnak isleýän bolsaňyz, [[Special:UserLogin|sessiýa açyň ýa-da hasap dörediň]].',
	'coll-personal_collection_label' => 'Şahsy kitap:',
	'coll-community_collection_label' => 'Jemgyýetçilik kitaby:',
	'coll-save_collection' => 'Kitaby ýazdyr',
	'coll-save_category' => 'Ähli ýazdyrylan kitaplar [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] kategoriýasyna goşulýar.',
	'coll-overwrite_title' => 'Sahypa bar.
Üstüne ýazmalymy?',
	'coll-overwrite_text' => '[[:$1]] atly sahypa eýýäm bar.
Onuň kitabyňyz bilen bilelikde çalşyrylmagyny isleýärsiňizmi?',
	'coll-yes' => 'Hawa',
	'coll-no' => 'Ýok',
	'coll-load_overwrite_text' => 'Kitabyňyzda eýýäm birnäçe sahypa bar.
Şu wagtky kitabyňyzyň üsütne ýazdyrasyňyz, oňa täze mazmun goşasyňyz ýa-da bu kitaby ýüklemegi bes edesiňiz gelýärmi?',
	'coll-overwrite' => 'Üstüne ýaz',
	'coll-append' => 'Goş',
	'coll-cancel' => 'Goýbolsun et',
	'coll-update' => 'Täzele',
	'coll-limit_exceeded_title' => 'Kitap aşa uly',
	'coll-limit_exceeded_text' => 'Kitabyňyz aşa uly.
Indi sahypa goşup bolmaýar.',
	'coll-rendering_title' => 'Döredilýär',
	'coll-rendering_text' => '<p><strong>Dokument döredilýänçä garaşyň.</strong></p>

<p><strong>Işiň gidişi:</strong> %<span id="renderingProgress">$1</span> <span id="renderingStatus">$2</span></p>

<p>Bu sahypa birnäçe sekuntdan täzelenip durmalydyr.
Eger işlemýän bolsa, onda brauzeriňiziň täzele düwmesine basyň.</p>',
	'coll-rendering_status' => '<strong>Status:</strong> $1',
	'coll-rendering_article' => '(wiki sahypasy: $1)',
	'coll-rendering_page' => '(sahypa: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Sahypanyň maglumat teksti işlenilýär',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Kolleksiýanyň maglumat teksti işlenilýär',
	'coll-rendering_finished_title' => 'Döretme tamamlandy',
	'coll-rendering_finished_text' => '<strong>Dokument döredildi.</strong>
Faýly kompýuteriňize <strong>[$1 göçürip alyň]</strong>.

Bellik:
* Netije sizi kanagatlandyrmaýarmy? Ony ösdürmegiň mümkinçilikleri üçin [[{{MediaWiki:Coll-helppage}}|kitaplar hakyndaky kömek sahypalaryna]] serediň.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Sahypanyň maglumat teksti işlenilýär',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Kolleksiýanyň maglumat teksti işlenilýär',
	'coll-notfound_title' => 'Kitap tapylmady',
	'coll-notfound_text' => 'Kitap sahypasyny tapyp bolmady.',
	'coll-download_notfound_title' => 'Faýl tapylmady',
	'coll-download_notfound_text' => 'Göçürip aljak bolýan faýlyňyz ýok: Ol öçürilendir ýa-da täzeden döredilmelidir.',
	'coll-download_failed_title' => 'Düşürilýän mahaly säwlik',
	'coll-download_failed_text' => 'Faýl düşürilýärkä säwlik döredi: $1',
	'coll-is_cached' => '<ul><li>Bu dokumantiň keşli wersiýasy tapyldy, şol sebäpli ony işlemek gerek bolmady. <a href="$1">Şonda-da täzeden işletdir.</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]] kategoriýasyndaky şablonlar degişli edilmedi.',
	'coll-blacklisted-templates' => '* [[:$1]] gara sanawyndaky şablonlar degişli edilmedi.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a> kitabyna gaýdyp bar</p>',
	'coll-book_title' => 'Çap edilen kitap hökmünde buýurma ber',
	'coll-book_text' => 'Tlap boýunça print edýän partnýorymyzdan print edilen kitap al:',
	'coll-order_from_pp' => '$1 bilen deslapky synla',
	'coll-about_pp' => '$1 hakda',
	'coll-invalid_podpartner_title' => 'Nädogry POD partneri',
	'coll-invalid_podpartner_msg' => 'Üpjün edilen POD partneri nädogry.
MediaWiki administratoryňyz bilen habarlaşyň.',
	'coll-license' => 'Lisenziýa',
	'coll-return_to' => '[[:$1]] sahypasyna gaýdyp bar',
	'coll-more_info' => 'Has köp maglumat görkez',
	'coll-hide_info' => 'Maglumaty gizle',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress buýurma maglumaty',
	'coll-suggest_title' => 'Kitabyňyz üçin teklip edilýän sahypalar',
	'coll-suggest_intro_text' => 'Teklipler häzirki wagtda kitabyňyzda bar bolan wiki sahypalaryna esaslanýar. 
Goş ýa-da ýyr düwmelerine her basanyňyzda bu sanaw täzelenilýär.',
	'coll-suggested_articles' => 'Teklipler',
	'coll-suggest_reset_bans' => 'başky ýagdaýa getir',
	'coll-suggest_reset_bans_tooltip' => 'Ozal aýrylan teklipleri görkez',
	'coll-suggest_add_selected' => 'Saýlanylan sahypalary goş',
	'coll-suggest_ban_selected' => 'Saýlanylan sahypalary aýyr',
	'coll-suggest_your_book' => 'Kitabyňyz',
	'coll-suggest_show' => 'görkez',
	'coll-suggest_ban_tooltip' => 'Bu sahypany teklip sanawyndan aýyr',
	'coll-suggest_article_ban' => '<strong>$1</strong> sahypasy tekliplerden ($2) aýyryldy.',
	'coll-suggest_article_add' => '<strong>$1</strong> sahypasy kitabyňyza ($2) goşuldy.',
	'coll-suggest_article_remove' => '<strong>$1</strong> sahypasy kitabyňyzdan ($2) aýyryldy.',
	'coll-suggest_undo_tooltip' => 'Bu hereketi yzyna al',
	'coll-suggest_undo' => 'yzyna al',
	'coll-load_local_book' => '%NUMPAGES% wiki sahypasyny öz içine alýan kitabyňyz %TITLE% bilen dowam etmek üçin Bolýar-a basyň. Muny öçürmek we boş bir kitaba başlamak üçin Goýbolsun et-e basyň.',
	'right-collectionsaveasuserpage' => 'Kitaplary ulanyjy sahypasy hökmünde ýazdyr',
	'right-collectionsaveascommunitypage' => 'Kitaplary jemgyýetçilik sahypasy edip ýazdyr',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'coll-desc' => '[[Special:Book|Lumikha ng mga aklat]]',
	'coll-book_creator_intro' => "<big>Sa pamamagitan ng ''panglikha ng aklat'' maaari kang lumikha ng isang aklat na naglalaman ng mga pahinang pangwiki na pinili mo. Mailuluwas mo ang aklat sa iba't ibang mga anyo (halimbawa na ang PDF o ODF) o umorder ng kopyang nakalimbag.</big>",
	'coll-manage_your_book' => 'Pamahalaan ang aklat mo',
	'coll-book_creator_help' => 'Tingnan [[{{MediaWiki:Coll-helppage}}|ang pahina ng tulong tungkol sa mga aklat]] para sa marami pang kabatiran.',
	'coll-start_book_creator' => 'Simulan ang panglikha ng aklat',
	'coll-book_creator_continue' => 'Magpatuloy sa paggamit ng panglikha ng aklat',
	'coll-book_creator_disable_text' => "Hindi pagaganahin ang '''panglikha ng aklat''' at tatanggalin ang aklat na ginagawa mo.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Tekstong panglikha ng aklat',
	'coll-collection' => 'Aklat',
	'coll-collections' => 'Mga aklat',
	'coll-exclusion_category_title' => 'Huwag isama sa paglimbag',
	'coll-print_template_prefix' => 'Ilimbag',
	'coll-print_template_pattern' => '$1/Limbag',
	'coll-unknown_subpage_title' => 'Hindi nalalamang kabahaging pahina',
	'coll-unknown_subpage_text' => 'Hindi umiiral ang kabahaging pahinang ito ng [[Special:Book|Aklat]]',
	'coll-couldnotaddarticle_title' => 'Hindi maidagdag ang pahinang pangwiki',
	'coll-couldnotaddarticle_msg' => 'Hindi maidaragdag ang pahinang pangwiki.',
	'coll-couldnotremovearticle_title' => 'Hindi matanggal ang pahinang pangwiki',
	'coll-couldnotremovearticle_msg' => 'Hindi matatanggal ang pahinang pangwiki.',
	'coll-noscript_text' => "<h1>Kailangan ang JavaScript!</h1>
<strong>Hindi sinusuportan ng iyong pantingin-tingin (''browser'') ang JavaScript o nakapatay ang JavaScript.
Hindi aandar ng tama ang pahinang ito, maliban na lamang kung bubuhayin ang JavaScript.</strong>",
	'coll-savedbook_template' => 'sinagip_na_aklat',
	'coll-your_book' => 'Aklat mo',
	'coll-download_title' => 'Ikargang-pakuha',
	'coll-download_text' => 'Upang maikargang-pababa ang aklat mo pumili ng isang anyo at pindutin ang pindutan.',
	'coll-download_as_text' => 'Upang maikargang-pababa ang aklat mo sa anyong $1 pindutin ang pindutan.',
	'coll-download' => 'Ikargang-pakuha',
	'coll-format_label' => 'Pormat (anyo):',
	'coll-remove' => 'Tanggalin',
	'coll-show' => 'Ipakita',
	'coll-move_to_top' => 'Ilipat sa itaas',
	'coll-move_up' => 'Ilipat sa itaas',
	'coll-move_down' => 'Ilipat sa ibaba',
	'coll-move_to_bottom' => 'Ilipat sa ilalim',
	'coll-title' => 'Pamagat:',
	'coll-subtitle' => 'Kabahaging pamagat:',
	'coll-contents' => 'Mga nilalaman',
	'coll-drag_and_drop' => 'Gamitin ang "kaladkarin at ibagsak" upang muling maiayos ang mga pahina at mga kabanata ng wiki',
	'coll-create_chapter' => 'Lumikha ng kabanata',
	'coll-sort_alphabetically' => 'Ayusing ayon sa abakada (alpabeto)',
	'coll-rename' => 'Pangalanang muli',
	'coll-new_chapter' => 'Maglagay ng pangalan para sa bagong kabanata',
	'coll-rename_chapter' => 'Maglagay ng bagong pangalan para sa kabanata',
	'coll-no_such_category' => 'Walang ganyang kaurian',
	'coll-notitle_title' => 'Hindi matukoy ang pamagat ng pahina.',
	'coll-post_failed_title' => 'Nabigo ang kahilingang ITALA',
	'coll-post_failed_msg' => 'Nabigo ang kahilingang ITALA sa $1 ($2).',
	'coll-mwserve_failed_title' => 'Kamalian sa naghahaing serbidor',
	'coll-mwserve_failed_msg' => 'Naganap ang isang kamalian sa naghahaing serbidor: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'May kamalian sa tugon ng serbidor',
	'coll-empty_collection' => 'Aklat na walang laman',
	'coll-revision' => 'Pagbabago: $1',
	'coll-save_collection_title' => 'Sagipin at ipamahagi ang aklat mo',
	'coll-save_collection_text' => 'Pumili ng isang pook (lokasyon):',
	'coll-login_to_save' => 'Kung nais mong magsagip ng mga aklat para gamitin sa ibang pagkakataon, mangyaring [[Special:UserLogin|lumagda o lumikha ng akawnt]].',
	'coll-personal_collection_label' => 'Pansariling aklat:',
	'coll-community_collection_label' => 'Aklat ng pamayanan:',
	'coll-save_collection' => 'Sagipin ang aklat',
	'coll-save_category' => 'Idinaragdag ang lahat ng nakasagip na mga aklat sa loob ng kategoryang [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Umiiral ang pahina.
Patungan?',
	'coll-overwrite_text' => 'Umiiral na ang isang pahinang may pangalang [[:$1]].
Nais mo bang palitan ito ng iyong kalipunan?',
	'coll-yes' => 'Oo',
	'coll-no' => 'Hindi',
	'coll-load_overwrite_text' => 'Mayroon ka nang ilang mga pahina sa loob ng aklat mo.
Nais mo bang patungan ang iyong pangkasalukuyang aklat, ikabit ang bagong nilalaman, o huwag ituloy ang pagkakarga ng aklat na ito?',
	'coll-overwrite' => 'Patungan',
	'coll-append' => 'Ikabit',
	'coll-cancel' => 'Huwag ituloy',
	'coll-update' => 'Isapanahon',
	'coll-limit_exceeded_title' => 'Napakalaki ng aklat',
	'coll-limit_exceeded_text' => 'Napakalaki ng aklat mo.
Wala nang maidaragdag pang mga pahina.',
	'coll-rendering_title' => 'Naghahain',
	'coll-rendering_text' => "<p><strong>Mangyaring maghintay lamang habang ginagawa ang kasulatan (dokumento).</strong></p>

<p><strong>Katayuan ng pagsulong:</strong> <span id=\"renderingProgress\">\$1</span>% <span id=\"renderingStatus\">\$2</span></p>

<p>Dapat na kusang sumariwa ang pahinang ito sa bawat mangilan-ngilang mga segundo.
Kung hindi ito mangyari, pakipindot ang pindutang panariwa (''refresh'') ng iyong pantingin-tingin (''browser'').</p>",
	'coll-rendering_status' => '<strong>Kalagayan:</strong> $1',
	'coll-rendering_article' => '(pahinang wiki: $1)',
	'coll-rendering_page' => '(pahina: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Ibinibigay ang teksto pangkabatiran ng pahina',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Ibinibigay ang tekstong pangkabatiran ng kalipunan',
	'coll-rendering_finished_title' => 'Tapos na ang paghahain',
	'coll-rendering_finished_text' => '<strong>Nagawa na ang talaksang pangkasulatan (dokumento).</strong>
<strong>[$1 Ikargang-pakuha ang talaksan]</strong> papunta sa iyong kompyuter.

Mga tala:
* Hindi ka ba nasiyahan sa kinalabasan? Tingnan [[{{MediaWiki:Coll-helppage}}|ang pahina ng tulong hinggil sa mga kalipunan]] para sa mga bagay-bagay na maaaring gawin (posibilidad) upang mapainam pa ito.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Ibinibigay ang tekstong pangkabatiran ng pahina',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Ibinibigay ang tekstong pangkabatiran ng kalipunan',
	'coll-notfound_title' => 'Hindi natagpuan ang aklat',
	'coll-notfound_text' => 'Hindi matagpuan ang pahina ng aklat.',
	'coll-download_notfound_title' => 'Hindi natagpuan ang talaksan',
	'coll-download_notfound_text' => 'Hindi umiiral ang talaksang sinusubok mong ikargang pababa: Binura na ito marahil at kinakailangang muling likhain.',
	'coll-download_failed_title' => 'Kamalian habang ikinakargang-pababa',
	'coll-download_failed_text' => 'Mayroon kamalian habang kinakargang pababa ang talaksan: $1',
	'coll-is_cached' => '<ul><li>Natagpuan ang isang nakatagong bersyon ng kasulatan (dokumento), kaya\'t hindi na kailangan pa ang "paghahain". <a href="$1">Pilitin ang muling paghahain.</a></li></ul>',
	'coll-excluded-templates' => '* Hindi isinali ang mga suleras na nasa kauriang [[:Category:$1|$1]].',
	'coll-blacklisted-templates' => '* Hindi isinali ang mga suleras na nasa talaan ng mga pinagbabawalan [[:$1]]',
	'coll-return_to_collection' => '<p>Magbalik sa <a href="$1">$2</a></p>',
	'coll-book_title' => 'Orderin bilang isang nakalimbag na aklat',
	'coll-book_text' => 'Kumuha ng isang nakalimbag na aklat mula sa aming kasosyo sa "ilimbag-kapag-hiniling" (IKH):',
	'coll-order_from_pp' => 'Paunang tingnan na may $1',
	'coll-about_pp' => 'Mga $1',
	'coll-invalid_podpartner_title' => 'Hindi tanggap na kasosyo/kawaksing pang-IKH ("ilimbag-kapag-hiniling")',
	'coll-invalid_podpartner_msg' => 'Hindi tanggap ang ibinigay na kawaksi/kasosyong pang-IKH ("ilimbag-kapag-hiniling").
Makipagugnayan sa iyong tagapangasiwa ng MediaWiki.',
	'coll-license' => 'Pahintulot (lisensya)',
	'coll-return_to' => 'Bumalik sa [[:$1]]',
	'coll-more_info' => 'Magpakita ng mas marami pang kabatiran',
	'coll-hide_info' => 'Ikubli ang kabatiran',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PalimbagangPedya kabatiran ng hinihiling',
	'coll-suggest_title' => 'Minumungkahing mga pahina para sa aklat mo',
	'coll-suggest_intro_text' => 'Nakabatay ang mga mungkahi sa pangkasalukuyang pangkat ng mga pahinang pangwiki na nasa loob ng aklat mo.
Isinasapanahon ang talaan sa tuwing pipindutin mo ang mga pinduting pandagdag o pantanggal.',
	'coll-suggested_articles' => 'Mga mungkahi',
	'coll-suggest_reset_bans' => 'muling itakda',
	'coll-suggest_reset_bans_tooltip' => 'Ipakita ang dating mga tinanggal na mga mungkahi',
	'coll-suggest_add_selected' => 'Idagdag ang napiling mga pahina',
	'coll-suggest_ban_selected' => 'Tanggalain ang napiling mga pahina',
	'coll-suggest_your_book' => 'Ang aklat mo',
	'coll-suggest_show' => 'ipakita',
	'coll-suggest_ban_tooltip' => 'Tanggalin ang pahinang ito mula sa talaan ng mga mungkahi',
	'coll-suggest_article_ban' => 'Tinanggal ang pahinang <strong>$1</strong> mula sa mga mungkahi ($2).',
	'coll-suggest_article_add' => 'Naidagdag ang pahinang <strong>$1</strong> sa aklat mo ($2).',
	'coll-suggest_article_remove' => 'Naalis ang pahinang <strong>$1</strong> mula sa aklat mo ($2).',
	'coll-suggest_undo_tooltip' => 'Bawiin ang galaw na ito',
	'coll-suggest_undo' => 'ibalik',
	'coll-load_local_book' => 'Pindutin ang Okey upang magpatuloy sa aklat mong %TITLE% na naglalaman ng %NUMPAGES% na mga pahinang pangwiki.  Pindutin ang Huwag ituloy upang burahin ito at magsimula ng isang aklat na wala pang laman.',
	'right-collectionsaveasuserpage' => 'Sagipin ang mga aklat bilang pahina ng tagagamit',
	'right-collectionsaveascommunitypage' => 'Sagipin ang mga aklat bilang pahina ng pamayanan',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Karduelis
 * @author Mach
 * @author Manco Capac
 * @author Srhat
 * @author Suelnur
 */
$messages['tr'] = array(
	'coll-desc' => '[[Special:Book|Kitap oluştur]]',
	'coll-book_creator_intro' => "<big>''Kitap oluşturucu'' ile seçtiğiniz viki sayfalarından bir kitap oluşturabilirsiniz. Oluşturduğunuz kitabın diğer formatlardan (örneğin PDF veya ODF) çıktısını alabilir veya yazdırılmış bir kopya sipariş edebilirsiniz.</big>",
	'coll-manage_your_book' => 'Kitabınızı düzenleyin',
	'coll-book_creator_help' => 'Daha fazla bilgi için [[{{MediaWiki:Coll-helppage}}|kitaplar hakkındaki yardım sayfasına]] bakın.',
	'coll-start_book_creator' => 'Kitap oluşturucuyu başlat',
	'coll-book_creator_continue' => 'Kitap oluşturucuyu kullanmaya devam et',
	'coll-book_creator_disable_text' => "''Kitap oluşturucu'' devre dışı bırakılacak ve üzerinde çalıştığınız kitap silinecektir.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Kitap oluşturucu metni',
	'coll-collection' => 'Kitap',
	'coll-collections' => 'Kitaplar',
	'coll-exclusion_category_title' => 'Yazdırırken hariç tut',
	'coll-print_template_prefix' => 'Yazdır',
	'coll-print_template_pattern' => '$1/Yazdır',
	'coll-unknown_subpage_title' => 'Bilinmeyen altsayfa',
	'coll-unknown_subpage_text' => '[[Special:Book|Kitabın]] bu altsayfası mevcut değil',
	'coll-couldnotaddarticle_title' => 'Viki sayfası eklenemiyor',
	'coll-couldnotaddarticle_msg' => 'Viki sayfası eklenemedi.',
	'coll-couldnotremovearticle_title' => 'Viki sayfası kaldırılamıyor',
	'coll-couldnotremovearticle_msg' => 'Viki sayfası kaldırılamadı.',
	'coll-noscript_text' => '<h1>JavaScript gerekli!</h1>
<strong>Tarayıcınız JavaScript desteklemiyor ya da JavaScript kapalı.
JavaScript devreye sokulmadıkça bu sayfa doğru çalışmayacaktır.</strong>',
	'coll-savedbook_template' => 'kaydedilmiş_kitap',
	'coll-your_book' => 'Kitabınız',
	'coll-download_title' => 'İndir',
	'coll-download_text' => 'Kitabınızı bilgisayarınıza indirmek için bir format seçin ve butona tıklayın.',
	'coll-download_as_text' => 'Kitabınızı $1 formatında bilgisayarınıza indirmek için butona tıklayın.',
	'coll-download' => 'İndir',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Kaldır',
	'coll-show' => 'Göster',
	'coll-move_to_top' => 'En üste taşı',
	'coll-move_up' => 'Yukarı taşı',
	'coll-move_down' => 'Aşağı taşı',
	'coll-move_to_bottom' => 'En alta taşı',
	'coll-title' => 'Başlık:',
	'coll-subtitle' => 'Altbaşlık:',
	'coll-contents' => 'İçerik',
	'coll-drag_and_drop' => "Viki sayfalarını ve bölümleri yeniden sıralamak için sürükle & bırak'ı kullanın",
	'coll-create_chapter' => 'Bölüm oluştur',
	'coll-sort_alphabetically' => 'Alfabetik olarak sırala',
	'coll-rename' => 'Yeniden adlandır',
	'coll-new_chapter' => 'Yeni bölüm için isim girin',
	'coll-rename_chapter' => 'Bölüm için yeni isim girin',
	'coll-no_such_category' => 'Böyle bir kategori bulunmamaktadır',
	'coll-notitle_title' => 'Sayfanın başlığı belirlenemiyor.',
	'coll-post_failed_title' => 'POST isteği başarısız',
	'coll-post_failed_msg' => '$1 için POST isteği başarısız ($2).',
	'coll-mwserve_failed_title' => 'İşlem sunucusu hatası',
	'coll-mwserve_failed_msg' => 'İşlem sunucusunda bir hata oluştu: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Sunucudan hata cevabı',
	'coll-empty_collection' => 'Boş kitap',
	'coll-revision' => 'Revizyon: $1',
	'coll-save_collection_title' => 'Kitabınızı kaydedip paylaşın',
	'coll-save_collection_text' => 'Bir konum seçin:',
	'coll-login_to_save' => 'Kitaplarınızı daha sonra kullanmak için kaydetmek istiyorsanız, lütfen [[Special:UserLogin|giriş yapın ya da bir hesap oluşturun]].',
	'coll-personal_collection_label' => 'Kişisel kitap:',
	'coll-community_collection_label' => 'Topluluk kitabı:',
	'coll-save_collection' => 'Kitabı kaydet',
	'coll-save_category' => 'Tüm kaydedilen kitaplar [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] kategorisine eklenir.',
	'coll-overwrite_title' => 'Sayfa zaten mevcut.
Üzerine yazmak ister misiniz?',
	'coll-overwrite_text' => '[[:$1]] adında bir sayfa zaten mevcut.
Kitabınızla beraber değiştirilmesini istiyor musunuz?',
	'coll-yes' => 'Evet',
	'coll-no' => 'Hayır',
	'coll-load_overwrite_text' => 'Kitabınızda birkaç sayfa zaten var.
Şu anki kitabınızın üzerine yazmak mı, yeni içeriği eklemek mi, veya bu kitabı yüklemeyi iptal etmek mi istiyorsunuz?',
	'coll-overwrite' => 'Üzerine yaz',
	'coll-append' => 'Ekle',
	'coll-cancel' => 'İptal',
	'coll-update' => 'Güncelle',
	'coll-limit_exceeded_title' => 'Kitap çok büyük',
	'coll-limit_exceeded_text' => 'Kitabınız çok büyük.
Daha fazla sayfa eklenememektedir.',
	'coll-rendering_title' => 'Oluşturuluyor',
	'coll-rendering_text' => '<p><strong>Lütfen belge oluşturulurken bekleyin.</strong></p>

<p><strong>İlerleme:</strong> %<span id="renderingProgress">$1</span> <span id="renderingStatus">$2</span></p>

<p>Bu sayfa birkaç saniyede bir otomatik yenilenmelidir.
Eğer çalışmıyorsa, lütfen tarayıcınızın yenileme tuşuna basın.</p>',
	'coll-rendering_status' => '<strong>Durum:</strong> $1',
	'coll-rendering_article' => '(viki sayfası: $1)',
	'coll-rendering_page' => '(sayfa: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/İşleyici sayfası bilgi metni',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/İşleyici kolleksiyonu bilgi metni',
	'coll-rendering_finished_title' => 'Oluşturma tamamlandı',
	'coll-rendering_finished_text' => '<strong>Belge oluşturuldu.</strong>
Dosyayı bilgisayarınıza <strong>[$1 indirin]</strong>.

Not:
* Çıktıdan memnun değil misiniz? Geliştirme olanakları için [[{{MediaWiki:Coll-helppage}}|kitaplar hakkındaki yardım sayfalarına]] bakın.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/İşleyici sayfası bilgi metni',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/İşleyici koleksiyonu bilgi metni',
	'coll-notfound_title' => 'Kitap bulunamadı',
	'coll-notfound_text' => 'Kitap sayfası bulunamadı.',
	'coll-download_notfound_title' => 'Dosya bulunamadı',
	'coll-download_notfound_text' => 'İndirmeye çalıştığınız dosya mevcut değil: Silinmiş olabilir ve yeniden oluşturulması gerekebilir.',
	'coll-download_failed_title' => 'İndirme sırasında hata',
	'coll-download_failed_text' => 'Dosya indirilirken hata oluştu: $1',
	'coll-is_cached' => '<ul><li>Belgenin önbellekteki bir sürümü bulundu, bu yüzden oluşturmaya gerekmemektedir. <a href="$1">Yeniden oluşturmaya zorla.</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]] kategorisindeki şablonlar hariç tutuldu.',
	'coll-blacklisted-templates' => '* [[:$1]] kara listesindeki şablonlar hariç tutuldu.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a> kitaba geri dön</p>',
	'coll-book_title' => 'Basılı bir kitap olarak sipariş et',
	'coll-book_text' => 'Talebe-göre-basım ortağımızdan basılı bir kitap al:',
	'coll-order_from_pp' => '$1 ile önizle',
	'coll-about_pp' => '$1 hakkında',
	'coll-invalid_podpartner_title' => 'Geçersiz POD ortağı',
	'coll-invalid_podpartner_msg' => 'Sağlanan POD ortağı geçersiz.
Lütfen MedyaViki yöneticinizle irtibat kurun.',
	'coll-license' => 'Lisans',
	'coll-return_to' => '[[:$1]] sayfasına geri dön',
	'coll-more_info' => 'Daha fazla bilgi göster',
	'coll-hide_info' => 'Bilgiyi gizle',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress sipariş bilgisi',
	'coll-suggest_title' => 'Kitabınız için önerilen sayfalar',
	'coll-suggest_intro_text' => 'Öneriler şu anda kitabınızda bulunan viki sayfalarına dayalıdır. 
Ekle veya sil butonlarına her bastığınızda liste yenilenir.',
	'coll-suggested_articles' => 'Öneriler',
	'coll-suggest_reset_bans' => 'sıfırla',
	'coll-suggest_reset_bans_tooltip' => 'Daha önceden silinmiş önerileri göster',
	'coll-suggest_add_selected' => 'Seçili sayfaları ekle',
	'coll-suggest_ban_selected' => 'Seçili sayfaları kaldır',
	'coll-suggest_your_book' => 'Kitabınız',
	'coll-suggest_show' => 'göster',
	'coll-suggest_ban_tooltip' => 'Bu sayfayı öneri listesinden kaldır',
	'coll-suggest_article_ban' => '<strong>$1</strong> sayfası önerilerden ($2) kaldırıldı.',
	'coll-suggest_article_add' => '<strong>$1</strong> sayfası kitabınıza ($2) eklendi.',
	'coll-suggest_article_remove' => '<strong>$1</strong> sayfası kitabınızdan ($2) çıkarıldı.',
	'coll-suggest_undo_tooltip' => 'Bu eylemi geri al',
	'coll-suggest_undo' => 'geri al',
	'coll-load_local_book' => "%NUMPAGES% viki sayfası içeren kitabınız %TITLE% ile devam etmek için Tamam'a tıklayın. Bunu silmek ve boş bir kitaba başlamak için İptal'e tıklayın.",
	'right-collectionsaveasuserpage' => 'Kitapları kullanıcı sayfası olarak kaydet',
	'right-collectionsaveascommunitypage' => 'Kitapları topluluk sayfası olarak kaydet',
);

/** Tatar (Cyrillic) (Татарча/Tatarça (Cyrillic))
 * @author Timming
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'coll-desc' => '[[Special:Book|Китап төзүче]]',
	'coll-manage_your_book' => 'Китабыгыз белән идарә итү',
	'coll-book_creator_help' => 'Өстәмә мәгълүматны [[{{MediaWiki:Coll-helppage}}|китаплар белешмәлегеннән]] карагыз.',
	'coll-start_book_creator' => 'Китап ясау',
	'coll-book_creator_continue' => 'Китап ясауны дәвам итү',
	'coll-book_creator_disable_text' => 'Китап ясау бите ябылачак, сез ясаган китап юкка чыгачак',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Китап ясау тексты',
	'coll-collection' => 'Китап',
	'coll-collections' => 'Китаплар',
	'coll-exclusion_category_title' => 'Бастырудан чикләү',
	'coll-print_template_prefix' => 'Бастыру',
	'coll-print_template_pattern' => '$1/Бастыру',
	'coll-unknown_subpage_title' => 'Билгесез бит',
	'coll-unknown_subpage_text' => 'Мондый [[Special:Book|китап]]лар бите юк',
	'coll-your_book' => 'Сезнең китап',
	'coll-download_title' => 'Йөкләргә',
	'coll-download_text' => 'Үзегезнең китапны йөкләү өчен китаның форматын сайлап, төймәгә басыгыз.',
	'coll-download_as_text' => 'Үзегезнең китапны $1 форматында йөкләү  төймәгә басыгыз.',
	'coll-download' => 'Йөкләргә',
	'coll-show' => 'Күрсәтергә',
	'coll-title' => 'Башлам:',
	'coll-subtitle' => 'Аскы башлам:',
	'coll-contents' => 'Эчтәлек',
	'coll-create_chapter' => 'Башлык ясау',
	'coll-sort_alphabetically' => 'Әлифба буенча тәртипләү',
	'coll-rename' => 'Күчерү',
	'coll-empty_collection' => 'Буш китап',
	'coll-revision' => 'Юрама: $1',
	'coll-save_collection_title' => 'Китапны саклау',
	'coll-save_collection_text' => 'Китабыгызны өчен кую урынын сайлагыз:',
	'coll-login_to_save' => 'Китапны саклау һәм киләчәктә үзгәртү өчен, зинһар, [[Special:UserLogin|сәхифәгә керегез яки теркәлегез]].',
	'coll-personal_collection_label' => 'Шәхси китап:',
	'coll-community_collection_label' => 'Җәмәгатьчелек китабы:',
	'coll-save_collection' => 'Китапны саклау',
	'coll-save_category' => 'Барлык сакланучы битләр [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]] төркеменә өстәлә.',
	'coll-overwrite_title' => 'Бу бит бар инде. Яңадан төзәргәме?',
	'coll-yes' => 'Әйе',
	'coll-no' => 'Юк',
	'coll-cancel' => 'Кире кагу',
	'coll-rendering_status' => '<strong>Статусы:</strong> $1',
	'coll-book_title' => 'Басылма китап алу',
	'coll-book_text' => 'Безнең басылма китапны алу:',
	'coll-order_from_pp' => '$1 ярдәмендә алдан карау',
	'coll-about_pp' => '$1 тырунда',
	'coll-invalid_podpartner_title' => 'Дөрес булмаган POD-ярдәмче',
	'coll-license' => 'Лицензиясе',
	'coll-return_to' => '[[:$1]] кайту',
	'coll-suggest_reset_bans' => 'ташлау',
	'coll-suggest_your_book' => 'Сезнең китап',
	'coll-suggest_show' => 'күрсәтү',
	'coll-suggest_undo' => 'үткәрмәү',
);

/** Ukrainian (Українська)
 * @author AS
 * @author Ahonc
 * @author Aleksandrit
 * @author NickK
 * @author Prima klasy4na
 */
$messages['uk'] = array(
	'coll-desc' => '[[Special:Book|Створює книги]]',
	'coll-book_creator_intro' => "<big>За допомогою ''книжкового майстра'' ви можете створити книгу з вибраних вами вікі-сторінок. Ви можете експортувати книги в різних форматах (наприклад, PDF або ODF) або замовити друковану копію.</big>",
	'coll-manage_your_book' => 'Управління вашою книгою',
	'coll-book_creator_help' => 'Див. [[{{MediaWiki:Coll-helppage}}|довідкову сторінку про книжки]] для отримання додаткової інформації.',
	'coll-start_book_creator' => 'Запустити книжкового майстра',
	'coll-book_creator_continue' => 'Продовжити використання книжкового майстра',
	'coll-book_creator_disable_text' => "''Книжкового майстра'' буде відключено; книгу, над якою ви працюєте — вилучено.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Текст книжкового майстра',
	'coll-collection' => 'Книга',
	'coll-collections' => 'Книги',
	'coll-exclusion_category_title' => 'Виключення з друку',
	'coll-print_template_prefix' => 'Друк',
	'coll-print_template_pattern' => '$1/Друк',
	'coll-unknown_subpage_title' => 'Невідома підсторінка',
	'coll-unknown_subpage_text' => 'Ця підсторінка [[Special:Book|книги]] не існує',
	'coll-couldnotaddarticle_title' => 'Не вдалося додати вікі-сторінку',
	'coll-couldnotaddarticle_msg' => 'Вікі-сторінка не може бути додана.',
	'coll-couldnotremovearticle_title' => 'Не вдалося вилучити вікі-сторінку',
	'coll-couldnotremovearticle_msg' => 'Вікі-сторінка не може бути вилучена.',
	'coll-noscript_text' => '<h1>Потрібен JavaScript!</h1>
<strong>Ваш браузер не підтримує JavaScript або ця підтримка вимкнена.
Ця сторінка не буде працювати правильно, якщо JavaScript не ввімкнений.</strong>',
	'coll-savedbook_template' => 'збережена_книга',
	'coll-your_book' => 'Ваша книга',
	'coll-download_title' => 'Завантажити',
	'coll-download_text' => 'Щоб завантажити вашу книгу, оберіть формат і натисніть кнопку.',
	'coll-download_as_text' => 'Для завантаження вашої книги у форматі $1 натисніть кнопку.',
	'coll-download' => 'Завантажити',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Вилучити',
	'coll-show' => 'Показати',
	'coll-move_to_top' => 'Перемістити нагору',
	'coll-move_up' => 'Перемістити вище',
	'coll-move_down' => 'Перемістити нижче',
	'coll-move_to_bottom' => 'Перемістити донизу',
	'coll-title' => 'Назва:',
	'coll-subtitle' => 'Підзаголовок:',
	'coll-contents' => 'Зміст',
	'coll-drag_and_drop' => 'Щоб упорядкувати вікі-сторінки і розділи, перетягуйте їх мишкою',
	'coll-create_chapter' => 'Створити розділ',
	'coll-sort_alphabetically' => 'Сортувати за алфавітом',
	'coll-rename' => 'Перейменувати',
	'coll-new_chapter' => 'Уведіть назву нового розділу',
	'coll-rename_chapter' => 'Уведіть нову назву розділу',
	'coll-no_such_category' => 'Нема такої категорії',
	'coll-notitle_title' => 'Заголовок сторінки неможливо визначити.',
	'coll-post_failed_title' => 'POST-запит не виконаний',
	'coll-post_failed_msg' => 'POST-запит до $1 не виконаний ($2).',
	'coll-mwserve_failed_title' => 'Помилка сервера відображення',
	'coll-mwserve_failed_msg' => 'На сервері відображення трапилася помилка: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Помилка відповіді сервера',
	'coll-empty_collection' => 'Порожня книга',
	'coll-revision' => 'Версія: $1',
	'coll-save_collection_title' => 'Зберегти книгу і відкрити доступ до неї',
	'coll-save_collection_text' => 'Оберіть розташування:',
	'coll-login_to_save' => 'Щоб зберегти книгу для подальшого використання, будь ласка, [[Special:UserLogin|ввійдіть до системи або створить обліковий запис]].',
	'coll-personal_collection_label' => 'Особиста книга:',
	'coll-community_collection_label' => 'Книга спільноти:',
	'coll-save_collection' => 'Зберегти книгу',
	'coll-save_category' => 'Всі збережені книги додано у категорію [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Сторінка існує. Перезаписати?',
	'coll-overwrite_text' => 'Сторінка з назвою [[:$1]] вже існує.
Ви хочете, щоб вона була замінена вашою колекцією?',
	'coll-yes' => 'Так',
	'coll-no' => 'Ні',
	'coll-load_overwrite_text' => 'У вас уже є кілька сторінок у книзі.
Ви хочете перезаписати вашу поточну книгу, додати новий матеріал чи скасувати відкриття цієї книги?',
	'coll-overwrite' => 'Перезаписати',
	'coll-append' => 'Додати',
	'coll-cancel' => 'Скасувати',
	'coll-update' => 'Оновити',
	'coll-limit_exceeded_title' => 'Книга надто велика',
	'coll-limit_exceeded_text' => 'Ваша книга надто велика.
До неї не можна більше додавати сторінок.',
	'coll-rendering_title' => 'Створення',
	'coll-rendering_text' => '<p><strong>Будь ласка, зачекайте поки триває створення документа.</strong></p>

<p><strong>Хід роботи:</strong> <span id="renderingProgress">$1</span> % <span id="renderingStatus">$2</span></p>

<p>Ця сторінка повинна автоматично оновлюватися кожні кілька секунд.
Якщо цього не відбувається, оновіть цю сторінку у вашому браузері.</p>',
	'coll-rendering_status' => '<strong>Статус:</strong> $1',
	'coll-rendering_article' => '(сторінка: $1)',
	'coll-rendering_page' => '(сторінка: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Надання інформації про сторінку',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Надання інформації про колекцію',
	'coll-rendering_finished_title' => 'Створення завершено',
	'coll-rendering_finished_text' => "<strong>Файл документа був створений.</strong>
<strong>[$1 Завантажити файл]</strong> на свій комп'ютер.

Зауваження:
* Не задоволені результатом? Можливості його поліпшення описані на [[{{MediaWiki:Coll-helppage}}|довідковій сторінці про колекції]].",
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Формування відомостей про сторінку',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Формування інформації про колекцію',
	'coll-notfound_title' => 'Книга не знайдена',
	'coll-notfound_text' => 'Неможливо знайти сторінку книги.',
	'coll-download_notfound_title' => 'Файл не знайдено',
	'coll-download_notfound_text' => 'Файл, який ви намагаєтесь завантажити, не існує.
Можливо, його вилучили, і його необхідно відновити.',
	'coll-download_failed_title' => 'Помилка в процесі завантаження',
	'coll-download_failed_text' => 'Виявлено помилку при завантаженні файлу: $1',
	'coll-is_cached' => '<ul><li>Знайдена закешована версія документу, тому перемалювання не знадобилося. <a href="$1">Примусове перемалювання.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблони в категорії [[:Категорія:$1|$1]] були виключені.',
	'coll-blacklisted-templates' => '* Шаблони в чорному списку [[:$1]] були виключені.',
	'coll-return_to_collection' => '<p>Назад до <a href="$1">$2</a></p>',
	'coll-book_title' => 'Замовити як друковану книгу',
	'coll-book_text' => 'Отримати друковану книгу від нашого партнера:',
	'coll-order_from_pp' => 'Попередній перегляд за допомогою $1',
	'coll-about_pp' => 'Про $1',
	'coll-invalid_podpartner_title' => 'Недійсний POD-партнер',
	'coll-invalid_podpartner_msg' => "POD-партнер, що надається, недійсний. 
Будь-ласка, зв'яжіться з вашим адміністратором MediaWiki.",
	'coll-license' => 'Ліцензія',
	'coll-return_to' => 'Повернення до [[:$1]]',
	'coll-more_info' => 'Показати більше інформації',
	'coll-hide_info' => 'Приховати інформацію',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Інформація про замовлення PediaPress',
	'coll-suggest_title' => 'Пропоновані сторінки для вашої книги',
	'coll-suggest_intro_text' => 'Пропозиції формуються з поточного набору вікі-сторінок у вашій книзі.
Список оновлюється щоразу, коли ви натиснете на кнопки додавання або вилучення.',
	'coll-suggested_articles' => 'Пропозиції',
	'coll-suggest_reset_bans' => 'скинути',
	'coll-suggest_reset_bans_tooltip' => 'Показати раніше вилучені пропозиції',
	'coll-suggest_add_selected' => 'Додати вибрані сторінки',
	'coll-suggest_ban_selected' => 'Вилучити вибрані сторінки',
	'coll-suggest_your_book' => 'Ваша книга',
	'coll-suggest_show' => 'показувати',
	'coll-suggest_ban_tooltip' => 'Вилучити цю сторінку зі списку пропозицій',
	'coll-suggest_article_ban' => 'Сторінка <strong>$1</strong> вилучена з пропозицій ($2).',
	'coll-suggest_article_add' => 'Сторінку <strong>$1</strong> додано до вашої книги ($2).',
	'coll-suggest_article_remove' => 'Сторінку <strong>$1</strong> вилучено з вашої книги ($2).',
	'coll-suggest_undo_tooltip' => 'Скасувати цю дію',
	'coll-suggest_undo' => 'скасувати',
	'coll-load_local_book' => 'Клацніть «Гаразд», щоб продовжити роботу з вашою книгою %TITLE%, яка містить %NUMPAGES% вікі-сторінок. Клацніть «Скасувати», щоб вилучити її і почати з порожньою книгою.',
	'right-collectionsaveasuserpage' => 'Збереження книг як сторінок користувачів',
	'right-collectionsaveascommunitypage' => 'Збереження книг як сторінок спільноти',
);

/** Urdu (اردو) */
$messages['ur'] = array(
	'coll-cancel' => 'منسوخ',
);

/** Vèneto (Vèneto)
 * @author Candalua
 * @author Nick1915
 */
$messages['vec'] = array(
	'coll-desc' => '[[Special:Book|Crea libri]]',
	'coll-book_creator_intro' => "<big>Con la ''modalità libro'' se pole farse un proprio libro de pagine wiki a sièlta lìbara. El libro el se pole esportar in diversi formati (par esenpio PDF o ODF) o se pole ordinar na copia stanpà.</big>",
	'coll-manage_your_book' => 'Gestissi el to libro',
	'coll-book_creator_help' => 'Varda [[{{MediaWiki:Coll-helppage}}|la pagina de aiuto sui libri]] par majori informassion.',
	'coll-start_book_creator' => 'Intaca la modalità libro',
	'coll-book_creator_continue' => 'Và vanti a doparar el creador de libri',
	'coll-book_creator_disable_text' => "El ''creador de libri'' el vegnarà destacà e el libro su cui te sì drio laorar el vegnarà cavà.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Testo modalità libro',
	'coll-collection' => 'Libro',
	'coll-collections' => 'Libri',
	'coll-exclusion_category_title' => 'Escludi da la stanpa',
	'coll-print_template_prefix' => 'Stanpa',
	'coll-print_template_pattern' => '$1/Stanpa',
	'coll-unknown_subpage_title' => 'Sotopàxena sconossiùa',
	'coll-unknown_subpage_text' => 'Sta sotopàxena de [[Special:Book|Libro]] no la esiste mia',
	'coll-couldnotaddarticle_title' => 'No se riesse a inserir la pagina wiki',
	'coll-couldnotaddarticle_msg' => 'La pagina wiki no se gà podesto inserirla.',
	'coll-couldnotremovearticle_title' => 'No se riesse a cavar la pagina wiki',
	'coll-couldnotremovearticle_msg' => 'La pagina wiki no se gà podesto cavarla.',
	'coll-noscript_text' => "<h1>Ghe vole el JavaScript!</h1>
<strong>El to browser no'l suporta JavaScript opure JavaScript el xe stà disativà.
La pàxena no la funsionrà mia coretamente se no vegnarà ativà JavaScript.</strong>",
	'coll-savedbook_template' => 'libro_salvà',
	'coll-your_book' => 'El to libro',
	'coll-download_title' => 'Descarga',
	'coll-download_text' => 'Par trar xo el to libro siegli un formado e struca el boton.',
	'coll-download_as_text' => 'Par descargar el to libro in tel formato $1 struca el boton.',
	'coll-download' => 'Descarga',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Cava',
	'coll-show' => 'Mostra',
	'coll-move_to_top' => 'Sposta insima',
	'coll-move_up' => 'Sposta piassè in alto',
	'coll-move_down' => 'Sposta piassè zo',
	'coll-move_to_bottom' => 'Sposta in fondo',
	'coll-title' => 'Titolo:',
	'coll-subtitle' => 'Sototitolo:',
	'coll-contents' => 'Indice',
	'coll-drag_and_drop' => 'Strassìna e mòla col mouse par riordinar le pàxene wiki e i capitoli',
	'coll-create_chapter' => 'Crea capitolo novo',
	'coll-sort_alphabetically' => 'Meti in ordine alfabétego',
	'coll-rename' => 'Canbia nome',
	'coll-new_chapter' => 'Inserissi el nome del capitolo novo',
	'coll-rename_chapter' => 'Inserissi el nome novo del capitolo',
	'coll-no_such_category' => 'Nissuna categoria',
	'coll-notitle_title' => "No s'à podesto determinar el titolo de sta pàxena.",
	'coll-post_failed_title' => 'Richiesta POST mia riussìa',
	'coll-post_failed_msg' => 'La richiesta POST a $1 no la xe mia riussìa ($2).',
	'coll-mwserve_failed_title' => 'Eròr sul server de conversion',
	'coll-mwserve_failed_msg' => 'Xe capità un eròr sul server de conversion: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Risposta de eròr dal server',
	'coll-empty_collection' => 'Libro vòdo',
	'coll-revision' => 'Revision: $1',
	'coll-save_collection_title' => 'Salva e condividi el to libro',
	'coll-save_collection_text' => 'Siegli un posto:',
	'coll-login_to_save' => 'Se te voli salvar el libro par dopararlo piassè avanti, [[Special:UserLogin|entra o crea na utensa nova]].',
	'coll-personal_collection_label' => 'Libro personal:',
	'coll-community_collection_label' => 'Libro de la comunità:',
	'coll-save_collection' => 'Salva libro',
	'coll-save_category' => 'Tuti quanti i libri i vien messi in te la categoria [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'La pàxena la esiste de zà.
Vuto che ghe scriva insima?',
	'coll-overwrite_text' => 'Na pàxena col nome [[:$1]] la esiste de zà.
Vuto che la vegna rinpiazà co la to colezion?',
	'coll-yes' => 'Sì',
	'coll-no' => 'No',
	'coll-load_overwrite_text' => 'Nel to libro ghe xe xà dele pàxene.
Vuto sorascrìvar el libro esistente, opure zontarghe el contenuto novo, opure anular el caricamento de sto libro?',
	'coll-overwrite' => 'Sorascrivi',
	'coll-append' => 'Zonta',
	'coll-cancel' => 'Anùla',
	'coll-update' => 'Ajorna',
	'coll-limit_exceeded_title' => 'Libro massa grando',
	'coll-limit_exceeded_text' => 'El to libro el xe massa grando. No se pode zontarghe altre pàxene.',
	'coll-rendering_title' => 'Conversion',
	'coll-rendering_text' => '<p><strong>Par piaser, speta n\'atimo che el documento el vegna generà.</strong></p>

<p><strong>Avansamento:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Sta pàxena la dovarìa ajornarse da par ela ogni póchi secondi.
Se questo no sucede, struca el boton de ajornamento del to browser.</p>',
	'coll-rendering_status' => '<strong>Stato:</strong> $1',
	'coll-rendering_article' => '(pàxena wiki: $1)',
	'coll-rendering_page' => '(pàxena: $1)',
	'coll-rendering_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/So' drio pareciar el testo de informassion de la pagina",
	'coll-rendering_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/So' drio pareciar el testo de informassion de la colezion",
	'coll-rendering_finished_title' => 'Conversion finìa',
	'coll-rendering_finished_text' => '<strong>El documento el xe stà generà.</strong>
<strong>[$1 Descàrghelo]</strong> sul to computer.

Note:
* Sito mia contento del risultato? Lèzi [[{{MediaWiki:Coll-helppage}}|la pàxena de ajuto su le colezion]] par saver come mejorarlo.',
	'coll-finished_page_info_text_article' => "{{MediaWiki:Coll-helppage}}/So' drio pareciar el testo de informassion de la pagina",
	'coll-finished_collection_info_text_article' => "{{MediaWiki:Coll-helppage}}/So' drio pareciar el testo de informassion de la colezion",
	'coll-notfound_title' => 'Libro mia catà',
	'coll-notfound_text' => 'No se cata da nissuna parte la pàxena del libro.',
	'coll-download_notfound_title' => 'File mia catà',
	'coll-download_notfound_text' => "El file che te sì drio descargar no l'esiste mia; podarìa èssar che el sìpia stà scancelà e se gàvia da creàrlo da novo.",
	'coll-download_failed_title' => 'Eròr durante el descargamento',
	'coll-download_failed_text' => 'Xe capità un eròr co te geri drio descargar el file: $1',
	'coll-is_cached' => '<ul><li>In te la cache xe stà catà na version del documento, quindi no ghè stà bisogno de far la conversion. <a href="$1">Forza la ri-conversion.</a></li></ul>',
	'coll-excluded-templates' => '* I modèi in te la categoria [[:Category:$1|$1]] i xe stà esclusi.',
	'coll-blacklisted-templates' => '* I modèi in te la lista nera [[:$1]] i xe stà esclusi.',
	'coll-return_to_collection' => '<p>Torna indrìo a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ordina come libro stanpà',
	'coll-book_text' => 'Otien un libro stanpà da uno dei nostri soci che i te lo stanpa su richiesta:',
	'coll-order_from_pp' => 'Anteprima co $1',
	'coll-about_pp' => 'Informassion su $1',
	'coll-invalid_podpartner_title' => 'Partner POD mia valido',
	'coll-invalid_podpartner_msg' => "El socio POD fornìo no'l xe mia valido. Contata el to aministrador MediaWiki.",
	'coll-license' => 'Licensa',
	'coll-return_to' => 'Torna indrìo a [[:$1]]',
	'coll-more_info' => 'Mostra piasè informasion',
	'coll-hide_info' => 'Scondi informasion',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/Informassion par ordinar con PediaPress',
	'coll-suggest_title' => 'Pagine sugerìe par el to libro',
	'coll-suggest_intro_text' => 'I sugerimenti i se basa su l\'insieme de pagine wiki che xe xà nel to libro.
La lista la vien ajornà ogni olta che te struchi sui botoni "zonta" o "cava".',
	'coll-suggested_articles' => 'Sugerimenti',
	'coll-suggest_reset_bans' => 'reinposta',
	'coll-suggest_reset_bans_tooltip' => 'Fame védar i sugerimenti cavà in precedensa',
	'coll-suggest_add_selected' => 'Zonta le pagine selessionà',
	'coll-suggest_ban_selected' => 'Cava le pagine selessionà',
	'coll-suggest_your_book' => 'El to libro',
	'coll-suggest_show' => 'mostra',
	'coll-suggest_ban_tooltip' => 'Cava sta pagina de la lista dei sugerimenti',
	'coll-suggest_article_ban' => 'La pagina <strong>$1</strong> la xe stà cavà dai sugerimenti ($2).',
	'coll-suggest_article_add' => 'La pagina <strong>$1</strong> la xe stà zontà al to libro ($2).',
	'coll-suggest_article_remove' => 'La pagina <strong>$1</strong> la xe stà cavà dal to libro ($2).',
	'coll-suggest_undo_tooltip' => 'Anùla sta azion',
	'coll-suggest_undo' => 'torna indrìo',
	'coll-load_local_book' => 'Struca OK par continuar col to libro %TITLE% composto da %NUMPAGES% pagine wiki. Struca Anula par scancelarlo e scominsiar co un libro vodo.',
	'right-collectionsaveasuserpage' => 'Salva na colezion come pagina utente',
	'right-collectionsaveascommunitypage' => 'Salva na colezion come pagina comunitaria',
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'coll-collection' => 'Kirj',
	'coll-collections' => 'Kirjad',
	'coll-print_template_prefix' => 'Painda',
	'coll-savedbook_template' => 'kirjutadud muštho kirj',
	'coll-your_book' => 'Teiden kirj',
	'coll-download_title' => 'Jügutoitta',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Čuta poiš',
	'coll-show' => 'Ozutada',
	'coll-move_to_top' => 'Libuda ülähäks',
	'coll-move_up' => 'Libuda ülähäks',
	'coll-move_down' => 'Laskta alahaks',
	'coll-move_to_bottom' => 'Laskta alahaks',
	'coll-title' => 'Pälkirjutez:',
	'coll-subtitle' => 'Alapälkirjutez:',
	'coll-contents' => 'Südäimišt',
	'coll-create_chapter' => 'Säta pala',
	'coll-sort_alphabetically' => 'Panda kirjamišton mödhe',
	'coll-rename' => 'Udesnimitada',
	'coll-new_chapter' => 'Kirjutagat uden palan nimi',
	'coll-rename_chapter' => "Kirjutagat uz' palannimi",
	'coll-no_such_category' => 'Ei ole mugošt kategorijad',
	'coll-empty_collection' => "Pall'az kirj",
	'coll-yes' => 'Ka',
	'coll-no' => 'Ei',
	'coll-rendering_article' => "(wikin lehtpol': $1)",
	'coll-rendering_page' => "(lehtpol': $1)",
	'coll-notfound_title' => 'Ei voi löuta kirjad',
	'coll-download_notfound_title' => 'Ei voi löuta failad',
	'coll-license' => 'Licenzii',
	'coll-suggest_your_book' => 'Teiden kirj',
	'coll-suggest_show' => 'ozutada',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'coll-desc' => '[[Special:Book|Tạo sách]]',
	'coll-book_creator_intro' => "<big>Với ''bộ tạo sách'' bạn có thể tạo một cuốn sách bao gồm các trang wiki do bạn lựa chọn. Bạn có thể xuất cuốn sách ra nhiều định dạng khác nhau (như PDF hoặc ODF) hoặc đặt mua một bản in.</big>",
	'coll-manage_your_book' => 'Quản lý sách',
	'coll-book_creator_help' => 'Xem [[{{MediaWiki:Coll-helppage}}|trang trợ giúp về sách]] để biết thêm thông tin.',
	'coll-start_book_creator' => 'Khởi động bộ tạo sách',
	'coll-book_creator_continue' => 'Tiếp tục sử dụng bộ tạo sách',
	'coll-book_creator_disable_text' => "''Bộ tạo sách'' sẽ bị tắt và cuốn sách mà bạn đang thực hiện sẽ bị mất.",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Văn bản chế độ tạo sách',
	'coll-collection' => 'Sách',
	'coll-collections' => 'Sách',
	'coll-exclusion_category_title' => 'Ẩn khi in',
	'coll-print_template_prefix' => 'In',
	'coll-print_template_pattern' => '$1/In',
	'coll-unknown_subpage_title' => 'Trang phụ không tìm được',
	'coll-unknown_subpage_text' => 'Trang phụ này của [[Special:Book|Sách]] không tồn tại',
	'coll-couldnotaddarticle_title' => 'Không thể thêm trang wiki',
	'coll-couldnotaddarticle_msg' => 'Không thêm được trang wiki.',
	'coll-couldnotremovearticle_title' => 'Không thể bỏ trang wiki',
	'coll-couldnotremovearticle_msg' => 'Không bỏ được trang wiki.',
	'coll-noscript_text' => '<h1>Cần phải có JavaScript!</h1>
<strong>Trình duyệt của bạn không hỗ trợ JavaScript hoặc JavaScript đã bị tắt.
Trang này sẽ không hoạt động đúng, trừ khi bạn kích hoạt JavaScript.</strong>',
	'coll-savedbook_template' => 'sách_đã_lưu',
	'coll-your_book' => 'Sách của bạn',
	'coll-download_title' => 'Tải về',
	'coll-download_text' => 'Để tải sách về, hãy chọn định dạng rồi nhấn nút.',
	'coll-download_as_text' => 'Để tải sách về theo định dạng $1, hãy nhấn nút.',
	'coll-download' => 'Tải về',
	'coll-format_label' => 'Định dạng:',
	'coll-remove' => 'Bỏ',
	'coll-show' => 'Hiện',
	'coll-move_to_top' => 'Di chuyển lên đầu',
	'coll-move_up' => 'Chuyển lên',
	'coll-move_down' => 'Chuyển xuống',
	'coll-move_to_bottom' => 'Di chuyển xuống dưới',
	'coll-title' => 'Tựa đề:',
	'coll-subtitle' => 'Phụ đề:',
	'coll-contents' => 'Nội dung',
	'coll-drag_and_drop' => 'Kéo thả để sắp xếp các trang wiki và chương sách',
	'coll-create_chapter' => 'Tạo chương',
	'coll-sort_alphabetically' => 'Sắp xếp theo thứ tự ABC',
	'coll-rename' => 'Đổi tên',
	'coll-new_chapter' => 'Gõ vào tên chương mới',
	'coll-rename_chapter' => 'Gõ vào tên chương mới',
	'coll-no_such_category' => 'Không có thể loại như vậy',
	'coll-notitle_title' => 'Không xác định được tựa đề của trang.',
	'coll-post_failed_title' => 'Yêu cầu POST thất bại',
	'coll-post_failed_msg' => 'Yêu cầu POST đến $1 thất bại ($2).',
	'coll-mwserve_failed_title' => 'Lỗi chương trình kết xuất',
	'coll-mwserve_failed_msg' => 'Chương trình kết xuất gặp lỗi: <nowiki>$1</nowiki>',
	'coll-error_reponse' => 'Máy chủ trả về lỗi',
	'coll-empty_collection' => 'Sách trống',
	'coll-revision' => 'Phiên bản: $1',
	'coll-save_collection_title' => 'Lưu và chia sẻ sách của bạn',
	'coll-save_collection_text' => 'Chọn một nơi để lưu sách:',
	'coll-login_to_save' => 'Nếu bạn muốn lưu sách để sau này dùng, xin hãy [[Special:UserLogin|đăng nhập hoặc mở tài khoản]].',
	'coll-personal_collection_label' => 'Sách cá nhân:',
	'coll-community_collection_label' => 'Sách cộng đồng:',
	'coll-save_collection' => 'Lưu sách',
	'coll-save_category' => 'Mọi cuốn sách được lưu lại sẽ có mặt trong thể loại [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Trang đã tồn tại.
Ghi đè?',
	'coll-overwrite_text' => 'Trang với tên [[:$1]] đã tồn tại.
Bạn có muốn thay thế nó bằng quyển sách của bạn?',
	'coll-yes' => 'Có',
	'coll-no' => 'Không',
	'coll-load_overwrite_text' => 'Bạn đã có một số trang trong sách của mình.
Bạn có muốn ghi đè sách hiện tại, thêm nội dung mới, hay hủy việc tải sách này?',
	'coll-overwrite' => 'Ghi đè',
	'coll-append' => 'Thêm vào',
	'coll-cancel' => 'Hủy bỏ',
	'coll-update' => 'Cập nhật',
	'coll-limit_exceeded_title' => 'Sách quá lớn',
	'coll-limit_exceeded_text' => 'Sách của bạn quá lớn.
Không thể thêm trang được nữa.',
	'coll-rendering_title' => 'Đang kết xuất',
	'coll-rendering_text' => '<p><strong>Xin hãy chờ xong kết xuất tài liệu.</strong></p>

<p><strong>Tiến độ:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>Trình duyệt sẽ làm tươi trang này vài giây một lần.
Nếu không thấy thay đổi gì, xin hãy bấm nút Refresh hoặc Reload trong trình duyệt.</p>',
	'coll-rendering_status' => '<strong>Trạng thái:</strong> $1',
	'coll-rendering_article' => '(trang wiki: $1)',
	'coll-rendering_page' => '(trang: $1)',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Kết xuất văn bản thông tin trang',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Kết xuất văn bản thông tin tuyển tập',
	'coll-rendering_finished_title' => 'Kết xuất xong',
	'coll-rendering_finished_text' => '<strong>Xong kết xuất tập tin tài liệu.</strong>
<strong>[$1 Tải nó về]</strong> máy tính của mình.

Chú ý:
* Không vừa lòng với bản kết xuất này? Hãy đọc [[{{MediaWiki:Coll-helppage}}|trợ giúp về tập hợp]] để biết về những cách để cải tiến nó.',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/Kết xuất văn bản thông tin trang',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/Kết xuất văn bản thông tin tuyển tập',
	'coll-notfound_title' => 'Không tìm thấy sách',
	'coll-notfound_text' => 'Không tìm thấy trang sách.',
	'coll-download_notfound_title' => 'Không tìm thấy tập tin',
	'coll-download_notfound_text' => 'Tập tin bạn đang cố gắng tải về không tồn tại: Có thể nó đã bị xóa và cần được khởi tạo lại.',
	'coll-download_failed_title' => 'Có lỗi khi tải về',
	'coll-download_failed_text' => 'Đã có lỗi xảy ra khi tải tập tin: $1',
	'coll-is_cached' => '<ul><li>Không cần kết xuất mới vì đã tìm thấy phiên bản trong bộ nhớ. <a href="$1">Kết xuất lại.</a></li></ul>',
	'coll-excluded-templates' => '* Các bản mẫu trong thể loại [[:Category:$1|$1]] được bỏ qua.',
	'coll-blacklisted-templates' => '* Các bản mẫu trùng với danh sách đen [[:$1]] được bỏ qua.',
	'coll-return_to_collection' => '<p>Quay trở về <a href="$1">$2</a></p>',
	'coll-book_title' => 'Đặt sách in',
	'coll-book_text' => 'Mua một cuốn sách in từ bên cộng tác in-theo-yêu-cầu:',
	'coll-order_from_pp' => 'Xem trước dùng $1',
	'coll-about_pp' => 'Giới thiệu $1',
	'coll-invalid_podpartner_title' => 'Thành phần đi kèm POD không hợp lệ',
	'coll-invalid_podpartner_msg' => 'Thành phần đi kèm POD đã cung cấp không hợp lệ.
Xin hãy liên hệ với quản trị viên MediaWiki của bạn.',
	'coll-license' => 'Giấy phép',
	'coll-return_to' => 'Quay lại [[:$1]]',
	'coll-more_info' => 'Xem thêm thông tin',
	'coll-hide_info' => 'Ẩn thông tin',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress',
	'coll-suggest_title' => 'Các trang đề nghị cho cuốn sách của bạn',
	'coll-suggest_intro_text' => 'Những đề nghị dựa trên tập trang wiki hiện tại trong cuốn sách.
Danh sách này được cập nhật mỗi khi bạn nhấn vào nút thêm hoặc bớt.',
	'coll-suggested_articles' => 'Đề nghị',
	'coll-suggest_reset_bans' => 'tái tạo',
	'coll-suggest_reset_bans_tooltip' => 'Hiện các đề nghị đã bị xóa',
	'coll-suggest_add_selected' => 'Thêm các trang đã chọn',
	'coll-suggest_ban_selected' => 'Xóa các trang đã chọn',
	'coll-suggest_your_book' => 'Cuốn sách của bạn',
	'coll-suggest_show' => 'hiện',
	'coll-suggest_ban_tooltip' => 'Xóa trang này ra khỏi danh sách các đề nghị',
	'coll-suggest_article_ban' => 'Trang <strong>$1</strong> đã bị xóa ra khỏi các đề nghị ($2).',
	'coll-suggest_article_add' => 'Trang <strong>$1</strong> đã được thêm vào cuốn sách ($2).',
	'coll-suggest_article_remove' => 'Trang <strong>$1</strong> đã bị xóa ra khỏi cuốn sách ($2).',
	'coll-suggest_undo_tooltip' => 'Phục hồi tác vụ này',
	'coll-suggest_undo' => 'phục hồi',
	'coll-load_local_book' => 'Nhấn OK để tiếp tục quyển sách %TITLE% hiện có %NUMPAGES% trang wiki. Nhấn Cancel để xóa và làm việc với quyển sách trắng.',
	'right-collectionsaveasuserpage' => 'Lưu sách vở thành trang cá nhân',
	'right-collectionsaveascommunitypage' => 'Lưu sách thành trang cộng đồng',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'coll-desc' => '[[Special:Book|Jafolöd bukis]]',
	'coll-manage_your_book' => 'Guvön buki olik',
	'coll-collection' => 'Buk',
	'coll-collections' => 'Buks',
	'coll-exclusion_category_title' => 'Fakipön dü dabükam',
	'coll-print_template_prefix' => 'Dabükön',
	'coll-unknown_subpage_title' => 'Donapad nesevädik',
	'coll-unknown_subpage_text' => 'Donapad at [[Special:Book|Buka]] no dabinon.',
	'coll-noscript_text' => '<h1>El JavaScript paflagon!</h1>
<strong>Bevüresodanaföm olik no stüton eli JavaScript, ud el JavaScript pesekurbon. Pad at no ojäfidon verätiko, if el JavaScript no ponikurbon.</strong>',
	'coll-savedbook_template' => 'buk_padakipöl',
	'coll-your_book' => 'Buk olik',
	'coll-download_title' => 'Donükön',
	'coll-download' => 'Donükön',
	'coll-format_label' => 'Fomät:',
	'coll-remove' => 'Moükön',
	'coll-show' => 'Jonön',
	'coll-title' => 'Tiäd:',
	'coll-subtitle' => 'Donatiäd:',
	'coll-contents' => 'Ninäd',
	'coll-create_chapter' => 'Jafön kapiti',
	'coll-sort_alphabetically' => 'Lafabön',
	'coll-rename' => 'Votanemön',
	'coll-new_chapter' => 'Penolös nemi kapita nulik',
	'coll-rename_chapter' => 'Penolös nemi nulik kapita',
	'coll-no_such_category' => 'Klad at no dabinon',
	'coll-notitle_title' => 'No eplöpos ad fümetön padatiädi.',
	'coll-post_failed_title' => 'Beg-POST no eplöpon',
	'coll-post_failed_msg' => 'Beg-POST lü $1 no eplöpon ($2).',
	'coll-empty_collection' => 'Buk vagik',
	'coll-revision' => 'Revid: $1',
	'coll-save_collection_title' => 'Dakipön e dilön buki olik',
	'coll-login_to_save' => 'If vilol dakipön bukis pro geb posik, [[Special:UserLogin|nunädolös oli u jafolös kali]].',
	'coll-personal_collection_label' => 'Buk privatik:',
	'coll-community_collection_label' => 'Buk kobädik:',
	'coll-save_collection' => 'Dakipön buki',
	'coll-save_category' => 'Buks padakipöls valik paläükons in klad: [[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]].',
	'coll-overwrite_title' => 'Pad ya dabinon.
Plaädön-li?',
	'coll-overwrite_text' => 'Pad labü nem: [[:$1]] ya dabinon.
Vilol-li plaädön padi at me konlet olik?',
	'coll-yes' => 'Si',
	'coll-no' => 'Nö',
	'coll-load_overwrite_text' => 'Ya labol padis anik in buk olik.
Vilol-li plaädön buki anuik ola, lenlägön ninädi nulik, u stöpädön lodami buka at?',
	'coll-overwrite' => 'Plaädön',
	'coll-append' => 'Lenlägön',
	'coll-cancel' => 'Stöpädön',
	'coll-limit_exceeded_title' => 'Buk tu gretik',
	'coll-limit_exceeded_text' => 'Buk olik binon tu gretik.
Pads pluik nonik kanons paläükön.',
	'coll-rendering_status' => '<strong>Stad:</strong> $1',
	'coll-rendering_article' => '(vükapad: $1)',
	'coll-rendering_page' => '(pad: $1)',
	'coll-notfound_title' => 'Buk no petuvon',
	'coll-notfound_text' => 'No eplöpos ad tuvön bukapadi.',
	'coll-download_notfound_title' => 'Ragiv no petuvon',
	'coll-excluded-templates' => '* Samafomots in klad: [[:Category:$1|$1]] pefakipons.',
	'coll-blacklisted-templates' => '* Samafomots blägaliseda: [[:$1]] pefakipons.',
	'coll-about_pp' => 'Tefü $1',
	'coll-return_to' => 'Geikön lü [[:$1]]',
	'coll-suggest_show' => 'jonön',
	'coll-suggest_undo' => 'sädunön',
);

/** Wu (吴语) */
$messages['wuu'] = array(
	'coll-cancel' => '取消',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'coll-collection' => 'בוך',
	'coll-collections' => 'ביכער',
	'coll-print_template_prefix' => 'דרוקן',
	'coll-print_template_pattern' => '$1/דרוקן',
	'coll-couldnotaddarticle_title' => 'קען נישט צולייגן וויקי בלאַט',
	'coll-couldnotremovearticle_title' => 'קען נישט אַראָפנעמען וויקי בלאַט',
	'coll-your_book' => 'אײַער בוך',
	'coll-download_title' => 'אראָפלאָדן',
	'coll-download' => 'אַראָפלאָדן',
	'coll-format_label' => 'פֿאָרמאַט:',
	'coll-title' => 'טיטל:',
	'coll-contents' => 'אינהאַלט',
	'coll-empty_collection' => 'ליידיג בוך',
	'coll-yes' => 'יא',
	'coll-no' => 'ניין',
	'coll-cancel' => 'מבטל זײַן',
	'coll-update' => 'דערהײַנטיקן',
	'coll-rendering_status' => '<strong>סטאַטוס:</strong> $1',
	'coll-rendering_article' => '(וויקי בלאַט: $1)',
	'coll-rendering_page' => '(בלאַט: $1)',
	'coll-return_to_collection' => '<p>צוריק צו <a href="$1">$2</a></p>',
	'coll-about_pp' => 'וועגן $1',
	'coll-license' => 'ליצענץ',
	'coll-return_to' => 'צוריק צו [[:$1]]',
	'coll-suggest_show' => 'ווײַזן',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'coll-desc' => '[[Special:Book|Dá àwọn ìwé]]',
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/Lẹ́tà ọ̀rọ̀ olùdá ìwé',
	'coll-collection' => 'Ìwé',
	'coll-collections' => 'Àwọn ìwé',
	'coll-print_template_prefix' => 'Ìtẹ́síìwé',
	'coll-print_template_pattern' => '$1/Ìtẹ́síìwé',
	'coll-your_book' => 'Ìwé yín',
	'coll-title' => 'Àkọlé:',
	'coll-subtitle' => 'Àkọléabẹ́:',
	'coll-contents' => 'Àwọn àkóónú',
	'coll-create_chapter' => 'Dá orí ìwé',
	'coll-sort_alphabetically' => 'Títò bi ABD',
	'coll-rename' => 'Àtúnṣọlọ́rúkọ',
	'coll-yes' => 'Bẹ́ẹ̀ni',
	'coll-no' => 'Bẹ́ẹ̀kọ́',
	'coll-cancel' => 'Fagilé',
	'coll-about_pp' => 'Nípa $1',
	'coll-return_to' => 'Padà sí [[:$1]]',
);

/** Cantonese (粵語)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'coll-desc' => '[[Special:Book|整書]]',
	'coll-collection' => '書',
	'coll-collections' => '書',
	'coll-exclusion_category_title' => '響打印版度排除',
	'coll-print_template_prefix' => '打印',
	'coll-print_template_pattern' => '$1/打印',
	'coll-unknown_subpage_title' => '未知嘅細頁',
	'coll-unknown_subpage_text' => '呢本[[Special:Book|Book]]書嘅細頁唔存在',
	'coll-noscript_text' => '<h1>需要JavaScript!</h1>
<strong>你嘅瀏覽器唔支援JavaScript或者JavaScript閂咗。
呢一版唔會正常噉運行，除非開咗JavaScript。</strong>',
	'coll-savedbook_template' => '保存咗嘅書',
	'coll-your_book' => '你嘅書',
	'coll-download_title' => '下載',
	'coll-download_text' => '要下載一個版本，揀一種格式，然後再撳個掣。',
	'coll-download_as_text' => '要下載做$1格式，撳個掣。',
	'coll-download' => '下載',
	'coll-format_label' => '格式:',
	'coll-remove' => '拎走',
	'coll-show' => '顯示',
	'coll-move_to_top' => '移到最頂',
	'coll-move_up' => '移上',
	'coll-move_down' => '移落',
	'coll-move_to_bottom' => '移到最底',
	'coll-title' => '標題:',
	'coll-subtitle' => '細標題:',
	'coll-contents' => '內容',
	'coll-drag_and_drop' => '用拖放去重排wiki版同章',
	'coll-create_chapter' => '開章',
	'coll-sort_alphabetically' => '按字母排',
	'coll-rename' => '改名',
	'coll-new_chapter' => '輸入新章嘅名',
	'coll-rename_chapter' => '輸入章嘅名',
	'coll-no_such_category' => '無呢個分類',
	'coll-notitle_title' => '唔能夠決定嗰版嘅標題。',
	'coll-post_failed_title' => 'POST請求失敗',
	'coll-post_failed_msg' => 'POST請求 $1 失敗 ($2)。',
	'coll-mwserve_failed_title' => '生成伺服器錯誤',
	'coll-mwserve_failed_msg' => '生成伺服器發生錯誤: <nowiki>$1</nowiki>',
	'coll-error_reponse' => '伺服器回應錯誤',
	'coll-empty_collection' => '空書',
	'coll-revision' => '修訂: $1',
	'coll-save_collection_title' => '保存同分享你嘅書',
	'coll-save_collection_text' => '揀你本書嘅保存位置:',
	'coll-login_to_save' => '如果你想保存以供之後使用，請[[Special:UserLogin|登入或開個新戶口]]。',
	'coll-personal_collection_label' => '個人書:',
	'coll-community_collection_label' => '社群書:',
	'coll-save_collection' => '存書',
	'coll-save_category' => '全部書保存咗到[[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]分類度。',
	'coll-overwrite_title' => '版已經存在。
覆蓋？',
	'coll-overwrite_text' => '用[[:$1]]名嘅版已經存在。
你係咪想用你本書換咗佢？',
	'coll-yes' => '係',
	'coll-no' => '唔係',
	'coll-load_overwrite_text' => '響你本書度已經有一啲版。
你係咪想覆蓋你現有嘅書，加插新內容，或者係取消載入呢本書？',
	'coll-overwrite' => '覆蓋',
	'coll-append' => '加插',
	'coll-cancel' => '取消',
	'coll-update' => '更新',
	'coll-limit_exceeded_title' => '書太大',
	'coll-limit_exceeded_text' => '你本書太大。
無新版加入。',
	'coll-rendering_title' => '生成緊',
	'coll-rendering_text' => '<p><strong>響文件生成緊嗰陣請等一陣。</strong></p>

<p><strong>進度:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>呢一版應該會響每幾秒度自動更新一次。
如果無動作嘅話，請撳你瀏覽器嘅重載掣。</p>',
	'coll-rendering_status' => '<strong>進度:</strong> $1',
	'coll-rendering_article' => '(wiki版: $1)',
	'coll-rendering_page' => '(頁: $1)',
	'coll-rendering_finished_title' => '生成好晒',
	'coll-rendering_finished_text' => '<strong>個文件檔已經生成好。</strong>
<strong>[$1 下載個檔案]</strong>到你嘅電腦。

留意:
* 對個輸出唔滿意？睇[[{{MediaWiki:Coll-helppage}}|書幫手版]]去改善佢。',
	'coll-notfound_title' => '搵唔到書',
	'coll-notfound_text' => '搵唔到書版。',
	'coll-is_cached' => '<ul><li>搵到個文件嘅快取版，唔需要重新生成過。<a href="$1">強制重新生成。</a></li></ul>',
	'coll-excluded-templates' => '* 響[[:Category:$1|$1]]分類上面嘅模已經排除。',
	'coll-blacklisted-templates' => '* 響[[:$1]]黑名單上面嘅嘢已經排除。',
	'coll-return_to_collection' => '<p>返去<a href="$1">$2</a></p>',
	'coll-book_title' => '柯打一本印刷書',
	'coll-book_text' => '響印刷需求拍擋拎一本印刷書:',
	'coll-order_from_pp' => '響$1柯打書',
	'coll-about_pp' => '關於$1',
	'coll-invalid_podpartner_title' => '無效嘅POD拍擋',
	'coll-invalid_podpartner_msg' => '提供嘅POD拍擋無效。
請聯絡你嘅MediaWiki管理員。',
	'coll-license' => '牌照',
	'coll-return_to' => '返去[[:$1]]',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Bencmq
 * @author Chenxiaoqino
 * @author Chenzw
 * @author Hydra
 * @author Liangent
 * @author PhiLiP
 * @author Wmr89502270
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'coll-desc' => '[[Special:Book|创建图书]]',
	'coll-book_creator_intro' => "<big>使用''图书创建器''，你可以创建包含你选择的wiki页面的图书。你可以以不同格式（如PDF、ODF）导出你的图书或订购印刷图书。</big>",
	'coll-manage_your_book' => '管理你的图书',
	'coll-book_creator_help' => '请见[[{{MediaWiki:Coll-helppage}}|图书帮助页面]]获取更多信息。',
	'coll-start_book_creator' => '启用图书创建器',
	'coll-book_creator_continue' => '继续使用图书创建器',
	'coll-book_creator_disable_text' => "''图书创建器''将被停用，你正在创建的图书将被删除。",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/图书创建器文字',
	'coll-collection' => '图书',
	'coll-collections' => '图书',
	'coll-exclusion_category_title' => '打印时排除',
	'coll-print_template_prefix' => '打印',
	'coll-print_template_pattern' => '$1/打印',
	'coll-unknown_subpage_title' => '未知子页面',
	'coll-unknown_subpage_text' => '[[Special:Book|图书]]的该子页面不存在',
	'coll-couldnotaddarticle_title' => '无法添加wiki页面',
	'coll-couldnotaddarticle_msg' => '本wiki页面无法添加。',
	'coll-couldnotremovearticle_title' => '无法删除wiki页面',
	'coll-couldnotremovearticle_msg' => '本wiki页面无法删除。',
	'coll-noscript_text' => '<h1>需要JavaScript！</h1>
<strong>你的浏览器不支持JavaScript或未启用JavaScript。
在启用JavaScript前，本页面无法正常工作。</strong>',
	'coll-savedbook_template' => '已保存的图书',
	'coll-your_book' => '你的图书',
	'coll-download_title' => '下载',
	'coll-download_text' => '请选择格式并单击按钮以下载你的图书。',
	'coll-download_as_text' => '请单击按钮，以$1格式下载你的图书。',
	'coll-download' => '下载',
	'coll-format_label' => '格式：',
	'coll-remove' => '删除',
	'coll-show' => '显示',
	'coll-move_to_top' => '移至最前',
	'coll-move_up' => '向上移动',
	'coll-move_down' => '向下移动',
	'coll-move_to_bottom' => '移至最后',
	'coll-title' => '标题：',
	'coll-subtitle' => '副标题：',
	'coll-contents' => '目录',
	'coll-drag_and_drop' => '请用鼠标拖拽以改变wiki页面和章节的顺序',
	'coll-create_chapter' => '创建章节',
	'coll-sort_alphabetically' => '按字母排序',
	'coll-rename' => '重命名',
	'coll-new_chapter' => '请输入新章节的名称',
	'coll-rename_chapter' => '请输入章节的新名称',
	'coll-no_such_category' => '无本分类',
	'coll-notitle_title' => '无法确定该页标题。',
	'coll-post_failed_title' => '发送POST请求失败',
	'coll-post_failed_msg' => '发送至$1的POST请求失败（$2）。',
	'coll-mwserve_failed_title' => '生成服务器出错',
	'coll-mwserve_failed_msg' => '渲染服务器出错：<nowiki>$1</nowiki>',
	'coll-error_reponse' => '来自服务器的错误响应',
	'coll-empty_collection' => '空白图书',
	'coll-revision' => '修订版本：$1',
	'coll-save_collection_title' => '保存并共享你的图书',
	'coll-save_collection_text' => '选择你的图书的保存位置：',
	'coll-login_to_save' => '如果你想保存图书供日后使用，请[[Special:UserLogin|登录或创建账户]]。',
	'coll-personal_collection_label' => '个人图书：',
	'coll-community_collection_label' => '社区图书：',
	'coll-save_collection' => '保存图书',
	'coll-save_category' => '所有已保存图书将添加至[[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]分类。',
	'coll-overwrite_title' => '页面已存在。
是否覆盖？',
	'coll-overwrite_text' => '名为[[:$1]]的页面已存在。
你想让你的图书替代它吗？',
	'coll-yes' => '是',
	'coll-no' => '否',
	'coll-load_overwrite_text' => '你的图书中已存在一些页面。
你想要覆盖你现在的图书、增补新内容还是取消载入本图书？',
	'coll-overwrite' => '覆盖',
	'coll-append' => '增补',
	'coll-cancel' => '取消',
	'coll-update' => '更新',
	'coll-limit_exceeded_title' => '图书过大',
	'coll-limit_exceeded_text' => '你的图书过大。
无法添加更多页面。',
	'coll-rendering_title' => '正在生成',
	'coll-rendering_text' => '<p><strong>请稍等，正在生成文件。</strong></p>

<p><strong>进度：</strong><span id="renderingProgress">$1</span>%<span id="renderingStatus">$2</span></p>

<p>本页面每隔数秒自动刷新。
如果本页面没有响应，请点击你的浏览器的“刷新”按钮。</p>',
	'coll-rendering_status' => '<strong>状态：</strong>$1',
	'coll-rendering_article' => '（wiki页面：$1）',
	'coll-rendering_page' => '（页面：$1）',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/生成页面信息文字',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/生成收藏信息文字',
	'coll-rendering_finished_title' => '生成完成',
	'coll-rendering_finished_text' => '<strong>文件已生成。</strong>
<strong>[$1下载该文件]</strong>至你的电脑。

注意：
*对输出效果不满意？请见[[{{MediaWiki:Coll-helppage}}|图书帮助页面]]以寻求改进方法。',
	'coll-finished_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/生成页面信息文字',
	'coll-finished_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/生成收藏信息文字',
	'coll-notfound_title' => '未找到图书',
	'coll-notfound_text' => '未找到图书页面。',
	'coll-download_notfound_title' => '未找到文件',
	'coll-download_notfound_text' => '你正在尝试下载的文件不存在：
可能该文件已被删除，需要重新生成。',
	'coll-download_failed_title' => '下载出错',
	'coll-download_failed_text' => '下载该文件时出错：$1',
	'coll-is_cached' => '<ul><li>已发现该文件的缓存版本。不需要重新生成该文件。
<a href="$1">强制重新生成。</a></li></ul>',
	'coll-excluded-templates' => '*已排除[[:Category:$1|$1]]分类中的页面。',
	'coll-blacklisted-templates' => '*已排除黑名单[[:$1]]上的模板。',
	'coll-return_to_collection' => '<p>返回到<a href="$1">$2</a></p>',
	'coll-book_title' => '订购印刷图书',
	'coll-book_text' => '从我们的印刷合作伙伴获取印刷图书。',
	'coll-order_from_pp' => '用$1预览',
	'coll-about_pp' => '关于$1',
	'coll-invalid_podpartner_title' => '无效的印刷合作伙伴',
	'coll-invalid_podpartner_msg' => '提供的印刷合作伙伴无效。
请联系你的MediaWiki管理员。',
	'coll-license' => '授权协议',
	'coll-return_to' => '返回到[[:$1]]',
	'coll-more_info' => '显示更多信息',
	'coll-hide_info' => '隐藏信息',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress订购信息',
	'coll-suggest_title' => '你的图书的建议页面',
	'coll-suggest_intro_text' => '建议列表基于你的图书中现有的wiki页面。
本列表将在你单击“添加”或“删除”按钮后更新。',
	'coll-suggested_articles' => '建议',
	'coll-suggest_reset_bans' => '复位',
	'coll-suggest_reset_bans_tooltip' => '显示以前删除的建议',
	'coll-suggest_add_selected' => '添加已选择页面',
	'coll-suggest_ban_selected' => '删除已选择页面',
	'coll-suggest_your_book' => '你的图书',
	'coll-suggest_show' => '显示',
	'coll-suggest_ban_tooltip' => '从建议列表中删除本页',
	'coll-suggest_article_ban' => '页面<strong>$1</strong>已从建议列表中删除（$2）。',
	'coll-suggest_article_add' => '页面<strong>$1</strong>已被添加至你的图书（$2）。',
	'coll-suggest_article_remove' => '页面<strong>$1</strong>已从你的图书中删除（$2）。',
	'coll-suggest_undo_tooltip' => '撤销该操作',
	'coll-suggest_undo' => '撤销',
	'coll-load_local_book' => '单击“确定”继续编辑你的图书%TITLE%（已包含%NUMPAGES%个wiki页面）。单击“取消”删除你的图书，生成空白图书。',
	'right-collectionsaveasuserpage' => '保存图书为用户页面',
	'right-collectionsaveascommunitypage' => '保存图书为社区页面',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alexsh
 * @author FireJackey
 * @author Liangent
 * @author Mark85296341
 * @author Skjackey tse
 * @author Wmr89502270
 * @author Wong128hk
 */
$messages['zh-hant'] = array(
	'coll-desc' => '[[Special:Book|建立圖書]]',
	'coll-book_creator_intro' => "<big>在''圖書創建器''中，您可以建立一個包含您自己選擇之頁面的圖書。您可以將其導出成不同的格式的電子書（例如PDF或ODF）或者訂做成實體書。",
	'coll-manage_your_book' => '管理您的圖書',
	'coll-book_creator_help' => '請參閱[[{{MediaWiki:Coll-helppage}}|說明頁面]]以取得更多資訊。',
	'coll-start_book_creator' => '啟動圖書創建器',
	'coll-book_creator_continue' => '繼續使用圖書創建器',
	'coll-book_creator_disable_text' => "''圖書創建器''將被禁用，正在建造的圖書也將被移除。",
	'coll-book_creator_text_article' => '{{MediaWiki:Coll-helppage}}/圖書模式文字',
	'coll-collection' => '圖書',
	'coll-collections' => '圖書',
	'coll-exclusion_category_title' => '在列印中排除',
	'coll-print_template_prefix' => '列印',
	'coll-print_template_pattern' => '$1/列印',
	'coll-unknown_subpage_title' => '未知的子頁面',
	'coll-unknown_subpage_text' => '這個[[Special:Book|圖書]]的子頁面不存在',
	'coll-couldnotaddarticle_title' => '無法新增頁面',
	'coll-couldnotaddarticle_msg' => '無法新增此頁面。',
	'coll-couldnotremovearticle_title' => '無法刪除維基頁面',
	'coll-couldnotremovearticle_msg' => '無法刪除此頁面。',
	'coll-noscript_text' => '<h1>需要JavaScript！ </h1>
<strong>您的瀏覽器不支持JavaScript或JavaScript未開啟。

除非啟用JavaScript，此頁面將無法正常工作。</strong>',
	'coll-savedbook_template' => '已儲存的書籍',
	'coll-your_book' => '您的圖籍',
	'coll-download_title' => '下載',
	'coll-download_text' => '選擇格式，點擊按鈕下載電子版本。',
	'coll-download_as_text' => '點擊按鈕，以$1格式下載您的圖書。',
	'coll-download' => '下載',
	'coll-format_label' => '格式：',
	'coll-remove' => '移除',
	'coll-show' => '顯示',
	'coll-move_to_top' => '移至最頂端',
	'coll-move_up' => '向上移動',
	'coll-move_down' => '向下移動',
	'coll-move_to_bottom' => '移至最底瑞',
	'coll-title' => '標題：',
	'coll-subtitle' => '副標題：',
	'coll-contents' => '目錄',
	'coll-drag_and_drop' => '使用拖放重新排列維基的頁面和章節',
	'coll-create_chapter' => '建立章節',
	'coll-sort_alphabetically' => '按字母排序',
	'coll-rename' => '重新命名',
	'coll-new_chapter' => '輸入新章節的名稱',
	'coll-rename_chapter' => '輸入章節的新名稱',
	'coll-no_such_category' => '無分類',
	'coll-notitle_title' => '無法確定此頁面的標題',
	'coll-post_failed_title' => '訊息發送失敗',
	'coll-post_failed_msg' => '傳送到$1的請求失敗（$2）。',
	'coll-mwserve_failed_title' => '呈現伺服器錯誤',
	'coll-mwserve_failed_msg' => '服务器渲染错误：<nowiki>$1</nowiki>',
	'coll-error_reponse' => '伺服器回傳的錯誤',
	'coll-empty_collection' => '空的圖書',
	'coll-revision' => '修訂版本： $1',
	'coll-save_collection_title' => '儲存和分享您的圖書',
	'coll-save_collection_text' => '請選擇圖書的儲存位置',
	'coll-login_to_save' => '如果您想儲存圖書以供未來使用，[[Special:UserLogin|請登入或建立帳戶]]。',
	'coll-personal_collection_label' => '個人圖書：',
	'coll-community_collection_label' => '公有圖書：',
	'coll-save_collection' => '儲存圖書',
	'coll-save_category' => '所有圖書都將在[[:Category:{{MediaWiki:Coll-bookscategory}}|{{MediaWiki:Coll-bookscategory}}]]分類中保存。',
	'coll-overwrite_title' => '頁面已經存在。
要覆蓋嗎？',
	'coll-overwrite_text' => '頁面[[:$1]]已經存在。
您要用您的圖書覆蓋嗎？',
	'coll-yes' => '是',
	'coll-no' => '否',
	'coll-load_overwrite_text' => '您的書中已經有一些頁面。
要覆蓋您目前的圖書、增加新的內容或取消載入？',
	'coll-overwrite' => '覆寫',
	'coll-append' => '加入',
	'coll-cancel' => '取消',
	'coll-update' => '更新',
	'coll-limit_exceeded_title' => '圖書過大',
	'coll-limit_exceeded_text' => '您的圖書太大。
無法再增加更多的頁面。',
	'coll-rendering_title' => '呈現中',
	'coll-rendering_text' => '<p><strong>請稍候，正在產生文件。</strong></p>

<p><strong> 進度:</strong> <span id="renderingProgress">$1</span>% <span id="renderingStatus">$2</span></p>

<p>本頁面將在數秒後自動更新。
如果沒有動作，請按下瀏覽器的「重新整理」按鈕。</p>',
	'coll-rendering_status' => '<strong>狀態：</strong> $1',
	'coll-rendering_article' => '（維基頁面： $1）',
	'coll-rendering_page' => '（頁面：$1）',
	'coll-rendering_page_info_text_article' => '{{MediaWiki:Coll-helppage}}/渲染收集信息文字',
	'coll-rendering_collection_info_text_article' => '{{MediaWiki:Coll-helppage}}/渲染收集信息文字',
	'coll-rendering_finished_title' => '已呈現完成',
	'coll-rendering_finished_text' => '<strong>文件已經產生。</strong>
<strong>[$1 下載文件]</strong>至您的電腦。

註釋：
* 不滿意輸出成果？請參閱[[{{MediaWiki:Coll-helppage}}|幫助頁面]]以暸解如何改善它。',
	'coll-finished_page_info_text_article' => ' {{MediaWiki:Coll-helppage}}/渲染收集信息文字',
	'coll-finished_collection_info_text_article' => ' {{MediaWiki:Coll-helppage}}/渲染收集信息文字',
	'coll-notfound_title' => '找不到圖書',
	'coll-notfound_text' => '未找到。',
	'coll-download_notfound_title' => '找不到檔案',
	'coll-download_notfound_text' => '您正在嘗試下載的文件不存在：可能已被刪除並需要重新產生文件',
	'coll-download_failed_title' => '下載發生錯誤',
	'coll-download_failed_text' => '下載文件中出現錯誤：$1',
	'coll-is_cached' => '<ul><li>已找到文件的暫存版本，沒有重新呈現的必要。<a href="$1">強制重新呈現。</a></li></ul>',
	'coll-excluded-templates' => '* [[:Category:$1|$1]]分類下的頁面被排除。',
	'coll-blacklisted-templates' => '* 由于模板[[:$1]]在黑名单之中所以它被排除。',
	'coll-return_to_collection' => '<p>回到<a href="$1">$2</a></p>',
	'coll-book_title' => '訂購此書的紙本書',
	'coll-book_text' => '從我們的合作夥伴中取得圖書的實體本：',
	'coll-order_from_pp' => '在$1中預覽',
	'coll-about_pp' => '關於 $1',
	'coll-invalid_podpartner_title' => '不正確的POD合作伙伴',
	'coll-invalid_podpartner_msg' => '提供的合作伙伴不正確，請聯絡您的MediaWiki管理員。',
	'coll-license' => '許可協議',
	'coll-return_to' => '回到[[:$1]]',
	'coll-more_info' => '顯示更多資訊',
	'coll-hide_info' => '隱藏訊息',
	'coll-order_info_article' => '{{MediaWiki:Coll-helppage}}/PediaPress 的訂購資訊',
	'coll-suggest_title' => '您圖書的建議頁面',
	'coll-suggest_intro_text' => '建議基於最近您圖書頁面的設置。',
	'coll-suggested_articles' => '建議',
	'coll-suggest_reset_bans' => '重置',
	'coll-suggest_reset_bans_tooltip' => '顯示上次移除的建議',
	'coll-suggest_add_selected' => '加入已選擇的頁面',
	'coll-suggest_ban_selected' => '移除已選擇的頁面',
	'coll-suggest_your_book' => '你的書',
	'coll-suggest_show' => '顯示',
	'coll-suggest_ban_tooltip' => '從建議中移除此頁',
	'coll-suggest_article_ban' => '頁面 <strong>$1</strong> 已經從建議 $2 中移除。',
	'coll-suggest_article_add' => '頁面 <strong>$1</strong> 已經被加入您的圖書（$2）。',
	'coll-suggest_article_remove' => '頁面 <strong>$1</strong> 已經從您的圖書中移除（$2）。',
	'coll-suggest_undo_tooltip' => '撤銷這個動作',
	'coll-suggest_undo' => '撤銷',
	'coll-load_local_book' => '點擊OK來繼續操作你的書籍《%TITLE%》（共%NUMPAGES%頁）。 點擊Cancel清空並從零開始。',
	'right-collectionsaveasuserpage' => '在使用者頁面儲存此書',
	'right-collectionsaveascommunitypage' => '在社群頁面儲存此書',
);

