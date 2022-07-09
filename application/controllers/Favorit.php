<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Favorit extends CI_Controller
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
        $this->load->view('Franchise/franchise');
    }
    public function add_favorit()
    {
        $f = $this->input->post('id_favorit');
    }
}
