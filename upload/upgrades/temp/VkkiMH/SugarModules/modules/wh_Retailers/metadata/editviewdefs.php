<?php
$module_name = 'wh_Retailers';
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
          1 => 
          array (
            'name' => 'category',
            'label' => 'LBL_CATEGORY',
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
            'name' => 'retailer_address',
            'label' => 'LBL_RETAILER_ADDRESS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'retailer_address_city',
            'label' => 'LBL_RETAILER_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'retailer_address_country',
            'label' => 'LBL_RETAILER_ADDRESS_COUNTRY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'retailer_address_postalcode',
            'label' => 'LBL_RETAILER_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'retailer_address_state',
            'label' => 'LBL_RETAILER_ADDRESS_STATE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
