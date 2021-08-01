<?php
// created: 2021-07-30 07:24:27
$dictionary["bs_transactions_bs_customers"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bs_transactions_bs_customers' => 
    array (
      'lhs_module' => 'BS_customers',
      'lhs_table' => 'bs_customers',
      'lhs_key' => 'id',
      'rhs_module' => 'BS_transactions',
      'rhs_table' => 'bs_transactions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bs_transactions_bs_customers_c',
      'join_key_lhs' => 'bs_transactions_bs_customersbs_customers_ida',
      'join_key_rhs' => 'bs_transactions_bs_customersbs_transactions_idb',
    ),
  ),
  'table' => 'bs_transactions_bs_customers_c',
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
      'name' => 'bs_transactions_bs_customersbs_customers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bs_transactions_bs_customersbs_transactions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bs_transactions_bs_customersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bs_transactions_bs_customers_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bs_transactions_bs_customersbs_customers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bs_transactions_bs_customers_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bs_transactions_bs_customersbs_transactions_idb',
      ),
    ),
  ),
);