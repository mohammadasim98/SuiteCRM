<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-07-28 19:08:04
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_store"] = array (
  'name' => 'wh_orders_wh_store',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_store',
  'source' => 'non-db',
  'module' => 'wh_Store',
  'bean_name' => 'wh_Store',
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


// created: 2021-07-28 19:08:04
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_clients"] = array (
  'name' => 'wh_orders_wh_clients',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_clients',
  'source' => 'non-db',
  'module' => 'wh_Clients',
  'bean_name' => 'wh_Clients',
  'vname' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_CLIENTS_TITLE',
  'id_name' => 'wh_orders_wh_clientswh_clients_ida',
);
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_clients_name"] = array (
  'name' => 'wh_orders_wh_clients_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'wh_orders_wh_clientswh_clients_ida',
  'link' => 'wh_orders_wh_clients',
  'table' => 'wh_clients',
  'module' => 'wh_Clients',
  'rname' => 'name',
);
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_clientswh_clients_ida"] = array (
  'name' => 'wh_orders_wh_clientswh_clients_ida',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_clients',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_ORDERS_TITLE',
);


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

?>