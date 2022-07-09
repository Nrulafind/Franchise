<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function cek_login_user($e, $p)
    {
        $q = $this->db->get_where('user', array('email' => $e, 'password' => $p));
        return $q;
    }

    public function cek_login_admin($e, $p)
    {
        $q = $this->db->get_where('admin', array('email' => $e, 'password' => $p));
        return $q;
    }

    public function register_user($email, $username, $password)
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

    public function register_admin($email, $username, $password)
    {
        $data = array(
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );
        $this->db->insert($this->table, $data);
        $data['id_user'] = $this->db->insert_id_admin();
        $data['status'] = 'login';
        return $data;
    }
}
