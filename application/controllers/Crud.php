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

			// $pesan['message'] = "Pendaftaran berhasil";

			$this->session->set_flashdata('swal','Success|Successful Add User|success');
			redirect('Crud','refresh');
		}
		$this->load->view('Header/footerfix');
	}

	function edit($user_id){
		$this->form_validation->set_rules('user_id', 'NAME', 'required');
		$this->form_validation->set_rules('user_name', 'EMAIL', 'required|valid_email');
		$this->form_validation->set_rules('user_password', 'PASSWOARD', 'required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('Modal');
        }else{
            $data=array(
                "user_name"=>$_POST['user_name'],
            );
            $this->db->where('user_id', $_POST['user_id']);
            $this->db->update('tbl_users',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('Modal');
		}
	}

	function hapus($user_id){
		$this->load->model('user_models');;
		$this->user_models->hapus($user_id);
		$this->session->set_flashdata('swal');
        redirect('Crud','refresh');
    }
}