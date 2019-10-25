<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model{

    private $table = 'userinfo';


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

        print_r($arr);

        // $this->db->insert($arr, $this->table);
    }

    public function writeIntoDb($data){
        $needCheck = array('phone', 'email');
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
    }
}