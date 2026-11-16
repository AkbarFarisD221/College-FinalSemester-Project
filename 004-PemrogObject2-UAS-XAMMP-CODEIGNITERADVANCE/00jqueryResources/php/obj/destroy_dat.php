<?php

$id_barang = intval($_REQUEST['id_barang']);

include 'conn.php';
$sql = " SET foreign_key_checks = 0; delete from barangdt where id_barang=$id_barang";
$result = $db->query($sql);

	$this->db->query("SET foreign_key_checks = 0");
	$this->db->where('id_barang',$id_barang);
	$this->db->delete('id_barang');
	
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>