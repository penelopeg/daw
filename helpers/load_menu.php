<?php

// Get categories to load navegation bar
$categories = Product::get_categories();
$smarty->assign('product_categories', $categories);

// If user is logged in, display My Account link
if (isset($_SESSION['login'])) {
	$smarty->assign('usermenu',array('name' => 'MyAccount', 'href' => 'index.php?page=clientZone'));
}
else {
	$smarty->assign('usermenu','');
}

?>