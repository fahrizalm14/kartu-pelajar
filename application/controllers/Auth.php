<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Adminmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Login';
        $this->load->view('masuk', $data);
    }

    public function error()
    {
        $data['title'] = 'Ooops error';
        $this->load->view('error', $data);
    }

    public function login()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
        $user = $this->Adminmodel->get($username); // Panggil fungsi get yang ada di UserModel.php        
        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', '<div class ="alert alert-danger" role= "alert">Username belum terdaftar!</div>'); // Buat session flashdata
            redirect('auth'); // Redirect ke halaman login
        } else {
            if (password_verify($password, $user['password'])) { // Jika password yang diinput sama dengan password yang didatabase
                $session =
                    array(

                        'username' => $user['username'],  // Buat session username
                        'level' => $user['level'],  // Buat session level
                        'status' => 'bismillah',  // Buat session level
                    );
                $this->session->set_userdata($session); // Buat session sesuai $session
                redirect('dashboard'); // Redirect ke halaman welcome
            } else {
                $this->session->set_flashdata('message', '<div class ="alert alert-danger" role= "alert">Password salah!</div>'); // Buat session flashdata
                redirect('auth'); // Redirect ke halaman login
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil keluar!</div>');
        redirect('auth');
    }
}
