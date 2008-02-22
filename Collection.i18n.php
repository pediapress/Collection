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
	'coll-login_to_save' => 'If you want to save collections for later use, please <a href="$1">log in or create an account</a>.',
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
	'coll-return_to_collection' => '<p>Return to <a href="$1">$2</a></p>',
	'coll-pages_removed' => 'The following pages could not be rendered and were removed from the PDF file:',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'coll-download_pdf'         => 'Изтегляне на PDF',
	'coll-remove'               => 'Премахване',
	'coll-move_to_top'          => 'Преместване в началото',
	'coll-move_up'              => 'Преместване нагоре',
	'coll-move_down'            => 'Преместване надолу',
	'coll-move_to_bottom'       => 'Преместване в края',
	'coll-title'                => 'Заглавие:',
	'coll-subtitle'             => 'Подзаглавие:',
	'coll-contents'             => 'Съдържание',
	'coll-sort_alphabetically'  => 'Подреждане на страниците по азбучен ред',
	'coll-rename'               => 'Преименуване',
	'coll-no_such_category'     => 'Няма такава категория',
	'coll-yes'                  => 'Да',
	'coll-no'                   => 'Не',
	'coll-cancel'               => 'Отказване',
	'coll-generating_pdf_title' => 'Генериране на PDF',
	'coll-nopdf_error_title'    => 'Не беше открит PDF файл',
	'coll-return_to_collection' => '<p>Връщане към <a href="$1">$2</a></p>',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'coll-desc'                       => "[[Special:Collection|Pagina's verzamelen]], PDF's genereren",
	'coll-collection'                 => 'Collectie',
	'coll-collections'                => 'Collecties',
	'coll-portlet_title'              => 'Mijn collectie',
	'coll-add_page'                   => 'Pagina toevoegen',
	'coll-remove_page'                => 'Pagina verwijderen',
	'coll-add_category'               => 'Categorie toevoegen',
	'coll-load_collection'            => 'Collectie laden',
	'coll-show_collection'            => 'Collectie tonen',
	'coll-help_collections'           => 'Hulp bij collecties',
	'coll-empty'                      => 'leeg',
	'coll-page'                       => 'pagina',
	'coll-pages'                      => "pagina's",
	'coll-download_as_pdf'            => 'Als PDF downloaden',
	'coll-noscript_text'              => '<noscript><h1>JavaScript is vereist!</h1>
<strong>Uw browser understeunt geen JavaScript of JavaScript is uitgeschakeld.
Deze pagina werkt niet correct tenzij u JavaScript inschakelt.</strong></noscript>',
	'coll-intro_text'                 => "U kunt pagina's in een collectie plaatsen, een PDF-bestand maken en downloaden van een paginacollectie, en paginacollectie opslaan voor later gebruik, of om ze te delen.

[[Help:Collections|Meer informatie over collecties]].",
	'coll-pdftoobigcat'               => "De categorie bevat meer dan %PARAM% pagina's. Alleen de eerste %PARAM% pagina's kunnen aan uw collectie worden toegevoegd.
Wilt u ze toevoegen?",
	'coll-my_collection'              => 'Mijn collectie',
	'coll-download_title'             => 'Collectie als PDF downloaden',
	'coll-download_text'              => 'Klik op de knop om een automatisch gemaakt PDF-bestand van uw paginacollectie te downloaden.',
	'coll-download_pdf'               => 'PDF downloaden',
	'coll-remove'                     => 'Verwijderen',
	'coll-move_to_top'                => 'Helemaal naar boven',
	'coll-move_up'                    => 'Naar boven',
	'coll-move_down'                  => 'Naar onderen',
	'coll-move_to_bottom'             => 'Helemaal naar onderen',
	'coll-title'                      => 'Titel:',
	'coll-subtitle'                   => 'Ondertitel:',
	'coll-contents'                   => 'Inhoud',
	'coll-create_chapter'             => 'Nieuw hoofdstuk maken',
	'coll-sort_alphabetically'        => "Pagina's alfabetisch sorteren",
	'coll-clear_collection'           => 'Collectie leegmaken',
	'coll-clear_confirm'              => 'Weet u zeker dat u de collectie leeg wilt maken?',
	'coll-rename'                     => 'Hernoemen',
	'coll-new_chapter'                => 'Voer de naam van het nieuwe hofdstuk in',
	'coll-rename_chapter'             => 'Voer een nieuwe naam in voor het hoofdstuk',
	'coll-no_such_category'           => 'De categorie bestaat niet',
	'coll-mwpdf_error_title'          => 'De PDF kon niet gemaakt worden',
	'coll-mwpdf_error_msg'            => 'Er is een fout opgetreden tijdens het maken van de PDF.',
	'coll-mwzip_error_title'          => 'De paginacollectie kon niet gemaakt worden',
	'coll-mwzip_error_msg'            => 'Er is een fout opgetreden tijdens het maken van de paginacollectie.',
	'coll-notitle_title'              => 'De titel van de pagina kon niet vastgesteld worden.',
	'coll-post_failed_title'          => 'POST-verzoek mislukt',
	'coll-post_failed_msg'            => 'Het POST-verzoek is mislukt.',
	'coll-enter_title'                => 'Voer een titel in voor de collectie:',
	'coll-error_reponse'              => 'De server heeft een foutmelding teruggegeven',
	'coll-empty_collection'           => 'Lege collectie',
	'coll-revision'                   => 'Versie: %PARAM%',
	'coll-save_collection_title'      => 'Collectie opslaan',
	'coll-save_collection_text'       => 'Kies een collectietype en voer een paginatitel in om deze collectie op te slaan voor later gebruik:',
	'coll-login_to_save'              => 'Als u collectie voor later gebruik wilt opslaan, <a href="$1">meld u zich dan aan of maak een gebruiker aan</a>.',
	'coll-personal_collection_label'  => 'Persoonlijke collectie:',
	'coll-community_collection_label' => 'Gemeenschappelijke collectie:',
	'coll-save_collection'            => 'Collectie opslaan',
	'coll-overwrite_title'            => 'De pagina bestaat al. Overschrijven?',
	'coll-overwrite_text'             => 'Er bestaat al een pagina met de naam $title.
