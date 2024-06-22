<?php

class tipe_kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }
    
    public function index($nama = '') {
        $data['nama'] = $nama;
        $data['judul'] = 'halaman home';
        $data['user'] = $this->Test_model->get_test_data();
        $this->load->view('templates/header', $data);
        $this->load->view('post/tipe_kamar', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
    }

    
}