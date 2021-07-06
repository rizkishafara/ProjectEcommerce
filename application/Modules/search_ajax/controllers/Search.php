<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Search_model');
  }
  public function index(){
    $data['tbl_produk'] = $this->Search_model->view();
    $this->load->view('index', $data);
  }
  
  public function search(){
    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $tbl_produk = $this->Search_model->search($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('view', array('tbl_produk'=>$tbl_produk), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
}