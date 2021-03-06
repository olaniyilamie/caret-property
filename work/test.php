<!-- /TO EDIT A PORTFOLIO FORM SECTION -->

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
					<div class="col-12" id="profilewrite">
						<div class="row">
							<div class="col-4"></div>
							<div class="col-4 text-center mt-5 pt-5">
								<img src="../image/emoji7.png" width="150px" class="mt-5 pt-4"><br>
								<button class="btn btn-dark btn-sm px-5"><a href="profilepic.php" class="textcol">change picture</a></button>
							</div>
							<div class="col-4"></div>
						</div>
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
				<div class="col-2 border-right" id="sidebar-wrapper" >
					<?php
						include 'sidebar.php';
					?>    
				</div>
				
				<div class="col-10" id="page-content-wrapper"id="navbarSupportedContent">
				<form action="picaction.php" method="POST" enctype="multipart/form-data">
				<div class="row mt-3 py-3 adborder " >
					<div class="col-12">
						<h3 class="text-center py-4 alert alert-dark">
						<?php
						if (!empty($_SESSION['name'])){
							echo strtoupper($_SESSION['name']);
						}?>
					FILL THIS FORM TO SHOW YOUR PROPERTY TO THE WORLD</h3>
					</div>

					<div class="col-md-4">
						<select class="form-control btn-outline text-center">
							<option >Select Category</option>
							<option name="cat" value="rent">Rental</option>
							<option name="cat" value="sale">Sales</option>
							
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control btn-outline text-center" >
							<option >Select Property Type</option>
							<option name="propty" value="residential">Residential</option>
							<option name="propty" value="commercial">Commercial</option>
							<option name="propty" value="land">Bare Land</option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control btn-outline text-center">
							<option >Select Bedroom No</option>
							<option name="bed-no" value="rent">1-bedroom</option>
							<option name="bed-no" value="sale">2-bedroom</option>
							<option name="bed-no" value="closure">3-bedroom</option>
							<option name="bed-no" value="rent">4-bedroom</option>
							<option name="bed-no" value="rent">5-bedroom</option>
							<option name="bed-no" value="rent">more-bedroom</option>
						</select>
					</div>				
					<div class="col-md-6 mx-0 ">
						<p class="disline">Select Property Image, if more than one select together  </p>
						<input type="file" name="image" class=" btn btn-outline" id="magdis" multiple="" required="">					
					</div>
					<div class="col-md-6">
						<label for="price">Price <span class="red">*</span> </label>
						<input type="number" name="price" class="form-control btn-outline" id="price" required="">
					</div>
					<div class="col-12">
						<label for="det">Details <span class="red">*</span> </label>
						<textarea name="detail" class="form-control btn-outline" id="det" required=""></textarea>
					</div>
					<div class="col-12" id="showimg">
						<button type="submit" class="btn btn-dark btn-block mt-2">Upload</button>
					</div>
					</form>
					</div>	
				</div>
				</form>
				</div>

				</div>
			
				
				<?php require("footer.php"); ?>
			</div>

			 

		</body>
	</html>