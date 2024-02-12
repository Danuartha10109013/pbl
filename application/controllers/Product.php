<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Product';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('product/index', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file Controllername.php */
