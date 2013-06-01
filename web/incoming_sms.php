<?php
// Array ( [msisdn] => 61424438980 [to] => 61477752238 [messageId] => 03000000163334CD [text] => Donate 2 [type] => text [message-timestamp] => 2013-05-31 11:05:42 )

require 'PHPMailer/class.phpmailer.php';
require 'appfog_db.php';
require 'mail.php';

if ($dbConfig) {
	$pdo = getPDO();
	$pdo->beginTransaction();
	$pdo->exec("");
	$pdo->commit();
}
// var_dump($default);

sendMail('tino.a77@gmail.com','Incoming SMS',print_r($_REQUEST,true));                            // Enable encryption, 'ssl' also accepted
