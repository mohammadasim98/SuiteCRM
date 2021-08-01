<?php
// created: 2021-07-30 07:24:27
$dictionary["BS_transactions"]["fields"]["bs_transactions_bs_customers"] = array (
  'name' => 'bs_transactions_bs_customers',
  'type' => 'link',
  'relationship' => 'bs_transactions_bs_customers',
  'source' => 'non-db',
  'module' => 'BS_customers',
  'bean_name' => 'BS_customers',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_CUSTOMERS_FROM_BS_CUSTOMERS_TITLE',
  'id_name' => 'bs_transactions_bs_customersbs_customers_ida',
);
$dictionary["BS_transactions"]["fields"]["bs_transactions_bs_customers_name"] = array (
  'name' => 'bs_transactions_bs_customers_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_CUSTOMERS_FROM_BS_CUSTOMERS_TITLE',
  'save' => true,
  'id_name' => 'bs_transactions_bs_customersbs_customers_ida',
  'link' => 'bs_transactions_bs_customers',
  'table' => 'bs_customers',
  'module' => 'BS_customers',
  'rname' => 'name',
);
$dictionary["BS_transactions"]["fields"]["bs_transactions_bs_customersbs_customers_ida"] = array (
  'name' => 'bs_transactions_bs_customersbs_customers_ida',
  'type' => 'link',
  'relationship' => 'bs_transactions_bs_customers',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BS_TRANSACTIONS_BS_CUSTOMERS_FROM_BS_TRANSACTIONS_TITLE',
);
