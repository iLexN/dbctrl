<?php

if ( empty($_POST) ){
    //exit();
}

$comment = isset($_POST['comments']) ? $_POST['comments'] : false;
if($comment){
    $markedAsSpam = (strpos($comment, 'http://') !== false) ||
        (strpos($comment, '[url=') !== false);
} else {
    $markedAsSpam = false;
}

if ( $markedAsSpam ) {
    echo(0);
    exit();
}

