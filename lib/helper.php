<?php

/*
 * Transformation functions
 */
function endtime($config){
    global $request;
    $request['end_datetime'] = isset($request['end_time']) ? $request['end_time'] : date("Y-m-d H:i:s");
}

function starttime($config){
    global $request;
    $request['start_datetime'] = isset($request['start_time']) ? $request['start_time'] : date("Y-m-d H:i:s");
}

function splitname($config){
    global $request;
    if(isset($request['name'])){
        $name = explode(' ', $request['name']);
        $request['firstname'] = $name[0];
        if(isset($name[1])){
            $request['lastname'] = $name[1];
        }
    }
}

function mainSite($config){
	// PP-FP,PP-HK => PP
	global $request;
	$mainSite_ar = explode('-', $request['source']);
    //error_log('site in function'.$mainSite_ar[0]);
	$request['mainSite'] = $mainSite_ar[0];
}

function emailDomain(){
	global $request;
	$request['emailDomain'] = array_pop(explode('@', $request['email']));
}

function chainContacts($config){
    global $request;

    $tmp = array();
    if (isset($request['contact-am']))
        $tmp[] = 'am';
    if (isset($request['contact-pm']))
        $tmp[] = 'pm';
    if (isset($request['contact-email']))
        $tmp[] = 'email';

    if ( !isset($request['contact_method']) ){
        $request['contact_method'] = implode(',', $tmp);
    }

}

function outpatient($config){
    global $request;
    if(isset($request['outpatient'])){
        switch($request['outpatient']){
            case 'honout':
                $request['outpatient'] = "Hospitalization benefits, no outpatient benefits";
                break;
            case 'hoandout':
                $request['outpatient'] = "Hospitalization benefits and outpatient benefits";
				break;
			default :
				$request['outpatient'] = "Hospitalization benefits, no outpatient benefits";
        }
    }
}


function url_decode($config){
    global $request;
    $field = $config[0];
    if(isset($request[$field]) && $request[$field]){
        $request[$field] = urldecode($request[$field]);
    }
}



function yes($config){
    global $request;
    $field = $config[0];

    if(isset($request[$field]) && $request[$field]){
        $request[$field] = "Yes";
    }
}

function CalcAge($date_of_birth) { // YYYY-MM-DD dd/mm/yyyy
    $cur_year=date("Y");
    $cur_month=date("m");
    $cur_day=date("d");
    $dob_year=substr($date_of_birth, 6, 10);
    $dob_month=substr($date_of_birth, 3, 4);
    $dob_day=substr($date_of_birth, 0, 1);
    if ($cur_month>$dob_month || ($dob_month==$cur_month && $cur_day>=$dob_day) )
        return $cur_year-$dob_year;
    else
        return $cur_year-$dob_year-1;
}

/*
 * Persons from group form
 *
 * */
function getMembers(){
    global $request;

    $persons = array();
    $person = array();

    for($i = 1 ; $i <= 15 ; $i++){
        $person = array();
        $fields = array(
            'groupname'.$i => 'name',
            'groupbirth'.$i => 'dateofbirth',
            'groupnationality'.$i => 'nationality',
            'groupgender'.$i => 'gender',
            'grouprelationship'.$i => 'relationship',
            'groupage'.$i => 'age',
			'occupation'.$i => 'occupation'
        );
        foreach($fields as $source => $target){
            if(isset($request[$source])){
                $person[$target] = $request[$source];
            }
        }



        if( validatePerson($person) ){

		//error_log('p: v::' . print_r($person,1) );

            if( checkDateFormat($person['dateofbirth']) && !empty($person['dateofbirth']) && empty($person['age']) ){
                $person['age'] = CalcAge($person['dateofbirth']);
            }
            $persons[]=$person;
        }
    }

    if(count($persons) >= 1){
        if ( !is_array( $request['Everyone'] ) ) $request['Everyone'] = array();
        $request['Everyone'] = array_merge( $request['Everyone'], $persons );
    }
}


