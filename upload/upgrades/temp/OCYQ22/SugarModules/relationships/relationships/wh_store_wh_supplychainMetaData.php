<?php
// created: 2021-07-28 09:02:46
$dictionary["wh_store_wh_supplychain"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'wh_store_wh_supplychain' => 
    array (
      'lhs_module' => 'wh_Store',
      'lhs_table' => 'wh_store',
      'lhs_key' => 'id',
      'rhs_module' => 'wh_SupplyChain',
      'rhs_table' => 'wh_supplychain',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'wh_store_wh_supplychain_c',
      'join_key_lhs' => 'wh_store_wh_supplychainwh_store_ida',
      'join_key_rhs' => 'wh_store_wh_supplychainwh_supplychain_idb',
    ),
  ),
  'table' => 'wh_store_wh_supplychain_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'wh_store_wh_supplychainwh_store_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'wh_store_wh_supplychainwh_supplychain_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'wh_store_wh_supplychainspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'wh_store_wh_supplychain_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'wh_store_wh_supplychainwh_store_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'wh_store_wh_supplychain_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'wh_store_wh_supplychainwh_supplychain_idb',
      ),
    ),
  ),
);