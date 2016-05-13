<?php

$setting = require 'config/config.php';
require 'vendor/autoload.php';
require 'setup/setup.php';


$uidExist = ORM::for_table('uidLog')
    ->where('uid',$data['uid'])
    ->where_gt('datetime', date("Y-m-d H:i:s",strtotime("-1 day"))  )
    ->where('source',$data['tag'])
    ->count();

if ( $uidExist > 0 ) exit();

$uidOjc = ORM::for_table('uidLog')->create();

$uidOjc->uid = $data['uid'];
$uidOjc->source = $data['tag'];

$uidOjc->save();





