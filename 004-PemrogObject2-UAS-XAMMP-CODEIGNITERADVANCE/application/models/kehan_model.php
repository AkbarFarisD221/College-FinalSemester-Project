<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');


class kehan_model extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('absensis')->result_array();
	}
		
	 public function import_data($data)
    {
        return $this->db->insert('absensis', $data);
    }
	// well here we are again. Except we are long forgotten.	
}
