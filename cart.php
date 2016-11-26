<?php
include('db.php');
include('functions.php');
require('libs/Smarty.class.php');
require('models/class.product.php');
$smarty = new Smarty();

$smarty->setTemplateDir('views/smarty/templates');
$smarty->setCompileDir('views/smarty/templates_c');
$smarty->setCacheDir('views/smarty/cache');
$smarty->setConfigDir('views/smarty/configs');
include('helpers/load_menu.php');
session_start();
if(isset($_SESSION['login'])) {
	$smarty->assign('field1',array('name'=> "Logout", 'href' => 'index.php?page=logout'));
	$smarty->assign('user_id',$_SESSION['login']['id']);
	$smarty->assign('login',1);
}
else {
	$smarty->assign('field1',array('name'=> "Login", 'href' => 'index.php?page=login'));
	$smarty->assign('login',0);
}

$alert = isset($_GET['alert']) ? $_GET['alert'] : 'none';
$smarty->assign('alert', $alert);

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
}
	$smarty->assign('products', $products);
	$smarty->assign('total', $total);

$smarty->display('cart.tpl');

?>