<?php
class Awal extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('awal_models');
    }

    function index(){
        $data['level'] = $this->session->userdata('level');
		if($data['level']=='1'){
			$this->load->view('Header/headerfix');
		}else{
			$this->load->view('Header/headerstaff');
		}
		$data['data_invoice'] = $this->awal_models->totalinvoice();
		$data['data_penawaran'] = $this->awal_models->totalpenawaran();
		$data['supplier'] = $this->awal_models->totalsup();
		$data['tbl_users'] = $this->awal_models->totaluser();

		$data['level'] = $this->session->userdata('level');
		if($data['level']=='1'){
			$this->load->view('dashboard', $data);
		}else{
			$this->load->view('dashboard_user', $data);
		}
		$this->load->view('Header/footerfix');
	}
}
