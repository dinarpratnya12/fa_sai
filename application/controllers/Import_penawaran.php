<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Import_penawaran extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya

	public function __construct(){
		parent::__construct();

		$this->load->model('Penawaran_models');
	}

	public function index(){
		$data['data_penawaran'] = $this->Penawaran_models->view();
		$data['data_invoice'] = $this->db->get('data_invoice')->result();
		$this->load->view('import_view', $data);
	}

	public function form(){
		$data = array(); // Buat variabel $data sebagai array
		$data['data_invoice'] = $this->db->get('data_invoice')->result();

		if(isset($_POST['preview2'])){ // Jika user menekan tombol Preview pada form
			// lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
			$upload = $this->Penawaran_models->upload_file($this->filename);

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

	public function import(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		$numrow = 1;
		unset($sheet[1]);
		unset($sheet[2]);

		foreach($sheet as $row){

				if($row['A'] != ""){
					array_push($data, array(
						'GCT_COMP_NO' => $row['A'], // Ambil data NIS
						'OW_ID' => $row['B'], // Ambil data nama
						'PRICE_ID' => $row['C'], // Ambil data jenis kelamin
						'PriceIdDesc' => $row['D'], // Ambil data alamat
						'EFFECT_DT' => $row['E'], // Ambil data alamat
						'EXPIRE_DT' => $row['F'], // Ambil data alamat
						'TENTATIVE_FL' => $row['G'], // Ambil data alamat
						'CLASS_CD' => $row['H'], // Ambil data alamat
						'FIS_PRICE' => $row['I'], // Ambil data alamat
						'FIS_CRCY' => $row['J'], // Ambil data alamat
						'BASE_PRICE' => $row['K'], // Ambil data alamat
						'BASE_CRCY' => $row['L'], // Ambil data alamat
						'BASE_UOM' => $row['M'], // Ambil data alamat
						'SHT_NO' => $row['N'], // Ambil data alamat
						'SPPLY_ID' => $row['O'], // Ambil data alamat
						'SPPLY_NM' => $row['P'], // Ambil data alamat
						'CNTRY_CD' => $row['Q'], // Ambil data alamat
						'INCO' => $row['R'], // Ambil data alamat
						'DUTY_FL' => $row['S'], // Ambil data alamat
						'CU_BASE_QUOTE' => $row['T'], // Ambil data alamat
						'CU_BASE_UOM' => $row['U'], // Ambil data alamat
						'CU_BASE_CRCY' => $row['V'], // Ambil data alamat
						'TOOL_COST_FL' => $row['W'], // Ambil data alamat
						'ONLY_TEST_FL' => $row['X'], // Ambil data alamat
						'MARK1' => $row['Y'], // Ambil data alamat
						'MARK2' => $row['Z'], // Ambil data alamat
						'MARK3' => $row['AA'], // Ambil data alamat
						'NOTE' => $row['AB'], // Ambil data alamat
						'PERIOD' => $row['AC'], // Ambil data alamat
					));
				}


			$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->Penawaran_models->insert_multiple($data);

		redirect("Import_penawaran"); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}


}
