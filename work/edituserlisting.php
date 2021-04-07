<?php
include 'User.php';
$use= new User;
if (!isset($_SESSION['id'])) {
	header("Location:loginpae.php?msg=YOU MUST LOGIN FIRST");	
}

$_SESSION['propertytypeid']=$_GET['poiuyt'];
$result=$use->displayOldValue($_SESSION['accountype'],$_SESSION['propertytypeid'],$_SESSION['id']);

$_SESSION['pptyavid']=$result['availablepptyID'];
$_SESSION['pptyloc']=$result['location'];
$_SESSION['pptyprice']=$result['price'];
$_SESSION['pptydetail']=$result['more_info'];
$_SESSION['pptyid']=$result['propertypeID'];
$_SESSION['pptypicid']=$result['pictureID'];
$_SESSION['pptycompid']=$result['companyID'];
$_SESSION['pptyind']=$result['individualID'];
$_SESSION['pptycat']=$result['category'];
$_SESSION['pptype']=$result['type'];
$_SESSION['pptybed']=$result['bedroom'];
$_SESSION['pptypicfile']=$result['picturefile'];


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
				
				<div class="col-10 adborder" id="page-content-wrapper"id="navbarSupportedContent">
				<form action="edituserlistingact.php" method="POST" enctype="multipart/form-data">
				<div class="row mt-3 py-3  " >
					<div class="col-12">
						<h5 class="text-center py-4 alert alert-dark">
						<?php
						if (!empty($_SESSION['name'])){
							echo strtoupper($_SESSION['name']) ;
						}?>
					&nbsp; FILL THIS FORM TO SHOW YOUR PROPERTY TO THE WORLD</h5>
					</div>

					<div class="col-md-4">
						<select class="form-control btn-outline text-center" name="category">
							<option >Select Category</option>
							<option name="cat" value="rental"
							<?php
							if ($_SESSION['pptycat']=='rental') {
							?>
							selected
							<?php
							}
							?>
							>Rental</option>
							<option name="cat" value="sale"
							<?php
							if ($_SESSION['pptycat']=='sale') {
							?>
							selected
							<?php
							}
							?>
							>Sales</option>
							<option name="cat" value="short-let"
							<?php
							if ($_SESSION['pptycat']=='short-let') {
							?>
							selected
							<?php
							}
							?>
							>Short-let</option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control btn-outline text-center" name="propertype" >
							<option >Select Property Type</option>
							<option name="propty" value="residential"
							<?php
							if ($_SESSION['pptype']=='residential') {
							?>
							selected
							<?php
							}
							?>
							>Residential</option>
							<option name="propty" value="commercial"
							<?php
							if ($_SESSION['pptype']=='commercial') {
							?>
							selected
							<?php
							}
							?>
							>Commercial</option>
							<option name="propty" value="rawland"
							<?php
							if ($_SESSION['pptype']=='rawland') {
							?>
							selected
							<?php
							}
							?>
							>Bare Land</option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control btn-outline text-center" name="bedroom">
							<option value="">Select Bedroom No</option>
							<option name="bed-no" value="1"
							<?php
							if ($_SESSION['pptybed']=='1') {
							?>
							selected
							<?php
							}
							?>
							>1-bedroom</option>
							<option name="bed-no" value="2"
							<?php
							if ($_SESSION['pptybed']=='2') {
							?>
							selected
							<?php
							}
							?>
							>2-bedroom</option>
							<option name="bed-no" value="3"
							<?php
							if ($_SESSION['pptybed']=='3') {
							?>
							selected
							<?php
							}
							?>
							>3-bedroom</option>
							<option name="bed-no" value="4"
							<?php
							if ($_SESSION['pptybed']=='4') {
							?>
							selected
							<?php
							}
							?>
							>4-bedroom</option>
							<option name="bed-no" value="5"
							<?php
							if ($_SESSION['pptybed']=='5') {
							?>
							selected
							<?php
							}
							?>
							>5-bedroom</option>
							<option name="bed-no" value="more"
							<?php
							if ($_SESSION['pptybed']=='more') {
							?>
							selected
							<?php
							}
							?>
							>more-bedroom</option>
						</select>
					</div>
				</div>

					<div class="row mt-3">
						<div class="col-md-4 mx-0 ">
							<p class="disline text-danger font-weight-bolder ml-3 pb-1">Please select picture again !</p>
							<input type="file" name="image" class=" btn btn-outline" id="magdis" multiple="" >
						</div>
						<div class="col-md-4">
							<?php if (!empty($_SESSION['pptypicfile'])){?>
							<p class="disline text-danger">Uploaded picture</p>
							<img src="listing/<?php echo $_SESSION['pptypicfile'];?>" class="img-fluid">
							<?php ;} ?>
						</div>
						<div class="col-md-4">
							<label for="price">Price <span class="red">*</span> </label>
							<input type="number" name="price" class="form-control btn-outline" id="price" required="" value="<?php echo $_SESSION['pptyprice']?>">
						</div>
						<div class="col-12">
							<label for="address">Address <span class="red">*</span> </label>
							<input type="text" name="address" class="form-control btn-outline" id="price" required="" value="<?php echo $_SESSION['pptyloc']?>">
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<label for="det">Details <span class="red">*</span> </label>
							<textarea name="detail" class="form-control btn-outline" id="det" required="">
							<?php echo $_SESSION['pptydetail']?>
							</textarea>
						</div>
						<div class="col-6 my-2" >
							<a href="profile.php"><button class="btn btn-dark btn-block mt-2" type="button">Back</button></a>
						</div>
						<div class="col-6 my-2" id="showimg">
							<button type="submit" class="btn btn-dark btn-block mt-2">Save</button>
						</div>
					</div>
						
					</form>
					</div>	
				</div>

				</div>
			
				
				<?php require("footer.php"); ?>
			</div>

			 

		</body>
	</html>