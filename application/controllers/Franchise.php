<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Franchise extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login_user') {
            redirect('auth/login_user');
        }
        $this->load->model('FranchiseModel');
    }
    public function index()
    {
        $this->load->view('templates/navbarF');
        $this->load->view('Franchise/franchise');
        $this->load->view('templates/footer');
    }
}
