<?php

// Check if admin or editor is logged in
session_start();
if(isset($_SESSION['admin']) || isset($_SESSION['editor'])) {

	include('../../db.php');
	include('../../functions.php');
	require('../../models/class.product.php');


	//Get post information to save
	$name = $_POST['name'];
	$price = $_POST['price'];
	$desc = $_POST['description'];
	$available = isset($_POST['available']) ? 1 : 0;
	$categories = isset($_POST['category']) ? array_keys($_POST['category']) : array();

	//Get uploaded file
	$allowedExts = array('jpeg', 'jpg', 'png');
	$temp = explode('.', $_FILES['img']['name']);
	$extension = end($temp);
	if ((($_FILES['img']['type'] == 'image/jpeg')
		|| ($_FILES['img']['type'] == 'image/jpg')
		|| ($_FILES['img']['type'] == 'image/pjpeg')
		|| ($_FILES['img']['type'] == 'image/x-png')
		|| ($_FILES['img']['type'] == 'image/png'))
		&& ($_FILES['img']['size'] < 5000000)
		&& in_array($extension, $allowedExts)
	){
		//Save image
		$url = (microtime(true).$_FILES['img']['name']);
		move_uploaded_file($_FILES['img']['tmp_name'], '../../imgs/'.$url);
		
		// Add product
		$product_id = Product::add_product($name,$desc,$price,$url,$available);
		
		// Add product categories to product
		foreach ($categories as $category) {
			Product::add_category_2_product($product_id, $category);
		}
		$message = 'Product added!';
		header("location: ../index.php?page=addProd&message=$message");    
	}
} else
	header('location: ../index.php');
?>