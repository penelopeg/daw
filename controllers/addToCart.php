<?php

// Get product id and quantity
if (isset($_GET['id'])) {
	$idProduct = $_GET['id'];	
}
if (isset($_GET['quant'])) {
	$quantity = $_GET['quant'];	
}

if (isset($idProduct) && isset($quantity)) {
	// If cookie is set
	if(isset($_COOKIE['cart'])) {
		//decode data so we can manipulate it
		$data = json_decode($_COOKIE['cart'], true);

		//if id product already exists, add quantity to that product
		if(array_key_exists($idProduct, $data))
			$data[$idProduct] = $data[$idProduct] + $quantity;
		// else set product and quantity
		else
			$data[$idProduct] = $quantity;
	}
	// else set data array with product and quantity
	else {
		$data = array($idProduct => $quantity);
	}
	//encode data and set cookie
	setcookie('cart', json_encode($data), time()+3600, "/");
	echo "Added to cart";
}

?>