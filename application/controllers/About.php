<?php
class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{


		$data = [

			'nama' => "EUIS NENI HAYATI ",
			'nim' => '10517105',
			'jurusan' => "Sistem Informasi",
			'fakultas' => "Fakultas Teknik dan Ilmu Komputer",

			'nama1' => "AGIS ABHI RAFDHI ",
			'nim1' => '10517073',
			'jurusan1' => "Sistem Informasi",
			'fakultas1' => "Fakultas Teknik dan Ilmu Komputer",

			'nama2' => "RIZKI JUMANSYAH ",
			'nim2' => '10517050',
			'jurusan2' => "Sistem Informasi",
			'fakultas2' => "Fakultas Teknik dan Ilmu Komputer",

			'nama3' => "HERY SAPUTRA ",
			'nim3' => '10517048',
			'jurusan3' => "Sistem Informasi",
			'fakultas3' => "Fakultas Teknik dan Ilmu Komputer",

			'nama4' => "Fernandes Darmawangsa",
			'nim4' => "10517074",
			'jurusan4' => "Sistem Informasi",
			'fakultas4' => "Fakultas Teknik dan Ilmu Komputer"
		];
		$data['judul'] = ' about';


		$this->load->view('template/header', $data);
		$this->load->view('about/index', $data);
		$this->load->view('template/footer');
	}
}
