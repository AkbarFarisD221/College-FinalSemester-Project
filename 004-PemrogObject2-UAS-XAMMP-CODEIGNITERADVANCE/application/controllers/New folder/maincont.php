<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maincont extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('main_model', 'model');//
		$this->load->model('kehan_model', 'model_2');//
	}
	
	public function index()
	{
		$this->load->library('session');
		$this->load->library('encryption');
		if($this->session->userdata('user'))
		{
		$data['title'] = 'Meh';
		$data['users'] =$this->model->get_data();
		$data['content'] = 'normal';  // for layout later
		$this->load->view('layout/layout.php', $data);
		}
		else{
			redirect('/');
		}
	
	}
		
		public function kehadiran()
	{
		$this->load->library('session');
		$this->load->library('encryption');
		if($this->session->userdata('user'))
		{
		$data['title'] = 'Meh';
		$data['absensis'] =$this->model_2->get_data();
		$data['content'] = 'normal_kehan';  // for layout later
		$this->load->view('layout/layout.php', $data);
		}
		else
		{
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