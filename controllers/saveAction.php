<?php

include('../db.php');
include('../functions.php');
require('../models/class.client.php');

if (isset($_POST)) {
	//Get saved information from client, if information is different from $_POST, save that information
	$client = Client::get_client($_POST['client_id']);
	$fields = array();
	if ($_POST['firstname'] != $client['firstname']) {
		$fields['firstname'] = $_POST['firstname'];
	}
	if ($_POST['lastname'] != $client['lastname']) {
		$fields['lastname'] = $_POST['lastname'];
	}
	if ($_POST['address'] != $client['address']) {
		$fields['address'] = $_POST['address'];
	}
	//New password field is not required to be filled, so we check if it isn't before verifying if we change it
	if (!empty($_POST['pwd']) && md5($_POST['pwd']) != $client['password']) {
		$fields['password'] = md5($_POST['pwd']);
	}
	if ($_POST['city'] != $client['city_id']) {
		$fields['city_id'] = $_POST['city'];
	}
	if ($_POST['country'] != $client['country_id']) {
		$fields['country_id'] = $_POST['country'];
	}
	if ($_POST['payment_info'] != $client['payment_info']) {
		$fields['payment_info'] = $_POST['payment_info'];
	}	

	Client::update_client_field($fields, $_POST['client_id']);
	header('location: ../index.php?page=clientZone');
}

?>