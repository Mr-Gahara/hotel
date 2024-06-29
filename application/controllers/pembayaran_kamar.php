<?php

class pembayaran_kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PembayaranKamar_model');
        $this->load->model('PemesananKamar_model');
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = 'Pembayaran Kamar';
        $data['pemesanan'] = $this->PembayaranKamar_model->get_joined_pembayaran();

        $this->load->view('templates/header', $data);
        $this->load->view('post/pembayaran_kamar', $data);
        $this->load->view('templates/footer');
    }

    public function TambahPembayaran($id = null) {
        $this->form_validation->set_rules('no_kamar', 'Nomor_Kamar', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('status_pembayaran', 'status_pembayaran', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal_pembayaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah pembayaran';
            $data['kamar'] = $this->PemesananKamar_model->get_all_kamar();
            $data['users'] = $this->Test_model->get_test_data();
            $data['pembayaran'] = $id ? $this->PembayaranKamar_model->get_pembayaran_by_id($id) : array();
            $data['pemesanan'] = $id ? $this->PemesananKamar_model->get_pemesanan_kamar_by_id($id) : array();

            $this->load->view('templates/header', $data);
            $this->load->view('post/TambahPembayaran', $data);
            $this->load->view('templates/footer');
        } else {
            // $data = array(
            //     'no_kamar' => $this->input->post('no_kamar'),
            //     'id_user' => $this->input->post('nama_user'),
            //     'status_pembayaran' => $this->input->post('status_pembayaran'),
            //     'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // );

            // $this->PembayaranKamar_model->insert_pembayaran($data);

            // $this->session->set_flashdata('flash', 'ditambahkan');
            // redirect('pemesanan_kamar');

            $no_kamar = $this->input->post('no_kamar');
            $id_user = $this->input->post('nama_user');
            $status_pembayaran = $this->input->post('status_pembayaran');
            $tanggal_pembayaran = $this->input->post('tanggal_pembayaran');

            // Find the corresponding id_pemesanan based on no_kamar
            $id_pemesanan = $this->PemesananKamar_model->get_id_pemesanan_by_no_kamar($no_kamar);

            if ($id_pemesanan) {
                // Update pembayaran table
                $data_pembayaran = array(
                    'id_pemesanan' => $id_pemesanan,
                    'total_harga' => 0.00, // Placeholder, calculate as necessary
                    'tanggal_pembayaran' => $tanggal_pembayaran,
                    'status_pembayaran' => $status_pembayaran,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                );

                $this->PembayaranKamar_model->insert_pembayaran($data_pembayaran);

                // Update kamar table status
                $this->PemesananKamar_model->update_kamar_status_by_no_kamar($no_kamar, 'sudah dibayar');

                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pemesanan_kamar');
            } else {
                $this->session->set_flashdata('error', 'Invalid room number');
                redirect('pembayaran_kamar');
            }
        }
    }
}