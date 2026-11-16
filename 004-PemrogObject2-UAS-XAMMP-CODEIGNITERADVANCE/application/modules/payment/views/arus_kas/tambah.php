<html>
 <head>
	<title>- TAMBAH -</title>
 </head>
 <body>
	<div class="container">
	<h1>Form Tambah Data Kas Masuk</h1>
	<hr>
	<div class="col-md-6">
	<!-- Error if validasi not valid -->
	<div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("payment/tambah"); ?>
	 
		<div class="form-group">
			<label for="exampleFormControlInput1">Nama</label>
			<input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama'); ?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">NIM</label>
			<input type="text" class="form-control" name="input_nim" value="<?php echo set_value('input_nim'); ?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Angkatan</label>
			<input type="text" class="form-control" name="input_angkatan" value="<?php echo set_value('input_angkatan');?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Jurusan</label>
			<input type="text" class="form-control" name="input_jurusan" value="<?php echo set_value('input_jurusan');?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Pembayaran</label>
			<input type="text" class="form-control" name="input_pembayaran" value="<?php echo set_value('input_pembayaran');?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Jenis</label>
			<input type="text" class="form-control" name="input_jenis" value="<?php echo set_value('input_jenis');?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Waktu</label>
			<input type="text" class="form-control" name="input_waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date ('d-m-y h:i:s T');
			set_value('input_waktu');?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Metode</label>
			<input type="text" class="form-control" name="input_metode" value="<?php echo set_value('input_metode');?>">
		</div>
	</div>
		<hr>
		<div class="col-md-4" style="padding-bottom:50px">
		<input type="submit" name="submit" value="Simpan">
		<a href="<?php echo base_url('index.php/payment');?>"> <input type="button" value="Batal"></a>
		</div>
	<?php echo form_close(); ?>
	</body>
</html>