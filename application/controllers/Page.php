<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function e_ktp(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('tgl', 'Tempat', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
		$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
		$this->form_validation->set_rules('desa', 'Desa', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('negaraan', 'Kewarga Negaraan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('nik', 'Nomor NIK', 'required|numeric');
		$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$data['nama']=$this->input->post('nama');
			$data['tempat_lahir']=$this->input->post('tempat');
			$data['tgl_lahir']=$this->input->post('tgl');
			$data['jenis_kelamin']=$this->input->post('jk');
			$data['alamat']=$this->input->post('alamat');
			$data['rt']=$this->input->post('rt');
			$data['rw']=$this->input->post('rw');
			$data['desa']=$this->input->post('desa');
			$data['kecamatan']=$this->input->post('kecamatan');
			$data['agama']=$this->input->post('agama');
			$data['status']=$this->input->post('status');
			$data['kewarga_negaraan']=$this->input->post('negaraan');
			$data['pekerjaan']=$this->input->post('pekerjaan');
			$data['id']=$this->input->post('nik');
			$data['kk']=$this->input->post('kk');
			$data['email']=$this->input->post('email');
		if ($this->form_validation->run() == false) {
			// echo "2";	
			$this->load->view('public/templates/header');
			$this->load->view('public/templates/navbar');
			$this->load->view('public/e-ktp/index',$data);
			$this->load->view('public/templates/footer');
		}else{
			$this->load->model('Model_Daftar');
			// var_dump($data);
			if($this->Model_Daftar->insert($data)){
				$this->session->set_flashdata('pesan', 'Data Berhasi Terdaftar');
				redirect('page/e_ktp');
			}else{
				$this->session->set_flashdata('pesan', 'Data Gagal Terdaftar');
				redirect('page/e_ktp');
			}
		}
	}
}
