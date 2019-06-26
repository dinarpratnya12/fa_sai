<?php

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user_models');
                $this->load->helper('url');
	}

	function index(){
		$data['tbl_users'] = $this->user_models->tampil_data()->result();
		$this->load->view('user_view',$data);
	}

	function tambah(){
		$this->load->view('user_view');
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
}