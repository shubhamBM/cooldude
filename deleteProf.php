
<?php

session_start();
require('db_conn.php');

$user=$_POST['username'];
$pass=$_POST['password'];
$role='farmer';

	$sql="DELETE from users WHERE username='$user' AND role='$role'";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		header("Location: index.html");
	}
	else {
?>
<script>alert("Invalid Details!!!!!");</script>;
<script>window.location.assign("deleteProf.html");</script>;
<?php
	}
?>

