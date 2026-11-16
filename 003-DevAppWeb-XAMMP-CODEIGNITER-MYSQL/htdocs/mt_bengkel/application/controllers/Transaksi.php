<?php
class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi', 'model');
		$this->table = 'transaksi';
	}
	
	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('user'))
		{
		$data['transaksi'] = $this->model->get_all_data($this->table);
		$data['title'] = 'Transaksi';
		$data['content']='transaksi_show';
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
				redirect('transaksi');
			}
		}
	$data['title'] = 'transaksi';
	$data['content']='transaksi_add';
	$this->load->view('layout/layout.php',$data);
	}

	public function ubah($id_transaksi)
	{
		$this->load->library('session');
		
		if($this->input->post('submit'))
		{
			if($this->model->validation("update"))
			{
				$this->model->edit($id_transaksi);
				redirect('transaksi');
			}
		}
		$data['transaksi'] = $this->model->view_by($id_transaksi);
		$data['title'] = 'Transaksi';
		$data['content']='transaksi_ubah';
		$this->load->view('layout/layout.php',$data);
	}
	
	public function hapus($id_transaksi)
	{
		$this->model->delete($id_transaksi);
		redirect('transaksi');
	}
	
}
