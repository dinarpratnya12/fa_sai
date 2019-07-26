<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penawaran_models extends CI_Model {
	public function view(){
		return $this->db->get('data_penawaran')->result(); // Tampilkan semua data yang ada di tabel siswa
	}

	// Fungsi untuk melakukan proses upload file
	public function upload_file($filename){
		$this->load->library('upload'); // Load librari upload

		$config['upload_path'] = './excel/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;

		$this->upload->initialize($config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
	public function insert_multiple($data){
		$this->db->insert_batch('data_penawaran', $data);
	}

	public function hapuspenawaran($id_penawaran){
        $this->db->where('id_penawaran',$id_penawaran); //pencocokan id
        $this->db->delete('data_penawaran'); //eksekusi
        return;
	}
	public function hapusperiode($period){
		$this->db->where('period',$period); //pencocokan id
        $this->db->delete('data_penawaran'); //eksekusi
        return;
	}

	function edit($data,$where){
        $this->db->where($where);
		$this->db->update('data_penawaran', $data);
	}
}
