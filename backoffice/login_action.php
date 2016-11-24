<?php
	include('../db.php');
	include('../functions.php');
	require('../models/class.user.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!($user = User::check_user($email, md5($password)))) {
		$message = "Dados errados!";
		$class = "alert alert-danger animated fadeInUp";
		header("location: index.php?message=$message&class=$class");
	}
	else{
		session_start();
		$_SESSION[$user['type']] = $user['email'];
		header('location: index.php?page=index');
	}
?>