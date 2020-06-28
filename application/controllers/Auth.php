<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
    {	
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('user', 'user', 'trim|required');
		if ($this->form_validation->run() == false) {
        $data['title'] = 'SD-KALINAMPU 2 - Masukkan Akun';
        $this->load->view('admin/templates/auth_header', $data);
        $this->load->view('admin/login');
		$this->load->view('admin/templates/auth_footer');
		} else {
            $this->_login();
        }
	}
	
	private function _login()
	{
		$user       = $this->input->post('user');
        $password   = $this->input->post('password');
        $user       = $this->db->get_where('akun', ['username' => $user])->row_array();
        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['level'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'level' => $user['level'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun belum aktif!</div>');
				redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun belum terdaftar!</div>');
			redirect('auth');
        }
	}
	public function register()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/register');
		$this->load->view('admin/templates/footer');
	}
	public function pre_register()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/auth_header');
            $this->load->view('admin/registration');
            $this->load->view('admin/templates/auth_footer');
        } else {
            $data = [
				'nama'      => htmlspecialchars($this->input->post('name', true)),
				'username'  => htmlspecialchars($this->input->post('username', true)),
                'email'     => htmlspecialchars($this->input->post('email', true)),
                'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level'     => 1,
                'created'    => time()
            ];
            $this->db->insert('akun', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat akun anda berhasil dibuat. Silahkan Login!</div>');
            redirect('auth');
		}
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }
}
