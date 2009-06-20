<?php

/*
 * Collection Extension for MediaWiki
 * For performance reasons, this file only contains the extension messages
 * that are used from hooks that are almost always loaded.
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
	'coll-add_category'               => 'Add category',
	'coll-add_category_popup'         => 'Add wiki pages in linked category to your book',
	'coll-add_category_tooltip'       => 'Add all wiki pages in this category to your book',
	'coll-add_page'                   => 'Add page to book',
	'coll-add_page_popup'             => 'Add linked wiki page to your book',
	'coll-add_page_tooltip'           => 'Add the current wiki page to your book',
	'coll-bookscategory'              => 'Books',
	'coll-clear_collection'           => 'Clear book',
	'coll-clear_collection_confirm'   => 'Do you really want to completely clear your book?',
	'coll-clear_collection_tooltip'   => 'Remove all wiki pages from your current book',
	'coll-create_a_book'              => 'Create a book',
	'coll-help_collections'           => 'Books help',
	'coll-help_collections_tooltip'   => 'Show help about the book tool',
	'coll-helppage'                   => 'Help:Books',
	'coll-load_collection'            => 'Load book',
	'coll-load_collection_tooltip'    => 'Load this book as your current book',
	'coll-n_pages'                    => '$1 {{PLURAL:$1|page|pages}}',
	'coll-popup_help_text'            => 'To deactivate this feature click "Clear book" in the "Create a book" box',
	'coll-printable_version_pdf'      => 'PDF version',
	'coll-remove_page'                => 'Remove page from book',
	'coll-remove_page_popup'          => 'Remove linked wiki page from your book',
	'coll-remove_page_tooltip'        => 'Remove the current wiki page from your book',
	'coll-show_collection'            => 'Show book',
	'coll-show_collection_tooltip'    => 'Click to edit/download/order your book',
);

/** Message documentation (Message documentation)
 * @author Aleator
 * @author Fryed-peach
 * @author Mormegil
 * @author Siebrand
 */
$messages['qqq'] = array(
	'coll-bookscategory' => '{{Identical|Book}}',
	'coll-clear_collection_confirm' => 'Message box when pressed "Clear book".',
	'coll-create_a_book' => '{{Identical|Books}}',
	'coll-helppage' => "Used as a link to the help page for this extension's functionality on a wiki. '''Do not translate ''Help:''.'''
{{Identical|Book}}",
	'coll-popup_help_text' => '* "Clear book" refers to button text set in {{msg-mw|coll-clear_collection}}
* "Create a book" refers to heading text in {{msg-mw|coll-create_a_book}}',
	'coll-printable_version_pdf' => 'Caption of a link in the [[mw:Help:Navigation#Toolbox|toolbox]] leading to the PDF version of the current page',
);

/** Afrikaans (Afrikaans)
 * @author Anrie
 * @author Arnobarnard
 */
$messages['af'] = array(
	'coll-add_category' => 'Voeg kategorie by',
	'coll-add_page' => 'Voeg bladsy by',
	'coll-bookscategory' => 'Boeke',
	'coll-create_a_book' => 'My versameling',
	'coll-help_collections' => 'Versamelinghulp',
	'coll-helppage' => 'Help:Boeke',
	'coll-load_collection' => 'Laai versameling',
	'coll-n_pages' => '$1 {{PLURAL:$1|bladsy|bladsye}}',
	'coll-printable_version_pdf' => 'PDF-weergawe',
	'coll-remove_page' => 'Verwyder bladsy',
	'coll-show_collection' => 'Wys versameling',
);

/** Arabic (العربية)
 * @author Ciphers
 * @author Meno25
 * @author Prof.Sherif
 */
$messages['ar'] = array(
	'coll-add_category' => 'إضافة تصنيف',
	'coll-add_category_popup' => 'أضف صفحات الويكي في التصنيف الموصول لكتابك',
	'coll-add_category_tooltip' => 'أضف كل صفحات الويكي في هذا التصنيف لكتابك',
	'coll-add_page' => 'إضافة الصفحة إلى كتاب',
	'coll-add_page_popup' => 'أضف صفحة الويكي الموصولة لكتابك',
	'coll-add_page_tooltip' => 'أضف صفحة الويكي الحالية إلى كتابك',
	'coll-bookscategory' => 'كتب',
	'coll-clear_collection' => 'إفراغ الكتاب',
	'coll-clear_collection_confirm' => 'هل تريد حقا إفراغ كتابك بالكامل؟',
	'coll-clear_collection_tooltip' => 'أزل كل صفحات الويكي من كتابك الحالي',
	'coll-create_a_book' => 'إنشاء كتاب',
	'coll-help_collections' => 'مساعدة الكتب',
	'coll-help_collections_tooltip' => 'اعرض المساعدة حول أداة الكتب',
	'coll-helppage' => 'Help:كتب',
	'coll-load_collection' => 'تحميل الكتاب',
	'coll-load_collection_tooltip' => 'حمل هذا الكتاب ككتابك الحالي',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحة|صفحة}}',
	'coll-popup_help_text' => 'لإلغاء هذه الخاصية اضغط "إفراغ الكتاب" في صندوق "إنشاء كتاب"',
	'coll-printable_version_pdf' => 'نسخة PDF',
	'coll-remove_page' => 'إزالة الصفحة من كتاب',
	'coll-remove_page_popup' => 'أزل صفحة الويكي الموصولة من كتابك',
	'coll-remove_page_tooltip' => 'أزل صفحة الويكي الحالية من كتابك',
	'coll-show_collection' => 'عرض الكتاب',
	'coll-show_collection_tooltip' => 'اضغط لتعديل/تنزيل/طلب كتابك',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'coll-add_category' => 'إضافة تصنيف',
	'coll-add_page' => 'إضافة صفحة ويكى',
	'coll-bookscategory' => 'كتب',
	'coll-clear_collection' => 'فضى الكتاب',
	'coll-clear_collection_confirm' => 'انتا بجد عايز تفضى الكتاب بالكامل؟',
	'coll-create_a_book' => 'إنشاء كتاب',
	'coll-help_collections' => 'مساعدة الكتب',
	'coll-helppage' => 'Help:كتب',
	'coll-load_collection' => 'تحميل كتاب',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحة|صفحة}}',
	'coll-printable_version_pdf' => 'نسخة PDF',
	'coll-remove_page' => 'إزالة صفحة ويكى',
	'coll-show_collection' => 'عرض الكتاب',
);

/** Asturian (Asturianu)
 * @author Esbardu
 */
$messages['ast'] = array(
	'coll-add_category' => 'Añader categoría',
	'coll-add_page' => 'Añader páxina wiki',
	'coll-create_a_book' => 'Crear un llibru',
	'coll-help_collections' => 'Aida de les coleiciones',
	'coll-helppage' => 'Help:Coleiciones',
	'coll-load_collection' => 'Cargar coleición',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxines}}',
	'coll-remove_page' => 'Eliminar páxina wiki',
	'coll-show_collection' => 'Amosar coleición',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'coll-add_category' => 'Дадаць катэгорыю',
	'coll-add_category_popup' => 'Дадаць старонкі са зьвязанай катэгорыі ў Вашу кнігу',
	'coll-add_category_tooltip' => 'Дадаць усе старонкі з гэтай катэгорыі ў Вашую кнігу',
	'coll-add_page' => 'Дадаць старонку ў кнігу',
	'coll-add_page_popup' => 'Дадаць зьвязаную старонку да Вашай кнігі',
	'coll-add_page_tooltip' => 'Дадаць цяперашнюю вікі-старонку ў Вашую кнігу',
	'coll-bookscategory' => 'Кнігі',
	'coll-clear_collection' => 'Ачысьціць кнігу',
	'coll-clear_collection_confirm' => 'Вы сапраўды жадаеце поўнасьцю ачысьціць Вашую кнігу?',
	'coll-clear_collection_tooltip' => 'Выдаліць усе старонкі з Вашай цяперашняй кнігі',
	'coll-create_a_book' => 'Стварыць кнігу',
	'coll-help_collections' => 'Даведка пра кнігі',
	'coll-help_collections_tooltip' => 'Паказаць даведку пра інструмэнты стварэньня кніг',
	'coll-helppage' => 'Help:Кнігі',
	'coll-load_collection' => 'Загрузіць кнігу',
	'coll-load_collection_tooltip' => 'Загрузіць гэтую кнігу як Вашую цяперашнюю кнігу',
	'coll-n_pages' => '$1 {{PLURAL:$1|старонка|старонкі|старонак}}',
	'coll-popup_help_text' => 'Каб адключыць гэтую функцыю, націсьніце «Ачысьціць кнігу» ў полі «Стварыць кнігу»',
	'coll-printable_version_pdf' => 'PDF-вэрсія',
	'coll-remove_page' => 'Выдаліць старонку з кнігі',
	'coll-remove_page_popup' => 'Выдаліць зьвязаную старонку з Вашай кнігі',
	'coll-remove_page_tooltip' => 'Выдаліць цяперашнюю вікі-старонку з Вашай кнігі',
	'coll-show_collection' => 'Паказаць кнігу',
	'coll-show_collection_tooltip' => 'Націсьніце для рэдагаваньня/загрузкі/заказу Вашай кнігі',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'coll-add_category' => 'Добавяне на категория',
	'coll-add_page' => 'Добавяне на уики-страница',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страници}}',
	'coll-printable_version_pdf' => 'PDF версия',
	'coll-remove_page' => 'Премахване на уики-страница',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'coll-add_category' => 'Dodaj kategoriju',
	'coll-add_category_popup' => 'Dodaj wiki stranice u povezane kategorije u Vašoj knjizi',
	'coll-add_category_tooltip' => 'Dodaj sve wiki članke iz ove kategorije u Vašu knjigu',
	'coll-add_page' => 'Dodaj stranicu u knjigu',
	'coll-add_page_popup' => 'Dodaje povezanu wiki stranicu u Vašu knjigu',
	'coll-add_page_tooltip' => 'Dodaj trenutnu wiki stranicu u Vašu knjigu',
	'coll-bookscategory' => 'Knjige',
	'coll-clear_collection' => 'Očisti knjigu',
	'coll-clear_collection_confirm' => 'Da li zaista želite da potpuno očistite Vašu knjigu?',
	'coll-clear_collection_tooltip' => 'Ukloni sve wiki članke iz Vaše trenutne knjige',
	'coll-create_a_book' => 'Napravi knjigu',
	'coll-help_collections' => 'Pomoć pri knjigama',
	'coll-help_collections_tooltip' => 'Prikaži pomoć o ovom alatu za knjige',
	'coll-helppage' => 'Help:Knjige',
	'coll-load_collection' => 'Učitaj knjigu',
	'coll-load_collection_tooltip' => 'Učitaj ovu knjigu kao Vašu trenutnu knjigu',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-popup_help_text' => 'Da bi ste isključili ovu mogućnost kliknite "Očisti knjigu" u kutiji "Napravi knjigu"',
	'coll-printable_version_pdf' => 'PDF verzija',
	'coll-remove_page' => 'Ukloni stranicu iz knjige',
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
	'coll-add_category' => 'Afegeix categoria',
	'coll-add_category_popup' => 'Afegeix al llibre les pàgines de la categoria enllaçada',
	'coll-add_category_tooltip' => "Afegeix al llibre totes les pàgines d'aquesta categoria",
	'coll-add_page' => 'Afegeix una pàgina al llibre',
	'coll-add_page_popup' => 'Afegeix la pàgina wiki enllaçada al llibre',
	'coll-add_page_tooltip' => 'Afegeix la pàgina wiki actual al llibre',
	'coll-bookscategory' => 'Llibres',
	'coll-clear_collection' => 'Buida llibre',
	'coll-clear_collection_confirm' => 'Esteu segurs de buidar completament el vostre llibre?',
	'coll-clear_collection_tooltip' => 'Esborra totes les pàgines wiki del llibre actual',
	'coll-create_a_book' => 'Crea un llibre',
	'coll-help_collections' => 'Ajuda dels llibres',
	'coll-help_collections_tooltip' => "Mostra l'ajuda relacionada amb l'eina de creació de llibres",
	'coll-helppage' => 'Help:Llibres',
	'coll-load_collection' => 'Carrega llibre',
	'coll-load_collection_tooltip' => 'Carrega aquest llibre com el vostre llibre actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàgina|pàgines}}',
	'coll-popup_help_text' => 'Per desactivar aquesta opció feu clic a «Buida llibre» a la casella «Crea un llibre»',
	'coll-printable_version_pdf' => 'Versió en PDF',
	'coll-remove_page' => 'Esborra la pàgina del llibre',
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
	'coll-add_category' => 'Přidat kategorii',
	'coll-add_category_popup' => 'Přidat stránky wiki v odkazované kategorii do vaší knihy',
	'coll-add_category_tooltip' => 'Přidá všechny stránky wiki v této kategorii do vaší knihy',
	'coll-add_page' => 'Přidat stránku do knihy',
	'coll-add_page_popup' => 'Přidat odkazovanou stránku wiki do vaší knihy',
	'coll-add_page_tooltip' => 'Přidá aktuální stránku wiki do vaší knihy',
	'coll-bookscategory' => 'Knihy',
	'coll-clear_collection' => 'Vyčistit knihu',
	'coll-clear_collection_confirm' => 'Skutečně chcete úplně vyčistit tuto knihu?',
	'coll-clear_collection_tooltip' => 'Odstraní z aktuální knihy všechny stránky wiki',
	'coll-create_a_book' => 'Vytvořit knihu',
	'coll-help_collections' => 'Nápověda ke knihám',
	'coll-help_collections_tooltip' => 'Zobrazí nápovědu k nástroji pro tvorbu knih',
	'coll-helppage' => 'Help:Knihy',
	'coll-load_collection' => 'Načíst knihu',
	'coll-load_collection_tooltip' => 'Zvolí tuto knihu jako aktuální',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránek}}',
	'coll-popup_help_text' => 'Pokud chcete tuto funkci deaktivovat, klikněte na odkaz „{{int:coll-clear collection}}“ v panelu „{{int:coll-create a book}}“',
	'coll-printable_version_pdf' => 'PDF verze',
	'coll-remove_page' => 'Odebrat stránku z knihy',
	'coll-remove_page_popup' => 'Odebrat odkazovanou stránku wiki z vaší knihy',
	'coll-remove_page_tooltip' => 'Odstraní aktuální stránku wiki z vaší knihy',
	'coll-show_collection' => 'Zobrazit knihu',
	'coll-show_collection_tooltip' => 'Kliknutím si můžete knihu upravit/stáhnout/objednat',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'coll-add_category' => 'Ychwanegu categori',
	'coll-add_category_popup' => "Ychwanegu'r tudalennau wici yn y categori cysylltiedig at eich llyfr",
	'coll-add_category_tooltip' => 'Ychwanegu holl dudalennau wici y categori hwn at eich llyfr',
	'coll-add_page' => "Ychwanegu'r dudalen at y llyfr",
	'coll-add_page_popup' => "Ychwanegu'r dudalen wici cysylltiedig at eich llyfr",
	'coll-add_page_tooltip' => "Ychwanegu'r dudalen wici presennol at eich llyfr",
	'coll-bookscategory' => 'Llyfrau',
	'coll-clear_collection' => "Clirio'r llyfr",
	'coll-clear_collection_confirm' => "Ydych chi wir am glirio'ch llyfr yn llwyr?",
	'coll-clear_collection_tooltip' => "Clirio'r holl dudalennau wici o'ch llyfr presennol",
	'coll-create_a_book' => 'Llunio llyfr',
	'coll-help_collections' => 'Cymorth - llyfrau',
	'coll-help_collections_tooltip' => 'Dangos y cymorth am y teclyn llunio llyfr',
	'coll-helppage' => 'Help:Llyfrau',
	'coll-load_collection' => 'Llwytho llyfr',
	'coll-load_collection_tooltip' => "Llwytho'r llyfr hwn fel eich llyfr cyfredol",
	'coll-n_pages' => '$1 {{PLURAL:$1|tudalen|dudalen|dudalen|tudalen|thudalen|o dudalennau}}',
	'coll-popup_help_text' => 'Er mwyn analluogi\'r nodwedd hon cliciwch "Clirio\'r llyfr" yn y blwch "Llunio llyfr"',
	'coll-printable_version_pdf' => 'Fersiwn PDF',
	'coll-remove_page' => "Tynnu'r dudalen o'r llyfr",
	'coll-remove_page_popup' => "Tynnu'r dudalen wici cysylltiedig o'ch llyfr",
	'coll-remove_page_tooltip' => "Tynnu'r dudalen wici presennol o'ch llyfr",
	'coll-show_collection' => 'Dangos y llyfr',
	'coll-show_collection_tooltip' => 'Cliciwch er mwyn golygu/islwytho/archebu eich llyfr',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Umherirrender
 */
