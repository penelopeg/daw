<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
		include('../../db.php');
		include('../../functions.php');
		require('../../models/class.product.php');

		$name = $_POST['name'];
		$price = $_POST['price'];
		$desc = $_POST['description'];

        $allowedExts = array('jpeg', 'jpg', 'png');
        $temp = explode('.', $_FILES['img']['name']);
        $extension = end($temp);
        if ((($_FILES['img']['type'] == 'image/jpeg')
        || ($_FILES['img']['type'] == 'image/jpg')
        || ($_FILES['img']['type'] == 'image/pjpeg')
        || ($_FILES['img']['type'] == 'image/x-png')
        || ($_FILES['img']['type'] == 'image/png'))
        && ($_FILES['img']['size'] < 5000000)
        && in_array($extension, $allowedExts))
        {
            $url = (microtime(true).$_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], '../../imgs/'.$url);
            Product::add_product($name,$desc,$price,$url);
            $message = 'Product added!';
            header("location: ../index.php?page=addProd&message=$message");    
        }  
    }else
        header('location: ../index.php');
?>