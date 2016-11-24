<?php

$products = array();
$total = 0;
if(isset($_COOKIE['cart'])) {
	$data = json_decode($_COOKIE['cart'], true);

	foreach ($data as $id => $quantity) {
		$product = Product::get_product($id);
		$products[] = array(
			'name' => $product['name'],
			'id' => $product['id'],
			'image_url' => $product['image_url'],
			'price' => $product['price'],
			'quantity' => $quantity,
			'total' => $product['price'] * $quantity
		);
		$total += $product['price'] * $quantity; 
	}
}




?>