$messages['de'] = array(
	'coll-add_category' => 'Kategorie hinzufügen',
	'coll-add_category_popup' => 'Wikiseiten in verlinkter Kategorie zu deinem Buch hinzufügen',
	'coll-add_category_tooltip' => 'Alle Wikiseiten dieser Kategorie deinem Buch hinzufügen',
	'coll-add_page' => 'Seite zum Buch hinzufügen',
	'coll-add_page_popup' => 'Verlinkte Wikiseite zu deinem Buch hinzufügen',
	'coll-add_page_tooltip' => 'Die aktuelle Wikiseite deinem Buch hinzufügen',
	'coll-bookscategory' => 'Bücher',
	'coll-clear_collection' => 'Buch löschen',
	'coll-clear_collection_confirm' => 'Möchtest du wirklich dein Buch löschen?',
	'coll-clear_collection_tooltip' => 'Alle Wikiseiten aus deinem aktuellen Buch entfernen',
	'coll-create_a_book' => 'Buch erstellen',
	'coll-help_collections' => 'Hilfe zu Büchern',
	'coll-help_collections_tooltip' => 'Hilfe über das Buchwerkzeug zeigen',
	'coll-helppage' => 'Help:Bücher',
	'coll-load_collection' => 'Buch laden',
	'coll-load_collection_tooltip' => 'Dieses Buch als dein aktuelles Buch laden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Wikiseite|Wikiseiten}}',
	'coll-popup_help_text' => 'Um dieses Feature zu deaktivieren, klicke „Buch löschen“ in der „Buch erstellen“-Box',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_page' => 'Seite aus dem Buch entfernen',
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
	'coll-add_page_popup' => 'Verlinkte Wikiseite zu Ihrem Buch hinzufügen',
	'coll-add_page_tooltip' => 'Die aktuelle Wikiseite Ihrem Buch hinzufügen',
	'coll-clear_collection_confirm' => 'Möchten Sie wirklich Ihr Buch löschen?',
	'coll-clear_collection_tooltip' => 'Alle Wikiseiten aus Ihrem aktuellen Buch entfernen',
	'coll-load_collection_tooltip' => 'Dieses Buch als Ihr aktuelles Buch laden',
	'coll-popup_help_text' => 'Um dieses Feature zu deaktivieren, klicken Sie bitte „Buch löschen“ in der „Buch erstellen“-Box',
	'coll-remove_page_popup' => 'Verlinkte Wikiseite aus Ihrem Buch entfernen',
	'coll-remove_page_tooltip' => 'Die aktuelle Wikiseite aus Ihrem Buch entfernen',
	'coll-show_collection_tooltip' => 'Klicken, um Ihr Buch zu bearbeiten/herunterzuladen/bestellen',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'coll-add_category' => 'Kategoriju pśidaś',
	'coll-add_category_popup' => 'Wikiboki we wótkazanej kategoriji twójim knigłam pśidaś',
	'coll-add_category_tooltip' => 'Wšě wikiboki w toś tej kategoriji twójim knigłam pśidaś',
	'coll-add_page' => 'Bok knigłam pśidaś',
	'coll-add_page_popup' => 'Wótkazany wikibok twójim knigłam pśidaś',
	'coll-add_page_tooltip' => 'Aktualny wikibok twójim knigłam pśidaś',
	'coll-bookscategory' => 'Knigły',
	'coll-clear_collection' => 'Knigły wuprozniś',
	'coll-clear_collection_confirm' => 'Coš napšawdu swóje knigły dopołnje wuprozniś?',
	'coll-clear_collection_tooltip' => 'Wše wikiboki z twójich aktualnych knigłow wótpóraś',
	'coll-create_a_book' => 'Knigły napóraś',
	'coll-help_collections' => 'Pomoc ku knigłam',
	'coll-help_collections_tooltip' => 'Pomoc wó funkciji knigłow pokazaś',
	'coll-helppage' => 'Help:Knigły',
	'coll-load_collection' => 'Knigły zacytaś',
	'coll-load_collection_tooltip' => 'Toś te knigły ako twóje aktualne knigły zacytaś',
	'coll-n_pages' => '$1 {{PLURAL:$1|bok|boka|boki|bokow}}',
	'coll-popup_help_text' => 'Aby znjemóžnił toś tu funkciju, klikni na "Knigły wuprozniś" w kašćiku "Knigły napóraś"',
	'coll-printable_version_pdf' => 'PDF-wersija',
	'coll-remove_page' => 'Bok z knigłow wótpóraś',
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
	'coll-add_category' => 'Προσθήκη κατηγορίας',
	'coll-add_category_popup' => 'Προσθήκη των σελίδων της συνδεδεμένης κατηγορίας στο βιβλίο σας',
	'coll-add_category_tooltip' => 'Προσθήκη όλων των σελίδων της συνδεδεμένης κατηγορίας στο βιβλίο σας',
	'coll-add_page' => 'Προσθήκη σελίδας στο βιβλίο',
	'coll-add_page_popup' => 'Προσθήκη της συνδεδεμένης σελίδας στο βιβλίο σας',
	'coll-add_page_tooltip' => 'Προσθήκη της παρούσας σελίδας στο βιβλίο σας',
	'coll-bookscategory' => 'Βιβλία',
	'coll-clear_collection' => 'Εκκαθάριση βιβλίου',
	'coll-clear_collection_confirm' => 'Αλήθεια θέλετε να καθαρίσετε εντελώς το βιβλίο σας;',
	'coll-clear_collection_tooltip' => 'Αφαίρεση όλων των σελίδων από το παρόν βιβλίο σας',
	'coll-create_a_book' => 'Δημιουργία βιβλίου',
	'coll-help_collections' => 'Βοήθεια βιβλίων',
	'coll-help_collections_tooltip' => 'Εμφάνιση βοήθειας σχετικά με τα εργαλεία βιβλίων',
	'coll-helppage' => 'Help:Βιβλία',
	'coll-load_collection' => 'Φόρτωση βιβλίου',
	'coll-load_collection_tooltip' => 'Επιφόρτωση αυτού του βιβλίου ως του τρέχοντός σου βιβλίου',
	'coll-n_pages' => '$1 {{PLURAL:$1|σελίδα|σελίδες}}',
	'coll-popup_help_text' => 'Για να απενεργοποιήσετε αυτή τη λειτουργία κάνετε κλικ στο "Εκκαθάριση του βιβλίου" στο κουτί "Δημιουργία ενός βιβλίου"',
	'coll-printable_version_pdf' => 'έκδοση PDF',
	'coll-remove_page' => 'Αφαίρεση σελίδας από το βιβλίο',
	'coll-remove_page_popup' => 'Αφαίρεση της συνδεδεμένης σελίδας από το βιβλίο σας',
	'coll-remove_page_tooltip' => 'Αφαίρεση της παρούσας σελίδας από το βιβλίο σας',
	'coll-show_collection' => 'Εμφάνιση βιβλίου',
	'coll-show_collection_tooltip' => 'Κάνετε κλικ για να επεξεργαστείτε/κατεβάσετε/παραγγείλετε το βιβλίο σας',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'coll-add_category' => 'Aldoni kategorion',
	'coll-add_category_popup' => 'Aldoni vikipaĝojn en ligita kategorio al via libro',
	'coll-add_category_tooltip' => 'Aldoni ĉiujn vikiajn paĝojn en ĉi tiu kategorio al via libro',
	'coll-add_page' => 'Aldoni paĝon al libro',
	'coll-add_page_popup' => 'Aldoni ligilplenan vikian paĝon al via libro',
	'coll-add_page_tooltip' => 'Aldoni la nunan vikian paĝon al via libro',
	'coll-bookscategory' => 'Libroj',
	'coll-clear_collection' => 'Forviŝi libron',
	'coll-clear_collection_confirm' => 'Ĉu vi ja volas plene forviŝi vian libron?',
	'coll-clear_collection_tooltip' => 'Forigi ĉiujn vikiajn paĝojn de via nuna libro',
	'coll-create_a_book' => 'Krei libron',
	'coll-help_collections' => 'Helpo pri libroj',
	'coll-help_collections_tooltip' => 'Montri helpon pri la libra ilo',
	'coll-helppage' => 'Help:Libroj',
	'coll-load_collection' => 'Alŝuti libron',
	'coll-load_collection_tooltip' => 'Ŝarĝi ĉi tiun libron kiel vian nunan libron',
	'coll-n_pages' => '$1 {{PLURAL:$1|paĝo|paĝoj}}',
	'coll-printable_version_pdf' => 'PDF-versio',
	'coll-remove_page' => 'Forigi paĝon de libro',
	'coll-remove_page_popup' => 'Forigi ligitan vikian paĝon de via libro',
	'coll-remove_page_tooltip' => 'Forigi la nunan vikian paĝon de via libro',
	'coll-show_collection' => 'Montri libron',
	'coll-show_collection_tooltip' => 'Klaku redakti/elŝuti/mendi vian libron',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Remember the dot
 * @author Sanbec
 */
$messages['es'] = array(
	'coll-add_category' => 'Añadir categoría',
	'coll-add_category_popup' => 'Agregar páginas wiki en categoría vinculada a tu libro',
	'coll-add_category_tooltip' => 'Agregar todas las páginas wiki en esta categoría a tu libro',
	'coll-add_page' => 'Añadir página a libro',
	'coll-add_page_popup' => 'Agregar página wiki vinculada a tu libro',
	'coll-add_page_tooltip' => 'Agregar la página wiki actual a tu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Vaciar libro',
	'coll-clear_collection_confirm' => '¿Realmente quieres borrar completamente su libro?',
	'coll-clear_collection_tooltip' => 'Remover todas las páginas wiki de tu libro actual',
	'coll-create_a_book' => 'Crear un libro',
	'coll-help_collections' => 'Ayuda de libros',
	'coll-help_collections_tooltip' => 'Mostrar ayuda acerca de la herramienta libro',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar libro',
	'coll-load_collection_tooltip' => 'Cargar este libro como su libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-popup_help_text' => 'Para desactivar esta característica haga click en "Vaciar libro" en la tabla "Crear libro"',
	'coll-printable_version_pdf' => 'Versión PDF',
	'coll-remove_page' => 'Quitar página de libro',
	'coll-remove_page_popup' => 'Remover página wiki vinculada de tu libro',
	'coll-remove_page_tooltip' => 'Remover la página wiki actual de tu libro',
	'coll-show_collection' => 'Mostrar libro',
	'coll-show_collection_tooltip' => 'Haz click para editar/descargar/ordenar tu libro',
);

/** Estonian (Eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'coll-add_category' => 'Lisa kategooria',
	'coll-add_page' => 'Lisa wiki lehekülg',
	'coll-create_a_book' => 'Loo raamat',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Theklan
 */
$messages['eu'] = array(
	'coll-add_category' => 'Kategoria gehitu',
	'coll-add_page' => 'Orrialdea liburura gehitu',
	'coll-bookscategory' => 'Liburuak',
	'coll-clear_collection' => 'Liburua ezabatu',
	'coll-clear_collection_confirm' => 'Benetan ezabatu nahi al duzu zure liburu osoa?',
	'coll-create_a_book' => 'Liburu bat sortu',
	'coll-help_collections' => 'Liburuen laguntza',
	'coll-helppage' => 'Help:Liburuak',
	'coll-load_collection' => 'Liburua kargatu',
	'coll-n_pages' => '{{PLURAL:$1|Orrialde 1|$1 orrialde}}',
	'coll-printable_version_pdf' => 'PDF bertsioa',
	'coll-remove_page' => 'Orrialdea liburutik kendu',
	'coll-show_collection' => 'Liburua erakutsi',
);

/** Persian (فارسی)
 * @author Huji
 * @author Komeil 4life
 * @author Ladsgroup
 */
$messages['fa'] = array(
	'coll-add_category' => 'اضافه کردن رده',
	'coll-add_page' => 'افزودن این صفحه',
	'coll-bookscategory' => 'کتاب‌ها',
	'coll-clear_collection' => 'پاک کردن کتاب',
	'coll-clear_collection_confirm' => 'آیا واقعاً می‌خواهید که کتاب خود را به طور کامل پاک کنید؟',
	'coll-create_a_book' => 'ایجاد کتاب',
	'coll-help_collections' => 'راهنمای کتاب‌ها',
	'coll-helppage' => 'Help:کتاب‌ها',
	'coll-load_collection' => 'بارکردن کتاب',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحه|صفحه}}',
	'coll-popup_help_text' => 'برای از کار انداختن این موضوع در جعبهٔ «ایجاد کتاب» بر روی «پاک کردن کتاب» کلیک کنید',
	'coll-printable_version_pdf' => 'نسخهٔ پی‌دی‌اف',
	'coll-remove_page' => 'حذف این صفحه',
	'coll-show_collection' => 'نمایش کتاب',
	'coll-show_collection_tooltip' => 'برای ویرایش/بارگیری/سفارش کتاب خود کلیک کنید',
);

