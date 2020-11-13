<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();

        $data['all_date'] = $this->Admin_model->getAllDate();
        $data['judul'] = 'Halaman Admin';
        $data['sum'] = $this->Admin_model->get_sum();
        $data['all_sum'] = $this->Admin_model->getAllsum();
        $data['all_today'] = $this->Admin_model->getAllToday();
        $this->load->view('template/headeradmin', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('template/topbaradmin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    //METHOD Tampil data KECAMATAN
    public function data_kecamatan()
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'Data Kecamatan';
        $data['kecamatan'] = $this->Admin_model->getKecamatan();
        $this->load->view('template/headeradmin', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('template/topbaradmin', $data);
        $this->load->view('admin/datakecamatan', $data);
        $this->load->view('template/footer');
    }
    //Method Tambah data kecamatan
    public function tambahkecamatan()
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'Form Tambah Data Kecamatan';

        $this->form_validation->set_rules('nama', 'Nama Kecamatan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headeradmin', $data);
            $this->load->view('template/sidebaradmin', $data);
            $this->load->view('template/topbaradmin', $data);
            $this->load->view('admin/tambahkecamatan');
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->tambahDataKecamatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil Ditambahkan
		  </div>');
            redirect('admin/data_kecamatan');
        }
    }

    //Method Edit Data Kecamatan
    public function editkecamatan($id)
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'form Ubah Data Kecamatan';
        $data['kecamatan'] = $this->Admin_model->getKecamatanById($id);

        $this->form_validation->set_rules('nama', 'Nama Kecamatan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headeradmin', $data);
            $this->load->view('template/sidebaradmin', $data);
            $this->load->view('template/topbaradmin', $data);
            $this->load->view('admin/ubahkecamatan', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->editDataKecamatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Berhasil Diubah
		  </div>');
            redirect('admin/data_kecamatan');
        }
    }


    //METHOD BAGIAN SURVEYOR
    public function data_surveyor()
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'Data Surveyor';
        $data['survey'] = $this->Admin_model->getSurveyor();
        $this->load->view('template/headeradmin', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('template/topbaradmin', $data);
        $this->load->view('admin/datasurveyor', $data);
        $this->load->view('template/footer');
    }

    //Method Tambah Data Surveyor
    public function tambahsurveyor()
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'form Tambah Akun Surveyor';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('sandi', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headeradmin', $data);
            $this->load->view('template/sidebaradmin', $data);
            $this->load->view('template/topbaradmin', $data);
            $this->load->view('admin/tambahsurveyor', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->tambahDataSurveyor();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/data_surveyor');
        }
    }

    //Method Tambah Data Surveyor
    public function editsurveyor($id)
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'form Ubah Data Surveyor';
        $data['surveyor'] = $this->Admin_model->getSurveyorById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('sandi', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headeradmin', $data);
            $this->load->view('template/sidebaradmin', $data);
            $this->load->view('template/topbaradmin', $data);
            $this->load->view('admin/ubahsurveyor', $data);
            $this->load->view('template/footer');
        } else {
            $this->Admin_model->editDataSurveyor();
            $this->session->set_flashdata('message', 'Diubah');
            redirect('admin/data_surveyor');
        }
    }


    //Method Tampil Data inputan Covid
    public function data_covid()
    {
        $data['admin'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $data['judul'] = 'Data Covid';
        $data['all'] = $this->Admin_model->getAll();

        $this->load->view('template/headeradmin', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('template/topbaradmin', $data);
        $this->load->view('admin/datacovid', $data);
        $this->load->view('template/footeradmin');
    }

    //LAPORAN ADmin
    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['covid'] = $this->Admin_model->get_sum();
        $data['all_sum'] = $this->Admin_model->getAllsum();

        $this->load->view('laporan/laporan_pdf', $data);

        $paper_size = "A4";
        $orientation = "potrait";
        $html = $this->output->get_output();
        $this->dompdf->set_paper('$paper_size, $orientation');

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_kecamatan", array('Attachment' => 0));
    }
}
