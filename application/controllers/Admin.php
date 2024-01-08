<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Produk_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Admin";
    $data['produk'] = $this->Produk_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_admin", $data);
    $this->load->view("layout/footer", $data);
  }


  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Produk";
    $data['produk'] = $this->Produk_model->get();

    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
    $this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_tambah_produk", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $data_produk = [
        'nama_produk' => $this->input->post('nama_produk'),
        'deskripsi' => $this->input->post('deskripsi'),
        'harga' => $this->input->post('harga'),
      ];
      $this->Produk_model->insert($data_produk);
      redirect('Admin');
    }
  }

  public function hapus($id)
  {
    $this->Produk_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
            fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
            class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
    }
    redirect('Admin');
  }

  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Produk";
    $data['produk'] = $this->Produk_model->get();
    $data['produk'] = $this->Produk_model->getById($id);
    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
    $this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_ubah_produk", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $data_produk = [
        'nama_produk' => $this->input->post('nama_produk'),
        'deskripsi' => $this->input->post('deskripsi'),
        'harga' => $this->input->post('harga'),
      ];

      $id = $this->input->post('id');
      $this->Produk_model->update(['id' => $id], $data_produk);
      redirect('Admin');
    }
  }



}





/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */