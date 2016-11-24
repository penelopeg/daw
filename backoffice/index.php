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
		$page = $_GET['page'];
		$smarty->assign('page', $page);
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