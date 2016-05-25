<?php

$newEnquiry = !isset($allValues['Inquiries']['uid']);
$datetime = date("Y-m-d H:i:s");

if(!$newEnquiry){
    $uid = $allValues['Inquiries']['uid'];
    /* @var $inquiries MyORM */
    $inquiries = MyORM::for_table('inquiries')->use_id_column('inquiry_id')->where('uid',$uid)->find_one();
    $inquiries->set($allValues['Inquiries']);
    $inquiries->save();
} else {
    $inquiries = MyORM::for_table('inquiries')->create();
    $inquiries->set_expr('uid','SELECT 1 + (SELECT max(`uid`) FROM `inquiries`)');
    $inquiries->set($allValues['Inquiries']);
    $inquiries->set('datetime', $datetime);
    $inquiries->set('changetime', $datetime);
    $inquiries->save();

    $newUidObj = ORM::for_table('inquiries')->use_id_column('inquiry_id')->select('uid')->find_one($inquiries->id);
    $uid = $newUidObj->uid;
}

//ExtraFormInfo
$obj = 'ExtraFormInfo';
if ( isset($allValues[$obj]) ){
    $table = 'extra_form_info';
    $dbTblObj = ORM::for_table($table)->use_id_column('uid')->where('uid',$uid)->find_one();
    if ( !$dbTblObj ){
        $dbTblObj = ORM::for_table($table)->create();
    }
    $dbTblObj->set('uid',$uid);
    $dbTblObj->set($allValues[$obj]);
    $dbTblObj->save();
}

//InqUrl
$obj = 'InqUrl';
if ( isset($allValues[$obj]) ){
    $table = 'inqUrl';
    $dbTblObj = ORM::for_table($table)->use_id_column('inqUrl_id')->where('uid',$uid)->find_one();
    if ( !$dbTblObj ){
        $dbTblObj = ORM::for_table($table)->create();
    }
    $dbTblObj->set('uid',$uid);
    $dbTblObj->set($allValues[$obj]);
    $dbTblObj->save();
}

//UrlPath
$obj = 'UrlPath';
if ( isset($allValues[$obj]) ){
    $table = 'urlPath';
    $dbTblObj = ORM::for_table($table)->use_id_column('uid')->where('uid',$uid)->find_one();
    if ( !$dbTblObj ){
        $dbTblObj = ORM::for_table($table)->create();
    }
    $dbTblObj->set('uid',$uid);
    $dbTblObj->set($allValues[$obj]);
    $dbTblObj->save();
}

//TimeLog
$obj = 'TimeLog';
if ( isset($allValues[$obj]) ){
    $table = 'time_log';
    $dbTblObj = ORM::for_table($table)->use_id_column('uid')->where('uid',$uid)->find_one();
    if ( !$dbTblObj ){
        $dbTblObj = ORM::for_table($table)->create();
    }
    $dbTblObj->set('uid',$uid);
    $dbTblObj->set($allValues[$obj]);
    $dbTblObj->save();
}

//Persons
// delete than insert
if(isset($allValues['Persons']['Everyone'])){
    $rp = ORM::for_table('persons')->where_equal('uid',$uid)->delete_many();
    $table = 'persons';
    foreach ( $allValues['Persons']['Everyone'] as $person ) {
        $dbTblObj = ORM::for_table($table)->create();
        $dbTblObj->set('uid',$uid);
        $dbTblObj->set($person);
        $dbTblObj->save();
    }
}

    $table = 'form_cach';
    $dbTblObj = ORM::for_table($table)->use_id_column('uid')->where('uid',$uid)->find_one();
    if ( !$dbTblObj ){
        $dbTblObj = ORM::for_table($table)->create();
        $page = 0;
    } else {
        $page = $dbTblObj->page;
    }
    $dbTblObj->set('uid',$uid);
    if ( isset($allValues['Inquiries']['source']) ){
        $dbTblObj->set('site',$allValues['Inquiries']['source']);
    }
    $dbTblObj->set('page',$page + 1);
    $dbTblObj->set('date',$datetime);
    $c = isset($allValues['formCach']['completed']) ? $allValues['formCach']['completed'] : 0;
    $dbTblObj->set('completed',$c);
    $dbTblObj->save();

ORM::for_table('uidLog')->where_equal('uid',$uid)->delete_many();
