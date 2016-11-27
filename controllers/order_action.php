<?php

include('../db.php');
include('../functions.php');
require('../models/class.order.php');
require('../models/class.product.php');

if (isset($_POST)) {
	$products = array();
	$n = count($_POST['id']);
	$total = 0;
	for ($i = 0; $i < $n; $i++) {
		$product = Product::get_product($_POST['id'][$i]);
		$products[] = array(
			'id' => $_POST['id'][$i],
			'quantity' => $_POST['quant'][$i],
			'price_total' => $_POST['quant'][$i] * $product['price']
		);
		$total +=  $_POST['quant'][$i] * $product['price'];
	}

	if($order_id = Order::add_order($_POST['client_id'], $total, 1, $products)) {
		setcookie('cart', null, time()-3600, "/");
		unset($_COOKIE['cart']);

		//Send email informing about order
		$title = "Order Ref. {$order_id}";
		$message = "Hi {$_POST['firstname']}, your order was sent out! You can track it on 'My Account' tab. Order total was = {$total} €";
		mail($_POST['email'], $title, $message);
		
		header("location: ../index.php?page=shop&alert=Your order was sent with success!");
	}
	else {
		//There was an error, please try later.
	}
}


?>