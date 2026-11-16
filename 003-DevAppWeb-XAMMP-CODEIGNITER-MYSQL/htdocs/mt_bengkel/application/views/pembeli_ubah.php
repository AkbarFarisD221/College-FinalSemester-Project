<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<center>
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("pembeli/ubah/" .$pembeli->id_pembeli); ?>
		<div class="col-pd-lr-20">
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
					<td><input type="text" name="input_id" value="<?php echo set_value('input_id',$pembeli->id_pembeli); ?>" readonly"></td>
					</tr>
					<tr>
					<td>Nama Pembeli</td>
					<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama',$pembeli->nama_pembeli); ?>"></td>
					</tr>
					<tr>
						<td>No.Telepon</td>
						<td><input type="text" name="input_telp" value="<?php echo set_value('input_telp',$pembeli->no_telp); ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="input_alamat" value="<?php echo set_value('input_alamat',$pembeli->alamat); ?>"></td>
					</tr>
					</table>
					</div>
							<input type="submit" name="submit" value="Ubah" class="btn btn-primary">
							<a href="<?php echo base_url('pembeli');?>"><input type="button" value="Batal" class="btn btn-danger"></a>
		<?php echo form_close(); ?>
		</div>
		</center>
	</body>
</html>
