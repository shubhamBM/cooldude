<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				
				<nav id="nav">
					<ul>
						<li><a href="market.html">Back</a></li>
					</ul>
				</nav>
			</header>

		<!-- One -->
		
			<section id="one" class="wrapper style1 align-center"  >
				<div class="container" >
					<header>
						<h2>Welcome to digital market</h2>
						
				<?php
					if(isset($_GET['n']) AND $_GET['n'] == 1):
				?>

						<section id="two" class="wrapper style2 align-center">
				<div class="container" >
					<form method="post" action="prodSearch.php">
						<div class="row uniform 50%">
							<div class="4u 12u$(small)"></div>
							<div class="4u 12u$(small)">				
					  		
											<input type="text" name="pname" id="pname" value="" placeholder="Search" style="background-color:white;color: black;" />
							</div>
							<div class="4u 12u$(small)">
								
							<ul class="actions">
											<li><input type="submit" value="Go!!" class="special" /></li>

							</ul>
							</div>
							<div class="12u 12u$(small)">
								 <h2 style="font-size: 120%;">Search by Following Categories-</h2>
							</div>
							<div class="12u 12u$(small)">
								 <br>
								</div>
								 <br>
							<div class="4u 12u$(small)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low"><h2 style="font-size: 120%;">Grains</h2></label>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal"><h2 style="font-size: 120%;">Friuts</h2></label>
									</div>
									<div class="4u$ 12u$(small)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high"><h2 style="font-size: 120%;"> Vegetables</h2></label>
									</div>
									<div class="4u$ 12u$(small)">
										<input type="radio" id="priority-" name="priority">
										<label for="priority-"><h2 style="font-size: 120%;"> Dairy Products</h2></label>
									</div>

							</div>
										
							
						</div>
					</form>
					</div>
				</section>
			</header>					
			</section>
		</body>
	</html>