<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 */

$url = getenv('CLEARDB_DATABASE_URL');
$dbparts = parse_url($url);

return array(
  'server' => $dbparts['host'],
  'user' => $dbparts['user'],
  'password' => $dbparts['pass'],
  'database' => ltrim($dbparts['path'],'/'),
  'tablePrefix' => 'craft',
);
