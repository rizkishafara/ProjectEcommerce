<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model("User_model");
    }
    public function index()
    {
        $data["users"] = $this->User_model->getAll();
        $this->load->view("user", $data);
    }
}
