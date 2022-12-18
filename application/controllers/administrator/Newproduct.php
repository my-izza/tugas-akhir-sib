<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newproduct extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_newproduct');

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



        $data['row'] = $this->model_newproduct->get();

        $this->template->load('template', 'admin/newproduct/newproduct_data', $data);
    }


    public function add()
    {
        $newproduct = new stdClass();
        $newproduct->id_newproduct = null;
        $newproduct->name = null;
        $newproduct->detail = null;
        $newproduct->category = null;
        $newproduct->harga_asli = null;
        $newproduct->harga_diskon = null;
        $newproduct->stok = null;
        $newproduct->image = null;


        $category = $this->model_newproduct->get();

        $data = array(
            'page' => 'add',
            'row'  => $newproduct,
            'category' => $category
        );

        $this->template->load('template', 'admin/newproduct/newproduct_form', $data);
    }

    public function edit($id)
    {
        $query = $this->model_newproduct->get($id);
        if ($query->num_rows() > 0) {
            $newproduct = $query->row();

            $category = $this->model_newproduct->get($id);

            $data = array(
                'page' => 'edit',
                'row'  => $newproduct,
                'category' => $category
            );

            $this->template->load('template', 'admin/newproduct/newproduct_form', $data);
        } else {
            echo "<script> alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('administrator/newproduct') . "';</script>";
        }
    }
    public function process()
    {

        $config['upload_path'] = 'uploads/newproduct';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']     = 20000;
        $config['file_name'] = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->model_newproduct->add($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/newproduct');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/newproduct');
                }
            } else {

                $post['image'] = null;
                $this->model_newproduct->add($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/newproduct');
            }
        } else if (isset($_POST['edit'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {

                    $item =  $this->model_newproduct->get($post['id'])->row();
                    if ($item->image != null) {
                        $target_file = 'uploads/newproduct/' . $item->image;
                        unlink($target_file);
                    }

                    $post['image'] = $this->upload->data('file_name');
                    $this->model_newproduct->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/newproduct');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/newproduct');
                }
            } else {

                $post['image'] = null;
                $this->model_newproduct->edit($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/newproduct');
            }
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil disimpan');";
        }
        echo "window.location='" . base_url('administrator/newproduct') . "';</script>";
    }

    public function del($id)
    {

        $item =  $this->model_newproduct->get($id)->row();
        if ($item->image != null) {
            $target_file = 'uploads/newproduct/' . $item->image;
            unlink($target_file);
        }

        $this->model_newproduct->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil dihapus');";
        }
        echo "window.location='" . site_url('administrator/newproduct') . "';</script>";
    }
}
