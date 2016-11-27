<?php

class Order {

	public function __construct() {
	}

	//Get order by id, also get its products
	public function get_order($id) {
		$res = select_query_assoc(
			'SELECT id, client_id, order_date, status_id, total FROM orders WHERE id = ?', 
			array($id)
		);

		$products_data = select_query_assoc(
			'SELECT id, product_id, quantity, price_total FROM product_2_orders WHERE order_id = ?', 
			array($id)
		);

		$order = array(
			"order" => $res[0],
			"products" => $products_data
		);
		return $order;
	}

	// Get all orders, optionally by client id
	public function get_orders($client_id = 0){
		//get orders of client
		if (!empty($client_id)) {
			$query1 = 'SELECT orders.id, client_id, order_date, status_id, order_status.status, total FROM orders, order_status WHERE client_id = ? AND order_status.id = status_id ORDER BY order_date, orders.id';
			$query_values = array($client_id);
		}
		//get all orders
		else {
			$query1 = 'SELECT orders.id, client_id, order_date, status_id, order_status.status, total FROM orders, order_status WHERE order_status.id = status_id ORDER BY order_date, orders.id';
			$query_values = array();
		}

		$res = select_query_assoc($query1, $query_values);
		$orders = array();
		foreach ($res as $row) {
			$products_data = select_query_assoc(
				'SELECT product_id, quantity, price_total, product.name, product.price FROM product_2_orders, product WHERE order_id = ? AND product.id = product_id', 
				array($row['id'])
			);

			$client = select_query_assoc(
				"SELECT id, firstname, lastname, email FROM client WHERE id = ?",
				array($row['client_id'])
			)[0];

			$orders[] = array(
				"order" => $row,
				"products" => $products_data,
				"client" => $client
			);
		}
		return $orders;
	}

	//Add new order on database
	public function add_order($client_id, $total, $status_id, $products = array()) {
		execute_query(
			"INSERT INTO orders (client_id, order_date, status_id, total) VALUES (?, NOW(), ?, ?)",
			array($client_id, $status_id, $total)
		);
		$id = last_insert_id();
		if ($id = last_insert_id()) {
			foreach ($products as $product) {
				execute_query(
					'INSERT INTO product_2_orders (order_id, product_id, quantity, price_total) VALUES (?, ?, ?, ?)', 
					array($id, $product['id'], $product['quantity'], $product['price_total'])
				);
			}
			return true;
		}
		else {
			return false;
		}

	}

	// Change order status
	public function change_order_status($order_id, $status_id) {
		execute_query(
			"UPDATE orders SET status_id = ? WHERE id = ?", 
			array($status_id, $order_id)
		);
	}
	
	// Delete order
	public function delete($id) {
		execute_query('DELETE FROM product_2_orders WHERE order_id = ?', array($id));

		execute_query(
			'DELETE FROM orders WHERE id = ?',
			array($id)
		);
	}

	// Get list of cities
	public function get_cities() {
		return select_query_assoc('SELECT id, city_name FROM city');
	}

	// Get list of countries
	public function get_countries() {
		return select_query_assoc('SELECT id, country_name FROM country');
	}

	// Get possible status
	public function get_status() {
		return select_query_assoc('SELECT id, status FROM order_status');
	}
}

?>