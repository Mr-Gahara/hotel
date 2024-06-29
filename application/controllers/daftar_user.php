<?php

class daftar_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index() {

        $this->load->helper('url');
        $data['judul'] = 'daftar user';

        $data['user'] = $this->Test_model->get_test_data();

        $this->load->view('templates/header', $data);
        $this->load->view('daftar_user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($id = null) {

        $data['judul'] = 'form tambah user';

        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_rules('no-telp','Nomor Telepon', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('templates/header', $data);
            $this->load->view('daftar_user/tambah');
            $this->load->view('templates/footer');
        } else {
            
            $formData = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'no_phone' => $this->input->post('no-telp')
            ];

            $this->Test_model->registrasi_data($formData);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('daftar_user');

            }
    }   

    public function hapus($id) {
        $this->Test_model->hapus_datauser($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('daftar_user');
    }


    public function update($id = null) {

        $data['judul'] = 'form update user';
        $data['user'] = $this->Test_model->get_user_by_id($id);

        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_rules('no-telp','Nomor Telepon', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('templates/header', $data);
            $this->load->view('daftar_user/update', $data);
            $this->load->view('templates/footer');
        } else {
            
            $formData = [
                'name' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'no_phone' => $this->input->post('no-telp')
            ];

            $this->Test_model->update_data($id, $formData);
            $this->session->set_flashdata('flash','diupdate');
            redirect('daftar_user');
            
            }
    } 
    
}
