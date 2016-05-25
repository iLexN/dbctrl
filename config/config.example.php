<?php
return array(
    'dbConfig' => array(
        'host' => '',
        'database' => '',
        'user' => '',
        'password' => '',
    ),
    //backup email
    'globalemails'=> "",
    'globalemailsFrom'=> "",
    'p4email'=>array(
        'PP' => array( 'mailBody'=> 'pp_email_client.html' , 'mailFromName'=>'PacificPrime','mailFromAc'=>''),
        'PPI' => array( 'mailBody'=> 'pp_email_client.html' , 'mailFromName'=>'PacificPrime','mailFromAc'=>''),
        'UMI' => array( 'mailBody'=> 'umi_email_client.html' , 'mailFromName'=>'UMI','mailFromAc'=>''),
    ),
    'logConfig'=>array(
            'name' => 'app',
            'path' => __DIR__ . '/../logs/'.date("Y-m-d").'.log',
    ),
    'twigConfig'=>array(
            'templatePath' => __DIR__ . '/../template/',
            'cachePath' => __DIR__ . '/../cache/',
    ),
);