<?php

// Get all the values from $_REQUEST and clean, validate, transform them.
require 'helpers.php'; // some useful validation/transformation stuff.

foreach($validInputs as $input => $process){

    // Step1 : move everybody to the right field.
    if(isset($process['target'])){ // Copying $_REQUEST['something'] at $_REQUEST['target']
        if(!isset($request[$process['target']])){ // We don't squash existing values.
            if(isset($request[$input])){
//                echo 'Copying field '.$input. ' to '. $process['target'] . "\n";
                $request[$process['target']] = $request[$input];
            }
        }
    }
}

foreach($validInputs as $input => $process){
    // Step 2: transform as demanded
    if(isset($process['transformation'])){
        foreach($process['transformation'] as $function => $parameters){
            call_user_func($function, $parameters);
        }
    }
}

foreach($validInputs as $input => $process){
    // Step 3. Validate data
    if(isset($process['validation'])){
        foreach($process['validation'] as $function => $parameters){
            if(!call_user_func($function, $parameters)){
                echo "Validation failed";
                exit();
            }
        }
    }
}

// Copy everything to a final array for insertion.
foreach($validInputs as $input => $process){
    if(!isset($process['discard'])){
        if(isset($request[$input])){
            if(isset($process['object'])){
//                echo "Copying value ". $request[$input]. " into ".$process['object']."\n";
                $allValues[$process['object']][$input] = $request[$input];
            } else {
//                echo "Copying value ". $request[$input]. " into inquiries\n";
                $allValues['Inquiries'][$input] = $request[$input];
            }
        }
    }
}



if(empty($allValues['Inquiries'])){ // Nothing to do.
    echo 0;
    exit();
}