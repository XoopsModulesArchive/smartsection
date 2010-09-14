<?php

/**
* $Id: admin.php 331 2007-12-23 16:01:11Z malanciault $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
if (isset($xoopsModuleConfig) && isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartsection') {
	$itemType = $xoopsModuleConfig['itemtype'];
} else {
	$hModule = &xoops_gethandler('module');
	$hModConfig = &xoops_gethandler('config');
	if ($smartsection_Module = &$hModule->getByDirname('smartsection')) {
		$module_id = $smartsection_Module->getVar('mid');
		$smartsection_Config = &$hModConfig->getConfigsByCat(0, $smartsection_Module->getVar('mid'));
		$itemType = $smartsection_Config['itemtype'];
	} else {
		$itemType = 'article';
	}	
}

//include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/admin.php");
*/
define("_AM_SSECTION_ABOUT", "About");
define("_AM_SSECTION_ACTION", "Azione");
define("_AM_SSECTION_ADD_OPT","Aggiungi %s  pi� sub categorie");
define("_AM_SSECTION_ADD_OPT_SUBMIT","Aggiungi");
define("_AM_SSECTION_ADMIN_CATS", "Seleziona le categorie che ciascun gruppo pu� moderare");
define("_AM_SSECTION_ADMINCOLMNGMT", "Amministra Categorie");
define("_AM_SSECTION_ALL", "Tutto");
define("_AM_SSECTION_ALL_EXP", "<b>Status Tutto</b>: Tutti gli articoli, indipendemente dallo Status.");
define("_AM_SSECTION_ALLITEMS", "Tutti gli articoli nel modulo");
define("_AM_SSECTION_ALLITEMSMSG", "Puoi filtrare gli articoli in base allo Status di appartenenza");
define("_AM_SSECTION_ALLOWCOMMENTS", "Permetti di inviare commenti a questo articolo?");
define("_AM_SSECTION_APPROVE", "Approva");
define("_AM_SSECTION_APPROVED", "Approvato");
define("_AM_SSECTION_APPROVED_MODERATE", "Modera  questo invio");
define("_AM_SSECTION_APPROVESUB", "Approva la proposta");
define("_AM_SSECTION_APPROVING", "In approvazione");
define("_AM_SSECTION_ASC", "Crescente");
define("_AM_SSECTION_AVAILABLE", "<span style='font-weight: bold; color: green;'>Ok!</span>");
define("_AM_SSECTION_BACK2IDX", "Cancellato. Sto riportandoti all'Indice");
define("_AM_SSECTION_BLOCKS", "Amministra Blocchi");
define("_AM_SSECTION_BLOCKSANDGROUPS", "Blocchi e gruppi");
define("_AM_SSECTION_BLOCKSGROUPSADMIN", "Amministra Blocchi e Gruppi");
define("_AM_SSECTION_BLOCKSTXT", "Questo modulo ha i seguenti blocchi, che puoi configurare anche qui oltre che nel modulo di sistema.");
define("_AM_SSECTION_BODY", "Articolo");
define("_AM_SSECTION_BODY_DSC", "Testo esteso dell'articolo");
define("_AM_SSECTION_BODY_REQ", "Articolo*");
define("_AM_SSECTION_BY", "da");
define("_AM_SSECTION_CANCEL", "Cancella");
define("_AM_SSECTION_CAT_ITEMS", "Articoli");
define("_AM_SSECTION_CAT_ITEMS_DSC", "Articoli all'interno di questa categoria");
define("_AM_SSECTION_CATCOLNAME","Titolo");
define("_AM_SSECTION_CATCREATED", "Categoria creata e salvata!");
define("_AM_SSECTION_CATEGORIES", "Categorie");
define("_AM_SSECTION_CATEGORIES_DSC", "Elenco di tutte le categorie del modulo.");
define("_AM_SSECTION_CATEGORIES_TITLE", "Categorie create");
define("_AM_SSECTION_CATEGORY", "Categoria");
define("_AM_SSECTION_CATEGORY_CREATE", "Crea una categoria");
define("_AM_SSECTION_CATEGORY_CREATE_INFO", "Riempi il modulo seguente per creare una nuova categoria. La categoria appena creata sar� immediatamentee visibile dal lato utente.");
define("_AM_SSECTION_CATEGORY_DSC", "	Categoria alla quale appartiene questo articolo.");
define("_AM_SSECTION_CATEGORY_EDIT_INFO", "Puoi modificare questa categoria. Le modifiche avranno effetto immediato dal lato utente.");
define("_MD_SSECTION_CATEGORY_ITEM", "Categorie<span style='font-size: xx-small; font-weight: normal; display: block;'>Categoria alla quale appartiene questa categoria.</span>");
define("_AM_SSECTION_CATEGORY_REQ", "Categoria*");
define("_AM_SSECTION_CATEGORY_SAVE_ERROR", "Si � verificato un errore durante il salvataggio della categoria. Qui sotto un elenco degli errori :");
define("_AM_SSECTION_CATHEADER", "Gestione categorie");
define("_AM_SSECTION_CATID","ID");
define("_AM_SSECTION_CLEAR", "Pulisci");
define("_AM_SSECTION_COLDESCRIPT", "Descrizione della categoria");
define("_AM_SSECTION_COLISDELETED", "La categoria %s � stata eliminata");
define("_AM_SSECTION_COLMODIFIED", "La categoria e stata modificata con successo.");
define("_AM_SSECTION_COLPOSIT", "Posizione dela categoria");
define("_AM_SSECTION_CREATE", "Vai!");
define("_AM_SSECTION_CREATECATEGORY", "Crea una nuova categoria");
define("_AM_SSECTION_CREATED", "Data");
define("_AM_SSECTION_CREATEITEM", "Crea un articolo");
define("_AM_SSECTION_CREATESMARTITEM", "Crea un nuovo articolo");
define("_AM_SSECTION_CREATETHEDIR", "Crea la cartella");
define("_AM_SSECTION_CREATINGNEW", "Nuova creazione");
define("_AM_SSECTION_DATESUB", "Data di publicazione");
define("_AM_SSECTION_DATESUB_DSC", "Seleziona la data di pubblicazione");
define("_AM_SSECTION_DELETE", "Elimina");
define("_AM_SSECTION_DELETE_CAT_CONFIRM", "Avvertenza: cancellando una categoria, tutte le sub categorie, gli articoli collegati alla categoria e i commenti collegati agli articoli saranno cancellati. Sicuro di voler cancellare questa categoria?");
define("_AM_SSECTION_DELETE_CAT_ERROR", "Si � verificato un errore durante la cancellazione di questa categoria.");
define("_AM_SSECTION_DELETECOL", "Elimina la categoria");
define("_AM_SSECTION_DELETEFILE","Elimina il file");
define("_AM_SSECTION_DELETEITEM", "Elimina l'articolo");
define("_AM_SSECTION_DELETETHISFILE","Davvero vuoi eliminare il file?");
define("_AM_SSECTION_DELETETHISITEM", "Elimino questo file?");
define("_AM_SSECTION_DESC", "Decrescente");
define("_AM_SSECTION_DESCRIP", "Descizione della categoria");
define("_AM_SSECTION_DESCRIPTION", "Descrizione");
define("_AM_SSECTION_DIRCREATED", "Cartella creata con successo ");
define("_AM_SSECTION_DIRNOTCREATED", "La cartella non pu� essere creata ");
define("_AM_SSECTION_DISPLAY_SUMMARY", "Mostra anche il sommario nella pagina dell'articolo?");
define("_AM_SSECTION_DOHTML", " Abilita tags HTML");
define("_AM_SSECTION_DOIMAGE", " Abilita immagini");
define("_AM_SSECTION_DOLINEBREAK", " Abilita interruzioni di riga");
define("_AM_SSECTION_DOSMILEY", " Abilita faccine");
define("_AM_SSECTION_DOXCODE", " Abilita codici XOOPS");
define("_AM_SSECTION_EDITCOL", "Modifica la categoria");
define("_AM_SSECTION_EDITFILE","Modifica il file");
define("_AM_SSECTION_EDITING", "Modifiche");
define("_AM_SSECTION_EDITITEM", "Modifica l'articolo");
define("_AM_SSECTION_ERROR", " Si � verificato un errore.");
define("_AM_SSECTION_ERROR_ITEM_NOT_SAVED", "Si � verificato un errore. L'articolo non � stato salvato nel database.");
define("_AM_SSECTION_FILE", "Files");
define("_AM_SSECTION_FILE_ADD", "Aggiungi un file");
define("_AM_SSECTION_FILE_ADDING", "Aggiungi un nuovo file");
define("_AM_SSECTION_FILE_ADDING_DSC", "Riempi il modulo seguente per aggiungere un nuovo file a questo articolo.");
define("_AM_SSECTION_FILE_DELETE_ERROR","Si � verificato un errore durante l'eliminazione del file.");
define("_AM_SSECTION_FILE_DESCRIPTION", "Descrizione");
define("_AM_SSECTION_FILE_DESCRIPTION_DSC", "Descrizione associata al file.");
define("_AM_SSECTION_FILE_EDITING", "Modifica un file");
define("_AM_SSECTION_FILE_EDITING_DSC", "Puoi modificare questo file. Le modifiche saranno immediatamente visibili dal lato utente.");
define("_AM_SSECTION_FILE_EDITING_ERROR", "Si � verificato un errore nel tentativo di aggiornare il file.");
define("_AM_SSECTION_FILE_EDITING_SUCCESS", "Il file � stato modificato con successo.");
define("_AM_SSECTION_FILE_INFORMATIONS", "Informazioni del file");
define("_AM_SSECTION_FILE_NAME", "Nome");
define("_AM_SSECTION_FILE_NAME_DSC", "Nome che sar� usato per identificare il file.");
define("_AM_SSECTION_FILE_TO_UPLOAD", "File da caricare :");
define("_AM_SSECTION_FILEISDELETED","Il file � stato eliminato con successo") ;
define("_AM_SSECTION_FILENAME", "Nome file");
define("_AM_SSECTION_FILES_LINKED", "Files allegati:");
define("_AM_SSECTION_FILEUPLOAD_ERROR", "Si � verificato un errore durante l'upload del file");
define("_AM_SSECTION_FILEUPLOAD_SUCCESS", "Il file � stato caricato con successo.");
define("_AM_SSECTION_GOMOD", "Vai al modulo");
define("_AM_SSECTION_GROUPS", "Amministra Gruppi");
define("_AM_SSECTION_GROUPSINFO", "Configura i permessi del modulo e dei blocchi per ciascun gruppo");
define("_AM_SSECTION_HELP", "Help");
define("_AM_SSECTION_HITS", "Letture");
define("_AM_SSECTION_ID", "Id");
define("_AM_SSECTION_IMAGE", "Immagine della categoria");
define("_AM_SSECTION_IMAGE_DSC", "Immagine da associare alla categoria");
define("_AM_SSECTION_IMAGE_ITEM", "Immagine");
define("_AM_SSECTION_IMAGE_ITEM_DSC", "Immagine da associare all'articolo");
define("_AM_SSECTION_IMAGE_UPLOAD", "Carica un'immagine");
define("_AM_SSECTION_IMAGE_UPLOAD_DSC", "Seleziona un'immagine sul tuo computer. L'immagine sar� salvata sul sito e associata alla categoria.");
define("_AM_SSECTION_IMAGE_UPLOAD_ITEM_DSC", "Seleziona un'immagine sul tuo computer. L'immagine sar� salvata sul sito e associata all'articolo.");
define("_AM_SSECTION_IMAGEPATH", "Category storing the categoria images: ");
define("_AM_SSECTION_INDEX", "Indice");
define("_AM_SSECTION_INVENTORY", "Riepilogo del modulo");
define("_AM_SSECTION_ITEM", "Articolo");
define("_AM_SSECTION_ITEM_CREATING", "Crea un articolo");
define("_AM_SSECTION_ITEM_CREATING_DSC", "Compila il modulo qui sotto per creare un nuovo articolo.");
define("_AM_SSECTION_ITEM_DELETE_ERROR", "Si � verificato un errore nel cancellare questo articolo.");
define("_AM_SSECTION_ITEM_EDIT", "Modifica l'articolo");
define("_AM_SSECTION_ITEM_INFORMATIONS", "Class action suit informations");
define("_AM_SSECTION_ITEMCAT", "Categoria");
define("_AM_SSECTION_ITEMCATEGORYNAME", "Categoria");
define("_AM_SSECTION_ITEMCOLNAME", "Titolo");
define("_AM_SSECTION_ITEMCREATEDOK", "L'articolo � stato creato e pubblicato !");
define("_AM_SSECTION_ITEMDESC", "Descrizione");
define("_AM_SSECTION_ITEMID", "ID");
define("_AM_SSECTION_ITEMISDELETED", "L'articolo � stato eliminato.");
define("_AM_SSECTION_ITEMMODIFIED", "L'articolo � stato modificato!");
define("_AM_SSECTION_ITEMNOTCREATED", "Spiacente non � possibile creare questo articolo!");
define("_AM_SSECTION_ITEMNOTUPDATED", "Spiacente non � possibile aggiornare l'articolo!");
define("_AM_SSECTION_ITEMS", "Articoli");
define("_AM_SSECTION_MODADMIN", "Module Admin:");
define("_AM_SSECTION_MODIFY", "Modifica");
define("_AM_SSECTION_MODIFYCAT", "Modifica la categoria");
define("_AM_SSECTION_MODIFYTHISCAT", "Modifica questa categoria?");
define("_AM_SSECTION_NB_SUBCATS","Numero di categorie da aggiungere:<br><br>Inserisci il numero e premi 'Aggiungi'");
define("_AM_SSECTION_NEED_CATEGORY_ITEM", "Per creare un articolo devi prima creare una categoria.");
define("_AM_SSECTION_NO", "No");
define("_AM_SSECTION_NOCAT", "Nessuna categoria da mostrare");
define("_AM_SSECTION_NOCOLTOEDIT", "Nessuna categoria da modificare!");
define("_AM_SSECTION_NOFILE", "Questo articolo non ha alcun file allegato.");
define("_AM_SSECTION_NOFILESELECTED", "Nessun file selezionato.");
define("_AM_SSECTION_NOFOUND", "No users match the required string.");
define("_AM_SSECTION_NOITEMS", "Non ci sono articoli pubblicati.");
define("_AM_SSECTION_NOITEMSELECTED", "Nessun articolo selezionato !");
define("_AM_SSECTION_NOITEMSSEL", "Non ci sono articoli nello Status selezionato.");
define("_AM_SSECTION_NONE", "Nessuno");
define("_AM_SSECTION_NOPERMSSET", "I permessi non possono essere settati : Ancora nessuna categoria creata! Crea prima una categoria.");
define("_AM_SSECTION_NOSUBCAT","Non � stata creata ancora nessuna sub categoria");
define("_AM_SSECTION_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Non disponibile</span>");
define("_AM_SSECTION_NOTUPDATED", "Errore durante l'aggiornamento del database!");
define("_AM_SSECTION_OFFLINE", "Sospeso");
define("_AM_SSECTION_OFFLINE_CREATED_SUCCESS", "Articolo creato correttamente ma sospeso.");
define("_AM_SSECTION_OFFLINE_EXP", "<b>Articoli Sospesi</b> : Articoli pubblicati ma sospesi, temporaneamente o no. Gli articoli sospesi non sono visibili dal lato utente.");
define("_AM_SSECTION_OFFLINE_FIELD", "Sospeso<span style='font-size: xx-small; font-weight: normal; display: block;'>Seleziona 'No' per tornare allo stato precedente<br />visibile.</span>");
define("_AM_SSECTION_OFFLINE_MOD_SUCCESS", "L'articolo � sospeso.");
define("_AM_SSECTION_OFFLINEEDITING", "Modifica la condizione di un articolo sospeso");
define("_AM_SSECTION_OFFLINEEDITING_INFO", "Puoi modificare questo articolo sospeso. Le modifiche saranno salvate per questo articolo. Per visualizzare questo articolo dal lato utente, si deve impostare lo Status a <b>Pubblicato</b>.");
define("_AM_SSECTION_OPTIONS", "Opzioni");
define("_AM_SSECTION_OPTS", "Preferenze");
define("_AM_SSECTION_PARENT_CATEGORY_EXP", "Categoria superiore<span style='font-size: xx-small; font-weight: normal; display: block;'>Seleziona la categoria alla quale vuoi appendere la presente categoria.</span>");
define("_AM_SSECTION_PATH", "Percorso");
define("_AM_SSECTION_PATH_FILES", "Files allegati");
define("_AM_SSECTION_PATH_IMAGES", "Immagini: generale");
define("_AM_SSECTION_PATH_IMAGES_CATEGORY", "Immagini categoria");
define("_AM_SSECTION_PATH_IMAGES_ITEM", "Immagini articoli");
define("_AM_SSECTION_PATH_ITEM", "Upload elementi");
define("_AM_SSECTION_PATHCONFIGURATION", "Configurazione Percorsi");
define("_AM_SSECTION_PERMISSIONS", "Permessi");
define("_AM_SSECTION_PERMISSIONS_APPLY_ON_ITEMS", "Assegna i permessi di lettura all'articolo<span style='font-size: xx-small; font-weight: normal; display: block;'>Assegna i permessi di lettura a tutti<br />gli articoli della categoria, sovrascrivendo i<br />permessi attuali</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_READ", "Permessi di lettura<span style='font-size: xx-small; font-weight: normal; display: block;'>Gruppi che avranno i permessi di vedere<br />questa categoria, come qualsiasi articolo<br />della categoria.</span>");
define("_AM_SSECTION_PERMISSIONS_ITEM", "Permessi");
define("_AM_SSECTION_PERMISSIONS_ITEM_DSC", "Gruppi che possono vedere questo articolo.");
define("_AM_SSECTION_PERMISSIONSADMIN", "Amministrazione dei permessi");
define("_AM_SSECTION_PERMISSIONSADMINMAN", "Permessi di moderare le categorie");
define("_AM_SSECTION_PERMISSIONSVIEWMAN", "Permessi di lettura della categorie");
define("_AM_SSECTION_PUBLISH", "Pubblica");
define("_AM_SSECTION_PUBLISHED", "Pubblicato");
define("_AM_SSECTION_PUBLISHED_DSC", "Elenco degli articoli visibili dal lato utente");
define("_AM_SSECTION_PUBLISHED_EXP", "<b>Articoli pubblicati</b> : articoli approvati e visibili dal lato utente.");
define("_AM_SSECTION_PUBLISHED_MOD_SUCCESS", "L'articolo � stato modificato.");
define("_AM_SSECTION_PUBLISHEDEDITING", "Modifica un articolo pubblicato");
define("_AM_SSECTION_PUBLISHEDEDITING_INFO", "Puoi modificare questo articolo. Le modifiche saranno immediatamente visibili dal lato utente.");
define("_AM_SSECTION_PUBLISHEDITEMS", "Articoli pubblicati");
define("_AM_SSECTION_REJECTED", "Rifiutato");
define("_AM_SSECTION_REJECTED_EDIT", "Modifica questo articolo rifiutato");
define("_AM_SSECTION_REJECTED_ITEM", "Articoli Rifiutati");
define("_AM_SSECTION_REJECTED_ITEM_EXP", "<b>Articoli Rifiutati</b> : articoli che sono stati inviati da un utente, ma sospesi da un moderatore. Gli articoli rifiutati non sono visibili dal lato utente.");
define("_AM_SSECTION_SCATEGORYNAME","Crea sub categorie<br><br><span style='font-size: xx-small; font-weight: normal; display: block;'>Riempi la casella di testo con nome delle categorie che vuoi creare.<br>Lascia vuto per non creare alcuna sub categoria. Per crearne di pi�, inserisci il numero da creare e premi 'Aggiungi'</span>");
define("_AM_SSECTION_SELECT_SORT", "Ordina in base a:");
define("_AM_SSECTION_SELECT_STATUS", "Status");
define('_AM_SSECTION_SETMPERM','Imposta il permesso');
define("_AM_SSECTION_SHOWING", "Visualizzazione di:");
define("_AM_SSECTION_STATUS", "Status");
define("_AM_SSECTION_STATUS_DSC", "Seleziona lo Status dell'articolo");
define("_AM_SSECTION_SUBCAT_CAT","Sub categorie");
define("_AM_SSECTION_SUBCAT_CAT_DSC","Elenco delle sub categorie di questa categoria");
define("_AM_SSECTION_SUBCATEGORY_SAVE_ERROR","Si � verificato un errore durante il salvataggio della categoria. Qui sotto � l'elenco degli errori:");
define("_AM_SSECTION_SUBDESCRIPT","Descrizione");
define("_AM_SSECTION_SUBMISSION_MODERATE", "Modera questo articolo");
define("_AM_SSECTION_SUBMISSIONSMNGMT", "Articoli inviati");
define("_AM_SSECTION_SUBMITTED", "Inviato");
define("_AM_SSECTION_SUBMITTED_APPROVE_SUCCESS", "L'articolo inviato � stato pubblicato dal lato utente.");
define("_AM_SSECTION_SUBMITTED_EXP", "<b>Articoli inviati</b> : Articoli inviati dagli utenti. Una volta approvati sono visibili dal lato utente.");
define("_AM_SSECTION_SUBMITTED_INFO", "Questo articolo � stato inviato da un utente. Puoi modificarlo se vuoi. Solo una volta approvato per�, sar� visibile dal lato utente.");
define("_AM_SSECTION_SUBMITTED_TITLE", "Approva un articolo inviato");
define("_AM_SSECTION_SUMMARY", "Introduzione");
define("_AM_SSECTION_SUMMARY_DSC", "Introduzione - Sommario dell'articolo.");
define("_AM_SSECTION_TITLE", "Titolo");
define("_AM_SSECTION_TITLE_REQ", "Titolo*");
define("_AM_SSECTION_TOTAL_OFFLINE", "Articoli Sospesi: ");
define("_AM_SSECTION_TOTALCAT", "Categorie: ");
define("_AM_SSECTION_TOTALPUBLISHED", "Articoli Pubblicati: ");
define("_AM_SSECTION_TOTALSUBMITTED", "Articoli Inviati: ");
define("_AM_SSECTION_UID", "Autore");
define("_AM_SSECTION_UID_DSC", "Seleziona il nome dell'autore");
define("_AM_SSECTION_UPLOAD", "Upload");
define("_AM_SSECTION_UPLOAD_FILE", "Carica un file");
define("_AM_SSECTION_UPLOAD_FILE_NEW", "Carica un nuovo file");
define("_AM_SSECTION_UPLOADED_DATE", "Caricato");
define("_AM_SSECTION_UPLOADPATH", "Categoria storing the uploaded files attaches to articles: ");
define("_AM_SSECTION_VIEW_CATS", "Seleziona le categorie che ciascun gruppo pu� vedere");
define("_AM_SSECTION_WEIGHT", "Peso");
define("_AM_SSECTION_YES", "Si");

