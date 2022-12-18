<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_product');

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong?>Anda Belum Login! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');

            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['row'] = $this->model_product->get();

        $this->template->load('template', 'admin/product/product_data', $data);
    }


    public function add()
    {
        $product = new stdClass();
        $product->id_product = null;
        $product->name = null;
        $product->detail = null;
        $product->harga_asli = null;
        $product->harga_diskon = null;
        $product->stok = null;
        $product->image = null;
        $product->category = null;
        $product->status_persetujuan = null;


        $category = $this->model_product->get();
        $status_persetujuan = $this->model_product->get();

        $data = array(
            'page' => 'add',
            'row'  => $product,
            'category' => $category,
            'status_persetujuan' => $status_persetujuan
        );

        $this->template->load('template', 'admin/product/product_form', $data);
    }

    public function edit($id)
    {
        $query = $this->model_product->get($id);
        if ($query->num_rows() > 0) {
            $product = $query->row();

            $category = $this->model_product->get($id);
            $status_persetujuan = $this->model_product->get($id);

            $data = array(
                'page' => 'edit',
                'row'  => $product,
                'category' => $category,
                'status_persetujuan' => $status_persetujuan
            );

            $this->template->load('template', 'admin/product/product_form', $data);
        } else {
            echo "<script> alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('administrator/product') . "';</script>";
        }
    }
    public function process()
    {

        $config['upload_path'] = 'uploads/product/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']     = 20000;

        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->model_product->add($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/product');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/product');
                }
            } else {

                $post['image'] = null;
                $this->model_product->add($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/product');
            }
        } else if (isset($_POST['edit'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {

                    $item =  $this->model_product->get($post['id'])->row();
                    if ($item->image != null) {
                        $target_file = 'uploads/product/' . $item->image;
                        unlink($target_file);
                    }

                    $post['image'] = $this->upload->data('file_name');
                    $this->model_product->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/product');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/product');
                }
            } else {

                $post['image'] = null;
                $this->model_product->edit($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/product');
            }
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil disimpan');";
        }
        echo "window.location='" . base_url('administrator/product') . "';</script>";
    }

    public function del($id)
    {

        $item =  $this->model_product->get($id)->row();
        if ($item->image != null) {
            $target_file = 'uploads/product/' . $item->image;
            unlink($target_file);
        }

        $this->model_product->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil dihapus');";
        }
        echo "window.location='" . site_url('administrator/product') . "';</script>";
    }
}
