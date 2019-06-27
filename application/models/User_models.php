<?php
class User_models extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_users');
	}

	function input_data($data){
		$this->db->insert('tbl_users',$data);
	}

	function edit($user_name,$user_email,$user_password){
		$hasil=$this->db->query("UPDATE tbl_users SET user_name='$user_name',user_email='$user_email',user_password='$user_password' WHERE user_id='$id_user'");
		return $hsl;
	}
}