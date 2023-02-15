<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_m extends CI_Model
{

    public $table = "user";
    public $pk = "idUser";

    public function getDataByUser($Value)
    {
        $this->db->where('username', $Value);
        return $this->db->get($this->table)->row();
    }

    public function getDataByPegawai($Value)
    {
        $this->db->where('username', $Value);
        return $this->db->get('pegawai')->row();
    }

    public function getDataByPengadu($Value)
    {
        $this->db->where('username', $Value);
        return $this->db->get('pengadu')->row();
    }

    function savePelapor()
    {
        $object = [
            'idPengadu' => uniqid(),
            'namaPengadu' => $this->input->post('namaPengadu', TRUE),
            'nikPengadu' => $this->input->post('nikPengadu', TRUE),
            'noTelp' => $this->input->post('noTelp', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'email' => $this->input->post('email', TRUE),
            'username' => $this->input->post('username', TRUE),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'password1' => $this->input->post('password1', TRUE),
            'roleId' => '3',
            'isActive' => '1',
        ];
        $this->db->insert('pengadu', $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Akun anda telah terdaftar!</div>');
    }
}

/* End of file user_m.php */
