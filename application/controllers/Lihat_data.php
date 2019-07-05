<?php
class Lihat_data extends CI_Controller{
  public function __construct(){
		parent::__construct();

		$this->load->model('Invoice_models');
		$this->load->model('Penawaran_models');
	}

	public function index(){
		$this->load->view('Header/headerfix');
		$data['data_penawaran'] = $this->db->get('data_penawaran')->result();
		$data['data_invoice'] = $this->Invoice_models->view();

		$this->load->view('list_data', $data);
		$this->load->view('Header/footerfix');

	}
}
