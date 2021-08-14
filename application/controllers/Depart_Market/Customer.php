<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
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
        $data['title'] = 'data customer';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['cust'] = $this->model_customer->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('depart_market/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('depart_market/customer', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nm_customer    = $this->input->post('nm_customer');
        $prusahaan      = $this->input->post('prusahaan');
        $alamat         = $this->input->post('alamat');

        $data = array(
            'nm_customer'       => $nm_customer,
            'prusahaan'         => $prusahaan,
            'alamat'            => $alamat
        );

        $this->model_order->tambah_produk($data, 'customer');
        redirect('Depart_Market/Customer/index');
    }
    // edit produk
    public function update()
    {
        $id_customer        = $this->input->post('id_customer');
        $nm_customer        = $this->input->post('nm_customer');
        $prushaan           = $this->input->post('prushaan');
        $alamat             = $this->input->post('alamat');

        $data = array(
            'nm_customer'      => $nm_customer,
            'prushaan'         => $prushaan,
            'alamat'           => $alamat
        );

        $where = array(
            'id_customer'   => $id_customer
        );

        $this->model_order->update_data($where, $data, 'customer');
        redirect('Depart_Market/Customer/index');
    }
    // hapus data
    public function hapus($id_customer)
    {
        $where = array('id_customer' => $id_customer);
        $this->model_order->hapus_data($where, 'customer');
        redirect('Depart_Market/Customer/index');
    }
}
