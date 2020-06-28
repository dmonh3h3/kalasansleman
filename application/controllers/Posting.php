<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->Model('Model_Posting');
        $this->load->Model('Model_Kategori');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        // $this->load->library('upload');
    }
	public function index()
	{
        $data['title']="";
        $data['kategori']=$this->Model_Kategori->getAllKategori();
        $data['data']=$this->Model_Posting->getAllPost();
		$this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('admin/post/index',$data);
        // $this->load->view('admin/templates/dashboard/footer',$data);
        $this->load->view('admin/templates/footer',$data);
    }
    public function tambah()
    {
        $data['kategori']=$this->Model_Kategori->getAllKategori();
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        // $this->form_validation->set_rules('foto', 'Thumbnail', 'required');
        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal!</div>');
            $data['title']="";
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/templates/sidebar',$data);
            $this->load->view('admin/templates/topbar',$data);
            $this->load->view('admin/post/tambah',$data);
            $this->load->view('admin/templates/footer',$data);
        }else{
            $data['isi']= $this->input->post('isi');
            $data['judul']= $this->input->post('judul');
            $data['kategori']= $this->input->post('kategori');
            $data_foto = $this->aksi_upload($data['judul']);
            // client name = nama file + ext
            // file_path = letak nya
            $date = date("Y-m-d");
            date_default_timezone_set('Asia/Jakarta');
            $time = date("h:i:s");
            $data['penulis']= $this->session->userdata('username');
            $data['tanggal']= $date;
            $data['waktu']= $time;
            $data['thumbnail']=$data_foto['upload_data']['file_name'];
            // var_dump($data_foto);
            // var_dump($data);
            if(!$this->Model_Posting->tambah($data)){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal!</div>');
                redirect('posting');
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil !</div>');
                redirect('posting');
            }
        }
        
    }

    public function update()
    {
        $data['kategori']=$this->Model_Kategori->getAllKategori();
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        // $this->form_validation->set_rules('foto', 'Thumbnail', 'required');
        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun belum terdaftar!</div>');
            $data['title']="";
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/templates/sidebar',$data);
            $this->load->view('admin/templates/topbar',$data);
            $this->load->view('admin/post/lihat',$data);
            // $this->load->view('admin/templates/dashboard/footer',$data);
            $this->load->view('admin/templates/footer',$data);
        }else{
            $data['isi']= $this->input->post('isi');
            $id = $this->input->post('id');
            $data['judul']= $this->input->post('judul');
            $data['kategori']= $this->input->post('kategori');
            $data_foto = $this->aksi_upload($data['judul']);
            // client name = nama file + ext
            // file_path = letak nya
            $date = date("Y-m-d");
            date_default_timezone_set('Asia/Jakarta');
            $time = date("h:i:s");
            $data['penulis']= $this->session->userdata('username');
            $data['tanggal']= $date;
            $data['waktu']= $time;
            $data['thumbnail']=$data_foto['upload_data']['file_name'];
            if(!$this->Model_Posting->update($data,$id)){
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gagal!</div>');
                redirect('posting');
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil!</div>');
                redirect('posting');
            }
        }
        
    }
    public function delete($id)
    {
        if(!$this->Model_Posting->delete($id)){
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gagal!</div>');
            redirect('posting');
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil!</div>');
            redirect('posting');
        }
    }
    public function aksi_upload($judul){
		$config['upload_path']          = './asset/img';
		$config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['file_name']            = $judul; 
        $config['overwrite']            = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')){
			return false;
		}else{
			$data = array('upload_data' => $this->upload->data());
			return $data;
		}
    }
    public function lihat($id)
    {
        $data['data']=$this->Model_Posting->getPostWhere($id);
        $data['kategori']=$this->Model_Kategori->getAllKategori();
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/templates/topbar',$data);
        $this->load->view('admin/post/lihat',$data);
        $this->load->view('admin/templates/footer',$data);
    }
}
