<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissble fade show" role="alert">Silahkan Login! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['title'] = 'produk';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['item'] = $this->model_produk->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_market/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_market/produk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id_produk          = $this->input->post('id_produk');
        $nm_produk          = $this->input->post('nm_produk');
        $jenis              = $this->input->post('jenis');
        $tahun_produk       = $this->input->post('tahun_produk');
        $harga              = $this->input->post('harga');

        $data = array(

            'id_produk'         => $id_produk,
            'nm_produk'         => $nm_produk,
            'jenis'             => $jenis,
            'tahun_produk'      => $tahun_produk,
            'harga'             => $harga
        );

        $this->model_produk->tambah_produk($data, 'master_produk');
        redirect('Depart_riset/MasterProduk/index');
    }
    // edit produk
    public function update()
    {
        $id_produk          = $this->input->post('id_produk');
        $nm_produk          = $this->input->post('nm_produk');
        $jenis              = $this->input->post('jenis');
        $tahun_produk       = $this->input->post('tahun_produk');
        $harga              = $this->input->post('harga');

        $data = array(
            'nm_produk'         => $nm_produk,
            'jenis'             => $jenis,
            'tahun_produk'      => $tahun_produk,
            'harga'             => $harga
        );

        $where = array(
            'id_produk'   => $id_produk
        );

        $this->model_produk->update_data($where, $data, 'master_produk');
        redirect('Depart_riset/MasterProduk/index');
    }
    // hapus data
    public function hapus($id)
    {
        $where = array('id_produk' => $id);
        $this->model_produk->hapus_produk($where, 'master_produk');
        redirect('Depart_riset/MasterProduk/index');
    }
}
