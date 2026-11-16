<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
		<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/layout.css"/>
	</head>
	<body>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Pembeli</h2></center>
		</div>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<a type="button" class="btn btn-primary" href="<?= base_url('pembeli/add'); ?>">Tambah Data</a>
		<br><br>
		<center>
		<div class="table-responsive" style="background-color:white;">
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Nama Pembeli</td>
				<td>No.Telp</td>
				<td>Alamat</td>
				<td colspan="2">Aksi</td>
			</tr>

		<?php
		if(!empty($pembeli))
		{
			foreach ($pembeli as $s)
			{
				echo"
				<tr>
					<td>".$s->id_pembeli. "</td>
					<td>".$s->nama_pembeli. "</td>
					<td>".$s->no_telp. "</td>
					<td>".$s->alamat. "</td>
					<td>
					<a type='button' class='btn btn-warning' href='".base_url("pembeli/ubah/".$s->id_pembeli)."'>Ubah</a>
					<a type='button' class='btn btn-danger' href='".base_url("pembeli/hapus/".$s->id_pembeli)."'>Hapus</a>
					</td>
				
				</tr>
				
				";
				
				
				
			}
		}?>
		</table>
		</div>
		</center>
		
	</body>
</html>
