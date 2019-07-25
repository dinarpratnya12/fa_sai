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
    $tanggal = date('Y-m-d',strtotime($_POST['invoicedate']));
						// var_dump($tanggal);exit();
						// echo $tanggal;


						$tahun = date('Y',strtotime($_POST['invoicedate']));
						$month = date('m',strtotime($_POST['invoicedate']));

						$periode = "";
						if($month == 12){
							$periode = "Dec ".$tahun." - May ".($tahun+1);
						}else if($month >= 1 && $month <= 5){
							$periode = "Dec ".($tahun-1)." - May ".$tahun;
						}else if($month >= 6 && $month <= 11){
							$periode = "Jun ".$tahun." - Nov ".$tahun;
						}
    $data= array(
      "invoicenumber"=>$_POST['invoicenumber'],
      "productid"=>$_POST['productid'],
      "supplier"=>$_POST['supplier'],
      "kalkulasi_per_pcs"=>$_POST['kalkulasi_per_pcs'],
      "currencycode"=>$_POST['currencycode'],
      "quantityunit"=>$_POST['quantityunit'],
      "invoicevalue"=>$_POST['invoicevalue'],
      "unitcode"=>$_POST['unitcode'],
      "ordernumber"=>$_POST['ordernumber'],
      "invoicedate"=>$_POST['invoicedate'],
      "periode" => $periode
    );
    $where = array(
      "id_"=>$_POST['id_'],
    );
    $this->Invoice_models->edit($data,$where);
    $this->session->set_flashdata('swal','Success|Successful Edit User|success');
    redirect('Lihat_data/invoice','refresh');
  }

  function tambahinvoice(){

		$data['level'] = $this->session->userdata('level');
				if($data['level']=='1'){
					$this->load->view('Header/headerfix');
				}else{
					$this->load->view('Header/headerstaff');
				}
    $data1['data_invoice'] = $this->Invoice_models->tampil_data()->result();

    //var_dump($data1['data_invoice']);

		$this->form_validation->set_rules('invoicenumber', 'invoicenumber','required');
		$this->form_validation->set_rules('productid','productid','required');
		$this->form_validation->set_rules('supplier','supplier','required');
		$this->form_validation->set_rules('currencycode','currencycode','required');
		$this->form_validation->set_rules('quantityunit','quantityunit','required');
    $this->form_validation->set_rules('invoicevalue','invoicevalue','required');
    $this->form_validation->set_rules('unitcode','unitcode','required');
		$this->form_validation->set_rules('ordernumber','ordernumber','required');
		$this->form_validation->set_rules('invoicedate','invoicedate','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('invoice_view',$data);
		}else{

      $tanggal = date('Y-m-d',strtotime($this->input->post('invoicedate')));
						// var_dump($tanggal);exit();
						// echo $tanggal;


						$tahun = date('Y',strtotime($this->input->post('invoicedate')));
						$month = date('m',strtotime($this->input->post('invoicedate')));

						$periode = "";
						if($month == 12){
							$periode = "Dec ".$tahun." - May ".($tahun+1);
						}else if($month >= 1 && $month <= 5){
							$periode = "Dec ".($tahun-1)." - May ".$tahun;
						}else if($month >= 6 && $month <= 11){
							$periode = "Jun ".$tahun." - Nov ".$tahun;
						}

			$data2['invoicenumber'] = $this->input->post('invoicenumber');
			$data2['productid'] = $this->input->post('productid');
			$data2['supplier'] = $this->input->post('supplier');
			$data2['kalkulasi_per_pcs'] = (int)$this->input->post('invoicevalue')/(int)$this->input->post('quantityunit');
			$data2['currencycode'] = $this->input->post('currencycode');
			$data2['quantityunit'] = $this->input->post('quantityunit');
			$data2['invoicevalue'] = $this->input->post('invoicevalue');
			$data2['unitcode'] = $this->input->post('unitcode');
			$data2['ordernumber'] = $this->input->post('ordernumber');
			$data2['invoicedate'] = $this->input->post('invoicedate');
			$data2['periode'] = $periode;

			$this->Invoice_models->input_data($data2);

			$this->session->set_flashdata('swal','Success|Successful Add User|success');
			redirect('Lihat_data/invoice','refresh');
		}
		$this->load->view('Header/footerfix');
	}
}
