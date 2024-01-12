<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Produk_model');
    $this->load->model('Keranjang_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Admin";
    $data['keranjang'] = $this->Keranjang_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("keranjang/vw_keranjang", $data);
    $this->load->view("layout/footer", $data);

  }

  public function tambahKeKeranjang($produk_id)
  {
    $produk = $this->Produk_model->getProdukById($produk_id);

        // Prepare data to be inserted into the 'keranjang' table
        $data = array(
            'produk_id' => $produk['id'],
            'nama_produk' => $produk['nama_produk'],
            'harga' => $produk['harga'],
            // Add other necessary fields
        );

        // Insert the product into the shopping cart
        $insert_id = $this->Keranjang_model->tambahProdukKeKeranjang($data);

        // Optionally, you can redirect to the shopping cart or do something else
        redirect('user');
  }
}
