<?php
defined('BASEPATH') or exit('No direct script access allowed');

class addData_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('addData_view');
        
    }
    public function AddData()
    {
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $birth_day = $this->input->post('birth_day');
        $sex = $this->input->post('sex');
        if ($sex === 'male') {
            $sex = 0;
        } else if ($sex === 'female') {
            $sex = 1;
        } else {
            $sex = 2;
        }
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'birth_day' => $this->input->post('birth_day'),
            'sex' => $sex,
            'phone_number' => $this->input->post('phone_number'),
            'avt_link' => 'https',
            'number_of_orders' => 0,
        );
        $this->load->model('addData_model');
        if ($this->addData_model->insert($data)) {
            header('Location: ' . base_url() . '/showData_controller');
            exit;
        } else {
            echo "<h1>Something wrong...</h1>";
        }
    }

}
