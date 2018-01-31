<?php
$name = $_POST['form_name'];
$email = $_POST['form_email'];
$message = $_POST['form_msg'];
$number = $_POST['form_num'];
$subject = $_POST['form_subject'];


$to = "vigneshvickey0@gmail.com";
$subject = "RIA Emails";
$body = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message."Number: ".$number."subject: ".$subject;
$headers = "From: " . $email;

//send email
mail($to, $subject, $body, $headers);
?>