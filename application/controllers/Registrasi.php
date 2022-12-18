<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('name', 'Name', 'required', ['required' => 'Name wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules(
            'password_1',
            'Password',
            'required|matches[password_2]',
            [
                'required' => 'Password wajib diisi!',
                'matches' => 'Password tidak cocok!'
            ]
        );
        $this->form_validation->set_rules('password_2', 'Password', 'required | matches[password_1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            $data = array(
                'id_user' => '',
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post(sha1('password_1')),
                'role_id' => 2
            );
            $this->db->insert('user', $data);
            redirect('auth/login');
        }
    }
}
