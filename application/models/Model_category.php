<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_category extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where('tb_product', array('category' => 'Elektronik'));
    }

    public function aplikasi_software()
    {
        return $this->db->get_where('tb_product', array('category' => 'Aplikasi Software'));
    }

    public function data_aksesoris()
    {
        return $this->db->get_where('tb_product', array('category' => 'Aksesoris'));
    }

    public function data_pakaian()
    {
        return $this->db->get_where('tb_product', array('category' => 'Pakaian'));
    }

    public function alat_kantor()
    {
        return $this->db->get_where('tb_product', array('category' => 'Alat Tulis Kantor'));
    }

    public function jam_tangan()
    {
        return $this->db->get_where('tb_product', array('category' => 'Jam Tangan'));
    }
}
