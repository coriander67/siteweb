<?php
include 'db.php';
session_start();
if ($_SESSION['username']==NULL){
	$_SESSION['username']= $_POST['username'];
}
if ($_SESSION['username']!==$_POST['username'] && $_POST['username']!==NULL){
	$_SESSION['username']= $_POST['username'];
}

//if (($_SESSION['passcode']==NULL))

$username= $_SESSION['username'];
if ($_POST['passcode']!=NULL){
	$_SESSION['hashpass']=hash('sha256',$_POST['passcode']);
}

$data=[
	'username' => $_SESSION['username']
];
$stmt = $pdo->prepare("SELECT password FROM users WHERE username=:username");
$stmt ->execute(['username' => $_SESSION['username']]);
$rp = $stmt->fetchColumn();
//$rp = "SELECT password FROM users WHERE username=$username";

if ($_SESSION['hashpass']!=$rp){
	header('Location: http://cori.dpdns.org/login.php');
	die();
}

date_default_timezone_set("Pacific/Auckland");
$time= date('Y-m-d H:i:s a');
$stmt= $pdo->query('SELECT * FROM employees');
#while($row = $stmt-> fetch(PDO::FETCH_ASSOC)){
#echo $row['first_name'].'<br>';}
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="styles.css">
	<link rel="icon" href="tex/favicon.ico">
</head>
<body>
<h3 style="color:white;">
<?php while($row = $stmt-> fetch(PDO::FETCH_ASSOC)){
echo "---------------------".$row['user'].'<br>';
echo $row['time']."--".$row['message'].'<br>';}?>
</h3>
<h1 style="color:white;">welcome to the database<br> the time is:
<?php echo $time." (in nz)<br>- You are ".$_SESSION['username']."<br>".$rp."<br>".$_SESSION['hashpass']?> 
</h1>
<br>
<form action = "insert.php" method="post" ><input type="text" name="comment"></form>
</body>
