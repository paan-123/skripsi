<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model{
    protected $table = "web_helper_article";

    function get_all(){
        return $this->db->get("web_helper_article")->result();
    }
    
    function addArticle($judul){
        $this->db->set($this->input->post());
        $this->db->set("gambar", $judul);
        $this->db->set("tanggal", 'CURDATE()', false);
        // print($this->db->get_compiled_insert($this->table));
        $this->db->insert($this->table);
    }
}