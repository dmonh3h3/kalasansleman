<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Posting extends CI_Model
{
    public function tambah($data)
    {
        return $this->db->insert('post', $data);
    }
    public function getPost($kategori)
    {
        $this->db->where('kategori',$kategori);
        return $this->db->get('post')->result_array();
    }
    
    public function getAllPost()
    {
        return $this->db->get('post')->result_array();
    }
    public function getPostWhere($id)
    {
        return $this->db->get_Where('post', array('id'=>$id))->result_array();
    }
    public function update($data,$id)
    {
            $isi=$data['isi'];
            $judul = $data['judul'];
            $kategori = $data['kategori'];
            $date = date("Y-m-d");
            date_default_timezone_set('Asia/Jakarta');
            $time = date("h:i:s");
            $penulis = $data['penulis']= $this->session->userdata('username');
            $tanggal = $date;
            $waktu =$time;
            $thumbnail = $data['thumbnail'];

            $sql = "UPDATE post SET judul='$judul', isi='$isi',kategori='$kategori',waktu='$time',tanggal='$tanggal',thumbnail='$thumbnail' WHERE id=$id ";
            return $this->db->query($sql);
    }
    public function delete($id)
    {
        return $this->db->delete('post', array('id' => $id));
    }
}
