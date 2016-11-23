<?php

class User {

	public function __construct() {

	}

	protected function get_user($id) {
		$res = select_query_assoc(
			'SELECT user_type_id, firstname, lastname, email, password FROM user WHERE id = ?', 
			array($id)
		);
		if (!empty($res)) {
			return $res[0];
		}
		else
			return array();
	}

	public function insert_user($user_type_id, $firstname, $lastname, $email, $password) {
		if (select_query_assoc('SELECT email FROM user WHERE email = ?', array($email))) {
			return "duplicated";
		}
		else {
			execute_query(
					'INSERT INTO user (user_type_id, firstname, lastname, email, password) VALUES (?, ?, ?, ?, ?)',
					array($user_type_id, $firstname, $lastname, $email, $password)
				);
			return last_insert_id();
		}
	}

	public function update_user($user_type_id, $id, $firstname, $lastname, $email, $password) {
			execute_query(
				'UPDATE user SET user_type_id = ?, firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?',
				array($user_type_id, $firstname, $lastname, $email, $password, $id)
			);
	}


	public function delete_user($id) {
		execute_query(
			'DELETE FROM user WHERE id = ?',
			array($id)
		);
	}

	public function get_users() {
		return select_query_assoc('SELECT * from users');
	}

	public function check_user($email, $password) {
		$res = select_query_assoc(
			'SELECT id, email FROM user WHERE email = ? AND password = ?', 
			array($email, $password)
		);
		if (!empty($res)) {
			return $res[0];
		}
		else {
			return false;
		}
	}

	public function get_user_types() {
		return select_query_assoc('SELECT * from user_type');
	}

}

?>