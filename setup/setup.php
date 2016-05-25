<?php

//logger
$logger = new \Monolog\Logger($setting['logConfig']['name']);
$logger->pushHandler(new \Monolog\Handler\StreamHandler($setting['logConfig']['path'], \Monolog\Logger::DEBUG));


//db setup
ORM::configure('mysql:host='.$setting['dbConfig']['host'].';dbname='.$setting['dbConfig']['database']);
ORM::configure('username', $setting['dbConfig']['user']);
ORM::configure('password', $setting['dbConfig']['password']);
ORM::configure('return_result_sets', true);
ORM::configure('logging', $setting['dbConfig']['logging']);
ORM::configure('logger', function ($log_string, $query_time) use ($logger) {
    $logger->info($log_string.' in '.$query_time);
});

//template twig
$loader = new Twig_Loader_Filesystem($setting['twigConfig']['templatePath']);
$twig = new Twig_Environment($loader, array(
    'cache' => $setting['twigConfig']['cachePath'],
    'debug' => true
));
