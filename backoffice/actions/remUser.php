<?php

// Only admins can delete with users
session_start();
if(isset($_SESSION['admin'])) {
	include('../../db.php');
	include('../../functions.php');		
	require('../../models/class.user.php');		
	$id = $_GET['id'];
	User::delete_user($id);
	$message = 'User deleted!';

	header("location: ../index.php?page=remUser&message=$message");
}
else
	header('location: ../index.php');	
?>