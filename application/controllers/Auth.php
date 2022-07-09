<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function login_user()
    {
        $e = $this->input->post('email');
        $p = $this->input->post('password');

        $cek = $this->AuthModel->cek_login_user($e, $p)->num_rows();
        if ($cek == 1) {
            $data_session = array(
                'email' => $e,
                'password' => $p,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            $this->load->view('Homepage/homepage');
        } else {
            $this->load->view('auth/login');
            json_encode('INVALID_LOGIN');
        }
    }

    public function login_admin()
    {
        $e = $this->input->post('email');
        $p = $this->input->post('password');

        $cek = $this->AuthModel->cek_login_admin($e, $p)->num_rows();
        if ($cek == 1) {
            $data_session = array(
                'email' => $e,
                'password' => $p,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            $this->load->view('Homepage/homepage');
        } else {
            $this->load->view('auth/login');
            json_encode('INVALID_LOGIN');
        }
    }

    public function register_user()
    {
        if ($this->session->userdata('status') === 'login_user') {
            redirect('auth/login_user');
        }
        if ($email = $this->input->post('email')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($user = $this->AuthModel->register_user($email, $username, $password)) {
                $this->session->set_userdata($user);
                echo json_encode('sukses');
            } else {
                echo json_encode('gagal');
            }
        } else {
            $this->load->view('auth/register');
        }
    }
    public function register_admin()
    {
        if ($this->session->userdata('status') === 'login') {
            redirect('auth/login');
        }
        if ($email = $this->input->post('email')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($user = $this->AuthModel->register_admin($email, $username, $password)) {
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
        redirect('welcome_message');
    }
}
