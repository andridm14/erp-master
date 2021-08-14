<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login';
            $this->load->view('login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            //user ada
            if ($user['is_active'] == 1) {
                //cek akun aktif
                if ($user['password']) {

                    $data = [
                        'username'  => $user['username'],
                        'role'      => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 1) {
                        redirect('Depart_riset/Dashboard');
                    } elseif ($user['role'] == 2) {
                        redirect('Depart_Market/Dashboard');
                    } else {
                        redirect('Depart_Accounting/Dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Akun tidak aktif</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Username salah</div>');
            redirect('Auth');
        }
    }

    public function registration()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'email telah terdaftar']);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[4]|matches[password2]', ['matches' => 'password salah', 'min_length' => 'terlalu pendek']);
        $this->form_validation->set_rules('password2', 'password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('registration', $data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 0,
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Membuat Akun! Silahkan Login</div>');
            redirect('Auth');
        }
    }
    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect('Auth/login');
    // }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda Keluar</div>');
        redirect('Auth');
    }
}
