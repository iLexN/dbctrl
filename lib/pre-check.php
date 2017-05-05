<?php

if ( empty($_POST) ){
    exit();
}

$comment = isset($_POST['comments']) && $_POST['type'] === 'Callback' ? $_POST['comments'] : false;
if($comment){
    $markedAsSpam = (strpos($comment, 'http://') !== false) ||
            (strpos($comment, 'https://') !== false) ||
            (strpos($comment, '[url=') !== false);
} else {
    $markedAsSpam = false;
}

if ( $markedAsSpam ) {
    $mail = new \PHPMailer();
    $mail->setFrom($setting['globalemailsFrom'], $setting['globalemailsFrom']);
    $mail->addAddress($setting['globalemails']);
    $mail->isHTML(true);
    $mailSubject = array();
    $mailSubject['source'] = isset($_POST['source']) ? $_POST['source'] : '';
    $mailSubject['type'] = isset($_POST['type']) ? $_POST['type'] : '';
    $mailSubject['uid'] = isset($_POST['uid']) ? $_POST['uid'] : '';
    $mail->Subject = "[MaybeSpam] {$mailSubject['source']} - {$mailSubject['type']}";
    $mail->Body = '<pre>' . print_r($_POST , 1) . '</pre>';
    $mail->send();
    echo(0);
    exit();
}

