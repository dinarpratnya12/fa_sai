<?php
class Compare extends CI_Controller{
  public function __construct(){
		parent::__construct();

		$this->load->model(array('Komper_model'));
	}

	public function index(){
        $data['level'] = $this->session->userdata('level');
		if($data['level']=='1'){
			$this->load->view('Header/headerfix');
		}else{
			$this->load->view('Header/headerstaff');
        }
        if(isset($_POST['compare'])){
			$data['data_komper'] = $this->Komper_model->get_by_role($this->input->post('periode'),);

			$data['data_komper2'] = $this->Komper_model->get_no_same($this->input->post('periode'));
		}
		$this->load->view('compare_view', $data);
		$this->load->view('Header/footerfix');
  }


}