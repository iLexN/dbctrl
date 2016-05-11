<?php

require 'config.php';

$uid = isset($_GET['uid']) ? $_GET['uid'] : FALSE;

if ($uid) {

	$enquiry = $xpdo -> getObject('Inquiries', array('uid' => $uid));
	if (!$enquiry) {
		error_log('Invalid uid ' . $uid);
	}

	
	/*
	//self
	$p = $enquiry -> getMany('Persons', array('relationship' => 'Policy Holder'));
	foreach ($p as $key => $value) {
		//print_r($value->toArray());
		$people['self'] = $value -> toArray();
	}

	//Spouse
	$p = $enquiry -> getMany('Persons', array('relationship' => 'Spouse'));
	foreach ($p as $key => $value) {
		//print_r($value->toArray());
		$people['Spouse'] = $value -> toArray();
	}

	$p2 = $enquiry -> getMany('Persons', array('relationship' => 'Child'));
	$people['Child'] = array();
	foreach ($p2 as $key => $value) {
		//print_r($value->toArray());
		$people['Child'][] = $value -> toArray();
	}
	*/
	
	$p = $enquiry->getMany('Persons');
	$people = array();
	
	foreach ($p as $key => $value) {
		$tmp_ar = $value -> toArray();
		Switch ($tmp_ar['relationship']){
			case 'Policy Holder':
				$people['self'] = $tmp_ar;
				break;
			case 'Spouse':
				$people['Spouse'] = $tmp_ar;
				break;
			case 'Child':
				$people['Child'][] = $tmp_ar;
				break;
			default:
				$people[] = $tmp_ar;
		}

	}
	

	$merge = array_merge($enquiry -> toArray(), array('person' => $people));

	$merge['name'] = $merge['firstname'] . " " . $merge['lastname'];

	foreach ($merge as $k => $v) {
		if (empty($v)) {
			unset($merge[$k]);
		}
	}

	// remove extra field .. smaller size
    unset($merge['uid']);
	unset($merge['firstname']);
	unset($merge['lastname']);
	unset($merge['completeinfo']);
	unset($merge['notes']);
	unset($merge['previousenquiries']);
	unset($merge['source']);
	unset($merge['datetime']);
	unset($merge['changetime']);
	unset($merge['finishtime']);
	unset($merge['insert_time']);
	unset($merge['type']);
	unset($merge['copied']);

	//print_r($merge);
	echo json_encode($merge);

} else {
	exit();
}
