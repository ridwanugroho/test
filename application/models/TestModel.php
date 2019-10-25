<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model{

    private $table = 'userinfo';
    private $fname;
    private $lname;
    private $date;
    private $gender;
    private $phone;
    private $email;

    public function generateId(){
        $this->db->select('id');
        $this->db->from($this->table);
        $dt = $this->db->get();
        $inf = json_decode(json_encode($dt->result()), True);
        $i = 0;
        foreach($inf as $n){
            $i++;
        }

        return $i;
    }

    public function checkExisting($field, $data){
        $this->db->select($field);
        $this->db->from($this->table);
        $dt = $this->db->get();
        $inf = json_decode(json_encode($dt->result()), True);
        $i = 0;
        foreach($inf as $n){
            if($data == $inf[$i][$field])
                return false;

            $i++;
        }

        return true;
    }

    public function update(){
        $arr['id'] = (string)$this->generateId();
        $arr['fname'] = $this->fname;
        $arr['lname'] = $this->lname;
        $arr['phone'] = $this->phone;
        $arr['email'] = $this->email;
        $arr['gender'] = $this->gender;
        $arr['dob'] = $this->date;

        print_r($arr);

        // $this->db->insert($arr, $this->table);
    }

    public function writeIntoDb($data){
        $needCheck = array('phone', 'email');
        $noNeedCheck = array('fname', 'lname', 'male', 'female', 'date');
        foreach($needCheck as $n){
            if(array_key_exists($n, $data)){
                if($this->checkExisting($n, $data[$n])){
                    if($n == 'phone')
                        $this->phone = $data[$n];

                    else 
                        $this->email = $data[$n];
                    return 'valid';
                }

                else
                    return 'invalid';
            }
        }

        foreach($noNeedCheck as $n){
            if(array_key_exists($n, $data)){
                switch($n){
                    case 'fname': 
                        $this->fname = $data[$n]; 
                        print_r($this->fname);
                        break;
                    case 'lname': 
                        $this->lname = $data[$n]; 
                        print_r($this->lname);
                        break;
                    case 'male': 
                        $this->gender = $data[$n]; 
                        print_r($this->gender);
                        break;
                    case 'female': 
                        $this->gender = $data[$n]; 
                        print_r($this->gender);
                        break;
                    case 'date': 
                        $this->date = $data[$n]; 
                        print_r($this->date);
                        break;
                }
            }
        }
    }
}