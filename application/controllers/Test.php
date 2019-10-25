<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('registration');
	}

	public function dbConnect(){
		$this->load->model('testModel');
		$this->load->helper('url');

		$temp = $this->testModel->getAllData();
		$data = array('content' => $temp);
		echo $data['content'];
	}

	public function validate(){
		$dataForm = $this->input->post('dataKey');
		if(array_key_exists('fname', $dataForm)){
			if($dataForm['fname'] != "")
				print($dataForm['fname']);
		}

		elseif(array_key_exists('lname', $dataForm)){
			if($dataForm['lname'] != "")
				print($dataForm['lname']);
		}

		elseif(array_key_exists('phone', $dataForm)){
			if($dataForm['phone'] != "")
				print($dataForm['phone']);
		}

		elseif(array_key_exists('email', $dataForm)){
			if($dataForm['email'] != "")
				print($dataForm['email']);
		}

		elseif(array_key_exists('male', $dataForm)){
			if($dataForm['male'] != "")
				print($dataForm['male']);
		}

		elseif(array_key_exists('female', $dataForm)){
			if($dataForm['female'] != "")
				print($dataForm['female']);
		}
	}
}
