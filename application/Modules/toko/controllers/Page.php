<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('keranjang_model');
	}
	public function index()
	{
		$this->load->library('pagination');
		//pagination
		$config['base_url'] = 'http://localhost/LatihEcommerce/toko/page/index';
		$config['total_rows'] = $this->keranjang_model->get_produk_all();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 3;
		$from = $this->uri->segment(4);

		// Agar bisa mengganti stylenya sesuai class2 yg ada dibootstrap
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		// End style pagination

		$this->pagination->initialize($config);
		$data['produk'] = $this->keranjang_model->data($config['per_page'], $from);


		//$data['produk'] = $this->keranjang_model->get_produk_all();
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('themes/header', $data);
		$this->load->view('shopping/list_produk', $data);
		$this->load->view('themes/footer');
	}
	public function search()
	{
		$cari = $_GET['search'];
        $data['produk']  = $this->keranjang_model->search($cari);
        $hasil = $this->load->view('shopping/view_search', $data);
	}
	public function tentang()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('themes/header', $data);
		$this->load->view('toko/pages/tentang', $data);
		$this->load->view('themes/footer');
	}
	public function cara_bayar()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('themes/header', $data);
		$this->load->view('pages/cara_bayar', $data);
		$this->load->view('themes/footer');
	}
}
