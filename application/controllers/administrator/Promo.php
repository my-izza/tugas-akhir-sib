<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_promo');

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

        $data['row'] = $this->model_promo->get();

        $this->template->load('template', 'admin/promo/promo_data', $data);
    }


    public function add()
    {
        $promo = new stdClass();
        $promo->id_promo = null;
        $promo->name = null;
        $promo->detail = null;
        $promo->label = null;
        $promo->harga_asli = null;
        $promo->harga_diskon = null;
        $promo->diskon = null;
        $promo->stok = null;
        $promo->category = null;
        $promo->image = null;


        $category = $this->model_promo->get();

        $data = array(
            'page' => 'add',
            'row'  => $promo,
            'category' => $category
        );

        $this->template->load('template', 'admin/promo/promo_form', $data);
    }

    public function edit($id)
    {
        $query = $this->model_promo->get($id);
        if ($query->num_rows() > 0) {
            $promo = $query->row();

            $category = $this->model_promo->get($id);

            $data = array(
                'page' => 'edit',
                'row'  => $promo,
                'category' => $category
            );

            $this->template->load('template', 'admin/promo/promo_form', $data);
        } else {
            echo "<script> alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('administrator/promo') . "';</script>";
        }
    }
    public function process()
    {

        $config['upload_path'] = 'uploads/promo/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']     = 20000;
        $config['file_name'] = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->model_promo->add($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/promo');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/promo');
                }
            } else {

                $post['image'] = null;
                $this->model_promo->add($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/promo');
            }
        } else if (isset($_POST['edit'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {

                    $item =  $this->model_promo->get($post['id'])->row();
                    if ($item->image != null) {
                        $target_file = 'uploads/promo/' . $item->image;
                        unlink($target_file);
                    }

                    $post['image'] = $this->upload->data('file_name');
                    $this->model_promo->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/promo');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/promo');
                }
            } else {

                $post['image'] = null;
                $this->model_promo->edit($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/promo');
            }
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil disimpan');";
        }
        echo "window.location='" . base_url('administrator/promo') . "';</script>";
    }

    public function del($id)
    {

        $item =  $this->model_promo->get($id)->row();
        if ($item->image != null) {
            $target_file = 'uploads/promo/' . $item->image;
            unlink($target_file);
        }

        $this->model_promo->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil dihapus');";
        }
        echo "window.location='" . site_url('administrator/promo') . "';</script>";
    }
}
