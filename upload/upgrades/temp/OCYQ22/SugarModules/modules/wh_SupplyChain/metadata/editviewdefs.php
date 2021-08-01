<?php
$module_name = 'wh_SupplyChain';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'wh_store_wh_supplychain_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
          1 => 
          array (
            'name' => 'company_address_country',
            'label' => 'LBL_COMPANY_ADDRESS_COUNTRY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'company_address_city',
            'label' => 'LBL_COMPANY_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'company_address_postalcode',
            'label' => 'LBL_COMPANY_ADDRESS_POSTALCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'company_address_state',
            'label' => 'LBL_COMPANY_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'company_address',
            'label' => 'LBL_COMPANY_ADDRESS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
