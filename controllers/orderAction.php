<?php

include('../db.php');
include('../functions.php');
require('../models/class.order.php');
require('../models/class.product.php');
require('../models/class.client.php');

if (isset($_POST)) {

	//Get saved information from client
	$client = Client::get_client($_POST['client_id']);
	$fields = array();

	//If information is different, update client information
	if ($_POST['firstname'] != $client['firstname']) {
		$fields['firstname'] = $_POST['firstname'];
	}
	if ($_POST['lastname'] != $client['lastname']) {
		$fields['lastname'] = $_POST['lastname'];
	}
	if ($_POST['address'] != $client['address']) {
		$fields['address'] = $_POST['address'];
	}
	if ($_POST['city'] != $client['city_id']) {
		$fields['city_id'] = $_POST['city'];
	}
	if ($_POST['country'] != $client['country_id']) {
		$fields['country_id'] = $_POST['country'];
	}
	if ($_POST['payment_info'] != $client['payment_info']) {
		$fields['payment_info'] = $_POST['payment_info'];
	}
	Client::update_client_field($fields, $_POST['client_id']);


	// Get price information from products and build variable
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

	// Create order
	if($order_id = Order::add_order($_POST['client_id'], $total, 1, $products)) {
		// If order was successful, destroy cart cookie
		setcookie('cart', null, time()-3600, "/");
		unset($_COOKIE['cart']);

		// Send email informing about order
		$title = "Order Ref. {$order_id}";
		$message = "Hi {$_POST['firstname']}, your order was sent out! You can track it on 'My Account' tab. Order total was: {$total} €";
		mail($_POST['email'], $title, $message);

		// Inform user order was sent and redirect to shop
		header("location: ../index.php?page=shop&alert=Your order was sent with success!");
	}
	else {
		// Inform user there was an error
		header("location: ../index.php?page=cart&alert=There was an error sending your order, please try again!");
	}
}

?>