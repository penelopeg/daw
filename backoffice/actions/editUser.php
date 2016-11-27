<?php

// Only admins can edit users
session_start();
if(isset($_SESSION['admin'])) {
	include('../../db.php');
	include('../../functions.php');		
	require('../../models/class.user.php');

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$oldemail = $_POST['oldEmail'];
	$pwd = md5($_POST['password']);
	$role = $_POST['role'];

	$result = User::update_user_by_email($role, $firstname, $lastname, $email, $pwd, $oldemail);
	if($result=='successful')
		$message = "User updated!";
	else
		$message = 'Error! Possible email duplicate';
	
	header("location: ../index.php?page=editUser&message=$message");
}
else
	header('location: ../index.php');

?>