<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_m', 'primaryModel');
    }

    function Masuk()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['data'] = $this->primaryModel->Masuk($dari, $sampai);
        $this->load->view('laporan/Masuk', $data);
    }
}

/* End of file Laporan.php */
