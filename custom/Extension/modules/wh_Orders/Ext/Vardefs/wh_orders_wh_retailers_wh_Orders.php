<?php
// created: 2021-07-28 19:08:04
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_retailers"] = array (
  'name' => 'wh_orders_wh_retailers',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_retailers',
  'source' => 'non-db',
  'module' => 'wh_Retailers',
  'bean_name' => 'wh_Retailers',
  'vname' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_RETAILERS_TITLE',
  'id_name' => 'wh_orders_wh_retailerswh_retailers_ida',
);
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_retailers_name"] = array (
  'name' => 'wh_orders_wh_retailers_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_RETAILERS_TITLE',
  'save' => true,
  'id_name' => 'wh_orders_wh_retailerswh_retailers_ida',
  'link' => 'wh_orders_wh_retailers',
  'table' => 'wh_retailers',
  'module' => 'wh_Retailers',
  'rname' => 'name',
);
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_retailerswh_retailers_ida"] = array (
  'name' => 'wh_orders_wh_retailerswh_retailers_ida',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_retailers',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_ORDERS_TITLE',
);
