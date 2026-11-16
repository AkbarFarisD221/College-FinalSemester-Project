<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');


class brg_dt_model extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('barangdt')->result_array();
	}
		
	// well here we are again. Except we are long forgotten.	
}
