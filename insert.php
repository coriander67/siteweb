<?php
include 'db.php';
date_default_timezone_set("Pacific/Auckland");
$time=date('Y-m-d H:i:s');
$data=[
	'time'    => $time,
	'message' => $_POST["comment"]
];
//$message = $_POST["comment"];

$sql="INSERT INTO employees (time,message) VALUES(:time,:message);";
$stmt=$pdo ->prepare($sql);
$stmt->execute($data);
header("Location: http://cori.dpdns.org");
?>
