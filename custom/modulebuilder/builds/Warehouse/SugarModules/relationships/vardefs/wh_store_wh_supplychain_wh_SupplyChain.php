<?php
// created: 2021-07-28 19:08:04
$dictionary["wh_SupplyChain"]["fields"]["wh_store_wh_supplychain"] = array (
  'name' => 'wh_store_wh_supplychain',
  'type' => 'link',
  'relationship' => 'wh_store_wh_supplychain',
  'source' => 'non-db',
  'module' => 'wh_Store',
  'bean_name' => 'wh_Store',
  'vname' => 'LBL_WH_STORE_WH_SUPPLYCHAIN_FROM_WH_STORE_TITLE',
  'id_name' => 'wh_store_wh_supplychainwh_store_ida',
);
$dictionary["wh_SupplyChain"]["fields"]["wh_store_wh_supplychain_name"] = array (
  'name' => 'wh_store_wh_supplychain_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WH_STORE_WH_SUPPLYCHAIN_FROM_WH_STORE_TITLE',
  'save' => true,
  'id_name' => 'wh_store_wh_supplychainwh_store_ida',
  'link' => 'wh_store_wh_supplychain',
  'table' => 'wh_store',
  'module' => 'wh_Store',
  'rname' => 'name',
);
$dictionary["wh_SupplyChain"]["fields"]["wh_store_wh_supplychainwh_store_ida"] = array (
  'name' => 'wh_store_wh_supplychainwh_store_ida',
  'type' => 'link',
  'relationship' => 'wh_store_wh_supplychain',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WH_STORE_WH_SUPPLYCHAIN_FROM_WH_SUPPLYCHAIN_TITLE',
);
