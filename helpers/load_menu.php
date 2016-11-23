<?php

$categories = Product::get_categories();
$smarty->assign('product_categories', $categories);

?>