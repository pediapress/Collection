<?php

/*
 * Collection Extension for MediaWiki
 * For performance reasons, this file only contains the extension messages
 * that are used from hooks that are almost always loaded.
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

$messages = array();

$messages['en'] = array(
	'coll-print_export'								=> 'Print/export',
	'coll-create_a_book'							=> 'Create a book',
	'coll-create_a_book_tooltip'      => 'Create a book or page collection',
	'coll-book_mode'                  => 'Book mode',
	'coll-download_as'                => 'Download as $1',
	'coll-download_as_tooltip'        => 'Download a $1 version of this wiki page',
	'coll-book_mode_box_style'        => 'text-align: left; margin-top: 10px; padding: 10px; border: 1px solid #aaa; background-color: #f9f9ff;',
	'coll-disable'                    => 'disable',
	'coll-disable_tooltip'            => 'Disable book creation mode',
	'coll-add_category'								=> 'Add this category to your book',
	'coll-add_category_popup'					=> 'Add wiki pages in linked category to your book',
	'coll-add_category_tooltip'				=> 'Add all wiki pages in this category to your book',
	'coll-add_this_page'		  				=> 'Add this page to your book',
	'coll-add_page_popup'							=> 'Add linked wiki page to your book',
	'coll-add_page_tooltip'						=> 'Add the current wiki page to your book',
	'coll-bookscategory'							=> 'Books',
	'coll-clear_collection'						=> 'Clear book',
	'coll-clear_collection_confirm'		=> 'Do you really want to completely clear your book?',
	'coll-clear_collection_tooltip'		=> 'Remove all wiki pages from your current book',
	'coll-help'												=> 'Help',
	'coll-help_tooltip'		            => 'Show help about creating books',
	'coll-helppage'										=> 'Help:Books',
	'coll-load_collection'						=> 'Load book',
	'coll-load_collection_tooltip'		=> 'Load this book as your current book',
	'coll-n_pages'										=> '$1 {{PLURAL:$1|page|pages}}',
	'coll-printable_version_pdf'			=> 'PDF version',
	'coll-remove_this_page'						=> 'Remove this page from your book',
	'coll-remove_page_popup'					=> 'Remove linked wiki page from your book',
	'coll-remove_page_tooltip'				=> 'Remove the current wiki page from your book',
	'coll-show_collection'						=> 'Show book',
	'coll-show_collection_tooltip'		=> 'Click to edit/download/order your book',
);

/** Message documentation (Message documentation)
 * @author Aleator
 * @author Aotake
 * @author Fryed-peach
 * @author Mormegil
 * @author Siebrand
 * @author Teak
 */
$messages['qqq'] = array(
	'coll-create_a_book' => '{{Identical|Books}}',
	'coll-download_as' => '{{Identical|Download}}',
	'coll-bookscategory' => '{{Identical|Book}}',
	'coll-clear_collection' => '',
	'coll-clear_collection_confirm' => 'Message box when pressed "Clear book".',
	'coll-helppage' => "Used as a link to the help page for this extension's functionality on a wiki. '''Do not translate ''Help:''.'''
{{Identical|Book}}",
	'coll-printable_version_pdf' => 'Caption of a link in the [[mw:Help:Navigation#Toolbox|toolbox]] leading to the PDF version of the current page',
);

/** Afrikaans (Afrikaans)
 * @author Anrie
 * @author Arnobarnard
 */
$messages['af'] = array(
	'coll-create_a_book' => 'My versameling',
	'coll-download_as' => 'Laaf as $1 af',
	'coll-add_category' => 'Voeg kategorie by',
	'coll-bookscategory' => 'Boeke',
	'coll-helppage' => 'Help:Boeke',
	'coll-load_collection' => 'Laai versameling',
	'coll-n_pages' => '$1 {{PLURAL:$1|bladsy|bladsye}}',
	'coll-printable_version_pdf' => 'PDF-weergawe',
	'coll-show_collection' => 'Wys versameling',
);

/** Arabic (العربية)
 * @author Antime
 * @author Ciphers
 * @author Meno25
 * @author OsamaK
 * @author Prof.Sherif
 */
$messages['ar'] = array(
	'coll-create_a_book' => 'إنشاء كتاب',
	'coll-download_as' => 'تحميل ك$1',
	'coll-add_category' => 'إضافة تصنيف',
	'coll-add_category_popup' => 'أضف صفحات الويكي في التصنيف الموصول لكتابك',
	'coll-add_category_tooltip' => 'أضف كل صفحات الويكي في هذا التصنيف لكتابك',
	'coll-add_page_popup' => 'أضف صفحة الويكي الموصولة لكتابك',
	'coll-add_page_tooltip' => 'أضف صفحة الويكي الحالية إلى كتابك',
	'coll-bookscategory' => 'كتب',
	'coll-clear_collection' => 'إفراغ الكتاب',
	'coll-clear_collection_confirm' => 'هل تريد حقا إفراغ كتابك بالكامل؟',
	'coll-clear_collection_tooltip' => 'أزل كل صفحات الويكي من كتابك الحالي',
	'coll-helppage' => 'Help:كتب',
	'coll-load_collection' => 'تحميل الكتاب',
	'coll-load_collection_tooltip' => 'حمل هذا الكتاب ككتابك الحالي',
	'coll-n_pages' => '{{PLURAL:$1||صفحة|صفحتان|$1 صفحات|$1 صفحة}}',
	'coll-printable_version_pdf' => 'نسخة PDF',
	'coll-remove_page_popup' => 'أزل صفحة الويكي الموصولة من كتابك',
	'coll-remove_page_tooltip' => 'أزل صفحة الويكي الحالية من كتابك',
	'coll-show_collection' => 'عرض الكتاب',
	'coll-show_collection_tooltip' => 'اضغط لتعديل/تنزيل/طلب كتابك',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'coll-show_collection' => 'ܚܘܝ ܟܬܒܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'coll-create_a_book' => 'إنشاء كتاب',
	'coll-download_as' => 'تحميل ك$1',
	'coll-add_category' => 'إضافة تصنيف',
	'coll-bookscategory' => 'كتب',
	'coll-clear_collection' => 'فضى الكتاب',
	'coll-clear_collection_confirm' => 'انتا بجد عايز تفضى الكتاب بالكامل؟',
	'coll-helppage' => 'Help:كتب',
	'coll-load_collection' => 'تحميل كتاب',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحة|صفحة}}',
	'coll-printable_version_pdf' => 'نسخة PDF',
	'coll-show_collection' => 'عرض الكتاب',
);

/** Asturian (Asturianu)
 * @author Esbardu
 */
$messages['ast'] = array(
	'coll-create_a_book' => 'Crear un llibru',
	'coll-download_as' => 'Descargar como $1',
	'coll-add_category' => 'Añader categoría',
	'coll-helppage' => 'Help:Coleiciones',
	'coll-load_collection' => 'Cargar coleición',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxines}}',
	'coll-show_collection' => 'Amosar coleición',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'coll-create_a_book' => 'Стварыць кнігу',
	'coll-download_as' => 'Загрузіць як $1',
	'coll-add_category' => 'Дадаць катэгорыю',
	'coll-add_category_popup' => 'Дадаць старонкі са зьвязанай катэгорыі ў Вашу кнігу',
	'coll-add_category_tooltip' => 'Дадаць усе старонкі з гэтай катэгорыі ў Вашую кнігу',
	'coll-add_page_popup' => 'Дадаць зьвязаную старонку да Вашай кнігі',
	'coll-add_page_tooltip' => 'Дадаць цяперашнюю вікі-старонку ў Вашую кнігу',
	'coll-bookscategory' => 'Кнігі',
	'coll-clear_collection' => 'Ачысьціць кнігу',
	'coll-clear_collection_confirm' => 'Вы сапраўды жадаеце поўнасьцю ачысьціць Вашую кнігу?',
	'coll-clear_collection_tooltip' => 'Выдаліць усе старонкі з Вашай цяперашняй кнігі',
	'coll-helppage' => 'Help:Кнігі',
	'coll-load_collection' => 'Загрузіць кнігу',
	'coll-load_collection_tooltip' => 'Загрузіць гэтую кнігу як Вашую цяперашнюю кнігу',
	'coll-n_pages' => '$1 {{PLURAL:$1|старонка|старонкі|старонак}}',
	'coll-printable_version_pdf' => 'PDF-вэрсія',
	'coll-remove_page_popup' => 'Выдаліць зьвязаную старонку з Вашай кнігі',
	'coll-remove_page_tooltip' => 'Выдаліць цяперашнюю вікі-старонку з Вашай кнігі',
	'coll-show_collection' => 'Паказаць кнігу',
	'coll-show_collection_tooltip' => 'Націсьніце для рэдагаваньня/загрузкі/заказу Вашай кнігі',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'coll-download_as' => 'Изтегляне като $1',
	'coll-add_category' => 'Добавяне на категория',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страници}}',
	'coll-printable_version_pdf' => 'PDF версия',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'coll-create_a_book' => 'Napravi knjigu',
	'coll-download_as' => 'Učitaj kao $1',
	'coll-add_category' => 'Dodaj kategoriju',
	'coll-add_category_popup' => 'Dodaj wiki stranice u povezane kategorije u Vašoj knjizi',
	'coll-add_category_tooltip' => 'Dodaj sve wiki članke iz ove kategorije u Vašu knjigu',
	'coll-add_page_popup' => 'Dodaje povezanu wiki stranicu u Vašu knjigu',
	'coll-add_page_tooltip' => 'Dodaj trenutnu wiki stranicu u Vašu knjigu',
	'coll-bookscategory' => 'Knjige',
	'coll-clear_collection' => 'Očisti knjigu',
	'coll-clear_collection_confirm' => 'Da li zaista želite da potpuno očistite Vašu knjigu?',
	'coll-clear_collection_tooltip' => 'Ukloni sve wiki članke iz Vaše trenutne knjige',
	'coll-helppage' => 'Help:Knjige',
	'coll-load_collection' => 'Učitaj knjigu',
	'coll-load_collection_tooltip' => 'Učitaj ovu knjigu kao Vašu trenutnu knjigu',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-printable_version_pdf' => 'PDF verzija',
	'coll-remove_page_popup' => 'Ukloni povezanu wiki stranicu iz Vaše knjige',
	'coll-remove_page_tooltip' => 'Ukloni trenutnu wiki stranicu iz Vaše knjige',
	'coll-show_collection' => 'Prikaži knjigu',
	'coll-show_collection_tooltip' => 'Kliknite za uređivanje/download/naručivanje Vaše knjige',
);

/** Catalan (Català)
 * @author Aleator
 * @author SMP
 * @author Solde
 * @author Vriullop
 */
