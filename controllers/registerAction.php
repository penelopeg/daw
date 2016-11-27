<?php

include('../db.php');
include('../functions.php');
require('../models/class.client.php');

if(isset($_POST['firstname'])) {
	// Get info from post
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$pwdr = $_POST['pwd-r'];
	//If passwords don't match send message
	if($pwd!=$pwdr){
		$message = "Passwords don't match!";
		header("location: ../index.php?page=register&alert=".$message."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
	}
	else {
		$date = date('Y-m-d');
		$hashpwd = md5($pwd);
		$client = Client::insert_client($firstname, $lastname, $email, $hashpwd);
		//If client is inserted with success send registration email
		if ($client != "duplicated") {
			//Send email to client
			mail($email,"Welcome to Geekin Out","Hi {$firstname}, thanks for registering at Geekin Out!");
			$message = "Sign up was successful! Please login!";
			header("location: ../index.php?page=login&alert=".$message);
		}
		else {
			//Email already exists, Send message to user
			$message = "This email is already registered!";
			header("location: ../index.php?page=register&alert=".$message."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
		}
	}
}
else
	header("location: ../index.php?page=register");

?>