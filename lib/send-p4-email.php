<?php

//send email P4
$email = isset($allValues['Inquiries']['email']) ? $allValues['Inquiries']['email'] : false;
$mainSite = isset($allValues['Inquiries']['source']) ? mainSite($allValues['Inquiries']['source']) : '';
if ($email && $newEnquiry && array_key_exists($mainSite, $setting['p4email'])) {
    $count = ORM::for_table('inquiries')->where('email', $email)->count();
    if ($count == 1) {
        $mailConfig = $setting['p4email'][$mainSite];

        $template = $twig->loadTemplate($mailConfig['mailBody']);
        $data = $allValues['Inquiries'];
        $data['uid'] = $uid;
        $email_body=  $template->render($data);
        $mail_subject = "Thanks for your enquiry";

        $mail = new \PHPMailer();
        $mail->setFrom($mailConfig['mailFromAc'], $mailConfig['mailFromName']);
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = $mail_subject;
        $mail->Body = $email_body;
        if(!$mail->send()) {
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message has been sent';
            //error_log('mail sent :' . $email);
        }
    }
}

