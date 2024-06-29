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
        $data['pembayaran'] = $this->PembayaranKamar_model->get_joined_pembayaran();

        $this->load->view('templates/header', $data);
        $this->load->view('post/pembayaran_kamar', $data);
        $this->load->view('templates/footer');
    }

    public function TambahPembayaran($id = null) {
        $this->form_validation->set_rules('id_pemesanan', 'ID_pemesanan', 'required');
        $this->form_validation->set_rules('status_pembayaran', 'Status Pembayaran', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal Pembayaran');
    
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Pembayaran';
            $data['pemesanan'] = $this->PembayaranKamar_model->get_all_pemesanan();
            $data['users'] = $this->Test_model->get_test_data();
            $data['pembayaran'] = $id ? $this->PembayaranKamar_model->get_pembayaran_by_id($id) : array();
    
            $this->load->view('templates/header', $data);
            $this->load->view('post/TambahPembayaran', $data);
            $this->load->view('templates/footer');
        } else {
            $id_pemesanan = $this->input->post('id_pemesanan');
            $status_pembayaran = $this->input->post('status_pembayaran');
            $tanggal_pembayaran = $this->input->post('tanggal_pembayaran');
            $total_harga = $this->PembayaranKamar_model->get_total_harga_by_id_pemesanan($id_pemesanan);
    
            // Update pembayaran table
            $data_pembayaran = array(
                'id_pemesanan' => $id_pemesanan,
                'total_harga' => $total_harga,
                'tanggal_pembayaran' => $tanggal_pembayaran,
                'status_pembayaran' => $status_pembayaran,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $this->PembayaranKamar_model->insert_pembayaran($data_pembayaran);

            // Update kamar table status
            $this->PembayaranKamar_model->update_kamar_status_by_id_pemesanan($id_pemesanan, 'sudah dibayar');

            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pembayaran_kamar');

        }
    }

    public function HapusPembayaran($id) {
        $this->PembayaranKamar_model->delete_pembayaran($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pembayaran_kamar');
    }

    public function UpdatePembayaran($id = null) {
        $this->form_validation->set_rules('id_pemesanan', 'ID_pemesanan', 'required');
        $this->form_validation->set_rules('status_pembayaran', 'Status Pembayaran', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal Pembayaran');
    
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Pembayaran';
            $data['pemesanan'] = $this->PembayaranKamar_model->get_all_pemesanan();
            $data['users'] = $this->Test_model->get_test_data();
            $data['pembayaran'] = $id ? $this->PembayaranKamar_model->get_pembayaran_by_id($id) : array();
    
            $this->load->view('templates/header', $data);
            $this->load->view('post/UpdatePembayaran', $data);
            $this->load->view('templates/footer');
        } else {
            $id_pemesanan = $this->input->post('id_pemesanan');
            $status_pembayaran = $this->input->post('status_pembayaran');
            $tanggal_pembayaran = $this->input->post('tanggal_pembayaran');
            $total_harga = $this->PembayaranKamar_model->get_total_harga_by_id_pemesanan($id_pemesanan);
    
            // Update pembayaran table
            $data_pembayaran = array(
                'id_pemesanan' => $id_pemesanan,
                'total_harga' => $total_harga,
                'tanggal_pembayaran' => $tanggal_pembayaran,
                'status_pembayaran' => $status_pembayaran,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $this->PembayaranKamar_model->update_pembayaran($id, $data_pembayaran);

            // Update kamar table status
            $this->PembayaranKamar_model->update_kamar_status_by_id_pemesanan($id_pemesanan, 'sudah dibayar');

            $this->session->set_flashdata('flash', 'diupdate');
            redirect('pembayaran_kamar');

        }
    }
    
}