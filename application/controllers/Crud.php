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

		$data['tbl_users'] = $this->user_models->tampil_data()->result();
		$this->load->view('user_view',$data);

	}

	function tambah(){
		// $this->load->view('add_view');
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
	}

	function tambah_aksi(){
		$user_name = $this->input->post('nama');
		$user_email = $this->input->post('email');
		$user_password = $this->input->post('password');

		$data = array(
			'nama' => $user_name,
			'email' => $user_email,
			'password' => $user_password
			);
		$this->user_models->input_data($data,'tbl_users');
		redirect('crud/index');
	}

	function edit(){

		$data['tbl_users'] = $this->user_models->tampil_data()->result();
		$user_name = $this->input->post('nama');
		$user_email = $this->input->post('email');
		$user_password = $this->input->post('password');

		$this->user_models->edit($user_name,$user_email,$user_password);

		redirect('crud');
	}
}