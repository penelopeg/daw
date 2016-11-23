<?php
	include('../db.php');
	include('../functions.php');
	if(isset($_POST['email']))
	{	
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$hashpwd = md5($pwd);
		require('../models/class.client.php');
		$user = Client::check_client($email, $hashpwd);
		if (!empty($user)) {
			session_start();
			$_SESSION['login']=$user;
			echo $user['id'];
			header("location: ../views/login_success.html");
		}
		else {
			header("location: ../views/login_failed.html");
		}
	}
	else
		header("location: ../index.php?page=login");
?>