<?php
class Supplier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_supplier', 'model');
		$this->table = 'supplier';
	}

	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('user'))
		{
		$data['supplier'] = $this->model->get_all_data($this->table);
		$data['title'] = 'Supplier';
		$data['barang'] = 'Barang';
		$data['content']='supplier_show';
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
				redirect('supplier');
			}
		}
	$data['title'] = 'supplier';
	$data['content']='supplier_add';
	$this->load->view('layout/layout.php',$data);
	}

	public function ubah($id_supplier)
	{
		$this->load->library('session');
		
		if($this->input->post('submit'))
		{
			if($this->model->validation("update"))
			{
				$this->model->edit($id_supplier);
				redirect('supplier');
			}
		}
		$data['supplier'] = $this->model->view_by($id_supplier);
		$data['title'] = 'supplier';
		$data['content']='supplier_ubah';
		$this->load->view('layout/layout.php',$data);
	}
	
	public function hapus($id_supplier)
	{
		$this->model->delete($id_supplier);
		redirect('supplier');
	}
	

}
