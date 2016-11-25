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


	if (isset($_SESSION['login'])) {
		$client = Client::get_client($_SESSION['login']['id']);
	}
	else {
		echo "not logged in";
		//redirect to login (popup)
	}

	$smarty->assign('client_id', $client['id']);
	$smarty->assign('firstname', $client['firstname']);
	$smarty->assign('lastname', $client['lastname']);
	$smarty->assign('address', $client['address']);
	$smarty->assign('city_id', $client['city_id']);
	$smarty->assign('country_id', $client['country_id']);
	$smarty->assign('payment_info', $client['payment_info']);

	$cities = Order::get_cities();
	$countries = Order::get_countries();
	$smarty->assign('cities', $cities);
	$smarty->assign('countries', $countries);

	$smarty->assign('products', $products);
	$smarty->assign('total', $total);

	$smarty->display("order_form.tpl");
}
else {
	//nothing to order, go back to cart

}




?>