<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Contact';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('contact/index', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file Controllername.php */
