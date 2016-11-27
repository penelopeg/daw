<?php

// Get product id and quantity
if (isset($_GET['id'])) {
	$idProduct = $_GET['id'];	
}
if (isset($_GET['quant'])) {
	$quantity = $_GET['quant'];	
}

if (isset($idProduct) && isset($quantity)) {
	// If cookie is set, check if the product is on cart, if it is, replace quantity
	if(isset($_COOKIE['cart'])) {
		$data = json_decode($_COOKIE['cart'], true);
		if(array_key_exists($idProduct, $data))
			$data[$idProduct] = $quantity;
	
		setcookie('cart', json_encode($data), time()+3600, "/");
		echo "Added to cart";
	}
}

?>