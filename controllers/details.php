<?php

if (isset($product_id)) {
	$product = Product::get_product($product_id);
	$smarty->assign('product', $product);
	$smarty->display('detail.tpl');
}

?>