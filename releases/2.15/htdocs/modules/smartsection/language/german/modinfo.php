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

define("_MI_SSECTION_ADMENU1","Index");
define("_MI_SSECTION_ADMENU2","Kategorien");
define("_MI_SSECTION_ADMENU3","Artikel");
define("_MI_SSECTION_ADMENU4","Berechtigungen");
define("_MI_SSECTION_ADMENU5","Blöcke und Gruppen");
define("_MI_SSECTION_ADMENU6","Dateiformate");
define("_MI_SSECTION_ADMENU7","Gehe zum Modul");

define("_MI_SSECTION_ADMINHITS","Zähler für gelesen?");
define("_MI_SSECTION_ADMINHITSDSC","Erlaube Admin Zähler für Aufrufe?");
define("_MI_SSECTION_ALLOWSUBMIT","Mitglieder dürfen Artikel einsenden?");
define("_MI_SSECTION_ALLOWSUBMITDSC","Erlaube Mitgliedern, einen Artikel einzusenden?");
define("_MI_SSECTION_ANONPOST","Dürfen Gäste auch Artikel einsenden?");
define("_MI_SSECTION_ANONPOSTDSC","Erlaube anonymen Usern, einen Artikel einzusenden?");
define("_MI_SSECTION_AUTHOR_INFO","Entwickler");
define("_MI_SSECTION_AUTHOR_WORD","Worte des Autors");
define("_MI_SSECTION_AUTOAPP","Automatische Freigabe von eingesendeten Artikeln?");
define("_MI_SSECTION_AUTOAPPDSC","Automatische Freigabe von eingesendeten Artikeln ohne Admin-Intervention?");
define("_MI_SSECTION_BCRUMB","Zeige Modulname in der breadcrumb-Navigation?");
define("_MI_SSECTION_BCRUMBDSC","Wenn Sie Ja wählen, wird der breadcrumb anzeigen \"Smartsection > Kategoriename > Artikelname\". <br>Andererseites wird nur \"Kategoriename > Artikelname\" angezeigt.");
define("_MI_SSECTION_BOTH_FOOTERS","Beide Fusszeilen");
define("_MI_SSECTION_BY","von");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY","Kategorie Inhalt");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC","Benachrichtigungsoptionen zur aktuellen Kategorie.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY","Neuer Artikel veröffentlicht");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP","Benachrichtige mich, wenn ein neuer Artikel in der aktuellen Kategorie veröffentlicht wurde.");   
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC","Informiere mich, wenn ein neuer Artikel in der aktuellen Kategorie veröffentlicht wurde.");      
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Neuer Artikel in der Kategorie veröffentlicht"); 
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY","Artikel eingesendet");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP","Benachrichtige mich, wenn ein neuer Artikel in der aktuellen Kategorie eingesendet wurde.");   
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC","Informiere mich, wenn ein neuer Artikel in der aktuellen Kategorie eingesendet wurde.");      
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Neuer Artikel in der Kategorie eingesendet"); 
define("_MI_SSECTION_CATLIST_IMG_W","Kategorieliste Bildgröße"); 
define("_MI_SSECTION_CATLIST_IMG_WDSC","Spezifizieren Sie die Bildgröße der Kategorie für die Auflistung der Kategorien."); 
define("_MI_SSECTION_CATMAINIMG_W","Kategorie Hauptbildgröße"); 
define("_MI_SSECTION_CATMAINIMG_WDSC","Spezifizieren Sie die Bildgröße für das Hauptbild der Kategorie."); 
define("_MI_SSECTION_CATPERPAGE","Maximale Anzahl der Kategorien pro Seite (Userseite)?");
define("_MI_SSECTION_CATPERPAGEDSC","Maximale Anzahl der Top-Kategorien pro Seite, die auf der Userseite sofort angezeigt werden sollen?");
define("_MI_SSECTION_CLONE","Duplizieren von Artikeln erlauben?");
define("_MI_SSECTION_CLONEDSC","Wähle 'Ja', um Usern mit entsprechender Berechtigung das Duplizieren von Artikeln zu erlauben.");
define("_MI_SSECTION_COLLHEAD","Anzeige der Zusammenfassung?");
define("_MI_SSECTION_COLLHEADDSC","Wenn die Option auf 'Yes' setzen, wird die Kategoriezusammenfassung so wie auch die Artikel angezeigt. Wenn Sie die Option auf 'No' setzen, wird die Zusammenfassung nicht angezeigt.");
define("_MI_SSECTION_COMMENTS","Artikelkommentare per Level kontrollieren?");
define("_MI_SSECTION_COMMENTSDSC","Wenn die Option auf 'Yes' setzen, werden Kommentare nur für die Artikel, die diese Checkbox markiert haben, angezeigt. <br /><br />Wähle 'Nein', um Kommentare auf globaler Ebene zu managen (sehen Sie auch unter dem Tag 'Komentar Eigenschaften'.");
define("_MI_SSECTION_DATEFORMAT","[FORMAT OPTIONS] Datumsformat:");
define("_MI_SSECTION_DATEFORMATDSC","Benutze den finalen Teil von language/english/global.php um eine Anzeige-Format zu wählen. Zum Beispiel: \"d-M-Y H:i\" wird übersetzt mit \"30-Mar-2004 22:35\"");
define("_MI_SSECTION_DEMO_SITE","SmartFactory Demo Seite");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR","Mitwirkender(s)");
define("_MI_SSECTION_DEVELOPER_CREDITS","Gutschriften");
define("_MI_SSECTION_DEVELOPER_EMAIL","Email");
define("_MI_SSECTION_DEVELOPER_LEAD","Lead Entwickler (s)");
define("_MI_SSECTION_DEVELOPER_WEBSITE","Webseite"); 
define("_MI_SSECTION_DISCOM","Kommentarzähler anzeigen?");
define("_MI_SSECTION_DISCOMDSC","Wähle 'Ja', um den Kommentarzähler in jedem individuellen Artikel anzuzeigen");
define("_MI_SSECTION_DISDATECOL","Zeige die 'Veröffentlicht am' Spalte?");
define("_MI_SSECTION_DISDATECOLDSC","Wenn 'Zusammenfassung' ausgewählt wurde, wähle 'Ja' um das 'Veröffentlicht am' Datum in einer Artikelspalte auf der Haupt- und Kategorieseite anzuzeigen.");
define("_MI_SSECTION_DCS","Kategoriezusammenfassung anzeigen?");
define("_MI_SSECTION_DCS_DSC","Wähle 'Nein', um die Kategoriezusammenfassung auf einer Kategorieseite, die keine Unterkategorien hat, nicht anzuzeigen.");
define("_MI_SSECTION_DISPLAY_CATEGORY","Kategorienamen anzeigen?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC","Wähle 'Ja', um den Link zur Kategorie in jedem individuellen Artikel anzuzeigen");
define("_MI_SSECTION_DISPLAYTYPE_FULL","Vollansicht");
define("_MI_SSECTION_DISPLAYTYPE_LIST","Bullet Liste");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION","WFSection Style");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY","Zeige Zusammenfassung");
define("_MI_SSECTION_DISSBCATDSC","Beschreibung von Unterkategorien anzeigen?");
define("_MI_SSECTION_DISSBCATDSCDSC","Wähle 'Ja', die Beschreibungen von Unterkategorien auf der Haupt- und Kategorieseite anzuzeigen.");
define("_MI_SSECTION_DISTYPE","Artikel-Anzeigetyp:");
define("_MI_SSECTION_DISTYPEDSC","Wenn 'Zeige Zusammenfassung' ausgewählt ist, wird nur der Titel, das Datum und die Aufrufe von jedem Artikel in der ausgewählten Kategorie angezeigt. Wenn 'Vollansicht' ausgewählt ist, wird jeder Artikel der ausgewählten Kategorie vollständig angezeigt.");
define("_MI_SSECTION_FILEUPLOADDIR","Verzeichnis zum Hochladen von angehängten Dateien:");
define("_MI_SSECTION_FILEUPLOADDIRDSC","Verzeichnis, in welches Anhänge zum Artikel importiert werden können. Keine Schrägstriche verwenden.");
define("_MI_SSECTION_FOOTERPRINT","Fusszeile drucken");
define("_MI_SSECTION_FOOTERPRINTDSC","Fusszeile wird von jedem Artikel gedruckt");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY","Neue Kategorie");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP","Benachrichte mich, wenn eine neue Kategorie erstellt wurde.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC","Mitteilung empfangen, wenn eine neue Kategorie erstellt wird.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Neue Kategorie");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY","Globale Artikel");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC","Benachrichtigungsoptionen, die für alle aktuellen Artikel gelten.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY","Neuer Artikel veröffentlicht");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP","Benachrichte mich, wenn ein neuer Artikel veröffentlicht wurde.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC","Mitteilung empfangen, wenn ein neuer Artikel veröffentlicht wurde.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Neuer Artikel veröffentlicht");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY","Artikel eingesendet");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP","Benachrichte mich, wenn ein neuer Artikel eingesendet wurde und auf Freigabe wartet.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC","Mitteilung empfangen, wenn ein neuer Artikel eingesendet wurde auf Freigabe wartet.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Neuer Artikel eingesendet");
define("_MI_SSECTION_HEADERPRINT","Drucke Kopfzeile");
define("_MI_SSECTION_HEADERPRINTDSC","überschrift wird für jeden Artikel mit gedruckt");
define("_MI_SSECTION_HELP_CUSTOM","Kundenspezifischer Pfad");
define("_MI_SSECTION_HELP_INSIDE","Innerhalb des Moduls");
define("_MI_SSECTION_HELP_PATH_CUSTOM","Kundenspezifischer Pfad für SmartSection's Hilfedatei");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC","Wenn Sie in den vorhergehenden Optionen 'Kundenspezifischer Pfad' gewählt haben, spezifizieren Sie bitte die URL für SmartSection's Hilfedatei in diesem Format: http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT","Pfad für SmartSection's Hilfedatei");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC","Wählen Sie, von wo aus Sie die SmartSection's Hilfedatei bearbeiten wollen. Wenn Sie das 'SmartSection's Hilfe Packet' downlaoden und auf 'modules/smartsection/doc/' hochladen, können Sie auswählen 'Innerhalb des Moduls'. Alternativ können Sie die Modul-Hilfe-Datei direkt auf docs.xoops.org bearbeiten und auswählen. Sie können auch 'Kundenspezifischer Pfad' wählen und den Pfad selbst in der nächsten Konfigurationsoption 'Kundenspezifischer Pfad für SmartSection's Hilfedatei' bearbeiten");
define("_MI_SSECTION_HITSCOL","Zeige für Spalte für 'Aufrufe'?");
define("_MI_SSECTION_HITSCOLDSC","Wenn 'Zusammenfassung' ausgewählt ist, wähle 'Ja', um die 'Aufrufe' Spalte in der Artikeltabelle auf der Haupt- und Kategorieseite anzuzeigen.");
define("_MI_SSECTION_HLCOLOR","Hintergrundfarbe für Suchbegriffe");
define("_MI_SSECTION_HLCOLORDSC","Farbe der Suchbegriffe für die Suchfunktion");
define("_MI_SSECTION_IMAGENAV","Benutze das Bild Seiten-Navigation:");
define("_MI_SSECTION_IMAGENAVDSC","Wenn Sie diese Option auf \"Ja\" setzen, wird die Seitennavigation mit Bildern angezeigt, andererseits wird die originale Seitennavigation verwendet.");
define("_MI_SSECTION_INDEXFOOTER","Index Fusszeile");
define("_MI_SSECTION_INDEXFOOTER_SEL","Index Seitenende");
define("_MI_SSECTION_INDEXFOOTERDSC","Fusszeile, die auf der Hauptseite des Moduls angezeigt wird");
define("_MI_SSECTION_INDEXMSG","Hauptseite Willkommens-Nachricht:");
define("_MI_SSECTION_INDEXMSGDEF",""); 
define("_MI_SSECTION_INDEXMSGDSC","Willkommensnachricht, die auf der Hauptseite des Moduls angezeigt wird.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY","Genehmigte Artikel");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP","Benachrichte mich, wenn dieser Artikel genehmigt ist.");   
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC","Mitteilung erhalten, wenn dieser Artikel genehmigt ist.");      
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Artikel genehmigt"); 
define("_MI_SSECTION_ITEM_NOTIFY","Artikel");
define("_MI_SSECTION_ITEM_NOTIFY_DSC","Benachrichtigungsoptionen für aktuellen Artikel.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY","Artikel zurückgewiesen");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP","Benachrichte mich, wenn dieser Artikel zurückgewiesen wurde.");   
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC","Mitteilung erhalten, wenn dieser Artikel zurückgewiesen wurde.");      
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Artikel zurückgewiesen"); 
define("_MI_SSECTION_ITEM_TYPE","Artikel-Typ:");
define("_MI_SSECTION_ITEM_TYPEDSC","Wähle Art des Artikels, die dieses Modul managen soll.");
define("_MI_SSECTION_ITEMFOOTER","Artikel Fusszeile");
define("_MI_SSECTION_ITEMFOOTER_SEL","Artikel Seitenende");
define("_MI_SSECTION_ITEMFOOTERDSC","Fusszeile wird für jeden Artikel angezeigt");
define("_MI_SSECTION_ITEMSMENU","Kategorien Menu Block");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE","Tree Block");
//--/bd
define("_MI_SSECTION_ITEMSNEW","Neue Artikelliste");
define("_MI_SSECTION_ITEMSPOT","In die Spotlights!");
define("_MI_SSECTION_ITEMSRANDOM_ITEM","Gelegentlicher Inhalt!");
define("_MI_SSECTION_LASTITEM","Zeige letzten Artikel in Spalte?");
define("_MI_SSECTION_LASTITEMDSC","Wähle 'Ja', um den letzten Artikel in jeder Kategorie auf der Haupt- und Kategorieseite anzuzeigen.");
define("_MI_SSECTION_LASTITEMS","Zeige Liste der neuesten veröffentlichten Artikel?");
define("_MI_SSECTION_LASTITEMSDSC","Wähle 'Ja', um eine Liste  der Unterseiten auf der ersten Seite des Moduls anzuzeigen");
define("_MI_SSECTION_LASTITSIZE","Letzte Größe des Artikels:");
define("_MI_SSECTION_LASTITSIZEDSC","Setze die maximale Größe des Titels in der letzten Artikelspalte.");
define("_MI_SSECTION_LINKPATH","Erlaube Links zum aktuellen Pfad:");
define("_MI_SSECTION_LINKPATHDSC","Diese Option erlaubt das User back-track by clicking on a element of the current path displayed on the top of the page");
define("_MI_SSECTION_MAX_HEIGHT","Maximale Höhe der hochgeladenen Bilder");
define("_MI_SSECTION_MAX_HEIGHTDSC","Maximale Höhe der Bilddatei, die hochgeladen werden kann.");
define("_MI_SSECTION_MAX_SIZE","Maximale Dateigröße");
define("_MI_SSECTION_MAX_SIZEDSC","Maximale Größe (in Bytes) der Datei, die hochgeladen werden kann.");
define("_MI_SSECTION_MAX_WIDTH","Maximale Breite des Bildes, das hochgeladen werden kann");
define("_MI_SSECTION_MAX_WIDTHDSC","Maximale Breite der Bilddatei, die hochgeladen werden kann.");
define("_MI_SSECTION_MD_DESC","Section Management System für Ihre XOOPS Seite");
define("_MI_SSECTION_MD_NAME","SmartSection");
define("_MI_SSECTION_MODULE_BUG","Report einen Fehler für dieses Modul");
define("_MI_SSECTION_MODULE_DEMO","Demo Seite");
define("_MI_SSECTION_MODULE_DISCLAIMER","Disclaimer");
define("_MI_SSECTION_MODULE_FEATURE","Schlage ein neues Feature für dieses Modul vor");
define("_MI_SSECTION_MODULE_INFO","Modul Entwicklungsdetails");
define("_MI_SSECTION_MODULE_RELEASE_DATE","Freigabedatum");
define("_MI_SSECTION_MODULE_STATUS","Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG","Einen Fehler einsenden");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE","Antrag auf Feature einsenden");
define("_MI_SSECTION_MODULE_SUPPORT","Offizielle Supportseite");
define("_MI_SSECTION_NO_FOOTERS","Keine");
define("_MI_SSECTION_ORDERBY","Auftragsart");
define("_MI_SSECTION_ORDERBY_DATE","Datum DESC");
define("_MI_SSECTION_ORDERBY_TITLE","Titel ASC");
define("_MI_SSECTION_ORDERBY_WEIGHT","Gewichtung ASC");
define("_MI_SSECTION_ORDERBYDSC","Wähle die Auftragsart des Artikels aus.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL","Alle Artikel");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE","Keine");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT","Vorhergehender und folgender Artikel");
define("_MI_SSECTION_OTHERITEMS","Andere Artikel Anzeige-Typ");
define("_MI_SSECTION_OTHERITEMSDSC","Wählen Sie aus, wie die anderen Artikel der Kategorie auf der Artikelseite dargestellt werden sollen.");
define("_MI_SSECTION_PERPAGE","Maximale Anzahl der Artikel pro Seite (Adminseite):");
define("_MI_SSECTION_PERPAGEDSC","Maximale Anzahl der Artikel pro Seite, die auf der Adminseite sofort angezeigt werden sollen.");
define("_MI_SSECTION_PERPAGEINDEX","Maximale Anzahl der Artikel pro Seite (Userseite):");
define("_MI_SSECTION_PERPAGEINDEXDSC","Maximum number of articles per page to be displayed together in the user side.");
define("_MI_SSECTION_PRINTLOGOURL","URL eines Logos für einen Ausdruck");
define("_MI_SSECTION_PRINTLOGOURLDSC","Url des Logos, welches oben auf der Seite ausdruckt wird");
define("_MI_SSECTION_RECENTITEMS","Neuer Artikel (Details)");
define("_MI_SSECTION_SHOW_RSS","Zeige Link für RSS feed");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS","Zeige Unterkategorien");
define("_MI_SSECTION_SHOW_SUBCATS_ALL","Zeige alle Unterkategorien");
define("_MI_SSECTION_SHOW_SUBCATS_DSC","Wähle aus, wenn die Unterkategorien in der Kategorienauflistung auf der Haupt- und Kategorieseite angezeigt werden sollen");
define("_MI_SSECTION_SHOW_SUBCATS_NO","Keine Unterkategorien anzeigen");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY","Keine leeren Unterkategorien anzeigen");
define("_MI_SSECTION_SUB_SMNAME1","Artikel einsenden");
define("_MI_SSECTION_SUB_SMNAME2","Populäre Artikel");
define("_MI_SSECTION_SUBMITMSG","Seite einrichten für Intro-Anzeige:");
define("_MI_SSECTION_SUBMITMSGDEF","");
define("_MI_SSECTION_SUBMITMSGDSC","Intro-Anzeige in der eingerichteten Seite des Moduls anzeigen.");
define("_MI_SSECTION_TITLE_SIZE","Titel Größe:");
define("_MI_SSECTION_TITLE_SIZEDSC","Setze maximale Größe des Titels des einzelnen Artikel.");
define("_MI_SSECTION_UPLOAD","User Datei upload?");
define("_MI_SSECTION_UPLOADDSC","Erlaube Usern mit den Artikeln verlinkte Dateien zur Ihrer Webseite downzuloaden?");
define("_MI_SSECTION_USEREALNAME","Benutze richtigen Namen des Users");
define("_MI_SSECTION_USEREALNAMEDSC","Wenn ein Username angezeigt wird, benutze den richtigen Namen des Users, sofern dieser hinterlegt ist.");
define("_MI_SSECTION_VERSION_HISTORY","Version History");
define("_MI_SSECTION_WARNING_BETA","Dieses Modul kommt ohne Garantie zum Einsatz. Bei dem Modul handelt es sich um eine BETA-Version, die aktiv weiter entwickelt wird. Diese Version ist nur für <b>Testzwecke</b> bestimmt und wir empfehlen <b>dringend</b>, diese Version nicht in Echtbetrieb einzusetzen.");
define("_MI_SSECTION_WARNING_FINAL","Dieses Modul kommt ohne Garantie zum Einsatz. Obgleich dieses Modul keine BETA-Version ist, wird es aktiv weiter entwickelt. Dieses Modul kann im Echtbetrieb zum Einsatz kommen, aber die Benutzung obliegt Ihrer eigenen Verantwortung, nicht die des Entwicklers.");
define("_MI_SSECTION_WARNING_RC","Dieses Modul kommt ohne Garantie zum Einsatz. Bei dem Modul handelt es sich um ein Release Candidate, das aktiv weiter entwickelt wird.  Das Modul befindet sich noch in der aktiven Entwicklerphase und die Benutzung obliegt Ihrer eigenen Verantwortung, nicht die des Entwicklers.");
define("_MI_SSECTION_WELCOME","Zeige Willkommen-Titel und Nachricht:");
define("_MI_SSECTION_WELCOMEDSC","Wenn diese Option auf 'Ja' gesetzt ist, wird auf der Hauptseite der Titel 'Willkommen bei SmartSection von...', gefolgt von der unten definierten Willkommensnachricht angezeigt. Ist diese Option auf 'Nein' gesetzt, wird keine dieser Zeilen angezeigt.");
define("_MI_SSECTION_WHOWHEN","Zeige Autor und Datum an?");
define("_MI_SSECTION_WHOWHENDSC","Wähle 'Ja', um den Autor und Datuminformationen in dem individuellen Artikel anzuzeigen");
define("_MI_SSECTION_WYSIWYG","Editor Typ");
define("_MI_SSECTION_WYSIWYGDSC","Welchen Editor möchten Sie benutzen? Bitte beachten Sie, dass wenn Sie einen anderen Editor als den DHTML-Editor wählen möchten, auch ein anderer Editor auf Ihrer Seite installiert sein muss.");

