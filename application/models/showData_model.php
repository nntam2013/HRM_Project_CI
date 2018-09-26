<?php
defined('BASEPATH') or exit('No direct script access allowed');

class showData_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDatabase()
    {
        $this->db->select('*');
        $result = $this->db->get('employees');
        return $result = $result->result_array();
    }

    public function getDataById($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $data = $this->db->get('employees');
        $data = $data->result_array();
        return $data;
    }

    public function EditById($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        return $this->db->update('employees',$data);
    }

    public function DeleteById($id){
        $this->db->where('id',$id);
        return $this->db->delete('employees');
    }
}