/** Finnish (Suomi)
 * @author Crt
 * @author Str4nd
 */
$messages['fi'] = array(
	'coll-add_category' => 'Lisää luokkaan',
	'coll-add_page' => 'Lisää sivu kirjaan',
	'coll-bookscategory' => 'Kirjat',
	'coll-clear_collection' => 'Tyhjennä kirja',
	'coll-clear_collection_confirm' => 'Haluatko varmasti tyhjentää kirjasi?',
	'coll-create_a_book' => 'Luo kirja',
	'coll-help_collections' => 'Ohje kirjoille',
	'coll-helppage' => 'Help:Kirjat',
	'coll-load_collection' => 'Lataa kirja',
	'coll-n_pages' => '$1 {{PLURAL:$1|sivu|sivua}}',
	'coll-printable_version_pdf' => 'PDF-versio',
	'coll-remove_page' => 'Poista sivu kirjasta',
	'coll-show_collection' => 'Näytä kirja',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author Guillom
 * @author IAlex
 * @author Meithal
 * @author Verdy p
 */
$messages['fr'] = array(
	'coll-add_category' => 'Ajouter cette catégorie',
	'coll-add_category_popup' => 'Ajouter les pages de la catégorie liée à votre livre',
	'coll-add_category_tooltip' => 'Ajouter tous les articles de cette catégorie à votre livre',
	'coll-add_page' => 'Ajouter cette page au livre',
	'coll-add_page_popup' => 'Ajouter la page liée à votre livre',
	'coll-add_page_tooltip' => 'Ajouter la page courante à votre livre',
	'coll-bookscategory' => 'Livres',
	'coll-clear_collection' => 'Vider le livre',
	'coll-clear_collection_confirm' => 'Voulez-vous réellement effacer l’intégralité de votre livre ?',
	'coll-clear_collection_tooltip' => 'Retirer tous les articles de votre livre actuel',
	'coll-create_a_book' => 'Créer un livre',
	'coll-help_collections' => 'Aide sur les livres',
	'coll-help_collections_tooltip' => "Afficher l'aide sur les outils des livres",
	'coll-helppage' => 'Help:Livres',
	'coll-load_collection' => 'Charger un livre',
	'coll-load_collection_tooltip' => 'Charger ce livre en tant que votre livre actuel',
	'coll-n_pages' => '$1 page{{PLURAL:$1||s}}',
	'coll-popup_help_text' => 'Pour désactiver cette fonctionnalité, cliquez sur « Vider le livre » dans la boîte « Créer un livre ».',
	'coll-printable_version_pdf' => 'Version PDF',
	'coll-remove_page' => 'Retirer la page du livre',
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
	'coll-add_category' => 'Engadir categoría',
	'coll-add_category_popup' => 'Engadir as páxinas wiki da categoría ligada ao seu libro',
	'coll-add_category_tooltip' => 'Engadir todas as páxinas wiki desta categoría ao seu libro',
	'coll-add_page' => 'Engadir a páxina ao libro',
	'coll-add_page_popup' => 'Engadir a páxina wiki ligada ao seu libro',
	'coll-add_page_tooltip' => 'Engadir a páxina wiki actual ao seu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Borrar o libro',
	'coll-clear_collection_confirm' => 'Realmente quere eliminar por completo o seu libro?',
	'coll-clear_collection_tooltip' => 'Eliminar todas as páxinas wiki do seu libro actual',
	'coll-create_a_book' => 'Crear un libro',
	'coll-help_collections' => 'Axuda cos libros',
	'coll-help_collections_tooltip' => 'Mostrar a axuda sobre a ferramenta de libros',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar un libro',
	'coll-load_collection_tooltip' => 'Cargar este libro como o seu libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxinas}}',
	'coll-popup_help_text' => 'Para desactivar esta característica prema en "Borrar o libro" na caixa "Crear un libro"',
	'coll-printable_version_pdf' => 'Versión PDF',
	'coll-remove_page' => 'Eliminar a páxina do libro',
	'coll-remove_page_popup' => 'Eliminar páxina wiki ligada do seu libro',
	'coll-remove_page_tooltip' => 'Eliminar a páxina wiki actual do seu libro',
	'coll-show_collection' => 'Mostrar o libro',
	'coll-show_collection_tooltip' => 'Prema para editar/descargar/pedir o seu libro',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'coll-add_category' => 'Kategorii zuefiege',
	'coll-add_category_popup' => 'Wikisyte in dr vergleichte Kategorii zue Dyynem Buech zuefiege',
	'coll-add_category_tooltip' => 'Alli Wikisyte in däre Kategorii in Dyy Buech yyfiege',
	'coll-add_page' => 'Artikel zum Buech zuefiege',
	'coll-add_page_popup' => 'Vergleichti Syte zu Dyynem Buech zuefiege',
	'coll-add_page_tooltip' => 'Di aktuäll Wikisyte zue Dyynem Buech zuefiege',
	'coll-bookscategory' => 'Buechfunktion',
	'coll-clear_collection' => 'Buech lesche',
	'coll-clear_collection_confirm' => 'Mechtsch Dyy Buech ächt lesche?',
	'coll-clear_collection_tooltip' => 'Alli Wikisyte us Dyynem aktuälle Buech useneh',
	'coll-create_a_book' => 'Buech aalege',
	'coll-help_collections' => 'Hilf zue Biecher',
	'coll-help_collections_tooltip' => 'D Hilf zum Buech-Tool aazeige',
	'coll-helppage' => 'Help:Biecher',
	'coll-load_collection' => 'Buech lade',
	'coll-load_collection_tooltip' => 'Des Buech as Dyy aktuäll Buech lade',
	'coll-n_pages' => '$1 {{PLURAL:$1|Syte|Syte}}',
	'coll-popup_help_text' => 'Go des Feature deaktiviere druck uf „Buech lesche“ im „Buech aalege“-Chäschtli',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_page' => 'Artikel us em Buech useneh',
	'coll-remove_page_popup' => 'Vergleichti Syte us Dyynem Buech uuseneh',
	'coll-remove_page_tooltip' => 'Di aktuäll Wikisyte us Dyynem Buech uuseneh',
	'coll-show_collection' => 'Buech zeige',
	'coll-show_collection_tooltip' => 'Druck do go Dyy Buech bearbeite/abelade/bstelle',
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
	'coll-add_category' => 'הוספת קטגוריה',
	'coll-add_category_popup' => 'הוספת כל הדפים בקטגוריה המקושרת לספר שלך',
	'coll-add_category_tooltip' => 'הוספת כל הדפים בקטגוריה זו לספר שלך',
	'coll-add_page' => 'הוספת דף לספר',
	'coll-add_page_popup' => 'הוספת הדף המקושר לספר שלך',
	'coll-add_page_tooltip' => 'הוספת דף הוויקי הנוכחי לספר שלך',
	'coll-bookscategory' => 'ספרים',
	'coll-clear_collection' => 'ניקוי הספר',
	'coll-clear_collection_confirm' => 'האם אתם בטוחים שברצונכם לנקות לגמרי את הספר שלכם?',
	'coll-clear_collection_tooltip' => 'הסרת כל הדפים מהספר הנוכחי שלך',
	'coll-create_a_book' => 'יצירת ספר',
	'coll-help_collections' => 'עזרה לספרים',
	'coll-help_collections_tooltip' => 'הצגת עזרה על כלי הספרים',
	'coll-helppage' => 'Help:ספרים',
	'coll-load_collection' => 'פתיחת ספר',
	'coll-load_collection_tooltip' => 'פתיחת הספר הזה כספר הנוכחי שלך',
	'coll-n_pages' => '{{PLURAL:$1|דף אחד|$1 דפים}}',
	'coll-popup_help_text' => 'כדי לבטל תכונה זו, לחצו על "ניקוי הספר" בתיבה "יצירת ספר"',
	'coll-printable_version_pdf' => 'גרסת PDF',
	'coll-remove_page' => 'הסרת דף מהספר',
	'coll-remove_page_popup' => 'הסרת הדף המקושר מהספר שלך',
	'coll-remove_page_tooltip' => 'הסרת דף הוויקי הנוכחי מהספר שלך',
	'coll-show_collection' => 'הצגת ספר',
	'coll-show_collection_tooltip' => 'עריכת/הורדת/הזמנת הספר שלך',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'coll-add_category' => 'श्रेणी बढायें',
	'coll-add_page' => 'पन्ना बढायें',
	'coll-clear_collection' => 'कलेक्शन खाली करें',
	'coll-create_a_book' => 'मेरा कलेक्शन',
	'coll-help_collections' => 'कलेक्शन सहायता',
	'coll-helppage' => 'Help:कलेक्शन',
	'coll-load_collection' => 'कलेक्शन लोड करें',
	'coll-remove_page' => 'पन्ना हटायें',
	'coll-show_collection' => 'कलेक्शन दर्शायें',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author SpeedyGonsales
 * @author Suradnik13
 */
$messages['hr'] = array(
	'coll-add_category' => 'Dodaj kategoriju',
	'coll-add_category_popup' => 'Dodaj stranice iz kategorije u svoju zbirku',
	'coll-add_category_tooltip' => 'Dodaj sve stranica iz kategoriji u svoju zbirku',
	'coll-add_page' => 'Dodaj stranicu u zbirku',
	'coll-add_page_popup' => 'Dodajte povezanu stranicu u svoju zbirku',
	'coll-add_page_tooltip' => 'Dodajte trenutačnu stranicu u svoju zbirku',
	'coll-bookscategory' => 'Zbirke',
	'coll-clear_collection' => 'Očisti zbirku',
	'coll-clear_collection_confirm' => 'Želite li stvarno očistiti svoju cijelu zbirku?',
	'coll-clear_collection_tooltip' => 'Uklonite sve stranice iz vaše trenutačne zbirke',
	'coll-create_a_book' => 'Napravi zbirku',
	'coll-help_collections' => 'Zbirke pomoć',
	'coll-help_collections_tooltip' => 'Pokaži pomoć o alatu zbirke',
	'coll-helppage' => 'Help:Zbirke',
	'coll-load_collection' => 'Učitaj zbirku',
	'coll-load_collection_tooltip' => 'Učitati ovu zbirku kao svoju trenutačnu zbirku',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-popup_help_text' => 'Da biste isključili ovu značajku kliknite &quot;Očisti zbirku&quot; u okviru &quot;Napravi zbirku&quot;',
	'coll-printable_version_pdf' => 'PDF inačica',
	'coll-remove_page' => 'Ukloni stranicu iz zbirke',
	'coll-remove_page_popup' => 'Ukloni povezanu stranicu iz svoje zbirke',
	'coll-remove_page_tooltip' => 'Ukloni trenutnačnu stranicu iz svoje zbirke',
	'coll-show_collection' => 'Pokaži zbirku',
	'coll-show_collection_tooltip' => 'Kliknite da biste uredili/preuzeli/naručili svoju zbirku',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'coll-add_category' => 'Kategoriju přidać',
	'coll-add_category_popup' => 'Wikistrony we wotkzajanej kategoriji twojej knize přidać',
	'coll-add_category_tooltip' => 'Wšě wikistrony w tutej kategoriji twojej knize přidać',
	'coll-add_page' => 'Stronu knize přidać',
	'coll-add_page_popup' => 'Wotkazanu wikistronu k twojej knize přidać',
	'coll-add_page_tooltip' => 'Aktualnu wikijowu stronu twojej knize přidać',
	'coll-bookscategory' => 'Knihi',
	'coll-clear_collection' => 'Knihu wuprózdnić',
	'coll-clear_collection_confirm' => 'Chceš woprawdźe swoju knihu dospołnje wuprózdnić?',
	'coll-clear_collection_tooltip' => 'Wšě wikistrony z twojeje aktualneje knihi wotstronić',
	'coll-create_a_book' => 'Knihu wutworić',
	'coll-help_collections' => 'Pomoc ke kniham',
	'coll-help_collections_tooltip' => 'Pomoc wo knižnej funkciji pokazać',
	'coll-helppage' => 'Help:Knihi',
	'coll-load_collection' => 'Knihu začitać',
	'coll-load_collection_tooltip' => 'Tutu knihu jako twoju aktualnu knihu začitać',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|stronje|strony|stronow}}',
	'coll-popup_help_text' => 'Zo by tutu funkciju znjemóžnił, klikń na "Knihu wuprózdnić" w kašćiku "Knihu wutworić"',
	'coll-printable_version_pdf' => 'PDF-wersija',
	'coll-remove_page' => 'Stronu z knihi wotstronić',
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
	'coll-add_category' => 'Kategória hozzáadása',
	'coll-add_category_popup' => 'A hivatkozott kategória lapjainak hozzáadása a könyvhöz',
	'coll-add_category_tooltip' => 'Ezen kategória összes lapjának hozzáadása a könyvhöz',
	'coll-add_page' => 'Lap hozzáadása a könyvhöz',
	'coll-add_page_popup' => 'A hivatkozott lap hozzáadása a könyvhöz',
	'coll-add_page_tooltip' => 'A jelenlegi lap hozzáadása a könyvhöz',
	'coll-bookscategory' => 'Könyvek',
	'coll-clear_collection' => 'Könyv kiürítése',
	'coll-clear_collection_confirm' => 'Valóban törölni szeretnéd a könyved?',
	'coll-clear_collection_tooltip' => 'Az összes lap eltávolítása a kiválasztott könyvből',
	'coll-create_a_book' => 'Könyv készítése',
	'coll-help_collections' => 'Segítség a könyvekkel kapcsolatban',
	'coll-help_collections_tooltip' => 'Megjelenít egy kis súgószöveget a könyv eszközről',
	'coll-helppage' => 'Help:Könyvek',
	'coll-load_collection' => 'Könyv betöltése',
	'coll-load_collection_tooltip' => 'Könyv betöltése kiválasztott könyvként',
	'coll-n_pages' => '{{PLURAL:$1|egy|$1}} lap',
	'coll-popup_help_text' => 'A funkció kikapcsolásához kattints a „Könyv kiürítése” gombra a „Könyv készítése” dobozban',
	'coll-printable_version_pdf' => 'PDF változat',
	'coll-remove_page' => 'Lap eltávolítása a könyvből',
	'coll-remove_page_popup' => 'A hivatkozott lap eltávolítása a könyvből',
	'coll-remove_page_tooltip' => 'A jelenlegi lap eltávolítása a könyvből',
	'coll-show_collection' => 'Könyv mutatása',
	'coll-show_collection_tooltip' => 'Kattints ide a könyv szerkesztéséhez/letöltéséhez/megrendeléségez',
);

