<?php

include('../db.php');
include('../functions.php');
require('../models/class.product.php');


$key = $_GET['key'];
$res = Product::get_products_search($key);
$suggestions = array();
foreach ($res as $row) {
	$suggestions[] = "<a href='index.php?page=details&id=".$row['id']."'>".$row['name']."</a>";
}

echo json_encode($suggestions);
?>