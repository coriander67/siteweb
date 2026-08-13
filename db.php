<?php
$host = 'localhost';
$user = "pl";
$password = 'pl';
$dbname = 'pdo';
$dsn= 'mysql:host='.$host.';dbname='.$dbname;
$pdo = null;
try {
	$pdo = new PDO($dsn, $user,$password);
} catch (PDOException $e){
	die("connection failed:" . $e->getMessage());
}
?>
