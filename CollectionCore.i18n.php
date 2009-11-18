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
	'coll-print_export'             => 'Print/export',
	'coll-create_a_book'            => 'Create a book',
	'coll-create_a_book_tooltip'    => 'Create a book or page collection',
	'coll-book_creator'             => 'Book creator',
	'coll-download_as'              => 'Download as $1',
	'coll-download_as_tooltip'      => 'Download a $1 version of this wiki page',
	'coll-book_creator_box_style'   => 'text-align: left; margin: 10px 0; padding: 5px 10px; border: 1px solid #aaa; background-color: #f9f9ff;',
	'coll-disable'                  => 'disable',
	'coll-book_creator_disable'     => 'Disable book creator',
	'coll-book_creator_disable_tooltip' => 'Stop using the book creator',
	'coll-add_category'             => 'Add this category to your book',
	'coll-add_category_popup'       => 'Add wiki pages in linked category to your book',
	'coll-add_category_tooltip'     => 'Add all wiki pages in this category to your book',
	'coll-add_this_page'            => 'Add this page to your book',
	'coll-add_page_popup'           => 'Add linked wiki page to your book',
	'coll-add_page_tooltip'         => 'Add the current wiki page to your book',
	'coll-bookscategory'            => 'Books',
	'coll-clear_collection'         => 'Clear book',
	'coll-clear_collection_confirm' => 'Do you really want to completely clear your book?',
	'coll-clear_collection_tooltip' => 'Remove all wiki pages from your current book',
	'coll-help'                     => 'Help',
	'coll-help_tooltip'             => 'Show help about creating books',
	'coll-helppage'                 => 'Help:Books',
	'coll-load_collection'          => 'Load book',
	'coll-load_collection_tooltip'  => 'Load this book as your current book',
	'coll-n_pages'                  => '$1 {{PLURAL:$1|page|pages}}',
	'coll-printable_version_pdf'    => 'PDF version',
	'coll-remove_this_page'         => 'Remove this page from your book',
	'coll-remove_page_popup'        => 'Remove linked wiki page from your book',
	'coll-remove_page_tooltip'      => 'Remove the current wiki page from your book',
	'coll-show_collection'          => 'Show book',
	'coll-show_collection_tooltip'  => 'Click to edit/download/order your book',
	'coll-not_addable'              => 'This page cannot be added',
	'coll-make_suggestions'         => 'Suggest pages',
	'coll-make_suggestions_tooltip' => 'Show suggestions based on the pages in your book',
	'coll-suggest_enabled'          => '1',
	'coll-suggest_empty'            => 'empty',
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
	'coll-print_export' => 'Caption of a frame in the toolbar (on the left-hand side of the screen), similar to {{msg-mw|toolbox}} or {{msg-mw|otherlanguages}}.',
	'coll-create_a_book' => '{{Identical|Books}}',
	'coll-download_as' => '{{Identical|Download}}',
	'coll-download_as_tooltip' => '* $1 is some file format(s)',
	'coll-bookscategory' => '{{Identical|Book}}',
	'coll-clear_collection' => '',
	'coll-clear_collection_confirm' => 'Message box when pressed "Clear book".',
	'coll-help' => '{{Identical|Help}}',
	'coll-helppage' => "Used as a link to the help page for this extension's functionality on a wiki. '''Do not translate ''Help:''.'''
{{Identical|Book}}",
	'coll-printable_version_pdf' => 'Caption of a link in the [[mw:Help:Navigation#Toolbox|toolbox]] leading to the PDF version of the current page',
	'coll-suggest_empty' => '{{Identical|Empty}}',
);

/** Afrikaans (Afrikaans)
 * @author Anrie
 * @author Arnobarnard
 * @author Naudefj
 */
$messages['af'] = array(
	'coll-print_export' => 'Druk/eksporteer',
	'coll-create_a_book' => "Skep 'n boek",
	'coll-download_as' => 'Laai af as $1',
	'coll-disable' => 'deaktiveer',
	'coll-add_category' => 'Voeg die kategorie by jou boek',
	'coll-bookscategory' => 'Boeke',
	'coll-clear_collection' => 'Maak boek leeg',
	'coll-help' => 'Help',
	'coll-helppage' => 'Help:Boeke',
	'coll-load_collection' => 'Laai boek',
	'coll-n_pages' => '$1 {{PLURAL:$1|bladsy|bladsye}}',
	'coll-printable_version_pdf' => 'PDF-weergawe',
	'coll-remove_this_page' => 'Verwyder hierdie bladsy uit u boek',
	'coll-show_collection' => 'Wys boek',
	'coll-suggest_empty' => 'leegmaak',
);

/** Arabic (العربية)
 * @author Antime
 * @author Ciphers
 * @author Meno25
 * @author OsamaK
 * @author Prof.Sherif
 */
$messages['ar'] = array(
	'coll-print_export' => 'اطبع/صدّر',
	'coll-create_a_book' => 'إنشاء كتاب',
	'coll-create_a_book_tooltip' => 'أنشئ كتابًا أو صفحة مجموعة',
	'coll-book_creator' => 'منشئ الكتب',
	'coll-download_as' => 'تحميل ك$1',
	'coll-download_as_tooltip' => 'نزّل نسخة $1 من صفحة الويكي هذه.',
	'coll-disable' => 'عطّل',
	'coll-book_creator_disable' => 'عطّل منشئ الكتب',
	'coll-book_creator_disable_tooltip' => 'أوقف استخدام منشئ الكتب',
	'coll-add_category' => 'إضافة هذا التصنيف إلى كتابتك',
	'coll-add_category_popup' => 'أضف صفحات الويكي في التصنيف الموصول لكتابك',
	'coll-add_category_tooltip' => 'أضف كل صفحات الويكي في هذا التصنيف لكتابك',
	'coll-add_this_page' => 'أضف هذه الصفحة إلى كتابك',
	'coll-add_page_popup' => 'أضف صفحة الويكي الموصولة لكتابك',
	'coll-add_page_tooltip' => 'أضف صفحة الويكي الحالية إلى كتابك',
	'coll-bookscategory' => 'كتب',
	'coll-clear_collection' => 'إفراغ الكتاب',
	'coll-clear_collection_confirm' => 'هل تريد حقا إفراغ كتابك بالكامل؟',
	'coll-clear_collection_tooltip' => 'أزل كل صفحات الويكي من كتابك الحالي',
	'coll-help' => 'مساعدة',
	'coll-help_tooltip' => 'أظهر مساعدة عن كيفية إنشاء الكتب',
	'coll-helppage' => 'Help:كتب',
	'coll-load_collection' => 'تحميل الكتاب',
	'coll-load_collection_tooltip' => 'حمل هذا الكتاب ككتابك الحالي',
	'coll-n_pages' => '{{PLURAL:$1||صفحة|صفحتان|$1 صفحات|$1 صفحة}}',
	'coll-printable_version_pdf' => 'نسخة PDF',
	'coll-remove_this_page' => 'أزل هذه الصفحة من كتابك',
	'coll-remove_page_popup' => 'أزل صفحة الويكي الموصولة من كتابك',
	'coll-remove_page_tooltip' => 'أزل صفحة الويكي الحالية من كتابك',
	'coll-show_collection' => 'عرض الكتاب',
	'coll-show_collection_tooltip' => 'اضغط لتعديل/تنزيل/طلب كتابك',
	'coll-not_addable' => 'لا يمكن إضافة هذه الصفحة',
	'coll-make_suggestions' => 'اقترح صفحات',
	'coll-make_suggestions_tooltip' => 'أظهر التعديلات بناءً على صفحات كتابك',
	'coll-suggest_empty' => 'فارغ',
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
	'coll-print_export' => 'Друк/экспарт',
	'coll-create_a_book' => 'Стварыць кнігу',
	'coll-create_a_book_tooltip' => 'Стварыць кнігу альбо калекцыю артыкулаў',
	'coll-book_creator' => 'Майстар стварэньня кнігі',
	'coll-download_as' => 'Загрузіць як $1',
	'coll-download_as_tooltip' => 'Загрузіць вэрсію $1 гэтай вікі-старонкі',
	'coll-disable' => 'выключыць',
	'coll-book_creator_disable' => 'Выключыць майстра стварэньня кнігі',
	'coll-book_creator_disable_tooltip' => 'Спыніць выкарыстаньне майстра стварэньня кнігі',
	'coll-add_category' => 'Дадаць гэтую катэгорыю ў Вашую кнігу',
	'coll-add_category_popup' => 'Дадаць старонкі са зьвязанай катэгорыі ў Вашу кнігу',
	'coll-add_category_tooltip' => 'Дадаць усе старонкі з гэтай катэгорыі ў Вашую кнігу',
	'coll-add_this_page' => 'Дадаць гэтую старонку ў Вашую кнігу',
	'coll-add_page_popup' => 'Дадаць зьвязаную старонку да Вашай кнігі',
	'coll-add_page_tooltip' => 'Дадаць цяперашнюю вікі-старонку ў Вашую кнігу',
	'coll-bookscategory' => 'Кнігі',
	'coll-clear_collection' => 'Ачысьціць кнігу',
	'coll-clear_collection_confirm' => 'Вы сапраўды жадаеце поўнасьцю ачысьціць Вашую кнігу?',
	'coll-clear_collection_tooltip' => 'Выдаліць усе старонкі з Вашай цяперашняй кнігі',
	'coll-help' => 'Дапамога',
	'coll-help_tooltip' => 'Паказаць дапамогу па стварэньню кніг',
	'coll-helppage' => 'Help:Кнігі',
	'coll-load_collection' => 'Загрузіць кнігу',
	'coll-load_collection_tooltip' => 'Загрузіць гэтую кнігу як Вашую цяперашнюю кнігу',
	'coll-n_pages' => '$1 {{PLURAL:$1|старонка|старонкі|старонак}}',
	'coll-printable_version_pdf' => 'PDF-вэрсія',
	'coll-remove_this_page' => 'Выдаліць гэтую старонку з Вашай кнігі',
	'coll-remove_page_popup' => 'Выдаліць зьвязаную старонку з Вашай кнігі',
	'coll-remove_page_tooltip' => 'Выдаліць цяперашнюю вікі-старонку з Вашай кнігі',
	'coll-show_collection' => 'Паказаць кнігу',
	'coll-show_collection_tooltip' => 'Націсьніце для рэдагаваньня/загрузкі/заказу Вашай кнігі',
	'coll-not_addable' => 'Гэтая старонка ня можа быць дададзеная',
	'coll-make_suggestions' => 'Прапанаваць старонкі',
	'coll-make_suggestions_tooltip' => 'Паказаць прапановы заснаваныя на старонках у Вашай кнізе',
	'coll-suggest_empty' => 'пуста',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'coll-print_export' => 'Отпечатване/изнасяне',
	'coll-download_as' => 'Изтегляне като $1',
	'coll-add_category' => 'Добавяне на категория',
	'coll-help' => 'Помощ',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страници}}',
	'coll-printable_version_pdf' => 'PDF версия',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Jayantanth
 */
$messages['bn'] = array(
	'coll-print_export' => 'মুদ্রণ/এক্সপোর্ট',
	'coll-create_a_book' => 'বই তৈরি করো',
	'coll-create_a_book_tooltip' => 'পাতার সংকলন বা বই তৈরি করো',
	'coll-book_creator' => 'বই প্রস্তুতকারক',
	'coll-download_as' => '$1 ডাউনলোড',
	'coll-download_as_tooltip' => 'এই উইকি পাতার $1 সংস্করণটি ডাউনলোড করো',
	'coll-disable' => 'নিস্ক্রিয়',
	'coll-book_creator_disable' => 'বই প্রস্তুতকারক নিস্ক্রিয় করো',
	'coll-book_creator_disable_tooltip' => 'বই প্রস্তুতকারক ব্যবহার বন্ধ করুন',
	'coll-add_category' => 'এই বিষয়শ্রেণীটি আপনার বইয়ে যোগ করুন',
	'coll-add_category_popup' => 'আপনার বইয়ে সংযোগকৃত বিষয়শ্রেণীর উইকি পাতাগুলো যোগ করুন',
	'coll-add_category_tooltip' => 'এই বিষয়শ্রেণীর সমস্ত উইকি পাতাগুলো আপনার বইয়ে যোগ করুন',
	'coll-add_this_page' => 'এই পাতাটি আপনার বইয়ে যোগ করুন।',
	'coll-add_page_popup' => 'সংযুক্ত উইকিপাতাগুলো আপনার বইয়ে যোগ করুন',
	'coll-add_page_tooltip' => 'বর্তমান পাতাটি আপনার বইয়ে যোগ করুন',
	'coll-bookscategory' => 'বইসমূহ',
	'coll-clear_collection' => 'বই পরিষ্কার করো',
	'coll-clear_collection_confirm' => 'আপনি কি আসলেই আপনার বই পরিষ্কার করতে চান?',
	'coll-clear_collection_tooltip' => 'বর্তমান বই থেকে সকল উইকি পাতাগুলো অপসারণ করো',
	'coll-help' => 'সহায়িকা',
	'coll-help_tooltip' => 'বই তৈরি সংক্রান্ত সহায়তা দেখাও',
	'coll-helppage' => 'Help:বই',
	'coll-load_collection' => 'বই লোড করো',
	'coll-load_collection_tooltip' => 'বর্তমান বই হিসেবে এই বইটি লোড করুন',
	'coll-n_pages' => '$1 {{PLURAL:$1|পাতাট|পাতাগুলো}}',
	'coll-printable_version_pdf' => 'পিডিএফ সংস্করণ',
	'coll-remove_this_page' => 'এই পাতাটি আপনার বই থেকে অপসারণ করুন',
	'coll-remove_page_popup' => 'আপনার বই থেকে সংযুক্ত উইকি পাতা অপসারণ করুন',
	'coll-remove_page_tooltip' => 'আপনার বই থেকে বর্তমান উইকি পাতা অপসারণ করুন',
	'coll-show_collection' => 'বই দেখাও',
	'coll-show_collection_tooltip' => 'আপনার বই সম্পাদনা/ডাউনলোড/অর্ডার দিতে ক্লিক করুন',
	'coll-not_addable' => 'এই পাতাটি যোগ করা যাবে না',
	'coll-make_suggestions' => 'পরামর্শ পাতা',
	'coll-make_suggestions_tooltip' => 'বইয়ের পাতার উপর ভিত্তি করে পরামর্শগুলো দেখাও',
	'coll-suggest_empty' => 'খালি',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'coll-print_export' => 'Moullañ / ezporzhiañ',
	'coll-create_a_book' => 'Sevel ul levr',
	'coll-create_a_book_tooltip' => 'Sevel ul levr pe un torkad pennadoù',
	'coll-book_creator' => 'Saver levrioù',
	'coll-download_as' => 'Pellgargañ evel $1',
	'coll-download_as_tooltip' => 'Pellgargañ ur stumm $1 eus ar bajenn wiki-mañ',
	'coll-disable' => 'diweredekaat',
	'coll-book_creator_disable' => 'Diweredekaat ar saver levrioù',
	'coll-book_creator_disable_tooltip' => "Paouez d'ober gant ar saver levrioù",
	'coll-add_category' => "Ouzhpennañ ar rummad-mañ d'ho levr",
	'coll-add_category_popup' => "Ouzhpennañ pajennoù wiki er rummad liammet d'ho levr",
	'coll-add_category_tooltip' => "Ouzhpennañ an holl pajennoù wiki er rummad-mañ d'ho levr",
	'coll-add_this_page' => "Ouzhpennañ ar bajenn-mañ d'ho levr",
	'coll-add_page_popup' => "Ouzhpennañ ar bajenn liammet d'ho levr",
	'coll-add_page_tooltip' => "Ouzhpennañ ar bajenn wiki-mañ d'ho levr",
	'coll-bookscategory' => 'Levrioù',
	'coll-clear_collection' => 'Goullonderiñ al levr',
	'coll-clear_collection_confirm' => "Ha sur oc'h e fell deoc'h riñsañ ho levr penn-da-benn ?",
	'coll-clear_collection_tooltip' => 'Tennañ kuit an holl bajennoù wiki eus ho levr a-vremañ',
	'coll-help' => 'Skoazell',
	'coll-help_tooltip' => 'Diskouez ar skoazell diwar-benn ar sevel levrioù',
	'coll-helppage' => 'Help:Levrioù',
	'coll-load_collection' => 'Kargañ ul levr',
	'coll-load_collection_tooltip' => 'Kargañ al levr-mañ evel ho levr a-vremañ',
	'coll-n_pages' => '$1 {{PLURAL:$1|pajenn|pajenn}}',
	'coll-printable_version_pdf' => 'Stumm PDF',
	'coll-remove_this_page' => 'Tennañ ar bajenn-mañ eus ho levr',
	'coll-remove_page_popup' => 'Tennañ ar bajenn liammet eus ho levr',
	'coll-remove_page_tooltip' => 'Tennañ ar bajenn red eus ho levr',
	'coll-show_collection' => 'Diskouez al levr',
	'coll-show_collection_tooltip' => 'Klikañ evit aozañ/pellgargañ/urzhiañ ho levr',
	'coll-not_addable' => "N'haller ket opuzhpennañ ar bajenn-mañ",
	'coll-make_suggestions' => 'Kinnig pajennoù',
	'coll-make_suggestions_tooltip' => "Diskouez ar c'hinnigoù diazezet war pajennoù ho levr",
	'coll-suggest_empty' => 'goullo',
);

/** Bosnian (Bosanski)
 * @author CERminator
 * @author Smooth O
 */
