<?php
// created: 2021-07-31 13:51:35
$dictionary["sp_supplier_sp_retailer"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sp_supplier_sp_retailer' => 
    array (
      'lhs_module' => 'sp_Supplier',
      'lhs_table' => 'sp_supplier',
      'lhs_key' => 'id',
      'rhs_module' => 'sp_Retailer',
      'rhs_table' => 'sp_retailer',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sp_supplier_sp_retailer_c',
      'join_key_lhs' => 'sp_supplier_sp_retailersp_supplier_ida',
      'join_key_rhs' => 'sp_supplier_sp_retailersp_retailer_idb',
    ),
  ),
  'table' => 'sp_supplier_sp_retailer_c',
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
      'name' => 'sp_supplier_sp_retailersp_supplier_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sp_supplier_sp_retailersp_retailer_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sp_supplier_sp_retailerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sp_supplier_sp_retailer_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sp_supplier_sp_retailersp_supplier_ida',
        1 => 'sp_supplier_sp_retailersp_retailer_idb',
      ),
    ),
  ),
);