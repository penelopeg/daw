<?php

// Start session
session_start();

//Get all necessary requires
include('helpers/requires.php');

// Init smarty
$smarty = new Smarty();
$smarty->setTemplateDir('views/smarty/templates');
$smarty->setCompileDir('views/smarty/templates_c');
$smarty->setCacheDir('views/smarty/cache');
$smarty->setConfigDir('views/smarty/configs');

// Load menu
include('helpers/load_menu.php');

//Check if client is logged in, set sign in/sign off links
if(isset($_SESSION['login'])) {
	$smarty->assign('field1',array('name'=> "Logout", 'href' => 'index.php?page=logout'));
	$smarty->assign('user_id',$_SESSION['login']['id']);
	$smarty->assign('login',1);
}
else {
	$smarty->assign('field1',array('name'=> "Login", 'href' => 'index.php?page=login'));
	$smarty->assign('login',0);
}

//If there is an alert message, display it
$alert = isset($_GET['alert']) ? $_GET['alert'] : 'none';
$smarty->assign('alert', $alert);

//All pages always pass through index.php
if (isset($_GET['page'])) {	
	$page = $_GET['page'];
	switch ($page) {
		case 'login':
			// If client came from order and needs to login, we redirect back after logging in
			$redirect = isset($_GET['redirect']) ? "?redirect=" . $_GET['redirect'] : '';
			$smarty->assign('redirect', $redirect);
			$smarty->assign('field2',array('name'=> "Sign Up", 'href' => 'index.php?page=register'));
			$smarty->display('login.tpl');
			break;

		case 'logout':
			include('controllers/logout.php');
			break;
		
		case 'register':
			//If there is some information display it
			$firstname = isset($_GET['firstname']) ? $_GET['firstname'] : "";
			$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : "";
			$email = isset($_GET['email']) ? $_GET['email'] : "";
			
			$smarty->assign('firstname', $firstname);
			$smarty->assign('lastname', $lastname);
			$smarty->assign('email', $email);
			$smarty->display('register.tpl');
			break;
		
		case 'details':
			//Get product id to display its details
			if(isset($_GET['id'])) {
				$product_id = $_GET['id'];
				$product = Product::get_product($product_id);
				$smarty->assign('product', $product);
				$smarty->display('detail.tpl');
			}
			break;
		
		case 'shop':
			//If there is a category id only display products from that category
			if(isset($_GET['category_id'])) {
				$category_id = $_GET['category_id'];
			}
			include('controllers/shop.php');
			break;

		case 'cart':
			// We need to force location to be changed because cookie needs reload from browser to work
			header('location: cart.php');
			break;

		case 'order':
			// Load order form information
			include('controllers/order.php');
			break;

		case 'backoffice':
			// Head to backoffice
			header('location: backoffice/index.php');
			break;

		case 'clientZone':
			//If user clicked My Orders tab
			if (isset($_GET['sec'])) {
				$sec = $_GET['sec'];
			}
			include('controllers/clientZone.php');
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
	// If searching, get search key and open shop
	$search_key = $_GET['search'];
	include('controllers/shop.php');
}
else {
	//index code
	//Get last added products to show on index
	$products = Product::get_newest();
	$smarty->assign('products', $products);
	$smarty->display('index.tpl');
}

?>