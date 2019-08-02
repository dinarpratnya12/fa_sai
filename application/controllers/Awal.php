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

	public function chart() {

		$query =  $this->db->query("SELECT DISTINCT sai as sai, gct as gct COUNT(id_sup) as count  FROM supplier");

		$record = $query->result();
		$data = [];

		foreach($record as $row) {
			  $data['label'][] = $row->day_name;
			  $data['data'][] = (int) $row->count;
		}
		$data['chart_data'] = json_encode($data);
		$this->load->view('pie_chart',$data);
	  }
}
