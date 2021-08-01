<?php
$module_name = 'BS_transactions';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
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
        'LBL_EDITVIEW_PANEL2' => 
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
            'name' => 'transaction_id',
            'label' => 'LBL_TRANSACTION_ID',
          ),
          1 => 
          array (
            'name' => 'transaction_amount',
            'label' => 'LBL_TRANSACTION_AMOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bs_transactions_bs_customers_name',
          ),
          1 => 
          array (
            'name' => 'bs_transactions_bs_accounts_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
