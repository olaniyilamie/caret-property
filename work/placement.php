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
				<div class="col-2 border-right" id="sidebar-wrapper" >
					<?php
						include 'sidebar.php';
					?>    
				</div>
				
				<div class="col-10" id="page-content-wrapper"id="navbarSupportedContent">
					<?php
						if (!empty($_GET['feedback'])) {
							$feedback=$_GET['feedback'];
							echo "<div class=\"alert alert-danger text-center\"><h5>$feedback</h5></div>";
						}
					?>

				<div class="row" style="border: 4px solid #D6D8D9">
				<div class="col-12" >
						<h5>Fill the following information carefully</h5>
						<p style="font-size: 9px" class=" my-0"> <span class="text-danger">* </span>We are not recruiting directly, this will be posted on the platform and any interestee will contact you.</p>
						<p style="font-size: 11px;color: red" class="mt-0"> NOTE : This will replace your profile information on <span style="color: black">Caret Property,</span> so if you are about to do this on behalf of someone, create an account for them instead.</p>
						<form class="form-group" action="placeact.php" method="POST">
							<input type="text" name="name" value='<?php echo $_SESSION['name']?>' class="form-control form-control-sm mb-2">
							<input type="mail" name="email" value="<?php echo $_SESSION['email']?>" class="form-control form-control-sm mb-2">
							<input type="number" name="phoneno" value="<?php echo $_SESSION['phonenumber']?>"class="form-control form-control-sm mb-2">
							<input type="text" name="add" value="<?php echo $_SESSION['address']?>"  class="form-control form-control-sm mb-2">
							<input type="text" name="school" placeholder="SCHOOL ATTENDING" class="form-control form-control-sm mb-2">
							<input type="text" name="course" placeholder="NAME OF YOUR COURSE" class="form-control form-control-sm mb-2">
							<input type="text" name="grade" placeholder="CGP" class="form-control form-control-sm mb-2">
					</div>	
							<div class="col-2">
								<label for="date" style=" border: 1px solid #D6D8D9;font-size: 13px"  class="p-1">INTERNSHIP START DATE</label>
							</div>
							<div class="col-10">
								<input type="date" id="date"name="date" placeholder="START DATE" class="form-control form-control-sm mb-2">
							</div>
				<div class="col-12">
							<p class="mb-0"style="font-size: 8px"> <span class="red">*</span>Convince your employer in few sentences on why they should employ you.</p>
							<textarea class="form-control form-control-sm mb-2" name="write"></textarea>
							<button class="btn btn-sm btn-dark btn-block">SUBMIT</button>
							<p class="mb-0"style="font-size: 8px"> <span class="red">*</span>Feel free to send a mail on authentication of anyone that reach out to you through Caret Property and we will reply in less than 48hours ...</p>
						</form>
					</div>	
				</div>
				</div>

				</div>
			
				
				<?php require("footer.php"); ?>
			</div>

			 

		</body>
	</html>