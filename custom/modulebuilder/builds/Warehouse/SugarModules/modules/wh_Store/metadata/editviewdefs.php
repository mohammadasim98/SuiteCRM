<?php
$module_name = 'wh_Store';
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'expirable',
            'studio' => 'visible',
            'label' => 'LBL_EXPIRABLE',
          ),
          1 => 
          array (
            'name' => 'expiry_date',
            'label' => 'LBL_EXPIRY_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'stock',
            'label' => 'LBL_STOCK',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
