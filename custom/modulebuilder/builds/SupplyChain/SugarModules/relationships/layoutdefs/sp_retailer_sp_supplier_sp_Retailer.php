<?php
 // created: 2021-07-31 12:56:41
$layout_defs["sp_Retailer"]["subpanel_setup"]['sp_retailer_sp_supplier'] = array (
  'order' => 100,
  'module' => 'sp_Supplier',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SP_RETAILER_SP_SUPPLIER_FROM_SP_SUPPLIER_TITLE',
  'get_subpanel_data' => 'sp_retailer_sp_supplier',
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
