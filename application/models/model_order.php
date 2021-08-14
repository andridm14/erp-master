<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_order extends CI_Model
{

    // tampil tampil produk
    public function tampil_data()
    {
        $sql = "SELECT kd_order, kd_produk, nm_produk, nm_customer, tgl_order, pengiriman, jumlah, harga, (jumlah * harga) as total FROM data_order ORDER BY id";
        return $this->db->query($sql);
    }
    // tambah
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // edit
    public function edit_data($where, $table)
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
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
