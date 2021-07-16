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
				<form action="editorpro.php" method="POST">
					<?php
						if (!empty($_GET['feedback'])) {
							$feedback=$_GET['feedback'];
							echo "<div class=\"alert alert-danger text-center\"><h5>$feedback</h5></div>";
						}
					?>

				<div class="row" id="here">
					<div class="col-12">
						<h3 class="text-center alert alert-dark"> EDIT PROFILE </h3>
					</div>
					<div class="col-2">
						<label class="font-weight-bold">NAME:</label>
					</div>
					<div class="col-10">
						<input type="text" name="name" value="<?php echo($_SESSION['name'])?>" class="form-control mb-3" >
					</div>
					<div class="col-2">
						<label class="font-weight-bold">PHONE NUMBER:</label>
					</div>
					<div class="col-10">
						<input type="number" name="phoneno" value="<?php echo($_SESSION['phonenumber'])?>" class="form-control mb-3">
					</div>
					<div class="col-2">
						<label class="font-weight-bold">ADDRESS:</label>
					</div>
					<div class="col-10">
						<input type="text" name="address" value="<?php echo($_SESSION['address'])?>" class="form-control mb-3" >
					</div>
					<div class="col-2">
						<label class="font-weight-bold">EMAIL:</label>
					</div>
					<div class="col-10">
						<input type="mail" name="mail" value="<?php echo($_SESSION['email'])?>" class="form-control mb-3" >
					</div>
					<div class="col-2">
						<label>BIO:</label>
					</div>
					<div class="col-10">
						<textarea class="form-control" rows="4" name="bio"><?php echo($_SESSION['bio'])?></textarea>
					</div>
					<div class="col-12 mt-2">
						<button class="btn-sm btn-block btn-dark" id="edit_profile">SAVE</button>
					</div>
					<div class="col-12">
						<p style="font-size: 10px"> <span class="red">*</span> CARET PROPERTY identifies you with the above information, on click of save, you will be updating your profile ... </p>				
					</div>	
				</div>
				</form>
				</div>

				</div>
				<div id="needed" class="row"></div>
			
				
				<?php require("footer.php"); ?>
			</div>

			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script type="text/javascript">
				
			</script>
		</body>
	</html>