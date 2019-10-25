<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model{

    private $table;
    public $id;
    public $fname;
    public $lname;
    public $dateOfBirth;
    public $gener;
    public $phone;
    public $email;

    public function validate(){
        
    }

    public function update(){

    }

    public function getAllData($data){
        $this->db->insert('userinfo', $data);
    }
}