<?php

function getMail() {
	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
	$mail->Port = 465;
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'tino.a77@gmail.com';                            // SMTP username
	$mail->Password = 'silef123';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

	$mail->From = 'tino.a77@gmail.com';
	$mail->FromName = 'Tino Adams';
	$mail->AddReplyTo('tino.a77@gmail.com', 'Tino Adams');

	return $mail;
}

function sendMail($recipient,$subject,$body) {
	$mail = getMail();                            // Enable encryption, 'ssl' also accepted

	$mail->AddAddress($recipient);  // Add a recipient

	$mail->IsHTML(false);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->AltBody = $body;
	if(!$mail->Send()) {
	   throw new Exception($mail->ErrorInfo);
	}
}