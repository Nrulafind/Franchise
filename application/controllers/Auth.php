<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('AuthModel');
    // }

    // public function login()
    // {
    //     if ($this->session->userdata('status') === 'login') {
    //         redirect('Homepage');
    //     }
    //     if ($email = $this->input->post('email')) {
    //         $password = $this->input->post('password');
    //         echo json_encode($this->AuthModel->login($email, $password));
    //     } else {
    //         $this->load->view('auth/login');
    //     }
    // }

    // public function register()
    // {
    //     if ($this->session->userdata('status') === 'login') {
    //         redirect('auth/login');
    //     }
    //     if ($username = $this->input->post('username')) {
    //         $password = $this->input->post('password');
    //         $email = $this->input->post('email');
    //         if ($user = $this->auth_model->register($username, $password, $email)) {
    //             $this->session->set_userdata($user);
    //             echo json_encode('sukses');
    //         } else {
    //             echo json_encode('gagal');
    //         }
    //     } else {
    //         $this->load->view('auth/register');
    //     }
    // }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect('Homepage');
    // }
}