$messages['ca'] = array(
	'coll-create_a_book' => 'Crea un llibre',
	'coll-download_as' => 'Descarrega com $1',
	'coll-add_category' => 'Afegeix categoria',
	'coll-add_category_popup' => 'Afegeix al llibre les pàgines de la categoria enllaçada',
	'coll-add_category_tooltip' => "Afegeix al llibre totes les pàgines d'aquesta categoria",
	'coll-add_page_popup' => 'Afegeix la pàgina wiki enllaçada al llibre',
	'coll-add_page_tooltip' => 'Afegeix la pàgina wiki actual al llibre',
	'coll-bookscategory' => 'Llibres',
	'coll-clear_collection' => 'Buida llibre',
	'coll-clear_collection_confirm' => 'Esteu segurs de buidar completament el vostre llibre?',
	'coll-clear_collection_tooltip' => 'Esborra totes les pàgines wiki del llibre actual',
	'coll-helppage' => 'Help:Llibres',
	'coll-load_collection' => 'Carrega llibre',
	'coll-load_collection_tooltip' => 'Carrega aquest llibre com el vostre llibre actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàgina|pàgines}}',
	'coll-printable_version_pdf' => 'Versió en PDF',
	'coll-remove_page_popup' => 'Treu del wiki la pàgina wiki enllaçada',
	'coll-remove_page_tooltip' => 'Treu la pàgina wiki actual del llibre',
	'coll-show_collection' => 'Mostra llibre',
	'coll-show_collection_tooltip' => 'Feu clic per a editar/descarregar/demanar el vostre llibre',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'coll-create_a_book' => 'Vytvořit knihu',
	'coll-download_as' => 'Stáhnout jako $1',
	'coll-add_category' => 'Přidat kategorii',
	'coll-add_category_popup' => 'Přidat stránky wiki v odkazované kategorii do vaší knihy',
	'coll-add_category_tooltip' => 'Přidá všechny stránky wiki v této kategorii do vaší knihy',
	'coll-add_page_popup' => 'Přidat odkazovanou stránku wiki do vaší knihy',
	'coll-add_page_tooltip' => 'Přidá aktuální stránku wiki do vaší knihy',
	'coll-bookscategory' => 'Knihy',
	'coll-clear_collection' => 'Vyčistit knihu',
	'coll-clear_collection_confirm' => 'Skutečně chcete úplně vyčistit tuto knihu?',
	'coll-clear_collection_tooltip' => 'Odstraní z aktuální knihy všechny stránky wiki',
	'coll-helppage' => 'Help:Knihy',
	'coll-load_collection' => 'Načíst knihu',
	'coll-load_collection_tooltip' => 'Zvolí tuto knihu jako aktuální',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránek}}',
	'coll-printable_version_pdf' => 'PDF verze',
	'coll-remove_page_popup' => 'Odebrat odkazovanou stránku wiki z vaší knihy',
	'coll-remove_page_tooltip' => 'Odstraní aktuální stránku wiki z vaší knihy',
	'coll-show_collection' => 'Zobrazit knihu',
	'coll-show_collection_tooltip' => 'Kliknutím si můžete knihu upravit/stáhnout/objednat',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'coll-create_a_book' => 'Llunio llyfr',
	'coll-download_as' => 'Islwytho ar ffurf $1',
	'coll-add_category' => 'Ychwanegu categori',
	'coll-add_category_popup' => "Ychwanegu'r tudalennau wici yn y categori cysylltiedig at eich llyfr",
	'coll-add_category_tooltip' => 'Ychwanegu holl dudalennau wici y categori hwn at eich llyfr',
	'coll-add_page_popup' => "Ychwanegu'r dudalen wici cysylltiedig at eich llyfr",
	'coll-add_page_tooltip' => "Ychwanegu'r dudalen wici presennol at eich llyfr",
	'coll-bookscategory' => 'Llyfrau',
	'coll-clear_collection' => "Clirio'r llyfr",
	'coll-clear_collection_confirm' => "Ydych chi wir am glirio'ch llyfr yn llwyr?",
	'coll-clear_collection_tooltip' => "Clirio'r holl dudalennau wici o'ch llyfr presennol",
	'coll-helppage' => 'Help:Llyfrau',
	'coll-load_collection' => 'Llwytho llyfr',
	'coll-load_collection_tooltip' => "Llwytho'r llyfr hwn fel eich llyfr cyfredol",
	'coll-n_pages' => '$1 {{PLURAL:$1|tudalen|dudalen|dudalen|tudalen|thudalen|o dudalennau}}',
	'coll-printable_version_pdf' => 'Fersiwn PDF',
	'coll-remove_page_popup' => "Tynnu'r dudalen wici cysylltiedig o'ch llyfr",
	'coll-remove_page_tooltip' => "Tynnu'r dudalen wici presennol o'ch llyfr",
	'coll-show_collection' => 'Dangos y llyfr',
	'coll-show_collection_tooltip' => 'Cliciwch er mwyn golygu/islwytho/archebu eich llyfr',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Pill
 * @author Umherirrender
 */
$messages['de'] = array(
	'coll-print_export' => 'Drucken/exportieren',
	'coll-create_a_book' => 'Buch erstellen',
	'coll-create_a_book_tooltip' => 'Ein Buch oder eine Artikelsammlung erstellen',
	'coll-download_as' => 'Als $1 herunterladen',
	'coll-add_category' => 'Kategorie hinzufügen',
	'coll-add_category_popup' => 'Wikiseiten in verlinkter Kategorie zu deinem Buch hinzufügen',
	'coll-add_category_tooltip' => 'Alle Wikiseiten dieser Kategorie deinem Buch hinzufügen',
	'coll-add_this_page' => 'Diese Seite zu deinem Buch hinzufügen',
	'coll-add_page_popup' => 'Verlinkte Wikiseite zu deinem Buch hinzufügen',
	'coll-add_page_tooltip' => 'Die aktuelle Wikiseite deinem Buch hinzufügen',
	'coll-bookscategory' => 'Bücher',
	'coll-clear_collection' => 'Buch löschen',
	'coll-clear_collection_confirm' => 'Möchtest du wirklich dein Buch löschen?',
	'coll-clear_collection_tooltip' => 'Alle Wikiseiten aus deinem aktuellen Buch entfernen',
	'coll-help' => 'Hilfe',
	'coll-help_tooltip' => 'Hilfe zum Erstellen von Büchern anzeigen',
	'coll-helppage' => 'Help:Bücher',
	'coll-load_collection' => 'Buch laden',
	'coll-load_collection_tooltip' => 'Dieses Buch als dein aktuelles Buch laden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Wikiseite|Wikiseiten}}',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_this_page' => 'Diese Seite aus deinem Buch entfernen',
	'coll-remove_page_popup' => 'Verlinkte Wikiseite aus deinem Buch entfernen',
	'coll-remove_page_tooltip' => 'Die aktuelle Wikiseite aus deinem Buch entfernen',
	'coll-show_collection' => 'Buch zeigen',
	'coll-show_collection_tooltip' => 'Klicken, um dein Buch zu bearbeiten/herunterzuladen/bestellen',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Dst
 * @author MichaelFrey
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'coll-add_category_popup' => 'Wikiseiten in verlinkter Kategorie zu Ihrem Buch hinzufügen',
	'coll-add_category_tooltip' => 'Alle Wikiseiten dieser Kategorie Ihrem Buch hinzufügen',
	'coll-add_this_page' => 'Diese Seite zu Ihrem Buch hinzufügen',
	'coll-add_page_popup' => 'Verlinkte Wikiseite zu Ihrem Buch hinzufügen',
	'coll-add_page_tooltip' => 'Die aktuelle Wikiseite Ihrem Buch hinzufügen',
	'coll-clear_collection_confirm' => 'Möchten Sie wirklich Ihr Buch löschen?',
	'coll-clear_collection_tooltip' => 'Alle Wikiseiten aus Ihrem aktuellen Buch entfernen',
	'coll-load_collection_tooltip' => 'Dieses Buch als Ihr aktuelles Buch laden',
	'coll-remove_this_page' => 'Diese Seite aus Ihrem Buch entfernen',
	'coll-remove_page_popup' => 'Verlinkte Wikiseite aus Ihrem Buch entfernen',
	'coll-remove_page_tooltip' => 'Die aktuelle Wikiseite aus Ihrem Buch entfernen',
	'coll-show_collection_tooltip' => 'Klicken, um Ihr Buch zu bearbeiten/herunterzuladen/bestellen',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'coll-create_a_book' => 'Knigły napóraś',
	'coll-download_as' => 'Ako $1 ześěgnuś',
	'coll-add_category' => 'Kategoriju pśidaś',
	'coll-add_category_popup' => 'Wikiboki we wótkazanej kategoriji twójim knigłam pśidaś',
	'coll-add_category_tooltip' => 'Wšě wikiboki w toś tej kategoriji twójim knigłam pśidaś',
	'coll-add_page_popup' => 'Wótkazany wikibok twójim knigłam pśidaś',
	'coll-add_page_tooltip' => 'Aktualny wikibok twójim knigłam pśidaś',
	'coll-bookscategory' => 'Knigły',
	'coll-clear_collection' => 'Knigły wuprozniś',
	'coll-clear_collection_confirm' => 'Coš napšawdu swóje knigły dopołnje wuprozniś?',
	'coll-clear_collection_tooltip' => 'Wše wikiboki z twójich aktualnych knigłow wótpóraś',
	'coll-helppage' => 'Help:Knigły',
	'coll-load_collection' => 'Knigły zacytaś',
	'coll-load_collection_tooltip' => 'Toś te knigły ako twóje aktualne knigły zacytaś',
	'coll-n_pages' => '$1 {{PLURAL:$1|bok|boka|boki|bokow}}',
	'coll-printable_version_pdf' => 'PDF-wersija',
	'coll-remove_page_popup' => 'Wótkazany wikibok z twójich knigłow wótpóraś',
	'coll-remove_page_tooltip' => 'Aktualny wikibok z twójich knigłow wótpóraś',
	'coll-show_collection' => 'Knigły pokazaś',
	'coll-show_collection_tooltip' => 'Klikni, aby wobźěłał/ześěgnuł/skazał swóje knigły',
);

/** Greek (Ελληνικά)
 * @author Geraki
 * @author Omnipaedista
 */
$messages['el'] = array(
	'coll-create_a_book' => 'Δημιουργία βιβλίου',
	'coll-download_as' => 'Κατέβασμα ως $1',
	'coll-add_category' => 'Προσθήκη κατηγορίας',
	'coll-add_category_popup' => 'Προσθήκη των σελίδων της συνδεδεμένης κατηγορίας στο βιβλίο σας',
	'coll-add_category_tooltip' => 'Προσθήκη όλων των σελίδων της συνδεδεμένης κατηγορίας στο βιβλίο σας',
	'coll-add_page_popup' => 'Προσθήκη της συνδεδεμένης σελίδας στο βιβλίο σας',
	'coll-add_page_tooltip' => 'Προσθήκη της παρούσας σελίδας στο βιβλίο σας',
	'coll-bookscategory' => 'Βιβλία',
	'coll-clear_collection' => 'Εκκαθάριση βιβλίου',
	'coll-clear_collection_confirm' => 'Αλήθεια θέλετε να καθαρίσετε εντελώς το βιβλίο σας;',
	'coll-clear_collection_tooltip' => 'Αφαίρεση όλων των σελίδων από το παρόν βιβλίο σας',
	'coll-helppage' => 'Help:Βιβλία',
	'coll-load_collection' => 'Φόρτωση βιβλίου',
	'coll-load_collection_tooltip' => 'Επιφόρτωση αυτού του βιβλίου ως του τρέχοντός σου βιβλίου',
	'coll-n_pages' => '$1 {{PLURAL:$1|σελίδα|σελίδες}}',
	'coll-printable_version_pdf' => 'έκδοση PDF',
	'coll-remove_page_popup' => 'Αφαίρεση της συνδεδεμένης σελίδας από το βιβλίο σας',
	'coll-remove_page_tooltip' => 'Αφαίρεση της παρούσας σελίδας από το βιβλίο σας',
	'coll-show_collection' => 'Εμφάνιση βιβλίου',
	'coll-show_collection_tooltip' => 'Κάνετε κλικ για να επεξεργαστείτε/κατεβάσετε/παραγγείλετε το βιβλίο σας',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'coll-create_a_book' => 'Krei libron',
	'coll-download_as' => 'Elŝuti kiel $1',
	'coll-add_category' => 'Aldoni kategorion',
	'coll-add_category_popup' => 'Aldoni vikipaĝojn en ligita kategorio al via libro',
	'coll-add_category_tooltip' => 'Aldoni ĉiujn vikiajn paĝojn en ĉi tiu kategorio al via libro',
	'coll-add_page_popup' => 'Aldoni ligilplenan vikian paĝon al via libro',
	'coll-add_page_tooltip' => 'Aldoni la nunan vikian paĝon al via libro',
	'coll-bookscategory' => 'Libroj',
	'coll-clear_collection' => 'Forviŝi libron',
	'coll-clear_collection_confirm' => 'Ĉu vi ja volas plene forviŝi vian libron?',
	'coll-clear_collection_tooltip' => 'Forigi ĉiujn vikiajn paĝojn de via nuna libro',
	'coll-helppage' => 'Help:Libroj',
	'coll-load_collection' => 'Alŝuti libron',
	'coll-load_collection_tooltip' => 'Ŝarĝi ĉi tiun libron kiel vian nunan libron',
	'coll-n_pages' => '$1 {{PLURAL:$1|paĝo|paĝoj}}',
	'coll-printable_version_pdf' => 'PDF-versio',
	'coll-remove_page_popup' => 'Forigi ligitan vikian paĝon de via libro',
	'coll-remove_page_tooltip' => 'Forigi la nunan vikian paĝon de via libro',
	'coll-show_collection' => 'Montri libron',
	'coll-show_collection_tooltip' => 'Klaku redakti/elŝuti/mendi vian libron',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Locos epraix
 * @author Remember the dot
 * @author Sanbec
 */
$messages['es'] = array(
	'coll-create_a_book' => 'Crear un libro',
	'coll-download_as' => 'Descargar como $1',
	'coll-add_category' => 'Añadir categoría',
	'coll-add_category_popup' => 'Agregar páginas wiki en categoría vinculada a tu libro',
	'coll-add_category_tooltip' => 'Agregar todas las páginas wiki en esta categoría a tu libro',
	'coll-add_page_popup' => 'Agregar página wiki vinculada a tu libro',
	'coll-add_page_tooltip' => 'Agregar la página wiki actual a tu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Vaciar libro',
	'coll-clear_collection_confirm' => '¿Realmente quieres borrar completamente tu libro?',
	'coll-clear_collection_tooltip' => 'Remover todas las páginas wiki de tu libro actual',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar libro',
	'coll-load_collection_tooltip' => 'Cargar este libro como su libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-printable_version_pdf' => 'Versión PDF',
	'coll-remove_page_popup' => 'Remover página wiki vinculada de tu libro',
	'coll-remove_page_tooltip' => 'Remover la página wiki actual de tu libro',
	'coll-show_collection' => 'Mostrar libro',
	'coll-show_collection_tooltip' => 'Haz click para editar/descargar/ordenar tu libro',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'coll-create_a_book' => 'Loo raamat',
	'coll-add_category' => 'Lisa kategooria',
	'coll-add_page_tooltip' => 'Lisa käesolev lehekülg loodavasse raamatusse',
	'coll-clear_collection' => 'Tühjenda raamat',
	'coll-clear_collection_confirm' => 'Kas soovid tõesti kogu raamatu tühjendada?',
	'coll-clear_collection_tooltip' => 'Võta kõik leheküljed loodavast raamatust välja',
	'coll-n_pages' => '$1 {{PLURAL:$1|lehekülg|lehekülge}}',
	'coll-printable_version_pdf' => 'PDF-versioon',
	'coll-remove_page_tooltip' => 'Võta käesolev lehekülg loodavast raamatust välja',
	'coll-show_collection' => 'Näita raamatut',
	'coll-show_collection_tooltip' => 'Redigeeri, laadi alla või telli',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Kobazulo
 * @author Theklan
 */
$messages['eu'] = array(
	'coll-create_a_book' => 'Liburu bat sortu',
	'coll-download_as' => '$1 gisa jaitsi',
	'coll-add_category' => 'Kategoria gehitu',
	'coll-bookscategory' => 'Liburuak',
	'coll-clear_collection' => 'Liburua ezabatu',
	'coll-clear_collection_confirm' => 'Benetan ezabatu nahi al duzu zure liburu osoa?',
	'coll-helppage' => 'Help:Liburuak',
	'coll-load_collection' => 'Liburua kargatu',
	'coll-n_pages' => '{{PLURAL:$1|Orrialde 1|$1 orrialde}}',
	'coll-printable_version_pdf' => 'PDF bertsioa',
	'coll-show_collection' => 'Liburua erakutsi',
	'coll-show_collection_tooltip' => 'Zure liburua editatzeko/deskargatzeko/eskatzeko egizu klik',
);

/** Persian (فارسی)
 * @author Huji
 * @author Komeil 4life
 * @author Ladsgroup
 */
$messages['fa'] = array(
	'coll-create_a_book' => 'ایجاد کتاب',
	'coll-download_as' => 'بارگیری با عنوان $1',
	'coll-add_category' => 'اضافه کردن رده',
	'coll-bookscategory' => 'کتاب‌ها',
	'coll-clear_collection' => 'پاک کردن کتاب',
	'coll-clear_collection_confirm' => 'آیا واقعاً می‌خواهید که کتاب خود را به طور کامل پاک کنید؟',
	'coll-helppage' => 'Help:کتاب‌ها',
	'coll-load_collection' => 'بارکردن کتاب',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحه|صفحه}}',
	'coll-printable_version_pdf' => 'نسخهٔ پی‌دی‌اف',
	'coll-show_collection' => 'نمایش کتاب',
	'coll-show_collection_tooltip' => 'برای ویرایش/بارگیری/سفارش کتاب خود کلیک کنید',
);

