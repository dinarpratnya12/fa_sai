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

	function edit($user_id,$user_name,$user_email,$user_password){
		$hasil=$this->db->query("UPDATE tbl_users SET user_name='$user_name',user_email='$user_email',user_password='$user_password' WHERE user_id='$user_id'");
		return $hsl;
	}

	public function hapus($user_id){
		$hasil=$this->db->query("DELETE FROM tbl_users WHERE user_id='$user_id'");
        return $hasil;
        // $this->db->where('user_id',$id);
		// $this->db->delete('tbl_users');
	}


    // function edit_user($user_id)
    // {
    //     $q="SELECT * FROM  user WHERE user_id='$user_id'";
    //     $query=$this->db->query($q);
    //     return $query->row();
    // }

    // function simpan_edit_user($user_id, $user_name, $user_email, $user_password)
    // {
    //     $data = array(
    //         'user_id'        => $user_id,
    //         'use$user_name'   => $user_name,
    //         'user_email'       => $user_email,
    //         'user_password'		=> $user_password,
    //         'email'          => $email,
    //         'alamat'         => $alamat
    //     );
    //     $this->db->where('user_id', $user_id);
    //     $this->db->update('user', $data);
    // }
}