<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Kategori extends CI_Model
{
    public function tambah($data)
    {
        return $this->db->insert('kategori', $data);
    }
    public function getKategori($kategori)
    {
        $this->db->where('kategori',$kategori);
        return $this->db->get('kategori')->result_array();
    }
    
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function getKategoriWhere($id)
    {
        $this->db->where('id',$id);
        $this->db->get('kategori');
        return $this->db->get()->result_array();
    }
    public function delete($id)
    {
        return $this->db->delete('kategori', array('id' => $id));
    }
}
