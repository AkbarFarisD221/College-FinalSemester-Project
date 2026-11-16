<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Data Seluruh transaksi</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<body>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Transaksi</h2></center>
		</div>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<a type="button" class="btn btn-primary" href="<?= base_url('transaksi/add'); ?>">Tambah Data</a>
		<br><br>
		<center>
		<div class="table-responsive" style="background-color:white;">
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Keterangan</td>
				<td colspan="2">Aksi</td>
			</tr>
		<?php
		if(!empty($transaksi))
		{
			foreach ($transaksi as $s)
			{
				echo"
				<tr>
					<td>".$s->id_transaksi. "</td>
					<td>".$s->keterangan. "</td>
					<td>
					<a type='button' class='btn btn-warning' href='".base_url("transaksi/ubah/".$s->id_transaksi)."'>Ubah</a>
					<a type='button' class='btn btn-danger' href='".base_url("transaksi/hapus/".$s->id_transaksi)."'>Hapus</a>
					</td>
				
				</tr>
				
				";
				
				
				
			}
		}?>
		</table>
		</center>
	</body>
</html>
