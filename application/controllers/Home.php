<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()	{
		$this->load->view('public/templates/header');
		$this->load->view('public/templates/navbar');
		$this->load->view('public/index');
		$this->load->view('public/templates/footer');
		
	}
}
