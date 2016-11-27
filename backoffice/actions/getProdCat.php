<?php

include('../../db.php');
include('../../functions.php');
require('../../models/class.product.php');

//Get product information
$id = $_GET['id'];

//Get product categories associated with product and send them to jquery to populate checkboxes
$cats = Product::get_prod_categories($id);
$result = array();
foreach ($cats as $row) {
	$result[] = $row['category_id'];
}
echo json_encode($result);
?>