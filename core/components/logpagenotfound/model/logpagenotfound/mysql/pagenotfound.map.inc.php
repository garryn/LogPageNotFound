<?php
/**
 * @package logpagenotfound
 */
$xpdo_meta_map['pageNotFound']= array (
  'package' => 'logpagenotfound',
  'table' => 'logpagenotfound_items',
  'fields' => 
  array (
    'time' => NULL,
    'ip' => '',
    'host' => '',
    'page' => '',
    'useragent' => '',
    'referer' => '',
  ),
  'fieldMeta' => 
  array (
    'time' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
    ),
    'ip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '40',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'host' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'page' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'useragent' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'referer' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
);
