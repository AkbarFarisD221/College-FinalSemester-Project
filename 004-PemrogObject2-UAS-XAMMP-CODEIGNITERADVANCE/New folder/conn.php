<?php

$conn = @mysqli_connect('127.0.0.1','root','root');
if (!$conn) {
	die('Could not connect: ' . mysqli_error());
}
mysqli_select_db('00_wow', $conn);

?>