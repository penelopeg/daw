<?php

include('../db.php');
include('../functions.php');
require('../models/class.user.php');

$email = $_POST['email'];
$password = $_POST['password'];

// Check if user can login
if(!($user = User::check_user($email, md5($password)))) {
	$message = "Wrong email/Password!";
	$class = "alert alert-danger animated fadeInUp";
	header("location: index.php?message=$message&class=$class");
}
else{
	session_start();
	$_SESSION[$user['type']] = $user['email'];
	header('location: index.php?page=index&message=Welcome!');
}

?>