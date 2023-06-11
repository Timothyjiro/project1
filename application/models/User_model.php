<?php

class User_model extends CI_Model 
{
    public function register($enskripsi)
    {
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'username' => $this->input->post('username'),
            'password' => $enskripsi,
        );

        $this->db->insert('user', $data);
    }

    public function login($username, $password)
    {
        //validasi ke database
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $sql = $this->db->get('user');

        if ($sql->num_rows() == 1) {
            return  $sql->row()->id_user;
        } else {
            return FALSE;
        }
    }
}