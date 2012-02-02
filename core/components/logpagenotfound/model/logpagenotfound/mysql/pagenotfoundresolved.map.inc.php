<?php
/**
 * @package logpagenotfound
 */
$xpdo_meta_map['pageNotFoundResolved']= array (
  'package' => 'logpagenotfound',
  'table' => 'logpagenotfound_resolved',
  'fields' => 
  array (
    'page' => '',
    'resolution_handler' => '',
    'resolution_msg' => '',
    'time' => NULL,
    'user' => NULL,
  ),
  'fieldMeta' => 
  array (
    'page' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'pk',
    ),
    'resolution_handler' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'resolution_msg' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'time' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
    ),
    'user' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'page' => 
    array (
      'alias' => 'page',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'page' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
