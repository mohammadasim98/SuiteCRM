<?php
// created: 2021-07-30 13:07:35
$dictionary["BS_accounts"]["fields"]["bs_transactions_bs_accounts"] = array (
  'name' => 'bs_transactions_bs_accounts',
  'type' => 'link',
  'relationship' => 'bs_transactions_bs_accounts',
  'source' => 'non-db',
  'module' => 'BS_transactions',
  'bean_name' => 'BS_transactions',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_ACCOUNTS_FROM_BS_TRANSACTIONS_TITLE',
  'id_name' => 'bs_transactions_bs_accountsbs_transactions_ida',
);
$dictionary["BS_accounts"]["fields"]["bs_transactions_bs_accounts_name"] = array (
  'name' => 'bs_transactions_bs_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_ACCOUNTS_FROM_BS_TRANSACTIONS_TITLE',
  'save' => true,
  'id_name' => 'bs_transactions_bs_accountsbs_transactions_ida',
  'link' => 'bs_transactions_bs_accounts',
  'table' => 'bs_transactions',
  'module' => 'BS_transactions',
  'rname' => 'name',
);
$dictionary["BS_accounts"]["fields"]["bs_transactions_bs_accountsbs_transactions_ida"] = array (
  'name' => 'bs_transactions_bs_accountsbs_transactions_ida',
  'type' => 'link',
  'relationship' => 'bs_transactions_bs_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_ACCOUNTS_FROM_BS_TRANSACTIONS_TITLE',
);
