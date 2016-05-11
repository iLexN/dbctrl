<?php

//if ( empty($_POST['uid']) ) exit();
//if ( empty($_POST['tag']) ) exit();



include('config.php');


$uidExist = ORM::for_table('uidLog')
    //->where('uid',$_POST['uid'])
    ->where('uid',$data['uid'])
    ->where_gt('datetime', date("Y-m-d H:i:s",strtotime("-1 day"))  )
    //->where('source',$_POST['tag'])
    ->where('source',$data['tag'])
    ->count();

if ( $uidExist > 0 ) exit();

$uidOjc = ORM::for_table('uidLog')->create();

//$uidOjc->uid = $_POST['uid'];
//$uidOjc->source = $_POST['tag'];

$uidOjc->uid = $data['uid'];
$uidOjc->source = $data['tag'];

$uidOjc->save();





