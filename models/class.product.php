<?php

class Product {

	public function __construct() {

	}

	public function add_product($name, $description, $price, $image_url) {
			execute_query(
				'INSERT INTO product (name, description, price, image_url) VALUES (?, ?, ?, ?)',
				array($name, $description, $price, $image_url)
			);
			return last_insert_id();

	}

	public function update_product($id, $name, $description, $price, $image_url) {
		execute_query(
			'UPDATE product SET name = ?, description = ?, price = ?, $image_url WHERE id = ?',
			array($name, $description, $price, $image_url, $id)
		);
	}

	public function add_category_2_product($product_id, $category_id) {
		if (empty(select_query_assoc ('SELECT id FROM product_2_categories WHERE product_id = ? AND category_id = ?', array($product_id, $category_id)))) {
			execute_query('INSERT INTO product_2_categories (product_id, category_id) VALUES (?, ?)', array($product_id, $category_id));
			return last_insert_id();
		}
		else {
			return false;
		}
	}

	public function remove_category_2_product($product_id, $category_id) {
		execute_query('DELETE FROM product_2_categories WHERE product_id = ? AND category_id = ?', array($product_id, $category_id));
	}


	public function delete($id) {
		execute_query('DELETE FROM product_2_categories WHERE product_id = ?', array($id));

		execute_query(
			'DELETE FROM product WHERE id = ?',
			array($id)
		);
	}

	public function get_product($id) {
		return select_query_assoc('SELECT id, name, description, price, image_url FROM product WHERE id = ?', array($id))[0];
	}

	public function get_products($category_id = 0) {
		if(!empty($category_id)) {
			return select_query_assoc('SELECT id, name, description, price, image_url FROM product, product_2_categories WHERE category_id = ? AND product_2_categories.product_id = product.id', array($category_id));
		}
		else {
			return select_query_assoc('SELECT id, name, description, price, image_url FROM product');
		}
	}

	public function get_categories() {
		return select_query_assoc('SELECT id, category FROM product_category');
	}

	//add categories
	//remove categories
	
}

?>