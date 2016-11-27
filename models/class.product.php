<?php

class Product {

	public function __construct() {}

	// Add new product
	public function add_product($name, $description, $price, $image_url, $available) {
		execute_query(
			'INSERT INTO product (name, description, price, image_url, available) VALUES (?, ?, ?, ?, ?)',
			array($name, $description, $price, $image_url, $available)
		);
		return last_insert_id();
	}

	// Update product
	public function update_product($id, $name, $description, $price, $image_url, $available) {
		execute_query(
			'UPDATE product SET name = ?, description = ?, price = ?, image_url = ? , available = ? WHERE id = ?',
			array($name, $description, $price, $image_url, $available, $id)
		);
	}

	// Update product without updating image
	public function update_product_no_img($id, $name, $description, $price, $available) {
		execute_query(
			'UPDATE product SET name = ?, description = ?, price = ?, available = ? WHERE id = ?',
			array($name, $description, $price, $available, $id)
		);
	}

	// Add product categories to product
	public function add_category_2_product($product_id, $category_id) {
		if (empty(select_query_assoc ('SELECT product_id FROM product_2_categories WHERE product_id = ? AND category_id = ?', array($product_id, $category_id)))) {
			execute_query('INSERT INTO product_2_categories (product_id, category_id) VALUES (?, ?)', array($product_id, $category_id));
			return last_insert_id();
		}
		else {
			return false;
		}
	}

	// Remove product categories from product
	public function remove_category_2_product($product_id) {
		execute_query('DELETE FROM product_2_categories WHERE product_id = ?', array($product_id));
	}

	// Get product by id
	public function get_product($id) {
		return select_query_assoc('SELECT id, name, description, price, image_url, available FROM product WHERE id = ?', array($id))[0];
	}

	// Get all products or get products by category id
	public function get_products($category_id = 0) {
		if(!empty($category_id)) {
			return select_query_assoc('SELECT id, name, description, price, image_url, available FROM product, product_2_categories WHERE category_id = ? AND product_2_categories.product_id = product.id AND available = 1', array($category_id));
		}
		else {
			return select_query_assoc('SELECT id, name, description, price, image_url, available FROM product');
		}
	}

	// Get available products by search 
	public function get_products_search($key) {
		return select_query_assoc("SELECT id, name, description, price, image_url, available FROM product WHERE name like '%".$key."%' AND available = 1");
	}

	// get newest products for homepage
	public function get_newest($category_id = 0) {
		return select_query_assoc('SELECT id, name, description, price, image_url, available FROM product WHERE available = 1 ORDER BY id DESC LIMIT 4');
	}

	// get product categories
	public function get_categories() {
		return select_query_assoc('SELECT id, category FROM product_category');
	}

	//add categories
	public function add_category($name) {
		execute_query("INSERT INTO product_category (category) VALUES (?)", array($name));
		return last_insert_id();
	}

	// get categories from product 
	public function get_prod_categories($product_id) { 
		return select_query_assoc('SELECT category_id FROM product_2_categories WHERE product_id = ?', array($product_id)); }

}

?>