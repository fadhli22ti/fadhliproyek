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

class user extends CI_Controller
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
    $this->load->view("user/vw_user", $data);
    $this->load->view("layout/footer", $data);

  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */