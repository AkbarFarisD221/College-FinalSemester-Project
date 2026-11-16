<?php
class M_barang extends CI_Model
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
			$this->form_validation->set_rules('input_id','id','required|max_length[75]');
			$this->form_validation->set_rules('input_nama_barang','Nama','required|max_length[75]');
			$this->form_validation->set_rules('input_harga','Harga','required|numeric');
			$this->form_validation->set_rules('input_stok','Stok','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_id_supplier','Id supplier','required');
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
			$this->form_validation->set_rules('input_id','id','required|max_length[75]');
			$this->form_validation->set_rules('input_nama_barang','Nama','required|max_length[75]');
			$this->form_validation->set_rules('input_harga','Harga','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_total','total','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_id_supplier','Id supplier','required');
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
		"id_barang" => $this->input->post('input_id'),
		"Nama_barang" => $this->input->post('input_nama_barang'),
		"Harga" => $this->input->post('input_harga'),
		"Stok" => $this->input->post('input_stok'),
		"Id_Supplier" => $this->input->post('input_id_supplier')
		);
		$this->db->insert('barang',$data); // Execute order insert not 66
	}
	
	public function edit($id)
	{
		$data = array
		(
		"id_barang" => $this->input->post('input_id'),
		"Nama_barang" => $this->input->post('input_nama_barang'),
		"Harga" => $this->input->post('input_harga'),
		"Stok" => $this->input->post('input_stok'),
		"Id_Supplier" => $this->input->post('input_id_supplier')
		);
		$this->db->where('id_barang',$id);
		$this->db->update('barang',$data); // Execute edit
	}
	
	public function view_by($id){
	$this->db->where('id_barang',$id);
	return $this->db->get('barang')->row();
		}
		
	public function delete($id)
	{
		$this->db->query("SET foreign_key_checks = 0");
		$this->db->where('id_barang', $id);
		$this->db->delete('barang');
	}
		
	//
}
