<?php
require 'appfog_db.php';

if (!$dbConfig) {
	die('Unable to create DB');
}

$pdo = getPDO();
$pdo->beginTransaction();
$pdo->exec('CREATE TABLE incoming_sms (
     id MEDIUMINT NOT NULL AUTO_INCREMENT,
     msisdn CHAR(30) NOT NULL,
     messageId CHAR(30) NOT NULL,
     content CHAR(30) NOT NULL,
     msg_type CHAR(30) NOT NULL,
     message_timestamp CHAR(30) NOT NULL,
     PRIMARY KEY (id)
)');
$pdo->commit();
