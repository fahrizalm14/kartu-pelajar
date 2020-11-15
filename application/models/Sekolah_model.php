<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah_model extends CI_Model
{
    //Fungsi tambah data siswa
    var $table = 'sekolah';

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function get_by_id()
    {
        return $this->db->get_where($this->table, ['id' => 1])->row_array();
    }
    public function json()
    {
        return $this->db->get('siswa')->result();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
