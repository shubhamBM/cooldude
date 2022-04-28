
<?php
session_start();
require('db_conn.php'); 

$user=$_POST['user'];
$old=$_POST['old'];
$new=$_POST['new'];
$repnew=$_POST['repnew'];
$sql="UPDATE users SET password='$new' WHERE username='$user'";
if(mysqli_query($conn,$sql))
{
header("Location: profile.php");
?>
	<script>alert("Password Successfully Changed..!");</script>;
<?php
}
else {
			?>
            <script>alert("Invalid Input!!!!!");</script>;
			<script>window.location.assign("changePass.html");</script>;
			<?php
        }
?>