/** Finnish (Suomi)
 * @author Crt
 * @author Str4nd
 */
$messages['fi'] = array(
	'coll-create_a_book' => 'Luo kirja',
	'coll-download_as' => 'Lataa $1-tiedostona',
	'coll-add_category' => 'Lisää luokkaan',
	'coll-add_category_popup' => 'Lisää kaikki sivut kirjaasi linkitetystä luokasta',
	'coll-add_category_tooltip' => 'Lisää kaikki wikisivut kirjaasi tästä luokasta',
	'coll-add_page_popup' => 'Lisää linkitetty wikisivu kirjaasi',
	'coll-add_page_tooltip' => 'Lisää nykyinen wikisivu kirjaasi',
	'coll-bookscategory' => 'Kirjat',
	'coll-clear_collection' => 'Tyhjennä kirja',
	'coll-clear_collection_confirm' => 'Haluatko varmasti tyhjentää kirjasi?',
	'coll-clear_collection_tooltip' => 'Poista kaikki wikisivut nykyisestä kirjastasi',
	'coll-helppage' => 'Help:Kirjat',
	'coll-load_collection' => 'Lataa kirja',
	'coll-load_collection_tooltip' => 'Lataa tämä kirja nykyiseksi kirjaksesi',
	'coll-n_pages' => '$1 {{PLURAL:$1|sivu|sivua}}',
	'coll-printable_version_pdf' => 'PDF-versio',
	'coll-remove_page_popup' => 'Poista linkitetty wikisivu kirjastasi',
	'coll-remove_page_tooltip' => 'Poista nykyinen wikisivu kirjastasi',
	'coll-show_collection' => 'Näytä kirja',
	'coll-show_collection_tooltip' => 'Napsauta muokataksesi, ladataksesi tai tilataksesi kirjasi',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author Guillom
 * @author IAlex
 * @author McDutchie
 * @author Meithal
 * @author Verdy p
 */
$messages['fr'] = array(
	'coll-create_a_book' => 'Créer un livre',
	'coll-download_as' => 'Télécharger comme $1',
	'coll-add_category' => 'Ajouter cette catégorie',
	'coll-add_category_popup' => 'Ajouter les pages de la catégorie liée à votre livre',
	'coll-add_category_tooltip' => 'Ajouter tous les articles de cette catégorie à votre livre',
	'coll-add_page_popup' => 'Ajouter la page liée à votre livre',
	'coll-add_page_tooltip' => 'Ajouter la page courante à votre livre',
	'coll-bookscategory' => 'Livres',
	'coll-clear_collection' => 'Vider le livre',
	'coll-clear_collection_confirm' => 'Voulez-vous réellement effacer l’intégralité de votre livre ?',
	'coll-clear_collection_tooltip' => 'Retirer tous les articles de votre livre actuel',
	'coll-helppage' => 'Help:Livres',
	'coll-load_collection' => 'Charger un livre',
	'coll-load_collection_tooltip' => 'Charger ce livre en tant que votre livre actuel',
	'coll-n_pages' => '$1 page{{PLURAL:$1||s}}',
	'coll-printable_version_pdf' => 'Version PDF',
	'coll-remove_page_popup' => 'Supprimer la page liée de votre livre',
	'coll-remove_page_tooltip' => 'Retirer la page courante de votre livre',
	'coll-show_collection' => 'Afficher le livre',
	'coll-show_collection_tooltip' => 'Cliquez pour modifier / télécharger / commander votre livre',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'coll-create_a_book' => 'Crear un libro',
	'coll-download_as' => 'Descargar como $1',
	'coll-add_category' => 'Engadir categoría',
	'coll-add_category_popup' => 'Engadir as páxinas wiki da categoría ligada ao seu libro',
	'coll-add_category_tooltip' => 'Engadir todas as páxinas wiki desta categoría ao seu libro',
	'coll-add_page_popup' => 'Engadir a páxina wiki ligada ao seu libro',
	'coll-add_page_tooltip' => 'Engadir a páxina wiki actual ao seu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Borrar o libro',
	'coll-clear_collection_confirm' => 'Realmente quere eliminar por completo o seu libro?',
	'coll-clear_collection_tooltip' => 'Eliminar todas as páxinas wiki do seu libro actual',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar un libro',
	'coll-load_collection_tooltip' => 'Cargar este libro como o seu libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxinas}}',
	'coll-printable_version_pdf' => 'Versión PDF',
	'coll-remove_page_popup' => 'Eliminar páxina wiki ligada do seu libro',
	'coll-remove_page_tooltip' => 'Eliminar a páxina wiki actual do seu libro',
	'coll-show_collection' => 'Mostrar o libro',
	'coll-show_collection_tooltip' => 'Prema para editar/descargar/pedir o seu libro',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'coll-download_as' => 'Καταφορτίζειν ὡς $1',
	'coll-add_category' => 'Προστιθέναι κατηγορίαν',
	'coll-bookscategory' => 'Βιβλία',
	'coll-printable_version_pdf' => 'Ἔκδοσις PDF',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'coll-create_a_book' => 'Buech aalege',
	'coll-download_as' => 'As $1 abelade',
	'coll-add_category' => 'Kategorii zuefiege',
	'coll-add_category_popup' => 'Wikisyte in dr vergleichte Kategorii zue Dyynem Buech zuefiege',
	'coll-add_category_tooltip' => 'Alli Wikisyte in däre Kategorii in Dyy Buech yyfiege',
	'coll-add_page_popup' => 'Vergleichti Syte zu Dyynem Buech zuefiege',
	'coll-add_page_tooltip' => 'Di aktuäll Wikisyte zue Dyynem Buech zuefiege',
	'coll-bookscategory' => 'Buechfunktion',
	'coll-clear_collection' => 'Buech lesche',
	'coll-clear_collection_confirm' => 'Mechtsch Dyy Buech ächt lesche?',
	'coll-clear_collection_tooltip' => 'Alli Wikisyte us Dyynem aktuälle Buech useneh',
	'coll-helppage' => 'Help:Biecher',
	'coll-load_collection' => 'Buech lade',
	'coll-load_collection_tooltip' => 'Des Buech as Dyy aktuäll Buech lade',
	'coll-n_pages' => '$1 {{PLURAL:$1|Syte|Syte}}',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_page_popup' => 'Vergleichti Syte us Dyynem Buech uuseneh',
	'coll-remove_page_tooltip' => 'Di aktuäll Wikisyte us Dyynem Buech uuseneh',
	'coll-show_collection' => 'Buech zeige',
	'coll-show_collection_tooltip' => 'Druck do go Dyy Buech bearbeite/abelade/bstelle',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'coll-download_as' => '$1 તરીકે ડાઉનલોડ કરો',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'coll-create_a_book' => 'My haglym',
	'coll-helppage' => 'Help:Lioaryn',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'coll-create_a_book' => 'יצירת ספר',
	'coll-download_as' => 'הורדה בפורמט $1',
	'coll-add_category' => 'הוספת קטגוריה',
	'coll-add_category_popup' => 'הוספת כל הדפים בקטגוריה המקושרת לספר שלך',
	'coll-add_category_tooltip' => 'הוספת כל הדפים בקטגוריה זו לספר שלך',
	'coll-add_page_popup' => 'הוספת הדף המקושר לספר שלך',
	'coll-add_page_tooltip' => 'הוספת דף הוויקי הנוכחי לספר שלך',
	'coll-bookscategory' => 'ספרים',
	'coll-clear_collection' => 'ניקוי הספר',
	'coll-clear_collection_confirm' => 'האם אתם בטוחים שברצונכם לנקות לגמרי את הספר שלכם?',
	'coll-clear_collection_tooltip' => 'הסרת כל הדפים מהספר הנוכחי שלך',
	'coll-helppage' => 'Help:ספרים',
	'coll-load_collection' => 'פתיחת ספר',
	'coll-load_collection_tooltip' => 'פתיחת הספר הזה כספר הנוכחי שלך',
	'coll-n_pages' => '{{PLURAL:$1|דף אחד|$1 דפים}}',
	'coll-printable_version_pdf' => 'גרסת PDF',
	'coll-remove_page_popup' => 'הסרת הדף המקושר מהספר שלך',
	'coll-remove_page_tooltip' => 'הסרת דף הוויקי הנוכחי מהספר שלך',
	'coll-show_collection' => 'הצגת ספר',
	'coll-show_collection_tooltip' => 'עריכת/הורדת/הזמנת הספר שלך',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'coll-create_a_book' => 'मेरा कलेक्शन',
	'coll-add_category' => 'श्रेणी बढायें',
	'coll-clear_collection' => 'कलेक्शन खाली करें',
	'coll-helppage' => 'Help:कलेक्शन',
	'coll-load_collection' => 'कलेक्शन लोड करें',
	'coll-show_collection' => 'कलेक्शन दर्शायें',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author SpeedyGonsales
 * @author Suradnik13
 */
$messages['hr'] = array(
	'coll-create_a_book' => 'Napravi zbirku',
	'coll-download_as' => 'Preuzmi kao $1',
	'coll-add_category' => 'Dodaj kategoriju',
	'coll-add_category_popup' => 'Dodaj stranice iz kategorije u svoju zbirku',
	'coll-add_category_tooltip' => 'Dodaj sve stranica iz kategoriji u svoju zbirku',
	'coll-add_page_popup' => 'Dodajte povezanu stranicu u svoju zbirku',
	'coll-add_page_tooltip' => 'Dodajte trenutačnu stranicu u svoju zbirku',
	'coll-bookscategory' => 'Zbirke',
	'coll-clear_collection' => 'Očisti zbirku',
	'coll-clear_collection_confirm' => 'Želite li stvarno očistiti svoju cijelu zbirku?',
	'coll-clear_collection_tooltip' => 'Uklonite sve stranice iz vaše trenutačne zbirke',
	'coll-helppage' => 'Help:Zbirke',
	'coll-load_collection' => 'Učitaj zbirku',
	'coll-load_collection_tooltip' => 'Učitati ovu zbirku kao svoju trenutačnu zbirku',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-printable_version_pdf' => 'PDF inačica',
	'coll-remove_page_popup' => 'Ukloni povezanu stranicu iz svoje zbirke',
	'coll-remove_page_tooltip' => 'Ukloni trenutnačnu stranicu iz svoje zbirke',
	'coll-show_collection' => 'Pokaži zbirku',
	'coll-show_collection_tooltip' => 'Kliknite da biste uredili/preuzeli/naručili svoju zbirku',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'coll-create_a_book' => 'Knihu wutworić',
	'coll-download_as' => 'Jako $1 sćahnyć',
	'coll-add_category' => 'Kategoriju přidać',
	'coll-add_category_popup' => 'Wikistrony we wotkzajanej kategoriji twojej knize přidać',
	'coll-add_category_tooltip' => 'Wšě wikistrony w tutej kategoriji twojej knize přidać',
	'coll-add_page_popup' => 'Wotkazanu wikistronu k twojej knize přidać',
	'coll-add_page_tooltip' => 'Aktualnu wikijowu stronu twojej knize přidać',
	'coll-bookscategory' => 'Knihi',
	'coll-clear_collection' => 'Knihu wuprózdnić',
	'coll-clear_collection_confirm' => 'Chceš woprawdźe swoju knihu dospołnje wuprózdnić?',
	'coll-clear_collection_tooltip' => 'Wšě wikistrony z twojeje aktualneje knihi wotstronić',
	'coll-helppage' => 'Help:Knihi',
	'coll-load_collection' => 'Knihu začitać',
	'coll-load_collection_tooltip' => 'Tutu knihu jako twoju aktualnu knihu začitać',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|stronje|strony|stronow}}',
	'coll-printable_version_pdf' => 'PDF-wersija',
	'coll-remove_page_popup' => 'Wotkazanu wikistronu z twojeje knihi wotstronić',
	'coll-remove_page_tooltip' => 'Aktualnu wikijowu stronu z twojeje knihi wotstronić',
	'coll-show_collection' => 'Knihu pokazać',
	'coll-show_collection_tooltip' => 'Klikń, zo by swoju knihu wobdźěłał/sćahnył/skazał',
);

