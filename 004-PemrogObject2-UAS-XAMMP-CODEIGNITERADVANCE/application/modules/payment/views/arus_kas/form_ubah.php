
<html>
<head>
<title> - UBAH - </title>
</head>
<body>

	<div class="container">
		<h1>Form Ubah Data Pembayaran</h1>
	<hr>
	<div class="col-md-6">
	<!-- Error if validasi not valid -->
	<div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("payment/ubah/".$arus_kas->id); ?>
	 
		<div class="form-group">
			<label for="exampleFormControlInput1">ID</label>
			<input type="text" class="form-control" name="input_id" value="<?php echo set_value('input_id',$arus_kas->id); ?>" readonly>
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Nama</label>
			<input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama',$arus_kas->Nama); ?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">NIM</label>
			<input type="text" class="form-control" name="input_nim" value="<?php echo set_value('input_nim',$arus_kas->NIM); ?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Angkatan</label>
			<input type="text" class="form-control" name="input_angkatan" value="<?php echo set_value('input_angkatan',$arus_kas->Angkatan);?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Jurusan</label>
			<input type="text" class="form-control" name="input_jurusan" value="<?php echo set_value('input_jurusan',$arus_kas->Jurusan);?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Pembayaran</label>
			<input type="text" class="form-control" name="input_pembayaran" value="<?php echo set_value('input_pembayaran',$arus_kas->Pembayaran);?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Jenis</label>
			<input type="text" class="form-control" name="input_jenis" value="<?php echo set_value('input_jenis',$arus_kas->Jenis);?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Waktu</label>
			<input type="text" class="form-control" name="input_waktu" value="<?php echo set_value('input_waktu',$arus_kas->Waktu);?>">
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Metode</label>
			<input type="text" class="form-control" name="input_metode" value="<?php echo set_value('input_metode',$arus_kas->Metode);?>">
		</div>
	</div>
		<hr>
		<div class="col-md-4" style="padding-bottom:50px">
		<input type="submit" name="submit" value="Ubah">
		<a href="<?php echo base_url('index.php/payment');?>"> <input type="button" value="Batal"></a>
		</div>
	<?php echo form_close(); ?>
	</div>
</body>
</html>