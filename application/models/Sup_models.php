<?php
class Sup_models extends CI_Model{

	function tampil_datasupsai(){
		return $this->db->get('sup_sai')->result();
	}

	function input_datasupsai($data){
		$this->db->insert('sup_sai',$data);
	}

	function get_sai_all()
    {
        $query=$this->db->query("SELECT * FROM user ORDER BY id_supsai DESC");
        return $query->result();
    }

	function editsai($data,$where){
        $this->db->where($where);
		$this->db->update('sup_sai', $data);
	}

	public function hapussai($id_supsai){
        $this->db->where('id_supsai',$id_supsai); //pencocokan id
        $this->db->delete('sup_sai'); //eksekusi
        return;
	}
}