/** Hungarian (Magyar)
 * @author Bdamokos
 * @author Dani
 */
$messages['hu'] = array(
	'coll-create_a_book' => 'Könyv készítése',
	'coll-download_as' => 'Letöltés mint $1',
	'coll-add_category' => 'Kategória hozzáadása',
	'coll-add_category_popup' => 'A hivatkozott kategória lapjainak hozzáadása a könyvhöz',
	'coll-add_category_tooltip' => 'Ezen kategória összes lapjának hozzáadása a könyvhöz',
	'coll-add_page_popup' => 'A hivatkozott lap hozzáadása a könyvhöz',
	'coll-add_page_tooltip' => 'A jelenlegi lap hozzáadása a könyvhöz',
	'coll-bookscategory' => 'Könyvek',
	'coll-clear_collection' => 'Könyv kiürítése',
	'coll-clear_collection_confirm' => 'Valóban törölni szeretnéd a könyved?',
	'coll-clear_collection_tooltip' => 'Az összes lap eltávolítása a kiválasztott könyvből',
	'coll-helppage' => 'Help:Könyvek',
	'coll-load_collection' => 'Könyv betöltése',
	'coll-load_collection_tooltip' => 'Könyv betöltése kiválasztott könyvként',
	'coll-n_pages' => '{{PLURAL:$1|egy|$1}} lap',
	'coll-printable_version_pdf' => 'PDF változat',
	'coll-remove_page_popup' => 'A hivatkozott lap eltávolítása a könyvből',
	'coll-remove_page_tooltip' => 'A jelenlegi lap eltávolítása a könyvből',
	'coll-show_collection' => 'Könyv mutatása',
	'coll-show_collection_tooltip' => 'Kattints ide a könyv szerkesztéséhez/letöltéséhez/megrendeléségez',
);

/** Armenian (Հայերեն)
 * @author Teak
 */
$messages['hy'] = array(
	'coll-create_a_book' => 'Ստեղծել գիրք',
	'coll-download_as' => 'Քաշել որպես $1',
	'coll-add_category' => 'Ավելացնել կատեգորիան',
	'coll-bookscategory' => 'Գրքեր',
	'coll-clear_collection' => 'Ջնջել գիրքը',
	'coll-clear_collection_confirm' => 'Դուք իսկապես ցանկանում եք ամբողջությամբ ջնջե՞լ ձեր գիրքը։',
	'coll-helppage' => 'Help:Գրքեր',
	'coll-load_collection' => 'Բեռնել գիրքը',
	'coll-n_pages' => '$1 {{PLURAL:$1|էջ|էջ}}',
	'coll-printable_version_pdf' => 'PDF-տարբերակ',
	'coll-show_collection' => 'Ցույց տալ գիրքը',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'coll-create_a_book' => 'Crear un libro',
	'coll-download_as' => 'Discargar como $1',
	'coll-add_category' => 'Adder categoria',
	'coll-add_category_popup' => 'Adder le paginas wiki del categoria ligate a tu libro',
	'coll-add_category_tooltip' => 'Adder tote le paginas wiki in iste categoria a tu libro',
	'coll-add_page_popup' => 'Adder le pagina wiki ligate a tu libro',
	'coll-add_page_tooltip' => 'Adder le pagina wiki actual a tu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Vacuar libro',
	'coll-clear_collection_confirm' => 'Esque tu realmente vole vacuar completemente tu libro?',
	'coll-clear_collection_tooltip' => 'Remover tote le pagians wiki de tu libro actual',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar libro',
	'coll-load_collection_tooltip' => 'Cargar iste libro como tu libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-printable_version_pdf' => 'Version PDF',
	'coll-remove_page_popup' => 'Remover le pagina wiki ligate de tu libro',
	'coll-remove_page_tooltip' => 'Remover le pagina wiki actual de tu libro',
	'coll-show_collection' => 'Monstrar libro',
	'coll-show_collection_tooltip' => 'Clicca pro modificar/discargar/commandar tu libro',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'coll-create_a_book' => 'Buat buku',
	'coll-download_as' => 'Unduh sebagai $1',
	'coll-add_category' => 'Tambah kategori',
	'coll-add_category_popup' => 'Tambahkan halaman wiki pada kategori terkait buku Anda',
	'coll-add_category_tooltip' => 'Tambahkan semua halaman wiki pada kategori ini ke buku Anda',
	'coll-add_page_popup' => 'Tambahkan halaman wiki terkait ke buku Anda',
	'coll-add_page_tooltip' => 'Tambahkan halaman wiki ini ke buku Anda',
	'coll-bookscategory' => 'Wikipedia:Buku',
	'coll-clear_collection' => 'Hapus buku',
	'coll-clear_collection_confirm' => 'Apakah Anda benar-benar ingin membersihkan buku Anda sepenuhnya?',
	'coll-clear_collection_tooltip' => 'Hapus semua halaman wiki dari buku Anda',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Muat buku',
	'coll-load_collection_tooltip' => 'Muat buku ini sebagai buku aktif Anda',
	'coll-n_pages' => '$1 {{PLURAL:$1|halaman|halaman}}',
	'coll-printable_version_pdf' => 'Buat PDF',
	'coll-remove_page_popup' => 'Buang halaman wiki terkait dari buku Anda',
	'coll-remove_page_tooltip' => 'Buang halaman wiki ini dari buku Anda',
	'coll-show_collection' => 'Lihat buku',
	'coll-show_collection_tooltip' => 'Klik untuk menyunting/mengunduh/memesan buku Anda',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'coll-create_a_book' => 'Kreez un libro',
	'coll-add_category' => 'Adjuntar kategorio',
	'coll-bookscategory' => 'Libri',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Kargar libro',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagino|pagini}}',
	'coll-printable_version_pdf' => 'Versiono PDF',
	'coll-show_collection' => 'Montrar libro',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'coll-create_a_book' => 'Safnið mitt',
	'coll-add_category' => 'Bæta við flokki',
	'coll-load_collection' => 'Hlaða safn',
	'coll-show_collection' => 'Sýna safn',
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Darth Kule
 */
$messages['it'] = array(
	'coll-create_a_book' => 'Crea un libro',
	'coll-download_as' => 'Scarica come $1',
	'coll-add_category' => 'Aggiungi categoria',
	'coll-add_category_popup' => 'Aggiungi le pagine wiki nella categoria collegata al tuo libro',
	'coll-add_category_tooltip' => 'Aggiungi tutte le pagine wiki di questa categoria al tuo libro',
	'coll-add_page_popup' => 'Aggiungi pagina wiki collegata al tuo libro',
	'coll-add_page_tooltip' => 'Aggiungi la pagina wiki corrente al tuo libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Svuota libro',
	'coll-clear_collection_confirm' => 'Si desidera veramente pulire completamente il proprio libro?',
	'coll-clear_collection_tooltip' => 'Remuovi tutte le pagine wiki dal tuo libro corrente',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Carica libro',
	'coll-load_collection_tooltip' => 'Carica questo libro come libro corrente',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|pagine}}',
	'coll-printable_version_pdf' => 'Versione PDF',
	'coll-remove_page_popup' => 'Rimuovi pagina wiki collegata dal tuo libro',
	'coll-remove_page_tooltip' => 'Rimuovi la pagina wiki corrente dal tuo libro',
	'coll-show_collection' => 'Mostra libro',
	'coll-show_collection_tooltip' => 'Fai clic per modificare, scaricare o ordinare il tuo libro',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 */
$messages['ja'] = array(
	'coll-create_a_book' => 'ブックの新規作成',
	'coll-download_as' => '$1としてダウンロード',
	'coll-add_category' => 'カテゴリの追加',
	'coll-add_category_popup' => 'リンクされたカテゴリ内のウィキページを自分のブックに追加する',
	'coll-add_category_tooltip' => 'このカテゴリ中のすべてのページをあなたのブックに追加する',
	'coll-add_page_popup' => 'リンクされたウィキページを自分のブックに追加する',
	'coll-add_page_tooltip' => '現在のページをあなたのブックに追加する',
	'coll-bookscategory' => 'ブック',
	'coll-clear_collection' => 'ブックを消去',
	'coll-clear_collection_confirm' => '本当にブックを完全に消去しますか？',
	'coll-clear_collection_tooltip' => 'あなたの現在のブックからすべてのウィキページを削除する',
	'coll-helppage' => 'Help:ブック',
	'coll-load_collection' => 'ブックの読み込み',
	'coll-load_collection_tooltip' => 'このブックをあなたの現在のブックとして読み込む',
	'coll-n_pages' => '$1{{PLURAL:$1|ページ}}',
	'coll-printable_version_pdf' => 'PDF版',
	'coll-remove_page_popup' => 'リンクされたウィキページを自分のブックから除去する',
	'coll-remove_page_tooltip' => '現在のページをあなたのブックから削除する',
	'coll-show_collection' => 'ブックを表示',
	'coll-show_collection_tooltip' => 'クリックしてあなたのブックを編集、ダウンロード、または注文する',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'coll-create_a_book' => 'Gawé buku',
	'coll-download_as' => 'Undhuh minangka $1',
	'coll-add_category' => 'Tambah kategori',
	'coll-clear_collection' => 'Busak buku',
	'coll-clear_collection_confirm' => 'Apa panjenengan pancèn arep mbusak buku panjenengan sakabèhané?',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Unggahna buku',
	'coll-n_pages' => '$1 {{PLURAL:$1|kaca|kaca}}',
	'coll-printable_version_pdf' => 'Vèrsi PDF',
	'coll-show_collection' => 'Tuduhna buku',
);

