<?php
// created: 2021-07-30 07:22:19
$dictionary["BS_transactions"]["fields"]["bs_transactions_bs_accounts"] = array (
  'name' => 'bs_transactions_bs_accounts',
  'type' => 'link',
  'relationship' => 'bs_transactions_bs_accounts',
  'source' => 'non-db',
  'module' => 'BS_accounts',
  'bean_name' => 'BS_accounts',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_ACCOUNTS_FROM_BS_ACCOUNTS_TITLE',
  'id_name' => 'bs_transactions_bs_accountsbs_accounts_idb',
);
$dictionary["BS_transactions"]["fields"]["bs_transactions_bs_accounts_name"] = array (
  'name' => 'bs_transactions_bs_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_ACCOUNTS_FROM_BS_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'bs_transactions_bs_accountsbs_accounts_idb',
  'link' => 'bs_transactions_bs_accounts',
  'table' => 'bs_accounts',
  'module' => 'BS_accounts',
  'rname' => 'name',
);
$dictionary["BS_transactions"]["fields"]["bs_transactions_bs_accountsbs_accounts_idb"] = array (
  'name' => 'bs_transactions_bs_accountsbs_accounts_idb',
  'type' => 'link',
  'relationship' => 'bs_transactions_bs_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_ACCOUNTS_FROM_BS_ACCOUNTS_TITLE',
);