$messages['bs'] = array(
	'coll-print_export' => 'Štampaj/izvezi',
	'coll-create_a_book' => 'Napravi knjigu',
	'coll-create_a_book_tooltip' => 'Napravi knjigu ili kolekciju članaka',
	'coll-book_creator' => 'Pravljenje knjiga',
	'coll-download_as' => 'Učitaj kao $1',
	'coll-download_as_tooltip' => 'Skinite $1 verziju ove wiki stranice',
	'coll-disable' => 'isključena',
	'coll-book_creator_disable' => 'Onemogući pravljenje knjiga',
	'coll-book_creator_disable_tooltip' => 'Prestani koristiti pravljenje knjiga',
	'coll-add_category' => 'Dodaj ovu kategoriju u Vašu knjigu',
	'coll-add_category_popup' => 'Dodaj wiki stranice u povezane kategorije u Vašoj knjizi',
	'coll-add_category_tooltip' => 'Dodaj sve wiki članke iz ove kategorije u Vašu knjigu',
	'coll-add_this_page' => 'Dodajte ovu stranicu u Vašu knjigu',
	'coll-add_page_popup' => 'Dodaje povezanu wiki stranicu u Vašu knjigu',
	'coll-add_page_tooltip' => 'Dodaj trenutnu wiki stranicu u Vašu knjigu',
	'coll-bookscategory' => 'Knjige',
	'coll-clear_collection' => 'Očisti knjigu',
	'coll-clear_collection_confirm' => 'Da li zaista želite da potpuno očistite Vašu knjigu?',
	'coll-clear_collection_tooltip' => 'Ukloni sve wiki članke iz Vaše trenutne knjige',
	'coll-help' => 'Pomoć',
	'coll-help_tooltip' => 'Prikaži pomoć za pravljenje knjiga',
	'coll-helppage' => 'Help:Knjige',
	'coll-load_collection' => 'Učitaj knjigu',
	'coll-load_collection_tooltip' => 'Učitaj ovu knjigu kao Vašu trenutnu knjigu',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-printable_version_pdf' => 'PDF verzija',
	'coll-remove_this_page' => 'Ukloni ovu stranicu iz Vaše knjige',
	'coll-remove_page_popup' => 'Ukloni povezanu wiki stranicu iz Vaše knjige',
	'coll-remove_page_tooltip' => 'Ukloni trenutnu wiki stranicu iz Vaše knjige',
	'coll-show_collection' => 'Prikaži knjigu',
	'coll-show_collection_tooltip' => 'Kliknite za uređivanje/download/naručivanje Vaše knjige',
	'coll-not_addable' => 'Ova stranica se ne može dodati',
	'coll-make_suggestions' => 'Predloži stranice',
	'coll-make_suggestions_tooltip' => 'Prikaži prijedloge zasnovane na stranicama iz Vaše knjige',
	'coll-suggest_empty' => 'prazno',
);

/** Catalan (Català)
 * @author Aleator
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Vriullop
 */
$messages['ca'] = array(
	'coll-print_export' => 'Imprimeix/exporta',
	'coll-create_a_book' => 'Crea un llibre',
	'coll-create_a_book_tooltip' => 'Crea un llibre o una col·lecció de pàgines',
	'coll-download_as' => 'Descarrega com $1',
	'coll-download_as_tooltip' => "Descarrega una versió $1 d'aquesta pàgina wiki",
	'coll-disable' => 'Inhabilita',
	'coll-add_category' => 'Afegiu aquesta categoria al vostre llibre',
	'coll-add_category_popup' => 'Afegeix al llibre les pàgines de la categoria enllaçada',
	'coll-add_category_tooltip' => "Afegeix al llibre totes les pàgines d'aquesta categoria",
	'coll-add_this_page' => 'Afegiu aquesta pàgina al vostre llibre',
	'coll-add_page_popup' => 'Afegeix la pàgina wiki enllaçada al llibre',
	'coll-add_page_tooltip' => 'Afegeix la pàgina wiki actual al llibre',
	'coll-bookscategory' => 'Llibres',
	'coll-clear_collection' => 'Buida llibre',
	'coll-clear_collection_confirm' => 'Esteu segurs de buidar completament el vostre llibre?',
	'coll-clear_collection_tooltip' => 'Esborra totes les pàgines wiki del llibre actual',
	'coll-help' => 'Ajuda',
	'coll-help_tooltip' => "Mostra l'ajuda sobre la creació de llibres",
	'coll-helppage' => 'Help:Llibres',
	'coll-load_collection' => 'Carrega llibre',
	'coll-load_collection_tooltip' => 'Carrega aquest llibre com el vostre llibre actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàgina|pàgines}}',
	'coll-printable_version_pdf' => 'Versió en PDF',
	'coll-remove_this_page' => 'Eliminau aquesta pàgina del vostre llibre',
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
	'coll-print_export' => 'Tisk/export',
	'coll-create_a_book' => 'Vytvořit knihu',
	'coll-create_a_book_tooltip' => 'Vytvoření knihy nebo kolekce stránek',
	'coll-book_creator' => 'Editor knih',
	'coll-download_as' => 'Stáhnout jako $1',
	'coll-download_as_tooltip' => 'Stáhnout tuto stránku wiki jako $1',
	'coll-disable' => 'vypnout',
	'coll-book_creator_disable' => 'Vypnout editor knih',
	'coll-book_creator_disable_tooltip' => 'Přestane s používáním editoru knih',
	'coll-add_category' => 'Přidat tuto kategorii do vaší knihy',
	'coll-add_category_popup' => 'Přidat stránky wiki v odkazované kategorii do vaší knihy',
	'coll-add_category_tooltip' => 'Přidá všechny stránky wiki v této kategorii do vaší knihy',
	'coll-add_this_page' => 'Přidat tuto stránku do vaší knihy',
	'coll-add_page_popup' => 'Přidat odkazovanou stránku wiki do vaší knihy',
	'coll-add_page_tooltip' => 'Přidá aktuální stránku wiki do vaší knihy',
	'coll-bookscategory' => 'Knihy',
	'coll-clear_collection' => 'Vyčistit knihu',
	'coll-clear_collection_confirm' => 'Skutečně chcete úplně vyčistit tuto knihu?',
	'coll-clear_collection_tooltip' => 'Odstraní z aktuální knihy všechny stránky wiki',
	'coll-help' => 'Nápověda',
	'coll-help_tooltip' => 'Zobrazit nápovědu k tvorbě knih',
	'coll-helppage' => 'Help:Knihy',
	'coll-load_collection' => 'Načíst knihu',
	'coll-load_collection_tooltip' => 'Zvolí tuto knihu jako aktuální',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránek}}',
	'coll-printable_version_pdf' => 'PDF verze',
	'coll-remove_this_page' => 'Odstranit tuto stránku z vaší knihy',
	'coll-remove_page_popup' => 'Odebrat odkazovanou stránku wiki z vaší knihy',
	'coll-remove_page_tooltip' => 'Odstraní aktuální stránku wiki z vaší knihy',
	'coll-show_collection' => 'Zobrazit knihu',
	'coll-show_collection_tooltip' => 'Kliknutím si můžete knihu upravit/stáhnout/objednat',
	'coll-not_addable' => 'Tuto stránku nelze přidat',
	'coll-make_suggestions' => 'Doporučit stránky',
	'coll-make_suggestions_tooltip' => 'Zobrazí návrhy podle stránek přidaných do vaší knihy',
	'coll-suggest_empty' => 'prázdné',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'coll-print_export' => 'Argraffu/allforio',
	'coll-create_a_book' => 'Llunio llyfr',
	'coll-create_a_book_tooltip' => 'Llunio llyfr neu gasgliad o dudalennau',
	'coll-book_creator' => 'Lluniwr llyfrau',
	'coll-download_as' => 'Islwytho ar ffurf $1',
	'coll-download_as_tooltip' => "Islwytho fersiwn $1 o'r dudalen wici hon",
	'coll-disable' => 'anablu',
	'coll-book_creator_disable' => "Analluogi'r lluniwr llyfrau",
	'coll-book_creator_disable_tooltip' => "Rhoi'r gorau i ddefnyddio'r lluniwr llyfrau",
	'coll-add_category' => "Ychwanegu'r holl dudalennau yn y categori hwn at eich llyfr",
	'coll-add_category_popup' => "Ychwanegu'r tudalennau wici yn y categori cysylltiedig at eich llyfr",
	'coll-add_category_tooltip' => 'Ychwanegu holl dudalennau wici y categori hwn at eich llyfr',
	'coll-add_this_page' => "Ychwanegu'r dudalen hon at eich llyfr",
	'coll-add_page_popup' => "Ychwanegu'r dudalen wici cysylltiedig at eich llyfr",
	'coll-add_page_tooltip' => "Ychwanegu'r dudalen wici presennol at eich llyfr",
	'coll-bookscategory' => 'Llyfrau',
	'coll-clear_collection' => "Clirio'r llyfr",
	'coll-clear_collection_confirm' => "Ydych chi wir am glirio'ch llyfr yn llwyr?",
	'coll-clear_collection_tooltip' => "Clirio'r holl dudalennau wici o'ch llyfr presennol",
	'coll-help' => 'Cymorth',
	'coll-help_tooltip' => 'Dangos y cymorth am lunio llyfr',
	'coll-helppage' => 'Help:Llyfrau',
	'coll-load_collection' => 'Llwytho llyfr',
	'coll-load_collection_tooltip' => "Llwytho'r llyfr hwn fel eich llyfr cyfredol",
	'coll-n_pages' => '$1 {{PLURAL:$1|tudalen|dudalen|dudalen|tudalen|thudalen|o dudalennau}}',
	'coll-printable_version_pdf' => 'Fersiwn PDF',
	'coll-remove_this_page' => "Tynnu'r dudalen hon o'ch llyfr",
	'coll-remove_page_popup' => "Tynnu'r dudalen wici cysylltiedig o'ch llyfr",
	'coll-remove_page_tooltip' => "Tynnu'r dudalen wici presennol o'ch llyfr",
	'coll-show_collection' => 'Dangos y llyfr',
	'coll-show_collection_tooltip' => 'Cliciwch er mwyn golygu/islwytho/archebu eich llyfr',
	'coll-not_addable' => "Ni ellir ychwanegu'r dudalen hon",
	'coll-make_suggestions' => 'Awgrymu tudalennau',
	'coll-make_suggestions_tooltip' => 'Dangos awgrymiadau wedi eu seilio ar y tudalennau yn eich llyfr',
	'coll-suggest_empty' => 'gwag',
);

/** Danish (Dansk)
 * @author Byrial
 */
$messages['da'] = array(
	'coll-print_export' => 'Udskriv/eksportér',
	'coll-create_a_book' => 'Lav en bog',
	'coll-create_a_book_tooltip' => 'Lav en bog eller samling af sider',
	'coll-download_as' => 'Download som $1',
	'coll-download_as_tooltip' => 'Download en $1-version af denne wikiside',
	'coll-disable' => 'slå fra',
	'coll-add_category' => 'Tilføj denne kategori til din bog',
	'coll-add_category_popup' => 'Tilføj wikisider i kategorien til din bog',
	'coll-add_category_tooltip' => 'Tilføj alle wikisider i kategorien til din bog',
	'coll-add_this_page' => 'Tilføj denne side til din bog',
	'coll-add_page_popup' => 'Tilføj wikisiden til din bog',
	'coll-add_page_tooltip' => 'Tilføj den nuværende wikiside til din bog',
	'coll-bookscategory' => 'Bøger',
	'coll-clear_collection' => 'Tøm bogen',
	'coll-clear_collection_confirm' => 'Vil du virkelig tømme din bog helt?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider fra din nuværende bog',
	'coll-help' => 'Hjælp',
	'coll-help_tooltip' => 'Få hjælp til at lave bøger',
	'coll-helppage' => 'Help:Bøger',
	'coll-load_collection' => 'Hent bog',
	'coll-load_collection_tooltip' => 'Hent denne bog som din nuværende bog',
	'coll-n_pages' => '$1 {{PLURAL:$1|side|sider}}',
	'coll-printable_version_pdf' => 'PDF-version',
	'coll-remove_this_page' => 'Fjern denne side fra din bog',
	'coll-remove_page_popup' => 'Fjern wikisiden fra din bog',
	'coll-remove_page_tooltip' => 'Fjern den nuværende wikiside fra din bog',
	'coll-show_collection' => 'Vis bog',
	'coll-show_collection_tooltip' => 'Klik for at redigere, downloade eller bestille din bog',
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
	'coll-book_creator' => 'Buchgenerator',
	'coll-download_as' => 'Als $1 herunterladen',
	'coll-download_as_tooltip' => 'Eine $1-Version dieser Wikiseite herunterladen',
	'coll-disable' => 'deaktivieren',
	'coll-book_creator_disable' => 'Buchgenerator deaktivieren',
	'coll-book_creator_disable_tooltip' => 'Buchgenerator nicht verwenden',
	'coll-add_category' => 'Alle Seiten aus dieser Kategorie deinem Buch hinzufügen',
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
	'coll-not_addable' => 'Diese Seite kann nicht hinzugefügt werden',
	'coll-make_suggestions' => 'Seiten vorschlagen',
	'coll-make_suggestions_tooltip' => 'Vorschläge basierend auf den Seiten in deinem Buch anzeigen',
	'coll-suggest_empty' => 'leer',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Dst
 * @author MichaelFrey
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'coll-add_category' => 'Alle Seiten aus dieser Kategorie Ihrem Buch hinzufügen',
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
	'coll-make_suggestions_tooltip' => 'Vorschläge basierend auf den Seiten in Ihrem Buch anzeigen',
);

/** Zazaki (Zazaki)
 * @author Xoser
 */
$messages['diq'] = array(
	'coll-print_export' => 'Çap bike/export bike',
	'coll-create_a_book' => 'Yew kitab biviraze',
	'coll-create_a_book_tooltip' => 'Yew koleksiyonê pelî ya zi kitab biviraze',
	'coll-book_creator' => 'Kitab viraştoğ',
	'coll-download_as' => 'Ze $1 bar bike',
	'coll-download_as_tooltip' => 'Yew versiyonê $1 yê ena pel bar bike',
	'coll-disable' => 'bikefilne',
	'coll-book_creator_disable' => 'Viraştoğ kitabî bikefilne',
	'coll-book_creator_disable_tooltip' => 'Viraştoğ kitabî kefilne',
	'coll-add_category' => 'Ena kategorî kitabê xo rê de bike',
	'coll-add_category_popup' => 'Pelê wîkîyî kategorî de link biyo înan kitabê xo rê de bike',
	'coll-add_category_tooltip' => 'Pelê wîkîyî ena kategorî de înan kitabê xo rê de bike',
	'coll-add_this_page' => 'Ena pelê kitabê xo rê de bike',
	'coll-add_page_popup' => 'Pelê wîkî yê lînk biya kitabê xo rê de bike',
	'coll-add_page_tooltip' => 'Pelê wîkî yê penî kitabê xo rê de bike',
	'coll-bookscategory' => 'Kitaban',
	'coll-clear_collection' => 'Kitaban wedarne',
	'coll-clear_collection_confirm' => 'Ti raştî kitabê xo wazeno wedarne?',
	'coll-clear_collection_tooltip' => 'Wîkîyanê hemî kitabê xo de wedarne',
	'coll-help' => 'Yardim',
	'coll-help_tooltip' => 'Ser bar kerdişê kitabî rê yardim bimucne',
	'coll-helppage' => 'Help:Kitaban',
	'coll-load_collection' => 'Kitab bar bike',
	'coll-load_collection_tooltip' => 'Ena kitab bar bike',
	'coll-n_pages' => '$1 {{PLURAL:$1|pel|pelan}}',
	'coll-printable_version_pdf' => 'Versiyonê PDFî',
	'coll-remove_this_page' => 'Ena pelê kitabê xo de wedarne',
	'coll-remove_page_popup' => 'Pelê wîkî yê link biyo kitabê xo de ey wedarne',
	'coll-remove_page_tooltip' => 'Pelê wîkî yê penî ke kitabê tu de ey wedarne',
	'coll-show_collection' => 'Kitab bimucne',
	'coll-show_collection_tooltip' => 'Klik bike ke kitabê xo bivurne/bar bike/sipariş bike',
	'coll-not_addable' => 'Ena pel nişkeno de biyo',
	'coll-make_suggestions' => 'Pelan ke tevsiye biyê',
	'coll-make_suggestions_tooltip' => 'Ser pelan ke zerre kitabê tu de înan ra tevsiye bike',
	'coll-suggest_empty' => 'veng',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'coll-print_export' => 'Šišćaś/eksportěrowaś',
	'coll-create_a_book' => 'Knigły napóraś',
	'coll-create_a_book_tooltip' => 'Knigły abo zběrku nastawkow napóraś',
	'coll-book_creator' => 'Funkcija knigłow',
	'coll-download_as' => 'Ako $1 ześěgnuś',
	'coll-download_as_tooltip' => 'Wersiju $1 toś togo wikijowego boka ześěgnuś',
	'coll-disable' => 'znjemóžniś',
	'coll-book_creator_disable' => 'Funkciju knigłow znjemóžniś',
	'coll-book_creator_disable_tooltip' => 'Wužywanje funkcije knigłow zastajiś',
	'coll-add_category' => 'Toś tu kategoriju twójim knigłam pśidaś',
	'coll-add_category_popup' => 'Wikiboki we wótkazanej kategoriji twójim knigłam pśidaś',
	'coll-add_category_tooltip' => 'Wšě wikiboki w toś tej kategoriji twójim knigłam pśidaś',
	'coll-add_this_page' => 'Toś ten bok twójim knigłam pśidaś',
	'coll-add_page_popup' => 'Wótkazany wikibok twójim knigłam pśidaś',
	'coll-add_page_tooltip' => 'Aktualny wikibok twójim knigłam pśidaś',
	'coll-bookscategory' => 'Knigły',
	'coll-clear_collection' => 'Knigły wuprozniś',
	'coll-clear_collection_confirm' => 'Coš napšawdu swóje knigły dopołnje wuprozniś?',
	'coll-clear_collection_tooltip' => 'Wše wikiboki z twójich aktualnych knigłow wótpóraś',
	'coll-help' => 'Pomoc',
	'coll-help_tooltip' => 'Pomoc wó napóranju knigłow pokazaś',
	'coll-helppage' => 'Help:Knigły',
	'coll-load_collection' => 'Knigły zacytaś',
	'coll-load_collection_tooltip' => 'Toś te knigły ako twóje aktualne knigły zacytaś',
	'coll-n_pages' => '$1 {{PLURAL:$1|bok|boka|boki|bokow}}',
	'coll-printable_version_pdf' => 'PDF-wersija',
	'coll-remove_this_page' => 'Toś ten bok z twójich knigłow wótpóraś',
	'coll-remove_page_popup' => 'Wótkazany wikibok z twójich knigłow wótpóraś',
	'coll-remove_page_tooltip' => 'Aktualny wikibok z twójich knigłow wótpóraś',
	'coll-show_collection' => 'Knigły pokazaś',
	'coll-show_collection_tooltip' => 'Klikni, aby wobźěłał/ześěgnuł/skazał swóje knigły',
	'coll-not_addable' => 'Toś ten bok njedajo se pśidaś',
	'coll-make_suggestions' => 'Boki naraźiś',
	'coll-make_suggestions_tooltip' => 'Naraźenja pokazaś, kótarež bazěruju na bokach w twójich knigłach',
	'coll-suggest_empty' => 'prozny',
);

