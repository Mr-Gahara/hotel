<?php

class laman_pesan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TipeKamar_model');
        $this->load->model('Test_model');
        $this->load->library('form_validation');
        $this->load->model('PemesananKamar_model');
        
    }
    
    public function index($nama = '') {
        $data['nama'] = $nama;
        $data['judul'] = 'halaman pemesanan';
        // $data['tipe_kamar'] = $this->TipeKamar_model->get_all_tipe_kamar();

        $this->load->view('templates/header', $data);
        $this->load->view('reservasi/laman_pesan', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
        $this->load->view('templates/styles');
    }

    public function TambahPemesanan($id = null) {
        $this->form_validation->set_rules('tgl_check_in', 'Tanggal_check_in', 'required');
        $this->form_validation->set_rules('tgl_check_out', 'Tanggal_check_out', 'required');
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'The %s field is required.',
            'valid_email' => 'Please enter a valid email address.'
        ]);
        $this->form_validation->set_rules('no-telp','Nomor Telepon', 'required|numeric');
    
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah pemesanan';
            $data['kamar'] = $this->PemesananKamar_model->get_all_kamar();
    
            // Retrieve user data from session
            $user_id = $this->session->userdata('user_id');
            if ($user_id) {
                $user_data = $this->Test_model->get_user_by_id_pemesanan($user_id);
                $data['users'] = $user_data;
            } else {
                $data['users'] = $user_data; // or handle the case when user_id is not set
            }
    
            $this->load->view('templates/header', $data);
            $this->load->view('reservasi/laman_pesan', $data);
            $this->load->view('templates/footer');
        } else {
            // Processing the form submission
    
            $sarapan = $this->input->post('sarapan') == 'yes' ? 'yes' : 'no';
            $harga_sarapan = $sarapan == 'yes' ? 80000 : 0.00;
    
            // Get the harga from tipe_kamar based on the selected room
            $id_kamar = $this->input->post('no_kamar');
            $harga_kamar_result = $this->PemesananKamar_model->get_harga_by_kamar_id($id_kamar);
            $harga_kamar = $harga_kamar_result ? $harga_kamar_result : 0.00;
    
            // Calculate total_harga
            $total_harga = $harga_kamar + $harga_sarapan;
    
            $data = array(
                'id_kamar' => $id_kamar,
                'id_user' => $user_id, // Use the user_id from session
                'tgl_check_in' => $this->input->post('tgl_check_in'),
                'tgl_check_out' => $this->input->post('tgl_check_out'),
                'sarapan' => $sarapan,
                'harga_sarapan' => $harga_sarapan,
                'total_harga' => $total_harga,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
    
            $this->PemesananKamar_model->insert_pemesanan($data);
            
            // Update room status to unavailable
            $this->db->where('id', $this->input->post('no_kamar'));
            $this->db->update('kamar', array('status' => 'unavailable'));
    
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('laman_pesan');
        }
    }
    
}