/** Georgian (ქართული)
 * @author Malafaya
 * @author Sopho
 * @author Temuri rajavi
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'coll-create_a_book' => 'წიგნის შექმნა',
	'coll-add_category' => 'კატეგორიის დამატება',
	'coll-add_category_popup' => 'ჩაამატეთ ვიკი გვერდები მონიშნული კატეგორიიდან თქვენს გვერდში',
	'coll-add_category_tooltip' => 'ამ კატეგორიის ყველა ვიკი გვერდის ჩამატება წიგნში',
	'coll-add_page_popup' => 'შესაბამისი ვიკი გვერდის წიგნში ჩამატება',
	'coll-add_page_tooltip' => 'შესაბამისი ვიკი გვერდის წიგნში ჩამატება',
	'coll-bookscategory' => 'წიგნები',
	'coll-clear_collection' => 'წიგნის გასუფთავება',
	'coll-clear_collection_confirm' => 'დარწმუნებული ხართ, რომ გსურთ თქვენი წიგნის სრული დასუფთავება?',
	'coll-clear_collection_tooltip' => 'მოცემული წიგნიდან ყველა ვიკი-გვერდის წაშლა.',
	'coll-helppage' => 'Help:წიგნები',
	'coll-load_collection' => 'წიგნის ატვირთვა',
	'coll-n_pages' => '$1 გვერდი',
	'coll-printable_version_pdf' => 'PDF ვერსია',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'coll-create_a_book' => 'បង្កើតសៀវភៅ​',
	'coll-download_as' => 'ទាញយកជា $1',
	'coll-add_category' => 'បន្ថែមចំណាត់ថ្នាក់ក្រុម',
	'coll-add_page_popup' => 'បន្ថែមទំព័រ​វីគី​ដែលតភ្ជាប់ ទៅសៀវភៅ​របស់អ្នក​',
	'coll-add_page_tooltip' => 'បន្ថែម​ទំព័រ​វីគី​បច្ចុប្បន្នទៅ​សៀវភៅ​របស់​អ្នក​',
	'coll-bookscategory' => 'សៀវភៅ',
	'coll-clear_collection' => 'សំអាត​សៀវភៅ',
	'coll-clear_collection_confirm' => 'តើ​អ្នក​ពិតជា​ចង់​ជម្រះ​សៀវភៅ​របស់​អ្នក​ទាំងស្រុង​ឬ​?',
	'coll-clear_collection_tooltip' => 'ដកយក​ទំព័រ​វីគីទាំងអស់​ពីសៀវភៅ​បច្ចុប្បន្ន​របស់អ្នក​',
	'coll-helppage' => 'Help: សៀវភៅ',
	'coll-load_collection' => 'ផ្ទុកសៀវភៅ',
	'coll-load_collection_tooltip' => 'ផ្ទុក​សៀវភៅនេះ​ទៅជា​សៀវភៅ​បច្ចុប្បន្ន​របស់អ្នក​',
	'coll-n_pages' => '$1 {{PLURAL:$1|ទំព័រ|ទំព័រ}}',
	'coll-printable_version_pdf' => 'កំណែ PDF',
	'coll-show_collection' => 'បង្ហាញ​សៀវភៅ',
);

/** Korean (한국어)
 * @author Ilovesabbath
 * @author Kwj2772
 * @author Yknok29
 */
$messages['ko'] = array(
	'coll-create_a_book' => '책 만들기',
	'coll-download_as' => '$1로 다운로드',
	'coll-add_category' => '분류 추가하기',
	'coll-add_category_popup' => '연결된 카테고리의 위키 페이지를 당신의 책에 더하세요.',
	'coll-add_category_tooltip' => '이 분류에 속한 모든 위키 페이지를 책에 추가해 주세요',
	'coll-add_page_popup' => '연결된 위키 페이지를 당신의 책에 더하세요',
	'coll-add_page_tooltip' => '현재 위키 페이지에 책을 덧붙여 주세요',
	'coll-bookscategory' => '책들',
	'coll-clear_collection' => '책 청소하기',
	'coll-clear_collection_confirm' => '정말로 책에 있는 내용을 완전히 삭제하길 원하세요?',
	'coll-clear_collection_tooltip' => '현재 책으로부터 모든 위키 페이지를 삭제하세요',
	'coll-helppage' => 'Help:책 만들기',
	'coll-load_collection' => '책 불러오기',
	'coll-load_collection_tooltip' => '현재 책으로 이 책을 메모리에 넣어주세요',
	'coll-n_pages' => '$1개의 문서',
	'coll-printable_version_pdf' => 'PDF 버전',
	'coll-remove_page_popup' => '연결된 위키 페이지를 당신의 책에서 지우세요.',
	'coll-remove_page_tooltip' => '당신의 책에서 이 위키 문서를 제거합니다',
	'coll-show_collection' => '책 보여주기',
	'coll-show_collection_tooltip' => '책을 편집/다운로드/주문하려면 클릭해 주세요',
);

/** Krio (Krio)
 * @author Protostar
 */
$messages['kri'] = array(
	'coll-create_a_book' => 'Mek buk',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'coll-create_a_book' => 'E Booch zesamme_ställe',
	'coll-download_as' => 'Als $1 eronger laade',
	'coll-add_category' => 'En Saachjrupp bei dat Booch dobei donn',
	'coll-add_category_popup' => 'Donn di Sigge uß dä {{ns:Category}}, wo dä Lengk drop jeiht, met en Ding Booch opnämme',
	'coll-add_category_tooltip' => 'Dat deiht all de Atikelle en dä {{NS:Category}} en Ding Booch erin.',
	'coll-add_page_popup' => 'Donn de Sigg, wo dä Lengk drop jeiht, met en dat Booch opnämme',
	'coll-add_page_tooltip' => 'Donn de aktoälle Wiki-Sigg en dat Booch erin',
	'coll-bookscategory' => 'Bööscher',
	'coll-clear_collection' => 'Dat Booch leddisch maache',
	'coll-clear_collection_confirm' => 'Wells De werklesch Ding Booch jannz fott schmieße?',
	'coll-clear_collection_tooltip' => 'Hee met schmiiß De alle Sigge fum Wiki uß Dingem aktoälle Booch eruß, un deihs et leddisch maache.',
	'coll-helppage' => 'Help:Bööscher',
	'coll-load_collection' => 'Booch lade',
	'coll-load_collection_tooltip' => 'Deiht dat Booch hee als Ding aktoälles Booch laade.',
	'coll-n_pages' => '{{PLURAL:$1|ein Sigg|$1 Sigge|kein Sigge}}',
	'coll-printable_version_pdf' => 'PDF Version',
	'coll-remove_page_popup' => 'Donn de Sigg, wo dä Lemgk drop jeiht, uß Dingem Booch eruß nämme',
	'coll-remove_page_tooltip' => 'Schmiiß hee di Sigg fum Wiki uß Dingem Booch eruß',
	'coll-show_collection' => 'Booch zeije',
	'coll-show_collection_tooltip' => 'He met kanns De Ding Boch ändere, de zosamme jeshtalle Sigge erunger laade, un jedröck beshtelle.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'coll-create_a_book' => 'E Buch uleeën',
	'coll-download_as' => 'Als $1 eroflueden',
	'coll-add_category' => 'Kategorie derbäisetzen',
	'coll-add_category_popup' => 'Wikisäiten a verlinkte Kategorien an Ärt Buch derbäisetzen',
	'coll-add_category_tooltip' => 'All Wiki-Säiten aus dëser Kategorie an Ärt Buch derbäisetzen',
	'coll-add_page_popup' => 'Verlinkte Wiki-Säit an Ärt Buch derbäisetzen',
	'coll-add_page_tooltip' => 'Déi aktuell Wiki-Säit an Ärt Buch derbäisetzen',
	'coll-bookscategory' => 'Bicher',
	'coll-clear_collection' => 'Buch eidel maachen',
	'coll-clear_collection_confirm' => 'Wëllt Dir Ärt Buch wierklech ganz läschen?',
	'coll-clear_collection_tooltip' => 'All Wiki-Säiten aus ärem aktuelle Buch eraushuelen',
	'coll-helppage' => 'Help:Bicher',
	'coll-load_collection' => 'Buch lueden',
	'coll-load_collection_tooltip' => 'Dëst Buch als Ärt aktuellt Buch lueden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Säit|Säiten}}',
	'coll-printable_version_pdf' => 'PDF-Versioun',
	'coll-remove_page_popup' => 'Verlinkte Wiki-Säit aus Ärem Buch eraushuelen',
	'coll-remove_page_tooltip' => 'Dës Wiki-Säit aus Ärem buch eraushuelen',
	'coll-show_collection' => "D'Buch weisen",
	'coll-show_collection_tooltip' => "Klickt fir Ärt Buch z'änneren/erofzeluede/ze bestellen",
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'coll-create_a_book' => "Maak 'n book",
	'coll-download_as' => 'Óphaole es $1',
	'coll-add_category' => 'Zeukgroop bievoge',
	'coll-add_category_popup' => "Wikipagina's oet de gekóppeldje categorie aan dien book zètte",
	'coll-add_category_tooltip' => 'Zèt als paasj in dees zeukgroop aan öch book',
	'coll-add_page_popup' => 'Gekóppeldje wikipaasj aan öch book zètte',
	'coll-add_page_tooltip' => "Zèt d'n huujige wikipaasj aan öch book",
	'coll-bookscategory' => 'Beuk',
	'coll-clear_collection' => 'Laeg book',
	'coll-clear_collection_confirm' => 'Wils se dien book èch laege?',
	'coll-clear_collection_tooltip' => 'Wösj als paasj oet öch huujig book',
	'coll-helppage' => 'Help:Beuk',
	'coll-load_collection' => 'Laaj book',
	'coll-load_collection_tooltip' => 'Laaj dit book es öch huujig book',
	'coll-n_pages' => "$1 {{PLURAL:$1|pazjena|pazjena's}}",
	'coll-printable_version_pdf' => 'PDF-gaedering',
	'coll-remove_page_popup' => 'Gekóppeldje wikipaasj oet dien book wösje',
	'coll-remove_page_tooltip' => "Wösj d'n huujig wikipaasj oet öch book",
	'coll-show_collection' => 'Toean book',
	'coll-show_collection_tooltip' => 'Klik óm öch book tö bewèrke/óphaole/bestèlle',
);

/** Lithuanian (Lietuvių)
 * @author Homo
 */
