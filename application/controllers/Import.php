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
		unset($_SESSION['swal']);
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
			// $data['data_penawaran'] = $this->db->get('data_penawaran')->result();
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
					if($loadexcel->getActiveSheet()->getCell('E1')->getValue() != "ProductID"){
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

		public function form2(){
			$data['level'] = $this->session->userdata('level');
			if($data['level']=='1'){
				$this->load->view('Header/headerfix');
			}else{
				$this->load->view('Header/headerstaff');
			}
			$data = array(); // Buat variabel $data sebagai array
			// $data['data_penawaran'] = $this->db->get('data_penawaran')->result();
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
			//echo count($sheet);

			foreach($sheet as $row){
				$kalimat_new = strtoupper($row['V']);
				$strs = $kalimat_new;
				$strsup_new = str_replace(' ','',$strs);
				$where = array(
					'sai' => $strs
				);

				$result = $this->db->select('sai,gct')->from('supplier')->where($where)->get()->result();
				//var_dump($result[0]->gct);
				$where2 = array(
					'gct' => $result[0]->gct
				);
				$num = $this->db->select('gct')->from('supplier')->where($where2)->get()->num_rows();
				// var_dump($num);
				if($num>1){
					$strs = str_replace($result[0]->sai,$result[0]->gct,$strs);

				}else{
					$strs = str_replace($result[0]->gct,$result[0]->sai,$strs);
				}
				//var_dump($strs);
				// exit();
				// $result[0]->gct;
				// $strs = str_replace("IRC INOAC","PASI",$strs);
				// $strs = str_replace("NIDEC","PASI",$strs);
				// $strs = str_replace("NIFCO","PASI",$strs);
				// $strs = str_replace("PLASSES","PASI",$strs);
				// $strs = str_replace("PT. CATURINDO AGUNG","PASI",$strs);
				// $strs = str_replace("PT. INDONESIA KYOUEI","PASI",$strs);
				// $strs = str_replace("PT. KMK PLASTICS IND","PASI",$strs);
				// $strs = str_replace("PT. KOJIMA INDONESIA","PASI",$strs);
				// $strs = str_replace("PT. NANBU PLASTICS I","PASI",$strs);
				// $strs = str_replace("PT. OGATA INDONESIA","PASI",$strs);
				// $strs = str_replace("PT. PIOLAX INDONESIA","PASI",$strs);
				// $strs = str_replace("PT. SATO SEIKI","PASI",$strs);
				// $strs = str_replace("PT. TENMA INDONESIA","PASI",$strs);
				// $strs = str_replace("SCHLEMMER","PASI",$strs);
				// $strs = str_replace("TOKAI RIKA JP","PASI",$strs);
				// $strs = str_replace("YAMANASHI INDONESIA","PASI",$strs);
				// $strs = str_replace("TAP-AW","TAP",$strs);
				// $strs = str_replace("TAP-INJ","TAP",$strs);
				// $strs = str_replace("TAP-VT","TAP",$strs);
				if($row['E'] != "" || $row['E'] != null){
					// $date = $row['B'];
					// var_dump($row['B']);
					$tanggal = date('Y-m-d',strtotime($row['P']));
					// var_dump($tanggal);exit();
					// echo $tanggal;
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
						'ProductID' => $row['E'], // Ambil data ProductID
						'QuantityUnit' => $koma, // Ambil data QuantityUnit
						'UnitCode' => $row['K'], // Ambil data UnitCode
						'InvoiceNumber' => $row['O'], // Ambil data InvoiceNumber
						'InvoiceDate' => $tanggal, // Ambil data kind
						'InvoiceValue' => $invoiceValue, // Ambil data InvoiceValue
						'CurrencyCode' => $row['R'], // Ambil data CurrencyCode
						'OrderNumber' => $row['U'], // Ambil data OrderNumber
						'supplier' => $strs, // Ambil data supplier
						'kalkulasi_per_pcs' => $total, // Ambil data price total
						'periode' => $periode, // Ambil data periode
					));
				}
					//$numrow++; // Tambah 1 setiap kali looping
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
			// unset($sheet2[2]);
			// echo $highesColumn;
			// exit();
			foreach($sheet2 as $row2){
				$strsup = strtoupper($row2['P']);
				$strsup_new = str_replace(' ','',$strsup);
				$where = array(
					'gct' => $strsup
				);

				$result = $this->db->select('gct,sai')->from('supplier')->where($where)->get()->result();
				var_dump(count($result));
				//exit();
				if(count($result)>1){
					$strsup = strtoupper($row2['P']);
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
						// var_dump($num);
						if($num>1){
							$strsup = str_replace($result2[0]->sai,$result2[0]->gct,$strsup);
							var_dump($strsup);
							//exit();

						}else{
							$strsup = str_replace($result2[0]->gct,$result2[0]->sai,$strsup);
							var_dump($strsup);
							//exit();
						}
					}
				// var_dump($num);
				}else if(count($result) == 1){
					$strsup = str_replace($strsup,$result[0]->sai,$strsup);
				}
				//var_dump($result[0]->gct);
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

				if($gct_implode != ""){
					array_push($data2, array(
						'partnumber' => $gct_implode, // Ambil data nomor
						'BASE_PRICE' => $row2['K'], // Ambil data base price
						'BASE_CRCY' => $row2['L'], // Ambil data base crcy
						'BASE_UOM' => $row2['M'], // Ambil data base uom
						'supplier' => $strsup, // Ambil data sppl nm
						'CNTRY_CD' => $row2['Q'], // Ambil data cntry cd
						'PERIOD' => $row2['AC'], // Ambil data periode
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