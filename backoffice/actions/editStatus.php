<?php

session_start();
if (isset($_SESSION['admin'])) {
	include('../../db.php');
	include('../../functions.php');
	require('../../models/class.order.php');

	if (isset($_GET['order_id'])) {
		$order_id = $_GET['order_id'];	
	}
	if (isset($_GET['status_id'])) {
		$status_id = $_GET['status_id'];	
	}

	if (isset($order_id) && isset($status_id)) {
		Order::change_order_status($order_id, $status_id);
	}
}
?>