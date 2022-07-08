<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function login()
    {
        $e = $this->input->post('email');
        $p = $this->input->post('password');

        $cek = $this->Mlogin->cek_login($e, $p)->num_rows();
        if ($cek == 1) {
            $data_session = array(
                'email' => $e,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('homepage/homepage');
        } else {
            redirect('welcome');
            json_encode('INVALID_LOGIN');
        }
    }

    public function register()
    {
        if ($this->session->userdata('status') === 'login') {
            redirect('auth/login');
        }
        if ($email = $this->input->post('email')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($user = $this->auth_model->register($email, $username, $password)) {
                $this->session->set_userdata($user);
                echo json_encode('sukses');
            } else {
                echo json_encode('gagal');
            }
        } else {
            $this->load->view('auth/register');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('HomepageBefore');
    }
}
