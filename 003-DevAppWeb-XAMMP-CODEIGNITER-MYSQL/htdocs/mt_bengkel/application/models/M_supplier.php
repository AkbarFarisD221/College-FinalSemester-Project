<?php
class M_supplier extends CI_Model
{
	public function get_all_data($table)
	{
		return $this->db->get($table)->result();
	}
	
	public function validation($mode)
	{
		$this->load->library('form_validation'); // Load Library form_validation for proses value?
		
		if($mode == "save")
		{
			$this->form_validation->set_rules('input_id','id','required');
			$this->form_validation->set_rules('input_nama','nama','required|max_length[75]');
			$this->form_validation->set_rules('input_telp','total bayar','numeric|max_length[20]');
			$this->form_validation->set_rules('input_alamat','alamat','required|max_length[75]');
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
			$this->form_validation->set_rules('input_nama','nama','required|max_length[75]');
			$this->form_validation->set_rules('input_telp','total bayar','numeric|max_length[20]');
			$this->form_validation->set_rules('input_alamat','alamat','required|max_length[75]');
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
		"id_supplier" => $this->input->post('input_id'),
		"nama_supplier" => $this->input->post('input_nama'),
		"no_telp" => $this->input->post('input_telp'),
		"alamat" => $this->input->post('input_alamat')
		);
		$this->db->insert('supplier',$data); // Execute order insert not 66
	}
	
	public function edit($id)
	{
		$data = array
		(
		"id_supplier" => $this->input->post('input_id'),
		"nama_supplier" => $this->input->post('input_nama'),
		"no_telp" => $this->input->post('input_telp'),
		"alamat" => $this->input->post('input_alamat')
		);
		$this->db->where('id_supplier',$id);
		$this->db->update('supplier',$data); // Execute edit
	}
	
	public function view_by($id){
	$this->db->where('id_supplier',$id);
	return $this->db->get('supplier')->row();
		}
		
	public function delete($id)
	{
		$this->db->query("SET foreign_key_checks = 0");
		$this->db->where('id_supplier',$id);
		$this->db->delete('supplier');
	}
		
}
