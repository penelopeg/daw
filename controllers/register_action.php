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
			$message = "As passwords não são iguais!";
			header("location: index.php?page=register&message=".$message."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
		}
		else
		{
			$date = date('Y-m-d');
			$hashpwd = md5($pwd);
			$client = Client::insert_client($firstname, $lastname, $email, $hashpwd);
			if ($client != "duplicated") {
				header("location: ../views/register_success.html");
			}
			else {
				$message = "O email introduzido já se encontra registado!";
				header("location: index.php?page=register&message=".$message."&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
			}
		}
	}
	else
		header("location: ../index.php?page=register");
?>