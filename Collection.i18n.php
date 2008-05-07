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
	'coll-desc'                       => '[[Special:Collection|Collect pages]], generate PDFs',
	'coll-collection'                 => 'Collection',
	'coll-collections'                => 'Collections',
	'coll-portlet_title'              => 'My Collection',
	'coll-add_page'                   => 'Add page',
	'coll-remove_page'                => 'Remove page',
	'coll-add_category'               => 'Add category',
	'coll-load_collection'            => 'Load collection',
	'coll-show_collection'            => 'Show collection',
	'coll-help_collections'           => 'Collections help',
	'coll-empty'                      => 'empty',
	'coll-page'                       => 'page',
	'coll-pages'                      => 'pages',
	'coll-download_as_pdf'            => 'Download as PDF',
	'coll-noscript_text'              => '<noscript><h1>JavaScript is Required!</h1>
<strong>Your browser does not support JavaScript or JavaScript has been turned off.
This page will not work correctly, unless JavaScript is enabled.</strong></noscript>',
	'coll-intro_text'                 => "You can collect pages, generate and download a PDF file from page collections and save page collections for later use or to share them.

See the [[{{MediaWiki:Coll-helppage}}|help page about collections]] for more information.",
	'coll-helppage'                   => 'Help:Collections',
	'coll-pdftoobigcat'               => 'The category contains more than %PARAM% pages, only the first %PARAM% pages can be added to your collection.
Do you want to add them?',
	'coll-my_collection'              => 'My Collection',
	'coll-download_title'             => 'Download Collection as PDF',
	'coll-download_text'              => 'To download an automatically generated PDF file of your page collection, click the button.',
	'coll-download_pdf'               => 'Download PDF',
	'coll-remove'                     => 'Remove',
	'coll-move_to_top'                => 'Move to top',
	'coll-move_up'                    => 'Move up',
	'coll-move_down'                  => 'Move down',
	'coll-move_to_bottom'             => 'Move to bottom',
	'coll-title'                      => 'Title:',
	'coll-subtitle'                   => 'Subtitle:',
	'coll-contents'                   => 'Contents',
	'coll-create_chapter'             => 'Create new chapter',
	'coll-sort_alphabetically'        => 'Sort pages alphabetically',
	'coll-clear_collection'           => 'Clear collection',
	'coll-clear_confirm'              => 'Do you really want to clear your collection?',
	'coll-rename'                     => 'Rename',
	'coll-new_chapter'                => 'Enter name for new chapter',
	'coll-rename_chapter'             => 'Enter new name for chapter',
	'coll-no_such_category'           => 'No such category',
	'coll-mwpdf_error_title'          => 'Could not generate PDF',
	'coll-mwpdf_error_msg'            => 'An error occured during PDF generation.',
	'coll-mwzip_error_title'          => 'Could not generate page collection',
	'coll-mwzip_error_msg'            => 'An error occured during generation of page collection.',
	'coll-notitle_title'              => 'Could not get page title',
	'coll-notitle_title'              => 'The title of the page could not be determined.',
	'coll-post_failed_title'          => 'POST request failed',
	'coll-post_failed_msg'            => 'The POST request failed.',
	'coll-enter_title'                => 'Enter title for collection:',
	'coll-error_reponse'              => 'Error response from server',
	'coll-empty_collection'           => 'Empty collection',
	'coll-revision'                   => 'Revision: %PARAM%',
	'coll-save_collection_title'      => 'Save Collection',
	'coll-save_collection_text'       => 'To save this collection for later use, choose a collection type and enter a page title:',
	'coll-login_to_save'              => 'If you want to save collections for later use, please <a href="$1">log in or create an account</a>.',
	'coll-personal_collection_label'  => 'Personal collection:',
	'coll-community_collection_label' => 'Community collection:',
	'coll-save_collection'            => 'Save Collection',
	'coll-overwrite_title'            => 'Page exists. Overwrite?',
	'coll-overwrite_text'             => 'A page with the name $1 already exists.
Do you want it to be replaced with your collection?',
	'coll-yes'                        => 'Yes',
	'coll-no'                         => 'No',
	'coll-load_overwrite_text'        => 'You already have some pages in your collection.
Do want to overwrite your current collection, append the new content or cancel?',
	'coll-overwrite'                  => 'Overwrite',
	'coll-append'                     => 'Append',
	'coll-cancel'                     => 'Cancel',
	'coll-limit_exceeded_title'       => 'Collection Too Big',
	'coll-limit_exceeded_text'        => 'Your page collection is too big.
No more pages can be added.',
	'coll-generating_pdf_title'       => 'Generating PDF',
	'coll-generating_pdf_text'        => "'''Please wait while the PDF file is being generated.'''

Progress: %(progress)d%%.

This page should automatically refresh every few seconds.
If this does not work, please press refresh button of your browser.",
	'coll-pdf_finished_text'          => "The PDF file has been generated.
[http://URL Click here] to download it to your computer.",
    'coll-pdf_not_satisfied'          => "Not satisfied with the PDF output? See [[{{MediaWiki:Coll-helppage}}|the help page about collections]] for possibilities to improve it.",
	'coll-notfound_title'             => 'Collection Not Found',
	'coll-notfound_text'              => 'Could not find collection page.',
	'coll-return_to_collection'       => '<p>Return to <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'The following pages could not be rendered and were removed from the PDF file: %(articles)s',
	'coll-pdf_error_text'             => 'There was an error when generating the PDF file.',
	'coll-book_title'    => 'Order Printed Book',
	'coll-book_text'     => 'You can order a printed book containing your page collection by visiting one of the following print-on-demand partners:',
	'coll-order_from_pp' => 'Order book from $1',
	'coll-about_pp'      => 'About $1',
);

/** Karelian (Karjala)
 * @author Flrn
 */
$messages['krl'] = array(
	'coll-cancel' => 'Keskevytä',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author SPQRobin
 */
$messages['af'] = array(
	'coll-empty'    => 'leeg',
	'coll-page'     => 'bladsy',
	'coll-pages'    => 'bladsye',
	'coll-remove'   => 'Skrap',
	'coll-title'    => 'Titel:',
	'coll-subtitle' => 'Subtitel:',
	'coll-contents' => 'Inhoud',
	'coll-yes'      => 'Ja',
	'coll-no'       => 'Nee',
	'coll-cancel'   => 'Kanselleer',
);

/** Arabic (العربية)
 * @author Meno25
 * @author Siebrand
 */
$messages['ar'] = array(
	'coll-desc'                       => '[[Special:Collection|صفحات مجموعة]]، تولد PDFs',
	'coll-collection'                 => 'مجموعة',
	'coll-collections'                => 'مجموعات',
	'coll-portlet_title'              => 'مجموعتي',
	'coll-add_page'                   => 'إضافة صفحة',
	'coll-remove_page'                => 'إزالة صفحة',
	'coll-add_category'               => 'إضافة تصنيف',
	'coll-load_collection'            => 'تحميل المجموعة',
	'coll-show_collection'            => 'عرض المجموعة',
	'coll-help_collections'           => 'مساعدة المجموعات',
	'coll-empty'                      => 'فارغ',
	'coll-page'                       => 'صفحة',
	'coll-pages'                      => 'صفحات',
	'coll-download_as_pdf'            => 'حمل ك PDF',
	'coll-noscript_text'              => '<noscript><h1>الجافاسكريبت مطلوب!</h1>
<strong>متصفحك لا يدعم جافاسكريبت جافاسكريبت أو الجافاسكريبت تم تعطيلها.
هذه الصفحة لن تعمل بطريقة صحيحة، إلا إذا تم تفعيل الجافاسكريبت.</strong></noscript>',
	'coll-intro_text'                 => 'يمكنك جمع الصفحات، توليد وتحميل ملف PDF من مجموعات الصفحة وحفظ مجموعات الصفحة للاستخدام فيما بعد أو لمشاركتها.

انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] لمزيد من المعلومات.',
	'coll-helppage'                   => 'Help:مجموعات',
	'coll-pdftoobigcat'               => 'التصنيف يحتوي على أكثر من %PARAM% صفحة، فقط أول %PARAM% صفحة يمكن إضافتها إلى مجموعتك.
هل تريد إضافتها؟',
	'coll-my_collection'              => 'مجموعتي',
	'coll-download_title'             => 'حمل المجموعة ك PDF',
	'coll-download_text'              => 'لتحميل ملف PDF مولد تلقائيا من مجموعة صفحتك، اضغط الزر.',
	'coll-download_pdf'               => 'حمل PDF',
	'coll-remove'                     => 'إزالة',
	'coll-move_to_top'                => 'تحريك إلى الأعلى',
	'coll-move_up'                    => 'حرك إلى الأعلى',
	'coll-move_down'                  => 'حرك إلى الأسفل',
	'coll-move_to_bottom'             => 'تحريك إلى الأسفل',
	'coll-title'                      => 'العنوان:',
	'coll-subtitle'                   => 'العنوان الفرعي:',
	'coll-contents'                   => 'محتويات',
	'coll-create_chapter'             => 'إنشاء فرع جديد',
	'coll-sort_alphabetically'        => 'تصنيف الصفحات أبجديا',
	'coll-clear_collection'           => 'إفراغ المجموعة',
	'coll-clear_confirm'              => 'هل تريد فعلا إفراغ مجموعتك؟',
	'coll-rename'                     => 'إعادة تسمية',
	'coll-new_chapter'                => 'أدخل الاسم للفرع الجديد',
	'coll-rename_chapter'             => 'أدخل الاسم الجديد للفرع',
	'coll-no_such_category'           => 'لا تصنيف كهذا',
	'coll-mwpdf_error_title'          => 'لم يمكن توليد PDF',
	'coll-mwpdf_error_msg'            => 'حدث خطأ أثناء توليد PDF.',
	'coll-mwzip_error_title'          => 'لم يمكن توليد مجموعة الصفحة',
	'coll-mwzip_error_msg'            => 'حدث خطأ أثناء توليد مجموعة الصفحة.',
	'coll-notitle_title'              => 'عنوان الصفحة لم يمكن تحديده.',
	'coll-post_failed_title'          => 'طلب POST فشل',
	'coll-post_failed_msg'            => 'طلب POST فشل.',
	'coll-enter_title'                => 'أدخل العنوان للمجموعة:',
	'coll-error_reponse'              => 'خطأ استجابة من الخادم',
	'coll-empty_collection'           => 'مجموعة فارغة',
	'coll-revision'                   => 'النسخة: %PARAM%',
	'coll-save_collection_title'      => 'حفظ المجموعة',
	'coll-save_collection_text'       => 'لحفظ هذه المجموعة للاستخدام المستقبلي، اختر نوع مجموعة وأدخل عنوان صفحة:',
	'coll-login_to_save'              => 'لو كنت تريد حفظ المجموعات من أجل الاستخدام فيما بعد، من فضلك <a href="$1">قم بتسجيل الدخول أو إنشاء حساب</a>.',
	'coll-personal_collection_label'  => 'مجموعة شخصية:',
	'coll-community_collection_label' => 'مجموعة مجتمع:',
	'coll-save_collection'            => 'حفظ المجموعة',
	'coll-overwrite_title'            => 'الصفحة موجودة. كتابة عليها؟',
	'coll-overwrite_text'             => 'صفحة بنفس الاسم $1 موجودة بالفعل.
هل تريد استبدالها بمجموعتك؟',
	'coll-yes'                        => 'نعم',
	'coll-no'                         => 'لا',
	'coll-load_overwrite_text'        => 'لديك بالفعل عدة صفحات في مجموعتك.
هل تريد الكتابة على مجموعتك الحالية، إضافة المحتوى الجديد أو الإلغاء؟',
	'coll-overwrite'                  => 'كتابة عليها',
	'coll-append'                     => 'انتظار',
	'coll-cancel'                     => 'إلغاء',
	'coll-limit_exceeded_title'       => 'المجموعة كبيرة جدا',
	'coll-limit_exceeded_text'        => 'مجموعة صفحتك كبيرة جدا.
لا مزيد من الصفحات يمكن إضافتها.',
	'coll-generating_pdf_title'       => 'توليد PDF',
	'coll-generating_pdf_text'        => "'''من فضلك انتظر أثناء توليد ملف PDF.'''
هذه الصفحة ينبغي أن يتم تحديثها كل عدة ثوان، لو أن هذا لا يعمل، من فضلك اضغط زر refresh في متصفحك.",
	'coll-pdf_finished_text'          => 'ملف PDF تم توليده.
اضغط على الوصلة بالأسفل لتحميله إلى حاسوبك.
غير راض عن ناتج PDF؟
انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] للاحتمالات لتحسينه.',
	'coll-notfound_title'             => 'المجموعة غير موجودة',
	'coll-notfound_text'              => 'لم يمكن العثور على صفحة المجموعة.',
	'coll-return_to_collection'       => '<p>ارجع إلى <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'الصفحات التالية لم يمكن عرضها وتمت إزالتها من ملف PDF:',
	'coll-about_pp'                   => 'حول $1',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'coll-add_page'              => 'Добавяне на страница',
	'coll-remove_page'           => 'Премахване на страница',
	'coll-add_category'          => 'Добавяне на категория',
	'coll-empty'                 => 'празна',
	'coll-page'                  => 'страница',
	'coll-pages'                 => 'страници',
	'coll-download_as_pdf'       => 'Изтегляне като PDF',
	'coll-noscript_text'         => '<noscript><h1>Изисква се Джаваскрипт!</h1>
<strong>Използваният браузър не поддържа Джаваскрипт или поддръжката на Джаваскрипт е изключена.
Тази страница не може да работи правилно докато Джаваскриптът не бъде активиран.</strong></noscript>',
	'coll-download_pdf'          => 'Изтегляне на PDF',
	'coll-remove'                => 'Премахване',
	'coll-move_to_top'           => 'Преместване в началото',
	'coll-move_up'               => 'Преместване нагоре',
	'coll-move_down'             => 'Преместване надолу',
	'coll-move_to_bottom'        => 'Преместване в края',
	'coll-title'                 => 'Заглавие:',
	'coll-subtitle'              => 'Подзаглавие:',
	'coll-contents'              => 'Съдържание',
	'coll-sort_alphabetically'   => 'Подреждане на страниците по азбучен ред',
	'coll-rename'                => 'Преименуване',
	'coll-no_such_category'      => 'Няма такава категория',
	'coll-mwpdf_error_title'     => 'Не може да бъде генериран PDF файл',
	'coll-mwpdf_error_msg'       => 'Възникна грешка при генерирането на PDF.',
	'coll-revision'              => 'Версия: %PARAM%',
	'coll-save_collection_title' => 'Съхраняване',
	'coll-save_collection'       => 'Съхраняване',
	'coll-overwrite_title'       => 'Страницата съществува. Заместване?',
	'coll-yes'                   => 'Да',
	'coll-no'                    => 'Не',
	'coll-overwrite'             => 'Заместване',
	'coll-append'                => 'Добавяне',
	'coll-cancel'                => 'Отказване',
	'coll-generating_pdf_title'  => 'Генериране на PDF',
	'coll-pdf_finished_text'     => 'PDF файлът беше генериран.
[http://URL Щракнете тук] за изтегляне на локалния компютър.',
	'coll-return_to_collection'  => '<p>Връщане към <a href="$1">$2</a></p>',
	'coll-pages_removed'         => 'Следните страници не могат да бъдат обработени и бяха премахнати от PDF файла: %(articles)s',
	'coll-order_from_pp'         => 'Поръчване на книга от $1',
	'coll-about_pp'              => 'За $1',
);

/** Catalan (Català)
 * @author SMP
 */
$messages['ca'] = array(
	'coll-page'     => 'pàgina',
	'coll-yes'      => 'S&iacute;',
	'coll-no'       => 'No',
	'coll-about_pp' => 'Quant a $1',
);

/** Czech (Česky)
 * @author Matěj Grabovský
 * @author Siebrand
 */
$messages['cs'] = array(
	'coll-desc'                       => 'Vytváření [[Special:Collection|kolekce stránek]], tvorba PDF',
	'coll-collection'                 => 'Kolekce',
	'coll-collections'                => 'Kolekce',
	'coll-portlet_title'              => 'Moje kolekce',
	'coll-add_page'                   => 'Přidat stránku',
	'coll-remove_page'                => 'Odstranit stránku',
	'coll-add_category'               => 'Přidat kategorii',
	'coll-load_collection'            => 'Načíst kolekci',
	'coll-show_collection'            => 'Zobrazit kolekci',
	'coll-help_collections'           => 'Nápověda ke kolekcím',
	'coll-empty'                      => 'prázdná',
	'coll-page'                       => 'stránka',
	'coll-pages'                      => 'stránky',
	'coll-download_as_pdf'            => 'Stáhnout jako PDF',
	'coll-noscript_text'              => '<noscript><h1>Vyžaduje se JavaScript!</h1>
<strong>Váš prohlížeč nepodporuje JavaScript nebo máte JavaScript vypnutý.
Táto stránka nebude správně fungovat dokud nezapnete JavaScript.</strong></noscript>',
	'coll-intro_text'                 => 'Můžete vytvářet kolekce stránek, vytvářet a stahovat PDF soubory vytvořené z kolekce stránek a ukládat kolekce stránek pro pozdější využití nebo je sdílet

Pro další informace se podívejte na [[{{MediaWiki:Coll-helppage}}|stránku nápovědy ke kolekcím]].',
	'coll-helppage'                   => '{{ns:Help}}:Kolekce',
	'coll-pdftoobigcat'               => 'Kategorie obsahuje více než %PARAM% stránek. Do kolekce je možné přidat jen prvních %PARAM% stránek. Kolik jich chcete přidat?',
	'coll-my_collection'              => 'Moje kolekce',
	'coll-download_title'             => 'Stáhnout kolekci jako PDF',
	'coll-download_text'              => 'Stáhnout automaticky vytvořený PDF soubor vaší kolekce stránek. Klikněte na tlačítko.',
	'coll-download_pdf'               => 'Stáhnout PDF',
	'coll-remove'                     => 'Odstranit',
	'coll-move_to_top'                => 'Přesunout nahoru',
	'coll-move_up'                    => 'Přesunout výše',
	'coll-move_down'                  => 'Přesunout níže',
	'coll-move_to_bottom'             => 'Přesunout dolů',
	'coll-title'                      => 'Název:',
	'coll-subtitle'                   => 'Podtitul:',
	'coll-contents'                   => 'Obsah',
	'coll-create_chapter'             => 'Vytvořit novou kapitolu',
	'coll-sort_alphabetically'        => 'Seřadit stránky abecedně',
	'coll-clear_collection'           => 'Vyčistit kolekci',
	'coll-clear_confirm'              => 'Opravdu chcete vyčistit svoji kolekci?',
	'coll-rename'                     => 'Přejmenovat',
	'coll-new_chapter'                => 'Zadejte název nové kapitoly',
	'coll-rename_chapter'             => 'Zadejte nový název kapitoly',
	'coll-no_such_category'           => 'Taková kategorie neexistuje',
	'coll-mwpdf_error_title'          => 'Nebylo možné vytvořit PDF',
	'coll-mwpdf_error_msg'            => 'Během tvorby PDF se vyskytla chyba.',
	'coll-mwzip_error_title'          => 'Nebylo možné vytvořit kolekci stránek',
	'coll-mwzip_error_msg'            => 'Během tvorby kolekce stránek se vyskytla chyba.',
	'coll-notitle_title'              => 'Nebylo možné určit název stránky.',
	'coll-post_failed_title'          => 'Chyba požadavku POST',
	'coll-post_failed_msg'            => 'Chyba požadavku POST.',
	'coll-enter_title'                => 'Zadejte název kolekce.',
	'coll-error_reponse'              => 'Chybná odpověď serveru',
	'coll-empty_collection'           => 'Prázdná kolekce',
	'coll-revision'                   => 'Revize: %PARAM%',
	'coll-save_collection_title'      => 'Uložit kolekci',
	'coll-save_collection_text'       => 'Tuto kolekci můžete uložit pro pozdější použití pro zadání typu kolekce a názvu stránky:',
	'coll-login_to_save'              => 'Pokud chcete ukládat kolekce pro pozdější použití, prosím, <a href="$1">přihlaste se nebo si vytvořte účet</a>.',
	'coll-personal_collection_label'  => 'Osobní kolekce:',
	'coll-community_collection_label' => 'Komunitní kolekce:',
	'coll-save_collection'            => 'Uložit kolekci',
	'coll-overwrite_title'            => 'Stránka existuje. Přepsat?',
	'coll-overwrite_text'             => 'Stránka s názvem $1 už existuje.
Chcete ji nahradit svojí kolekcí?',
	'coll-yes'                        => 'Ano',
	'coll-no'                         => 'Ne',
	'coll-load_overwrite_text'        => 'Ve vaší kolekci se už nacházejí stránky.
Chcete přepsat svoji existující kolekci, přidat do ní obsah nebo zrušit tuto operaci?',
	'coll-overwrite'                  => 'Přepsat',
	'coll-append'                     => 'Přidat',
	'coll-cancel'                     => 'Zrušit',
	'coll-limit_exceeded_title'       => 'Kolekce je příliš velká',
	'coll-limit_exceeded_text'        => 'Vaše kolekce stránek je příliš velká.
Není možné přidat další stránky.',
	'coll-generating_pdf_title'       => 'Vytváří se PDF',
	'coll-generating_pdf_text'        => "'''Prosím čekejte, vytváří se PDF soubor.'''
Tato stránka by se měla každých několik sekund automaticky obnovit. Pokud to nefunguje, klikněte na tlačítko 'Obnovit' ve vašem prohlížeči.",
	'coll-pdf_finished_text'          => 'PDF soubor byl vytvořen.
Stáhnout ho můžete po kliknutí na odkaz níže.
nejste spokojeni s PDF výstupem?
Podívejte se na možnosti jeho vylepšení na [[{{MediaWiki:Coll-helppage}}|stránku Pomocníka ke kolekcím]].',
	'coll-notfound_title'             => 'Kolekce nenalezena',
	'coll-notfound_text'              => 'Nebylo možné najít stránku kolekce',
	'coll-return_to_collection'       => '<p>Vrátit se na <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Následující stránky nebylo možné vykreslit a byly z PDF souboru odstraněny:',
	'coll-book_title'                 => 'Objednat tisknutou knihu',
	'coll-book_text'                  => 'Můžete se objednat tisknutou knihu obsahující vaši kolekci stránek. Navštivte jednoho z následujících partnerů, kteří Vám ji vytisknou na požádání:',
	'coll-order_from_pp'              => 'Objednat knihu od $1',
	'coll-about_pp'                   => 'O $1',
);

