<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Informasi extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('informasi', $data);
    }
    public function getAll()
    {
        return $this->db->get('informasi')->result_array();
    }
    public function getWhereId($id)
    {
        return $this->db->get_Where('informasi', array('id'=>$id))->result_array();
    }
    public function update($data,$id)
    {
            $nama=$data['nama'];
            $email = $data['email'];
            $alamat = $data['alamat'];
            $telp = $data['telp'];

            $sql = "UPDATE informasi SET nama='$nama', telp='$telp',alamat='$alamat',email='$email' WHERE id=$id ";
            return $this->db->query($sql);
    }
    public function delete($id)
    {
        return $this->db->delete('', array('id' => $id));
    }
}
