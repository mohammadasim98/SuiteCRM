<?php
$module_name = 'BS_customers';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'AGE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_AGE',
    'width' => '10%',
    'default' => true,
  ),
  'EMPLOYED' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYED',
    'width' => '10%',
    'default' => true,
  ),
  'BS_CUSTOMERS_BS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BS_CUSTOMERS_BS_ACCOUNTS_FROM_BS_ACCOUNTS_TITLE',
    'id' => 'BS_CUSTOMERS_BS_ACCOUNTSBS_ACCOUNTS_IDB',
    'width' => '10%',
    'default' => true,
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