$messages['lt'] = array(
	'coll-create_a_book' => 'Kurti knygą',
	'coll-add_category' => 'Pridėti kategoriją',
	'coll-printable_version_pdf' => 'PDF versija',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'coll-create_a_book' => 'എന്റെ ശേഖരം',
	'coll-add_category' => 'വര്‍ഗ്ഗം ചേര്‍ക്കുക',
	'coll-clear_collection' => 'ശേഖരം മായ്ക്കുക',
	'coll-helppage' => 'Help:ശേഖരം',
	'coll-load_collection' => 'ശേഖരം ലോഡ് ചെയ്യുക',
	'coll-show_collection' => 'ശേഖരം കാണിക്കുക',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'coll-create_a_book' => 'मी गोळा केलेली पाने',
	'coll-add_category' => 'वर्गाचा समावेश करा',
	'coll-clear_collection' => 'सर्व गोळा केलेली पाने पुसा',
	'coll-helppage' => 'Help:गोळा केलेली पाने',
	'coll-load_collection' => 'गोळाकेलेली पाने दाखवा',
	'coll-show_collection' => 'गोळा केलेली पाने दाखवा',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 */
$messages['ms'] = array(
	'coll-create_a_book' => 'Cipta buku',
	'coll-download_as' => 'Muat turun $1',
	'coll-add_category' => 'Tambah kategori',
	'coll-bookscategory' => 'Buku',
	'coll-clear_collection' => 'Kosongkan buku',
	'coll-clear_collection_confirm' => 'Betul anda mahu mengosongkan buku anda?',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Muat buku',
	'coll-n_pages' => '$1 laman',
	'coll-printable_version_pdf' => 'Versi PDF',
	'coll-show_collection' => 'Papar buku',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'coll-add_category' => 'Поладомс категория',
	'coll-bookscategory' => 'Кинигат',
	'coll-helppage' => 'Help:Кинигат',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'coll-create_a_book' => 'Book opstellen',
	'coll-download_as' => 'As $1 dalladen',
	'coll-add_category' => 'Kategorie tofögen',
	'coll-add_category_popup' => 'Wikisieden in de verlenkte Kategorie to dien Book tofögen',
	'coll-add_category_tooltip' => 'All Wikisieden ut disse Kategorie to dien Book tofögen',
	'coll-add_page_popup' => 'Verlenkt Wikisied to dien Book tofögen',
	'coll-add_page_tooltip' => 'Disse Wikisied to dien Book tofögen',
	'coll-bookscategory' => 'Böker',
	'coll-clear_collection' => 'Book leddigmaken',
	'coll-clear_collection_confirm' => 'Wullt du dien Book worraftig leddig maken?',
	'coll-clear_collection_tooltip' => 'All Wikisieden ut dien Book rutnehmen',
	'coll-helppage' => 'Help:Böker',
	'coll-load_collection' => 'Book laden',
	'coll-load_collection_tooltip' => 'Dit Book as dien aktuell Book laden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Sied|Sieden}}',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_page_popup' => 'Verlenkte Wikisied ut dien Book rutnehmen',
	'coll-remove_page_tooltip' => 'Disse Wikisied ut dien Book rutnehmen',
	'coll-show_collection' => 'Book wiesen',
	'coll-show_collection_tooltip' => 'Klick hier, dat du dien Book ännern/dalladen/bestellen kannst',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'coll-create_a_book' => 'Boek maken',
	'coll-download_as' => 'Oflaojen as $1',
	'coll-add_category' => 'Kattegerie derbie',
	'coll-bookscategory' => 'Boeken',
	'coll-helppage' => 'Help:Boeken',
	'coll-load_collection' => 'Boek laojen',
	'coll-n_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'coll-printable_version_pdf' => 'PDF-versie',
	'coll-show_collection' => 'Boek laoten zien',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author Tvdm
 */
$messages['nl'] = array(
	'coll-create_a_book' => 'Boek maken',
	'coll-download_as' => 'Downloaden als $1',
	'coll-add_category' => 'Categorie toevoegen',
	'coll-add_category_popup' => "Wikipagina's uit de gekoppelde categorie aan uw boek toevoegen",
	'coll-add_category_tooltip' => "Alle pagina's in deze categorie aan uw boek toevoegen",
	'coll-add_page_popup' => 'Gekoppelde wikipagina aan uw boek toevoegen',
	'coll-add_page_tooltip' => 'De huidige wikipagina aan uw boek toevoegen',
	'coll-bookscategory' => 'Boeken',
	'coll-clear_collection' => 'Boek leegmaken',
	'coll-clear_collection_confirm' => 'Wilt u uw boek werkelijk leegmaken?',
	'coll-clear_collection_tooltip' => "Alle pagina's uit uw huidige boek verwijderen",
	'coll-helppage' => 'Help:Boeken',
	'coll-load_collection' => 'Boek laden',
	'coll-load_collection_tooltip' => 'Dit boek als uw huidige boek laden',
	'coll-n_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'coll-printable_version_pdf' => 'PDF-versie',
	'coll-remove_page_popup' => 'Gekoppelde wikipagina uit uw boek verwijderen',
	'coll-remove_page_tooltip' => 'De huidige wikipagina uit uw boek verwijderen',
	'coll-show_collection' => 'Boek weergeven',
	'coll-show_collection_tooltip' => 'Klik om ow boek te bewerken/downloaden/bestellen',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Gunnernett
 * @author Harald Khan
 */
$messages['nn'] = array(
	'coll-create_a_book' => 'Opprett ei bok',
	'coll-download_as' => 'Last ned som $1',
	'coll-add_category' => 'Legg til kategori',
	'coll-add_category_popup' => 'Legg til i boka di wikisider i opplenka kategoriar',
	'coll-add_category_tooltip' => 'Legg til alle sidene i denne kategorien til boka di',
	'coll-add_page_popup' => 'Legg til lenkja wikiside i boka di',
	'coll-add_page_tooltip' => 'Legg til den noverande wikisida til boka di',
	'coll-bookscategory' => 'Bøker',
	'coll-clear_collection' => 'Tøm bok',
	'coll-clear_collection_confirm' => 'Vil du verkeleg fjerna alle sidene i boka di?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider frå den noverande boka di',
	'coll-helppage' => 'Help:Bøker',
	'coll-load_collection' => 'Last bok',
	'coll-load_collection_tooltip' => 'Last denne boka som den noverande boka di',
	'coll-n_pages' => '{{PLURAL:$1|éi sida|$1 sider}}',
	'coll-printable_version_pdf' => 'PDF-versjon',
	'coll-remove_page_popup' => 'Fjern lenkja wikiside frå boka di',
	'coll-remove_page_tooltip' => 'Fjern den noverande wikisida frå boka di',
	'coll-show_collection' => 'Vis bok',
	'coll-show_collection_tooltip' => 'Trykk for å endra/lasta ned/tinga boka di',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'coll-create_a_book' => 'Opprett en bok',
	'coll-download_as' => 'Last ned som $1',
	'coll-add_category' => 'Legg til kategori',
	'coll-add_category_popup' => 'Legg til wikisider i den lenkede kategorien i din bok',
	'coll-add_category_tooltip' => 'Legg til alle wikisider i denne kategorien til din bok',
	'coll-add_page_popup' => 'Legg til lenket wikiside i din bok',
	'coll-add_page_tooltip' => 'Legg til den nåværende wikisiden i din bok',
	'coll-bookscategory' => 'Bøker',
	'coll-clear_collection' => 'Tøm bok',
	'coll-clear_collection_confirm' => 'Vil du virkelig tømme boka?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider fra din nåværende bok',
	'coll-helppage' => 'Help:Bøker',
	'coll-load_collection' => 'Last bok',
	'coll-load_collection_tooltip' => 'Last denne boka som din nåværende bok',
	'coll-n_pages' => '$1 {{PLURAL:$1|side|sider}}',
	'coll-printable_version_pdf' => 'PDF-versjon',
	'coll-remove_page_popup' => 'Fjern lenket wikiside fra din bok',
	'coll-remove_page_tooltip' => 'Fjern den nåværende wikisiden fra din bok',
	'coll-show_collection' => 'Vis bok',
	'coll-show_collection_tooltip' => 'Trykk for å endre/laste ned/bestille din bok',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'coll-create_a_book' => 'Crear un libre',
	'coll-download_as' => 'Telecargat coma $1',
	'coll-add_category' => 'Apondre una categoria',
	'coll-add_category_popup' => 'Apondre las paginas de la categoria ligada a vòstre libre',
	'coll-add_category_tooltip' => "Apondre totes los articles d'aquesta categoria a vòstre libre",
	'coll-add_page_popup' => 'Apondre la pagina ligada a vòstre libre',
	'coll-add_page_tooltip' => 'Apondre la pagina correnta a vòstre libre',
	'coll-bookscategory' => 'Libres',
	'coll-clear_collection' => 'Voidar lo libre',
	'coll-clear_collection_confirm' => 'Volètz vertadièrament escafar l’integralitat de vòstre libre ?',
	'coll-clear_collection_tooltip' => 'Levar totes los articles de vòstre libre actual',
	'coll-helppage' => 'Help:Libres',
	'coll-load_collection' => 'Cargar un libre',
	'coll-load_collection_tooltip' => 'Cargar aqueste libre en tant que vòstre libre actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-printable_version_pdf' => 'Version del PDF',
	'coll-remove_page_popup' => 'Suprimir la pagina ligada de vòstre libre',
	'coll-remove_page_tooltip' => 'Levar la pagina correnta de vòstre libre',
	'coll-show_collection' => 'Afichar lo libre',
	'coll-show_collection_tooltip' => 'Clicatz per modificar / telecargar / comandar vòstre libre',
);

/** Ossetic (Иронау)
 * @author Amikeco
 */
$messages['os'] = array(
	'coll-download_as' => 'Æрбавгæн куыд $1',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'coll-bookscategory' => 'Bicher',
	'coll-clear_collection' => 'Buch lösche',
	'coll-helppage' => 'Help:Bicher',
	'coll-printable_version_pdf' => 'PDF-Version',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Masti
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'coll-create_a_book' => 'Utwórz książkę',
	'coll-download_as' => 'Pobierz jako $1',
	'coll-add_category' => 'Dodaj kategorię',
	'coll-add_category_popup' => 'Dodaj strony wiki w linkowanej kategorii do książki',
	'coll-add_category_tooltip' => 'Dodaj wszystkie strony wiki znajdujące się w tej kategorii do książki',
	'coll-add_page_popup' => 'Dodaj linkowaną stronę wiki do książki',
	'coll-add_page_tooltip' => 'Dodaj bieżącą stronę wiki do książki',
	'coll-bookscategory' => 'Książki',
	'coll-clear_collection' => 'Wyczyść książkę',
	'coll-clear_collection_confirm' => 'Czy jesteś pewien, że chcesz wyczyścić całą zawartość książki?',
	'coll-clear_collection_tooltip' => 'Usuń wszystkie strony wiki z bieżącej książki',
	'coll-helppage' => 'Help:Książki',
	'coll-load_collection' => 'Załaduj książkę',
	'coll-load_collection_tooltip' => 'Załaduj tę książkę jako bieżącą',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|strony|stron}}',
	'coll-printable_version_pdf' => 'Wersja PDF',
	'coll-remove_page_popup' => 'Usuń linkowaną stronę wiki z książki',
	'coll-remove_page_tooltip' => 'Usuń bieżącą stronę wiki z książki',
	'coll-show_collection' => 'Pokaż książkę',
	'coll-show_collection_tooltip' => 'Kliknij aby edytować, pobrać lub zamówić książkę',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'coll-create_a_book' => 'يو کتاب جوړول',
	'coll-add_category' => 'وېشنيزه ورګډول',
);

/** Portuguese (Português)
 * @author 555
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'coll-create_a_book' => 'Criar um livro',
	'coll-download_as' => 'Descarregar como $1',
	'coll-add_category' => 'Adicionar categoria',
	'coll-add_category_popup' => 'Adicionar ao seu livro as páginas wiki na categoria ligada',
	'coll-add_category_tooltip' => 'Adicionar todas as páginas wiki nesta categoria ao seu livro',
	'coll-add_page_popup' => 'Adicionar ao seu livro a página wiki ligada',
	'coll-add_page_tooltip' => 'Adicionar a página wiki atual ao seu livro',
	'coll-bookscategory' => 'Livros',
	'coll-clear_collection' => 'Esvaziar livro',
	'coll-clear_collection_confirm' => 'Deseja realmente limpar completamente o seu livro?',
	'coll-clear_collection_tooltip' => 'Remover todas as páginas wiki do seu livro atual',
	'coll-helppage' => 'Help:Livros',
	'coll-load_collection' => 'Carregar livro',
	'coll-load_collection_tooltip' => 'Carregar este livro como o seu livro atual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-printable_version_pdf' => 'Versão em PDF',
	'coll-remove_page_popup' => 'Remover a página wiki ligada do seu livro',
	'coll-remove_page_tooltip' => 'Remover a página wiki atual do seu livro',
	'coll-show_collection' => 'Mostrar livro',
	'coll-show_collection_tooltip' => 'Clique para editar/descarregar/encomendar o seu livro',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 * @author Heldergeovane
 * @author Jorge Morais
 */
$messages['pt-br'] = array(
	'coll-create_a_book' => 'Criar um livro',
	'coll-download_as' => 'Baixar como $1',
	'coll-add_category' => 'Adicionar categoria',
	'coll-add_category_popup' => 'Adicionar páginas wiki na categoria ligada no seu livro',
	'coll-add_category_tooltip' => 'Adicionar todas as páginas wiki nesta categoria ao seu livro',
	'coll-add_page_popup' => 'Adicionar página wiki ligada ao seu livro',
	'coll-add_page_tooltip' => 'Adicionar a página wiki atual ao seu livro',
	'coll-bookscategory' => 'Livros',
	'coll-clear_collection' => 'Esvaziar livro',
	'coll-clear_collection_confirm' => 'Realmente deseja esvaziar completamente o seu livro?',
	'coll-clear_collection_tooltip' => 'Remover todas as páginas wiki do seu livro atual',
	'coll-helppage' => 'Help:Livros',
	'coll-load_collection' => 'Carregar livro',
	'coll-load_collection_tooltip' => 'Carregar este livro como o seu livro atual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-printable_version_pdf' => 'Versão em PDF',
	'coll-remove_page_popup' => 'Remover páginas wiki ligadas de seu livro',
	'coll-remove_page_tooltip' => 'Remover a página wiki atual do seu livro',
	'coll-show_collection' => 'Mostrar livro',
	'coll-show_collection_tooltip' => 'Clique para editar/baixar/encomendar o seu livro',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'coll-create_a_book' => 'Creează o carte',
	'coll-download_as' => 'Descarcă $1',
	'coll-add_category' => 'Adaugă categorie',
	'coll-add_category_popup' => 'Adăugaţi wiki pagini din categoria indicată în cartea dumneavoastră',
	'coll-add_category_tooltip' => 'Adăugaţi toate wiki paginile din această categorie în cartea dumneavoastră',
	'coll-add_page_popup' => 'Adăugaţi wiki paginile indicate în cartea dumneavoastră',
	'coll-add_page_tooltip' => 'Adăugaţi wiki pagina actuală în cartea dumneavoastră',
	'coll-bookscategory' => 'Cărţi',
	'coll-clear_collection' => 'Goliţi cartea',
	'coll-clear_collection_confirm' => 'Doriţi să goliţi complet cartea dumneavoastră?',
	'coll-clear_collection_tooltip' => 'Elimină toate wiki paginile din cartea actuală',
	'coll-helppage' => 'Help:Cărţi',
	'coll-load_collection' => 'Încarcă cartea',
	'coll-load_collection_tooltip' => 'Încarcă această carte ca actuala dumneavoastră carte',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagină|pagini}}',
	'coll-printable_version_pdf' => 'Versiune PDF',
	'coll-remove_page_popup' => 'Eliminaţi pagina indicată din cartea dumneavoastră',
	'coll-remove_page_tooltip' => 'Eliminaţi pagina actuală din cartea dumneavoastră',
	'coll-show_collection' => 'Arată cartea',
	'coll-show_collection_tooltip' => 'Apăsaţi pentru a modifica/descărca/comanda cartea dumneavoastră',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'coll-create_a_book' => "Ccreje 'nu libbre",
	'coll-add_category' => "Aggiunge 'na categorije",
	'coll-bookscategory' => 'Libbre',
	'coll-clear_collection' => "Pulizze 'u libbre",
	'coll-helppage' => 'Help:Libbre',
	'coll-load_collection' => "Careche 'nu libbre",
	'coll-n_pages' => '$1 {{PLURAL:$1|pàgene|pàggene}}',
	'coll-printable_version_pdf' => 'Versione in PDF',
	'coll-show_collection' => "Fà vedè 'nu libbre",
);

