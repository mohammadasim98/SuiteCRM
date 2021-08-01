<?php 
 //WARNING: The contents of this file are auto-generated


$layoutdefs['Contacts']['subpanel_setup']['project']=array(
  'order' => 110,
  'module' => 'Project',
  'sort_order' => 'asc',
  'sort_by' => 'name',
  'get_subpanel_data' => 'project',
  'subpanel_name' => 'ForContacts',
  'title_key' => 'LBL_PROJECTS_SUBPANEL_TITLE',
  'top_buttons' => array(
      array('widget_class' => 'SubPanelTopButtonQuickCreate'),
      array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
  ),
);


?>