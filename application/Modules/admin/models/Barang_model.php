<?php defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "tbl_produk";

    public $id_brg;
    public $nama_brg;
    public $harga;
    public $deskripsi;
    public $stok;
    public $gambar;

   
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }

    /*public function save()
    {
        $post = $this->input->post();
        $this->id_user;
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->role = $post["role"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->role = $post["role"];
        return $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }*/
}
