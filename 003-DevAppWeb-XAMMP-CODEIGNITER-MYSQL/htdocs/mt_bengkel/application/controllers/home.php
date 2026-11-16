<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('user'))
		{
		$data['content'] = 'home/home';
		$this->load->view('layout/layout.php',$data);
		}
		else{
			redirect('/');
		}
	}

		public function home()
	{
		//load session library
		

		//restrict users to go to home if not logged in

		

	}



}
