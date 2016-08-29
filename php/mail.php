<?php
$email = preg_replace("/[^a-zA-Z0-9\s\'\?\&.,*!+-]/", "", $_POST['EmailInput']);
$reason = preg_replace("/[^a-zA-Z0-9\s\'\?\&.,*!+-]/", "", $_POST['ReasonInput']);
$message = preg_replace("/[^a-zA-Z0-9\s\'\?\&.,*!+-]/", "", $_POST['Message']);

$to = 'ntsummers1@gmail.com';
$subject = 'Ntsummers1.com ' . $reason;
$body = "From: $email\n Message:\n $message";

mail($to, $subject, $body);
?>
