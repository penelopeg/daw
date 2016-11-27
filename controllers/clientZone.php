<?php

// If client is logged in
if (isset($_SESSION['login'])) {

	//Get client information
	$client = Client::get_client($_SESSION['login']['id']);
	$smarty->assign('client', $client);

	//Assign variables for menu
	$smarty->assign('menu', array('option1' => array('title' =>'My Information', 'url' => 'index.php?page=clientZone'),'option2' => array('title' =>'My Orders', 'url' => 'index.php?page=clientZone&sec=2')));

	//Go to My Orders
	if (isset($sec)) {

		// Get client orders information
		$orders = Order::get_orders($_SESSION['login']['id']);
		$smarty->assign('orders', $orders);
		$smarty->assign('filename', 'my_orders.tpl');
	}
	//Go to My information by default
	else {
		// Get cities and countries
		$cities = Order::get_cities();
		$countries = Order::get_countries();
		$smarty->assign('cities', $cities);
		$smarty->assign('countries', $countries);
		$smarty->assign('filename', 'my_info.tpl');
	}

	// Display page
	$smarty->display('clientZone.tpl');
}
//If not logged in, redirect to index.php
else {
	header("location: index.php?alert=Not logged in!");
}

?>