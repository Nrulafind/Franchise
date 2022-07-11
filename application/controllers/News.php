<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {
        $this->load->view('News/news');
    }
    public function add_news()
    {
        if ($this->session->userdata('status') === 'login_admin') {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $gambar = $this->input->post('gambar');

            $all = [$judul, $isi, $gambar];
            $this->db->insert_news($all);
        }
    }
}
