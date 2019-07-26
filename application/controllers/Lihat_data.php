<?php
class Lihat_data extends CI_Controller{
  public function __construct(){
		parent::__construct();

		$this->load->model('Invoice_models');
    $this->load->model('Penawaran_models');
    $this->load->model('Sup_models');

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
    $this->session->set_flashdata('swal','Success|Successful Delete Invoice|success');
    redirect('Lihat_data/invoice','refresh');
  }

  function hapuspenawaran($id_penawaran){
    $this->load->model('penawaran_models');;
    $this->penawaran_models->hapuspenawaran($id_penawaran);
    $this->session->set_flashdata('swal');
    $this->session->set_flashdata('swal','Success|Successful Delete Quatition|success');
    redirect('Lihat_data/penawaran','refresh');
  }

  function hapusnumber(){
    $invoice = $this->input->post('selectinvoice');
    $this->load->model('invoice_models');;
    $this->invoice_models->hapusnumber($invoice);
    $this->session->set_flashdata('swal');
    $this->session->set_flashdata('swal','Success|Successful Delete Invoice|success');
    redirect('Lihat_data/invoice','refresh');
  }

  function hapusperiode(){
    $penawaran = $this->input->post('selectperiode');
    $this->load->model('penawaran_models');;
    $this->penawaran_models->hapusperiode($penawaran);
    $this->session->set_flashdata('swal');
    $this->session->set_flashdata('swal','Success|Successful Delete Invoice|success');
    redirect('Lihat_data/penawaran','refresh');
  }

  function editinvoice(){
    $tanggal = date('Y-m-d',strtotime($_POST['invoicedate']));
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
      "quantityunit"=>$_POST['quantityunit'],
      "invoicevalue"=>$_POST['invoicevalue'],
      "unitcode"=>$_POST['unitcode'],
      "ordernumber"=>$_POST['ordernumber'],
      "invoicedate"=>$_POST['invoicedate'],
    );
    $where = array(
      "id_"=>$_POST['id_'],
    );
    $this->Invoice_models->edit($data,$where);
    $this->session->set_flashdata('swal','Success|Successful Edit Invoice|success');
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

		$this->form_validation->set_rules('invoicenumber', 'invoicenumber','required');
		$this->form_validation->set_rules('productid','productid','required');
		$this->form_validation->set_rules('supplier','supplier','required');
		$this->form_validation->set_rules('quantityunit','quantityunit','required');
    $this->form_validation->set_rules('invoicevalue','invoicevalue','required');
    $this->form_validation->set_rules('unitcode','unitcode','required');
		$this->form_validation->set_rules('ordernumber','ordernumber','required');
		$this->form_validation->set_rules('invoicedate','invoicedate','required');
		if($this->form_validation->run() == FALSE) {
			redirect('Lihat_data/invoice','refresh');
		}else{

      $tanggal = date('Y-m-d',strtotime($this->input->post('invoicedate')));
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

			$this->session->set_flashdata('swal','Success|Successful Add Invoice|success');
			redirect('Lihat_data/invoice','refresh');
		}
		$this->load->view('Header/footerfix');
  }

  function editpenawaran(){
    $data= array(
      "partnumber"=>$_POST['partnumber'],
      "base_price"=>$_POST['base_price'],
      "base_crcy"=>$_POST['base_crcy'],
      "base_uom"=>$_POST['base_uom'],
      "supplier"=>$_POST['supplier'],
      "cntry_cd"=>$_POST['cntry_cd'],
      "period"=>$_POST['period'],
    );
    $where = array(
      "id_penawaran"=>$_POST['id_penawaran'],
    );
    $this->Invoice_models->edit($data,$where);
    $this->session->set_flashdata('swal','Success|Successful Edit Penawaran|success');
    redirect('Lihat_data/penawaran','refresh');
  }

  public function supsai(){
    $data['level'] = $this->session->userdata('level');
				if($data['level']=='1'){
					$this->load->view('Header/headerfix');
				}else{
					$this->load->view('Header/headerstaff');
				}
    $data['supplier'] = $this->Sup_models->tampil_datasupsai();
    //var_dump($data['supplier']);
    $this->load->view('sup_sai', $data);
    $this->load->view('Header/footerfix');
  }

  function tambahsai(){

		$data['level'] = $this->session->userdata('level');
				if($data['level']=='1'){
					$this->load->view('Header/headerfix');
				}else{
					$this->load->view('Header/headerstaff');
				}

		$this->form_validation->set_rules('sai', 'sai','required');
		$this->form_validation->set_rules('gct','gct','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('sup_sai',$data3);
		}else{

      $data3['sai'] = strtoupper($this->input->post('sai'));
			$data3['gct'] = strtoupper($this->input->post('gct'));

			$this->Sup_models->input_datasupsai($data3);

			$this->session->set_flashdata('swal','Success|Successful Add Supplier|success');
			redirect('Lihat_data/supsai','refresh');
		}
		$this->load->view('Header/footerfix');
  }

  function hapussai($id_sup){
    $this->load->model('sup_models');;
    $this->Sup_models->hapussai($id_sup);
    $this->session->set_flashdata('swal');
    redirect('Lihat_data/supsai','refresh');
  }

  function editsai(){
    $data3= array(
      "sai"=>$_POST['sai'],
      "gct"=>$_POST['gct'],
    );
    $where = array(
      "id_sup"=>$_POST['id_sup'],
    );
    $this->Sup_models->editsai($data3,$where);
    // $this->session->set_flashdata('swal','Success|Successful Edit Supplier|success');
    // redirect('Lihat_data/supsai','refresh');
  }

}
