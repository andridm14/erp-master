<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanggungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissble fade show" role="alert">Silahkan Login! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['title'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['tgg'] = $this->model_tanggungan->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_accounting/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_accounting/tanggungan', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $kd_tanggungan      = $this->input->post('kd_tanggungan');
        $jenis              = $this->input->post('jenis');
        $biaya              = $this->input->post('biaya');
        $tempo              = $this->input->post('tempo');

        $data = array(
            'kd_tanggungan'     => $kd_tanggungan,
            'jenis'             => $jenis,
            'biaya'             => $biaya,
            'tempo'             => $tempo
        );

        $this->model_order->tambah_produk($data, 'tanggungan');
        redirect('Depart_accounting/Tanggungan/index');
    }
    // edit produk
    public function update()
    {
        $id_tanggungan      = $this->input->post('id_tanggungan');
        $kd_tanggungan      = $this->input->post('kd_tanggungan');
        $jenis              = $this->input->post('jenis');
        $biaya              = $this->input->post('biaya');
        $tempo              = $this->input->post('tempo');

        $data = array(
            'kd_tanggungan'   => $kd_tanggungan,
            'jenis'           => $jenis,
            'biaya'           => $biaya,
            'tempo'           => $tempo,
        );

        $where = array(
            'id_tanggungan'   => $id_tanggungan
        );

        $this->model_order->update_data($where, $data, 'tanggungan');
        redirect('Depart_accounting/Tanggungan/index');
    }
    // hapus data
    public function hapus($id_tanggungan)
    {
        $where = array('id_tanggungan' => $id_tanggungan);
        $this->model_order->hapus_data($where, 'tanggungan');
        redirect('Depart_accounting/Tanggungan/index');
    }
}
