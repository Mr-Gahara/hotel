<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NomorKamar_model extends CI_Model {

    public function get_all_nomor_kamar() {
        return $this->db->get('kamar')->result_array();
    }
    
    public function get_nomor_kamar_by_id($id) {
        return $this->db->get_where('kamar', array('id' => $id))->row_array();
    }

    public function get_joined_kamar() {
        $this->db->select('kamar.*, tipe_kamar.tipe as tipe_kamar_tipe');
        $this->db->from('kamar');
        $this->db->join('tipe_kamar', 'kamar.id_tipe_kamar = tipe_kamar.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all_tipe() {
        $query = $this->db->get('tipe_kamar');
        return $query->result();
    }

    public function insert_nomor_kamar($data) {
        $this->db->insert('kamar', $data);
    }

    public function hapus_nomor_kamar($id) {
        $this->db->delete('kamar', array('id' => $id));
    }


    public function update_nomor_kamar($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('kamar', $data);
    }
}
