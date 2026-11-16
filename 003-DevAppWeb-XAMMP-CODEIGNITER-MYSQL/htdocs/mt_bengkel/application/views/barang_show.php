<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Pembeli</h2></center>
		</div>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<a type="button" class="btn btn-primary" href="<?= base_url('barang/add'); ?>">Tambah Data</a>
		<br><br>
		<center>
		<div class="table-responsive" style="background-color:white;">
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Nama Barang</td>
				<td>Harga</td>
				<td>Stok</td>
				<td>ID Supplier</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php
			if(!empty($barang))
			{
			foreach ($barang as $s)
			{
				echo"
				<tr>
					<td>".$s->id_barang. "</td>
					<td>".$s->nama_barang. "</td>
					<td>".$s->harga. "</td>
					<td>".$s->stok. "</td>
					<td>".$s->id_supplier. "</td>
					<td>
					<a type='button' class='btn btn-warning' href='".base_url("barang/ubah/".$s->id_barang)."'>Ubah</a>
					<a type='button' class='btn btn-danger' href='".base_url("barang/hapus/".$s->id_barang)."'>Hapus</a>
					</td>
				</tr>";
				
			}
			}?>
			
		</table>
		</div>
		</center>
	</body>
</html>
