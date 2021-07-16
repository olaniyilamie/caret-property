<!DOCTYPE html>
	<html>
		<head>
			<title>CARET PROPERTY</title>
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
				<div class="row">
					<div class="col-12">
						<h4 class="alert alert-dark py-0 text-center">REGISTER WITH US</h4>
					</div>
				</div>
				<?php if (!empty($_GET['msg'])){
						$msg=$_GET['msg'];
						echo "<div class=\"alert alert-danger text-center\">$msg</div>";
				}?>
				<div class="row">
					<div class="col-12 my-0">
						<form action="signupact.php" method="POST">
							<p class="text-center font-weight-bold"> Connecting you with prospective clients and professional in the Real Estate World is our Dream</p>
						<div class="col-12 " style="background-color: #fff;color: black">
							<p class="d-inline font-weight-bold mr-2">Select Account Type</p>
						
							<input type="radio" name="company" value="account" class="ml-2">
							<label>Company </label>
							
							<input type="radio" name="company" value="individual" class="ml-2">
							<label>Individual </label>
							
							<!-- <input type="radio" name="company" value="client"><label>Prospecive Client </label> -->
							<input type="text" name="name1" placeholder="Enter your Name" class="form-control notcoy" required="">

							<input type="text" name="name" placeholder="Company Name" class="form-control mb-3 coy" style="display: none">
							<label style="display: none" class="coy">Is the company registered ?</label><br>
							
							<input type="radio" name="reg" value="reg" class="coy mb-3" style="display: none">
							<label style="display: none" class="coy">YES</label>
							
							<input type="radio" checked=""name="reg" value="non-reg" class="coy mb-3" style="display: none">
							<label style="display: none" class="coy">NO</label>
							
							<input type="number" name="phoneno" placeholder="Phone Number" class="form-control mb-3" required="">
							<input type="text" name="address1" placeholder="Address" class="form-control mb-3 notcoy" required="" >
							<input type="text" name="address" placeholder="Office Address" class="form-control mb-3 coy" style="display: none">
							<input type="mail" name="mail" placeholder="Email" class="form-control mb-3" required="">
							<input type="text" name="username" placeholder="Choose a Username" class="form-control mb-3" required="">
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-10">
									<input type="password" name="userpass" placeholder="Password" class="form-control mb-3" required="" id="passwrd1" autocomplete="off">
								</div>
								<div class="col-2 text-right">
									<input type="checkbox" name="hidepwd" id="hide1">
									<label for="hide1" id="hidee1">show</label>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-10">
									<input type="password" name="userpass2" placeholder="Confirm password" class="form-control mb-3" required="" id="passwrd2" autocomplete="off">
								</div>
								<div class="col-2 text-right">
									<input type="checkbox" name="hidepwd2" id="hide2">
									<label for="hide2" id="hidee2">show</label>
								</div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<button type="submit" class="btn-sm btn-block btn-dark">REGISTER</button>
						</div>
						<div class="col-12">
							<p style="font-size: 10px"> <span class="red">*</span> By signing up, you have agreed to our 
								<a href="termsandcondition.php">Terms of Use</a> and 
								<a href="privacypolicy.php">Privacy Policy</a>
							</p>
						</div>
						</form>
					</div>
					
				</div>
				<?php require("footer.php"); ?>
			</div>

			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){
					$('input[type="radio"]').click(function(){
						if ($("input[name='company']:checked"). val()=='account'){
							$(".coy").show();
							$(".coy").attr('required',true);
							$(".notcoy").hide();
							$(".notcoy").attr('required',false)
						}else{
							$(".coy").hide();
							$(".coy").attr('required',false);
							$(".notcoy").show();
							$(".notcoy").attr('required',true)
						}
					})

					$('input[type="checkbox"]').click(function(){
						if ($("input[name='hidepwd']:checked")){
							document.getElementById('passwrd1').type= 'text';
							document.getElementById('hidee1').innerHTML= 'hide';
							//$('#hidee1').html('hide');
						 }
					})

					$('input[type="checkbox"]').click(function(){
						if ($("input[name='hidepwd']").is(":checked")==false){
							document.getElementById('hidee1').innerHTML= 'show';
							document.getElementById('passwrd1').type= 'password';
							
						}

					})

					$('input[type="checkbox"]').click(function(){
						if ($("input[name='hidepwd2']:checked")){
							document.getElementById('passwrd2').type= 'text';
							document.getElementById('hidee2').innerHTML= 'hide';
							//$('#hidee1').html('hide');
						 }
					})
					
					$('input[type="checkbox"]').click(function(){
						if ($("input[name='hidepwd2']").is(":checked")==false){
							document.getElementById('hidee2').innerHTML= 'show';
							document.getElementById('passwrd2').type= 'password';
							
						}

					})

				})
			</script>

		</body>
	</html>