<?php

//Only admins can change order status
session_start();
if (isset($_SESSION['admin'])) {
	include('../../db.php');
	include('../../functions.php');
	require('../../models/class.order.php');

	//Get order id and status id
	if (isset($_GET['order_id'])) {
		$order_id = $_GET['order_id'];	
	}
	if (isset($_GET['status_id'])) {
		$status_id = $_GET['status_id'];	
	}

	//Change order status
	Order::change_order_status($order_id, $status_id);
}
?>