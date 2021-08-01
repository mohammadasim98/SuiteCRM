<?php
// created: 2021-07-28 08:37:54
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_store"] = array (
  'name' => 'wh_orders_wh_store',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_store',
  'source' => 'non-db',
  'module' => 'wh_Store',
  'bean_name' => false,
  'vname' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_STORE_TITLE',
  'id_name' => 'wh_orders_wh_storewh_store_ida',
);
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_store_name"] = array (
  'name' => 'wh_orders_wh_store_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_STORE_TITLE',
  'save' => true,
  'id_name' => 'wh_orders_wh_storewh_store_ida',
  'link' => 'wh_orders_wh_store',
  'table' => 'wh_store',
  'module' => 'wh_Store',
  'rname' => 'name',
);
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_storewh_store_ida"] = array (
  'name' => 'wh_orders_wh_storewh_store_ida',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_store',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_ORDERS_TITLE',
);
