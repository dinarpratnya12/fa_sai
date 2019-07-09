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
		$this->load->view('Header/headerfix');
		$data['data_penawaran'] = $this->db->get('data_penawaran')->result();
		$data['data_invoice'] = $this->Invoice_models->view();
		if(isset($_POST['compare'])){
			$data['data_komper'] = $this->Komper_model->get_by_role($this->input->post('periode'));
		}
		$this->load->view('import_view', $data);
		$this->load->view('Header/footerfix');

	}
	public function index2(){
		$this->load->view('Header/headerstaff');
		$data['data_penawaran'] = $this->db->get('data_penawaran')->result();
		$data['data_invoice'] = $this->Invoice_models->view();
		if(isset($_POST['compare'])){
			$data['data_komper'] = $this->Komper_model->get_by_role($this->input->post('periode'));
		}
		$this->load->view('import_view', $data);
		$this->load->view('Header/footerfix');

	}

	public function form(){
		$this->load->view('Header/headerfix');
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

				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet;
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}

		$this->load->view('import_view', $data);
	}

	public function form2(){
		$this->load->view('Header/headerfix');
		$data = array(); // Buat variabel $data sebagai array
		// $data['data_invoice'] = $this->db->get('data_invoice')->result();

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
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}

		$this->load->view('import_view', $data);
	}

	public function import(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = PHPExcel_IOFactory::load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		// $sheet = $loadexcel->getSheet(0)->toArray(null, true, true ,true);
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		//$numrow = 1;
		unset($sheet[1]);

		//echo count($sheet);

		foreach($sheet as $row){
			$strs = $row['E'];
			$strs = str_replace("IRC INOAC","PASI",$strs);
			$strs = str_replace("NIDEC","PASI",$strs);
			$strs = str_replace("NIFCO","PASI",$strs);
			$strs = str_replace("PLASSES","PASI",$strs);
			$strs = str_replace("PT. CATURINDO AGUNG","PASI",$strs);
			$strs = str_replace("PT. INDONESIA KYOUEI","PASI",$strs);
			$strs = str_replace("PT. KMK PLASTICS IND","PASI",$strs);
			$strs = str_replace("PT. KOJIMA INDONESIA","PASI",$strs);
			$strs = str_replace("PT. NANBU PLASTICS I","PASI",$strs);
			$strs = str_replace("PT. OGATA INDONESIA","PASI",$strs);
			$strs = str_replace("PT. PIOLAX INDONESIA","PASI",$strs);
			$strs = str_replace("PT. SATO SEIKI","PASI",$strs);
			$strs = str_replace("PT. TENMA INDONESIA","PASI",$strs);
			$strs = str_replace("SCHLEMMER","PASI",$strs);
			$strs = str_replace("TOKAI RIKA JP","PASI",$strs);
			$strs = str_replace("YAMANASHI INDONESIA","PASI",$strs);
			$strs = str_replace("TAP-AW","TAP",$strs);
			$strs = str_replace("TAP-INJ","TAP",$strs);
			$strs = str_replace("TAP-VT","TAP",$strs);
				if($row['A'] != "" || $row['A'] != null){
					// $date = $row['B'];
					// var_dump($row['B']);
					$tanggal = date('y-m-d',strtotime($row['B']));
					// var_dump($tanggal);exit();
					// echo $tanggal;
					$persatu = $row['G']/1000;
					$total =  $row['G']/1000*$row['D'];

					$tahun = '20'.date('y',strtotime($row['B']));
					$month = date('m',strtotime($row['B']));

					$periode = "";
					if($month == 12){
						$periode = "Dec ".$tahun." - May ".($tahun+1);
					}else if($month >= 1 && $month <= 5){
						$periode = "Dec ".($tahun-1)." - May ".$tahun;
					}else if($month >= 6 && $month <= 11){
						$periode = "Jun ".$tahun." - Nov ".$tahun;
					}

					array_push($data, array(
						'invoice_number' => $row['A'], // Ambil data invoice number
						'invoice_date' => $tanggal, // Ambil data invoice date
						'buppin_number' => str_replace('-','',$row['C']), // Ambil data bummpin number
						'qty_invoice' => $row['D'], // Ambil data qty invoice
						'supplier' => $strs, // Ambil data supplier
						'kind' => $row['F'], // Ambil data kind
						'price_invoiceseribu' => $row['G'], // Ambil data price perseribu
						'price_invoicesatu' => $persatu, // Ambil data price persatu
						'price_total' => $total, // Ambil data price total
						'periode' => $periode, // Ambil data periode
					));
				}
			//$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->Invoice_models->insert_multiple($data);

		redirect("Import"); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}

	public function import2(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excelreader2 = new PHPExcel_Reader_Excel2007();
		$loadexcel2 = $excelreader2->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet2 = $loadexcel2->getActiveSheet()->toArray(null, true, true ,true);

		// $highesColumn = $loadexcel2->getActiveSheet()->getHighesColumn();

		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data2 = array();
		$numrow = 0;
		unset($sheet2[1]);
		// unset($sheet2[2]);
		// echo $highesColumn;
		// exit();

		foreach($sheet2 as $row2){

			$strsup = $row2['P'];
            $strsup = str_replace("YC Purchasing","HIB",$strsup);
            $strsup = str_replace("Daiwa Kasei (Thailand) Co. Ltd", "DAT", $strsup);
            $strsup = str_replace("Elcom", "COMBU-E", $strsup);
            $strsup = str_replace("Federal Mogul (Thailand) Ltd.","FMTH", $strsup);
            $strsup = str_replace("Hellermann Tyton","HELLERMANN TYTON", $strsup);
            $strsup = str_replace("Molex Singapore","ARROW ELECTRONICS AS", $strsup);
            $strsup = str_replace("PT INDOWIRE PRIMA INDUSTRINDO","PT. INDOWIRE PRIMA", $strsup);
        	$strsup = str_replace("PT Nitto Materials Indonesia","PT. NMI", $strsup);
            $strsup = str_replace("Sugity PT.SUGITY CREATEIVES","SUGITY", $strsup);
            $strsup = str_replace("TBD Supplier","J/A", $strsup);
			$strsup = str_replace("PEMI","PEMI-AW", $strsup);
            $strsup = str_replace("Tesa Tape Asia Pacific Pte Ltd","TESA", $strsup);
			$strsup = str_replace("YAZAKI (CHINA) INVESTMENT CORPORATION","YGP", $strsup);
			$strsup = str_replace("YGP PTE. LTD.","YGP", $strsup);
			$strsup = str_replace("YZK AMERICAS.","YNA", $strsup);

				if($row2['A'] != ""){
					array_push($data2, array(
						'GCT_COMP_NO' => $row2['A'], // Ambil data nomor
						'OW_ID' => $row2['B'], // Ambil data ow id
						'PRICE_ID' => $row2['C'], // Ambil data price id
						'PriceIdDesc' => $row2['D'], // Ambil data periode desc
						'EFFECT_DT' => $row2['E'], // Ambil data effect dt
						'EXPIRE_DT' => $row2['F'], // Ambil data expire dt
						'TENTATIVE_FL' => $row2['G'], // Ambil data tentative el
						'CLASS_CD' => $row2['H'], // Ambil data class cd
						'FIS_PRICE' => $row2['I'], // Ambil data fis price
						'FIS_CRCY' => $row2['J'], // Ambil data fis crcy
						'BASE_PRICE' => $row2['K'], // Ambil data base price
						'BASE_CRCY' => $row2['L'], // Ambil data base crcy
						'BASE_UOM' => $row2['M'], // Ambil data base uom
						'SHT_NO' => $row2['N'], // Ambil data sht no
						'SPPLY_ID' => $row2['O'], // Ambil data sppl id
						'SPPLY_NM' => $strsup, // Ambil data sppl nm
						'CNTRY_CD' => $row2['Q'], // Ambil data cntry cd
						'INCO' => $row2['R'], // Ambil data inco
						'DUTY_FL' => $row2['S'], // Ambil data duty fl
						'CU_BASE_QUOTE' => $row2['T'], // Ambil data cu base quote
						'CU_BASE_UOM' => $row2['U'], // Ambil data cu base uom
						'CU_BASE_CRCY' => $row2['V'], // Ambil data cu base crcy
						'TOOL_COST_FL' => $row2['W'], // Ambil data tool cost fl
						'ONLY_TEST_FL' => $row2['X'], // Ambil data only test fl
						'MARK1' => $row2['Y'], // Ambil data mark1
						'MARK2' => $row2['Z'], // Ambil data mark2
						'MARK3' => $row2['AA'], // Ambil data mark3
						'NOTE' => $row2['AB'], // Ambil data note
						'PERIOD' => $row2['AC'], // Ambil data periode
					));
				}


			$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->Penawaran_models->insert_multiple($data2);

		redirect("Import"); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}

	// public function komper(){

	// 	$this->db->select('data_invoice.buppin_number, data_invoice.price_invoicesatu, data_penawaran.GCT_COMP_NO, data_penawaran.BASE_PRICE from data_invoice inner join data_penawaran on data_invoice.buppin_number = data_penawaran.GCT_COMP_NO');
	// 	$query = $this->db->get();
 	// 	return $query->result();

	// }




}