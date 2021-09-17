<?php

class Login_model extends CI_Model
{

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function cek_user($data)
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
}
