<?php
class M_transaksi extends CI_Model
{
	public function get_all_data($table)
	{
		return $this->db->get($table)->Result();
	}
	
	public function validation($mode)
	{
		$this->load->library('form_validation'); // Load Library form_validation for proses value?
		
		if($mode == "save")
		{
			$this->form_validation->set_rules('input_id','id','required');
			$this->form_validation->set_rules('input_keterangan','keterangan','required|max_length[30]');
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
			$this->form_validation->set_rules('input_id','id','required');
			$this->form_validation->set_rules('input_keterangan','keterangan','required|max_length[30]');
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
	
	public function save(){
		$data = array(
		"id_transaksi" => $this->input->post('input_id'),
		"keterangan" => $this->input->post('input_keterangan')
		);
		$this->db->insert('transaksi',$data); // Execute order insert not 66
	}
	
	public function edit($id)
	{
		$data = array
		(
		"id_transaksi" => $this->input->post('input_id'),
		"keterangan" => $this->input->post('input_keterangan')
		);
		$this->db->where('id_transaksi',$id);
		$this->db->update('transaksi',$data); // Execute edit
	}
	
	public function view_by($id){
	$this->db->where('id_transaksi',$id);
	return $this->db->get('transaksi')->row();
		}
		
	public function delete($id)
	{
		$this->db->query("SET foreign_key_checks = 0");
		$this->db->where('id_transaksi',$id);
		$this->db->delete('transaksi');
	}
		
}
