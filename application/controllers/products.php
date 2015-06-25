<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		////Load view file here////
		$this->load->model('Product');
		$view_products = $this->Product->get_all_products();
		$this->load->view('products', array(
			'products' => $view_products
			));
	}

	public function new_product()
	{
		$this->load->view('new');
	}
	public function add_new_product()
	{
		$this->load->model('product');
		$this->product->add_new_product($this->input->post());
		redirect("/");
	}
	public function show($id)
	{
		$this->load->model('product');
		// $this->product->show($id);

		$this->load->view('show', array(
			'product' => $this->product->show($id)
			));
	}
	public function edit($id)
	{
		$this->load->model('product');
		$this->load->view('edit', array(
			'product' => $this->product->edit($id)
			));
	}
	public function update($id)
	{
		$this->load->model('product');
		$this->product->update($this->input->post(), $id);
		redirect("/");
	}
	public function remove($id)
	{
		$this->load->model('product');
		$this->product->remove($id);
		redirect('/');
	}

}

//end of main controller

