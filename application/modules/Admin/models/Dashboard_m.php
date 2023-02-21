<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{

    function getPengaduan()
    {
        $this->db->where('isActive', '1');
        return $this->db->get('pengaduan')->num_rows();
    }

    function getPengaduanProses()
    {
        $this->db->where('isActive', '1');
        $this->db->where('verifyLaporan', '2');
        return $this->db->get('pengaduan')->num_rows();
    }

    function getPengaduanSelesai()
    {
        $this->db->where('isActive', '1');
        $this->db->where('verifyLaporan', '3');
        return $this->db->get('pengaduan')->num_rows();
    }

    function getPengaduanDitolak()
    {
        $this->db->where('isActive', '1');
        $this->db->where('verifyLaporan', '4');
        return $this->db->get('pengaduan')->num_rows();
    }

}

/* End of file */
