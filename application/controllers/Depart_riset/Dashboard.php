<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['item'] = $this->model_produk->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_riset/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_riset/dashboard', $data);
        $this->load->view('templates/footer');
    }
}
