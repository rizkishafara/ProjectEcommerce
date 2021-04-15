<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model("Barang_model");
    }
    public function index()
    {
        $data["barang"] = $this->Barang_model->getAll();
        $this->load->view("barang", $data);
    }
}
