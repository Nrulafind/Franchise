<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Franchise extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login') {
            redirect('auth/login');
        }
        $this->load->model('FranchiseModel');
    }
    public function index()
    {
        $this->load->view('Franchise/franchise');
    }
}
