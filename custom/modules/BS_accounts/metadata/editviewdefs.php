<?php
$module_name = 'BS_accounts';
$viewdefs [$module_name] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
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
        'LBL_EDITVIEW_PANEL2' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
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
      'lbl_editview_panel2' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'account_holder',
            'label' => 'LBL_ACCOUNT_HOLDER',
          ),
          1 =>
          array (
            'name' => 'account_number',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'account_type',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_TYPE',
          ),
          1 =>
          array (
            'name' => 'opening_date',
            'label' => 'LBL_OPENING_DATE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'bs_transactions_bs_accounts_name',
          ),
          1 =>
          array (
            'name' => 'bs_customers_bs_accounts_name',
          ),
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'balance',
            'label' => 'LBL_BALANCE',
            'customCode' => '{$balance}',
          ),
          1 =>
          array (
            'name' => 'interest',
            'label' => 'LBL_INTEREST',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'initial_deposit',
            'label' => 'LBL_INITIAL_DEPOSIT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
$viewdefs[$module_name]['EditView']['templateMeta']['form']['buttons'][0] = array(
  'customCode' => '<input title="Save" accesskey="a" class="button primary"'.
  'onclick="var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\';'.
  'if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit"'.
  'name="button" value="Create Account" id="SAVE">',
);
$viewdefs[$module_name]['EditView']['templateMeta']['form']['buttons'][1] = array(
  'customCode' => '<input title="Cancel [Alt+Shift+l] [Alt+Shift+l]" accesskey="l" class="button"'.
  ' onclick="SUGAR.ajaxUI.loadContent(\'index.php?action=ListView&amp;module=BS_accounts&amp;record=\');'.
  ' return false;" type="button" name="button" value="Cancel" id="CANCEL">'
);
  $viewdefs [$module_name]['EditView']['templateMeta']['form']['buttons'][2] = array(
    'customCode' => '<input title="Enter [Alt+Shift+l]" accesskey="l" '.
    'class="button" onclick="var amount = enter();SUGAR.ajaxUI.loadContent(\'index.php?action'.
    '=EditView&amp;module=BS_accounts&amp;initial_deposit=\'+amount+\'\'); return false;" '.
    'type="button" name="button" value="Enter" id="ENTER">',
  );
?>
