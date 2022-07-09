<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/navbarP');
        $this->load->view('profile/profile');
		$this->load->view('templates/footer');
    }
}
