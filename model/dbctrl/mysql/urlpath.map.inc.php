<?php
$xpdo_meta_map['UrlPath']= array (
  'package' => 'dbctrl',
  'version' => '1.1',
  'table' => 'urlPath',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'uid' => NULL,
    'path' => NULL,
    'pathcode' => NULL,
  ),
  'fieldMeta' => 
  array (
    'uid' => 
    array (
      'dbtype' => 'int',
      'precision' => '64',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'path' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'pathcode' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '16',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'uid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'Inquiries' => 
    array (
      'class' => 'Inquiries',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
  ),
);
