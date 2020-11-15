<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    //Fungsi tambah data siswa
    var $tabel = 'siswa';
    var $table = 'siswa';
    var $column_order = ['nis', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat'];
    var $order = ['nis', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat'];


    public function tambah($data)
    {
        $this->db->insert('siswa', $data);
        return $this->db->affected_rows();
    }

    function kelas()
    {
        return $this->db->get('kelas')->result();
    }

    public function tambah_kelas($data)
    {
        $this->db->insert('kelas', $data);
        return $this->db->affected_rows();
    }

    function jurusan()
    {
        return $this->db->get('pk')->result();
    }

    public function tambah_jurusan($data)
    {
        $this->db->insert('pk', $data);
        return $this->db->affected_rows();
    }

    // Fungsi data siswa tabel edit dan lain-lain


    private function _json()
    {
        $this->db->from($this->table);
        if (isset($_POST['search']['value'])) {
            $this->db->or_like('nis', $_POST['search']['value']);
            $this->db->or_like('nama', $_POST['search']['value']);
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_siswa', 'DESC');
        }
    }

    public function json()
    {
        return $this->db->get('siswa')->result();
    }

    public function get_siswa()
    {
        $this->_json();
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filter()
    {
        $this->_json();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id_siswa' => $id])->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
}
