<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login') {
            $this->load->view('auth/login');
            redirect('/');
        }
        $this->load->model('HomepageModel');
    }
}