/** Greek (Ελληνικά)
 * @author Geraki
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'coll-print_export' => 'Εκτύπωση/εξαγωγή',
	'coll-create_a_book' => 'Δημιουργία βιβλίου',
	'coll-create_a_book_tooltip' => 'Δημιουργία μιας συλλογής βιβλίων ή σελίδων',
	'coll-book_creator' => 'Δημιουργός βιβλίων',
	'coll-download_as' => 'Κατέβασμα ως $1',
	'coll-download_as_tooltip' => 'Λήψη μιας $1 έκδοσης αυτής της σελίδας βίκι',
	'coll-disable' => 'απενεργοποίηση',
	'coll-book_creator_disable' => 'Απενεργοποίηση του δημιουργού βιβλίων',
	'coll-book_creator_disable_tooltip' => 'Παύση χρήσης του δημιουργού βιβλίων',
	'coll-add_category' => 'Προσθήκη αυτής της κατηγορίας στο βιβλίο σας',
	'coll-add_category_popup' => 'Προσθήκη των σελίδων της συνδεδεμένης κατηγορίας στο βιβλίο σας',
	'coll-add_category_tooltip' => 'Προσθήκη όλων των σελίδων της συνδεδεμένης κατηγορίας στο βιβλίο σας',
	'coll-add_this_page' => 'Προσθήκη αυτής της σελίδας στο βίβλιο σας',
	'coll-add_page_popup' => 'Προσθήκη της συνδεδεμένης σελίδας στο βιβλίο σας',
	'coll-add_page_tooltip' => 'Προσθήκη της παρούσας σελίδας στο βιβλίο σας',
	'coll-bookscategory' => 'Βιβλία',
	'coll-clear_collection' => 'Εκκαθάριση βιβλίου',
	'coll-clear_collection_confirm' => 'Αλήθεια θέλετε να καθαρίσετε εντελώς το βιβλίο σας;',
	'coll-clear_collection_tooltip' => 'Αφαίρεση όλων των σελίδων από το παρόν βιβλίο σας',
	'coll-help' => 'Βοήθεια',
	'coll-help_tooltip' => 'Εμφάνιση βοήθειας για τη δημιουργία βιβλίων',
	'coll-helppage' => 'Help:Βιβλία',
	'coll-load_collection' => 'Φόρτωση βιβλίου',
	'coll-load_collection_tooltip' => 'Επιφόρτωση αυτού του βιβλίου ως του τρέχοντός σας βιβλίου',
	'coll-n_pages' => '$1 {{PLURAL:$1|σελίδα|σελίδες}}',
	'coll-printable_version_pdf' => 'έκδοση PDF',
	'coll-remove_this_page' => 'Αφαίρεση αυτής της σελίδα από το βιβλίο σας',
	'coll-remove_page_popup' => 'Αφαίρεση της συνδεδεμένης σελίδας από το βιβλίο σας',
	'coll-remove_page_tooltip' => 'Αφαίρεση της παρούσας σελίδας από το βιβλίο σας',
	'coll-show_collection' => 'Εμφάνιση βιβλίου',
	'coll-show_collection_tooltip' => 'Κάνετε κλικ για να επεξεργαστείτε/κατεβάσετε/παραγγείλετε το βιβλίο σας',
	'coll-not_addable' => 'Αυτή η σελίδα δεν μπορεί να προτεθεί',
	'coll-make_suggestions' => 'Πρόταση σελίδων',
	'coll-make_suggestions_tooltip' => 'Προβολή υποδείξεων βασισμένων πάνω στις σελίδες μέσα στο βιβλίο σας',
	'coll-suggest_empty' => 'άδειο',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'coll-print_export' => 'Printi/eksporti',
	'coll-create_a_book' => 'Krei libron',
	'coll-create_a_book_tooltip' => 'Krei libran aŭ paĝan kolekton',
	'coll-download_as' => 'Elŝuti kiel $1',
	'coll-download_as_tooltip' => 'Elŝuti $1-version de ĉi tiu vikia paĝo',
	'coll-disable' => 'malŝalti',
	'coll-add_category' => 'Aldoni ĉi tiun kategorion al via libro',
	'coll-add_category_popup' => 'Aldoni vikipaĝojn en ligita kategorio al via libro',
	'coll-add_category_tooltip' => 'Aldoni ĉiujn vikiajn paĝojn en ĉi tiu kategorio al via libro',
	'coll-add_this_page' => 'Aldoni ĉi tiun paĝon al via libro',
	'coll-add_page_popup' => 'Aldoni ligilplenan vikian paĝon al via libro',
	'coll-add_page_tooltip' => 'Aldoni la nunan vikian paĝon al via libro',
	'coll-bookscategory' => 'Libroj',
	'coll-clear_collection' => 'Forviŝi libron',
	'coll-clear_collection_confirm' => 'Ĉu vi ja volas plene forviŝi vian libron?',
	'coll-clear_collection_tooltip' => 'Forigi ĉiujn vikiajn paĝojn de via nuna libro',
	'coll-help' => 'Helpo',
	'coll-help_tooltip' => 'Montri helpon pri kreante librojn',
	'coll-helppage' => 'Help:Libroj',
	'coll-load_collection' => 'Alŝuti libron',
	'coll-load_collection_tooltip' => 'Ŝarĝi ĉi tiun libron kiel vian nunan libron',
	'coll-n_pages' => '$1 {{PLURAL:$1|paĝo|paĝoj}}',
	'coll-printable_version_pdf' => 'PDF-versio',
	'coll-remove_this_page' => 'Forigi ĉi tiun paĝon de via libro',
	'coll-remove_page_popup' => 'Forigi ligitan vikian paĝon de via libro',
	'coll-remove_page_tooltip' => 'Forigi la nunan vikian paĝon de via libro',
	'coll-show_collection' => 'Montri libron',
	'coll-show_collection_tooltip' => 'Klaku redakti/elŝuti/mendi vian libron',
	'coll-make_suggestions' => 'Sugesti paĝojn',
	'coll-suggest_empty' => 'malplena',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Imre
 * @author Locos epraix
 * @author Omnipaedista
 * @author Remember the dot
 * @author Sanbec
 */
