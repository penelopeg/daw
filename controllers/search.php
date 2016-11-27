<?php

include('../db.php');
include('../functions.php');
require('../models/class.product.php');

// Get key from search
$key = $_GET['key'];
// Search for products that match that key
$res = Product::get_products_search($key);

// Build an array with link suggestions and send it back to jquery
$suggestions = array();
foreach ($res as $row) {
	$suggestions[] = "<a href='index.php?page=details&id=".$row['id']."'>".$row['name']."</a>";
}

echo json_encode($suggestions);
?>