<?php

class reservasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TipeKamar_model');
        $this->load->library('session');
    }
    
    public function index($nama = '') {

        if (!$this->session->userdata('logged_in')) {
            // If not logged in, redirect to the login page
            redirect('login');
        }
        $data['nama'] = $nama;
        $data['judul'] = 'halaman reservasi';
        $data['tipe_kamar'] = $this->TipeKamar_model->get_all_tipe_kamar();

        $this->load->view('templates/header', $data);
        $this->load->view('reservasi/index', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
        $this->load->view('templates/styles');
    }
}