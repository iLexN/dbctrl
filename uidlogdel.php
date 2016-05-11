<?php

//if ( empty($_POST['uid']) ) exit();




include('config.php');

//$uid = $_POST['uid'];
$uid = $data['uid'];


$ruid = ORM::for_table('uidLog')->where_equal('uid',$uid)->delete_many();



