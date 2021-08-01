<?php
// created: 2021-07-30 12:59:59
$dictionary["BS_accounts"]["fields"]["bs_customers_bs_accounts"] = array (
  'name' => 'bs_customers_bs_accounts',
  'type' => 'link',
  'relationship' => 'bs_customers_bs_accounts',
  'source' => 'non-db',
  'module' => 'BS_customers',
  'bean_name' => 'BS_customers',
  'vname' => 'LBL_BS_CUSTOMERS_BS_ACCOUNTS_FROM_BS_CUSTOMERS_TITLE',
  'id_name' => 'bs_customers_bs_accountsbs_customers_ida',
);
$dictionary["BS_accounts"]["fields"]["bs_customers_bs_accounts_name"] = array (
  'name' => 'bs_customers_bs_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BS_CUSTOMERS_BS_ACCOUNTS_FROM_BS_CUSTOMERS_TITLE',
  'save' => true,
  'id_name' => 'bs_customers_bs_accountsbs_customers_ida',
  'link' => 'bs_customers_bs_accounts',
  'table' => 'bs_customers',
  'module' => 'BS_customers',
  'rname' => 'name',
);
$dictionary["BS_accounts"]["fields"]["bs_customers_bs_accountsbs_customers_ida"] = array (
  'name' => 'bs_customers_bs_accountsbs_customers_ida',
  'type' => 'link',
  'relationship' => 'bs_customers_bs_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BS_CUSTOMERS_BS_ACCOUNTS_FROM_BS_CUSTOMERS_TITLE',
);
