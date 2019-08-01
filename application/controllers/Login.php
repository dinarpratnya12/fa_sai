<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    function index(){
        $this->load->view('login_view');
    }

    function auth(){
        $username    = $this->input->post('username',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->login_model->validate($username,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $name  = $data['user_name'];
            $username = $data['user_username'];
            $level = $data['user_level'];
            $sesdata = array(
                'name'  => $name,
                'username'  => $username,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($level === '1'){
                redirect('awal');

                // access login for staff
            }elseif($level === '2'){
                redirect('awal');

                // access login for author
            }else{
                redirect('login');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
