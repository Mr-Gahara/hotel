<?php

class home extends CI_Controller {
    
    public function index($nama = '') {
        $data['nama'] = $nama;
        $data['judul'] = 'halaman home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
        $this->load->view('templates/styles');
    }
    
}