<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model');
		$this->load->helper('url_helper');
	}


	public function index()
	{
		$data['news'] = $this->News_model->GetBerita();
		$data['title'] = 'News';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$data['news_item'] = $this->News_model->GetBerita($slug);
		if (empty($data['news_item'])) {
			show_404();
		}

		$data['title'] = $data['news_item']['title'];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function Create()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Add New News';
			$this->load->view('templatee/header', $data);
			// $this->load->view('templatee/sidebar');
			$this->load->view('templatee/topbar');
			$this->load->view('news/create');
			$this->load->view('templatee/footer');
		} else {
			$config['upload_path'] = "./uploads/news/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('thumbnail')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>$error</div>");
				redirect('admin/news');
			} else {
				$upload_data = $this->upload->data();
				$data = [
					'title_berita'    => $this->input->post('title'),
					'content_berita'  => $this->input->post('content'),
					'date_berita'     => $this->input->post('date'),
					'thumbnail_berita' => $upload_data['file_name'],
					'slug_berita'     => $this->input->post('slug')
				];

				$this->News_model->InsertData('berita', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New news added</div>');
				redirect('admin/news');
			}
		}
	}

	public function Edit($id)
	{
		$data['title'] = 'Edit Menu';
		$data['user'] = $this->News_model->GetWhere('user', ['email' => $this->session->userdata('email')]);
		$data['news_data'] = $this->News_model->GetBeritaId('berita', $id);

		$data['title'] = 'Edit Data News ';
		$this->load->view('templatee/header', $data);
		// $this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('news/edit');
		$this->load->view('templatee/footer');
	}

	public function Update_news($id)
	{
		$this->form_validation->set_rules('title', 'Title', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->Edit($id);
		} else {
			// Handle new image upload
			$config['upload_path'] = "./uploads/news/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('thumbnail')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>$error</div>");
				redirect("admin/news/edit/$id");
			} else {
				$upload_data = $this->upload->data();
				$news_data = [
					'title_berita' => $this->input->post('title'),
					'content_berita' => $this->input->post('content'),
					'date_berita' => $this->input->post('date'),
					'thumbnail_berita' => $upload_data['file_name'],
					'slug_berita' => $this->input->post('slug')
				];

				$this->News_model->UpdateData('berita', $news_data, $id);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">News updated</div>');
				redirect('admin/news');
			}
		}
	}
}


/* End of file Controllername.php */
