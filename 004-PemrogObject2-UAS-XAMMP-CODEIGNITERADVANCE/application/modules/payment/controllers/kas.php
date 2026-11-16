<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('KasModel'); // load kas model to controller?
	}
	
	public function index()
	{
		$data['arus_kas'] =$this->KasModel->view();
		$data['tes'] = "Testing idiot";
		$this->load->view('layers/header');
		$this->load->view('arus_kas/index', $data);
		$this->load->view('layers/footer');
	}
	public function tambah()
	{
    if($this->input->post('submit'))
		{
		if($this->KasModel->validation("save")) // validation success goes save wen true 
			{
				$this->KasModel->save(); // call fungsi save from kasmodel.php aye?
				redirect('payment');
			}
		}
	$this->load->view('layers/header');
	$this->load->view('arus_kas/tambah');
	$this->load->view('layers/footer');
	}
	
	public function ubah($id)
	{
		if($this->input->post('submit')) //if user press submit?
		{
			if($this->KasModel->validation("update"))
			{
			$this->KasModel->edit($id); // call edit function?
			redirect('payment');
			}
		}
		$data['arus_kas'] = $this->KasModel->view_by($id);
		$this->load->view('layers/header');
		$this->load->view('arus_kas/form_ubah',$data); // load ubah page
		$this->load->view('layers/footer');

	}
	
	public function hapus($id)
	{
		$this->KasModel->delete($id);
		redirect('payment');
	}
}