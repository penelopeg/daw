<?php


include('helpers/requires.php');
$smarty = new Smarty();

$smarty->setTemplateDir('views/smarty/templates');
$smarty->setCompileDir('views/smarty//templates_c');
$smarty->setCacheDir('views/smarty/cache');
$smarty->setConfigDir('views/smarty/configs');

include('helpers/load_menu.php');
if (isset($_GET['page'])) {
	if(isset($_SESSION['login'])) {
		$smarty->assign('field1',array('name'=> "Logout", 'href' => 'index.php?page=logout'));
		$smarty->assign('user_id',$_SESSION['login']['id']);
		$smarty->assign('login',1);
	}
	else {
		$smarty->assign('field1',array('name'=> "Login", 'href' => 'index.php?page=login'));
		$smarty->assign('login',0);
	}
	
	$page = $_GET['page'];
	switch ($page) {
		case 'login':
			include('controllers/login.php');
			break;
		case 'logout':
			include('controllers/logout.php');
			break;
		case 'register':
			if(isset($_GET['message']))
			{
				$firstname = $_GET['firstname'];
				$lastname = $_GET['lastname'];
				$email = $_GET['email'];
				$message = $_GET['message'];
			}
			else {
				$firstname = "";
				$lastname = "";
				$email = "";
				$message = "";
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

		case 'shoppingcart':
			break;

		case 'order':
			break;

		case 'backoffice':
			break;
	}
}
else {
	//index code
	$products = Product::get_products();
	$smarty->assign('products', $products);

	session_start();
	if(isset($_SESSION['login']))
	{
		$smarty->assign('field1',array('name'=> "Logout", 'href' => 'index.php?page=logout'));
		$smarty->assign('user_id',$_SESSION['login']['id']);
		$smarty->assign('login',1);
	}
	else
	{
		$smarty->assign('field1',array('name'=> "Login", 'href' => 'index.php?page=login'));
		$smarty->assign('login',0);
	}
	$smarty->display('index.tpl');
}

?>