/** Russian (Русский)
 * @author Ahonc
 * @author Ferrer
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'coll-print_export' => 'Печать/Экспорт',
	'coll-create_a_book' => 'Создать книгу',
	'coll-create_a_book_tooltip' => 'Создать книгу или коллекцию статей',
	'coll-download_as' => 'Загрузить как $1',
	'coll-download_as_tooltip' => 'Загрузить $1 версию этой вики-страницы',
	'coll-disable' => 'выключить',
	'coll-disable_tooltip' => 'Выключить режим создания книги',
	'coll-add_category' => 'Добавить категорию',
	'coll-add_category_popup' => 'Добавить в вики-страницы из связанной категории в книгу',
	'coll-add_category_tooltip' => 'Добавить все вики-страницы этой категории в книгу',
	'coll-add_this_page' => 'Добавить эту страницу в вашу книгу',
	'coll-add_page_popup' => 'Добавить связанную вики-страницу в книгу',
	'coll-add_page_tooltip' => 'Добавить текущую вики-страницу в книгу',
	'coll-bookscategory' => 'Книги',
	'coll-clear_collection' => 'Очистить книгу',
	'coll-clear_collection_confirm' => 'Вы действительно желаете полностью очистить вашу книгу?',
	'coll-clear_collection_tooltip' => 'Удалите все вики-страницы из текущей книги',
	'coll-help' => 'Справка',
	'coll-help_tooltip' => 'Показать справку по созданию книг',
	'coll-helppage' => 'Help:Книги',
	'coll-load_collection' => 'Загрузить книгу',
	'coll-load_collection_tooltip' => 'Загрузить эту книгу как вашу текущую книгу',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страницы|страниц}}',
	'coll-printable_version_pdf' => 'PDF-версия',
	'coll-remove_this_page' => 'Удалить эту страницу из вашей книги',
	'coll-remove_page_popup' => 'Удалить связанную вики-страницу из книги',
	'coll-remove_page_tooltip' => 'Удалить текущую вики-страницу из книги',
	'coll-show_collection' => 'Показать книгу',
	'coll-show_collection_tooltip' => 'Нажмите для редактирования/загрузки/заказа книги',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'coll-create_a_book' => 'Кинигэни айарга',
	'coll-download_as' => 'Маннык $1 киллэр',
	'coll-add_category' => 'Категория эбии',
	'coll-add_category_popup' => 'Сигэнэр категорияттан сирэйдэри кинигэҕэ киллэр',
	'coll-add_category_tooltip' => 'Бу категория биики сирэйдэрин кинигэҕэ киллэр',
	'coll-add_page_popup' => 'Сигэнэр сирэйи кинигэҕэ киллэр',
	'coll-add_page_tooltip' => 'Кинигэҕэ бу биики-сирэйи эбии',
	'coll-bookscategory' => 'Кинигэлэр',
	'coll-clear_collection' => 'Кинигэни ыраастаа',
	'coll-clear_collection_confirm' => 'Кырдьык кинигэҕин ыраастаары гынаҕын дуо?',
	'coll-clear_collection_tooltip' => 'Кинигэттэн биики сирэйдэри сот',
	'coll-helppage' => 'Help:Кинигэлэр',
	'coll-load_collection' => 'Кинигэни (атын сиртэн ылан) суруттар',
	'coll-load_collection_tooltip' => 'Бу кинигэни билиҥҥи (текущай) кинигэ курдук киллэр',
	'coll-n_pages' => '$1 {{PLURAL:$1|сирэй|сирэйдээх}}',
	'coll-printable_version_pdf' => 'PDF-барыла',
	'coll-remove_page_popup' => 'Сигэнэр сирэйи кинигэттэн сот',
	'coll-remove_page_tooltip' => 'Бу биики сирэйи кинигэттэн сот',
	'coll-show_collection' => 'Кинигэни көрдөр',
	'coll-show_collection_tooltip' => 'Уларытарга маны баттаа/хачайдыырга/кинигэни сакаастыырга',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'coll-create_a_book' => 'Vytvoriť knihu',
	'coll-download_as' => 'Stiahnuť ako $1',
	'coll-add_category' => 'Pridať kategóriu',
	'coll-add_category_popup' => 'Pridať do vašej knihy wiki stránky v odkazovanej kategórii',
	'coll-add_category_tooltip' => 'Pridať všetky stránky wiki v tejto kategórii do vašej knihy',
	'coll-add_page_popup' => 'Pridať do vašej knihy odkazovanú wiki stránku',
	'coll-add_page_tooltip' => 'Pridať aktuálnu wiki stránku do vašej knihy',
	'coll-bookscategory' => 'Knihy',
	'coll-clear_collection' => 'Vyčistiť knihu',
	'coll-clear_collection_confirm' => 'Skutočne chcete celkom vyčistiť svoju knihu?',
	'coll-clear_collection_tooltip' => 'Odstrániť všetky stránky wiki z vašej aktuálnej knihy',
	'coll-helppage' => 'Help:Knihy',
	'coll-load_collection' => 'Načítať knihu',
	'coll-load_collection_tooltip' => 'Načítať túto knihu ako vašu aktuálnu knihu',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránok}}',
	'coll-printable_version_pdf' => 'PDF verzia',
	'coll-remove_page_popup' => 'Odstrániť z vašej knihy odkazovanú wiki stránku',
	'coll-remove_page_tooltip' => 'Odstrániť aktuálnu wiki stránku z vašej knihy',
	'coll-show_collection' => 'Zobraziť knihu',
	'coll-show_collection_tooltip' => 'Kliknutím môžete upraviť/stiahnuť/objednať knihu',
);

/** Slovenian (Slovenščina)
 * @author Smihael
 */
