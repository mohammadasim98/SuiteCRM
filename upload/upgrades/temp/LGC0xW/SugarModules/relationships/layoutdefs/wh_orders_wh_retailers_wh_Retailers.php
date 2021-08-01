<?php
 // created: 2021-07-28 08:37:54
$layout_defs["wh_Retailers"]["subpanel_setup"]['wh_orders_wh_retailers'] = array (
  'order' => 100,
  'module' => 'wh_Orders',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_ORDERS_TITLE',
  'get_subpanel_data' => 'wh_orders_wh_retailers',
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
