<html>
<body bgcolor="pink">
<?php
require('db_conn.php');
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$cpassword=$_POST['cpassword'];
if($password==$cpassword)
{
	$role='farmer';
	$sql="insert into users (role,username, password, name, Address, mobile) value('$role','$username','$password','$name','$address','$mobile')";
	$result = mysqli_query($conn,$sql);
	if($result){
           header("Location: profile.php");
    }
		else{
			?>
			<script>alert("Error while registering farmer details..! Please try again");</script>
			<?php
			//print "Registered succesfull";
			//("location:mfarmer.html");
		}
}
else
{?>
	<script>alert("Invalid Credentials!!!!!");</script>
	<script>window.location.assign("farmRegi.html");</script>
<?php
}

?>

</body>
</html>