define("_MI_SSECTION_PV_TEXT","Hinweis zur teilweisen Ansicht");
define("_MI_SSECTION_PV_TEXTDSC","Hinweis für Artikel die nur teilweise eine Ansicht ermöglichen.");
define("_MI_SSECTION_PV_TEXT_DEF","Zum lesen des gesamten Beitrages müssen Sie sich bitte registrieren.");

define("_MI_SSECTION_SEOMODNAME","URL Rewriting Modulname");
define("_MI_SSECTION_SEOMODNAMEDSC","Wenn URL Rewriting für das Modul aktiviert ist, ist die der Name der nach außen angezeigt wird. Beispiel: http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT","Artikelzähler anzeigen");
define("_MI_SSECTION_ARTCOUNTDSC","Wählen Sie 'JA' um den Artikelzähler innerhalb jeder Kategorie in der Zusammenfassung bzw. Tabelle anzuzeigen. Bitte beachten Sie, Artikel aus Unterkategorien werden nicht mitgezählt bzw. zeigt der Artikelzähler diese nicht an");

define("_MI_SSECTION_LATESTFILES","Zuletzt hochgeladene Dateien");

define("_MI_SSECTION_PATHSEARCH","Zeige den Kategoriepfad in den Suchergebnissen");
define("_MI_SSECTION_PATHSEARCHDSC","");
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN","Zeige Unterkategorien nur in der Modulhautpseite");
define("_MI_SSECTION_RATING_ENABLED","Bewertungssystem einschalten");
define("_MI_SSECTION_RATING_ENABLEDDSC","Dieses Feature benötigt das 'SmartObject Framework'");

define("_MI_SSECTION_DISPBREAD","Zeige 'breadcrumb Navigation'");
define("_MI_SSECTION_DISPBREADDSC","Das ist eine kontextuelle Anzeige der Inhaltsseite innerhalb einer Website durch Angabe eines Navigationspfades");

define('_MI_SSECTION_DATE_TO_DATE','Artikel vom Datum bis Datum')
?>