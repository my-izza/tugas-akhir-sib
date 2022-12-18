<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong?>Anda Belum Login! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');

            redirect('auth/login');
        }

        $this->load->model('model_tampil');
        $this->load->model('model_product');
        $this->load->model('model_promo');
    }

    public function index()
    {
        $data['carousel'] = $this->model_tampil->getCarausel();

        $data['promo'] = $this->model_tampil->getPromo();

        $data['newproduct'] = $this->model_tampil->getProduct()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('home', $data);
        $this->load->view('templates_user/footer');
    }

    public function about()
    {
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/about');
        $this->load->view('templates_user/footer');
    }

    public function contact()
    {
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/contact');
        $this->load->view('templates_user/footer');
    }

    public function product()
    {
        $data['product'] = $this->model_product->getProduct();
        $data['promo'] = $this->model_promo->get()->result();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/products_user',  $data);
        $this->load->view('templates_user/footer');
    }

    public function search()
    {

        $keyword = $this->input->post('keyword');
        $data['product'] = $this->model_product->getKeyword($keyword);

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function termahal()
    {

        $data['product'] = $this->model_product->hargaMahal();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function termurah()
    {

        $data['product'] = $this->model_product->hargaMurah();

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cari_products', $data);
        $this->load->view('templates_user/footer');
    }

    public function detail($id)
    {
        $data['product'] = $this->model_product->detail($id);

        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/detail_product', $data);
        $this->load->view('templates_user/footer');
    }

    public function keranjang($id)
    {
        $product = $this->model_product->find($id);

        $data = array(
            'id'    => $product->id_product,
            'qty'   => 1,
            'price' => $product->harga_diskon,
            'name'  => $product->name
        );

        $this->cart->insert($data);
        redirect('user/home_user/product');
    }

    public function cart()
    {
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/cart');
        $this->load->view('templates_user/footer');
    }
}
