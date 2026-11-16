<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kehadiran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('kehan_model', 'model');//
	}
		
		public function index()
	{
		$this->load->library('session');
		$this->load->library('encryption');
		if($this->session->userdata('user'))
		{
		$data['title'] = 'Meh';
		$data['absensis'] =$this->model->get_data();
		$data['content'] = 'normal_kehan';  // for layout later
		$this->load->view('layout/layout.php', $data);
		}
		else
		{
			redirect('/');
		}

		
	}

	
}