/** Armenian (Հայերեն)
 * @author Teak
 */
$messages['hy'] = array(
	'coll-add_category' => 'Ավելացնել կատեգորիան',
	'coll-add_page' => 'Ավելացնել էջը',
	'coll-bookscategory' => 'Գրքեր',
	'coll-clear_collection' => 'Ջնջել գիրքը',
	'coll-clear_collection_confirm' => 'Դուք իսկապես ցանկանում եք ամբողջությամբ ջնջե՞լ ձեր գիրքը։',
	'coll-create_a_book' => 'Ստեղծել գիրք',
	'coll-help_collections' => 'Գրքի օգնություն',
	'coll-helppage' => 'Help:Գրքեր',
	'coll-load_collection' => 'Բեռնել գիրքը',
	'coll-n_pages' => '$1 {{PLURAL:$1|էջ|էջ}}',
	'coll-printable_version_pdf' => 'PDF-տարբերակ',
	'coll-remove_page' => 'Ջնջել էջը',
	'coll-show_collection' => 'Ցույց տալ գիրքը',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'coll-add_category' => 'Adder categoria',
	'coll-add_category_popup' => 'Adder le paginas wiki del categoria ligate a tu libro',
	'coll-add_category_tooltip' => 'Adder tote le paginas wiki in iste categoria a tu libro',
	'coll-add_page' => 'Adder pagina al libro',
	'coll-add_page_popup' => 'Adder le pagina wiki ligate a tu libro',
	'coll-add_page_tooltip' => 'Adder le pagina wiki actual a tu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Vacuar libro',
	'coll-clear_collection_confirm' => 'Esque tu realmente vole vacuar completemente tu libro?',
	'coll-clear_collection_tooltip' => 'Remover tote le pagians wiki de tu libro actual',
	'coll-create_a_book' => 'Crear un libro',
	'coll-help_collections' => 'Adjuta super le libros',
	'coll-help_collections_tooltip' => 'Monstrar adjuta super le instrumento de libros',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar libro',
	'coll-load_collection_tooltip' => 'Cargar iste libro como tu libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-popup_help_text' => 'Pro disactivar iste function clicca "Vacuar libro" in le quadro "Crear un libro"',
	'coll-printable_version_pdf' => 'Version PDF',
	'coll-remove_page' => 'Remover pagina del libro',
	'coll-remove_page_popup' => 'Remover le pagina wiki ligate de tu libro',
	'coll-remove_page_tooltip' => 'Remover le pagina wiki actual de tu libro',
	'coll-show_collection' => 'Monstrar libro',
	'coll-show_collection_tooltip' => 'Clicca pro modificar/discargar/commandar tu libro',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'coll-add_category' => 'Tambah kategori',
	'coll-add_category_popup' => 'Tambahkan halaman wiki pada kategori terkait buku Anda',
	'coll-add_category_tooltip' => 'Tambahkan semua halaman wiki pada kategori ini ke buku Anda',
	'coll-add_page' => 'Tambah halaman',
	'coll-add_page_popup' => 'Tambahkan halaman wiki terkait ke buku Anda',
	'coll-add_page_tooltip' => 'Tambahkan halaman wiki ini ke buku Anda',
	'coll-bookscategory' => 'Buku',
	'coll-clear_collection' => 'Hapus buku',
	'coll-clear_collection_confirm' => 'Apakah Anda benar-benar ingin membersihkan buku Anda sepenuhnya?',
	'coll-clear_collection_tooltip' => 'Hapus semua halaman wiki dari buku Anda',
	'coll-create_a_book' => 'Buat buku',
	'coll-help_collections' => 'Bantuan',
	'coll-help_collections_tooltip' => 'Tampilkan bantuan tentang peralatan buku',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Muat buku',
	'coll-load_collection_tooltip' => 'Muat buku ini sebagai buku aktif Anda',
	'coll-n_pages' => '$1 {{PLURAL:$1|halaman|halaman}}',
	'coll-popup_help_text' => 'Untuk menon-aktifkan fitur ini, klik "Hapus buku" di kotak "Buat buku"',
	'coll-printable_version_pdf' => 'Buat PDF',
	'coll-remove_page' => 'Buang dari buku',
	'coll-remove_page_popup' => 'Buang halaman wiki terkait dari buku Anda',
	'coll-remove_page_tooltip' => 'Buang halaman wiki ini dari buku Anda',
	'coll-show_collection' => 'Lihat buku',
	'coll-show_collection_tooltip' => 'Klik untuk menyunting/mengunduh/memesan buku Anda',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'coll-add_category' => 'Adjuntar kategorio',
	'coll-bookscategory' => 'Libri',
	'coll-create_a_book' => 'Kreez un libro',
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
	'coll-add_category' => 'Bæta við flokki',
	'coll-add_page' => 'Bæta við síðu',
	'coll-create_a_book' => 'Safnið mitt',
	'coll-help_collections' => 'Safnhjálp',
	'coll-load_collection' => 'Hlaða safn',
	'coll-remove_page' => 'Fjarlægja síðu',
	'coll-show_collection' => 'Sýna safn',
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Darth Kule
 */
$messages['it'] = array(
	'coll-add_category' => 'Aggiungi categoria',
	'coll-add_category_popup' => 'Aggiungi le pagine wiki nella categoria collegata al tuo libro',
	'coll-add_category_tooltip' => 'Aggiungi tutte le pagine wiki di questa categoria al tuo libro',
	'coll-add_page' => 'Aggiungi pagina al libro',
	'coll-add_page_popup' => 'Aggiungi pagina wiki collegata al tuo libro',
	'coll-add_page_tooltip' => 'Aggiungi la pagina wiki corrente al tuo libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Svuota libro',
	'coll-clear_collection_confirm' => 'Si desidera veramente pulire completamente il proprio libro?',
	'coll-clear_collection_tooltip' => 'Remuovi tutte le pagine wiki dal tuo libro corrente',
	'coll-create_a_book' => 'Crea un libro',
	'coll-help_collections' => 'Aiuto sui libri',
	'coll-help_collections_tooltip' => 'Guida dello strumento Libro',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Carica libro',
	'coll-load_collection_tooltip' => 'Carica questo libro come libro corrente',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|pagine}}',
	'coll-popup_help_text' => 'Per disattivare questa funzione fare clic su "Svuota libro" nella sezione "Crea un libro"',
	'coll-printable_version_pdf' => 'Versione PDF',
	'coll-remove_page' => 'Rimuovi pagina dal libro',
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
	'coll-add_category' => 'カテゴリの追加',
	'coll-add_category_popup' => 'リンクされたカテゴリ内のウィキページを自分のブックに追加する',
	'coll-add_category_tooltip' => 'このカテゴリ中のすべてのページをあなたのブックに追加する',
	'coll-add_page' => 'ページをブックに追加',
	'coll-add_page_popup' => 'リンクされたウィキページを自分のブックに追加する',
	'coll-add_page_tooltip' => '現在のページをあなたのブックに追加する',
	'coll-bookscategory' => 'ブック',
	'coll-clear_collection' => 'ブックを消去',
	'coll-clear_collection_confirm' => '本当にブックを完全に消去しますか？',
	'coll-clear_collection_tooltip' => 'あなたの現在のブックからすべてのウィキページを削除する',
	'coll-create_a_book' => 'ブックの新規作成',
	'coll-help_collections' => 'ブックのヘルプ',
	'coll-help_collections_tooltip' => 'ブック作成ツールについてのヘルプを表示する',
	'coll-helppage' => 'Help:ブック',
	'coll-load_collection' => 'ブックの読み込み',
	'coll-load_collection_tooltip' => 'このブックをあなたの現在のブックとして読み込む',
	'coll-n_pages' => '$1{{PLURAL:$1|ページ}}',
	'coll-popup_help_text' => 'この機能を停止するには、「{{int:coll-create_a_book}}」ボックス内の「{{int:coll-clear_collection}}」をクリックしてください',
	'coll-printable_version_pdf' => 'PDF版',
	'coll-remove_page' => 'ページをブックから削除',
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
	'coll-add_category' => 'Tambah kategori',
	'coll-add_page' => 'Tambah kaca wiki',
	'coll-clear_collection' => 'Kosongna kolèksi',
	'coll-clear_collection_confirm' => 'Panjenengan pancèn arep mbusak kalèksi panjenengan?',
	'coll-create_a_book' => 'Gawé buku',
	'coll-help_collections' => 'Pitulung kolèksi',
	'coll-helppage' => 'Help:Collections',
	'coll-load_collection' => 'Unggahna kolèksi',
	'coll-n_pages' => '$1 {{PLURAL:$1|kaca|kaca}}',
	'coll-printable_version_pdf' => 'Vèrsi PDF',
	'coll-remove_page' => 'Busak kaca wiki',
	'coll-show_collection' => 'Tuduhna kolèksi',
);

