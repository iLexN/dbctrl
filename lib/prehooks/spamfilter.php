<?php

$comment = isset($allValues['Inquiries']['comments']) ? $allValues['Inquiries']['comments'] : false;

if($comment){
    $markedAsSpam = (strpos($comment, 'http://') !== false) ||
        (strpos($comment, '[url=') !== false);
} else {
    $markedAsSpam = false;
}