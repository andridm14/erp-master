<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataOrder extends CI_Controller
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
        $data['title'] = 'data order';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['order'] = $this->model_order->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_market/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_market/dataOrder', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $kd_order           = $this->input->post('kd_order');
        $nm_produk          = $this->input->post('nm_produk');
        $nm_customer        = $this->input->post('nm_customer');
        $jumlah             = $this->input->post('jumlah');
        $harga              = $this->input->post('harga');
        $pengiriman         = $this->input->post('pengiriman');

        $data = array(
            'kd_order'          => $kd_order,
            'nm_produk'         => $nm_produk,
            'nm_customer'       => $nm_customer,
            'jumlah'            => $jumlah,
            'harga'             => $harga,
            'pengiriman'        => $pengiriman
        );

        $this->model_order->tambah_produk($data, 'data_order');
        redirect('Depart_Market/DataOrder/index');
    }
    // edit produk
    public function update()
    {
        $id                 = $this->input->post('id');
        $kd_order           = $this->input->post('kd_order');
        $nm_produk          = $this->input->post('nm_produk');
        $nm_customer        = $this->input->post('nm_customer');
        $jumlah             = $this->input->post('jumlah');
        $harga              = $this->input->post('harga');
        $pengiriman         = $this->input->post('pengiriman');

        $data = array(
            'kd_order'          => $kd_order,
            'nm_produk'         => $nm_produk,
            'nm_customer'       => $nm_customer,
            'jumlah'            => $jumlah,
            'harga'             => $harga,
            'pengiriman'        => $pengiriman
        );

        $where = array(
            'id'   => $id
        );

        $this->model_order->update_data($where, $data, 'data_order');
        redirect('Depart_Market/DataOrder/index');
    }
    // hapus data
    public function hapus($kd_order)
    {
        $where = array('kd_order' => $kd_order);
        $this->model_order->hapus_data($where, 'data_order');
        redirect('Depart_Market/DataOrder/index');
    }
}
