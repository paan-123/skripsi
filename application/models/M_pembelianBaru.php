<?php
class M_pembelianBaru extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	function saverecords($data)
	{
          $this->db->insert('insert',$data);
          return $this->db->insert_id();
	}
	
}