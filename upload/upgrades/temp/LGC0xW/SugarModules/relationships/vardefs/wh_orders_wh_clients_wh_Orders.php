<?php
// created: 2021-07-28 08:37:54
$dictionary["wh_Orders"]["fields"]["wh_orders_wh_clients"] = array (
  'name' => 'wh_orders_wh_clients',
  'type' => 'link',
  'relationship' => 'wh_orders_wh_clients',
  'source' => 'non-db',
  'module' => 'wh_Clients',
  'bean_name' => false,
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
