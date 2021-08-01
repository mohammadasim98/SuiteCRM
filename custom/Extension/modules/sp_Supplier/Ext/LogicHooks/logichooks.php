<?php
  $hook_version = 1;
  $hook_array = Array();

  $hook_array['after_relationship_add'] = Array();
  $hook_array['after_relationship_add'][] = Array(
    78,
    'Create a new deal',
    'custom/modules/sp_Supplier/assigned_lead_check.php',
    'assigned_lead_check',
    'after_add'
  );
  $hook_array['after_relationship_delete'] = Array();
  $hook_array['after_relationship_delete'][] = Array(
    78,
    'Delete the deal',
    'custom/modules/sp_Supplier/unassigned_lead_check.php',
    'unassigned_lead_check',
    'after_delete'
  );

?>