function getPersons(){
    global $request;
    global $allValues;

    $persons = array();
    $person = array();

    // Main policy holder.
    $fields = array(
        'self-name' => 'name',
        'self-nationality' => 'nationality',
        'self-birth' => 'dateofbirth',
        'self-gender' => 'gender',
        'self-occupation' => 'occupation',
        'self-age' => 'age'
    );
    foreach($fields as $source => $target){
        if(isset($request[$source])){
            $person[$target] = $request[$source];
        }
    }

    // copy name, nationality to policy holder for policy holder only
    if (empty($person['name'])){
        $person['name'] = $request['name'];
    }
    if (empty($person['name'])){
        $person['name'] = $request['firstname'] . ' ' . $request['lastname'];
    }
    if (empty($person['nationality'])){
        $person['nationality'] = $request['nationality'];
    }

    if( validatePerson($person) ){
        if( checkDateFormat($person['dateofbirth']) && !empty($person['dateofbirth']) && empty($person['age']) ){
            $person['age'] = CalcAge($person['dateofbirth']);
        }
        $person['relationship'] = "Policy Holder";
        $persons[]=$person;
    }

    // spouse
    $person = array();
    $fields = array(
        'spouse-name' => 'name',
        'spouse-nationality' => 'nationality',
        'spouse-birth' => 'dateofbirth',
        'spouse-gender' => 'gender',
        'spouse-occupation' => 'occupation',
        'spouse-age' => 'age'
    );
    foreach($fields as $source => $target){
        if(isset($request[$source])){
            $person[$target] = $request[$source];
        }
    }
    if( validatePerson($person) ){
        if( checkDateFormat($person['dateofbirth']) && !empty($person['dateofbirth']) && empty($person['age']) ){
            $person['age'] = CalcAge($person['dateofbirth']);
        }
        $person['relationship'] = "Spouse";
        $persons[]=$person;
    }

    // kids
    for($i = 1 ; $i <= 6 ; $i++){
        $person = array();
        $fields = array(
            'child-name'.$i => 'name',
            'child-nationality'.$i => 'nationality',
            'child-birth'.$i => 'dateofbirth',
            'child-gender'.$i => 'gender',
            'child-occupation'.$i => 'occupation',
            'child-age'.$i => 'age'
        );
        foreach($fields as $source => $target){
            if(isset($request[$source])){
                $person[$target] = $request[$source];
            }
        }
        if( validatePerson($person) ){
            if( checkDateFormat($person['dateofbirth']) && !empty($person['dateofbirth']) && empty($person['age']) ){
                $person['age'] = CalcAge($person['dateofbirth']);
            }
            $person['relationship'] = "Child";
            $persons[]=$person;
        }
    }

    if(count($persons) >= 1){
        $request['Everyone'] = $persons;
    }

}

/*
 * validate a person
 *
 * @param $person array array of person properties: dateofbirth, age, gender(?)
 * @return boolean
 * */
function validatePerson($person){

	//error_log(print_r($person,1));

	/*
    return !empty($person['dateofbirth'])
        || !empty($person['age'])
        || !empty($person['gender'])
        || !empty($person['name'])
        || !empty($person['nationality'])
        || !empty($person['relationship'])
        ;
	*/
	return !empty($person['dateofbirth']) || !empty($person['age']);
}


/*
 * generate template
 * @param $params array
 * @param $params[tpl] string template of the output
 * @param $params[targets] array fields name to be set/overwritten
 * @return boolean
 * */
function toFormat($params){
    global $request;

    $smarty = new Smarty();

    // assign $request value to tpl
    $smarty->assign($request);

    if ( $params['tpl'] ){
        $content = $smarty->fetch($params['tpl']);
    }
    else{
        $content = print_r($request,1);
    }

    if ( $content ){
        // set $request fields
        if ( isset($params['targets']) ) {
            foreach ($params['targets'] as $target){
                $request[$target] = $content;
            }
        }
        return true;
    }
    else{
        return false;
    }

}

/*
 * log values in log file
 * */
function elog($in){
    $data = $in . chr(10);
    $file = "error.log";  $f = fopen($file,'a');fwrite($f, $data);fclose($f);
}

/*
 * Validation functions
 */
function phone($phone){
    return true; // TODO
}

function email($email){
    return true; // TODO
}

/*
 * check date format dd/mm/yyyy
 * */
function checkDateFormat($date){
    if(empty($date)){ return true; }
    $dates = explode('/', $date);
    $d = isset($dates[0]) ? $dates[0] : false;
    $m = isset($dates[1]) ? $dates[1] : false;
    $y = isset($dates[2]) ? $dates[2] : false;

    return checkdate(intval ($m), intval ($d), intval ($y));
}
