<?php

//include database connection function
include 'config.php';
include "lib/Smarty/libs/Smarty.class.php";

$request = $_REQUEST;

//error_log('log :: ' . print_r($request,1) );

$allValues = array();
$response = array();

// DEBUG
// include('testdata.php'); // Overrides $request with testdata.

// Process the input data, validate, clean, transform
include('lib/process.php');

// Stuff to do before inserting to the DB

$markedAsSpam = false;
// Check for spam.
include('lib/prehooks/spamfilter.php');

// Send an email about the enquiry
include('lib/prehooks/enquiry2email.php');

if($markedAsSpam){
    echo 0;
    exit();
}



// Insert data in the database;
include('lib/insert.php');



// Send an email to the client.
include('lib/posthooks/sendemail.php');