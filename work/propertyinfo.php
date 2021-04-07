//<?php 
//session_start();
//if (!isset($_SESSION['id'])) {
//	header("Location:index.php");
//}
 ?>
<!DOCTYPE html>
	<html>
		<head>
			<title>PLACEMENT</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../style.css">
			<link rel="stylesheet" type="text/css" href="../animate.css">
			<link rel="stylesheet" type="text/css" href="../icons/css/all.min.css">
			<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1" >
			<meta name="keyword" content="residential property in lagos,residential property for lease in lagos,residential	 property for sale in lagos, property for sale, short let in lagos,land for sale,budget friendly property in lagos, property not expensive in lagos ">
			<meta name="description" content="A Real Estate app that provides answer all your questions">
			<meta name="author" content="Olaniyi Olamide Kaosarat">
		</head>
		<body>
			<div class="container-fluid">
				<?php
					include 'nav.php';
				?>
				<div class="row" >
					<div class="col-4" style="border: 1px solid red">
						<div class="row">
							<div class="col-4" style="border: 1px solid green;height: 200px">
								
							</div>
							<div class="col-4"style="border: 1px solid green">
								
							</div>
							<div class="col-4"style="border: 1px solid green">
								
							</div>
						</div>
					</div>
					<div class="col-8" style="border: 1px solid blue">
						<div class="col-md-8 offset-md-2" style="border: 1px solid purple;height: 300px">
							
						</div>
						<div class="col-12" style="border: 1px solid red">
							
						</div>
						<div class="col-12" style="border: 1px solid red">
							<button class="btn btn-block btn-dark btn-sm">PROPERTY OWNER'S INFORMATION</button>
						</div>
					</div>
				</div>
				<div class="row" style="display: none;border: 1px solid black;height: 10px" id="onwerInfo">
					
				</div>

				
				
			
				
				<?php require("footer.php"); ?>
			</div>

			 

		</body>
	</html>