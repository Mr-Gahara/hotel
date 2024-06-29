<?php

class nomor_kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NomorKamar_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = 'Nomor Kamar';
        $data['kamar'] = $this->NomorKamar_model->get_joined_kamar();

        $this->load->view('templates/header', $data);
        $this->load->view('post/nomor_kamar', $data);
        $this->load->view('templates/footer');
    }

    public function TambahNomorKamar() {
        $this->form_validation->set_rules('no_kamar', 'Nomor_Kamar', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Nomor Kamar';
            $data['tipe_kamar'] = $this->NomorKamar_model->get_all_tipe_kamar();

            $this->load->view('templates/header', $data);
            $this->load->view('post/TambahKamar', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'no_kamar' => $this->input->post('no_kamar'),
                'id_tipe_kamar' => $this->input->post('tipe'),
                'status' => $this->input->post('status'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $this->NomorKamar_model->insert_nomor_kamar($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('nomor_kamar');
        }
    }

    public function hapusNomorKamar($id) {
        $this->NomorKamar_model->hapus_nomor_kamar($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('nomor_kamar');
    }

    public function UpdateNomorKamar($id) {
        $this->form_validation->set_rules('no_kamar', 'Nomor_Kamar');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Update Nomor Kamar';
            $data['tipe_kamar'] = $this->NomorKamar_model->get_all_tipe_kamar();
            $data['kamar'] = $this->NomorKamar_model->get_nomor_kamar_by_id($id);

            $this->load->view('templates/header', $data);
            $this->load->view('post/UpdateKamar', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'no_kamar' => $this->input->post('no_kamar'),
                'id_tipe_kamar' => $this->input->post('tipe'),
                'status' => $this->input->post('status'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $this->NomorKamar_model->update_nomor_kamar($id, $data);
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('nomor_kamar');
        }
    }
}
