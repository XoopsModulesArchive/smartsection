<?php
/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
	die("XOOPS root path not defined");
}

/** Get item fields: title, content, time, link, uid, uname, tags **/
function smartsection_tag_iteminfo(&$items)
{

	$items_id = array();
	foreach(array_keys($items) as $cat_id){
		// Some handling here to build the link upon catid
			// if catid is not used, just skip it
		foreach(array_keys($items[$cat_id]) as $item_id){
			// In article, the item_id is "art_id"
			$items_id[] = intval($item_id);
		}
	}
	$item_handler =& xoops_getmodulehandler("item", "smartsection");
	$criteria = new Criteria("itemid", "(".implode(", ", $items_id).")", "IN");
	$items_obj = $item_handler->getObjects($criteria, 'itemid');

	foreach(array_keys($items) as $cat_id){
		foreach(array_keys($items[$cat_id]) as $item_id){
			$item_obj =& $items_obj[$item_id];
			$items[$cat_id][$item_id] = array(
				"title"		=> $item_obj->getVar("title"),
				"uid"		=> $item_obj->getVar("uid"),
				"link"		=> "item.php?itemid={$item_id}",
				"time"		=> $item_obj->getVar("datesub"),
				"tags"		=> tag_parse_tag($item_obj->getVar("item_tag", "n")), // optional
				"content"	=> "",
				);
		}
	}
	unset($items_obj);
}
/** Remove orphan tag-item links **/
function smartsection_tag_synchronization($mid)
{
	// Optional
}

?>
