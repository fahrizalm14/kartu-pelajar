<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kartu_model extends CI_Model
{
    //Fungsi tambah data siswa
    var $table = 'desain';

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function tambah_kartu($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
