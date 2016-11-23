<?php

if (isset($category_id)) {
	$products = Product::get_products($category_id);
	if (empty($products)) {
		$smarty->assign('noresults', 'There are no items with this category at the moment!');
	}
}
else {
	$products = Product::get_products();
}

	$smarty->assign('products', $products);
	$smarty->display('shop.tpl');

?>