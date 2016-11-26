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
	$pw = md5($_POST['password']);
	$role = $_POST['role'];

	if(User::insert_user($role, $fn, $ln, $em, $pw)=='duplicated')
		$message = 'User already exists!';
	else
		$message = 'User inserted!';

	header("location: ../index.php?page=addUser&message=$message");
}
else
	header('location: ../index.php');

?>