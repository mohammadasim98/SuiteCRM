<?php
$module_name = 'BS_accounts';
$listViewDefs [$module_name] = 
array (
  'ACCOUNT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_HOLDER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_HOLDER',
    'width' => '10%',
    'default' => true,
  ),
  'OPENING_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_OPENING_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
