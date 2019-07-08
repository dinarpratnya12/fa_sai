<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing akses to admin only
    $this->load->view('Header/headerfix');
      if($this->session->userdata('level')==='1'){
          $this->load->view('import_view');
      }else{
          echo "Access Denied";
      }
      $this->load->view('Header/footerfix');

  }

  function staff(){
    //Allowing akses to staff only
    $this->load->view('Header/headerstaff');
    if($this->session->userdata('level')==='2'){
      $this->load->view('import_view');
    }else{
        echo "Access Denied";
    }
    $this->load->view('Header/footerfix');
  }

  function author(){
    //Allowing akses to author only
    // $this->load->view('Header/header');
    if($this->session->userdata('level')==='3'){
      $this->load->view('import_view');
    }else{
        echo "Access Denied";
    }
  }

}
