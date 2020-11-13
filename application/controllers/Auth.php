<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	//Method untuk menampilkan halaman login Admin dan surveyor
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {

			$data['judul'] = "Login Page Admin/Surveyor";
			$this->load->view('template/header', $data);
			$this->load->view('auth/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$akun = $this->db->get_where('akun', ['username' => $username])->row_array();
		//jika akunnya ada
		if ($akun) {

			if ($password == $akun['password']) {

				$data = [
					'id_akun' => $akun['id_akun'],
					'nama' => $akun['nama'],
					'username' => $akun['username'],
					'status' 	=> $akun['status']

				];
				$this->session->set_userdata($data);

				if ($akun['status'] == 1) {
					redirect('admin');
				} else {
					redirect('surveyor');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Password Salah
		  </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Akun Tidak Terdaftar
		  </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('status');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Berhasil Logout
	  </div>');
		redirect('auth');
	}
}
