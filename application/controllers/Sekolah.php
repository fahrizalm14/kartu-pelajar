<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Sekolah_model');
        $this->load->library(array('PHPExcel', 'PHPExcel/IOFactory'));
    }

    public function index()
    {
        $data['sekolah'] = $this->Sekolah_model->get_by_id();
        $data['title'] = "Data Sekolah";
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sekolah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function edit_sekolah()
    {
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'required', [
            'required' => 'Nama sekolah tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'required', [
            'required' => 'Lembaga sekolah tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required', [
            'required' => 'Lokasi tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('domisili', 'Domisili', 'required', [
            'required' => 'Kota/kabupaten tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode pos', 'required', [
            'required' => 'Kode pos tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required', [
            'required' => 'Telepon tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('website', 'Website', 'required', [
            'required' => 'Website pos tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('kepsek', 'Kepala sekolah', 'required', [
            'required' => 'Kepala sekolah tidak boleh kosong!'
        ]);
        $data = [
            'sekolah' => htmlspecialchars($this->input->post('sekolah', true)),
            'lembaga' => htmlspecialchars($this->input->post('lembaga', true)),
            'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'domisili' => htmlspecialchars($this->input->post('domisili', true)),
            'kota' => htmlspecialchars($this->input->post('kota', true)),
            'kode_pos' => htmlspecialchars($this->input->post('kode_pos', true)),
            'telepon' => htmlspecialchars($this->input->post('telepon', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'website' => htmlspecialchars($this->input->post('website', true)),
            'kepsek' => htmlspecialchars($this->input->post('kepsek', true)),
        ];
        if ($this->form_validation->run() == FALSE) {
            $output = [
                'error'   => true,
                'sekolah_error' => form_error('sekolah'),
                'lembaga_error' => form_error('lembaga'),
                'lokasi_error' => form_error('lokasi'),
                'alamat_error' => form_error('alamat'),
                'domisili_error' => form_error('domisili'),
                'kota_error' => form_error('kota'),
                'kode_pos_error' => form_error('kode_pos'),
                'telepon_error' => form_error('telepon'),
                'email_error' => form_error('email'),
                'website_error' => form_error('website'),
                'kepsek_error' => form_error('kepsek'),
            ];
        } else {
            if ($this->Sekolah_model->update(['id' => $this->input->post('id')], $data) > 0) {
                $output = [
                    'success'   => true,
                ];
            } else {
                $output = [
                    'success'   => false,
                ];
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function stempel()
    {
        $config['upload_path'] = "./asset/kartu/stempel/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1024';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('stempel')) {
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $json = 'success';
            $stempel = [
                'stempel' => $data['file_name'],
            ];
            $this->Sekolah_model->update(['id' => 1], $stempel);
        }
        $jsons = [
            'status' => $json,
            'filename' => $data['file_name']

        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($jsons));
    }
    public function ttd()
    {
        $config['upload_path'] = "./asset/kartu/ttd/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1024';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ttd')) {
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $json = 'success';
            $ttd = [
                'tanda_tangan' => $data['file_name'],
            ];
            $this->Sekolah_model->update(['id' => 1], $ttd);
        }
        $jsons = [
            'status' => $json,
            'filename' => $data['file_name']

        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($jsons));
    }
    public function logo()
    {
        $config['upload_path'] = "./asset/kartu/logo/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1024';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $json = 'success';
            $logo = [
                'logo' => $data['file_name'],
            ];
            $this->Sekolah_model->update(['id' => 1], $logo);
        }
        $jsons = [
            'status' => $json,
            'filename' => $data['file_name']

        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($jsons));
    }

    public function dinas()
    {
        $config['upload_path'] = "./asset/kartu/dinas/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1024';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('dinas')) {
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $json = 'success';
            $logo = [
                'dinas' => $data['file_name'],
            ];
            $this->Sekolah_model->update(['id' => 1], $logo);
        }
        $jsons = [
            'status' => $json,
            'filename' => $data['file_name']

        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($jsons));
    }
    public function tata()
    {
        $multi[] =  $this->input->post('name');
        $single = call_user_func_array('array_merge', $multi);

        $string_version = "<li>" . implode("</li><li>", $single) . "</li>";
        $singl = [
            'visi_misi' => $string_version
        ];
        $this->db->where('id', 1);
        $this->db->update('sekolah', $singl);
    }
}
