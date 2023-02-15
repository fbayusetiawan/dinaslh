<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_m', 'primaryModel');
    }


    public function index()
    {
        $this->load->view('register/add');
    }

    public function addAction()
    {
        $this->primaryModel->savePelapor();
        redirect('auth/login');
    }
}

/* End of file register.php */
