<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kartu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Sekolah_model');
        $this->load->model('Kartu_model');
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data['desain'] = $this->db->get('desain')->result();
        $data['sekolah'] = $this->Sekolah_model->get_by_id();
        $data['title'] = "Pengaturan Kartu";
        $this->load->view('templates/header', $data);
        $this->load->view('admin/kartu', $data);
        $this->load->view('templates/footer', $data);
    }
    public function pilih()
    {
        $desain = [
            'id_desain' => htmlspecialchars($this->input->post('id_desain', true)),
            'desain' => htmlspecialchars($this->input->post('desain', true)),
        ];
        if ($this->Sekolah_model->update(['id' => 1], $desain) > 0) {
            $json = 'success';
        } else {
            $json = 'failed';
        }
        $jsons = [
            'status' => $json,
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($jsons));
    }

    public function upload()
    {
        $this->form_validation->set_rules('kartu_jenis', 'Kartu', 'required', [
            'required' => 'Pilih layout tulisan yang kamu inginkan!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $output = form_error('kartu_jenis');
            $json = 'failed';
        } else {
            $config['upload_path'] = "./asset/kartu/desain/";
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['overwrite'] = false;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('filekartu')) {
                $json = 'failed';
            } else {
                $data = $this->upload->data();
                $json = 'success';
                $output = false;

                $desain = [
                    'desain' => $data['file_name'],
                    'id_desain' => htmlspecialchars($this->input->post('kartu_jenis', true)),
                ];
                $this->Kartu_model->tambah_kartu($desain);
            }
        }
        $outputs = [
            'status' => $json,
            'kartu_error' => $output
        ];

        $this->output->set_content_type('application/json')->set_output(json_encode($outputs));
    }
}
