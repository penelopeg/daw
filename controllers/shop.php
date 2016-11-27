<?php

// If there is a category id we search for products from that category
if (isset($category_id)) {
	$products = Product::get_products($category_id);
	if (empty($products)) {
		$smarty->assign('noresults', 'There are no items with this category at the moment!');
	}
}
// If there is a search key we search for that key
elseif (isset($search_key)) {
	$products =  Product::get_products_search($search_key);
	if (empty($products)) {
		$smarty->assign('noresults', 'There are no items with this category at the moment!');
	}	
}
// Else get all products
else {
	$products = Product::get_products_search("");
}

$smarty->assign('products', $products);
$smarty->display('shop.tpl');

?>