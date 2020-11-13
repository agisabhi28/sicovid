<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_kec extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {

            $data['judul'] = "Login Page Kecamatan";
            $this->load->view('template/header', $data);
            $this->load->view('login_kec.php');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $kecamatan = $this->db->get_where('kecamatan', ['username' => $username])->row_array();

        if ($kecamatan) {

            if ($password == $kecamatan['password']) {

                $data = [
                    'id_kecamatan' => $kecamatan['id_kecamatan'],
                    'nama_kecamatan' => $kecamatan['nama_kecamatan'],
                    'username' => $kecamatan['username']
                ];
                $this->session->set_userdata($data);
                redirect('kecamatan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Salah
              </div>');
                redirect('login_kec');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akun Tidak Terdaftar
          </div>');
            redirect('login_kec');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_kecamatan');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama_kecamatan');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Logout
          </div>');
        redirect('login_kec');
    }
}
