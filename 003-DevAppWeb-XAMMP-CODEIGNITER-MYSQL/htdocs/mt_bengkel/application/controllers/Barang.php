<?php
class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang', 'model');
		$this->table = 'barang';
	}

	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('user'))
		{
		$data['title'] = 'Barang';
		$data['barang'] = $this->model->get_all_data($this->table); 
		$data['content']='barang_show';
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
				redirect('barang');
			}
		}
	$data['title'] = 'Barang';
	$data['content']='barang_add';
	$this->load->view('layout/layout.php',$data);
	}
	
	public function ubah($id_barang){
		$this->load->library('session');
		
		if($this->input->post('submit'))
		{
			if($this->model->validation("update"))
			{
				$this->model->edit($id_barang);
				redirect('barang');
			}
		}
		$data['barang'] = $this->model->view_by($id_barang);
		$data['title'] = 'Barang';
		$data['content']='barang_ubah';
		$this->load->view('layout/layout.php',$data);
	}
	
	public function hapus($id_barang){
		$this->model->delete($id_barang);
		redirect('barang');
	}
}
