<?php 
 $GLOBALS["dictionary"]["wh_Orders"]=array (
  'table' => 'wh_orders',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'wh_orders_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'wh_orders_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'wh_orders_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_wh_orders',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'order_id' => 
    array (
      'required' => true,
      'name' => 'order_id',
      'vname' => 'LBL_ORDER_ID',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'quantity' => 
    array (
      'required' => true,
      'name' => 'quantity',
      'vname' => 'LBL_QUANTITY',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'order_date' => 
    array (
      'required' => true,
      'name' => 'order_date',
      'vname' => 'LBL_ORDER_DATE',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    ),
    'wh_orders_wh_store' => 
    array (
      'name' => 'wh_orders_wh_store',
      'type' => 'link',
      'relationship' => 'wh_orders_wh_store',
      'source' => 'non-db',
      'module' => 'wh_Store',
      'bean_name' => 'wh_Store',
      'vname' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_STORE_TITLE',
      'id_name' => 'wh_orders_wh_storewh_store_ida',
    ),
    'wh_orders_wh_store_name' => 
    array (
      'name' => 'wh_orders_wh_store_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_STORE_TITLE',
      'save' => true,
      'id_name' => 'wh_orders_wh_storewh_store_ida',
      'link' => 'wh_orders_wh_store',
      'table' => 'wh_store',
      'module' => 'wh_Store',
      'rname' => 'name',
    ),
    'wh_orders_wh_storewh_store_ida' => 
    array (
      'name' => 'wh_orders_wh_storewh_store_ida',
      'type' => 'link',
      'relationship' => 'wh_orders_wh_store',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_WH_ORDERS_WH_STORE_FROM_WH_ORDERS_TITLE',
    ),
    'wh_orders_wh_clients' => 
    array (
      'name' => 'wh_orders_wh_clients',
      'type' => 'link',
      'relationship' => 'wh_orders_wh_clients',
      'source' => 'non-db',
      'module' => 'wh_Clients',
      'bean_name' => 'wh_Clients',
      'vname' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_CLIENTS_TITLE',
      'id_name' => 'wh_orders_wh_clientswh_clients_ida',
    ),
    'wh_orders_wh_clients_name' => 
    array (
      'name' => 'wh_orders_wh_clients_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_CLIENTS_TITLE',
      'save' => true,
      'id_name' => 'wh_orders_wh_clientswh_clients_ida',
      'link' => 'wh_orders_wh_clients',
      'table' => 'wh_clients',
      'module' => 'wh_Clients',
      'rname' => 'name',
    ),
    'wh_orders_wh_clientswh_clients_ida' => 
    array (
      'name' => 'wh_orders_wh_clientswh_clients_ida',
      'type' => 'link',
      'relationship' => 'wh_orders_wh_clients',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_WH_ORDERS_WH_CLIENTS_FROM_WH_ORDERS_TITLE',
    ),
    'wh_orders_wh_retailers' => 
    array (
      'name' => 'wh_orders_wh_retailers',
      'type' => 'link',
      'relationship' => 'wh_orders_wh_retailers',
      'source' => 'non-db',
      'module' => 'wh_Retailers',
      'bean_name' => 'wh_Retailers',
      'vname' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_RETAILERS_TITLE',
      'id_name' => 'wh_orders_wh_retailerswh_retailers_ida',
    ),
    'wh_orders_wh_retailers_name' => 
    array (
      'name' => 'wh_orders_wh_retailers_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_RETAILERS_TITLE',
      'save' => true,
      'id_name' => 'wh_orders_wh_retailerswh_retailers_ida',
      'link' => 'wh_orders_wh_retailers',
      'table' => 'wh_retailers',
      'module' => 'wh_Retailers',
      'rname' => 'name',
    ),
    'wh_orders_wh_retailerswh_retailers_ida' => 
    array (
      'name' => 'wh_orders_wh_retailerswh_retailers_ida',
      'type' => 'link',
      'relationship' => 'wh_orders_wh_retailers',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_WH_ORDERS_WH_RETAILERS_FROM_WH_ORDERS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'wh_orders_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'wh_Orders',
      'rhs_table' => 'wh_orders',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'wh_orders_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'wh_Orders',
      'rhs_table' => 'wh_orders',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'wh_orders_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'wh_Orders',
      'rhs_table' => 'wh_orders',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_wh_orders' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'wh_Orders',
      'rhs_table' => 'wh_orders',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'wh_Orders',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'wh_orderspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);