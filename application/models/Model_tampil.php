<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_tampil extends CI_Model
{
    public function getCarausel()
    {
        $this->db->from('tb_carousel');
        $this->db->where('status_persetujuan', 'disetujui');
        $get = $this->db->get();
        return $get->result_array();
    }

    // Tampil New Product

    public function getProduct()
    {
        return $this->db->get('tb_newproduct');
    }

    // Tampil Promo

    public function getPromo()
    {
        $this->db->from('tb_promo');
        $get = $this->db->get();
        return $get->result_array();
    }


    public function get($id = null)
    {
        $this->db->from('tb_carousel');

        if ($id != null) {
            $this->db->where('id_carousel', $id);
        }

        $this->db->order_by('image', 'desc');
        //asc
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_carousel', $id);
        $this->db->delete('tb_carousel');
    }

    public function add($post)
    {
        $params = [
            'name' => $post['name'],
            'label' => $post['label'],
            'description' => $post['description'],
            'image' => $post['image'],
            'status_persetujuan' => $post['status_persetujuan']
        ];

        $this->db->insert('tb_carousel', $params);
    }

    public function edit($post)
    {
        $params = [

            'name' => $post['name'],
            'label' => $post['label'],
            'description' => $post['description'],
            'image' => $post['image'],
            'status_persetujuan' => $post['status_persetujuan']

        ];

        if ($post['image'] != null) {
            $params['image'] = $post['image'];
        }

        $this->db->where('id_carousel', $post['id']);
        $this->db->update('tb_carousel', $params);
    }

    public function hargaMahal()
    {
        $this->db->select('*');
        $this->db->from('tb_product');

        $this->db->order_by('harga_diskon', 'desc');
        //desc
        return $this->db->get()->result();
    }

    public function hargaMurah()
    {
        $this->db->select('*');
        $this->db->from('tb_product');

        $this->db->order_by('harga_diskon', 'asc');
        //desc
        return $this->db->get()->result();
    }
}
