<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'People'),
    ),

    'where' => '',

    'list_fields' => array(
        'first_name' => array(
            'name' => 'first_name',
            'usage' => 'query_only',
        ),
        'last_name' => array(
            'name' => 'last_name',
            'usage' => 'query_only',
        ),
        'salutation' => array(
            'name' => 'salutation',
            'usage' => 'query_only',
        ),
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_LIST_NAME',
            'sort_by' => 'last_name',
            'sort_order' => 'asc',
            'widget_class' => 'SubPanelDetailViewLink',
            'module' => 'Contacts',
            'width' => '40%',
        ),
        'deal_id' => array(
            'vname' => 'LBL_DEAL_ID',
            'widget_class' => 'SubPanelDisplayDeal',
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelDealsEditButton',
            'module' => 'Contacts',
            'width' => '5%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => 'Contacts',
            'width' => '5%',
        ),
    ),
);
