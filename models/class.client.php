<?php

class Client {
	public function __construct() {
	}

	// Get client by id
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

	// Insert new client on database
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

	//Update certain fields from client information
	public function update_client_field($fields = array(), $client_id) {
		$query = 'UPDATE client SET ' .implode("= ?, ", array_keys($fields)) . '=? WHERE id = ?';
		$values = array();
		foreach ($fields as $field) {
			array_push($values, $field);
		}
		array_push($values, $client_id);
		execute_query($query, $values);
	}

	// Delete client
	public function delete_client($id) {
		execute_query(
			'DELETE FROM client WHERE id = ?',
			array($id)
		);
	}

	// Get all clients
	public function get_clients() {
		return select_query_assoc('SELECT client.*, city.city_name, country.country_name FROM client, city, country WHERE client.city_id = city.id AND client.country_id = country.id');
	}

	// Check if client can log in
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