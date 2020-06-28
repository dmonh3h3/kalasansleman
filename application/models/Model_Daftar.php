<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Daftar extends CI_Model
{
    public function insert($data)
    {
        return $this->db->insert('e_ktp', $data);
    }
    public function get()
    {
        return $this->db->get('e_ktp', $data);
    }
}
