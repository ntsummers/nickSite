<?php
$email = $_POST['EmailInput'];
$reason = $_POST['ReasonInput'];
$message = $_POST['Message'];
$to = 'ntsummers1@gmail.com';
$subject = 'Ntsummers1.com ' . $reason;
$body = "From: $email\n Message:\n $message";

mail($to, $subject, $body);
?>
