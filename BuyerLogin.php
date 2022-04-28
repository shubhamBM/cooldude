<?php
session_start();
require('db_conn.php');
$username=$_POST['fname'];
$password=$_POST['pass'];

		$query    = "SELECT * FROM `users` WHERE username='$username' AND password='" . $password . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            header("Location: Home.html");
        } else {
			?>
            <script>alert("Invalid Username or Password!!!!!");</script>;
			<script>window.location.assign("BuyerLogin.html");</script>;
			<?php
        }
?>