Wilt u die pagina vervangen met uw collectie?',
	'coll-yes'                        => 'Ja',
	'coll-no'                         => 'Nee',
	'coll-load_overwrite_text'        => "U hebt al een aantal pagina's in uw collectie.
Wilt u de bestaande collectie overschrijven, de nieuwe pagina's toevoegen, of annuleren?",
	'coll-overwrite'                  => 'Overschrijven',
	'coll-append'                     => 'Toevoegen',
	'coll-cancel'                     => 'Annuleren',
	'coll-limit_exceeded_title'       => 'Collectie is te groot',
	'coll-limit_exceeded_text'        => "Uw paginacollectie is te groot.
U kan geen pagina's meer toevoegen.",
	'coll-generating_pdf_title'       => 'Bezig met maken van PDF',
	'coll-generating_pdf_text'        => "'''Wacht alstublieft. Het PDF-bestand wordt gemaakt.'''
Over enige seconden hoort deze pagina automatisch te verversen. Als dit niet werkt, klik dan op de knop 'Vernieuwen' in uw browser.",
	'coll-pdf_finished_title'         => 'Maken PDF afgerond',
	'coll-pdf_finished_text'          => 'Het PDF-bestand is beschikbaar.
Klik op de link hieronder om het naar uw computer te downloaden.',
	'coll-nopdf_error_title'          => 'Geen PDF-bestand aangetroffen',
	'coll-nopdf_error_text'           => 'Het PDF-bestand is niet aangetroffen. Maak het PDF-bestand alstublieft opnieuw.',
	'coll-notfound_title'             => 'Collectie niet gevonden',
	'coll-notfound_text'              => 'De collectiepagina is niet gevonden.',
	'coll-return_to_collection'       => '<p>Teruggaan naar <a href="$1">$2</a></p>',
	'coll-pages_removed'              => "De onderstaande pagina's konden niet opgemaakt worden en zijn uit het PDF-bestand verwijderd:",
);

/** Swedish (Svenska)
 * @author M.M.S.
 */
$messages['sv'] = array(
	'coll-desc'             => '[[Special:Collection|Samla sidor]], generera PDF filer',
	'coll-collection'       => 'Samling',
	'coll-collections'      => 'Samlingar',
	'coll-portlet_title'    => 'Min samling',
	'coll-add_page'         => 'Lägg till sida',
	'coll-remove_page'      => 'Ta bort sida',
	'coll-add_category'     => 'Lägg till kategori',
	'coll-load_collection'  => 'Ladda samling',
	'coll-show_collection'  => 'Visa samling',
	'coll-help_collections' => 'Hjälp för samlingar',
	'coll-empty'            => 'tom',
	'coll-page'             => 'sida',
	'coll-pages'            => 'sidor',
	'coll-download_as_pdf'  => 'Ladda ner som PDF',
	'coll-my_collection'    => 'Min samling',
	'coll-download_title'   => 'Ladda ner samling som PDF',
	'coll-download_text'    => 'För att ladda ner en automatisk genererad PDF fil av din sidsamling, klicka på knappen.',
	'coll-download_pdf'     => 'Ladda ner PDF',
	'coll-remove'           => 'Ta bort',
	'coll-move_to_top'      => 'Flytta till toppen',
	'coll-move_up'          => 'Flytta upp',
	'coll-move_down'        => 'Flytta ner',
	'coll-move_to_bottom'   => 'Flytta till botten',
	'coll-title'            => 'Titel:',
	'coll-subtitle'         => 'Undertitel:',
	'coll-yes'              => 'Ja',
	'coll-no'               => 'Nej',
);

