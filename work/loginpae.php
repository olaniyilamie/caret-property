<?php
session_start();
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>LOGIN PAGE</title>
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
					
					<?php
						if (!empty($_GET['msg'])) {
							$msg=$_GET['msg'];
							echo "<div class=\"col-12 alert alert-danger text-center\"><h5>$msg</h5></div>";
						}
					?>
					<?php
						if (!empty($_GET['succmsg'])) {
							$msg=$_GET['succmsg'];
							echo "<div class=\"col-12 alert alert-success text-center\"><h5>$msg</h5></div>";
						}
					?>
					<div class="col-12">
						<form action="log.php" method="POST">
							<h3 class="text-center alert alert-dark">Welcome Back</h3>
						<div class="col-12 " id="logindiv">
							<p class="font-weight-bold d-inline mr-5">Select Account Type</p>
							
							<input type="radio" name="company" value="account" class="pptyType">
							<label class="mr-2">Company</label>
							
							<input type="radio" name="company" value="individual"  class="pptyType">
							<label class="ml-2">Individual </label>
							
							
							<!-- <input type="radio" name="company" value="client"  class="pptyType"><label>Prospecive Client </label> -->
							<p class="text-danger my-0 text-center pb-3" id="acctInfo"> Select your account type above !</p>
						</div>
						<div class="col-12">
							<p class="text-danger my-0" id="username">Your username cannot be empty </p>
							<input type="text" name="username" placeholder="username" class="form-control mb-3" id="usename" required="">
						</div>
						<div class="col-12">
							<p class="text-danger my-0" id="password">Your password cannot be empty </p>
							<div class="row">
								<div class="col-10">
									<input type="password" name="password" placeholder="password" class="form-control mb-3" id="pasword" required="">
								</div>
								<div class="col-2 text-right">
									<button type="button" class="btn-dark btn-sm" id="showpwd">show </button>
								</div>
							</div>
							
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6">
									<input type="checkbox" name="rememberme" class="mr-2"><label>Remember Me</label>
								</div>
								<div class="col-6 text-right">
									<a href="">forgotten password ?</a>
								</div>
							</div>
						</div>
						<div class="col-12 mt-2">
							<button type="submit" class="btn btn-sm btn-block btn-dark" id="btnlogin" >LOGIN</button>
						</div>
						</form>
					</div>
					<div class="col-12 mt-2 text-center">
						<p>Not Registered ? <a href="signup.php">Create an account</a></p>
					</div>
					
				</div>
				<?php require("footer.php"); ?>
			</div>

					





			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){

					$('#acctInfo').hide();
					$('#username').hide();
					$('#password').hide();

					$('#btnlogin').click(function(){
						if ((document.querySelector('input[name="company"]:checked')== null) && ($('#usename').val()=='') && ($('#pasword').val()=='')) {
							alert("Please provide all neccessary information");
								$('#acctInfo').show();
								$('#username').show();
								$('#password').show();
						}

						if ((document.querySelector('input[name="company"]:checked')== null) && ($('#usename').val()!='') && ($('#pasword').val()!='')){
							alert("Please Select your account type");
						}

						if ((document.querySelector('input[name="company"]:checked')!= null) && ($('#usename').val()=='') && ($('#pasword').val()!='')){
							alert("Your username cannot be empty");
						}

						if ((document.querySelector('input[name="company"]:checked')!= null) && ($('#usename').val()!='') && ($('#pasword').val()=='')){
							alert("Your password cannot be empty");
						}

	
					})

					$('#showpwd').click(function(){
						//alert($('#showpwd').html());
						if ($('#showpwd').html()=='show password') {
							$('#pasword').prop('type','text');
							$('#showpwd').html('hide password');
								
						}else{
							$('#pasword').prop('type','password');
							$('#showpwd').html('show password');
						}
					})
					
				})
				
				
			</script>

		</body>
	</html>