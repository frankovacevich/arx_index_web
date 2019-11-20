<?php

if(!isset($_GET["email"])) die();
$email = $_GET["email"];

include_once('../resources/mail_and_notifications/send_email.php');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { echo $email; die(); }

$to = "subtlebitsoftware@gmail.com";
$from = "ARX Subscription";
$subject = "ARX Subscription";
$message = $email;

echo sendEmail($from, $to, $subject, $message);

echo "_OK_";

?>