<?php
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userdata');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$query = "insert into datainfo ( name, email, number, msg) 
values ('$name', '$email', '$number', '$message') ";

mysqli_query($con,$query);
include './index.html';
?>