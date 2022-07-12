<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsModel extends CI_Model
{

    // public function get_all_news()
    // {
    //     $this->db->where();
    // }
    public function insert_news($all)
    {
        $this->db->insert('news', $all);
    }
}
