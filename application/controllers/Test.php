<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('testModel');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('registration');
	}

	public function dbConnect(){
		$this->load->helper('url');

		$temp = $this->testModel->getAllData();
		$data = array('content' => $temp);
		echo $data['content'];
	}

	public function validate(){
		$key = array('fname', 'lname', 'phone', 'email', 'male', 'female', 'date');
		$dataForm = $this->input->post('dataKey');

		foreach($key as $n){
			if(array_key_exists($n, $dataForm)){
				if($dataForm[$n] != "")
					$this->testModel->getAllData($dataForm);
					// print($dataForm[$n]);
			}
		}
	}
}
