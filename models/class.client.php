<?php

class Client {
	public function __construct() {

	}

	public function get_client($id) {
		$res = select_query_assoc(
			'SELECT id, firstname, lastname, email, reg_date, password, address, city_id, country_id, payment_info FROM client WHERE id = ?', 
			array($id)
		);
		if (!empty($res)) {
			return $res[0];
		}
		else
			return array();
	}

	public function insert_client($firstname, $lastname, $email, $password) {
		if (select_query_assoc('SELECT email FROM client WHERE email = ?', array($email))) {
			return "duplicated";
		}
		else {
			execute_query(
					'INSERT INTO client (firstname, lastname, email, reg_date, password) VALUES (?, ?, ?, NOW(), ?)',
					array($firstname, $lastname, $email, $password)
				);
			return last_insert_id();
		}
	}

	public function update_client($id, $firstname, $lastname, $email, $password) {
			execute_query(
				'UPDATE client SET firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?',
				array($firstname, $lastname, $email, $password, $id)
			);
	}

	public function update_client_info($id, $address, $city_id, $country_id, $payment_info) {
		execute_query(
			'UPDATE client SET address = ?, city_id = ?, country_id = ?, payment_info = ? WHERE id = ?',
			array($address, $city_id, $country_id, $payment_info, $id)
		);
	}


	public function update_client_field($fields = array(), $client_id) {
		$query = 'UPDATE client SET ' .implode("= ?, ", array_keys($fields)) . '=? WHERE id = ?';
		$values = array();
		foreach ($fields as $field) {
			array_push($values, $field);
		}
		array_push($values, $client_id);
		execute_query($query, $values);
	}

	public function delete_client($id) {
		execute_query(
			'DELETE FROM client WHERE id = ?',
			array($id)
		);
	}

	public function get_clients() {
		return select_query_assoc('SELECT client.*, city.city_name, country.country_name FROM client, city, country WHERE client.city_id = city.id AND client.country_id = country.id');
	}

	public function check_client($email, $password) {
		$res = select_query_assoc(
			'SELECT id, email, firstname FROM client WHERE email = ? AND password = ?', 
			array($email, $password)
		);
		if (!empty($res)) {
			return $res[0];
		}
		else {
			return false;
		}
	}
}

?>