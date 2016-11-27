<?php

if (isset($_SESSION['login'])) {
	$products = array();
	$total = 0;
	$client = Client::get_client($_SESSION['login']['id']);

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

		$smarty->assign('client_id', $client['id']);
		$smarty->assign('firstname', $client['firstname']);
		$smarty->assign('lastname', $client['lastname']);
		$smarty->assign('email', $client['email']);
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
		echo "Nothing to order!";
		header("refresh:1;url=index.php?page=cart");
	}
}
else {
	header("location: index.php?page=login&redirect=1");
	//redirect to login (popup)
}

?>