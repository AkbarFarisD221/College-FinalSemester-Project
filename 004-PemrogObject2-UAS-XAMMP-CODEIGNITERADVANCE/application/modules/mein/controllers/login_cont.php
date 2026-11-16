<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_cont extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model', 'model');
	}

	public function index()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		//if($this->session->userdata('user')){
			redirect('maincont');
		}
		//else{
			$data['title'] = 'Login Page';
			$this->load->view ('login_page.php');
			//$this->load->view('layout/layout.php', $data);
		}
	}


	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['email'];
		$password = $_POST['password'];

		$data = $this->model->login($email, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			redirect('maincont');
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		}
	}
	
	public function logout()
	{
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}



}
