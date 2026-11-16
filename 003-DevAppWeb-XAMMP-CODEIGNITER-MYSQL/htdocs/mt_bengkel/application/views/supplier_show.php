<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Data Seluruh Supplier</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Supplier</h2></center>
		</div>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<a type="button" class="btn btn-primary" href="<?= base_url('supplier/add'); ?>">Tambah Data</a>
		<br><br>
		<center>
		<div class="table-responsive" style="background-color:white;">
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Nama Supplier</td>
				<td>No.Telp</td>
				<td>Alamat</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php
			if(!empty($supplier))
			{
			foreach ($supplier as $s)
			{
				echo"
				<tr>
					<td>".$s->id_supplier. "</td>
					<td>".$s->nama_supplier. "</td>
					<td>".$s->no_telp. "</td>
					<td>".$s->alamat. "</td>
					<td>
					<a type='button' class='btn btn-warning' href='".base_url("supplier/ubah/".$s->id_supplier)."'>Ubah</a>
					<a type='button' class='btn btn-danger' href='".base_url("supplier/hapus/".$s->id_supplier)."'>Hapus</a>
					</td>
				</tr>";
				
			}
			}?>
		</table>
		</div>
	</body>
</html>
