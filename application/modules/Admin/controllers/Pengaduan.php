<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaduan_m', 'primaryModel');
    }
    public $titles = 'Pengaduan Yang Masuk';
    public $vn = 'Pengaduan';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->getAllData();

        $this->template->load('template', $this->vn . '/list', $data);
    }

    public function Proses()
    {
        $data['title'] = "Pengaduan Yang Di Proses ";
        $data['pageTitle'] = "Data Pengaduan Yang Di Proses ";
        $data['data'] = $this->primaryModel->getAllData2();

        $this->template->load('template', $this->vn . '/Proses', $data);
    }

    public function Selesai()
    {
        $data['title'] = "Pengaduan Yang Selesai ";
        $data['pageTitle'] = "Data Pengaduan Yang Di Proses ";
        $data['data'] = $this->primaryModel->getAllData3();

        $this->template->load('template', $this->vn . '/Selesai', $data);
    }

    public function Ditolak()
    {
        $data['title'] = "Pengaduan Yang Di Tolak ";
        $data['pageTitle'] = "Data Pengaduan Yang Di Proses ";
        $data['data'] = $this->primaryModel->getAllData4();

        $this->template->load('template', $this->vn . '/Ditolak', $data);
    }

    function add()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $this->template->load('template', $this->vn . '/add', $data);
    }

    function addAction()
    {
        $this->primaryModel->save($this->upload_foto());
        redirect('Admin/' . $this->vn);
    }

    function AccProses()
    {
        $idPengaduan = $this->uri->segment(4);
        $this->primaryModel->AccProses($idPengaduan);
        redirect('Admin/' . $this->vn . '/Proses');
    }

    function setuju()
    {
        $this->primaryModel->setuju();
        redirect('Admin/' . $this->vn . '/Selesai');
    }

    public function detail()
    {
        $data['row'] =  $this->primaryModel->getDataById($this->uri->segment(4));
        $data['title'] = $this->titles;
        $this->template->load('template', $this->vn . '/detail', $data);
    }

    function edit()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Edit Data " . $this->titles;
        $id = $this->uri->segment(4);
        $data['row'] = $this->primaryModel->getDataById($id);
        $this->template->load('template', $this->vn . '/edit', $data);
    }

    function Tolak()
    {
        $data['title'] = "Alasan Ditolak";
        $data['pageTitle'] = "Alasan Ditolak";
        $id = $this->uri->segment(4);
        $data['row'] = $this->primaryModel->getDataById($id);
        $this->template->load('template', $this->vn . '/Tolak', $data);
    }

    function editAction()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->update($id, $this->upload_foto());
        redirect('Admin/' . $this->vn);
    }

    function editDitolak()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->Ditolak($id);
        redirect('Admin/' . $this->vn);redirect('Admin/' . $this->vn . '/Ditolak');
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->delete($id);
        redirect('Admin/' . $this->vn);
    }

    function upload_foto()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5124; // imb
        $this->load->library('upload', $config);
        // proses upload
        $this->upload->do_upload('fotoLaporan');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
}

/* End of file */
