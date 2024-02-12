<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

	public function index()
	{

		$data['title'] = 'Article';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('article/index');
		$this->load->view('templates/footer');
	}

	public function Add()
	{
		$this->form_validation->set_rules('title', 'title', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = 'Add New Article';
			$this->load->view('templatee/header', $data);
			// $this->load->view('templatee/sidebar');
			$this->load->view('templatee/topbar');
			$this->load->view('article/add');
			$this->load->view('templatee/footer');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'contens' => $this->input->post('contens'),
				'img' => $this->input->post('image'),
				'link' => $this->input->post('link'),
				'created_at' => $this->input->post('date_created')
			];
			$this->db->insert('article', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		New Article added</div>');
			redirect('admin/article');
		}
	}

	// Controller: Article.php

	public function edit_article($id)
	{
		$data['title'] = 'Edit Menu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['article_data'] = $this->db->get_where('article', ['id' => $id])->row_array();

		$data['title'] = 'Add New Article';
		$this->load->view('templatee/header', $data);
		// $this->load->view('templatee/sidebar');
		$this->load->view('templatee/topbar');
		$this->load->view('article/add');
		$this->load->view('templatee/footer');
	}
	public function update_article($id)
	{
		$this->form_validation->set_rules('title', 'Title', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->edit_menu($id); // Show the edit form with validation errors
		} else {
			// Update the menu data
			$article_data = [
				'title' => $this->input->post('title'),
				'contens' => $this->input->post('contens'),
				'img' => $this->input->post('image'),
				'link' => $this->input->post('link'),
				'created_at' => $this->input->post('date_created')
			];

			$this->db->update('article', $article_data, ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated</div>');
			redirect('admin/article');
		}
	}

	// Other controller functions...

}


/* End of file Controllername.php */
