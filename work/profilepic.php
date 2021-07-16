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
				<div class="border-right" id="sidebar-wrapper" >
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
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-5 mt-5 bg-dark rounded text-white">
						<?php
							if (!empty($_GET['msg'])) {
								$msg=$_GET['msg'];
								if (($msg=='File not supported, please select either a jpeg, png, gif or jpg file type!')||($msg=='File too large, profile picture can not be more than 5mb !')) {
									echo "<div class=\"row bg-light\">
											<div class=\"col-12 text-center py-0 mb-0 font-weight-bold \"><p class=\"m-0 text-danger mb-3\">$msg</p></div>
											</div>";
								}else{
									echo "<div class=\"row\">
											<div class=\"col-12 py-0 text-center mb-0 font-weight-bold\"><p class=\"mb-3 \">$msg</p></div>
										</div>";
								}
							}
						?>
						<h4 class="text-center mt-1 ">Select Profile Picture to Upload !</h4>
						<div class="form-group">
							<form method="POST" enctype="multipart/form-data" action="profilepicact.php">
								<input type="file" name="profilepic" id="profilepic" class="form-control mb-3">
								<button class="btn btn-light btn-block mt-3 font-weight-bold">Upload Image</button>
							</form>
						</div>
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