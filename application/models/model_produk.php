<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_produk extends CI_Model
{
    // tampil data produk
    public function tampil_data()
    {
        return $this->db->get('master_produk');
    }
    // tambah
    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // edit
    public function edit_produk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // update
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // hapus
    public function hapus_produk($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
