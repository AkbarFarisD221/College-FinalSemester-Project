<?php

// You understand what this below script mean?

// ¯\_(ツ)_/¯

$condt = array
(
	'status' => 0,
	'msg' => 'error bitch'
);

if(!empty($_Request['name']) && !empty($_REQUEST['gender']) && !empty($_REQUEST['email']))
{
$name = $_REQUEST['name'];
$gender = $_REQUEST['gender'];
$email = $_REQUEST['email'];

	if(!empty($_REQUEST['id']))
	{
	$id = intval($_REQUEST['id']);	
		
	include 'conn.php';

	$sql = "UPDATE users SET name='$name',gender='$gender',email='$email' WHERE id=$id";
	$result = $db->query($sql);

	if ($result)
	{
	 $condt['status'] = 1;  // <- tf this for?
	 $condt['msg'] = 'User data has been updated successfully?';
	}	
	}
}
else 
		{
		$condt['msg'] = 'Disgusting...';
		}

echo json_encode($condt);
?>