$messages['es'] = array(
	'coll-print_export' => 'Imprimir/exportar',
	'coll-create_a_book' => 'Crear un libro',
	'coll-create_a_book_tooltip' => 'Crear un libro o colección de página',
	'coll-book_creator' => 'Creador de libro',
	'coll-download_as' => 'Descargar como $1',
	'coll-download_as_tooltip' => 'Descargar una versión $1 de esta página wiki',
	'coll-disable' => 'deshabilitar',
	'coll-book_creator_disable' => 'Deshabilitar creador de libro',
	'coll-book_creator_disable_tooltip' => 'Dejar de usar el creador de libro',
	'coll-add_category' => 'Añadir esta categoría a tu libro',
	'coll-add_category_popup' => 'Agregar páginas wiki en categoría vinculada a tu libro',
	'coll-add_category_tooltip' => 'Agregar todas las páginas wiki en esta categoría a tu libro',
	'coll-add_this_page' => 'Añadir esta página a su libro',
	'coll-add_page_popup' => 'Agregar página wiki vinculada a tu libro',
	'coll-add_page_tooltip' => 'Agregar la página wiki actual a tu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Vaciar libro',
	'coll-clear_collection_confirm' => '¿Realmente quieres borrar completamente tu libro?',
	'coll-clear_collection_tooltip' => 'Remover todas las páginas wiki de tu libro actual',
	'coll-help' => 'Ayuda',
	'coll-help_tooltip' => 'Mostrar ayuda acerca de la creación de libros',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar libro',
	'coll-load_collection_tooltip' => 'Cargar este libro como su libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-printable_version_pdf' => 'Versión PDF',
	'coll-remove_this_page' => 'Remover esta página de tu libro',
	'coll-remove_page_popup' => 'Remover página wiki vinculada de tu libro',
	'coll-remove_page_tooltip' => 'Remover la página wiki actual de tu libro',
	'coll-show_collection' => 'Mostrar libro',
	'coll-show_collection_tooltip' => 'Haz click para editar/descargar/ordenar tu libro',
	'coll-not_addable' => 'esta página no puede ser agregada',
	'coll-make_suggestions' => 'Sugerir páginas',
	'coll-make_suggestions_tooltip' => 'Mostrar sugerencias basadas en las páginas de su libro',
	'coll-suggest_empty' => 'vacío',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'coll-print_export' => 'Trüki või ekspordi',
	'coll-create_a_book' => 'Loo raamat',
	'coll-create_a_book_tooltip' => 'Loo raamat või lehekülgede kogu',
	'coll-book_creator' => 'Raamatulooja',
	'coll-download_as' => 'Laadi alla $1-failina',
	'coll-download_as_tooltip' => 'Laadi see lehekülg alla $1-vormingus',
	'coll-disable' => 'keela',
	'coll-book_creator_disable' => 'Keela raamatulooja',
	'coll-book_creator_disable_tooltip' => 'Lõpeta raamatulooja kasutamine',
	'coll-add_category' => 'Lisa see kategooria oma raamatusse',
	'coll-add_category_popup' => 'Lisa raamatusse lingitud kategoorias olevad leheküljed',
	'coll-add_category_tooltip' => 'Lisa kõik selle kategooria vikileheküljed loodavasse raamatusse',
	'coll-add_this_page' => 'Lisa see lehekülg oma raamatusse',
	'coll-add_page_popup' => 'Lisa lingitud vikilehekülg raamatussse',
	'coll-add_page_tooltip' => 'Lisa käesolev lehekülg loodavasse raamatusse',
	'coll-bookscategory' => 'Raamatud',
	'coll-clear_collection' => 'Tühjenda raamat',
	'coll-clear_collection_confirm' => 'Kas soovid tõesti kogu raamatu tühjendada?',
	'coll-clear_collection_tooltip' => 'Võta kõik leheküljed loodavast raamatust välja',
	'coll-help' => 'Abi',
	'coll-help_tooltip' => 'Näita raamatu loomise abi',
	'coll-helppage' => 'Help:Raamatud',
	'coll-load_collection' => 'Lae raamat',
	'coll-load_collection_tooltip' => 'Laadi see raamat praeguse raamatuna',
	'coll-n_pages' => '$1 {{PLURAL:$1|lehekülg|lehekülge}}',
	'coll-printable_version_pdf' => 'PDF-versioon',
	'coll-remove_this_page' => 'Eemalda see lehekülg oma raamatust',
	'coll-remove_page_popup' => 'Eemalda lingitud vikilehekülg raamatust',
	'coll-remove_page_tooltip' => 'Võta käesolev lehekülg loodavast raamatust välja',
	'coll-show_collection' => 'Näita raamatut',
	'coll-show_collection_tooltip' => 'Redigeeri, laadi alla või telli',
	'coll-not_addable' => 'Seda lehekülge ei saa lisada',
	'coll-make_suggestions' => 'Paku lehekülgi',
	'coll-make_suggestions_tooltip' => 'Näitab raamatusse lisatud lehekülgedel põhinevaid soovitusi',
	'coll-suggest_empty' => 'tühi',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Kobazulo
 * @author Theklan
 */
$messages['eu'] = array(
	'coll-print_export' => 'Inprimatu/esportatu',
	'coll-create_a_book' => 'Liburu bat sortu',
	'coll-download_as' => '$1 gisa jaitsi',
	'coll-disable' => 'ezgaitu',
	'coll-add_category' => 'Kategoria hau gehitu zure liburura gehitu',
	'coll-bookscategory' => 'Liburuak',
	'coll-clear_collection' => 'Liburua ezabatu',
	'coll-clear_collection_confirm' => 'Benetan ezabatu nahi al duzu zure liburu osoa?',
	'coll-help' => 'Laguntza',
	'coll-helppage' => 'Help:Liburuak',
	'coll-load_collection' => 'Liburua kargatu',
	'coll-n_pages' => '{{PLURAL:$1|Orrialde 1|$1 orrialde}}',
	'coll-printable_version_pdf' => 'PDF bertsioa',
	'coll-show_collection' => 'Liburua erakutsi',
	'coll-show_collection_tooltip' => 'Zure liburua editatzeko/deskargatzeko/eskatzeko egizu klik',
	'coll-suggest_empty' => 'hutsik',
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
 * @author Cimon Avaro
 * @author Crt
 * @author Str4nd
 */
$messages['fi'] = array(
	'coll-print_export' => 'Tulosta tai vie',
	'coll-create_a_book' => 'Luo kirja',
	'coll-create_a_book_tooltip' => 'Luo kirja tai sivukokoelma',
	'coll-book_creator' => 'Kirjan luontitila',
	'coll-download_as' => 'Lataa $1-tiedostona',
	'coll-download_as_tooltip' => 'Lataa tämä wikisivu $1-muodossa',
	'coll-disable' => 'poista käytöstä',
	'coll-book_creator_disable' => 'Poista kirjan luontitila käytöstä',
	'coll-book_creator_disable_tooltip' => 'Lopeta kirjan luontitila',
	'coll-add_category' => 'Lisää tämä luokka kirjaasi',
	'coll-add_category_popup' => 'Lisää kaikki sivut kirjaasi linkitetystä luokasta',
	'coll-add_category_tooltip' => 'Lisää kaikki wikisivut kirjaasi tästä luokasta',
	'coll-add_this_page' => 'Lisää tämä sivu kirjaasi',
	'coll-add_page_popup' => 'Lisää linkitetty wikisivu kirjaasi',
	'coll-add_page_tooltip' => 'Lisää nykyinen wikisivu kirjaasi',
	'coll-bookscategory' => 'Kirjat',
	'coll-clear_collection' => 'Tyhjennä kirja',
	'coll-clear_collection_confirm' => 'Haluatko varmasti tyhjentää kirjasi?',
	'coll-clear_collection_tooltip' => 'Poista kaikki wikisivut nykyisestä kirjastasi',
	'coll-help' => 'Ohje',
	'coll-help_tooltip' => 'Näytä ohje kirjojen luonnista',
	'coll-helppage' => 'Help:Kirjat',
	'coll-load_collection' => 'Lataa kirja',
	'coll-load_collection_tooltip' => 'Lataa tämä kirja nykyiseksi kirjaksesi',
	'coll-n_pages' => '$1 {{PLURAL:$1|sivu|sivua}}',
	'coll-printable_version_pdf' => 'PDF-versio',
	'coll-remove_this_page' => 'Poista tämä sivu kirjastasi',
	'coll-remove_page_popup' => 'Poista linkitetty wikisivu kirjastasi',
	'coll-remove_page_tooltip' => 'Poista nykyinen wikisivu kirjastasi',
	'coll-show_collection' => 'Näytä kirja',
	'coll-show_collection_tooltip' => 'Napsauta muokataksesi, ladataksesi tai tilataksesi kirjasi',
	'coll-not_addable' => 'Tätä sivua ei voi lisätä',
	'coll-make_suggestions' => 'Ehdotetut sivut',
	'coll-make_suggestions_tooltip' => 'Näytä ehdotukset, jotka perustuvat kirjan sivuihin',
	'coll-suggest_empty' => 'tyhjä',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author Guillom
 * @author IAlex
 * @author McDutchie
 * @author Meithal
 * @author PieRRoMaN
 * @author Verdy p
 */
$messages['fr'] = array(
	'coll-print_export' => 'Imprimer / exporter',
	'coll-create_a_book' => 'Créer un livre',
	'coll-create_a_book_tooltip' => 'Créer un livre ou une collection d’articles',
	'coll-book_creator' => 'Créateur de livres',
	'coll-download_as' => 'Télécharger comme $1',
	'coll-download_as_tooltip' => 'Télécharge une version $1 de cette page wiki',
	'coll-disable' => 'désactiver',
	'coll-book_creator_disable' => 'Désactiver le créateur de livre',
	'coll-book_creator_disable_tooltip' => "Cesser d'utiliser le créateur de livre",
	'coll-add_category' => 'Ajouter cette catégorie à votre livre',
	'coll-add_category_popup' => 'Ajouter les pages de la catégorie liée à votre livre',
	'coll-add_category_tooltip' => 'Ajouter tous les articles de cette catégorie à votre livre',
	'coll-add_this_page' => 'Ajouter cette page à votre livre',
	'coll-add_page_popup' => 'Ajouter la page liée à votre livre',
	'coll-add_page_tooltip' => 'Ajouter la page courante à votre livre',
	'coll-bookscategory' => 'Livres',
	'coll-clear_collection' => 'Vider le livre',
	'coll-clear_collection_confirm' => 'Voulez-vous réellement effacer l’intégralité de votre livre ?',
	'coll-clear_collection_tooltip' => 'Retirer tous les articles de votre livre actuel',
	'coll-help' => 'Aide',
	'coll-help_tooltip' => 'Afficher l’aide sur la création de livres',
	'coll-helppage' => 'Help:Livres',
	'coll-load_collection' => 'Charger un livre',
	'coll-load_collection_tooltip' => 'Charger ce livre en tant que votre livre actuel',
	'coll-n_pages' => '$1 page{{PLURAL:$1||s}}',
	'coll-printable_version_pdf' => 'Version PDF',
	'coll-remove_this_page' => 'Retirer cette page de votre livre',
	'coll-remove_page_popup' => 'Supprimer la page liée de votre livre',
	'coll-remove_page_tooltip' => 'Retirer la page courante de votre livre',
	'coll-show_collection' => 'Afficher le livre',
	'coll-show_collection_tooltip' => 'Cliquez pour modifier / télécharger / commander votre livre',
	'coll-not_addable' => 'Cette page ne peut pas être ajoutée',
	'coll-make_suggestions' => 'Suggérer des pages',
	'coll-make_suggestions_tooltip' => 'Montrer les suggestions fondées sur les pages dans votre livre',
	'coll-suggest_empty' => 'vide',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'coll-print_export' => 'Imprimir/exportar',
	'coll-create_a_book' => 'Crear un libro',
	'coll-create_a_book_tooltip' => 'Crear un libro ou unha colección de páxinas',
	'coll-book_creator' => 'Creador de libros',
	'coll-download_as' => 'Descargar como $1',
	'coll-download_as_tooltip' => 'Descargar unha versión en formato $1 desta páxina wiki',
	'coll-disable' => 'desactivar',
	'coll-book_creator_disable' => 'Desactivar o creador de libros',
	'coll-book_creator_disable_tooltip' => 'Deixar de usar o creador de libros',
	'coll-add_category' => 'Engadir esta categoría ao seu libro',
	'coll-add_category_popup' => 'Engadir as páxinas wiki da categoría ligada ao seu libro',
	'coll-add_category_tooltip' => 'Engadir todas as páxinas wiki desta categoría ao seu libro',
	'coll-add_this_page' => 'Engadir esta páxina ao seu libro',
	'coll-add_page_popup' => 'Engadir a páxina wiki ligada ao seu libro',
	'coll-add_page_tooltip' => 'Engadir a páxina wiki actual ao seu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Borrar o libro',
	'coll-clear_collection_confirm' => 'Realmente quere eliminar por completo o seu libro?',
	'coll-clear_collection_tooltip' => 'Eliminar todas as páxinas wiki do seu libro actual',
	'coll-help' => 'Axuda',
	'coll-help_tooltip' => 'Mostrar a axuda sobre a creación de libros',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar un libro',
	'coll-load_collection_tooltip' => 'Cargar este libro como o seu libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxinas}}',
	'coll-printable_version_pdf' => 'Versión PDF',
	'coll-remove_this_page' => 'Eliminar esta páxina do seu libro',
	'coll-remove_page_popup' => 'Eliminar páxina wiki ligada do seu libro',
	'coll-remove_page_tooltip' => 'Eliminar a páxina wiki actual do seu libro',
	'coll-show_collection' => 'Mostrar o libro',
	'coll-show_collection_tooltip' => 'Prema para editar/descargar/pedir o seu libro',
	'coll-not_addable' => 'Esta páxina non se pode engadir',
	'coll-make_suggestions' => 'Suxerir as páxinas',
	'coll-make_suggestions_tooltip' => 'Mostrar as suxestións baseadas nas páxinas do seu libro',
	'coll-suggest_empty' => 'baleiro',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'coll-download_as' => 'Καταφορτίζειν ὡς $1',
	'coll-add_category' => 'Προστιθέναι κατηγορίαν εἰς τὸ βιβλίον σου',
	'coll-bookscategory' => 'Βιβλία',
	'coll-help' => 'Βοήθεια',
	'coll-printable_version_pdf' => 'Ἔκδοσις PDF',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'coll-print_export' => 'Drucke/exportiere',
	'coll-create_a_book' => 'Buech aalege',
	'coll-create_a_book_tooltip' => 'E Buech oder e Artikelsammlig aalege',
	'coll-book_creator' => 'Buechgenerator',
	'coll-download_as' => 'As $1 abelade',
	'coll-download_as_tooltip' => 'E $1-Version vu däre Wikisyte abelade',
	'coll-disable' => 'deaktiviere',
	'coll-book_creator_disable' => 'Buechgenerator deaktiviere',
	'coll-book_creator_disable_tooltip' => 'Buechgenerator nit bruche',
	'coll-add_category' => 'Die Kategorii zue Dyym Buech dezuefiege',
	'coll-add_category_popup' => 'Wikisyte in dr vergleichte Kategorii zue Dyynem Buech zuefiege',
	'coll-add_category_tooltip' => 'Alli Wikisyte in däre Kategorii in Dyy Buech yyfiege',
	'coll-add_this_page' => 'Die Syte zue Dyym Buech zuefiege',
	'coll-add_page_popup' => 'Vergleichti Syte zu Dyynem Buech zuefiege',
	'coll-add_page_tooltip' => 'Di aktuäll Wikisyte zue Dyynem Buech zuefiege',
	'coll-bookscategory' => 'Buechfunktion',
	'coll-clear_collection' => 'Buech lesche',
	'coll-clear_collection_confirm' => 'Mechtsch Dyy Buech ächt lesche?',
	'coll-clear_collection_tooltip' => 'Alli Wikisyte us Dyynem aktuälle Buech useneh',
	'coll-help' => 'Hilf',
	'coll-help_tooltip' => 'Hilf zum Aalege vu Biecher aazeige',
	'coll-helppage' => 'Help:Biecher',
	'coll-load_collection' => 'Buech lade',
	'coll-load_collection_tooltip' => 'Des Buech as Dyy aktuäll Buech lade',
	'coll-n_pages' => '$1 {{PLURAL:$1|Syte|Syte}}',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-remove_this_page' => 'Die Syte us Dyym Buech useneh',
	'coll-remove_page_popup' => 'Vergleichti Syte us Dyynem Buech uuseneh',
	'coll-remove_page_tooltip' => 'Di aktuäll Wikisyte us Dyynem Buech uuseneh',
	'coll-show_collection' => 'Buech zeige',
	'coll-show_collection_tooltip' => 'Druck do go Dyy Buech bearbeite/abelade/bstelle',
	'coll-not_addable' => 'Die Syte het nit chenne zuegfiegt wäre',
	'coll-make_suggestions' => 'Syte vorschlaa',
	'coll-make_suggestions_tooltip' => 'Vorschleg zeige, wu uf dr Syte in Dyym Buech basiere',
	'coll-suggest_empty' => 'läär',
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
	'coll-print_export' => 'הדפסה/ייצוא',
	'coll-create_a_book' => 'יצירת ספר',
	'coll-create_a_book_tooltip' => 'יצירת ספר או אוסף דפים',
	'coll-book_creator' => 'מצב ספר',
	'coll-download_as' => 'הורדה כ־$1',
	'coll-download_as_tooltip' => 'הורדת גרסת $1 של דף ויקי זה',
	'coll-disable' => 'ביטול',
	'coll-book_creator_disable' => 'ביטול מצב ספר',
	'coll-book_creator_disable_tooltip' => 'הפסקת השימוש במצב ספר',
	'coll-add_category' => 'הוספת קטגוריה זו לספר שלכם',
	'coll-add_category_popup' => 'הוספת כל הדפים בקטגוריה המקושרת לספר שלכם',
	'coll-add_category_tooltip' => 'הוספת כל הדפים בקטגוריה זו לספר שלכם',
	'coll-add_this_page' => 'הוספת דף זה לספר שלכם',
	'coll-add_page_popup' => 'הוספת הדף המקושר לספר שלכם',
	'coll-add_page_tooltip' => 'הוספת דף הוויקי הנוכחי לספר שלכם',
	'coll-bookscategory' => 'ספרים',
	'coll-clear_collection' => 'ניקוי הספר',
	'coll-clear_collection_confirm' => 'האם אתם בטוחים שברצונכם לנקות לגמרי את הספר שלכם?',
	'coll-clear_collection_tooltip' => 'הסרת כל הדפים מהספר הנוכחי שלך',
	'coll-help' => 'עזרה',
	'coll-help_tooltip' => 'הצגת עזרה אודות יצירת ספרים',
	'coll-helppage' => 'Help:ספרים',
	'coll-load_collection' => 'פתיחת ספר',
	'coll-load_collection_tooltip' => 'פתיחת הספר הזה כספר הנוכחי שלך',
	'coll-n_pages' => '{{PLURAL:$1|דף אחד|$1 דפים}}',
	'coll-printable_version_pdf' => 'גרסת PDF',
	'coll-remove_this_page' => 'הסרת דף זה מהספר שלכם',
	'coll-remove_page_popup' => 'הסרת הדף המקושר מהספר שלך',
	'coll-remove_page_tooltip' => 'הסרת דף הוויקי הנוכחי מהספר שלך',
	'coll-show_collection' => 'הצגת ספר',
	'coll-show_collection_tooltip' => 'עריכת/הורדת/הזמנת הספר שלך',
	'coll-not_addable' => 'לא ניתן להוסיף דף זה',
	'coll-make_suggestions' => 'הצעת דפים',
	'coll-make_suggestions_tooltip' => 'הצגת הצעות המבוססות על הדפים הנמצאים בספר',
	'coll-suggest_empty' => 'ריק',
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
	'coll-print_export' => 'Ispis/izvoz',
	'coll-create_a_book' => 'Napravi zbirku',
	'coll-create_a_book_tooltip' => 'Stvorite zbirku ili kolekciju stranica',
	'coll-download_as' => 'Preuzmi kao $1',
	'coll-download_as_tooltip' => 'Preuzmi $1 inačicu ove wiki stranice',
	'coll-disable' => 'onemogući',
	'coll-add_category' => 'Dodaj ovu kategoriju u svoju zbirku',
	'coll-add_category_popup' => 'Dodaj stranice iz kategorije u svoju zbirku',
	'coll-add_category_tooltip' => 'Dodaj sve stranica iz kategoriji u svoju zbirku',
	'coll-add_this_page' => 'Dodaj ovu stranicu u svoju zbirku',
	'coll-add_page_popup' => 'Dodajte povezanu stranicu u svoju zbirku',
	'coll-add_page_tooltip' => 'Dodajte trenutačnu stranicu u svoju zbirku',
	'coll-bookscategory' => 'Zbirke',
	'coll-clear_collection' => 'Očisti zbirku',
	'coll-clear_collection_confirm' => 'Želite li stvarno očistiti svoju cijelu zbirku?',
	'coll-clear_collection_tooltip' => 'Uklonite sve stranice iz vaše trenutačne zbirke',
	'coll-help' => 'Pomoć',
	'coll-help_tooltip' => 'Prikazuje pomoć za stvaranje zbirke',
	'coll-helppage' => 'Help:Zbirke',
	'coll-load_collection' => 'Učitaj zbirku',
	'coll-load_collection_tooltip' => 'Učitati ovu zbirku kao svoju trenutačnu zbirku',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-printable_version_pdf' => 'PDF inačica',
	'coll-remove_this_page' => 'Ukloni ovu stranicu iz svoje zbirke',
	'coll-remove_page_popup' => 'Ukloni povezanu stranicu iz svoje zbirke',
	'coll-remove_page_tooltip' => 'Ukloni trenutnačnu stranicu iz svoje zbirke',
	'coll-show_collection' => 'Pokaži zbirku',
	'coll-show_collection_tooltip' => 'Kliknite da biste uredili/preuzeli/naručili svoju zbirku',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'coll-print_export' => 'Ćišćeć/eksportować',
	'coll-create_a_book' => 'Knihu wutworić',
	'coll-create_a_book_tooltip' => 'Knihu abo zběrku nastawkow wutworić',
	'coll-book_creator' => 'Generator knihow',
	'coll-download_as' => 'Jako $1 sćahnyć',
	'coll-download_as_tooltip' => 'Wersiju $1 tuteje wikijoweje strony sćahnyć',
	'coll-disable' => 'znjemóžnić',
	'coll-book_creator_disable' => 'Generator knihow znjemóžnić',
	'coll-book_creator_disable_tooltip' => 'Wužiwanje generatora knihow zastajić',
	'coll-add_category' => 'Tutu kategoriju twojej knize přidać',
	'coll-add_category_popup' => 'Wikistrony we wotkzajanej kategoriji twojej knize přidać',
	'coll-add_category_tooltip' => 'Wšě wikistrony w tutej kategoriji twojej knize přidać',
	'coll-add_this_page' => 'Tutu stronu twojej knize přidać',
	'coll-add_page_popup' => 'Wotkazanu wikistronu k twojej knize přidać',
	'coll-add_page_tooltip' => 'Aktualnu wikijowu stronu twojej knize přidać',
	'coll-bookscategory' => 'Knihi',
	'coll-clear_collection' => 'Knihu wuprózdnić',
	'coll-clear_collection_confirm' => 'Chceš woprawdźe swoju knihu dospołnje wuprózdnić?',
	'coll-clear_collection_tooltip' => 'Wšě wikistrony z twojeje aktualneje knihi wotstronić',
	'coll-help' => 'Pomoc',
	'coll-help_tooltip' => 'Pomoc wo wutworjenju knihow pokazać',
	'coll-helppage' => 'Help:Knihi',
	'coll-load_collection' => 'Knihu začitać',
	'coll-load_collection_tooltip' => 'Tutu knihu jako twoju aktualnu knihu začitać',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|stronje|strony|stronow}}',
	'coll-printable_version_pdf' => 'PDF-wersija',
	'coll-remove_this_page' => 'Tutu stronu z twojeje knihi wotstronić',
	'coll-remove_page_popup' => 'Wotkazanu wikistronu z twojeje knihi wotstronić',
	'coll-remove_page_tooltip' => 'Aktualnu wikijowu stronu z twojeje knihi wotstronić',
	'coll-show_collection' => 'Knihu pokazać',
	'coll-show_collection_tooltip' => 'Klikń, zo by swoju knihu wobdźěłał/sćahnył/skazał',
	'coll-not_addable' => 'Tuta strona njeda so přidać',
	'coll-make_suggestions' => 'Strony namjetować',
	'coll-make_suggestions_tooltip' => 'Namjety pokazać, kotrež na stronach w twojej knize bazuja',
	'coll-suggest_empty' => 'prózdny',
);

/** Hungarian (Magyar)
 * @author Bdamokos
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'coll-print_export' => 'Nyomtatás/exportálás',
	'coll-create_a_book' => 'Könyv készítése',
	'coll-create_a_book_tooltip' => 'Könyv vagy lapgyűjtemény készítése',
	'coll-book_creator' => 'Könyvkészítő',
	'coll-download_as' => 'Letöltés mint $1',
	'coll-download_as_tooltip' => 'A wikilap $1 formátumú változatának letöltése',
	'coll-disable' => 'letiltás',
	'coll-book_creator_disable' => 'Könyvkészítő letiltása',
	'coll-book_creator_disable_tooltip' => 'Könyvkészítő használatának befejezése',
	'coll-add_category' => 'Kategória hozzáadása a könyvedhez',
	'coll-add_category_popup' => 'A hivatkozott kategória lapjainak hozzáadása a könyvhöz',
	'coll-add_category_tooltip' => 'Ezen kategória összes lapjának hozzáadása a könyvhöz',
	'coll-add_this_page' => 'Lap hozzáadása a könyvedhez',
	'coll-add_page_popup' => 'A hivatkozott lap hozzáadása a könyvhöz',
	'coll-add_page_tooltip' => 'A jelenlegi lap hozzáadása a könyvhöz',
	'coll-bookscategory' => 'Könyvek',
	'coll-clear_collection' => 'Könyv kiürítése',
	'coll-clear_collection_confirm' => 'Valóban törölni szeretnéd a könyved?',
	'coll-clear_collection_tooltip' => 'Az összes lap eltávolítása a kiválasztott könyvből',
	'coll-help' => 'Segítség',
	'coll-help_tooltip' => 'Segítség megjelenítése a könyvkészítésről',
	'coll-helppage' => 'Help:Könyvek',
	'coll-load_collection' => 'Könyv betöltése',
	'coll-load_collection_tooltip' => 'Könyv betöltése kiválasztott könyvként',
	'coll-n_pages' => '{{PLURAL:$1|egy|$1}} lap',
	'coll-printable_version_pdf' => 'PDF változat',
	'coll-remove_this_page' => 'Ezen lap eltávolítása a könyvedből',
	'coll-remove_page_popup' => 'A hivatkozott lap eltávolítása a könyvből',
	'coll-remove_page_tooltip' => 'A jelenlegi lap eltávolítása a könyvből',
	'coll-show_collection' => 'Könyv mutatása',
	'coll-show_collection_tooltip' => 'Kattints ide a könyv szerkesztéséhez/letöltéséhez/megrendeléségez',
	'coll-not_addable' => 'Ezt a lapot nem lehet hozzáadni',
	'coll-make_suggestions' => 'Lapok ajánlása',
	'coll-make_suggestions_tooltip' => 'Javaslatok megjelenítése a könyvedben található lapok alapján',
	'coll-suggest_empty' => 'üres',
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
	'coll-print_export' => 'Imprimer/exportar',
	'coll-create_a_book' => 'Crear un libro',
	'coll-create_a_book_tooltip' => 'Crear un libro o collection de paginas',
	'coll-book_creator' => 'Creator de libros',
	'coll-download_as' => 'Discargar como $1',
	'coll-download_as_tooltip' => 'Discargar un version $1 de iste pagina wiki',
	'coll-disable' => 'disactivar',
	'coll-book_creator_disable' => 'Disactivar le creator de libros',
	'coll-book_creator_disable_tooltip' => 'Cessar de usar le creator de libros',
	'coll-add_category' => 'Adder iste categoria a tu libro',
	'coll-add_category_popup' => 'Adder le paginas wiki del categoria ligate a tu libro',
	'coll-add_category_tooltip' => 'Adder tote le paginas wiki in iste categoria a tu libro',
	'coll-add_this_page' => 'Adder iste pagina a tu libro',
	'coll-add_page_popup' => 'Adder le pagina wiki ligate a tu libro',
	'coll-add_page_tooltip' => 'Adder le pagina wiki actual a tu libro',
	'coll-bookscategory' => 'Libros',
	'coll-clear_collection' => 'Vacuar libro',
	'coll-clear_collection_confirm' => 'Esque tu realmente vole vacuar completemente tu libro?',
	'coll-clear_collection_tooltip' => 'Remover tote le pagians wiki de tu libro actual',
	'coll-help' => 'Adjuta',
	'coll-help_tooltip' => 'Monstrar adjuta super le creation de libros',
	'coll-helppage' => 'Help:Libros',
	'coll-load_collection' => 'Cargar libro',
	'coll-load_collection_tooltip' => 'Cargar iste libro como tu libro actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-printable_version_pdf' => 'Version PDF',
	'coll-remove_this_page' => 'Remover iste pagina de tu libro',
	'coll-remove_page_popup' => 'Remover le pagina wiki ligate de tu libro',
	'coll-remove_page_tooltip' => 'Remover le pagina wiki actual de tu libro',
	'coll-show_collection' => 'Monstrar libro',
	'coll-show_collection_tooltip' => 'Clicca pro modificar/discargar/commandar tu libro',
	'coll-not_addable' => 'Iste pagina non pote esser addite',
	'coll-make_suggestions' => 'Suggerer paginas',
	'coll-make_suggestions_tooltip' => 'Monstrar suggestiones a base del paginas ja presente in tu libo',
	'coll-suggest_empty' => 'vacue',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'coll-print_export' => 'Cetak/ekspor',
	'coll-create_a_book' => 'Buat buku',
	'coll-create_a_book_tooltip' => 'Buat koleksi artikel atau buku',
	'coll-book_creator' => 'Pembuatan buku',
	'coll-download_as' => 'Unduh sebagai $1',
	'coll-download_as_tooltip' => 'Unduh versi $1 halaman wiki ini',
	'coll-disable' => 'matikan',
	'coll-book_creator_disable' => 'Pembuatan buku dinonaktifkan',
	'coll-book_creator_disable_tooltip' => 'Berhenti menggunakan pembuatan buku',
	'coll-add_category' => 'Tambahkan kategori ini ke buku Anda',
	'coll-add_category_popup' => 'Tambahkan halaman wiki pada kategori terkait buku Anda',
	'coll-add_category_tooltip' => 'Tambahkan semua halaman wiki pada kategori ini ke buku Anda',
	'coll-add_this_page' => 'Tambahkan halaman ini ke buku Anda',
	'coll-add_page_popup' => 'Tambahkan halaman wiki terkait ke buku Anda',
	'coll-add_page_tooltip' => 'Tambahkan halaman wiki ini ke buku Anda',
	'coll-bookscategory' => 'Wikipedia:Buku',
	'coll-clear_collection' => 'Hapus buku',
	'coll-clear_collection_confirm' => 'Apakah Anda benar-benar ingin membersihkan buku Anda sepenuhnya?',
	'coll-clear_collection_tooltip' => 'Hapus semua halaman wiki dari buku Anda',
	'coll-help' => 'Bantuan',
	'coll-help_tooltip' => 'Tunjukkan bantuan pembuatan buku',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Muat buku',
	'coll-load_collection_tooltip' => 'Muat buku ini sebagai buku aktif Anda',
	'coll-n_pages' => '$1 {{PLURAL:$1|halaman|halaman}}',
	'coll-printable_version_pdf' => 'Buat PDF',
	'coll-remove_this_page' => 'Singkirkan halaman ini dari buku Anda',
	'coll-remove_page_popup' => 'Buang halaman wiki terkait dari buku Anda',
	'coll-remove_page_tooltip' => 'Buang halaman wiki ini dari buku Anda',
	'coll-show_collection' => 'Lihat buku',
	'coll-show_collection_tooltip' => 'Klik untuk menyunting/mengunduh/memesan buku Anda',
	'coll-not_addable' => 'Halaman ini tidak dapat di tambahkan',
	'coll-make_suggestions' => 'Halaman disarankan',
	'coll-make_suggestions_tooltip' => 'Tampilkan saran berdasarkan halaman dalam buku anda',
	'coll-suggest_empty' => 'kosong',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'coll-create_a_book' => 'Kreez un libro',
	'coll-add_category' => 'Adjuntar kategorio a vua libro',
	'coll-add_this_page' => 'Adjuntez ca pagino a vua libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Vakuigar libro',
	'coll-help' => 'Helpo',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Kargar libro',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagino|pagini}}',
	'coll-printable_version_pdf' => 'Versiono PDF',
	'coll-show_collection' => 'Montrar libro',
	'coll-make_suggestions' => 'Sugestez pagini',
	'coll-suggest_empty' => 'vakua',
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
 * @author Melos
 * @author OrbiliusMagister
 */
$messages['it'] = array(
	'coll-print_export' => 'Stampa/esporta',
	'coll-create_a_book' => 'Crea un libro',
	'coll-create_a_book_tooltip' => 'Crea un libro o una raccolta di articoli',
	'coll-book_creator' => 'Creatore di libri',
	'coll-download_as' => 'Scarica come $1',
	'coll-download_as_tooltip' => 'Scarica una versione $1 di questa pagina wiki',
	'coll-disable' => 'disattiva',
	'coll-book_creator_disable' => 'Disattiva il creatore di libri',
	'coll-book_creator_disable_tooltip' => 'Smetti di usare il creatore di libri',
	'coll-add_category' => 'Aggiungi questa categoria al tuo libro',
	'coll-add_category_popup' => 'Aggiungi le pagine wiki nella categoria collegata al tuo libro',
	'coll-add_category_tooltip' => 'Aggiungi tutte le pagine wiki di questa categoria al tuo libro',
	'coll-add_this_page' => 'Aggiungi questa pagina al tuo libro',
	'coll-add_page_popup' => 'Aggiungi pagina wiki collegata al tuo libro',
	'coll-add_page_tooltip' => 'Aggiungi la pagina wiki corrente al tuo libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Svuota libro',
	'coll-clear_collection_confirm' => 'Si desidera veramente pulire completamente il proprio libro?',
	'coll-clear_collection_tooltip' => 'Rimuovi tutte le pagine wiki dal tuo libro corrente',
	'coll-help' => 'Aiuto',
	'coll-help_tooltip' => "Mostra l'aiuto sulla creazione di libri",
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Carica libro',
	'coll-load_collection_tooltip' => 'Carica questo libro come libro corrente',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|pagine}}',
	'coll-printable_version_pdf' => 'Versione PDF',
	'coll-remove_this_page' => 'Rimuovi questa pagina del tuo libro',
	'coll-remove_page_popup' => 'Rimuovi pagina wiki collegata dal tuo libro',
	'coll-remove_page_tooltip' => 'Rimuovi la pagina wiki corrente dal tuo libro',
	'coll-show_collection' => 'Mostra libro',
	'coll-show_collection_tooltip' => 'Fai clic per modificare, scaricare o ordinare il tuo libro',
	'coll-not_addable' => 'Questa pagina non può essere aggiunta',
	'coll-make_suggestions' => 'Suggerisci delle pagine',
	'coll-make_suggestions_tooltip' => 'Mostra suggerimenti basati sulle pagine del proprio libro',
	'coll-suggest_empty' => 'vuoto',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Marine-Blue
 */
