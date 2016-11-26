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
			$redirect = isset($_GET['redirect']) ? "?redirect=" . $_GET['redirect'] : '';
			$smarty->assign('redirect', $redirect);
			$smarty->assign('field2',array('name'=> "Sign Up", 'href' => 'index.php?page=register'));
			$smarty->display('login.tpl');
			break;
		case 'logout':
			include('controllers/logout.php');
			break;
		case 'register':
			$firstname = isset($_GET['firstname']) ? $_GET['firstname'] : "";
			$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : "";
			$email = isset($_GET['email']) ? $_GET['email'] : "";
			
			$smarty->assign('firstname', $firstname);
			$smarty->assign('lastname', $lastname);
			$smarty->assign('email', $email);
			$smarty->display('register.tpl');
			break;
		case 'details':
			if(isset($_GET['id'])) {
				$product_id = $_GET['id'];
				$product = Product::get_product($product_id);
				$smarty->assign('product', $product);
				$smarty->display('detail.tpl');
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

		case 'about':
		$smarty->display('about.tpl');
			break;

		case 'contact':
			break;

		default:
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