<?php
class Pembeli extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pembeli', 'model');
		$this->table = 'pembeli';
	}

	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('user'))
		{
		$data['pembeli'] = $this->model->get_all_data($this->table);
		$data['title'] = 'Pembeli';
		$this->load->library('session');
		$data['content']='pembeli_show';
		$this->load->view('layout/layout.php',$data);
		}
		else
		{
			redirect('/');
		}
	}


	public function add()
	{
	$this->load->library('session');
    if($this->input->post('submit'))
		{
		if($this->model->validation("save"))
			{
				$this->model->save();
				redirect('pembeli');
			}
		}
	$data['title'] = 'pembeli';
	$data['content']='pembeli_add';
	$this->load->view('layout/layout.php',$data);
	}

	public function ubah($id_pembeli)
	{
		$this->load->library('session');
		
		if($this->input->post('submit'))
		{
			if($this->model->validation("update"))
			{
				$this->model->edit($id_pembeli);
				redirect('pembeli');
			}
		}
		$data['pembeli'] = $this->model->view_by($id_pembeli);
		$data['title'] = 'Pembeli';
		$data['content']='pembeli_ubah';
		$this->load->view('layout/layout.php',$data);
	}
	
	public function hapus($id_pembeli)
	{
		$this->model->delete($id_pembeli);
		redirect('pembeli');
	}
	
}
