<?php
$xpdo_meta_map['TimeLog']= array (
  'package' => 'dbctrl',
  'version' => '1.1',
  'table' => 'time_log',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'uid' => NULL,
    'start_datetime' => NULL,
    'end_datetime' => NULL,
  ),
  'fieldMeta' => 
  array (
    'uid' => 
    array (
      'dbtype' => 'int',
      'precision' => '50',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'start_datetime' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'end_datetime' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
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
