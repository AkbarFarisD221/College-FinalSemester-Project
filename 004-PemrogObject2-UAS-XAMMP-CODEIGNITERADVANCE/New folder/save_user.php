<?php

$name = htmlspecialchars($_REQUEST['name']);
$gender = htmlspecialchars($_REQUEST['gender']);
$email = htmlspecialchars($_REQUEST['email']);


if (filter_var($email, FILTER_VALIDATE_EMAIL)){
	$sql = "insert into users(name,gender,email) values('$name','$gender','$email')";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array(
			'id' => mysql_insert_id(),
			'name' => $name,
			'gender' => $gender,
			'email' => $email
		));
	} else {
		echo json_encode(array('errorMsg'=>'Some errors occured.'));
	}
} else {
	echo json_encode(array('errorMsg'=>'Invalid data.'));
}
?>