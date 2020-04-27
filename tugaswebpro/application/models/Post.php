<?php

// Nama  : Elqi Ashok
// NIM   : 1301184158
// Kelas : IF-42-11

class Post extends CI_Model
{

    public function getAllPost()
    {
        $this->db->join('user', 'post.id_user = user.id_user');
        return $this->db->get('post')->result();
    }

    public function getPost($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('post');
        return $query->num_rows();
    }

    public function getUserPost($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('post')->result();
    }
}
