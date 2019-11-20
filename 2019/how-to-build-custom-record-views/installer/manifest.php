<?php 

$manifest = array (
  'acceptable_sugar_flavors' => 
  array (
     'PRO',
     'ENT',
     'ULT',
     'SERVE',
     'SELL',
  ),
  'acceptable_sugar_versions' => 
  array (
    'regex_matches' => 
    array (
       '9\\.*\\.*.*',
    ),
  ),
  'author' => 'Upsert, LLC',
  'built_in_version' => '9.0.0',
  'description' => 'Upsert Blog: https://upsertconsulting.com/blog/2019/how-to-build-custom-record-views/',
  'is_uninstallable' => true,
  'key' => 'CustomRecordViews',
  'name' => '2019-10-31 - How to Build Custom Record Views in Sugar',
  'published_date' => '2019-10-31',
  'readme' => 'README.txt',
  'remove_tables' => 'prompt',
  'type' => 'module',
  'uninstall_before_upgrade' => false,
  'version' => '1.0.0',
); 

$installdefs = array (
  'copy' => 
  array (
    array (
      'from' => '<basepath>/copy/custom/include/JavaScript/myCustomRoutes.js',
      'to' => 'custom/include/JavaScript/myCustomRoutes.js',
    ),
    array (
      'from' => '<basepath>/copy/custom/modules/Accounts/clients/base/layouts/record-limited/record-limited.php',
      'to' => 'custom/modules/Accounts/clients/base/layouts/record-limited/record-limited.php',
    ),
    array (
      'from' => '<basepath>/copy/custom/modules/Accounts/clients/base/layouts/create-limited/create-limited.php',
      'to' => 'custom/modules/Accounts/clients/base/layouts/create-limited/create-limited.php',
    ),
    array (
      'from' => '<basepath>/copy/custom/modules/Accounts/clients/base/views/record-limited/record-limited.js',
      'to' => 'custom/modules/Accounts/clients/base/views/record-limited/record-limited.js',
    ),
    array (
      'from' => '<basepath>/copy/custom/modules/Accounts/clients/base/views/record-limited/record-limited.php',
      'to' => 'custom/modules/Accounts/clients/base/views/record-limited/record-limited.php',
    ),
    array (
      'from' => '<basepath>/copy/custom/modules/Accounts/clients/base/views/create-limited/create-limited.js',
      'to' => 'custom/modules/Accounts/clients/base/views/create-limited/create-limited.js',
    ),
  ),
  'id' => 'CustomRecordViews',
  'jsgroups' => 
  array (
    array (
      'from' => '<basepath>/jsgroups/application/CustomRecordViews.php',
      'to_module' => 'application',
    ),
  ),
);