<?php
 // created: 2021-07-28 09:08:32
$layout_defs["wh_Store"]["subpanel_setup"]['wh_orders_wh_store'] = array (
  'order' => 100,
  'module' => 'wh_Orders',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_ORDERS_TITLE',
  'get_subpanel_data' => 'wh_orders_wh_store',
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
