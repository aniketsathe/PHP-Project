<?php
session_start();
if(!isset($_session['name']))
{
	header('location:Login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>Home</title>
</head>
<body>

<a href="Logout.php" name="logout">Logout</a>

</body>
</html>