<?php
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$offset = ($page - 1) * $rows;
$result = array();

include 'conn.php';

$rs = mysqli_query($db, 'select * from idsektor');
$result = array();
while ($row = mysqli_fetch_object($rs)) {
	array_push($result, $row);
}

echo json_encode($result);