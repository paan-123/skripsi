<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_population extends CI_Model
{
    protected $table       = 'data_induk'; // you MUST mention the table name
    protected $primary_key = 'kd_data'; // you MUST mention the primary key

    public function get_all($limit, $page)
    {    	
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->get($this->table);

        return $query->result();
    }

    public function get_total()
    {
        return $this->db->count_all($this->table);
    }
}