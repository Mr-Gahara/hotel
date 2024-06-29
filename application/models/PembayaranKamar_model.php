<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranKamar_model extends CI_Model {

    public function get_joined_pembayaran() {
        $this->db->select('pembayaran.*, users.nama as user_nama');
        $this->db->from('pembayaran');
        $this->db->join('pemesanan', 'pembayaran.id_pemesanan = pemesanan.id');
        $this->db->join('users', 'pemesanan.id_user = users.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_pembayaran_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('pembayaran');
        return $query->row_array();  // returns a single row as an associative array
    }

    public function get_all_kamar() {
        return $this->db->get('kamar')->result_array();
    }

    public function get_test_data() {
        return $this->db->get('users')->result_array();
    }

    public function get_pemesanan_kamar_by_id($id) {
        return $this->db->get_where('pemesanan', ['id' => $id])->row_array();
    }

    public function get_harga_by_kamar_id($id_kamar) {
        $this->db->select('harga');
        $this->db->from('tipe_kamar');
        $this->db->join('kamar', 'tipe_kamar.id = kamar.id_tipe_kamar');
        $this->db->where('kamar.id', $id_kamar);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result ? $result['harga'] : 0.00;
    }

    
    public function insert_pembayaran($data) {
        return $this->db->insert('pembayaran', $data);
    }
    
        // Other functions related to 'pembayaran' table
    
    
}