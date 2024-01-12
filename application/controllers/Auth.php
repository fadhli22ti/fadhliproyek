<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'adminrole');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header");
            $this->load->view("auth/login");
            $this->load->view("layout/footer");
        } else {
            $this->cek_login();
        }
    }

    public function cek_login()
{
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $admin = $this->db->get_where('admin', ['email' => $email])->row_array();
    
    if ($admin) {
        // Cek apakah password sesuai tanpa enkripsi
        if ($password == $admin['password']) {
            $data = [
                'email' => $admin['email'],
                'role' => $admin['role'],
                'id' => $admin['id']
            ];
            $this->session->set_userdata($data);

            if ($admin['role'] == 'Admin') {
                redirect('Admin');
            } else {
                redirect('Admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
            redirect('Auth');
        }
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
        redirect('Auth');
    }
}

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}