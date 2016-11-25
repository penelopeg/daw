<?php

include('../db.php');
include('../functions.php');
require('../models/class.order.php');
require('../models/class.product.php');

//Array ( [firstname] => teste [lastname] => teste [address] => Rua do Teste [city] => 1 [country] => 1 [payment_info] => 324-32123-432 
//[quant] => Array ( [0] => 1 [1] => 1 [2] => 1 ) 
//[id] => Array ( [0] => 1 [1] => 2 [2] => 3 ) ) 
//client_id


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