/** Georgian (ქართული)
 * @author Malafaya
 * @author Sopho
 * @author Temuri rajavi
 */
$messages['ka'] = array(
	'coll-add_category' => 'კატეგორიის დამატება',
	'coll-create_a_book' => 'წიგნის შექმნა',
	'coll-helppage' => 'Help:წიგნები',
	'coll-n_pages' => '$1 გვერდი',
	'coll-printable_version_pdf' => 'PDF ვერსია',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'coll-add_category' => 'បន្ថែមចំណាត់ថ្នាក់ក្រុម',
	'coll-add_page' => 'បន្ថែមទំព័រវិគី',
	'coll-clear_collection' => 'សំអាត​សៀវភៅ',
	'coll-clear_collection_confirm' => 'តើ​អ្នក​ពិតជា​ចង់​ជម្រះ​សៀវភៅ​របស់​អ្នក​ទាំងស្រុង​ឬ​?',
	'coll-create_a_book' => 'កំរងឯកសារ',
	'coll-help_collections' => 'ជំនួយ​អំពី​សៀវភៅ',
	'coll-helppage' => 'Help:សៀវភៅ',
	'coll-load_collection' => 'ផ្ទុកសៀវភៅ',
	'coll-n_pages' => '$1 {{PLURAL:$1|ទំព័រ|ទំព័រ}}',
	'coll-printable_version_pdf' => 'កំណែ PDF',
	'coll-remove_page' => 'ដកទំព័រវិគីចេញ',
	'coll-show_collection' => 'បង្ហាញ​សៀវភៅ',
);

/** Korean (한국어)
 * @author Ilovesabbath
 * @author Kwj2772
 * @author Yknok29
 */
$messages['ko'] = array(
	'coll-add_category' => '분류 추가하기',
	'coll-add_category_popup' => '연결된 카테고리의 위키 페이지를 당신의 책에 더하세요.',
	'coll-add_category_tooltip' => '이 분류에 속한 모든 위키 페이지를 책에 추가해 주세요',
	'coll-add_page' => '책에 문서 추가',
	'coll-add_page_popup' => '연결된 위키 페이지를 당신의 책에 더하세요',
	'coll-add_page_tooltip' => '현재 위키 페이지에 책을 덧붙여 주세요',
	'coll-bookscategory' => '책들',
	'coll-clear_collection' => '책 청소하기',
	'coll-clear_collection_confirm' => '정말로 책에 있는 내용을 완전히 삭제하길 원하세요?',
	'coll-clear_collection_tooltip' => '현재 책으로부터 모든 위키 페이지를 삭제하세요',
	'coll-create_a_book' => '책 만들기',
	'coll-help_collections' => '도움말',
	'coll-help_collections_tooltip' => '책 도구에 대한 도움말을 보고 계십니다',
	'coll-helppage' => 'Help:책 만들기',
	'coll-load_collection' => '책 불러오기',
	'coll-load_collection_tooltip' => '현재 책으로 이 책을 메모리에 넣어주세요',
	'coll-n_pages' => '$1개의 문서',
	'coll-popup_help_text' => '이 글의 활성화를 해제하려면 "책 만들기" 상자의 "책 청소하기"를 클릭하세요.',
	'coll-printable_version_pdf' => 'PDF 버전',
	'coll-remove_page' => '책에서 문서 제거',
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
	'coll-add_category' => 'En Saachjrupp bei dat Booch dobei donn',
	'coll-add_category_popup' => 'Donn di Sigge uß dä {{ns:Category}}, wo dä Lengk drop jeiht, met en Ding Booch opnämme',
	'coll-add_category_tooltip' => 'Dat deiht all de Atikelle en dä {{NS:Category}} en Ding Booch erin.',
	'coll-add_page' => 'En Sigg bei dat Booch dobei donn',
	'coll-add_page_popup' => 'Donn de Sigg, wo dä Lengk drop jeiht, met en dat Booch opnämme',
	'coll-add_page_tooltip' => 'Donn de aktoälle Wiki-Sigg en dat Booch erin',
	'coll-bookscategory' => 'Bööscher',
	'coll-clear_collection' => 'Dat Booch leddisch maache',
	'coll-clear_collection_confirm' => 'Wells De werklesch Ding Booch jannz fott schmieße?',
	'coll-clear_collection_tooltip' => 'Hee met schmiiß De alle Sigge fum Wiki uß Dingem aktoälle Booch eruß, un deihs et leddisch maache.',
	'coll-create_a_book' => 'E Booch zesamme_ställe',
	'coll-help_collections' => 'Hölp üvver Bööscher',
	'coll-help_collections_tooltip' => 'Hölp övver et Werkzüch zum Bööscher maache',
	'coll-helppage' => 'Help:Bööscher',
	'coll-load_collection' => 'Booch lade',
	'coll-load_collection_tooltip' => 'Deiht dat Booch hee als Ding aktoälles Booch laade.',
	'coll-n_pages' => '{{PLURAL:$1|ein Sigg|$1 Sigge|kein Sigge}}',
	'coll-popup_help_text' => 'Öm dat ußzeschallde, donn en dämm Kaste met dä Övverschreff „{{int:coll-create_a_book}}“, op dä Knopp „{{int:coll-clear_collection}}“ klecke.',
	'coll-printable_version_pdf' => 'PDF Version',
	'coll-remove_page' => 'Donn en Sigg uß däm Booch eruß nämme',
	'coll-remove_page_popup' => 'Donn de Sigg, wo dä Lemgk drop jeiht, uß Dingem Booch eruß nämme',
	'coll-remove_page_tooltip' => 'Schmiiß hee di Sigg fum Wiki uß Dingem Booch eruß',
	'coll-show_collection' => 'Booch zeije',
	'coll-show_collection_tooltip' => 'He met kanns De Ding Boch ändere, de zosamme jeshtalle Sigge erunger laade, un jedröck beshtelle.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'coll-add_category' => 'Kategorie derbäisetzen',
	'coll-add_category_popup' => 'Wikisäiten a verlinkte Kategorien an Ärt Buch derbäisetzen',
	'coll-add_category_tooltip' => 'All Wiki-Säiten aus dëser Kategorie an Ärt Buch derbäisetzen',
	'coll-add_page' => "Säit bäi d'Buch derbäisetzen",
	'coll-add_page_popup' => 'Verlinkte Wiki-Säit an Ärt Buch derbäisetzen',
	'coll-add_page_tooltip' => 'Déi aktuell Wiki-Säit an Ärt Buch derbäisetzen',
	'coll-bookscategory' => 'Bicher',
	'coll-clear_collection' => 'Buch eidel maachen',
	'coll-clear_collection_confirm' => 'Wëllt Dir Ärt Buch wierklech ganz läschen?',
	'coll-clear_collection_tooltip' => 'All Wiki-Säiten aus ärem aktuelle Buch eraushuelen',
	'coll-create_a_book' => 'E Buch uleeën',
	'coll-help_collections' => "Hellëf iwwert d'Bicher",
	'coll-help_collections_tooltip' => 'Hëllef vun der Buch-Fonctioun weisen',
	'coll-helppage' => 'Help:Bicher',
	'coll-load_collection' => 'Buch lueden',
	'coll-load_collection_tooltip' => 'Dëst Buch als Ärt aktuellt Buch lueden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Säit|Säiten}}',
	'coll-popup_help_text' => 'Fir dës Fonctioun auszeschalten klickt op "Buch eidel maachen" an der Këscht "E Buch uleeën"',
	'coll-printable_version_pdf' => 'PDF-Versioun',
	'coll-remove_page' => 'Säit aus dem Buch ewechhuelen',
	'coll-remove_page_popup' => 'Verlinkte Wiki-Säit aus Ärem Buch eraushuelen',
	'coll-remove_page_tooltip' => 'Dës Wiki-Säit aus Ärem buch eraushuelen',
	'coll-show_collection' => "D'Buch weisen",
	'coll-show_collection_tooltip' => "Klickt fir Ärt Buch z'änneren/erofzeluede/ze bestellen",
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'coll-add_category' => 'Zeukgroop bievoge',
	'coll-add_category_popup' => "Wikipagina's oet de gekóppeldje categorie aan dien book zètte",
	'coll-add_category_tooltip' => 'Zèt als paasj in dees zeukgroop aan öch book',
	'coll-add_page' => 'Wikipaasj bievoge',
	'coll-add_page_popup' => 'Gekóppeldje wikipaasj aan öch book zètte',
	'coll-add_page_tooltip' => "Zèt d'n huujige wikipaasj aan öch book",
	'coll-bookscategory' => 'Beuk',
	'coll-clear_collection' => 'Laeg book',
	'coll-clear_collection_confirm' => 'Wils se dien book èch laege?',
	'coll-clear_collection_tooltip' => 'Wösj als paasj oet öch huujig book',
	'coll-create_a_book' => "Maak 'n book",
	'coll-help_collections' => 'Hölp bie beuk',
	'coll-help_collections_tooltip' => "Tuun d'n hölppaasj veur beuk",
	'coll-helppage' => 'Help:Beuk',
	'coll-load_collection' => 'Laaj book',
	'coll-load_collection_tooltip' => 'Laaj dit book es öch huujig book',
	'coll-n_pages' => "$1 {{PLURAL:$1|pazjena|pazjena's}}",
	'coll-popup_help_text' => 'Klik "Maak book laeg" in \'t vènster "Maak book" óm dees ópsje oet te zètte',
	'coll-printable_version_pdf' => 'PDF-gaedering',
	'coll-remove_page' => 'Wikipaasj wösje',
	'coll-remove_page_popup' => 'Gekóppeldje wikipaasj oet dien book wösje',
	'coll-remove_page_tooltip' => "Wösj d'n huujig wikipaasj oet öch book",
	'coll-show_collection' => 'Toean book',
	'coll-show_collection_tooltip' => 'Klik óm öch book tö bewèrke/óphaole/bestèlle',
);

/** Lithuanian (Lietuvių)
 * @author Homo
 */
