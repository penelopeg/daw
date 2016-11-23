<?php

class Client {
	private $id;
	private $firstname;
	private $lastname;
	private $email;
	private $reg_date;
	private $password;
	private $address;
	private $city_id;
	private $country_id;
	private $payment_info;

	public function __construct() {

	}

	protected function get_client($id) {
		$res = select_query_assoc(
			'SELECT firstname, lastname, email, reg_date, password, address, city_id, country_id, payment_info FROM client WHERE id = ?', 
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
	public function delete_client($id) {
		execute_query(
			'DELETE FROM client WHERE id = ?',
			array($id)
		);
	}

	public function get_clients() {
		return select_query_assoc('SELECT * from clients');
	}

	public function check_client($email, $password) {
		$res = select_query_assoc(
			'SELECT id, email FROM client WHERE email = ? AND password = ?', 
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