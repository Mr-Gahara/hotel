<?php

class daftar_kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NomorKamar_model');
    }
    
    public function index($nama = '') {
        $data['nama'] = $nama;
        $data['judul'] = 'halaman reservasi';
        $data['kamar'] = $this->NomorKamar_model->get_all_nomor_kamar();
        $tipe_kamar = $this->input->get('tipe');

        if ($tipe_kamar) {
            $data['kamar'] = $this->NomorKamar_model->get_nomor_kamar_by_type($tipe_kamar);
        } else {
            $data['kamar'] = $this->NomorKamar_model->get_all_nomor_kamar();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('reservasi/daftar_kamar', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
        $this->load->view('templates/styles');
    }
}