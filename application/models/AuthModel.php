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
                    'id' => $user->id,
                    'status' => 'login'
                );
                $this->session->set_userdata($data);
                return 'sukses';
            } else {
                return 'password';
            }
        } else {
            return "email";
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
        $data['id'] = $this->db->insert_id();
        $data['status'] = 'login';
        return $data;
    }
}
