<?php
date_default_timezone_set("Pacific/Auckland");
include 'db.php';
$time= date('Y-m-d H:i:s a');
$stmt= $pdo->query('SELECT * FROM employees');
#while($row = $stmt-> fetch(PDO::FETCH_ASSOC)){
#echo $row['first_name'].'<br>';}
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<h3 style="color:white;">
<?php while($row = $stmt-> fetch(PDO::FETCH_ASSOC)){
echo $row['time']."     ".$row['message'].'<br>';}?>
</h3>
<h1 style="color:white;">step into the database<br> hn<br> the time is:
<?php echo $time ?> (in new zealand)
</h1>
<br>
<form action = "insert.php" method="post"><input type="text" name="comment"></form>
</body>
