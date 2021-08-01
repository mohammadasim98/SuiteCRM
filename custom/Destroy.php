<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$subpanel_module = $_REQUEST['module'];
$subpanel_record = $_REQUEST['module_rec'];
$host_record = $_REQUEST['host_record'];
$rel_name = $_REQUEST['rel_name'];
$be = BeanFactory::getBean($subpanel_module, $subpanel_record);
$be->load_relationship($rel_name);
$be->$rel_name->delete($host_record);
header('Location: '.$_SERVER['HTTP_REFERER']);

?>
