<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login_user') {
            redirect('Auth/login');
        }
        $this->load->model('HomepageModel');
    }
    public function index()
    {
        $this->load->view('templates/navbarL');
        $this->load->view('Homepage/homepage');
        $this->load->view('templates/footer');
    }
}
