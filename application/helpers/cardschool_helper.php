<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $username = $ci->session->userdata('username');
        $aksesAdmin = $ci->db->get_where('admin', ['username' => $username])->row_array();
        if ($aksesAdmin['level'] !== '9') {
            $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus masuk dulu!</div>'); // Buat session flashdata
            redirect('auth/error');
        }
    }
}
