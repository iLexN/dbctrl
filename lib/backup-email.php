<?php

$mail = new \PHPMailer();
$mail->setFrom($setting['globalemailsFrom'], $setting['globalemailsFrom']);
$mail->addAddress($setting['globalemails']);
$mail->isHTML(true);
$mailSubject = array();
$mailSubject['source'] = isset($_POST['source']) ? $_POST['source'] : '';
$mailSubject['type'] = isset($_POST['type']) ? $_POST['type'] : '';
$mailSubject['uid'] = isset($_POST['uid']) ? $_POST['uid'] : '';
$mail->Subject = "{$mailSubject['source']} - {$mailSubject['type']} - {$mailSubject['uid']}";
$mail->Body = '<pre>' . print_r($_POST , 1) . '</pre>';
$mail->send();

