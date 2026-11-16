<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');


class KasModel extends CI_Model
{
	// SHOW THE DATA OF KAS DAMMIT
	public function view()
	{
		return $this->db->get('arus_kas')->result();
	}
	
	public function validation($mode)
	{
		$this->load->library('form_validation'); // Load Library form_validation for proses value?
		
		if($mode == "save")
		{
			$this->form_validation->set_rules('input_nama','Nama','required|max_length[75]');
			$this->form_validation->set_rules('input_nim','NIM','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_angkatan','Angkatan','required');
			$this->form_validation->set_rules('input_jurusan','Jurusan','required|max_length[40]');
			$this->form_validation->set_rules('input_pembayaran','Pembayaran','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_jenis','Jenis Pembayaran','required');
			$this->form_validation->set_rules('input_waktu','Waktu Pembayaran','required');
			$this->form_validation->set_rules('input_metode','Metode Pembayaran','required');
			if($this->form_validation->run() ) // checking if validation true or false
			{
				return TRUE; // reply with true if validation true
			}
			else //if validation isnt == 1
			{
				return FALSE; // false if validation err? nope
			}
		}
		
		
		if($mode == "update")
		{
			$this->form_validation->set_rules('input_nama','Nama','required|max_length[75]');
			$this->form_validation->set_rules('input_nim','NIM','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_angkatan','Angkatan','required');
			$this->form_validation->set_rules('input_jurusan','Jurusan','required|max_length[40]');
			$this->form_validation->set_rules('input_pembayaran','Pembayaran','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_jenis','Jenis Pembayaran','required');
			$this->form_validation->set_rules('input_waktu','Waktu Pembayaran','required');
			$this->form_validation->set_rules('input_metode','Metode Pembayaran','required');
				
			if($this->form_validation->run() ) // checking if validation true or false
			{
				return TRUE; // reply with true if validation true
			}
			else //if validation isnt == 1
			{
				return FALSE; // false if validation err? nope
			}
		}

	}
	
	public function save()
	{
		$data = array
		(
		"Nama" => $this->input->post('input_nama'),
		"NIM" => $this->input->post('input_nim'),
		"Angkatan" => $this->input->post('input_angkatan'),
		"Jurusan" => $this->input->post('input_jurusan'),
		"Pembayaran" => $this->input->post('input_pembayaran'),
		"Jenis" => $this->input->post('input_jenis'),
		"Waktu" => $this->input->post('input_waktu'),
		"Metode" => $this->input->post('input_metode')
		);
		$this->db->insert('arus_kas',$data); // Execute order insert not 66
	}
	
	// Sometimes, it doesnt just work ~ Todd Howard
	public function view_by($id)
	{
	$this->db->where('id',$id);
	return $this->db->get('arus_kas')->row();
	}
	
	public function edit($id)
	{
		$data = array
		(
		"Nama" => $this->input->post('input_nama'),
		"NIM" => $this->input->post('input_nim'),
		"Angkatan" => $this->input->post('input_angkatan'),
		"Jurusan" => $this->input->post('input_jurusan'),
		"Pembayaran" => $this->input->post('input_pembayaran'),
		"Jenis" => $this->input->post('input_jenis'),
		"Waktu" => $this->input->post('input_waktu'),
		"Metode" => $this->input->post('input_metode')
		);
		$this->db->where('id',$id);
		$this->db->update('arus_kas',$data); // Execute edit
	}
		
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('arus_kas');
	}
		
}
