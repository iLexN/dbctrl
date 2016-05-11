<?php

//if ( empty($data['ip']) ) exit( json_encode(array('id'=>1)) );

//if ( empty($data['tag']) ) exit( json_encode(array('id'=>1)) );

//if ( empty($data['user_agent']) ) exit( json_encode(array('id'=>1)) );


include('config.php');


if(!empty($data['user_agent']) && preg_match('~(bot|crawl|Pingdom|spider|spam|Slurp|foo|archiver|DomainAppender|Scanner|FunWebProducts|Catalog|internetseer|facebook|Siteimprove|Link|FeedBurner|NetLyzer|coccoc|stumbleupon|Google|hubspot|InsideView|EasyBib|Pinterest|Safeassign|WordPress|Optimizer|snk|ltx71|http|Index|INFOMINE)~i', $data['user_agent'])){
    exit();
}

$ipAr = array(
            '125.214.232.21', //hk
            '5.32.16.50', //uae
            '118.201.9.98', //sg
            '180.166.1.54', // sh
            '162.243.170.60',
            '101.226.66.178',
            '134.249.51.137',
            '5.45.69.211',
            '54.149.39.42',
            '81.169.151.221',
            '212.152.181.222',
            '5.45.69.211',
            '103.250.208.25',
            '176.9.101.99',
            '46.4.94.242',
            '54.162.211.118',
            '94.153.11.109',
            '103.229.209.102',
            '113.71.163.120',
            '101.226.89.116',
            '101.226.89.120',
            '180.153.206.16',
            '180.153.206.34',
            '94.153.9.175',
            '112.64.235.250',
            '203.134.157.153',
            '101.226.66.192',
            '144.76.175.75'
        );
            
if ( in_array($data['ip'],$ipAr)  ) {
    exit();
}

$ipExist = ORM::for_table('ipLog')
    ->where('ip',$data['ip'])
    ->where_gt('datetime', date("Y-m-d H:i:s",strtotime("-1 day"))  )
    ->where('source',$data['tag'])
    ->count();
if ( $ipExist > 0 ) exit();

$ip = ORM::for_table('ipLog')->create();

$ip->ip = $data['ip'];
$ip->source = $data['tag'];
//$ip->userAgent = $data['user_agent'] ;

$ip->save();

//echo($ip->id);

$resultAr = array('id'=>$ip->id);

//print_r($resultAr);

//echo( json_encode($resultAr) );

