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

	//$id_barangs = $this->encryption->encrypt($id_barang);
	$sql = "insert into barangdt(id_barang,nama_barang,id_lokasi) values($id_barang,'$nama_barang','$id_lokasi')";
	$result = $db->query($sql);
	if ($result)
	{
	 $condt['status'] = 1;
	 $condt['msg'] = 'User data has been updated successfully?';
	}	
}
else 
		{
		$condt['msg'] = 'You still have some empty...';
		}

echo json_encode($condt);

?>