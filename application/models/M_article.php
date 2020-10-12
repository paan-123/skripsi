<?php

class M_article extends CI_Model{
    function get_all(){
        return $this->db->get("web_helper_article")->result();
    }
}