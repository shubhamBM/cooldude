<?php  
session_start();
$host="localhost";
$user="tyco";
$pass="tyco";
$db="my_db";
$con=new mysqli($host,$user,$pass,$db);

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
} ?>