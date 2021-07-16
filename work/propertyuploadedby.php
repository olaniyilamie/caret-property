<?php 
	if (!empty($_GET['available'])) {
		$id=$_GET['available'];

		include 'User.php';
		$cause_session=new User;
		
		require 'App.php';
		$app= new App;
		$output1=$app->eachListingInfo($id);
		print_r($output1);

		if ($output1['individualID']=='') {
			$companyID=$output1['companyID'];
			$get=$app->company($companyID);
			print_r($get);
		}else{
			$individualID=$output1['individualID'];
			$get=$app->agent($individualID);
			print_r($get);
		}
	
		

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>PRATICAL</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../style.css">
			<link rel="stylesheet" type="text/css" href="../animate.css">
			<link rel="stylesheet" type="text/css" href="../icons/css/all.min.css">
			<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1" >
			<meta name="keyword" content="residential property in lagos,residential property for lease in lagos,residential	 property for sale in lagos, property for sale, short let in lagos,land for sale,budget friendly property in lagos, property not expensive in lagos ">
			<meta name="description" content="A Real Estate app that provides answer all your questions">
			<meta name="author" content="Olaniyi Olamide Kaosarat">


			<style type="text/css">
			

			</style>
		</head>

		<body>
			<div class="container-fluid">
				<?php include"nav.php"?>
				<div class="row">
					<div class="col-6 offset-3">
						<div class="card">
						  	<div class="card-body">
						    	<div class="row">
						    		<div class="col-9">
										<table class="table table-bordered table-striped">
											<tr>
												<th colspan="2" class="text-center">PROPERTY WAS UPLOADED BY </th>
											</tr>
											<tr>
												<th>Name</th><td class="pl-4"><?php echo $get['name']?></td>
											</tr>
											<tr>
												<th>Phone Number</th><td class="pl-4"><?php echo $get['phonenumber']?></td>
											</tr>
											<tr>
												<th>Email Address</th><td class="pl-4"><?php echo $get['email']?></td>
											</tr>
											<?php 
												if ($output1['companyID']!='') {
											?>
											<tr>
												<th>Address</th><td class="pl-4"><?php echo $get['address']?></td>
											</tr>
											<?php } ?>
											<tr>
												<th>Bio</th><td class="pl-4"><?php echo $get['bio']?></td>
											</tr>
										</table>
									</div>
									<div class="col-3">
										<table class="table table-bordered table-striped">
											<tr>
												<th class="text-center">Profile Picture</th>
											</tr>
											
											<tr>
												<td>
													<img src="profilepicture/<?php echo $get['profilepic']?>" class="img-fluid" >
												</td>	
											</tr>
										</table>
										
										<p class="btn btn-dark btn-sm mt-4" id="backbtn">GO BACK</p>
									</div>
									
						    	</div>
						  	</div>
						</div>
					</div>
					
					
				</div>

				

				<?php include"footer.php" ?>
			</div>

			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){
					$('#backbtn').click(function(){
						window.history.back();
					})
				
				})
			</script>
		</body>
<?php 
	}else{
		header("Location:listing.php");
	}

?>