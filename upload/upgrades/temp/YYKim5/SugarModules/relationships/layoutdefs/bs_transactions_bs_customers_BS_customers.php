<?php
 // created: 2021-07-30 07:22:19
$layout_defs["BS_customers"]["subpanel_setup"]['bs_transactions_bs_customers'] = array (
  'order' => 100,
  'module' => 'BS_transactions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BS_TRANSACTIONS_BS_CUSTOMERS_FROM_BS_TRANSACTIONS_TITLE',
  'get_subpanel_data' => 'bs_transactions_bs_customers',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
