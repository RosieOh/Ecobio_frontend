<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'headspak3',
    'db_password' => 'head1234!@',
    'db_database' => 'headspak3',
    'db_table_prefix' => 'HeadspaK_new_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'headspak3',
      'db_password' => 'head1234!@',
      'db_database' => 'headspak3',
      'db_table_prefix' => 'HeadspaK_new_',
    ),
  ),
  'default_url' => 'http://headspak.com',
  'use_mobile_view' => 'N',
  'use_rewrite' => 'N',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
);