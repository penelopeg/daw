<?php

// Get product id
if (isset($_GET['id'])) {
	$idProduct = $_GET['id'];	
}

// If cookie is set, unset that product id from cookie and set it again
if(isset($_COOKIE['cart'])) {
		$data = json_decode($_COOKIE['cart'], true);
		if(array_key_exists($idProduct, $data))
			unset($data[$idProduct]);
}

setcookie('cart', json_encode($data), time()+3600, "/");

?>