<?php

session_start();
include('helpers/requires.php');
$smarty = new Smarty();

$smarty->setTemplateDir('views/smarty/templates');
$smarty->setCompileDir('views/smarty/templates_c');
$smarty->setCacheDir('views/smarty/cache');
$smarty->setConfigDir('views/smarty/configs');

include('helpers/load_menu.php');
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

if (isset($_GET['page'])) {	
	$page = $_GET['page'];
	switch ($page) {
		case 'login':
			$redirect = "";
			if(isset($_GET['redirect'])) {
				$redirect = "?redirect=" . $_GET['redirect'];
			}
			include('controllers/login.php');
			break;
		case 'logout':
			include('controllers/logout.php');
			break;
		case 'register':
			if(isset($_GET['alert']))
			{
				$firstname = $_GET['firstname'];
				$lastname = $_GET['lastname'];
				$email = $_GET['email'];
				$message = $_GET['message'];
				$class = $_GET['class'];
			}
			else {
				$firstname = "";
				$lastname = "";
				$email = "";
				$message = "";
				$class = "";
			}
			include('controllers/register.php');
			break;
		case 'details':
			if(isset($_GET['id'])) {
				$product_id = $_GET['id'];
				include('controllers/details.php');
			}
			break;
		case 'shop':
			if(isset($_GET['category_id'])) {
				$category_id = $_GET['category_id'];
			}
			include('controllers/shop.php');
			break;

		case 'cart':
			header('location: cart.php');
			break;

		case 'order':
			include('controllers/order.php');
			break;

		case 'backoffice':
			header('location: backoffice/index.php');
			break;

		case 'client_zone':
			if (isset($_GET['sec'])) {
				$sec = $_GET['sec'];
			}
			include('controllers/client_zone.php');
			break;
	}
}
elseif (isset($_GET['search'])) {
	$search_key = $_GET['search'];
	include('controllers/shop.php');
}
else {
	//index code
	$products = Product::get_newest();
	$smarty->assign('products', $products);
	$smarty->display('index.tpl');
}

?>