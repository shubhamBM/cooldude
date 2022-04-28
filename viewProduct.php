
<?php
session_start();
require('db_conn.php');

$result=mysqli_query($conn,"select * from fproduct");
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
<th>Username</th>
<th>Prod ID</th>
<th>Prod Name</th>
<th>Category</th>
<th>Information</th>
<th>Price</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['username'];?></td>
<td><?php echo $rows['pid'];?></td>
<td><?php echo $rows['product'];?></td>
<td><?php echo $rows['pcat'];?></td>
<td><?php echo $rows['pinfo'];?></td>
<td><?php echo $rows['price'];?></td>
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