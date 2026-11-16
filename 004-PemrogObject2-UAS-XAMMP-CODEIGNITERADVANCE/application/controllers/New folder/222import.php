<?php

class import extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model', 'model'); //
		$this->load->library('csvimport');
	}
	
	public function index()
	{
		// Action form.
		$data['title'] = 'Import';
		$data['content'] = 'fetch/import.php';  // for layout later
		$this->load->view('layout/layout_test.php', $data);
	}

	/**
	 * Memproses data yang diimport. // Are we just gonna keep copy and paste without knowing its function of the words?
	 * // How am i supposed to make my own solution?!
	 */
	public function importcsv()
	{
		$data['users'] = $this->model->get_data();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

			$data['content'] = 'fetch/import.php';  // for layout later
			$this->load->view('layout/layout_test.php', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'id'=>$row['id'],
                        'name'=>$row['name'],
                        'gender'=>$row['gender'],
                        'email'=>$row['email'],
                    );
                    $this->model->import_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv');
                //echo "<pre>"; print_r($insert_data);
            } else 
			{
				
                $data['error'] = "Error occured";
                		$data['content'] = 'fetch/import.php';  // for layout later
		$this->load->view('layout/layout_test.php', $data);
            }
            
        


		}
	}
}