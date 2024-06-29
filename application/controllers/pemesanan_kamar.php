<?php

class pemesanan_kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PemesananKamar_model');
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = 'Nomor Kamar';
        $data['pemesanan'] = $this->PemesananKamar_model->get_joined_pemesanan();

        $this->load->view('templates/header', $data);
        $this->load->view('post/pemesanan_kamar', $data);
        $this->load->view('templates/footer');
    }

    public function TambahPemesanan($id = null) {
        $this->form_validation->set_rules('no_kamar', 'Nomor_Kamar', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama_user', 'required');
        $this->form_validation->set_rules('tgl_check_in', 'Tanggal_check_in', 'required');
        $this->form_validation->set_rules('tgl_check_in', 'Tanggal_check_in', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah pemesanan';
            $data['kamar'] = $this->PemesananKamar_model->get_all_kamar();
            $data['users'] = $this->Test_model->get_test_data();
            $data['pemesanan'] = $id ? $this->PemesananKamar_model->get_pemesanan_kamar_by_id($id) : array();

            $this->load->view('templates/header', $data);
            $this->load->view('post/TambahPemesanan', $data);
            $this->load->view('templates/footer');
        } else {
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
                'id_user' => $this->input->post('nama_user'),
                'tgl_check_in' => $this->input->post('tgl_check_in'),
                'tgl_check_out' => $this->input->post('tgl_check_out'),
                'sarapan' => $sarapan,
                'harga_sarapan' => $harga_sarapan,
                'total_harga' => $total_harga,  // Add this line
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $this->PemesananKamar_model->insert_pemesanan($data);
            
            // Update room status to unavailable
            $this->db->where('id', $this->input->post('no_kamar'));
            $this->db->update('kamar', array('status' => 'unavailable'));

            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pemesanan_kamar');
        }
    }

    public function UpdatePemesanan($id = null) {
        $this->form_validation->set_rules('no_kamar', 'Nomor_Kamar', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama_user', 'required');
        $this->form_validation->set_rules('tgl_check_in', 'Tanggal_check_in', 'required');
        $this->form_validation->set_rules('tgl_check_out', 'Tanggal_check_out', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Update pemesanan';
            $data['kamar'] = $this->PemesananKamar_model->get_all_kamar();
            $data['users'] = $this->Test_model->get_test_data();
            $data['pemesanan'] = $id ? $this->PemesananKamar_model->get_pemesanan_kamar_by_id($id) : array();
    
            $this->load->view('templates/header', $data);
            $this->load->view('post/UpdatePemesanan', $data);
            $this->load->view('templates/footer');
        } else {
            $sarapan = $this->input->post('sarapan') == 'yes' ? 'yes' : 'no';
            $harga_sarapan = $sarapan == 'yes' ? 80000.00 : 0.00;
    
            // Cari id_kamar berdasarkan no_kamar
            $no_kamar = $this->input->post('no_kamar');
            $kamar = $this->PemesananKamar_model->get_kamar_by_no_kamar($no_kamar);
    
            if ($kamar) {
                $data = array(
                    'id_kamar' => $kamar['id'],
                    'id_user' => $this->input->post('nama_user'),
                    'tgl_check_in' => $this->input->post('tgl_check_in'),
                    'tgl_check_out' => $this->input->post('tgl_check_out'),
                    'sarapan' => $sarapan,
                    'harga_sarapan' => $harga_sarapan,
                    'updated_at' => date('Y-m-d H:i:s')
                );
    
                $this->PemesananKamar_model->update_pemesanan($id, $data);
                $this->session->set_flashdata('flash', 'diupdate');
                redirect('pemesanan_kamar');
            } else {
                // Jika kamar tidak ditemukan, tampilkan pesan error
                $this->session->set_flashdata('error', 'Nomor Kamar tidak ditemukan.');
                redirect('pemesanan_kamar/UpdatePemesanan/' . $id);
            }
        }
    }
    
    public function HapusPemesanan($id) {
        // Get the room ID from the booking
        $room = $this->db->select('id_kamar')->from('pemesanan')->where('id', $id)->get() ->row();

        if ($room) {
            // Delete the booking
            $this->PemesananKamar_model->delete_pemesanan($id);
            
            // Update the room status to available
            $this->db->where('id', $room->id_kamar);
            $this->db->update('kamar', array('status' => 'available'));
            
            $this->session->set_flashdata('flash', 'dihapus');
        }
        redirect('pemesanan_kamar');
    }
}