<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Anggota extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function get_anggota(){
        return $this->db->get('anggota')->result_array();
    }

    public function tambah_anggota($data){
        return $this->db->insert('anggota', $data);
    }

    public function edit_anggota($data, $id){
        $this->db->where('no', $id);
        return $this->db->update('anggota', $data);
    }

    public function delete_anggota($id){
        return $this->db->delete('anggota', array('no' => $id));
    }

    public function cek_user($username){
      return $this->db->get_where('anggota', array('username' => $username))->row_array();
    }
}