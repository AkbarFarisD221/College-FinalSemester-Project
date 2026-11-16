<html>
<head>
	<title>Meh?</title>
</head>
<body>
<div class="container">
<h1>Data Siswa?</h1>
<?php 
	echo $tes;
?>
<hr>
<a href='<?php echo base_url("index.php/payment/tambah"); ?>'>Tambah Data</a><br><br>
<div class="table-responsive">
<table class="table table-striped table-sm">
<tr>
	<th>ID</th>
	<th>Nama</th>
	<th>NIM</th>
	<th>Angkatan</th>
	<th>Jurusan</th>
	<th>Nominal Pembayaran</th>
	<th>Jenis Pembayaran</th>
	<th>Waktu Pembayaran</th>
	<th>Metode Pembayaran</th>
	<th colspan="2">Aksi</th>
</tr>
</div>
<?php
if(!empty($arus_kas))
{
	foreach($arus_kas as $data)
	{
		echo "<tr>
		<td>".$data->id."</td>
		<td>".$data->Nama."</td>
		<td>".$data->NIM."</td>
		<td>".$data->Angkatan."</td>
		<td>".$data->Jurusan."</td>
		<td>".$data->Pembayaran."</td>
		<td>".$data->Jenis."</td>
		<td>".$data->Waktu."</td>
		<td>".$data->Metode."</td>
		<td><a href='".base_url("index.php/payment/ubah/".$data->id)."'>Ubah</a></td>
		<td><a href='".base_url("index.php/payment/hapus/".$data->id)."'>Hapus</a></td>
		</tr>";
	}
	}else
	{
		echo"<tr><td aligh='center' colspan='7'>Data Tidak ada? wow</td></tr>";
	}
?>
</table>
</div>
</body>
</html>
