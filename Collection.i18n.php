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
	'coll-portlet_title'              => 'Create a book',
	'coll-add_page'                   => 'Add wiki page',
	'coll-remove_page'                => 'Remove wiki page',
	'coll-add_category'               => 'Add category',
	'coll-load_collection'            => 'Load collection',
	'coll-show_collection'            => 'Show collection',
	'coll-help_collections'           => 'Collections help',
	'coll-n_pages'                    => '$1 {{PLURAL:$1|page|pages}}',
	'coll-unknown_subpage_title'      => 'Unknown subpage',
	'coll-unknown_subpage_text'       => 'This subpage of [[Special:Collection|Collection]] does not exist',
	'coll-download_as'                => 'Download as $1',
	'coll-noscript_text'              => '<h1>JavaScript is required!</h1>
<strong>Your browser does not support JavaScript or JavaScript has been turned off.
This page will not work correctly, unless JavaScript is enabled.</strong>',
	'coll-intro_text'                 => "You can collect pages, generate and download a PDF file from page collections and save page collections for later use or to share them.

See the [[{{MediaWiki:Coll-helppage}}|help page about collections]] for more information.",
	'coll-helppage'                   => 'Help:Collections',
	'coll-my_collection'              => 'My collection',
	'coll-download_title'             => 'Download collection',
	'coll-download_text'              => 'To download an automatically generated document of your page collection, choose a format and click the button.',
	'coll-download'                   => 'Download',
	'coll-format_label'               => 'Format:',
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
	'coll-notitle_title'              => 'Could not get page title',
	'coll-notitle_title'              => 'The title of the page could not be determined.',
	'coll-post_failed_title'          => 'POST request failed',
	'coll-post_failed_msg'            => 'The POST request to $1 failed ($2).',
	'coll-mwserve_failed_title'       => 'Render server error',
	'coll-mwserve_failed_msg'         => 'An error occured on the render server: <nowiki>$1</nowiki>',
	'coll-enter_title'                => 'Enter title for collection:',
	'coll-error_reponse'              => 'Error response from server',
	'coll-empty_collection'           => 'Empty collection',
	'coll-revision'                   => 'Revision: %PARAM%',
	'coll-save_collection_title'      => 'Save collection',
	'coll-save_collection_text'       => 'To save this collection for later use, choose a collection type and enter a page title:',
	'coll-login_to_save'              => 'If you want to save collections for later use, please [[Special:UserLogin|log in or create an account]].',
	'coll-personal_collection_label'  => 'Personal collection:',
	'coll-community_collection_label' => 'Community collection:',
	'coll-save_collection'            => 'Save collection',
	'coll-save_category'              => 'Collections are saved in the category [[:Category:Collections|Collections]].',
	'coll-overwrite_title'            => 'Page exists.
Overwrite?',
	'coll-overwrite_text'             => 'A page with the name [[:$1]] already exists.
Do you want it to be replaced with your collection?',
	'coll-yes'                        => 'Yes',
	'coll-no'                         => 'No',
	'coll-disable_collection_text'    => '<a href="$1">Click here</a> to stop using collections for now.',
	'coll-load_overwrite_text'        => 'You already have some pages in your collection.
Do you want to overwrite your current collection, append the new content, or cancel loading this collection?',
	'coll-overwrite'                  => 'Overwrite',
	'coll-append'                     => 'Append',
	'coll-cancel'                     => 'Cancel',
	'coll-limit_exceeded_title'       => 'Collection too big',
	'coll-limit_exceeded_text'        => 'Your page collection is too big.
No more pages can be added.',
	'coll-rendering_title'            => 'Rendering',
	'coll-rendering_text'             => "<p><strong>Please wait while the document is being generated.</strong></p>

<p><strong>Progress:</strong> <span id=\"renderingProgress\">$1</span>% <span id=\"renderingStatus\">$2</span></p>

<p>This page should automatically refresh every few seconds.
If this does not work, please press refresh button of your browser.</p>",
	'coll-rendering_status'           => "<strong>Status:</strong> $1",
	'coll-rendering_article'          => ' (wiki page: $1)',
	'coll-rendering_page'             => ' (page: $1)',
	'coll-rendering_finished_title'   => 'Rendering finished',
	'coll-rendering_finished_text'    => "'''The document file has been generated.'''
'''[$1 Click here]''' to download it to your computer.

Notes:
* Not satisfied with the output? See [[{{MediaWiki:Coll-helppage}}|the help page about collections]] for possibilities to improve it.",
	'coll-notfound_title'             => 'Collection not found',
	'coll-notfound_text'              => 'Could not find collection page.',
	'coll-is_cached'                  => '<ul><li>A cached version of the document has been found, so no rendering was necessary. <a href="$1">Force re-rendering.</a></li></ul>',
	'coll-excluded-templates'         => '* Templates in category [[:Category:$1|$1]] have been excluded.',
	'coll-blacklisted-templates'      => '* Templates on blacklist [[:$1]] have been excluded.',
	'coll-return_to_collection'       => '<p>Return to <a href="$1">$2</a></p>',
	'coll-book_title'                 => 'Order printed book',
	'coll-book_text'                  => 'You can order a printed book containing your page collection by visiting one of the following print-on-demand partners:',
	'coll-order_from_pp'              => 'Order book from $1',
	'coll-about_pp'                   => 'About $1',
	'coll-invalid_podpartner_title'   => 'Invalid POD partner',
	'coll-invalid_podpartner_msg'     => 'The supplied POD partner is invalid.
Please contact your MediaWiki administrator.',
	'coll-license'                    => 'License',
	'coll-return_to'                  => "Return to [[:$1]]",
);

/** Message documentation (Message documentation)
 * @author Darth Kule
 * @author Jon Harald Søby
 * @author Purodha
 * @author Siebrand
 */
$messages['qqq'] = array(
	'coll-desc' => 'Short description of this extension, shown in [[Special:Version]]. Do not translate or change links.',
	'coll-collection' => '{{Identical|Collection}}',
	'coll-portlet_title' => '{{Identical|Collection}}',
	'coll-empty' => '{{Identical|Empty}}',
	'coll-helppage' => "Used as a link to the help page for this extension's functionality on a wiki. '''Do not translate ''Help:''.'''",
	'coll-my_collection' => '{{Identical|My collection}}',
	'coll-remove' => '{{Identical|Remove}}',
	'coll-title' => '{{Identical|Title}}',
	'coll-contents' => '{{Identical|Contents}}',
	'coll-save_collection_title' => '{{Identical|Save collection}}',
	'coll-save_collection' => '{{Identical|Save collection}}',
	'coll-yes' => '{{Identical|Yes}}',
	'coll-no' => '{{Identical|No}}',
	'coll-cancel' => '{{Identical|Cancel}}',
	'coll-about_pp' => '{{Identical|About}}',
	'coll-return_to' => '{{Identical|Return to $1}}',
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

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 * @author SPQRobin
 */
$messages['af'] = array(
	'coll-collection' => 'Versameling',
	'coll-collections' => 'Versamelings',
	'coll-portlet_title' => 'My versameling',
	'coll-add_page' => 'Voeg bladsy by',
	'coll-remove_page' => 'Verwyder bladsy',
	'coll-add_category' => 'Voeg kategorie by',
	'coll-load_collection' => 'Laai versameling',
	'coll-show_collection' => 'Wys versameling',
	'coll-help_collections' => 'Versameling hulp',
	'coll-empty' => 'leeg',
	'coll-my_collection' => 'My Versameling',
	'coll-remove' => 'Skrap',
	'coll-move_to_top' => 'Skuif tot bo',
	'coll-move_up' => 'Skuif op',
	'coll-move_down' => 'Skuif af',
	'coll-move_to_bottom' => 'Skuif tot onder',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Subtitel:',
	'coll-contents' => 'Inhoud',
	'coll-rename' => 'Hernoem',
	'coll-new_chapter' => 'Voer naam vir nuwe hoofstuk in',
	'coll-rename_chapter' => 'Voer nuwe naam vir hoofstuk in',
	'coll-no_such_category' => "Geen so 'n kategorie",
	'coll-empty_collection' => 'Lëe versameling',
	'coll-save_collection_title' => 'Stoor versameling',
	'coll-personal_collection_label' => 'Persoonlike versameling:',
	'coll-community_collection_label' => 'Gemeenskap versameling:',
	'coll-save_collection' => 'Stoor versameling',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nee',
	'coll-cancel' => 'Kanselleer',
	'coll-license' => 'Lisensie',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'coll-desc' => '[[Special:Collection|صفحات مجموعة]]، تولد PDFs',
	'coll-collection' => 'مجموعة',
	'coll-collections' => 'مجموعات',
	'coll-portlet_title' => 'إنشاء كتاب',
	'coll-add_page' => 'إضافة صفحة ويكي',
	'coll-remove_page' => 'إزالة صفحة ويكي',
	'coll-add_category' => 'إضافة تصنيف',
	'coll-load_collection' => 'تحميل المجموعة',
	'coll-show_collection' => 'عرض المجموعة',
	'coll-help_collections' => 'مساعدة المجموعات',
	'coll-empty' => 'فارغ',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحة|صفحة}}',
	'coll-download_as' => 'تحميل ك$1',
	'coll-noscript_text' => '<h1>الجافاسكريبت مطلوب!</h1>
<strong>متصفحك لا يدعم جافاسكريبت جافاسكريبت أو الجافاسكريبت تم تعطيلها.
هذه الصفحة لن تعمل بطريقة صحيحة، إلا إذا تم تفعيل الجافاسكريبت.</strong>',
	'coll-intro_text' => 'يمكنك جمع الصفحات، توليد وتحميل ملف PDF من مجموعات الصفحة وحفظ مجموعات الصفحة للاستخدام فيما بعد أو لمشاركتها.

انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] لمزيد من المعلومات.',
	'coll-helppage' => 'Help:مجموعات',
	'coll-too_big_cat' => 'التصنيف يحتوي على أكثر من %PARAM% صفحة، فقط أول %PARAM% صفحة يمكن إضافتها إلى مجموعتك.
هل تريد إضافتها؟',
	'coll-my_collection' => 'مجموعتي',
	'coll-download_title' => 'حمل المجموعة ك PDF',
	'coll-download_text' => 'لتحميل ملف PDF مولد تلقائيا من مجموعة صفحتك، اضغط الزر.',
	'coll-download' => 'تحميل',
	'coll-format_label' => 'الصيغة:',
	'coll-remove' => 'إزالة',
	'coll-move_to_top' => 'حرك إلى الأعلى',
	'coll-move_up' => 'حرك إلى الأعلى',
	'coll-move_down' => 'حرك إلى الأسفل قليلا',
	'coll-move_to_bottom' => 'حرك إلى الأسفل',
	'coll-title' => 'العنوان:',
	'coll-subtitle' => 'العنوان الفرعي:',
	'coll-contents' => 'محتويات',
	'coll-create_chapter' => 'إنشاء فرع جديد',
	'coll-sort_alphabetically' => 'تصنيف الصفحات أبجديا',
	'coll-clear_collection' => 'إفراغ المجموعة',
	'coll-clear_confirm' => 'هل تريد فعلا إفراغ مجموعتك؟',
	'coll-rename' => 'إعادة تسمية',
	'coll-new_chapter' => 'أدخل الاسم للفرع الجديد',
	'coll-rename_chapter' => 'أدخل الاسم الجديد للفرع',
	'coll-no_such_category' => 'لا تصنيف كهذا',
	'coll-notitle_title' => 'عنوان الصفحة لم يمكن تحديده.',
	'coll-post_failed_title' => 'طلب POST فشل',
	'coll-post_failed_msg' => 'طلب POST إلى $1 فشل ($2).',
	'coll-mwserve_failed_title' => 'خطأ عرض من الخادم',
	'coll-mwserve_failed_msg' => 'حدث خطأ في خادم العرض: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'أدخل العنوان للمجموعة:',
	'coll-error_reponse' => 'خطأ استجابة من الخادم',
	'coll-empty_collection' => 'مجموعة فارغة',
	'coll-revision' => 'النسخة: %PARAM%',
	'coll-save_collection_title' => 'حفظ المجموعة',
	'coll-save_collection_text' => 'لحفظ هذه المجموعة للاستخدام المستقبلي، اختر نوع مجموعة وأدخل عنوان صفحة:',
	'coll-login_to_save' => 'لو كنت تريد حفظ المجموعات من أجل الاستخدام فيما بعد، من فضلك [[Special:UserLogin|قم بتسجيل الدخول أو إنشاء حساب]].',
	'coll-personal_collection_label' => 'مجموعة شخصية:',
	'coll-community_collection_label' => 'مجموعة مجتمع:',
	'coll-save_collection' => 'حفظ المجموعة',
	'coll-save_category' => 'المجموعات يتم حفظها في التصنيف [[:Category:Collections|مجموعات]].',
	'coll-overwrite_title' => 'الصفحة موجودة.
كتابة عليها؟',
	'coll-overwrite_text' => 'صفحة بنفس الاسم [[:$1]] موجودة بالفعل.
هل تريد استبدالها بمجموعتك؟',
	'coll-yes' => 'نعم',
	'coll-no' => 'لا',
	'coll-disable_collection_text' => '<a href="$1">اضغط هنا</a> للتوقف عن استخدام المجموعات حاليا.',
	'coll-load_overwrite_text' => 'لديك بالفعل عدة صفحات في مجموعتك.
هل تريد الكتابة على مجموعتك الحالية، إضافة المحتوى الجديد أو إلغاء تحميل هذه المجموعة؟',
	'coll-overwrite' => 'كتابة عليها',
	'coll-append' => 'انتظار',
	'coll-cancel' => 'إلغاء',
	'coll-limit_exceeded_title' => 'المجموعة كبيرة جدا',
	'coll-limit_exceeded_text' => 'مجموعة صفحتك كبيرة جدا.
لا مزيد من الصفحات يمكن إضافتها.',
	'coll-rendering_title' => 'عرض',
	'coll-rendering_text' => "'''من فضلك انتظر أثناء توليد الوثيقة.'''

'''التقدم:''' $1% $2

هذه الصفحة ينبغي أن يتم تحديثها كل عدة ثوان.
لو أن هذا لا يعمل، من فضلك اضغط زر التحديث في متصفحك.",
	'coll-rendering_status' => "'''الحالة:''' $1",
	'coll-rendering_article' => '  (المقالة: $1)',
	'coll-rendering_page' => '  (الصفحة: $1)',
	'coll-rendering_finished_title' => 'العرض انتهى',
	'coll-rendering_finished_text' => "'''ملف الوثيقة تم توليده.'''
'''[$1 اضغط هنا]''' لتنزيله إلى حاسوبك.

ملاحظات:
* غير راض عن الخرج؟ انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] للاحتمالات لتحسينه.",
	'coll-notfound_title' => 'المجموعة غير موجودة',
	'coll-notfound_text' => 'لم يمكن العثور على صفحة المجموعة.',
	'coll-is_cached' => '<ul><li>نسخة مخزنة من الوثيقة تم العثور عليها، لذا لا تحديث كان ضروريا. <a href="$1">إجبار على إعادة التحديث.</a></li></ul>',
	'coll-excluded-templates' => '* القوالب في التصنيف [[:Category:$1|$1]] تم إقصاؤها.',
	'coll-blacklisted-templates' => '* القوالب في القائمة السوداء [[:$1]] تم إقصاؤها.',
	'coll-return_to_collection' => '<p>ارجع إلى <a href="$1">$2</a></p>',
	'coll-book_title' => 'طلب كتاب مطبوع',
	'coll-book_text' => 'يمكنك طلب كتاب مطبوع يحتوي على مجموعة صفحاتك بواسطة زيارة واحدا من شركاء الطباعة عند الطلب التاليين:',
	'coll-order_from_pp' => 'طلب كتاب من $1',
	'coll-about_pp' => 'حول $1',
	'coll-invalid_podpartner_title' => 'شريك POD غير صحيح',
	'coll-invalid_podpartner_msg' => 'شريك POD الموفر غير صحيح.
من فضلك اتصل بإداري ميدياويكي الخاص بك.',
	'coll-license' => 'ترخيص',
	'coll-return_to' => 'رجوع إلى [[:$1]]',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'coll-desc' => '[[Special:Collection|صفحات مجموعة]]، تولد PDFs',
	'coll-collection' => 'مجموعة',
	'coll-collections' => 'مجموعات',
	'coll-portlet_title' => 'إنشاء كتاب',
	'coll-add_page' => 'إضافة صفحة ويكى',
	'coll-remove_page' => 'إزالة صفحة ويكى',
	'coll-add_category' => 'إضافة تصنيف',
	'coll-load_collection' => 'تحميل المجموعة',
	'coll-show_collection' => 'عرض المجموعة',
	'coll-help_collections' => 'مساعدة المجموعات',
	'coll-empty' => 'فارغ',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحة|صفحة}}',
	'coll-download_as' => 'تحميل ك$1',
	'coll-noscript_text' => '<h1>الجافاسكريبت مطلوب!</h1>
<strong>متصفحك لا يدعم جافاسكريبت جافاسكريبت أو الجافاسكريبت تم تعطيلها.
هذه الصفحة لن تعمل بطريقة صحيحة، إلا إذا تم تفعيل الجافاسكريبت.</strong>',
	'coll-intro_text' => 'يمكنك جمع الصفحات، توليد وتحميل ملف PDF من مجموعات الصفحة وحفظ مجموعات الصفحة للاستخدام فيما بعد أو لمشاركتها.

انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] لمزيد من المعلومات.',
	'coll-helppage' => 'Help:مجموعات',
	'coll-too_big_cat' => 'التصنيف يحتوى على أكثر من %PARAM% صفحة، فقط أول %PARAM% صفحة يمكن إضافتها إلى مجموعتك.
هل تريد إضافتها؟',
	'coll-my_collection' => 'مجموعتي',
	'coll-download_title' => 'حمل المجموعة ك PDF',
	'coll-download_text' => 'لتحميل ملف PDF مولد تلقائيا من مجموعة صفحتك، اضغط الزر.',
	'coll-download' => 'تحميل',
	'coll-format_label' => 'الصيغة:',
	'coll-remove' => 'إزالة',
	'coll-move_to_top' => 'حرك إلى الأعلى',
	'coll-move_up' => 'حرك إلى الأعلى',
	'coll-move_down' => 'حرك إلى الأسفل قليلا',
	'coll-move_to_bottom' => 'حرك إلى الأسفل',
	'coll-title' => 'العنوان:',
	'coll-subtitle' => 'العنوان الفرعي:',
	'coll-contents' => 'محتويات',
	'coll-create_chapter' => 'إنشاء فرع جديد',
	'coll-sort_alphabetically' => 'تصنيف الصفحات أبجديا',
	'coll-clear_collection' => 'إفراغ المجموعة',
	'coll-clear_confirm' => 'هل تريد فعلا إفراغ مجموعتك؟',
	'coll-rename' => 'إعادة تسمية',
	'coll-new_chapter' => 'أدخل الاسم للفرع الجديد',
	'coll-rename_chapter' => 'أدخل الاسم الجديد للفرع',
	'coll-no_such_category' => 'لا تصنيف كهذا',
	'coll-notitle_title' => 'عنوان الصفحة لم يمكن تحديده.',
	'coll-post_failed_title' => 'طلب POST فشل',
	'coll-post_failed_msg' => 'طلب POST إلى $1 فشل ($2).',
	'coll-mwserve_failed_title' => 'خطأ عرض من الخادم',
	'coll-mwserve_failed_msg' => 'حدث خطأ فى خادم العرض: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'أدخل العنوان للمجموعة:',
	'coll-error_reponse' => 'خطأ استجابة من الخادم',
	'coll-empty_collection' => 'مجموعة فارغة',
	'coll-revision' => 'النسخة: %PARAM%',
	'coll-save_collection_title' => 'حفظ المجموعة',
	'coll-save_collection_text' => 'لحفظ هذه المجموعة للاستخدام المستقبلي، اختر نوع مجموعة وأدخل عنوان صفحة:',
	'coll-login_to_save' => 'لو كنت تريد حفظ المجموعات من أجل الاستخدام فيما بعد، من فضلك [[Special:UserLogin|قم بتسجيل الدخول أو إنشاء حساب]].',
	'coll-personal_collection_label' => 'مجموعة شخصية:',
	'coll-community_collection_label' => 'مجموعة مجتمع:',
	'coll-save_collection' => 'حفظ المجموعة',
	'coll-save_category' => 'المجموعات يتم حفظها فى التصنيف [[:Category:Collections|مجموعات]].',
	'coll-overwrite_title' => 'الصفحة موجودة.
كتابة عليها؟',
	'coll-overwrite_text' => 'صفحة بنفس الاسم [[:$1]] موجودة بالفعل.
هل تريد استبدالها بمجموعتك؟',
	'coll-yes' => 'نعم',
	'coll-no' => 'لا',
	'coll-disable_collection_text' => '<a href="$1">اضغط هنا</a> للتوقف عن استخدام المجموعات حاليا.',
	'coll-load_overwrite_text' => 'لديك بالفعل عدة صفحات فى مجموعتك.
هل تريد الكتابة على مجموعتك الحالية، إضافة المحتوى الجديد أو إلغاء تحميل هذه المجموعة؟',
	'coll-overwrite' => 'كتابة عليها',
	'coll-append' => 'انتظار',
	'coll-cancel' => 'إلغاء',
	'coll-limit_exceeded_title' => 'المجموعة كبيرة جدا',
	'coll-limit_exceeded_text' => 'مجموعة صفحتك كبيرة جدا.
لا مزيد من الصفحات يمكن إضافتها.',
	'coll-rendering_title' => 'عرض',
	'coll-rendering_text' => "'''من فضلك انتظر أثناء توليد الوثيقة.'''

'''التقدم:''' $1% $2

هذه الصفحة ينبغى أن يتم تحديثها كل عدة ثوان.
لو أن هذا لا يعمل، من فضلك اضغط زر التحديث فى متصفحك.",
	'coll-rendering_status' => "'''الحالة:''' $1",
	'coll-rendering_article' => '   (المقالة: $1)',
	'coll-rendering_page' => '   (الصفحة: $1)',
	'coll-rendering_finished_title' => 'العرض انتهى',
	'coll-rendering_finished_text' => "'''ملف الوثيقة تم توليده.'''
'''[$1 اضغط هنا]''' لتنزيله إلى حاسوبك.

ملاحظات:
* غير راض عن الخرج؟ انظر [[{{MediaWiki:Coll-helppage}}|صفحة المساعدة حول المجموعات]] للاحتمالات لتحسينه.",
	'coll-notfound_title' => 'المجموعة غير موجودة',
	'coll-notfound_text' => 'لم يمكن العثور على صفحة المجموعة.',
	'coll-is_cached' => '<ul><li>نسخة مخزنة من الوثيقة تم العثور عليها، لذا لا تحديث كان ضروريا. <a href="$1">إجبار على إعادة التحديث.</a></li></ul>',
	'coll-excluded-templates' => '* القوالب فى التصنيف [[:Category:$1|$1]] تم إقصاؤها.',
	'coll-blacklisted-templates' => '* القوالب فى القائمة السوداء [[:$1]] تم إقصاؤها.',
	'coll-return_to_collection' => '<p>ارجع إلى <a href="$1">$2</a></p>',
	'coll-book_title' => 'طلب كتاب مطبوع',
	'coll-book_text' => 'يمكنك طلب كتاب مطبوع يحتوى على مجموعة صفحاتك بواسطة زيارة واحدا من شركاء الطباعة عند الطلب التاليين:',
	'coll-order_from_pp' => 'طلب كتاب من $1',
	'coll-about_pp' => 'حول $1',
	'coll-invalid_podpartner_title' => 'شريك POD غير صحيح',
	'coll-invalid_podpartner_msg' => 'شريك POD الموفر غير صحيح.
من فضلك اتصل بإدارى ميدياويكى الخاص بك.',
	'coll-license' => 'ترخيص',
	'coll-return_to' => 'رجوع إلى [[:$1]]',
);

/** Asturian (Asturianu)
 * @author Esbardu
 */
$messages['ast'] = array(
	'coll-collection' => 'Coleición',
	'coll-collections' => 'Coleiciones',
	'coll-portlet_title' => 'Crear un llibru',
	'coll-add_page' => 'Añader páxina wiki',
	'coll-remove_page' => 'Eliminar páxina wiki',
	'coll-add_category' => 'Añader categoría',
	'coll-load_collection' => 'Cargar coleición',
	'coll-show_collection' => 'Amosar coleición',
	'coll-help_collections' => 'Aida de les coleiciones',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxines}}',
	'coll-download_as' => 'Descargar como $1',
	'coll-helppage' => 'Aida:Coleiciones',
	'coll-my_collection' => 'La mio coleición',
	'coll-download_title' => 'Descargar coleición',
	'coll-download' => 'Descargar',
	'coll-format_label' => 'Formatu:',
	'coll-remove' => 'Eliminar',
	'coll-title' => 'Títulu:',
	'coll-subtitle' => 'Subtítulu:',
	'coll-create_chapter' => 'Crear capítulu nuevu',
	'coll-sort_alphabetically' => 'Ordenar páxines alfabéticamente',
	'coll-rename' => 'Renomar',
	'coll-yes' => 'Sí',
	'coll-no' => 'Non',
	'coll-about_pp' => 'Tocante a $1',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'coll-desc' => 'Добавя възможност за [[Special:Collection|събиране на страници]] и преобразуването им в PDF',
	'coll-add_page' => 'Добавяне на уики-страница',
	'coll-remove_page' => 'Премахване на уики-страница',
	'coll-add_category' => 'Добавяне на категория',
	'coll-empty' => 'празна',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страници}}',
	'coll-download_as' => 'Изтегляне като $1',
	'coll-noscript_text' => '<h1>Изисква се Джаваскрипт!</h1>
<strong>Използваният браузър не поддържа Джаваскрипт или поддръжката на Джаваскрипт е изключена.
Тази страница не може да работи правилно докато Джаваскриптът не бъде активиран.</strong>',
	'coll-download' => 'Изтегляне',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Премахване',
	'coll-move_to_top' => 'Преместване в началото',
	'coll-move_up' => 'Преместване нагоре',
	'coll-move_down' => 'Преместване надолу',
	'coll-move_to_bottom' => 'Преместване в края',
	'coll-title' => 'Заглавие:',
	'coll-subtitle' => 'Подзаглавие:',
	'coll-contents' => 'Съдържание',
	'coll-sort_alphabetically' => 'Подреждане на страниците по азбучен ред',
	'coll-rename' => 'Преименуване',
	'coll-no_such_category' => 'Няма такава категория',
	'coll-revision' => 'Версия: %PARAM%',
	'coll-save_collection_title' => 'Съхраняване',
	'coll-save_collection' => 'Съхраняване',
	'coll-overwrite_title' => 'Страницата съществува. Заместване?',
	'coll-yes' => 'Да',
	'coll-no' => 'Не',
	'coll-overwrite' => 'Заместване',
	'coll-append' => 'Добавяне',
	'coll-cancel' => 'Отказване',
	'coll-rendering_status' => "'''Статут:''' $1",
	'coll-rendering_article' => '  (уики-страница: $1)',
	'coll-rendering_page' => '  (страница: $1)',
	'coll-return_to_collection' => '<p>Връщане към <a href="$1">$2</a></p>',
	'coll-order_from_pp' => 'Поръчване на книга от $1',
	'coll-about_pp' => 'За $1',
	'coll-license' => 'Лиценз',
	'coll-return_to' => 'Връщане към [[:$1]]',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'coll-desc' => '[[Special:Collection|Prikuplja stranice]], pravi PDF datoteke',
	'coll-yes' => 'Da',
);

/** Catalan (Català)
 * @author Jordi Roqué
 * @author SMP
 */
$messages['ca'] = array(
	'coll-add_page' => 'Afegir pàgina',
	'coll-remove_page' => 'Treure pàgina',
	'coll-add_category' => 'Afegir categoria',
	'coll-empty' => 'buit',
	'coll-noscript_text' => "<h1>Es necessita el JavaScript!</h1>
<strong>El vostre navegador no suporta el JavaScript o aquest hi està blocat.
Aquesta pàgina no funcionarà correctament si no el poseu o l'activeu.</strong>",
	'coll-title' => 'Títol:',
	'coll-subtitle' => 'Subtítol:',
	'coll-contents' => 'Contingut',
	'coll-create_chapter' => 'Crear un nou capítol',
	'coll-sort_alphabetically' => 'Ordenar les pàgines alfabèticament',
	'coll-rename' => 'Reanomena',
	'coll-overwrite_title' => 'La pàgina existeix. Voleu substituir-la?',
	'coll-yes' => 'S&iacute;',
	'coll-no' => 'No',
	'coll-return_to_collection' => '<p>Tornar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Encarregar llibre imprès',
	'coll-about_pp' => 'Quant a $1',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'coll-desc' => 'Vytváření [[Special:Collection|kolekce stránek]], tvorba PDF',
	'coll-collection' => 'Kolekce',
	'coll-collections' => 'Kolekce',
	'coll-portlet_title' => 'Vytvořit knihu',
	'coll-add_page' => 'Přidat tuto stránku',
	'coll-remove_page' => 'Odebrat tuto stránku',
	'coll-add_category' => 'Přidat kategorii',
	'coll-load_collection' => 'Načíst kolekci',
	'coll-show_collection' => 'Zobrazit kolekci',
	'coll-help_collections' => 'Nápověda ke kolekcím',
	'coll-empty' => 'prázdná',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránek}}',
	'coll-download_as' => 'Stáhnout jako $1',
	'coll-noscript_text' => '<h1>Je vyžadován JavaScript!</h1>
<strong>Váš prohlížeč nepodporuje JavaScript nebo máte JavaScript vypnutý.
Tato stránka nebude správně fungovat, dokud JavaScript nezapnete.</strong>',
	'coll-intro_text' => 'Můžete vytvářet kolekce stránek, vytvářet a stahovat PDF soubory vytvořené z kolekce stránek a ukládat kolekce stránek pro pozdější využití nebo je sdílet.

Další informace najdete na [[{{MediaWiki:Coll-helppage}}|stránce nápovědy ke kolekcím]].',
	'coll-helppage' => 'Help:Kolekce',
	'coll-too_big_cat' => 'Tato kategorie obsahuje více než %PARAM% {{PLURAL:%PARAM%|stránku|stránky|stránek}}, do kolekce však lze přidat pouze {{PLURAL:%PARAM%|první stránku|první %PARAM% stránky|prvních %PARAM% stránek}}. Chcete je tam přidat?',
	'coll-my_collection' => 'Moje kolekce',
	'coll-download_title' => 'Stáhnout kolekci',
	'coll-download_text' => 'Pokud chcete stáhnout dokument vytvořený automaticky z vaší kolekce stránek, zvolte si formát a klikněte na tlačítko.',
	'coll-download' => 'Stáhnout',
	'coll-format_label' => 'Formát:',
	'coll-remove' => 'Odstranit',
	'coll-move_to_top' => 'Přesunout nahoru',
	'coll-move_up' => 'Přesunout výše',
	'coll-move_down' => 'Přesunout níže',
	'coll-move_to_bottom' => 'Přesunout dolů',
	'coll-title' => 'Název:',
	'coll-subtitle' => 'Podtitul:',
	'coll-contents' => 'Obsah',
	'coll-create_chapter' => 'Vytvořit novou kapitolu',
	'coll-sort_alphabetically' => 'Seřadit stránky abecedně',
	'coll-clear_collection' => 'Vyčistit kolekci',
	'coll-clear_confirm' => 'Opravdu chcete kolekci vyčistit?',
	'coll-rename' => 'Přejmenovat',
	'coll-new_chapter' => 'Zadejte název nové kapitoly',
	'coll-rename_chapter' => 'Zadejte nový název kapitoly',
	'coll-no_such_category' => 'Taková kategorie neexistuje',
	'coll-notitle_title' => 'Nebylo možné určit název stránky.',
	'coll-post_failed_title' => 'Chyba požadavku POST',
	'coll-post_failed_msg' => 'Chyba při požadavku POST na server $1 ($2).',
	'coll-mwserve_failed_title' => 'Chyba vykreslovacího serveru',
	'coll-mwserve_failed_msg' => 'Na vykreslovacím serveru došlo k chybě: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Zadejte název kolekce:',
	'coll-error_reponse' => 'Chybná odpověď serveru',
	'coll-empty_collection' => 'Prázdná kolekce',
	'coll-revision' => 'Revize: %PARAM%',
	'coll-save_collection_title' => 'Uložit kolekci',
	'coll-save_collection_text' => 'Tuto kolekci můžete uložit pro pozdější použití pro zadání typu kolekce a názvu stránky:',
	'coll-login_to_save' => 'Pokud chcete ukládat kolekce pro pozdější použití, prosím, [[Special:UserLogin|přihlaste se nebo si vytvořte účet]].',
	'coll-personal_collection_label' => 'Osobní kolekce:',
	'coll-community_collection_label' => 'Komunitní kolekce:',
	'coll-save_collection' => 'Uložit kolekci',
	'coll-save_category' => 'Kolekce se ukládají do kategorie [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => 'Stránka existuje. Přepsat?',
	'coll-overwrite_text' => 'Stránka s názvem [[:$1]] už existuje.
