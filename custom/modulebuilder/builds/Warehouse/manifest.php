<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'wh',
  'author' => 'Mohammad Asim',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Warehouse',
  'published_date' => '2021-07-28 17:08:04',
  'type' => 'module',
  'version' => 1627492084,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Warehouse',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'wh_SupplyChain',
      'class' => 'wh_SupplyChain',
      'path' => 'modules/wh_SupplyChain/wh_SupplyChain.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'wh_Retailers',
      'class' => 'wh_Retailers',
      'path' => 'modules/wh_Retailers/wh_Retailers.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'wh_Clients',
      'class' => 'wh_Clients',
      'path' => 'modules/wh_Clients/wh_Clients.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'wh_Orders',
      'class' => 'wh_Orders',
      'path' => 'modules/wh_Orders/wh_Orders.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'wh_Store',
      'class' => 'wh_Store',
      'path' => 'modules/wh_Store/wh_Store.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/wh_orders_wh_clients_wh_Clients.php',
      'to_module' => 'wh_Clients',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/wh_orders_wh_retailers_wh_Retailers.php',
      'to_module' => 'wh_Retailers',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/wh_orders_wh_store_wh_Store.php',
      'to_module' => 'wh_Store',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/wh_store_wh_supplychain_wh_Store.php',
      'to_module' => 'wh_Store',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/wh_orders_wh_clientsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/wh_orders_wh_retailersMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/wh_orders_wh_storeMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/wh_store_wh_supplychainMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/wh_SupplyChain',
      'to' => 'modules/wh_SupplyChain',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/wh_Retailers',
      'to' => 'modules/wh_Retailers',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/wh_Clients',
      'to' => 'modules/wh_Clients',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/wh_Orders',
      'to' => 'modules/wh_Orders',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/wh_Store',
      'to' => 'modules/wh_Store',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Orders.php',
      'to_module' => 'wh_Orders',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Clients.php',
      'to_module' => 'wh_Clients',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Orders.php',
      'to_module' => 'wh_Orders',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Retailers.php',
      'to_module' => 'wh_Retailers',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Orders.php',
      'to_module' => 'wh_Orders',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Store.php',
      'to_module' => 'wh_Store',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_SupplyChain.php',
      'to_module' => 'wh_SupplyChain',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/wh_Store.php',
      'to_module' => 'wh_Store',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_orders_wh_clients_wh_Orders.php',
      'to_module' => 'wh_Orders',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_orders_wh_clients_wh_Clients.php',
      'to_module' => 'wh_Clients',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_orders_wh_retailers_wh_Orders.php',
      'to_module' => 'wh_Orders',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_orders_wh_retailers_wh_Retailers.php',
      'to_module' => 'wh_Retailers',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_orders_wh_store_wh_Orders.php',
      'to_module' => 'wh_Orders',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_orders_wh_store_wh_Store.php',
      'to_module' => 'wh_Store',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_store_wh_supplychain_wh_SupplyChain.php',
      'to_module' => 'wh_SupplyChain',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/wh_store_wh_supplychain_wh_Store.php',
      'to_module' => 'wh_Store',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);