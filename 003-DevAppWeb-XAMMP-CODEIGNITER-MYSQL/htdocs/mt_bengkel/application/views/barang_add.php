<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>	
	<body>
		<center>
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("barang/add"); ?>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Pembeli - Ubah</h2></center>
		</div>
				<br><br>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<br><br>
		<center>
					<div class="table-responsive" style="background-color:white;">
					<table class="table table-bordered">
					<tr>
					<td>ID</td>
					<td><input type="text" name="input_id" value="<?php echo set_value('input_id"'); ?>"></td>
					</tr>
					<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="input_nama_barang" value="<?php echo set_value('input_nama_barang'); ?>"></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td><input type="text" name="input_harga" value="<?php echo set_value('input_harga'); ?>"></td>
					</tr>
					<tr>
						<td>Stok</td>
						<td><input type="text" name="input_stok" value="<?php echo set_value('input_stok'); ?>"></td>
					</tr>
					<tr>
					<td>ID Supplier</td>
						<td><input type="text" name="input_id_supplier" value="<?php echo set_value('input_id_supplier'); ?>"></td>
					</tr>
					</table>
					</div>
							<input type="submit" name="submit" value="Add" class="btn btn-primary">
							<a href="<?php echo base_url('barang');?>"><input type="button" value="Batal" class="btn btn-danger"></a>
		<?php echo form_close(); ?>
		</div>
		</center>
	</body>
</html>
