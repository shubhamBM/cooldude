<html>
<head>
<title>Add Room</title>
</head>
<?php
	require 'db_conn.php';
$name=$_POST['name'];
$email=$_POST['email'];
$mbno=$_POST['mbno'];
$msg=$_POST['msg'];

$sql="insert into contactus values('$name','$email','$mbno','$msg')";
if(mysqli_query($conn,$sql))
{ 
header("location:contact.html");
?>
	<script>alert("Message is Sent Successfully");</script>
	
<?php 
}
else
{
	echo (mysqli_error($conn));
}
?>
</body>
</html>