<?php

include "App.php";
$access= new App;
$result=$access->gallery();

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>GALLERY</title>
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
				.imgstyle:hover{
					filter: grayscale(70%);
					transform: scale(1.2);
				}
			</style>
		</head>

		<body>
			<div class="container-fluid" id="mypage">
				<?php
						include 'nav.php';
					?>
				
				<div class="row ml-md-5  pl-md-5">
				<?php	foreach($result as $value){ ?>
					<div class="col-1" style="box-sizing:content-box;">
					<a href="listing/<?php echo $value['picturefile']?>"><img src="listing/<?php echo $value['picturefile']?>" class="imgstyle img-fluid pt-4"></a>
					</div>
				<?php	;} ?>
					<div class="col-12">
						<p style="font-size: 10px"><span class="red">*</span> &nbsp;Pictures viewed were uploaded by either owner or an agent, these are not our images &nbsp;<span class="red">*</span></p>
					</div>
				</div>
				<?php require("footer.php"); ?>
			</div>
					
					
					
				

					





			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){
					

				})
			</script>

		</body>
	</html>