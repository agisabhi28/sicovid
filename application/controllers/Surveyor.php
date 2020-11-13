<?php
class Surveyor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surveyor_model');
        $this->load->library('form_validation');
    }

    //Method Halaman Utama Surveyor
    public function index()
    {
        $data['surveyor'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();

        $data['judul'] = 'Surveyor Page';
        $data['all'] = $this->Surveyor_model->getAllcovid();
        $this->load->view('template/headersurveyor', $data);
        $this->load->view('template/sidebarsurveyor', $data);
        $this->load->view('template/topbarsurveyor', $data);
        $this->load->view('surveyor/index', $data);
        $this->load->view('template/footeradmin');
    }

    //Method untuk Konfirmasi Data Covid
    public function update($id)
    {
        $data['judul'] = 'form Ubah Data Covid';
        $data['id'] = $this->Surveyor_model->getCovidById($id);
        $data['kec'] = $this->Surveyor_model->getKecamatan();
        $data['surveyor'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();

        $this->form_validation->set_rules('tanggal', 'TANGGAL', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('status_cek', 'STATUS CEK', 'required');
        $this->form_validation->set_rules('positif', 'POSITIF', 'required');
        $this->form_validation->set_rules('odp', 'ODP', 'required');
        $this->form_validation->set_rules('pdp', 'PDP', 'required');
        $this->form_validation->set_rules('sembuh', 'SEMBUH', 'required');
        $this->form_validation->set_rules('meninggal', 'MENINGGAL', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headersurveyor', $data);
            $this->load->view('template/sidebarsurveyor', $data);
            $this->load->view('template/topbarsurveyor', $data);
            $this->load->view('surveyor/ubahstatus', $data);
            $this->load->view('template/footeradmin');
        } else {
            $this->Surveyor_model->editDataCovid();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('surveyor');
        }
    }

    //Method untuk menampilkan data yang dikonfirmasi oleh surveyor tersebut
    public function verified()
    {
        $data['judul'] = 'Data Terverifikasi';
        $data['surveyor'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();
        $id = $data['surveyor']['id_akun'];
        $data['covid'] = $this->Surveyor_model->getVerifikasi($id);

        $this->load->view('template/headersurveyor', $data);
        $this->load->view('template/sidebarsurveyor', $data);
        $this->load->view('template/topbarsurveyor', $data);
        $this->load->view('surveyor/verified', $data);
        $this->load->view('template/footer');
    }

    //Method Hapus data covid yang tidak sesuai
    public function tolak($id)
    {
        $data['judul'] = 'Form Tolak Data Covid';
        $data['id'] = $this->Surveyor_model->getCovidById($id);
        $data['kec'] = $this->Surveyor_model->getKecamatan();
        $data['surveyor'] = $this->db->get_where('akun', ['username' => $this->session->userdata['username']])->row_array();

        $this->form_validation->set_rules('tanggal', 'TANGGAL', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('status_cek', 'STATUS CEK', 'required');
        $this->form_validation->set_rules('positif', 'POSITIF', 'required');
        $this->form_validation->set_rules('odp', 'ODP', 'required');
        $this->form_validation->set_rules('pdp', 'PDP', 'required');
        $this->form_validation->set_rules('sembuh', 'SEMBUH', 'required');
        $this->form_validation->set_rules('meninggal', 'MENINGGAL', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/headersurveyor', $data);
            $this->load->view('template/sidebarsurveyor', $data);
            $this->load->view('template/topbarsurveyor', $data);
            $this->load->view('surveyor/reject', $data);
            $this->load->view('template/footer');
        } else {
            $this->Surveyor_model->editDataCovid();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('surveyor');
        }
    }
}
