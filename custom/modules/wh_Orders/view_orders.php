<?php
require_once 'modules/wh_Orders/wh_Orders.php';
class view_orders_class extends wh_Orders{
  function get_list_view_data(){
    $tmp = parent::get_list_view_data();
    $tmp['QUANTITY'] = 0;
    $tmp['WH_ORDERS_WH_RETAILERS_NAME'] = 'None';
    write_to_log(array($tmp), 'check data');
    return $tmp;
  }
}
?>
