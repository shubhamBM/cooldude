
<?php
session_start();
require('db_conn.php');

$result=mysqli_query($conn,"select * from users where role='buyer'");
?>
<html>
<head>
<title>View Buyer</title>
<style>
#butt{
width: 200px;
padding: 10px;
border-radius: 5px;
outline: 0px;
background-color:#b53;
border: #01010c;
color: aliceblue;
font-size: 18px;
}

body {
background-color:pink;
background-repeat: no-repeat;
background-size: 102% 900px;
font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<div>
<table align="center" border="1px" style="width:600px" line-height="40px">
<tr>
<th colspan="10"><h2>Buyers Information</h2></th>
</tr>
<tr>
<th>ID</th>
<th>Role</th>
<th>Username</th>
<th>Name</th>
<th>Addres</th>
<th>Mobile No.</th>
<th>Email</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['id'];?></td>
<td><?php echo $rows['role'];?></td>
<td><?php echo $rows['username'];?></td>
<td><?php echo $rows['name'];?></td>
<td><?php echo $rows['Address'];?></td>
<td><?php echo $rows['mobile'];?></td>
</tr>

<?php
}
?>
</table>
</div>

<div>
<br/>
<br/>
<center>
<button id="butt"><a href="Admin.html">Back</a></button>
</center>
</div>
</body>
</html>