$messages['lt'] = array(
	'coll-add_category' => 'Pridėti kategoriją',
	'coll-create_a_book' => 'Kurti knygą',
	'coll-printable_version_pdf' => 'PDF versija',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'coll-add_category' => 'വര്‍ഗ്ഗം ചേര്‍ക്കുക',
	'coll-add_page' => 'താള്‍ ചേര്‍ക്കുക',
	'coll-clear_collection' => 'ശേഖരം മായ്ക്കുക',
	'coll-create_a_book' => 'എന്റെ ശേഖരം',
	'coll-help_collections' => 'ശേഖരങ്ങളുടെ സഹായം',
	'coll-helppage' => 'Help:ശേഖരം',
	'coll-load_collection' => 'ശേഖരം ലോഡ് ചെയ്യുക',
	'coll-remove_page' => 'താള്‍ മാറ്റുക',
	'coll-show_collection' => 'ശേഖരം കാണിക്കുക',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'coll-add_category' => 'वर्गाचा समावेश करा',
	'coll-add_page' => 'पानाचा समावेश करा',
	'coll-clear_collection' => 'सर्व गोळा केलेली पाने पुसा',
	'coll-create_a_book' => 'मी गोळा केलेली पाने',
	'coll-help_collections' => 'पाने गोळा करण्यासाठी मदत',
	'coll-helppage' => 'Help:गोळा केलेली पाने',
	'coll-load_collection' => 'गोळाकेलेली पाने दाखवा',
	'coll-remove_page' => 'पान काढा',
	'coll-show_collection' => 'गोळा केलेली पाने दाखवा',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 */
$messages['ms'] = array(
	'coll-add_category' => 'Tambah kategori',
	'coll-add_page' => 'Tambah laman wiki',
	'coll-bookscategory' => 'Buku',
	'coll-clear_collection' => 'Kosongkan buku',
	'coll-clear_collection_confirm' => 'Betul anda mahu mengosongkan buku anda?',
	'coll-create_a_book' => 'Cipta buku',
	'coll-help_collections' => 'Bantuan buku',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Muat buku',
	'coll-n_pages' => '$1 laman',
	'coll-printable_version_pdf' => 'Versi PDF',
	'coll-remove_page' => 'Buang laman wiki',
	'coll-show_collection' => 'Papar buku',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'coll-add_category' => 'Поладомс категория',
	'coll-add_page' => 'Поладомс лопа',
	'coll-bookscategory' => 'Кинигат',
	'coll-helppage' => 'Help:Кинигат',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'coll-add_category' => 'Kategorie tofögen',
	'coll-add_category_popup' => 'Wikisieden in de verlenkte Kategorie to dien Book tofögen',
	'coll-add_category_tooltip' => 'All Wikisieden ut disse Kategorie to dien Book tofögen',
	'coll-add_page' => 'Sied to Book tofögen',
	'coll-add_page_popup' => 'Verlenkt Wikisied to dien Book tofögen',
	'coll-add_page_tooltip' => 'Disse Wikisied to dien Book tofögen',
	'coll-bookscategory' => 'Böker',
	'coll-clear_collection' => 'Book leddigmaken',
	'coll-clear_collection_confirm' => 'Wullt du dien Book worraftig leddig maken?',
	'coll-clear_collection_tooltip' => 'All Wikisieden ut dien Book rutnehmen',
	'coll-create_a_book' => 'Book opstellen',
	'coll-help_collections' => 'Help to Böker',
	'coll-help_collections_tooltip' => 'Help över Böker wiesen',
	'coll-helppage' => 'Help:Böker',
	'coll-load_collection' => 'Book laden',
	'coll-load_collection_tooltip' => 'Dit Book as dien aktuell Book laden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Sied|Sieden}}',
	'coll-popup_help_text' => 'Dit uttoschalten, klick op „Book wegdoon“ in dat Finster „Book opstellen“',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_page' => 'Sied ut Book rutnehmen',
	'coll-remove_page_popup' => 'Verlenkte Wikisied ut dien Book rutnehmen',
	'coll-remove_page_tooltip' => 'Disse Wikisied ut dien Book rutnehmen',
	'coll-show_collection' => 'Book wiesen',
	'coll-show_collection_tooltip' => 'Klick hier, dat du dien Book ännern/dalladen/bestellen kannst',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'coll-add_category' => 'Kattegerie derbie',
	'coll-add_page' => 'Wikipagina derbie',
	'coll-bookscategory' => 'Boeken',
	'coll-create_a_book' => 'Boek maken',
	'coll-help_collections' => 'Hulpe bie boeken',
	'coll-helppage' => 'Help:Boeken',
	'coll-load_collection' => 'Boek laojen',
	'coll-n_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'coll-printable_version_pdf' => 'PDF-versie',
	'coll-remove_page' => 'Wikipagina deruut',
	'coll-show_collection' => 'Boek laoten zien',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author Tvdm
 */
$messages['nl'] = array(
	'coll-add_category' => 'Categorie toevoegen',
	'coll-add_category_popup' => "Wikipagina's uit de gekoppelde categorie aan uw boek toevoegen",
	'coll-add_category_tooltip' => "Alle pagina's in deze categorie aan uw boek toevoegen",
	'coll-add_page' => 'Pagina aan boek toevoegen',
	'coll-add_page_popup' => 'Gekoppelde wikipagina aan uw boek toevoegen',
	'coll-add_page_tooltip' => 'De huidige wikipagina aan uw boek toevoegen',
	'coll-bookscategory' => 'Boeken',
	'coll-clear_collection' => 'Boek leegmaken',
	'coll-clear_collection_confirm' => 'Wilt u uw boek werkelijk leegmaken?',
	'coll-clear_collection_tooltip' => "Alle pagina's uit uw huidige boek verwijderen",
	'coll-create_a_book' => 'Boek maken',
	'coll-help_collections' => 'Hulp bij boeken',
	'coll-help_collections_tooltip' => 'De hulppagina voor boeken weergeven',
	'coll-helppage' => 'Help:Boeken',
	'coll-load_collection' => 'Boek laden',
	'coll-load_collection_tooltip' => 'Dit boek als uw huidige boek laden',
	'coll-n_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'coll-popup_help_text' => 'Klik "Boek leegmaken" in het venster "Boek maken" om deze optie uit te schakelen',
	'coll-printable_version_pdf' => 'PDF-versie',
	'coll-remove_page' => 'Pagina uit boek verwijderen',
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
	'coll-add_category' => 'Legg til kategori',
	'coll-add_category_popup' => 'Legg til i boka di wikisider i opplenka kategoriar',
	'coll-add_category_tooltip' => 'Legg til alle sidene i denne kategorien til boka di',
	'coll-add_page' => 'Legg til wikisida i bok',
	'coll-add_page_popup' => 'Legg til lenkja wikiside i boka di',
	'coll-add_page_tooltip' => 'Legg til den noverande wikisida til boka di',
	'coll-bookscategory' => 'Bøker',
	'coll-clear_collection' => 'Tøm bok',
	'coll-clear_collection_confirm' => 'Vil du verkeleg fjerna alle sidene i boka di?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider frå den noverande boka di',
	'coll-create_a_book' => 'Opprett ei bok',
	'coll-help_collections' => 'Bokhjelp',
	'coll-help_collections_tooltip' => 'Vis hjelp for bokverktyet',
	'coll-helppage' => 'Help:Bøker',
	'coll-load_collection' => 'Last bok',
	'coll-load_collection_tooltip' => 'Last denne boka som den noverande boka di',
	'coll-n_pages' => '{{PLURAL:$1|éi sida|$1 sider}}',
	'coll-popup_help_text' => 'For å deaktivera denne funksjonen, klikk «blank ut bok» i boksen «lag ei bok»',
	'coll-printable_version_pdf' => 'PDF-versjon',
	'coll-remove_page' => 'Fjern wikisida frå boka',
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
	'coll-add_category' => 'Legg til kategori',
	'coll-add_category_popup' => 'Legg til wikisider i den lenkede kategorien i din bok',
	'coll-add_category_tooltip' => 'Legg til alle wikisider i denne kategorien til din bok',
	'coll-add_page' => 'Legg til side i din bok',
	'coll-add_page_popup' => 'Legg til lenket wikiside i din bok',
	'coll-add_page_tooltip' => 'Legg til den nåværende wikisiden i din bok',
	'coll-bookscategory' => 'Bøker',
	'coll-clear_collection' => 'Tøm bok',
	'coll-clear_collection_confirm' => 'Vil du virkelig tømme boka?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider fra din nåværende bok',
	'coll-create_a_book' => 'Opprett en bok',
	'coll-help_collections' => 'Bokhjelp',
	'coll-help_collections_tooltip' => 'Vis hjelp for bokverktøyet',
	'coll-helppage' => 'Help:Bøker',
	'coll-load_collection' => 'Last bok',
	'coll-load_collection_tooltip' => 'Last denne boka som din nåværende bok',
	'coll-n_pages' => '$1 {{PLURAL:$1|side|sider}}',
	'coll-popup_help_text' => 'For å deaktivere denne funksjonen, klikk «Tøm bok» i boksen «Lag en bok»',
	'coll-printable_version_pdf' => 'PDF-versjon',
	'coll-remove_page' => 'Fjern wikiside fra boka',
	'coll-remove_page_popup' => 'Fjern lenket wikiside fra din bok',
	'coll-remove_page_tooltip' => 'Fjern den nåværende wikisiden fra din bok',
	'coll-show_collection' => 'Vis bok',
	'coll-show_collection_tooltip' => 'Trykk for å endre/laste ned/bestille din bok',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'coll-add_category' => 'Apondre una categoria',
	'coll-add_category_popup' => 'Apondre las paginas de la categoria ligada a vòstre libre',
	'coll-add_category_tooltip' => "Apondre totes los articles d'aquesta categoria a vòstre libre",
	'coll-add_page' => 'Apondre la pagina al libre',
	'coll-add_page_popup' => 'Apondre la pagina ligada a vòstre libre',
	'coll-add_page_tooltip' => 'Apondre la pagina correnta a vòstre libre',
	'coll-bookscategory' => 'Libres',
	'coll-clear_collection' => 'Voidar lo libre',
	'coll-clear_collection_confirm' => 'Volètz vertadièrament escafar l’integralitat de vòstre libre ?',
	'coll-clear_collection_tooltip' => 'Levar totes los articles de vòstre libre actual',
	'coll-create_a_book' => 'Crear un libre',
	'coll-help_collections' => 'Ajuda suls libres',
	'coll-help_collections_tooltip' => "Afichar l'ajuda suls espleches dels libres",
	'coll-helppage' => 'Help:Libres',
	'coll-load_collection' => 'Cargar un libre',
	'coll-load_collection_tooltip' => 'Cargar aqueste libre en tant que vòstre libre actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-popup_help_text' => 'Per desactivar aquesta foncionalitat, clicatz sus « Voidar lo libre » dins la boita « Crear un libre ».',
	'coll-printable_version_pdf' => 'Version del PDF',
	'coll-remove_page' => 'Levar la pagina del libre',
	'coll-remove_page_popup' => 'Suprimir la pagina ligada de vòstre libre',
	'coll-remove_page_tooltip' => 'Levar la pagina correnta de vòstre libre',
	'coll-show_collection' => 'Afichar lo libre',
	'coll-show_collection_tooltip' => 'Clicatz per modificar / telecargar / comandar vòstre libre',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'coll-bookscategory' => 'Bicher',
	'coll-clear_collection' => 'Buch lösche',
	'coll-help_collections' => 'Hilf zu Bicher',
	'coll-helppage' => 'Help:Bicher',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_page' => 'Blatt vum Buch lösche',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Masti
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'coll-add_category' => 'Dodaj kategorię',
	'coll-add_category_popup' => 'Dodaj strony wiki w linkowanej kategorii do książki',
	'coll-add_category_tooltip' => 'Dodaj wszystkie strony wiki znajdujące się w tej kategorii do książki',
	'coll-add_page' => 'Dodaj stronę do książki',
	'coll-add_page_popup' => 'Dodaj linkowaną stronę wiki do książki',
	'coll-add_page_tooltip' => 'Dodaj bieżącą stronę wiki do książki',
	'coll-bookscategory' => 'Książki',
	'coll-clear_collection' => 'Wyczyść książkę',
	'coll-clear_collection_confirm' => 'Czy jesteś pewien, że chcesz wyczyścić całą zawartość książki?',
	'coll-clear_collection_tooltip' => 'Usuń wszystkie strony wiki z bieżącej książki',
	'coll-create_a_book' => 'Utwórz książkę',
	'coll-help_collections' => 'Książki – pomoc',
	'coll-help_collections_tooltip' => 'Pokaż pomoc dla narzędzia tworzenia książek',
	'coll-helppage' => 'Help:Książki',
	'coll-load_collection' => 'Załaduj książkę',
	'coll-load_collection_tooltip' => 'Załaduj tę książkę jako bieżącą',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|strony|stron}}',
	'coll-popup_help_text' => 'Aby wyłączyć tę funkcję kliknij przycisk „Wyczyść książkę” w grupie „Utwórz książkę”',
	'coll-printable_version_pdf' => 'Wersja PDF',
	'coll-remove_page' => 'Usuń stronę z książki',
	'coll-remove_page_popup' => 'Usuń linkowaną stronę wiki z książki',
	'coll-remove_page_tooltip' => 'Usuń bieżącą stronę wiki z książki',
	'coll-show_collection' => 'Pokaż książkę',
	'coll-show_collection_tooltip' => 'Kliknij aby edytować, pobrać lub zamówić książkę',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'coll-add_category' => 'وېشنيزه ورګډول',
	'coll-add_page' => 'د ويکي مخ ورګډول',
	'coll-create_a_book' => 'يو کتاب جوړول',
	'coll-help_collections' => 'د غونډونو لارښود',
);

