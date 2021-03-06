<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once("admin_header.php");

$op='none';

if (isset($_GET['op'])) $op = $_GET['op'];
if (isset($_POST['op'])) $op = $_POST['op'];

switch ($op) {

	case "importExecute":

	$importfile = (isset($_POST['importfile'])) ? $_POST['importfile'] : 'nonselected';
	$importfile_path = XOOPS_ROOT_PATH."/modules/" . $xoopsModule->getVar('dirname') . "/admin/".$importfile.".php";
	if (!file_exists($importfile_path)) {
		$errs[] = sprintf(_AM_SSECTION_IMPORT_FILE_NOT_FOUND, $importfile_path);
		$error = true;
	} else {
		include_once($importfile_path);
	}
	foreach ($msgs as $m) {
		echo $m.'<br />';
	}
	echo "<br />";
	if ($error == true) {
		$endMsg = _AM_SSECTION_IMPORT_ERROR;
	} else {
		$endMsg = _AM_SSECTION_IMPORT_SUCCESS;
	}

	echo $endMsg;
	echo "<br /><br />";
	echo "<a href='import.php'>" . _AM_SSECTION_IMPORT_BACK . "</a>";
	echo "<br /><br />";
	break;

	case "default":
	default:

	$importfile = 'none';

	smartsection_xoops_cp_header();

	smartsection_adminMenu(-1, _AM_SSECTION_IMPORT);

	smartsection_collapsableBar('import', 'importicon', _AM_SSECTION_IMPORT_TITLE, _AM_SSECTION_IMPORT_INFO);

	include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

	$module_handler =& xoops_gethandler ('module');

	// WF-Section
	$moduleObj = $module_handler->getByDirname('wfsection');
	if ($moduleObj) {
		$from_module_version = round($moduleObj->getVar('version') / 100, 2);
		if (($from_module_version == 1.5) || $from_module_version == 1.04 || $from_module_version == 1.01 || $from_module_version == 2.07 || $from_module_version == 2.06) {
			$importfile_select_array["wfsection"] = "WF-Section " . $from_module_version;
			$wfs_version = $from_module_version;
		}
	}

	// News
	$moduleObj = $module_handler->getByDirname('news');
	if ($moduleObj) {
		$from_module_version = round($moduleObj->getVar('version') / 100, 2);
		if (($from_module_version >= 1.1)) {
			$importfile_select_array["news"] = "News " . $from_module_version;
			$news_version = $from_module_version;
		}
	}

	if (isset($importfile_select_array) && count($importfile_select_array) > 0 ) {

		$sform = new XoopsThemeForm(_AM_SSECTION_IMPORT_SELECTION, "op", xoops_getenv('PHP_SELF'));
		$sform->setExtra('enctype="multipart/form-data"');

		// Partners to import
		$importfile_select = new XoopsFormSelect('', 'importfile', $importfile);
		$importfile_select->addOptionArray($importfile_select_array);
		$importfile_tray = new XoopsFormElementTray(_AM_SSECTION_IMPORT_SELECT_FILE , '&nbsp;');
		$importfile_tray->addElement($importfile_select);
		$importfile_tray->setDescription(_AM_SSECTION_IMPORT_SELECT_FILE_DSC);
		$sform->addElement($importfile_tray);

		// Buttons
		$button_tray = new XoopsFormElementTray('', '');
		$hidden = new XoopsFormHidden('op', 'importExecute');
		$button_tray->addElement($hidden);

		$butt_import = new XoopsFormButton('', '', _AM_SSECTION_IMPORT, 'submit');
		$butt_import->setExtra('onclick="this.form.elements.op.value=\'importExecute\'"');
		$button_tray->addElement($butt_import);

		$butt_cancel = new XoopsFormButton('', '', _AM_SSECTION_CANCEL, 'button');
		$butt_cancel->setExtra('onclick="history.go(-1)"');
		$button_tray->addElement($butt_cancel);

		$sform->addElement($button_tray);
		$sform->addElement(new XoopsFormHidden('wfs_version', $wfs_version));
		$sform->addElement(new XoopsFormHidden('news_version', $news_version));
		$sform->display();
		unset($hidden);
	} else {
		echo "<span style=\"color: #567; margin: 3px 0 12px 0; font-weight: bold; font-size: small; display: block; \">" . _AM_SSECTION_IMPORT_NO_MODULE . "</span>";
	}


	// End of collapsable bar

	smartsection_close_collapsable('import', 'importicon');

	break;
}

smart_xoops_cp_footer();
?>