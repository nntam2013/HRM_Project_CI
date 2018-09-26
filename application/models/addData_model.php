<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addData_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function insert($data){
        $this->db->insert('employees',$data);
        return $this->db->insert_id();
    }
}