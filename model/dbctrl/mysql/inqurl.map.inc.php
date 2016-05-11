<?php
$xpdo_meta_map['InqUrl']= array (
  'package' => 'dbctrl',
  'version' => '1.1',
  'table' => 'inqUrl',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'inqUrl_id' => NULL,
    'uid' => NULL,
    'ip' => NULL,
  ),
  'fieldMeta' => 
  array (
    'inqUrl_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '50',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
      'generated' => 'native',
    ),
    'uid' => 
    array (
      'dbtype' => 'int',
      'precision' => '50',
      'phptype' => 'integer',
      'null' => true,
      'index' => 'index',
    ),
    'ip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
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
        'inqUrl_id' => 
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
          'null' => true,
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
