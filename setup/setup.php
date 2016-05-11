<?php

//logger
$logger = new \Monolog\Logger($setting['logConfig']['name']);
$logger->pushHandler(new \Monolog\Handler\StreamHandler($setting['logConfig']['path'], \Monolog\Logger::DEBUG));


//db setup
MyORM::configure('mysql:host='.$setting['dbConfig']['host'].';dbname='.$setting['dbConfig']['database']);
MyORM::configure('username', $setting['dbConfig']['user']);
MyORM::configure('password', $setting['dbConfig']['password']);
MyORM::configure('return_result_sets', true);
MyORM::configure('logging', $setting['dbConfig']['logging']);
MyORM::configure('logger', function ($log_string, $query_time) use ($logger) {
    $logger->info($log_string.' in '.$query_time);
});

//template twig
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
    'debug' => true
));
