<?php
class M_pembayaran extends CI_Model
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
			$this->form_validation->set_rules('input_id_pembayaran','Nama','required');
			$this->form_validation->set_rules('input_waktu','waktu','required');
			$this->form_validation->set_rules('input_total','total bayar','required|numeric');
			$this->form_validation->set_rules('input_id_transaksi','Id transaksi','required');
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
			$this->form_validation->set_rules('input_id_pembayaran','Nama','required');
			$this->form_validation->set_rules('input_waktu','waktu','required');
			$this->form_validation->set_rules('input_total','total bayar','required|numeric');
			$this->form_validation->set_rules('input_id_transaksi','Id transaksi','required');
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
		"id_pembayaran" => $this->input->post('input_id_pembayaran'),
		"tgl_bayar" => $this->input->post('input_waktu'),
		"total_bayar" => $this->input->post('input_total'),
		"Id_transaksi" => $this->input->post('input_id_transaksi')
		);
		$this->db->insert('pembayaran',$data); // Execute order insert not 66
	}
	
	public function edit($id)
	{
		$data = array
		(
		"id_pembayaran" => $this->input->post('input_id_pembayaran'),
		"tgl_bayar" => $this->input->post('input_waktu'),
		"total_bayar" => $this->input->post('input_total'),
		"Id_transaksi" => $this->input->post('input_id_transaksi')
		);
		$this->db->where('id_pembayaran',$id);
		$this->db->update('pembayaran',$data); // Execute edit
	}
	
	public function view_by($id){
	$this->db->where('id_pembayaran',$id);
	return $this->db->get('pembayaran')->row();
		}
		
	public function delete($id)
	{
		$this->db->query("SET foreign_key_checks = 0");
		$this->db->where('id_pembayaran',$id);
		$this->db->delete('pembayaran');
	}
		
}
