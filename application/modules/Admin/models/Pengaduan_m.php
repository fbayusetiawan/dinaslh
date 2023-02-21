<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_m extends CI_Model
{

    public $namaTable = 'pengaduan';
    public $pk = 'idPengaduan';

    function getAllData()
    {
        $this->db->where('verifyLaporan', '1');
        $this->db->join('kategorilaporan', 'kategorilaporan.idKategoriLaporan = pengaduan.idKategoriLaporan', 'left');
        return $this->db->get($this->namaTable)->result();
    }

    function getAllData2()
    {
        $this->db->where('verifyLaporan', '2');
        $this->db->join('kategorilaporan', 'kategorilaporan.idKategoriLaporan = pengaduan.idKategoriLaporan', 'left');
        // $this->db->join('pengadu', 'pengadu.idPengadu = pengaduan.idPengadu', 'left');
        return $this->db->get($this->namaTable)->result();
    }

    function getAllData3()
    {
        $this->db->where('verifyLaporan', '3');
        $this->db->join('kategorilaporan', 'kategorilaporan.idKategoriLaporan = pengaduan.idKategoriLaporan', 'left');
        // $this->db->join('pengadu', 'pengadu.idPengadu = pengaduan.idPengadu', 'left');
        return $this->db->get($this->namaTable)->result();
    }

    function getAllData4()
    {
        $this->db->where('verifyLaporan', '4');
        $this->db->join('kategorilaporan', 'kategorilaporan.idKategoriLaporan = pengaduan.idKategoriLaporan', 'left');
        // $this->db->join('pengadu', 'pengadu.idPengadu = pengaduan.idPengadu', 'left');
        return $this->db->get($this->namaTable)->result();
    }

    function getDataById($Value)
    {
        $this->db->join('kategorilaporan', 'kategorilaporan.idKategoriLaporan = pengaduan.idKategoriLaporan', 'left');
        // $this->db->join('pengadu', 'pengadu.idPengadu = pengaduan.idPengadu', 'left');
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }

    function accProses($idPengaduan)
    {
        $object = [
            'verifyLaporan' => '2'
        ];
        $this->db->where('idPengaduan', $idPengaduan);
        $this->db->update('pengaduan', $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengaduan Berhasil Diproses</div>');
    }

    function setuju($idPengaduan)
    {
        $object = [
            'verifyLaporan' => '3'
        ];
        $this->db->where('idPengaduan', $idPengaduan);
        $this->db->update('pengaduan', $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengaduan Disetujui</div>');
    }

    function save($fotoLaporan)
    {
        $object = [
            'idPengaduan' => uniqid(),
            'idPengadu' => $this->session->userdata('idUser'),
            'judulLaporan' => $this->input->post('judulLaporan', TRUE),
            'isiLaporan' => $this->input->post('isiLaporan', TRUE),
            'tanggalLaporan' => $this->input->post('tanggalLaporan', TRUE),
            'lokasiLaporan' => $this->input->post('lokasiLaporan', TRUE),
            'instansiLaporan' => $this->input->post('instansiLaporan', TRUE),
            'kategoriLaporan' => $this->input->post('kategoriLaporan', TRUE),
            'verifyLaporan' => '1',
            'fotoLaporan' => $fotoLaporan,
            'isActive' => '1',
        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function update($Value, $fotoLaporan)
    {
        $object = [
            'judulLaporan' => $this->input->post('judulLaporan', TRUE),
            'isiLaporan' => $this->input->post('isiLaporan', TRUE),
            'tanggalLaporan' => $this->input->post('tanggalLaporan', TRUE),
            'lokasiLaporan' => $this->input->post('lokasiLaporan', TRUE),
            'instansiLaporan' => $this->input->post('instansiLaporan', TRUE),
            'kategoriLaporan' => $this->input->post('kategoriLaporan', TRUE),
            'verifyLaporan' => '1',
            'fotoLaporan' => $fotoLaporan,
        ];
        $this->db->where($this->pk, $Value);
        $this->db->update($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah</div>');
    }

    function ditolak($Value)
    {
        $object = [
            'alasanDitolak' => $this->input->post('alasanDitolak', TRUE),
            'verifyLaporan' => '4',
        ];
        $this->db->where($this->pk, $Value);
        $this->db->update($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengaduan Di Tolak</div>');
    }

    function delete($Value)
    {
        $this->db->where($this->pk, $Value);
        $this->db->delete($this->namaTable);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus</div>');
    }
}

/* End of file */
