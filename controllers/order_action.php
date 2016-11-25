<?php

include('../db.php');
include('../functions.php');
require('../models/class.order.php');
require('../models/class.product.php');

if (isset($_POST)) {
	$products = array();
	$n = count($_POST['id']);
	for ($i = 0; $i < $n; $i++) {
		$product = Product::get_product($_POST['id'][$i]);
		$products[] = array(
			'id' => $_POST['id'][$i],
			'quantity' => $_POST['quant'][$i],
			'price_total' => $_POST['quant'][$i] * $product['price']
		);
	}

	if(Order::add_order($_POST['client_id'], 1, $products)) {
		setcookie('cart', null, time()-3600, "/");
		unset($_COOKIE['cart']);
		header("location: ../index.php?page=shop&message=Your order was sent with success!");
	}
	else {
		//There was an error, please try later.
	}
}

?>