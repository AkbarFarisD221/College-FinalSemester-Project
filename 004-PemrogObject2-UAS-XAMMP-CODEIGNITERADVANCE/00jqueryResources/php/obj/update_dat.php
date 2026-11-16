<?php

include 'conn.php';

$condt = array
(
	'status' => 0,
	'msg' => 'error bitch'
);

if(!empty($_REQUEST['id_barang']) && !empty($_REQUEST['nama_barang']) && !empty($_REQUEST['id_lokasi']))
{
$id_barang = $_REQUEST['id_barang'];
$nama_barang = $_REQUEST['nama_barang'];
$id_lokasi = $_REQUEST['id_lokasi'];

		

	$sql = "UPDATE barangdt SET id_barang='$id_barang', nama_barang='$nama_barang',id_lokasi='$id_lokasi' WHERE id_barang=$id_barang ";
	$result = $db->query($sql);

echo json_encode($condt);
?>