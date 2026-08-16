<?php
include 'db.php';
session_start();
?>
<head><link rel=stylesheet href="styles.css"></head>
<body>enter login info</body>
<form action="index.php" method="post">
user<br>
<input type="text" name="username">
<br>pass<br>
<input type="password" name="passcode">
<br>
<input type="submit">
</form>
