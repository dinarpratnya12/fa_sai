<?php
class Lihat_data extends CI_Controller{
  public function __construct(){
		parent::__construct();

		$this->load->model('Invoice_models');
		$this->load->model('Penawaran_models');
	}

	public function index(){
		$this->load->view('Header/headerfix');
		// $data['data_penawaran'] = $this->db->get('data_penawaran')->result();
		// $data['data_invoice'] = $this->Invoice_models->view();

    $this->load->view('invoice_data', $data);
    $this->load->view('penawaran_data', $data);
		$this->load->view('Header/footerfix');

  }
  public function invoice(){
    $this->load->view('Header/headerfix');
		$data['data_invoice'] = $this->Invoice_models->view();
    $this->load->view('invoice_data', $data);
    $this->load->view('Header/footerfix');
  }
  public function penawaran(){
    $this->load->view('Header/headerfix');
      $data['data_penawaran'] = $this->Penawaran_models->view();
      $this->load->view('penawaran_data', $data);
      $this->load->view('Header/footerfix');
    }

  	public function index2(){
      $this->load->view('Header/headerstaff');
      // $data['data_penawaran'] = $this->db->get('data_penawaran')->result();
      // $data['data_invoice'] = $this->Invoice_models->view();

      $this->load->view('invoice_data', $data);
      $this->load->view('penawaran_data', $data);
      $this->load->view('Header/footerfix');
    }
    public function invoice2(){
    $this->load->view('Header/headerstaff');
      $data['data_invoice'] = $this->Invoice_models->view();
      $this->load->view('invoice_data', $data);
      $this->load->view('Header/footerfix');
    }
    public function penawaran2(){
      $this->load->view('Header/headerstaff');
      $data['data_penawaran'] = $this->Penawaran_models->view();
      $this->load->view('penawaran_data', $data);
      $this->load->view('Header/footerfix');
    }
    function hapus($id_){
      $this->load->model('invoice_models');;
      $this->invoice_models->hapus($id_);
      $this->session->set_flashdata('swal');
      redirect('Lihat_data/invoice','refresh');
    }
    function hapus2($id_penawaran){
      $this->load->model('penawaran_models');;
      $this->invoice_models->hapus($id_penawaran);
      $this->session->set_flashdata('swal');
      redirect('Lihat_data/penawaran','refresh');
    }
}
