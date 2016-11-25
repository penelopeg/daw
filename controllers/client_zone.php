<?php

if (isset($_SESSION['login'])) {
	$client = Client::get_client($_SESSION['login']['id']);
	$smarty->assign('client', $client);
	$cities = Order::get_cities();
	$countries = Order::get_countries();

	$smarty->assign('menu', array('option1' => array('title' =>'My Information', 'url' => 'index.php?page=client_zone'),'option2' => array('title' =>'My Orders', 'url' => 'index.php?page=client_zone&sec=2')));

	if (isset($sec)) {
		$smarty->assign('filename', 'my_orders.tpl');
		$orders = Order::get_orders($_SESSION['login']['id']);
		$smarty->assign('orders', $orders);
	}
	else {
		$smarty->assign('cities', $cities);
		$smarty->assign('countries', $countries);
		$smarty->assign('filename', 'my_info.tpl');
	}

	$smarty->display('client_zone.tpl');
}
?>