$messages['ja'] = array(
	'coll-print_export' => '印刷/エクスポート',
	'coll-create_a_book' => 'ブックの新規作成',
	'coll-create_a_book_tooltip' => 'ブックあるいは記事集を作成する',
	'coll-book_creator' => 'ブッククリエーター',
	'coll-download_as' => '$1としてダウンロード',
	'coll-download_as_tooltip' => 'このウィキページの$1版をダウンロードする',
	'coll-disable' => '無効化',
	'coll-book_creator_disable' => 'ブッククリエーターを無効化',
	'coll-book_creator_disable_tooltip' => 'ブッククリエーターを使うのを止める',
	'coll-add_category' => 'このカテゴリを自分のブックに追加する',
	'coll-add_category_popup' => 'リンクされたカテゴリ内のウィキページを自分のブックに追加する',
	'coll-add_category_tooltip' => 'このカテゴリ中のすべてのページをあなたのブックに追加する',
	'coll-add_this_page' => 'このページを自分のブックに追加する',
	'coll-add_page_popup' => 'リンクされたウィキページを自分のブックに追加する',
	'coll-add_page_tooltip' => '現在のページをあなたのブックに追加する',
	'coll-bookscategory' => 'ブック',
	'coll-clear_collection' => 'ブックを消去',
	'coll-clear_collection_confirm' => '本当にブックを完全に消去しますか？',
	'coll-clear_collection_tooltip' => 'あなたの現在のブックからすべてのウィキページを削除する',
	'coll-help' => 'ヘルプ',
	'coll-help_tooltip' => 'ブックの作成に関するヘルプを表示する',
	'coll-helppage' => 'Help:ブック',
	'coll-load_collection' => 'ブックの読み込み',
	'coll-load_collection_tooltip' => 'このブックをあなたの現在のブックとして読み込む',
	'coll-n_pages' => '$1{{PLURAL:$1|ページ}}',
	'coll-printable_version_pdf' => 'PDF版',
	'coll-remove_this_page' => 'このページを自分のブックから削除する',
	'coll-remove_page_popup' => 'リンクされたウィキページを自分のブックから除去する',
	'coll-remove_page_tooltip' => '現在のページをあなたのブックから削除する',
	'coll-show_collection' => 'ブックを表示',
	'coll-show_collection_tooltip' => 'クリックしてあなたのブックを編集、ダウンロード、または注文する',
	'coll-not_addable' => 'このページは追加できません',
	'coll-make_suggestions' => 'ページの候補',
	'coll-make_suggestions_tooltip' => 'あなたのブックに保存されたページを元に候補を表示します',
	'coll-suggest_empty' => 'なし',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'coll-create_a_book' => 'Gawé buku',
	'coll-download_as' => 'Undhuh minangka $1',
	'coll-add_category' => 'Tambahna kategori iki menyang buku panjenengan',
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
	'coll-help' => 'დახმარება',
	'coll-helppage' => 'Help:წიგნები',
	'coll-load_collection' => 'წიგნის ატვირთვა',
	'coll-n_pages' => '$1 გვერდი',
	'coll-printable_version_pdf' => 'PDF ვერსია',
	'coll-suggest_empty' => 'ცარიელი',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'coll-print_export' => 'បោះពុម្ព​/នាំចេញ​',
	'coll-create_a_book' => 'បង្កើតសៀវភៅ​',
	'coll-download_as' => 'ទាញយកជា $1',
	'coll-add_category' => 'បន្ថែមចំណាត់ថ្នាក់ក្រុមនេះដល់សៀវភៅរបស់អ្នក',
	'coll-add_category_tooltip' => 'បន្ថែម​ទំព័រ​វិគី​ទាំងអស់​ក្នុង​ចំណាត់ថ្នាក់ក្រុម​នេះទៅ​ក្នុង​សៀវភៅ​របស់​អ្នក​​',
	'coll-add_this_page' => 'បន្ថែម​ទំព័រនេះ​ទៅក្នុង​សៀវភៅ​របស់អ្នក​',
	'coll-add_page_popup' => 'បន្ថែមទំព័រ​វីគី​ដែលតភ្ជាប់ ទៅសៀវភៅ​របស់អ្នក​',
	'coll-add_page_tooltip' => 'បន្ថែម​ទំព័រ​វីគី​បច្ចុប្បន្នទៅ​សៀវភៅ​របស់​អ្នក​',
	'coll-bookscategory' => 'សៀវភៅ',
	'coll-clear_collection' => 'សំអាត​សៀវភៅ',
	'coll-clear_collection_confirm' => 'តើ​អ្នក​ពិតជា​ចង់​ជម្រះ​សៀវភៅ​របស់​អ្នក​ទាំងស្រុង​ឬ​?',
	'coll-clear_collection_tooltip' => 'ដកយក​ទំព័រ​វីគីទាំងអស់​ពីសៀវភៅ​បច្ចុប្បន្ន​របស់អ្នក​',
	'coll-help' => 'ជំនួយ',
	'coll-help_tooltip' => 'បង្ហាញ​ជំនួយ​អំពី​ការ​បង្កើត​​សៀវភៅ​',
	'coll-helppage' => 'Help: សៀវភៅ',
	'coll-load_collection' => 'ផ្ទុកសៀវភៅ',
	'coll-load_collection_tooltip' => 'ផ្ទុក​សៀវភៅនេះ​ទៅជា​សៀវភៅ​បច្ចុប្បន្ន​របស់អ្នក​',
	'coll-n_pages' => '$1 {{PLURAL:$1|ទំព័រ|ទំព័រ}}',
	'coll-printable_version_pdf' => 'កំណែ PDF',
	'coll-remove_this_page' => 'ដកចេញទំព័រនេះពីសៀវភៅ​របស់​អ្នក​',
	'coll-remove_page_tooltip' => 'ដកចេញទំព័រវិគី​បច្ចុប្បន្ន​ពីសៀវភៅ​របស់អ្នក​',
	'coll-show_collection' => 'បង្ហាញ​សៀវភៅ',
	'coll-show_collection_tooltip' => 'ចុច​ដើម្បី​កែប្រែ​/ទាញ​យក​/បញ្ជា​ទិញ​សៀវភៅ​របស់​អ្នក​',
);

/** Korean (한국어)
 * @author Ilovesabbath
 * @author Klutzy
 * @author Kwj2772
 * @author Yknok29
 */
