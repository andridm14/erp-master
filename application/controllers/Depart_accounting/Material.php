<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material extends CI_Controller
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

        $data['mate'] = $this->model_opmate->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_accounting/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_accounting/material', $data);
        $this->load->view('templates/footer');
    }
    // hapus data
    public function hapus($id_operasional)
    {
        $where = array('id_operasional' => $id_operasional);
        $this->model_order->hapus_data($where, 'operasional');
        redirect('Depart_Market/Customer/index');
    }
}
