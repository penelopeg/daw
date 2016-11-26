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
			header("location: ../index.php?page=login&alert=$message");
		}
		else{
			session_start();
			$_SESSION['login']=$user;
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