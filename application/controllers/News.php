<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'News';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file Controllername.php */
