<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Event';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('event/index', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file Controllername.php */
