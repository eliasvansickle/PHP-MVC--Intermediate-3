<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function add_new_product($products)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) 
		VALUES (?, ?, ?, NOW(), NOW())"; 
		$values = array(
			"{$products['name']}",
			"{$products['description']}",
			"{$products['price']}"
			);
		$this->db->query($query, $values);
	}
	public function get_all_products() 
	{
		$query = "SELECT * FROM products ORDER BY products.id DESC";
		return $this->db->query($query)->result_array();
	}
	public function show($id)
	{
		$query = "SELECT * FROM products WHERE products.id = ?";
		$value = $id;
		return $this->db->query($query, $value)->row_array();
	}
	public function edit($id)
	{
		$query = "SELECT * FROM products WHERE products.id = ?";
		$value = $id;
		return $this->db->query($query, $value)->row_array();
	}
	public function update($post, $id)
	{
		$query = "UPDATE products SET name = ?, description = ?, price = ?, updated_at = NOW() WHERE products.id = ?";
		$values = array(
			$post['name'],
			$post['description'],
			$post['price'],
			$id
			);
		$this->db->query($query, $values);
	}
	public function remove($id)
	{
		$query = "DELETE FROM products WHERE products.id = ?";
		$value = $id;
		$this->db->query($query, $value);
	}

}

//end of main controller

