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

	public function startSession(){
		$dataList = array('fname', 'lname', 'phone', 'email', 'male', 'female', 'date');
		$dataForm = $this->input->post('dataKey');
		foreach($dataList as $n){
			if(array_key_exists($n, $dataForm)){
				if($n == 'male' || $n == 'female')
					$this->session->set_userdata('gender', $dataForm[$n]);
					
				else
					$this->session->set_userdata($n, $dataForm[$n]);
			}
		}
	}

	public function update(){
		$dataList = array('fname', 'lname', 'phone', 'email', 'gender', 'date');
		$forSend = array();
		foreach($dataList as $n){
			$forSend[$n] = $this->session->userdata($n);
			if($forSend[$n] == null)
				$forSend[$n] = '-';
		}

		$forPrint = $this->testModel->update($forSend);
		print_r($forPrint);

		$this->session->sess_destroy();
		// $this->testModel->update();
	}

	public function validate(){
		$dataForm = $this->input->post('dataKey');
		$ret = $this->testModel->writeIntoDb($dataForm);
		print_r($ret);
	}

	public function gotoLogin(){
		$this->load->view('loginPage');
	}
}
