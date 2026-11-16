<html>
 <head>
	<title>Form Tambah</title>
    <meta charset="utf-8">
	<title>CodeIgniter Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="base position-relative">
		<div class="col-pd-lr-20 txt-grey">
 </head>
 <body>
	<h1>Form Tambah Data Kas Masuk</h1>
	<hr>
	<!-- Error if validasi not valid -->
	<div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("users/tambah"); ?>
	 <table cellpadding="8">
	 
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama_barang'); ?>"></td>
		</tr>
		<tr>
			<td>Jenis Motor/td>
			<td><input type="text" name="input_jm" value="<?php echo set_value('input_harga'); ?>"></td>
		</tr>
		<tr>
			<td>Plat Nomor</td>
			<td><input type="text" name="input_pn" value="<?php echo set_value('input_stok');?>"></td>
		</tr>
		<tr>
			<td>Biaya</td>
			<td><input type="text" name="input_biaya" value="<?php echo set_value('input_id_supplier');?>"></td>
		</tr>
		</table>
		<hr>
		
		<input type="submit" name="submit" value="Simpan">
		<a href="<?php echo base_url('home.php');?>"> <input type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>