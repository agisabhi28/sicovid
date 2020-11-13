<?php

class Kecamatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kecamatan_model');
        $this->load->library('form_validation');
    }

    //Method Tampil Data Halaman Kecamatan
    public function index()
    {
        $data['kecamat'] = $this->db->get_where('kecamatan', ['username' => $this->session->userdata['username']])->row_array();

        //variabel id_kecamatan dibuat untuk menampilkan data berdasarkan id_kecamatan pada saat login
        $id_kecamatan = $data['kecamat']['id_kecamatan'];
        $data['id_kecamatan'] = $data['kecamat']['id_kecamatan'];

        $data['judul'] = 'Data covid Kecamatan';
        $data['kecamatan'] = $this->Kecamatan_model->getAllKecamatan($id_kecamatan);
        $this->load->view('template/headerkec', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('kecamatan/index', $data);
        $this->load->view('template/footer');
    }
    //Method Tambah Data Covid Halaman Kecamatan
    public function tambah()
    {

        $data['kecamat'] = $this->db->get_where('kecamatan', ['username' => $this->session->userdata['username']])->row_array();
        $data['id_kecamatan'] = $data['kecamat']['id_kecamatan'];


        $data['judul'] = 'form tambah data covid';

        $this->form_validation->set_rules('tanggal', 'TANGGAL', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('status_cek', 'STATUS CEK', 'required');
        $this->form_validation->set_rules('positif', 'POSITIF', 'required');
        $this->form_validation->set_rules('odp', 'ODP', 'required');
        $this->form_validation->set_rules('pdp', 'PDP', 'required');
        $this->form_validation->set_rules('sembuh', 'SEMBUH', 'required');
        $this->form_validation->set_rules('meninggal', 'MENINGGAL', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headerkec', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('kecamatan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Kecamatan_model->tambahDataCovid();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
			Data Berhasil Ditambahkan
		  </div>');
            redirect('kecamatan');
        }
    }

    public function tolak()
    {
        $data['kecamat'] = $this->db->get_where('kecamatan', ['username' => $this->session->userdata['username']])->row_array();
        $data['id_kecamatan'] = $data['kecamat']['id_kecamatan'];
        $id_kecamatan = $data['kecamat']['id_kecamatan'];

        $data['judul'] = 'Data covid Rejected';
        $data['kecamatan'] = $this->Kecamatan_model->getKecamatanTolak($id_kecamatan);
        $this->load->view('template/headerkec', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('kecamatan/tolak', $data);
        $this->load->view('template/footer');
    }

    public function editTolak($id)
    {
        $data['judul'] = 'Form Tolak Data Covid';
        $data['id'] = $this->Kecamatan_model->getCovidById($id);
        $data['kec'] = $this->Kecamatan_model->getKecamatan();
        $data['kecamatan'] = $this->db->get_where('kecamatan', ['username' => $this->session->userdata['username']])->row_array();

        $this->form_validation->set_rules('tanggal', 'TANGGAL', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('status_cek', 'STATUS CEK', 'required');
        $this->form_validation->set_rules('positif', 'POSITIF', 'required');
        $this->form_validation->set_rules('odp', 'ODP', 'required');
        $this->form_validation->set_rules('pdp', 'PDP', 'required');
        $this->form_validation->set_rules('sembuh', 'SEMBUH', 'required');
        $this->form_validation->set_rules('meninggal', 'MENINGGAL', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headerkec', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('kecamatan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Kecamatan_model->editDataCovid();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
			Berhasil Diubah
		  </div>');
            redirect('kecamatan/tolak');
        }
    }

    public function BelumVerif()
    {
        $data['kecamat'] = $this->db->get_where('kecamatan', ['username' => $this->session->userdata['username']])->row_array();

        //variabel id_kecamatan dibuat untuk menampilkan data berdasarkan id_kecamatan pada saat login
        $id_kecamatan = $data['kecamat']['id_kecamatan'];
        $data['id_kecamatan'] = $data['kecamat']['id_kecamatan'];

        $data['judul'] = 'Data covid Kecamatan';
        $data['kecamatan'] = $this->Kecamatan_model->getBelumVerif($id_kecamatan);
        $this->load->view('template/headerkec', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('kecamatan/belumverif', $data);
        $this->load->view('template/footer');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['kecamat'] = $this->db->get_where('kecamatan', ['username' => $this->session->userdata['username']])->row_array();

        //variabel id_kecamatan dibuat untuk menampilkan data berdasarkan id_kecamatan pada saat login
        $id_kecamatan = $data['kecamat']['id_kecamatan'];

        //untuk mengambil data yg login 
        $data['kecamatan'] = $this->Kecamatan_model->getAllKecamatan($id_kecamatan);
        $data['jumlah'] = $this->Kecamatan_model->sum_kecamatan($id_kecamatan);
        $this->load->view('laporan/laporan_kecamatan', $data);

        $paper_size = "A4";
        $orientation = "potrait";
        $html = $this->output->get_output();
        $this->dompdf->set_paper('$paper_size, $orientation');

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_kecamatan", array('Attachment' => 0));
    }
}
