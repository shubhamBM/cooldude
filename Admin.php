<html>
<head><title>Admin</title></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body>
			<div class="p-3">
			<?php include 'Admin1.php';
                if (mysqli_num_rows($res) > 0) 
				{ ?>
					<h1 class="display-4 fs-1"><center>Members</h1>
					<table class="table" style="width: 32rem;">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">UserName</th>
								<th scope="col">Role</th>
								<th scope="col">Address</th>
								<th scope="col">Mobile No.</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$i =1;
						while ($rows = mysqli_fetch_assoc($res)) 
						{ ?>
							<tr>
								<th scope="row"><?php $i;?></th>
								<td><center><?php $rows['name'];?></center></td>
								<td><center><?php $rows['username'];?></center></td>
								<td><center><?php $rows['role'];?></center></td>
								<td><center><?php $rows['Address'];?></center></td>
								<td><center><?php $rows['mobile'];?></center></td>
							</tr>
							<?php
							$i++; 
						} ?>
						</tbody>
				</table>
			<?php 
				} ?>
	</body>
</html>