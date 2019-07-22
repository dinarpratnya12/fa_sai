<?php
class Lihat_data extends CI_Controller{
  public function __construct(){
		parent::__construct();

		$this->load->model('Invoice_models');
		$this->load->model('Penawaran_models');
	}

	public function index(){
		$this->load->view('Header/headerfix');
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
  function hapuspenawaran($id_penawaran){
    $this->load->model('penawaran_models');;
    $this->penawaran_models->hapuspenawaran($id_penawaran);
    $this->session->set_flashdata('swal');
    redirect('Lihat_data/penawaran','refresh');
  }
  function hapusnumber(){
    $invoice = $this->input->post('selectinvoice');
    $this->load->model('invoice_models');;
    $this->invoice_models->hapusnumber($invoice);
    $this->session->set_flashdata('swal');
    redirect('Lihat_data/invoice','refresh');
  }
  function hapusperiode(){
    $penawaran = $this->input->post('selectperiode');
    $this->load->model('penawaran_models');;
    $this->penawaran_models->hapusperiode($penawaran);
    $this->session->set_flashdata('swal');
    redirect('Lihat_data/penawaran','refresh');
  }
  function editinvoice(){
    $data= array(
      "InvoiceNumber"=>$_POST['InvoiceNumber'],
      "ProductID"=>$_POST['ProductID'],
      "supplier"=>$_POST['supplier'],
      "kalkulasi_per_pcs"=>$_POST['kalkulasi_per_pcs'],
      "CurrencyCode"=>$_POST['CurrencyCode'],
      "QuantityUnit"=>$_POST['QuantityUnit'],
      "InvoiceValue"=>$_POST['InvoiceValue'],
      "UnitCode"=>$_POST['UnitCode'],
      "OrderNumber"=>$_POST['OrderNumber'],
      "InvoiceDate"=>$_POST['InvoiceDate'],
      "periode" =>$_POST['periode']
    );
    $where = array(
      "user_id"=>$_POST['user_id'],
    );
    $this->user_models->edit($data,$where);
    $this->session->set_flashdata('swal','Success|Successful Edit User|success');
    redirect('Crud','refresh');
  }
}
