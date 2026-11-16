<?php
	class login_model extends CI_Model 
	{
		function __construct(){
			parent::__construct();
			$this->load->database('00_ware');
		}

		public function login($email, $password)
		{
			$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
			return $query->row_array();
		}
	}
