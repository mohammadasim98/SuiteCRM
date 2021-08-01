<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once('include/MVC/View/views/view.edit.php');
class wh_OrdersViewOrderEdit extends ViewEdit {
  function preDisplay(){
    $metadataFile = 'custom/modules/wh_Orders/metadata/ordereditviewdefs.php';
    $this->ev = new EditView();
    $this->ev->ss =& $this->ss;
    $this->ev->view = 'orderedit';
    $this->ev->setup($this->module, $this->bean, $metadataFile, 'include/EditView/EditView.tpl', true, 'ordereditviewdefs');
  }
  function display() {
    parent::display();
    $js = <<<EOT
    <script type="text/javascript" language="JavaScript">
      function validateform(){
        // alert('Hola');
        var id = document.getElementById('order_id').value;
        var quantity = document.getElementById('quantity').value;
        var store = document.getElementById('wh_orders_wh_store_name').value;
        var retailer = document.getElementById('wh_orders_wh_retailers_name').value;
        var client = document.getElementById('wh_orders_wh_clients_name').value;
        // alert(id=="");
        if(isNaN(Number(id)) && !isNaN(parseInt(quantity)) && id != "" && store != "" && retailer != "" && client != "") {
          SUGAR.ajaxUI.showLoadingPanel('LBL_LOADING_PAGE1');
          return check_for('orderedit');
        }
        else {
          alert("Input is Invalid");
          return false;
        }
      }
    </script>
    EOT;
    echo $js;
  }

}
?>
