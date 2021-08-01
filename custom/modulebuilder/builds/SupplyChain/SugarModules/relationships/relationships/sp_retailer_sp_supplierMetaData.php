<?php
// created: 2021-07-31 12:56:41
$dictionary["sp_retailer_sp_supplier"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sp_retailer_sp_supplier' => 
    array (
      'lhs_module' => 'sp_Retailer',
      'lhs_table' => 'sp_retailer',
      'lhs_key' => 'id',
      'rhs_module' => 'sp_Supplier',
      'rhs_table' => 'sp_supplier',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sp_retailer_sp_supplier_c',
      'join_key_lhs' => 'sp_retailer_sp_suppliersp_retailer_ida',
      'join_key_rhs' => 'sp_retailer_sp_suppliersp_supplier_idb',
    ),
  ),
  'table' => 'sp_retailer_sp_supplier_c',
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
      'name' => 'sp_retailer_sp_suppliersp_retailer_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sp_retailer_sp_suppliersp_supplier_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sp_retailer_sp_supplierspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sp_retailer_sp_supplier_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sp_retailer_sp_suppliersp_retailer_ida',
        1 => 'sp_retailer_sp_suppliersp_supplier_idb',
      ),
    ),
  ),
);