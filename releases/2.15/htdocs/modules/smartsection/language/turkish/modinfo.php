<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1","Giriþ");
define("_MI_SSECTION_ADMENU2","Kategoriler");
define("_MI_SSECTION_ADMENU3","Makaleler");
define("_MI_SSECTION_ADMENU4","Ýzinler");
define("_MI_SSECTION_ADMENU5","Bloklar ve Gruplar");
define("_MI_SSECTION_ADMENU6","Mimetypes");
define("_MI_SSECTION_ADMENU7","Modüle Git");

define("_MI_SSECTION_ADMINHITS","[ÝÇERÝK SEÇENEKLERÝ] Admin counter reads?");
define("_MI_SSECTION_ADMINHITSDSC","Allow admin hits for counter stats?");
define("_MI_SSECTION_ALLOWSUBMIT","[ÝZÝNLER] Kullanýcý izinleri");
define("_MI_SSECTION_ALLOWSUBMITDSC","Kullanýcýlar siteye makale ekleyebilsin mi?");
define("_MI_SSECTION_ANONPOST","[ÝZÝNLER] Ýsimsiz gönderilere izin ver?");
define("_MI_SSECTION_ANONPOSTDSC","Allow anonymous users to submit articles?");
define("_MI_SSECTION_AUTHOR_INFO","Geliþtiriciler");
define("_MI_SSECTION_AUTHOR_WORD","Yazarýn metni");
define("_MI_SSECTION_AUTOAPP","[PERMISSIONS] Eklenen makaleler otomatik onaylansýn mý?");
define("_MI_SSECTION_AUTOAPPDSC","Yöneticinin müdahelesi olmadan makaleler otomatik olarak eklenebilsin mi?");
define("_MI_SSECTION_BCRUMB","[YAZDIRMA SEÇENEKLERÝ] Show the module name in the breadcrumb?");
define("_MI_SSECTION_BCRUMBDSC","Eveti seçerseniz, the breadcrumb will show \"Smartsection > kategori adý > makale adý\". <br>aksi halde \"kategori adý > makale adý\" gösterilir.");
define("_MI_SSECTION_BOTH_FOOTERS","Her iki sayfa alt notu");
define("_MI_SSECTION_BY","by");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY","Kategori öðeleri");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC","Bildirme seçeneklerini mevcut kategoriye uygula.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY","Yeni makale yayýnlandý");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP","Bu kategoride yeni bir makale yayýnlandýðýnda haber et.");   
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC","Bu kategoride yeni bir makale yayýnlandýðýnda haber et.");      
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} otomatik haber et : Kategoriye yeni bir makale yayýnlandý"); 
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY","'Makale eklendi");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP","Bu kategoride yeni bir makale yayýnlandýðýnda haber et");   
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC","Bu kategoride yeni bir makale yayýnlandýðýnda haber et.");      
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} otomatik haber et : Kategoriye yeni makale eklendi"); 
define("_MI_SSECTION_CATPERPAGE","[BÝÇÝM SEÇENEKLERÝ] Sayfada maksimum kategori (User side)?");
define("_MI_SSECTION_CATPERPAGEDSC","Maximum number of top categories per page to be displayed at once in the user side?");
define("_MI_SSECTION_CLONE","[PERMISSIONS] Allow article duplication ?");
define("_MI_SSECTION_CLONEDSC","Select 'Yes' to allo users with appropriate permissions to duplicate an article.");
define("_MI_SSECTION_COLLHEAD","[BÝÇÝM SEÇENEKLERÝ] Display the collapsable bar?");
define("_MI_SSECTION_COLLHEADDSC","if you set this option to 'Yes', the Categories summary will be displayed in a collapsable bar, as well as The articles. if you set this option to 'No', the collapsable will not be displayed.");
define("_MI_SSECTION_COMMENTS","[PERMISSIONS] Control comments at the article level?");
define("_MI_SSECTION_COMMENTSDSC","if you set this option to 'Yes', you'll see comments only on those items that have their comment checkbox marked. <br /><br />Select 'No' to have comments managed at the global level (look below under the tag 'Comment rules'.");
define("_MI_SSECTION_DATEFORMAT","[BÝÇÝM SEÇENEKLERÝ] Tarih-saat formatý:");
define("_MI_SSECTION_DATEFORMATDSC","Use the final part of language/english/global.php to select a display style. Example: \"d-M-Y H:i\" translates to \"30-Mar-2004 22:35\"");
define("_MI_SSECTION_DEMO_SITE","SmartFactory Demo Site");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR","Contributor(s)");
define("_MI_SSECTION_DEVELOPER_CREDITS","Credits");
define("_MI_SSECTION_DEVELOPER_EMAIL","Email");
define("_MI_SSECTION_DEVELOPER_LEAD","Lead developer(s)");
define("_MI_SSECTION_DEVELOPER_WEBSITE","Website");
define("_MI_SSECTION_DISCOM","[ÝÇERÝK SEÇENEKLERÝ] Display comment count?");
define("_MI_SSECTION_DISCOMDSC","Set to 'Yes' to display the comments count in the individual article");
define("_MI_SSECTION_DISDATECOL","[ÝÇERÝK SEÇENEKLERÝ] 'Yayýnlayan' sütunu görünsün mü?");
define("_MI_SSECTION_DISDATECOLDSC","When the 'Summary' display type is selected, select 'Yes' to display a 'Published on' date in the items table on the index and category page.");
define("_MI_SSECTION_DISPLAY_CAT_SUMMARY","[ÝÇERÝK SEÇENEKLERÝ] Display the category summary?");
define("_MI_SSECTION_DISPLAY_CAT_SUMMARY_DSC","Select 'Yes' to have the category summary displayed in the module.");
define("_MI_SSECTION_DISPLAY_CATEGORY","Display the category name?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC","Set to 'Yes' to display the category link in the individual article");
define("_MI_SSECTION_DISPLAYTYPE_FULL","Full View");
define("_MI_SSECTION_DISPLAYTYPE_LIST","Bullet list");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY","Summary View");
define("_MI_SSECTION_DISSBCATDSC","[ÝÇERÝK SEÇENEKLERÝ] Display sub-categories description?");
define("_MI_SSECTION_DISSBCATDSCDSC","Select 'Yes' to display the description of sub-categories in the index and category page.");
define("_MI_SSECTION_DISTYPE","[BÝÇÝM SEÇENEKLERÝ] Makalelerin gösterilme þekli:");
define("_MI_SSECTION_DISTYPEDSC","if 'Summary View' is selected, only the Title, Date and Hits of each item will be displayed in a selected category. if 'Full View' is selected, each article will be fully displayed in a selected category.");
define("_MI_SSECTION_FILEUPLOADDIR","Attached files upload directory:");
define("_MI_SSECTION_FILEUPLOADDIRDSC","Directory into which will be imported the files attached to the articles. Do not include any leading nor trailing slashes.");
define("_MI_SSECTION_FOOTERPRINT","[YAZDIRMA SEÇENEKLERÝ] Print page footer");
define("_MI_SSECTION_FOOTERPRINTDSC","Footer that will be printed for each article");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY","New category");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP","Notify me when a new category is created.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC","Receive notification when a new category is created.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : New category");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY","Global Articles");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC","Notification options that apply to all articles.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY","New article published");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP","Notify me when any new article is published.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC","Receive notification when any new article is published.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : New article published");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY","Article submitted");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP","Notify me when any article is submitted and is awaiting approval.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC","Receive notification when any article is submitted and is waiting approval.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : New article submitted");
define("_MI_SSECTION_HEADERPRINT","[YAZDIRMA SEÇENEKLERÝ] Print page header");
define("_MI_SSECTION_HEADERPRINTDSC","Header that will be printed for each article");
define("_MI_SSECTION_HELP_CUSTOM","Custom Path");
define("_MI_SSECTION_HELP_INSIDE","Inside the module");
define("_MI_SSECTION_HELP_PATH_CUSTOM","Custom path of SmartSection's help files");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC","if you selected 'Custom path' in the previous option 'Path of SmartSection's help files', please specify the URL of SmartSection's help files, in that format : http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT","Path of SmartSection's help files");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC","Select from where you would like to access SmartSection's help files. if you downloaded the 'SmartSection's Help Package' and uploaded it in 'modules/smartsection/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartSection's help files'");
define("_MI_SSECTION_HITSCOL","[ÝÇERÝK SEÇENEKLERÝ] 'Hitler' sütunu görünsün mü?");
define("_MI_SSECTION_HITSCOLDSC","When the 'Summary' display type is selected, select 'Yes' to display the 'Hits' column in the items table on the index and category page.");
define("_MI_SSECTION_HLCOLOR","[BÝÇÝM SEÇENEKLERÝ] Highlight color for keywords");
define("_MI_SSECTION_HLCOLORDSC","Color of the keywords highligting for the search function");
define("_MI_SSECTION_IMAGENAV","[BÝÇÝM SEÇENEKLERÝ] Use the image Page Navigation:");
define("_MI_SSECTION_IMAGENAVDSC","if you set this option to \"Yes\", the Page Navigation will be displayed with images, otherwise, the original Page Naviagation will be used.");
define("_MI_SSECTION_INDEXFOOTER","[ÝÇERÝK SEÇENEKLERÝ] Index Footer");
define("_MI_SSECTION_INDEXFOOTER_SEL","Index Footer");
define("_MI_SSECTION_INDEXFOOTERDSC","Footer that will be displayed at the index page of the module");
define("_MI_SSECTION_INDEXMSG","[ÝÇERÝK SEÇENEKLERÝ] Giriþ sayfasý hoþ geldiniz mesajý:");
define("_MI_SSECTION_INDEXMSGDEF",""); 
define("_MI_SSECTION_INDEXMSGDSC","Welcome message to be displayed in the index page of the module.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY","Article approved");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP","Notify me when this article is approved.");   
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC","Receive notification when this article is approved.");      
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : article approved"); 
define("_MI_SSECTION_ITEM_NOTIFY","Article");
define("_MI_SSECTION_ITEM_NOTIFY_DSC","Notification options that apply to the current article.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY","Article rejected");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP","Notify me if this article is rejected.");   
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC","Receive notification if this article is rejected.");      
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : article rejected"); 
define("_MI_SSECTION_ITEM_TYPE","Item type:");
define("_MI_SSECTION_ITEM_TYPEDSC","Select the kind of items this module is going to manage.");
define("_MI_SSECTION_ITEMFOOTER","[ÝÇERÝK SEÇENEKLERÝ] Item footer");
define("_MI_SSECTION_ITEMFOOTER_SEL","Item footer");
define("_MI_SSECTION_ITEMFOOTERDSC","Footer that will be displayed for each article");
define("_MI_SSECTION_ITEMSMENU","Categories Menu block");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE","Tree block");
//--/bd
define("_MI_SSECTION_ITEMSNEW","Son Öðe Listesi");
define("_MI_SSECTION_ITEMSPOT","Popülerite !");
define("_MI_SSECTION_ITEMSRANDOM_ITEM","Rasgele Öðe !");
define("_MI_SSECTION_LASTITEM","[ÝÇERÝK SEÇENEKLERÝ] Display last item column ?");
define("_MI_SSECTION_LASTITEMDSC","Select 'Yes' to display the last item in each category in the index and category page.");
define("_MI_SSECTION_LASTITEMS","[ÝÇERÝK SEÇENEKLERÝ] Display the list of newly Yayýnlanmýþ Makaleler?");
define("_MI_SSECTION_LASTITEMSDSC","Select 'Yes' to have the list at the bottom of the first page of the module");
define("_MI_SSECTION_LASTITSIZE","[BÝÇÝM SEÇENEKLERÝ] Last item size :");
define("_MI_SSECTION_LASTITSIZEDSC","Set the maximum size of the title in the Last item column.");
define("_MI_SSECTION_LINKPATH","[BÝÇÝM SEÇENEKLERÝ] Enable links on the current path:");
define("_MI_SSECTION_LINKPATHDSC","This option allows the user back-track by clicking on a element of the current path displayed on the top of the page");
define("_MI_SSECTION_MAX_HEIGHT","[PERMISSIONS] Maximum uploaded image height");
define("_MI_SSECTION_MAX_HEIGHTDSC","Maximum height of an image file that can be uploaded.");
define("_MI_SSECTION_MAX_SIZE","[PERMISSIONS] Maximum file size");
define("_MI_SSECTION_MAX_SIZEDSC","Maximum size (in bytes) of a file that can be uploaded.");
define("_MI_SSECTION_MAX_WIDTH","[PERMISSIONS] Maximum uploaded image width");
define("_MI_SSECTION_MAX_WIDTHDSC","Maximum width of an image file that can be uploaded.");
define("_MI_SSECTION_MD_DESC","Section Management System for your XOOPS Site");
define("_MI_SSECTION_MD_NAME","SmartSection");
define("_MI_SSECTION_MODULE_BUG","Report a bug for this module");
define("_MI_SSECTION_MODULE_DEMO","Demo Site");
define("_MI_SSECTION_MODULE_DISCLAIMER","Disclaimer");
define("_MI_SSECTION_MODULE_FEATURE","Suggest a new feature for this module");
define("_MI_SSECTION_MODULE_INFO","Module Development details");
define("_MI_SSECTION_MODULE_RELEASE_DATE","Release date");
define("_MI_SSECTION_MODULE_STATUS","Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG","Submit a bug");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE","Submit a feature request");
define("_MI_SSECTION_MODULE_SUPPORT","Official support site");
define("_MI_SSECTION_NO_FOOTERS","None");
define("_MI_SSECTION_ORDERBY","[BÝÇÝM SEÇENEKLERÝ] Sýralama Düzeni");
define("_MI_SSECTION_ORDERBY_DATE","Date DESC");
define("_MI_SSECTION_ORDERBY_TITLE","Title ASC");
define("_MI_SSECTION_ORDERBY_WEIGHT","Weight ASC");
define("_MI_SSECTION_ORDERBYDSC","Select the sort order of the items throughout the module.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL","All articles");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE","None");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT","Previous and next article");
define("_MI_SSECTION_OTHERITEMS","[BÝÇÝM SEÇENEKLERÝ] Other articles display type");
define("_MI_SSECTION_OTHERITEMSDSC","Select how you would like to display the other articles of the category in the article page.");
define("_MI_SSECTION_PERPAGE","[BÝÇÝM SEÇENEKLERÝ] Sayfa baþýna gösterilecek maksimummakale adedi (Admin side):");
define("_MI_SSECTION_PERPAGEDSC","Maximum number of articles per page to be displayed at once in the admin side.");
define("_MI_SSECTION_PERPAGEINDEX","[BÝÇÝM SEÇENEKLERÝ] Maximum articles per page (User side):");
define("_MI_SSECTION_PERPAGEINDEXDSC","[YAZDIRMA SEÇENEKLERÝ] Maximum number of articles per page to be displayed together in the user side.");
define("_MI_SSECTION_PRINTLOGOURL","[YAZDIRMA SEÇENEKLERÝ] 'Yazdýr! logosu URL adresi");
define("_MI_SSECTION_PRINTLOGOURLDSC","Url of the logo that will be printed at the top of the page");
define("_MI_SSECTION_RECENTITEMS","Son Öðeler (Detaylý)");
define("_MI_SSECTION_SHOW_RSS","[ÝÇERÝK SEÇENEKLERÝ] RSS feed için baðlantýlar görünsün mü");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS","[ÝÇERÝK SEÇENEKLERÝ] Alt Kategori Gösterimi");
define("_MI_SSECTION_SHOW_SUBCATS_ALL","Bütün alt kategorileri göster");
define("_MI_SSECTION_SHOW_SUBCATS_DSC","Select if you want to display the sub categories in the categories list of the index and category page of the module");
define("_MI_SSECTION_SHOW_SUBCATS_NO","Alt kategorileri gösterme");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY","Display non empty sub-categories");
define("_MI_SSECTION_SUB_SMNAME1","Submit an article");
define("_MI_SSECTION_SUB_SMNAME2","Popular articles");
define("_MI_SSECTION_SUBMITMSG","[ÝÇERÝK SEÇENEKLERÝ] Submit page intro message:");
define("_MI_SSECTION_SUBMITMSGDEF","");
define("_MI_SSECTION_SUBMITMSGDSC","Intro message to be displayed in the submit page of the module.");
define("_MI_SSECTION_TITLE_SIZE","[BÝÇÝM SEÇENEKLERÝ] Baþlýk boyutu :");
define("_MI_SSECTION_TITLE_SIZEDSC","Set the maximum size of the title in the single item display page.");
define("_MI_SSECTION_UPLOAD","[PERMISSIONS] User file upload?");
define("_MI_SSECTION_UPLOADDSC","Allow users to upload files linked to articles on your website?");
define("_MI_SSECTION_USEREALNAME","[BÝÇÝM SEÇENEKLERÝ] Use the Real Name of users");
define("_MI_SSECTION_USEREALNAMEDSC","When displaying a username, use the real name of that user if he has a set his real name.");
define("_MI_SSECTION_VERSION_HISTORY","Version History");
define("_MI_SSECTION_WARNING_BETA","This module comes as is, without any guarantees whatsoever. This module is BETA, meaning it is still under active development. This release is meant for <b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live website or in a production environment.");
define("_MI_SSECTION_WARNING_FINAL","This module comes as is, without any guarantees whatsoever. Although this module is not beta, it is still under active development. This release can be used in a live website or a production environment, but its use is under your own responsibility, which means the author is not responsible.");
define("_MI_SSECTION_WARNING_RC","This module comes as is, without any guarantees whatsoever. This module is a Release Candidate and should not be used on a production web site. The module is still under active development and its use is under your own responsibility, which means the author is not responsible.");
define("_MI_SSECTION_WELCOME","[ÝÇERÝK SEÇENEKLERÝ] Hoþgeldiniz baþlýðý ve mesajý görünsün mü:");
define("_MI_SSECTION_WELCOMEDSC","if this option is set to 'Yes', the module index page will display the title 'Welcome in the SmartSection of...', followed by the welcome message defined below. if this option is set to 'No', none of these lines will be displayed.");
define("_MI_SSECTION_WHOWHEN","[ÝÇERÝK SEÇENEKLERÝ] Afiþ ve tarih görünsün mü?");
define("_MI_SSECTION_WHOWHENDSC","Set to 'Yes' to display the poster and date information in the individual article");
define("_MI_SSECTION_WYSIWYG","[BÝÇÝM SEÇENEKLERÝ] Editor tipi");
define("_MI_SSECTION_WYSIWYGDSC","What kind of editor would you like  to use. Please note that of you choose any other editor than the XoopsEditor, it must be installed on your site.");




?>