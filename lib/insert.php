<?php


if(!$xpdo->connect()){
    echo '@insert: Something went wrong: can not connect to database';
    exit();
}

function getNextUID(){
    global $xpdo;
    $query = $xpdo->newQuery('Inquiries');
    $query->sortby('inquiry_id', 'desc');
    $query->limit(1,0);
    $current = $xpdo->getObject('Inquiries', $query);
    if(!$current){
        return 1;
    } else{
        return $current->get('uid')+1;
    }
}
/*
 * Database insertion
 */

$newEnquiry = !isset($allValues['Inquiries']['uid']);

//error_log('n1::'.$newEnquiry);

// Get UID, create new object if required, else update previous one.

if(!$newEnquiry){
    $uid = $allValues['Inquiries']['uid'];
} else {
    $b = ORM::for_table('inquiries')->use_id_column('inquiry_id')->create();
    $b->set_expr('uid','SELECT max(uid)+1 FROM inquiries')->save2();
    $c = ORM::for_table('inquiries')->use_id_column('inquiry_id')->find_one($b->inquiry_id);
    $uid = $c->uid; 
}

$enquiry = $xpdo->getObject('Inquiries', array('uid' => $uid));

/*
if(!$newEnquiry){
    $uid = $allValues['Inquiries']['uid'];
    $enquiry = $xpdo->getObject('Inquiries', array('uid' => $uid));
} else {
    $enquiry = $xpdo->newObject('Inquiries');
    $uid = getNextUID();
    $enquiry->set('uid', $uid);
    $enquiry->save();
}
*/



// Hydrate the object.
foreach($allValues['Inquiries'] as $field => $value){
    if($enquiry->get($field)){
        //error_log('Overriding field '.$field. ' for uid '. $uid);
    }
    $enquiry->set($field, $value);
}

$enquiry->set('datetime', $datetime);
$enquiry->set('changetime', $datetime);

// Other related objects
$tables = array(
    'ExtraFormInfo',
    'InqUrl',
    'UrlPath',
    'TimeLog'
);

foreach($tables as $objectName){
    if(isset($allValues[$objectName])){
        if(!$newEnquiry){
            $object = $xpdo->getObject($objectName, array('uid' => $uid));
            if(!$object){
                $object = $xpdo->newObject($objectName);
            }
        } else {
            $object = $xpdo->newObject($objectName);
        }
        // Parse input and update related object
        foreach($allValues[$objectName] as $field => $value){
            if($object->get($field)){
                //error_log($objectName.': Overriding field '.$field. ' for uid '. $uid);
            }
            $object->set($field,$value);
        }
        // Attache related object
        $enquiry->addOne($object);
    }
}

// The case of Persons

if(isset($allValues['Persons']['Everyone'])){

    $persons = array();
    foreach($allValues['Persons']['Everyone'] as $person){
        $p = $xpdo->newObject('Persons');
        $p->fromArray($person);
        $persons[]=$p;
    }
    if(count($persons) > 0 ){
	
		// for remove the old persons info.
        // don't know how to use xPdo to remove
        //ie. getObject('Persions', array('uid' => $uid))->remove();
        //this will remove the inqury data row ...
        $rp = ORM::for_table('persons')->where_equal('uid',$uid)->delete_many();
        // hack end for remove
	
        $enquiry->addMany($persons);
    }
}

//remove ip (ipLog)
/*
if(isset($allValues['InqUrl']['ip'])){
    $rip = ORM::for_table('ipLog')->where_equal('ip',$allValues['InqUrl']['ip'])->delete_many();
}
*/

//remove uid in uid Log
/*
$ruid = ORM::for_table('uidLog')->where_equal('uid',$uid)->delete_many();
if(isset($allValues['Inquiries']['oldUid'])){
    $ruid = ORM::for_table('uidLog')->where_equal('uid',$allValues['Inquiries']['oldUid'])->delete_many();
}
*/   



// Some stuff I'm not sure I understand.
$date = date("Y-m-d");
if(!$newEnquiry){
    $form_cache = $xpdo->getObject('FormCach', array('uid' => $uid));
    if(!$form_cache){
        $form_cache = $xpdo->newObject('FormCach');
    }
} else {
    $form_cache = $xpdo->newObject('FormCach');
}
$form_cache->set('date', $date);
if(isset($allValues['Inquiries']['source'])){
    $form_cache->set('site', $allValues['Inquiries']['source']);
}

if($page = $form_cache->get('page')){
    $form_cache->set('page', $page+1);
} else {
    $form_cache->set('page', 1);
}
$enquiry->addOne($form_cache);

// That's all folks
if($enquiry->save()){
    echo $uid;
} else {
    echo "@insert: Something went wrong :/";
    exit();
}

