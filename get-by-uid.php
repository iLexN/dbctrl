<?php

$uid = isset($_GET['uid']) ? $_GET['uid'] : false;

$setting = require 'config/config.php';
require 'vendor/autoload.php';
require 'setup/setup.php';

$out = array();
if ($uid) {
    /* @var $enquiry ORM */
    $enquiry = ORM::for_table('inquiries')
            ->select('firstname')
            ->select('lastname')
            ->select('email')
            ->select('phone')
            ->select('nationality')
            ->select('countryofenquiry')
            ->select('countryofcover')
            ->select('lengthofcover')
            ->select('outpatient')
            ->where('uid', $uid)->find_one();

    if (!$enquiry) {
        $logger->info("Invalid uid", array('uid', $uid));
        exit();
    }

    $out = $enquiry->as_array();

    $out['name'] = $out['firstname'] . ' ' . $out['lastname'];
    unset($out['firstname']);
    unset($out['lastname']);

    //person
    /* @var $persons ORM */
    $persons = ORM::for_table('persons')
            ->select('gender')
            ->select('dateofbirth')
            ->select('relationship')
            ->select('occupation')
            ->where('uid', $uid)
            ->find_many();

    if ( $persons ){
    $people = array();
    foreach ($persons as $person) {
        switch ($person->relationship) {
            case 'Policy Holder':
                $people['self'] = $person->as_array();
                break;
            case 'Spouse':
                $people['Spouse'] = $person->as_array();
                break;
            case 'Child':
                $people['Child'][] = $person->as_array();
                break;
            default:
                $people[] = $person->as_array();
        }
    }
    $out['person'] = $people;
    }
}

echo(json_encode($out));
