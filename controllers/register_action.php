<?php
	include('../db.php');
	include('../functions.php');
	require('../models/class.client.php');
	if(isset($_POST['firstname']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$pwdr = $_POST['pwd-r'];
		if($pwd!=$pwdr){
			$message = "Passwords don't match!";
			$class = "alert alert-danger animated fadeInUp";
			header("location: ../index.php?page=register&message=".$message."&class=".$class."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
		}
		else
		{
			$date = date('Y-m-d');
			$hashpwd = md5($pwd);
			$client = Client::insert_client($firstname, $lastname, $email, $hashpwd);
			if ($client != "duplicated") {
				$message = "Sign up was successful! Please login!";
				$class ="has-success animated fadeInUp";
				header("location: ../index.php?page=login&message=".$message."&class=");
			}
			else {
				$message = "This email is already registered!";
				$class = "alert alert-danger animated fadeInUp";
				header("location: ../index.php?page=register&message=".$message."&class=".$class."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
			}
		}
	}
	else
		header("location: ../index.php?page=register");
?>