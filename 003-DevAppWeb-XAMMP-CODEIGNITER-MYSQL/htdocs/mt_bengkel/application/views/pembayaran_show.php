<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Data Seluruh Pembayaran</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<body>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Pembayaran</h2></center>
		</div>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<a type="button" class="btn btn-primary" href="<?= base_url('pembayaran/add'); ?>">Tambah Data</a>
		<br><br>
		<center>
		<div class="table-responsive" style="background-color:white;">
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Tanggal Bayar</td>
				<td>Total Bayar</td>
				<td>ID Transaksi</td>
				<td colspan="2">Aksi</td>
			</tr>
		<?php
		if(!empty($pembayaran))
		{
			foreach ($pembayaran as $s)
			{
				echo"
				<tr>
					<td>".$s->id_pembayaran. "</td>
					<td>".$s->tgl_bayar. "</td>
					<td>".$s->total_bayar. "</td>
					<td>".$s->id_transaksi. "</td>
					<td>
					<a type='button' class='btn btn-warning' href='".base_url("pembayaran/ubah/".$s->id_pembayaran)."'>Ubah</a>
					<a type='button' class='btn btn-danger' href='".base_url("pembayaran/hapus/".$s->id_pembayaran)."'>Hapus</a>
					</td>
				
				</tr>
				
				";
				
				
				
			}
		}?>
		</table>
		</center>
	</body>
</html>