/** Portuguese (Português)
 * @author 555
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'coll-add_category' => 'Adicionar categoria',
	'coll-add_category_popup' => 'Adicionar ao seu livro as páginas wiki na categoria ligada',
	'coll-add_category_tooltip' => 'Adicionar todas as páginas wiki nesta categoria ao seu livro',
	'coll-add_page' => 'Adicionar página ao livro',
	'coll-add_page_popup' => 'Adicionar ao seu livro a página wiki ligada',
	'coll-add_page_tooltip' => 'Adicionar a página wiki atual ao seu livro',
	'coll-bookscategory' => 'Livros',
	'coll-clear_collection' => 'Esvaziar livro',
	'coll-clear_collection_confirm' => 'Deseja realmente limpar completamente o seu livro?',
	'coll-clear_collection_tooltip' => 'Remover todas as páginas wiki do seu livro atual',
	'coll-create_a_book' => 'Criar um livro',
	'coll-help_collections' => 'Ajuda sobre livros',
	'coll-help_collections_tooltip' => 'Mostrar ajuda sobre a ferramenta de livros',
	'coll-helppage' => 'Help:Livros',
	'coll-load_collection' => 'Carregar livro',
	'coll-load_collection_tooltip' => 'Carregar este livro como o seu livro atual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-popup_help_text' => 'Para desativar esta característica clique em "Esvaziar livro", na  caixa "Criar um livro"',
	'coll-printable_version_pdf' => 'Versão em PDF',
	'coll-remove_page' => 'Remover página do livro',
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
	'coll-add_category' => 'Adicionar categoria',
	'coll-add_category_popup' => 'Adicionar páginas wiki na categoria ligada no seu livro',
	'coll-add_category_tooltip' => 'Adicionar todas as páginas wiki nesta categoria ao seu livro',
	'coll-add_page' => 'Adicionar página ao livro',
	'coll-add_page_popup' => 'Adicionar página wiki ligada ao seu livro',
	'coll-add_page_tooltip' => 'Adicionar a página wiki atual ao seu livro',
	'coll-bookscategory' => 'Livros',
	'coll-clear_collection' => 'Esvaziar livro',
	'coll-clear_collection_confirm' => 'Realmente deseja esvaziar completamente o seu livro?',
	'coll-clear_collection_tooltip' => 'Remover todas as páginas wiki do seu livro atual',
	'coll-create_a_book' => 'Criar um livro',
	'coll-help_collections' => 'Ajuda sobre livros',
	'coll-help_collections_tooltip' => 'Mostrar ajuda sobre a ferramenta de livros',
	'coll-helppage' => 'Help:Livros',
	'coll-load_collection' => 'Carregar livro',
	'coll-load_collection_tooltip' => 'Carregar este livro como o seu livro atual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-popup_help_text' => 'Para desativar esta funcionalidade clique em "Esvaziar Livro" na caixa "Criar um livro"',
	'coll-printable_version_pdf' => 'Versão em PDF',
	'coll-remove_page' => 'Remover página do livro',
	'coll-remove_page_popup' => 'Remover páginas wiki ligadas de seu livro',
	'coll-remove_page_tooltip' => 'Remover a página wiki atual do seu livro',
	'coll-show_collection' => 'Mostrar livro',
	'coll-show_collection_tooltip' => 'Clique para editar/baixar/encomendar o seu livro',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'coll-add_category' => 'Adaugă categorie',
	'coll-add_page' => 'Adaugă pagină wiki',
	'coll-create_a_book' => 'Creează o carte',
	'coll-load_collection' => 'Încarcă colecţie',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagină|pagini}}',
	'coll-remove_page' => 'Şterge pagină wiki',
	'coll-show_collection' => 'Arată colecţie',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'coll-add_category' => "Aggiunge 'na categorije",
	'coll-add_page' => "Aggiunge 'na pàgene a 'u libbre",
	'coll-bookscategory' => 'Libbre',
	'coll-clear_collection' => "Pulizze 'u libbre",
	'coll-create_a_book' => "Ccreje 'nu libbre",
	'coll-help_collections' => "Aiute sus a 'u libbre",
	'coll-helppage' => 'Help:Libbre',
	'coll-load_collection' => "Careche 'nu libbre",
	'coll-n_pages' => '$1 {{PLURAL:$1|pàgene|pàggene}}',
	'coll-printable_version_pdf' => 'Versione in PDF',
	'coll-remove_page' => "Live 'na pàgene da 'u libbre",
	'coll-show_collection' => "Fà vedè 'nu libbre",
);

/** Russian (Русский)
 * @author Ahonc
 * @author Ferrer
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'coll-add_category' => 'Добавить категорию',
	'coll-add_category_popup' => 'Добавить в вики-страницы из связанной категории в книгу',
	'coll-add_category_tooltip' => 'Добавить все вики-страницы этой категории в книгу',
	'coll-add_page' => 'Добавить страницу в книгу',
	'coll-add_page_popup' => 'Добавить связанную вики-страницу в книгу',
	'coll-add_page_tooltip' => 'Добавить текущую вики-страницу в книгу',
	'coll-bookscategory' => 'Книги',
	'coll-clear_collection' => 'Очистить книгу',
	'coll-clear_collection_confirm' => 'Вы действительно желаете полностью очистить вашу книгу?',
	'coll-clear_collection_tooltip' => 'Удалите все вики-страницы из текущей книги',
	'coll-create_a_book' => 'Создать книгу',
	'coll-help_collections' => 'Справка по книгам',
	'coll-help_collections_tooltip' => 'Показать справку о «книжных» инструментах',
	'coll-helppage' => 'Help:Книги',
	'coll-load_collection' => 'Загрузить книгу',
	'coll-load_collection_tooltip' => 'Загрузить эту книгу как вашу текущую книгу',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страницы|страниц}}',
	'coll-popup_help_text' => 'Для отключения этой функции нажмите кнопку «Очистить книгу» в поле «Создать книгу»',
	'coll-printable_version_pdf' => 'PDF-версия',
	'coll-remove_page' => 'Удалить страницу из книги',
	'coll-remove_page_popup' => 'Удалить связанную вики-страницу из книги',
	'coll-remove_page_tooltip' => 'Удалить текущую вики-страницу из книги',
	'coll-show_collection' => 'Показать книгу',
	'coll-show_collection_tooltip' => 'Нажмите для редактирования/загрузки/заказа книги',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'coll-add_category' => 'Категория эбии',
	'coll-add_category_popup' => 'Сигэнэр категорияттан сирэйдэри кинигэҕэ киллэр',
	'coll-add_category_tooltip' => 'Бу категория биики сирэйдэрин кинигэҕэ киллэр',
	'coll-add_page' => 'Кинигэҕэ сирэйи эбии',
	'coll-add_page_popup' => 'Сигэнэр сирэйи кинигэҕэ киллэр',
	'coll-add_page_tooltip' => 'Кинигэҕэ бу биики-сирэйи эбии',
	'coll-bookscategory' => 'Кинигэлэр',
	'coll-clear_collection' => 'Кинигэни ыраастаа',
	'coll-clear_collection_confirm' => 'Кырдьык кинигэҕин ыраастаары гынаҕын дуо?',
	'coll-clear_collection_tooltip' => 'Кинигэттэн биики сирэйдэри сот',
	'coll-create_a_book' => 'Кинигэни айарга',
	'coll-help_collections' => 'Кинигэ туһунан ыйытыылар',
	'coll-help_collections_tooltip' => 'Кинигэ үнүстүрүмүөннэрин тустарынан',
	'coll-helppage' => 'Help:Кинигэлэр',
	'coll-load_collection' => 'Кинигэни (атын сиртэн ылан) суруттар',
	'coll-load_collection_tooltip' => 'Бу кинигэни билиҥҥи (текущай) кинигэ курдук киллэр',
	'coll-n_pages' => '$1 {{PLURAL:$1|сирэй|сирэйдээх}}',
	'coll-popup_help_text' => 'Бу функцияны араарарга "Кинигэни оҥоруу" диэн сиргэ "Кинигэни ыраастаа" тимэҕи баттаа',
	'coll-printable_version_pdf' => 'PDF-барыла',
	'coll-remove_page' => 'Кинигэттэн сирэйи сот',
	'coll-remove_page_popup' => 'Сигэнэр сирэйи кинигэттэн сот',
	'coll-remove_page_tooltip' => 'Бу биики сирэйи кинигэттэн сот',
	'coll-show_collection' => 'Кинигэни көрдөр',
	'coll-show_collection_tooltip' => 'Уларытарга маны баттаа/хачайдыырга/кинигэни сакаастыырга',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'coll-add_category' => 'Pridať kategóriu',
	'coll-add_category_popup' => 'Pridať do vašej knihy wiki stránky v odkazovanej kategórii',
	'coll-add_category_tooltip' => 'Pridať všetky stránky wiki v tejto kategórii do vašej knihy',
	'coll-add_page' => 'Pridať stránku do knihy',
	'coll-add_page_popup' => 'Pridať do vašej knihy odkazovanú wiki stránku',
	'coll-add_page_tooltip' => 'Pridať aktuálnu wiki stránku do vašej knihy',
	'coll-bookscategory' => 'Knihy',
	'coll-clear_collection' => 'Vyčistiť knihu',
	'coll-clear_collection_confirm' => 'Skutočne chcete celkom vyčistiť svoju knihu?',
	'coll-clear_collection_tooltip' => 'Odstrániť všetky stránky wiki z vašej aktuálnej knihy',
	'coll-create_a_book' => 'Vytvoriť knihu',
	'coll-help_collections' => 'Pomocník ku knihám',
	'coll-help_collections_tooltip' => 'Zobraziť pomocníka ku knižnému nástroju',
	'coll-helppage' => 'Help:Knihy',
	'coll-load_collection' => 'Načítať knihu',
	'coll-load_collection_tooltip' => 'Načítať túto knihu ako vašu aktuálnu knihu',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránok}}',
	'coll-popup_help_text' => 'Ak chcete deaktivovať túto vlastnosť, kliknite na „{{int:coll-clear_collection}}“ v poli „{{int:coll-create_a_book}}“',
	'coll-printable_version_pdf' => 'PDF verzia',
	'coll-remove_page' => 'Odstrániť stránku z knihy',
	'coll-remove_page_popup' => 'Odstrániť z vašej knihy odkazovanú wiki stránku',
	'coll-remove_page_tooltip' => 'Odstrániť aktuálnu wiki stránku z vašej knihy',
	'coll-show_collection' => 'Zobraziť knihu',
	'coll-show_collection_tooltip' => 'Kliknutím môžete upraviť/stiahnuť/objednať knihu',
);

/** Slovenian (Slovenščina)
 * @author Smihael
 */
