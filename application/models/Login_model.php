<?php
class Login_model extends CI_Model{

  function validate($username,$password){
    $this->db->where('user_username',$username);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_users',1);
    return $result;
  }

}
