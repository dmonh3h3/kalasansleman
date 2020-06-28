<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index()
    {
        $this->load->view('admin/templates/header',);
        $this->load->view('admin/templates/sidebar',);
        $this->load->view('admin/templates/topbar',);
        $this->load->view('admin/dashboard/index',);
        $this->load->view('admin/templates/footer');
    }
}