$messages['ko'] = array(
	'coll-create_a_book' => '책 만들기',
	'coll-download_as' => '$1로 다운로드',
	'coll-add_category' => '이 분류를 책에 추가하기',
	'coll-add_category_popup' => '연결된 카테고리의 위키 페이지를 당신의 책에 더하세요.',
	'coll-add_category_tooltip' => '이 분류에 속하는 문서 모두를 책에 추가하기',
	'coll-add_page_popup' => '연결된 위키 페이지를 당신의 책에 더하세요',
	'coll-add_page_tooltip' => '이 문서를 책에 추가하기',
	'coll-bookscategory' => '책',
	'coll-clear_collection' => '책 초기화',
	'coll-clear_collection_confirm' => '책에 있는 내용이 완전히 삭제됩니다. 초기화할까요?',
	'coll-clear_collection_tooltip' => '책에 있는 문서 모두를 삭제하기',
	'coll-help' => '도움말',
	'coll-help_tooltip' => '책을 만드는 방법에 대한 도움말 보기',
	'coll-helppage' => 'Help:책 만들기',
	'coll-load_collection' => '책 불러오기',
	'coll-load_collection_tooltip' => '이 책을 책 제작 작업란으로 불러오기',
	'coll-n_pages' => '$1개의 문서',
	'coll-printable_version_pdf' => 'PDF 버전',
	'coll-remove_this_page' => '책에서 해당 페이지를 삭제',
	'coll-remove_page_popup' => '연결된 위키 페이지를 당신의 책에서 지우세요.',
	'coll-remove_page_tooltip' => '책에서 이 문서를 제외합니다',
	'coll-show_collection' => '책 공개',
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
	'coll-print_export' => 'Dröcke / Äxpotteere',
	'coll-create_a_book' => 'E Booch zesamme_ställe',
	'coll-create_a_book_tooltip' => 'Donn e Booch maache, udder en Sammlong vun Atikele aanlääje',
	'coll-book_creator' => '„Bööscher Maache“',
	'coll-download_as' => 'Als $1 eronger laade',
	'coll-download_as_tooltip' => 'Donn heh di Wiki-Sigg em $1-Fommaat erunger laade',
	'coll-disable' => 'ußschallde',
	'coll-book_creator_disable' => 'Et „Bööscher Maache“ ußschallde',
	'coll-book_creator_disable_tooltip' => 'Hür mem „Bööscher Maache“ op',
	'coll-add_category' => 'Donn heh di Saachjrupp bei dat Booch dobei',
	'coll-add_category_popup' => 'Donn di Sigge uß dä {{ns:Category}}, wo dä Lengk drop jeiht, met en Ding Booch opnämme',
	'coll-add_category_tooltip' => 'Dat deiht all de Atikelle en dä {{NS:Category}} en Ding Booch erin.',
	'coll-add_this_page' => 'Donn heh di Sigg bei Ding Booch dobei',
	'coll-add_page_popup' => 'Donn de Sigg, wo dä Lengk drop jeiht, met en dat Booch opnämme',
	'coll-add_page_tooltip' => 'Donn de aktoälle Wiki-Sigg en dat Booch erin',
	'coll-bookscategory' => 'Bööscher',
	'coll-clear_collection' => 'Dat Booch leddisch maache',
	'coll-clear_collection_confirm' => 'Wells De werklesch Ding Booch jannz fott schmieße?',
	'coll-clear_collection_tooltip' => 'Hee met schmiiß De alle Sigge fum Wiki uß Dingem aktoälle Booch eruß, un deihs et leddisch maache.',
	'coll-help' => 'Hölp',
	'coll-help_tooltip' => 'Zeisch Hölp zom Bööscher Maache aan',
	'coll-helppage' => 'Help:Bööscher',
	'coll-load_collection' => 'Booch lade',
	'coll-load_collection_tooltip' => 'Deiht dat Booch hee als Ding aktoälles Booch laade.',
	'coll-n_pages' => '{{PLURAL:$1|ein Sigg|$1 Sigge|kein Sigge}}',
	'coll-printable_version_pdf' => '<i lang="en">PDF</i> Version',
	'coll-remove_this_page' => 'Schmiiß die Sigg uß Dingem Booch eruß',
	'coll-remove_page_popup' => 'Donn de Sigg, wo dä Lemgk drop jeiht, uß Dingem Booch eruß nämme',
	'coll-remove_page_tooltip' => 'Schmiiß hee di Sigg fum Wiki uß Dingem Booch eruß',
	'coll-show_collection' => 'Booch zeije',
	'coll-show_collection_tooltip' => 'He met kanns De Ding Boch ändere, de zosamme jeshtalle Sigge erunger laade, un jedröck beshtelle.',
	'coll-not_addable' => 'Di Sigg kam_mer nit dobei donn',
	'coll-make_suggestions' => 'Sigge vörschlonn',
	'coll-make_suggestions_tooltip' => 'Donn Vörschlähsch aanzeije, je noh dä Sigge en Dingem Booch',
	'coll-suggest_empty' => 'leddisch',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'coll-print_export' => 'Drécken/exportéieren',
	'coll-create_a_book' => 'E Buch uleeën',
	'coll-create_a_book_tooltip' => 'E Buch oder eng Sammlung vun Artikelen uleeën',
	'coll-book_creator' => 'Buchfonctioun',
	'coll-download_as' => 'Als $1 eroflueden',
	'coll-download_as_tooltip' => 'Eng $1 Versioun vun dëser Wiki-Säit eroflueden',
	'coll-disable' => 'Ausschalten',
	'coll-book_creator_disable' => 'Buchfonctioun ausschalten',
	'coll-book_creator_disable_tooltip' => "Ophalen d'buchfonctioun ze benotzen",
	'coll-add_category' => 'Dës Kategorie an Ärt Buch derbäisetzen',
	'coll-add_category_popup' => 'Wikisäiten a verlinkte Kategorien an Ärt Buch derbäisetzen',
	'coll-add_category_tooltip' => 'All Wiki-Säiten aus dëser Kategorie an Ärt Buch derbäisetzen',
	'coll-add_this_page' => 'Dës Säit an Ärt Buch derbäisetzen',
	'coll-add_page_popup' => 'Verlinkte Wiki-Säit an Ärt Buch derbäisetzen',
	'coll-add_page_tooltip' => 'Déi aktuell Wiki-Säit an Ärt Buch derbäisetzen',
	'coll-bookscategory' => 'Bicher',
	'coll-clear_collection' => 'Buch eidel maachen',
	'coll-clear_collection_confirm' => 'Wëllt Dir Ärt Buch wierklech ganz läschen?',
	'coll-clear_collection_tooltip' => 'All Wiki-Säiten aus ärem aktuelle Buch eraushuelen',
	'coll-help' => 'Hëllef',
	'coll-help_tooltip' => "Hëllef fir d'Uleë vu Bicher weisen",
	'coll-helppage' => 'Help:Bicher',
	'coll-load_collection' => 'Buch lueden',
	'coll-load_collection_tooltip' => 'Dëst Buch als Ärt aktuellt Buch lueden',
	'coll-n_pages' => '$1 {{PLURAL:$1|Säit|Säiten}}',
	'coll-printable_version_pdf' => 'PDF-Versioun',
	'coll-remove_this_page' => 'Dës Säit aus Ärem Buch eraushuelen',
	'coll-remove_page_popup' => 'Verlinkte Wiki-Säit aus Ärem Buch eraushuelen',
	'coll-remove_page_tooltip' => 'Dës Wiki-Säit aus Ärem buch eraushuelen',
	'coll-show_collection' => "D'Buch weisen",
	'coll-show_collection_tooltip' => "Klickt fir Ärt Buch z'änneren/erofzeluede/ze bestellen",
	'coll-not_addable' => 'Dës Sàit kann net derbäigesat ginn',
	'coll-make_suggestions' => 'Säite virschloen',
	'coll-make_suggestions_tooltip' => 'Virschléi weisen op Basis vun de Säiten an Ärem Buch',
	'coll-suggest_empty' => 'eidel',
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
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'coll-print_export' => 'അച്ചടിയ്ക്കുക/കയറ്റുമതി ചെയ്യുക',
	'coll-create_a_book' => 'എന്റെ ശേഖരം',
	'coll-create_a_book_tooltip' => 'ഒരു പുസ്തകം അല്ലങ്കിൽ താളുകളുടെ ശേഖരം സൃഷ്ടിക്കുക',
	'coll-book_creator' => 'പുസ്തക സൃഷ്ടി ഉപകരണം',
	'coll-download_as' => '$1 ആയി ഡൗൺലോഡ് ചെയ്യുക',
	'coll-download_as_tooltip' => 'ഈ വിക്കി താളിന്റെ $1 പതിപ്പ് ഡൗൺലോഡ് ചെയ്യുക',
	'coll-disable' => 'നിർജീവമാക്കുക',
	'coll-book_creator_disable' => 'പുസ്തക സൃഷ്ടി ഉപകരണം നിർജീവമാക്കുക',
	'coll-book_creator_disable_tooltip' => 'പുസ്തക സൃഷ്ടി ഉപകരണം ഉപയോഗിക്കുന്നതു നിർത്തുക',
	'coll-add_category' => 'താങ്കളുടെ പുസ്തകത്തിൽ ഈ വര്‍ഗ്ഗം ചേര്‍ക്കുക',
	'coll-add_category_popup' => 'താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് കണ്ണിവത്കരിക്കപ്പെട്ട വർഗ്ഗത്തിലെ താളുകൾ ചേർക്കുക',
	'coll-add_category_tooltip' => 'ഈ വർഗ്ഗത്തിലുള്ള എല്ലാ വിക്കി താളുകളും താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് കൂട്ടിച്ചേർക്കുക',
	'coll-add_this_page' => 'ഈ താൾ താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് കൂട്ടിച്ചേർക്കുക',
	'coll-add_page_popup' => 'താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് കണ്ണിവത്കരിക്കപ്പെട്ട താൾ ചേർക്കുക',
	'coll-add_page_tooltip' => 'ഇപ്പോഴത്തെ താൾ താങ്കളുടെ പുസ്തകത്തിലേയ്ക്ക് ചേർക്കുക',
	'coll-bookscategory' => 'പുസ്തകങ്ങൾ',
	'coll-clear_collection' => 'പുസ്തകം മായ്ക്കുക',
	'coll-clear_collection_confirm' => 'പുസ്തകം പൂർണ്ണമായും ശൂന്യമാക്കാൻ താങ്കൾ ശരിക്കുമാഗ്രഹിക്കുന്നുണ്ടോ?',
	'coll-clear_collection_tooltip' => 'താങ്കളുടെ ഈ പുസ്തകത്തിൽ നിന്നും എല്ലാ താളുകളും നീക്കം ചെയ്യുക',
	'coll-help' => 'സഹായം',
	'coll-help_tooltip' => 'പുസ്തകങ്ങൾ സൃഷ്ടിക്കുന്നതു സംബന്ധിച്ച സഹായം പ്രദർശിപ്പിക്കുക',
	'coll-helppage' => 'Help:പുസ്തകം',
	'coll-load_collection' => 'പുസ്തകം ശേഖരിക്കുക',
	'coll-load_collection_tooltip' => 'താങ്കളുടെ ഇപ്പോഴത്തെ പുസ്തകമായി ഈ പുസ്തകം എടുക്കുക',
	'coll-n_pages' => '{{PLURAL:$1|ഒരു താൾ|$1 താളുകൾ}}',
	'coll-printable_version_pdf' => 'പി.ഡി.എഫ്. പതിപ്പ്',
	'coll-remove_this_page' => 'ഈ താൾ താങ്കളുടെ പുസ്തകത്തിൽ നിന്നും നീക്കുക',
	'coll-remove_page_popup' => 'താങ്കളുടെ പുസ്തകത്തിൽ നിന്നും കണ്ണിവത്കരിക്കപ്പെട്ട വിക്കി താൾ നീക്കം ചെയ്യുക',
	'coll-remove_page_tooltip' => 'താങ്കളുടെ പുസ്തകത്തിൽ നിന്നും ഇപ്പോഴത്തെ വിക്കി താൾ നീക്കംചെയ്യുക',
	'coll-show_collection' => 'പുസ്തകം പ്രദർശിപ്പിക്കുക',
	'coll-show_collection_tooltip' => 'തിരുത്തുവാൻ/ഡൗൺലോഡ് ചെയ്യാൻ/താങ്കളുടെ പുസ്തകം ആവശ്യപ്പെടാൻ ഞെക്കുക',
	'coll-not_addable' => 'ഈ താൾ കൂട്ടിച്ചേർക്കാൻ കഴിയില്ല',
	'coll-make_suggestions' => 'താളുകൾ നിർദ്ദേശിക്കുക',
	'coll-make_suggestions_tooltip' => 'താങ്കളുടെ പുസ്തകത്തിനനുസരിച്ചുള്ള നിർദ്ദേശങ്ങൾ മുന്നോട്ട് വെയ്ക്കുക',
	'coll-suggest_empty' => 'ശൂന്യം',
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
 * @author Kurniasan
 */
$messages['ms'] = array(
	'coll-print_export' => 'Cetak/eksport',
	'coll-create_a_book' => 'Cipta buku',
	'coll-create_a_book_tooltip' => 'Cipta sebuah buku atau koleksi laman',
	'coll-download_as' => 'Muat turun sebagai $1',
	'coll-download_as_tooltip' => 'Muat turun versi $1 laman wiki ini',
	'coll-disable' => 'lumpuhkan',
	'coll-add_category' => 'Tambah kategori ini ke buku anda',
	'coll-add_category_popup' => 'Tambah lelaman wiki dalam kategori terpaut ke buku anda',
	'coll-add_category_tooltip' => 'Tambah kesemua laman wiki dalam kategori ini ke buku anda',
	'coll-add_this_page' => 'Tambah laman ini ke buku anda',
	'coll-add_page_popup' => 'Tambah laman wiki terpaut ke buku anda',
	'coll-add_page_tooltip' => 'Tambah laman wiki semasa ke buku anda',
	'coll-bookscategory' => 'Buku',
	'coll-clear_collection' => 'Kosongkan buku',
	'coll-clear_collection_confirm' => 'Betulkah anda mahu mengosongkan buku anda sepenuhnya?',
	'coll-clear_collection_tooltip' => 'Buang kesemua laman wiki daripada buku semasa anda',
	'coll-help' => 'Bantuan',
	'coll-help_tooltip' => 'Tunjukkan bantuan tentang mencipta buku',
	'coll-helppage' => 'Help:Buku',
	'coll-load_collection' => 'Muat buku',
	'coll-load_collection_tooltip' => 'Muatkan buku ini sebagai buku semasa anda',
	'coll-n_pages' => '$1 laman',
	'coll-printable_version_pdf' => 'Versi PDF',
	'coll-remove_this_page' => 'Buang laman ini daripada buku anda',
	'coll-remove_page_popup' => 'Buang laman wiki yang dipautkan daripada buku anda',
	'coll-remove_page_tooltip' => 'Buang laman wiki semasa daripada buku anda',
	'coll-show_collection' => 'Tunjuk buku',
	'coll-show_collection_tooltip' => 'Klik untuk sunting/muat turun/pesan buku anda',
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
	'coll-add_category' => 'Kattegerie bie joew boek doon',
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
	'coll-print_export' => 'Afdrukken/exporteren',
	'coll-create_a_book' => 'Boek maken',
	'coll-create_a_book_tooltip' => 'Boek of paginacollectie',
	'coll-book_creator' => 'Boekenmaker',
	'coll-download_as' => 'Downloaden als $1',
	'coll-download_as_tooltip' => 'Een $1-versie van deze wikipagina downloaden',
	'coll-disable' => 'uitschakelen',
	'coll-book_creator_disable' => 'Boekenmaker uitschakelen',
	'coll-book_creator_disable_tooltip' => 'Boekenmaker niet meer gebruiken',
	'coll-add_category' => 'Deze categorie aan uw boek toevoegen',
	'coll-add_category_popup' => "Wikipagina's uit de gekoppelde categorie aan uw boek toevoegen",
	'coll-add_category_tooltip' => "Alle pagina's in deze categorie aan uw boek toevoegen",
	'coll-add_this_page' => 'Deze pagina aan uw boek toevoegen',
	'coll-add_page_popup' => 'Gekoppelde wikipagina aan uw boek toevoegen',
	'coll-add_page_tooltip' => 'De huidige wikipagina aan uw boek toevoegen',
	'coll-bookscategory' => 'Boeken',
	'coll-clear_collection' => 'Boek leegmaken',
	'coll-clear_collection_confirm' => 'Wilt u uw boek werkelijk leegmaken?',
	'coll-clear_collection_tooltip' => "Alle pagina's uit uw huidige boek verwijderen",
	'coll-help' => 'Help',
	'coll-help_tooltip' => 'Hulp bij het maken van boeken',
	'coll-helppage' => 'Help:Boeken',
	'coll-load_collection' => 'Boek laden',
	'coll-load_collection_tooltip' => 'Dit boek als uw huidige boek laden',
	'coll-n_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'coll-printable_version_pdf' => 'PDF-versie',
	'coll-remove_this_page' => 'Deze pagina uit uw boek verwijderen',
	'coll-remove_page_popup' => 'Gekoppelde wikipagina uit uw boek verwijderen',
	'coll-remove_page_tooltip' => 'De huidige wikipagina uit uw boek verwijderen',
	'coll-show_collection' => 'Boek weergeven',
	'coll-show_collection_tooltip' => 'Klik om ow boek te bewerken/downloaden/bestellen',
	'coll-not_addable' => 'Deze pagina kan niet toegevoegd worden',
	'coll-make_suggestions' => "Pagina's suggereren",
	'coll-make_suggestions_tooltip' => "Suggesties weergeven op basis van de pagina's in uw boek",
	'coll-suggest_empty' => 'leegmaken',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Gunnernett
 * @author Harald Khan
 */
$messages['nn'] = array(
	'coll-print_export' => 'Skriv ut/eksportér',
	'coll-create_a_book' => 'Opprett ei bok',
	'coll-create_a_book_tooltip' => 'Lag ei bok eller ei artikkelsamling',
	'coll-book_creator' => 'laging av bok',
	'coll-download_as' => 'Last ned som $1',
	'coll-download_as_tooltip' => 'Last ned denne wikisida i $1-format',
	'coll-disable' => 'slå av',
	'coll-book_creator_disable' => 'Slå av funksjonen for å laga bok',
	'coll-book_creator_disable_tooltip' => 'Stopp å bruka funksjonen for å laga bok',
	'coll-add_category' => 'Legg til denne kategorien i boka di',
	'coll-add_category_popup' => 'Legg til i boka di wikisider i opplenka kategoriar',
	'coll-add_category_tooltip' => 'Legg til alle sidene i denne kategorien til boka di',
	'coll-add_this_page' => 'Legg til denne sida i boka di',
	'coll-add_page_popup' => 'Legg til lenkja wikiside i boka di',
	'coll-add_page_tooltip' => 'Legg til den noverande wikisida til boka di',
	'coll-bookscategory' => 'Bøker',
	'coll-clear_collection' => 'Tøm bok',
	'coll-clear_collection_confirm' => 'Vil du verkeleg fjerna alle sidene i boka di?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider frå den noverande boka di',
	'coll-help' => 'Hjelp',
	'coll-help_tooltip' => 'Få hjelp med å laga bøker',
	'coll-helppage' => 'Help:Bøker',
	'coll-load_collection' => 'Last bok',
	'coll-load_collection_tooltip' => 'Last denne boka som den noverande boka di',
	'coll-n_pages' => '{{PLURAL:$1|éi sida|$1 sider}}',
	'coll-printable_version_pdf' => 'PDF-versjon',
	'coll-remove_this_page' => 'Fjern denne sida frå boka di',
	'coll-remove_page_popup' => 'Fjern lenkja wikiside frå boka di',
	'coll-remove_page_tooltip' => 'Fjern den noverande wikisida frå boka di',
	'coll-show_collection' => 'Vis bok',
	'coll-show_collection_tooltip' => 'Trykk for å endra/lasta ned/tinga boka di',
	'coll-not_addable' => 'Denne sida kunne ikkje leggjast til',
	'coll-make_suggestions' => 'Framlegg til sider',
	'coll-make_suggestions_tooltip' => 'Syn framlegg på grunnlag av sidene i boka di',
	'coll-suggest_empty' => 'tom',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 * @author Simny
 */
$messages['no'] = array(
	'coll-create_a_book' => 'Opprett en bok',
	'coll-create_a_book_tooltip' => 'Lag ei bok eller en artikkelsamling',
	'coll-download_as' => 'Last ned som $1',
	'coll-download_as_tooltip' => 'Last ned denne wikisida i $1-format',
	'coll-disable' => 'slå av',
	'coll-add_category' => 'Legg til denne kategorien i boka di',
	'coll-add_category_popup' => 'Legg til wikisider i den lenkede kategorien i din bok',
	'coll-add_category_tooltip' => 'Legg til alle wikisider i denne kategorien til din bok',
	'coll-add_this_page' => 'Legg til denne siden i boka di',
	'coll-add_page_popup' => 'Legg til lenket wikiside i din bok',
	'coll-add_page_tooltip' => 'Legg til den nåværende wikisiden i din bok',
	'coll-bookscategory' => 'Bøker',
	'coll-clear_collection' => 'Tøm bok',
	'coll-clear_collection_confirm' => 'Vil du virkelig tømme boka?',
	'coll-clear_collection_tooltip' => 'Fjern alle wikisider fra din nåværende bok',
	'coll-help' => 'Hjelp',
	'coll-help_tooltip' => 'Få hjelp med å lage bøker',
	'coll-helppage' => 'Help:Bøker',
	'coll-load_collection' => 'Last bok',
	'coll-load_collection_tooltip' => 'Last denne boka som din nåværende bok',
	'coll-n_pages' => '$1 {{PLURAL:$1|side|sider}}',
	'coll-printable_version_pdf' => 'PDF-versjon',
	'coll-remove_this_page' => 'Fjern denne siden fra boka di',
	'coll-remove_page_popup' => 'Fjern lenket wikiside fra din bok',
	'coll-remove_page_tooltip' => 'Fjern den nåværende wikisiden fra din bok',
	'coll-show_collection' => 'Vis bok',
	'coll-show_collection_tooltip' => 'Trykk for å endre/laste ned/bestille din bok',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'coll-print_export' => 'Estampar / exportar',
	'coll-create_a_book' => 'Crear un libre',
	'coll-create_a_book_tooltip' => 'Crear un libre o una colleccion d’articles',
	'coll-book_creator' => 'Creator de libres',
	'coll-download_as' => 'Telecargat coma $1',
	'coll-download_as_tooltip' => "Telecarga una version $1 d'aquesta pagina wiki",
	'coll-disable' => 'desactivar',
	'coll-book_creator_disable' => 'Desactivar lo creator de libre',
	'coll-book_creator_disable_tooltip' => "Quitar d'utilizar lo creator de libre",
	'coll-add_category' => 'Apondre una categoria a vòstre libre',
	'coll-add_category_popup' => 'Apondre las paginas de la categoria ligada a vòstre libre',
	'coll-add_category_tooltip' => "Apondre totes los articles d'aquesta categoria a vòstre libre",
	'coll-add_this_page' => 'Apondre aquesta pagina a vòstre libre',
	'coll-add_page_popup' => 'Apondre la pagina ligada a vòstre libre',
	'coll-add_page_tooltip' => 'Apondre la pagina correnta a vòstre libre',
	'coll-bookscategory' => 'Libres',
	'coll-clear_collection' => 'Voidar lo libre',
	'coll-clear_collection_confirm' => 'Sètz segur que volètz escafar l’integralitat de vòstre libre ?',
	'coll-clear_collection_tooltip' => 'Levar totes los articles de vòstre libre actual',
	'coll-help' => 'Ajuda',
	'coll-help_tooltip' => "Afichar l'ajuda sus la creacion de libres",
	'coll-helppage' => 'Help:Libres',
	'coll-load_collection' => 'Cargar un libre',
	'coll-load_collection_tooltip' => 'Cargar aqueste libre en tant que vòstre libre actual',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-printable_version_pdf' => 'Version del PDF',
	'coll-remove_this_page' => 'Levar aquesta pagina de vòstre libre',
	'coll-remove_page_popup' => 'Suprimir la pagina ligada de vòstre libre',
	'coll-remove_page_tooltip' => 'Levar la pagina correnta de vòstre libre',
	'coll-show_collection' => 'Afichar lo libre',
	'coll-show_collection_tooltip' => 'Clicatz per modificar / telecargar / comandar vòstre libre',
	'coll-not_addable' => 'Aquesta pagina pòt pas èsser aponduda',
	'coll-make_suggestions' => 'Suggerir de paginas',
	'coll-make_suggestions_tooltip' => 'Far veire las suggestions fondadas sus las paginas dins vòstre libre',
	'coll-suggest_empty' => 'void',
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
	'coll-help' => 'Hilf',
	'coll-helppage' => 'Help:Bicher',
	'coll-n_pages' => '$1 {{PLURAL:$1|Blatt|Bledder}}',
	'coll-printable_version_pdf' => 'PDF-Version',
	'coll-suggest_empty' => 'leer',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Masti
 * @author Sp5uhe
 * @author ToSter
 */
$messages['pl'] = array(
	'coll-print_export' => 'Drukuj lub eksportuj',
	'coll-create_a_book' => 'Utwórz książkę',
	'coll-create_a_book_tooltip' => 'Tworzenie książki lub kolekcji stron',
	'coll-book_creator' => 'Tworzenie książki',
	'coll-download_as' => 'Pobierz jako $1',
	'coll-download_as_tooltip' => 'Pobierz wersję $1 tej strony wiki',
	'coll-disable' => 'wyłącz',
	'coll-book_creator_disable' => 'Wyłącz tworzenie książek',
	'coll-book_creator_disable_tooltip' => 'Wyłącz kreatora tworzenia książki',
	'coll-add_category' => 'Dodaj tę kategorię do książki',
	'coll-add_category_popup' => 'Dodaj strony wiki w linkowanej kategorii do książki',
	'coll-add_category_tooltip' => 'Dodaj wszystkie strony wiki znajdujące się w tej kategorii do książki',
	'coll-add_this_page' => 'Dodaj tę stronę do książki',
	'coll-add_page_popup' => 'Dodaj linkowaną stronę wiki do książki',
	'coll-add_page_tooltip' => 'Dodaj bieżącą stronę wiki do książki',
	'coll-bookscategory' => 'Książki',
	'coll-clear_collection' => 'Wyczyść książkę',
	'coll-clear_collection_confirm' => 'Czy jesteś pewien, że chcesz wyczyścić całą zawartość książki?',
	'coll-clear_collection_tooltip' => 'Usuń wszystkie strony wiki z bieżącej książki',
	'coll-help' => 'Pomoc',
	'coll-help_tooltip' => 'Pokaż pomoc na temat tworzenia książek',
	'coll-helppage' => 'Help:Książki',
	'coll-load_collection' => 'Załaduj książkę',
	'coll-load_collection_tooltip' => 'Załaduj tę książkę jako bieżącą',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|strony|stron}}',
	'coll-printable_version_pdf' => 'Wersja PDF',
	'coll-remove_this_page' => 'Usuń tę stronę z książki',
	'coll-remove_page_popup' => 'Usuń linkowaną stronę wiki z książki',
	'coll-remove_page_tooltip' => 'Usuń bieżącą stronę wiki z książki',
	'coll-show_collection' => 'Pokaż książkę',
	'coll-show_collection_tooltip' => 'Kliknij aby edytować, pobrać lub zamówić książkę',
	'coll-not_addable' => 'Tej strony nie można dodać',
	'coll-make_suggestions' => 'Proponowane strony',
	'coll-make_suggestions_tooltip' => 'Pokaż propozycje na podstawie już dodanych stron',
	'coll-suggest_empty' => 'puste',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'coll-print_export' => 'چاپول/صادرول',
	'coll-create_a_book' => 'يو کتاب جوړول',
	'coll-create_a_book_tooltip' => 'يو کتاب يا د مخونو ټولګه جوړول',
	'coll-download_as' => 'د $1 په ډول ښکته کول',
	'coll-add_category' => 'دا وېشنيزه په کتاب کې ورګډول',
	'coll-add_this_page' => 'دا مخ په کتاب کې ورګډول',
	'coll-bookscategory' => 'کتابونه',
	'coll-help' => 'لارښود',
	'coll-helppage' => 'Help:کتابونه',
	'coll-printable_version_pdf' => 'د PDF په بڼه',
	'coll-remove_this_page' => 'دا مخ له کتاب نه ليرې کول',
	'coll-show_collection' => 'کتاب ښکاره کول',
	'coll-suggest_empty' => 'تش',
);

/** Portuguese (Português)
 * @author 555
 * @author Crazymadlover
 * @author Giro720
 * @author Indech
 * @author Lijealso
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'coll-print_export' => 'Imprimir/exportar',
	'coll-create_a_book' => 'Criar um livro',
	'coll-create_a_book_tooltip' => 'Cria um livro ou uma coleção de páginas',
	'coll-book_creator' => 'Criador de livros',
	'coll-download_as' => 'Descarregar como $1',
	'coll-download_as_tooltip' => 'Baixar uma versão $1 desta página wiki',
	'coll-disable' => 'desabilitar',
	'coll-book_creator_disable' => 'Desabilitar criador de livros',
	'coll-book_creator_disable_tooltip' => 'Parar o uso do criador de livros',
	'coll-add_category' => 'Adicionar categoria ao seu livro',
	'coll-add_category_popup' => 'Adicionar ao seu livro as páginas wiki na categoria ligada',
	'coll-add_category_tooltip' => 'Adicionar todas as páginas wiki nesta categoria ao seu livro',
	'coll-add_this_page' => 'Adicionar esta página ao seu livro',
	'coll-add_page_popup' => 'Adicionar ao seu livro a página wiki ligada',
	'coll-add_page_tooltip' => 'Adicionar a página wiki atual ao seu livro',
	'coll-bookscategory' => 'Livros',
	'coll-clear_collection' => 'Esvaziar livro',
	'coll-clear_collection_confirm' => 'Deseja realmente limpar completamente o seu livro?',
	'coll-clear_collection_tooltip' => 'Remover todas as páginas wiki do seu livro atual',
	'coll-help' => 'Ajuda',
	'coll-help_tooltip' => 'Mostrar ajuda sobre criação de livros',
	'coll-helppage' => 'Help:Livros',
	'coll-load_collection' => 'Carregar livro',
	'coll-load_collection_tooltip' => 'Carregar este livro como o seu livro atual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-printable_version_pdf' => 'Versão em PDF',
	'coll-remove_this_page' => 'Remover esta página do seu livro',
	'coll-remove_page_popup' => 'Remover a página wiki ligada do seu livro',
	'coll-remove_page_tooltip' => 'Remover a página wiki atual do seu livro',
	'coll-show_collection' => 'Mostrar livro',
	'coll-show_collection_tooltip' => 'Clique para editar/descarregar/encomendar o seu livro',
	'coll-not_addable' => 'Esta página não pode ser adicionada',
	'coll-make_suggestions' => 'Sugerir páginas',
	'coll-make_suggestions_tooltip' => 'Mostrar sugestões baseadas nas páginas no seu livro',
	'coll-suggest_empty' => 'vazio',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 * @author Heldergeovane
 * @author Jorge Morais
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'coll-print_export' => 'Imprimir/exportar',
	'coll-create_a_book' => 'Criar um livro',
	'coll-create_a_book_tooltip' => 'Criar um livro ou coleção de páginas',
	'coll-book_creator' => 'Criador de livros',
	'coll-download_as' => 'Baixar como $1',
	'coll-download_as_tooltip' => 'Baixe uma versão $1 desta página wiki',
	'coll-disable' => 'desabilitar',
	'coll-book_creator_disable' => 'Desabilitar o criador de livros',
	'coll-book_creator_disable_tooltip' => 'Parar de usar o criador de livros',
	'coll-add_category' => 'Adicionar esta categoria ao seu livro',
	'coll-add_category_popup' => 'Adicionar páginas wiki na categoria ligada no seu livro',
	'coll-add_category_tooltip' => 'Adicionar todas as páginas wiki nesta categoria ao seu livro',
	'coll-add_this_page' => 'Adicionar esta página ao seu livro',
	'coll-add_page_popup' => 'Adicionar página wiki ligada ao seu livro',
	'coll-add_page_tooltip' => 'Adicionar a página wiki atual ao seu livro',
	'coll-bookscategory' => 'Livros',
	'coll-clear_collection' => 'Esvaziar livro',
	'coll-clear_collection_confirm' => 'Realmente deseja esvaziar completamente o seu livro?',
	'coll-clear_collection_tooltip' => 'Remover todas as páginas wiki do seu livro atual',
	'coll-help' => 'Ajuda',
	'coll-help_tooltip' => 'Exibir ajuda sobre a criação de livros',
	'coll-helppage' => 'Help:Livros',
	'coll-load_collection' => 'Carregar livro',
	'coll-load_collection_tooltip' => 'Carregar este livro como o seu livro atual',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-printable_version_pdf' => 'Versão em PDF',
	'coll-remove_this_page' => 'Remover esta página do seu livro',
	'coll-remove_page_popup' => 'Remover páginas wiki ligadas de seu livro',
	'coll-remove_page_tooltip' => 'Remover a página wiki atual do seu livro',
	'coll-show_collection' => 'Mostrar livro',
	'coll-show_collection_tooltip' => 'Clique para editar/baixar/encomendar o seu livro',
	'coll-not_addable' => 'Esta página não pode ser adicionada',
	'coll-make_suggestions' => 'Sugerir páginas',
	'coll-make_suggestions_tooltip' => 'Mostrar sugestões baseadas nas páginas do seu livro',
	'coll-suggest_empty' => 'vazio',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'coll-create_a_book' => 'Creează o carte',
	'coll-download_as' => 'Descarcă $1',
	'coll-disable' => 'dezactivează',
	'coll-add_category' => 'Adaugă această categorie la carte',
	'coll-add_category_popup' => 'Adăugaţi wiki pagini din categoria indicată în cartea dumneavoastră',
	'coll-add_category_tooltip' => 'Adăugaţi toate wiki paginile din această categorie în cartea dumneavoastră',
	'coll-add_this_page' => 'Adaugă această pagină la carte',
	'coll-add_page_popup' => 'Adăugaţi wiki paginile indicate în cartea dumneavoastră',
	'coll-add_page_tooltip' => 'Adăugaţi wiki pagina actuală în cartea dumneavoastră',
	'coll-bookscategory' => 'Cărţi',
	'coll-clear_collection' => 'Goliţi cartea',
	'coll-clear_collection_confirm' => 'Doriţi să goliţi complet cartea dumneavoastră?',
	'coll-clear_collection_tooltip' => 'Elimină toate wiki paginile din cartea actuală',
	'coll-help' => 'Ajutor',
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
	'coll-disable' => 'disabbilete',
	'coll-add_category' => "Aggiunge sta categorije jndr'à 'u libbre tue",
	'coll-bookscategory' => 'Libbre',
	'coll-clear_collection' => "Pulizze 'u libbre",
	'coll-help' => 'Aijute',
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
	'coll-book_creator' => 'Создание книги',
	'coll-download_as' => 'Загрузить как $1',
	'coll-download_as_tooltip' => 'Загрузить $1 версию этой вики-страницы',
	'coll-disable' => 'выключить',
	'coll-book_creator_disable' => 'Отключить книжного мастера',
	'coll-book_creator_disable_tooltip' => 'Прекратите использование книжного мастера',
	'coll-add_category' => 'Добавить эту категорию в вашу книгу',
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
	'coll-not_addable' => 'Данная страница не может быть добавлена',
	'coll-make_suggestions' => 'Предлагаемые страницы',
	'coll-make_suggestions_tooltip' => 'Показать предложения, основанные на существующих страницах вашей книги',
	'coll-suggest_empty' => 'пуста',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'coll-print_export' => 'Бэчээт/Экспорт',
	'coll-create_a_book' => 'Кинигэни айарга',
	'coll-create_a_book_tooltip' => 'Кинигэни эбэтэр ыстатыйалар хомуурунньуктарын айыы',
	'coll-book_creator' => 'Кинигэ оҥоруу',
	'coll-download_as' => 'Маннык $1 киллэр',
	'coll-download_as_tooltip' => 'Бу биики-сирэй $1 барылын хачайдаан ылыы',
	'coll-disable' => 'араарыы',
	'coll-book_creator_disable' => 'Кинигэ оҥорооччуну араарыы',
	'coll-book_creator_disable_tooltip' => 'Кинигэ онорооччуну туһаныма',
	'coll-add_category' => 'Бу категорияны кинигэҕэр эбии',
	'coll-add_category_popup' => 'Сигэнэр категорияттан сирэйдэри кинигэҕэ киллэр',
	'coll-add_category_tooltip' => 'Бу категория биики сирэйдэрин кинигэҕэ киллэр',
	'coll-add_this_page' => 'Бу сирэйи кинигэҕэр киллэр',
	'coll-add_page_popup' => 'Сигэнэр сирэйи кинигэҕэ киллэр',
	'coll-add_page_tooltip' => 'Кинигэҕэ бу биики-сирэйи эбии',
	'coll-bookscategory' => 'Кинигэлэр',
	'coll-clear_collection' => 'Кинигэни ыраастаа',
	'coll-clear_collection_confirm' => 'Кырдьык кинигэҕин ыраастаары гынаҕын дуо?',
	'coll-clear_collection_tooltip' => 'Кинигэттэн биики сирэйдэри сот',
	'coll-help' => 'Көмө',
	'coll-help_tooltip' => 'Кинигэ айар туһунан көмө',
	'coll-helppage' => 'Help:Кинигэлэр',
	'coll-load_collection' => 'Кинигэни (атын сиртэн ылан) суруттар',
	'coll-load_collection_tooltip' => 'Бу кинигэни билиҥҥи (текущай) кинигэ курдук киллэр',
	'coll-n_pages' => '$1 {{PLURAL:$1|сирэй|сирэйдээх}}',
	'coll-printable_version_pdf' => 'PDF-барыла',
	'coll-remove_this_page' => 'Бу сирэйи кинигэҕиттэн сотуу',
	'coll-remove_page_popup' => 'Сигэнэр сирэйи кинигэттэн сот',
	'coll-remove_page_tooltip' => 'Бу биики сирэйи кинигэттэн сот',
	'coll-show_collection' => 'Кинигэни көрдөр',
	'coll-show_collection_tooltip' => 'Уларытарга маны баттаа/хачайдыырга/кинигэни сакаастыырга',
	'coll-not_addable' => 'Бу сирэй эбиллэр кыаҕа суох',
	'coll-make_suggestions' => 'Бу сирэйдэри туттуоххун сөп',
	'coll-make_suggestions_tooltip' => 'Кинигэҥ баар сирэйдэригэр олоҕуран оҥоһуллубут туттуоххун сөп сирэйдэр тиһиктэрин көрдөр',
	'coll-suggest_empty' => 'кураанах',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'coll-print_export' => 'Tlačiť/exportovať',
	'coll-create_a_book' => 'Vytvoriť knihu',
	'coll-create_a_book_tooltip' => 'Vytvoriť knihu alebo kolekciu stránok',
	'coll-book_creator' => 'Tvorba knihy',
	'coll-download_as' => 'Stiahnuť ako $1',
	'coll-download_as_tooltip' => 'Stiahnuť verziu $1 tejto wiki stránky',
	'coll-disable' => 'vypnúť',
	'coll-book_creator_disable' => 'Vypnúť tvorbu knihy',
	'coll-book_creator_disable_tooltip' => 'Zastaviť používanie Tvorby knihy',
	'coll-add_category' => 'Pridať túto kategóriu do vašej knihy',
	'coll-add_category_popup' => 'Pridať do vašej knihy wiki stránky v odkazovanej kategórii',
	'coll-add_category_tooltip' => 'Pridať všetky stránky wiki v tejto kategórii do vašej knihy',
	'coll-add_this_page' => 'Pridať túto stránku do vašej knihy',
	'coll-add_page_popup' => 'Pridať do vašej knihy odkazovanú wiki stránku',
	'coll-add_page_tooltip' => 'Pridať aktuálnu wiki stránku do vašej knihy',
	'coll-bookscategory' => 'Knihy',
	'coll-clear_collection' => 'Vyčistiť knihu',
	'coll-clear_collection_confirm' => 'Skutočne chcete celkom vyčistiť svoju knihu?',
	'coll-clear_collection_tooltip' => 'Odstrániť všetky stránky wiki z vašej aktuálnej knihy',
	'coll-help' => 'Pomocník',
	'coll-help_tooltip' => 'Zobraziť pomocníka s vytváraním knihy',
	'coll-helppage' => 'Help:Knihy',
	'coll-load_collection' => 'Načítať knihu',
	'coll-load_collection_tooltip' => 'Načítať túto knihu ako vašu aktuálnu knihu',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránok}}',
	'coll-printable_version_pdf' => 'PDF verzia',
	'coll-remove_this_page' => 'Odstrániť túto stránku z vašej knihy',
	'coll-remove_page_popup' => 'Odstrániť z vašej knihy odkazovanú wiki stránku',
	'coll-remove_page_tooltip' => 'Odstrániť aktuálnu wiki stránku z vašej knihy',
	'coll-show_collection' => 'Zobraziť knihu',
	'coll-show_collection_tooltip' => 'Kliknutím môžete upraviť/stiahnuť/objednať knihu',
	'coll-not_addable' => 'Túto stránku nemožno pridať',
	'coll-make_suggestions' => 'Navrhnúť stránky',
	'coll-make_suggestions_tooltip' => 'Zobraziť návrhy na základe stránok vo vašej knihe',
	'coll-suggest_empty' => 'prázdne',
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

/** Serbian Cyrillic ekavian (Српски (ћирилица))
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

/** Serbian Latin ekavian (Srpski (latinica))
 * @author Michaello
 */
$messages['sr-el'] = array(
	'coll-create_a_book' => 'Napravi knjigu',
	'coll-download_as' => 'Preuzmi kao $1',
	'coll-add_category' => 'Dodaj kategoriju',
	'coll-add_category_popup' => 'Dodajte članke iz priložene kategorije u Vašu knjigu',
	'coll-add_category_tooltip' => 'Dodaje sve viki stranice u ovoj kategoriji u vašu knjigu',
	'coll-add_page_popup' => 'Dodajte priloženi članak u Vašu knjigu',
	'coll-add_page_tooltip' => 'Dodaje trenutnu viki stranicu vašoj knjizi',
	'coll-bookscategory' => 'Knjige',
	'coll-clear_collection' => 'Očisti knjigu',
	'coll-clear_collection_confirm' => 'Da li zaista želite da potpuno očistite svoju knjigu?',
	'coll-clear_collection_tooltip' => 'Uklanja sve viki stranice iz vaše trenutne knjige',
	'coll-helppage' => 'Help:Knjige',
	'coll-load_collection' => 'Učitaj knjigu',
	'coll-load_collection_tooltip' => 'Učitava ovu knjigu kao vašu trenutnu knjigu',
	'coll-n_pages' => '{{PLURAL:$1|jedna strana|$1 strane|$1 strana}}',
	'coll-printable_version_pdf' => 'PDF verzija',
	'coll-remove_page_popup' => 'Izbrišite priloženi članak iz svoje knjige',
	'coll-remove_page_tooltip' => 'Uklanja trenutnu viki stranicu iz vaše knjige',
	'coll-show_collection' => 'Prikaži knjigu',
	'coll-show_collection_tooltip' => 'Kliknite za izmenu, preuzimanje ili naručivanje svoje knjige',
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
 * @author GameOn
 * @author M.M.S.
 * @author Micke
 * @author Najami
 * @author Poxnar
 * @author Rotsee
 * @author Sannab
 */
$messages['sv'] = array(
	'coll-print_export' => 'Skriv ut/exportera',
	'coll-create_a_book' => 'Skapa en bok',
	'coll-create_a_book_tooltip' => 'Skapa en bok eller artikelsamling',
	'coll-book_creator' => 'Bokskapare',
	'coll-download_as' => 'Hämta som $1',
	'coll-download_as_tooltip' => 'Ladda ner den här wikisidan i $1-format',
	'coll-disable' => 'slå av',
	'coll-book_creator_disable' => 'Avaktiviera bokskapare',
	'coll-book_creator_disable_tooltip' => 'Sluta använda bokskapare',
	'coll-add_category' => 'Lägg till den här kategorin i boken',
	'coll-add_category_popup' => 'Lägg till wikisidor i den länkade kategorin till din bok',
	'coll-add_category_tooltip' => 'Lägg till alla wikisidor i den här kategorin till din bok',
	'coll-add_this_page' => 'Lägg till den här sidan i boken',
	'coll-add_page_popup' => 'Lägg till länkade wikisidor till din bok',
	'coll-add_page_tooltip' => 'Lägg till den nuvarande wikisidan till din bok',
	'coll-bookscategory' => 'Böcker',
	'coll-clear_collection' => 'Töm bok',
	'coll-clear_collection_confirm' => 'Vill du verkligen helt tömma din bok?',
	'coll-clear_collection_tooltip' => 'Ta bort alla wikisidor från din nuvarande bok',
	'coll-help' => 'Hjälp',
	'coll-help_tooltip' => 'Få hjälp med att skapa böcker',
	'coll-helppage' => 'Help:Böcker',
	'coll-load_collection' => 'Hämta bok',
	'coll-load_collection_tooltip' => 'Ladda den här boken som din nuvarande bok',
	'coll-n_pages' => '$1 {{PLURAL:$1|sida|sidor}}',
	'coll-printable_version_pdf' => 'PDF-version',
	'coll-remove_this_page' => 'Ta bort den här sidan ur boken',
	'coll-remove_page_popup' => 'Ta bort länkad wikisida från din bok',
	'coll-remove_page_tooltip' => 'Ta bort den nuvarande wikisidan från din bok',
	'coll-show_collection' => 'Visa bok',
	'coll-show_collection_tooltip' => 'Klicka för att redigera/ladda ner/beställa din bok',
	'coll-not_addable' => 'Denna sida kan inte läggas till',
	'coll-make_suggestions' => 'Föreslå sidor',
	'coll-make_suggestions_tooltip' => 'Visa förslag baserade på sidorna i din bok',
	'coll-suggest_empty' => 'tom',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Veeven
 */
$messages['te'] = array(
	'coll-print_export' => 'ముద్రించండి/ఎగుమతి చేయండి',
	'coll-create_a_book' => 'ఓ పుస్తకాన్ని సృష్టించండి',
	'coll-download_as' => '$1 క్రింద దిగుమతి చేసుకోండి',
	'coll-disable' => 'అచేతన పరచు',
	'coll-add_category' => 'పుస్తకముకు ఈ వర్గాన్ని చేర్చు',
	'coll-add_this_page' => 'ఈ పేజీని మీ పుస్తకములో చేర్చండి',
	'coll-bookscategory' => 'పుస్తకాలు',
	'coll-clear_collection' => 'పుస్తకముని తుడిచివేయి',
	'coll-clear_collection_confirm' => 'మీరు నిజంగా మీ పుస్తకమును పూర్తిగా తొలగించాలని అనుకొంటున్నారా?',
	'coll-help' => 'సహాయం',
	'coll-helppage' => 'Help:పుస్తకాలు',
	'coll-n_pages' => '$1 {{PLURAL:$1|పేజీ|పేజీలు}}',
	'coll-printable_version_pdf' => 'PDF కూర్పు',
	'coll-show_collection' => 'పుస్తకముని చూపించు',
	'coll-suggest_empty' => 'ఖాళీ',
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
	'coll-print_export' => 'Yazdır/dışa aktar',
	'coll-create_a_book' => 'Bir kitap oluştur',
	'coll-create_a_book_tooltip' => 'Bir kitap veya sayfa derlemesi oluştur',
	'coll-book_creator' => 'Koleksiyon oluşturucu',
	'coll-download_as' => '$1 olarak indir',
	'coll-download_as_tooltip' => 'Bu viki sayfasının bir $1 sürümünü indir',
	'coll-disable' => 'devre dışı bırak',
	'coll-book_creator_disable' => 'Koleksiyon oluşturucuyu devre dışı bırak',
	'coll-book_creator_disable_tooltip' => 'Koleksiyon oluşturucuyu kullanmayı bırak',
	'coll-add_category' => 'Bu kategoriyi kitabınıza ekleyin',
	'coll-add_category_popup' => 'Bağlantılı kategorideki viki sayfalarını kitabınıza ekleyin',
	'coll-add_category_tooltip' => 'Bu kategorideki tüm viki sayfalarını koleksiyonunuza ekleyin',
	'coll-add_this_page' => 'Bu sayfayı koleksiyonunuza ekleyin',
	'coll-add_page_popup' => 'Kitabınıza bağlantılı viki sayfası ekleyin',
	'coll-add_page_tooltip' => 'Bu sayfayı koleksiyonunuza ekleyin',
	'coll-bookscategory' => 'Koleksiyonlar',
	'coll-clear_collection' => 'Koleksiyonu temizle',
	'coll-clear_collection_confirm' => 'Koleksiyonunuzu tamamen temizlemeyi istiyor musunuz?',
	'coll-clear_collection_tooltip' => 'Mevcut koleksiyonunuzdaki tüm viki sayfalarını silin',
	'coll-help' => 'Yardım',
	'coll-help_tooltip' => 'Koleksiyon oluşturma hakkında yardım göster',
	'coll-helppage' => 'Help:Koleksiyonlar',
	'coll-load_collection' => 'Koleksiyonu yükle',
	'coll-load_collection_tooltip' => 'Bu koleksiyonu varsayılan koleksiyonunuz olarak yükleyin',
	'coll-n_pages' => '$1 {{PLURAL:$1|sayfa|sayfa}}',
	'coll-printable_version_pdf' => 'PDF sürümü',
	'coll-remove_this_page' => 'Bu sayfayı koleksiyonunuzdan çıkarın',
	'coll-remove_page_popup' => 'Bağlantılı viki sayfasını kitabınızdan çıkarın',
	'coll-remove_page_tooltip' => 'Bu sayfayı koleksiyonunuzdan çıkarın',
	'coll-show_collection' => 'Koleksiyonu göster',
	'coll-show_collection_tooltip' => 'Tıklayıp koleksiyonunuzu düzenleyin/indirin/sipariş edin',
	'coll-not_addable' => 'Sayfa eklenemiyor',
	'coll-make_suggestions' => 'Sayfa öner',
	'coll-make_suggestions_tooltip' => 'Koleksiyonunuzda mevcut sayfalara göre öneri göster',
	'coll-suggest_empty' => 'boş',
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
	'coll-print_export' => 'Stanpa/esporta',
	'coll-create_a_book' => 'Crea un libro',
	'coll-create_a_book_tooltip' => 'Crèa un libro o na racolta de articoli',
	'coll-book_creator' => 'Creador de libri',
	'coll-download_as' => 'Descarga come $1',
	'coll-download_as_tooltip' => 'Descarga na version $1 de sta pagina wiki',
	'coll-disable' => 'disativa',
	'coll-book_creator_disable' => 'Destaca el creador de libri',
	'coll-book_creator_disable_tooltip' => 'Desmeti de doparar el creador de libri',
	'coll-add_category' => 'Zonta sta categoria al to libro',
	'coll-add_category_popup' => 'Zonta al to libro le pagine in te le categorie riciamà',
	'coll-add_category_tooltip' => 'Zonta tute le pagine wiki de sta categoria al to libro',
	'coll-add_this_page' => 'Zonta sta pagina al to libro',
	'coll-add_page_popup' => 'Zonta al to libro la pagina wiki riciamà',
	'coll-add_page_tooltip' => 'Zonta sta pagina wiki al to libro',
	'coll-bookscategory' => 'Libri',
	'coll-clear_collection' => 'Desvòda libro',
	'coll-clear_collection_confirm' => 'Vuto dalbòn netar conpletamente el to libro?',
	'coll-clear_collection_tooltip' => 'Cava tute le pagine wiki dal to libro atuale',
	'coll-help' => 'Jùteme',
	'coll-help_tooltip' => 'Mostra le pagine de ajuto su la creassion dei libri',
	'coll-helppage' => 'Help:Libri',
	'coll-load_collection' => 'Carga libro',
	'coll-load_collection_tooltip' => 'Carga sto libro come el to libro atuale',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàxena|pàxene}}',
	'coll-printable_version_pdf' => 'Versiòn PDF',
	'coll-remove_this_page' => 'Cava sta pagina dal to libro',
	'coll-remove_page_popup' => 'Cava dal to libro la pagina wiki riciamà',
	'coll-remove_page_tooltip' => 'Cava sta pagina wiki dal to libro',
	'coll-show_collection' => 'Mostra libro',
	'coll-show_collection_tooltip' => 'Struca el mouse par modificar, descargar o ordinar el to libro',
	'coll-not_addable' => 'Sta pagina no se pol zontarla',
	'coll-make_suggestions' => 'Sugerissi pagine',
	'coll-make_suggestions_tooltip' => 'Fame védar dei sugerimenti basà su le pagine del me libro',
	'coll-suggest_empty' => 'vodo',
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'coll-create_a_book' => 'Säta kirj',
	'coll-bookscategory' => 'Kirjad',
	'coll-help' => 'Abu',
	'coll-helppage' => 'Help:Kirjad',
	'coll-printable_version_pdf' => 'PDF-versii',
	'coll-suggest_empty' => "pall'az",
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'coll-print_export' => 'In/xuất ra',
	'coll-create_a_book' => 'Tạo một quyển sách',
	'coll-create_a_book_tooltip' => 'Tạo một cuốn sách hoặc sưu tập trang',
	'coll-book_creator' => 'Bộ tạo sách',
	'coll-download_as' => 'Tải về dưới dạng $1',
	'coll-download_as_tooltip' => 'Tải xuống một phiên bản $1 của trang wiki này',
	'coll-disable' => 'tắt',
	'coll-book_creator_disable' => 'Tắt bộ tạo sách',
	'coll-book_creator_disable_tooltip' => 'Ngừng sử dụng bộ tạo sách',
	'coll-add_category' => 'Thêm thể loại này vào cuốn sách của bạn',
	'coll-add_category_popup' => 'Thêm vào sách những trang wiki thuộc thể loại được liên kết',
	'coll-add_category_tooltip' => 'Thêm vào sách các trang wiki thuộc thể loại được liên kết',
	'coll-add_this_page' => 'Thêm trang này vào cuốn sách',
	'coll-add_page_popup' => 'Thêm trang wiki vào sách',
	'coll-add_page_tooltip' => 'Thêm trang wiki này vào sách',
	'coll-bookscategory' => 'Sách',
	'coll-clear_collection' => 'Xóa sách',
	'coll-clear_collection_confirm' => 'Bạn có chắc muốn xóa hẳn sách của bạn?',
	'coll-clear_collection_tooltip' => 'Bỏ tất cả trang wiki ra khỏi sách này',
	'coll-help' => 'Trợ giúp',
	'coll-help_tooltip' => 'Xem giúp đỡ về việc tạo sách',
	'coll-helppage' => 'Help:Sách',
	'coll-load_collection' => 'Mở sách',
	'coll-load_collection_tooltip' => 'Đặt sách này làm sách hiện hành',
	'coll-n_pages' => '$1 {{PLURAL:$1|trang|trang}}',
	'coll-printable_version_pdf' => 'Bản PDF',
	'coll-remove_this_page' => 'Xóa trang này ra khỏi cuốn sách',
	'coll-remove_page_popup' => 'Bỏ trang wiki được liên kết ra khỏi sách',
	'coll-remove_page_tooltip' => 'Bỏ trang wiki này ra khỏi sách',
	'coll-show_collection' => 'Xem sách',
	'coll-show_collection_tooltip' => 'Nhấn chuột để sửa đổi, tải xuống, hay đặt sách của bạn',
	'coll-not_addable' => 'Trang này không thêm được',
	'coll-make_suggestions' => 'Đề nghị trang',
	'coll-make_suggestions_tooltip' => 'Hiện đề nghị dựa trên các trang trong cuốn sách',
	'coll-suggest_empty' => 'trống',
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

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'coll-help' => 'הילף',
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
 * @author Liangent
 * @author Wmr89502270
 */
$messages['zh-hans'] = array(
	'coll-print_export' => '打印／导出',
	'coll-create_a_book' => '创建图书',
	'coll-download_as' => '下载为 $1',
	'coll-download_as_tooltip' => '下载这个wiki页面的$1版本',
	'coll-disable' => '禁用',
	'coll-add_category' => '将此分类添加到图书',
	'coll-add_category_popup' => '将链接指向的分类中所有维基页面加入您的图书中',
	'coll-add_category_tooltip' => '将这个分类中的所有维基页面加入您的图书中',
	'coll-add_this_page' => '将此页面添加到图书',
	'coll-add_page_popup' => '将链接指向的维基页面加入您的图书中',
	'coll-add_page_tooltip' => '将当前的维基页面加入您的图书中',
	'coll-bookscategory' => '图书',
	'coll-clear_collection' => '清除记录',
	'coll-clear_collection_confirm' => '真的要清除？',
	'coll-clear_collection_tooltip' => '从您当前的图书中移除所有维基页面',
	'coll-help' => '帮助',
	'coll-help_tooltip' => '显示关于创建图书的帮助',
	'coll-helppage' => 'Help:图书',
	'coll-load_collection' => '载入图书',
	'coll-load_collection_tooltip' => '将这本图书加载为您当前的图书',
	'coll-n_pages' => '$1个页面',
	'coll-printable_version_pdf' => 'PDF 版本',
	'coll-remove_this_page' => '从图书中移除此页面',
	'coll-remove_page_popup' => '将链接指向的维基页面从您的图书中移除',
	'coll-remove_page_tooltip' => '将当前维基页面从您的图书中移除',
	'coll-show_collection' => '显示图书',
	'coll-show_collection_tooltip' => '点击此处编辑、下载或订购图书',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alexsh
 */
$messages['zh-hant'] = array(
	'coll-print_export' => '列印/匯出',
	'coll-create_a_book' => '建立圖書',
	'coll-create_a_book_tooltip' => '建立圖書或頁面集合',
	'coll-download_as' => '下載為 $1',
	'coll-download_as_tooltip' => '下載這個wiki頁面的$1版本',
	'coll-disable' => '禁用',
	'coll-add_category' => '將此分類增加到圖書',
	'coll-add_category_popup' => '將連接指向的分類中所有維基頁面加入您的圖書中',
	'coll-add_category_tooltip' => '將這個分類中的所有維基頁面加入您的圖書中',
	'coll-add_this_page' => '將此頁面增加到圖書',
	'coll-add_page_popup' => '將連接指向的維基頁面加入您的圖書中',
	'coll-add_page_tooltip' => '將當前的維基頁面加入您的圖書中',
	'coll-bookscategory' => '圖書',
	'coll-clear_collection' => '清除記錄',
	'coll-clear_collection_confirm' => '真的要完全清除？',
	'coll-clear_collection_tooltip' => '從您目前的圖書中移除所有維基頁面',
	'coll-help' => '幫助',
	'coll-help_tooltip' => '顯示關於建立圖書的說明',
	'coll-helppage' => 'Help:圖書',
	'coll-load_collection' => '載入圖書',
	'coll-load_collection_tooltip' => '將這本圖書加載為您目前的圖書',
	'coll-n_pages' => '$1個頁面',
	'coll-printable_version_pdf' => 'PDF 版本',
	'coll-remove_this_page' => '從圖書中移除此頁面',
	'coll-remove_page_popup' => '將連接指向的維基頁面從您的圖書中移除',
	'coll-remove_page_tooltip' => '將目前維基頁面從您的圖書中移除',
	'coll-show_collection' => '顯示圖書',
	'coll-show_collection_tooltip' => '點擊此處編輯、下載或訂購圖書',
);

