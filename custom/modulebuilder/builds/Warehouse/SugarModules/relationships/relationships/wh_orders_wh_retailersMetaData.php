<?php
// created: 2021-07-28 19:08:04
$dictionary["wh_orders_wh_retailers"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'wh_orders_wh_retailers' => 
    array (
      'lhs_module' => 'wh_Retailers',
      'lhs_table' => 'wh_retailers',
      'lhs_key' => 'id',
      'rhs_module' => 'wh_Orders',
      'rhs_table' => 'wh_orders',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'wh_orders_wh_retailers_c',
      'join_key_lhs' => 'wh_orders_wh_retailerswh_retailers_ida',
      'join_key_rhs' => 'wh_orders_wh_retailerswh_orders_idb',
    ),
  ),
  'table' => 'wh_orders_wh_retailers_c',
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
      'name' => 'wh_orders_wh_retailerswh_retailers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'wh_orders_wh_retailerswh_orders_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'wh_orders_wh_retailersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'wh_orders_wh_retailers_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'wh_orders_wh_retailerswh_retailers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'wh_orders_wh_retailers_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'wh_orders_wh_retailerswh_orders_idb',
      ),
    ),
  ),
);