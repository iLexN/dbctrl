<?php

// Get all the values from $_REQUEST and clean, validate, transform them.
require __DIR__ . '/helper.php'; // some useful validation/transformation stuff.

foreach($validInputs as $input => $process){

    // Step1 : move everybody to the right field.
    if(isset($process['target'])){ // Copying $_REQUEST['something'] at $_REQUEST['target']
        if(!isset($request[$process['target']])){ // We don't squash existing values.
            if(isset($request[$input])){
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

// Copy everything to a final array for insertion.
foreach($validInputs as $input => $process){
    if(!isset($process['discard'])){
        if(isset($request[$input])){
            if(isset($process['object'])){
                $allValues[$process['object']][$input] = $request[$input];
            } else {
                $allValues['Inquiries'][$input] = $request[$input];
            }
        }
    }
}
