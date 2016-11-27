<?php

//Only admins can add users
session_start();
if(isset($_SESSION['admin'])) {
	include('../../db.php');
	include('../../functions.php');		
	require('../../models/class.user.php');

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$pwd = md5($_POST['password']);
	$role = $_POST['role'];

	// Insert user
	if(User::insert_user($role, $firstname, $lastname, $email, $pwd)=='duplicated')
		$message = 'User already exists!';
	else
		$message = 'User inserted!';

	header("location: ../index.php?page=addUser&message=$message");
}
else
	header('location: ../index.php');

?>