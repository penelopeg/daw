<?php

// All necessary include files
include('../db.php');
include('../functions.php');
require('../libs/Smarty.class.php');
require('../models/class.product.php');
require('../models/class.client.php');
require('../models/class.user.php');
require('../models/class.order.php');

// Init smarty
$smarty = new Smarty;
$smarty->setTemplateDir('../views/smarty/templates');
$smarty->setCompileDir('../views/smarty//templates_c');
$smarty->setCacheDir('../views/smarty/cache');
$smarty->setConfigDir('../views/smarty/configs');

// Start session
session_start();

// Check if there is admin or editor logged in
if(isset($_SESSION['admin']) || isset($_SESSION['editor'])) {	
	$user = isset($_SESSION['admin']) ? 'admin' : 'editor';

	// Check if there is a message to be displayed
	$message = isset($_GET['message']) ? $_GET['message'] : 'none';
	
	// Get page
	$page = isset($_GET['page']) ? $_GET['page'] :'index';

	$smarty->assign('email', $_SESSION[$user]);
	$smarty->assign('page', $page);
	$smarty->assign('message', $message);
	$smarty->assign('user', $user);

	//Some pages need information, assign that information to smarty to be displayed
	switch ($page) {
		case 'addProd':
			$cats = Product::get_categories();
			$smarty->assign('cats', $cats);
			break;

		case 'editProd':
			$prods = Product::get_products();
			$smarty->assign('prods', $prods);
			$cats = Product::get_categories();
			$smarty->assign('cats', $cats);
			break;

		case 'clients':
			$clients = Client::get_clients();
			$smarty->assign('clients', $clients);
			break;

		case 'editUser':
			$users = User::get_users();
			$smarty->assign('users', $users);
			break;			

		case 'remUser':
			$users = User::get_users();
			$smarty->assign('users', $users);
			break;

		case 'orders':
			$orders = Order::get_orders();
			$status = Order::get_status();
			$smarty->assign('status', $status);
			$smarty->assign('orders', $orders);
			break;	

		default:
			break;
	}

	// Display header, body and footer
	$smarty->display('backoffice/head.tpl');		
	$smarty->display('backoffice/'.$page.'.tpl');
	$smarty->display('backoffice/footer.tpl');
}
else {
	// Login
	if(isset($_GET['message'])) {
		$smarty->assign('message', $_GET['message']);
		$smarty->assign('class', $_GET['class']);
	}
	$smarty->display('backoffice/login.tpl');
}

?>