$messages['sl'] = array(
	'coll-add_category' => 'Dodaj kategorijo',
	'coll-add_page' => 'Dodaj wiki-stran',
	'coll-bookscategory' => 'Knjige',
	'coll-clear_collection' => 'Zbriši knjigo',
	'coll-clear_collection_confirm' => 'Ali res želite popolnoma izbrisati vašo knjigo?',
	'coll-create_a_book' => 'Ustvari e-knjigo',
	'coll-help_collections' => 'Pomoč za knjige',
	'coll-helppage' => 'Help:Knjige',
	'coll-load_collection' => 'Naloži knjige',
	'coll-n_pages' => '$1 {{PLURAL:$1|stran|strani|strani|strani|strani}}',
	'coll-printable_version_pdf' => 'Različica PDF',
	'coll-remove_page' => 'Odstrani wiki-stran',
	'coll-show_collection' => 'Prikaži knjige',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Nikola Smolenski
 * @author Јованвб
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'coll-add_category' => 'Додај категорију',
	'coll-add_category_popup' => 'Додајте чланке из приложене категорије у Вашу књигу',
	'coll-add_category_tooltip' => 'Додаје све вики странице у овој категорији у вашу књигу',
	'coll-add_page' => 'Додај чланак у књигу',
	'coll-add_page_popup' => 'Додајте приложени чланак у Вашу књигу',
	'coll-add_page_tooltip' => 'Додаје тренутну вики страницу вашој књизи',
	'coll-bookscategory' => 'Књиге',
	'coll-clear_collection' => 'Очисти књигу',
	'coll-clear_collection_confirm' => 'Да ли заиста желите да потпуно очистите своју књигу?',
	'coll-clear_collection_tooltip' => 'Уклања све вики странице из ваше тренутне књиге',
	'coll-create_a_book' => 'Направи књигу',
	'coll-help_collections' => 'Помоћ о књигама',
	'coll-help_collections_tooltip' => 'Приказује помоћ алатке за књиге',
	'coll-helppage' => 'Help:Књиге',
	'coll-load_collection' => 'Учитај књигу',
	'coll-load_collection_tooltip' => 'Учитава ову књигу као вашу тренутну књигу',
	'coll-n_pages' => '{{PLURAL:$1|једна страна|$1 стране|$1 страна}}',
	'coll-printable_version_pdf' => 'PDF верзија',
	'coll-remove_page' => 'Уклони чланак из књиге',
	'coll-remove_page_popup' => 'Избришите приложени чланак из своје књиге',
	'coll-remove_page_tooltip' => 'Уклања тренутну вики страницу из ваше књиге',
	'coll-show_collection' => 'Прикажи књигу',
	'coll-show_collection_tooltip' => 'Кликните за измену, преузимање или наручивање своје књиге',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'coll-add_category' => 'Kategorie bietouföigje',
	'coll-add_page' => 'Siede bietouföigje',
	'coll-clear_collection' => 'Touhoopestaalenge läskje',
	'coll-create_a_book' => 'Kollektion',
	'coll-help_collections' => 'Hälpe tou Touhoopestaalengen',
	'coll-helppage' => 'Help:Touhoopestaalengen',
	'coll-load_collection' => 'Touhoopestaalenge leede',
	'coll-n_pages' => '$1 {{PLURAL:$1|Siede|Sieden}}',
	'coll-remove_page' => 'Siede wächhoalje',
	'coll-show_collection' => 'Touhoopestaalenge wiese',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'coll-add_category' => 'Nambah kategori',
	'coll-add_page' => 'Nambah kaca',
	'coll-remove_page' => 'Miceun kaca',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author M.M.S.
 * @author Micke
 * @author Najami
 */
$messages['sv'] = array(
	'coll-add_category' => 'Lägg till kategori',
	'coll-add_category_popup' => 'Lägg till wikisidor i den länkade kategorin till din bok',
	'coll-add_category_tooltip' => 'Lägg till alla wikisidor i den här kategorin till din bok',
	'coll-add_page' => 'Lägg till sida till bok',
	'coll-add_page_popup' => 'Lägg till länkade wikisidor till din bok',
	'coll-add_page_tooltip' => 'Lägg till den nuvarande wikisidan till din bok',
	'coll-bookscategory' => 'Böcker',
	'coll-clear_collection' => 'Töm bok',
	'coll-clear_collection_confirm' => 'Vill du verkligen helt tömma din bok?',
	'coll-clear_collection_tooltip' => 'Ta bort alla wikisidor från din nuvarande bok',
	'coll-create_a_book' => 'Skapa en bok',
	'coll-help_collections' => 'Hjälp för böcker',
	'coll-help_collections_tooltip' => 'Visa hjälp för bokverktyget',
	'coll-helppage' => 'Help:Böcker',
	'coll-load_collection' => 'Hämta bok',
	'coll-load_collection_tooltip' => 'Ladda den här boken som din nuvarande bok',
	'coll-n_pages' => '$1 {{PLURAL:$1|sida|sidor}}',
	'coll-popup_help_text' => 'För att avaktivera denna funktion klicka på "Töm bok" eller "Skapa en bok"-rutan',
	'coll-printable_version_pdf' => 'PDF-version',
	'coll-remove_page' => 'Ta bort sida från bok',
	'coll-remove_page_popup' => 'Ta bort länkad wikisida från din bok',
	'coll-remove_page_tooltip' => 'Ta bort den nuvarande wikisidan från din bok',
	'coll-show_collection' => 'Visa bok',
	'coll-show_collection_tooltip' => 'Klicka för att redigera/ladda ner/beställa din bok',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'coll-add_category' => 'వర్గాన్ని చేర్చు',
	'coll-add_page' => 'వికీ పేజీని చేర్చు',
	'coll-bookscategory' => 'పుస్తకాలు',
	'coll-clear_collection' => 'సేకరణని తుడిచివేయి',
	'coll-create_a_book' => 'ఓ పుస్తకాన్ని సృష్టించండి',
	'coll-help_collections' => 'పుస్తకాల సహాయం',
	'coll-helppage' => 'Help:పుస్తకాలు',
	'coll-n_pages' => '$1 {{PLURAL:$1|పేజీ|పేజీలు}}',
	'coll-printable_version_pdf' => 'PDF కూర్పు',
	'coll-remove_page' => 'వికీ పేజీని తొలగించు',
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
	'coll-add_category' => 'Илова кардани гурӯҳ',
	'coll-add_page' => 'Илова кардани вики саҳифа',
	'coll-clear_collection' => 'Тоза кардани гирдовари',
	'coll-create_a_book' => 'Эҷоди як китоб',
	'coll-help_collections' => 'Роҳнамои гирдовариҳо',
	'coll-helppage' => 'Help:Гирдовариҳо',
	'coll-load_collection' => 'Бор кардани гирдоварӣ',
	'coll-n_pages' => '$1 {{PLURAL:$1|саҳифа|саҳифаҳо}}',
	'coll-printable_version_pdf' => 'Нусхаи PDF',
	'coll-remove_page' => 'Пок кардани вики саҳифа',
	'coll-show_collection' => 'Намоиши гирдоварӣ',
);

/** Thai (ไทย)
 * @author Ans
 * @author Manop
 */
$messages['th'] = array(
	'coll-add_category' => 'เพิ่มหมวดหมู่',
	'coll-add_page' => 'เพิ่มหน้าวิกิ',
	'coll-bookscategory' => 'หนังสือ',
	'coll-create_a_book' => 'สร้างหนังสือ',
	'coll-help_collections' => 'ความช่วยเหลือในส่วนหนังสือ',
	'coll-helppage' => 'Help:หนังสือ',
	'coll-load_collection' => 'โหลดหนังสือ',
	'coll-n_pages' => '$1 หน้า',
	'coll-printable_version_pdf' => 'รุ่น PDF',
	'coll-remove_page' => 'ลบหน้าวิกิ',
	'coll-show_collection' => 'แสดงหนังสือ',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'coll-add_category' => 'Magdagdag ng kaurian',
	'coll-add_category_popup' => 'Magdagdag ng mga pahina ng wiki sa loob ng nakakawing na kaurian patungo sa aklat mo',
	'coll-add_category_tooltip' => 'Idagdag ang lahat ng mga pahina ng wiki sa loob ng kauriang ito patungo sa aklat mo',
	'coll-add_page' => 'Magdagdag ng pahinang wiki',
	'coll-add_page_popup' => 'Magdagdag na pahina ng nakakawing na wiki patungo sa aklat mo',
	'coll-add_page_tooltip' => 'Idagdag ang kasalukuyang pahina ng wiki sa aklat mo',
	'coll-bookscategory' => 'Mga aklat',
	'coll-clear_collection' => 'Hawiin ang aklat',
	'coll-clear_collection_confirm' => 'Talaga bang nais mong hawiin ng lubusan ang aklat mo?',
	'coll-clear_collection_tooltip' => 'Tanggalin ang lahat ng mga pahina ng wiki mula sa pangkasalukuyan mong aklat',
	'coll-create_a_book' => 'Lumikha ng isang aklat',
	'coll-help_collections' => 'Tulong na pang-aklat',
	'coll-help_collections_tooltip' => 'Ipakita ang pantulong hinggil sa kasangkapang pang-aklat',
	'coll-helppage' => 'Help:Mga Aklat',
	'coll-load_collection' => 'Ikarga ang aklat',
	'coll-load_collection_tooltip' => 'Ikarga ang aklat na ito bilang pangkasalukuyang aklat mo',
	'coll-n_pages' => '$1 {{PLURAL:$1|pahina|mga pahina}}',
	'coll-popup_help_text' => 'Upang huwag paganahin ang kasangkapang-katangiang ito, pindutin ang "Hawiin ang aklat" sa loob ng kahon ng "Lumikha ng isang aklat"',
	'coll-printable_version_pdf' => 'Bersyong PDF',
	'coll-remove_page' => 'Tanggalin ang pahinang wiki',
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
	'coll-add_category' => 'Kategori ekle',
	'coll-add_category_popup' => 'Bağlantılı kategorideki viki sayfalarını kitabınıza ekleyin',
	'coll-add_category_tooltip' => 'Bu kategorideki tüm viki sayfalarını koleksiyonunuza ekleyin',
	'coll-add_page' => 'Sayfayı kitaba ekle',
	'coll-add_page_popup' => 'Kitabınıza bağlantılı viki sayfası ekleyin',
	'coll-add_page_tooltip' => 'Bu sayfayı koleksiyonunuza ekleyin',
	'coll-bookscategory' => 'Koleksiyonlar',
	'coll-clear_collection' => 'Kitabı temizle',
	'coll-clear_collection_confirm' => 'Koleksiyonunuzu tamamen temizlemeyi istiyor musunuz?',
	'coll-clear_collection_tooltip' => 'Mevcut koleksiyonunuzdaki tüm viki sayfalarını silin',
	'coll-create_a_book' => 'Bir kitap oluştur',
	'coll-help_collections' => 'Koleksiyon yardımı',
	'coll-help_collections_tooltip' => 'Koleksiyon aracı hakkında yardım',
	'coll-helppage' => 'Help:Koleksiyonlar',
	'coll-load_collection' => 'Koleksiyonu yükle',
	'coll-load_collection_tooltip' => 'Bu koleksiyonu varsayılan koleksiyonunuz olarak yükleyin',
	'coll-n_pages' => '$1 {{PLURAL:$1|sayfa|sayfa}}',
	'coll-popup_help_text' => 'Bu özelliği devre dışı bırakmak için "Bir kitap oluştur" kutusundaki "Kitabı temizle"ye tıklayın',
	'coll-printable_version_pdf' => 'PDF sürümü',
	'coll-remove_page' => 'Sayfayı kitaptan çıkar',
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
	'coll-add_category' => 'Додати категорію',
	'coll-add_page' => 'Додати сторінку до книги',
	'coll-bookscategory' => 'Книги',
	'coll-clear_collection' => 'Очистити книгу',
	'coll-clear_collection_confirm' => 'Ви дійсно бажаєте повністю очистити вашу книгу?',
	'coll-create_a_book' => 'Створення книги',
	'coll-help_collections' => 'Довідка про книги',
	'coll-helppage' => 'Help:Книги',
	'coll-load_collection' => 'Завантажити книгу',
	'coll-n_pages' => '$1 {{PLURAL:$1|сторінка|сторінки|сторінок}}',
	'coll-printable_version_pdf' => 'PDF-версія',
	'coll-remove_page' => 'Вилучити сторінку з книги',
	'coll-show_collection' => 'Показати книгу',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'coll-add_category' => 'Zonta na categoria',
	'coll-add_category_popup' => 'Zonta al to libro le pagine in te le categorie riciamà',
	'coll-add_category_tooltip' => 'Zonta tute le pagine wiki de sta categoria al to libro',
	'coll-add_page' => 'Zonta pàxena al libro',
	'coll-add_page_popup' => 'Zonta al to libro la pagina wiki riciamà',
	'coll-add_page_tooltip' => 'Zonta sta pagina wiki al to libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Desvòda libro',
	'coll-clear_collection_confirm' => 'Vuto dalbòn netar conpletamente el to libro?',
	'coll-clear_collection_tooltip' => 'Cava tute le pagine wiki dal to libro atuale',
	'coll-create_a_book' => 'Crea un libro',
	'coll-help_collections' => 'Ajuto sui libri',
	'coll-help_collections_tooltip' => 'Guida del strumento Libro',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Carga libro',
	'coll-load_collection_tooltip' => 'Carga sto libro come el to libro atuale',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàxena|pàxene}}',
	'coll-popup_help_text' => 'Par disativar sta funsion struca "Desvòda libro" nel menù "Crea un libro"',
	'coll-printable_version_pdf' => 'Versiòn PDF',
	'coll-remove_page' => 'Cava pàxena dal libro',
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
	'coll-add_category' => 'Thêm thể loại',
	'coll-add_category_popup' => 'Thêm vào sách những trang wiki thuộc thể loại được liên kết',
	'coll-add_category_tooltip' => 'Thêm vào sách các trang wiki thuộc thể loại được liên kết',
	'coll-add_page' => 'Thêm trang vào sách',
	'coll-add_page_popup' => 'Thêm trang wiki vào sách',
	'coll-add_page_tooltip' => 'Thêm trang wiki này vào sách',
	'coll-bookscategory' => 'Sách vở',
	'coll-clear_collection' => 'Xóa sách',
	'coll-clear_collection_confirm' => 'Bạn có chắc muốn xóa hẳn sách của bạn?',
	'coll-clear_collection_tooltip' => 'Dời các trang wiki khỏi sách này',
	'coll-create_a_book' => 'Tạo một quyển sách',
	'coll-help_collections' => 'Trợ giúp sách',
	'coll-help_collections_tooltip' => 'Xem trợ giúp về công cụ sách',
	'coll-helppage' => 'Help:Sách vở',
	'coll-load_collection' => 'Mở sách',
	'coll-load_collection_tooltip' => 'Đặt sách này làm sách hiện hành',
	'coll-n_pages' => '$1 {{PLURAL:$1|trang|trang}}',
	'coll-popup_help_text' => 'Để vô hiệu hóa tính năng này, hãy nhấn “Xóa sách” trong hộp “Tạo một quyển sách”',
	'coll-printable_version_pdf' => 'Bản PDF',
	'coll-remove_page' => 'Xóa trang khỏi sách',
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
	'coll-add_category' => 'Läükön kladi',
	'coll-add_page' => 'Läükön padi vüke',
	'coll-bookscategory' => 'Buks',
	'coll-clear_collection' => 'Vagükön buki',
	'coll-clear_collection_confirm' => 'Vilol-li jenöfo vagükön buki olik lölöfiko?',
	'coll-create_a_book' => 'Jafön buki',
	'coll-help_collections' => 'Yuf tefü buks',
	'coll-helppage' => 'Help:Buks',
	'coll-load_collection' => 'Lodön buki',
	'coll-n_pages' => '{{PLURAL:$1|pad|pads}} $1',
	'coll-printable_version_pdf' => 'fomam-PDF',
	'coll-remove_page' => 'Moükön padi se vük',
	'coll-show_collection' => 'Jonön buki',
);

/** Yue (粵語) */
$messages['yue'] = array(
	'coll-add_category' => '加分類',
	'coll-add_page' => '加入wiki版',
	'coll-bookscategory' => '書',
	'coll-clear_collection' => '清書',
	'coll-clear_collection_confirm' => '你係咪真係想完全噉清晒你本書？',
	'coll-create_a_book' => '整一本書',
	'coll-help_collections' => '書幫手',
	'coll-helppage' => 'Help:書',
	'coll-load_collection' => '載入書',
	'coll-n_pages' => '$1版',
	'coll-printable_version_pdf' => 'PDF版',
	'coll-remove_page' => '拎走wiki版',
	'coll-show_collection' => '顯示書',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Bencmq
 * @author Wmr89502270
 */
$messages['zh-hans'] = array(
	'coll-add_category' => '添加分类',
	'coll-add_category_popup' => '将链接指向的分类中所有维基页面加入您的图书中',
	'coll-add_category_tooltip' => '将这个分类中的所有维基页面加入您的图书中',
	'coll-add_page' => '添加页面',
	'coll-add_page_popup' => '将链接指向的维基页面加入您的图书中',
	'coll-add_page_tooltip' => '将当前的维基页面加入您的图书中',
	'coll-bookscategory' => '图书',
	'coll-clear_collection' => '清除记录',
	'coll-clear_collection_confirm' => '真的要清除？',
	'coll-clear_collection_tooltip' => '从您当前的图书中移除所有维基页面',
	'coll-create_a_book' => '创建图书',
	'coll-help_collections' => '图书帮助',
	'coll-help_collections_tooltip' => '显示图书工具帮助',
	'coll-helppage' => 'Help:图书',
	'coll-load_collection' => '载入图书',
	'coll-load_collection_tooltip' => '将这本图书加载为您当前的图书',
	'coll-n_pages' => '$1个页面',
	'coll-popup_help_text' => '要禁止这项功能，请点击“创建图书”框中的“清除记录”',
	'coll-printable_version_pdf' => 'PDF 版本',
	'coll-remove_page' => '移除维基页面',
	'coll-remove_page_popup' => '将链接指向的维基页面从您的图书中移除',
	'coll-remove_page_tooltip' => '将当前维基页面从您的图书中移除',
	'coll-show_collection' => '显示图书',
	'coll-show_collection_tooltip' => '点击此处编辑、下载或订购图书',
);

