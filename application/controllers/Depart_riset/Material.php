<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material extends CI_Controller
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
        $data['title'] = 'Material';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['mate'] = $this->model_opmate->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_riset/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_riset/material', $data);
        $this->load->view('templates/footer');
    }

    // tambah data
    public function tambah_aksi()
    {
        $kd_material     = $this->input->post('kd_material');
        $nm_material     = $this->input->post('nm_material');
        $kd_komponen     = $this->input->post('kd_komponen');
        $nm_komponen     = $this->input->post('nm_komponen');
        $jenis           = $this->input->post('jenis');
        $kategori        = $this->input->post('kategori');

        $data = array(
            'kd_material'     => $kd_material,
            'nm_material'     => $nm_material,
            'kd_komponen'     => $kd_komponen,
            'nm_komponen'     => $nm_komponen,
            'jenis'           => $jenis,
            'kategori'        => $kategori
        );

        $this->model_material->tambah_data($data, 'operasional');
        redirect('Depart_riset/Material/index');
    }
    // edit data
    public function update()
    {
        $id_operasional = $this->input->post('id_operasional');
        $kd_material    = $this->input->post('kd_material');
        $nm_material    = $this->input->post('nm_material');
        $kd_komponen    = $this->input->post('kd_komponen');
        $nm_komponen    = $this->input->post('nm_komponen');
        $jenis          = $this->input->post('jenis');
        $kategori       = $this->input->post('kategori');

        $data = array(
            'kd_material'  => $kd_material,
            'nm_material'  => $nm_material,
            'kd_komponen'  => $kd_komponen,
            'nm_komponen'  => $nm_komponen,
            'jenis'        => $jenis,
            'kategori'     => $kategori
        );

        $where = array(
            'id_operasional'   => $id_operasional
        );

        $this->model_material->update_data($where, $data, 'operasional');
        redirect('Depart_riset/Material/index');
    }
    // hapus data
    public function hapus($id_operasional)
    {
        $where = array('id_operasional' => $id_operasional);
        $this->model_material->hapus_data($where, 'operasional');
        redirect('Depart_riset/Material/index');
    }
}
