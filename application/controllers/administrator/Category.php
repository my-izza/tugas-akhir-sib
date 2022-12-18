<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_category');
    }

    public function elektronik()
    {
        $data['product'] = $this->model_category->data_elektronik()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function software()
    {
        $data['product'] = $this->model_category->aplikasi_software()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function aksesoris()
    {
        $data['product'] = $this->model_category->data_aksesoris()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian()
    {
        $data['product'] = $this->model_category->data_pakaian()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function alat_kantor()
    {
        $data['product'] = $this->model_category->alat_kantor()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }
    public function jam_tangan()
    {
        $data['product'] = $this->model_category->jam_tangan()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function elektronik_user()
    {
        $data['product'] = $this->model_category->data_elektronik()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function software_user()
    {
        $data['product'] = $this->model_category->aplikasi_software()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function aksesoris_user()
    {
        $data['product'] = $this->model_category->data_aksesoris()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function pakaian_user()
    {
        $data['product'] = $this->model_category->data_pakaian()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function alat_kantor_user()
    {
        $data['product'] = $this->model_category->alat_kantor()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }
    public function jam_tangan_user()
    {
        $data['product'] = $this->model_category->jam_tangan()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }
}
