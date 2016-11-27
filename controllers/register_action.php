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
			header("location: ../index.php?page=register&alert=".$message."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
		}
		else
		{
			$date = date('Y-m-d');
			$hashpwd = md5($pwd);
			$client = Client::insert_client($firstname, $lastname, $email, $hashpwd);
			if ($client != "duplicated") {
				mail($email,"Welcome to Geekin Out","Hi {$firstname}, thanks for registering at Geekin Out!");
				$message = "Sign up was successful! Please login!";
				header("location: ../index.php?page=login&alert=".$message);
			}
			else {
				$message = "This email is already registered!";
				header("location: ../index.php?page=register&alert=".$message."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
			}
		}
	}
	else
		header("location: ../index.php?page=register");
?>