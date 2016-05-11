<?php

// Send a welcome email on first submission
$email = isset($allValues['Inquiries']['email']) ? $allValues['Inquiries']['email'] : false;

//error_log('email::'.$email);
//error_log('true::'.$newEnquiry);
//error_log('in array :: ' . in_array($allValues['Inquiries']['emailDomain'], $allowed_send_email));
//error_log('key .. ' . array_key_exists($allValues['Inquiries']['mainSite'], $site_tpl_var));
//error_log('key .. ' .$allValues['Inquiries']['mainSite'] );

if ($email) {
	if ( ($xpdo -> getCount('Inquiries', array('email' => $email)) == 1 && $newEnquiry)
	) {// cos after insert to get uid, before insert is 0

//error_log('mail sent222222');

		//send email
		if (array_key_exists($allValues['Inquiries']['mainSite'], $site_tpl_var)) {

//error_log('mail sent111111');
/*
			$smarty = new Smarty();
error_log('new s');
			$smarty -> assign($request);
error_log('re');
			$smarty -> assign('uid', $uid);
error_log('$uid');
$gen_body = $site_tpl_var[$allValues['Inquiries']['mainSite']];

error_log($allValues['Inquiries']['mainSite']);
error_log('file p ::::'.$gen_body);

			$email_body = $smarty -> fetch($gen_body);
echo('ssssss');
echo($email_body);
*/
$loader = new Twig_Loader_Filesystem('tpl');
$twig = new Twig_Environment($loader, array(
    'cache' => 'templates_c',
    'debug' => true
));

$mailConfig = $site_tpl_var[$allValues['Inquiries']['mainSite']];

//error_log( print_r($mailConfig,1) );

$mailTpl = $mailConfig['mailBody'];

//error_log('mailTpl::' . $mailTpl);

//$template = $twig->loadTemplate('pp_email_client.html');
$template = $twig->loadTemplate($mailTpl);
//error_log('aaa');
$data = $request;
//error_log('bbb');
$data['uid'] = $uid;
//error_log('cccc');
$email_body=  $template->render($data);
//$email_body  =  $template->fetch($data);
//error_log('ddddd');

			$mail_subject = "Thank for your enquiry";
			//mail($email, $mail_subject, $email_body, $headers);


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

			
			//error_log('mail sent');

		} else {
			// send gernal email

			//$email_body = $smarty->fetch($email_config['tpl_client']);

		}
	}
}
