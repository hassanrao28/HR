<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$to = 'infohassanrao@gmail.com';
$headers = 'noreplyhassanrao@gmail.com';
$subject = 'a new user want to contact from HR.com';
$body='NAME: '.$name."<br><br>";
$body.='E-Mail: '.$email."<br><br>";
$body.='PHONE NUMBER: '.$number."<br><br>";
$body.='COMMENT: '.$message."<br><br>";

mail($to, $subject, $body,$headers);

// header('location: index.html')
?>