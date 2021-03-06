<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once("admin_header.php");

/*
	$member_handler = xoops_gethandler('member');
	$criteria = new CriteriaCompo();
	$criteria->setSort('uname');
	$criteria->setOrder('ASC');
	$users = $member_handler->getUserList($criteria);

	var_dump($users);
	exit;

*/

global $smartsection_item_handler, $smartsection_category_handler, $smartsection_file_handler;

$op = '';
if (isset($_GET['op'])) $op = $_GET['op'];
if (isset($_POST['op'])) $op = $_POST['op'];

// Where shall we start ?
$submittedstartitem = isset($_GET['submittedstartitem']) ? intval($_GET['submittedstartitem']) : 0;
$publishedstartitem = isset($_GET['publishedstartitem']) ? intval($_GET['publishedstartitem']) : 0;
$offlinestartitem = isset($_GET['offlinestartitem']) ? intval($_GET['offlinestartitem']) : 0;
$rejectedstartitem = isset($_GET['rejectedstartitem']) ? intval($_GET['rejectedstartitem']) : 0;

function showfiles($itemObj)
{
	// UPLOAD FILES
	//include_once XOOPS_ROOT_PATH . '/modules/smartsection/include/functions.php';
	global $xoopsModule, $smartsection_file_handler;

	smartsection_collapsableBar('filetable', 'filetableicon', _AM_SSECTION_FILES_LINKED);
	$filesObj =& $smartsection_file_handler->getAllFiles($itemObj->itemid());
	if (count($filesObj) > 0) {
		echo "<table width='100%' cellspacing=1 cellpadding=3 border=0 class = outer>";
		echo "<tr>";
		echo "<td width='50' class='bg3' align='center'><b>ID</b></td>";
		echo "<td width='150' class='bg3' align='left'><b>" . _AM_SSECTION_FILENAME . "</b></td>";
		echo "<td class='bg3' align='left'><b>" . _AM_SSECTION_DESCRIPTION . "</b></td>";
		echo "<td width='60' class='bg3' align='center'><b>" . _AM_SSECTION_HITS . "</b></td>";
		echo "<td width='100' class='bg3' align='center'><b>" . _AM_SSECTION_UPLOADED_DATE . "</b></td>";
		echo "<td width='60' class='bg3' align='center'><b>" . _AM_SSECTION_ACTION . "</b></td>";
		echo "</tr>";

		for ( $i = 0; $i < count($filesObj); $i++ ) {
			$modify = "<a href='file.php?op=mod&fileid=" . $filesObj[$i]->fileid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/edit.gif' title='" . _AM_SSECTION_EDITFILE . "' alt='" . _AM_SSECTION_EDITFILE . "' /></a>";
			$delete = "<a href='file.php?op=del&fileid=" . $filesObj[$i]->fileid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/delete.gif' title='" . _AM_SSECTION_DELETEFILE . "' alt='" . _AM_SSECTION_DELETEFILE . "'/></a>";
			if($filesObj[$i]->status() == 0 ){
				 $not_visible = "<img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/no.gif'/>";
			}
			else {
				$not_visible ='';
			}
			echo "<tr>";
			echo "<td class='head' align='center'>" .$filesObj[$i]->getVar('fileid') . "</td>";
			echo "<td class='odd' align='left'>" .$not_visible. $filesObj[$i]->getFileLink() . "</td>";
			echo "<td class='even' align='left'>" . $filesObj[$i]->description() . "</td>";
			echo "<td class='even' align='center'>" . $filesObj[$i]->counter() . "";
			echo "<td class='even' align='center'>" . $filesObj[$i]->datesub() . "</td>";
			echo "<td class='even' align='center'> $modify $delete </td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<br >";
	} else {
		echo "<span style=\"color: #567; margin: 3px 0 12px 0; font-size: small; display: block; \">" . _AM_SSECTION_NOFILE . "</span>";
	}

	echo "<form><div style=\"margin-bottom: 24px;\">";
	echo "<input type='button' name='button' onclick=\"location='file.php?op=mod&itemid=" . $itemObj->itemid(). "'\" value='" . _AM_SSECTION_UPLOAD_FILE_NEW . "'>&nbsp;&nbsp;";
	echo "</div></form>";

	smartsection_close_collapsable('filetable', 'filetableicon');
}

function edititem($showmenu = false, $itemid = 0, $clone = false)
{

	global $smartsection_current_page, $smartsection_file_handler, $smartsection_item_handler, $smartsection_category_handler, $xoopsUser, $xoopsModule, $xoopsConfig, $xoopsDB;

	include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
	include_once SMARTSECTION_ROOT_PATH . '/class/formdatetime.php';
	// if there is a parameter, and the id exists, retrieve data: we're editing a item

	if ($itemid != 0) {

		// Creating the ITEM object
		$itemObj = $smartsection_item_handler->get($itemid);

		if (!$itemObj) {
			redirect_header("item.php", 1, _AM_SSECTION_NOITEMSELECTED);
			exit();
		}

		if ($clone) {
			$itemObj->setNew();
			$itemObj->setVar('status', _SSECTION_STATUS_NOTSET);
			$itemObj->setVar('datesub', time());
		}

		switch ($itemObj->status()) {

			case _SSECTION_STATUS_SUBMITTED :
			$breadcrumb_action1 = 	_AM_SSECTION_SUBMITTED;
			$breadcrumb_action2 = 	_AM_SSECTION_APPROVING;
			$page_title = _AM_SSECTION_SUBMITTED_TITLE;
			$page_info = _AM_SSECTION_SUBMITTED_INFO;
			$button_caption = _AM_SSECTION_APPROVE;
			$new_status = _SSECTION_STATUS_PUBLISHED;
			break;

			case _SSECTION_STATUS_PUBLISHED :
			$breadcrumb_action1 = 	_AM_SSECTION_PUBLISHED;
			$breadcrumb_action2 = 	_AM_SSECTION_EDITING;
			$page_title = _AM_SSECTION_PUBLISHEDEDITING;
			$page_info = _AM_SSECTION_PUBLISHEDEDITING_INFO;
			$button_caption = _AM_SSECTION_MODIFY;
			$new_status = _SSECTION_STATUS_PUBLISHED;
			break;

			case _SSECTION_STATUS_OFFLINE :
			$breadcrumb_action1 = 	_AM_SSECTION_OFFLINE;
			$breadcrumb_action2 = 	_AM_SSECTION_EDITING;
			$page_title = _AM_SSECTION_OFFLINEEDITING;
			$page_info = _AM_SSECTION_OFFLINEEDITING_INFO;
			$button_caption = _AM_SSECTION_MODIFY;
			$new_status = _SSECTION_STATUS_OFFLINE;
			break;

			case _SSECTION_STATUS_REJECTED :
			$breadcrumb_action1 = 	_AM_SSECTION_REJECTED;
			$breadcrumb_action2 = 	_AM_SSECTION_REJECTED;
			$page_title = _AM_SSECTION_REJECTED_EDIT;
			$page_info = _AM_SSECTION_REJECTED_EDIT_INFO;
			$button_caption = _AM_SSECTION_MODIFY;
			$new_status = _SSECTION_STATUS_REJECTED;
			break;

			case _SSECTION_STATUS_NOTSET : // Then it's a clone...
			$breadcrumb_action1 = _AM_SSECTION_ITEMS;
			$breadcrumb_action2 = _AM_SSECTION_CLONE_NEW;
			$button_caption = _AM_SSECTION_CREATE;
			$new_status = _SSECTION_STATUS_PUBLISHED;
			$page_title = _AM_SSECTION_ITEM_DUPLICATING;
			$page_info = _AM_SSECTION_ITEM_DUPLICATING_DSC;
			break;

			case "default" :
			default :
			$breadcrumb_action1 = 	_AM_SSECTION_ITEMS;
			$breadcrumb_action2 = 	_AM_SSECTION_EDITING;
			$page_title = _AM_SSECTION_PUBLISHEDEDITING;
			$page_info = _AM_SSECTION_PUBLISHEDEDITING_INFO;
			$button_caption = _AM_SSECTION_MODIFY;
			$new_status = _SSECTION_STATUS_PUBLISHED;

			break;
		}

		$categoryObj = $itemObj->category();

		if ($showmenu) {
			smartsection_adminMenu(2, $breadcrumb_action1 . " > " . $breadcrumb_action2);
		}

		echo "<br />\n";
		smartsection_collapsableBar('edititemtable', 'edititemicon', $page_title, $page_info);

		if (!$clone) {
			echo "<form><div style=\"margin-bottom: 10px;\">";
			echo "<input type='button' name='button' onclick=\"location='item.php?op=clone&itemid=" . $itemObj->itemid(). "'\" value='" . _AM_SSECTION_CLONE_ITEM . "'>&nbsp;&nbsp;";
			echo "</div></form>";
		}


	} else {
		// there's no parameter, so we're adding an item

		$itemObj =& $smartsection_item_handler->create();
		$itemObj->setVar('uid', $xoopsUser->uid());
		$categoryObj =& $smartsection_category_handler->create();
		$breadcrumb_action1 = _AM_SSECTION_ITEMS;
		$breadcrumb_action2 = _AM_SSECTION_CREATINGNEW;
		$button_caption = _AM_SSECTION_CREATE;
		$new_status = _SSECTION_STATUS_PUBLISHED;

		if ($showmenu) {
			smartsection_adminMenu(2, $breadcrumb_action1 . " > " . $breadcrumb_action2);
		}

		$sel_categoryid = isset($_GET['categoryid']) ? $_GET['categoryid'] : 0;
		$categoryObj->setVar('categoryid', $sel_categoryid);

		smartsection_collapsableBar('createitemtable', 'createitemicon', _AM_SSECTION_ITEM_CREATING, _AM_SSECTION_ITEM_CREATING_DSC);
	}

	// ITEM FORM
	$sform = new XoopsThemeForm(_AM_SSECTION_ITEMS, "op", xoops_getenv('PHP_SELF'));
	$sform->setExtra('enctype="multipart/form-data"');

	// CATEGORY

	$mytree = new XoopsTree($xoopsDB->prefix("smartsection_categories"), "categoryid" , "parentid");
	ob_start();
	//$sform->addElement(new XoopsFormHidden('categoryid', $categoryObj->categoryid()));
	$mytree->makeMySelBox("name", "weight", $categoryObj->categoryid());
	$category_label = new XoopsFormLabel(_AM_SSECTION_CATEGORY, ob_get_contents());
	$category_label->setDescription(_AM_SSECTION_CATEGORY_DSC);
	$sform->addElement($category_label);
	ob_end_clean();

	// TITLE
	$title_text = new XoopsFormText(_AM_SSECTION_TITLE, 'title', 50, 255, $itemObj->title(0, 'e'));
	$sform->addElement($title_text, true);

	if (SMARTSECTION_LEVEL >= 5 ) {
		// SUMMARY
		$summary_text = smartsection_getEditor(_AM_SSECTION_SUMMARY, 'summary', $itemObj->getVar('summary', 'e'));
		$summary_text->setDescription(_AM_SSECTION_SUMMARY_DSC);
		$sform->addElement($summary_text, false);

		// DISPLAY_SUMMARY
		$display_summary_radio = new XoopsFormRadioYN(_AM_SSECTION_DISPLAY_SUMMARY, 'display_summary', $itemObj->display_summary(), ' ' . _AM_SSECTION_YES . '', ' ' . _AM_SSECTION_NO . '');
		$sform->addElement($display_summary_radio);
	}

	// BODY
	/*if ($itemObj->address()) {
		// Main body : pagewrap
		$address_select = new XoopsFormSelect(_AM_SSECTION_BODY_SELECTFILE, "address", $itemObj->address());
		$address_select->setDescription(_AM_SSECTION_BODY_SELECTFILE_DSC);
	    $dir = smartsection_getUploadDir(true, 'content');
		$folder = dir($dir);
		while($file = $folder->read()) {
	      if ($file != "." && $file != "..") {
		     $address_select->addOption($file, "".$file."");
		  }
		}
	    $folder->close();
		$sform->addElement($address_select);

		$sform->addElement(new XoopsFormHidden('body', ''));
	} else {*/
		$body_text = smartsection_getEditor(_AM_SSECTION_BODY, 'body', $itemObj->getVar('body', 'e'));
		if (SMARTSECTION_LEVEL >= 5 ) {
			$body_text->setDescription(sprintf(_AM_SSECTION_BODY_DSC, SMARTSECTION_URL . "/admin/pagewrap_lookup.php"));
		}
		$sform->addElement($body_text);
	//}

	if (SMARTSECTION_LEVEL >= 5 ) {
		// Available pages to wrap
		$wrap_pages = XoopsLists::getHtmlListAsArray(smartsection_getUploadDir(true, 'content'));
		$available_wrap_pages_text = array();
		foreach ($wrap_pages as $page) {
			$available_wrap_pages_text[] = "<span onclick='smartsectionPageWrap(\"body\", \"[pagewrap=$page] \");' onmouseover='style.cursor=\"pointer\"'>$page</span>";
		}
		$available_wrap_pages = new XoopsFormLabel(_AM_SSECTION_AVAILABLE_PAGE_WRAP, implode(', ', $available_wrap_pages_text));
		$available_wrap_pages->setDescription(_AM_SSECTION_AVAILABLE_PAGE_WRAP_DSC);
		$sform->addElement($available_wrap_pages);

	// Tags
	if (smartsection_tag_module_included()) {
		include_once XOOPS_ROOT_PATH."/modules/tag/include/formtag.php";
		$text_tags = new XoopsFormTag("item_tag", 60, 255, $itemObj->getVar('item_tag', 'e'), 0);
		$sform->addElement($text_tags);
	}

	// IMAGE
	$image_array =  XoopsLists :: getImgListAsArray( smartsection_getImageDir('item') );
	$image_select = new XoopsFormSelect( '', 'image', $itemObj->image() );
	//$image_select -> addOption ('-1', '---------------');
	$image_select -> addOptionArray( $image_array );
	$image_select -> setExtra( "onchange='showImgSelected(\"image3\", \"image\", \"" . 'uploads/smartsection/images/item/' . "\", \"\", \"" . XOOPS_URL . "\")'" );
	$image_tray = new XoopsFormElementTray( _AM_SSECTION_IMAGE_ITEM, '&nbsp;' );
	$image_tray -> addElement( $image_select );
	$image_tray -> addElement( new XoopsFormLabel( '', "<br /><br /><img src='" . smartsection_getImageDir('item', false) .$itemObj->image() . "' name='image3' id='image3' alt='' />" ) );
	$image_tray->setDescription(_AM_SSECTION_IMAGE_ITEM_DSC);
	$sform -> addElement( $image_tray );

	// IMAGE UPLOAD
	$max_size = 5000000;
	$image_file_box = new XoopsFormFile(_AM_SSECTION_IMAGE_UPLOAD, "image_file", $max_size);
	$image_file_box->setExtra( "size ='50'") ;
	$image_file_box->setDescription(_AM_SSECTION_IMAGE_UPLOAD_ITEM_DSC);
	$sform->addElement($image_file_box);
	}

	// File upload UPLOAD
	$file_box = new XoopsFormFile(smartsection_new_feature_tag() . _AM_SSECTION_ITEM_UPLOAD_FILE, "userfile", 0);
	$file_box->setDescription(_AM_SSECTION_ITEM_UPLOAD_FILE_DSC . smartsection_new_feature_tag());
	$file_box->setExtra( "size ='50'") ;
	$sform->addElement($file_box);

	// Uid
	/*  We need to retreive the users manually because for some reason, on the frxoops.org server,
	    the method users::getobjects encounters a memory error
	*/
	$uid = $itemObj->uid();
	$uid_select = new XoopsFormSelect(_AM_SSECTION_UID, 'uid', $uid, 1, false);
	$uid_select->setDescription(_AM_SSECTION_UID_DSC);

	$sql = "SELECT uid, uname FROM " . $xoopsDB->prefix('users') . " ORDER BY uname ASC";
	$result = $xoopsDB->query($sql);
	$users_array = array();
	$users_array[0] = $xoopsConfig['anonymous'];
	while ($myrow = $xoopsDB->fetchArray($result)) {
		$users_array[$myrow['uid']] = $myrow['uname'];
	}

	$uid_select->addOptionArray($users_array);
	$sform -> addElement( $uid_select );

	// Datesub
	$datesub = ($itemObj->getVar('datesub') == 0) ? time() : $itemObj->getVar('datesub');
	$datesub_datetime = new SmartsectionFormDateTime(_AM_SSECTION_DATESUB, 'datesub', $size = 15, $datesub);
	$datesub_datetime->setDescription(_AM_SSECTION_DATESUB_DSC);
	$sform -> addElement( $datesub_datetime );

	// STATUS
	$options = array(_SSECTION_STATUS_PUBLISHED=>_AM_SSECTION_PUBLISHED, _SSECTION_STATUS_OFFLINE=>_AM_SSECTION_OFFLINE, _SSECTION_STATUS_SUBMITTED=>_AM_SSECTION_SUBMITTED, _SSECTION_STATUS_REJECTED=>_AM_SSECTION_REJECTED);
	$status_select = new XoopsFormSelect(_AM_SSECTION_STATUS, 'status', $new_status);
	$status_select->addOptionArray($options);
	$status_select->setDescription(_AM_SSECTION_STATUS_DSC);
	$sform -> addElement( $status_select );

	if (SMARTSECTION_LEVEL > 0 ) {
		// Short url
		$text_short_url = new XoopsFormText(_AM_SSECTION_ITEM_SHORT_URL, 'short_url', 50, 255, $itemObj->short_url('e'));
		$text_short_url->setDescription(_AM_SSECTION_ITEM_SHORT_URL_DSC);
		$sform->addElement($text_short_url);

		// Meta Keywords
		$text_meta_keywords = new XoopsFormTextArea(_AM_SSECTION_ITEM_META_KEYWORDS, 'meta_keywords', $itemObj->meta_keywords('e'), 7, 60);
		$text_meta_keywords->setDescription(_AM_SSECTION_ITEM_META_KEYWORDS_DSC);
		$sform->addElement($text_meta_keywords);

		// Meta Description
		$text_meta_description = new XoopsFormTextArea(_AM_SSECTION_ITEM_META_DESCRIPTION, 'meta_description', $itemObj->meta_description('e'), 7, 60);
		$text_meta_description->setDescription(_AM_SSECTION_ITEM_META_DESCRIPTION_DSC);
		$sform->addElement($text_meta_description);
	}

	// WEIGHT
	$sform->addElement(new XoopsFormText(_AM_SSECTION_WEIGHT, 'weight', 5, 5, $itemObj->weight()), true);

	if (SMARTSECTION_LEVEL >= 5 ) {
		// COMMENTS
		$addcomments_radio = new XoopsFormRadioYN(_AM_SSECTION_ALLOWCOMMENTS, 'cancomment', $itemObj->cancomment(), ' ' . _AM_SSECTION_YES . '', ' ' . _AM_SSECTION_NO . '');
		$sform->addElement($addcomments_radio);
	}

	// PER ITEM PERMISSIONS
	$member_handler = &xoops_gethandler('member');
	$group_list = $member_handler->getGroupList();
	$groups_checkbox = new XoopsFormCheckBox(_AM_SSECTION_PERMISSIONS_ITEM, 'groups[]', $itemObj->getGroups_read());
	$groups_checkbox->setDescription(_AM_SSECTION_PERMISSIONS_ITEM_DSC);
	foreach ($group_list as $group_id => $group_name) {
		if ($group_id != XOOPS_GROUP_ADMIN) {
			$groups_checkbox->addOption($group_id, $group_name);
		}
	}
	$sform->addElement($groups_checkbox);


	$p_view_checkbox = new XoopsFormCheckBox(_AM_SSECTION_PARTIAL_VIEW, 'partial_view[]', $itemObj->partial_view());
	$p_view_checkbox->setDescription(_AM_SSECTION_PARTIAL_VIEWDSC);
	foreach ($group_list as $group_id => $group_name) {
		if ($group_id != XOOPS_GROUP_ADMIN) {
			$p_view_checkbox->addOption($group_id, $group_name);
		}
	}
	$sform->addElement($p_view_checkbox);
	/*$partial_view_radio = new XoopsFormRadioYN(_AM_SSECTION_PARTIAL_VIEW, 'partial_view', $itemObj->partial_view(), ' ' . _AM_SSECTION_YES . '', ' ' . _AM_SSECTION_NO . '');
	$partial_view_radio->setDescription(_AM_SSECTION_PARTIAL_VIEWDSC);
	$sform->addElement($partial_view_radio);*/

	if (SMARTSECTION_LEVEL >= 5 ) {
		// VARIOUS OPTIONS
		$options_tray = new XoopsFormElementTray(_AM_SSECTION_OPTIONS, '<br />');

		$html_checkbox = new XoopsFormCheckBox('', 'dohtml', $itemObj->dohtml());
		$html_checkbox->addOption(1, _AM_SSECTION_DOHTML);
		$options_tray->addElement($html_checkbox);

		$smiley_checkbox = new XoopsFormCheckBox('', 'dosmiley', $itemObj->dosmiley());
		$smiley_checkbox->addOption(1, _AM_SSECTION_DOSMILEY);
		$options_tray->addElement($smiley_checkbox);

		$xcodes_checkbox = new XoopsFormCheckBox('', 'doxcode', $itemObj->doxcode());
		$xcodes_checkbox->addOption(1, _AM_SSECTION_DOXCODE);
		$options_tray->addElement($xcodes_checkbox);

		$images_checkbox = new XoopsFormCheckBox('', 'doimage', $itemObj->doimage());
		$images_checkbox->addOption(1, _AM_SSECTION_DOIMAGE);
		$options_tray->addElement($images_checkbox);

		$linebreak_checkbox = new XoopsFormCheckBox('', 'dobr', $itemObj->dobr());
		$linebreak_checkbox->addOption(1, _AM_SSECTION_DOLINEBREAK);
		$options_tray->addElement($linebreak_checkbox);

		$sform->addElement($options_tray);
	}
	// item ID
	if ($clone) {
		$itemid = 0;
	}
	$sform->addElement(new XoopsFormHidden('itemid', $itemid));

	$button_tray = new XoopsFormElementTray('', '');
	$hidden = new XoopsFormHidden('op', 'additem');
	$button_tray->addElement($hidden);

	if (!$itemid) {
		// there's no itemid? Then it's a new item
		// $button_tray -> addElement( new XoopsFormButton( '', 'mod', _AM_SSECTION_CREATE, 'submit' ) );
		$butt_create = new XoopsFormButton('', '', _AM_SSECTION_CREATE, 'submit');
		$butt_create->setExtra('onclick="this.form.elements.op.value=\'additem\'"');
		$button_tray->addElement($butt_create);

		$butt_clear = new XoopsFormButton('', '', _AM_SSECTION_CLEAR, 'reset');
		$button_tray->addElement($butt_clear);

		$butt_cancel = new XoopsFormButton('', '', _AM_SSECTION_CANCEL, 'button');
		$butt_cancel->setExtra('onclick="history.go(-1)"');
		$button_tray->addElement($butt_cancel);

		$sform->addElement($button_tray);

		$sform->display();
		smartsection_close_collapsable('createitemtable', 'createitemicon');
	} else {
		// else, we're editing an existing item
		// $button_tray -> addElement( new XoopsFormButton( '', 'mod', _AM_SSECTION_MODIFY, 'submit' ) );
		$butt_create = new XoopsFormButton('', '', $button_caption, 'submit');
		$butt_create->setExtra('onclick="this.form.elements.op.value=\'additem\'"');
		$button_tray->addElement($butt_create);

		$butt_cancel = new XoopsFormButton('', '', _AM_SSECTION_CANCEL, 'button');
		$butt_cancel->setExtra('onclick="history.go(-1)"');
		$button_tray->addElement($butt_cancel);

		$sform->addElement($button_tray);

		$sform->display();
		smartsection_close_collapsable('edititemtable', 'edititemicon');
	}

if (SMARTSECTION_LEVEL >= 5 ) {
	smartsection_collapsableBar('pagewraptable', 'pagewrapicon', _AM_SSECTION_PAGEWRAP, _AM_SSECTION_PAGEWRAPDSC);

	$dir = smartsection_getUploadDir(true, 'content');

	if(!eregi("777",decoct(fileperms($dir)))) {
	    echo"<font color='FF0000'><h4>"._AM_SSECTION_PERMERROR."</h4></font>";
	}

	// Upload File
	echo "<form name='form_name2' id='form_name2' action='pw_upload_file.php' method='post' enctype='multipart/form-data'>";
	echo "<table cellspacing='1' width='100%' class='outer'>";
	echo "<tr><th colspan='2'>"._AM_SSECTION_UPLOAD_FILE."</th></tr>";
	echo "<tr valign='top' align='left'><td class='head'>"._AM_SSECTION_SEARCH_PW."</td><td class='even'><input type='file' name='fileupload' id='fileupload' size='30' /></td></tr>";
	echo "<tr valign='top' align='left'><td class='head'><input type='hidden' name='MAX_FILE_SIZE' id='op' value='500000' /></td><td class='even'><input type='submit' name='submit' value='"._AM_SSECTION_UPLOAD."' /></td></tr>";
	echo "<input type='hidden' name='backto' value='$smartsection_current_page'/>";
	echo "</table>";
    echo "</form>";

	// Delete File
	$form = new XoopsThemeForm(_AM_SSECTION_DELETEFILE, "form_name", "pw_delete_file.php");

	$pWrap_select = new XoopsFormSelect(smartsection_getUploadDir(true, 'content'), "address");
    $folder = dir($dir);
	while($file = $folder->read()) {
      if ($file != "." && $file != "..") {
	     $pWrap_select->addOption($file, $file);
	  }
	}
    $folder->close();
	$form->addElement($pWrap_select);

	$delfile = "delfile";
	$form->addElement(new XoopsFormHidden('op', $delfile));
	$submit = new XoopsFormButton("", "submit", _AM_SSECTION_BUTTON_DELETE, "submit");
	$form->addElement($submit);

	$form->addElement(new XoopsFormHidden('backto', $smartsection_current_page));
	$form->display();

	smartsection_close_collapsable('pagewraptable', 'pagewrapicon');
}

	unset($hidden);
	if ($itemid != 0) {
		showfiles($itemObj);
	}
}

/* -- Available operations -- */

switch ($op) {
	case "clone":

	global $xoopsUser, $xoopsUser, $xoopsConfig, $xoopsDB, $xoopsModuleConfig, $xoopsModule, $modify, $myts;
	$itemid = (isset($_GET['itemid'])) ? $_GET['itemid'] : 0;
	if ($itemid == 0) {
		$totalcategories = $smartsection_category_handler->getCategoriesCount(-1);
		if ($totalcategories == 0) {
			redirect_header("category.php?op=mod", 3, _AM_SSECTION_NEED_CATEGORY_ITEM);
			exit();
		}
	}

	smartsection_xoops_cp_header();
	include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";
	edititem(true, $itemid, true);

	break;

	case "mod":

	global $xoopsUser, $xoopsUser, $xoopsConfig, $xoopsDB, $xoopsModuleConfig, $xoopsModule, $modify, $myts;
	$itemid = (isset($_GET['itemid'])) ? $_GET['itemid'] : 0;
	if ($itemid == 0) {
		$totalcategories = $smartsection_category_handler->getCategoriesCount(-1);
		if ($totalcategories == 0) {
			redirect_header("category.php?op=mod", 3, _AM_SSECTION_NEED_CATEGORY_ITEM);
			exit();
		}
	}

	smartsection_xoops_cp_header();
	include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";
	edititem(true, $itemid);
	break;

	case "additem":
	global $xoopsUser;

	if (!$xoopsUser) {
		if ($xoopsModuleConfig['anonpost'] == 1) {
			$uid = 0;
		} else {
			redirect_header("index.php", 3, _NOPERM);
			exit();
		}
	} else {
		$uid = $xoopsUser->uid();
	}

	$itemid = (isset($_POST['itemid'])) ? intval($_POST['itemid']) : 0;

	// Creating the item object
	if ($itemid != 0) {
		$itemObj =& new SmartsectionItem($itemid);
	} else {
		$itemObj = $smartsection_item_handler->create();
	}
	// Putting the values in the ITEM object

	if(isset($_POST['groups'])){
		$itemObj->setGroups_read($_POST['groups']);
	}
	else{
		$itemObj->setGroups_read();
	}

	$itemObj->setVar('categoryid', (isset($_POST['categoryid'])) ? intval($_POST['categoryid']) : 0);
	$itemObj->setVar('title', $_POST['title']);
	$itemObj->setVar('summary', $_POST['summary']);
	$itemObj->setVar('display_summary', (isset($_POST['display_summary'])) ? intval($_POST['display_summary']) : 0);
	$itemObj->setVar('body', $_POST['body']);

	if (isset($_POST['meta_keywords'])) {
		$itemObj->setVar('meta_keywords', $_POST['meta_keywords']);
	}
	if (isset($_POST['meta_description'])) {
		$itemObj->setVar('meta_description', $_POST['meta_description']);
	}
	if (isset($_POST['short_url'])) {
		$itemObj->setVar('short_url', $_POST['short_url']);
	}


	// Uploading the image, if any
	// Retreive the filename to be uploaded
	if ( $_FILES['image_file']['name'] != "" ) {
		$filename = $_POST["xoops_upload_file"][0] ;
		if( !empty( $filename ) || $filename != "" ) {
			global $xoopsModuleConfig;

			// TODO : Implement smartsection mimetype management
			$max_size = $xoopsModuleConfig['maximum_filesize'];
			$max_imgwidth = $xoopsModuleConfig['maximum_image_width'];
			$max_imgheight = $xoopsModuleConfig['maximum_image_height'];
			$allowed_mimetypes = smartsection_getAllowedImagesTypes();

			include_once(XOOPS_ROOT_PATH."/class/uploader.php");

			if( $_FILES[$filename]['tmp_name'] == "" || ! is_readable( $_FILES[$filename]['tmp_name'] ) ) {
				redirect_header( 'javascript:history.go(-1)' , 2, _AM_SSECTION_FILEUPLOAD_ERROR ) ;
				exit ;
			}

			$uploader = new XoopsMediaUploader(smartsection_getImageDir('item'), $allowed_mimetypes, $max_size, $max_imgwidth, $max_imgheight);

			if( $uploader->fetchMedia( $filename ) && $uploader->upload() ) {

				$itemObj->setVar('image', $uploader->getSavedFileName());

			} else {
				redirect_header( 'javascript:history.go(-1)' , 2, _AM_SSECTION_FILEUPLOAD_ERROR . $uploader->getErrors() ) ;
				exit ;
			}
		}
	} else {
		$itemObj->setVar('image', $_POST['image']);
	}

	$itemObj->setVar('item_tag', isset($_POST['item_tag']) ? $_POST['item_tag'] : false);

	//$itemObj->setVar('status', (isset($_POST['status'])) ? intval($_POST['status']) : _SSECTION_STATUS_NOTSET);
	$old_status = $itemObj->status();
	$new_status = isset($_POST['status']) ? intval($_POST['status']) : _SSECTION_STATUS_NOTSET;
	$itemObj->setVar('uid', (isset($_POST['uid'])) ? intval($_POST['uid']) : 0);
	$itemObj->setVar('datesub', (isset($_POST['datesub'])) ? strtotime($_POST['datesub']['date']) + $_POST['datesub']['time'] : date());

	$itemObj->setVar('weight', (isset($_POST['weight'])) ? intval($_POST['weight']) : $itemObj->weight());
	$itemObj->setPartial_view(isset($_POST['partial_view']) ? $_POST['partial_view'] : false);

	if (SMARTSECTION_LEVEL >= 5) {
		$itemObj->setVar('dohtml', (isset($_POST['dohtml'])) ? intval($_POST['dohtml']) : 0);
		$itemObj->setVar('dosmiley', (isset($_POST['dosmiley'])) ? intval($_POST['dosmiley']) : 0);
		$itemObj->setVar('doxcode', (isset($_POST['doxcode'])) ? intval($_POST['doxcode']) : 0);
		$itemObj->setVar('doimage', (isset($_POST['doimage'])) ? intval($_POST['doimage']) : 0);
		$itemObj->setVar('dobr', (isset($_POST['dobr'])) ? intval($_POST['dobr']) : 0);
		$itemObj->setVar('cancomment', (isset($_POST['cancomment'])) ? intval($_POST['cancomment']) : 0);
	}

	switch ($new_status) {

		case _SSECTION_STATUS_SUBMITTED :
		if (($old_status == _SSECTION_STATUS_NOTSET)) {
			$error_msg = _AM_SSECTION_ITEMNOTUPDATED;
		} else {
			$error_msg = _AM_SSECTION_ITEMNOTCREATED;
		}

		$redirect_msg = _AM_SSECTION_ITEM_RECEIVED_NEED_APPROVAL;
		break;

		case _SSECTION_STATUS_PUBLISHED :
		if (($old_status == _SSECTION_STATUS_NOTSET) || ($old_status == _SSECTION_STATUS_SUBMITTED)) {
			$redirect_msg = _AM_SSECTION_SUBMITTED_APPROVE_SUCCESS;
			$notifToDo = array(_SSECTION_NOT_ITEM_PUBLISHED);
		} else {
			$redirect_msg = _AM_SSECTION_PUBLISHED_MOD_SUCCESS;
		}
		$error_msg = _AM_SSECTION_ITEMNOTUPDATED;
		break;

		case _SSECTION_STATUS_OFFLINE :
		if (($old_status == _SSECTION_STATUS_NOTSET)) {
			$redirect_msg = _AM_SSECTION_OFFLINE_CREATED_SUCCESS;
		} else {
			$redirect_msg = _AM_SSECTION_OFFLINE_MOD_SUCCESS;
		}
		$error_msg = _AM_SSECTION_ITEMNOTUPDATED;

		break;

		case _SSECTION_STATUS_REJECTED :
		if (($old_status == _SSECTION_STATUS_NOTSET)) {
			$error_msg = _AM_SSECTION_ITEMNOTUPDATED;
		} else {
			$error_msg = _AM_SSECTION_ITEMNOTCREATED;
		}

		$redirect_msg = _AM_SSECTION_ITEM_REJECTED;
		break;
	}
	$itemObj->setVar('status', $new_status);

	// Storing the item
	if ( !$itemObj->store() ) {
		redirect_header("javascript:history.go(-1)", 3, $error_msg . smartsection_formatErrors($itemObj->getErrors()));
		exit;
	}

	// attach file if any
	if ( $_FILES['userfile']['name'] != "" ) {
		$file_upload_result = smartsection_upload_file(false, false, $itemObj);
		if ($file_upload_result !== true) {
			redirect_header("javascript:history.go(-1)", 3, $file_upload_result);
			exit;
		}
	}

	// Send notifications
	if (!empty($notifToDo)) {
		$itemObj->sendNotifications($notifToDo);
	}

	redirect_header("item.php", 2, $redirect_msg);

	break;

	case "del":
	global $xoopsUser, $xoopsUser, $xoopsConfig, $xoopsDB, $_GET;

	$module_id = $xoopsModule->getVar('mid');
	$gperm_handler = &xoops_gethandler('groupperm');

	$itemid = (isset($_POST['itemid'])) ? intval($_POST['itemid']) : 0;
	$itemid = (isset($_GET['itemid'])) ? intval($_GET['itemid']) : $itemid;

	$itemObj = new SmartsectionItem($itemid);

	$confirm = (isset($_POST['confirm'])) ? $_POST['confirm'] : 0;
	$title = (isset($_POST['title'])) ? $_POST['title'] : '';

	if ($confirm) {
		if ( !$smartsection_item_handler->delete($itemObj)) {
			redirect_header("item.php", 2, _AM_SSECTION_ITEM_DELETE_ERROR . smartsection_formatErrors($itemObj->getErrors()));
			exit;
		}
                // Removing tags information
                if (smartsection_tag_module_included()) {
            $tag_handler = xoops_getmodulehandler('tag', 'tag');
            $tag_handler->updateByItem('', $itemid, 'smartsection', 0);
        }
		redirect_header("item.php", 2, sprintf(_AM_SSECTION_ITEMISDELETED, $itemObj->title()));
		exit();
	} else {
		// no confirm: show deletion condition
		$itemid = (isset($_GET['itemid'])) ? intval($_GET['itemid']) : 0;
		xoops_cp_header();
		xoops_confirm(array('op' => 'del', 'itemid' => $itemObj->itemid(), 'confirm' => 1, 'name' => $itemObj->title()), 'item.php', _AM_SSECTION_DELETETHISITEM . " <br />'" . $itemObj->title() . "'. <br /> <br />", _AM_SSECTION_DELETE);
		xoops_cp_footer();
	}

	exit();
	break;

	case "default":
	default:
	smartsection_xoops_cp_header();

	smartsection_adminMenu(2, _AM_SSECTION_ITEMS);

	include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";
	include_once XOOPS_ROOT_PATH . '/class/pagenav.php';

	global $xoopsUser, $xoopsUser, $xoopsConfig, $xoopsDB, $xoopsModuleConfig, $xoopsModule;

	echo "<br />\n";
	echo "<form><div style=\"margin-bottom: 12px;\">";
	echo "<input type='button' name='button' onclick=\"location='item.php?op=mod'\" value='" . _AM_SSECTION_CREATEITEM . "'>&nbsp;&nbsp;";
	echo "</div></form>";

	$orderBy = 'datesub';
	$ascOrDesc = 'DESC';

// Display Submited articles
	smartsection_collapsableBar('submiteditemstable', 'submiteditemsicon', _AM_SSECTION_SUBMISSIONSMNGMT, _AM_SSECTION_SUBMITTED_EXP);

	// Get the total number of submitted ITEM
	$totalitems = $smartsection_item_handler->getItemsCount(-1, array(_SSECTION_STATUS_SUBMITTED));

	$itemsObj = $smartsection_item_handler->getAllSubmitted($xoopsModuleConfig['perpage'], $submittedstartitem, -1, $orderBy, $ascOrDesc);

	//$itemsObj = $smartsection_item_handler->getAllPublished($xoopsModuleConfig['perpage'], $publishedstartitem);
	$totalItemsOnPage = count($itemsObj);

	echo "<table width='100%' cellspacing=1 cellpadding=3 border=0 class = outer>";
	echo "<tr>";
	echo "<td width='40' class='bg3' align='center'><b>" . _AM_SSECTION_ITEMID . "</b></td>";
	echo "<td width='20%' class='bg3' align='left'><b>" . _AM_SSECTION_ITEMCATEGORYNAME . "</b></td>";
	echo "<td class='bg3' align='left'><b>" . _AM_SSECTION_TITLE . "</b></td>";
	echo "<td width='90' class='bg3' align='center'><b>" . _AM_SSECTION_CREATED . "</b></td>";
	echo "<td width='80' class='bg3' align='center'><b>" . _AM_SSECTION_ACTION . "</b></td>";
	echo "</tr>";
	if ($totalitems > 0) {
		for ( $i = 0; $i < $totalItemsOnPage; $i++ ) {
			$categoryObj =& $itemsObj[$i]->category();

			$approve = "<a href='item.php?op=mod&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/approve.gif' title='" . _AM_SSECTION_SUBMISSION_MODERATE . "' alt='" . _AM_SSECTION_SUBMISSION_MODERATE . "' /></a>&nbsp;";
			$clone = '';
			$delete = "<a href='item.php?op=del&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/delete.gif' title='" . _AM_SSECTION_DELETEITEM . "' alt='" . _AM_SSECTION_DELETEITEM . "' /></a>";
			$modify = "";

			echo "<tr>";
			echo "<td class='head' align='center'>" . $itemsObj[$i]->itemid() . "</td>";
			echo "<td class='even' align='left'>" . $categoryObj->getCategoryLink() . "</td>";
			echo "<td class='even' align='left'><a href='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/item.php?itemid=" . $itemsObj[$i]->itemid() . "'>" . $itemsObj[$i]->title() . "</a></td>";
			echo "<td class='even' align='center'>" . $itemsObj[$i]->datesub() . "</td>";
			echo "<td class='even' align='center'> $approve $clone $modify $delete </td>";
			echo "</tr>";
		}
	} else {
		$itemid = 0;
		echo "<tr>";
		echo "<td class='head' align='center' colspan= '7'>" . _AM_SSECTION_NOITEMS_SUBMITTED . "</td>";
		echo "</tr>";
	}
	echo "</table>\n";
	echo "<br />\n";

	$pagenav = new XoopsPageNav($totalitems, $xoopsModuleConfig['perpage'], $submittedstartitem, 'submittedstartitem');
	echo '<div style="text-align:right;">' . $pagenav->renderNav() . '</div>';

	smartsection_close_collapsable('submiteditemstable', 'submiteditemsicon');

// Display Published articles
	smartsection_collapsableBar('item_publisheditemstable', 'item_publisheditemsicon', _AM_SSECTION_PUBLISHEDITEMS, _AM_SSECTION_PUBLISHED_DSC);

	// Get the total number of published ITEM
	$totalitems = $smartsection_item_handler->getItemsCount(-1, array(_SSECTION_STATUS_PUBLISHED));

	$itemsObj = $smartsection_item_handler->getAllPublished($xoopsModuleConfig['perpage'], $publishedstartitem, -1, $orderBy, $ascOrDesc);

	//$itemsObj = $smartsection_item_handler->getAllPublished($xoopsModuleConfig['perpage'], $startitem);
	$totalItemsOnPage = count($itemsObj);

	echo "<table width='100%' cellspacing=1 cellpadding=3 border=0 class = outer>";
	echo "<tr>";
	echo "<td width='40' class='bg3' align='center'><b>" . _AM_SSECTION_ITEMID . "</b></td>";
	echo "<td width='20%' class='bg3' align='left'><b>" . _AM_SSECTION_ITEMCATEGORYNAME . "</b></td>";
	echo "<td class='bg3' align='left'><b>" . _AM_SSECTION_TITLE . "</b></td>";
	echo "<td width='90' class='bg3' align='center'><b>" . _AM_SSECTION_CREATED . "</b></td>";
	echo "<td width='80' class='bg3' align='center'><b>" . _AM_SSECTION_ACTION . "</b></td>";
	echo "</tr>";
	if ($totalitems > 0) {
		for ( $i = 0; $i < $totalItemsOnPage; $i++ ) {
			$categoryObj =& $itemsObj[$i]->category();

			$modify = "<a href='item.php?op=mod&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/edit.gif' title='" . _AM_SSECTION_EDITITEM . "' alt='" . _AM_SSECTION_EDITITEM . "' /></a>";
			$delete = "<a href='item.php?op=del&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/delete.gif' title='" . _AM_SSECTION_DELETEITEM . "' alt='" . _AM_SSECTION_DELETEITEM . "'/></a>";
			$clone = "<a href='item.php?op=clone&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/clone.gif' title='" . _AM_SSECTION_CLONE_ITEM . "' alt='" . _AM_SSECTION_CLONE_ITEM . "' /></a>";

			echo "<tr>";
			echo "<td class='head' align='center'>" . $itemsObj[$i]->itemid() . "</td>";
			echo "<td class='even' align='left'>" . $categoryObj->getCategoryLink() . "</td>";
			echo "<td class='even' align='left'><a href='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/item.php?itemid=" . $itemsObj[$i]->itemid() . "'>" . $itemsObj[$i]->title() . "</a></td>";
			echo "<td class='even' align='center'>" . $itemsObj[$i]->datesub() . "</td>";
			echo "<td class='even' align='center'> $clone $modify $delete </td>";
			echo "</tr>";
		}
	} else {
		$itemid = 0;
		echo "<tr>";
		echo "<td class='head' align='center' colspan= '7'>" . _AM_SSECTION_NOITEMS . "</td>";
		echo "</tr>";
	}
	echo "</table>\n";
	echo "<br />\n";

	$pagenav = new XoopsPageNav($totalitems, $xoopsModuleConfig['perpage'], $publishedstartitem, 'publishedstartitem');
	echo '<div style="text-align:right;">' . $pagenav->renderNav() . '</div>';

	smartsection_close_collapsable('item_publisheditemstable', 'item_publisheditemsicon');

// Display Offline articles
	smartsection_collapsableBar('offlineitemstable', 'offlineitemsicon', _AM_SSECTION_ITEMS . " " . _AM_SSECTION_OFFLINE, _AM_SSECTION_OFFLINE_EXP);

	$totalitems = $smartsection_item_handler->getItemsCount(-1, array(_SSECTION_STATUS_OFFLINE));

	$itemsObj = $smartsection_item_handler->getAllOffline($xoopsModuleConfig['perpage'], $offlinestartitem, -1, $orderBy, $ascOrDesc);

	//$itemsObj = $smartsection_item_handler->getAllPublished($xoopsModuleConfig['perpage'], $startitem);
	$totalItemsOnPage = count($itemsObj);

	echo "<table width='100%' cellspacing=1 cellpadding=3 border=0 class = outer>";
	echo "<tr>";
	echo "<td width='40' class='bg3' align='center'><b>" . _AM_SSECTION_ITEMID . "</b></td>";
	echo "<td width='20%' class='bg3' align='left'><b>" . _AM_SSECTION_ITEMCATEGORYNAME . "</b></td>";
	echo "<td class='bg3' align='left'><b>" . _AM_SSECTION_TITLE . "</b></td>";
	echo "<td width='90' class='bg3' align='center'><b>" . _AM_SSECTION_CREATED . "</b></td>";
	echo "<td width='80' class='bg3' align='center'><b>" . _AM_SSECTION_ACTION . "</b></td>";
	echo "</tr>";
	if ($totalitems > 0) {
		for ( $i = 0; $i < $totalItemsOnPage; $i++ ) {
			$categoryObj =& $itemsObj[$i]->category();

			$modify = "<a href='item.php?op=mod&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/edit.gif' title='" . _AM_SSECTION_EDITITEM . "' alt='" . _AM_SSECTION_EDITITEM . "' /></a>";
			$delete = "<a href='item.php?op=del&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/delete.gif' title='" . _AM_SSECTION_DELETEITEM . "' alt='" . _AM_SSECTION_DELETEITEM . "'/></a>";
			$clone = "<a href='item.php?op=clone&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/clone.gif' title='" . _AM_SSECTION_CLONE_ITEM . "' alt='" . _AM_SSECTION_CLONE_ITEM . "' /></a>";

			echo "<tr>";
			echo "<td class='head' align='center'>" . $itemsObj[$i]->itemid() . "</td>";
			echo "<td class='even' align='left'>" . $categoryObj->getCategoryLink() . "</td>";
			echo "<td class='even' align='left'><a href='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/item.php?itemid=" . $itemsObj[$i]->itemid() . "'>" . $itemsObj[$i]->title() . "</a></td>";
			echo "<td class='even' align='center'>" . $itemsObj[$i]->datesub() . "</td>";
			echo "<td class='even' align='center'> $clone $modify $delete </td>";
			echo "</tr>";
		}
	} else {
		$itemid = 0;
		echo "<tr>";
		echo "<td class='head' align='center' colspan= '7'>" . _AM_SSECTION_NOITEMS_OFFLINE . "</td>";
		echo "</tr>";
	}
	echo "</table>\n";
	echo "<br />\n";

	$pagenav = new XoopsPageNav($totalitems, $xoopsModuleConfig['perpage'], $offlinestartitem, 'offlinestartitem');
	echo '<div style="text-align:right;">' . $pagenav->renderNav() . '</div>';

	smartsection_close_collapsable('offlineitemstable', 'offlineitemsicon');

// Display Rejected articles
	smartsection_collapsableBar('Rejecteditemstable', 'rejecteditemsicon', _AM_SSECTION_REJECTED_ITEM, _AM_SSECTION_REJECTED_ITEM_EXP, _AM_SSECTION_SUBMITTED_EXP);

	// Get the total number of Rejected ITEM
	$totalitems = $smartsection_item_handler->getItemsCount(-1, array(_SSECTION_STATUS_REJECTED));

	$itemsObj = $smartsection_item_handler->getAllRejected($xoopsModuleConfig['perpage'], $rejectedstartitem, -1, $orderBy, $ascOrDesc);

	//$itemsObj = $smartsection_item_handler->getAllPublished($xoopsModuleConfig['perpage'], $startitem);
	$totalItemsOnPage = count($itemsObj);

	echo "<table width='100%' cellspacing=1 cellpadding=3 border=0 class = outer>";
	echo "<tr>";
	echo "<td width='40' class='bg3' align='center'><b>" . _AM_SSECTION_ITEMID . "</b></td>";
	echo "<td width='20%' class='bg3' align='left'><b>" . _AM_SSECTION_ITEMCATEGORYNAME . "</b></td>";
	echo "<td class='bg3' align='left'><b>" . _AM_SSECTION_TITLE . "</b></td>";
	echo "<td width='90' class='bg3' align='center'><b>" . _AM_SSECTION_CREATED . "</b></td>";
	echo "<td width='80' class='bg3' align='center'><b>" . _AM_SSECTION_ACTION . "</b></td>";
	echo "</tr>";
	if ($totalitems > 0) {
		for ( $i = 0; $i < $totalItemsOnPage; $i++ ) {
			$categoryObj =& $itemsObj[$i]->category();

			$modify = "<a href='item.php?op=mod&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/edit.gif' title='" . _AM_SSECTION_EDITITEM . "' alt='" . _AM_SSECTION_EDITITEM . "' /></a>";
			$delete = "<a href='item.php?op=del&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/delete.gif' title='" . _AM_SSECTION_DELETEITEM . "' alt='" . _AM_SSECTION_DELETEITEM . "'/></a>";
			$clone = "<a href='item.php?op=clone&itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/clone.gif' title='" . _AM_SSECTION_CLONE_ITEM . "' alt='" . _AM_SSECTION_CLONE_ITEM . "' /></a>";

			echo "<tr>";
			echo "<td class='head' align='center'>" . $itemsObj[$i]->itemid() . "</td>";
			echo "<td class='even' align='left'>" . $categoryObj->getCategoryLink() . "</td>";
			echo "<td class='even' align='left'><a href='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/item.php?itemid=" . $itemsObj[$i]->itemid() . "'>" . $itemsObj[$i]->title() . "</a></td>";
			echo "<td class='even' align='center'>" . $itemsObj[$i]->datesub() . "</td>";
			echo "<td class='even' align='center'> $clone $modify $delete </td>";
			echo "</tr>";
		}
	} else {
		$itemid = 0;
		echo "<tr>";
		echo "<td class='head' align='center' colspan= '7'>" . _AM_SSECTION_NOITEMS_REJECTED . "</td>";
		echo "</tr>";
	}
	echo "</table>\n";
	echo "<br />\n";

	$pagenav = new XoopsPageNav($totalitems, $xoopsModuleConfig['perpage'], $rejectedstartitem, 'rejectedstartitem');
	echo '<div style="text-align:right;">' . $pagenav->renderNav() . '</div>';

	smartsection_close_collapsable('Rejecteditemstable', 'rejecteditemsicon');

	$totalcategories = $smartsection_category_handler->getCategoriesCount(-1);
	/*if ($totalcategories > 0) {
		edititem();
	}*/

	break;
}
smart_xoops_cp_footer();
?>