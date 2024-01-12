<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang_model extends CI_Model
{
    public function tambahProdukKeKeranjang($data)
    {
        // Insert data into the 'keranjang' table
        $this->db->insert('keranjang', $data);

        // Return the insert ID
        return $this->db->insert_id();
    }

    public function get($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('produk');
        return $query->result_array();
    }
}
