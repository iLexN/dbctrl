<?php

return array(

    // Stuff that have the wrong name
    'country' => array(
        'target' => 'countryofenquiry',
        'discard' => true
    ),
    'base-country' => array(
        'target' => 'nationality',
        'discard' => true
    ),
    'country-where-group-lives' => array(
        'target' => 'countryofenquiry',
        'discard' => true
    ),
    'country-residence' => array(
        'target' => 'countryofenquiry',
        'discard' => true
    ),
    'tel' => array(
        'target' => 'phone',  // Phone number
        'discard' => true
    ),
    'contact' => array(
        'target' => 'phone',  // Phone number
        'discard' => true
    ),
    'dpnum' => array(
        'target' => 'phone',  // Phone number
        'discard' => true
    ),
    'daytime' => array(
        'target' => 'phone',  // Phone number
        'discard' => true
    ),
    'daytime-number' => array(
        'target' => 'phone',  // Phone number
        'discard' => true
    ),
    'daytime-telephone' => array(
        'target' => 'phone',  // Phone number
        'discard' => true
    ),
    'mpnum' => array(
        'target' => 'phone2', // Mobile number
        'discard' => true
    ),
    'daytime-mobile' => array(
        'target' => 'phone2', // Mobile number
        'discard' => true
    ),
    'from_path' => array(
        'target' => 'previousenquiries', // Homepage -> Quotation -> ...
        'discard' => true
    ),
    'country-of-coverage' => array(
        'target' => 'countryofcover',
        'discard' => true
    ), // Hong Kong
    'country-coverage' => array(
        'target' => 'countryofcover',
        'discard' => true
    ), // Hong Kong
    'country-of-residence' => array(
        'target' => 'countryofenquiry',
        'discard' => true
    ), // Hong Kong
    'contact-person' => array(
        'target' => 'name',
        'discard' => true
    ), // UMI group name
    'first-name' => array(
        'target' => 'firstname',
        'discard' => true
    ), // Emmanuel
    'last-name' => array(
        'target' => 'lastname',
        'discard' => true
    ), // Prochasson
    'remote_ip' => array(
        'discard' => true,
        'target' => 'ip',
    ), // 127.0.0.1. Client's IP.
    'page_path' => array(
        'discard' => true,
        'target' => 'path'
    ),
    'length-of-coverage' => array(
        'target' => 'lengthofcover',
        'discard' => true
    ),
    'group-nature' => array(
        'target' => 'notes',
        'discard' => true
    ),
    'group-name' => array(
        'target' => 'groupname',
        'discard' => true
    ),
    'when' => array(
        'target' => 'contact_method',
        'discard' => true
    ),
    'area-of-coverage' => array(
        'target' => 'area_of_cover',
        'discard' => true
    ),
    'scope-of-coverage' => array(
        'target' => 'area_of_cover',
        'discard' => true
    ),

    // Stuff that needs to be processed before insertion
    'name' => array(
        'transformation' => array('splitname' => array()), // Need to be split in firstname/lastname
        'discard' => true
    ),
    'end_time' => array( // Also, check the timelog class for additional hooks.
        'transformation' => array('endtime' => array()),
        'discard' => true
    ),
    'startime' => array( // Also, check the timelog class for additional hooks.
        'transformation' => array('starttime' => array()),
        'discard' => true
    ),
    'outpatient' => array(
        'transformation' => array('outpatient' => array())
    ),
    'dental' => array(
        'transformation' => array('yes' => array('dental'))
    ),
    'maternity' => array(
        'transformation' => array('yes' => array('maternity'))
    ),

    'chronic_conditions' => array(
        'transformation' => array('yes' => array('chronic_conditions'))
    ),

    'keywords' => array(
        'transformation' => array('url_decode' => array('keywords'))
    ),

    'contact_method' => array( // CHI individual form 1
        'transformation' => array('chainContacts' => array())
    ),
    /*
    'mainSite' => array( // get the site eg PP-FP => PP for mail to client
        //'transformation' => array('mainSite' => array())
    ),
    */
    // Stuff that needs validation
    'email' => array(
        //'validation' => array('email' => array()), // email
    ),
    'phone' => array(
        //'validation' => array('phone' => array()) // daytime phone
    ),
    'phone2' => array(
        //'validation' => array('phone' => array()) // mobile phoen
    ),

    // Stuff that should just works.
    'nationality' => array(), // French
    'title' => array(), // Dr./Mr.
    'source' => array(), // GS-AD
    'type' => array(), // Individual/Callback/...
    'uid' => array(),
    'firstname' => array(),
    'lastname' => array(),
    'lengthofcover' => array(),
    'previousenquiries' => array(),
    'countryofenquiry' => array(),
    'countryofcover' => array(),
    'companyname' => array(),
    'notes' => array(),
    'completeinfo' => array(),

    'pre_existing' => array(),
    'area_of_cover' => array(),
    'industry' => array(),
    'emailDomain'=>array(),
    //'oldUid'=>array(),
    'cmid'=>array(),
    'dgid'=>array(),
    'kwid'=>array(),

    'netw'=>array(),
    'dvce'=>array(),
    'crtv'=>array(),
    'adps'=>array(),

    'creative_id'=>array(),

    'newsletter'=>array(),
    'language'=>array(),

    'referred_domain'=>array(),

    // That goes to another table.
    'q1' => array('object' => 'ExtraFormInfo'),
    'q2' => array('object' => 'ExtraFormInfo'),
    'q3' => array('object' => 'ExtraFormInfo'),
    'q4' => array('object' => 'ExtraFormInfo'),
    'q5' => array('object' => 'ExtraFormInfo'),
    'q6' => array('object' => 'ExtraFormInfo'),
    'q7' => array('object' => 'ExtraFormInfo'),
    'q8' => array('object' => 'ExtraFormInfo'),
    'q9' => array('object' => 'ExtraFormInfo'),
    'q10' => array('object' => 'ExtraFormInfo'),
    'q11' => array('object' => 'ExtraFormInfo'),
    'q12' => array('object' => 'ExtraFormInfo'),
    'q13' => array('object' => 'ExtraFormInfo'),
    'qPlanName' => array('object' => 'ExtraFormInfo'),
    'qDeductible' => array('object' => 'ExtraFormInfo'),
    'qPrice' => array('object' => 'ExtraFormInfo'),
    'pid' => array('object' => 'ExtraFormInfo'),


    'ip' => array(
        'object' => 'InqUrl'
    ),

    'path' => array(
        'object' => 'UrlPath'
    ),
    'pathcode' => array(
        'object' => 'UrlPath'
    ),

    'end_datetime' => array(
        'object' => 'TimeLog'
    ),
    'start_datetime' => array(
        'object' => 'TimeLog'
    ),
    'completed' => array(
        'object' => 'formCach'
    ),

    // This one's special.
    'Persons' => array(
        'transformation' => array('getPersons' => array(), 'getMembers' => array()),
        'discard' => true
    ),

    'Everyone' => array(
        'object' => 'Persons'
    ),

    // Hello I'm 64 and I want maternity insurance
    // `comments` will access all fields
    'comments' => array(),

);

