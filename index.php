<?php

require 'lib/pre-check.php';

require 'vendor/autoload.php';

$setting = require 'config/config.php';
require 'class/MyORM.php';
require 'setup/setup.php';

//backupemail
require 'lib/backup-email.php';

//$request = $_POST;

$testdata = array(
    'email' => 'eprochasson@gmail.com',
    'country-coverage' => 'Hong Kong',
    'nationality' => 'British',
    'name' => 'STUART HARRISON',
    'title' => 'Dr.',
    'first-name' => 'STUART',
    'last-name' => 'HARRISON',
    'type' => 'Individual',
    'from_path' => 'landing/instant-quotation/',
    'source' => 'GS-AD',
    'start_time' => '2013-11-21 05:04:07',
    'end_time' => '2013-11-21 05:04:46',
    'remote_ip' => '202.151.171.2',
    'page_path' => 'Welcome to Globalsurance -> Fill in the short form and get a free quote',
    'q1' => 'Value 1',
    'q3' => 'Value3',
    'comments' => '',
    'self-birth' => '08/11/1982',
    'self-gender' => 'Male',
    'self-occupation' => 'Hello',
    'spouse-birth' => '08/12/1982',
    'spouse-gender' => 'Female',
    'spouse-occupation' => 'Finance',
    'child-birth1' => '08/11/1999',
    'child-gender1' => 'Male',
    'child-occupation1' => '',
    'outpatient' => 'honout',
    'dental' => '',
    'maternity' => 'on'
);

// DEBUG
$request=$testdata;

$validInputs = require 'setup/post-fields.php';

require 'lib/process.php';

print_r($allValues);
//$logger->info('Process',$allValues);

require 'lib/insert.php';


