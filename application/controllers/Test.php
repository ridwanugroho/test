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

	public function update(){
		$this->testModel->update();
	}

	public function validate(){
		$dataForm = $this->input->post('dataKey');
		$ret = $this->testModel->writeIntoDb($dataForm);
		print_r($ret);
	}
}
