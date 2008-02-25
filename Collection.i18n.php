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

See the [[{{MediaWiki:Coll-helppage}}|help page about collections]] for more information.",
	'coll-helppage' => 'Help:Collections',
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

/** Afrikaans (Afrikaans)
 * @author SPQRobin
 */
$messages['af'] = array(
	'coll-page'  => 'bladsy',
	'coll-pages' => 'bladsye',
);

/** Arabic (العربية)
 * @author Meno25
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
	'coll-overwrite_text'             => 'صفحة بنفس الاسم $title موجودة بالفعل.
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
	'coll-pdf_finished_title'         => 'توليد PDF اكتمل',
	'coll-pdf_finished_text'          => 'ملف PDF تم توليده.
اضغط على الوصلة بالأسفل لتحميله إلى حاسوبك.',
	'coll-nopdf_error_title'          => 'لا ملف PDF تم العثور عليه',
	'coll-nopdf_error_text'           => 'لم يمكن العثور على ملف PDF. من فضلك أعد توليد ملف PDF.',
	'coll-notfound_title'             => 'المجموعة غير موجودة',
	'coll-notfound_text'              => 'لم يمكن العثور على صفحة المجموعة.',
	'coll-return_to_collection'       => '<p>ارجع إلى <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'الصفحات التالية لم يمكن عرضها وتمت إزالتها من ملف PDF:',
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

/** Czech (Česky)
 * @author Matěj Grabovský
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
	'coll-overwrite_text'             => 'Stránka s názvem $title už existuje.
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
	'coll-pdf_finished_title'         => 'Tvorba PDF dokončena',
	'coll-pdf_finished_text'          => 'PDF soubor byl vytvořen.
Stáhnout ho můžete po kliknutí na následující odkaz:',
	'coll-nopdf_error_title'          => 'PDF soubor nebyl nalezen',
	'coll-nopdf_error_text'           => 'Nebylo možné najít PDF soubor. Prosím, vytvořte PDF soubor znovu.',
	'coll-notfound_title'             => 'Kolekce nenalezena',
	'coll-notfound_text'              => 'Nebylo možné najít stránku kolekce',
	'coll-return_to_collection'       => '<p>Vrátit se na <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Následující stránky nebylo možné vykreslit a byly z PDF souboru odstraněny:',
);

/** Danish (Dansk)
 * @author SPQRobin
 */
