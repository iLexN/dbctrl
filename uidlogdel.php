<?php

$setting = require 'config/config.php';
require 'vendor/autoload.php';
require 'setup/setup.php';


$uid = $data['uid'];

$ruid = ORM::for_table('uidLog')->where_equal('uid',$uid)->delete_many();



