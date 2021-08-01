<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Project']['fields']['​projects_contacts_fields'] = array (
  'name' => '​projects_contacts_fields',
  'rname' => 'id',
  'relationship_fields'=>array(
    'id' => 'projects_contacts_id_c',
    'date_start' => 'projects_contacts_d_start',
    'date_end' => 'projects_contacts_d_end'
  ),
  'vname' => 'LBL_ACCOUNT_CONTACT_FIELDS',
  'type' => 'relate',
  'link' => '​contacts',
  'link_type' => 'relationship_info',
  'join_link_name' => 'projects_contacts',
  'source' => 'non-db',
  'importable' => false,
  'duplicate_merge'=> 'disabled',
  'studio' => array('listview' => false),
  'join_primary' => false,
);
$dictionary['Project']['fields']['projects_contacts_id_c'] = array (
  'name' => 'projects_contacts_id_c',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'PROJECTS_CONTACTS_ID_C',
  'studio' => array('listview' => false),
);
$dictionary['​Project']['fields']['projects_contacts_d_start'] = array (
  'name' => 'projects_contacts_d_start',
  'type' => 'date',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_CONTACT_DATE_START',
);
$dictionary['​Project']['fields']['projects_contacts_d_end'] = array (
  'name' => 'projects_contacts_d_end',
  'type' => 'date',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_CONTACT_DATE_END',
);



 // created: 2021-07-24 17:58:32
$dictionary['Project']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2021-07-24 17:58:32
$dictionary['Project']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2021-07-24 17:58:32
$dictionary['Project']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2021-07-24 17:58:32
$dictionary['Project']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 
?>