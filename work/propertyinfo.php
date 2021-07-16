<?php 
	if (!empty($_GET['info'])) {
		$lastInsertedId=$_GET['info'];
		$id=$_GET['available'];

		require 'User.php';
		$user=new User;
		$output=$user->displayAllImgUploaded($lastInsertedId);

		

		require 'App.php';
		$app= new App;
		$output1=$app->eachListingInfo($id);
		
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
					<div class="col-4">
						<p class="d-none" id="theid"><?php echo $id?></p>
						<p class="text-danger text-center">click on the picture to get a bigger view</p>
						<div class="row">
							<?php
								foreach ($output as $key) {	
							?>
							<div class="col-md-4  py-3">
								<img src="listing/<?php echo $key['picturefile']?> " class="img-fluid smallimg">
							</div>
							<?php 
								} 
							?>
						</div>
						
						
					</div>
					<div class="col-8" >
						<div class="row justify-content-center">
							<p class="d-none imgna"><?php echo $_GET['imgname']?></p>
							<div class="col-md-10 bigimg " ></div>
						</div>
						<p class="btn btn-dark btn-sm mt-2" id="backbtn" >GO BACK</p>
						<div class="row mt-4" id="infoshow">
							<div class="col-12">
								<table class="table table-bordered table-striped">
									<tr>
										<th colspan="2" class="text-center">Property Details</th>
									</tr>
									<tr>
										<th>Bedroom</th><td class="pl-4"><?php echo $output1['bedroom']?></td>
									</tr>
									<tr>
										<th>Category</th><td class="pl-4"><?php echo $output1['category']?></td>
									</tr>
									<tr>
										<th>Type</th><td class="pl-4"><?php echo $output1['type']?></td>
									</tr>
									<tr>
										<th>Price</th><td class="pl-4"><?php echo $output1['price']?></td>
									</tr>
									<tr>
										<th>Location</th><td class="pl-4"><?php echo $output1['location']?></td>
									</tr>
									<tr>
										<th>Additional information</th><td class="pl-4"><?php echo $output1['more_info']?></td>
									</tr>
								</table>
							</div>
							<div class="col-12">
								<button class="btn btn-block btn-dark btn-sm py-2 mt-3" id="listinfo2">OWNER'S INFORMATION</button>
							</div>
						</div>
					</div>
				</div>
							
				
			
				
				<?php require("footer.php"); ?>
			</div>

			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){


					$('.smallimg').click(function(){
						let bigimgg=$(this).attr('src');
						$('.bigimg').html('<img src=' +bigimgg+' class="img-fluid">');
						
					})

					$('#listinfo2').click(function(){
						let availablepptyID =$('#theid').html();
						$(window).attr('location','propertyuploadedby.php?available='+availablepptyID,'_blank');
					})

					$('#backbtn').click(function(){
						window.history.back();
					})

					
				}) 
			</script>
		</body>
	</html>

	<?php
	}else{
		header("Location:listing.php");
	}
	?>
