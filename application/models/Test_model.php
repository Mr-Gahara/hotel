<?php

class Test_model extends CI_model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_test_data() {
        return $this->db->get('users')->result_array(); 
    }

    public function get_all_role() {
        return $this->db->get('user_role')->result_array();
    }

    public function hapus_datauser($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    public function get_user_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }



    public function get_user_by_id_pemesanan($user_id) {
        return $this->db->get_where('users', ['id' => $user_id])->row_array();
    }
    

    public function get_tipe_kamar_by_id($id) {
        return $this->db->get_where('tipe_kamar', ['id' => $id])->row_array();
    }
    
    public function update_data($id, $data) {

        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('users', $data);
    }

    public function registrasi_data() {
        $data = [
            "nama" => $this->input->post("nama", true),
            "email" => $this->input->post("email", true),
            "no_hp" => $this->input->post("no-telp", true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => 2,
            "is_active" => 1,
            "date_created" => time()
        ];

        $this->db->insert('users', $data);
    }
}