<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    protected $table = 'user';

    public function login($email, $password)
    {
        $this->db->where('email', $email);
        if ($user = $this->db->get($this->table)->row()) {
            if (password_verify($password, $user->password)) {
                $data = array(
                    'email' => $user->email,
                    'password' => $user->password,
                    'id_user' => $user->id_user,
                    'status' => 'login'
                );
                $this->session->set_userdata($data);
                return 'sukses';
            } else {
                redirect('Auth');
            }
        } else {
            redirect('welcome');
        }
    }

    public function register($email, $username, $password)
    {
        $data = array(
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );
        $this->db->insert($this->table, $data);
        $data['id_user'] = $this->db->insert_id_user();
        $data['status'] = 'login';
        return $data;
    }
}
