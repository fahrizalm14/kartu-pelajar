<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Sekolah_model');
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data = $this->Sekolah_model->get_by_id();
        $id = $data['id_desain'];
        if ($id == 1) {
            $this->contoh();
        } else {
            $this->contoh2();
        }
    }
    public function contoh()
    {
        $data['sekolah'] = $this->Sekolah_model->get_by_id();
        $this->load->view('contoh', $data);
    }
    public function contoh2()
    {
        $data['sekolah'] = $this->Sekolah_model->get_by_id();
        $this->load->view('contoh2', $data);
    }
    public function semua()
    {
        $data = $this->Sekolah_model->get_by_id();
        $id = $data['id_desain'];
        if ($id == 1) {
            $this->cetak_semua();
        } else {
            $this->cetak_semua2();
        }
    }

    public function cetak_semua()
    {
        $data['sekolah'] = $this->Sekolah_model->get_by_id();
        $data['siswa'] = $this->Siswa_model->json();
        $this->load->view('cetak_semua', $data);
    }

    public function cetak_semua2()
    {
        $data['sekolah'] = $this->Sekolah_model->get_by_id();
        $data['siswa'] = $this->Siswa_model->json();
        $this->load->view('cetak_semua2', $data);
    }
}
