<?php
	include('../db.php');
	include('../functions.php');
	require('../libs/Smarty.class.php');
	require('../models/class.product.php');
	require('../models/class.client.php');
	require('../models/class.user.php');
	require('../models/class.order.php');

	$smarty = new Smarty;
	$smarty->setTemplateDir('../views/smarty/templates');
	$smarty->setCompileDir('../views/smarty//templates_c');
	$smarty->setCacheDir('../views/smarty/cache');
	$smarty->setConfigDir('../views/smarty/configs');
	session_start();
	if(isset($_SESSION['admin']) || isset($_SESSION['editor']))
	{	
		$user = 'editor';
		if(isset($_SESSION['admin']))
			$user = 'admin';

		$message = 'none';
		$page = 'index';
		if(isset($_GET['message']))
			$message = $_GET['message'];
		if(isset($_GET['page']))
			$page = $_GET['page'];
		$smarty->assign('email', $_SESSION[$user]);
		$smarty->assign('page', $page);
		$smarty->assign('message', $message);
		$smarty->assign('user', $user);
		switch ($page)
		{
			case 'editProd':
				$prods = Product::get_products();
				$smarty->assign('prods', $prods);
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
			default:
				# code...
				break;
		}

		$smarty->display('backoffice/head.tpl');		
		$smarty->display('backoffice/'.$page.'.tpl');
		$smarty->display('backoffice/footer.tpl');
	}
	else
	{
		if(isset($_GET['message']))
		{
			$smarty->assign('message', $_GET['message']);
			$smarty->assign('class', $_GET['class']);
		}
		$smarty->display('backoffice/login.tpl');
	}
?>