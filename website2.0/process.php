<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo 'connection successful';
} else {
    echo 'no connection';
}

mysqli_select_db($con, 'form');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!isset($name)) {
    $name = 'name not set';
}

if (!isset($email)) {
    $email = 'email not set';
}

if (!isset($message)) {
    $message = 'message not set';
}
$query = " insert into data (name, email, message) values ('$name', '$email', '$message') ";
mysqli_query($con, $query);
