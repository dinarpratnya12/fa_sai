<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Import extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya

	public function __construct(){
		parent::__construct();

		$this->load->model('Invoice_models');
	}

	public function index(){
		$data['data_penawaran'] = $this->db->get('data_penawaran')->result();
		$data['data_invoice'] = $this->Invoice_models->view();
		$this->load->view('import_view', $data);
	}

	public function form(){
		$data = array(); // Buat variabel $data sebagai array

		$data['data_penawaran'] = $this->db->get('data_penawaran')->result();
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

	public function import(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getSheet(0)->toArray(null, true, true ,true);

		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		//$numrow = 1;
		unset($sheet[1]);
		unset($sheet[2]);

		echo count($sheet);

		foreach($sheet as $row){
				if($row['A'] != "" || $row['A'] != null){
					array_push($data, array(
						'invoice_number' => $row['A'], // Ambil data NIS
						'invoice_date' => $row['B'], // Ambil data nama
						'buppin_number' => $row['C'], // Ambil data jenis kelamin
						'qty_invoice' => $row['D'], // Ambil data alamat
						'supplier' => $row['E'], // Ambil data alamat
						'kind' => $row['F'], // Ambil data alamat
						'price_invoiceseribu' => $row['G'], // Ambil data alamat
						'price_invoicesatu' => $row['H'], // Ambil data alamat
						'amount_invoice' => $row['I'], // Ambil data alamat
						'price_quotsatu' => $row['J'], // Ambil data alamat
						'amount_quot' => $row['K'], // Ambil data alamat
						'diff_amount' => $row['L'], // Ambil data alamat
						'diff_percentage' => $row['M'], // Ambil data alamat
						'periode' => $row['N'], // Ambil data alamat
					));
				}
			//$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->Invoice_models->insert_multiple($data);

		redirect("Import"); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}


}
