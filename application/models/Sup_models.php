<?php
class Sup_models extends CI_Model{

	function tampil_datasupsai(){
		return $this->db->get('supplier')->result();
	}

	function input_datasupsai($data3){
		$this->db->insert('supplier',$data3);
	}

	function get_sai_all()
    {
        $query=$this->db->query("SELECT * FROM sup_sai ORDER BY id_supsai DESC");
        return $query->result();
	}

	function editsai($data3,$where){
        $this->db->where($where);
		$this->db->update('supplier', $data3);
	}

	public function hapussai($id_sup){
        $this->db->where('id_sup',$id_sup); //pencocokan id
        $this->db->delete('supplier'); //eksekusi
        return;
	}

}