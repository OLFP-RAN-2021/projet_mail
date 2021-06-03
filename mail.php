<?php

require './vendor/autoload.php';
require './dev.php'; //Don't forget to add your configuration file

echo 'Envoi de mail avec Swift Mailer';

$subject = 'Mon premier email avec Swift Mailer';
$fromEmail = 'b.aissani74@gmail.com';
$fromUser = 'Brahim';
$body = '<!DOCTYPE html>
<html>
<head>
	<title>Mon premier mail</title>
</head>
<body>
    <h1>Hello SwiftMailer</h1>
</body>
</html>';


$transport = (new Swift_SmtpTransport(EMAIL_HOST, EMAIL_PORT))
    ->setUsername(EMAIL_USERNAME)
    ->setPassword(EMAIL_PASSWORD)
    ->setEncryption(EMAIL_ENCRYPTION) //For Gmail
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($subject))
    ->setFrom([$fromEmail => $fromUser])
    ->setTo([EMAIL_USERNAME])
    ->setBody($body, 'text/html')
;

// Send the message
$result = $mailer->send($message);