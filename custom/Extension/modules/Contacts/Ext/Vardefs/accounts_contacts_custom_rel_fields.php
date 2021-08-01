<?php
$dictionary['Contacts']['fields']['accounts_contacts_fields'] = array (
  'name' => 'accounts_contacts_fields',
  'rname' => 'id',
  'relationship_fields'=>array(
    'id' => 'accounts_contacts_id',
    'company' => 'accounts_contacts_company'
  ),
  'vname' => 'LBL_ACCOUNT_CONTACT_FIELDS',
  'type' => 'relate',
  'link' => 'accounts',
  'link_type' => 'relationship_info',
  'join_link_name' => 'accounts_contacts',
  'source' => 'non-db',
  'importable' => false,
  'duplicate_merge'=> 'disabled',
  'studio' => array('listview' => false),
  'join_primary' => false,
);

$dictionary['Contacts']['fields']['accounts_contacts_id'] = array (
  'name' => 'accounts_contacts_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'ACCOUNTS_CONTACTS_ID',
  'studio' => array('listview' => false),
);
$dictionary['Contacts']['fields']['accounts_contacts_company'] = array (
  'name' => 'accounts_contacts_company',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_COMPANY',
);
?>