$messages['da'] = array(
	'coll-empty' => 'tom',
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
Cette page devrait automatiquement s'actualiser, si cela n'est pas le cas, vous pouvez appuyez sur le bouton d'actualisation de votre navigateur.",
	'coll-pdf_finished_title'         => 'Création du PDF terminée',
	'coll-pdf_finished_text'          => 'Le fichier PDF a été créé.
Cliquez sur le lien ci-dessous pour le télécharger sur votre ordinateur.',
	'coll-nopdf_error_title'          => 'Aucun fichier PDF trouvé',
	'coll-nopdf_error_text'           => 'Ne peut trouver le fichier PDF. Veuillez le recréer.',
	'coll-notfound_title'             => 'Compilation non trouvée',
	'coll-notfound_text'              => 'Ne peut trouver la compilation.',
	'coll-return_to_collection'       => '<p>Revenir à <a href="$1">$2</a></p>',
	'coll-pages_removed'              => "Les pages suivantes n'ont pu être traitées et on été enlevées du fichier PDF :",
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

/** Icelandic (Íslenska)
 * @author SPQRobin
 */
$messages['is'] = array(
	'coll-empty' => 'tómur',
	'coll-page'  => 'síða',
	'coll-pages' => 'síður',
	'coll-yes'   => 'Já',
	'coll-no'    => 'Nei',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 */
$messages['km'] = array(
	'coll-add_page'          => 'បន្ថែមទំព័រ',
	'coll-remove_page'       => 'ដកចេញ ទំព័រ',
	'coll-add_category'      => 'បន្ថែមចំណាត់ក្រុម',
	'coll-empty'             => 'ទទេ',
	'coll-page'              => 'ទំព័រ',
	'coll-pages'             => 'ទំព័រ',
	'coll-download_as_pdf'   => 'ទាញយក ជា​ PDF',
	'coll-remove'            => 'ដកចេញ',
	'coll-title'             => 'ចំណងជើង៖',
	'coll-subtitle'          => 'ចំណងជើងរង៖',
	'coll-contents'          => 'ខ្លឹមសារ',
	'coll-create_chapter'    => 'បង្កើតជំពូកថ្មី',
	'coll-rename'            => 'ប្តូរឈ្មោះ',
	'coll-new_chapter'       => 'ដាក់ឈ្មោះអោយ ជំពូកថ្មី',
	'coll-rename_chapter'    => 'ដាក់ឈ្មោះថ្មី អោយជំពូក',
	'coll-no_such_category'  => 'គ្មានចំណាត់ក្រុម ដូចនេះទេ',
	'coll-yes'               => 'បាទ / ចាស',
	'coll-no'                => 'ទេ',
	'coll-overwrite'         => 'សរសេរជាន់ពីលើ',
	'coll-append'            => 'បន្ថែមនៅចុង',
	'coll-cancel'            => 'បោះបង់',
	'coll-nopdf_error_title' => 'រកមិនឃើញ ឯកសារ PDF',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'coll-empty'                => 'eidel',
	'coll-page'                 => 'Säit',
	'coll-pages'                => 'Säiten',
	'coll-download_as_pdf'      => 'Als PDF eroflueden',
	'coll-download_pdf'         => 'PDF eroflueden',
	'coll-remove'               => 'Ewechhuelen',
	'coll-title'                => 'Titel:',
	'coll-subtitle'             => 'Ënnertitel:',
	'coll-sort_alphabetically'  => 'Säiten alphabetesch sortéieren',
	'coll-rename'               => 'Ëmbenennen',
	'coll-no_such_category'     => 'Keng esou Kategorie',
	'coll-overwrite_title'      => "D'Säit gëtt et. Iwwerschreiwen?",
	'coll-yes'                  => 'Jo',
	'coll-no'                   => 'Neen',
	'coll-overwrite'            => 'Iwwerschreiwen',
	'coll-nopdf_error_title'    => 'Kee PDF Fichier fonnt',
	'coll-return_to_collection' => '<p>Zréck op <a href="$1">$2</a></p>',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
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
	'coll-show_collection'            => 'Verzameling tonen',
	'coll-help_collections'           => 'Hulp bij verzamelingen',
	'coll-empty'                      => 'leeg',
	'coll-page'                       => 'pagina',
	'coll-pages'                      => "pagina's",
	'coll-download_as_pdf'            => 'Als PDF downloaden',
	'coll-noscript_text'              => '<noscript><h1>JavaScript is vereist!</h1>
<strong>Uw browser understeunt geen JavaScript of JavaScript is uitgeschakeld.
Deze pagina werkt niet correct tenzij u JavaScript inschakelt.</strong></noscript>',
	'coll-intro_text'                 => "U kan pagina's in een verzameling plaatsen, een PDF-bestand maken en downloaden van een paginaverzameling, en paginaverzameling opslaan voor later gebruik, of om ze te delen.

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
	'coll-overwrite_text'             => 'Er bestaat al een pagina met de naam $title.
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
U kan geen pagina's meer toevoegen.",
	'coll-generating_pdf_title'       => 'Bezig met maken van PDF',
	'coll-generating_pdf_text'        => "'''Wacht alstublieft. Het PDF-bestand wordt gemaakt.'''
Over enige seconden hoort deze pagina automatisch te verversen. Als dit niet werkt, klik dan op de knop 'Vernieuwen' in uw browser.",
	'coll-pdf_finished_title'         => 'Maken PDF afgerond',
	'coll-pdf_finished_text'          => 'Het PDF-bestand is beschikbaar.
Klik op de link hieronder om het naar uw computer te downloaden.',
	'coll-nopdf_error_title'          => 'Geen PDF-bestand aangetroffen',
	'coll-nopdf_error_text'           => 'Het PDF-bestand is niet aangetroffen. Maak het PDF-bestand alstublieft opnieuw.',
	'coll-notfound_title'             => 'Verzameling niet gevonden',
	'coll-notfound_text'              => 'De verzamelingspagina is niet gevonden.',
	'coll-return_to_collection'       => '<p>Teruggaan naar <a href="$1">$2</a></p>',
	'coll-pages_removed'              => "De onderstaande pagina's konden niet opgemaakt worden en zijn uit het PDF-bestand verwijderd:",
);

/** Norwegian (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
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
	'coll-download_text'              => 'For å laste ned en automatisk generert PDF-fil av din sidesamling, klikk på knappen.',
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
	'coll-save_collection_text'       => 'For å lagre denne samlingen for senere bruk, velg en samlingstype og skriv inn en sidetittel:',
	'coll-login_to_save'              => 'Om du vil lagre samlingene for senere bruk, <a href="$1">logg inn eller opprett en konto</a>.',
	'coll-personal_collection_label'  => 'Personlig samling:',
	'coll-community_collection_label' => 'Fellesskapssamling:',
	'coll-save_collection'            => 'Lagre samling',
	'coll-overwrite_title'            => 'Siden finnes. Erstatte den?',
	'coll-overwrite_text'             => 'En side ved navn $title finnes fra før. Vil du erstatte den med samlingen din?',
	'coll-yes'                        => 'Ja',
	'coll-no'                         => 'Nei',
	'coll-load_overwrite_text'        => 'Du har allerede noen sider i samlingen din. Vil du erstatte den eksisterende samlingen, legge til det nye innholdet eller avbryte?',
	'coll-overwrite'                  => 'Erstatte',
	'coll-append'                     => 'Legge til',
	'coll-cancel'                     => 'Avbryte',
	'coll-limit_exceeded_title'       => 'Samling for stor',
	'coll-limit_exceeded_text'        => 'Sidesamlingen din er for stor. Ingen flere sider kan legges til.',
	'coll-generating_pdf_title'       => 'Genererer PDF',
	'coll-generating_pdf_text'        => "'''Vent mens PDF-filen genereres.''' Denne siden burde oppdateres med noen sekunders mellomrom. Om dette ikke fungerer, trykk på oppdateringsknappen i nettleseren din.",
	'coll-pdf_finished_title'         => 'PDF-generering ferdig',
	'coll-pdf_finished_text'          => 'PDF-filen har blitt generert. Klikk på lenken nedenfor for å laste ned filen til datamaskinen din.',
	'coll-nopdf_error_title'          => 'Ingen PDF-fil funnet',
	'coll-nopdf_error_text'           => 'Kunne ikke finne PDF-fil. Vennligst generer den på nytt.',
	'coll-notfound_title'             => 'Samling ikke funnet',
	'coll-notfound_text'              => 'Kunne ikke finne samlingsside.',
	'coll-return_to_collection'       => '<p>Tilbake til <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Følgende sider kunne ikke gjengis og ble fjernet fra PDF-filen:',
);

/** Portuguese (Português)
 * @author Malafaya
 */
$messages['pt'] = array(
	'coll-desc'             => '[[{{ns:special}}:Collection|Colecciona páginas]], gera PDFs',
	'coll-collection'       => 'Colecção',
	'coll-collections'      => 'Colecções',
	'coll-portlet_title'    => 'Minha Colecção',
	'coll-add_page'         => 'Adicionar página',
	'coll-remove_page'      => 'Remover página',
	'coll-add_category'     => 'Adicionar categoria',
	'coll-load_collection'  => 'Carregar colecção',
	'coll-show_collection'  => 'Mostrar colecção',
	'coll-help_collections' => 'Ajuda de colecções',
	'coll-empty'            => 'vazia',
	'coll-page'             => 'página',
	'coll-pages'            => 'páginas',
	'coll-download_as_pdf'  => 'Descarregar como PDF',
	'coll-helppage'         => '{{ns:help}}:Colecções',
	'coll-remove'           => 'Remover',
	'coll-title'            => 'Título:',
	'coll-subtitle'         => 'Subtítulo:',
	'coll-contents'         => 'Conteúdo',
	'coll-yes'              => 'Sim',
	'coll-no'               => 'Não',
	'coll-notfound_title'   => 'Colecção Não Encontrada',
);

/** Russian (Русский)
 * @author .:Ajvol:.
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
	'coll-sort_alphabetically'        => 'Упорядочивать страницы автоматически',
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
	'coll-save_collection_text'       => 'Чтобы сохранить коллекцию для дальнейшего использования выберите тип коллекции и введите имя страницы:',
	'coll-login_to_save'              => 'Чтобы сохранить коллекцию для дальнейшего использования, пожалуйста, <a href="$1">представьтесь системе или создайте учётную</a>.',
	'coll-personal_collection_label'  => 'Личная коллекция:',
	'coll-community_collection_label' => 'Коллекция сообщества:',
	'coll-save_collection'            => 'Сохранить коллекцию',
	'coll-overwrite_title'            => 'Страница существует. Перезаписать?',
	'coll-overwrite_text'             => 'Страница с именем $title уже существует.
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
	'coll-pdf_finished_title'         => 'Создание PDF завершено',
	'coll-pdf_finished_text'          => 'PDF-файл был создан.
Нажмите на ссылку ниже, чтобы скачать его на свой компьютер.',
	'coll-nopdf_error_title'          => 'Не найден PDF-файл',
	'coll-nopdf_error_text'           => 'Невозможно найти PDF-файл. Пожалуйста, повторите его создание.',
	'coll-notfound_title'             => 'Коллекция не найдена',
	'coll-notfound_text'              => 'Невозможно найти страницу коллекции.',
	'coll-pages_removed'              => 'следующие страницы не могут быть обработаны и были удалены из PDF-файла:',
);

/** Slovak (Slovenčina)
 * @author Helix84
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
	'coll-overwrite_text'             => 'Stránka s názvom $title už existuje.
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
Táto stránka by sa mala každých niekoľko sekúnd automaticky obnoviť. Ak to nefunguje, stlačte prosím tlačidlo Obnoviť vo vašom prehliadači.",
	'coll-pdf_finished_title'         => 'Tvorba PDF dokončená',
	'coll-pdf_finished_text'          => 'PDF súbor bol vytvorený.
Stiahnuť ho môžete po kliknutí na nasledovný odkaz:',
	'coll-nopdf_error_title'          => 'PDF súbor nebol nájdený',
	'coll-nopdf_error_text'           => 'Nebolo možné nájsť PDF súbor. Prosím, vytvorte PDF súbor znova.',
	'coll-notfound_title'             => 'Kolekcia nenájdená',
	'coll-notfound_text'              => 'Nebolo možné nájsť stránku kolekcie',
	'coll-return_to_collection'       => '<p>Vrátiť sa na <a href="$1">$2</a></p>',
	'coll-pages_removed'              => 'Nasledovné stránky nebolo možné vykresliť a boli z PDF súboru odstránené:',
);

/** Swedish (Svenska)
 * @author M.M.S.
 */
$messages['sv'] = array(
	'coll-desc'                      => '[[Special:Collection|Samla sidor]], generera PDF filer',
	'coll-collection'                => 'Samling',
	'coll-collections'               => 'Samlingar',
	'coll-portlet_title'             => 'Min samling',
	'coll-add_page'                  => 'Lägg till sida',
	'coll-remove_page'               => 'Ta bort sida',
	'coll-add_category'              => 'Lägg till kategori',
	'coll-load_collection'           => 'Ladda samling',
	'coll-show_collection'           => 'Visa samling',
	'coll-help_collections'          => 'Hjälp för samlingar',
	'coll-empty'                     => 'tom',
	'coll-page'                      => 'sida',
	'coll-pages'                     => 'sidor',
	'coll-download_as_pdf'           => 'Ladda ner som PDF',
	'coll-my_collection'             => 'Min samling',
	'coll-download_title'            => 'Ladda ner samling som PDF',
	'coll-download_text'             => 'För att ladda ner en automatisk genererad PDF fil av din sidsamling, klicka på knappen.',
	'coll-download_pdf'              => 'Ladda ner PDF',
	'coll-remove'                    => 'Ta bort',
	'coll-move_to_top'               => 'Flytta till toppen',
	'coll-move_up'                   => 'Flytta upp',
	'coll-move_down'                 => 'Flytta ner',
	'coll-move_to_bottom'            => 'Flytta till botten',
	'coll-title'                     => 'Titel:',
	'coll-subtitle'                  => 'Undertitel:',
	'coll-empty_collection'          => 'Tom samling',
	'coll-save_collection_title'     => 'Spara samling',
	'coll-personal_collection_label' => 'Personlig samling:',
	'coll-save_collection'           => 'Spara samling',
	'coll-overwrite_title'           => 'Sidan existerar. Vill du skriva över den?',
	'coll-yes'                       => 'Ja',
	'coll-no'                        => 'Nej',
	'coll-overwrite'                 => 'Skriv över',
	'coll-limit_exceeded_title'      => 'Samlingen är för stor',
	'coll-limit_exceeded_text'       => 'Din sid samling är för stor.
Inga mer sidor kan läggas till.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
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
	'coll-my_collection'              => 'నా సేకరణ',
	'coll-remove'                     => 'తొలగించు',
	'coll-title'                      => 'శీర్షిక:',
	'coll-subtitle'                   => 'ఉపశీర్షిక:',
	'coll-contents'                   => 'విషయాలు',
	'coll-rename'                     => 'పేరుమార్చు',
	'coll-no_such_category'           => 'అటువంటి వర్గం లేదు',
	'coll-mwpdf_error_msg'            => 'PDF తయారీలో ఏదో పొరపాటు జరిగింది.',
	'coll-enter_title'                => 'సేకరణకి శీర్షిక ఇవ్వండి:',
	'coll-empty_collection'           => 'ఖాళీ సేకరణ',
	'coll-revision'                   => 'కూర్పు: %PARAM%',
	'coll-save_collection_title'      => 'సేకరణని భద్రపరచండి',
	'coll-personal_collection_label'  => 'వ్యక్తిగత సేరకణ:',
	'coll-community_collection_label' => 'సామూహిక సేకరణ:',
	'coll-save_collection'            => 'సేకరణని భద్రపరచు',
	'coll-yes'                        => 'అవును',
	'coll-no'                         => 'కాదు',
	'coll-limit_exceeded_title'       => 'సేకరణ మరీ పెద్దగా ఉంది',
	'coll-nopdf_error_title'          => 'PDF ఫైలు కనపడలేదు',
	'coll-notfound_title'             => 'సేకరణ కనబడలేదు',
	'coll-notfound_text'              => 'సేకరణ పేజీ కనబడలేదు.',
	'coll-return_to_collection'       => '<p>తిరిగి <a href="$1">$2</a>కి</p>',
);

