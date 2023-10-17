<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMapFromDumps(array (
  'default' => 
  array (
    'tablesByName' => 
    array (
      'contact' => '\\Models\\Map\\ContactTableMap',
      'staff' => '\\Models\\Map\\StaffTableMap',
    ),
    'tablesByPhpName' => 
    array (
      '\\Contact' => '\\Models\\Map\\ContactTableMap',
      '\\Staff' => '\\Models\\Map\\StaffTableMap',
    ),
  ),
));
