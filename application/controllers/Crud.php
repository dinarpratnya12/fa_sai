<?php

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user_models');
		$this->load->helper('url');
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));

	}

	function index(){
		$this->load->view('Header/headercrud');
		$data['tbl_users'] = $this->user_models->tampil_data()->result();
		$this->load->view('user_view',$data);
		$this->load->view('Header/footerfix');

	}

	function tambah(){
		// $this->load->view('add_view');
		$this->load->view('Header/headercrud');
		$data['tbl_users'] = $this->user_models->tampil_data()->result();

		$this->form_validation->set_rules('name', 'NAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('user_view',$data);
		}else{

			$data1['user_name'] = $this->input->post('name');
			$data1['user_email'] = $this->input->post('email');
			$data1['user_password'] = md5($this->input->post('password'));
			$data1['user_level'] = 2;

			$this->user_models->input_data($data1);

			$pesan['message'] = "Pendaftaran berhasil";

			redirect('Crud','refresh');
		}
		$this->load->view('Header/footerfix');
	}

	function edit($user_id){
		$user_id = $this->uri->segment(3);
		$data['query'] = $this->User_models->edit($user_id);
		$this->load->view('user_view', $data);
	}

	public function update()
	{
		$user_id = $this->input->post('user_id');
		$data = array(
			'user_name' => $this->input->post('user_name'),
			'user_email' => $this->input->post('user_email'),
			'user_password' => $this->input->post('user_password')
		);

		$proses = $this->User_models->update($user_id, $data);
		if (!$proses) {
			header('Location: user_view');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/index/')."'>Tampil data</a>";
		}
	}

	function hapus($user_id){
		$this->load->model('user_models');;
        $this->user_models->hapus($user_id);
        redirect('Crud','refresh');
    }
}