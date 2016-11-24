<?php
	include('../db.php');
	include('../functions.php');
	require('../models/class.client.php');
	if(isset($_POST['email']))
	{	
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		if(!($user = Client::check_client($email, md5($password)))) {
			$message = "Wrong email/password!";
			$class = "alert alert-danger animated fadeInUp";
			header("location: ../index.php?page=login&message=$message&class=$class");
		}
		else{
			session_start();
			$_SESSION['login']=$user;
			header('location: ../index.php');
			echo $user['id'];
		}
	}
	else
		header("location: ../index.php?page=login");
?>