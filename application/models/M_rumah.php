<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rumah extends CI_Model
{
    protected $table       = 'md_rumah';
    
    function get_all(){
        return $this->db->get($this->table)->result();
    }
}