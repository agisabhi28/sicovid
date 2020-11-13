<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller

{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		$data['judul'] = 'SI Covid Kabupaten X';
		$data['sum'] = $this->Admin_model->get_sum();
		$data['all_sum'] = $this->Admin_model->getAllsum();
		$data['all_date'] = $this->Admin_model->getAllDate();
		$data['all_today'] = $this->Admin_model->getAllToday();
		$this->load->view('template/header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
}
