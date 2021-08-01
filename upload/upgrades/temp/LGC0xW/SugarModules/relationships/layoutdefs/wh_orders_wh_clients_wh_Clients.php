<?php
 // created: 2021-07-28 08:37:54
$layout_defs["wh_Clients"]["subpanel_setup"]['wh_orders_wh_clients'] = array (
  'order' => 100,
  'module' => 'wh_Orders',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_ORDERS_TITLE',
  'get_subpanel_data' => 'wh_orders_wh_clients',
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
