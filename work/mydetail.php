<?php 
session_start();
if (!isset($_SESSION['id'])) {
	header("Location:index.php");
}
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
				<div class="row" id="profilemag">
				<?php
					include 'profilepicnav.php';
				?>
				</div>

				<div class="row">
					<div class="col-12">
						<p class="text-center alert alert-dark"> WELCOME <b><?php
						echo(strtoupper($_SESSION['username']));
						?>,</b> TODAY IS <?php echo strtoupper(date("l jS F"));?></p>
					</div>
				</div>
				<div class="d-flex" id="wrapper">
				<div class=" border-right" id="sidebar-wrapper" >
					<?php
						include 'sidebar.php';
					?> 	
			    </div>
				
				<div class="col-sm-10" id="page-content-wrapper"id="navbarSupportedContent">
				<div class="row">
					<div class="col-12 text-center" style="font-size: 12px">
						<?php
							if($_SESSION['bio']!=""){
								echo $_SESSION['bio'];
							}else {
						?>
								<p><a href="editpro.php" class="text-danger">Complete your profile</a></p>
						<?php
						; }
						?>
					</div>
					<div class="col-12">
						<table class="table table-striped table-bordered table-sm">
							<thead >
								<tr>
									<th colspan="2" class="text-center">PERSONAL INFORMATION</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-secondary">
								<td>NAME</td><td> <?php echo(strtoupper($_SESSION['name'])); ?> </td>
							</tr>
							<tr>
								<td>USERNAME</td><td> <?php echo(strtoupper($_SESSION['username'])); ?> </td>
							</tr>
							<tr class="table-secondary">
								<td>EMAIL</td><td> <?php echo $_SESSION['email']; ?> </td>
							</tr>
							<tr>
								<td>PHONE-NUMBER</td><td> <?php echo(strtoupper($_SESSION['phonenumber'])); ?> </td>
							</tr>
							<tr>
								<td>ADDRESS</td><td> <?php echo(strtoupper($_SESSION['address'])); ?> </td>
							</tr>
							</tbody>			
						</table>
					</div>			
								
				</div>
				</div>

				</div>
			
				
				<?php require("footer.php"); ?>
			</div>

			 
			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
		</body>
	</html>