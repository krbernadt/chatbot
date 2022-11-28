<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Command_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function like_data($data)
    {
        $this->db->like('command', $data['msg']);
    }
}
