<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Administrator';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/index');
		$this->load->view('templatee/footer');
	}
	public function about()
	{
		$data['title'] = 'Administrator About';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/about');
		$this->load->view('templatee/footer');
	}
	public function article()
	{
		$data['title'] = 'Administrator About';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/article');
		$this->load->view('templatee/footer');
	}
	public function home()
	{
		$data['title'] = 'Administrator Home';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/home');
		$this->load->view('templatee/footer');
	}
	public function news()
	{
		$data['title'] = 'Administrator News';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/news');
		$this->load->view('templatee/footer');
	}
	public function event()
	{
		$data['title'] = 'Administrator Event';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/event');
		$this->load->view('templatee/footer');
	}
	public function product()
	{
		$data['title'] = 'Administrator Product';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/product');
		$this->load->view('templatee/footer');
	}
	public function contact()
	{
		$data['title'] = 'Administrator Product';
		$this->load->view('templatee/header', $data);
		$this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('admin/contact');
		$this->load->view('templatee/footer');
	}
}

/* End of file Controllername.php */
