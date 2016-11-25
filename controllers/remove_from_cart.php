<?php

if (isset($_GET['id'])) {
	$idProduct = $_GET['id'];	
}

if(isset($_COOKIE['cart'])) {
		$data = json_decode($_COOKIE['cart'], true);
		if(array_key_exists($idProduct, $data))
			unset($data[$idProduct]);
}

setcookie('cart', json_encode($data), time()+3600, "/");

?>