<?php
 	session_start();
	require 'db_conn.php';
	
		$productType = $_POST['type'];
		$productName = $_POST['pname'];
		$productInfo = $_POST['pinfo'];
		$productPrice = $_POST['price'];
		$user = $_POST['username'];

		$sql = "INSERT INTO fproduct (username, product, pcat, pinfo, price)
			   VALUES ('$user', '$productName', '$productType', '$productInfo', '$productPrice')";
		$result = mysqli_query($conn, $sql);

		$pic = $_FILES['productPic'];
		$picName = $pic['name'];
		$picTmpName = $pic['tmp_name'];
		$picSize = $pic['size'];
		$picError = $pic['error'];
		$picType = $pic['type'];
		
			if($picError === 0)
			{
				$_SESSION['productPicId'] = $_SESSION['id'];
				$picNameNew = $productName.$_SESSION['productPicId'].".".$picActualExt ;
				$_SESSION['productPicName'] = $picNameNew;
				$_SESSION['productPicExt'] = $picActualExt;
				$picDestination = "images/productImages/".$picNameNew;
				move_uploaded_file($picTmpName, $picDestination);
				$id = $_SESSION['id'];

				$sql = "UPDATE fproduct SET pimage='$picNameNew' WHERE product='$productName';";

				$result = mysqli_query($conn, $sql);
				if($result)
				{
					$_SESSION['message'] = "Product Image Uploaded successfully !!!";
					header("Location: addproduct.php");
				}
				else
				{
					//die("bad");
					$_SESSION['message'] = "There was an error in uploading your product Image! Please Try again!";
					header("Location: profile.php");
				}
			}
			else
			{
				$_SESSION['message'] = "There was an error in uploading your product image! Please Try again!";
				header("Location: error.php");
			}
		
			
		
?>