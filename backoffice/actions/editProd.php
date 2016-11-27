<?php

//Check if admin or editor are logged in
session_start();
if (isset($_SESSION['admin']) || isset($_SESSION['editor'])) {
	include('../../db.php');
	include('../../functions.php');
	require('../../models/class.product.php');
	
	//Get product information	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$desc = $_POST['description'];
	$id = $_POST['id'];
	$available = (isset($_POST['available'])) ? 1 : 0;
	$categories = isset($_POST['category']) ? array_keys($_POST['category']) : array();
	
	//Check if upload file is right type and not corrupted
	if($_FILES["img"]["error"] == 0) {
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
			$temp = Product::get_product($id);
			unlink('../../imgs/'.$temp['image_url']);

			//Update product
			Product::update_product($id,$name,$desc,$price,$url,$available);
			// Update product categories to product
			Product::remove_category_2_product($id);
			foreach ($categories as $category) {
				Product::add_category_2_product($product_id, $category);
			}
			$message = 'Product updated!';   
		} else {
			$message = 'File type not supported!';
		} 			
	} else {
		//If no img is uploaded
		Product::remove_category_2_product($id);
		foreach ($categories as $category) {
			Product::add_category_2_product($id, $category);
		}		
		Product::update_product_no_img($id,$name,$desc,$price,$available);
		$message = 'Product updated!';
	}
	header("location: ../index.php?page=editProd&message=$message");
} else
	header('location: ../index.php');

?>