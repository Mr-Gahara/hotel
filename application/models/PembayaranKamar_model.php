<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranKamar_model extends CI_Model {

    public function get_joined_pembayaran() {
        $this->db->select('pembayaran.*, users.nama as user_pembayaran');
        $this->db->from('pembayaran');
        $this->db->join('pemesanan', 'pembayaran.id_pemesanan = pemesanan.id');
        $this->db->join('users', 'pemesanan.id_user = users.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_pembayaran($data) {
        $this->db->insert('pembayaran', $data);
        return $this->db->insert_id();
    }

    public function delete_pembayaran($id) {
        $this->db->where('id', $id);
        $this->db->delete('pembayaran');
    }

    public function update_pembayaran($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('pembayaran', $data);
    }

    public function get_pembayaran_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('pembayaran');
        return $query->row_array();
    }

    public function get_total_harga_by_id_pemesanan($id_pemesanan) {
        $this->db->select('total_harga');
        $this->db->where('id', $id_pemesanan);
        $query = $this->db->get('pemesanan');
        $result = $query->row();
    
        return $result ? $result->total_harga : 0.00;
    }

    public function update_kamar_status_by_id_pemesanan($id_pemesanan, $status) {
        $this->db->where('id', $id_pemesanan);
        $this->db->update('pembayaran', array('status_pembayaran' => $status));
    }

    public function get_all_pemesanan() {
        $query = $this->db->get('pemesanan');
        return $query->result_array();
    }
}