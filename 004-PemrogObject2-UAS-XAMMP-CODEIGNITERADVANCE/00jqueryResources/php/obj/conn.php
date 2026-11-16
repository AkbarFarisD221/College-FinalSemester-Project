<?php

$db = mysqli_connect("localhost","root","","00_ware");

if (mysqli_connect_errno()) 
{
	echo"Could not connect: " . mysqli_connect_error();
	exit();
}

?>