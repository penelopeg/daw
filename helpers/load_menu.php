<?php

$categories = Product::get_categories();
$smarty->assign('product_categories', $categories);
if (isset($_SESSION['login'])) {
	$smarty->assign('usermenu',array('name' => 'My Account', 'href' => 'index.php?page=user'));
}
else {
	$smarty->assign('usermenu','');
}

?>