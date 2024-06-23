<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipeKamar_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_tipe_kamar() {
        $query = $this->db->get('tipe_kamar');
        return $query->result_array();
    }

    public function get_tipe_kamar_by_id($id) {
        return $this->db->get_where('tipe_kamar', ['id' => $id])->row_array();
    }

    public function insert_tipe_kamar($data) {
        $this->db->insert('tipe_kamar', $data);
    }

    public function hapus_tipe_kamar($id) {
        $this->db->where('id', $id);
        $this->db->delete('tipe_kamar');
    }

    public function update_tipe_kamar($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tipe_kamar', $data);
    }
    
    
}
