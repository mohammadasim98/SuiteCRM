<?php
$module_name = 'wh_Orders';
$viewdefs [$module_name] =
array (
  'orderedit' =>
  array (
    'templateMeta' =>
    array (
      'form' => array(
        'headerTpl' => 'include/EditView/header.tpl',
        'footerTpl' => 'include/EditView/footer.tpl',
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' =>
      array (
        'LBL_EDITVIEW_PANEL1' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array (
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'order_id',
            'label' => 'LBL_ORDER_ID',
          ),
          1 =>
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'wh_orders_wh_store_name',
          ),
          1 =>
          array (
            'name' => 'wh_orders_wh_retailers_name',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'wh_orders_wh_clients_name',
          ),
            1 => 
          array (
            'name' => 'order_date',
            'label' => 'LBL_ORDER_DATE',
          ),
        ),
      ),
    ),
  ),
);
;
$viewdefs[$module_name]['orderedit']['templateMeta']['form']['buttons'][0] = array(
  'customCode' => '<input title="Save" accesskey="a" class="button primary"'.
  'onclick="var _form = document.getElementById(\'orderedit\'); _form.action.value=\'Save\';'.
  'if(validateform())SUGAR.ajaxUI.submitForm(_form);return false;" type="submit"'.
  'name="button" value="Save" id="SAVE">',
);
$viewdefs[$module_name]['orderedit']['templateMeta']['form']['buttons'][1] = array(
  'customCode' => '<input title="Cancel [Alt+Shift+l] [Alt+Shift+l]" accesskey="l" class="button"'.
  ' onclick="SUGAR.ajaxUI.loadContent(\'index.php?action=ListView&amp;module=wh_Orders&amp;record=\');'.
  ' return false;" type="button" name="button" value="Cancel" id="CANCEL">');
?>
