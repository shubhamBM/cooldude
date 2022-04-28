<?php
session_start();
require('db_conn.php');


$username=$_POST['fname'];
$password=$_POST['pass'];
if($username=="admin" && $password=="admin@123")
{
	print "login succesfull";
	header("location: Admin.html");
}
else
	{
	print '<script>alert("Invalid Credentials!!!!!");</script>';
	print '<script>window.location.assign("AdminLogin.html");</script>';
	}
?>
