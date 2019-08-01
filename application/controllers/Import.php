<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Import extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya

	public function __construct(){
		parent::__construct();

		$this->load->model('Invoice_models');
		$this->load->model('Penawaran_models');
		$this->load->model(array('Komper_model'));
	}
	public function index(){
		// unset($_SESSION['swal']);
		$data['level'] = $this->session->userdata('level');
		if($data['level']=='1'){
			$this->load->view('Header/headerfix');
		}else{
			$this->load->view('Header/headerstaff');
		}
		$data['data_penawaran'] = $this->db->get('data_penawaran')->result();
		$data['data_invoice'] = $this->Invoice_models->view();
		if(isset($_POST['compare'])){
			$data['data_komper'] = $this->Komper_model->get_by_role($this->input->post('periode'));
			$data['data_komper2'] = $this->Komper_model->get_no_same($this->input->post('periode'));
		}
		$this->load->view('import_view', $data);
		$this->load->view('Header/footerfix');

	}

	public function form(){
		$data['level'] = $this->session->userdata('level');
			if($data['level']=='1'){
				$this->load->view('Header/headerfix');
			}else{
				$this->load->view('Header/headerstaff');
			}
			$data = array(); // Buat variabel $data sebagai array

			if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
				// lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
				$upload = $this->Invoice_models->upload_file($this->filename);
				if($upload['result'] == "success"){ // Jika proses upload sukses
					// Load plugin PHPExcel nya
					include APPPATH.'third_party/PHPExcel/PHPExcel.php';

					$excelreader = new PHPExcel_Reader_Excel2007();
					$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
					$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

					unset($sheet[1]);
						// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
						// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
					$data['sheet'] = $sheet;
					if($loadexcel->getActiveSheet()->getCell('O1')->getValue() != "InvoiceNumber"){

						$data['data_error'] = "Format Tidak Sesuai";
						$this->session->set_flashdata('swal','Format Tidak Sesuai!|Periksa Kembali Data Anda!|error');
						$data['sheet'] = [];
					} else {
						unset($_SESSION['swal']);
					}
				}else{ // Jika proses upload gagal

					$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				}
			}

			$this->load->view('import_view', $data);
			$this->load->view('Header/footerfix');
		}

		public function form2(){
			$data['level'] = $this->session->userdata('level');
			if($data['level']=='1'){
				$this->load->view('Header/headerfix');
			}else{
				$this->load->view('Header/headerstaff');
			}
			$data = array(); // Buat variabel $data sebagai array

			if(isset($_POST['preview2'])){ // Jika user menekan tombol Preview pada form
				// lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
				$upload = $this->Penawaran_models->upload_file($this->filename);

				if($upload['result'] == "success"){ // Jika proses upload sukses
						// Load plugin PHPExcel nya
					include APPPATH.'third_party/PHPExcel/PHPExcel.php';
					$excelreader2 = new PHPExcel_Reader_Excel2007();
					$loadexcel2 = $excelreader2->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
					$sheet = $loadexcel2->getActiveSheet()->toArray(null, true, true ,true);

						// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
						// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
					$data['sheet'] = $sheet;
					if($loadexcel2->getActiveSheet()->getCell('AC1')->getValue() != "PERIOD"){
						$data['data_error'] = "Format Tidak Sesuai";
						$this->session->set_flashdata('swal','Format Tidak Sesuai!|Periksa Kembali Data Anda!|error');
						$data['sheet'] = [];
					}
				}else{ // Jika proses upload gagal
					$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				}
			}

			$this->load->view('import_view', $data);
			$this->load->view('Header/footerfix');
		}
		public function import(){
			// Load plugin PHPExcel nya
			include APPPATH.'third_party/PHPExcel/PHPExcel.php';

			$excelreader = new PHPExcel_Reader_Excel2007();
			$loadexcel = PHPExcel_IOFactory::load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
			$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
			$data = array();
			//$numrow = 1;
			unset($sheet[1]);
			unset($sheet[2]);

			foreach($sheet as $row){
				$kalimat_new = strtoupper($row['V']);
				$strs = $kalimat_new;
				$where = array(
					'gct' => $strs
				);

				$result = $this->db->select('gct,sai')->from('supplier')->where($where)->get()->result();
				 //var_dump(count($result));

				if(count($result)>1){
					$strs = strtoupper($row['V']);
					//var_dump($strs);

				}else if(count($result) == 0){
					$where2 = array(
						'sai' => $strs
					);
					$result2 = $this->db->select('sai,gct')->from('supplier')->where($where2)->get()->result();
					if(count($result2)== 1){
						$gct_new = $result2[0]->gct;
						$where3 = array(
							'gct' => $gct_new
						);
						$num = $this->db->select('gct')->from('supplier')->where($where3)->get()->num_rows();

						if($num>1){
							$strs = str_replace($result2[0]->sai,$result2[0]->gct,$strs);

						}else{
							$strs = str_replace($result2[0]->gct,$result2[0]->sai,$strs);

						}
					}
				}else if(count($result) == 1){
					$strs = str_replace($strs,$result[0]->sai,$strs);

				}
				if($row['E'] != "" || $row['E'] != null){

					$tanggal = date('Y-m-d',strtotime($row['P']));

					$tahun = date('Y',strtotime($row['P']));
					$month = date('m',strtotime($row['P']));
					$periode = "";
					if($month == 12){
						$periode = "Dec ".$tahun." - May ".($tahun+1);
					}else if($month >= 1 && $month <= 5){
						$periode = "Dec ".($tahun-1)." - May ".$tahun;
					}else if($month >= 6 && $month <= 11){
						$periode = "Jun ".$tahun." - Nov ".$tahun;
					}
					$koma = str_replace(",","",$row['J']);
					$total = doubleval($row['Q'])/doubleval($koma);
					$invoiceValue = $row['Q'];
					if(stripos($invoiceValue,",") !== false){
						$InvoiceValue = round($invoiceValue,4);
					}


					array_push($data, array(
						'productid' => $row['E'], // Ambil data ProductID
						'quantityunit' => $koma, // Ambil data QuantityUnit
						'unitcode' => $row['K'], // Ambil data UnitCode
						'invoicenumber' => $row['O'], // Ambil data InvoiceNumber
						'invoicedate' => $tanggal, // Ambil data kind
						'invoicevalue' => $invoiceValue, // Ambil data InvoiceValue
						'currencycode' => $row['R'], // Ambil data CurrencyCode
						'ordernumber' => $row['U'], // Ambil data OrderNumber
						'supplier' => $strs, // Ambil data supplier
						'kalkulasi_per_pcs' => $total, // Ambil data price total
						'periode' => $periode, // Ambil data periode
					));
				}

			}

				// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
			$this->Invoice_models->insert_multiple($data);
			$this->session->set_flashdata('swal','Success|Success Upload Invoice|success');
			redirect("Import"); // Redirect ke halaman awal (ke controller siswa fungsi index)
		}

		public function import2(){
			// Load plugin PHPExcel nya
			include APPPATH.'third_party/PHPExcel/PHPExcel.php';
			$excelreader2 = new PHPExcel_Reader_Excel2007();
			$loadexcel2 = $excelreader2->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
			$sheet2 = $loadexcel2->getActiveSheet()->toArray(null, true, true ,true);
			// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
			$data2 = array();
			$numrow = 0;
			unset($sheet2[1]);

			foreach($sheet2 as $row2){
				$kalimat_new = strtoupper($row2['P']);
				$strsup = $kalimat_new;
				$where = array(
					'gct' => $strsup
				);

				$result = $this->db->select('gct,sai')->from('supplier')->where($where)->get()->result();
				 //var_dump(count($result));

				if(count($result)>1){
					$strsup = strtoupper($row2['P']);
					//var_dump($strsup);

				}else if(count($result) == 0){
					$where2 = array(
						'sai' => $strsup
					);
					$result2 = $this->db->select('sai,gct')->from('supplier')->where($where2)->get()->result();
					if(count($result2)== 1){
						$gct_new = $result2[0]->gct;
						$where3 = array(
							'gct' => $gct_new
						);
						$num = $this->db->select('gct')->from('supplier')->where($where3)->get()->num_rows();

						if($num>1){
							$strsup = str_replace($result2[0]->sai,$result2[0]->gct,$strsup);
							//var_dump($strsup);
							//exit();


						}else{
							$strsup = str_replace($result2[0]->gct,$result2[0]->sai,$strsup);
							//var_dump($strsup);
							//exit();

						}
					}
				}else if(count($result) == 1){
					$strsup = str_replace($strsup,$result[0]->sai,$strsup);
					//var_dump($strsup);
					//exit();
				}
				// $strsup = str_replace("YC Purchasing","HIB",$strsup);
				// $strsup = str_replace("Daiwa Kasei (Thailand) Co. Ltd", "DAT", $strsup);
				// $strsup = str_replace("Elcom", "COMBU-E", $strsup);
				// $strsup = str_replace("Federal Mogul (Thailand) Ltd.","FMTH", $strsup);
				// $strsup = str_replace("Hellermann Tyton","HELLERMANN TYTON", $strsup);
				// $strsup = str_replace("Molex Singapore","ARROW ELECTRONICS AS", $strsup);
				// $strsup = str_replace("PT INDOWIRE PRIMA INDUSTRINDO","PT. INDOWIRE PRIMA", $strsup);
				// $strsup = str_replace("PT Nitto Materials Indonesia","PT. NMI", $strsup);
				// $strsup = str_replace("Sugity PT.SUGITY CREATEIVES","SUGITY", $strsup);
				// $strsup = str_replace("TBD Supplier","J/A", $strsup);
				// $strsup = str_replace("PEMI","PEMI-AW", $strsup);
				// $strsup = str_replace("Tesa Tape Asia Pacific Pte Ltd","TESA", $strsup);
				// $strsup = str_replace("YAZAKI (CHINA) INVESTMENT CORPORATION","YCIC", $strsup);
				// $strsup = str_replace("YGP PTE. LTD.","YGP", $strsup);
				// $strsup = str_replace("YZK AMERICAS.","YNA", $strsup);
				$gct = $row2['A'];
                $gct_split = str_split($gct,4);
                $gct_implode = implode("-",$gct_split);
				$partnumber = $gct_implode;
				$periode = ucwords($row2['AC']);


				if($gct_implode != ""){
					array_push($data2, array(
						'partnumber' => $gct_implode, // Ambil data nomor
						'base_price' => $row2['K'], // Ambil data base price
						'base_crcy' => $row2['L'], // Ambil data base crcy
						'base_uom' => $row2['M'], // Ambil data base uom
						'supplier' => $strsup, // Ambil data sppl nm
						'cntry_cd' => $row2['Q'], // Ambil data cntry cd
						'period' => $periode, // Ambil data periode
					));
				}
				$numrow++; // Tambah 1 setiap kali looping
			}
			// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
			$this->Penawaran_models->insert_multiple($data2);
			$this->session->set_flashdata('swal','Success|Success Upload Quantitation|success');

			redirect("Import"); // Redirect ke halaman awal (ke controller siswa fungsi index)
		}
	}