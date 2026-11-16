<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Pembayaran</title>
	</head>
	<body>
		<?php echo form_open("pembayaran/add"); ?>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2>Data Pembayaran - Ubah</h2></center>
		</div>
				<br><br>
		<hr class="mrg-t-b-5 show" style="border-color:#cccccc;">
		<br><br>
		<center>
					<div class="table-responsive" style="background-color:white;">
					<table class="table table-bordered">
					<tr>
					<td>ID Pembayaran</td>
					<td><input type="text" name="input_id_pembayaran" value="<?php echo set_value('input_id_pembayaran'); ?>"></td>
					</tr>
					<tr>
					<td>Tanggal Bayar</td>
					<td><input type="text" name="input_waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date ('d-m-y');
					set_value('input_waktu');?>"></td>
					</tr>
					<tr>
					<td>Total Bayar</td>
					<td><input type="text" name="input_total" value="<?php echo set_value('input_total'); ?>"></td>
					</tr>
					<tr>
					<td>ID Transaksi</td>
						<td><input type="text" name="input_id_transaksi" value="<?php echo set_value('input_id_transaksi'); ?>"></td>
					</tr>

					</table>
					</div>
							<input type="submit" name="submit" value="Add" class="btn btn-primary">
							<a href="<?php echo base_url('pembayaran');?>"><input type="button" value="Batal" class="btn btn-danger"></a>
		<?php echo form_close(); ?>
		</div>
		</center>
	</body>
</html>
