<?php
class Admin_model extends CI_Model
{

    //Menampilkan semua Data pada tabel Covid
    public function getAll()
    {
        $this->db->select('nama_kecamatan');
        $this->db->select('tanggal');
        $this->db->select('positif');
        $this->db->select('odp');
        $this->db->select('pdp');
        $this->db->select('sembuh');
        $this->db->select('meninggal');
        $this->db->select('nama');
        $this->db->from('covid');
        $this->db->join('kecamatan', 'covid.id_kecamatan=kecamatan.id_kecamatan');
        $this->db->join('akun', 'covid.id_akun=akun.id_akun');

        return $this->db->get()->result_array();
    }
    //Ambil data berdasarkan nama kecamatan Untuk Halaman Admin
    public function get_sum()
    {
        $this->db->select('nama_kecamatan');
        $this->db->select_sum('positif');
        $this->db->select_sum('odp');
        $this->db->select_sum('pdp');
        $this->db->select_sum('sembuh');
        $this->db->select_sum('meninggal');
        $this->db->from('covid');
        $this->db->join('kecamatan', 'covid.id_kecamatan=kecamatan.id_kecamatan');
        $this->db->group_by('covid.id_kecamatan');

        return $query = $this->db->get()->result_array();
    }


    //Menampilkan Data Seluruh Jumlah Covid
    public function getAllsum()
    {
        $this->db->select_sum('positif');
        $this->db->select_sum('odp');
        $this->db->select_sum('pdp');
        $this->db->select_sum('sembuh');
        $this->db->select_sum('meninggal');
        $this->db->from('covid');
        $this->db->where('status_cek', '2');

        return $query = $this->db->get()->result_array();
    }


    //Manmpilkan penambahan se-Kota Per hari nya
    public function getAllToday()
    {
        $this->db->select('tanggal');
        $this->db->select_sum('positif');
        $this->db->select_sum('odp');
        $this->db->select_sum('pdp');
        $this->db->select_sum('sembuh');
        $this->db->select_sum('meninggal');
        $this->db->from('covid');
        $this->db->where('status_cek', '2');
        $this->db->group_by('tanggal');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit('1');


        return $query = $this->db->get()->result_array();
    }

    //Menampilkan Data seluruh jumlah namun dikelompokkan berdasarkan tanggal
    public function getAllDate()
    {
        $this->db->select('tanggal');
        $this->db->select_sum('positif');
        $this->db->select_sum('odp');
        $this->db->select_sum('pdp');
        $this->db->select_sum('sembuh');
        $this->db->select_sum('meninggal');
        $this->db->from('covid');
        $this->db->where('status_cek', '2');
        $this->db->group_by('tanggal');


        return $query = $this->db->get()->result_array();
    }



    //METHOD UNTUK KECAMATAN
    public function getKecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');

        return $this->db->get()->result_array();
    }

    public function getKecamatanById($id)
    {
        return $this->db->get_where('kecamatan', ['id_kecamatan' => $id])->row_array();
    }

    public function tambahDataKecamatan()
    {
        $data = [
            "nama_kecamatan" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('pass', true)
        ];

        $this->db->insert('kecamatan', $data);
    }

    public function editDataKecamatan()
    {
        $data = [
            "nama_kecamatan" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('pass', true)
        ];

        $this->db->where('id_kecamatan', $this->input->post('id_kecamatan'));
        $this->db->update('kecamatan', $data);
    }


    //METHOD UNTUK SURVEYOR

    public function getSurveyor()
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('status', '2');
        return $this->db->get()->result_array();
    }

    public function tambahDataSurveyor()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('sandi', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->insert('akun', $data);
    }

    public function editDataSurveyor()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('sandi', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->where('id_akun', $this->input->post('id_akun'));
        $this->db->update('akun', $data);
    }

    public function getSurveyorById($id)
    {
        return $this->db->get_where('akun', ['id_akun' => $id])->row_array();
    }
}