Chcete ji nahradit svojí kolekcí?',
	'coll-yes' => 'Ano',
	'coll-no' => 'Ne',
	'coll-disable_collection_text' => '<a href="$1">Nepoužívat kolekce.</a>',
	'coll-load_overwrite_text' => 'Ve vaší kolekci se už nacházejí stránky.
Chcete přepsat svoji existující kolekci, přidat do ní obsah nebo zrušit operaci s touto kolekcí?',
	'coll-overwrite' => 'Přepsat',
	'coll-append' => 'Přidat',
	'coll-cancel' => 'Zrušit',
	'coll-limit_exceeded_title' => 'Kolekce je příliš velká',
	'coll-limit_exceeded_text' => 'Vaše kolekce stránek je příliš velká.
Není možné přidat další stránky.',
	'coll-rendering_title' => 'Vykreslování',
	'coll-rendering_text' => "'''Prosím čekejte, dokument se připravuje.'''

Dokončeno: '''$1 %'''

Tato stránka se každých několik sekund automaticky obnoví.
Pokud to nefunguje, stiskněte v prohlížeči tlačítko ''obnovit''.",
	'coll-rendering_finished_title' => 'Vykreslování dokončeno',
	'coll-rendering_finished_text' => "'''Soubor s dokumentem byl vytvořen.'''
Můžete si ho '''[$1 stáhnout do svého počítače]'''.

Poznámky:
* Nejste spokojeni s výsledkem? Podívejte se na [[{{MediaWiki:Coll-helppage}}|stránku s nápovědou ke kolekcím]], jak ho vylepšit.",
	'coll-notfound_title' => 'Kolekce nenalezena',
	'coll-notfound_text' => 'Nebylo možné najít stránku kolekce',
	'coll-is_cached' => '<ul><li>Byla nalezena cachovaná verze tohoto dokumentu, takže nebylo třeba vykreslovat. <a href="$1">Vynutit nové vykreslení.</a></li></ul>',
	'coll-excluded-templates' => '* Šablony v kategorii [[:Category:$1|$1]] byly vynechány.',
	'coll-blacklisted-templates' => '* Šablony na černé listině [[:$1]] byly vynechány.',
	'coll-return_to_collection' => '<p>Vrátit se na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Objednat tištěnou knihu',
	'coll-book_text' => 'U některého z následujících partnerů pro tisk na vyžádání si můžete objednat tištěnou knihu obsahující vaši kolekci stránek:',
	'coll-order_from_pp' => 'Objednat knihu od {{grammar:2sg|$1}}',
	'coll-about_pp' => 'O {{grammar:7sg|$1}}',
	'coll-invalid_podpartner_title' => 'Neplatný partner pro tisk na vyžádání',
	'coll-invalid_podpartner_msg' => 'Zvolený partner pro tisk na vyžádání není platný.
Kontaktujte svého správce MediaWiki.',
	'coll-license' => 'Licence',
	'coll-return_to' => 'Návrat na stránku „[[:$1]]“.',
);

/** Danish (Dansk)
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'coll-empty' => 'tom',
	'coll-title' => 'Titel:',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nej',
	'coll-cancel' => 'Afbryd',
);

/** German (Deutsch)
 * @author Heuler06
 * @author Metalhead64
 * @author Raimond Spekking
 * @author Revolus
 * @author VolkerHaas
 */
