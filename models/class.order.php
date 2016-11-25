<?php

class Order {

	public function __construct() {
	}

	public function get_order($id) {
		$res = select_query_assoc(
			'SELECT id, client_id, order_date, status_id FROM orders WHERE id = ?', 
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

	public function get_orders($client_id = 0){
		//get orders of client
		if (!empty($client_id)) {
			$query1 = 'SELECT orders.id, client_id, order_date, status_id, order_status.status FROM orders, order_status WHERE client_id = ? AND order_status.id = status_id';
			$query_values = array($client_id);
		}
		//get all orders
		else {
			$query1 = 'SELECT orders.id, client_id, order_date, status_id, order_status.status FROM orders WHERE order_status.id = status_id';
			$query_values = array();

		}
		$res = select_query_assoc($query1, $query_values);
		$orders = array();
		foreach ($res as $row) {
			$products_data = select_query_assoc(
				'SELECT product_id, quantity, price_total, product.name, product.price FROM product_2_orders, product WHERE order_id = ? AND product.id = product_id', 
				array($row['id'])
			);
			$orders[] = array(
				"order" => $row,
				"products" => $products_data
			);
		}
		return $orders;
	}

	public function add_order($client_id, $status_id, $products = array()) {
		execute_query(
			"INSERT INTO orders (client_id, order_date, status_id) VALUES (?, NOW(), ?)",
			array($client_id, $status_id)
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

	public function change_order_status($order_id, $status_id) {
		execute_query(
			"UPDATE orders SET status_id = ? WHERE id = ?", 
			array($status_id, $order_id)
		);
	}
	
	public function delete($id) {
		execute_query('DELETE FROM product_2_orders WHERE order_id = ?', array($id));

		execute_query(
			'DELETE FROM orders WHERE id = ?',
			array($id)
		);
	}


	public function get_cities() {
		return select_query_assoc('SELECT id, city_name FROM city');
	}

	public function get_countries() {
		return select_query_assoc('SELECT id, country_name FROM country');
	}
}

?>