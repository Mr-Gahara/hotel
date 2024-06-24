<?php

class reservasi extends CI_Controller {
    
    public function index($nama = '') {
        $data['nama'] = $nama;
        $data['judul'] = 'halaman pemesanan';
        $this->load->view('templates/header', $data);
        $this->load->view('reservasi/index', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
        $this->load->view('templates/styles');
    }
}