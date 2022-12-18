<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_product extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_product');

        if ($id != null) {
            $this->db->where('id_product', $id);
        }

        $this->db->order_by('image', 'desc');
        //asc
        $query = $this->db->get();
        return $query;
    }

    public function getProduct()
    {
        $this->db->from('tb_product');
        $this->db->where('status_persetujuan', 'disetujui');
        $get = $this->db->get();
        return $get->result_array();
    }

    public function del($id)
    {
        $this->db->where('id_product', $id);
        $this->db->delete('tb_product');
    }

    public function add($post)
    {
        $params = [
            'name' => $post['name'],
            'detail' => $post['detail'],
            'harga_asli' => $post['harga_asli'],
            'harga_diskon' => $post['harga_diskon'],
            'stok' => $post['stok'],
            'image' => $post['image'],
            'category' => $post['category'],
            'status_persetujuan' => $post['status_persetujuan']
        ];

        $this->db->insert('tb_product', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['name'],
            'detail' => $post['detail'],
            'harga_asli' => $post['harga_asli'],
            'harga_diskon' => $post['harga_diskon'],
            'stok' => $post['stok'],
            'image' => $post['image'],
            'category' => $post['category'],
            'status_persetujuan' => $post['status_persetujuan']
        ];

        if ($post['image'] != null) {
            $params['image'] = $post['image'];
        }

        $this->db->where('id_product', $post['id']);
        $this->db->update('tb_product', $params);
    }

    public function detail($id)
    {
        $result = $this->db->where('id_product', $id)->get('tb_product');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getKeyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->like('name', $keyword);
        $this->db->or_like('detail', $keyword);
        $this->db->or_like('category', $keyword);

        return $this->db->get()->result();
    }

    public function find($id)
    {
        $result = $this->db->where('id_product', $id)
            ->limit(1)
            ->get('tb_product');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
