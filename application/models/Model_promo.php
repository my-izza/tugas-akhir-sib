<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_promo extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_promo');

        if ($id != null) {
            $this->db->where('id_promo', $id);
        }

        $this->db->order_by('image', 'desc');
        //asc
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_promo', $id);
        $this->db->delete('tb_promo');
    }

    public function add($post)
    {
        $params = [
            'name' => $post['name'],
            'detail' => $post['detail'],
            'label' => $post['label'],
            'harga_asli' => $post['harga_asli'],
            'harga_diskon' => $post['harga_diskon'],
            'diskon' => $post['diskon'],
            'stok' => $post['stok'],
            'category' => $post['category'],
            'image' => $post['image']
        ];

        $this->db->insert('tb_promo', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['name'],
            'detail' => $post['detail'],
            'category' => $post['category'],
            'label' => $post['label'],
            'harga_asli' => $post['harga_asli'],
            'harga_diskon' => $post['harga_diskon'],
            'diskon' => $post['diskon'],
            'stok' => $post['stok'],
            'image' => $post['image']
        ];

        if ($post['image'] != null) {
            $params['image'] = $post['image'];
        }

        $this->db->where('id_promo', $post['id']);
        $this->db->update('tb_promo', $params);
    }

    public function detail($id)
    {
        $result = $this->db->where('id_promo', $id)->get('tb_promo');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
