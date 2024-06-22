<?php

class register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index() {

        $this->load->helper('url');
        $data['judul'] = 'form registrasi user';

        $data['user'] = $this->Test_model->get_test_data();

        $this->load->view('templates/header', $data);
        $this->load->view('register/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {

        $data['judul'] = 'form registrasi user';

        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|valid_email|trim|is_unique[users.email]', [
            'is_unique' => 'email sudah digunakan!',
        ]);
        $this->form_validation->set_rules('no-telp','Nomor Telepon', 'required|numeric');
        $this->form_validation->set_rules('password','Password', 'required|trim|min_length[4]|matches[retype-password]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'karakter password terlalu sedikit!',
        ]);
        $this->form_validation->set_rules('retype-password','Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('templates/header', $data);
            $this->load->view('register/index', $data);
            $this->load->view('templates/footer');
        } else {
            
            $formData = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'no_hp' => $this->input->post('no-telp', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->Test_model->registrasi_data($formData);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun berhasil dibuat </div>');
            redirect('login');
            }
    } 
}