// Search users
define("_AM_SSECTION_ACTIVEUSERS", "Utenti attivi: %s");
define("_AM_SSECTION_FINDUSERS", "Ricerca utenti");
define("_AM_SSECTION_INACTIVEUSERS", "Utenti inattivi: %s");
define("_AM_SSECTION_LIMIT", "Utenti per pagina");
define("_AM_SSECTION_REALNAME", "Nome reale");
define("_AM_SSECTION_RESULTS", "Risultato della ricerca");
define("_AM_SSECTION_SUBMIT", "Invia");
define("_AM_SSECTION_UNAME", "User name");


//upgrade tables constants
define("_AM_SSECTION_DB_CHECKTABLES", "Controllo tabelle");
define("_AM_SSECTION_DB_CURRENTVER", 'Versione corrente: <span class="currentVer">%s</span>');
define("_AM_SSECTION_DB_DBVER", "Versione del Database %s");
define("_AM_SSECTION_DB_MSG_ADD_DATA", "Dati aggiunti nella tabella %s");
define('_AM_SSECTION_DB_MSG_ADD_DATA_ERR', 'Errore durante inserimento dati nella tabella %s');
define('_AM_SSECTION_DB_MSG_CHGFIELD', 'Modifiche al campo %s nella tabella %s');
define('_AM_SSECTION_DB_MSG_CHGFIELD_ERR', 'Errore durante le modifichee al campo %s nella tabella %s');
define("_AM_SSECTION_DB_MSG_CREATE_TABLE", "Tabella %s creata");
define('_AM_SSECTION_DB_MSG_CREATE_TABLE_ERR', 'Errore durante la creazione della tabella %s');
define("_AM_SSECTION_DB_NEEDUPDATE", "Il tuo database � scaduto. Per piacere aggiorna le tabelle del tuo database!<br><b>Nota: SmartFactory raccomanda caldamente di fare il backup di tutte le tabelle di SmartSection prima di lanciare questo script per l'upgrade.</b><br>");
define('_AM_SSECTION_DB_NOUPDATE', 'I tuo dabase � aggiornato. Aggiornamento non necessario.');
define("_AM_SSECTION_DB_UPDATE_DB", "Aggiornamento del Database");
define('_AM_SSECTION_DB_UPDATE_ERR', 'Errore durante l\'aggiornamento alla versione %s');
define("_AM_SSECTION_DB_UPDATE_NOW", "Aggiorna adesso!");
define("_AM_SSECTION_DB_UPDATE_OK", "Aggionamento effettuato alla versione %s");
define('_AM_SSECTION_DB_UPDATE_TO', 'Aggionamento alla versione %s');
define("_AM_SSECTION_UPDATE_MODULE", "Aggiorna il modulo");
?>