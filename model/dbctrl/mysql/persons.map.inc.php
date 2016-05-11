<?php
$xpdo_meta_map['Persons']= array (
  'package' => 'dbctrl',
  'version' => '1.1',
  'table' => 'persons',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'person_id' => NULL,
    'insert_time' => 'CURRENT_TIMESTAMP',
    'name' => '',
    'gender' => '',
    'dateofbirth' => '',
    'relationship' => '',
    'nationality' => '',
    'uid' => 0,
    'occupation' => '',
    'age' => -1,
  ),
  'fieldMeta' => 
  array (
    'person_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '50',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
      'generated' => 'native',
    ),
    'insert_time' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
      'extra' => 'on update current_timestamp',
    ),
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '80',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'gender' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '7',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'dateofbirth' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'relationship' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'nationality' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'uid' => 
    array (
      'dbtype' => 'bigint',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'occupation' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '80',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'age' => 
    array (
      'dbtype' => 'int',
      'precision' => '2',
      'phptype' => 'integer',
      'null' => false,
      'default' => -1,
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
        'person_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'uid' => 
    array (
      'alias' => 'uid',
      'primary' => false,
      'unique' => false,
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
