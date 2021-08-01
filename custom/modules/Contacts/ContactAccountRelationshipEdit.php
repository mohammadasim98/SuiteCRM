<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('custom/modules/Contacts/ContactAccountRelationship.php');
global $app_strings;
global $app_list_strings;
global $mod_strings;
global $sugar_version, $sugar_config;
$focus = new ContactAccountRelationship();
if (isset($_REQUEST['record'])) {
    $focus->retrieve($_REQUEST['record']);
}
if (isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true') {
    $focus->id = "";
}
safe_map('account_name', $focus);
safe_map('account_id', $focus);
safe_map('contact_name', $focus);
safe_map('contact_id', $focus);
safe_map('company', $focus);
$xtpl=new XTemplate('custom/modules/Contacts/ContactAccountRelationshipEdit.html');
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);
$xtpl->assign("RETURN_URL", "&return_module=$currentModule&return_action=DetailView&return_id=$focus->id");
$xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
$xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
$xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
$xtpl->assign("ID", $focus->id);
$xtpl->assign("CONTACT", $contactName = array("NAME" => $focus->contact_name, "ID" => $focus->contact_id));
$xtpl->assign("ACCOUNT", $accName = array("NAME" => $focus->account_name));
echo getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'],
    array(
      $mod_strings['LBL_MODULE_NAME'],$mod_strings['LBL_CONTACT_ACCOUNT_FORM_TITLE']." ".$contactName['NAME'] .
      " - ". $accName['NAME']), true);
$xtpl->assign("COMPANY",  $focus->company);
$xtpl->parse("main");
$xtpl->out("main");
