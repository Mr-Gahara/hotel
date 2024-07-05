<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'The %s field is required.',
            'valid_email' => 'Please enter a valid email address.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'The %s field is required.'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->helper('url');
            $data['judul'] = 'Form Login User';

            $this->load->view('templates/header', $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['email' => $email])->row_array();
        // $users = $this->db->get_where('users', ['no_hp' => $no_hp])->row_array();

        // jika user ada
        if ($users) {
            if ($users['is_active'] == 1) {
                // cek password
                if (password_verify($password, $users['password'])) {
                    $data = [
                        'id' => $users['id'],
                        'email' => $users['email'],
                        'nama' => $users['nama'],
                        'role_id' => $users['role_id'],
                        'logged_in' => TRUE,
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_userdata('user_id', $user['id']);
                    if ($users['role_id'] == 1) {
                        redirect('dashboard');
                    } else  {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> password salah! </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> email belum diaktivasi! </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> email belum terdaftar! </div>');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('logged_in');
    
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">berhasil log out!</div>');
        redirect('login');
    }
    
}
