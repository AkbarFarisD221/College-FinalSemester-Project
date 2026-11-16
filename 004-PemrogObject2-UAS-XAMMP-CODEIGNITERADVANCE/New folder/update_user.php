<?php

$id = intval($_REQUEST['id']);
$name = htmlspecialchars($_REQUEST['name']);
$gender = htmlspecialchars($_REQUEST['gender']);
$email = htmlspecialchars($_REQUEST['email']);


$sql = "update users set name='$name',gender='$gender',email='$email' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
			'name' => $name,
			'gender' => $gender,
			'email' => $email
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>