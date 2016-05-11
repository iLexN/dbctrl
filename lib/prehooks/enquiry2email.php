<?php

if (!$email_config['disableSendmail']){
// Send a safety email
    if(!$markedAsSpam){

        $smarty = new Smarty();

        $smarty->assign($request);
        $smarty->assign('allValues', print_r($allValues, 1));
        $email = $smarty->fetch($email_config['tpl']);

        $email = '<pre>' . $email . '</pre>';

        $mail_subject = "{$allValues['Inquiries']['source']} - {$allValues['Inquiries']['type']} - {$allValues['Inquiries']['uid']}";
        mail($globalemails, $mail_subject, $email, $headers);
    }
    else {

        $smarty = new Smarty();

        $smarty->assign($request);
        $email = $smarty->fetch($email_config['tpl_spam_enquiry']);

        $email = '<pre>' . $email . '</pre>';

        $mail_subject = "[MaybeSpam] {$allValues['Inquiries']['source']} - {$allValues['Inquiries']['type']}";
        mail($globalemails, $mail_subject, $email, $headers);

    }
}