$messages['de'] = array(
	'coll-desc' => '[[Special:Collection|Sammle Seiten]], erzeuge PDFs',
	'coll-collection' => 'Sammlung',
	'coll-collections' => 'Sammlungen',
	'coll-portlet_title' => 'Buch erstellen',
	'coll-add_page' => 'Artikel hinzufügen',
	'coll-remove_page' => 'Artikel entfernen',
	'coll-add_category' => 'Kategorie hinzufügen',
	'coll-load_collection' => 'Sammlung laden',
	'coll-show_collection' => 'Sammlung zeigen',
	'coll-help_collections' => 'Hilfe zu Sammlungen',
	'coll-empty' => 'leer',
	'coll-n_pages' => '$1 {{PLURAL:$1|Seite|Seite}}',
	'coll-download_as' => 'Als $1 herunterladen',
	'coll-noscript_text' => '<h1>JavaScript wird benötigt!</h1>
<strong>Dein Browser unterstützt kein JavaScript oder JavaScript wurde deaktiviert.
Diese Seite wird nicht richtig funktionieren, solange JavaScript nicht verfügbar ist.</strong>',
	'coll-intro_text' => 'Du kannst Sammlungen von Seiten erstellen, daraus ein PDF erzeugen und herunterladen. Weiterhin können Sammlungen für die spätere Verwendung zwischengespeichert und mit anderen Benutzern geteilt werden.

Siehe auch die [[{{MediaWiki:Coll-helppage}}|Hilfe zu Sammlungen]] für weitere Informationen.',
	'coll-helppage' => 'Help:Sammlungen',
	'coll-too_big_cat' => 'Die Kategorie enthält mehr als %PARAM% Seiten, daher können nur die ersten %PARAM% Seiten deiner Sammlung hinzugefügt werden.
Möchtest du sie hinzufügen?',
	'coll-my_collection' => 'Meine Sammlung',
	'coll-download_title' => 'Sammlung herunterladen',
	'coll-download_text' => 'Um eine automatisch erstellte Datei deiner Sammlung herunterzuladen, klicke auf die Schaltfläche.',
	'coll-download' => 'Herunterladen',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Entfernen',
	'coll-move_to_top' => 'an den Anfang',
	'coll-move_up' => 'hoch',
	'coll-move_down' => 'herunter',
	'coll-move_to_bottom' => 'an das Ende',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Untertitel:',
	'coll-contents' => 'Inhalt',
	'coll-create_chapter' => 'Neues Kapitel erzeugen',
	'coll-sort_alphabetically' => 'Seiten alphabetisch sortieren',
	'coll-clear_collection' => 'Sammlung löschen',
	'coll-clear_confirm' => 'Möchtest du deine Sammlung wirklich löschen?',
	'coll-rename' => 'Umbenennen',
	'coll-new_chapter' => 'Gib einen Namen für ein neues Kapitel ein',
	'coll-rename_chapter' => 'Gib einen neuen Namen für das Kapitel ein',
	'coll-no_such_category' => 'Kategorie nicht vorhanden',
	'coll-notitle_title' => 'Der Titel der Seite konnte nicht bestimmt werden.',
	'coll-post_failed_title' => 'POST-Anfrage fehlgeschlagen',
	'coll-post_failed_msg' => 'Die POST-Anfrage an $1 ist fehlgeschlagen ($2).',
	'coll-mwserve_failed_title' => 'Serverfehler',
	'coll-mwserve_failed_msg' => 'Auf dem Renderer-Server ist ein Fehler aufgetreten: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Titel der Sammlung eingeben:',
	'coll-error_reponse' => 'Fehlermeldung vom Server',
	'coll-empty_collection' => 'Leere Sammlung',
	'coll-revision' => 'Version: %PARAM%',
	'coll-save_collection_title' => 'Sammlung speichern',
	'coll-save_collection_text' => 'Um diese Sammlung zu speichern, wähle einen Typ und gib einen Titel ein:',
	'coll-login_to_save' => 'Wenn du Sammlungen speichern möchtest, [[Special:UserLogin|melde dich bitte an oder erstelle ein Benutzerkonto]].',
	'coll-personal_collection_label' => 'Persönliche Sammlung:',
	'coll-community_collection_label' => 'Community-Sammlung:',
	'coll-save_collection' => 'Sammlung speichern',
	'coll-save_category' => 'Sammlungen werden in der Kategorie [[:Category:Sammlungen|Sammlungen]] gespeichert.',
	'coll-overwrite_title' => 'Seite vorhanden, überschreiben?',
	'coll-overwrite_text' => 'Eine Seite mit dem Namen [[:$1]] ist bereits vorhanden. Möchtest du sie durch deine Sammlung ersetzen?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nein',
	'coll-disable_collection_text' => '<a href="$1">Sammlung löschen und zur Hauptseite zurückkehren.</a>',
	'coll-load_overwrite_text' => 'Deine Sammlung enthält bereits Seiten.
Möchtest du die aktuelle Sammlung überschreiben, die neuen Seiten anhängen oder das Laden dieser Sammlung abbrechen?',
	'coll-overwrite' => 'Überschreiben',
	'coll-append' => 'Anhängen',
	'coll-cancel' => 'Abbrechen',
	'coll-limit_exceeded_title' => 'Sammlung zu groß',
	'coll-limit_exceeded_text' => 'Deine Sammlung ist zu groß. Es können keine Seiten mehr hinzugefügt werden.',
	'coll-rendering_title' => 'Beim Erstellen',
	'coll-rendering_text' => "'''Bitte habe Geduld, während das Dokument erstellt wird.'''

'''Fortschritt:''' $1 % $2.

Diese Seite sollte sich alle paar Sekunden von selbst aktualisieren.
Falls dieses jedoch nicht geschieht, so drücke bitte den „Aktualisieren“-Knopf (meist F5) deines Browsers.",
	'coll-rendering_status' => "'''Status:''' $1",
	'coll-rendering_article' => '  (Artikel: $1)',
	'coll-rendering_page' => '  (Seite: $1)',
	'coll-rendering_finished_title' => 'Fertig erstellt',
	'coll-rendering_finished_text' => "'''Die Datei wurde erfolgreich erstellt.'''
'''[$1 Klicke hier],''' um die Datei herunterzuladen.

Hinweise:
* Bist du mit dem Ergebnis nicht zufrieden? Möglichkeiten zur Verbesserung der Ausgabe findest du auf der [[{{MediaWiki:Coll-helppage}}|Hilfsseite über die Seitenkollektionen]].",
	'coll-notfound_title' => 'Sammlung nicht gefunden',
	'coll-notfound_text' => 'Deine Sammlung konnte nicht gefunden werden.',
	'coll-is_cached' => '<ul><li>Es ist eine zwischengespeicherte Version des Dokumentes vorhanden, so dass kein Rendern notwendig war. <a href="$1">Neurendern erzwingen.</a></li></ul>',
	'coll-excluded-templates' => '* Vorlagen aus der Kategorie [[:Category:$1|$1]] wurden ausgeschlossen.',
	'coll-blacklisted-templates' => '* Vorlagen von der Schwarzen Liste [[:$1]] wurden ausgeschlossen.',
	'coll-return_to_collection' => 'Zurück zu <a href="$1">$2</a>',
	'coll-book_title' => 'Druckausgabe bestellen',
	'coll-book_text' => "Du kannst bei den folgenden ''Print-on-Demand''-Partnern eine gedruckte Buchausgabe bestellen:",
	'coll-order_from_pp' => 'Bestelle Buch bei $1',
	'coll-about_pp' => 'Über $1',
	'coll-invalid_podpartner_title' => 'Ungültiger Print-on-Demand-Partner',
	'coll-invalid_podpartner_msg' => 'Die Angaben zum Print-on-Demand-Partner sind fehlerhaft. Bitte kontaktiere den MediaWiki-Administrator.',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Zurück zu [[:$1]]',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'coll-portlet_title' => 'Knigły napóraś',
	'coll-add_page' => 'Wikijowy bok pśidaś',
	'coll-remove_page' => 'Wikijowy bok wótwónoźeś',
	'coll-add_category' => 'Kategoriju pśidaś',
	'coll-empty' => 'prozny',
	'coll-n_pages' => '$1 {{PLURAL:$1|bok|boka|boki|bokow}}',
	'coll-download_as' => 'Ako $1 ześěgnuś',
	'coll-noscript_text' => '<h1>JavaScript jo trěbny!</h1>
<strong>Twój wobglědowak njepódpěrujo JavaScript abo JavaScript jo znjemóžnjony.
Toś ten bok njebuźo pšawje funkcioněrowaś, tak dłujko až JavaScript njejo zmóžnjony.</strong>',
	'coll-download' => 'Ześěgnuś',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Wótwónoźeś',
	'coll-move_up' => 'Górjej',
	'coll-move_down' => 'Dołoj',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Pódtitel:',
	'coll-contents' => 'Wopśimjeśe',
	'coll-create_chapter' => 'Nowy kapitel napóraś',
	'coll-sort_alphabetically' => 'Boki alfabetiski sortěrowaś',
	'coll-rename' => 'Pśemjeniś',
	'coll-new_chapter' => 'Zapódaj mě za nowy kapitel',
	'coll-rename_chapter' => 'Zapódaj nowe mě za kapitel',
	'coll-no_such_category' => 'Njejo taka kategorija',
	'coll-overwrite_title' => 'Bok eksistujo.
Pśepisaś?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Ně',
	'coll-overwrite' => 'Pśepisaś',
	'coll-cancel' => 'Pśetergnuś',
	'coll-return_to_collection' => '<p>Slědk k <a href="$1">$2</a></p>',
	'coll-book_title' => 'Wuśišćane knigły skazaś',
	'coll-about_pp' => 'Wó $1',
	'coll-invalid_podpartner_title' => 'Njepłaśiwy partner za śišć na pominanje',
	'coll-invalid_podpartner_msg' => 'Pódany partner za śišć na pominanje jo njepłaśiwy.
Skontaktuj pšosym swójogo administratora MediaWiki',
	'coll-license' => 'Licenca',
	'coll-return_to' => 'Slědk k [[:$1]]',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Geraki
 */
$messages['el'] = array(
	'coll-desc' => '[[Special:Collection|Συλλογή σελίδων]], παραγωγή PDF',
	'coll-collection' => 'Συλλογή',
	'coll-collections' => 'Συλλογές',
	'coll-portlet_title' => 'Δημιουργία βιβλίου',
	'coll-add_page' => 'Προσθήκη σελίδας wiki',
	'coll-remove_page' => 'Αφαίρεση σελίδας wiki',
	'coll-add_category' => 'Προσθήκη κατηγορίας',
	'coll-load_collection' => 'Φόρτωση συλλογής',
	'coll-show_collection' => 'Εμφάνιση συλλογής',
	'coll-empty' => 'κενή',
	'coll-n_pages' => '$1 {{PLURAL:$1|σελίδα|σελίδες}}',
	'coll-noscript_text' => '<h1>Χρειάζεται JavaScript!</h1>
<strong>Ο περιηγητής σας δεν υποστηρίζει JavaScript ή η JavaScript έχει απενεργοποιηθεί.
Αυτή η σελίδα δεν θα λειτουργεί κανονικά, εκτός και αν ενεργοποιηθεί η JavaScript.</strong>',
	'coll-intro_text' => 'Μπορείτε να συλλέξετε σελίδες, να παράγετε και να κατεβάσετε ένα αρχείο PDF από συλλογές σελίδων και να αποθηκεύσετε συλλογές σελίδων για περαιτέρω χρήση ή για να τις μοιραστήτε.

Δείτε την [[{{MediaWiki:Coll-helppage}}|σελίδα βοήθειας για συλλογές]] για περισσότερες πληροφορίες.',
	'coll-helppage' => 'Help:Συλλογές',
	'coll-my_collection' => 'Η Συλλογή μου',
	'coll-title' => 'Τίτλος:',
	'coll-subtitle' => 'Υπότιτλος:',
	'coll-yes' => 'Ναι',
	'coll-no' => 'Όχι',
);

/** Esperanto (Esperanto)
 * @author Amikeco
 * @author Yekrats
 */
$messages['eo'] = array(
	'coll-desc' => '[[Special:Collection|Kolekto-paĝoj]], generi PDF-ojn',
	'coll-collection' => 'Kolekto',
	'coll-collections' => 'Kolektoj',
	'coll-portlet_title' => 'Krei libron',
	'coll-add_page' => 'Aldoni vikipaĝon',
	'coll-remove_page' => 'Forigi vikipaĝon',
	'coll-add_category' => 'Aldoni kategorion',
	'coll-load_collection' => 'Alŝuti kolekton',
	'coll-show_collection' => 'Montri kolekton',
	'coll-help_collections' => 'Helpo pri kolektoj',
	'coll-empty' => 'malplena',
	'coll-n_pages' => '$1 {{PLURAL:$1|paĝo|paĝoj}}',
	'coll-download_as' => 'Elŝuti kiel $1',
	'coll-noscript_text' => '<h1>JavaScript-o estas deviga!<h1>
<strong>Via retumilo ne subtenas JavaScript-on aŭ JavaScript-o estis malŝaltita.
Ĉi tiu paĝo ne funkcius bone, ĝis JavaScript-o estas ŝaltita.</strong>',
	'coll-helppage' => 'Help:Kolektoj',
	'coll-too_big_cat' => 'La kategorio enhavas pli ol %PARAM% paĝojn, nur la unuaj %PARAM% paĝoj povas esti aldonitaj al via kolekto.
Ĉu vi volas aldoni ilin?',
	'coll-my_collection' => 'Mia kolekto',
	'coll-download_title' => 'Alŝutu kolekton kiel PDF-on',
	'coll-download_text' => 'Alŝuti aŭtomate generitan PDF-dosieron de via paĝkolekto, klaku la butonon.',
	'coll-download' => 'Elŝuto',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Forigi',
	'coll-move_to_top' => 'Movi superen',
	'coll-move_up' => 'Movi supren',
	'coll-move_down' => 'Movi suben',
	'coll-move_to_bottom' => 'Movi malsuperen',
	'coll-title' => 'Titolo:',
	'coll-subtitle' => 'Subtitolo:',
	'coll-contents' => 'Enhavaĵoj',
	'coll-create_chapter' => 'Kreu novan ĉapitron',
	'coll-sort_alphabetically' => 'Ordigi paĝojn laŭ alfabeto',
	'coll-clear_collection' => 'Forviŝi kolekton',
	'coll-clear_confirm' => 'Ĉu vi ja volas forviŝi vian kolekton?',
	'coll-rename' => 'Alinomigi',
	'coll-new_chapter' => 'Enigi nomon por nova ĉapitro',
	'coll-rename_chapter' => 'Enigi novan nomon por ĉapitro',
	'coll-no_such_category' => 'Nenia kategorio',
	'coll-notitle_title' => 'La titolo de la paĝo ne estis determinebla.',
	'coll-post_failed_title' => 'POST-peto malsukcesis',
	'coll-post_failed_msg' => 'La POST-peto por $1 malsukcesis ($2).',
	'coll-mwserve_failed_title' => 'Eraro kun montrada servilo',
	'coll-mwserve_failed_msg' => 'Eraro okazis en la montrada servilo: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Enigu titolon por kolekto:',
	'coll-error_reponse' => 'Erara respondo de servilo',
	'coll-empty_collection' => 'Malplena kolekto',
	'coll-revision' => 'Revizio: %PARAM%',
	'coll-save_collection_title' => 'Konservu Kolekton',
	'coll-personal_collection_label' => 'Propra kolekto:',
	'coll-community_collection_label' => 'Komuna kolekto:',
	'coll-save_collection' => 'Konservu Kolekton',
	'coll-save_category' => 'Kolektoj estas konservitaj en la kategorio [[:Category:Kolektoj|Kolektoj]].',
	'coll-overwrite_title' => 'Paĝo ekzistas. Ĉu anstataŭigi?',
	'coll-overwrite_text' => 'Paĝo kun la nomo [[:$1]] jam ekzistas.
Ĉu vi volas anstatŭigi ĝin kun via kolekto?',
	'coll-yes' => 'Jes',
	'coll-no' => 'Ne',
	'coll-disable_collection_text' => '<a href="$1">Klaku ĉi tie</a> por halti uzante kolektojn por nun.',
	'coll-overwrite' => 'Anstataŭigu',
	'coll-append' => 'Aldoni',
	'coll-cancel' => 'Nuligi',
	'coll-limit_exceeded_title' => 'Kolekto Tro Granda',
	'coll-limit_exceeded_text' => 'Via paĝa kolekto estas tro granda.
Neniom pluaj paĝoj ne povas esti aldonitaj.',
	'coll-rendering_title' => 'Generante',
	'coll-rendering_text' => "'''Bonvolu atendi dum la dokumento generiĝis.'''

'''Finita:''' $1% $2

Ĉi tiu paĝo aŭtomatike refreŝigu kelksekunde.
Se ne funkcias, bonvolu klaki refreŝigo-butonon de via retumilo.",
	'coll-rendering_status' => "'''Statuso:''' $1",
	'coll-rendering_article' => '  (vikipaĝo: $1)',
	'coll-rendering_page' => '  (paĝo: $1)',
	'coll-rendering_finished_title' => 'Generado finiĝis.',
	'coll-notfound_title' => 'Kolekto Ne Trovita',
	'coll-notfound_text' => 'Ne eblas trovi kolekto-paĝon.',
	'coll-return_to_collection' => '<p>Reiru al <a href="$1">$2</a></p>',
	'coll-book_title' => 'Mendi Eldonitan Libron',
	'coll-order_from_pp' => 'Mendi libron de $1',
	'coll-about_pp' => 'Pri $1',
	'coll-license' => 'Licenco',
	'coll-return_to' => 'Reiri al [[:$1]]',
);

/** Spanish (Español)
 * @author Jatrobat
 * @author Sanbec
 */
$messages['es'] = array(
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-yes' => 'Sí',
);

/** Persian (فارسی)
 * @author Huji
 * @author Komeil 4life
 * @author Spacebirdy
 */
$messages['fa'] = array(
	'coll-desc' => '[[Special:Collection|دسته‌بندی کردن صفحه‌ها]] و ایجاد پرونده‌های پی‌دی‌اف',
	'coll-collection' => 'مجموعه',
	'coll-collections' => 'مجموعه‌ها',
	'coll-portlet_title' => 'ایجاد کتاب',
	'coll-add_page' => 'افزودن این صفحه',
	'coll-remove_page' => 'حذف این صفحه',
	'coll-add_category' => 'اضافه کردن رده',
	'coll-load_collection' => 'بارکردن مجموعه',
	'coll-show_collection' => 'نمایش مجموعه',
	'coll-help_collections' => 'راهنمای مجموعه‌ها',
	'coll-empty' => 'خالی',
	'coll-n_pages' => '$1 {{PLURAL:$1|صفحه|صفحه}}',
	'coll-download_as' => 'بارگیری با عنوان $1',
	'coll-noscript_text' => '<h1>جاوااسکریپت لازم دارید!</h1>
<strong>مرورگر شما جاوا اسکریپت را پشتیبانی نمی‌کند یا جاوا اسکیریپت شما خاموش است.
این صفحه به طور صحیح عمل نخواهد کرد، مگر اینکه جاوااسکیریپت فعال شود.</strong>',
	'coll-intro_text' => 'شما می‌توانید صفحات را جمع آوری، ایجاد و به عنوان یک فایل پی‌دی‌اف دریافت کنید و همچنین مجموعه صفحات را برای کاربران بعدی ذخیره یا بارگذاری نمایید.

برای کسب اطلاعات بیشتر [[{{MediaWiki:Coll-helppage}}|.صفحه راهنما برای مجموعه‌ها]] را بخوانید.',
	'coll-helppage' => 'Help:مجموعه‌ها',
	'coll-too_big_cat' => 'این رده شامل بیش از %PARAM% صفحه است، تنها %PARAM% صفحهٔ نخست به مجموعهٔ شما افزوده خواهند شد
آیا می‌خواهید آن‌ها را بیفزایید؟',
	'coll-my_collection' => 'مجموعهٔ من',
	'coll-download_title' => 'دریافت مجموعه',
	'coll-download_text' => 'برای بارگیری یک سند ایجاد شده از مجموعهٔ صفحه‌های شما به طور خودکار، یک قالب برگزینید و دکمه را بزنید.',
	'coll-download' => 'دریافت',
	'coll-format_label' => 'قالب:',
	'coll-remove' => 'حذف',
	'coll-move_to_top' => 'حرکت به ابتدا',
	'coll-move_up' => 'حرکت به بالا',
	'coll-move_down' => 'حرکت به پایین',
	'coll-move_to_bottom' => 'حرکت به انتها',
	'coll-title' => 'عنوان:',
	'coll-subtitle' => 'زیرعنوان:',
	'coll-contents' => 'مندرجات',
	'coll-create_chapter' => 'ایجاد بخش جدید',
	'coll-sort_alphabetically' => 'مرتب‌سازی الفبایی صفحه‌ها',
	'coll-clear_collection' => 'پاک کردن مجموعه',
	'coll-clear_confirm' => 'آیا واقعاً می‌خواهید مجموعهٔ خود را پاک کنید؟',
	'coll-rename' => 'تغيير نام',
	'coll-new_chapter' => 'برای بخش جدید یک نام وارد کنید',
	'coll-rename_chapter' => 'برای بخش یک نام جدید وارد کنید',
	'coll-no_such_category' => 'چنین رده‌ای وجود ندارد',
	'coll-notitle_title' => 'عنوان صفحه قابل تشخیص نبود.',
	'coll-post_failed_title' => 'خطا در درخواست POST',
	'coll-post_failed_msg' => 'درخواست POST به $1 شکست خورد ($2).',
	'coll-mwserve_failed_title' => 'خطا در کارگزار ترجمه‌کننده',
	'coll-mwserve_failed_msg' => 'خطایی در کارگزار ترجمه‌کننده رخ داد: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'عنوانی برای مجموعه وارد کنید:',
	'coll-error_reponse' => 'پیغام خطا از طرف کارگزار',
	'coll-empty_collection' => 'مجموعه خالی است.',
	'coll-revision' => 'نسخه: %PARAM%',
	'coll-save_collection_title' => 'ذخیرهٔ مجموعه',
	'coll-save_collection_text' => 'برای ذخیره کردن این مجموعه برای کاربران بعدی، نوع مجموعه و عنوان صفحه آن را درج نمایید:',
	'coll-login_to_save' => 'اگر می‌خواهید مجموعه را برای کاربران بعدی ذخیره کنید، لطفا [[ویژه:UserLogin|وارد شوید یا یک حساب ایجاد کنید]].',
	'coll-personal_collection_label' => 'مجموعه شخصی:',
	'coll-community_collection_label' => 'مجموعه عمومی:',
	'coll-save_collection' => 'ذخیرهٔ مجموعه',
	'coll-save_category' => 'مجموعه‌ها در ردهٔ [[:Category:Collections|مجموعه‌ها]] ذخیره شده‌اند.',
	'coll-overwrite_title' => 'صفحه وجود دارد.
رونویسی شود؟',
	'coll-overwrite_text' => 'یک صفحه با نام [[:$1]] در حال حاضر موجود است.

آیا می‌خواهید این صفحه جایگزین صفحه موجود شود؟',
	'coll-yes' => 'بله',
	'coll-no' => 'خیر',
	'coll-disable_collection_text' => '<a href="$1">این‌جا کلیک کنید</a> تا استفاده از مجموعه‌ها را فعلاً متوقف کنید.',
	'coll-load_overwrite_text' => 'شما همینک صفحه‌هایی در مجموعهٔ خود دارید.
آیا می‌خواهید مجموعهٔ فعلی را رونویسی کنید، محتوای جدید را به آن بیفزایید یا بارگیری این مجموعه را متوقف کنید؟',
	'coll-overwrite' => 'رونویسی',
	'coll-append' => 'افزودن',
	'coll-cancel' => 'لغو',
	'coll-limit_exceeded_title' => 'مجموعه بیش از اندازه بزرگ است',
	'coll-limit_exceeded_text' => 'مجموعهٔ صفحه‌های شما بیش از اندازه بزرگ است است.
امکان افزودن صفحهٔ جدیدی را ندارید.',
	'coll-rendering_title' => 'در حال ترجمه دادن',
	'coll-rendering_text' => "'''لطفاً در مدتی که سند در حال ایجاد است شکیبا باشید.'''

'''پیشرفت:''' $1% $2

این صفحه باید به طور خودکار هر چند ثانیه یکبار تازه شود.
اگر این کار صورت نمی‌گیرد، لطفاً دکمهٔ تازه کردن صفحه را در مرورگر خود بزنید.",
	'coll-rendering_status' => "'''وضعیت:''' $1",
	'coll-rendering_article' => '  (صفحهٔ ویکی: $1)',
	'coll-rendering_page' => '  (صفحه: $1)',
	'coll-rendering_finished_title' => 'پایان ترجمه',
	'coll-rendering_finished_text' => "'''پروندهٔ سند ایجاد شده‌است.'''
'''[$1 این‌جا کلیک کنید]''' تا آن را به روی رایانهٔ خود بارگیری کنید.

نکته:
* از خروجی راضی نیستید؟ [[{{MediaWiki:Coll-helppage}}|صفحهٔ راهنمای مجموعه‌ها]] را ببینید تا از امکانات بهبود آن با خبر شوید.",
	'coll-notfound_title' => 'مجموعه پیدا نشد',
	'coll-notfound_text' => 'صفحهٔ مجموعه پیدا نشد.',
	'coll-is_cached' => '<ul><li>یک نسخهٔ کاشه‌گیری شده از این سند پیدا شد، به همین خاطر ترجمه لازم نبود. <a href="$1">ترجمهٔ اجباری.</a></li></ul>',
	'coll-excluded-templates' => '* از الگوهای رده [[:Category:$1|$1]] صرف نظر شد.',
	'coll-blacklisted-templates' => '* از الگوهای فهرست سیاه [[:$1]] صرف نظر شد.',
	'coll-return_to_collection' => '<p>بازگشت به <a href="$1">$2</a></p>',
	'coll-book_title' => 'سفارش کتاب چاپ شده',
	'coll-book_text' => 'شما می‌توانید با مراجعه به این شرکای چاپ-با-درخواست یک کتاب چاپ شده از مجموعه صفحه‌های خود سفارش دهید:',
	'coll-order_from_pp' => 'سفارش کتاب از $1',
	'coll-about_pp' => 'دربارهٔ $1',
	'coll-invalid_podpartner_title' => 'شریک چاپ-با-درخواست غیر مجاز',
	'coll-invalid_podpartner_msg' => 'شریک چاپ-با-درخواست تعیین شده غیر مجاز است.
لطفاً با مدیر مدیاویکی خود تماس بگیرید.',
	'coll-license' => 'اجازه‌نامه',
	'coll-return_to' => 'بازگشت به [[:$1]]',
);

/** Finnish (Suomi)
 * @author Cimon Avaro
 * @author Crt
 * @author Silvonen
 * @author Str4nd
 */
$messages['fi'] = array(
	'coll-collection' => 'Kokoelma',
	'coll-collections' => 'Kokoelmat',
	'coll-portlet_title' => 'Luo kirja',
	'coll-add_page' => 'Lisää wikisivu',
	'coll-remove_page' => 'Poista wikisivu',
	'coll-add_category' => 'Lisää luokkaan',
	'coll-load_collection' => 'Lataa kokoelma',
	'coll-show_collection' => 'Näytä kokoelma',
	'coll-help_collections' => 'Ohje kokoelmille',
	'coll-empty' => 'tyhjä',
	'coll-n_pages' => '$1 {{PLURAL:$1|sivu|sivua}}',
	'coll-download_as' => 'Lataa $1-tiedostona',
	'coll-helppage' => 'Help:Kokoelmat',
	'coll-download' => 'Lataa',
	'coll-contents' => 'Sisältö',
	'coll-sort_alphabetically' => 'Lajittele sivut aakkosjärjestykseen',
	'coll-save_collection_title' => 'Tallenna kokoelma',
	'coll-personal_collection_label' => 'Henkilökohtainen kokoelma:',
	'coll-overwrite_title' => 'Sivu on olemassa. Ylikirjoitetaanko?',
	'coll-yes' => 'Kyllä',
	'coll-no' => 'Ei',
	'coll-cancel' => 'Peruuta',
	'coll-license' => 'Lisenssi',
	'coll-return_to' => 'Palaa sivulle [[:$1]]',
);

/** French (Français)
 * @author Grondin
 * @author IAlex
 * @author Korrigan
 * @author McDutchie
 * @author Meithal
 * @author Verdy p
 */
$messages['fr'] = array(
	'coll-desc' => '[[Special:Collection|Compiler des pages]], générer des PDF',
	'coll-collection' => 'Compilation',
	'coll-collections' => 'Compilations',
	'coll-portlet_title' => 'Créer un livre',
	'coll-add_page' => 'Ajouter une page wiki',
	'coll-remove_page' => 'Enlever une page wiki',
	'coll-add_category' => 'Ajouter une catégorie',
	'coll-load_collection' => 'Charger une compilation',
	'coll-show_collection' => 'Afficher la compilation',
	'coll-help_collections' => 'Aide sur les compilations',
	'coll-empty' => 'vide',
	'coll-n_pages' => '$1 {{PLURAL:$1|page|pages}}',
	'coll-download_as' => 'Télécharger comme $1',
	'coll-noscript_text' => "<h1>Javascript est nécessaire !</h1>
<strong>Votre navigateur ne supporte pas Javascript ou bien l'a désactivé.
Cette page ne s'affichera pas correctement tant que javascript n'est pas activé.</strong>",
	'coll-intro_text' => "Vous pouvez rassembler des pages pour former une collection ; générer et télécharger des fichiers PDF de ces collections, ou les sauvegarder pour les partager ou les télécharger plus tard.

Voyez [[{{MediaWiki:Coll-helppage}}|la page d'aide sur les collections]] pour davantage d'informations.",
	'coll-helppage' => 'Help:Collections',
	'coll-too_big_cat' => 'La catégorie contient plus de %PARAM% pages, seul les %PARAM% premières pages seront ajoutées à votre collection.',
	'coll-my_collection' => 'Ma compilation',
	'coll-download_title' => 'Télécharger la compilation en PDF',
	'coll-download_text' => 'Pour télécharger un PDF généré automatiquement à partir de votre compilation, appuyez sur le bouton.',
	'coll-download' => 'Télécharger',
	'coll-format_label' => 'Format :',
	'coll-remove' => 'Enlever',
	'coll-move_to_top' => 'Déplacer tout en haut',
	'coll-move_up' => 'Monter',
	'coll-move_down' => 'Descendre',
	'coll-move_to_bottom' => 'Déplacer tout en bas',
	'coll-title' => 'Titre&nbsp;:',
	'coll-subtitle' => 'Sous-titre&nbsp;:',
	'coll-contents' => 'Contenu',
	'coll-create_chapter' => 'Créer un nouveau chapitre',
	'coll-sort_alphabetically' => 'Trier les pages par ordre alphabétique',
	'coll-clear_collection' => 'Vider la compilation',
	'coll-clear_confirm' => 'Voulez-vous vraiment vider votre compilation ?',
	'coll-rename' => 'Renommer',
	'coll-new_chapter' => 'Entrer le titre du nouveau chapitre',
	'coll-rename_chapter' => 'Entrer le nouveau titre de ce chapitre',
	'coll-no_such_category' => 'Catégorie introuvable',
	'coll-notitle_title' => 'Le titre de la page ne peut être déterminée.',
	'coll-post_failed_title' => 'Échec de la requête POST',
	'coll-post_failed_msg' => 'La requête POST vers $1 a échoué ($2).',
	'coll-mwserve_failed_title' => 'Erreur du serveur du rendu',
	'coll-mwserve_failed_msg' => 'Une erreur est survenue sur le serveur de rendu : <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Entrer un titre pour la compilation :',
	'coll-error_reponse' => 'Le serveur a rencontré une erreur',
	'coll-empty_collection' => 'Compilation vide',
	'coll-revision' => 'Version : %PARAM%',
	'coll-save_collection_title' => 'Sauvegarder la compilation',
	'coll-save_collection_text' => 'Pour sauvegarder la compilation, choisissez un type de compilation et entrez un titre de page :',
	'coll-login_to_save' => 'Si vous voulez sauvegarder votre compilation, veuillez [[Special:UserLogin|vous connecter ou vous créer un compte]].',
	'coll-personal_collection_label' => 'Compilation personnelle :',
	'coll-community_collection_label' => 'Compilation collective :',
	'coll-save_collection' => 'Sauvegarder la compilation',
	'coll-save_category' => 'Les collections sont sauvegardées dans la catégorie [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => "La page existe déjà. L'écraser ?",
	'coll-overwrite_text' => 'Une page nommée [[:$1]] existe déjà.
Voulez-vous la remplacer par votre compilation ?',
	'coll-yes' => 'Oui',
	'coll-no' => 'Non',
	'coll-disable_collection_text' => '<a href="$1">Cliquez ici</a> pour arrêter d’utiliser les collections dès maintenant.',
	'coll-load_overwrite_text' => 'Vous avez déjà des pages dans votre compilation.
Voulez vous écraser votre collection actuelle, y rajouter le contenu ou bien annuler le chargement de celle-ci ?',
	'coll-overwrite' => 'Écraser',
	'coll-append' => 'Ajouter',
	'coll-cancel' => 'Annuler',
	'coll-limit_exceeded_title' => 'Compilation trop grande',
	'coll-limit_exceeded_text' => 'Votre compilation est trop grande.
Aucune page ne peut être ajoutée.',
	'coll-rendering_title' => 'Rendu',
	'coll-rendering_text' => "'''Veuillez patienter pendant que le document est en cours de création.'''

Progression : '''$1 %'''.

Cette page devrait s’actualiser par intervalles réguliers de secondes.
Si tel n'était pas le cas, veuillez cliquer sur le bouton d’actualisation de votre navigateur.",
	'coll-rendering_status' => "'''Statut :''' $1",
	'coll-rendering_article' => '  (page wiki : $1)',
	'coll-rendering_page' => '  (page : $1)',
	'coll-rendering_finished_title' => 'Rendu terminé',
	'coll-rendering_finished_text' => "'''Le fichier document a été créé.'''
[$1 Cliquez ici] pour le télécharger sur votre ordinateur.

Notes :
* Non satisfait de la sortie ? Voyez [[{{MediaWiki:Coll-helppage}}|la page d’aide concernant les collections]] pour les possibilités de son amélioration.",
	'coll-notfound_title' => 'Compilation non trouvée',
	'coll-notfound_text' => 'Ne peut trouver la compilation.',
	'coll-is_cached' => '<ul><li>Une version en cache du document a été trouvée, aucun rendu n\'était ainsi nécessaire. <a href="$1">Forcer une nouvelle fois le rendu.</a></li></ul>',
	'coll-excluded-templates' => '* Certains modèles de la catégorie [[:Category:$1|$1]] ont été exclus.',
	'coll-blacklisted-templates' => '* Certains modèles de la liste noire ([[:$1]]) ont été exclus.',
	'coll-return_to_collection' => '<p>Revenir à la page <a href="$1">$2</a></p>',
	'coll-book_title' => 'Commander un livre imprimé',
	'coll-book_text' => "Vous pouvez commander un livre imprimé contenant votre collection d'articles en visitant une demande d'impression de la part de partenaires :",
	'coll-order_from_pp' => 'Commander le livre depuis $1',
	'coll-about_pp' => 'À propos de $1',
	'coll-invalid_podpartner_title' => 'Partenaire POD incorrect.',
	'coll-invalid_podpartner_msg' => 'Le partenaire POD indiqué est incorrect.
Veuillez contacter votre administrateur Mediawiki.',
	'coll-license' => 'Licence',
	'coll-return_to' => 'Retourner vers [[:$1]]',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'coll-yes' => 'Ja',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'coll-desc' => '[[Special:Collection|Coleccionar páxinas]], xerar ficheiros PDF',
	'coll-collection' => 'Colección',
	'coll-collections' => 'Coleccións',
	'coll-portlet_title' => 'Crear un libro',
	'coll-add_page' => 'Engadir unha páxina wiki',
	'coll-remove_page' => 'Eliminar unha páxina wiki',
	'coll-add_category' => 'Engadir categoría',
	'coll-load_collection' => 'Cargar colección',
	'coll-show_collection' => 'Mostrar colección',
	'coll-help_collections' => 'Axuda coas coleccións',
	'coll-empty' => 'baleiro',
	'coll-n_pages' => '$1 {{PLURAL:$1|páxina|páxinas}}',
	'coll-download_as' => 'Descargar como $1',
	'coll-noscript_text' => '<h1>Requírese o JavaScript!</h1>
<strong>O seu navegador non soporta o JavaScript ou o JavaScript foi deshabilitado.
Esta páxina non funcionará correctamente, polo menos ata que o JavaScript sexa habilitado.</strong>',
	'coll-intro_text' => 'Pode coleccionar páxinas, xerar e descargar ficheiros PDF das páxinas de coleccións e gardar as páxinas de coleccións para un uso posterior ou para compartilas.

Vexa a [[{{MediaWiki:Coll-helppage}}|páxina de axuda sobre as coleccións]] para máis información.',
	'coll-helppage' => 'Help:Coleccións',
	'coll-too_big_cat' => 'A categoría contén máis de %PARAM% páxinas; só as primeiras %PARAM% páxinas poden ser engadidas á súa colección.
Quere engadilas?',
	'coll-my_collection' => 'A miña colección',
	'coll-download_title' => 'Descargar a colección como arquivo PDF',
	'coll-download_text' => 'Para descargar un arquivo PDF xerado automaticamente da súa páxina de colección, faga clic no botón.',
	'coll-download' => 'Descargar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Eliminar',
	'coll-move_to_top' => 'Ir arriba',
	'coll-move_up' => 'Mover arriba',
	'coll-move_down' => 'Mover abaixo',
	'coll-move_to_bottom' => 'Ir abaixo',
	'coll-title' => 'Título:',
	'coll-subtitle' => 'Subtítulo:',
	'coll-contents' => 'Contidos',
	'coll-create_chapter' => 'Crear un novo capítulo',
	'coll-sort_alphabetically' => 'Ordenar as páxinas alfabeticamente',
	'coll-clear_collection' => 'Borrar colección',
	'coll-clear_confirm' => 'Seguro que desexa eliminar a súa colección?',
	'coll-rename' => 'Renomear',
	'coll-new_chapter' => 'Insira un nome para o novo capítulo',
	'coll-rename_chapter' => 'Insira un novo nome para o capítulo',
	'coll-no_such_category' => 'Non existe tal categoría',
	'coll-notitle_title' => 'O título da páxina non pode ser determinado.',
	'coll-post_failed_title' => 'A solicitude do POST fallou',
	'coll-post_failed_msg' => 'Fallou o POST solicitado a $1 ($2).',
	'coll-mwserve_failed_title' => 'Erro no servidor de renderización',
	'coll-mwserve_failed_msg' => 'Produciuse un erro no servidor de renderización: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Escriba un título para a colección:',
	'coll-error_reponse' => 'Ocorreu un erro no servidor',
	'coll-empty_collection' => 'Colección baleira',
	'coll-revision' => 'Revisión: %PARAM%',
	'coll-save_collection_title' => 'Gardar a colección',
	'coll-save_collection_text' => 'Para gardar esta colección para un uso posterior escolla un tipo de colección e insira un título para a páxina:',
	'coll-login_to_save' => 'Se quere gardar coleccións para un uso posterior, por favor, [[Special:UserLogin|acceda ao sistema ou cree unha conta]].',
	'coll-personal_collection_label' => 'Colección persoal:',
	'coll-community_collection_label' => 'Colección da comunidade:',
	'coll-save_collection' => 'Gardar a colección',
	'coll-save_category' => 'As coleccións son gardadas na categoría [[:Category:Collections|Coleccións]].',
	'coll-overwrite_title' => 'A páxina existe. Desexa sobreescribir?',
	'coll-overwrite_text' => 'Xa existe unha páxina chamada [[:$1]].
Quere reemprazala coa súa colección?',
	'coll-yes' => 'Si',
	'coll-no' => 'Non',
	'coll-disable_collection_text' => '<a href="$1">Prema aquí</a> para parar de usar coleccións polo de agora.',
	'coll-load_overwrite_text' => 'Xa ten algunhas páxinas na súa colección.
Desexa sobreescribir a súa colección actual, adxuntar o novo contido ou cancelar a carga desta colección?',
	'coll-overwrite' => 'Sobreescribir',
	'coll-append' => 'Adxuntar',
	'coll-cancel' => 'Cancelar',
	'coll-limit_exceeded_title' => 'Colección moi grande',
	'coll-limit_exceeded_text' => 'A súa páxina de colección é moi grande.
Non se poden engadir máis páxinas.',
	'coll-rendering_title' => 'Renderizando',
	'coll-rendering_text' => "'''Por favor, agarde mentres o documento é xerado.'''

'''Progreso:''' \$1% \$2

Esta páxina debería refrescarse cada poucos segundos.
Se non vai, por favor, prema no botón \"Refrescar\" do seu navegador.",
	'coll-rendering_finished_title' => 'Finalizou a renderización',
	'coll-rendering_finished_text' => "'''O documento foi xerado.'''
'''[$1 Prema aquí]''' para descargalo no seu ordenador.

Notas:
*Non está satisfeito co ficheiro obtido? Vexa [[{{MediaWiki:Coll-helppage}}|a páxina de axuda acerca das coleccións]] para comprobar as posibilidades de melloralo.",
	'coll-notfound_title' => 'Non se pode atopar a colección',
	'coll-notfound_text' => 'Non se pode atopar a páxina da colección.',
	'coll-is_cached' => '<ul><li>Atopouse unha versión do documento na memoria caché, polo que non vai ser necesaria a renderización. <a href="$1">Forzala.</a></li></ul>',
	'coll-excluded-templates' => '* O modelos que están na categoría "[[:Category:$1|$1]]" foron excluídos.',
	'coll-blacklisted-templates' => '* O modelos da lista negra "[[:$1]]" foron excluídos.',
	'coll-return_to_collection' => '<p>Voltar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Encargar un libro impreso',
	'coll-book_text' => 'Pode encargar un libro impreso que conteña a súa páxina de colección visitando un dos seguintes compañeiros de solicitudes de impresión:',
	'coll-order_from_pp' => 'Encargar un libro a $1',
	'coll-about_pp' => 'Acerca de $1',
	'coll-invalid_podpartner_title' => 'Compañeiro de solicitudes de impresión (POD) inválido',
	'coll-invalid_podpartner_msg' => 'O compañeiro de solicitudes de impresión (POD) indicado é inválido.
Por favor, contacte co seu administrador MediaWiki.',
	'coll-license' => 'Licenza',
	'coll-return_to' => 'Voltar a "[[:$1]]"',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'coll-empty' => 'κενή',
	'coll-subtitle' => 'Ὑποεπιγραφή:',
	'coll-contents' => 'Περιεχόμενα',
	'coll-rendering_title' => 'Ἀπόδοσις',
	'coll-license' => 'Ἄδεια',
);

/** Swiss German (Alemannisch)
 * @author J. 'mach' wust
 */
$messages['gsw'] = array(
	'coll-title' => 'Titel:',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'coll-collection' => 'Çhaglym',
	'coll-collections' => 'Çhaglymyn',
	'coll-portlet_title' => 'My haglym',
	'coll-empty' => 'follym',
	'coll-helppage' => 'Cooney:Çhaglymyn',
	'coll-my_collection' => 'My haglym',
	'coll-title' => 'Ard-ennym:',
	'coll-contents' => 'Cummal',
	'coll-create_chapter' => 'Croo cabdil noa',
	'coll-sort_alphabetically' => 'Sorçhaghey duillagyn rere lettyr',
	'coll-personal_collection_label' => 'Çhaglym persoonagh:',
	'coll-community_collection_label' => 'Çhaglym y chohionnal:',
	'coll-yes' => 'Ta',
	'coll-no' => 'Cha',
	'coll-cancel' => 'Dolley magh',
	'coll-about_pp' => 'Mychione $1',
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
 * @author Rotem Liss
 */
$messages['he'] = array(
	'coll-desc' => '[[Special:Collection|איסוף דפים]], יצירת קובצי PDF',
	'coll-collection' => 'אוסף',
	'coll-collections' => 'אוספים',
	'coll-portlet_title' => 'יצירת ספר',
	'coll-add_page' => 'הוספת דף ויקי',
	'coll-remove_page' => 'הסרת דף ויקי',
	'coll-add_category' => 'הוספת קטגוריה',
	'coll-load_collection' => 'פתיחת אוסף',
	'coll-show_collection' => 'הצגת אוסף',
	'coll-help_collections' => 'עזרה לאוספים',
	'coll-empty' => 'ריק',
	'coll-n_pages' => '{{PLURAL:$1|דף אחד|$1 דפים}}',
	'coll-download_as' => 'הורדה בפורמט $1',
	'coll-noscript_text' => '<h1>JavaScript נדרש!</h1>
<strong>הדפדפן שלכם אינו תומך ב־JavaScript או שביטלתם את JavaScript בדפדפן זה.
דף זה לא יעבוד כדרוש, אלא אם כן JavaScript יופעל.</strong>',
	'coll-intro_text' => 'באפשרותכם לאסוף דפים, ליצור ולהוריד קובץ PDF מאוספי דפים, ולשמור אוספי דפים כדי להשתמש בהם מאוחר יותר או כדי לשתף אותם עם משתמשים אחרים.

ראו את [[{{MediaWiki:Coll-helppage}}|דף העזרה על אוספים]] למידע נוסף.',
	'coll-helppage' => 'Help:אוספים',
	'coll-too_big_cat' => 'קטגוריה זו כוללת יותר מ־%PARAM% דפים, רק %PARAM% הדפים הראשונים ייתווספו לאוסף.
האם ברצונכם להוסיף אותם?',
	'coll-my_collection' => 'האוסף שלי',
	'coll-download_title' => 'הורדת האוסף',
	'coll-download_text' => 'כדי להוריד מסמך שנוצר אוטומטית של אוסף הדפים שלכם, אנא בחרו פורמט ולחצו על הכפתור.',
	'coll-download' => 'הורדה',
	'coll-format_label' => 'פורמט:',
	'coll-remove' => 'הסרה',
	'coll-move_to_top' => 'העברה לראש',
	'coll-move_up' => 'העברה למעלה',
	'coll-move_down' => 'העברה למטה',
	'coll-move_to_bottom' => 'העברה לתחתית',
	'coll-title' => 'כותרת:',
	'coll-subtitle' => 'כותרת משנה:',
	'coll-contents' => 'תכנים',
	'coll-create_chapter' => 'יצירת פרק חדש',
	'coll-sort_alphabetically' => 'מיון דפים בסדר אפלביתי',
	'coll-clear_collection' => 'ניקוי האוסף',
	'coll-clear_confirm' => 'האם אתם בטוחים שברצונכם לנקות את אוסף הדפים שלכם?',
	'coll-rename' => 'שינוי שם',
	'coll-new_chapter' => 'הקלידו שם לפרק החדש',
	'coll-rename_chapter' => 'הקלידו שם חדש לפרק',
	'coll-no_such_category' => 'אין קטגוריה כזו',
	'coll-notitle_title' => 'לא ניתן היה לבדוק מהי כותרת הדף.',
	'coll-post_failed_title' => 'בקשת ה־POST נכשלה',
	'coll-post_failed_msg' => 'בקשת ה־POST ל־$1 נכשלה ($2).',
	'coll-mwserve_failed_title' => 'שגיאה בשרת היצירה',
	'coll-mwserve_failed_msg' => 'אירעה שגיאה בשרת יצירת המסמכים: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'הקלידו כותרת לאוסף:',
	'coll-error_reponse' => 'שגיאה בשרת',
	'coll-empty_collection' => 'אוסף ריק',
	'coll-revision' => 'גרסה: %PARAM%',
	'coll-save_collection_title' => 'שמירת האוסף',
	'coll-save_collection_text' => 'כדי לשמור את האוסף הזה לשימוש מאוחר יותר, אנא בחרו סוג אוסף והקלידו כותרת של דף:',
	'coll-login_to_save' => 'אם ברצונכם לשמור אוספים לשימוש מאוחר יותר, אנא [[Special:UserLogin|היכנסו לחשבון או צרו אחד]].',
	'coll-personal_collection_label' => 'אוסף פרטי:',
	'coll-community_collection_label' => 'אוסף קהילתי:',
	'coll-save_collection' => 'שמירת האוסף',
	'coll-save_category' => 'אוספים נשמרים בקטגוריה [[:Category:אוספים|אוספים]].',
	'coll-overwrite_title' => 'הדף כבר קיים.
האם לדרוס אותו?',
	'coll-overwrite_text' => 'דף בשם [[:$1]] כבר קיים.
האם ברצונכם להחליף אותו עם האוסף שלכם?',
	'coll-yes' => 'כן',
	'coll-no' => 'לא',
	'coll-disable_collection_text' => '<a href="$1">לחצו כאן</a> כדי להפסיק להשתמש באוספים לבינתיים.',
	'coll-load_overwrite_text' => 'כבר יש לכם מספר דפים באוסף שלכם.
האם ברצונכם לדרוס את האוסף הנוכחי שלכם, להוסיף את התוכן החדש או לבטל את פתיחת האוסף הזה?',
	'coll-overwrite' => 'דריסה',
	'coll-append' => 'הוספת התוכן',
	'coll-cancel' => 'ביטול',
	'coll-limit_exceeded_title' => 'האוסף גדול מדי',
	'coll-limit_exceeded_text' => 'אוסף הדפים שלכם גדול מדי.
לא ניתן להוסיף דפים נוספים.',
	'coll-rendering_title' => 'ביצירה',
	'coll-rendering_text' => "<p><strong>אנא המתינו בעת יצירת המסמך.</strong></p>

<p><strong>התקדמות התהליך:</strong> <span id=\"renderingProgress\">$1</span>% <span id=\"renderingStatus\">$2</span></p>

<p>הדפדפן אמור לבצע ריענון אוטומטי לדף זה כל מספר שניות.
אם זה לא עובד, אנא לחצו על כפתור הריענון בדפדפן שלכם.</p>",
	'coll-rendering_status' => "<strong>מצב:</strong> $1",
	'coll-rendering_article' => ' (דף תוכן: $1)',
	'coll-rendering_page' => ' (דף: $1)',
	'coll-rendering_finished_title' => 'היצירה הסתיימה',
	'coll-rendering_finished_text' => "'''קובץ המסמך נוצר.'''
'''[$1 לחצו כאן]''' כדי להוריד אותו למחשב.

הערות:
* אינכם מרוצים מהפלט? ב[[{{MediaWiki:Coll-helppage}}|דף העזרה על אוספים]] תוכלו למצוא אפשרויות לשיפורו.",
	'coll-notfound_title' => 'האוסף לא נמצא',
	'coll-notfound_text' => 'לא ניתן למצוא את דף האוסף.',
	'coll-is_cached' => '<ul><li>גרסה שמורה של המסמך נמצאה, כך שאין צורך ביצירתו. <a href="$1">יצירה מחדש.</a></li></ul>',
	'coll-excluded-templates' => '* תבניות בקטגוריה [[:Category:$1|$1]] אינן כלולות.',
	'coll-blacklisted-templates' => '* תבניות ברשימה השחורה [[:$1]] אינן כלולות.',
	'coll-return_to_collection' => '<p>חזרה ל<a href="$1">$2</a></p>',
	'coll-book_title' => 'הזמנת ספר מודפס',
	'coll-book_text' => 'באפשרותכם להזמין ספר מודפס הכולל את אוסף הדפים שלכם באמצעות ביקור באחד משירותי ההדפסה לפי דרישה:',
	'coll-order_from_pp' => 'הזמנת ספר מ־$1',
	'coll-about_pp' => 'אודות $1',
	'coll-invalid_podpartner_title' => 'שירות שגוי',
	'coll-invalid_podpartner_msg' => 'שירות ההדפסה לפי דרישה שהוזן שגוי.
אנא צרו קשר עם מנהל של מדיה־ויקי.',
	'coll-license' => 'רישיון',
	'coll-return_to' => 'חזרה ל[[:$1]]',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'coll-desc' => '[[Special:Collection|पन्ने जमा करें]], पीडीएफ बनायें',
	'coll-collection' => 'कलेक्शन',
	'coll-collections' => 'कलेक्शन',
	'coll-portlet_title' => 'मेरा कलेक्शन',
	'coll-add_page' => 'पन्ना बढायें',
	'coll-remove_page' => 'पन्ना हटायें',
	'coll-add_category' => 'श्रेणी बढायें',
	'coll-load_collection' => 'कलेक्शन लोड करें',
	'coll-show_collection' => 'कलेक्शन दर्शायें',
	'coll-help_collections' => 'कलेक्शन सहायता',
	'coll-empty' => 'खाली',
	'coll-helppage' => 'Help:कलेक्शन',
	'coll-my_collection' => 'मेरे कलेक्शन',
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
	'coll-clear_collection' => 'कलेक्शन खाली करें',
	'coll-clear_confirm' => 'क्या आप सचमुच आपका कलेक्शन खाली करना चाहतें हैं?',
	'coll-rename' => 'नाम बदलें',
	'coll-new_chapter' => 'नये अध्याय के लिये नाम दें',
	'coll-rename_chapter' => 'नये अध्याय के लिये नाम दें',
	'coll-no_such_category' => 'ऐसी श्रेणी नहीं हैं',
	'coll-notitle_title' => 'इस पन्ने का शीर्षक निश्चित नहीं कर पा रहें हैं।',
	'coll-post_failed_title' => 'POST माँग पूरी नहीं हुई हैं',
	'coll-post_failed_msg' => 'POST माँग पूरी नहीं हुई हैं ($2)',
	'coll-enter_title' => 'कलेक्शन का शीर्षक दें:',
	'coll-error_reponse' => 'सर्वरसे गलत रिस्पॉन्स मिला हैं',
	'coll-empty_collection' => 'खाली कलेक्शन',
	'coll-revision' => 'अवतरण: %PARAM%',
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
 */
$messages['hr'] = array(
	'coll-desc' => '[[Special:Collection|Sakupi stranice]], izradi PDF',
	'coll-collection' => 'Zbirka',
	'coll-collections' => 'Zbirke',
	'coll-portlet_title' => 'Napravi knjigu',
	'coll-add_page' => 'Dodaj wiki stranicu',
	'coll-remove_page' => 'Ukloni wiki stranicu',
	'coll-add_category' => 'Dodaj kategoriju',
	'coll-load_collection' => 'Učitaj zbirku',
	'coll-show_collection' => 'Pokaži zbirku',
	'coll-help_collections' => 'Zbirke pomoć',
	'coll-empty' => 'prazno',
	'coll-n_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'coll-download_as' => 'Preuzmi kao $1',
	'coll-noscript_text' => '<h1>Potreban je JavaScript!</h1>
<strong>Vaš preglednik nema podršku za JavaScript ili je isključena. Ova stranica neće raditi ispravno, ako JavaScript nije omogućen.</strong>',
	'coll-intro_text' => 'Možete skupiti stranice, napraviti i preuzeti PDF datoteku iz zbirke stranica i spremiti zbirku za kasniju upotrebu ili razmjenu.

vidi [[{{MediaWiki:Coll-helppage}}|stranicu za pomoć o zbirkama]] za više obavijesti.',
	'coll-helppage' => 'Pomoć:Zbirke',
	'coll-too_big_cat' => 'Ova kategorija sadrži više od %PARAM% stranica, samo prvih %PARAM% stranica može biti dodano u vašu zbirku.
Želite ih dodati?',
	'coll-my_collection' => 'Moja zbirka',
	'coll-download_title' => 'Preuzmi zbirku',
	'coll-download_text' => 'Za preuzimanje automatski napravljenog dokumenta sa stranicama iz vaše zbirke, odaberite format i kliknite na tipku.',
	'coll-download' => 'Preuzmi',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ukloni',
	'coll-move_to_top' => 'Premjesti na vrh',
	'coll-move_up' => 'Premjesti gore',
	'coll-move_down' => 'Premjesti dolje',
	'coll-move_to_bottom' => 'Premjesti na dno',
	'coll-title' => 'Naslov:',
	'coll-subtitle' => 'Podnaslov:',
	'coll-contents' => 'Sadržaj',
	'coll-create_chapter' => 'Napravi novo poglavlje',
	'coll-sort_alphabetically' => 'Rasporedi stranice abecedno',
	'coll-clear_collection' => 'Očisti zbirku',
	'coll-clear_confirm' => 'Dali stvarno želite očistiti svoju zbirku?',
	'coll-rename' => 'Preimenuj',
	'coll-new_chapter' => 'Upišite ime za novo poglavlje',
	'coll-rename_chapter' => 'Upišite novo ime za poglavlje',
	'coll-no_such_category' => 'Nema takve kategorije',
	'coll-notitle_title' => 'Naslov stranice nije mogao biti određen',
	'coll-post_failed_title' => 'POST zahtjev je neuspješan',
	'coll-post_failed_msg' => 'POST zahtjev za $1 je neuspješan ($2).',
	'coll-mwserve_failed_title' => 'Greška na serveru za izvođenje zahtjeva',
	'coll-mwserve_failed_msg' => 'Dogodila se greška na serveru za izvođenje zahtijeva: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Upišite naslov za zbirku:',
	'coll-error_reponse' => 'Greška u odgovoru sa servera',
	'coll-empty_collection' => 'Prazna zbirka',
	'coll-revision' => 'Izmjena: %PARAM%',
	'coll-save_collection_title' => 'Spremi zbirku',
	'coll-save_collection_text' => 'Ako želite spremiti zbirku za kasniju upotrebu, odaberite tip zbirke i upišite naslov stranice:',
	'coll-login_to_save' => 'Ako želite spremiti zbirku za kasniju upotrebu, molimo [[Special:UserLogin|prijavite se ili napravite suradnički račun]].',
	'coll-personal_collection_label' => 'Osobna zbirka:',
	'coll-community_collection_label' => 'Zajednička zbirka:',
	'coll-save_collection' => 'Spremi zbirku',
	'coll-save_category' => 'Zbirke su spremljene u kategoriji [[:Category:Collections|Zbirki]].',
	'coll-overwrite_title' => 'Stranica postoji.
Prepisati preko?',
	'coll-overwrite_text' => 'Stranica s nazivom [[:$1]] već postoji.
Želite li da bude zamijenjena s vašom zbirkom?',
	'coll-yes' => 'Da',
	'coll-no' => 'Ne',
	'coll-disable_collection_text' => '<a href="$1">Kliknite ovdje</a> za prestanak korištenja zbirki za sada.',
	'coll-load_overwrite_text' => 'Već imate neke stranice u svojoj zbirci.
Želite li prepisati svoju trenutačnu zbirku novom, samo dodati novi sadržaj ili zaustaviti učitavanje ove zbirke?',
	'coll-overwrite' => 'Prepisati preko',
	'coll-append' => 'Nadodaj',
	'coll-cancel' => 'Zaustavi',
	'coll-limit_exceeded_title' => 'Zbirka je prevelika',
	'coll-limit_exceeded_text' => 'Vaša zbirka stranica je prevelika.
Nove stranice ne mogu biti dodane.',
	'coll-rendering_title' => 'Izvođenje',
	'coll-rendering_text' => "'''Molimo pričekajte dok se dokument radi.'''

'''Napredovanje:''' $1% $2

Ova stranice bi se trebala automatski osvježiti svakih par sekundi.
Ako ovo ne radi, molimo pritisnite tipku za osvježavanje u svom pregledniku.",
	'coll-rendering_status' => "'''Stanje:''' $1",
	'coll-rendering_article' => '  (wiki stranica: $1)',
	'coll-rendering_page' => '  (stranica: $1)',
	'coll-rendering_finished_title' => 'Izvođenje završeno',
	'coll-rendering_finished_text' => "'''Datoteka je napravljena.'''
'''[$1 Kliknite ovdje]'''za preuzimanje datoteke na vaše računalo.

Napomene:
* Niste zadovoljni dobivenim rezultatom? Pogledajte [[{{MediaWiki:Coll-helppage}}|stranicu za pomoć o zbirkama]] za mogućnosti poboljšanja.",
	'coll-notfound_title' => 'Zbirka nije pronađena',
	'coll-notfound_text' => 'Stranica zbirke se ne može pronaći.',
	'coll-is_cached' => '<ul><li>Pronađena je verzija datoteke u pričuvnoj memoriji, stoga izvođenje datoteke nije potrebno.. <a href="$1">Zahtijevaj ponovno izvođenje.</a></li></ul>',
	'coll-excluded-templates' => '* Predlošci u kategoriji [[:Category:$1|$1]] su ostali isključeni.',
	'coll-blacklisted-templates' => '* Predlošci na crnoj listi [[:$1]] su ostali isključeni.',
	'coll-return_to_collection' => '<p>Vrati se na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Naručite ispisanu knjigu',
	'coll-book_text' => 'Možete naručiti ispisanu knjigu koja sadrži stranice iz vaše zbirke, posjetite neki od slijedećih partnera za ispisivanje na zahtjev (POD):',
	'coll-order_from_pp' => 'Naručite knjigu od $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Neispravan POD partner',
	'coll-invalid_podpartner_msg' => 'Ponuđeni POD partner nije valjan.
Molimo kontaktirajte svog MediaWiki administratora.',
	'coll-license' => 'Licencija',
	'coll-return_to' => 'Vrati se na [[:$1]]',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'coll-desc' => '[[Special:Collection|Strony zběrać]], PDF wutworić',
	'coll-collection' => 'Zběrka',
	'coll-collections' => 'Zběrki',
	'coll-portlet_title' => 'Knihu wutworić',
	'coll-add_page' => 'Wikijowu stronu přidać',
	'coll-remove_page' => 'Wikijowu stronu wotstronić',
	'coll-add_category' => 'Kategoriju přidać',
	'coll-load_collection' => 'Zběrku začitać',
	'coll-show_collection' => 'Zběrku pokazać',
	'coll-help_collections' => 'Pomoc zběrkow',
	'coll-empty' => 'prózdna',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|stronje|strony|stronow}}',
	'coll-download_as' => 'Jako $1 sćahnyć',
	'coll-noscript_text' => '<h1>JavaScript je trěbny!</h1>
<strong>Twój wobhladowak njepodpěruje JavaScript abo JavaScript je wupinjeny.
Tuta strona njebudźe prawje fungować, doniž JavaScript zmóžnjeny njeje.</strong>',
	'coll-helppage' => 'Help:Zběrki',
	'coll-too_big_cat' => 'Kategorija wobsahuje wjace hač %PARAM% stronow, jenož prěnje %PARAM% strony dadźa so k twojej zběrce přidać.
Chceš je přidać?',
	'coll-my_collection' => 'Moja zběrka',
	'coll-download_title' => 'Zběrku jako PDF sćahnyć',
	'coll-download_text' => 'Zo by awtomatisce wutworjeny dokument twojeje zběrki stronow sćahnył, wubjer format a klikń na tłóčatko.',
	'coll-download' => 'Sćahnyć',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Wotstronić',
	'coll-move_to_top' => 'Cyle horje přesunyć',
	'coll-move_up' => 'Horje přesunyć',
	'coll-move_down' => 'Dele přesunyć',
	'coll-move_to_bottom' => 'Cyle dele přesunyć',
	'coll-title' => 'Titul:',
	'coll-subtitle' => 'Podtitul:',
	'coll-contents' => 'Wobsah',
	'coll-create_chapter' => 'Nowy kapitl wutworić',
	'coll-sort_alphabetically' => 'Strony alfabetisce sortěrować',
	'coll-clear_collection' => 'Zběrku wuprózdnić',
	'coll-clear_confirm' => 'Chceš swoju zběrku woprawdźe wuprózdnić?',
	'coll-rename' => 'Přemjenować',
	'coll-new_chapter' => 'Zapodaj mjeno za nowy kapitl',
	'coll-rename_chapter' => 'Zapodaj nowe mjeno za kapitl',
	'coll-no_such_category' => 'Žana tajka kategorija',
	'coll-notitle_title' => 'Titul strony njeda so zwěsćić.',
	'coll-enter_title' => 'Zapodaj titul za zběrku:',
	'coll-error_reponse' => 'Serwer je zmylk zdźělił',
	'coll-empty_collection' => 'Prózdna zběrka',
	'coll-revision' => 'Wersija: %PARAM%',
	'coll-save_collection_title' => 'Zběrku składować',
	'coll-login_to_save' => 'Jeli chceš zběrki za pozdźiše wužiwanje składować, [[Special:UserLogin|přizjew so prošu abo wutwor konto]].',
	'coll-personal_collection_label' => 'Wosobinska zběrka:',
	'coll-save_collection' => 'Zběrku składować',
	'coll-save_category' => 'Zběrki składuja so w kategoriji [[:Category:Zběrki|Zběrki]].',
	'coll-overwrite_title' => 'Strona eksistuje. Přepisać?',
	'coll-overwrite_text' => 'Strona z mjenom [[:$1]] hižo eksistuje.
Chceš ju přez swoju zběrku narunać?',
	'coll-yes' => 'Haj',
	'coll-no' => 'Ně',
	'coll-overwrite' => 'Přepisać',
	'coll-append' => 'Připójsnyć',
	'coll-cancel' => 'Přetorhnyć',
	'coll-limit_exceeded_title' => 'Zběrka přewulka',
	'coll-limit_exceeded_text' => 'Twoja zběrka stronow je přewulka.
Njadadźa so hižo žane strony přidać.',
	'coll-notfound_title' => 'zběrka njenamakana',
	'coll-notfound_text' => 'Strona zběrki njebu namakana.',
	'coll-excluded-templates' => '* Předłohi w kategoriji [[:Category:$1|$1]] buchu wuzamknjene.',
	'coll-blacklisted-templates' => '* Předłohi na čornej lisćinje [[:$1]] buchu wuzamknjene.',
	'coll-return_to_collection' => '<p>Wróćo k <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ćišćanu knihu skazać',
	'coll-order_from_pp' => 'Knihu pola $1 skazać',
	'coll-about_pp' => 'Wo $1',
	'coll-invalid_podpartner_title' => 'Njepłaćiwy partner za ćišć na žadanje',
	'coll-invalid_podpartner_msg' => 'Podaty partner za ćišć na žadanje je njepłaćiwy.
Skontaktuj prošu swojeho administratora MediaWiki.',
	'coll-license' => 'Licenca',
	'coll-return_to' => 'Wróćo k [[:$1]]',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'coll-title' => 'Cím:',
	'coll-yes' => 'Igen',
	'coll-no' => 'Nem',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'coll-desc' => '[[Special:Collection|Paginas de collection]], generar files PDF',
	'coll-collection' => 'Collection',
	'coll-collections' => 'Collectiones',
	'coll-portlet_title' => 'Crear un libro',
	'coll-add_page' => 'Adder un pagina wiki',
	'coll-remove_page' => 'Remover pagina wiki',
	'coll-add_category' => 'Adder categoria',
	'coll-load_collection' => 'Cargar collection',
	'coll-show_collection' => 'Monstrar collection',
	'coll-help_collections' => 'Adjuta super le collectiones',
	'coll-empty' => 'vacue',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-download_as' => 'Discargar como $1',
	'coll-noscript_text' => '<h1>JavaScript es requirite!</h1>
<strong>Tu navigator non supporta JavaScript o JavaScript ha essite disactivate.
Iste pagina non functionara correctemente si JavaScript non es activate.</strong>',
	'coll-intro_text' => 'Tu pote colliger paginas, generar e discargar un file PDF de collectiones de paginas, e immagazinar le collectiones de paginas pro uso posterior o pro excambiar los con altere personas.

Vide le [[{{MediaWiki:Coll-helppage}}|pagina de adjuta super le collectiones]] pro ulterior informationes.',
	'coll-helppage' => 'Help:Collectiones',
	'coll-too_big_cat' => 'Le categoria contine plus de %PARAM% paginas. Solmente le prime %PARAM% paginas pote esser addite a tu collection.
Esque tu vole adder los?',
	'coll-my_collection' => 'Mi collection',
	'coll-download_title' => 'Discargar collection',
	'coll-download_text' => 'Pro discargar un documento automaticamente generate de tu collection de paginas, selige un formato e clicca super le button.',
	'coll-download' => 'Discargar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Remover',
	'coll-move_to_top' => 'Displaciar al initio',
	'coll-move_up' => 'Displaciar in alto',
	'coll-move_down' => 'Displaciar a basso',
	'coll-move_to_bottom' => 'Displaciar al fin',
	'coll-title' => 'Titulo:',
	'coll-subtitle' => 'Subtitulo:',
	'coll-contents' => 'Contento',
	'coll-create_chapter' => 'Crear nove capitulo',
	'coll-sort_alphabetically' => 'Ordinar paginas alphabeticamente',
	'coll-clear_collection' => 'Rader collection',
	'coll-clear_confirm' => 'Esque tu vole vermente rader tu collection?',
	'coll-rename' => 'Renominar',
	'coll-new_chapter' => 'Entra nomine pro nove capitulo',
	'coll-rename_chapter' => 'Entra nove nomine pro capitulo',
	'coll-no_such_category' => 'Categoria non existe',
	'coll-notitle_title' => 'Le titulo del pagina non poteva esser determinate.',
	'coll-post_failed_title' => 'Requeta POST fallite',
	'coll-post_failed_msg' => 'Le requesta POST a $1 falleva ($2).',
	'coll-mwserve_failed_title' => 'Error del servitor de renditiones',
	'coll-mwserve_failed_msg' => 'Un error ha occurrite in le servitor de renditiones: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Entra titulo pro collection:',
	'coll-error_reponse' => 'Responsa de error ab servitor',
	'coll-empty_collection' => 'Collection vacue',
	'coll-revision' => 'Revision: %PARAM%',
	'coll-save_collection_title' => 'Immagazinar collection',
	'coll-save_collection_text' => 'Pro immagazinar iste collection pro uso futur, selige un typo de collection e entra un titulo de pagina:',
	'coll-login_to_save' => 'Si tu vole immagazinar collectiones pro uso futur, per favor [[Special:UserLogin|aperi un session o crea un conto]].',
	'coll-personal_collection_label' => 'Collection personal:',
	'coll-community_collection_label' => 'Collection communitari:',
	'coll-save_collection' => 'Immagazinar collection',
	'coll-save_category' => 'Le collectiones es immagazinate in le categoria [[:Category:Collections|Collectiones]].',
	'coll-overwrite_title' => 'Le pagina existe ja.
Superscriber lo?',
	'coll-overwrite_text' => 'Existe ja un pagina con le nomine [[:$1]].
Esque tu vole reimplaciar lo con tu collection?',
	'coll-yes' => 'Si',
	'coll-no' => 'No',
	'coll-disable_collection_text' => '<a href="$1">Clicca hic</a> pro cessar de usar collectiones pro le momento.',
	'coll-load_overwrite_text' => 'Tu ha ja alcun paginas in tu collection.
Esque tu vole superscriber tu collection actual, appender le nove contento, o cancellar le cargamento de iste collection?',
	'coll-overwrite' => 'Superscriber',
	'coll-append' => 'Appender',
	'coll-cancel' => 'Cancellar',
	'coll-limit_exceeded_title' => 'Collection troppo grande',
	'coll-limit_exceeded_text' => 'Tu collection de paginas es troppo grande.
Non es possibile adder plus paginas.',
	'coll-rendering_title' => 'Rendition',
	'coll-rendering_text' => "'''Per favor attende durante le generation del documento.'''

'''Progresso:''' $1% $2

Iste pagina deberea refrescar se automaticamente cata pauc secundas.
Si isto non functiona, per favor preme le button de refrescar in tu navigator.",
	'coll-rendering_status' => "'''Stato:''' $1",
	'coll-rendering_article' => '   (pagina wiki: $1)',
	'coll-rendering_page' => '   (pagina: $1)',
	'coll-rendering_finished_title' => 'Rendition finite',
	'coll-rendering_finished_text' => "'''Le file del documento ha essite generate.'''
'''[$1 Clicca hic]''' pro discargar lo verso tu computator.

Notas:
* Non satisfacite con le resultato? Vide [[{{MediaWiki:Coll-helppage}}|le pagina de adjuta super le collectiones]] pro possibilitates de meliorar lo.",
	'coll-notfound_title' => 'Collection non trovate',
	'coll-notfound_text' => 'Non poteva trovar le pagina de collection.',
	'coll-is_cached' => '<ul><li>Un version del documento ha essite trovate in le cache, ergo non esseva necessari facer un altere rendition. <a href="$1">Fortiar le re-rendition.</a></li></ul>',
	'coll-excluded-templates' => '* Le patronos in le categoria [[:Category:$1|$1]] ha essite excludite.',
	'coll-blacklisted-templates' => '* Le patronos in le lista nigre [[:$1]] ha essite excludite.',
	'coll-return_to_collection' => '<p>Retornar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Commandar libro imprimite',
	'coll-book_text' => 'Tu pote commandar un libro imprimite con tu collection de paginas per visitar un del sequente partenarios de impression a requesta (print on demand):',
	'coll-order_from_pp' => 'Commandar libro ab $1',
	'coll-about_pp' => 'A proposito de $1',
	'coll-invalid_podpartner_title' => 'Partenario de impression a requesta (POD) non valide',
	'coll-invalid_podpartner_msg' => 'Le partenario indicate de impression a requesta (POD) non es valide.
Per favor contacta tu administrator de MediaWiki.',
	'coll-license' => 'Licentia',
	'coll-return_to' => 'Retornar a [[:$1]]',
);

/** Indonesian (Bahasa Indonesia)
 * @author Irwangatot
 * @author Rex
 */
$messages['id'] = array(
	'coll-title' => 'Judul:',
	'coll-yes' => 'Ya',
	'coll-no' => 'Tidak',
	'coll-cancel' => 'Batalkan',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'coll-collection' => 'Safn',
	'coll-collections' => 'Söfn',
	'coll-portlet_title' => 'Safnið mitt',
	'coll-add_page' => 'Bæta við síðu',
	'coll-remove_page' => 'Fjarlægja síðu',
	'coll-add_category' => 'Bæta við flokki',
	'coll-load_collection' => 'Hlaða safn',
	'coll-show_collection' => 'Sýna safn',
	'coll-help_collections' => 'Safnhjálp',
	'coll-empty' => 'tómur',
	'coll-my_collection' => 'Mitt safn',
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
 * @author Darth Kule
 * @author Melos
 * @author Pietrodn
 */
$messages['it'] = array(
	'coll-desc' => '[[Special:Collection|Raccoglie pagine]], genera PDF',
	'coll-collection' => 'Raccolta',
	'coll-collections' => 'Raccolte',
	'coll-portlet_title' => 'Crea un libro',
	'coll-add_page' => 'Aggiungi pagina wiki',
	'coll-remove_page' => 'Rimuovi pagina wiki',
	'coll-add_category' => 'Aggiungi categoria',
	'coll-load_collection' => 'Carica raccolta',
	'coll-show_collection' => 'Mostra raccolta',
	'coll-help_collections' => 'Aiuto sulle raccolte',
	'coll-empty' => 'vuota',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|pagine}}',
	'coll-download_as' => 'Scarica come $1',
	'coll-noscript_text' => '<h1>È necessario avere JavaScript!</h1>
<strong>Il tuo browser non supporta JavaScript oppure JavaScript è stato disattivato.
La pagina non funzionerà correttamente se non verrà attivato JavaScript.</strong>',
	'coll-intro_text' => 'È possibile raccogliere pagine, generare e scaricare un file PDF dalle raccolte e salvare le raccolte di pagine per usi successivi o per condividerle.

Leggi la [[{{MediaWiki:Coll-helppage}}|pagina di aiuto sulle raccolte]] per maggiori informazioni.',
	'coll-helppage' => 'Help:Raccolte',
	'coll-too_big_cat' => 'La categoria contiene più di %PARAM% pagine, solo le prime %PARAM% pagine possono essere aggiunte alla tua raccolte.
Vuoi aggiungerle?',
	'coll-my_collection' => 'La mia raccolta',
	'coll-download_title' => 'Scarica raccolta',
	'coll-download_text' => 'Per scaricare un documento generato automaticamente della tua raccolta della pagina, scegli un formato e fai clic sul pulsante.',
	'coll-download' => 'Scarica',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Rimuovi',
	'coll-move_to_top' => "Sposta all'inizio",
	'coll-move_up' => 'Sposta più su',
	'coll-move_down' => 'Sposta più giù',
	'coll-move_to_bottom' => 'Sposta in fondo',
	'coll-title' => 'Titolo:',
	'coll-subtitle' => 'Sottotitolo:',
	'coll-contents' => 'Indice',
	'coll-create_chapter' => 'Crea nuovo capitolo',
	'coll-sort_alphabetically' => 'Ordina pagine alfabeticamente',
	'coll-clear_collection' => 'Svuota raccolta',
	'coll-clear_confirm' => 'Si desidera veramente svuotare la raccolta?',
	'coll-rename' => 'Rinomina',
	'coll-new_chapter' => 'Inserisci il nome per il nuovo capitolo',
	'coll-rename_chapter' => 'Inserisci un nuovo nome per il capitolo',
	'coll-no_such_category' => 'Nessuna categoria',
	'coll-notitle_title' => 'Il titolo della pagina potrebbe non essere determinato.',
	'coll-post_failed_title' => 'Richiesta POST fallita',
	'coll-post_failed_msg' => 'La richiesta POST a $1 è fallita ($2).',
	'coll-mwserve_failed_title' => 'Errore server conversione',
	'coll-mwserve_failed_msg' => 'Si è verificato un errore sul server di conversione: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Inserisci titolo per la raccolta:',
	'coll-error_reponse' => 'Errore risposta dal server',
	'coll-empty_collection' => 'Raccolta vuota',
	'coll-revision' => 'Revisione: %PARAM%',
	'coll-save_collection_title' => 'Salva raccolta',
	'coll-save_collection_text' => 'Per salvare questa raccolta per utilizzarla in seguito, scegli un tipo di raccolta e inserisci un titolo per la pagina:',
	'coll-login_to_save' => 'Se vuoi salvare la raccolta per utilizzarla in seguito, [[Special:UserLogin|entra o crea un nuovo accesso]].',
	'coll-personal_collection_label' => 'Raccolta personale:',
	'coll-community_collection_label' => 'Raccolta della comunità:',
	'coll-save_collection' => 'Salva raccolta',
	'coll-save_category' => 'Le raccolte sono salvate nella categoria [[:Category:Collections|Raccolte]].',
	'coll-overwrite_title' => 'La pagina esiste.
Sovrascriverla?',
	'coll-overwrite_text' => 'Una pagina con il nome [[:$1]] esiste già?
Si desidera che sia sostituita con la raccolta?',
	'coll-yes' => 'Sì',
	'coll-no' => 'No',
	'coll-disable_collection_text' => '<a href="$1">Fai clic qui</a> per interrompere l\'uso delle raccolte per adesso.',
	'coll-load_overwrite_text' => 'Sono già presenti della pagine nella tua raccolta.
Si desidera sovrascrivere la raccolta corrente, aggiungere il nuovo contenuto o annullare il caricamento di questa raccolta?',
	'coll-overwrite' => 'Sovrascrivi',
	'coll-append' => 'Aggiungi',
	'coll-cancel' => 'Annulla',
	'coll-limit_exceeded_title' => 'Raccolta troppo grande',
	'coll-limit_exceeded_text' => 'La tua raccolta è troppo grande. Non è più possibile aggiungervi pagine.',
	'coll-rendering_title' => 'Conversione',
	'coll-rendering_text' => "'''Attendere mentre il documento viene generato.'''

'''Avanzamento:''' $1% $2

Questa pagina dovrebbe aggiornarsi automaticamente ogni pochi secondi.
Se questo non funziona, premi il pulsante di aggiornamento del tuo browser.",
	'coll-rendering_status' => "'''Stato:''' $1",
	'coll-rendering_article' => '  (pagina wiki: $1)',
	'coll-rendering_page' => '  (pagina: $1)',
	'coll-rendering_finished_title' => 'Conversione terminata',
	'coll-rendering_finished_text' => "'''Il documento è stato generato.'''
'''[$1 Fai clic qui]''' per scaricarlo sul tuo computer.

Note:
* Non sei soddisfatto del risultato? Leggi [[{{MediaWiki:Coll-helppage}}|la pagina di aiuto sulle raccolte]] riguardo alle possibilità per migliorarlo.",
	'coll-notfound_title' => 'Raccolta non trovata',
	'coll-notfound_text' => 'Non è possibile trovare la pagina della raccolta.',
	'coll-is_cached' => '<ul><li>Una versione del documento è stato trovato nella cache quindi la conversione non è stata necessaria. <a href="$1">Forza la ri-conversione.</a></li></ul>',
	'coll-excluded-templates' => '* I template nella categoria [[:Category:$1|$1]] sono stati esclusi.',
	'coll-blacklisted-templates' => '* I template nella blacklist [[:$1]] sono stai esclusi.',
	'coll-return_to_collection' => '<p>Torna a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ordina libro stampato',
	'coll-book_text' => 'Puoi ordinare un libro stampato contenente la tua raccolta visitando uno dei seguenti partner di stampa su richiesta (print-on-demand):',
	'coll-order_from_pp' => 'Ordina libro da $1',
	'coll-about_pp' => 'Informazioni su $1',
	'coll-invalid_podpartner_title' => 'Partner POD non valido',
	'coll-invalid_podpartner_msg' => 'Il partner POD fornito non è valido. Contatta il tuo amministratore MediaWiki.',
	'coll-license' => 'Licenza',
	'coll-return_to' => 'Torna a [[:$1]]',
);

/** Japanese (日本語)
 * @author Aotake
 * @author JtFuruhata
 */
$messages['ja'] = array(
	'coll-desc' => 'PDFファイルを作成するための[[Special:Collection|ページコレクション]]',
	'coll-collection' => 'コレクション',
	'coll-collections' => 'コレクション',
	'coll-portlet_title' => 'コレクション',
	'coll-add_page' => 'ページの追加',
	'coll-remove_page' => 'ページの削除',
	'coll-add_category' => 'カテゴリの追加',
	'coll-load_collection' => 'コレクションの読み込み',
	'coll-show_collection' => 'コレクションを見る',
	'coll-help_collections' => 'コレクションのヘルプ',
	'coll-empty' => '何もありません',
	'coll-noscript_text' => '<h1>JavaScriptを利用しています！</h1>
<strong>ご利用のブラウザはJavaScriptをサポートしていないか、JavaScriptが無効になっています。
このページは、JavaScriptが有効になっていない場合、正しく動作しません。</strong>',
	'coll-intro_text' => 'ページコレクションを作成したり、そこからPDFファイルを作成しダウンロードしたり、後に参照したり共有するためにコレクションを保存することができます。

詳細は、[[{{MediaWiki:Coll-helppage}}|ページコレクションのヘルプ]]をご覧ください。',
	'coll-helppage' => 'Help:ページコレクション',
	'coll-my_collection' => 'マイ・コレクション',
	'coll-download_title' => 'PDF形式でコレクションをダウンロード',
	'coll-download_text' => 'ページコレクションから自動生成されたPDFファイルをダウンロードするには、このボタンを押してください。',
	'coll-remove' => '削除',
	'coll-move_to_top' => '先頭へ',
	'coll-move_up' => '上へ',
	'coll-move_down' => '下へ',
	'coll-move_to_bottom' => '最後尾へ',
	'coll-title' => 'タイトル:',
	'coll-subtitle' => 'サブタイトル:',
	'coll-contents' => '内容',
	'coll-create_chapter' => '新しい章を作成',
	'coll-sort_alphabetically' => 'ページを辞書順にソート',
	'coll-clear_collection' => 'コレクションの消去',
	'coll-clear_confirm' => '本当にあなたのコレクションを消去してもよろしいですか？',
	'coll-rename' => '名称変更',
	'coll-new_chapter' => '新しい章見出しを入力',
	'coll-rename_chapter' => '新しい章見出しを入力',
	'coll-no_such_category' => '指定されたカテゴリは存在しません',
	'coll-notitle_title' => 'ページタイトルが未設定です。',
	'coll-post_failed_title' => 'POSTリクエストの失敗',
	'coll-post_failed_msg' => 'この$1へのPOSTリクエストは失敗しました ($2)。',
	'coll-enter_title' => 'コレクションのタイトルを入力:',
	'coll-error_reponse' => 'サーバからのエラーレスポンス',
	'coll-empty_collection' => '空のコレクション',
	'coll-revision' => '特定版: %PARAM%',
	'coll-save_collection_title' => 'コレクションの保存',
	'coll-save_collection_text' => '後に利用するためコレクションを保存するには、コレクションタイプを選択し、ページタイトルを入力してください:',
	'coll-login_to_save' => '後に利用するためコレクションを保存するには、[[Special:UserLogin|ログインまたはアカウント作成]]を行ってください。',
	'coll-personal_collection_label' => '個人的なコレクション:',
	'coll-community_collection_label' => '共有するコレクション:',
	'coll-save_collection' => 'コレクションの保存',
	'coll-overwrite_title' => '同名のページが存在します。上書きしますか？',
	'coll-overwrite_text' => '[[:$1]] という名前のページが既に存在しています。
これをあなたのコレクションに置き換えますか？',
	'coll-yes' => 'はい',
	'coll-no' => 'いいえ',
	'coll-load_overwrite_text' => 'あなたのコレクションには既に複数のページが存在しています。
現在のコレクションを上書きする、既存コレクションに追加する、このコレクションの読み込みをキャンセルする、のいずれかを選択してください。',
	'coll-overwrite' => '上書き',
	'coll-append' => '追加',
	'coll-cancel' => 'キャンセル',
	'coll-limit_exceeded_title' => 'コレクションが大きすぎます',
	'coll-limit_exceeded_text' => 'あなたのページコレクションは大きすぎます。
これ以上のページを追加することはできません。',
	'coll-notfound_title' => 'コレクションが見つかりません',
	'coll-notfound_text' => 'コレクションの保存ページが見つかりませんでした。',
	'coll-return_to_collection' => '<p><a href="$1">$2</a></p>に戻る',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'coll-desc' => '[[Special:Collection|Kolèksi kaca-kaca]], nggawé PDF',
	'coll-collection' => 'Kolèksi',
	'coll-collections' => 'Kolèksi-kolèksi',
	'coll-portlet_title' => 'Kolèksiku',
	'coll-add_page' => 'Tambahna kaca',
	'coll-remove_page' => 'Ilangana kaca',
	'coll-add_category' => 'Tambah kategori',
	'coll-load_collection' => 'Unggahna kolèksi',
	'coll-show_collection' => 'Tuduhna kolèksi',
	'coll-help_collections' => 'Pitulung kolèksi',
	'coll-empty' => 'kosong',
	'coll-helppage' => 'Help:Collections',
	'coll-my_collection' => 'Kolèksiku',
	'coll-download_title' => 'Undhuh Kolèksi minangka PDF',
	'coll-download_text' => 'Kanggo ngundhuh berkas PDF sing digawé sacara otomatis saka kolèksi kaca panjenengan, mangga ngeklik tombolé.',
	'coll-remove' => 'Ilangana',
	'coll-title' => 'Irah-irahan (judhul):',
	'coll-subtitle' => 'Subjudhul:',
	'coll-contents' => 'Isi',
	'coll-create_chapter' => 'Nggawé bab anyar',
	'coll-sort_alphabetically' => 'Sortir kaca-kaca sacara alfabètis',
	'coll-clear_collection' => 'Kosongna kolèksi',
	'coll-clear_confirm' => 'Apa panjenengan pancèn bener ngosongi kolèksi panjenengan?',
	'coll-rename' => 'Ganti jeneng',
	'coll-new_chapter' => 'Lebokna jeneng anyar kanggo bab',
	'coll-rename_chapter' => 'Lebokna jeneng anyar kanggo bab',
	'coll-no_such_category' => 'Ora ana kategori kaya mengkono',
	'coll-notitle_title' => 'Irah-irahan kaca iki ora bisa ditemtokaké.',
	'coll-enter_title' => 'Lebokna irah-irahan (judhul) kanggo kolèksi:',
	'coll-empty_collection' => 'Kolèksi kosong',
	'coll-revision' => 'Révisi: %PARAM%',
	'coll-save_collection_title' => 'Simpen Kolèksi',
	'coll-personal_collection_label' => 'Kolèksi pribadi:',
	'coll-community_collection_label' => 'Kolèksi komunitas:',
	'coll-save_collection' => 'Simpen kolèksi',
	'coll-overwrite_title' => 'Kaca wis ana. Ditimpa waé?',
	'coll-yes' => 'Iya',
	'coll-no' => 'Ora',
	'coll-overwrite' => 'Timpanen',
	'coll-append' => 'Lampirna',
	'coll-cancel' => 'Batal',
	'coll-limit_exceeded_title' => 'Kolèksi Kegedhèn',
	'coll-limit_exceeded_text' => 'Kolèksi kaca panjenengan iku kegedhèn.
Ora bisa nambah kaca-kaca liya manèh.',
	'coll-notfound_title' => 'Kolèksi Ora Ditemokaké',
	'coll-notfound_text' => 'Ora bisa nemokaké kaca kolèksi.',
	'coll-return_to_collection' => '<p>Bali menyang <a href="$1">$2</a></p>',
	'coll-book_title' => 'Pesen Buku Cithak',
	'coll-order_from_pp' => 'Pesen buku saka $1',
	'coll-about_pp' => 'Perkara $1',
);

/** Georgian (ქართული)
 * @author Malafaya
 */
$messages['ka'] = array(
	'coll-n_pages' => '$1 გვერდი',
	'coll-no' => 'არა',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'coll-desc' => '[[Special:Collection|ចងក្រងទំព័រ]]រួចបង្កើតឯកសារ PDF',
	'coll-collection' => 'កំរងឯកសារ',
	'coll-collections' => 'កំរងឯកសារនានា',
	'coll-portlet_title' => 'កំរងឯកសារ',
	'coll-add_page' => 'បន្ថែមទំព័រវិគី',
	'coll-remove_page' => 'ដកទំព័រវិគីចេញ',
	'coll-add_category' => 'បន្ថែមចំនាត់ថ្នាក់ក្រុម',
	'coll-load_collection' => 'ផ្ទុកកំរងឯកសារ',
	'coll-show_collection' => 'បង្ហាញកំរងឯកសារ',
	'coll-help_collections' => 'ជំនួយពីកំរងឯកសារ',
	'coll-empty' => 'ទទេ',
	'coll-n_pages' => '$1 {{PLURAL:$1|ទំព័រ|ទំព័រ}}',
	'coll-download_as' => 'ទាញយកជា $1',
	'coll-noscript_text' => '<h1>ត្រូវការ JavaScript!</h1>
<strong>ឧបករណ៍រាវរក (browser) របស់អ្នកមិនគាំទ្រ JavaScript ឬ JavaScript ត្រូវបានបិទ។
ទំព័រនេះមិនអាចដំនើរការបានត្រឹមត្រូវទេ លុះត្រាតែអ្នកបើកអោយ JavaScript ដើរ។</strong>',
	'coll-intro_text' => 'អ្នកអាចចងក្រងទំព័រ បង្កើត និង ទាញយកឯកសារ PDF ពីទំព័រកំរងឯកសារ និងអាចរក្សាទុកកំរងឯកសារសំរាប់ប្រើលើកក្រោយឬដាក់ហ៊ុនជាមួយអ្នកដទៃ។

សូមមើល[[{{MediaWiki:Coll-helppage}}|ទំព័រជំនួយពីកំរងឯកសារ]]សំរាប់ពត៌មានបន្ថែម។',
	'coll-helppage' => 'Help:កំរងឯកសារ',
	'coll-too_big_cat' => 'ចំនាត់ថ្នាក់ក្រុមនេះមានទំព័រច្រើនជាង %PARAM% ទំព័រ។ មានទំព័រតែ %PARAM% ទំព័រប៉ុណ្ណោះដែលអាចបន្ថែមទៅក្នុងកំរងឯកសាររបស់អ្នក។ តើអ្នកចង់ធ្វើបែបនេះទេ?',
	'coll-my_collection' => 'កំរងឯកសាររបស់ខ្ញុំ',
	'coll-download_title' => 'ទាញយកកំរងឯកសារ',
	'coll-download' => 'ទាញយក',
	'coll-format_label' => 'ទំរង់:',
	'coll-remove' => 'ដកចេញ',
	'coll-move_to_top' => 'ទៅ​លើគេបំផុត',
	'coll-move_up' => 'រំកិលឡើង',
	'coll-move_down' => 'រំកិលចុះ',
	'coll-move_to_bottom' => 'ទៅក្រោមគេបំផុត',
	'coll-title' => 'ចំនងជើង៖',
	'coll-subtitle' => 'ចំនងជើងរង៖',
	'coll-contents' => 'ខ្លឹមសារ',
	'coll-create_chapter' => 'បង្កើតជំពូកថ្មី',
	'coll-sort_alphabetically' => 'តំរៀប​ទំព័រ​តាម​អក្ខរក្រម',
	'coll-clear_collection' => 'សំអាតកំរងឯកសារ',
	'coll-clear_confirm' => 'តើអ្នកពិតជាចង់សំអាតកំរងឯកសាររបស់អ្នកមែនឬ?',
	'coll-rename' => 'ប្តូរឈ្មោះ',
	'coll-new_chapter' => 'ដាក់ឈ្មោះអោយ ជំពូកថ្មី',
	'coll-rename_chapter' => 'ដាក់ឈ្មោះថ្មី អោយជំពូក',
	'coll-no_such_category' => 'គ្មានចំនាត់ថ្នាក់ក្រុមបែបនេះទេ',
	'coll-notitle_title' => 'មិន​អាចកំនត់​ចំនងជើង​នៃទំព័រ',
	'coll-enter_title' => 'ដាក់ចំនងជើងអោយកំរងឯកសារ',
	'coll-empty_collection' => 'កំរងឯកសារទទេ',
	'coll-save_collection_title' => 'រក្សាទុកកំរងឯកសារ',
	'coll-save_collection_text' => 'ដើម្បីរក្សាទុកកំរងឯកសារនេះសំរាប់ប្រើលើកក្រោយ សូមជ្រើសរើសប្រភេទកំរងឯកសារនិងបញ្ចូលចំនងជើងទំព័រមួយ៖',
	'coll-login_to_save' => 'បើសិនជាអ្នកចង់រក្សាទុកកំរងឯកសារសំរាប់ប្រើប្រាស់លើកក្រោយ សូម[[Special:UserLogin|ឡុកអ៊ីនឬបង្កើតគណនី]]។',
	'coll-personal_collection_label' => 'កំរងឯកសារផ្ទាល់ខ្លួន៖',
	'coll-community_collection_label' => 'កំរងឯកសារសហគមន៍៖',
	'coll-save_collection' => 'រក្សាទុកកំរងឯកសារ',
	'coll-overwrite_title' => 'ទំព័រ​មានហើយ។ សរសេរ​ជាន់ពីលើ ?',
	'coll-overwrite_text' => 'ទំព័រដែលមានឈ្មោះ [[:$1]] មានរួចហើយ។ តើអ្នកចង់ជំនួសវាដោយកំរងឯកសាររបស់អ្នកឬ?',
	'coll-yes' => 'បាទ / ចាស',
	'coll-no' => 'ទេ',
	'coll-disable_collection_text' => '<a href="$1">សូចចុចទីនេះ</a>ដើម្បីផ្អាកប្រើប្រាស់កំរងឯកសារនៅពេលនេះ។',
	'coll-overwrite' => 'សរសេរជាន់ពីលើ',
	'coll-append' => 'បន្ថែមនៅចុង',
	'coll-cancel' => 'បោះបង់',
	'coll-limit_exceeded_title' => 'កំរងឯកសារធំជ្រុល',
	'coll-limit_exceeded_text' => 'កំរងឯកសាររបស់អ្នកធំជ្រុលពេកហើយ។ អ្នកមិនអាចបន្ថែមទំព័រទៅក្នុងវាទៀតទេ។',
	'coll-rendering_article' => '  (ទំព័រវិគី៖ $1)',
	'coll-rendering_page' => '  (ទំព័រ៖ $1)',
	'coll-notfound_title' => 'រកមិនឃើញកំរងឯកសារ',
	'coll-notfound_text' => 'រកមិនឃើញកំរងឯកសារទេ។',
	'coll-return_to_collection' => '<p>ត្រលប់ទៅកាន់<a href="$1">$2</a></p>វិញ',
	'coll-book_title' => 'ទិញសៀវភៅដែលបានបោះពុម្ព',
	'coll-order_from_pp' => 'បញ្ជាទិញ​សៀវភៅពី $1',
	'coll-about_pp' => 'អំពី$1',
	'coll-license' => 'អាជ្ញាបណ្ណ',
	'coll-return_to' => 'ត្រលប់ទៅកាន់ [[:$1]]',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'coll-contents' => 'Manga Sulud',
	'coll-cancel' => 'Kanselar',
	'coll-about_pp' => 'Angut sa Iwan $1',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'coll-desc' => '[[Special:Collection|Sigge zosammefaße]], un Dateie em <i lang="en">Portable Document Format</i> (PDF) ußjäve.',
	'coll-collection' => 'Sammlong',
	'coll-collections' => 'Sammlonge',
	'coll-portlet_title' => 'E Booch zesamme_ställe',
	'coll-add_page' => 'En Sigg dobei donn',
	'coll-remove_page' => 'En Sigg eruß nämme',
	'coll-add_category' => 'En Saachjrupp dobei donn',
	'coll-load_collection' => 'Sammlong lade',
	'coll-show_collection' => 'Sammlong zeije',
	'coll-help_collections' => 'Hölp üvver Sammlonge',
	'coll-empty' => 'leddich',
	'coll-n_pages' => '{{PLURAL:$1|ein Sigg|$1 Sigge|kein Sigge}}',
	'coll-download_as' => 'Als $1 eronger laade',
	'coll-noscript_text' => '<h1>Bruch JavaSkripp!</h1>
<strong>Dinge Brauser kann kei JavaSkripp udder et es affjeschalldt.
<br/>Di Sigg hee weed oohne JavaSkripp nit donn.</strong>',
	'coll-intro_text' => 'Do kanns Sammlonge vun Sigge zusamme ställe, do druß en Datei em PDF-Fommaat maache
un di erunge laade. Esu en Sammlonge kam_mer för shpääder affspeijschere,
un mer kann ander Metmaacher doh draan lohße.

Loor Der de ußföhrlesche [[{{MediaWiki:Coll-helppage}}|Hölp övver Sammlonge]] aan,
wann de noch mieh wesse wells.',
	'coll-helppage' => 'Hölp:Sammlonge',
	'coll-too_big_cat' => 'Di Saachjropp hät mieh wi %PARAM% Sigge, ävver nor de eetste %PARAM%
Sigge künne en Ding Sammlong opjenomme wääde. Wells De se dobei donn?',
	'coll-my_collection' => 'Ming Sammlong',
	'coll-download_title' => 'Sammlong eronger laade',
	'coll-download_text' => 'Öm en automattesch jemaate Datei met Dinge Sammlong eronger ze laade,
donn op dat Knöppsche klecke.',
	'coll-download' => 'Eronger Laade',
	'coll-format_label' => 'Fommaat:',
	'coll-remove' => 'Fott lohße',
	'coll-move_to_top' => 'aan der Aanfang donn',
	'coll-move_up' => 'Erop schuve',
	'coll-move_down' => 'Eronger schuve',
	'coll-move_to_bottom' => 'An et Engk donn',
	'coll-title' => 'Tittel:',
	'coll-subtitle' => 'Ongertittel:',
	'coll-contents' => 'Enhallt',
	'coll-create_chapter' => 'E neu Kapittel aanlääje',
	'coll-sort_alphabetically' => "Donn de Sigge noh'm Allfabeet zoteere",
	'coll-clear_collection' => 'Sammlong leddisch maache',
	'coll-clear_confirm' => 'Wells de Ding Sammlong werklesch loß wääde?',
	'coll-rename' => 'Ömnänne',
	'coll-new_chapter' => 'Jif ene Name för e neu Kapittel aan',
	'coll-rename_chapter' => 'Jif ene neu Name för dat Kapittel en',
	'coll-no_such_category' => 'Di Saachjrupp jidd_et nit',
	'coll-notitle_title' => 'Mer kunnte dä Tittel för di Sigg nit erus fenge.',
	'coll-mwserve_failed_title' => 'Fähler en dämm Server för et Darstelle',
	'coll-mwserve_failed_msg' => 'En dämm Server för et Darstelle es ene Fähler opjetrodde: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Dä Tittel för di Sammlong:',
	'coll-error_reponse' => 'Dä Server meldt ene Fähler',
	'coll-empty_collection' => 'En dä Sammlong es nix dren',
	'coll-revision' => 'Version: %PARAM%',
	'coll-save_collection_title' => 'Sammlong Afspeichere',
	'coll-overwrite_title' => 'Die Sigg jidd et ald. Överschrieve?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Nä',
	'coll-disable_collection_text' => '<a href="$1">Donn de Sammlong fottschmieße un noh de Houptsigg zeröckjonn.</a>',
	'coll-load_overwrite_text' => 'En Dinge Sammlong sinn_er ald Sigge dren.
Wells de di Sammlong övverschrieve, di neu Saache dran 
aanhänge, udder wells de di Sammlong lever doch nit laade?',
	'coll-overwrite' => 'Ußtuusche',
	'coll-append' => 'Aanhänge',
	'coll-cancel' => 'Ophüre',
	'coll-limit_exceeded_title' => 'De Sammlong es zo jruhß',
	'coll-rendering_status' => "'''Shtattus:''' $1",
	'coll-notfound_title' => 'Han de Sammlong nit jefonge',
	'coll-notfound_text' => 'Mer kunnte de Sigg för di Sammlong nit fenge.',
	'coll-book_title' => 'Der Drock vun däm Booch en Aufdrach jevve',
	'coll-order_from_pp' => 'Donn dat Booch bei $1 beshtälle',
	'coll-about_pp' => 'Üvver $1',
	'coll-invalid_podpartner_title' => 'Verkeehte Aajabe zom Drocke udder Drockerei',
	'coll-invalid_podpartner_msg' => 'De Aajabe zom Drocke un wä dat maache sull sin verkeeht.
Don dat enem Wikki-Köbes obb et Bruut schmiere.',
	'coll-license' => 'Lizänz',
	'coll-return_to' => 'Jangk zerök noh [[:$1]]',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'coll-desc' => "[[Special:Collection|Säiten zesummestellen]], PDF'e generéieren",
	'coll-collection' => 'Sammlung',
	'coll-collections' => 'Sammlungen',
	'coll-portlet_title' => 'E Buch uleeën',
	'coll-add_page' => 'Wiki-Säit derbäisetzen',
	'coll-remove_page' => 'Wiki-Säit ewechhuelen',
	'coll-add_category' => 'Kategorie derbäisetzen',
	'coll-load_collection' => 'Sammlung lueden',
	'coll-show_collection' => "D'Sammlung weisen",
	'coll-help_collections' => "Hellëf iwwert d 'Sammlungen",
	'coll-empty' => 'eidel',
	'coll-n_pages' => '$1 {{PLURAL:$1|Säit|Säiten}}',
	'coll-download_as' => 'Als $1 eroflueden',
	'coll-noscript_text' => '<h1>JavaScript gëtt gebraucht!</h1>
<strong>Äre Browser ënnerstëtzt Java Script net oder JavaScript ass ausgeschalt.
Dës Säit fonctionnéiert net richteg, ausser wa JavaScript ageschalt ass</strong>',
	'coll-helppage' => 'Help:Kollektioun',
	'coll-too_big_cat' => 'An der Kategorie gëtt et méi wéi %PARAM% Säiten, nëmmen déi éischt %PARAM% Säite kënnen an är Sammlung derbäigesat ginn.',
	'coll-my_collection' => 'Meng Sammlung',
	'coll-download_title' => 'Kollektioun als PDF eroflueden',
	'coll-download' => 'Eroflueden',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ewechhuelen',
	'coll-move_to_top' => 'No ganz uewe réckelen',
	'coll-move_up' => 'Eropréckelen',
	'coll-move_down' => 'Erofréckelen',
	'coll-move_to_bottom' => 'No ganz ënne réckelen',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Ënnertitel:',
	'coll-contents' => 'Inhalter',
	'coll-create_chapter' => 'Een neit Kapitel maachen',
	'coll-sort_alphabetically' => 'Säiten alphabetesch sortéieren',
	'coll-clear_collection' => 'Sammlung eidel maachen',
	'coll-clear_confirm' => 'Wëllt Dir äer Kollektioun wierklech eidel maachen?',
	'coll-rename' => 'Ëmbenennen',
	'coll-new_chapter' => 'Gitt den Numm fir dat neit Kapitel un',
	'coll-rename_chapter' => "Gitt een neie Numm fir d'Kapitel un",
	'coll-no_such_category' => 'Keng esou Kategorie',
	'coll-notitle_title' => 'Den Titel vun der Säit konnt net festgestallt ginn.',
	'coll-mwserve_failed_title' => 'Feeler vum Server',
	'coll-enter_title' => 'Titel vun der Kollektioun uginn:',
	'coll-error_reponse' => 'Feelermeldng vum Server',
	'coll-empty_collection' => 'Eidel Sammlung',
	'coll-revision' => 'Versioun: %PARAM%',
	'coll-save_collection_title' => 'Sammlung späicheren',
	'coll-personal_collection_label' => 'Perséinlech Sammlung',
	'coll-community_collection_label' => 'Gemeinsam Kollektioun:',
	'coll-save_collection' => 'Sammlung späicheren',
	'coll-save_category' => 'Sammlunge ginn an der Kategorie [[:Category:Collections|Sammlunge]] gespäichert.',
	'coll-overwrite_title' => "D'Säit gëtt et. Iwwerschreiwen?",
	'coll-overwrite_text' => 'Et gëtt schonn eng Säit mam Numm [:$1]].
Wëllt Dir déi duerch är Sammlung ersetzen?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Neen',
	'coll-overwrite' => 'Iwwerschreiwen',
	'coll-append' => 'Derbäisetzen',
	'coll-cancel' => 'Annulléieren',
	'coll-limit_exceeded_title' => 'Sammlung ze grouss',
	'coll-limit_exceeded_text' => 'Är Sammlung ass ze grouss.
Et kënne keng Säite méi derbäigesat ginn.',
	'coll-rendering_title' => 'Maachen',
	'coll-rendering_text' => "'''Gedëllegt Iech w.e.g. bis d'Dokument zesummegestallt ass.'''

Fortschrëtt: '''$1%'''.

Dës Säit gëtt normalerweis automatesch aktualiséiert.
Wann dat net sollt de fall sinn, da klickt w.e.g. op den Aktualiséieren/Refresh Knäppche vun ärem Browser.",
	'coll-rendering_status' => "'''Statut :''' $1",
	'coll-rendering_article' => ' (Wiki Säit: $1)',
	'coll-rendering_page' => ' (Säit: $1)',
	'coll-rendering_finished_title' => 'Fäerdeg gemaach',
	'coll-notfound_title' => 'Sammlung net fonnt',
	'coll-notfound_text' => "D'Sammlungs-Säit konnt net fonnt ginn.",
	'coll-excluded-templates' => '* Schablounen aus der Kategorie [[:Category:$1|$1]] goufen ausgeschloss',
	'coll-blacklisted-templates' => '* Schablounen op der schwaarzer Lëscht (blacklist) [[:$1]] goufen ausgeschloss.',
	'coll-return_to_collection' => '<p>Zréck op <a href="$1">$2</a></p>',
	'coll-book_title' => 'Gedréckte Buch bestellen',
	'coll-book_text' => 'Dir kënnt e Buch bestellen op enge vun dësen Internetsiten:',
	'coll-order_from_pp' => "D'Buch bestelle bäi $1",
	'coll-about_pp' => 'Iwwer $1',
	'coll-invalid_podpartner_title' => 'Ongëltege Print-On-Demand (POD) Partner',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Zréck op [[:$1]]',
);

/** Lao (ລາວ)
 * @author Passawuth
 */
$messages['lo'] = array(
	'coll-remove' => 'ເອົາອອກ',
	'coll-yes' => 'ໃຊ່',
	'coll-no' => 'ບໍ່ໃຊ່',
);

/** Eastern Mari (Олык Марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'coll-contents' => 'Вуйлымаш',
	'coll-cancel' => 'Чараш',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'coll-desc' => '[[Special:Collection|താളുകളുടെ ശേഖരം]], PDF നിര്‍മ്മിക്കുക',
	'coll-collection' => 'ശേഖരം',
	'coll-collections' => 'ശേഖരങ്ങള്‍',
	'coll-portlet_title' => 'എന്റെ ശേഖരം',
	'coll-add_page' => 'താള്‍ ചേര്‍ക്കുക',
	'coll-remove_page' => 'താള്‍ മാറ്റുക',
	'coll-add_category' => 'വിഭാഗം ചേര്‍ക്കുക',
	'coll-load_collection' => 'ശേഖരം ലോഡ് ചെയ്യുക',
	'coll-show_collection' => 'ശേഖരം കാണിക്കുക',
	'coll-help_collections' => 'ശേഖരങ്ങളുടെ സഹായം',
	'coll-empty' => 'ശൂന്യം',
	'coll-helppage' => 'Help:ശേഖരം',
	'coll-my_collection' => 'എന്റെ ശേഖരം',
	'coll-download_title' => 'ശേഖരം PDF ആയി ഡൗണ്‍ലോഡ് ചെയ്യുക.',
	'coll-download_text' => 'താളുകളുടെ ശേഖരത്തിന്റെ യാന്ത്രികമായി നിര്‍മ്മിക്കപ്പെട്ട PDF ഡൗലോഡ് ചെയ്യുന്നതിനു ബട്ടണില്‍ ഞെക്കുക.',
	'coll-remove' => 'നീക്കം ചെയ്യുക',
	'coll-move_to_top' => 'ഏറ്റവും മുകളിലേക്ക് നീങ്ങുക',
	'coll-move_up' => 'മുകളിലേക്കു നീങ്ങുക',
	'coll-move_down' => 'താഴേക്ക് നീങ്ങുക',
	'coll-move_to_bottom' => 'ഏറ്റവും താഴേക്ക് നീങ്ങുക',
	'coll-title' => 'ശീര്‍ഷകം:',
	'coll-subtitle' => 'ഉപശീര്‍ഷകം:',
	'coll-contents' => 'ഉള്ളടക്കം',
	'coll-create_chapter' => 'പുതിയ അദ്ധ്യായം സൃഷ്ടിക്കുക',
	'coll-sort_alphabetically' => 'താളുകള്‍ അകാദാരിക്രമത്തില്‍ ക്രമീകരിക്കുക',
	'coll-clear_collection' => 'ശേഖരം മായ്ക്കുക',
	'coll-clear_confirm' => 'താങ്കളുടെ താളുകളുടെ ശേഖ്രം മായ്ക്കണമെന്നതു നിര്‍ബന്ധമാണോ?',
	'coll-rename' => 'പുനഃര്‍നാമകരണം ചെയ്യുക',
	'coll-new_chapter' => 'പുതിയ അദ്ധ്യായത്തിനു ഒരു പേരു കൊടുക്കുക',
	'coll-rename_chapter' => 'അദ്ധ്യായത്തിനു പുതിയൊരു പേരു കൊടുക്കുക',
	'coll-no_such_category' => 'അങ്ങനെ ഒരു വിഭാഗം നിലവിലില്ല',
	'coll-notitle_title' => 'താളിന്റെ തലക്കെട്ട് നിര്‍ണ്ണയിക്കുന്നതിനു കഴിഞ്ഞില്ല.',
	'coll-enter_title' => 'ശേഖരത്തിനു ഒരു ശീര്‍ഷകം ചേര്‍ക്കുക:',
	'coll-error_reponse' => 'സെര്‍‌വറില്‍ നിന്നു പിഴവാണെന്ന മറുപടി കിട്ടി.',
	'coll-empty_collection' => 'ശൂന്യമായ ശേഖരം',
	'coll-revision' => 'പതിപ്പ്: %PARAM%',
	'coll-save_collection_title' => 'ശേഖരം സേവ് ചെയ്യുക',
	'coll-save_collection_text' => 'ഈ ശേഖരം പിന്നിടുള്ള ഉപയോഗത്തിനായി സൂക്ഷിക്കണമെങ്കില്‍ ശേഖര തരം തിരഞ്ഞെടുത്ത് ഒരു ശീര്‍ഷകം നല്‍കുക:',
	'coll-login_to_save' => 'ശേഖരങ്ങള്‍ പിന്നീടുള്ള ഉപയോഗത്തിനായി സൂക്ഷിക്കണമെങ്കില്‍, ദയവായി [[Special:UserLogin|ലോഗിന്‍ ചെയ്യുകയോ പുതിയൊരു അക്കൗണ്ട് ഉണ്ടാക്കുകയോ ചെയ്യുക]].',
	'coll-personal_collection_label' => 'സ്വകാര്യ ശേഖരം:',
	'coll-community_collection_label' => 'സമൂഹ ശേഖരം:',
	'coll-save_collection' => 'ശേഖരം സേവ് ചെയ്യുക',
	'coll-overwrite_title' => 'താള്‍ നിലവിലുണ്ട്. അതിനെ ഓവര്‍റൈറ്റ് ചെയ്യട്ടെ?',
	'coll-overwrite_text' => '[[:$1]] എന്ന പേരില്‍ ഒരു താള്‍ നിലവിലുണ്ട്. താങ്കളുടെ ശേഖരം ആ താളിനു ബദലാക്കണോ?',
	'coll-yes' => 'ശരി',
	'coll-no' => 'ഇല്ല',
	'coll-load_overwrite_text' => 'താങ്കളുടെ ശേഖരത്തില്‍ ഇപ്പോള്‍ തന്നെ കുറച്ചു താളുകള്‍ ഉണ്ട്.
താങ്കള്‍ക്കു നിലവിലുള്ള ശേഖരം മാറ്റണോ, പുതിയ താളുകള്‍ നിലവിലുള്ളതില്‍ ചേര്‍ക്കണോ, അതോ ഈ പ്രക്രിയ നിരാകരിക്കണോ?',
	'coll-overwrite' => 'ഓവര്‍റൈറ്റ്',
	'coll-append' => 'കൂട്ടിചേര്‍ക്കുക',
	'coll-cancel' => 'റദ്ദാക്കുക',
	'coll-limit_exceeded_title' => 'ശേഖരത്തിന്റെ വലിപ്പം വളരെ കൂടുതലാണ്‌',
	'coll-limit_exceeded_text' => 'താങ്കളുടെ ശേഖരം വളരെ വലുതാണ്‌. ഇനി കൂടുതല്‍ താളുകള്‍ ചേര്‍ക്കുന്നതിനു സാദ്ധ്യമല്ല.',
	'coll-notfound_title' => 'ശേഖരം കണ്ടില്ല',
	'coll-notfound_text' => 'ശേഖര താള്‍ കണ്ടെത്താന്‍ കഴിഞ്ഞില്ല.',
	'coll-return_to_collection' => '<p><a href="$1">$2</a></p>-ലേക്കു തിരിച്ചു പോവുക',
	'coll-book_title' => 'അച്ചടിച്ച പുസ്തകം ഓര്‍ഡര്‍ ചെയ്യുക',
	'coll-book_text' => 'താഴെ പ്രദര്‍ശിപ്പിച്ചിരിക്കുന്ന സേവനദാതാക്കളെ സന്ദര്‍ശിച്ച് നിങ്ങളുടെ ശേഖരത്തിന്റെ അച്ചടി രൂപം ഓര്‍ഡര്‍ ചെയ്യാവുന്നതാണ്‌:',
	'coll-order_from_pp' => '$1-ല്‍ നിന്നു പുസ്തകം ഓര്‍ഡര്‍ ചെയ്യുക',
	'coll-about_pp' => '$1-നെ കുറിച്ച്',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 */
$messages['mr'] = array(
	'coll-desc' => '[[Special:Collection|पाने गोळा करा]], पीडीएफ तयार करा',
	'coll-collection' => 'गोळा केलेली पाने',
	'coll-collections' => 'गोळा केलेली पाने',
	'coll-portlet_title' => 'मी गोळा केलेली पाने',
	'coll-add_page' => 'पानाचा समावेश करा',
	'coll-remove_page' => 'पान काढा',
	'coll-add_category' => 'वर्गाचा समावेश करा',
	'coll-load_collection' => 'गोळाकेलेली पाने दाखवा',
	'coll-show_collection' => 'गोळा केलेली पाने दाखवा',
	'coll-help_collections' => 'पाने गोळा करण्यासाठी मदत',
	'coll-empty' => 'रिकामे',
	'coll-noscript_text' => '<h1>जावास्क्रीप्ट आवश्यक!</h1>
<strong>तुमचा ब्राउझार जावास्क्रीप्ट वापरू शकत नाही किंवा वापर बंद केलेला आहे.
जावास्क्रीप्ट चालू केल्याशिवाय हे पान व्यवस्थित काम करणार नाही.</strong>',
	'coll-intro_text' => 'तुम्ही काही पाने गोळा करू शकता, त्यांच्या पीडीएफ आवृत्त्या उतरवून घेऊ शकता किंवा गोळा केलेली पाने नंतर वापरण्यासाठी अथवा इतरांना देण्यासाठी जतन करून ठेऊ शकता.

अधिक माहितीसाठी [[{{MediaWiki:Coll-helppage}}|पाने गोळा करण्यासाठी मदत]] पहा.',
	'coll-helppage' => 'Help:गोळा केलेली पाने',
	'coll-my_collection' => 'मी गोळा केलेली पाने',
	'coll-download_title' => 'गोळा केलेल्या पानांची पीडीएफ आवृत्ती उतरवून घ्या',
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
	'coll-clear_collection' => 'सर्व गोळा केलेली पाने पुसा',
	'coll-clear_confirm' => 'तुम्ही खरोखर सर्व गोळा केलेली पाने काढून टाकू इच्छिता?',
	'coll-rename' => 'नाव बदला',
	'coll-new_chapter' => 'नवीन धड्याचे नाव लिहा',
	'coll-rename_chapter' => 'नवीन धड्याचे नाव लिहा',
	'coll-no_such_category' => 'असा वर्ग अस्तित्वात नाही',
	'coll-notitle_title' => 'या पानाचे शीर्षक ठरविता आलेले नाही.',
	'coll-post_failed_title' => 'पोस्ट (POST) ची मागणी पूर्ण झालेली नाही',
	'coll-post_failed_msg' => '$1 ची पोस्ट (POST) मागणी पूर्ण झालेली नाही ($2).',
	'coll-enter_title' => 'कलेल्शनला शीर्षक द्या:',
	'coll-error_reponse' => 'सर्व्हर कडून चुकीचा संदेश आलेला आहे',
	'coll-empty_collection' => 'रिकामे कलेक्शन',
	'coll-revision' => 'आवृत्ती: %PARAM%',
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
 * @author Aviator
 */
$messages['ms'] = array(
	'coll-desc' => '[[Special:Collection|Mengumpul laman]] dan menjana PDF',
	'coll-collection' => 'Koleksi',
	'coll-collections' => 'Koleksi',
	'coll-portlet_title' => 'Cipta buku',
	'coll-add_page' => 'Tambah laman wiki',
	'coll-remove_page' => 'Buang laman wiki',
	'coll-add_category' => 'Tambah kategori',
	'coll-load_collection' => 'Muat koleksi',
	'coll-show_collection' => 'Papar koleksi',
	'coll-help_collections' => 'Bantuan koleksi',
	'coll-empty' => 'kosong',
	'coll-n_pages' => '$1 laman',
	'coll-download_as' => 'Muat turun $1',
	'coll-noscript_text' => '<h1>JavaScript diperlukan!</h1>
<strong>JavaScript tidak disokong oleh pelayan anda atau telah dilumpuhkan. Laman ini tidak dapat berfungsi sekiranya ciri JavaScript tidak diaktifkan.</strong>',
	'coll-helppage' => 'Help:Koleksi',
	'coll-my_collection' => 'Koleksi saya',
	'coll-download_title' => 'Muat turun koleksi',
	'coll-download' => 'Muat turun',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Buang',
	'coll-move_to_top' => 'Naikkan ke puncak',
	'coll-move_up' => 'Naikkan',
	'coll-move_down' => 'Turunkan',
	'coll-move_to_bottom' => 'Turunkan ke dasar',
	'coll-title' => 'Tajuk:',
	'coll-subtitle' => 'Tajuk kecil:',
	'coll-contents' => 'Kandungan',
	'coll-clear_collection' => 'Kosongkan koleksi',
	'coll-clear_confirm' => 'Betul anda mahu mengosongkan koleksi anda?',
	'coll-rename' => 'Tukar nama',
	'coll-new_chapter' => 'Masukkan nama untuk bab baru',
	'coll-rename_chapter' => 'Masukkan nama baru untuk bab',
	'coll-post_failed_title' => 'Permintaan POST gagal',
	'coll-post_failed_msg' => 'Permintaan POST terhadap $1 gagal ($2).',
	'coll-empty_collection' => 'Koleksi kosong',
	'coll-revision' => 'Semakan: %PARAM%',
	'coll-save_collection_title' => 'Simpan koleksi',
	'coll-personal_collection_label' => 'Koleksi peribadi:',
	'coll-community_collection_label' => 'Koleksi komuniti:',
	'coll-save_collection' => 'Simpan koleksi',
	'coll-save_category' => 'Semua koleksi disimpan dalam kategori [[:Category:Koleksi|Koleksi]].',
	'coll-yes' => 'Ya',
	'coll-no' => 'Tidak',
	'coll-overwrite' => 'Tulis ganti',
	'coll-append' => 'Tambah',
	'coll-cancel' => 'Batal',
	'coll-about_pp' => 'Perihal $1',
	'coll-invalid_podpartner_title' => 'Rakan POD tidak sah',
	'coll-invalid_podpartner_msg' => 'Rakan POD yang dibekalkan tidak sah. Sila hubungi pentadbir MediaWiki anda.',
	'coll-license' => 'Lesen',
	'coll-return_to' => 'Kembali ke [[:$1]]',
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
	'coll-add_page' => 'Поладомс лопа',
	'coll-add_category' => 'Поладомс категория',
	'coll-empty' => 'чаво',
	'coll-download' => 'Таргамс',
	'coll-remove' => 'Нардык',
	'coll-title' => 'Коняксозо:',
	'coll-rename' => 'Лемдемс одов',
	'coll-no_such_category' => 'Истямо категория арась',
	'coll-save_collection_title' => 'Ванстомс пурнавксонть',
	'coll-community_collection_label' => 'Вейтьсэнь пурнавксось:',
	'coll-yes' => 'Истя',
	'coll-no' => 'Арась',
	'coll-notfound_title' => 'Пурнавксось а муеви',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'coll-empty' => '(iztāc)',
	'coll-title' => 'Tōcāitl:',
	'coll-yes' => 'Quēmah',
	'coll-no' => 'Ahmo',
	'coll-cancel' => 'Ticcuepāz',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'coll-add_page' => 'Wikisied tofögen',
	'coll-remove_page' => 'Wikisied rutnehmen',
	'coll-add_category' => 'Kategorie tofögen',
	'coll-empty' => 'leddig',
	'coll-remove' => 'Rutnehmen',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Ünnertitel:',
	'coll-sort_alphabetically' => 'Sieden alphabeetsch sorteren',
	'coll-rename' => 'Ne’en Naam geven',
	'coll-overwrite_title' => 'Sied gifft dat al. Överschrieven?',
	'coll-yes' => 'Jo',
	'coll-no' => 'Nee',
	'coll-overwrite' => 'Överschrieven',
	'coll-cancel' => 'Afbreken',
	'coll-return_to_collection' => '<p>Trüch na <a href="$1">$2</a></p>',
	'coll-order_from_pp' => 'Book bestellen bi $1',
	'coll-about_pp' => 'Över $1',
);

/** Dutch (Nederlands)
 * @author GerardM
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'coll-desc' => "[[Special:Collection|Pagina's verzamelen]], PDF's genereren",
	'coll-collection' => 'Collectie',
	'coll-collections' => 'Collecties',
	'coll-portlet_title' => 'Boek maken',
	'coll-add_page' => 'Wikipagina toevoegen',
	'coll-remove_page' => 'Wikipagina verwijderen',
	'coll-add_category' => 'Categorie toevoegen',
	'coll-load_collection' => 'Collectie laden',
	'coll-show_collection' => 'Collectie weergeven',
	'coll-help_collections' => 'Hulp bij collecties',
	'coll-empty' => 'leeg',
	'coll-n_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'coll-download_as' => 'Downloaden als $1',
	'coll-noscript_text' => '<h1>JavaScript is vereist!</h1>
<strong>Uw browser understeunt geen JavaScript of JavaScript is uitgeschakeld.
Deze pagina werkt niet correct tenzij u JavaScript inschakelt.</strong>',
	'coll-intro_text' => "U kunt pagina's in een collectie plaatsen, een PDF-bestand maken en downloaden van een paginacollectie, en een paginacollectie opslaan voor later gebruik, of om ze te delen.

[[{{MediaWiki:Coll-helppage}}|Meer informatie over collecties]].",
	'coll-helppage' => 'Help:Collecties',
	'coll-too_big_cat' => "Deze categorie bevat meer dan %PARAM% pagina's. Alleen de eerste %PARAM% pagina's worden aan uw collectie toegevoegd.
Wilt u ze toevoegen?",
	'coll-my_collection' => 'Mijn collectie',
	'coll-download_title' => 'Collectie als PDF downloaden',
	'coll-download_text' => 'Klik op de knop om een automatisch gemaakt PDF-bestand van uw paginacollectie te downloaden.',
	'coll-download' => 'Downloaden',
	'coll-format_label' => 'Formaat:',
	'coll-remove' => 'Verwijderen',
	'coll-move_to_top' => 'Helemaal naar boven',
	'coll-move_up' => 'Naar boven',
	'coll-move_down' => 'Naar onderen',
	'coll-move_to_bottom' => 'Helemaal naar onderen',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Ondertitel:',
	'coll-contents' => 'Inhoud',
	'coll-create_chapter' => 'Nieuw hoofdstuk maken',
	'coll-sort_alphabetically' => "Pagina's alfabetisch sorteren",
	'coll-clear_collection' => 'Collectie leegmaken',
	'coll-clear_confirm' => 'Weet u zeker dat u de collectie leeg wilt maken?',
	'coll-rename' => 'Hernoemen',
	'coll-new_chapter' => 'Voer de naam van het nieuwe hofdstuk in',
	'coll-rename_chapter' => 'Voer een nieuwe naam in voor het hoofdstuk',
	'coll-no_such_category' => 'De categorie bestaat niet',
	'coll-notitle_title' => 'De titel van de pagina kon niet vastgesteld worden.',
	'coll-post_failed_title' => 'POST-verzoek mislukt',
	'coll-post_failed_msg' => 'Het POST-verzoek naar $1 is mislukt ($2).',
	'coll-mwserve_failed_title' => 'Fout in de renderserver',
	'coll-mwserve_failed_msg' => 'De renderserver gaf de volgende foutmelding: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Voer een naam in voor de collectie:',
	'coll-error_reponse' => 'De server heeft een foutmelding teruggegeven',
	'coll-empty_collection' => 'Lege collectie',
	'coll-revision' => 'Versie: %PARAM%',
	'coll-save_collection_title' => 'Collectie opslaan',
	'coll-save_collection_text' => 'Kies een collectietype en voer een paginanaam in om deze collectie op te slaan voor later gebruik:',
	'coll-login_to_save' => 'Als u collecties wilt opslaan voor later gebruik, [[Special:UserLogin|meld u zich dan aan of maak een gebruiker aan]].',
	'coll-personal_collection_label' => 'Persoonlijke collectie:',
	'coll-community_collection_label' => 'Gemeenschappelijke collectie:',
	'coll-save_collection' => 'Collectie opslaan',
	'coll-save_category' => 'Collecties worden opgeslagen in de categorie [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => 'De pagina bestaat al. Overschrijven?',
	'coll-overwrite_text' => 'Er bestaat al een pagina met de naam [[:$1]].
Wil u die pagina vervangen door uw collectie?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nee',
	'coll-disable_collection_text' => '<a href="$1">Het gebruik van Collecties afbreken</a>.',
	'coll-load_overwrite_text' => "U hebt al een aantal pagina's in uw collectie.
Wil u de bestaande collectie overschrijven, de nieuwe pagina's toevoegen, of het laden van deze collectie annuleren?",
	'coll-overwrite' => 'Overschrijven',
	'coll-append' => 'Toevoegen',
	'coll-cancel' => 'Annuleren',
	'coll-limit_exceeded_title' => 'Collectie is te groot',
	'coll-limit_exceeded_text' => "Uw paginacollectie is te groot.
U kunt geen pagina's meer toevoegen.",
	'coll-rendering_title' => 'Bezig met renderen',
	'coll-rendering_text' => "'''Het document wordt aangemaakt.'''

'''Voortgang:''' \$1% \$2.

Deze pagina wordt regelmatig bijgewerkt.
Als dit niet werkt, klik dan op de knop \"Vernieuwen\" in uw browser.",
	'coll-rendering_status' => "'''Status:''' $1",
	'coll-rendering_article' => '(wikipagina: $1)',
	'coll-rendering_page' => '(pagina: $1)',
	'coll-rendering_finished_title' => 'Renderen afgerond',
	'coll-rendering_finished_text' => "'''Het document is aangemaakt.'''
'''[$1 Klik hier]''' om het te downloaden.

Opmerkingen:
* Niet tevreden met de uitvoer? Op de [[{{MediaWiki:Coll-helppage}}|hulppagina over collecties]] staan tips om deze te verbeteren.",
	'coll-notfound_title' => 'Collectie niet gevonden',
	'coll-notfound_text' => 'De collectiepagina is niet gevonden.',
	'coll-is_cached' => '<ul><li>Er is een versie van het document beschikbaar in de cache, dus opnieuw renderen was niet nodig.
<a href="$1">Opnieuw renderen.</a></li></ul>',
	'coll-excluded-templates' => '* Sjablonen in de category [[:Category:$1|$1]] worden genegeerd.',
	'coll-blacklisted-templates' => '* Sjablonen op de zwarte lijst [[:$1]] worden genegeerd.',
	'coll-return_to_collection' => '<p>Teruggaan naar <a href="$1">$2</a></p>',
	'coll-book_title' => 'Gedrukt boek bestellen',
	'coll-book_text' => 'U kunt een gedrukt boek bestellen dat uw paginacollectie bevat door een van de volgende print-on-demand-partners te bezoeken:',
	'coll-order_from_pp' => 'Boek bij $1 bestellen',
	'coll-about_pp' => 'Over $1',
	'coll-invalid_podpartner_title' => 'Ongeldige print on demand-partner',
	'coll-invalid_podpartner_msg' => 'De opgegeven print on demand-partner is ongeldig.
Neem contact op met uw MediaWiki-beheerder.',
	'coll-license' => 'Licentie',
	'coll-return_to' => 'Terug naar [[:$1]]',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'coll-collection' => 'Samling',
	'coll-empty' => 'tom',
	'coll-remove' => 'Fjern',
	'coll-title' => 'Tittel:',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nei',
	'coll-cancel' => 'Avbryt',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author H92
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'coll-desc' => 'Lag [[Special:Collection|sidesamlinger]] og generer PDF-filer',
	'coll-collection' => 'Samling',
	'coll-collections' => 'Samlinger',
	'coll-portlet_title' => 'Opprett en bok',
	'coll-add_page' => 'Legg til wikiside',
	'coll-remove_page' => 'Fjern wikiside',
	'coll-add_category' => 'Legg til kategori',
	'coll-load_collection' => 'Last samling',
	'coll-show_collection' => 'Vis samling',
	'coll-help_collections' => 'Hjelp for samlinger',
	'coll-empty' => 'tom',
	'coll-n_pages' => '$1 {{PLURAL:$1|side|sider}}',
	'coll-download_as' => 'Last ned som $1',
	'coll-noscript_text' => '<h1>JavaScript er påkrevd!</h1>
<strong>Nettleseren din støtter ikke JavaScript, eller JavaScript har blitt slått av. Denne siden vil ikke fungere riktig med mindre JavaScript er slått på.</strong>',
	'coll-intro_text' => 'Du kan samle sider, generere og laste ned en PDF-fil fra sidesamlinger og lagre sidesamlinger for senere bruk eller for deling.',
	'coll-helppage' => 'Help:Samlinger',
	'coll-too_big_cat' => 'Kategorien inneholder mer enn %PARAM% sider; kun de %PARAM% første sidene kan legges til i samlingen din.
Vil du legge dem til?',
	'coll-my_collection' => 'Min samling',
	'coll-download_title' => 'Last ned samling som PDF',
	'coll-download_text' => 'Klikk på knappen for å laste ned en automatisk generert PDF-fil av sidesamlingen din.',
	'coll-download' => 'Last ned',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Fjern',
	'coll-move_to_top' => 'Flytt til toppen',
	'coll-move_up' => 'Flytt opp',
	'coll-move_down' => 'Flytt ned',
	'coll-move_to_bottom' => 'Flytt til bunnen',
	'coll-title' => 'Tittel:',
	'coll-subtitle' => 'Undertittel:',
	'coll-contents' => 'Innhold',
	'coll-create_chapter' => 'Opprett nytt kapittel',
	'coll-sort_alphabetically' => 'Sorter sider alfabetisk',
	'coll-clear_collection' => 'Tøm samling',
	'coll-clear_confirm' => 'Vil du virkelig tømme samlingen?',
	'coll-rename' => 'Gi nytt navn',
	'coll-new_chapter' => 'Skriv inn navn for det nye kapittelet',
	'coll-rename_chapter' => 'Skriv inn kapittelets nye navn',
	'coll-no_such_category' => 'Ingen kategori ved dette navnet',
	'coll-notitle_title' => 'Fant ikke ut av sidens tittel.',
	'coll-post_failed_title' => 'POST-forespørsel mislyktes',
	'coll-post_failed_msg' => 'POST-forespørselen til $1 mislyktes ($2).',
	'coll-enter_title' => 'Skriv inn samlingens navn:',
	'coll-error_reponse' => 'Feilrespons fra tjeneren',
	'coll-empty_collection' => 'Tom samling',
	'coll-revision' => 'Revisjon: %PARAM%',
	'coll-save_collection_title' => 'Lagre samling',
	'coll-save_collection_text' => 'Velg en samlingstype og skriv inn en sidetittel for å lagre denne samlingen for senere bruk.',
	'coll-login_to_save' => 'Om du vil lagre samlingene for senere bruk, [[Special:UserLogin|logg inn eller opprett en konto]].',
	'coll-personal_collection_label' => 'Personlig samling:',
	'coll-community_collection_label' => 'Fellesskapssamling:',
	'coll-save_collection' => 'Lagre samling',
	'coll-save_category' => 'Samlinger lagres i kategorien [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => 'Siden finnes. Erstatte den?',
	'coll-overwrite_text' => 'En side ved navn [[:$1]] finnes fra før. Vil du erstatte den med samlingen din?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nei',
	'coll-disable_collection_text' => '<a href="$1">Klikk her</a> for å slutte å bruke samlinger for nå.',
	'coll-load_overwrite_text' => 'Du har allerede noen sider i samlingen din.
Vil du erstatte den eksisterende samlingen, legge til det nye innholdet eller avbryte lastingen av samlingen?',
	'coll-overwrite' => 'Erstatte',
	'coll-append' => 'Legge til',
	'coll-cancel' => 'Avbryt',
	'coll-limit_exceeded_title' => 'Samling for stor',
	'coll-limit_exceeded_text' => 'Sidesamlingen din er for stor. Ingen flere sider kan legges til.',
	'coll-rendering_title' => 'Oppretter',
	'coll-rendering_text' => "'''Vent mens dokumentet opprettes.'''

'''Framskritt:''' $1 % $2

Denne siden skal oppfriskes automatisk med noen sekunders mellomrom.
Om den ikke gjør det, trykk på oppdateringsknappen i nettleseren din.",
	'coll-rendering_finished_title' => 'Opprettet',
	'coll-rendering_finished_text' => "'''Dokumentfilen har blitt opprettet.'''
'''[$1 Klikk her]''' for å laste den ned.

Merk:
* Misfornøyd med resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjelpesiden for samlinger]] for måter å forbedre den på.",
	'coll-notfound_title' => 'Samling ikke funnet',
	'coll-notfound_text' => 'Kunne ikke finne samlingsside.',
	'coll-excluded-templates' => '* Maler i kategorien [[:Category:$1|$1]] har blitt utelatt.',
	'coll-blacklisted-templates' => '* Maler på svartelisten ([[:$1]]) har blitt utelatt.',
	'coll-return_to_collection' => '<p>Tilbake til <a href="$1">$2</a></p>',
	'coll-book_title' => 'Bestilling av trykt bok',
	'coll-book_text' => 'Du kan bestille en trykt bok med artikkelsamlingen din ved å besøke en av følgende trykkerpartnere:',
	'coll-order_from_pp' => 'Bestill bok fra $1',
	'coll-about_pp' => 'Om $1',
	'coll-invalid_podpartner_title' => 'Ugyldig POD-partner',
	'coll-invalid_podpartner_msg' => 'Den oppgitte POD-partneren er ugyldig.
Kontakt din MediaWiki-administrator.',
	'coll-license' => 'Lisens',
	'coll-return_to' => 'Tilbake til [[:$1]]',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'coll-desc' => "[[Special:Collection|Compilar de paginas]], generar de pdf's",
	'coll-collection' => 'Compilacion',
	'coll-collections' => 'Compilacions',
	'coll-portlet_title' => 'Crear un libre',
	'coll-add_page' => 'Apondre una pagina wiki',
	'coll-remove_page' => 'Levar una pagina wiki',
	'coll-add_category' => 'Apondre una categoria',
	'coll-load_collection' => 'Cargar una compilacion',
	'coll-show_collection' => 'Afichar la compilacion',
	'coll-help_collections' => 'Ajuda sus las compilacions',
	'coll-empty' => 'void',
	'coll-n_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'coll-download_as' => 'Telecargat coma $1',
	'coll-noscript_text' => "<h1>Javascript es necessari !</h1>
<strong>Vòstre navigador supòrta pas Javascript o se l'a desactivat.
Aquesta pagina s'aficharà pas corrèctament tant que javascript serà pas activat.</strong>",
	'coll-intro_text' => "Podètz collectar de paginas, generar e telecargar de fichièrs PDF dempuèi las colleccions de paginas o dels salvaments de las dichas colleccions per un usatge ulterior o per las partejar.

Vejatz [[{{MediaWiki:Coll-helppage}}|las paginas d'ajudas en matièra de colleccions]] per mai d'entresenhas.",
	'coll-helppage' => 'Help:Collections',
	'coll-too_big_cat' => 'La categoria conten mai de %PARAM% paginas, sonque las %PARAM% primièras paginas seràn apondudas a vòstra colleccion.',
	'coll-my_collection' => 'Ma compilacion',
	'coll-download_title' => 'Telecargar la compilacion en PDF',
	'coll-download_text' => 'Per telecargar un PDF generat automaticament a partir de vòstra compilacion, picatz sul boton.',
	'coll-download' => 'Telecargar',
	'coll-format_label' => 'Format :',
	'coll-remove' => 'Levar',
	'coll-move_to_top' => 'Desplaçar tot en naut',
	'coll-move_up' => 'Pujar',
	'coll-move_down' => 'Davalar',
	'coll-move_to_bottom' => 'Desplaçar tot en bas',
	'coll-title' => 'Títol :',
	'coll-subtitle' => 'Sostítol :',
	'coll-contents' => 'Contengut',
	'coll-create_chapter' => 'Crear un capitol novèl',
	'coll-sort_alphabetically' => 'Triar las paginas per òrdre alfabetic',
	'coll-clear_collection' => 'Voidar la compilacion',
	'coll-clear_confirm' => 'Volètz vertadièrament voidar vòstra compilacion ?',
	'coll-rename' => 'Tornar nomenar',
	'coll-new_chapter' => 'Entrar lo títol del capitol novèl',
	'coll-rename_chapter' => 'Entrar lo títol novèl pel capitol',
	'coll-no_such_category' => 'Pas de tala categoria',
	'coll-notitle_title' => 'Lo títol de la pagina pòt pas èsser determinat.',
	'coll-post_failed_title' => 'Fracàs de la requèsta POST',
	'coll-post_failed_msg' => 'La requèsta POST cap a $1 a pas capitat ($2).',
	'coll-mwserve_failed_title' => 'Error del servidor del rendut',
	'coll-mwserve_failed_msg' => 'Una error es intervenguda sul servidor balhant lo rendut : <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Picar un títol per la compilacion :',
	'coll-error_reponse' => 'Lo servidor a rencontrat una error',
	'coll-empty_collection' => 'Compilacion voida',
	'coll-revision' => 'Version : %PARAM%',
	'coll-save_collection_title' => 'Salvar la compilacion',
	'coll-save_collection_text' => 'Per salvar la compilacion, causissètz un tipe de compilacion e picatz un títol de pagina :',
	'coll-login_to_save' => 'Se volètz salvar vòstra compilacion, [[Special:UserLogin|vos cal vos connectar o vos crear un compte]].',
	'coll-personal_collection_label' => 'Compilacion personala :',
	'coll-community_collection_label' => 'Compilacion collectiva :',
	'coll-save_collection' => 'Salvar la compilacion',
	'coll-save_category' => 'Las colleccions son salvadas dins [[:Category:Collections|Colleccions]].',
	'coll-overwrite_title' => "La pagina existís. L'espotir ?",
	'coll-overwrite_text' => 'Una pagina amb lo títol [[:$1]] existís ja.
La volètz remplaçar per vòstra compilacion ?',
	'coll-yes' => 'Òc',
	'coll-no' => 'Non',
	'coll-disable_collection_text' => '<a href="$1">Clicatz aicí</a> per arrestar d’utilizar las colleccions tre ara.',
	'coll-load_overwrite_text' => "Ja avètz de paginas dins vòstra colleccion.
Volètz espotir vòstra compilacion actuala, i apondre lo contengut o alara anullar lo cargament d'aquesta ?",
	'coll-overwrite' => 'Espotir',
	'coll-append' => 'Apondre',
	'coll-cancel' => 'Anullar',
	'coll-limit_exceeded_title' => 'Compilacion tròp granda',
	'coll-limit_exceeded_text' => 'Vòstra compilacion es tròp granda.
Cap de pagina pòt pas èsser aponduda.',
	'coll-rendering_title' => 'Rendut',
	'coll-rendering_text' => "'''Pacientatz pendent que lo document es en cors de creacion.'''

'''Progression :''' $1% $2

Aquesta pagina se deuriá actualizar regularament.
S'èra pas lo cas, clicatz sul boton d’actualizacion de vòstre navigador.",
	'coll-rendering_status' => "'''Estatut :''' $1",
	'coll-rendering_article' => '  (pagina wiki : $1)',
	'coll-rendering_page' => '  (pagina : $1)',
	'coll-rendering_finished_title' => 'Rendut acabat',
	'coll-rendering_finished_text' => "'''Lo fichièr document es estat creat.'''
[$1 Clicatz aicí] per lo telecargar sus vòstre ordenador.

Nòtas :
Pas satisfach(a) de la sortida ? Vejatz [[{{MediaWiki:Coll-helppage}}|la pagina d’ajuda que concernís las colleccions]] per las possibilitats de melhorament.",
	'coll-notfound_title' => 'Compilacion pas trobada',
	'coll-notfound_text' => 'Pòt pas trobar la compilacion.',
	'coll-is_cached' => '<ul><li>Una version en amagatal del document es estada trobada, cap de rendut èra pas necessari. <a href="$1">Forçar lo rendut un còp de mai.</a></li></ul>',
	'coll-excluded-templates' => '* De modèls dins la categoria [[:Category:$1|$1]] son estats excluts.',
	'coll-blacklisted-templates' => '* De modèls dins la tièra negra [[:$1]] son estats excluts.',
	'coll-return_to_collection' => '<p>Tornar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Comandar un libre imprimit',
	'coll-book_text' => "Podètz comandar un libre imprimit contenent vòstra colleccion d'articles en visitant una demanda d'impression de la part de partenaris :",
	'coll-order_from_pp' => 'Comandar lo libre dempuèi $1',
	'coll-about_pp' => 'A prepaus de $1',
	'coll-invalid_podpartner_title' => 'Partenari POD incorrècte.',
	'coll-invalid_podpartner_msg' => 'Lo partenari POD indicat es incorrècte.
Contactatz vòstre administrator Mediawiki.',
	'coll-license' => 'Licéncia',
	'coll-return_to' => 'Tornar cap a [[:$1]]',
);

/** Ossetic (Иронау)
 * @author Amikeco
 */
$messages['os'] = array(
	'coll-title' => 'Сæргонд:',
	'coll-yes' => 'О',
	'coll-no' => 'Нæ',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Jwitos
 * @author Leinad
 * @author Masti
 * @author McMonster
 * @author Sp5uhe
 * @author Wpedzich
 */
$messages['pl'] = array(
	'coll-desc' => 'Umożliwia [[Special:Collection|tworzenie kolekcji]] stron i zapisanie ich do pliku w formacie PDF',
	'coll-collection' => 'Kolekcja',
	'coll-collections' => 'Kolekcje',
	'coll-portlet_title' => 'Utwórz książkę',
	'coll-add_page' => 'Dodaj stronę',
	'coll-remove_page' => 'Usuń stronę',
	'coll-add_category' => 'Dodaj kategorię',
	'coll-load_collection' => 'Załaduj kolekcję',
	'coll-show_collection' => 'Pokaż kolekcję',
	'coll-help_collections' => 'Pomoc kolekcji',
	'coll-empty' => 'pusty',
	'coll-n_pages' => '$1 {{PLURAL:$1|strona|strony|stron}}',
	'coll-download_as' => 'Pobierz jako $1',
	'coll-noscript_text' => '<h1>Potrzebny JavaScript!</h1>
<strong>Twoja przeglądarka nie obsługuje JavaScript lub został on wyłączony.
Strona nie będzie działać poprawnie, dopóki JavaScript nie zostanie włączony.</strong>',
	'coll-intro_text' => 'Narzędzie umożliwia tworzenie kolekcji stron, z których można wygenerować plik PDF, jak też zapisać je w celu późniejszego wykorzystania lub udostępnienia.

Więcej informacji na [[{{MediaWiki:Coll-helppage}}|stronie pomocy dotyczącej kolekcji]].',
	'coll-helppage' => 'Help:Kolekcje',
	'coll-too_big_cat' => 'Kategoria zawiera więcej niż %PARAM% stron, tylko pierwsze %PARAM% stron może być dodanych do Twojej kolekcji.
Czy chcesz je dodać?',
	'coll-my_collection' => 'Moja kolekcja',
	'coll-download_title' => 'Pobierz kolekcję jako PDF',
	'coll-download_text' => 'Naciśnij przycisk, by pobrać automatycznie wygenerowaną wersję PDF Twojej kolekcji stron',
	'coll-download' => 'Pobierz',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Usuń',
	'coll-move_to_top' => 'Przenieś na górę',
	'coll-move_up' => 'Przenieś w górę',
	'coll-move_down' => 'Przenieś w dół',
	'coll-move_to_bottom' => 'Przenieś na dół',
	'coll-title' => 'Tytuł:',
	'coll-subtitle' => 'Podtytuł:',
	'coll-contents' => 'Spis treści',
	'coll-create_chapter' => 'Utwórz nowy rozdział',
	'coll-sort_alphabetically' => 'Sortuj strony alfabetycznie',
	'coll-clear_collection' => 'Wyczyść kolekcję',
	'coll-clear_confirm' => 'Na pewno chcesz wyczyścić kolekcję?',
	'coll-rename' => 'Zmień nazwę',
	'coll-new_chapter' => 'Wprowadź nazwę dla nowego rozdziału',
	'coll-rename_chapter' => 'Wprowadź nową nazwę dla rozdziału',
	'coll-no_such_category' => 'Brak takiej kategorii',
	'coll-notitle_title' => 'Tytuł strony nie może być określony.',
	'coll-post_failed_title' => 'Żądanie POST nieudane',
	'coll-post_failed_msg' => 'Żądanie POST do $1 nie powiodło się ($2).',
	'coll-mwserve_failed_title' => 'Błąd serwera w renderowaniu',
	'coll-mwserve_failed_msg' => 'W renderującym serwerze pojawił się błąd: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Podaj tytuł kolekcji:',
	'coll-error_reponse' => 'Błąd odpowiedzi serwera',
	'coll-empty_collection' => 'Pusta kolekcja',
	'coll-revision' => 'Wersja: %PARAM%',
	'coll-save_collection_title' => 'Zapisz kolekcję',
	'coll-save_collection_text' => 'Aby zapisać kolekcję, wybierz jej rodzaj i tytuł:',
	'coll-login_to_save' => 'Jeśli chcesz zapisać kolekcję, [[Special:UserLogin|zaloguj się lub utwórz konto]].',
	'coll-personal_collection_label' => 'Kolekcja osobista:',
	'coll-community_collection_label' => 'Kolekcja społeczności:',
	'coll-save_collection' => 'Zapisz kolekcję',
	'coll-save_category' => 'Kolekcje zapisane są w kategorii [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => 'Strona już istnieje. Nadpisać?',
	'coll-overwrite_text' => 'Strona pod tytułem [[:$1]] już istnieje.
Chcesz ją zastąpić swoją kolekcją?',
	'coll-yes' => 'Tak',
	'coll-no' => 'Nie',
	'coll-disable_collection_text' => '<a href="$1">Zatrzymaj używanie kolekcji.</a>',
	'coll-load_overwrite_text' => 'Masz już strony w swojej kolekcji.
Czy chcesz nadpisać Twoją obecną kolekcję, dodać do niej nowe strony czy anulować ładowanie tej kolekcji?',
	'coll-overwrite' => 'Nadpisz',
	'coll-append' => 'Dopisz',
	'coll-cancel' => 'Anuluj',
	'coll-limit_exceeded_title' => 'Zbyt duża kolekcja',
	'coll-limit_exceeded_text' => 'Twoja kolekcja stron jest zbyt duża.
Nie można dodać więcej stron.',
	'coll-rendering_title' => 'Renderowanie',
	'coll-rendering_text' => "'''Proszę czekać, trwa generowanie dokumentu.'''

'''Postęp''': $1% $2

Ta strona powinna się automatycznie odświeżać co kilka sekund.
Jeśli tak nie jest, proszę odświeżyć swoją przeglądarkę.",
	'coll-rendering_status' => "'''Status:''' $1",
	'coll-rendering_article' => '(wiki strona: $1)',
	'coll-rendering_page' => '(strona: $1)',
	'coll-rendering_finished_title' => 'Renderowanie zakończone',
	'coll-rendering_finished_text' => "'''Dokument został wygenerowany.'''
'''[$1 Kliknij tutaj]''' by pobrać go na swój komputer.

Uwaga:
* Nie jesteś zadowolony z wygenerowanego dokumentu? Zajrzyj na [[{{MediaWiki:Coll-helppage}}|stronę pomocy na temat kolekcji]] by dowiedzieć się jakie są możliwości poprawy dokumentu.",
	'coll-notfound_title' => 'Nie znaleziono kolekcji',
	'coll-notfound_text' => 'Nie udało się znaleźć strony kolekcji.',
	'coll-is_cached' => '<ul><li>Dokument zachował się w pamięci podręcznej, więc nie ma potrzeby renderowania. <a href="$1">Wymuś ponowane renderowanie.</a></li></ul>',
	'coll-excluded-templates' => '* Szablony w kategorii [[:Category:$1|$1]] zostały pominięte.',
	'coll-blacklisted-templates' => '* Szablony z czarnej listy [[:$1]] zostały pominięte.',
	'coll-return_to_collection' => '<p>Powróć do <a href="$1">$2</a></p>',
	'coll-book_title' => 'Zamów wydrukowaną książkę',
	'coll-book_text' => 'Możesz zamówić drukowaną książkę zawierającą kolekcję wybranych przez Ciebie stron. Odwiedź jednego z partnerów realizujących usługę wydruku na żądanie:',
	'coll-order_from_pp' => 'Zamów książkę z $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Niesprawny usługodawca wydruku na żądanie',
	'coll-invalid_podpartner_msg' => 'Wybrany partner wydruku na żądanie nie funkcjonuje.
Skontaktuj się z administratorem tego serwisu MediaWiki.',
	'coll-license' => 'Licencja',
	'coll-return_to' => 'Powrót do [[:$1]]',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'coll-collection' => 'غونډ',
	'coll-collections' => 'غونډونه',
	'coll-portlet_title' => 'زما غونډ',
	'coll-add_page' => 'مخ ورګډول',
	'coll-add_category' => 'وېشنيزه ورګډول',
	'coll-help_collections' => 'د غونډونو لارښود',
	'coll-empty' => 'تش',
	'coll-my_collection' => 'زما غونډ',
	'coll-remove' => 'غورځول',
	'coll-title' => 'سرليک:',
	'coll-subtitle' => 'لمنليک:',
	'coll-contents' => 'مينځپانګه',
	'coll-create_chapter' => 'يو نوی څپرکی جوړول',
	'coll-rename' => 'نوم بدلول',
	'coll-no_such_category' => 'داسې هېڅ کومه وېشنيزه نشته',
	'coll-save_collection_title' => 'غونډ خوندي کول',
	'coll-yes' => 'هو',
	'coll-no' => 'نه',
	'coll-notfound_title' => 'غونډ و نه موندلای شو',
	'coll-about_pp' => 'د $1 په اړه',
);

/** Portuguese (Português)
 * @author 555
 * @author Lijealso
 * @author MF-Warburg
 * @author Malafaya
 */
$messages['pt'] = array(
	'coll-desc' => '[[Special:Collection|Colecciona páginas]], gera PDFs',
	'coll-collection' => 'Colecção',
	'coll-collections' => 'Colecções',
	'coll-portlet_title' => 'Criar um livro',
	'coll-add_page' => 'Adicionar página wiki',
	'coll-remove_page' => 'Remover página wiki',
	'coll-add_category' => 'Adicionar categoria',
	'coll-load_collection' => 'Carregar colecção',
	'coll-show_collection' => 'Mostrar colecção',
	'coll-help_collections' => 'Ajuda de colecções',
	'coll-empty' => 'vazia',
	'coll-n_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'coll-download_as' => 'Descarregar como $1',
	'coll-noscript_text' => '<h1>JavaScript é Requerido!</h1>
<strong>O seu "browser" não suporta JavaScript, ou o JavaScript foi desactivado.
Esta página não funcionará correctamente, excepto se o JavaScript for activado.</strong>',
	'coll-intro_text' => 'Você pode coleccionar páginas, gerar e descarregar um ficheiro PDF de colecções de páginas e gravar colecções de páginas para usar mais tarde ou partilhá-las.

Veja a [[{{MediaWiki:Coll-helppage}}|página de ajuda sobre colecções]] para mais informação.',
	'coll-helppage' => 'Help:Colecções',
	'coll-too_big_cat' => 'A categoria possui mais de %PARAM% páginas. Apenas as primeiras %PARAM% páginas poderão ser adicionadas em sua colecção.
Deseja adicioná-las?',
	'coll-my_collection' => 'Minha Colecção',
	'coll-download_title' => 'Descarregar Colecção',
	'coll-download_text' => 'Para descarregar um ficheiro automaticamente gerado a partir da sua colecção de páginas, escolha um formato e carregue no botão.',
	'coll-download' => 'Descarregar',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Remover',
	'coll-move_to_top' => 'Mover para o topo',
	'coll-move_up' => 'Mover acima',
	'coll-move_down' => 'Mover abaixo',
	'coll-move_to_bottom' => 'Mover para o fundo',
	'coll-title' => 'Título:',
	'coll-subtitle' => 'Subtítulo:',
	'coll-contents' => 'Conteúdo',
	'coll-create_chapter' => 'Criar novo capítulo',
	'coll-sort_alphabetically' => 'Ordenar páginas alfabeticamente',
	'coll-clear_collection' => 'Limpar colecção',
	'coll-clear_confirm' => 'De certeza que quer limpar a sua colecção?',
	'coll-rename' => 'Renomear',
	'coll-new_chapter' => 'Introduza o nome do novo capítulo',
	'coll-rename_chapter' => 'Introduza o nome do capítulo',
	'coll-no_such_category' => 'Não existe essa categoria',
	'coll-notitle_title' => 'Não foi possível determinar o título da página.',
	'coll-post_failed_title' => 'Pedido POST falhou',
	'coll-post_failed_msg' => 'O pedido POST feito à $1 falhou ($2).',
	'coll-mwserve_failed_title' => 'Erro no servidor de renderização',
	'coll-mwserve_failed_msg' => 'Ocorreu um erro no servidor de renderização: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Introduza título para a colecção:',
	'coll-error_reponse' => 'Resposta de erro do servidor',
	'coll-empty_collection' => 'Colecção vazia',
	'coll-revision' => 'Revisão: %PARAM%',
	'coll-save_collection_title' => 'Gravar Colecção',
	'coll-save_collection_text' => 'Para guardar uma colecção para uso futuro, escolha um tipo de colecção e introduza o título da página:',
	'coll-login_to_save' => 'Se pretende gravar colecções para mais tarde, por favor, [[Special:UserLogin|autentique-se ou crie uma conta]].',
	'coll-personal_collection_label' => 'Colecção pessoal:',
	'coll-community_collection_label' => 'Colecção comunitária:',
	'coll-save_collection' => 'Gravar Colecção',
	'coll-save_category' => 'As colecções são salvas na categoria [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => 'A página existe. Escrever por cima?',
	'coll-overwrite_text' => 'Um página com o nome [[:$1]] já existe.
Deseja substituí-la pela sua colecção?',
	'coll-yes' => 'Sim',
	'coll-no' => 'Não',
	'coll-disable_collection_text' => '<a href="$1">Clique aqui</a> para deixar de usar colecções por agora.',
	'coll-load_overwrite_text' => 'Você já possui algumas páginas na sua colecção.
Pretende reescrever a sua colecção, adicionando o novo conteúdo, ou cancelar o carregamento desta colecção?',
	'coll-overwrite' => 'Reescrever',
	'coll-append' => 'Adicionar',
	'coll-cancel' => 'Cancelar',
	'coll-limit_exceeded_title' => 'Colecção Demasiado Grande',
	'coll-limit_exceeded_text' => 'A usa coleccção de página é demasiado grande.
Não poderão ser adicionadas mais páginas.',
	'coll-rendering_title' => 'Renderizando',
	'coll-rendering_text' => "'''Por favor, aguarde enquanto o documento é gerado.'''

Progresso: '''$1%'''.

Este página deverá refrescar automaticamente após alguns segundos.
Se isto não funcionar, por favor utilize o botão de refrescamento do seu navegador.",
	'coll-rendering_finished_title' => 'Renderização concluída',
	'coll-rendering_finished_text' => "'''O ficheiro foi gerado.'''
'''[$1 Clique aqui]''' para transferir a seu computador.

Notas:
*Não está satisfeito com o resultado? Veja [[{{MediaWiki:Coll-helppage}}|a página de ajuda sobre colecções]] para possibilidades de aprimoramentos.",
	'coll-notfound_title' => 'Colecção Não Encontrada',
	'coll-notfound_text' => 'Não foi possível encontrar a página da colecção.',
	'coll-is_cached' => '<ul><li>Foi encontrada uma versão deste documento em cache, dispensando a renderização. <a href="$1"> Forçar nova renderização.</a></li></ul>',
	'coll-excluded-templates' => '* Prédefinições na categoria [[:Category:$1|$1]] foram excluídas.',
	'coll-blacklisted-templates' => '* Prédefinições na lista negra [[:$1]] foram excluídas.',
	'coll-return_to_collection' => '<p>Regressar a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Encomendar Livro Impresso',
	'coll-book_text' => 'Você pode encomendar um livro impresso contendo a sua colecção de páginas visitando um dos seguintes parceiros de impressão a pedido:',
	'coll-order_from_pp' => 'Encomendar o livro de $1',
	'coll-about_pp' => 'Sobre $1',
	'coll-invalid_podpartner_title' => 'Parceiro POD inválido',
	'coll-invalid_podpartner_msg' => 'O parceiro POD é inválido.
Por favor, contacte o seu administrador MediaWiki.',
	'coll-license' => 'Licença',
	'coll-return_to' => 'Voltar para [[:$1]]',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'coll-desc' => '[[Special:Collection|Colecţionează pagini]], generează fişiere PDF',
	'coll-collection' => 'Colecţie',
	'coll-collections' => 'Colecţii',
	'coll-portlet_title' => 'Colecţie',
	'coll-add_page' => 'Adaugă pagină',
	'coll-remove_page' => 'Elimină pagină',
	'coll-add_category' => 'Adaugă categorie',
	'coll-load_collection' => 'Încarcă colecţie',
	'coll-show_collection' => 'Arată colecţie',
	'coll-my_collection' => 'Colecţia mea',
	'coll-remove' => 'Elimină',
	'coll-title' => 'Titlu:',
	'coll-subtitle' => 'Subtitlu:',
	'coll-contents' => 'Cuprins',
	'coll-create_chapter' => 'Creează capitol nou',
	'coll-sort_alphabetically' => 'Ordonează paginile alfabetic',
	'coll-rename' => 'Redenumeşte',
	'coll-post_failed_title' => 'Cerere POST eşuată',
	'coll-post_failed_msg' => 'Cererea POST către $1 a eşuat ($2).',
	'coll-error_reponse' => 'Răspuns de eroare de la server',
	'coll-empty_collection' => 'Colecţie goală',
	'coll-revision' => 'Versiune: %PARAM%',
	'coll-save_collection_title' => 'Salvează colecţia',
	'coll-personal_collection_label' => 'Colecţie personală:',
	'coll-save_collection' => 'Salvează colecţia',
	'coll-overwrite_title' => 'Pagina există.
Suprascrie?',
	'coll-yes' => 'Da',
	'coll-no' => 'Nu',
	'coll-overwrite' => 'Suprascrie',
	'coll-cancel' => 'Anulează',
	'coll-notfound_title' => 'Colecţie negăsită',
	'coll-return_to_collection' => '<p>Întoarcere la <a href="$1">$2</a></p>',
	'coll-order_from_pp' => 'Comandă carte de la $1',
	'coll-about_pp' => 'Despre $1',
	'coll-license' => 'Licenţă',
);

/** Russian (Русский)
 * @author Ahonc
 * @author Ferrer
 * @author Innv
 * @author Kaganer
 * @author MaxSem
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'coll-desc' => '[[Special:Collection|Собирает коллекции страниц]], создаёт PDF',
	'coll-collection' => 'Коллекция',
	'coll-collections' => 'Коллекции',
	'coll-portlet_title' => 'Создать книгу',
	'coll-add_page' => 'Добавить страницу',
	'coll-remove_page' => 'Удалить страницу',
	'coll-add_category' => 'Добавить категорию',
	'coll-load_collection' => 'Загрузить коллекцию',
	'coll-show_collection' => 'Показать коллекцию',
	'coll-help_collections' => 'Справка по коллекциям',
	'coll-empty' => 'пустая',
	'coll-n_pages' => '$1 {{PLURAL:$1|страница|страницы|страниц}}',
	'coll-download_as' => 'Загрузить как $1',
	'coll-noscript_text' => '<h1>Требуется JavaScript!</h1>
<strong>Ваш браузер не поддерживает JavaScript или данная поддержка была отключена.
Эта страница не будет работать правильно, если JavaScript не включен.</strong>',
	'coll-intro_text' => 'Вы можете объединить страницы в коллекцию, создать и скачать PDF-файл с набором страниц, или сохранить коллекцию страниц для последующей работы или обмена.

Подробности можно найти на [[{{MediaWiki:Coll-helppage}}|справочной странице о коллекциях]].',
	'coll-helppage' => 'Help:Коллекции',
	'coll-too_big_cat' => 'Категория содержит более %PARAM% страниц, в коллекцию могут быть добавлены только первые %PARAM% страниц.
Желаете ли вы их добавить?',
	'coll-my_collection' => 'Моя коллекция',
	'coll-download_title' => 'Скачать коллекцию как PDF',
	'coll-download_text' => 'Нажмите кнопку, чтобы скачать автоматически созданный PDF-файл с вашей коллекций страниц.',
	'coll-download' => 'Загрузить',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Удалить',
	'coll-move_to_top' => 'Передвинуть наверх',
	'coll-move_up' => 'Передвинуть выше',
	'coll-move_down' => 'Передвинуть ниже',
	'coll-move_to_bottom' => 'Передвинуть вниз',
	'coll-title' => 'Название:',
	'coll-subtitle' => 'Подзаголовок:',
	'coll-contents' => 'Содержание',
	'coll-create_chapter' => 'Создать новую главу',
	'coll-sort_alphabetically' => 'Упорядочивать страницы по алфавиту',
	'coll-clear_collection' => 'Очистить коллекцию',
	'coll-clear_confirm' => 'Вы действительно хотите очистить свою коллекцию?',
	'coll-rename' => 'Переименовать',
	'coll-new_chapter' => 'Введите имя для новой главы',
	'coll-rename_chapter' => 'Введите новое имя главы',
	'coll-no_such_category' => 'Нет такой категории',
	'coll-notitle_title' => 'Заголовок страницы не может быть определён.',
	'coll-post_failed_title' => 'POST-запрос не выполнен',
	'coll-post_failed_msg' => 'POST-запрос к $1 не выполнен ($2).',
	'coll-mwserve_failed_title' => 'Ошибка сервера отрисовки',
	'coll-mwserve_failed_msg' => 'На сервере отрисовки произошла ошибка: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Введите название коллекции:',
	'coll-error_reponse' => 'Ошибка ответа сервера',
	'coll-empty_collection' => 'Пустая коллекция',
	'coll-revision' => 'Версия: %PARAM%',
	'coll-save_collection_title' => 'Сохранить коллекцию',
	'coll-save_collection_text' => 'Чтобы сохранить коллекцию для дальнейшего использования, выберите тип коллекции и введите имя страницы:',
	'coll-login_to_save' => 'Чтобы сохранить коллекцию для дальнейшего использования, пожалуйста, [[Special:UserLogin|представьтесь системе или создайте учётную запись]].',
	'coll-personal_collection_label' => 'Личная коллекция:',
	'coll-community_collection_label' => 'Коллекция сообщества:',
	'coll-save_collection' => 'Сохранить коллекцию',
	'coll-save_category' => 'Коллекции сохранены в категории [[:Категория:Коллекции|Коллекции]].',
	'coll-overwrite_title' => 'Страница существует. Перезаписать?',
	'coll-overwrite_text' => 'Страница с именем [[:$1]] уже существует.
Вы хотите чтобы она была заменена вашей коллекцией?',
	'coll-yes' => 'Да',
	'coll-no' => 'Нет',
	'coll-disable_collection_text' => '<a href="$1">Нажмите здесь</a>, чтобы прекратить использовать коллекции сейчас.',
	'coll-load_overwrite_text' => 'У вас уже есть несколько страниц в коллекции.
Вы хотите перезаписать вашу текущею коллекцию, добавить новый материал или отменить загрузку коллекции?',
	'coll-overwrite' => 'Перезаписать',
	'coll-append' => 'Добавить',
	'coll-cancel' => 'Отменить',
	'coll-limit_exceeded_title' => 'Коллекция слишком большая',
	'coll-limit_exceeded_text' => 'Ваша коллекция слишком большая.
В неё нельзя больше добавлять страницы.',
	'coll-rendering_title' => 'Создание',
	'coll-rendering_text' => "'''Пожалуйста, подождите, идёт создание документа.'''

'''Ход работы:''' $1 % $2.

Эта страница должна обновляться раз в несколько секунд.
Если этого не происходит, пожалуйста, нажмите кнопку «обновить» браузера.",
	'coll-rendering_status' => "'''Статус:''' $1",
	'coll-rendering_article' => '(статья: $1)',
	'coll-rendering_page' => '  (страница: $1)',
	'coll-rendering_finished_title' => 'Создание завершено',
	'coll-rendering_finished_text' => "'''Файл документа создан.'''
'''[$1 Нажмите здесь]''', чтобы скачать его к себе на компьютер.

Отметьте:
* Не удовлетворены результатом? Возможности его улучшения описаны на [[{{MediaWiki:Coll-helppage}}|справочной странице о коллекциях]].",
	'coll-notfound_title' => 'Коллекция не найдена',
	'coll-notfound_text' => 'Невозможно найти страницу коллекции.',
	'coll-is_cached' => '<ul><li>Найдена закэшированная версия этого документа, отрисовка не потребовалась. <a href="$1">Всё-таки запустить отрисовку.</a></li></ul>',
	'coll-excluded-templates' => '* Шаблоны в категории [[:Категория:$1|$1]] были исключены.',
	'coll-blacklisted-templates' => '* Шаблоны в чёрном списке [[:$1]] были исключены.',
	'coll-return_to_collection' => '<p>Назад к <a href="$1">$2</a></p>',
	'coll-book_title' => 'Заказать печатную книгу',
	'coll-book_text' => 'Вы можете заказать печатную книгу, содержащую вашу коллекцию страниц, воспользовавшись одним из следующих предложений печати по запросу:',
	'coll-order_from_pp' => 'Заказ книги в $1',
	'coll-about_pp' => 'О $1',
	'coll-invalid_podpartner_title' => 'Недействительный POD-партнёр',
	'coll-invalid_podpartner_msg' => 'Предоставляемый POD-партнёр недействителен.
Пожалуйста, свяжитесь с вашим администратором MediaWiki.',
	'coll-license' => 'Лицензия',
	'coll-return_to' => 'Возврат к [[:$1]]',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'coll-desc' => 'Vytváranie [[Special:Collection|kolekcie stránok]], tvorba PDF',
	'coll-collection' => 'Kolekcia',
	'coll-collections' => 'Kolekcie',
	'coll-portlet_title' => 'Vytvoriť knihu',
	'coll-add_page' => 'Pridať wiki stránku',
	'coll-remove_page' => 'Odstrániť wiki stránku',
	'coll-add_category' => 'Pridať kategóriu',
	'coll-load_collection' => 'Načítať kolekciu',
	'coll-show_collection' => 'Zobraziť kolekciu',
	'coll-help_collections' => 'Pomocník ku kolekciám',
	'coll-empty' => 'prázdna',
	'coll-n_pages' => '$1 {{PLURAL:$1|stránka|stránky|stránok}}',
	'coll-download_as' => 'Stiahnuť ako $1',
	'coll-noscript_text' => '<h1>Vyžaduje sa JavaScript!</h1>
<strong>Váš prehliadač nepodporuje JavaScript alebo máte JavaScript vypnutý.
Táto stránka nebude správne fungovať ak nezapnete JavaScript.</strong>',
	'coll-intro_text' => 'Môžete vytvárať kolekcie stránok, vytvárať a stiahnuť PDF súbor z kolekcie stránok a ukladať kolekcie stránok pre neskoršie využitie alebo ich zdieľať.

Pozri ďalšie informácie na [[{{MediaWiki:Coll-helppage}}|stránke pomocníka o kolekciách]].',
	'coll-helppage' => 'Help:Kolekcie',
	'coll-too_big_cat' => 'Vaša kateǵoria obsahuje viac ako %PARAM% stránok. Do kolekcie je možné pridať iba prvých %PARAM% stránok.
Chcete ich pridať?',
	'coll-my_collection' => 'Moja kolekcia',
	'coll-download_title' => 'Stiahnuť kolekciu ako PDF',
	'coll-download_text' => 'Stiahnuť automaticky vytvorený PDF súbor vašej kolekcie stránok. Kliknite na tlačidlo.',
	'coll-download' => 'Stiahnuť',
	'coll-format_label' => 'Formát:',
	'coll-remove' => 'Odstrániť',
	'coll-move_to_top' => 'Presunúť na vrch',
	'coll-move_up' => 'Presunúť vyššie',
	'coll-move_down' => 'Presunúť nižšie',
	'coll-move_to_bottom' => 'Presunúť na spodok',
	'coll-title' => 'Názov:',
	'coll-subtitle' => 'Podnázov:',
	'coll-contents' => 'Obsah',
	'coll-create_chapter' => 'Vytvoriť novú kapitolu',
	'coll-sort_alphabetically' => 'Zoradiť stránky abecedne',
	'coll-clear_collection' => 'Vyčistiť kolekciu',
	'coll-clear_confirm' => 'Naozaj chcete vyčistiť svoju kolekciu?',
	'coll-rename' => 'Premenovať',
	'coll-new_chapter' => 'Zadajte názov novej kapitoly',
	'coll-rename_chapter' => 'Zadajte nový názov kapitoly',
	'coll-no_such_category' => 'Taká kategória neexistuje',
	'coll-notitle_title' => 'Názov stránky nebolo možné určiť.',
	'coll-post_failed_title' => 'Chyba požiadavky POST',
	'coll-post_failed_msg' => 'Chyba požiadavky POST na $1 ($2).',
	'coll-mwserve_failed_title' => 'Chyba vykresľovacieho servera',
	'coll-mwserve_failed_msg' => 'Vyskytla sa chyba vykresľovacieho servera: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Zadajte názov kolekcie:',
	'coll-error_reponse' => 'Chybná odpoveď servera',
	'coll-empty_collection' => 'Prázdna kolekcia',
	'coll-revision' => 'Revízia: %PARAM%',
	'coll-save_collection_title' => 'Uložiť kolekciu',
	'coll-save_collection_text' => 'Túto kolekciu môžete uložiť pre neskoršie použitie po zadaní typu kolekcie a názvu stránky:',
	'coll-login_to_save' => 'Ak chcete ukladať kolekcie pre neskoršie použitie, prosím, [[Special:UserLogin|prihláste sa alebo si vytvorte účet]].',
	'coll-personal_collection_label' => 'Osobné kolekcie:',
	'coll-community_collection_label' => 'Komunitné kolekcie:',
	'coll-save_collection' => 'Uložiť kolekciu',
	'coll-save_category' => 'Kolekcie sa ukladajú v kategórii [[:Category:Collections|Kolekcie]].',
	'coll-overwrite_title' => 'Stránka existuje. Prepísať?',
	'coll-overwrite_text' => 'Stránka s názvom [[:$1]] už existuje.
Chcete ju nahradiť svojou kolekciou?',
	'coll-yes' => 'Áno',
	'coll-no' => 'Nie',
	'coll-disable_collection_text' => '<a href="$1">Zastaviť používanie kolekcií</a>.',
	'coll-load_overwrite_text' => 'Vo vašej kolekcii sa už nachádzajú stránky.
Chcete prepísať svoju existujúcu kolekciu, pridať do nej obsah alebo zrušiť načítanie tejto kolekcie?',
	'coll-overwrite' => 'Prepísať',
	'coll-append' => 'Pridať',
	'coll-cancel' => 'Zrušiť',
	'coll-limit_exceeded_title' => 'Kolekcia je príliš veľká',
	'coll-limit_exceeded_text' => 'Vaša kolekcia stránok je príliš veľká.
Nie je možné pridať ďalšie stránky.',
	'coll-rendering_title' => 'Vykresľovanie',
	'coll-rendering_text' => "'''Prosím, čakajte, kým sa vytvorí dokument.'''

Priebeh: '''$1 %'''.

Táto stránka by sa mala vždy po niekoľkých sekundách obnoviť.
Ak to nefunguje, stlačte prosím tlačidlo obnoviť vo vašom prehlidači.",
	'coll-rendering_finished_title' => 'Vykresľovanie je dokončené',
	'coll-rendering_finished_text' => "'''Súbor dokumentu bol vytvorený.'''
Môžete ho '''[$1 stiahnuť]''' na svoj počítač.

Poznámky:
* Nie ste spokojný s výstupom? Spôsoby možnej nápravy nájdete na [[{{MediaWiki:Coll-helppage}}|stránke pomocníka o kolekciách]].",
	'coll-notfound_title' => 'Kolekcia nenájdená',
	'coll-notfound_text' => 'Nebolo možné nájsť stránku kolekcie',
	'coll-is_cached' => '<ul><li>Bola nájdená verzia dokumentu vo vyrovnávacej pamäti, takže vykresľovanie nebolo potrebné. <a href="$1">Vynútiť opätovné vykreslenie.</a></li></ul>',
	'coll-excluded-templates' => '* Boli vynechané šablóny v kategórii [[:Category:$1|$1]].',
	'coll-blacklisted-templates' => '* Boli vynechané šablóny na čiernej listine [[:$1]].',
	'coll-return_to_collection' => '<p>Vrátiť sa na <a href="$1">$2</a></p>',
	'coll-book_title' => 'Objednať tlačenú knihu',
	'coll-book_text' => 'Môžete si objednať tlačenú knihu obsahujúcu vašu zbierku článkov. Navštívte jedného z nasledovných partnerov, ktorí tobia tlač na vyžiadanie:',
	'coll-order_from_pp' => 'Objednať knihu od $1',
	'coll-about_pp' => 'O $1',
	'coll-invalid_podpartner_title' => 'Neplatný POD partner',
	'coll-invalid_podpartner_msg' => 'Zadaný POD partner je neplatný.
Prosím, kontaktujte svojho správcu MediaWiki.',
	'coll-license' => 'Licencia',
	'coll-return_to' => 'Návrat na [[:$1]]',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Sasa Stefanovic
 */
$messages['sr-ec'] = array(
	'coll-remove' => 'Уклони',
	'coll-title' => 'Наслов:',
	'coll-yes' => 'Да',
	'coll-no' => 'Не',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'coll-desc' => '[[Special:Collection|Siedentouhoopestaalenge]], moak PDFs',
	'coll-collection' => 'Touhoopestaalenge',
	'coll-collections' => 'Touhoopestaalenge',
	'coll-portlet_title' => 'Kollektion',
	'coll-add_page' => 'Siede bietouföigje',
	'coll-remove_page' => 'Siede wächhoalje',
	'coll-add_category' => 'Kategorie bietouföigje',
	'coll-load_collection' => 'Touhoopestaalenge leede',
	'coll-show_collection' => 'Touhoopestaalenge wiese',
	'coll-help_collections' => 'Hälpe tou Touhoopestaalengen',
	'coll-empty' => 'loos',
	'coll-n_pages' => '$1 {{PLURAL:$1|Siede|Sieden}}',
	'coll-download_as' => 'As $1 deelleede',
	'coll-noscript_text' => '<h1>JavaScript is nöödich!</h1>
<strong>Dien Browser unnerstutset neen Javascript of Javascript wuude deaktivierd. Disse Siede däd nit gjucht funktionierje, soloange Javascript nit ferföigboar is.</strong>',
	'coll-intro_text' => 'Du koast Sieden touhoopestaale, n PDF deerap moakje un deelleede as uk Touhoopestaalengen foar ne leetere Ferweendenge twiskespiekerje un mäd uur Benutsere deele.

Sjuch ju [[{{MediaWiki:Coll-helppage}}|Hälpe bie Touhoopestaalengen]] foar wiedere Informatione.',
	'coll-helppage' => 'Help:Touhoopestaalengen',
	'coll-too_big_cat' => 'Ju Kategorie änthaalt moor as %PARAM% Sieden, deeruum konnen bloot do eerste %PARAM% Sieden fon dien Kollektion bietouföiged wäide.
Moatest du do bietouföigje?',
	'coll-my_collection' => 'Mien Touhoopestaalenge',
	'coll-download_title' => 'Touhoopestaalenge as PDF deelleede',
	'coll-download_text' => 'Uum ne automatisk moakede PDF-Doatäi fon dien Touhoopestaalenge deeltouleeden, klik ap ap ju Schaltfläche.',
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
	'coll-create_chapter' => 'Näi Kapittel moakje',
	'coll-sort_alphabetically' => 'Sieden alphabetisk sortierje',
	'coll-clear_collection' => 'Touhoopestaalenge läskje',
	'coll-clear_confirm' => 'Moatest du dien Touhoopestaalenge wuudelk läskje?',
	'coll-rename' => 'Uumebenaame',
	'coll-new_chapter' => 'Reek n Noome foar n näi Kapittel ien',
	'coll-rename_chapter' => 'Reek n näien Noome foar dät Kapittel ien',
	'coll-no_such_category' => 'Sun Kategorie rakt dät nit',
	'coll-notitle_title' => 'Die Tittel fon ju Siede kuud nit bestimd wäide.',
	'coll-post_failed_title' => 'POST-Anfroage failsloain',
	'coll-post_failed_msg' => 'Ju POST-Anfroage an $1 is failsloain ($2).',
	'coll-mwserve_failed_title' => 'Serverfailer',
	'coll-mwserve_failed_msg' => 'Ap dän Renderer-Server is n Failer aptreeden: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Tittel fon ju Touhoopestaalenge:',
	'coll-error_reponse' => 'Failermäldenge fon dän Server',
	'coll-empty_collection' => 'Loose Kollektion',
	'coll-revision' => 'Version: %PARAM%',
	'coll-save_collection_title' => 'Kollektion spiekerje',
	'coll-save_collection_text' => 'Uum disse Kollektion tou spiekerjen, wääl n Typ un reek n Tittel ien:',
	'coll-login_to_save' => 'Wan du Kollektione spiekerje moatest, [[Special:UserLogin|mäld die an of moak n Benutserkonto]].',
	'coll-personal_collection_label' => 'Persöönelke Kollektion:',
	'coll-community_collection_label' => 'Community Kollektion:',
	'coll-save_collection' => 'Kollektion spiekerje',
	'coll-overwrite_title' => 'Siede bestoant. Uurschrieuwe?',
	'coll-overwrite_text' => 'Ne Siede mäd dän Noome [[:$1]] bestoant al.
Moatest du ju truch dien Kollektion ärsätte?',
	'coll-yes' => 'Jee',
	'coll-no' => 'Noa',
	'coll-disable_collection_text' => '<a href="$1">Kollektion läskje un ätter ju Haudsiede wieruume gunge.</a>',
	'coll-load_overwrite_text' => 'Dien Kollektion änthaalt al wäkke Sieden.
Moatest du ju aktuelle Kollektion uurschrieuwe, do näie Sieden anhongje of dät Leeden fon disse Kollektion oubreeke?',
	'coll-overwrite' => 'Uurschrieuwe',
	'coll-append' => 'Anhongje',
	'coll-cancel' => 'Oubreeke',
	'coll-limit_exceeded_title' => 'Kollektion tou groot',
	'coll-limit_exceeded_text' => 'Dien Kollektion is tou groot.
Deer konnen neen Sieden moor bietouföiged wäide.',
	'coll-rendering_title' => 'An t Moakjen',
	'coll-rendering_text' => "'''Täif, bit dät Dokument moaked wuuden is.'''

Foutschrit: '''$1 %'''.

Disse Siede schuul sik älke poor Sekunden fonsälwen aktualisierje.
Fals dit daach nit geböärt, druk dan dän „Aktualisierje“-Knoop (maast F5) fon dien Browser.",
	'coll-rendering_finished_title' => 'Kloor moaked',
	'coll-rendering_finished_text' => "'''Ju Doatäi wuud mäd Ärfoulch moaked.'''
'''[$1 Klik hier],''' uum ju Doatäi deeltouleeden.

Bäst du nit mäd dät Resultoat toufree?
Muugelkhaide tou ju Ferbeeterenge fon ju Uutgoawe finst du ap ju [[{{MediaWiki:Coll-helppage}}|Hälpesiede uur do Siedenkollektione]].",
	'coll-notfound_title' => 'Kollektion nit fuunen',
	'coll-notfound_text' => 'Dien Kollektion kuud nit fuunen wäide.',
	'coll-is_cached' => '<ul><li>Der is ne twiskespiekerde Version fon dät Dokument foarhounden, so dät neen Renderjen nöödich waas. <a href="$1">Näiränderjen outwinge.</a></li></ul>',
	'coll-excluded-templates' => '* Foarloagen uut ju Kategorie [[:Category:$1|$1]] wuuden uutsleeten.',
	'coll-blacklisted-templates' => '* Foarloagen fon ju swotte Lieste [[:$1]] wuuden uutsleeten.',
	'coll-return_to_collection' => 'Tourääch tou <a href="$1">$2</a>',
	'coll-book_title' => 'Drukuutgoawe bestaale',
	'coll-book_text' => "Du koast bie do foulgjende ''Print-on-Demand''-Partnere ne drukte Boukuutgoawe bestaale:",
	'coll-order_from_pp' => 'Bestaal Bouk bie $1',
	'coll-about_pp' => 'Uur $1',
	'coll-invalid_podpartner_title' => 'Uungultiger Print-on-Demand-Paatender',
	'coll-invalid_podpartner_msg' => 'Do Angoawen tou dän Print-on-Demand-Paatender sunt failerhaft.
Kontaktier dän MediaWiki-Administrator.',
	'coll-license' => 'Lizenz',
	'coll-return_to' => 'Tourääch tou [[:$1]]',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'coll-add_page' => 'Nambah kaca',
	'coll-remove_page' => 'Miceun kaca',
	'coll-add_category' => 'Nambah kategori',
	'coll-empty' => 'kosong',
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
 * @author Boivie
 * @author H92
 * @author Jon Harald Søby
 * @author M.M.S.
 * @author Najami
 * @author Sannab
 */
$messages['sv'] = array(
	'coll-desc' => '[[Special:Collection|Samla sidor]], generera PDF filer',
	'coll-collection' => 'Samling',
	'coll-collections' => 'Samlingar',
	'coll-portlet_title' => 'Skapa en bok',
	'coll-add_page' => 'Lägg till wikisida',
	'coll-remove_page' => 'Ta bort wikisida',
	'coll-add_category' => 'Lägg till kategori',
	'coll-load_collection' => 'Ladda samling',
	'coll-show_collection' => 'Visa samling',
	'coll-help_collections' => 'Hjälp för samlingar',
	'coll-empty' => 'tom',
	'coll-n_pages' => '$1 {{PLURAL:$1|sida|sidor}}',
	'coll-download_as' => 'Ladda ner som $1',
	'coll-noscript_text' => '<h1>JavaScript är nödvändigt!</h1>
<strong>Din webbläsare stödjer inte JavaScript eller har JavaScript blivigt avslagen.
Denna sida kommer inte att fungera korrekt, tills JavaScript är tillgängligt.</strong>',
	'coll-intro_text' => 'Du kan samla sidor, generera och ladda ner en PDF fil från sid samlingar och spara sid samlingar för senare bruk eller för delning.

Se [[{{MediaWiki:Coll-helppage}}|hjälp sidan om samlingar]] för mer information.',
	'coll-helppage' => 'Help:Samlingar',
	'coll-too_big_cat' => 'Kategorin innehåller mer än %PARAM% sidor, endast de %PARAM% första sidorna kan läggas till till din samling.
Vill du lägga till dem?',
	'coll-my_collection' => 'Min samling',
	'coll-download_title' => 'Ladda ner samling som PDF',
	'coll-download_text' => 'För att ladda ner en automatisk genererad PDF-fil av din sidsamling, klicka på knappen.',
	'coll-download' => 'Ladda ner',
	'coll-format_label' => 'Format:',
	'coll-remove' => 'Ta bort',
	'coll-move_to_top' => 'Flytta till toppen',
	'coll-move_up' => 'Flytta upp',
	'coll-move_down' => 'Flytta ner',
	'coll-move_to_bottom' => 'Flytta till botten',
	'coll-title' => 'Titel:',
	'coll-subtitle' => 'Undertitel:',
	'coll-contents' => 'Innehåll',
	'coll-create_chapter' => 'Skapa nytt kapitel',
	'coll-sort_alphabetically' => 'Sortera sidor alfabetiskt',
	'coll-clear_collection' => 'Töm samling',
	'coll-clear_confirm' => 'Vill du verkligen tömma din samling?',
	'coll-rename' => 'Byt name',
	'coll-new_chapter' => 'Välj ett namn för det nya kapitlet',
	'coll-rename_chapter' => 'Välj ett nytt namn för kapitlet',
	'coll-no_such_category' => 'Ingen sådan kategori',
	'coll-notitle_title' => 'Titeln av sidan kunde inte fastställas.',
	'coll-post_failed_title' => 'POST-begäring avslagen',
	'coll-post_failed_msg' => 'POST-begäringen till $1 avslagen ($2).',
	'coll-mwserve_failed_title' => 'Render-serverfel',
	'coll-mwserve_failed_msg' => 'Ett fel uppstod på renderservern: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Skriv in samlingens namn:',
	'coll-error_reponse' => 'Felrespons från servern',
	'coll-empty_collection' => 'Tom samling',
	'coll-revision' => 'Revision: %PARAM%',
	'coll-save_collection_title' => 'Spara samling',
	'coll-save_collection_text' => 'För att spara denna samling för senare bruk, välj en samlingstyp och skriv in en sidtitel:',
	'coll-login_to_save' => 'Om du vill spara samlingar för senare bruk, var god [[Special:UserLogin|logga in eller skapa ett konto]].',
	'coll-personal_collection_label' => 'Personlig samling:',
	'coll-community_collection_label' => 'Deltagarsamling:',
	'coll-save_collection' => 'Spara samling',
	'coll-save_category' => 'Samlingar sparas i kategorin [[:Category:Collections|Samlingar]].',
	'coll-overwrite_title' => 'Sidan existerar. Vill du skriva över den?',
	'coll-overwrite_text' => 'En sida med namnet [[:$1]] finns redan.
Vill du ersätta den med din samling?',
	'coll-yes' => 'Ja',
	'coll-no' => 'Nej',
	'coll-disable_collection_text' => '<a href="$1">Klicka här</a> för att sluta att använda samlingar nu.',
	'coll-load_overwrite_text' => 'Du har redan några sidor i din samling.
Vill du ersätta din nuvarande samling, lägga till det nya innehållet eller avbryta laddningen av samlingen?',
	'coll-overwrite' => 'Skriv över',
	'coll-append' => 'Lägga till',
	'coll-cancel' => 'Avbryt',
	'coll-limit_exceeded_title' => 'Samlingen är för stor',
	'coll-limit_exceeded_text' => 'Din sid samling är för stor.
Inga mer sidor kan läggas till.',
	'coll-rendering_title' => 'Skapar',
	'coll-rendering_text' => "'''Var god vänta under tiden dokumentet skapas.'''

'''Tillstånd:''' $1% $2.

Denna sida ska automatiskt uppdateras med några sekunders mellanrum.
Om det inte fungerar, var god tryck på uppdateringsknappen i din webbläsare.",
	'coll-rendering_status' => "'''Status:''' $1",
	'coll-rendering_article' => '  (wikisida: $1)',
	'coll-rendering_page' => '  (sida: $1)',
	'coll-rendering_finished_title' => 'Rendering avslutad',
	'coll-rendering_finished_text' => "'''Dokumentfilen har skapats.'''
'''[$1 Klicka här]''' för att ladda ner den till din dator.

Not:
* Inte nöjd med resultatet? Se [[{{MediaWiki:Coll-helppage}}|hjälpsidan om samlingar]] för möjligheter att förbättra den.",
	'coll-notfound_title' => 'Samling inte funnen',
	'coll-notfound_text' => 'Kan inte hitta samlings sida',
	'coll-is_cached' => '<ul><li>En cachad version av dokumentet har hittats, så ingen renderng behövdes. <a href="$1">Forcera omrendering.</a></li></ul>',
	'coll-excluded-templates' => '* Mallar i kategorin [[:Category:$1|$1]] har uteslutits.',
	'coll-blacklisted-templates' => '* Mallar på svartalistan [[:$1]] har uteslutits.',
	'coll-return_to_collection' => '<p>Tillbaka till <a href="$1">$2</a></p>',
	'coll-book_title' => 'Beställ utskriven bok',
	'coll-book_text' => 'Du kan beställa en tryckt bok som rymmer din artikelsamling genom att besöka en av de samarbetspartners som utför behovstryckning:',
	'coll-order_from_pp' => 'Beställ bok från $1',
	'coll-about_pp' => 'Om $1',
	'coll-invalid_podpartner_title' => 'Ogiltig POD-partner',
	'coll-invalid_podpartner_msg' => 'Den erbjudna POD-partnern är ogiltig.
Var god kontakta din MediaWiki-administratör.',
	'coll-license' => 'Licens',
	'coll-return_to' => 'Tillbaka till [[:$1]]',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author వైజాసత్య
 */
$messages['te'] = array(
	'coll-desc' => '[[Special:Collection|పేజీలను సేకరించండి]], PDFలను తయారుచేసుకోండి',
	'coll-collection' => 'సేరకణ',
	'coll-collections' => 'సేరకణలు',
	'coll-portlet_title' => 'నా సేకరణ',
	'coll-add_page' => 'పేజీని చేర్చు',
	'coll-remove_page' => 'పేజీని తొలగించు',
	'coll-add_category' => 'వర్గాన్ని చేర్చు',
	'coll-show_collection' => 'సేకరణని చూపించు',
	'coll-help_collections' => 'సేకరణల సహాయం',
	'coll-empty' => 'ఖాళీ',
	'coll-helppage' => 'Help:సేకరణలు',
	'coll-my_collection' => 'నా సేకరణ',
	'coll-download_title' => 'సేకరణని PDFగా దిగుమతి చేసుకోండి',
	'coll-download_text' => 'మీ పేజీ సేకరణ నుండి ఆటోమెటిగ్గా తయారయిన PDF ఫైలుని దిగుమతిచేసుకోడానికి, ఈ బొత్తాన్ని నొక్కండి.',
	'coll-remove' => 'తొలగించు',
	'coll-move_up' => 'పైకి కదుపు',
	'coll-move_down' => 'క్రిందికి కదుపు',
	'coll-move_to_bottom' => 'అడుగునకు కదుపు',
	'coll-title' => 'శీర్షిక:',
	'coll-subtitle' => 'ఉపశీర్షిక:',
	'coll-contents' => 'విషయాలు',
	'coll-create_chapter' => 'కొత్త అధ్యాయాన్ని ప్రారంభించు',
	'coll-sort_alphabetically' => 'పేజీలను అక్షరక్రమంలో అమర్చు',
	'coll-clear_collection' => 'సేకరణని తుడిచివేయి',
	'coll-clear_confirm' => 'మీరు నిజంగానే మీ సేకరణని తుడిచివేయాలనుకుంటున్నారా?',
	'coll-rename' => 'పేరుమార్చు',
	'coll-new_chapter' => 'కొత్త అధ్యాయానికి పేరు సూచించండి',
	'coll-no_such_category' => 'అటువంటి వర్గం లేదు',
	'coll-notitle_title' => 'ఆ పేజీ యొక్క శీర్షికని నిర్ణయించలేకున్నాం.',
	'coll-post_failed_title' => 'POST అభ్యర్థన విఫలమైంది',
	'coll-enter_title' => 'సేకరణకి శీర్షిక ఇవ్వండి:',
	'coll-error_reponse' => 'సర్వరునుండి పొరపాటు అని స్పందన వచ్చింది',
	'coll-empty_collection' => 'ఖాళీ సేకరణ',
	'coll-revision' => 'కూర్పు: %PARAM%',
	'coll-save_collection_title' => 'సేకరణని భద్రపరచండి',
	'coll-save_collection_text' => 'ఈ సేకరణని తర్వాత వాడుకోడానికి భద్రపరచుకోవాలంటే, ఓ సేకరణ రకాన్ని ఎంచుకోండి మరియు పేజీ శీర్షిక ఇవ్వండి:',
	'coll-login_to_save' => 'సేకరణలని మీరు తర్వాత వాడుకోవడానికి భద్రపరచుకోవాలనుకుంటే, [[Special:UserLogin|లోనికి ప్రవేశించండి లేదా ఖాతా సృష్టించుకోండి]].',
	'coll-personal_collection_label' => 'వ్యక్తిగత సేరకణ:',
	'coll-community_collection_label' => 'సామూహిక సేకరణ:',
	'coll-save_collection' => 'సేకరణని భద్రపరచు',
	'coll-overwrite_title' => 'పేజీ ఉంది. దానిపైనే రాసేయాలా?',
	'coll-overwrite_text' => '[[:$1]] అనే పేరుతో ఓ పేజీ ఇప్పటికే ఉంది.
దాని స్ధానంలో మీ సేకరణని ఉంచాలా?',
	'coll-yes' => 'అవును',
	'coll-no' => 'కాదు',
	'coll-append' => 'జతచేయి',
	'coll-cancel' => 'రద్దు',
	'coll-limit_exceeded_title' => 'సేకరణ మరీ పెద్దగా ఉంది',
	'coll-limit_exceeded_text' => 'మీ పేజీ సేకరణ చాలా పెద్దగా ఉంది.
మరిన్ని పేజీలు చేర్చలేము.',
	'coll-notfound_title' => 'సేకరణ కనబడలేదు',
	'coll-notfound_text' => 'సేకరణ పేజీ కనబడలేదు.',
	'coll-return_to_collection' => '<p>తిరిగి <a href="$1">$2</a></p>కి',
	'coll-order_from_pp' => '$1 నుండి పుస్తకాన్ని ఆర్డర్ చెయ్యండి',
	'coll-about_pp' => '$1 గురించి',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'coll-empty' => 'mamuk',
	'coll-yes' => 'Sin',
	'coll-no' => 'Lae',
	'coll-about_pp' => 'Kona-ba $1',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'coll-desc' => '[[Special:Collection|Гирдоварии саҳифаҳо]], тавлиди PDFҳо',
	'coll-collection' => 'Гирдоварӣ',
	'coll-collections' => 'Гирдовариҳо',
	'coll-portlet_title' => 'Гирдоварии Ман',
	'coll-add_page' => 'Илова кардани саҳифа',
	'coll-remove_page' => 'Пок кардани саҳифа',
	'coll-add_category' => 'Илова кардани гурӯҳ',
	'coll-load_collection' => 'Бор кардани гирдоварӣ',
	'coll-show_collection' => 'Намоиши гирдоварӣ',
	'coll-help_collections' => 'Роҳнамои гирдовариҳо',
	'coll-empty' => 'холӣ',
	'coll-noscript_text' => '<h1>ҶаваСкрипт Лозим аст!</h1>
<strong>Мурургари шумо ҶаваСкриптро дастгирӣ намекунад ё ҶаваСкрипт хомӯш карда шудааст.
Ин саҳифа дуруст кор хоҳад карда, дар ҳолате, ки ҶаваСкрипт фаъол карда шуда бошад.</strong>',
	'coll-intro_text' => 'Шумо метавонед саҳифаҳоро гирдовари кунед, тавлид ва бор кардани парвандаҳои PDF аз саҳифаҳои гирдовариҳо ва захир кардани гирдовариҳо барои истифодаи баъдӣ ё бо ҳам дидани онҳо бо дигарон.

Барои иттилооти бештар нигаред ба [[{{MediaWiki:Coll-helppage}}|саҳифаи роҳнамо оиди гирдовариҳо]].',
	'coll-helppage' => 'Help:Гирдовариҳо',
	'coll-my_collection' => 'Гирдоварии Ман',
	'coll-download_title' => 'Бор кардани гирдовари ҳамчун PDF',
	'coll-download_text' => 'Барои бор кардани парвандаи PDF саҳифаи гирдоварии худ, ки ба таври худкор ҳосил шудааст, тугмаро пахш кунед.',
	'coll-remove' => 'Ҳазф',
	'coll-move_to_top' => 'Ҳаракат бо боло',
	'coll-move_up' => 'Ба боло',
	'coll-move_down' => 'Ба поён',
	'coll-move_to_bottom' => 'Ҳаракат ба поён',
	'coll-title' => 'Унвон:',
	'coll-subtitle' => 'Зерунвон:',
	'coll-contents' => 'Мундариҷа',
	'coll-create_chapter' => 'Эҷоди фасли ҷадид',
	'coll-sort_alphabetically' => 'Аз рӯи алифбо ба тартиб даровардани саҳифаҳо',
	'coll-clear_collection' => 'Тоза кардани гирдовари',
	'coll-clear_confirm' => 'Оё шумо дар ҳақиқат мехоҳед гирдоварии худро пок кунед?',
	'coll-rename' => 'Тағйири ном',
	'coll-new_chapter' => 'Барои фасли ҷадид номеро ворид кунед',
	'coll-rename_chapter' => 'Барои фасл номи ҷадидеро ворид кунед',
	'coll-no_such_category' => 'Чунин гурӯҳ вуҷуд надорад',
	'coll-notitle_title' => 'Унвони саҳифа мушаххас шуда наметавонад.',
	'coll-enter_title' => 'Барои гирдовари унвонеро ворид кунед:',
	'coll-error_reponse' => 'Посухи хатое аз хидматгузор',
	'coll-empty_collection' => 'Холӣ кардани гирдовари',
	'coll-revision' => 'Нусха: %PARAM%',
	'coll-save_collection_title' => 'Захира кардани гирдовари',
	'coll-save_collection_text' => 'Барои захираи ин гирдовари барои истифодаи баъдӣ, навъи гирдовариро интихоб кунед ва унвони саҳифаро ворид кунед:',
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
	'coll-limit_exceeded_title' => 'Гирдовари Хеле Бузург',
	'coll-limit_exceeded_text' => 'Саҳифаи гирдоварии шумо хеле бузург аст.
Аз ин зиёд саҳифаҳо наметавонанд илова шаванд.',
	'coll-notfound_title' => 'Гирдовари Ёфт Нашуд',
	'coll-notfound_text' => 'Саҳифаи гирдоварӣ ёфт нашуд.',
	'coll-return_to_collection' => '<p>Бозгашт ба <a href="$1">$2</a></p>',
	'coll-book_title' => 'Фармудани Китоби Чопӣ',
	'coll-book_text' => 'Шумо метавонед китоби ба табъ расидаро, ки саҳифаи гирдовариҳои шуморо дорост бо ташриф овардан ба яке аз ҳамкорони чоп-дархост фармоед:',
	'coll-order_from_pp' => 'Фармудани китоб аз $1',
	'coll-about_pp' => 'Дар бораи $1',
);

/** Turkish (Türkçe)
 * @author Karduelis
 * @author Mach
 * @author Suelnur
 */
$messages['tr'] = array(
	'coll-collection' => 'Koleksiyon',
	'coll-collections' => 'Koleksiyonlar',
	'coll-portlet_title' => 'Koleksiyonum',
	'coll-add_page' => 'Sayfa ekle',
	'coll-add_category' => 'Kategori ekle',
	'coll-empty' => 'boş',
	'coll-remove' => 'Kaldır',
	'coll-title' => 'Başlık:',
	'coll-yes' => 'Evet',
	'coll-no' => 'Hayır',
	'coll-license' => 'Lisans',
);

/** Ukrainian (Українська)
 * @author AS
 * @author Ahonc
 */
$messages['uk'] = array(
	'coll-desc' => '[[Special:Collection|Збирає колекції сторінок]], створює PDF',
	'coll-collection' => 'Колекція',
	'coll-collections' => 'Колекції',
	'coll-portlet_title' => 'Створення книги',
	'coll-add_page' => 'Додати вікі-сторінку',
	'coll-remove_page' => 'Вилучити вікі-сторінку',
	'coll-add_category' => 'Додати категорію',
	'coll-load_collection' => 'Завантажити колекцію',
	'coll-show_collection' => 'Показати колекцію',
	'coll-help_collections' => 'Довідка про колекції',
	'coll-empty' => 'порожня',
	'coll-n_pages' => '$1 {{PLURAL:$1|сторінка|сторінки|сторінок}}',
	'coll-download_as' => 'Завантажити як $1',
	'coll-noscript_text' => '<h1>Потрібен JavaScript!</h1>
<strong>Ваш браузер не підтримує JavaScript або ця підтримка вимкнена.
Ця сторінка не буде працювати правильно, якщо JavaScript не ввімкнений.</strong>',
	'coll-intro_text' => "Ви можете об'єднати сторінки в колекцію, створити і завантажити PDF-файл з набором сторінок, або зберегти колекцію сторінок для наступної роботи або обміну.

Подробиці можна знайти на [[{{MediaWiki:Coll-helppage}}|довідковій сторінці про колекції]].",
	'coll-helppage' => 'Help:Колекції',
	'coll-too_big_cat' => 'Категорія містить понад %PARAM% сторінок, тільки %PARAM% сторінок можна додати до вашої колекції.
Бажаєте їх додати?',
	'coll-my_collection' => 'Моя колекція',
	'coll-download_title' => 'Завантажити колекцію як PDF',
	'coll-download_text' => 'Щоб завантажити автоматично створений PDF-файл з вашою колекцією сторінок, натисніть кнопку.',
	'coll-download' => 'Завантажити',
	'coll-format_label' => 'Формат:',
	'coll-remove' => 'Вилучити',
	'coll-move_to_top' => 'Перемістити вгору',
	'coll-move_up' => 'Перемістити вище',
	'coll-move_down' => 'Перемістити нижче',
	'coll-move_to_bottom' => 'Перемістити донизу',
	'coll-title' => 'Назва:',
	'coll-subtitle' => 'Підзаголовок:',
	'coll-contents' => 'Зміст',
	'coll-create_chapter' => 'Створити новий розділ',
	'coll-sort_alphabetically' => 'Сортувати сторінки за алфавітом',
	'coll-clear_collection' => 'Очистити колекцію',
	'coll-clear_confirm' => 'Ви дійсно хочете очистити вашу колекцію?',
	'coll-rename' => 'Перейменувати',
	'coll-new_chapter' => 'Уведіть назву нового розділу',
	'coll-rename_chapter' => 'Уведіть нову назву розділу',
	'coll-no_such_category' => 'Нема такої категорії',
	'coll-notitle_title' => 'Заголовок сторінки неможливо визначити.',
	'coll-post_failed_title' => 'POST-запит не виконаний',
	'coll-post_failed_msg' => 'POST-запит до $1 не виконаний ($2).',
	'coll-mwserve_failed_title' => 'Помилка сервера відображення',
	'coll-mwserve_failed_msg' => 'На сервері відображення трапилася помилка: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Уведіть назву колекції:',
	'coll-error_reponse' => 'Помилка відповіді сервера',
	'coll-empty_collection' => 'Порожня колекція',
	'coll-revision' => 'Версія: %PARAM%',
	'coll-save_collection_title' => 'Зберегти колекцію',
	'coll-save_collection_text' => 'Щоб зберегти колекцію для подальшого використання, оберіть тип колекції і введіть назву сторінки:',
	'coll-login_to_save' => 'Щоб зберегти колекцію для подальшого використання, будь ласка, [[Special:UserLogin|ввійдіть до системи або створить обліковий запис]].',
	'coll-personal_collection_label' => 'Особиста колекція:',
	'coll-community_collection_label' => 'Колекція спільноти:',
	'coll-save_collection' => 'Зберегти колекцію',
	'coll-save_category' => 'Колекції збережено у категорії [[:Категорія:Колекції|Колекції]].',
	'coll-overwrite_title' => 'Сторінка існує. Перезаписати?',
	'coll-overwrite_text' => 'Сторінка з назвою [[:$1]] вже існує.
Ви хочете, щоб вона була замінена вашою колекцією?',
	'coll-yes' => 'Так',
	'coll-no' => 'Ні',
	'coll-disable_collection_text' => '<a href="$1">Клацніть тут</a>, щоб перестати використовувати колекції зараз.',
	'coll-load_overwrite_text' => 'У вас уже є кілька сторінок у колекції.
Ви хочете перезаписати вашу поточну колекцію, додати новий матеріал чи скасувати відкриття цієї колекції?',
	'coll-overwrite' => 'Перезаписати',
	'coll-append' => 'Додати',
	'coll-cancel' => 'Скасувати',
	'coll-limit_exceeded_title' => 'Колекція дуже велика',
	'coll-limit_exceeded_text' => 'Ваша колекція дуже велика.
До неї не можна більше додавати сторінок.',
	'coll-rendering_title' => 'Створення',
	'coll-rendering_text' => "'''Будь ласка, зачекайте поки триває створення документа.'''

'''Хід роботи:''' $1% $2

Ця сторінка повинна автоматично оновлюватися кожні кілька секунд.
Якщо цього не відбувається, оновіть цю сторінку у вашому веб-оглядачі.",
	'coll-rendering_status' => "'''Статус:''' $1",
	'coll-notfound_title' => 'Колекція не знайдена',
	'coll-notfound_text' => 'Неможливо знайти сторінку колекції.',
	'coll-return_to_collection' => '<p>Назад до <a href="$1">$2</a></p>',
	'coll-book_title' => 'Замовити друковану книгу',
	'coll-book_text' => 'Ви можете замовити друковану книгу, що містить вашу колекцію сторінок, скориставшись однією з наступних пропозицій друку за запитом:',
	'coll-order_from_pp' => 'Замовлення книги в $1',
	'coll-about_pp' => 'Про $1',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'coll-desc' => '[[Special:Collection|Rancura pàxene]], genera PDF',
	'coll-collection' => 'Colezion',
	'coll-collections' => 'Colezioni',
	'coll-portlet_title' => 'Crea un libro',
	'coll-add_page' => 'Zonta pàxena wiki',
	'coll-remove_page' => 'Cava pàxena wiki',
	'coll-add_category' => 'Zonta na categoria',
	'coll-load_collection' => 'Carga na colezion',
	'coll-show_collection' => 'Varda colezion',
	'coll-help_collections' => 'Ajuto su le colezion',
	'coll-empty' => 'vòda',
	'coll-n_pages' => '$1 {{PLURAL:$1|pàxena|pàxene}}',
	'coll-download_as' => 'Descarga come $1',
	'coll-noscript_text' => "<h1>Ghe vole el JavaScript!</h1>
<strong>El to browser no'l suporta JavaScript opure JavaScript el xe stà disativà.
La pàxena no la funsionrà mia coretamente se no vegnarà ativà JavaScript.</strong>",
	'coll-helppage' => 'Help:Colezion',
	'coll-my_collection' => 'La me colezion',
	'coll-download_title' => 'Descarga colezion',
	'coll-download' => 'Descarga',
	'coll-format_label' => 'Formato:',
	'coll-remove' => 'Cava',
	'coll-move_to_top' => 'Sposta insima',
	'coll-move_up' => 'Sposta piassè in alto',
	'coll-move_down' => 'Sposta piassè zo',
	'coll-move_to_bottom' => 'Sposta in fondo',
	'coll-title' => 'Titolo:',
	'coll-subtitle' => 'Sototitolo:',
	'coll-contents' => 'Indice',
	'coll-create_chapter' => 'Crea capitolo novo',
	'coll-sort_alphabetically' => 'Meti le pàxene in ordine alfabétego',
	'coll-clear_collection' => 'Desvòda colezion',
	'coll-clear_confirm' => 'Vuto dal bon desvodar la to colezion?',
	'coll-rename' => 'Canbia nome',
	'coll-new_chapter' => 'Inserissi el nome del capitolo novo',
	'coll-rename_chapter' => 'Inserissi el nome novo del capitolo',
	'coll-no_such_category' => 'Nissuna categoria',
	'coll-post_failed_title' => 'Richiesta POST mia riussìa',
	'coll-post_failed_msg' => 'La richiesta POST a $1 no la xe mia riussìa ($2).',
	'coll-mwserve_failed_title' => 'Eròr sul server de conversion',
	'coll-mwserve_failed_msg' => 'Xe capità un eròr sul server de conversion: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Inserissi un titolo par la colezion:',
	'coll-empty_collection' => 'Colezion vòda',
	'coll-revision' => 'Revision: %PARAM%',
	'coll-save_collection_title' => 'Salva colezion',
	'coll-save_collection_text' => 'Par salvar sta colezion e dopararla in futuro, siegli un tipo de colezion e inserissi un titolo par la pàxena:',
	'coll-personal_collection_label' => 'Colezion personal:',
	'coll-community_collection_label' => 'Colezion de la comunità:',
	'coll-save_collection' => 'Salva colezion',
	'coll-save_category' => 'Le colezion le vien salvà in te la categoria [[:Category:Collections|Colezion]].',
	'coll-overwrite_title' => 'La pàxena la esiste de zà.
Vuto che ghe scriva insima?',
	'coll-overwrite_text' => 'Na pàxena col nome [[:$1]] la esiste de zà.
Vuto che la vegna rinpiazà co la to colezion?',
	'coll-yes' => 'Sì',
	'coll-no' => 'No',
	'coll-disable_collection_text' => '<a href="$1">Struca chì</a> par desmétar de doparar le colezion, par indèsso.',
	'coll-overwrite' => 'Sorascrivi',
	'coll-append' => 'Zonta',
	'coll-cancel' => 'Annulla',
	'coll-limit_exceeded_title' => 'Colezion massa granda',
	'coll-limit_exceeded_text' => 'La to colezion la xe massa granda. No se pode zontarghe altre pàxene.',
	'coll-rendering_title' => 'Conversion',
	'coll-rendering_text' => "Par piaser, speta n'atimo che el documento el vegna generà.'''

'''Avansamento:''' $1% $2

Sta pàxena la dovarìa ajornarse da par ela ogni póchi secondi.
Se questo no sucede, struca el boton de ajornamento del to browser.",
	'coll-rendering_status' => "'''Stato:''' $1",
	'coll-rendering_article' => '   (pàxena wiki: $1)',
	'coll-rendering_page' => '   (pàxena: $1)',
	'coll-rendering_finished_title' => 'Conversion finìa',
	'coll-rendering_finished_text' => "'''El documento el xe stà generà.'''
'''[$1 Struca chì]''' par descargarlo sul to computer.

Note:
* Sito mia contento del risultato? Lèzi [[{{MediaWiki:Coll-helppage}}|la pàxena de ajuto su le colezion]] par saver come mejorarlo.",
	'coll-notfound_title' => 'Colezion mia catà',
	'coll-notfound_text' => 'No se cata da nissuna parte la pàxena de la colezion.',
	'coll-excluded-templates' => '* I modèi in te la categoria [[:Category:$1|$1]] i xe stà esclusi.',
	'coll-blacklisted-templates' => '* I modèi in te la lista nera [[:$1]] i xe stà esclusi.',
	'coll-return_to_collection' => '<p>Torna indrìo a <a href="$1">$2</a></p>',
	'coll-book_title' => 'Ordina libro stanpà',
	'coll-order_from_pp' => 'Ordina libro da $1',
	'coll-about_pp' => 'Informassion su $1',
	'coll-invalid_podpartner_title' => 'Partner POD mia valido',
	'coll-license' => 'Licensa',
	'coll-return_to' => 'Torna indrìo a [[:$1]]',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'coll-desc' => '[[Special:Collection|Tập hợp trang lại]], tạo thành tập tin PDF',
	'coll-collection' => 'Tập hợp',
	'coll-collections' => 'Tập hợp',
	'coll-portlet_title' => 'Tạo một quyển sách',
	'coll-add_page' => 'Thêm trang wiki',
	'coll-remove_page' => 'Xóa trang wiki',
	'coll-add_category' => 'Thêm thể loại',
	'coll-load_collection' => 'Mở tập hợp',
	'coll-show_collection' => 'Xem tập hợp',
	'coll-help_collections' => 'Trợ giúp tập hợp',
	'coll-empty' => 'trống',
	'coll-n_pages' => '$1 trang',
	'coll-download_as' => 'Tải về dưới dạng $1',
	'coll-noscript_text' => '<h1>Yêu cầu phải có JavaScript!</h1>
<strong>Trình duyệt của bạn không hỗ trợ JavaScript hoặc JavaScript đã bị tắt.
Trang này sẽ không hoạt động đúng, trừ khi bạn kích hoạt JavaScript.</strong>',
	'coll-intro_text' => 'Bạn có thể tập hợp các trang, tạo ra và tải về một tập tin PDF từ tập hợp trang đó và lưu tập hợp lại để dùng hoặc chia sẻ chúng về sau.

Mời xem [[{{MediaWiki:Coll-helppage}}|trang trợ giúp về tập hợp]] để biết thêm thông tin.',
	'coll-helppage' => 'Help:Tập hợp',
	'coll-too_big_cat' => 'Thể loại chứa hơn %PARAM% trang. Chỉ thêm %PARAM% trang đầu tiên vào tập hợp được.
Bạn có muốn thêm nó không?',
	'coll-my_collection' => 'Tập hợp của tôi',
	'coll-download_title' => 'Tải tập hợp về dưới dạng PDF',
	'coll-download_text' => 'Để tải về một tập tin PDF được tự động tạo ra từ tập hợp trang của bạn, hãy nhấn nút.',
	'coll-download' => 'Tải về',
	'coll-format_label' => 'Định dạng:',
	'coll-remove' => 'Dời',
	'coll-move_to_top' => 'Di chuyển lên đầu',
	'coll-move_up' => 'Chuyển lên',
	'coll-move_down' => 'Chuyển xuống',
	'coll-move_to_bottom' => 'Di chuyển xuống dưới',
	'coll-title' => 'Tựa đề:',
	'coll-subtitle' => 'Phụ đề:',
	'coll-contents' => 'Nội dung',
	'coll-create_chapter' => 'Tạo chương mới',
	'coll-sort_alphabetically' => 'Sắp xếp trang theo vần',
	'coll-clear_collection' => 'Xóa tập hợp',
	'coll-clear_confirm' => 'Bạn có thực sự muốn xóa tập hợp của mình?',
	'coll-rename' => 'Đổi tên',
	'coll-new_chapter' => 'Gõ vào tên chương mới',
	'coll-rename_chapter' => 'Gõ vào tên chương mới',
	'coll-no_such_category' => 'Không có thể loại như vậy',
	'coll-notitle_title' => 'Không xác định được tựa đề của trang.',
	'coll-post_failed_title' => 'Yêu cầu POST thất bại',
	'coll-post_failed_msg' => 'Yêu cầu POST đến $1 thất bại ($2).',
	'coll-mwserve_failed_title' => 'Lỗi chương trình kết xuất',
	'coll-mwserve_failed_msg' => 'Chương trình kết xuất gặp lỗi: <nowiki>$1</nowiki>',
	'coll-enter_title' => 'Gõ vào tựa đề của tập hợp:',
	'coll-error_reponse' => 'Máy chủ trả về lỗi',
	'coll-empty_collection' => 'Tập hợp trống',
	'coll-revision' => 'Phiên bản: %PARAM%',
	'coll-save_collection_title' => 'Lưu tập hợp',
	'coll-save_collection_text' => 'Để lưu tập hợp này lại sau này dùng, hãy chọn một kiểu tập hợp và gõ vào tựa đề trang:',
	'coll-login_to_save' => 'Nếu bạn muốn lưu tập hợp để sau này dùng, xin hãy [[Special:UserLogin|đăng nhập hoặc mở tài khoản]].',
	'coll-personal_collection_label' => 'Tập hợp cá nhân:',
	'coll-community_collection_label' => 'Tập hợp cộng đồng:',
	'coll-save_collection' => 'Lưu tập hợp',
	'coll-save_category' => 'Các tập hợp được xếp trong thể loại [[:Category:Collections|Collections]].',
	'coll-overwrite_title' => 'Trang đã tồn tại. Ghi đè?',
	'coll-overwrite_text' => 'Trang với tên [[:$1]] đã tồn tại.
Bạn có muốn thay thế nó bằng tập hợp của bạn?',
	'coll-yes' => 'Có',
	'coll-no' => 'Không',
	'coll-disable_collection_text' => '<a href="$1">Tạm ngừng</a> sử dụng các tập hợp.',
	'coll-load_overwrite_text' => 'Bạn đã có một số trang trong tập hợp của mình.
Bạn có muốn ghi đè tập hợp hiện tại, thêm nội dung mới, hay hủy việc tải tập hợp này?',
	'coll-overwrite' => 'Ghi đè',
	'coll-append' => 'Thêm vào',
	'coll-cancel' => 'Bãi bỏ',
	'coll-limit_exceeded_title' => 'Tập hợp quá lớn',
	'coll-limit_exceeded_text' => 'Tập hợp các trang của bạn quá lớn.
Không thể thêm trang được nữa.',
	'coll-rendering_title' => 'Đang kết xuất',
	'coll-rendering_text' => "'''Xin hãy chờ xong kết xuất tài liệu.'''

'''Tiến độ:''' $1% $2

Trình duyệt sẽ làm tươi trang này vài giây một lần.
Nếu không thấy thay đổi gì, xin hãy bấm nút Refresh hoặc Reload trong trình duyệt.",
	'coll-rendering_status' => "'''Trạng thái:''' $1",
	'coll-rendering_article' => '  (trang wiki: $1)',
	'coll-rendering_page' => '  (trang: $1)',
	'coll-rendering_finished_title' => 'Kết xuất xong',
	'coll-rendering_finished_text' => "'''Xong kết xuất tập tin tài liệu.'''
'''[$1 Tải nó về]''' máy tính của mình.

Chú ý:
* Không vừa lòng với bản kết xuất này? Hãy đọc [[{{MediaWiki:Coll-helppage}}|trợ giúp về tập hợp]] để biết về những cách để cải tiến nó.",
	'coll-notfound_title' => 'Không tìm thấy tập hợp',
	'coll-notfound_text' => 'Không tìm thấy trang tập hợp.',
	'coll-is_cached' => '<ul><li>Không cần kết xuất mới vì đã tìm thấy phiên bản trong bộ nhớ. <a href="$1">Kết xuất lại.</a></li></ul>',
	'coll-excluded-templates' => '* Các tiêu bản trong thể loại [[:Category:$1|$1]] được bỏ qua.',
	'coll-blacklisted-templates' => '* Các tiêu bản trùng với danh sách đen [[:$1]] được bỏ qua.',
	'coll-return_to_collection' => '<p>Quay trở về <a href="$1">$2</a></p>',
	'coll-book_title' => 'Đặt sách in',
	'coll-book_text' => 'Bạn có thể đặt một cuốn sách in có chứa tập hợp trang của bạn bằng cách ghét thăm mọt trong những bên cộng tác in-theo-yêu-cầu:',
	'coll-order_from_pp' => 'Đặt sách từ $1',
	'coll-about_pp' => 'Giới thiệu $1',
	'coll-invalid_podpartner_title' => 'Thành phần đi kèm POD không hợp lệ',
	'coll-invalid_podpartner_msg' => 'Thành phần đi kèm POD đã cung cấp không hợp lệ.
Xin hãy liên hệ với quản trị viên MediaWiki của bạn.',
	'coll-license' => 'Giấy phép',
	'coll-return_to' => 'Quay lại [[:$1]]',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'coll-helppage' => 'Help:Konlets',
	'coll-my_collection' => 'Konlet Obik',
	'coll-title' => 'Tiäd:',
	'coll-yes' => 'Si',
	'coll-no' => 'Nö',
);

