<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');


class main_model extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('users')->result_array();
		return $this->db->get('barangdt')->result_array();
		return $this->db->get('barangdt_out')->result_array();
	}
		
	 public function import_data($data)
    {
        return $this->db->insert('users', $data);
    }
	// well here we are again. Except we are long forgotten.	
}
