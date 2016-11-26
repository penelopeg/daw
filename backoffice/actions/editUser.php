<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
		include('../../db.php');
		include('../../functions.php');		
		require('../../models/class.user.php');
		$fn = $_POST['firstname'];
		$ln = $_POST['lastname'];
		$em = $_POST['email'];
		$oem = $_POST['oldEmail'];
		$pw = md5($_POST['password']);
		$role = $_POST['role'];

		$result = User::update_user_by_email($role, $fn, $ln, $em, $pw, $oem);
		if($result=='sucessful')
			$message = "User updated!";
		else
			$message = 'Error! Possible email duplicate';
		
		header("location: ../index.php?page=editUser&message=$message");
	}
	else
		header('location: ../index.php')
?>