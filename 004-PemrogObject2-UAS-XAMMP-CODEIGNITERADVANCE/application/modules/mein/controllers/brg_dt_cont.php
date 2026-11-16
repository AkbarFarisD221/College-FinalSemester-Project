<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class brg_dt_cont extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('brg_dt_model', 'model');//
		$this->load->library('form_validation');

		
		$this->load->library('session');
	}
	
	public function index()
	{
			if($this->session->userdata('user'))
		{
		$data['title'] = 'Meh';
		$data['barang_dt'] =$this->model->get_data();
		$data['content'] = 'barang_dt_pg';  // for layout later
		$this->load->view('dashboard.php', $data);
		}
		else{
			redirect('/');
		}
	
	}
		
	
}