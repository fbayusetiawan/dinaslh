<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dash_m', 'primaryModel');
    }
    public $titles = 'Dash';
    public $vn = 'Dash';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['pengadu'] = $this->primaryModel->getPengadu();
        $data['pengaduan'] = $this->primaryModel->getPengaduan();
        
        $this->template->load('template', $this->vn . '/list', $data);
    }

}

/* End of file Rt.php */
