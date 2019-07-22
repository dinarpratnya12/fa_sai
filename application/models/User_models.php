<?php
class User_models extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_users');
	}

	function input_data($data){
		$this->db->insert('tbl_users',$data);
	}

	function get_user_all()
    {
        $query=$this->db->query("SELECT * FROM user ORDER BY user_id DESC");
        return $query->result();
    }

	function edit($data,$where){
        $this->db->where($where);
		$this->db->update('tbl_users', $data);
	}

	public function hapus($user_id){
        $this->db->where('user_id',$user_id); //pencocokan id
        $this->db->delete('tbl_users'); //eksekusi
        return;
	}
}