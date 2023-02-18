<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_m extends CI_Model
{
    function Masuk($dari, $sampai)
    {
        $this->db->where('tanggalLaporan BETWEEN "' . $dari . '" AND "' . $sampai . '"');
        $this->db->where('verifyLaporan', '1');
        $this->db->join('kategorilaporan', 'kategorilaporan.idKategoriLaporan = pengaduan.idKategoriLaporan', 'left');
        return $this->db->get('pengaduan')->result();
    }
}

/* End of file Laporan_m.php */
