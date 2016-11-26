<?php

if (isset($category_id)) {
	$products = Product::get_products($category_id);
	if (empty($products)) {
		$smarty->assign('noresults', 'There are no items with this category at the moment!');
	}
}
elseif (isset($search_key)) {
	$products =  Product::get_products_search($search_key);
	if (empty($products)) {
		$smarty->assign('noresults', 'There are no items with this category at the moment!');
	}	
}
else {
	$products = Product::get_products_search("");
}

$smarty->assign('products', $products);
$smarty->display('shop.tpl');

?>