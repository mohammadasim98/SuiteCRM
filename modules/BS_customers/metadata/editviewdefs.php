<?php
$module_name = 'BS_customers';
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'age',
            'label' => 'LBL_AGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'employed',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYED',
          ),
          1 => 
          array (
            'name' => 'married',
            'studio' => 'visible',
            'label' => 'LBL_MARRIED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bs_customers_bs_accounts_name',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'home_address',
            'label' => 'LBL_HOME_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'home_address_city',
            'label' => 'LBL_HOME_ADDRESS_CITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'home_address_country',
            'label' => 'LBL_HOME_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'home_address_postalcode',
            'label' => 'LBL_HOME_ADDRESS_POSTALCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'home_address_state',
            'label' => 'LBL_HOME_ADDRESS_STATE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
