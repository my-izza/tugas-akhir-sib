<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_tampil');
        $this->load->model('model_product');
        $this->load->model('model_promo');
        $this->load->model('model_product');
    }

    public function index()
    {

        $data['carousel'] = $this->model_tampil->getCarausel();

        $data['promo'] = $this->model_tampil->getPromo();

        $data['newproduct'] = $this->model_tampil->getProduct()->result();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }


    public function about()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/about');
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/contact');
        $this->load->view('templates/footer');
    }

    public function product()
    {
        $data['product'] = $this->model_product->getProduct();
        $data['promo'] = $this->model_promo->get()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/products', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['product'] = $this->model_product->detail($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/detail_product', $data);
        $this->load->view('templates/footer');
    }

    public function search()
    {

        $keyword = $this->input->post('keyword');
        $data['product'] = $this->model_product->getKeyword($keyword);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function termahal()
    {

        $data['product'] = $this->model_tampil->hargaMahal();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function termurah()
    {

        $data['product'] = $this->model_tampil->hargaMurah();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates/footer');
    }

    public function detailpromo($id)
    {
        $data['promo'] = $this->model_promo->detail($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/detail_promo', $data);
        $this->load->view('templates/footer');
    }
}