/** Danish (Dansk)
 * @author Jon Harald Søby
 * @author SPQRobin
 */
$messages['da'] = array(
	'coll-empty'  => 'tom',
	'coll-page'   => 'side',
	'coll-pages'  => 'sider',
	'coll-title'  => 'Titel:',
	'coll-yes'    => 'Ja',
	'coll-no'     => 'Nej',
	'coll-cancel' => 'Afbryd',
);

/** Greek (Ελληνικά)
 * @author Consta
 */
$messages['el'] = array(
	'coll-collection'    => 'Συλλογή',
	'coll-collections'   => 'Συλλογές',
	'coll-portlet_title' => 'Η Συλλογή μου',
	'coll-page'          => 'σελίδα',
	'coll-pages'         => 'σελίδες',
	'coll-my_collection' => 'Η Συλλογή μου',
	'coll-title'         => 'Τίτλος:',
	'coll-subtitle'      => 'Υπότιτλος:',
	'coll-yes'           => 'Ναι',
	'coll-no'            => 'Όχι',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 * @author Amikeco
 */
$messages['eo'] = array(
	'coll-desc'                       => '[[Special:Collection|Kolekto-paĝoj]], generi PDF-ojn',
	'coll-collection'                 => 'Kolekto',
	'coll-collections'                => 'Kolektoj',
	'coll-portlet_title'              => 'Mia kolekto',
	'coll-add_page'                   => 'Aldonu paĝon',
	'coll-remove_page'                => 'Forigu paĝon',
	'coll-add_category'               => 'Aldonu kategorion',
	'coll-load_collection'            => 'Ŝarĝu kolekton',
	'coll-show_collection'            => 'Montru kolekton',
	'coll-help_collections'           => 'Helpo pri kolektoj',
	'coll-empty'                      => 'malplena',
	'coll-page'                       => 'paĝo',
	'coll-pages'                      => 'paĝoj',
	'coll-download_as_pdf'            => 'Alŝutu kiel PDF',
	'coll-helppage'                   => 'Helpo:Kolektoj',
	'coll-my_collection'              => 'Mia kolekto',
	'coll-download_title'             => 'Alŝutu kolekton kiel PDF-on',
	'coll-download_pdf'               => 'Alŝutu PDF',
	'coll-remove'                     => 'Forigu',
	'coll-move_to_top'                => 'Movu superen',
	'coll-move_up'                    => 'Movu supren',
	'coll-move_down'                  => 'Movu suben',
	'coll-move_to_bottom'             => 'Movu malsuperen',
	'coll-title'                      => 'Titolo:',
	'coll-subtitle'                   => 'Subtitolo:',
	'coll-contents'                   => 'Enhavaĵoj',
	'coll-create_chapter'             => 'Kreu novan ĉapitron',
	'coll-sort_alphabetically'        => 'Ordigu paĝojn laŭ alfabeto',
	'coll-clear_collection'           => 'Forviŝu kolekton',
	'coll-clear_confirm'              => 'Ĉu vi ja volas forviŝi vian kolekton?',
	'coll-rename'                     => 'Alinomigu',
	'coll-new_chapter'                => 'Enigu nomon por nova ĉapitro',
	'coll-rename_chapter'             => 'Enigu novan nomon por ĉapitro',
	'coll-no_such_category'           => 'Nenia kategorio',
	'coll-mwpdf_error_title'          => 'Ne eblis generi PDF-on',
	'coll-mwpdf_error_msg'            => 'Eraro okazis dum PDF-generado.',
	'coll-mwzip_error_title'          => 'Ne eblas generi paĝan kolekton',
	'coll-notitle_title'              => 'La titolo de la paĝo ne estis determinebla.',
	'coll-post_failed_title'          => 'POST-peto malsukcesis',
	'coll-post_failed_msg'            => 'La POST-peto malsukcesis.',
	'coll-enter_title'                => 'Enigu titolon por kolekto:',
	'coll-error_reponse'              => 'Erara respondo de servilo',
	'coll-empty_collection'           => 'Malplena kolekto',
	'coll-revision'                   => 'Revizio: %PARAM%',
	'coll-save_collection_title'      => 'Konservu Kolekton',
	'coll-personal_collection_label'  => 'Propra kolekto:',
	'coll-community_collection_label' => 'Komuna kolekto:',
	'coll-save_collection'            => 'Konservu Kolekton',
	'coll-overwrite_title'            => 'Paĝo ekzistas. Ĉu anstataŭigi?',
	'coll-yes'                        => 'Jes',
	'coll-no'                         => 'Ne',
	'coll-overwrite'                  => 'Anstataŭigu',
	'coll-append'                     => 'Aldonu',
	'coll-cancel'                     => 'Nuligu',
	'coll-limit_exceeded_title'       => 'Kolekto Tro Granda',
	'coll-limit_exceeded_text'        => 'Via paĝa kolekto estas tro granda.
Neniom pluaj paĝoj ne povas esti aldonitaj.',
	'coll-generating_pdf_title'       => 'Generante PDF',
	'coll-notfound_title'             => 'Kolekto Ne Trovita',
	'coll-notfound_text'              => 'Ne eblas trovi kolekto-paĝon.',
	'coll-return_to_collection'       => '<p>Reiru al <a href="$1">$2</a></p>',
	'coll-pdf_error_text'             => 'Eraro okazis dum generado de la PDF-dosiero.',
	'coll-book_title'                 => 'Mendu Eldonitan Libron',
	'coll-order_from_pp'              => 'Mendu libron de $1',
	'coll-about_pp'                   => 'Pri $1',
);

/** Spanish (Español)
 * @author Jatrobat
 */
$messages['es'] = array(
	'coll-yes' => 'Sí',
);

/** Finnish (Suomi)
 * @author Cimon Avaro
 * @author Crt
 */
$messages['fi'] = array(
	'coll-overwrite_title' => 'Sivu on olemassa. Ylikirjoitetaanko?',
	'coll-yes'             => 'Kyllä',
	'coll-no'              => 'Ei',
);

/** French (Français)
 * @author Meithal
 * @author Grondin
 */
$messages['fr'] = array(
	'coll-desc'                       => "[[Special:Collection|Compiler des pages]], générer des pdf's",
	'coll-collection'                 => 'Compilation',
	'coll-collections'                => 'Compilations',
	'coll-portlet_title'              => 'Ma compilation',
	'coll-add_page'                   => 'Ajouter une page',
	'coll-remove_page'                => 'Enlever une page',
	'coll-add_category'               => 'Ajouter une catégorie',
	'coll-load_collection'            => 'Charger une compilation',
	'coll-show_collection'            => 'Afficher la compilation',
	'coll-help_collections'           => 'Aide sur les compilations',
	'coll-empty'                      => 'vide',
	'coll-page'                       => 'page',
	'coll-pages'                      => 'pages',
	'coll-download_as_pdf'            => 'Télécharger en PDF',
	'coll-noscript_text'              => "<noscript><h1>Javascript est nécessaire !</h1>
<strong>Votre navigateur ne supporte pas Javascript ou bien l'a désactivé.
Cette page ne s'affichera pas correctement tant que javascript n'est pas activé.</strong></noscript>",
	'coll-intro_text'                 => "Vous pouvez collecter des pages, générer et télécharger des fichiers PDF depuis les collections de paéges ou des sauvegarde desdites collections pour un usage ultérieur ou pour les partager.

Voyez [[{{MediaWiki:Coll-helppage}}|les pages d'aides en matière de collections]] pour d'avantage d'informations.",
	'coll-helppage'                   => 'Aide:Collections',
	'coll-pdftoobigcat'               => 'La catégorie contient plus de %PARAM% pages, seules les premières %PARAM% pages peuvent être ajoutées dans votre compilation.
Voulez-vous les ajouter ?',
	'coll-my_collection'              => 'Ma compilation',
	'coll-download_title'             => 'Télécharger la compilation en PDF',
	'coll-download_text'              => 'Pour télécharger un PDF généré automatiquement à partir de votre compilation, appuyez sur le bouton.',
	'coll-download_pdf'               => 'Télécharger le PDF',
	'coll-remove'                     => 'Enlever',
	'coll-move_to_top'                => 'Déplacer tout en haut',
	'coll-move_up'                    => 'Monter',
	'coll-move_down'                  => 'Descendre',
	'coll-move_to_bottom'             => 'Déplacer tout en bas',
	'coll-title'                      => 'Titre :',
	'coll-subtitle'                   => 'Sous-titre :',
	'coll-contents'                   => 'Contenu',
	'coll-create_chapter'             => 'Créer un nouveau chapitre',
	'coll-sort_alphabetically'        => 'Trier les pages par ordre alphabétique',
	'coll-clear_collection'           => 'Vider la compilation',
	'coll-clear_confirm'              => 'Voulez-vous vraiment vider votre compilation ?',
	'coll-rename'                     => 'Renommer',
	'coll-new_chapter'                => 'Enter le titre du nouveau chapitre',
	'coll-rename_chapter'             => 'Enter nouveau titre pour le chapitre',
	'coll-no_such_category'           => 'Pas de telle catégorie',
	'coll-mwpdf_error_title'          => 'Ne peut pas générer de PDF',
	'coll-mwpdf_error_msg'            => 'Une erreur est survenue pendant la création du PDF.',
	'coll-mwzip_error_title'          => 'Ne peut pas générer de compilation',
	'coll-mwzip_error_msg'            => 'Une erreur est survenue pendant la création de la compilation',
	'coll-notitle_title'              => 'Le titre de la page ne peut être déterminée.',
	'coll-post_failed_title'          => 'Échec de la requête POST',
	'coll-post_failed_msg'            => 'La requête POST a échouée.',
	'coll-enter_title'                => 'Entrer un titre pour la compilation :',
	'coll-error_reponse'              => 'Le serveur a rencontré une erreur',
	'coll-empty_collection'           => 'Compilation vide',
	'coll-revision'                   => 'Version : %PARAM%',
	'coll-save_collection_title'      => 'Sauvegarder la compilation',
	'coll-save_collection_text'       => 'Pour sauvegarder la compilation, choisissez un type de compilation et entrez un titre de page :',
	'coll-login_to_save'              => 'Si vous voulez sauvegarder votre compilation, veuillez <a href="$1">vous connecter ou vous créer un compte</a>.',
	'coll-personal_collection_label'  => 'Compilation personnelle :',
	'coll-community_collection_label' => 'Compilation collective :',
	'coll-save_collection'            => 'Sauvegarder la compilation',
	'coll-overwrite_title'            => "La page existe. L'écraser ?",
	'coll-overwrite_text'             => 'Une page avec le titre $1 existe déjà.
Voulez-vous la remplacer par votre compilation ?',
	'coll-yes'                        => 'Oui',
	'coll-no'                         => 'Non',
	'coll-load_overwrite_text'        => 'Vous avez déjà des pages dans votre compilation.
Voulez vous écraser votre compilation actuelle, y rajouter le contenu ou bien annuler ?',
	'coll-overwrite'                  => 'Écraser',
	'coll-append'                     => 'Ajouter',
	'coll-cancel'                     => 'Annuler',
	'coll-limit_exceeded_title'       => 'Compilation trop grande',
	'coll-limit_exceeded_text'        => 'Votre compilation est trop grande.
Aucune page ne peut être ajoutée.',
	'coll-generating_pdf_title'       => 'Création du PDF',
	'coll-generating_pdf_text'        => "'''Veuillez attendre pendant la création du PDF.'''

Progression : %(progress)d%%.

Cette page devrait automatiquement s'actualiser dans quelques secondes.
Si tel n’est pas le cas, veuillez appuyer sur le bouton d'actualisation de votre navigateur.",
	'coll-pdf_finished_text'          => 'Le fichier PDF a été créé.
[http://URL Cliquez ici] pour le télécharger sur votre ordinateur.',
	'coll-pdf_not_satisfied'          => 'Non satisfait de la sortie PDF ? Voyez [[{{MediaWiki:Coll-helppage}}|la page d’aide concernant les collections]] pour les possibilités d’amélioration.',
	'coll-notfound_title'             => 'Compilation non trouvée',
	'coll-notfound_text'              => 'Ne peut trouver la compilation.',
	'coll-return_to_collection'       => '<p>Revenir à <a href="$1">$2</a></p>',
	'coll-pages_removed'              => "Les pages suivantes n'ont pu être traitées et ont été enlevées du fichier PDF : %(articles)s",
	'coll-pdf_error_text'             => 'Une erreur a été détectée lors de la création du fichier PDF.',
	'coll-book_title'                 => 'Commander un livre imprimé',
	'coll-book_text'                  => "Vous pouvez commander un livre imprimé contenant votre collection d'articles en visitant une demande d'impression de la part de partenaires :",
	'coll-order_from_pp'              => 'Commander le livre depuis $1',
	'coll-about_pp'                   => 'Au sujet de $1',
);

/** Galician (Galego)
 * @author Toliño
 * @author Alma
 */
$messages['gl'] = array(
	'coll-desc'                       => '[[Special:Collection|Coleccionar páxinas]], xerar ficheiros PDF',
	'coll-collection'                 => 'Colección',
	'coll-collections'                => 'Coleccións',
	'coll-portlet_title'              => 'A miña colección',
	'coll-add_page'                   => 'Engadir páxina',
	'coll-remove_page'                => 'Eliminar páxina',
	'coll-add_category'               => 'Engadir categoría',
	'coll-load_collection'            => 'Cargar colección',
	'coll-show_collection'            => 'Mostrar colección',
	'coll-help_collections'           => 'Axuda coas coleccións',
	'coll-empty'                      => 'baleiro',
	'coll-page'                       => 'páxina',
	'coll-pages'                      => 'páxinas',
	'coll-download_as_pdf'            => 'Descargar como PDF',
	'coll-noscript_text'              => '<noscript><h1>Requírese o JavaScript!</h1>
<strong>O seu navegador non soporta o JavaScript ou o JavaScript foi deshabilitado.
Esta páxina non funcionará correctamente, polo menos ata que o JavaScript sexa habilitado.</strong></noscript>',
	'coll-intro_text'                 => 'Pode coleccionar páxinas, xerar e descargar ficheiros PDF das páxinas de coleccións e gardar as páxinas de coleccións para un uso posterior ou para compartilas.

Vexa a [[{{MediaWiki:Coll-helppage}}|páxina de axuda sobre as coleccións]] para máis información.',
	'coll-helppage'                   => 'Help:Collections',
	'coll-pdftoobigcat'               => 'A categoría contén máis de %PARAM% páxinas, tan só as primeiras %PARAM% páxinas poden ser engadidas á súa colección.
Quere engadilas?',
	'coll-my_collection'              => 'A miña colección',
	'coll-download_title'             => 'Descargar a colección como arquivo PDF',
	'coll-download_text'              => 'Para descargar un arquivo PDF xerado automaticamente da súa páxina de colección, faga clic no botón.',
	'coll-download_pdf'               => 'Descargar PDF',
	'coll-remove'                     => 'Eliminar',
	'coll-move_to_top'                => 'Ir arriba',
	'coll-move_up'                    => 'Mover arriba',
	'coll-move_down'                  => 'Mover abaixo',
	'coll-move_to_bottom'             => 'Ir abaixo',
	'coll-title'                      => 'Título:',
	'coll-subtitle'                   => 'Subtítulo:',
	'coll-contents'                   => 'Contidos',
	'coll-create_chapter'             => 'Crear un novo capítulo',
	'coll-sort_alphabetically'        => 'Ordenar as páxinas alfabeticamente',
	'coll-clear_collection'           => 'Borrar colección',
	'coll-clear_confirm'              => 'Seguro que desexa eliminar a súa colección?',
	'coll-rename'                     => 'Renomear',
	'coll-new_chapter'                => 'Insira un nome para o novo capítulo',
	'coll-rename_chapter'             => 'Insira un novo nome para o capítulo',
	'coll-no_such_category'           => 'Non existe tal categoría',
	'coll-mwpdf_error_title'          => 'Non se pode xerar o PDF',
	'coll-mwpdf_error_msg'            => 'Ocorreu un erro durante a xeración do PDF.',
	'coll-mwzip_error_title'          => 'Non se pode xerar a páxina da colección',
	'coll-mwzip_error_msg'            => 'Ocorreu un erro durante a xeración da páxina da colección.',
	'coll-notitle_title'              => 'O título da páxina non pode ser determinado.',
	'coll-enter_title'                => 'Escriba un título para a colección:',
	'coll-error_reponse'              => 'Ocorreu un erro no servidor',
	'coll-empty_collection'           => 'Colección baleira',
	'coll-revision'                   => 'Revisión: %PARAM%',
	'coll-save_collection_title'      => 'Gardar a colección',
	'coll-save_collection_text'       => 'Para gardar esta colección para un uso posterior escolla un tipo de colección e insira un título para a páxina:',
	'coll-login_to_save'              => 'Se quere gardar coleccións para un uso posterior, por favor, <a href="$1">acceda ao sistema ou cree unha conta</a>.',
	'coll-personal_collection_label'  => 'Colección persoal:',
	'coll-community_collection_label' => 'Colección da comunidade:',
	'coll-save_collection'            => 'Gardar a colección',
	'coll-overwrite_title'            => 'A páxina existe. Desexa sobreescribir?',
	'coll-overwrite_text'             => 'Xa existe unha páxina chamada $1.
Quere reemprazala coa súa colección?',
	'coll-yes'                        => 'Si',
	'coll-no'                         => 'Non',
	'coll-load_overwrite_text'        => 'Xa ten algunhas páxinas na súa colección.
Desexa sobreescribir a súa colección actual, adxuntar o novo contido ou cancelar?',
	'coll-overwrite'                  => 'Sobreescribir',
	'coll-append'                     => 'Adxuntar',
	'coll-cancel'                     => 'Cancelar',
	'coll-limit_exceeded_title'       => 'Colección moi grande',
	'coll-limit_exceeded_text'        => 'A súa páxina de colección é moi grande.
Non se poden engadir máis páxinas.',
	'coll-generating_pdf_title'       => 'Xerando PDF',
	'coll-generating_pdf_text'        => "'''Por favor agarde mentres o arquivo PDF se está xerando.'''
Esta páxina será refrescada automaticamente cada poucos segundos, se non vai, por favor prema no botón \"refrescar\" do seu navegador.",
	'coll-pdf_finished_text'          => 'O arquivo PDF foi xerado.
Faga clic na ligazón de embaixo para descargalo no seu ordenador. Non está satisfeito co arquivo PDF?
Vexa [[{{MediaWiki:Coll-helppage}}|a páxina de axuda sobre as coleccións]] para posibles melloras nel.',
	'coll-notfound_title'             => 'Non se pode atopar a colección',
	'coll-notfound_text'              => 'Non se pode atopar a páxina da colección.',
	'coll-return_to_collection'       => '<p>Voltar a <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'As seguintes páxinas non poden ser renderizadas e serán eliminadas do arquivo PDF:',
	'coll-order_from_pp'              => 'Encargar un libro a $1',
	'coll-about_pp'                   => 'Acerca de $1',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'coll-collection'                 => 'Çhaglym',
	'coll-collections'                => 'Çhaglymyn',
	'coll-portlet_title'              => 'My haglym',
	'coll-empty'                      => 'follym',
	'coll-page'                       => 'duillag',
	'coll-pages'                      => 'duillagyn',
	'coll-helppage'                   => 'Cooney:Çhaglymyn',
	'coll-my_collection'              => 'My haglym',
	'coll-title'                      => 'Ard-ennym:',
	'coll-contents'                   => 'Cummal',
	'coll-create_chapter'             => 'Croo cabdil noa',
	'coll-sort_alphabetically'        => 'Sorçhaghey duillagyn rere lettyr',
	'coll-personal_collection_label'  => 'Çhaglym persoonagh:',
	'coll-community_collection_label' => 'Çhaglym y chohionnal:',
	'coll-yes'                        => 'Ta',
	'coll-no'                         => 'Cha',
	'coll-cancel'                     => 'Dolley magh',
	'coll-about_pp'                   => 'Mychione $1',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'coll-desc'                       => '[[Special:Collection|पन्ने जमा करें]], पीडीएफ बनायें',
	'coll-collection'                 => 'कलेक्शन',
	'coll-collections'                => 'कलेक्शन',
	'coll-portlet_title'              => 'मेरा कलेक्शन',
	'coll-add_page'                   => 'पन्ना बढायें',
	'coll-remove_page'                => 'पन्ना हटायें',
	'coll-add_category'               => 'श्रेणी बढायें',
	'coll-load_collection'            => 'कलेक्शन लोड करें',
	'coll-show_collection'            => 'कलेक्शन दर्शायें',
	'coll-help_collections'           => 'कलेक्शन सहायता',
	'coll-empty'                      => 'खाली',
	'coll-page'                       => 'पन्ना',
	'coll-pages'                      => 'पन्ने',
	'coll-download_as_pdf'            => 'पीडिएफ डाउनलोड करें',
	'coll-helppage'                   => 'Help:कलेक्शन',
	'coll-my_collection'              => 'मेरे कलेक्शन',
	'coll-download_title'             => 'कलेक्शन पीडिएफ डाउनलोड करें',
	'coll-download_text'              => 'आपके कलेक्शनका पीडिएफ अवतरण डाउनलोड करने के लिये, दिये हुए बटन पर क्लिक करें।',
	'coll-download_pdf'               => 'पीडिएफ डाउनलोड करें',
	'coll-remove'                     => 'हटायें',
	'coll-move_to_top'                => 'सबसे उपर भेजें',
	'coll-move_up'                    => 'उपर भेजें',
	'coll-move_down'                  => 'नीचे भेजें',
	'coll-move_to_bottom'             => 'सबसे नीचे भेजें',
	'coll-title'                      => 'शीर्षक:',
	'coll-subtitle'                   => 'उपशीर्षक:',
	'coll-contents'                   => 'अनुक्रम',
	'coll-create_chapter'             => 'नया अध्याय बनायें',
	'coll-sort_alphabetically'        => 'अक्षरोंके अनुसार पन्ने लगायें',
	'coll-clear_collection'           => 'कलेक्शन खाली करें',
	'coll-clear_confirm'              => 'क्या आप सचमुच आपका कलेक्शन खाली करना चाहतें हैं?',
	'coll-rename'                     => 'नाम बदलें',
	'coll-new_chapter'                => 'नये अध्याय के लिये नाम दें',
	'coll-rename_chapter'             => 'नये अध्याय के लिये नाम दें',
	'coll-no_such_category'           => 'ऐसी श्रेणी नहीं हैं',
	'coll-mwpdf_error_title'          => 'पीडीएफ तैयार नहीं कर सकतें',
	'coll-mwpdf_error_msg'            => 'पीडीएफ बनाने में समस्या आई हैं।',
	'coll-mwzip_error_title'          => 'पन्नोंका कलेक्शन बना नहीं पाये हैं',
	'coll-mwzip_error_msg'            => 'पन्नोंका कलेक्शन बनाते समय समस्या आई हैं।',
	'coll-notitle_title'              => 'इस पन्ने का शीर्षक निश्चित नहीं कर पा रहें हैं।',
	'coll-post_failed_title'          => 'POST माँग पूरी नहीं हुई हैं',
	'coll-post_failed_msg'            => 'POST माँग पूरी नहीं हुई हैं',
	'coll-enter_title'                => 'कलेक्शन का शीर्षक दें:',
	'coll-error_reponse'              => 'सर्वरसे गलत रिस्पॉन्स मिला हैं',
	'coll-empty_collection'           => 'खाली कलेक्शन',
	'coll-revision'                   => 'अवतरण: %PARAM%',
	'coll-save_collection_title'      => 'कलेक्शन संजोयें',
	'coll-save_collection_text'       => 'इस कलेक्शनको फिरसे इस्तेमाल में लाने के लिये इसे एक नाम दें और इसका प्रकार चुनकर इसे संजोयें:',
	'coll-login_to_save'              => 'अगर आप बादमें इस्तेमाल के लिये यह कलेक्शन संजोना चाहतें हैं, तो कृपया <a href="$1">लॉग इन करें या नया खाता खोलें</a>।',
	'coll-personal_collection_label'  => 'वैयक्तिक कलेक्शन:',
	'coll-community_collection_label' => 'सामूहिक कलेक्शन:',
	'coll-save_collection'            => 'कलेक्शन संजोयें',
	'coll-overwrite_title'            => 'पन्ना अस्तित्व में हैं। पुनर्लेखन करें?',
	'coll-overwrite_text'             => '$1 नामका पन्ना पहले से अस्तित्वमें हैं।
क्या आप उसपर अपना कलेक्शन पुनर्लिखना चाहतें हैं?',
	'coll-yes'                        => 'हां',
	'coll-no'                         => 'नहीं',
	'coll-load_overwrite_text'        => 'आपके कलेक्शनमें पहले से कुछ पन्ने हैं।
क्या आप आपका कलेक्शन दुबारा बनाना चाहतें हैं, या यह पन्ने बढाना चाहतें हैं?',
	'coll-overwrite'                  => 'पुनर्लेखन करें',
	'coll-append'                     => 'बढायें',
	'coll-cancel'                     => 'रद्द करें',
	'coll-limit_exceeded_title'       => 'कलेक्शन बहुत बडा हुआ हैं',
	'coll-limit_exceeded_text'        => 'आपका कलेक्शन बहुत बडा हुआ हैं।
और पन्ने बढा नहीं सकतें।',
	'coll-generating_pdf_title'       => 'पीडीएफ तैयार कर रहें हैं',
	'coll-notfound_title'             => 'कलेक्शन मिला नहीं',
	'coll-notfound_text'              => 'कलेक्शन पन्ना मिला नहीं।',
	'coll-return_to_collection'       => '<p><a href="$1">$2</a> पर वापस जायें</p>',
	'coll-pages_removed'              => 'नीचे दिये हुए पन्ने पीडीएफ फ़ाईल में बढा नहीं पायें:',
	'coll-book_title'                 => 'छपा हुआ अवतरण माँगे',
	'coll-book_text'                  => 'आप नीचे दिये हुए प्रिन्ट-ऑन-डिमांड पार्टनर्ससे आपके कलेक्शनमें उपलब्ध पन्नोंका छपा हुआ अवतरण पा सकतें हैं:',
	'coll-order_from_pp'              => '$1 से बुक मंगायें',
	'coll-about_pp'                   => '$1 के बारे में',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'coll-cancel' => 'Kanselahon',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'coll-desc'                      => '[[Special:Collection|Strony zběrać]], PDF wutworić',
	'coll-collection'                => 'Zběrka',
	'coll-collections'               => 'Zběrki',
	'coll-portlet_title'             => 'Moja zběrka',
	'coll-add_page'                  => 'Stronu přidać',
	'coll-remove_page'               => 'Stronu wotstronić',
	'coll-add_category'              => 'Kategoriju přidać',
	'coll-load_collection'           => 'Zběrku začitać',
	'coll-show_collection'           => 'Zběrku pokazać',
	'coll-help_collections'          => 'Pomoc zběrkow',
	'coll-empty'                     => 'prózdna',
	'coll-page'                      => 'strona',
	'coll-pages'                     => 'strony',
	'coll-download_as_pdf'           => 'Jako PDF sćahnyć',
	'coll-helppage'                  => 'Pomoc:Zběrki',
	'coll-my_collection'             => 'Moja zběrka',
	'coll-download_title'            => 'Zběrku jako PDF sćahnyć',
	'coll-download_pdf'              => 'PDF sćahnyć',
	'coll-remove'                    => 'Wotstronić',
	'coll-move_to_top'               => 'Cyle horje přesunyć',
	'coll-move_up'                   => 'Horje přesunyć',
	'coll-move_down'                 => 'Dele přesunyć',
	'coll-move_to_bottom'            => 'Cyle dele přesunyć',
	'coll-title'                     => 'Titul:',
	'coll-subtitle'                  => 'Podtitul:',
	'coll-contents'                  => 'Wobsah',
	'coll-create_chapter'            => 'Nowy kapitl wutworić',
	'coll-sort_alphabetically'       => 'Strony alfabetisce sortěrować',
	'coll-clear_collection'          => 'Zběrku wuprózdnić',
	'coll-clear_confirm'             => 'Chceš swoju zběrku woprawdźe wuprózdnić?',
	'coll-rename'                    => 'Přemjenować',
	'coll-new_chapter'               => 'Zapodaj mjeno za nowy kapitl',
	'coll-rename_chapter'            => 'Zapodaj nowe mjeno za kapitl',
	'coll-no_such_category'          => 'Žana tajka kategorija',
	'coll-mwpdf_error_title'         => 'PDF njeda so wutworić',
	'coll-mwpdf_error_msg'           => 'Při wutworjenju PDF je zmylk wustupił.',
	'coll-mwzip_error_title'         => 'Zběrka stronow njeda so wutworić',
	'coll-mwzip_error_msg'           => 'Při wutworjenju zběrku stronow je zmylk wustupił.',
	'coll-notitle_title'             => 'Titul strony njeda so zwěsćić.',
	'coll-enter_title'               => 'Zapodaj titul za zběrku:',
	'coll-error_reponse'             => 'Serwer je zmylk zdźělił',
	'coll-empty_collection'          => 'Prózdna zběrka',
	'coll-revision'                  => 'Wersija: %PARAM%',
	'coll-save_collection_title'     => 'Zběrku składować',
	'coll-personal_collection_label' => 'Wosobinska zběrka:',
	'coll-save_collection'           => 'Zběrku składować',
	'coll-overwrite_title'           => 'Strona eksistuje. Přepisać?',
	'coll-yes'                       => 'Haj',
	'coll-no'                        => 'Ně',
	'coll-overwrite'                 => 'Přepisać',
	'coll-append'                    => 'Připójsnyć',
	'coll-cancel'                    => 'Přetorhnyć',
	'coll-limit_exceeded_title'      => 'Zběrka přewulka',
	'coll-generating_pdf_title'      => 'Wutworjenje PDF',
	'coll-nopdf_error_title'         => 'Žana dataja PDF namakana',
	'coll-notfound_title'            => 'zběrka njenamakana',
	'coll-notfound_text'             => 'Strona zběrki njebu namakana.',
	'coll-return_to_collection'      => '<p>Wróćo k <a href="$1">$2</a></p>',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'coll-title' => 'Cím:',
	'coll-yes'   => 'Igen',
	'coll-no'    => 'Nem',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 * @author SPQRobin
 */
$messages['is'] = array(
	'coll-collection'           => 'Safn',
	'coll-collections'          => 'Söfn',
	'coll-portlet_title'        => 'Safnið mitt',
	'coll-add_page'             => 'Bæta við síðu',
	'coll-remove_page'          => 'Fjarlægja síðu',
	'coll-add_category'         => 'Bæta við flokki',
	'coll-load_collection'      => 'Hlaða safn',
	'coll-show_collection'      => 'Sýna safn',
	'coll-help_collections'     => 'Safnhjálp',
	'coll-empty'                => 'tómur',
	'coll-page'                 => 'síða',
	'coll-pages'                => 'síður',
	'coll-download_as_pdf'      => 'Sækja sem PDF-skjal',
	'coll-my_collection'        => 'Mitt safn',
	'coll-download_pdf'         => 'Sækja PDF',
	'coll-remove'               => 'Fjarlægja',
	'coll-title'                => 'Titill:',
	'coll-rename'               => 'Endurnefna',
	'coll-new_chapter'          => 'Sláðu inn nafn á nýjum kafla',
	'coll-rename_chapter'       => 'Sláðu inn nýtt nafn fyrir kafla',
	'coll-no_such_category'     => 'Flokkur ekki til',
	'coll-save_collection'      => 'Vista safn',
	'coll-yes'                  => 'Já',
	'coll-no'                   => 'Nei',
	'coll-overwrite'            => 'Yfirrita',
	'coll-append'               => 'Auka við',
	'coll-cancel'               => 'Hætta við',
	'coll-limit_exceeded_title' => 'Safn of stórt',
	'coll-nopdf_error_title'    => 'Ekkert PDF-skjal fannst',
	'coll-notfound_title'       => 'Safn fannst ekki',
	'coll-order_from_pp'        => 'Panta bók frá $1',
	'coll-about_pp'             => 'Um $1',
);

/** Japanese (日本語)
 * @author JtFuruhata
 * @author Siebrand
 */
$messages['ja'] = array(
	'coll-desc'                       => 'PDFファイルを作成するための[[Special:Collection|ページコレクション]]',
	'coll-collection'                 => 'コレクション',
	'coll-collections'                => 'コレクション',
	'coll-portlet_title'              => 'マイ・コレクション',
	'coll-add_page'                   => 'ページの追加',
	'coll-remove_page'                => 'ページの削除',
	'coll-add_category'               => 'カテゴリの追加',
	'coll-load_collection'            => 'コレクションの読み込み',
	'coll-show_collection'            => 'コレクションを見る',
	'coll-help_collections'           => 'コレクションのヘルプ',
	'coll-empty'                      => '何もありません',
	'coll-page'                       => 'ページ',
	'coll-pages'                      => 'ページ',
	'coll-download_as_pdf'            => 'PDF形式でダウンロード',
	'coll-noscript_text'              => '<noscript><h1>JavaScriptを利用しています！</h1>
<strong>ご利用のブラウザはJavaScriptをサポートしていないか、JavaScriptが無効になっています。
このページは、JavaScriptが有効になっていない場合、正しく動作しません。</strong></noscript>',
	'coll-intro_text'                 => 'ページコレクションを作成したり、そこからPDFファイルを作成しダウンロードしたり、後に参照したり共有するためにコレクションを保存することができます。

詳細は、[[{{MediaWiki:Coll-helppage}}|ページコレクションのヘルプ]]をご覧ください。',
	'coll-helppage'                   => '{{ns:help}}:ページコレクション',
	'coll-pdftoobigcat'               => 'カテゴリには%PARAM%以上のページが含まれており、その先頭の%PARAM%ページのみがコレクションに追加されます。
これらを追加しますか？',
	'coll-my_collection'              => 'マイ・コレクション',
	'coll-download_title'             => 'PDF形式でコレクションをダウンロード',
	'coll-download_text'              => 'ページコレクションから自動生成されたPDFファイルをダウンロードするには、このボタンを押してください。',
	'coll-download_pdf'               => 'PDFファイルをダウンロード',
	'coll-remove'                     => '削除',
	'coll-move_to_top'                => '先頭へ',
	'coll-move_up'                    => '上へ',
	'coll-move_down'                  => '下へ',
	'coll-move_to_bottom'             => '最後尾へ',
	'coll-title'                      => 'タイトル:',
	'coll-subtitle'                   => 'サブタイトル:',
	'coll-contents'                   => '内容',
	'coll-create_chapter'             => '新しい章を作成',
	'coll-sort_alphabetically'        => 'ページを辞書順にソート',
	'coll-clear_collection'           => 'コレクションの消去',
	'coll-clear_confirm'              => '本当にあなたのコレクションを消去してもよろしいですか？',
	'coll-rename'                     => '名称変更',
	'coll-new_chapter'                => '新しい章見出しを入力',
	'coll-rename_chapter'             => '新しい章見出しを入力',
	'coll-no_such_category'           => '指定されたカテゴリは存在しません',
	'coll-mwpdf_error_title'          => 'PDFファイルが生成できません',
	'coll-mwpdf_error_msg'            => 'PDFファイル生成中にエラーが発生しました',
	'coll-mwzip_error_title'          => 'ページコレクションを作成できません',
	'coll-mwzip_error_msg'            => 'ページコレクション作成中にエラーが発生しました',
	'coll-notitle_title'              => 'ページタイトルが未設定です。',
	'coll-post_failed_title'          => 'POSTリクエストの失敗',
	'coll-post_failed_msg'            => 'このPOSTリクエストは失敗しました。',
	'coll-enter_title'                => 'コレクションのタイトルを入力:',
	'coll-error_reponse'              => 'サーバからのエラーレスポンス',
	'coll-empty_collection'           => '空のコレクション',
	'coll-revision'                   => '特定版: %PARAM%',
	'coll-save_collection_title'      => 'コレクションの保存',
	'coll-save_collection_text'       => '後に利用するためコレクションを保存するには、コレクションタイプを選択し、ページタイトルを入力してください:',
	'coll-login_to_save'              => '後に利用するためコレクションを保存するには、<a href="$1">ログインまたはアカウント作成</a>を行ってください。',
	'coll-personal_collection_label'  => '個人的なコレクション:',
	'coll-community_collection_label' => '共有するコレクション:',
	'coll-save_collection'            => 'コレクションの保存',
	'coll-overwrite_title'            => '同名のページが存在します。上書きしますか？',
	'coll-overwrite_text'             => '$1 という名前のページが既に存在しています。
これをあなたのコレクションに置き換えますか？',
	'coll-yes'                        => 'はい',
	'coll-no'                         => 'いいえ',
	'coll-load_overwrite_text'        => 'あなたのコレクションには既に複数のページが存在しています。
現在のコレクションで上書きする、既存コレクションに追加する、キャンセルする、のいずれかを選択してください。',
	'coll-overwrite'                  => '上書き',
	'coll-append'                     => '追加',
	'coll-cancel'                     => 'キャンセル',
	'coll-limit_exceeded_title'       => 'コレクションが大きすぎます',
	'coll-limit_exceeded_text'        => 'あなたのページコレクションは大きすぎます。
これ以上のページを追加することはできません。',
	'coll-generating_pdf_title'       => 'PDFファイルの生成',
	'coll-generating_pdf_text'        => "'''PDFファイルの作成が完了するまで、今しばらくお待ちください。'''
このページは数秒ごとに自動的に更新されます。もしも自動更新されない場合は、ブラウザの更新ボタンを押してください。",
	'coll-pdf_finished_text'          => 'PDFファイルの作成に成功しました。
以下のリンクをクリックすると、あなたのコンピュータへダウンロードすることができます。',
	'coll-notfound_title'             => 'コレクションが見つかりません',
	'coll-notfound_text'              => 'コレクションの保存ページが見つかりませんでした。',
	'coll-return_to_collection'       => '<p><a href="$1">$2</a>に戻る</p>',
	'coll-pages_removed'              => '以下のページはPDF形式での生成に失敗したため、作成されたPDFファイルには含まれていません:',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'coll-desc'                       => '[[Special:Collection|Kolèksi kaca-kaca]], nggawé PDF',
	'coll-collection'                 => 'Kolèksi',
	'coll-collections'                => 'Kolèksi-kolèksi',
	'coll-portlet_title'              => 'Kolèksiku',
	'coll-add_page'                   => 'Tambahna kaca',
	'coll-remove_page'                => 'Ilangana kaca',
	'coll-add_category'               => 'Tambah kategori',
	'coll-load_collection'            => 'Unggahna kolèksi',
	'coll-show_collection'            => 'Tuduhna kolèksi',
	'coll-help_collections'           => 'Pitulung kolèksi',
	'coll-empty'                      => 'kosong',
	'coll-page'                       => 'kaca',
	'coll-pages'                      => 'kaca-kaca',
	'coll-download_as_pdf'            => 'Undhuhen minangka PDF',
	'coll-helppage'                   => 'Help:Collections',
	'coll-my_collection'              => 'Kolèksiku',
	'coll-download_title'             => 'Undhuh Kolèksi minangka PDF',
	'coll-download_text'              => 'Kanggo ngundhuh berkas PDF sing digawé sacara otomatis saka kolèksi kaca panjenengan, mangga ngeklik tombolé.',
	'coll-download_pdf'               => 'Undhuh PDF',
	'coll-remove'                     => 'Ilangana',
	'coll-title'                      => 'Irah-irahan (judhul):',
	'coll-subtitle'                   => 'Subjudhul:',
	'coll-contents'                   => 'Isi',
	'coll-create_chapter'             => 'Nggawé bab anyar',
	'coll-sort_alphabetically'        => 'Sortir kaca-kaca sacara alfabètis',
	'coll-clear_collection'           => 'Kosongna kolèksi',
	'coll-clear_confirm'              => 'Apa panjenengan pancèn bener ngosongi kolèksi panjenengan?',
	'coll-rename'                     => 'Ganti jeneng',
	'coll-new_chapter'                => 'Lebokna jeneng anyar kanggo bab',
	'coll-rename_chapter'             => 'Lebokna jeneng anyar kanggo bab',
	'coll-no_such_category'           => 'Ora ana kategori kaya mengkono',
	'coll-mwpdf_error_title'          => 'Ora bisa nggawé PDF',
	'coll-mwpdf_error_msg'            => 'Ana kaluputan nalika nggawé berkas PDF.',
	'coll-notitle_title'              => 'Irah-irahan kaca iki ora bisa ditemtokaké.',
	'coll-enter_title'                => 'Lebokna irah-irahan (judhul) kanggo kolèksi:',
	'coll-empty_collection'           => 'Kolèksi kosong',
	'coll-revision'                   => 'Révisi: %PARAM%',
	'coll-save_collection_title'      => 'Simpen Kolèksi',
	'coll-personal_collection_label'  => 'Kolèksi pribadi:',
	'coll-community_collection_label' => 'Kolèksi komunitas:',
	'coll-save_collection'            => 'Simpen kolèksi',
	'coll-overwrite_title'            => 'Kaca wis ana. Ditimpa waé?',
	'coll-yes'                        => 'Iya',
	'coll-no'                         => 'Ora',
	'coll-overwrite'                  => 'Timpanen',
	'coll-append'                     => 'Lampirna',
	'coll-cancel'                     => 'Batal',
	'coll-limit_exceeded_title'       => 'Kolèksi Kegedhèn',
	'coll-limit_exceeded_text'        => 'Kolèksi kaca panjenengan iku kegedhèn.
Ora bisa nambah kaca-kaca liya manèh.',
	'coll-generating_pdf_title'       => 'Nggawé PDF',
	'coll-generating_pdf_text'        => "'''Tulung nunggu sadélok sementara berkas PDF lagi digawé.'''

Status saiki: %(progrès)d%%.

Kaca iki samesthiné kudhu nganyari dhéwé saben sawetara detik.
Yèn iki ora dumadi, mangga mencèt tombol ''refresh'' ing panjlajah wèb panjenengan.",
	'coll-pdf_finished_text'          => 'Berkas PDF wis digawé.
[http://URL Klik ing kéné] kanggo ngundhuh ing komputer panjenengan.',
	'coll-notfound_title'             => 'Kolèksi Ora Ditemokaké',
	'coll-notfound_text'              => 'Ora bisa nemokaké kaca kolèksi.',
	'coll-pdf_error_text'             => 'Ana kaluputan nalika nggawé berkas PDF.',
	'coll-book_title'                 => 'Pesen Buku Cithak',
	'coll-order_from_pp'              => 'Pesen buku saka $1',
	'coll-about_pp'                   => 'Perkara $1',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author គីមស៊្រុន
 * @author Lovekhmer
 */
$messages['km'] = array(
	'coll-add_page'             => 'បន្ថែមទំព័រ',
	'coll-remove_page'          => 'ដកទំព័រចេញ',
	'coll-add_category'         => 'បន្ថែមចំណាត់ក្រុម',
	'coll-empty'                => 'ទទេ',
	'coll-page'                 => 'ទំព័រ',
	'coll-pages'                => 'ទំព័រ',
	'coll-download_as_pdf'      => 'ទាញយក ជា​ PDF',
	'coll-download_pdf'         => 'ទាញយក PDF',
	'coll-remove'               => 'ដកចេញ',
	'coll-move_to_top'          => 'ទៅ​លើគេបំផុត',
	'coll-move_up'              => 'រំកិលឡើង',
	'coll-move_down'            => 'រំកិលចុះ',
	'coll-move_to_bottom'       => 'ទៅក្រោមគេបំផុត',
	'coll-title'                => 'ចំណងជើង៖',
	'coll-subtitle'             => 'ចំណងជើងរង៖',
	'coll-contents'             => 'ខ្លឹមសារ',
	'coll-create_chapter'       => 'បង្កើតជំពូកថ្មី',
	'coll-sort_alphabetically'  => 'តំរៀប​ទំព័រ​តាម​អក្ខរក្រម',
	'coll-rename'               => 'ប្តូរឈ្មោះ',
	'coll-new_chapter'          => 'ដាក់ឈ្មោះអោយ ជំពូកថ្មី',
	'coll-rename_chapter'       => 'ដាក់ឈ្មោះថ្មី អោយជំពូក',
	'coll-no_such_category'     => 'គ្មានចំណាត់ក្រុម ដូចនេះទេ',
	'coll-mwpdf_error_title'    => 'មិន​អាច​បង្កើត PDF',
	'coll-mwpdf_error_msg'      => 'មាន​បញ្ហា​មួយ​ក្នុងពេល​បង្កើត​ PDF',
	'coll-notitle_title'        => 'មិន​អាចកំនត់​ចំនងជើង​នៃទំព័រ',
	'coll-overwrite_title'      => 'ទំព័រ​មានហើយ។ សរសេរ​ជាន់ពីលើ ?',
	'coll-yes'                  => 'បាទ / ចាស',
	'coll-no'                   => 'ទេ',
	'coll-overwrite'            => 'សរសេរជាន់ពីលើ',
	'coll-append'               => 'បន្ថែមនៅចុង',
	'coll-cancel'               => 'បោះបង់',
	'coll-generating_pdf_title' => 'បង្កើត PDF',
	'coll-pdf_finished_title'   => 'បញ្ចប់​ការបង្កើត PDF',
	'coll-nopdf_error_title'    => 'រកមិនឃើញ​ឯកសារ PDF',
	'coll-return_to_collection' => '<p>ត្រលប់ទៅកាន់<a href="$1">$2</a>វិញ</p>',
	'coll-book_title'           => 'ទិញសៀវភៅដែលបានបោះពុម្ព',
	'coll-order_from_pp'        => 'បញ្ជាទិញ​សៀវភៅពី $1',
	'coll-about_pp'             => 'អំពី$1',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'coll-page'     => 'pahina',
	'coll-contents' => 'Manga Sulud',
	'coll-cancel'   => 'Kanselar',
	'coll-about_pp' => 'Angut sa Iwan $1',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'coll-desc'                      => "[[Special:Collection|Säiten zesummestellen]], PDF'e generéieren",
	'coll-collection'                => 'Sammlung',
	'coll-collections'               => 'Sammlungen',
	'coll-portlet_title'             => 'Meng Sammlung',
	'coll-add_page'                  => 'Säit derbäisetzen',
	'coll-remove_page'               => 'Säit ewechhuelen',
	'coll-add_category'              => 'Kategorie derbäisetzen',
	'coll-load_collection'           => 'Sammlung lueden',
	'coll-show_collection'           => "D'Sammlung weisen",
	'coll-help_collections'          => "Hellëf iwwert d 'Sammlungen",
	'coll-empty'                     => 'eidel',
	'coll-page'                      => 'Säit',
	'coll-pages'                     => 'Säiten',
	'coll-download_as_pdf'           => 'Als PDF eroflueden',
	'coll-my_collection'             => 'Meng Sammlung',
	'coll-download_pdf'              => 'PDF eroflueden',
	'coll-remove'                    => 'Ewechhuelen',
	'coll-move_to_top'               => 'No ganz uewe réckelen',
	'coll-move_up'                   => 'Eropréckelen',
	'coll-move_down'                 => 'Erofréckelen',
	'coll-move_to_bottom'            => 'No ganz ënne réckelen',
	'coll-title'                     => 'Titel:',
	'coll-subtitle'                  => 'Ënnertitel:',
	'coll-create_chapter'            => 'Een neit Kapitel maachen',
	'coll-sort_alphabetically'       => 'Säiten alphabetesch sortéieren',
	'coll-clear_collection'          => 'Sammlung eidel maachen',
	'coll-rename'                    => 'Ëmbenennen',
	'coll-new_chapter'               => 'Gitt den Numm fir dat neit Kapitel un',
	'coll-rename_chapter'            => "Gitt een neie Numm fir d'Kapitel un",
	'coll-no_such_category'          => 'Keng esou Kategorie',
	'coll-mwpdf_error_title'         => 'E PDF konnt net gemaach ginn',
	'coll-error_reponse'             => 'Feelermeldng vum Server',
	'coll-empty_collection'          => 'Eidel Sammlung',
	'coll-revision'                  => 'Versioun: %PARAM%',
	'coll-save_collection_title'     => 'Sammlung späicheren',
	'coll-personal_collection_label' => 'Perséinlech Sammlung',
	'coll-save_collection'           => 'Sammlung späicheren',
	'coll-overwrite_title'           => "D'Säit gëtt et. Iwwerschreiwen?",
	'coll-yes'                       => 'Jo',
	'coll-no'                        => 'Neen',
	'coll-overwrite'                 => 'Iwwerschreiwen',
	'coll-append'                    => 'Derbäisetzen',
	'coll-cancel'                    => 'Annulléieren',
	'coll-limit_exceeded_title'      => 'Sammlung ze grouss',
	'coll-limit_exceeded_text'       => 'Är Sammlung ass ze grouss.
Et kënne keng Säite méi derbäigesat ginn.',
	'coll-generating_pdf_title'      => 'PDF maachen',
	'coll-return_to_collection'      => '<p>Zréck op <a href="$1">$2</a></p>',
	'coll-book_title'                => 'Gedréckte Buch bestellen',
	'coll-order_from_pp'             => "D'Buch bestelle bäi $1",
	'coll-about_pp'                  => 'Iwwer $1',
);

/** Lao (ລາວ)
 * @author Passawuth
 */
$messages['lo'] = array(
	'coll-page'   => 'ໜ້າ',
	'coll-pages'  => 'ໜ້າ',
	'coll-remove' => 'ເອົາອອກ',
	'coll-yes'    => 'ໃຊ່',
	'coll-no'     => 'ບໍ່ໃຊ່',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'coll-page'                 => 'താള്‍',
	'coll-remove'               => 'നീക്കം ചെയ്യുക',
	'coll-move_to_top'          => 'ഏറ്റവും മുകളിലേക്ക് നീങ്ങുക',
	'coll-move_up'              => 'മുകളിലേക്കു നീങ്ങുക',
	'coll-move_down'            => 'താഴേക്ക് നീങ്ങുക',
	'coll-move_to_bottom'       => 'ഏറ്റവും താഴേക്ക് നീങ്ങുക',
	'coll-title'                => 'ശീര്‍ഷകം:',
	'coll-contents'             => 'ഉള്ളടക്കം',
	'coll-create_chapter'       => 'പുതിയ അദ്ധ്യായം സൃഷ്ടിക്കുക',
	'coll-sort_alphabetically'  => 'താളുകള്‍ അകാദാരിക്രമത്തില്‍ ക്രമീകരിക്കുക',
	'coll-rename'               => 'പുനഃര്‍നാമകരണം ചെയ്യുക',
	'coll-new_chapter'          => 'പുതിയ അദ്ധ്യായത്തിനു ഒരു പേരു കൊടുക്കുക',
	'coll-rename_chapter'       => 'അദ്ധ്യായത്തിനു പുതിയൊരു പേരു കൊടുക്കുക',
	'coll-no_such_category'     => 'അങ്ങനെ ഒരു വിഭാഗം നിലവിലില്ല',
	'coll-mwpdf_error_title'    => 'PDF സൃഷ്ടിക്കുന്നതിനു കഴിഞ്ഞില്ല',
	'coll-mwpdf_error_msg'      => 'PDF സൃഷ്ടിക്കാന്‍ ശ്രമിക്കുന്നതിനിടയില്‍ പിശക് സംഭവിച്ചു.',
	'coll-yes'                  => 'ശരി',
	'coll-no'                   => 'ഇല്ല',
	'coll-cancel'               => 'റദ്ദാക്കുക',
	'coll-return_to_collection' => '<p><a href="$1">$2</a>-ലേക്കു തിരിച്ചു പോവുക</p>',
	'coll-order_from_pp'        => '$1-ല്‍ നിന്നു പുസ്തകം ഓര്‍ഡര്‍ ചെയ്യുക',
	'coll-about_pp'             => '$1-നെ കുറിച്ച്',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 */
$messages['mr'] = array(
	'coll-desc'                       => '[[Special:Collection|पाने गोळा करा]], पीडीएफ तयार करा',
	'coll-collection'                 => 'गोळा केलेली पाने',
	'coll-collections'                => 'गोळा केलेली पाने',
	'coll-portlet_title'              => 'मी गोळा केलेली पाने',
	'coll-add_page'                   => 'पानाचा समावेश करा',
	'coll-remove_page'                => 'पान काढा',
	'coll-add_category'               => 'वर्गाचा समावेश करा',
	'coll-load_collection'            => 'गोळाकेलेली पाने दाखवा',
	'coll-show_collection'            => 'गोळा केलेली पाने दाखवा',
	'coll-help_collections'           => 'पाने गोळा करण्यासाठी मदत',
	'coll-empty'                      => 'रिकामे',
	'coll-page'                       => 'पान',
	'coll-pages'                      => 'पाने',
	'coll-download_as_pdf'            => 'पीडीएफ आवृत्ती उतरवा',
	'coll-noscript_text'              => '<noscript><h1>जावास्क्रीप्ट आवश्यक!</h1>
<strong>तुमचा ब्राउझार जावास्क्रीप्ट वापरू शकत नाही किंवा वापर बंद केलेला आहे.
जावास्क्रीप्ट चालू केल्याशिवाय हे पान व्यवस्थित काम करणार नाही.</strong></noscript>',
	'coll-intro_text'                 => 'तुम्ही काही पाने गोळा करू शकता, त्यांच्या पीडीएफ आवृत्त्या उतरवून घेऊ शकता किंवा गोळा केलेली पाने नंतर वापरण्यासाठी अथवा इतरांना देण्यासाठी जतन करून ठेऊ शकता.

अधिक माहितीसाठी [[{{MediaWiki:Coll-helppage}}|पाने गोळा करण्यासाठी मदत]] पहा.',
	'coll-helppage'                   => 'Help:गोळा केलेली पाने',
	'coll-pdftoobigcat'               => 'या वर्गात %PARAM% पेक्शा जास्त पाने आहेत, फक्त पहिल्या %PARAM% पानांचाच तुम्ही समावेश करू शकता.
तुम्ही समावेश करु इच्छिता का?',
	'coll-my_collection'              => 'मी गोळा केलेली पाने',
	'coll-download_title'             => 'गोळा केलेल्या पानांची पीडीएफ आवृत्ती उतरवून घ्या',
	'coll-download_text'              => 'तुम्ही गोळा केलेल्या पानांच्या पीडीएफ आवृत्त्या गोळा करण्यासाठी, दिलेली कळ दाबा.',
	'coll-download_pdf'               => 'पीडीएफ उतरवा',
	'coll-remove'                     => 'वगळा',
	'coll-move_to_top'                => 'सर्वात वर हलवा',
	'coll-move_up'                    => 'वर हलवा',
	'coll-move_down'                  => 'खाली हलवा',
	'coll-move_to_bottom'             => 'सर्वात खाली हलवा',
	'coll-title'                      => 'शीर्षक:',
	'coll-subtitle'                   => 'उपशीर्षक:',
	'coll-contents'                   => 'अनुक्रमणिका',
	'coll-create_chapter'             => 'नवीन धडा बनवा',
	'coll-sort_alphabetically'        => 'अक्षरांप्रमाणे पानांचे वर्गीकरण करा',
	'coll-clear_collection'           => 'सर्व गोळा केलेली पाने पुसा',
	'coll-clear_confirm'              => 'तुम्ही खरोखर सर्व गोळा केलेली पाने काढून टाकू इच्छिता?',
	'coll-rename'                     => 'नाव बदला',
	'coll-new_chapter'                => 'नवीन धड्याचे नाव लिहा',
	'coll-rename_chapter'             => 'नवीन धड्याचे नाव लिहा',
	'coll-no_such_category'           => 'असा वर्ग अस्तित्वात नाही',
	'coll-mwpdf_error_title'          => 'पीडीएफ तयार करू शकलेलो नाही',
	'coll-mwpdf_error_msg'            => 'पीडीएफ तयार करताना त्रुटी आढळलेली आहे.',
	'coll-mwzip_error_title'          => 'पानांचे कलेक्शन तयार करू शकलेलो नाही',
	'coll-mwzip_error_msg'            => 'पानांचे कलेक्शन तयार करताना त्रुटी आढळलेली आहे.',
	'coll-notitle_title'              => 'या पानाचे शीर्षक ठरविता आलेले नाही.',
	'coll-post_failed_title'          => 'पोस्ट (POST) ची मागणी पूर्ण झालेली नाही',
	'coll-post_failed_msg'            => 'पोस्ट (POST) ची मागणी पूर्ण झालेली नाही.',
	'coll-enter_title'                => 'कलेल्शनला शीर्षक द्या:',
	'coll-error_reponse'              => 'सर्व्हर कडून चुकीचा संदेश आलेला आहे',
	'coll-empty_collection'           => 'रिकामे कलेक्शन',
	'coll-revision'                   => 'आवृत्ती: %PARAM%',
	'coll-save_collection_title'      => 'कलेक्शन जतन करा',
	'coll-save_collection_text'       => 'हे कलेक्शन नंतर वापरण्यासाठी पानाला शीर्षक देउन तसेच कलेक्शनचा प्रकार निवडून जतन करा:',
	'coll-login_to_save'              => 'जर तुम्ही कलेक्शन नंतर वापरण्यासाठी जतन करू इच्छित असाल, तर कृपया <a href="$1">प्रवेश करा अथवा सदस्य नोंदणी करा</a>.',
	'coll-personal_collection_label'  => 'वैयक्तिक कलेक्शन:',
	'coll-community_collection_label' => 'सामुहिक कलेक्शन:',
	'coll-save_collection'            => 'कलेक्शन जतन करा',
	'coll-overwrite_title'            => 'पान अस्तित्वात आहे. पुनर्लेखन करायचे का?',
	'coll-overwrite_text'             => '$1 या नावाचे पान अगोदरच अस्तित्वात आहे.
तुम्ही त्यावर तुमचे कलेक्शन पुनर्लेखित करू इच्छिता का?',
	'coll-yes'                        => 'होय',
	'coll-no'                         => 'नाही',
	'coll-load_overwrite_text'        => 'तुमच्या कलेक्शन मध्ये अगोदरच काही पाने आहेत.
तुम्ही तुमचे कलेक्शन पुनर्लेखित करू इच्छिता, की पाने वाढवू इच्छिता की रद्द करु इच्छिता?',
	'coll-overwrite'                  => 'पुनर्लेखन करा',
	'coll-append'                     => 'वाढवा',
	'coll-cancel'                     => 'रद्द करा',
	'coll-limit_exceeded_title'       => 'कलेक्शन खूप मोठे झालेले आहे',
	'coll-limit_exceeded_text'        => 'तुमचे पानांचे कलेक्शन खूप मोठे झालेले आहे.
आणखी पाने वाढविता येणार नाहीत.',
	'coll-generating_pdf_title'       => 'पीडीएफ तयार करीत आहे',
	'coll-generating_pdf_text'        => "'''कॄपया पीडीएफ तयार होईपर्यंत वाट पहा.'''

प्रगती: %(progress)d%%.

हे पान आपोआप काही सेकंदांनंतर ताजेतवाने व्हायला पाहिजे. 
जर तसे झाले नाही, तर कृपया आपल्या ब्राउझरला ताजेतवाने (refresh) करा.",
	'coll-pdf_finished_text'          => 'पीडीएफ संचिका तयार झालेली आहे.
आपल्या संगणकात ती उतरवून घेण्यासाठी खालील दुव्यावर टिचकी मारा.
पीडीएफच्या आउटपुट बद्दल समाधानी आहात का?
नसेल तर ते सुधारण्याच्या शक्यतांबद्दल [[{{MediaWiki:Coll-helppage}}|कलेक्शन बद्दलची मदत]] पहा.',
	'coll-pdf_not_satisfied'          => 'पीडीएफ आउटपुट वर संतुष्ट नाही आहात? ते सुधरण्याच्या शक्यतांसाठी [[{{MediaWiki:Coll-helppage}}|कलेक्शन माहिती पृष्ठ]] पहा.',
	'coll-notfound_title'             => 'कलेक्शन सापडले नाही',
	'coll-notfound_text'              => 'कलेक्शन पान सापडले नाही.',
	'coll-return_to_collection'       => '<p><a href="$1">$2</a> कडे परत जा</p>',
	'coll-pages_removed'              => 'खालील पाने पीडीएफ संचिकेत अंतर्भूत करू शकलेलो नाही:',
	'coll-pdf_error_text'             => 'पीडीएफ तयार करण्यामध्ये त्रुटी आलेली आहे.',
	'coll-book_title'                 => 'छापील आवृत्तीची मागणी नोंदवा',
	'coll-book_text'                  => 'तुम्ही खाली दिलेल्या मागणीनुसार छपाई करणार्‍या जोडीदारांच्या संकेतस्थळाला भेट देऊन तुमच्या कलेक्शन मधील पानांची छापील आवृत्ती मिळवू शकता:',
	'coll-order_from_pp'              => '$1 कडून छापील प्रत मागवा',
	'coll-about_pp'                   => '$1 बद्दल',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
 * @author GerardM
 */
$messages['nl'] = array(
	'coll-desc'                       => "[[Special:Collection|Pagina's verzamelen]], PDF's genereren",
	'coll-collection'                 => 'Verzameling',
	'coll-collections'                => 'Verzamelingen',
	'coll-portlet_title'              => 'Mijn verzameling',
	'coll-add_page'                   => 'Pagina toevoegen',
	'coll-remove_page'                => 'Pagina verwijderen',
	'coll-add_category'               => 'Categorie toevoegen',
	'coll-load_collection'            => 'Verzameling laden',
	'coll-show_collection'            => 'Verzameling weergeven',
	'coll-help_collections'           => 'Hulp bij verzamelingen',
	'coll-empty'                      => 'leeg',
	'coll-page'                       => 'pagina',
	'coll-pages'                      => "pagina's",
	'coll-download_as_pdf'            => 'Als PDF downloaden',
	'coll-noscript_text'              => '<noscript><h1>JavaScript is vereist!</h1>
<strong>Uw browser understeunt geen JavaScript of JavaScript is uitgeschakeld.
Deze pagina werkt niet correct tenzij u JavaScript inschakelt.</strong></noscript>',
	'coll-intro_text'                 => "U kunt pagina's in een verzameling plaatsen, een PDF-bestand maken en downloaden van een paginaverzameling, en paginaverzameling opslaan voor later gebruik, of om ze te delen.

[[{{MediaWiki:Coll-helppage}}|Meer informatie over verzamelingen]].",
	'coll-helppage'                   => 'Help:Verzamelingen',
	'coll-pdftoobigcat'               => "De categorie bevat meer dan %PARAM% pagina's. Alleen de eerste %PARAM% pagina's kunnen aan uw verzameling toegevoegd worden.
Wilt u ze toevoegen?",
	'coll-my_collection'              => 'Mijn verzameling',
	'coll-download_title'             => 'Verzameling als PDF downloaden',
	'coll-download_text'              => 'Klik op de knop om een automatisch gemaakt PDF-bestand van uw paginaverzameling te downloaden.',
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
	'coll-clear_collection'           => 'Verzameling leegmaken',
	'coll-clear_confirm'              => 'Weet u zeker dat u de verzameling leeg wilt maken?',
	'coll-rename'                     => 'Hernoemen',
	'coll-new_chapter'                => 'Voer de naam van het nieuwe hofdstuk in',
	'coll-rename_chapter'             => 'Voer een nieuwe naam in voor het hoofdstuk',
	'coll-no_such_category'           => 'De categorie bestaat niet',
	'coll-mwpdf_error_title'          => 'De PDF kon niet gemaakt worden',
	'coll-mwpdf_error_msg'            => 'Er is een fout opgetreden tijdens het maken van de PDF.',
	'coll-mwzip_error_title'          => 'De paginaverzameling kon niet gemaakt worden',
	'coll-mwzip_error_msg'            => 'Er is een fout opgetreden tijdens het maken van de paginaverzameling.',
	'coll-notitle_title'              => 'De titel van de pagina kon niet vastgesteld worden.',
	'coll-post_failed_title'          => 'POST-verzoek mislukt',
	'coll-post_failed_msg'            => 'Het POST-verzoek is mislukt.',
	'coll-enter_title'                => 'Voer een titel in voor de verzameling:',
	'coll-error_reponse'              => 'De server heeft een foutmelding teruggegeven',
	'coll-empty_collection'           => 'Lege verzameling',
	'coll-revision'                   => 'Versie: %PARAM%',
	'coll-save_collection_title'      => 'Verzameling opslaan',
	'coll-save_collection_text'       => 'Kies een verzamelingstype en voer een paginatitel in om deze verzameling op te slaan voor later gebruik:',
	'coll-login_to_save'              => 'Als u verzamelingen wil opslaan voor later gebruik, <a href="$1">meld u zich dan aan of maak een gebruiker aan</a>.',
	'coll-personal_collection_label'  => 'Persoonlijke verzameling:',
	'coll-community_collection_label' => 'Gemeenschappelijke verzameling:',
	'coll-save_collection'            => 'Verzameling opslaan',
	'coll-overwrite_title'            => 'De pagina bestaat al. Overschrijven?',
	'coll-overwrite_text'             => 'Er bestaat al een pagina met de naam $1.
Wil u die pagina vervangen door uw verzameling?',
	'coll-yes'                        => 'Ja',
	'coll-no'                         => 'Nee',
	'coll-load_overwrite_text'        => "U hebt al een aantal pagina's in uw verzameling.
Wil u de bestaande verzameling overschrijven, de nieuwe pagina's toevoegen, of annuleren?",
	'coll-overwrite'                  => 'Overschrijven',
	'coll-append'                     => 'Toevoegen',
	'coll-cancel'                     => 'Annuleren',
	'coll-limit_exceeded_title'       => 'Verzameling is te groot',
	'coll-limit_exceeded_text'        => "Uw paginaverzameling is te groot.
U kunt geen pagina's meer toevoegen.",
	'coll-generating_pdf_title'       => 'Bezig met maken van PDF',
	'coll-generating_pdf_text'        => "'''Wacht alstublieft. Het PDF-bestand wordt gemaakt.'''

Voortgang: %(progress)d%%.

Over enige seconden hoort deze pagina automatisch te verversen.
Als dit niet werkt, klik dan op de knop 'Vernieuwen' in uw browser.",
	'coll-pdf_finished_text'          => 'Het PDF-bestand is beschikbaar.
[http://URL Klik hier] om het naar uw computer te downloaden.',
	'coll-pdf_not_satisfied'          => 'Niet tevreden met de PDF-uitvoer? Op de [[{{MediaWiki:Coll-helppage}}|hulppagina voor collecties]] staan manieren beschreven om die te verbeteren.',
	'coll-notfound_title'             => 'Verzameling niet gevonden',
	'coll-notfound_text'              => 'De verzamelingspagina is niet gevonden.',
	'coll-return_to_collection'       => '<p>Teruggaan naar <a href="$1">$2</a></p>',
	'coll-pages_removed'              => "De onderstaande pagina's konden niet opgemaakt worden en zijn uit het PDF-bestand verwijderd: %(articles)s",
	'coll-pdf_error_text'             => 'Een fout trad op bij het aanmaken van het PDF bestand.',
	'coll-book_title'                 => 'Gedrukt boek bestellen',
	'coll-book_text'                  => 'U kunt een gedrukt boek bestellen dat uw paginaverzameling bevat door een van de volgende print-on-demand-partners te bezoeken:',
	'coll-order_from_pp'              => 'Boek bij $1 bestellen',
	'coll-about_pp'                   => 'Over $1',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'coll-collection' => 'Samling',
	'coll-empty'      => 'tom',
	'coll-page'       => 'side',
	'coll-pages'      => 'sider',
	'coll-remove'     => 'Fjern',
	'coll-title'      => 'Tittel:',
	'coll-yes'        => 'Ja',
	'coll-no'         => 'Nei',
	'coll-cancel'     => 'Avbryt',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author H92
 * @author Siebrand
 */
$messages['no'] = array(
	'coll-desc'                       => 'Lag [[Special:Collection|sidesamlinger]] og generer PDF-filer',
	'coll-collection'                 => 'Samling',
	'coll-collections'                => 'Samlinger',
	'coll-portlet_title'              => 'Min samling',
	'coll-add_page'                   => 'Legg til side',
	'coll-remove_page'                => 'Fjern side',
	'coll-add_category'               => 'Legg til kategori',
	'coll-load_collection'            => 'Last samling',
	'coll-show_collection'            => 'Vis samling',
	'coll-help_collections'           => 'Hjelp for samlinger',
	'coll-empty'                      => 'tom',
	'coll-page'                       => 'side',
	'coll-pages'                      => 'sider',
	'coll-download_as_pdf'            => 'Last ned som PDF',
	'coll-noscript_text'              => '<noscript><h1>JavaScript er påkrevd!</h1>
<strong>Nettleseren din støtter ikke JavaScript, eller JavaScript har blitt slått av. Denne siden vil ikke fungere riktig med mindre JavaScript er slått på.</strong></noscript>',
	'coll-intro_text'                 => 'Du kan samle sider, generere og laste ned en PDF-fil fra sidesamlinger og lagre sidesamlinger for senere bruk eller for deling.',
	'coll-helppage'                   => 'Help:Samlinger',
	'coll-pdftoobigcat'               => 'Kategorien inneholder mer enn %PARAM% sider, kun de første %PARAM% sidene kan legges til i samlingen din. Vil du legge dem til?',
	'coll-my_collection'              => 'Min samling',
	'coll-download_title'             => 'Last ned samling som PDF',
	'coll-download_text'              => 'Klikk på knappen for å laste ned en automatisk generert PDF-fil av sidesamlingen din.',
	'coll-download_pdf'               => 'Last ned PDF',
	'coll-remove'                     => 'Fjern',
	'coll-move_to_top'                => 'Flytt til toppen',
	'coll-move_up'                    => 'Flytt opp',
	'coll-move_down'                  => 'Flytt ned',
	'coll-move_to_bottom'             => 'Flytt til bunnen',
	'coll-title'                      => 'Tittel:',
	'coll-subtitle'                   => 'Undertittel:',
	'coll-contents'                   => 'Innhold',
	'coll-create_chapter'             => 'Opprett nytt kapittel',
	'coll-sort_alphabetically'        => 'Sorter sider alfabetisk',
	'coll-clear_collection'           => 'Tøm samling',
	'coll-clear_confirm'              => 'Vil du virkelig tømme samlingen?',
	'coll-rename'                     => 'Gi nytt navn',
	'coll-new_chapter'                => 'Skriv inn navn for det nye kapittelet',
	'coll-rename_chapter'             => 'Skriv inn kapittelets nye navn',
	'coll-no_such_category'           => 'Ingen kategori ved dette navnet',
	'coll-mwpdf_error_title'          => 'Kunne ikke generere PDF',
	'coll-mwpdf_error_msg'            => 'En feil oppsto under PDF-generering',
	'coll-mwzip_error_title'          => 'Kunne ikke generere sidesamling',
	'coll-mwzip_error_msg'            => 'En feil oppsto under generering av sidesamling.',
	'coll-notitle_title'              => 'Fant ikke ut av sidens tittel.',
	'coll-post_failed_title'          => 'POST-forespørsel mislyktes',
	'coll-post_failed_msg'            => 'POST-forespørselen mislyktes.',
	'coll-enter_title'                => 'Skriv inn samlingens navn:',
	'coll-error_reponse'              => 'Feilrespons fra tjeneren',
	'coll-empty_collection'           => 'Tom samling',
	'coll-revision'                   => 'Revisjon: %PARAM%',
	'coll-save_collection_title'      => 'Lagre samling',
	'coll-save_collection_text'       => 'Velg en samlingstype og skriv inn en sidetittel for å lagre denne samlingen for senere bruk.',
	'coll-login_to_save'              => 'Om du vil lagre samlingene for senere bruk, <a href="$1">logg inn eller opprett en konto</a>.',
	'coll-personal_collection_label'  => 'Personlig samling:',
	'coll-community_collection_label' => 'Fellesskapssamling:',
	'coll-save_collection'            => 'Lagre samling',
	'coll-overwrite_title'            => 'Siden finnes. Erstatte den?',
	'coll-overwrite_text'             => 'En side ved navn $1 finnes fra før. Vil du erstatte den med samlingen din?',
	'coll-yes'                        => 'Ja',
	'coll-no'                         => 'Nei',
	'coll-load_overwrite_text'        => 'Du har allerede noen sider i samlingen din. Vil du erstatte den eksisterende samlingen, legge til det nye innholdet eller avbryte?',
	'coll-overwrite'                  => 'Erstatte',
	'coll-append'                     => 'Legge til',
	'coll-cancel'                     => 'Avbryt',
	'coll-limit_exceeded_title'       => 'Samling for stor',
	'coll-limit_exceeded_text'        => 'Sidesamlingen din er for stor. Ingen flere sider kan legges til.',
	'coll-generating_pdf_title'       => 'Genererer PDF',
	'coll-generating_pdf_text'        => "'''Vent mens PDF-filen genereres.''' Denne siden burde oppdateres med noen sekunders mellomrom. Om dette ikke fungerer, trykk på oppdateringsknappen i nettleseren din.",
	'coll-pdf_finished_text'          => 'PDF-filen har blitt skapt. [http://URL Klikk her] for å laste den ned. Om du ikke er fornøyd med resultatet kan du se [[{{MediaWiki:Coll-helppage}}|hjelpesiden om samlinger]] for mulige måter å forbedre det på.',
	'coll-pdf_not_satisfied'          => 'Ikke fornøyd med PDF-resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjelpesiden om samlinger]] for hvordan du kan forbedre det.',
	'coll-notfound_title'             => 'Samling ikke funnet',
	'coll-notfound_text'              => 'Kunne ikke finne samlingsside.',
	'coll-return_to_collection'       => '<p>Tilbake til <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Følgende sider kunne ikke gjengis og ble fjernet fra PDF-filen: %(articles)s',
	'coll-pdf_error_text'             => 'Det oppstod en feil ved generering av PDF-filen.',
	'coll-book_title'                 => 'Bestilling av trykt bok',
	'coll-book_text'                  => 'Du kan bestille en trykt bok med artikkelsamlingen din ved å besøke en av følgende trykkerpartnere:',
	'coll-order_from_pp'              => 'Bestill bok fra $1',
	'coll-about_pp'                   => 'Om $1',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'coll-desc'                       => "[[Special:Collection|Compilar de paginas]], generar de pdf's",
	'coll-collection'                 => 'Compilacion',
	'coll-collections'                => 'Compilacions',
	'coll-portlet_title'              => 'Ma compilacion',
	'coll-add_page'                   => 'Apondre una pagina',
	'coll-remove_page'                => 'Levar una pagina',
	'coll-add_category'               => 'Apondre una categoria',
	'coll-load_collection'            => 'Cargar una compilacion',
	'coll-show_collection'            => 'Afichar la compilacion',
	'coll-help_collections'           => 'Ajuda sus las compilacions',
	'coll-empty'                      => 'void',
	'coll-page'                       => 'pagina',
	'coll-pages'                      => 'paginas',
	'coll-download_as_pdf'            => 'Telecargar en PDF',
	'coll-noscript_text'              => "<noscript><h1>Javascript es necessari !</h1>
<strong>Vòstre navigaire supòrta pas Javascript o se l'a desactivat.
Aquesta pagina s'aficharà pas corrèctament tant que javascript serà pas activat.</strong></noscript>",
	'coll-intro_text'                 => "Podètz collectar de paginas, generar e telecargar de fichièrs PDF dempuèi las colleccions de paginas o de las salvagardas de las dichas colleccions per un usatge ulterior o per las partejar.

Vejatz [[{{MediaWiki:Coll-helppage}}|las paginas d'ajudas en matièra de colleccions]] per mai d'entresenhas.",
	'coll-helppage'                   => 'Ajuda:Collections',
	'coll-pdftoobigcat'               => 'La categoria conten mai de %PARAM% paginas, solas las primièras %PARAM% paginas pòdon èsser apondudas dins vòstra compilacion.
Las volètz apondre ?',
	'coll-my_collection'              => 'Ma compilacion',
	'coll-download_title'             => 'Telecargar la compilacion en PDF',
	'coll-download_text'              => 'Per telecargar un PDF generat automaticament a partir de vòstra compilacion, picatz sul boton.',
	'coll-download_pdf'               => 'Telecargar lo PDF',
	'coll-remove'                     => 'Levar',
	'coll-move_to_top'                => 'Desplaçar tot en naut',
	'coll-move_up'                    => 'Pujar',
	'coll-move_down'                  => 'Davalar',
	'coll-move_to_bottom'             => 'Desplaçar tot en bas',
	'coll-title'                      => 'Títol :',
	'coll-subtitle'                   => 'Sostítol :',
	'coll-contents'                   => 'Contengut',
	'coll-create_chapter'             => 'Crear un capitol novèl',
	'coll-sort_alphabetically'        => 'Triar las paginas per òrdre alfabetic',
	'coll-clear_collection'           => 'Voidar la compilacion',
	'coll-clear_confirm'              => 'Volètz vertadièrament voidar vòstra compilacion ?',
	'coll-rename'                     => 'Tornar nomenar',
	'coll-new_chapter'                => 'Entrar lo títol del capitol novèl',
	'coll-rename_chapter'             => 'Entrar lo títol novèl pel capitol',
	'coll-no_such_category'           => 'Pas de tala categoria',
	'coll-mwpdf_error_title'          => 'Pòt pas generar de PDF',
	'coll-mwpdf_error_msg'            => 'Una error es subrevenguda pendent la creacion del PDF.',
	'coll-mwzip_error_title'          => 'Pòt pas generar de compilacion',
	'coll-mwzip_error_msg'            => 'Una error es subrevenguda pendent la creacion de la compilacion',
	'coll-notitle_title'              => 'Lo títol de la pagina pòt pas èsser determinat.',
	'coll-post_failed_title'          => 'Fracàs de la requèsta POST',
	'coll-post_failed_msg'            => 'La requèsta POST a pas capitat.',
	'coll-enter_title'                => 'Picar un títol per la compilacion :',
	'coll-error_reponse'              => 'Lo serveire a rencontrat una error',
	'coll-empty_collection'           => 'Compilacion voida',
	'coll-revision'                   => 'Version : %PARAM%',
	'coll-save_collection_title'      => 'Salvagardar la compilacion',
	'coll-save_collection_text'       => 'Per salvagardar la compilacion, causissètz un tipe de compilacion e picatz un títol de pagina :',
	'coll-login_to_save'              => 'Se volètz salvagardar vòstra compilacion, pre de <a href="$1">vos connectar o vos crear un compte</a>.',
	'coll-personal_collection_label'  => 'Compilacion personala :',
	'coll-community_collection_label' => 'Compilacion collectiva :',
	'coll-save_collection'            => 'Salvagardar la compilacion',
	'coll-overwrite_title'            => "La pagina existís. L'espotir ?",
	'coll-overwrite_text'             => 'Una pagina amb lo títol $1 existís ja.
La volètz remplaçar per vòstra compilacion ?',
	'coll-yes'                        => 'Òc',
	'coll-no'                         => 'Non',
	'coll-load_overwrite_text'        => 'Ja avètz de paginas dins vòstra compilacion.
Volètz espotir vòstra compilacion actuala, i apondre lo contengut o alara anullar ?',
	'coll-overwrite'                  => 'Espotir',
	'coll-append'                     => 'Apondre',
	'coll-cancel'                     => 'Anullar',
	'coll-limit_exceeded_title'       => 'Compilacion tròp granda',
	'coll-limit_exceeded_text'        => 'Vòstra compilacion es tròp granda.
Cap de pagina pòt pas èsser ajustada.',
	'coll-generating_pdf_title'       => 'Creacion del PDF',
	'coll-generating_pdf_text'        => "'''Esperatz pendent la creacion del PDF.'''
Aquesta pagina se deuriá actualizar automaticament, se aquò es pas lo cas, podètz clicar sul boton d'actualizacion de vòstre navigaire.",
	'coll-pdf_finished_text'          => 'Lo fichièr PDF es estat creat.
[http://URL Clicatz aicí] per lo telecargar sus vòstre ordenador.',
	'coll-pdf_not_satisfied'          => 'Pas satisfach de la sortida PDF ? Vejatz [[{{MediaWiki:Coll-helppage}}|la pagina d’ajuda a prepaus de las colleccions]] per las possibilitats de melhorament.',
	'coll-notfound_title'             => 'Compilacion pas trobada',
	'coll-notfound_text'              => 'Pòt pas trobar la compilacion.',
	'coll-return_to_collection'       => '<p>Tornar a <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Las paginas seguentas an pas pogut èsser tractadas e son estadas levadas del fichièr PDF : %(articles)s',
	'coll-pdf_error_text'             => 'Una error es estada detectada al moment de la creacion del fichièr PDF.',
	'coll-book_title'                 => 'Comandar un libre imprimit',
	'coll-book_text'                  => "Podètz comandar un libre imprimit contenent vòstra colleccion d'articles en visitant una demanda d'impression de la part de partenaris :",
	'coll-order_from_pp'              => 'Comandar lo libre dempuèi $1',
	'coll-about_pp'                   => 'A prepaus de $1',
);

/** Ossetic (Иронау)
 * @author Amikeco
 */
$messages['os'] = array(
	'coll-page'  => 'фарс',
	'coll-title' => 'Сæргонд:',
	'coll-yes'   => 'О',
	'coll-no'    => 'Нæ',
);

/** Polish (Polski)
 * @author Masti
 * @author McMonster
 * @author Sp5uhe
 * @author Derbeth
 * @author Wpedzich
 * @author Siebrand
 */
$messages['pl'] = array(
	'coll-desc'                       => 'Umożliwia [[Special:Collection|tworzenie kolekcji]] stron i zapisanie ich do pliku w formacie PDF',
	'coll-collection'                 => 'Kolekcja',
	'coll-collections'                => 'Kolekcje',
	'coll-portlet_title'              => 'Moja kolekcja',
	'coll-add_page'                   => 'Dodaj stronę',
	'coll-remove_page'                => 'Usuń stronę',
	'coll-add_category'               => 'Dodaj kategorię',
	'coll-load_collection'            => 'Załaduj kolekcję',
	'coll-show_collection'            => 'Pokaż kolekcję',
	'coll-help_collections'           => 'Pomoc kolekcji',
	'coll-empty'                      => 'pusty',
	'coll-page'                       => 'strona',
	'coll-pages'                      => 'strony',
	'coll-download_as_pdf'            => 'Pobierz jako PDF',
	'coll-noscript_text'              => '<noscript><h1>Potrzebny JavaScript!</h1>
<strong>Twoja przeglądarka nie obsługuje JavaScript lub został on wyłączony.
Strona nie będzie działać poprawnie, dopóki JavaScript nie zostanie włączony.</strong></noscript>',
	'coll-intro_text'                 => 'Narzędzie umożliwia tworzenie kolekcji stron, z których można wygenerować plik PDF, jak też zapisać je w celu późniejszego wykorzystania lub udostępnienia.

Więcej informacji na [[{{MediaWiki:Coll-helppage}}|stronie pomocy dotyczącej kolekcji]].',
	'coll-helppage'                   => 'Pomoc:Kolekcje',
	'coll-pdftoobigcat'               => 'Kategoria zawiera więcej niż %PARAM% stron. Tylko pierwsze %PARAM% stron może zostać dodane do kolekcji.
Czy chcesz by zostały dodane?',
	'coll-my_collection'              => 'Moja kolekcja',
	'coll-download_title'             => 'Pobierz kolekcję jako PDF',
	'coll-download_text'              => 'Naciśnij przycisk, by pobrać automatycznie wygenerowaną wersję PDF Twojej kolekcji stron',
	'coll-download_pdf'               => 'Pobierz PDF',
	'coll-remove'                     => 'Usuń',
	'coll-move_to_top'                => 'Przenieś na górę',
	'coll-move_up'                    => 'Przenieś w górę',
	'coll-move_down'                  => 'Przenieś w dół',
	'coll-move_to_bottom'             => 'Przenieś na dół',
	'coll-title'                      => 'Tytuł:',
	'coll-subtitle'                   => 'Podtytuł:',
	'coll-contents'                   => 'Spis treści',
	'coll-create_chapter'             => 'Utwórz nowy rozdział',
	'coll-sort_alphabetically'        => 'Sortuj strony alfabetycznie',
	'coll-clear_collection'           => 'Wyczyść kolekcję',
	'coll-clear_confirm'              => 'Na pewno chcesz wyczyścić kolekcję?',
	'coll-rename'                     => 'Zmień nazwę',
	'coll-new_chapter'                => 'Wprowadź nazwę dla nowego rozdziału',
	'coll-rename_chapter'             => 'Wprowadź nową nazwę dla rozdziału',
	'coll-no_such_category'           => 'Nie ma takiej kategorii',
	'coll-mwpdf_error_title'          => 'Nie można utworzyć pliku PDF',
	'coll-mwpdf_error_msg'            => 'Błąd podczas tworzenia pliku PDF',
	'coll-mwzip_error_title'          => 'Nie mogę utworzyć kolekcji stron',
	'coll-mwzip_error_msg'            => 'Błąd podczas tworzenia kolekcji stron.',
	'coll-notitle_title'              => 'Tytuł strony nie może być określony.',
	'coll-post_failed_title'          => 'Żądanie POST nieudane',
	'coll-post_failed_msg'            => 'Żądanie POST nie powiodło się.',
	'coll-enter_title'                => 'Podaj tytuł kolekcji:',
	'coll-error_reponse'              => 'Błąd odpowiedzi serwera',
	'coll-empty_collection'           => 'Pusta kolekcja',
	'coll-revision'                   => 'Wersja: %PARAM%',
	'coll-save_collection_title'      => 'Zapisz kolekcję',
	'coll-save_collection_text'       => 'Aby zapisać kolekcję, wybierz jej rodzaj i tytuł:',
	'coll-login_to_save'              => 'Jeśli chcesz zapisać kolekcję, <a href="$1">zaloguj się lub utwórz konto</a>.',
	'coll-personal_collection_label'  => 'Kolekcja osobista:',
	'coll-community_collection_label' => 'Kolekcja społeczności:',
	'coll-save_collection'            => 'Zapisz kolekcję',
	'coll-overwrite_title'            => 'Strona już istnieje. Nadpisać?',
	'coll-overwrite_text'             => 'Strona pod tytułem $1 już istnieje.
Chcesz ją zastąpić swoją kolekcją?',
	'coll-yes'                        => 'Tak',
	'coll-no'                         => 'Nie',
	'coll-load_overwrite_text'        => 'Masz już strony w swojej kolekcji.
Czy chcesz nadpisać Twoją obecną kolekcję, dodać do niej strony czy anulować?',
	'coll-overwrite'                  => 'Nadpisz',
	'coll-append'                     => 'Dopisz',
	'coll-cancel'                     => 'Anuluj',
	'coll-limit_exceeded_title'       => 'Zbyt duża kolekcja',
	'coll-limit_exceeded_text'        => 'Twoja kolekcja stron jest zbyt duża.
Nie można dodać więcej stron.',
	'coll-generating_pdf_title'       => 'Tworzenie PDF',
	'coll-generating_pdf_text'        => "'''Poczekaj, plik PDF jest tworzony.'''
Ta strona powinna się automatycznie odświeżać co kilka sekund. Jeśli to nie działa, użyj przycisku odświeżania w Twojej przeglądarce.",
	'coll-pdf_finished_text'          => 'Plik PDF został utworzony.
[http://URL Kliknij tutaj], by pobrać go na swój komputer.',
	'coll-pdf_not_satisfied'          => 'Plik PDF nie spełnił Twoich oczekiwań? Zobacz [[{{MediaWiki:Coll-helppage}}|kolekcję opisów]] jak można podwyższyć jego jakość.',
	'coll-notfound_title'             => 'Nie znaleziono kolekcji',
	'coll-notfound_text'              => 'Nie udało się znaleźć strony kolekcji.',
	'coll-return_to_collection'       => '<p>Powróć do <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Następujące strony nie mogły zostać przetworzone do formatu PDF i nie ma ich w wynikowym pliku:',
	'coll-pdf_error_text'             => 'Wystąpił błąd w trakcie generowania pliku w formacie PDF.',
	'coll-book_title'                 => 'Zamów wydrukowaną książkę',
	'coll-book_text'                  => 'Możesz zamówić drukowaną książkę zawierającą kolekcję wybranych przez Ciebie stron. Odwiedź jednego z partnerów realizujących usługę wydruku na żądanie:',
	'coll-order_from_pp'              => 'Zamów książkę z $1',
	'coll-about_pp'                   => 'O $1',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'coll-collection'            => 'غونډ',
	'coll-collections'           => 'غونډونه',
	'coll-portlet_title'         => 'زما غونډ',
	'coll-add_page'              => 'مخ ورګډول',
	'coll-add_category'          => 'وېشنيزه ورګډول',
	'coll-help_collections'      => 'د غونډونو لارښود',
	'coll-empty'                 => 'تش',
	'coll-page'                  => 'مخ',
	'coll-pages'                 => 'مخونه',
	'coll-download_as_pdf'       => 'د PDF په توګه راښکته کول',
	'coll-my_collection'         => 'زما غونډ',
	'coll-remove'                => 'غورځول',
	'coll-title'                 => 'سرليک:',
	'coll-subtitle'              => 'لمنليک:',
	'coll-contents'              => 'مينځپانګه',
	'coll-create_chapter'        => 'يو نوی څپرکی جوړول',
	'coll-rename'                => 'نوم بدلول',
	'coll-no_such_category'      => 'داسې هېڅ کومه وېشنيزه نشته',
	'coll-save_collection_title' => 'غونډ خوندي کول',
	'coll-yes'                   => 'هو',
	'coll-no'                    => 'نه',
	'coll-nopdf_error_title'     => 'هېڅ کومه PDF دوتنه و نه موندلای شوه',
	'coll-notfound_title'        => 'غونډ و نه موندلای شو',
	'coll-about_pp'              => 'د $1 په اړه',
);

/** Portuguese (Português)
 * @author Malafaya
 * @author Lijealso
 * @author 555
 * @author MF-Warburg
 * @author Siebrand
 */
$messages['pt'] = array(
	'coll-desc'                       => '[[{{ns:special}}:Collection|Colecciona páginas]], gera PDFs',
	'coll-collection'                 => 'Colecção',
	'coll-collections'                => 'Colecções',
	'coll-portlet_title'              => 'Minha Colecção',
	'coll-add_page'                   => 'Adicionar página',
	'coll-remove_page'                => 'Remover página',
	'coll-add_category'               => 'Adicionar categoria',
	'coll-load_collection'            => 'Carregar colecção',
	'coll-show_collection'            => 'Mostrar colecção',
	'coll-help_collections'           => 'Ajuda de colecções',
	'coll-empty'                      => 'vazia',
	'coll-page'                       => 'página',
	'coll-pages'                      => 'páginas',
	'coll-download_as_pdf'            => 'Descarregar como PDF',
	'coll-noscript_text'              => '<noscript><h1>JavaScript é Requerido!</h1>
<strong>O seu "browser" não suporta JavaScript, ou o JavaScript foi desactivado.
Esta página não funcionará correctamente, excepto se o JavaScript for activado.</strong></noscript>',
	'coll-intro_text'                 => 'Você pode coleccionar páginas, gerar e descarregar um ficheiro PDF de colecções de páginas e gravar colecções de páginas para usar mais tarde ou partilhá-las.

Veja a [[{{MediaWiki:Coll-helppage}}|página de ajuda sobre colecções]] para mais informação.',
	'coll-helppage'                   => '{{ns:help}}:Colecções',
	'coll-pdftoobigcat'               => 'Esta categoria contém mais que %PARAM% páginas, sendo que apenas as primeiras %PARAM% páginas podem ser adicionadas à sua colecção.
Deseja adicioná-las?',
	'coll-my_collection'              => 'Minha Colecção',
	'coll-download_title'             => 'Descarregar Colecção como PDF',
	'coll-download_text'              => 'Para descarregar um ficheiro PDF da sua colecção de páginas gerado automaticamente, carregue no botão.',
	'coll-download_pdf'               => 'Descarregar PDF',
	'coll-remove'                     => 'Remover',
	'coll-move_to_top'                => 'Mover para o topo',
	'coll-move_up'                    => 'Mover acima',
	'coll-move_down'                  => 'Mover abaixo',
	'coll-move_to_bottom'             => 'Mover para o fundo',
	'coll-title'                      => 'Título:',
	'coll-subtitle'                   => 'Subtítulo:',
	'coll-contents'                   => 'Conteúdo',
	'coll-create_chapter'             => 'Criar novo capítulo',
	'coll-sort_alphabetically'        => 'Ordenar páginas alfabeticamente',
	'coll-clear_collection'           => 'Limpar colecção',
	'coll-clear_confirm'              => 'De certeza que quer limpar a sua colecção?',
	'coll-rename'                     => 'Renomear',
	'coll-new_chapter'                => 'Introduza o nome do novo capítulo',
	'coll-rename_chapter'             => 'Introduza o nome do capítulo',
	'coll-no_such_category'           => 'Não existe essa categoria',
	'coll-mwpdf_error_title'          => 'Não foi possível gerar PDF',
	'coll-mwpdf_error_msg'            => 'Um erro ocorreu durante a criação do PDF.',
	'coll-mwzip_error_title'          => 'Não foi fossível criar a colecção de páginas',
	'coll-mwzip_error_msg'            => 'Um erro ocorreu durante a criação da colecção de páginas.',
	'coll-notitle_title'              => 'Não foi possível determinar o título da página.',
	'coll-post_failed_title'          => 'Pedido POST falhou',
	'coll-post_failed_msg'            => 'O pedido POST falhou.',
	'coll-enter_title'                => 'Introduza título para a colecção:',
	'coll-error_reponse'              => 'Resposta de erro do servidor',
	'coll-empty_collection'           => 'Colecção vazia',
	'coll-revision'                   => 'Revisão: %PARAM%',
	'coll-save_collection_title'      => 'Gravar Colecção',
	'coll-save_collection_text'       => 'Para guardar uma colecção para uso futuro, escolha um tipo de colecção e introduza o título da página:',
	'coll-login_to_save'              => 'Se pretende gravar colecções para mais tarde, por favor, <a href="$1">autentique-se ou crie uma conta</a>.',
	'coll-personal_collection_label'  => 'Colecção pessoal:',
	'coll-community_collection_label' => 'Colecção comunitária:',
	'coll-save_collection'            => 'Gravar Colecção',
	'coll-overwrite_title'            => 'A página existe. Escrever por cima?',
	'coll-overwrite_text'             => 'Um página com o nome $1 já existe.
Deseja substituí-la pela sua colecção?',
	'coll-yes'                        => 'Sim',
	'coll-no'                         => 'Não',
	'coll-load_overwrite_text'        => 'Já tem algumas páginas na sua colecção.
Pretende reescrever a sua colecção, adicionar o novo conteúdo or cancelar?',
	'coll-overwrite'                  => 'Reescrever',
	'coll-append'                     => 'Adicionar',
	'coll-cancel'                     => 'Cancelar',
	'coll-limit_exceeded_title'       => 'Colecção Demasiado Grande',
	'coll-limit_exceeded_text'        => 'A usa coleccção de página é demasiado grande.
Não poderão ser adicionadas mais páginas.',
	'coll-generating_pdf_title'       => 'A criar PDF',
	'coll-generating_pdf_text'        => "'''Por favor, aguarde enquanto o ficheiro PDF está a ser gerado.'''

Progresso: %(progress)d%%.

Esta página deverá refrescar automaticamente repetidamente dentro de alguns segundos.
Se isto não acontecer, por favor, carregue no botão de refrescar do seu \"browser\".",
	'coll-pdf_finished_text'          => 'O ficheiro PDF foi gerado.
[http://URL Clique aqui] para fazer o download.',
	'coll-pdf_not_satisfied'          => 'Não está satisfeito com o resultado do PDF? Veja [[{{MediaWiki:Coll-helppage}}|a página de ajuda sobre colecções]] para formas de melhorá-lo.',
	'coll-notfound_title'             => 'Colecção Não Encontrada',
	'coll-notfound_text'              => 'Não foi possível encontrar a página da colecção.',
	'coll-return_to_collection'       => '<p>Regressar a <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'As seguintes páginas não puderam ser renderizadas e foram removidas do ficheiro PDF: %(articles)s',
	'coll-pdf_error_text'             => 'Ocorreu um erro ao gerar o ficheiro PDF.',
	'coll-book_title'                 => 'Encomendar Livro Impresso',
	'coll-book_text'                  => 'Você pode encomendar um livro impresso contendo a sua colecção de páginas visitando um dos seguintes parceiros de impressão a pedido:',
	'coll-order_from_pp'              => 'Encomendar o livro de $1',
	'coll-about_pp'                   => 'Sobre $1',
);

/** Russian (Русский)
 * @author .:Ajvol:.
 * @author Ahonc
 * @author Siebrand
 */
$messages['ru'] = array(
	'coll-desc'                       => '[[Special:Collection|Собирает коллекции страниц]], создаёт PDF',
	'coll-collection'                 => 'Коллекция',
	'coll-collections'                => 'Коллекции',
	'coll-portlet_title'              => 'Моя коллекция',
	'coll-add_page'                   => 'Добавить страницу',
	'coll-remove_page'                => 'Удалить страницу',
	'coll-add_category'               => 'Добавить категорию',
	'coll-load_collection'            => 'Загрузить коллекцию',
	'coll-show_collection'            => 'Показать коллекцию',
	'coll-help_collections'           => 'Справка по коллекциям',
	'coll-empty'                      => 'пустая',
	'coll-page'                       => 'страница',
	'coll-pages'                      => 'страницы',
	'coll-download_as_pdf'            => 'Скачать как PDF',
	'coll-noscript_text'              => '<noscript><h1>Требуется JavaScript!</h1>
<strong>Ваш браузер не поддерживает JavaScript или данная поддержка была отключена.
Эта страница не будет работать правильно, если JavaScript не включен.</strong></noscript>',
	'coll-intro_text'                 => 'Вы можете объединить страницы в коллекцию, создать и скачать PDF-файл с набором страниц, или сохранить коллекцию страниц для последующей работы или обмена.

Подробности можно найти на [[{{MediaWiki:Coll-helppage}}|справочной странице о коллекциях]].',
	'coll-helppage'                   => 'Справка:Коллекции',
	'coll-pdftoobigcat'               => 'Категория содержит более чем %PARAM% страниц, только первые %PARAM% страниц могут быть включены в вашу коллекцию.
Вы хотите добавить их?',
	'coll-my_collection'              => 'Моя коллекция',
	'coll-download_title'             => 'Скачать коллекцию как PDF',
	'coll-download_text'              => 'Нажмите кнопку, чтобы скачать автоматически созданный PDF-файл с вашей коллекций страниц.',
	'coll-download_pdf'               => 'Скачать PDF',
	'coll-remove'                     => 'Удалить',
	'coll-move_to_top'                => 'Передвинуть наверх',
	'coll-move_up'                    => 'Передвинуть выше',
	'coll-move_down'                  => 'Передвинуть ниже',
	'coll-move_to_bottom'             => 'Передвинуть вниз',
	'coll-title'                      => 'Название:',
	'coll-subtitle'                   => 'Подзаголовок:',
	'coll-contents'                   => 'Содержание',
	'coll-create_chapter'             => 'Создать новую главу',
	'coll-sort_alphabetically'        => 'Упорядочивать страницы по алфавиту',
	'coll-clear_collection'           => 'Очистить коллекцию',
	'coll-clear_confirm'              => 'Вы действительно хотите очистить свою коллекцию?',
	'coll-rename'                     => 'Переименовать',
	'coll-new_chapter'                => 'Введите имя для новой главы',
	'coll-rename_chapter'             => 'Введите новое имя главы',
	'coll-no_such_category'           => 'Нет такой категории',
	'coll-mwpdf_error_title'          => 'Невозможно создать PDF',
	'coll-mwpdf_error_msg'            => 'Во время создания PDF произошла ошибка.',
	'coll-mwzip_error_title'          => 'Невозможно создать коллекцию страниц',
	'coll-mwzip_error_msg'            => 'Во время создания коллекции страниц произошла ошибка.',
	'coll-notitle_title'              => 'Заголовок страницы не может быть определён.',
	'coll-post_failed_title'          => 'POST-запрос не выполнен',
	'coll-post_failed_msg'            => 'POST-запрос не выполнен.',
	'coll-enter_title'                => 'Введите название коллекции:',
	'coll-error_reponse'              => 'Ошибка ответа сервера',
	'coll-empty_collection'           => 'Пустая коллекция',
	'coll-revision'                   => 'Версия: %PARAM%',
	'coll-save_collection_title'      => 'Сохранить коллекцию',
	'coll-save_collection_text'       => 'Чтобы сохранить коллекцию для дальнейшего использования, выберите тип коллекции и введите имя страницы:',
	'coll-login_to_save'              => 'Чтобы сохранить коллекцию для дальнейшего использования, пожалуйста, <a href="$1">представьтесь системе или создайте учётную запись</a>.',
	'coll-personal_collection_label'  => 'Личная коллекция:',
	'coll-community_collection_label' => 'Коллекция сообщества:',
	'coll-save_collection'            => 'Сохранить коллекцию',
	'coll-overwrite_title'            => 'Страница существует. Перезаписать?',
	'coll-overwrite_text'             => 'Страница с именем $1 уже существует.
Вы хотите чтобы она была заменена вашей коллекцией?',
	'coll-yes'                        => 'Да',
	'coll-no'                         => 'Нет',
	'coll-load_overwrite_text'        => 'У вас уже есть несколько страниц в коллекции.
Вы хотите перезаписать вашу текущею коллекцию, добавить новый материал или отменить действие?',
	'coll-overwrite'                  => 'Перезаписать',
	'coll-append'                     => 'Добавить',
	'coll-cancel'                     => 'Отменить',
	'coll-limit_exceeded_title'       => 'Коллекция слишком большая',
	'coll-limit_exceeded_text'        => 'Ваша коллекция слишком большая.
В неё нельзя больше добавлять страницы.',
	'coll-generating_pdf_title'       => 'Создание PDF',
	'coll-generating_pdf_text'        => "'''Пожалуйста, дождитесь создания PDF-файл.'''
Эта страница должна автоматически обновляться каждые несколько секунд, если этого не происходит, пожалуйста, нажмите кнопку обновления в вашем браузере.",
	'coll-pdf_finished_text'          => 'PDF-файл был создан.
[http://URL Нажмите здесь], чтобы скачать его на свой компьютер.',
	'coll-notfound_title'             => 'Коллекция не найдена',
	'coll-notfound_text'              => 'Невозможно найти страницу коллекции.',
	'coll-return_to_collection'       => '<p>Назад к <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Следующие страницы не могут быть обработаны и были удалены из PDF-файла: %(статей)',
	'coll-book_title'                 => 'Заказать печатную книгу',
	'coll-book_text'                  => 'Вы можете заказать печатную книгу, содержащую вашу коллекцию страниц, воспользовавшись одним из следующих предложений печати по запросу:',
	'coll-order_from_pp'              => 'Заказ книги в $1',
	'coll-about_pp'                   => 'О $1',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Siebrand
 */
$messages['sk'] = array(
	'coll-desc'                       => 'Vytváranie [[Special:Collection|kolekcie stránok]], tvorba PDF',
	'coll-collection'                 => 'Kolekcia',
	'coll-collections'                => 'Kolekcie',
	'coll-portlet_title'              => 'Moja kolekcia',
	'coll-add_page'                   => 'Pridať stránku',
	'coll-remove_page'                => 'Odstrániť stránku',
	'coll-add_category'               => 'Pridať kategóriu',
	'coll-load_collection'            => 'Načítať kolekciu',
	'coll-show_collection'            => 'Zobraziť kolekciu',
	'coll-help_collections'           => 'Pomocník ku kolekciám',
	'coll-empty'                      => 'prázdna',
	'coll-page'                       => 'stránka',
	'coll-pages'                      => 'stránky',
	'coll-download_as_pdf'            => 'Stiahnuť ako PDF',
	'coll-noscript_text'              => '<noscript><h1>Vyžaduje sa JavaScript!</h1>
<strong>Váš prehliadač nepodporuje JavaScript alebo máte JavaScript vypnutý.
Táto stránka nebude správne fungovať ak nezapnete JavaScript.</strong></noscript>',
	'coll-intro_text'                 => 'Môžete vytvárať kolekcie stránok, vytvárať a stiahnuť PDF súbor z kolekcie stránok a ukladať kolekcie stránok pre neskoršie využitie alebo ich zdieľať.

Pozri ďalšie informácue na [[{{MediaWiki:Coll-helppage}}|stránke pomocníka o kolekciách]].',
	'coll-helppage'                   => 'Pomoc:Kolekcie',
	'coll-pdftoobigcat'               => 'Kategória obsahuje viac ako %PARAM% stránok. Do kolekcie je možné pridať iba prvých %PARAM% stránok. Chcete ich pridať?',
	'coll-my_collection'              => 'Moja kolekcia',
	'coll-download_title'             => 'Stiahnuť kolekciu ako PDF',
	'coll-download_text'              => 'Stiahnuť automaticky vytvorený PDF súbor vašej kolekcie stránok. Kliknite na tlačidlo.',
	'coll-download_pdf'               => 'Stiahnuť PDF',
	'coll-remove'                     => 'Odstrániť',
	'coll-move_to_top'                => 'Presunúť na vrch',
	'coll-move_up'                    => 'Presunúť vyššie',
	'coll-move_down'                  => 'Presunúť nižšie',
	'coll-move_to_bottom'             => 'Presunúť na spodok',
	'coll-title'                      => 'Názov:',
	'coll-subtitle'                   => 'Podnázov:',
	'coll-contents'                   => 'Obsah',
	'coll-create_chapter'             => 'Vytvoriť novú kapitolu',
	'coll-sort_alphabetically'        => 'Zoradiť stránky abecedne',
	'coll-clear_collection'           => 'Vyčistiť kolekciu',
	'coll-clear_confirm'              => 'Naozaj chcete vyčistiť svoju kolekciu?',
	'coll-rename'                     => 'Premenovať',
	'coll-new_chapter'                => 'Zadajte názov novej kapitoly',
	'coll-rename_chapter'             => 'Zadajte nový názov kapitoly',
	'coll-no_such_category'           => 'Taká kategória neexistuje',
	'coll-mwpdf_error_title'          => 'Nebolo možné vytvoriť PDF',
	'coll-mwpdf_error_msg'            => 'Počas tvorby PDF sa vyskytla chyba.',
	'coll-mwzip_error_title'          => 'Nebolo možné vytvoriť kolekciu stránok',
	'coll-mwzip_error_msg'            => 'Počas tvorby kolekcie stránok sa vyskytla chyba.',
	'coll-notitle_title'              => 'Názov stránky nebolo možné určiť.',
	'coll-post_failed_title'          => 'Chyba požiadavky POST',
	'coll-post_failed_msg'            => 'Chyba požiadavky POST.',
	'coll-enter_title'                => 'Zadajte názov kolekcie:',
	'coll-error_reponse'              => 'Chybná odpoveď servera',
	'coll-empty_collection'           => 'Prázdna kolekcia',
	'coll-revision'                   => 'Revízia: %PARAM%',
	'coll-save_collection_title'      => 'Uložiť kolekciu',
	'coll-save_collection_text'       => 'Túto kolekciu môžete uložiť pre neskoršie použitie po zadaní typu kolekcie a názvu stránky:',
	'coll-login_to_save'              => 'Ak chcete ukladať kolekcie pre neskoršie použitie, prosím, <a href="$1">prihláste sa alebo si vytvorte účet</a>.',
	'coll-personal_collection_label'  => 'Osobné kolekcie:',
	'coll-community_collection_label' => 'Komunitné kolekcie:',
	'coll-save_collection'            => 'Uložiť kolekciu',
	'coll-overwrite_title'            => 'Stránka existuje. Prepísať?',
	'coll-overwrite_text'             => 'Stránka s názvom $1 už existuje.
Chcete ju nahradiť svojou kolekciou?',
	'coll-yes'                        => 'Áno',
	'coll-no'                         => 'Nie',
	'coll-load_overwrite_text'        => 'Vo vašej kolekcii sa už nachádzajú stránky.
Chcete prepísať svoju existujúcu kolekciu, pridať do nej obsah alebo zrušiť túto operáciu?',
	'coll-overwrite'                  => 'Prepísať',
	'coll-append'                     => 'Pridať',
	'coll-cancel'                     => 'Zrušiť',
	'coll-limit_exceeded_title'       => 'Kolekcia je príliš veľká',
	'coll-limit_exceeded_text'        => 'Vaša kolekcia stránok je príliš veľká.
Nie je možné pridať ďalšie stránky.',
	'coll-generating_pdf_title'       => 'Vytvára sa PDF',
	'coll-generating_pdf_text'        => "'''Prosím čakajte, kým sa vytvára PDF súbor.'''

Priebeh: %(progress)d%%.

Táto stránka by sa mala každých niekoľko sekúnd automaticky obnoviť. Ak to nefunguje, stlačte prosím tlačidlo Obnoviť vo vašom prehliadači.",
	'coll-pdf_finished_text'          => 'PDF súbor bol vytvorený.
Teraz ho môžete [http://URL stiahnuť].',
	'coll-pdf_not_satisfied'          => 'Nie ste spokojný s PDF výstupom?
Pozri možnosti jeho vylepšenia na [[{{MediaWiki:Coll-helppage}}|stránke Pomocníka o kolekciách]].',
	'coll-notfound_title'             => 'Kolekcia nenájdená',
	'coll-notfound_text'              => 'Nebolo možné nájsť stránku kolekcie',
	'coll-return_to_collection'       => '<p>Vrátiť sa na <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Nasledovné stránky nebolo možné vykresliť a boli z PDF súboru odstránené: %(articles)s',
	'coll-pdf_error_text'             => 'Pri tvorbe PDF súboru sa vyskytla chyba.',
	'coll-book_title'                 => 'Objednať tlačenú knihu',
	'coll-book_text'                  => 'Môžete si objednať tlačenú knihu obsahujúcu vašu zbierku článkov. Navštívte jedného z nasledovných partnerov, ktorí tobia tlač na vyžiadanie:',
	'coll-order_from_pp'              => 'Objednať knihu od $1',
	'coll-about_pp'                   => 'O $1',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Sasa Stefanovic
 */
$messages['sr-ec'] = array(
	'coll-page'   => 'страна',
	'coll-remove' => 'Уклони',
	'coll-title'  => 'Наслов:',
	'coll-yes'    => 'Да',
	'coll-no'     => 'Не',
);

/** Swedish (Svenska)
 * @author M.M.S.
 * @author Sannab
 * @author H92
 * @author Siebrand
 */
$messages['sv'] = array(
	'coll-desc'                       => '[[Special:Collection|Samla sidor]], generera PDF filer',
	'coll-collection'                 => 'Samling',
	'coll-collections'                => 'Samlingar',
	'coll-portlet_title'              => 'Min samling',
	'coll-add_page'                   => 'Lägg till sida',
	'coll-remove_page'                => 'Ta bort sida',
	'coll-add_category'               => 'Lägg till kategori',
	'coll-load_collection'            => 'Ladda samling',
	'coll-show_collection'            => 'Visa samling',
	'coll-help_collections'           => 'Hjälp för samlingar',
	'coll-empty'                      => 'tom',
	'coll-page'                       => 'sida',
	'coll-pages'                      => 'sidor',
	'coll-download_as_pdf'            => 'Ladda ner som PDF',
	'coll-noscript_text'              => '<noscript><h1>JavaScript är nödvändigt!</h1>
<strong>Din webbläsare stödjer inte JavaScript eller har JavaScript blivigt avslagen.
Denna sida kommer inte att fungera korrekt, tills JavaScript är tillgängligt.</strong></noscript>',
	'coll-intro_text'                 => 'Du kan samla sidor, generera och ladda ner en PDF fil från sid samlingar och spara sid samlingar för senare bruk eller för delning.

Se [[{{MediaWiki:Coll-helppage}}|hjälp sidan om samlingar]] för mer information.',
	'coll-helppage'                   => 'Help:Samlingar',
	'coll-pdftoobigcat'               => 'Kategorin innehåller mer än %PARAM" sidor, endast de första %PARAM% sidorna kan läggas till till din samling. Vill du lägga till dem?',
	'coll-my_collection'              => 'Min samling',
	'coll-download_title'             => 'Ladda ner samling som PDF',
	'coll-download_text'              => 'För att ladda ner en automatisk genererad PDF-fil av din sidsamling, klicka på knappen.',
	'coll-download_pdf'               => 'Ladda ner PDF',
	'coll-remove'                     => 'Ta bort',
	'coll-move_to_top'                => 'Flytta till toppen',
	'coll-move_up'                    => 'Flytta upp',
	'coll-move_down'                  => 'Flytta ner',
	'coll-move_to_bottom'             => 'Flytta till botten',
	'coll-title'                      => 'Titel:',
	'coll-subtitle'                   => 'Undertitel:',
	'coll-contents'                   => 'Innehåll',
	'coll-create_chapter'             => 'Skapa nytt kapitel',
	'coll-sort_alphabetically'        => 'Sortera sidor alfabetiskt',
	'coll-clear_collection'           => 'Töm samling',
	'coll-clear_confirm'              => 'Vill du verkligen tömma din samling?',
	'coll-rename'                     => 'Byt name',
	'coll-new_chapter'                => 'Välj ett namn för det nya kapitlet',
	'coll-rename_chapter'             => 'Välj ett nytt namn för kapitlet',
	'coll-no_such_category'           => 'Ingen sådan kategori',
	'coll-mwpdf_error_title'          => 'Kan inte generera PDF',
	'coll-mwpdf_error_msg'            => 'Ett frl uppstod under PDF-generering.',
	'coll-mwzip_error_title'          => 'Kunde inte generera sidsamling',
	'coll-mwzip_error_msg'            => 'Ett fel uppstod under generering av sidsamling.',
	'coll-notitle_title'              => 'Titeln av sidan kunde inte fastställas.',
	'coll-post_failed_title'          => 'POST-begäring avslagen',
	'coll-post_failed_msg'            => 'POST-begäringen avslagen.',
	'coll-enter_title'                => 'Skriv in samlingens namn:',
	'coll-error_reponse'              => 'Felrespons från servern',
	'coll-empty_collection'           => 'Tom samling',
	'coll-revision'                   => 'Revision: %PARAM%',
	'coll-save_collection_title'      => 'Spara samling',
	'coll-save_collection_text'       => 'För att spara denna samling för senare bruk, välj en samlingstyp och skriv in en sidtitel:',
	'coll-login_to_save'              => 'Om du vill spara samlingar för senare bruk, var god <a href="$1">logga in eller skapa ett konto</a>.',
	'coll-personal_collection_label'  => 'Personlig samling:',
	'coll-community_collection_label' => 'Deltagarsamling:',
	'coll-save_collection'            => 'Spara samling',
	'coll-overwrite_title'            => 'Sidan existerar. Vill du skriva över den?',
	'coll-overwrite_text'             => 'En sida med namnet $1 finns redan.
Vill du ersätta den med din samling?',
	'coll-yes'                        => 'Ja',
	'coll-no'                         => 'Nej',
	'coll-load_overwrite_text'        => 'Du har redan några sidor i din samling.
Vill du ersätta din nuvarande samling, lägga till det nya innehållet eller avbryta?',
	'coll-overwrite'                  => 'Skriv över',
	'coll-append'                     => 'Lägga till',
	'coll-cancel'                     => 'Avbryt',
	'coll-limit_exceeded_title'       => 'Samlingen är för stor',
	'coll-limit_exceeded_text'        => 'Din sid samling är för stor.
Inga mer sidor kan läggas till.',
	'coll-generating_pdf_title'       => 'Genererar PDF',
	'coll-generating_pdf_text'        => "'''Var god vänta medan PDF-filen genereras.'''

Fortgång: %(progress)d%%.

Denna sida borde automatiskt med några sekunders mellanrum, om detta inte funkar, var god tryck på uppdateringsknappen i din webbläsare.",
	'coll-pdf_finished_text'          => 'PDF-filen har genererats.
[http://URL Klicka här] för att ladda ner den till din dator.
Inte tillfredsställd med PDF produktionen?
Se [[{{MediaWiki:Coll-helppage}}|hjälpsidan om samlingar]] för möjligheter att förbättra den.',
	'coll-pdf_not_satisfied'          => 'Inte nöjd med PDF-resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjälpsidan om samlingar]] för hur du kan förbättra det.',
	'coll-notfound_title'             => 'Samling inte funnen',
	'coll-notfound_text'              => 'Kan inte hitta samlings sida',
	'coll-return_to_collection'       => '<p>Tillbaka till <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Följande sidor kunde inte framställas och blev borttagna från PDF-filen: %(articles)s',
	'coll-pdf_error_text'             => 'Det uppstod ett fel med generering av PDF-filen.',
	'coll-book_title'                 => 'Beställ utskriven bok',
	'coll-book_text'                  => 'Du kan beställa en tryckt bok som rymmer din artikelsamling genom att besöka en av de samarbetspartners som utför behovstryckning:',
	'coll-order_from_pp'              => 'Beställ bok från $1',
	'coll-about_pp'                   => 'Om $1',
);

/** Silesian (ślůnski)
 * @author Herr Kriss
 */
$messages['szl'] = array(
	'coll-page' => 'zajta',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author Siebrand
 */
$messages['te'] = array(
	'coll-desc'                       => '[[Special:Collection|పేజీలను సేకరించండి]], PDFలను తయారుచేసుకోండి',
	'coll-collection'                 => 'సేరకణ',
	'coll-collections'                => 'సేరకణలు',
	'coll-portlet_title'              => 'నా సేకరణ',
	'coll-add_page'                   => 'పేజీని చేర్చు',
	'coll-remove_page'                => 'పేజీని తొలగించు',
	'coll-add_category'               => 'వర్గాన్ని చేర్చు',
	'coll-show_collection'            => 'సేకరణని చూపించు',
	'coll-help_collections'           => 'సేకరణల సహాయం',
	'coll-empty'                      => 'ఖాళీ',
	'coll-page'                       => 'పేజీ',
	'coll-pages'                      => 'పేజీలు',
	'coll-download_as_pdf'            => 'PDFగా దిగుమతి చేసుకోండి',
	'coll-helppage'                   => 'Help:సేకరణలు',
	'coll-pdftoobigcat'               => 'ఆ వర్గంలో %PARAM% కంటే ఎక్కువ పేజీలున్నాయి, అందులో మొదటి %PARAM% పేజీలును మాత్రమే మీ సేకరణకి చేర్చగలం.
వాటిని చేర్చమంటారా?',
	'coll-my_collection'              => 'నా సేకరణ',
	'coll-download_title'             => 'సేకరణని PDFగా దిగుమతి చేసుకోండి',
	'coll-download_text'              => 'మీ పేజీ సేకరణ నుండి ఆటోమెటిగ్గా తయారయిన PDF ఫైలుని దిగుమతిచేసుకోడానికి, ఈ బొత్తాన్ని నొక్కండి.',
	'coll-download_pdf'               => 'PDFని దిగుమతి చేసుకోండి',
	'coll-remove'                     => 'తొలగించు',
	'coll-move_up'                    => 'పైకి కదుపు',
	'coll-move_down'                  => 'క్రిందికి కదుపు',
	'coll-move_to_bottom'             => 'అడుగునకు కదుపు',
	'coll-title'                      => 'శీర్షిక:',
	'coll-subtitle'                   => 'ఉపశీర్షిక:',
	'coll-contents'                   => 'విషయాలు',
	'coll-sort_alphabetically'        => 'పేజీలను అక్షరక్రమంలో అమర్చు',
	'coll-clear_collection'           => 'సేకరణని తుడిచివేయి',
	'coll-clear_confirm'              => 'మీరు నిజంగానే మీ సేకరణని తుడిచివేయాలనుకుంటున్నారా?',
	'coll-rename'                     => 'పేరుమార్చు',
	'coll-no_such_category'           => 'అటువంటి వర్గం లేదు',
	'coll-mwpdf_error_title'          => 'PDFని తయారుచేయలేకపోయాం',
	'coll-mwpdf_error_msg'            => 'PDF తయారీలో ఏదో పొరపాటు జరిగింది.',
	'coll-mwzip_error_title'          => 'పేజీ సేకరణని తయారుచేయలేకున్నాం',
	'coll-mwzip_error_msg'            => 'పేజీల సేకరణ తయారీలో పొరపాటు జరిగింది.',
	'coll-notitle_title'              => 'ఆ పేజీ యొక్క శీర్షికని నిర్ణయించలేకున్నాం.',
	'coll-post_failed_title'          => 'POST అభ్యర్థన విఫలమైంది',
	'coll-enter_title'                => 'సేకరణకి శీర్షిక ఇవ్వండి:',
	'coll-error_reponse'              => 'సర్వరునుండి పొరపాటు అని స్పందన వచ్చింది',
	'coll-empty_collection'           => 'ఖాళీ సేకరణ',
	'coll-revision'                   => 'కూర్పు: %PARAM%',
	'coll-save_collection_title'      => 'సేకరణని భద్రపరచండి',
	'coll-save_collection_text'       => 'ఈ సేకరణని తర్వాత వాడుకోడానికి భద్రపరచుకోవాలంటే, ఓ సేకరణ రకాన్ని ఎంచుకోండి మరియు పేజీ శీర్షిక ఇవ్వండి:',
	'coll-login_to_save'              => 'సేకరణలని మీరు తర్వాత వాడుకోవడానికి భద్రపరచుకోవాలనుకుంటే, <a href="$1">లోనికి ప్రవేశించండి లేదా ఖాతా సృష్టించుకోండి</a>.',
	'coll-personal_collection_label'  => 'వ్యక్తిగత సేరకణ:',
	'coll-community_collection_label' => 'సామూహిక సేకరణ:',
	'coll-save_collection'            => 'సేకరణని భద్రపరచు',
	'coll-overwrite_title'            => 'పేజీ ఉంది. దానిపైనే రాసేయాలా?',
	'coll-overwrite_text'             => '$1 అనే పేరుతో ఓ పేజీ ఇప్పటికే ఉంది.
దాని స్ధానంలో మీ సేకరణని ఉంచాలా?',
	'coll-yes'                        => 'అవును',
	'coll-no'                         => 'కాదు',
	'coll-cancel'                     => 'రద్దు',
	'coll-limit_exceeded_title'       => 'సేకరణ మరీ పెద్దగా ఉంది',
	'coll-limit_exceeded_text'        => 'మీ పేజీ సేకరణ చాలా పెద్దగా ఉంది.
మరిన్ని పేజీలు చేర్చలేము.',
	'coll-generating_pdf_title'       => 'PDFని తయారుచేస్తున్నాం',
	'coll-generating_pdf_text'        => "'''PDF ఫైలు తయారయ్యేంత వరకు వేచివుండండి.'''
ఈ పేజీని ప్రతీ కొన్ని క్షణాలకు ఆటోమెటిగ్గా తాజాకరిస్తాం, అది పనిచేయకపోతే, మీ విహారిణిలోని తాజాకరించు బొత్తాన్ని నొక్కండి.",
	'coll-pdf_finished_text'          => 'PDF ఫైలు తయారయ్యింది.
దాన్ని మీ కంప్యూటర్లోనికి దిగుమతి చేసుకోడానికి క్రిందనిచ్చిన లింకుపై నొక్కండి.',
	'coll-notfound_title'             => 'సేకరణ కనబడలేదు',
	'coll-notfound_text'              => 'సేకరణ పేజీ కనబడలేదు.',
	'coll-return_to_collection'       => '<p>తిరిగి <a href="$1">$2</a>కి</p>',
	'coll-order_from_pp'              => '$1 నుండి పుస్తకాన్ని ఆర్డర్ చెయ్యండి',
	'coll-about_pp'                   => '$1 గురించి',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'coll-empty'    => 'mamuk',
	'coll-page'     => 'pájina',
	'coll-yes'      => 'Sin',
	'coll-no'       => 'Lae',
	'coll-about_pp' => 'Kona-ba $1',
);

/** Tajik (Cyrillic) (Тоҷикӣ/tojikī (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'coll-desc'                       => '[[Special:Collection|Гирдоварии саҳифаҳо]], тавлиди PDFҳо',
	'coll-collection'                 => 'Гирдоварӣ',
	'coll-collections'                => 'Гирдовариҳо',
	'coll-portlet_title'              => 'Гирдоварии Ман',
	'coll-add_page'                   => 'Илова кардани саҳифа',
	'coll-remove_page'                => 'Пок кардани саҳифа',
	'coll-add_category'               => 'Илова кардани гурӯҳ',
	'coll-load_collection'            => 'Бор кардани гирдоварӣ',
	'coll-show_collection'            => 'Намоиши гирдоварӣ',
	'coll-help_collections'           => 'Роҳнамои гирдовариҳо',
	'coll-empty'                      => 'холӣ',
	'coll-page'                       => 'саҳифа',
	'coll-pages'                      => 'саҳифаҳо',
	'coll-download_as_pdf'            => 'Боргузорӣ ҳамчун PDF',
	'coll-noscript_text'              => '<noscript><h1>ҶаваСкрипт Лозим аст!</h1>
<strong>Мурургари шумо ҶаваСкриптро дастгирӣ намекунад ё ҶаваСкрипт хомӯш карда шудааст.
Ин саҳифа дуруст кор хоҳад карда, дар ҳолате, ки ҶаваСкрипт фаъол карда шуда бошад.</strong></noscript>',
	'coll-intro_text'                 => 'Шумо метавонед саҳифаҳоро гирдовари кунед, тавлид ва бор кардани парвандаҳои PDF аз саҳифаҳои гирдовариҳо ва захир кардани гирдовариҳо барои истифодаи баъдӣ ё бо ҳам дидани онҳо бо дигарон.

Барои иттилооти бештар нигаред ба [[{{MediaWiki:Coll-helppage}}|саҳифаи роҳнамо оиди гирдовариҳо]].',
	'coll-helppage'                   => 'Роҳнамо:Гирдовариҳо',
	'coll-pdftoobigcat'               => 'Гурӯҳ беш аз %PARAM% саҳифаҳо аст, танҳо аввалин %PARAM% саҳифаҳо метавонанд ба гирдоварии шумо илова шаванд.
Оё шумо мехоҳед онҳоро илова кунед?',
	'coll-my_collection'              => 'Гирдоварии Ман',
	'coll-download_title'             => 'Бор кардани гирдовари ҳамчун PDF',
	'coll-download_text'              => 'Барои бор кардани парвандаи PDF саҳифаи гирдоварии худ, ки ба таври худкор ҳосил шудааст, тугмаро пахш кунед.',
	'coll-download_pdf'               => 'Боргузории PDF',
	'coll-remove'                     => 'Ҳазф',
	'coll-move_to_top'                => 'Ҳаракат бо боло',
	'coll-move_up'                    => 'Ба боло',
	'coll-move_down'                  => 'Ба поён',
	'coll-move_to_bottom'             => 'Ҳаракат ба поён',
	'coll-title'                      => 'Унвон:',
	'coll-subtitle'                   => 'Зерунвон:',
	'coll-contents'                   => 'Мундариҷа',
	'coll-create_chapter'             => 'Эҷоди фасли ҷадид',
	'coll-sort_alphabetically'        => 'Аз рӯи алифбо ба тартиб даровардани саҳифаҳо',
	'coll-clear_collection'           => 'Тоза кардани гирдовари',
	'coll-clear_confirm'              => 'Оё шумо дар ҳақиқат мехоҳед гирдоварии худро пок кунед?',
	'coll-rename'                     => 'Тағйири ном',
	'coll-new_chapter'                => 'Барои фасли ҷадид номеро ворид кунед',
	'coll-rename_chapter'             => 'Барои фасл номи ҷадидеро ворид кунед',
	'coll-no_such_category'           => 'Чунин гурӯҳ вуҷуд надорад',
	'coll-mwpdf_error_title'          => 'PDF ҳосил шуда натавонист',
	'coll-mwpdf_error_msg'            => 'Дар ҳоли ҳосили PDF хатое рух дод.',
	'coll-mwzip_error_title'          => 'Гирдоварии саҳифа ҳосил шуда натавонист',
	'coll-mwzip_error_msg'            => 'Дар ҳоли ҳосил кардани саҳифаи гирдоварӣ хатое рух дод.',
	'coll-notitle_title'              => 'Унвони саҳифа мушаххас шуда наметавонад.',
	'coll-enter_title'                => 'Барои гирдовари унвонеро ворид кунед:',
	'coll-error_reponse'              => 'Посухи хатое аз хидматгузор',
	'coll-empty_collection'           => 'Холӣ кардани гирдовари',
	'coll-revision'                   => 'Нусха: %PARAM%',
	'coll-save_collection_title'      => 'Захира кардани гирдовари',
	'coll-save_collection_text'       => 'Барои захираи ин гирдовари барои истифодаи баъдӣ, навъи гирдовариро интихоб кунед ва унвони саҳифаро ворид кунед:',
	'coll-login_to_save'              => 'Агар майли захира кардани гирдовариҳоро барои истифодаи баъдӣ дошта бошед, лутфан <a href="$1">ба систем ворид шавед ё ҳисоби ҷадидиро эчод кунед</a>.',
	'coll-personal_collection_label'  => 'Гирдоварии шахсӣ:',
	'coll-community_collection_label' => 'Гирдоварии умум:',
	'coll-save_collection'            => 'Захираи Гирдовари',
	'coll-overwrite_title'            => 'Саҳифа вуҷуд дорад. Ба рӯи он аз навишта шавад?',
	'coll-overwrite_text'             => 'Саҳифае бо номи $1 аллакай вуҷуд дорад.
Оё шумо мехоҳед онро бо гирдоварии худ иваз кунед?',
	'coll-yes'                        => 'Бале',
	'coll-no'                         => 'Не',
	'coll-load_overwrite_text'        => 'Шумо аллакай якчанд саҳифаҳоеро дар гирдоварии худ доред.
Оё шумо мехоҳед рӯи гирдоварии кунуниатон нависед, мӯҳтавои ҷадидро пайваст ё лағв кунед?',
	'coll-overwrite'                  => 'Ба рӯй навиштан',
	'coll-append'                     => 'Афзудан',
	'coll-cancel'                     => 'Лағв',
	'coll-limit_exceeded_title'       => 'Гирдовари Хеле Бузург',
	'coll-limit_exceeded_text'        => 'Саҳифаи гирдоварии шумо хеле бузург аст.
Аз ин зиёд саҳифаҳо наметавонанд илова шаванд.',
	'coll-generating_pdf_title'       => 'Дар ҳоли ҳосили PDF',
	'coll-notfound_title'             => 'Гирдовари Ёфт Нашуд',
	'coll-notfound_text'              => 'Саҳифаи гирдоварӣ ёфт нашуд.',
	'coll-return_to_collection'       => '<p>Бозгашт ба <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Саҳифаҳои зер наметавонанд ироаъ шаванд ва аз парвандаи PDF пок шуданд:',
	'coll-book_title'                 => 'Фармудани Китоби Чопӣ',
	'coll-book_text'                  => 'Шумо метавонед китоби ба табъ расидаро, ки саҳифаи гирдовариҳои шуморо дорост бо ташриф овардан ба яке аз ҳамкорони чоп-дархост фармоед:',
	'coll-order_from_pp'              => 'Фармудани китоб аз $1',
	'coll-about_pp'                   => 'Дар бораи $1',
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'coll-yes' => 'Evet',
	'coll-no'  => 'Hayır',
);

/** Ukrainian (Українська)
 * @author Ahonc
 */
$messages['uk'] = array(
	'coll-desc'                       => '[[Special:Collection|Збирає колекції сторінок]], створює PDF',
	'coll-collection'                 => 'Колекція',
	'coll-collections'                => 'Колекції',
	'coll-portlet_title'              => 'Моя колекція',
	'coll-add_page'                   => 'Додати сторінку',
	'coll-remove_page'                => 'Вилучити сторінку',
	'coll-add_category'               => 'Додати категорію',
	'coll-load_collection'            => 'Завантажити колекцію',
	'coll-show_collection'            => 'Показати колекцію',
	'coll-help_collections'           => 'Довідка про колекції',
	'coll-empty'                      => 'порожня',
	'coll-page'                       => 'сторінка',
	'coll-pages'                      => 'сторінки',
	'coll-download_as_pdf'            => 'Завантажити як PDF',
	'coll-noscript_text'              => '<noscript><h1>Потрібен JavaScript!</h1>
<strong>Ваш браузер не підтримує JavaScript або ця підтримка вимкнена.
Ця сторінка не буде працювати правильно, якщо JavaScript не ввімкнений.</strong></noscript>',
	'coll-intro_text'                 => "Ви можете об'єднати сторінки в колекцію, створити і завантажити PDF-файл з набором сторінок, або зберегти колекцію сторінок для наступної роботи або обміну.

Подробиці можна знайти на [[{{MediaWiki:Coll-helppage}}|довідковій сторінці про колекції]].",
	'coll-helppage'                   => 'Довідка:Колекції',
	'coll-pdftoobigcat'               => 'Категорія містить більше, ніж %PARAM% сторінок, тільки перші %PARAM% сторінок можуть бути включені до вашої колекції.
Ви хочете додати їх?',
	'coll-my_collection'              => 'Моя колекція',
	'coll-download_title'             => 'Завантажити колекцію як PDF',
	'coll-download_text'              => 'Щоб завантажити автоматично створений PDF-файл з вашою колекцією сторінок, натисніть кнопку.',
	'coll-download_pdf'               => 'Завантажити PDF',
	'coll-remove'                     => 'Вилучити',
	'coll-move_to_top'                => 'Перемістити вгору',
	'coll-move_up'                    => 'Перемістити вище',
	'coll-move_down'                  => 'Перемістити нижче',
	'coll-move_to_bottom'             => 'Перемістити донизу',
	'coll-title'                      => 'Назва:',
	'coll-subtitle'                   => 'Підзаголовок:',
	'coll-contents'                   => 'Зміст',
	'coll-create_chapter'             => 'Створити новий розділ',
	'coll-sort_alphabetically'        => 'Сортувати сторінки за алфавітом',
	'coll-clear_collection'           => 'Очистити колекцію',
	'coll-clear_confirm'              => 'Ви дійсно хочете очистити вашу колекцію?',
	'coll-rename'                     => 'Перейменувати',
	'coll-new_chapter'                => 'Уведіть назву нового розділу',
	'coll-rename_chapter'             => 'Уведіть нову назву розділу',
	'coll-no_such_category'           => 'Нема такої категорії',
	'coll-mwpdf_error_title'          => 'Неможливо згенерувати PDF',
	'coll-mwpdf_error_msg'            => 'Під час створення PDF-файлу відбулася помилка.',
	'coll-mwzip_error_title'          => 'Неможливо створити колекцію сторінок',
	'coll-mwzip_error_msg'            => 'Під час створення колекції сторінок відбулася помилка.',
	'coll-notitle_title'              => 'Заголовок сторінки неможливо визначити.',
	'coll-post_failed_title'          => 'POST-запит не виконаний',
	'coll-post_failed_msg'            => 'POST-запит не виконаний.',
	'coll-enter_title'                => 'Уведіть назву колекції:',
	'coll-error_reponse'              => 'Помилка відповіді сервера',
	'coll-empty_collection'           => 'Порожня колекція',
	'coll-revision'                   => 'Версія: %PARAM%',
	'coll-save_collection_title'      => 'Зберегти колекцію',
	'coll-save_collection_text'       => 'Щоб зберегти колекцію для подальшого використання, оберіть тип колекції і введіть назву сторінки:',
	'coll-login_to_save'              => 'Щоб зберегти колекцію для подальшого використання, будь ласка, <a href="$1">ввійдіть до системи або створить обліковий запис</a>.',
	'coll-personal_collection_label'  => 'Особиста колекція:',
	'coll-community_collection_label' => 'Колекція спільноти:',
	'coll-save_collection'            => 'Зберегти колекцію',
	'coll-overwrite_title'            => 'Сторінка існує. Перезаписати?',
	'coll-overwrite_text'             => 'Сторінка з назвою $1 вже існує.
Ви хочете, щоб вона була замінена вашою колекцією?',
	'coll-yes'                        => 'Так',
	'coll-no'                         => 'Ні',
	'coll-load_overwrite_text'        => 'У вас уже є кілька сторінок у колекції.
Ви хочете перезаписати вашу поточну колекцію, додати новий матеріал чи скасувати дію?',
	'coll-overwrite'                  => 'Перезаписати',
	'coll-append'                     => 'Додати',
	'coll-cancel'                     => 'Скасувати',
	'coll-limit_exceeded_title'       => 'Колекція дуже велика',
	'coll-limit_exceeded_text'        => 'Ваша колекція дуже велика.
До неї не можна більше додавати сторінок.',
	'coll-generating_pdf_title'       => 'Створення PDF',
	'coll-generating_pdf_text'        => "'''Будь ласка, зачекайте, поки створиться PDF-файл.'''

Прогрес: %(progress)d%%.

Ця сторінка повинна автоматично оновлюватися кожні декілька секунд.
Якщо цього не відбувається, натисніть кнопку оновлення у вашому браузері.",
	'coll-pdf_finished_text'          => "PDF-файл був створений.
[http://URL Натисніть тут], щоб завантажити його на свій комп'ютер.

Не задоволені створеним файлом?
Зверніть увагу на [[{{MediaWiki:Coll-helppage/uk}}|довідкову інформацію про колекції]], щоб дізнатися про можливості покращення.",
	'coll-notfound_title'             => 'Колекція не знайдена',
	'coll-notfound_text'              => 'Неможливо знайти сторінку колекції.',
	'coll-return_to_collection'       => '<p>Назад до <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Наступні сторінки не можуть бути оброблені і були вилучені з PDF-файлу: %(articles)s',
	'coll-book_title'                 => 'Замовити друковану книгу',
	'coll-book_text'                  => 'Ви можете замовити друковану книгу, що містить вашу колекцію сторінок, скориставшись однією з наступних пропозицій друку за запитом:',
	'coll-order_from_pp'              => 'Замовлення книги в $1',
	'coll-about_pp'                   => 'Про $1',
);

/** Vietnamese (Tiếng Việt)
 * @author Vinhtantran
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'coll-desc'                       => '[[Special:Collection|Tập hợp trang lại]], tạo thành tập tin PDF',
	'coll-collection'                 => 'Tập hợp',
	'coll-collections'                => 'Tập hợp',
	'coll-portlet_title'              => 'Tập hợp của tôi',
	'coll-add_page'                   => 'Thêm trang',
	'coll-remove_page'                => 'Dời trang',
	'coll-add_category'               => 'Thêm thể loại',
	'coll-load_collection'            => 'Mở tập hợp',
	'coll-show_collection'            => 'Xem tập hợp',
	'coll-help_collections'           => 'Trợ giúp tập hợp',
	'coll-empty'                      => 'trống',
	'coll-page'                       => 'trang',
	'coll-pages'                      => 'trang',
	'coll-download_as_pdf'            => 'Tải xuống PDF',
	'coll-noscript_text'              => '<noscript><h1>Yêu cầu phải có JavaScript!</h1>
<strong>Trình duyệt của bạn không hỗ trợ JavaScript hoặc JavaScript đã bị tắt.
Trang này sẽ không hoạt động đúng, trừ khi bạn kích hoạt JavaScript.</strong></noscript>',
	'coll-intro_text'                 => 'Bạn có thể tập hợp các trang, tạo ra và tải về một tập tin PDF từ tập hợp trang đó và lưu tập hợp lại để dùng hoặc chia sẻ chúng về sau.

Mời xem [[{{MediaWiki:Coll-helppage}}|trang trợ giúp về tập hợp]] để biết thêm thông tin.',
	'coll-helppage'                   => 'Trợ giúp:Tập hợp',
	'coll-pdftoobigcat'               => 'Thể loại có hơn %PARAM% trang, chỉ có %PARAM% đầu tiên là thêm được vào tập hợp của bạn.
Bạn có muốn thêm chúng không?',
	'coll-my_collection'              => 'Tập hợp của tôi',
	'coll-download_title'             => 'Tải tập hợp về dưới dạng PDF',
	'coll-download_text'              => 'Để tải về một tập tin PDF được tự động tạo ra từ tập hợp trang của bạn, hãy nhấn nút.',
	'coll-download_pdf'               => 'Tải xuống PDF',
	'coll-remove'                     => 'Dời',
	'coll-move_to_top'                => 'Di chuyển lên đầu',
	'coll-move_up'                    => 'Chuyển lên',
	'coll-move_down'                  => 'Chuyển xuống',
	'coll-move_to_bottom'             => 'Di chuyển xuống dưới',
	'coll-title'                      => 'Tựa đề:',
	'coll-subtitle'                   => 'Phụ đề:',
	'coll-contents'                   => 'Nội dung',
	'coll-create_chapter'             => 'Tạo chương mới',
	'coll-sort_alphabetically'        => 'Sắp xếp trang theo vần',
	'coll-clear_collection'           => 'Xóa tập hợp',
	'coll-clear_confirm'              => 'Bạn có thực sự muốn xóa tập hợp của mình?',
	'coll-rename'                     => 'Đổi tên',
	'coll-new_chapter'                => 'Gõ vào tên chương mới',
	'coll-rename_chapter'             => 'Gõ vào tên chương mới',
	'coll-no_such_category'           => 'Không có thể loại như vậy',
	'coll-mwpdf_error_title'          => 'Không thể tạo ra PDF',
	'coll-mwpdf_error_msg'            => 'Có lỗi xảy ra khi tạo tập tin PDF.',
	'coll-mwzip_error_title'          => 'Không thể tạo ra tập hợp trang',
	'coll-mwzip_error_msg'            => 'Có lỗi xảy ra khi tạo ra tập hợp trang.',
	'coll-notitle_title'              => 'Không xác định được tựa đề của trang.',
	'coll-post_failed_title'          => 'Yêu cầu POST thất bại',
	'coll-post_failed_msg'            => 'Yêu cầu POST thất bại.',
	'coll-enter_title'                => 'Gõ vào tựa đề của tập hợp:',
	'coll-error_reponse'              => 'Máy chủ trả về lỗi',
	'coll-empty_collection'           => 'Tập hợp trống',
	'coll-revision'                   => 'Phiên bản: %PARAM%',
	'coll-save_collection_title'      => 'Lưu tập hợp',
	'coll-save_collection_text'       => 'Để lưu tập hợp này lại sau này dùng, hãy chọn một kiểu tập hợp và gõ vào tựa đề trang:',
	'coll-login_to_save'              => 'Nếu bạn muốn lưu tập hợp để sau này dùng, xin hãy <a href="$1">đăng nhập hoặc mở tài khoản</a>.',
	'coll-personal_collection_label'  => 'Tập hợp cá nhân:',
	'coll-community_collection_label' => 'Tập hợp cộng đồng:',
	'coll-save_collection'            => 'Lưu tập hợp',
	'coll-overwrite_title'            => 'Trang đã tồn tại. Ghi đè?',
	'coll-overwrite_text'             => 'Trang với tên $1 đã tồn tại.
Bạn có muốn thay thế nó bằng tập hợp của bạn?',
	'coll-yes'                        => 'Có',
	'coll-no'                         => 'Không',
	'coll-load_overwrite_text'        => 'Bạn đã có một số trang trong tập hợp của mình.
Bạn có muốn ghi đè tập hợp hiện tại, thêm nội dung mới hay hủy bỏ?',
	'coll-overwrite'                  => 'Ghi đè',
	'coll-append'                     => 'Thêm vào',
	'coll-cancel'                     => 'Bãi bỏ',
	'coll-limit_exceeded_title'       => 'Tập hợp quá lớn',
	'coll-limit_exceeded_text'        => 'Tập hợp các trang của bạn quá lớn.
Không thể thêm trang được nữa.',
	'coll-generating_pdf_title'       => 'Tạo ra PDF',
	'coll-generating_pdf_text'        => "'''Xin hãy chờ trong khi tập tin PDF đang được tạo ra.'''
Trang này sẽ tự động tải lại trong vài giây tới.
Nếu nó không hoạt động, xin hãy nhấn nút Refresh của trình duyệt của bạn.",
	'coll-pdf_finished_text'          => 'Tập tin PDF đã được tạo ra.
[http://URL Nhấn vào đây] để tải nó về máy tính.',
	'coll-pdf_not_satisfied'          => 'Không vừa lòng với ngõ ra PDF? Mời xem [[{{MediaWiki:Coll-helppage}}|trang trợ giúp
về tập hợp]] để có các cách phát triển nó lên.',
	'coll-notfound_title'             => 'Không tìm thấy tập hợp',
	'coll-notfound_text'              => 'Không tìm thấy trang tập hợp.',
	'coll-return_to_collection'       => '<p>Quay trở về <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Các trang sau không thể duyệt được và đã bị loại ra khỏi tập tin PDF: %(bài)',
	'coll-pdf_error_text'             => 'Có lỗi khi tạo ra tập tin PDF.',
	'coll-book_title'                 => 'Đặt sách in',
	'coll-book_text'                  => 'Bạn có thể đặt một cuốn sách in có chứa tập hợp trang của bạn bằng cách ghét thăm mọt trong những bên cộng tác in-theo-yêu-cầu:',
	'coll-order_from_pp'              => 'Đặt sách từ $1',
	'coll-about_pp'                   => 'Giới thiệu $1',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'coll-page'          => 'pad',
	'coll-pages'         => 'pads',
	'coll-helppage'      => 'Yuf:Konlets',
	'coll-my_collection' => 'Konlet Obik',
	'coll-title'         => 'Tiäd:',
	'coll-yes'           => 'Si',
	'coll-no'            => 'Nö',
);

