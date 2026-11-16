<?php

class imports extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model'); //
	}
	
	public function index()
	{
		// Action form.
		$data['action'] = site_url('import/process');
		$data['title'] = 'Import';
		$data['content'] = 'fetch/import.php';  // for layout later
		$this->load->view('layout/layout_test.php', $data);
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
					if (count($file_data) < 2) {
    // do something (e.g. fill error array or throw exeption)
}
					$i = 0;
					$handle = fopen($file, "r");
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						if ($i == 1) continue;
						
						// Data yang akan disimpan ke dalam databse
						$data = [
							'name' => $row[1],
							'gender' => $row[2],
							'email' => $row[3],
						];

						// Simpan data ke database.
						$this->main_model->import_data($data);
					}

					fclose($handle);

				} else {
					echo 'Format file are invalid.. BRUH TF YOU TRYING TO PUT?';
				}
			}
        }
	}
}