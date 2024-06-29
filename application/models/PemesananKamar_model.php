<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananKamar_model extends CI_Model {

    public function get_joined_pemesanan() {
        // pilih tabel pemesanan
        $this->db->from('pemesanan');
        
        // join tabel kamar, tipe_kamar, users beserta kolom kolom yang diperlukan
        $this->db->join('kamar', 'pemesanan.id_kamar = kamar.id');
        $this->db->join('tipe_kamar', 'kamar.id_tipe_kamar = tipe_kamar.id');
        $this->db->join('users', 'pemesanan.id_user = users.id');
    
        // pilih kolom yang ingin diganti
        $this->db->select('pemesanan.*, kamar.no_kamar as nomor_nomor_kamar, tipe_kamar.tipe as tipe_kamar_tipe, users.nama as nama_id_user, pemesanan.harga_sarapan, (tipe_kamar.harga + pemesanan.harga_sarapan) as total_harga');
    
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_harga_by_kamar_id($id_kamar) {
        $this->db->select('tipe_kamar.harga');
        $this->db->from('kamar');
        $this->db->join('tipe_kamar', 'kamar.id_tipe_kamar = tipe_kamar.id');
        $this->db->where('kamar.id', $id_kamar);
        
        $query = $this->db->get();
        $result = $query->row();
        return $result ? $result->harga : null;
    } 

    public function get_all_kamar() {
        $query = $this->db->get('kamar');
        return $query->result_array();
    }

    public function get_all_users() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_pemesanan_kamar_by_id($id) {
        $this->db->select('pemesanan.*, kamar.no_kamar');
        $this->db->from('pemesanan');
        $this->db->join('kamar', 'pemesanan.id_kamar = kamar.id');
        $this->db->where('pemesanan.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_kamar_by_no_kamar($no_kamar) {
        $this->db->select('id');
        $this->db->from('kamar');
        $this->db->where('no_kamar', $no_kamar);
        $query = $this->db->get();
        return $query->row_array();
    }
    

    public function insert_pemesanan($data) {
        $this->db->insert('pemesanan', $data);
    }

    public function update_pemesanan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('pemesanan', $data);
    }

    public function delete_pemesanan($id) {
        $this->db->where('id', $id);
        $this->db->delete('pemesanan');
    }

    public function get_id_pemesanan_by_no_kamar($no_kamar) {
        $this->db->select('pemesanan.id');
        $this->db->from('pemesanan');
        $this->db->join('kamar', 'pemesanan.id_kamar = kamar.id');
        $this->db->where('kamar.no_kamar', $no_kamar);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return null;
        }
    }
    
    public function update_kamar_status_by_no_kamar($no_kamar, $status) {
        $this->db->where('no_kamar', $no_kamar);
        $this->db->update('kamar', array('status' => $status));
    }
    
}


