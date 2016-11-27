<?php

class User {

	public function __construct() {

	}

	// Get user by id
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

	// insert new user on database
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

	// Update user by id
	public function update_user($user_type_id, $id, $firstname, $lastname, $email, $password) {
			execute_query(
				'UPDATE user SET user_type_id = ?, firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?',
				array($user_type_id, $firstname, $lastname, $email, $password, $id)
			);
	}

	// Update user by email since email is unique
	public function update_user_by_email($user_type_id, $firstname, $lastname, $email, $password, $oldEmail) {
		$result = execute_query(
			'UPDATE user SET user_type_id = ?, firstname = ?, lastname = ?, email = ?, password = ? WHERE email = ?',
			array($user_type_id, $firstname, $lastname, $email, $password, $oldEmail)
		);

		return $result;
	}

	// Delete user
	public function delete_user($id) {
		execute_query(
			'DELETE FROM user WHERE id = ?',
			array($id)
		);
	}

	// Get all users
	public function get_users() {
		return select_query_assoc('SELECT user.*, user_type.type from user, user_type WHERE user.user_type_id = user_type.id');
	}

	//Check if user can login
	public function check_user($email, $password) {
		$res = select_query_assoc(
			'SELECT user.id, email, type FROM user, user_type WHERE user.user_type_id = user_type.id AND email = ? AND password = ?', 
			array($email, $password)
		);
		if (!empty($res)) {
			return $res[0];
		}
		else {
			return false;
		}
	}

	// Get list of user types
	public function get_user_types() {
		return select_query_assoc('SELECT * from user_type');
	}

}

?>