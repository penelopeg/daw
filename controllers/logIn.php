<?php

include('../db.php');
include('../functions.php');
require('../models/class.client.php');

if (isset($_POST['email'])) {	
	$email = $_POST['email'];
	$password = $_POST['pwd'];

	//Check if client has the right information
	if (!($user = Client::check_client($email, md5($password)))) {
		$message = "Wrong email/password!";
		header("location: ../index.php?page=login&alert=$message");
	}
	else {
		//Start login session for client
		session_start();
		$_SESSION['login']=$user;
		//if redirect, then go back to Order page
		if (isset($_GET['redirect'])) {
			header('location: ../index.php?page=order');
		}
		else {
			$message = "Welcome " . $user['firstname'];
			header("location: ../index.php?alert=$message");
		}
	}
}
else
	header("location: ../index.php?page=login");

?>