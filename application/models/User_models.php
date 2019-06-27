<?php
class User_models extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_users');
	}

	function input_data($data){
		$this->db->insert('tbl_users',$data);
	}
}