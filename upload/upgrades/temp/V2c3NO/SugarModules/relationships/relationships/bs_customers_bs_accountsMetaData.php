<?php
// created: 2021-07-30 12:59:59
$dictionary["bs_customers_bs_accounts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'bs_customers_bs_accounts' => 
    array (
      'lhs_module' => 'BS_customers',
      'lhs_table' => 'bs_customers',
      'lhs_key' => 'id',
      'rhs_module' => 'BS_accounts',
      'rhs_table' => 'bs_accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bs_customers_bs_accounts_c',
      'join_key_lhs' => 'bs_customers_bs_accountsbs_customers_ida',
      'join_key_rhs' => 'bs_customers_bs_accountsbs_accounts_idb',
    ),
  ),
  'table' => 'bs_customers_bs_accounts_c',
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
      'name' => 'bs_customers_bs_accountsbs_customers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bs_customers_bs_accountsbs_accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bs_customers_bs_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bs_customers_bs_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bs_customers_bs_accountsbs_customers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bs_customers_bs_accounts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bs_customers_bs_accountsbs_accounts_idb',
      ),
    ),
  ),
);