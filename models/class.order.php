/*
CREATE TABLE orders (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
client_id INT(6),
order_date TIMESTAMP,
status_id INT(6),
FOREIGN KEY (status_id) REFERENCES order_status(id),
FOREIGN KEY (client_id) REFERENCES client(id)
);

CREATE TABLE product_2_orders (
order_id INT(6) NOT NULL,
product_id INT(6) NOT NULL,
quantity INT(100),
price_total INT (100),
FOREIGN KEY (order_id) REFERENCES orders(id),
FOREIGN KEY (product_id) REFERENCES product(id)
);

*/

<?php

class Order {
	private $id;
	private $client_id;
	private $order_date;
	private $status_id;
	private $products = array();

	public function __construct($id = null) {
		$this->id = $id;
		if(!is_null($this->id)) {
			$this->load();
		}
	}

	protected function load() {
		$res = select_query_assoc(
			'SELECT client_id, order_date, status_id FROM order WHERE id = ?', 
			array($this->id)
		);

		$products_data = select_query_assoc(
			'SELECT product_id, quantity, price_total FROM product_2_orders WHERE order_id = ?', 
			array($this->id)
		);

		if (!empty($res)) {
			foreach (array_keys($res[0]) as $row) {
				$this->$row = $res[0][$row];
			}
		}

		if (!empty($products_data)) {
			$product = array();
			foreach ($products_data as $row) {
				$product[$row['product_id']] = array(
					'product_id' => $row['product_id'],
					'quantity' => $row['quantity'],
					'price_total' => $row['price_total']
				);
			}
			$this->products = $product;
		}

	}
	public function save() {
		if (is_null($this->id)) {
			execute_query(
				'INSERT INTO order (client_id, order_date, status_id) VALUES (?, ?, ?)',
				array($this->client_id, $this->order_date, $this->status_id)
			);
			$this->id = last_insert_id();
			foreach ($this->products as $product) {
				execute_query(
					'INSERT INTO product_2_orders (order_id, product_id, quantity, price_total) VALUES (?, ?, ?, ?)', 
					array($this->id, $product['product_id'], $product['quantity'], $product['price_total']);
				);
			}
		}
		else {
			execute_query(
				'UPDATE order SET client_id = ?, order_date = ?, status_id = ? WHERE id = ?',
				array($this->client_id, $this->order_date, $this->status_id, $this->id)
			);

			foreach($this->products as $product) {
				if (
					!empty(select_query_num(
						'SELECT product_id FROM product_2_orders WHERE product_id = ? AND order_id = ?', 
						array($product['product_id'], $this->id)
					))
				) {
					execute_query(
						'UPDATE product_2_orders SET quantity = ?, price_total = ? WHERE product_id = ? AND order_id = ?',
						array($product['quantity'], $product['price_total'], $product['product_id'], $this->id)
					);
				}
				else {
					execute_query(
						'INSERT INTO product_2_orders (order_id, product_id, quantity, price_total) VALUES(?, ?, ?, ?)',
						array($this->id, $product['product_id'], $product['quantity'], $product['price_total'])
					);
				}
			}
			## delete product from orders
			// execute_query(
			// 	'DELETE FROM product_2_orders WHERE product_id = ? AND order_id = ?', 
			// 	array($product_id, $this->id)
			// );
		}
	}

	public function delete() {
		execute_query('DELETE FROM product_2_orders WHERE order_id = ?', array($this->id));

		execute_query(
			'DELETE FROM order WHERE id = ?',
			array($this->id)
		);
	}

	public function set_field($field, $value) {
		if ($field == 'products') {
			//
		}
		else {
			$this->$field = $value;
		}
	}

	public function get_field($field) {
		return $this->$field;
	}
}

?>