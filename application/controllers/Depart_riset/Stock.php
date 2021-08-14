<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissble fade show" role="alert">Silahkan Login! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Stock';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['item'] = $this->model_produk->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_riset/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_riset/stock', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $stock          = $this->input->post('stock');

        $data = array('stock' => $stock);

        $this->model_produk->tambah_produk($data, 'master_produk');
        redirect('Depart_riset/Stock/index');
    }
    // edit produk
    public function edit($id_produk)
    {
        $data['title'] = 'Edit & update data produk';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $where = array('id_produk' => $id_produk);
        $data['item'] = $this->model_produk->edit_produk($where, 'master_produk')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_riset/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_riset/edit_stock', $data);
        $this->load->view('templates/footer');
    }
    // update produk
    public function update()
    {
        $id_produk        = $this->input->post('id_$id_produk');
        $stock            = $this->input->post('stock');

        $data = array('stock'  => $stock);

        $where = array(
            'id_$id_produk'   => $id_produk
        );

        $this->model_produk->update_data($where, $data, 'master_produk');
        redirect('Depart_riset/Stock/index');
    }
    // hapus data
    public function hapus($id_produk)
    {
        $where = array('id_produk' => $id_produk);
        $this->model_produk->hapus_produk($where, 'master_produk');
        redirect('Depart_riset/Stock/index');
    }
}
