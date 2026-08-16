<?php
session_start();
include 'db.php';
//include 'index.php';
date_default_timezone_set("Pacific/Auckland");
$time=date('Y-m-d H:i:s');
$data=[
	'time'    => $time,
	'message' => $_POST["comment"],
	'username'=> $_SESSION['username']
];
//$message = $_POST["comment"];
$sql="INSERT INTO employees (time,user,message) VALUES(:time,:username,:message);";
$stmt=$pdo ->prepare($sql);
$stmt->execute($data);
header("Location: http://cori.dpdns.org/index.php");
?>
