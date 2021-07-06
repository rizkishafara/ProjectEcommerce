<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model
{

    public function view()
    {
        return $this->db->get('tbl_produk')->result(); // Tampilkan semua data yang ada di tabel siswa
    }

    public function search($keyword)
    {
        $this->db->like('id_produk', $keyword);
        $this->db->or_like('nama_produk', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('gambar', $keyword);

        $result = $this->db->get('tbl_produk')->result(); // Tampilkan data siswa berdasarkan keyword

        return $result;
    }
}
