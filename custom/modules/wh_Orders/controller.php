<?php
require_once 'custom/modules/wh_Orders/view_orders.php';
class wh_OrdersController extends SugarController {
  function action_listorders(){
    $this->view = 'listorders';
    $this->bean = new view_orders_class();
  }
}
?>
