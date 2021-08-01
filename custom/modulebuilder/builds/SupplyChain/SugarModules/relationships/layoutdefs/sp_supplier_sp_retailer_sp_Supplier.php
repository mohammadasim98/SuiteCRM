<?php
 // created: 2021-07-31 13:51:35
$layout_defs["sp_Supplier"]["subpanel_setup"]['sp_supplier_sp_retailer'] = array (
  'order' => 100,
  'module' => 'sp_Retailer',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SP_SUPPLIER_SP_RETAILER_FROM_SP_RETAILER_TITLE',
  'get_subpanel_data' => 'sp_supplier_sp_retailer',
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
