
<?php
session_start();
require('db_conn.php');

$name=$_POST['name'];
$user=$_POST['username'];
$pass=$_POST['password'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$role="buyer";

$sql="UPDATE users SET 'name'='$name', 'username'='$user', 'Address'='$address', 'mobile'='$mobile' WHERE password='$pass' and role='$role'";
if (mysqli_query($conn,$sql)) {
            header("Location: profile1.php");
        } else {
			?>
            <script>alert("Invalid Details!!!!!");</script>;
			<script>window.location.assign("updateProf.html");</script>;
			<?php
        }


?>
