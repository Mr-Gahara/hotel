<?php

class tipe_kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TipeKamar_model');
        $this->load->library('form_validation');
    }
    
    public function index() {

        $data['judul'] = 'tipe kamar';
        $data['tipe_kamar'] = $this->TipeKamar_model->get_all_tipe_kamar();

        $this->load->model('TipeKamar_model');
        $this->load->view('templates/header', $data);
        $this->load->view('post/tipe_kamar', $data); //cari folder home di folder views
        $this->load->view('templates/footer');
    }

    public function TambahTipe() {

        $this->form_validation->set_rules('tipe','Tipe', 'required');
        $this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'tambah tipe kamar';

            $data['tipe_kamar'] = $this->TipeKamar_model->get_all_tipe_kamar();
    
            $this->load->view('templates/header', $data);
            $this->load->view('post/TambahTipe', $data); //cari folder home di folder views
            $this->load->view('templates/footer');
            $this->load->model('TipeKamar_model');

        } else {
            $data = array(
                'tipe' => $this->input->post('tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
        
            $this->TipeKamar_model->insert_tipe_kamar($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('tipe_kamar');
        }
    }

    public function hapusTipe($id) {
        $this->TipeKamar_model->hapus_tipe_kamar($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('tipe_kamar');
    }

    public function updateTipe($id) {

        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    
        if ($this->form_validation->run() == FALSE) {
            // Validation failed, load the edit form again with data
            $data['judul'] = 'Update Tipe Kamar';
            $data['tipe_kamar'] = $this->TipeKamar_model->get_tipe_kamar_by_id($id);
    
            $this->load->view('templates/header', $data);
            $this->load->view('post/UpdateTipe', $data);
            $this->load->view('templates/footer');
        } else {
            // Validation passed, update the tipe kamar
            $data = array(
                'tipe' => $this->input->post('tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'updated_at' => date('Y-m-d H:i:s')
            );
    
            $this->TipeKamar_model->update_tipe_kamar($id, $data);
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('tipe_kamar');
        }
    }
    
    
}