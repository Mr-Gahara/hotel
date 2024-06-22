<?php

class post extends CI_Controller {
    
    public function index($nama = '') {
        $data['nama'] = $nama;
        $data['judul'] = 'halaman home';
        $this->load->view('templates/header', $data);
        $this->load->view('post/index', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
    }

    
}