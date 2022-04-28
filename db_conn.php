<?php  

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "my_db";
 $conn = mysqli_connect("localhost","root","","my_db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }