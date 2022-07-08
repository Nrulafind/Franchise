<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login') {
            redirect('auth/login');
        }
        $this->load->model('HomepageModel');
        $this->load->model('AuthModel');
    }
    public function index()
    {
        $this->load->view('homepage/homepage');
    }
}
