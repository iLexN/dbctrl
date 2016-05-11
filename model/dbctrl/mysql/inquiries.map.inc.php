<?php
$xpdo_meta_map['Inquiries']= array (
  'package' => 'dbctrl',
  'version' => '1.1',
  'table' => 'inquiries',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'inquiry_id' => NULL,
    'uid' => 0,
    'insert_time' => 'CURRENT_TIMESTAMP',
    'datetime' => '0000-00-00 00:00:00',
    'changetime' => NULL,
    'finishtime' => '0000-00-00 00:00:00',
    'rating' => '',
    'source' => '',
    'type' => NULL,
    'title' => NULL,
    'firstname' => '',
    'lastname' => '',
    'email' => NULL,
    'phone' => NULL,
    'phone2' => NULL,
    'nationality' => NULL,
    'countryofenquiry' => '',
    'countryofcover' => '',
    'lengthofcover' => NULL,
    'pre_existing' => NULL,
    'outpatient' => NULL,
    'dental' => NULL,
    'chronic_conditions' => NULL,
    'maternity' => NULL,
    'area_of_cover' => NULL,
    'comments' => NULL,
    'completeinfo' => NULL,
    'companyname' => NULL,
    'priority' => NULL,
    'responsibility' => '',
    'status' => '',
    'pushedby' => '',
    'notes' => NULL,
    'previousenquiries' => NULL,
    'printed' => '',
    'deleted' => '',
    'update' => NULL,
    'copied' => 0,
    'contact_method' => NULL,
    'keywords' => NULL,
    'industry' => NULL,
    'cmid' => NULL,
    'dgid' => NULL,
    'kwid' => NULL,
    'netw' => NULL,
    'dvce' => NULL,
    'crtv' => NULL,
    'adps' => NULL,
    'creative_id' => NULL,
    'newsletter' => 'F',
    'referred_domain' => NULL,
  ),
  'fieldMeta' => 
  array (
    'inquiry_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '50',
      'attributes' => 'unsigned',
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
      'null' => false,
      'default' => 0,
    ),
    'insert_time' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
      'extra' => 'on update current_timestamp',
    ),
    'datetime' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
      'default' => '0000-00-00 00:00:00',
    ),
    'changetime' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'finishtime' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
      'default' => '0000-00-00 00:00:00',
    ),
    'rating' => 
    array (
      'dbtype' => 'char',
      'precision' => '2',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'source' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
    ),
    'title' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => false,
    ),
    'firstname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
    'lastname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'email' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'phone' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
    ),
    'phone2' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
    ),
    'nationality' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'countryofenquiry' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'countryofcover' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'lengthofcover' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
    ),
    'pre_existing' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'outpatient' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
    ),
    'dental' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '3',
      'phptype' => 'string',
      'null' => false,
    ),
    'chronic_conditions' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '3',
      'phptype' => 'string',
      'null' => false,
    ),
    'maternity' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '3',
      'phptype' => 'string',
      'null' => false,
    ),
    'area_of_cover' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'comments' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'completeinfo' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'companyname' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'priority' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '16',
      'phptype' => 'string',
      'null' => false,
    ),
    'responsibility' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '6',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'status' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'pushedby' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '6',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'notes' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'previousenquiries' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'printed' => 
    array (
      'dbtype' => 'char',
      'precision' => '3',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'deleted' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '3',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'update' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'copied' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'contact_method' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'keywords' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'industry' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'cmid' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'dgid' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'kwid' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'netw' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'dvce' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'crtv' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'adps' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'creative_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'newsletter' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '1',
      'phptype' => 'string',
      'null' => false,
      'default' => 'F',
    ),
    'referred_domain' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
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
        'inquiry_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'rating' => 
    array (
      'alias' => 'rating',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'rating' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'responsibility' => 
    array (
      'alias' => 'responsibility',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'responsibility' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'status' => 
    array (
      'alias' => 'status',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'status' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'email' => 
    array (
      'alias' => 'email',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'email' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'ExtraFormInfo' => 
    array (
      'class' => 'ExtraFormInfo',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'local',
      'cardinality' => 'one',
    ),
    'FormCach' => 
    array (
      'class' => 'FormCach',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'local',
      'cardinality' => 'one',
    ),
    'InqUrl' => 
    array (
      'class' => 'InqUrl',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'local',
      'cardinality' => 'one',
    ),
    'Persons' => 
    array (
      'class' => 'Persons',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'local',
      'cardinality' => 'many',
    ),
    'TimeLog' => 
    array (
      'class' => 'TimeLog',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'local',
      'cardinality' => 'one',
    ),
    'UrlPath' => 
    array (
      'class' => 'UrlPath',
      'local' => 'uid',
      'foreign' => 'uid',
      'owner' => 'local',
      'cardinality' => 'one',
    ),
  ),
);
