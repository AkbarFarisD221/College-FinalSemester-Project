<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database('barang');
		}

		public function login($email, $password){
			$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
			return $query->row_array();
		}
		
		public function view_tab()
		{
				return $this->db->get('barang')->result();
	}
		
		function cont_row() {	
		  $this->db->from('barang');
		  return $num_rows = $this->db->count_all_results('barang');
		}

					public function validation($mode){
		$this->load->library('form_validation'); // Load Library form_validation for proses value?
		
		if($mode == "save")
			$this->form_validation->set_rules('input_nama_barang','Nama','required|max_length[75]');
			$this->form_validation->set_rules('input_harga','Harga','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_stok','Stok','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_id_supplier','Id Supplier','required');
	
	if($mode == "update")
			$this->form_validation->set_rules('input_nama_barang','Nama','required|max_length[75]');
			$this->form_validation->set_rules('input_harga','Harga','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_stok','Stok','required|numeric|max_length[15]');
			$this->form_validation->set_rules('input_id_supplier','Id Supplier','required');
		
		if($this->form_validation->run() ) // checking if validation true or false
		
			return TRUE; // reply with true if validation true
		
		else //if validation isnt == 1
		
			return FALSE; // false if validation err? nope
		
	
	}
	
	public function save(){
		$data = array(
		"Nama" => $this->input->post('input_nama_barang'),
		"Harga" => $this->input->post('input_harga'),
		"Stok" => $this->input->post('input_stok'),
		"Id Supplier" => $this->input->post('input_id_supplier')
		);
		$this->db->insert('mot_tabby',$data); // Execute order insert not 66
	}
	public function view_by($id_barang){
		$this->db->where('id',$id_barang);
		return $this->db->get('mot_tabby')->row();
	}
	
	public function edit($id){
		$data = array(
		"Nama Barang" => $this->input->post('input_nama_barang'),
		"Harga" => $this->input->post('input_harga'),
		"Stok" => $this->input->post('input_stok'),
		"ID Supplier" => $this->input->post('input_id_supplier')
		);
		$this->db->where('id', $id);
		$this->db->update('mot_tabby', $data);
	}
	public function delete ($id){
		$this->db->where('id', $id);
		$this->db->delete('mot_tabby');
	}
	
	}
?>
