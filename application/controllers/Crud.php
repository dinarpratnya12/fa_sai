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

		$this->load->view('Header/headercrud');
		$data['tbl_users'] = $this->user_models->tampil_data()->result();

		$this->form_validation->set_rules('name', 'NAME','required');
		$this->form_validation->set_rules('username','USERNAME','required|is_unique[tbl_users.user_username]');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('user_view',$data);
		}else{

			$data1['user_name'] = $this->input->post('name');
			$data1['user_username'] = $this->input->post('username');
			$data1['user_password'] = md5($this->input->post('password'));
			$data1['user_level'] = 2;

			$this->user_models->input_data($data1);

			$this->session->set_flashdata('swal','Success|Successful Add User|success');
			redirect('Crud','refresh');
		}
		$this->load->view('Header/footerfix');
	}

	function edit(){
            $data= array(
				"user_name"=>$_POST['name'],
				"user_username"=>$_POST['username'],
				"user_password" =>md5($_POST['password'])

			);
			$where = array(
				"user_id"=>$_POST['user_id'],
			);
			$this->user_models->edit($data,$where);

            $this->session->set_flashdata('swal','Success|Successful Edit User|success');
            redirect('Crud','refresh');
	}

	function hapus($user_id){
		$this->load->model('user_models');;
		$this->user_models->hapus($user_id);
		$this->session->set_flashdata('swal');
		$this->session->set_flashdata('swal','Success|Successful Delete User|success');
        redirect('Crud','refresh');
    }
}