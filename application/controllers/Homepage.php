<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') === 'login') {
            redirect('Homepage');
            $this->load->model('HomepageModel');
        } else {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('homepage/homepage_after');
    }
}
