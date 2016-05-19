<?php
require 'vendor/autoload.php';
$setting = require 'config/config.php';

require 'lib/pre-check.php';

require 'class/MyORM.php';
require 'setup/setup.php';

//backupemail
require 'lib/backup-email.php';

$request = $_POST;

// DEBUG
//require 'test/test-data.php';
//$request=$testdata;

$validInputs = require 'setup/post-fields.php';

require 'lib/process.php';

//$logger->info('Process',$allValues);

require 'lib/insert.php';

//send email P4
require 'lib/send-p4-email.php';

echo($uid);