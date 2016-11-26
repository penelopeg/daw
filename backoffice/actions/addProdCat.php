<?php

// Check if user is logged in
session_start();
if(isset($_SESSION['admin']) || isset($_SESSION['editor'])) {
	include('../../db.php');
	include('../../functions.php');
	require('../../models/class.product.php');

	$name = $_POST['name'];
	Product::add_category($name);
	$message = 'Product Category added!';
	header("location: ../index.php?page=addProdCat&message=$message"); 
} else
	header('location: ../index.php');

?>