<?php
class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pembayaran', 'model');
		$this->table = 'pembayaran';
	}

		public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('user'))
		{
		$data['pembayaran'] = $this->model->get_all_data($this->table);
		$this->load->library('session');
		$data['content']='pembayaran_show';
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
				redirect('pembayaran');
			}
		}
	$data['title'] = 'pembayaran';
	$data['content']='pembayaran_add';
	$this->load->view('layout/layout.php',$data);
	}

	public function ubah($id_pembayaran)
	{
		$this->load->library('session');
		
		if($this->input->post('submit'))
		{
			if($this->model->validation("update"))
			{
				$this->model->edit($id_pembayaran);
				redirect('pembayaran');
			}
		}
		$data['pembayaran'] = $this->model->view_by($id_pembayaran);
		$data['title'] = 'pembayaran';
		$data['content']='pembayaran_ubah';
		$this->load->view('layout/layout.php',$data);
	}
	
	public function hapus($id_pembayaran){
		$this->model->delete($id_pembayaran);
		redirect('pembayaran');
	}
	
}
