<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocket3smth78',
  'passwordsalt' => 'pg7v/i35T/w7t8U5aL1swG3gDoR2NS',
  'secret' => 'HVHoH+oZp965y28vqJMo/kbUBVxWlAvhmV+fBFbMm4hwVPD2',
  'trusted_domains' => 
  array (
    0 => '192.168.56.102',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '15.0.4.0',
  'overwrite.cli.url' => 'http://192.168.56.102',
  'dbname' => 'nextcloud',
  'dbhost' => 'mariadb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
);