$messages['sl'] = array(
	'coll-create_a_book' => 'Ustvari e-knjigo',
	'coll-download_as' => 'Prenesi kot $1',
	'coll-add_category' => 'Dodaj kategorijo',
	'coll-bookscategory' => 'Knjige',
	'coll-clear_collection' => 'Zbriši knjigo',
	'coll-clear_collection_confirm' => 'Ali res želite popolnoma izbrisati vašo knjigo?',
	'coll-helppage' => 'Help:Knjige',
	'coll-load_collection' => 'Naloži knjige',
	'coll-n_pages' => '$1 {{PLURAL:$1|stran|strani|strani|strani|strani}}',
	'coll-printable_version_pdf' => 'Različica PDF',
	'coll-show_collection' => 'Prikaži knjige',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Nikola Smolenski
 * @author Јованвб
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'coll-create_a_book' => 'Направи књигу',
	'coll-download_as' => 'Преузми као $1',
	'coll-add_category' => 'Додај категорију',
	'coll-add_category_popup' => 'Додајте чланке из приложене категорије у Вашу књигу',
	'coll-add_category_tooltip' => 'Додаје све вики странице у овој категорији у вашу књигу',
	'coll-add_page_popup' => 'Додајте приложени чланак у Вашу књигу',
	'coll-add_page_tooltip' => 'Додаје тренутну вики страницу вашој књизи',
	'coll-bookscategory' => 'Књиге',
	'coll-clear_collection' => 'Очисти књигу',
	'coll-clear_collection_confirm' => 'Да ли заиста желите да потпуно очистите своју књигу?',
	'coll-clear_collection_tooltip' => 'Уклања све вики странице из ваше тренутне књиге',
	'coll-helppage' => 'Help:Књиге',
	'coll-load_collection' => 'Учитај књигу',
	'coll-load_collection_tooltip' => 'Учитава ову књигу као вашу тренутну књигу',
	'coll-n_pages' => '{{PLURAL:$1|једна страна|$1 стране|$1 страна}}',
	'coll-printable_version_pdf' => 'PDF верзија',
	'coll-remove_page_popup' => 'Избришите приложени чланак из своје књиге',
	'coll-remove_page_tooltip' => 'Уклања тренутну вики страницу из ваше књиге',
	'coll-show_collection' => 'Прикажи књигу',
	'coll-show_collection_tooltip' => 'Кликните за измену, преузимање или наручивање своје књиге',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'coll-create_a_book' => 'Kollektion',
	'coll-download_as' => 'As $1 deelleede',
	'coll-add_category' => 'Kategorie bietouföigje',
	'coll-clear_collection' => 'Touhoopestaalenge läskje',
	'coll-helppage' => 'Help:Touhoopestaalengen',
	'coll-load_collection' => 'Touhoopestaalenge leede',
	'coll-n_pages' => '$1 {{PLURAL:$1|Siede|Sieden}}',
	'coll-show_collection' => 'Touhoopestaalenge wiese',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'coll-add_category' => 'Nambah kategori',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author M.M.S.
 * @author Micke
 * @author Najami
 * @author Sannab
 */
$messages['sv'] = array(
	'coll-create_a_book' => 'Skapa en bok',
	'coll-download_as' => 'Hämta som $1',
	'coll-add_category' => 'Lägg till kategori',
	'coll-add_category_popup' => 'Lägg till wikisidor i den länkade kategorin till din bok',
	'coll-add_category_tooltip' => 'Lägg till alla wikisidor i den här kategorin till din bok',
	'coll-add_page_popup' => 'Lägg till länkade wikisidor till din bok',
	'coll-add_page_tooltip' => 'Lägg till den nuvarande wikisidan till din bok',
	'coll-bookscategory' => 'Böcker',
	'coll-clear_collection' => 'Töm bok',
	'coll-clear_collection_confirm' => 'Vill du verkligen helt tömma din bok?',
	'coll-clear_collection_tooltip' => 'Ta bort alla wikisidor från din nuvarande bok',
	'coll-helppage' => 'Help:Böcker',
	'coll-load_collection' => 'Hämta bok',
	'coll-load_collection_tooltip' => 'Ladda den här boken som din nuvarande bok',
	'coll-n_pages' => '$1 {{PLURAL:$1|sida|sidor}}',
	'coll-printable_version_pdf' => 'PDF-version',
	'coll-remove_page_popup' => 'Ta bort länkad wikisida från din bok',
	'coll-remove_page_tooltip' => 'Ta bort den nuvarande wikisidan från din bok',
	'coll-show_collection' => 'Visa bok',
	'coll-show_collection_tooltip' => 'Klicka för att redigera/ladda ner/beställa din bok',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'coll-create_a_book' => 'ఓ పుస్తకాన్ని సృష్టించండి',
	'coll-add_category' => 'వర్గాన్ని చేర్చు',
	'coll-bookscategory' => 'పుస్తకాలు',
	'coll-clear_collection' => 'సేకరణని తుడిచివేయి',
	'coll-helppage' => 'Help:పుస్తకాలు',
	'coll-n_pages' => '$1 {{PLURAL:$1|పేజీ|పేజీలు}}',
	'coll-printable_version_pdf' => 'PDF కూర్పు',
	'coll-show_collection' => 'సేకరణని చూపించు',
);

/** Tetum (Tetun) */
$messages['tet'] = array(
	'coll-create_a_book' => 'Kria livru ida',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'coll-create_a_book' => 'Эҷоди як китоб',
	'coll-download_as' => 'Дарёфтан чун $1',
	'coll-add_category' => 'Илова кардани гурӯҳ',
	'coll-clear_collection' => 'Тоза кардани гирдовари',
	'coll-helppage' => 'Help:Гирдовариҳо',
	'coll-load_collection' => 'Бор кардани гирдоварӣ',
	'coll-n_pages' => '$1 {{PLURAL:$1|саҳифа|саҳифаҳо}}',
	'coll-printable_version_pdf' => 'Нусхаи PDF',
	'coll-show_collection' => 'Намоиши гирдоварӣ',
);

/** Thai (ไทย)
 * @author Ans
 * @author Manop
 */
$messages['th'] = array(
	'coll-create_a_book' => 'สร้างหนังสือ',
	'coll-download_as' => 'ดาวน์โหลดในชื่อ $1',
	'coll-add_category' => 'เพิ่มหมวดหมู่',
	'coll-bookscategory' => 'หนังสือ',
	'coll-helppage' => 'Help:หนังสือ',
	'coll-load_collection' => 'โหลดหนังสือ',
	'coll-n_pages' => '$1 หน้า',
	'coll-printable_version_pdf' => 'รุ่น PDF',
	'coll-show_collection' => 'แสดงหนังสือ',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'coll-create_a_book' => 'Lumikha ng isang aklat',
	'coll-download_as' => 'Ikargang-pakuha bilang $1',
	'coll-add_category' => 'Magdagdag ng kaurian',
	'coll-add_category_popup' => 'Magdagdag ng mga pahina ng wiki sa loob ng nakakawing na kaurian patungo sa aklat mo',
	'coll-add_category_tooltip' => 'Idagdag ang lahat ng mga pahina ng wiki sa loob ng kauriang ito patungo sa aklat mo',
	'coll-add_page_popup' => 'Magdagdag na pahina ng nakakawing na wiki patungo sa aklat mo',
	'coll-add_page_tooltip' => 'Idagdag ang kasalukuyang pahina ng wiki sa aklat mo',
	'coll-bookscategory' => 'Mga aklat',
	'coll-clear_collection' => 'Hawiin ang aklat',
	'coll-clear_collection_confirm' => 'Talaga bang nais mong hawiin ng lubusan ang aklat mo?',
	'coll-clear_collection_tooltip' => 'Tanggalin ang lahat ng mga pahina ng wiki mula sa pangkasalukuyan mong aklat',
	'coll-helppage' => 'Help:Mga Aklat',
	'coll-load_collection' => 'Ikarga ang aklat',
	'coll-load_collection_tooltip' => 'Ikarga ang aklat na ito bilang pangkasalukuyang aklat mo',
	'coll-n_pages' => '$1 {{PLURAL:$1|pahina|mga pahina}}',
	'coll-printable_version_pdf' => 'Bersyong PDF',
	'coll-remove_page_popup' => 'Tanggalin ang pahina ng nakakawing na wiki mula sa aklat mo',
	'coll-remove_page_tooltip' => 'Tanggalan ang pangkasalukuyang pahina ng wiki mula sa aklat mo',
	'coll-show_collection' => 'Ipakita ang aklat',
	'coll-show_collection_tooltip' => 'Pindutin upang baguhin/magkargang pababa/umorder ng aklat mo',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Mach
 * @author Srhat
 */
$messages['tr'] = array(
	'coll-create_a_book' => 'Bir kitap oluştur',
	'coll-download_as' => '$1 olarak indir',
	'coll-add_category' => 'Kategori ekle',
	'coll-add_category_popup' => 'Bağlantılı kategorideki viki sayfalarını kitabınıza ekleyin',
	'coll-add_category_tooltip' => 'Bu kategorideki tüm viki sayfalarını koleksiyonunuza ekleyin',
	'coll-add_page_popup' => 'Kitabınıza bağlantılı viki sayfası ekleyin',
	'coll-add_page_tooltip' => 'Bu sayfayı koleksiyonunuza ekleyin',
	'coll-bookscategory' => 'Koleksiyonlar',
	'coll-clear_collection' => 'Kitabı temizle',
	'coll-clear_collection_confirm' => 'Koleksiyonunuzu tamamen temizlemeyi istiyor musunuz?',
	'coll-clear_collection_tooltip' => 'Mevcut koleksiyonunuzdaki tüm viki sayfalarını silin',
	'coll-helppage' => 'Help:Koleksiyonlar',
	'coll-load_collection' => 'Koleksiyonu yükle',
	'coll-load_collection_tooltip' => 'Bu koleksiyonu varsayılan koleksiyonunuz olarak yükleyin',
	'coll-n_pages' => '$1 {{PLURAL:$1|sayfa|sayfa}}',
	'coll-printable_version_pdf' => 'PDF sürümü',
	'coll-remove_page_popup' => 'Bağlantılı viki sayfasını kitabınızdan çıkarın',
	'coll-remove_page_tooltip' => 'Bu sayfayı koleksiyonunuzdan çıkarın',
	'coll-show_collection' => 'Koleksiyonu göster',
	'coll-show_collection_tooltip' => 'Tıklayıp koleksiyonunuzu düzenleyin/indirin/sipariş edin',
);

/** Ukrainian (Українська)
 * @author AS
 * @author Ahonc
 * @author Aleksandrit
 */
$messages['uk'] = array(
	'coll-create_a_book' => 'Створення книги',
	'coll-download_as' => 'Завантажити як $1',
	'coll-add_category' => 'Додати категорію',
	'coll-bookscategory' => 'Книги',
	'coll-clear_collection' => 'Очистити книгу',
	'coll-clear_collection_confirm' => 'Ви дійсно бажаєте повністю очистити вашу книгу?',
	'coll-helppage' => 'Help:Книги',
	'coll-load_collection' => 'Завантажити книгу',
	'coll-n_pages' => '$1 {{PLURAL:$1|сторінка|сторінки|сторінок}}',
	'coll-printable_version_pdf' => 'PDF-версія',
	'coll-show_collection' => 'Показати книгу',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'coll-create_a_book' => 'Crea un libro',
	'coll-download_as' => 'Descarga come $1',
	'coll-add_category' => 'Zonta na categoria',
	'coll-add_category_popup' => 'Zonta al to libro le pagine in te le categorie riciamà',
	'coll-add_category_tooltip' => 'Zonta tute le pagine wiki de sta categoria al to libro',
	'coll-add_page_popup' => 'Zonta al to libro la pagina wiki riciamà',
	'coll-add_page_tooltip' => 'Zonta sta pagina wiki al to libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Desvòda libro',
	'coll-clear_collection_confirm' => 'Vuto dalbòn netar conpletamente el to libro?',
	'coll-clear_collection_tooltip' => 'Cava tute le pagine wiki dal to libro atuale',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Carga libro',
	'coll-load_collection_tooltip' => 'Carga sto libro come el to libro atuale',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàxena|pàxene}}',
	'coll-printable_version_pdf' => 'Versiòn PDF',
	'coll-remove_page_popup' => 'Cava dal to libro la pagina wiki riciamà',
	'coll-remove_page_tooltip' => 'Cava sta pagina wiki dal to libro',
	'coll-show_collection' => 'Mostra libro',
	'coll-show_collection_tooltip' => 'Struca el mouse par modificar, descargar o ordinar el to libro',
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'coll-bookscategory' => 'Kirjad',
	'coll-helppage' => 'Help:Kirjad',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'coll-create_a_book' => 'Tạo một quyển sách',
	'coll-download_as' => 'Tải về dưới dạng $1',
	'coll-add_category' => 'Thêm thể loại',
	'coll-add_category_popup' => 'Thêm vào sách những trang wiki thuộc thể loại được liên kết',
	'coll-add_category_tooltip' => 'Thêm vào sách các trang wiki thuộc thể loại được liên kết',
	'coll-add_page_popup' => 'Thêm trang wiki vào sách',
	'coll-add_page_tooltip' => 'Thêm trang wiki này vào sách',
	'coll-bookscategory' => 'Sách vở',
	'coll-clear_collection' => 'Xóa sách',
	'coll-clear_collection_confirm' => 'Bạn có chắc muốn xóa hẳn sách của bạn?',
	'coll-clear_collection_tooltip' => 'Dời các trang wiki khỏi sách này',
	'coll-helppage' => 'Help:Sách vở',
	'coll-load_collection' => 'Mở sách',
	'coll-load_collection_tooltip' => 'Đặt sách này làm sách hiện hành',
	'coll-n_pages' => '$1 {{PLURAL:$1|trang|trang}}',
	'coll-printable_version_pdf' => 'Bản PDF',
	'coll-remove_page_popup' => 'Dời trang wiki được liên kết khỏi sách',
	'coll-remove_page_tooltip' => 'Dời trang wiki này khỏi sách',
	'coll-show_collection' => 'Xem sách',
	'coll-show_collection_tooltip' => 'Nhấn chuột để sửa đổi, tải xuống, hay đặt sách của bạn',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'coll-create_a_book' => 'Jafön buki',
	'coll-download_as' => 'Donükön as $1',
	'coll-add_category' => 'Läükön kladi',
	'coll-bookscategory' => 'Buks',
	'coll-clear_collection' => 'Vagükön buki',
	'coll-clear_collection_confirm' => 'Vilol-li jenöfo vagükön buki olik lölöfiko?',
	'coll-helppage' => 'Help:Buks',
	'coll-load_collection' => 'Lodön buki',
	'coll-n_pages' => '{{PLURAL:$1|pad|pads}} $1',
	'coll-printable_version_pdf' => 'fomam-PDF',
	'coll-show_collection' => 'Jonön buki',
);

/** Yue (粵語) */
$messages['yue'] = array(
	'coll-create_a_book' => '整一本書',
	'coll-download_as' => '下載做$1',
	'coll-add_category' => '加分類',
	'coll-bookscategory' => '書',
	'coll-clear_collection' => '清書',
	'coll-clear_collection_confirm' => '你係咪真係想完全噉清晒你本書？',
	'coll-helppage' => 'Help:書',
	'coll-load_collection' => '載入書',
	'coll-n_pages' => '$1版',
	'coll-printable_version_pdf' => 'PDF版',
	'coll-show_collection' => '顯示書',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Bencmq
 * @author Wmr89502270
 */
$messages['zh-hans'] = array(
	'coll-create_a_book' => '创建图书',
	'coll-download_as' => '下载为 $1',
	'coll-add_category' => '添加分类',
	'coll-add_category_popup' => '将链接指向的分类中所有维基页面加入您的图书中',
	'coll-add_category_tooltip' => '将这个分类中的所有维基页面加入您的图书中',
	'coll-add_page_popup' => '将链接指向的维基页面加入您的图书中',
	'coll-add_page_tooltip' => '将当前的维基页面加入您的图书中',
	'coll-bookscategory' => '图书',
	'coll-clear_collection' => '清除记录',
	'coll-clear_collection_confirm' => '真的要清除？',
	'coll-clear_collection_tooltip' => '从您当前的图书中移除所有维基页面',
	'coll-helppage' => 'Help:图书',
	'coll-load_collection' => '载入图书',
	'coll-load_collection_tooltip' => '将这本图书加载为您当前的图书',
	'coll-n_pages' => '$1个页面',
	'coll-printable_version_pdf' => 'PDF 版本',
	'coll-remove_page_popup' => '将链接指向的维基页面从您的图书中移除',
	'coll-remove_page_tooltip' => '将当前维基页面从您的图书中移除',
	'coll-show_collection' => '显示图书',
	'coll-show_collection_tooltip' => '点击此处编辑、下载或订购图书',
);

