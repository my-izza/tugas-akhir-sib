<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_tampil');

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong?>Anda Belum Login! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');

            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['row'] = $this->model_tampil->get();

        $this->template->load('template', 'admin/carousel/carousel_data', $data);
    }


    public function add()
    {
        $carousel = new stdClass();
        $carousel->id_carousel = null;
        $carousel->name = null;
        $carousel->label = null;
        $carousel->description = null;
        $carousel->image = null;
        $carousel->status_persetujuan = null;

        $status_persetujuan = $this->model_tampil->get();

        $data = array(
            'page' => 'add',
            'row'  => $carousel,
            'status_persetujuan' => $status_persetujuan
        );

        $this->template->load('template', 'admin/carousel/carousel_form', $data);
    }

    public function edit($id)
    {
        $query = $this->model_tampil->get($id);
        if ($query->num_rows() > 0) {
            $carousel = $query->row();

            $status_persetujuan = $this->model_tampil->get($id);

            $data = array(
                'page' => 'edit',
                'row'  => $carousel,
                'status_persetujuan' => $status_persetujuan
            );

            $this->template->load('template', 'admin/carousel/carousel_form', $data);
        } else {
            echo "<script> alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('administrator/carousel') . "';</script>";
        }
    }
    public function process()
    {

        $config['upload_path'] = 'uploads/slide';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']     = 20000;
        $config['file_name'] = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->model_tampil->add($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/carousel');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/carousel');
                }
            } else {

                $post['image'] = null;
                $this->model_tampil->add($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/carousel');
            }
        } else if (isset($_POST['edit'])) {

            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {

                    $item =  $this->model_tampil->get($post['id'])->row();
                    if ($item->image != null) {
                        $target_file = 'uploads/slide/' . $item->image;
                        unlink($target_file);
                    }

                    $post['image'] = $this->upload->data('file_name');
                    $this->model_tampil->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Data berhasil disimpan');";
                    }
                    redirect('administrator/carousel');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('administrator/carousel');
                }
            } else {

                $post['image'] = null;
                $this->model_tampil->edit($post);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');";
                }
                redirect('administrator/carousel');
            }
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil disimpan');";
        }
        echo "window.location='" . base_url('administrator/carousel') . "';</script>";
    }

    public function del($id)
    {

        $item =  $this->model_tampil->get($id)->row();
        if ($item->image != null) {
            $target_file = 'uploads/slide/' . $item->image;
            unlink($target_file);
        }

        $this->model_tampil->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Data berhasil dihapus');";
        }
        echo "window.location='" . site_url('administrator/carousel') . "';</script>";
    }
}
