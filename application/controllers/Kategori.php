<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->Model('Model_Kategori');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        // $this->load->library('upload');
    }
	public function index()
	{
        $data['title']="";
        $data['data']=$this->Model_Kategori->getAllKategori();
		$this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('admin/kategori/index',$data);
        $this->load->view('admin/templates/footer',$data);
    }
    public function tambah()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == false) {
            $data['title']="";$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal !</div>');
            redirect('kategori');
        }else{
            $data['nama']= $this->input->post('nama');
            if(!$this->Model_Kategori->tambah($data)){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal !</div>');
                redirect('kategori');
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil !</div>');
                redirect('kategori');
            }
        }
    }
    public function hapus($id)
    {
        if(!$this->Model_Kategori->delete($id)){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal !</div>');
            redirect('kategori');
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil !</div>');
            redirect('kategori');
        }

    }
    
}
