<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_newproduct extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_newproduct');

        if ($id != null) {
            $this->db->where('id_newproduct', $id);
        }

        $this->db->order_by('image', 'desc');
        //asc
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_newproduct', $id);
        $this->db->delete('tb_newproduct');
    }

    public function add($post)
    {
        $params = [
            'name' => $post['name'],
            'detail' => $post['detail'],
            'category' => $post['category'],
            'harga_asli' => $post['harga_asli'],
            'harga_diskon' => $post['harga_diskon'],
            'stok' => $post['stok'],
            'image' => $post['image']
        ];

        $this->db->insert('tb_newproduct', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['name'],
            'detail' => $post['detail'],
            'category' => $post['category'],
            'harga_asli' => $post['harga_asli'],
            'harga_diskon' => $post['harga_diskon'],
            'stok' => $post['stok'],
            'image' => $post['image']
        ];

        if ($post['image'] != null) {
            $params['image'] = $post['image'];
        }

        $this->db->where('id_newproduct', $post['id']);
        $this->db->update('tb_newproduct', $params);
    }
}
