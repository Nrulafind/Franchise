<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Franchise extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') === 'login') {
            redirect('Franchise');
            $this->load->model('FranchiseModel');
        } else {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('Franchise/franchise');
    }
}
