<?php

$categories = Product::get_categories();
$smarty->assign('product_categories', $categories);
if (isset($_SESSION['login'])) {
	$smarty->assign('usermenu',array('name' => 'MyAccount', 'href' => 'index.php?page=client_zone'));
}
else {
	$smarty->assign('usermenu','');
}

?>