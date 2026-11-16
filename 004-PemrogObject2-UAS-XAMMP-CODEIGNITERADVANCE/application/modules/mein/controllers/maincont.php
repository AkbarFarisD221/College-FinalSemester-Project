<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincont extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('main_model', 'model');//
				   $this->load->library('form_validation');

		
		$this->load->library('session');
	}
	
	public function index()
	{
			if($this->session->userdata('user'))
		{
		$data['title'] = 'Meh';
		$data['content'] = 'dashboard_content';  // for layout later
		$this->load->view('dashboard.php', $data);
		}
		else{
			redirect('/');
		}
	
	}
		
	
		public function home()
	{
		$this->load->library('session');
		
		if($this->session->userdata('user'))
		{
		$data['title'] = 'Meh';
		$data['content'] = 'home';  // for layout later
		$this->load->view('layout/layout.php', $data);
		}
		else{
			redirect('/');
		}
		
	}
	
}