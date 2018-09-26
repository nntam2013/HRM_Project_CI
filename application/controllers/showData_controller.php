<?php
defined('BASEPATH') or exit('No direct script access allowed');
class showData_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('showData_model');
        $data = $this->showData_model->getDatabase();
        $data = array('name' => $data);
        $this->load->view('showData_view', $data, false);
    }

    public function InitDataForDb()
    {
        $name = $this->input->post('name');
        echo $name;
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
        return $data;
    }

    public function ShowDataById($id)
    {
        $this->load->model('showData_model');
        $data = $this->showData_model->getDataById($id);
        $data = array('emp' => $data);
        $this->load->view('editData_view', $data, false);
    }

    public function EditDataById($id)
    {
        $this->load->model('showData_model');
        $data = $this->InitDataForDb();
        if ($this->showData_model->EditById($id, $data)) {
            header('Location: ' . base_url() . '/showData_controller');
            exit;
        } else {
            echo "<h1>Something wrong...</h1>";
        }
    }

    public function DeleteDataById($id)
    {
        $this->load->model('showData_model');
        if ($this->showData_model->DeleteById($id)) {
            header('Location: ' . base_url() . '/showData_controller');
            exit;
        } else {
            echo "<h1>Something wrong...</h1>";
        }
    }

}
