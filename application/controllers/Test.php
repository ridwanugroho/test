<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index(){
		// $this->load->view('registration');
		$this->load->view('registration');
	}

	public function dbConnect(){
		$this->load->model('testModel');
		$this->load->helper('url');

		$temp = $this->testModel->getAllData();
		$data = array('content' => $temp);
		$this->load->view('registration', $data);
	}

	public function validate(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
 
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{ 
			$this->load->view('v_form');
		}
	}


}
