<?php
$module_name = 'wh_Orders';
$listViewDefs [$module_name] = 
array (
  'ORDER_ID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ORDER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'QUANTITY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'WH_ORDERS_WH_STORE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_STORE_TITLE',
    'id' => 'WH_ORDERS_WH_STOREWH_STORE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'WH_ORDERS_WH_RETAILERS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_RETAILERS_TITLE',
    'id' => 'WH_ORDERS_WH_RETAILERSWH_RETAILERS_IDA',
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
