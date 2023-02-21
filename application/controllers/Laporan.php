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

    function Proses()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['data'] = $this->primaryModel->Proses($dari, $sampai);
        $this->load->view('laporan/Proses', $data);
    }
    
    function Ditolak()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['data'] = $this->primaryModel->Ditolak($dari, $sampai);
        $this->load->view('laporan/Ditolak', $data);
    }

    function Selesai()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['data'] = $this->primaryModel->Selesai($dari, $sampai);
        $this->load->view('laporan/Selesai', $data);
    }

    function Kategori()
    {
        $kategori = $this->input->post('idKategoriLaporan');
        $data['data'] = $this->primaryModel->Kategori($kategori);
        $this->load->view('laporan/Kategori', $data);
    }
}

/* End of file Laporan.php */
