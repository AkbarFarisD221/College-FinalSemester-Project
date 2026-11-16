<?php

class import extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model', 'model'); //
		$this->load->model('kehan_model', 'model_2');//
	}
	
	public function index()
	{
		// Action form.
		$data['action'] = site_url('import/process');
		$data['title'] = 'Import';
		$this->load->library('session');
		
		if($this->session->userdata('user'))
		{
		$data['content'] = 'fetch/import.php';  // for layout later
		$this->load->view('layout/layout.php', $data);
		}
		else
		{
		redirect('/');
		}
	}
	
		public function kehadiran()
	{
		// Action form.
		$data['action_2'] = site_url('import/process_kehan');
		$data['title'] = 'Import Kehadiran';
		$this->load->library('session');
		
		if($this->session->userdata('user'))
		{
		$data['content'] = 'fetch/import_kehan.php';  // for layout later
		$this->load->view('layout/layout.php', $data);
		}
		else
		{
		redirect('/');
		}
	}
	

	/**
	 * Memproses data yang diimport. // Are we just gonna keep copy and paste without knowing its function of the words?
	 * // How am i supposed to make my own solution?!
	 */
	public function process()
	{
		if ( isset($_POST['import'])) {

            $file = $_FILES['users']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport. -> Yes i get it. Fetch the extension, wtf "explode" though?
			$extension  = explode('.', $_FILES['users']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo '- YOU CANNOT SUBMIT EMPTY FILE -';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.
				if (strtolower(end($extension)) === 'csv' && $_FILES["users"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r") or die ("No such file found");
					while (($row =  fgetcsv($handle, 1000, ";")) !== FALSE) 
					{
						$i++;
						if ($i == 1) continue;
						
						$data = [
							'id' => $row[0],
							'name' => $row[1],
							'gender' => $row[2],
							'email' => $row[3],
						];
						

						// Simpan data ke database.
						$this->model->import_data($data);
					}
					

					fclose($handle);
					redirect('import');

				} else {
					echo 'Format file are invalid.. BRUH TF YOU TRYING TO PUT?';
				}
			}
        }
	}
	
	public function process_kehan()
	{
			if ( isset($_POST['import'])) {

            $file = $_FILES['kehansis']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport. -> Yes i get it. Fetch the extension, wtf "explode" though?
			$extension  = explode('.', $_FILES['kehansis']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo '- YOU CANNOT SUBMIT EMPTY FILE -';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.
				if (strtolower(end($extension)) === 'csv' && $_FILES["kehansis"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r") or die ("No such file found");
					while (($row =  fgetcsv($handle, 1000, ";")) !== FALSE) 
					{
						$i++;
						if ($i == 1) continue;
						
						$data = [
							'npm' => $row[0],
							'fname' => $row[1],
							'lname' => $row[2],
							'hadir' => $row[3],
							'tugs' => $row[4],
							'uts' => $row[5],
							'uas' => $row[6],
							'botnin' => $row[7],
						];
						

						// Simpan data ke database.
						$this->model_2->import_data($data);
					}
					

					fclose($handle);
					redirect('import');

				} else {
					echo 'Format file are invalid.. BRUH TF YOU TRYING TO PUT?';
				}
			}
        }
	}
}