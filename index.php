<?php
include 'db.php';

$stmt= $pdo->query('SELECT * FROM employees');
while($row = $stmt-> fetch(PDO::FETCH_ASSOC)){
echo $row['first_name'].'<br>';
}
?>
<body>hi</body>
