<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */





//TODO Rename this to edit link
class SugarWidgetSubPanelDealsEditButton extends SugarWidgetField
{
    protected static $defs = array();
    protected static $edit_icon_html;

    public function displayHeaderCell($layout_def)
    {
        return '';
    }

    public function displayList(&$layout_def)
    {
        global $app_strings;
        global $subpanel_item_count;
        $unique_id = $layout_def['subpanel_id']."_edit_".$subpanel_item_count; //bug 51512

        $supplier_id = $_REQUEST['record'];
        $retailer_id = $layout_def['fields']['ID'];
        $deal_id = "";
        $query = "SELECT sp_deals.id, sp_deals.deleted FROM sp_deals ".
        "WHERE sp_deals.supplier_id='".$supplier_id."' AND sp_deals.retailer_id='".$retailer_id.
        "' AND sp_deals.deleted=0;";
        if($result = $GLOBALS["db"]->query($query)) {
            $row = $result->fetch_assoc();
            $deal_id = $row["id"];
        }
        $href = 'index.php?module=sp_Deals&action=EditView&'.
        'record='.$deal_id.'&return_module='.$_REQUEST['module'].
        '&return_action=DetailView&return_id='.$_REQUEST['record'];
        write_to_log(array($href), 'URL');
        if($layout_def['ListView']){
          return '<a href='.$href.' class="listViewTdToolsS1" '.
          'id="' . $unique_id . '">' . $app_strings['LNK_EDIT'] . '</a>';
        }
        return '';
    }
}
