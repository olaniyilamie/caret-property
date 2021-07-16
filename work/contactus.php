<?php 
	session_start();
	if ($_POST) {
		include_once 'App.php';
		$app=new App;
		$app->contactMessage($_POST);
		
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>CONTACT US</title>
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
			<div class="container-fluid" id="mypage">
				<?php include"nav.php"?>
				<div class="row">
					<div class="col-12 text-center">
						
						<h3 class="alert alert-dark"> MESSAGE US <i class="fas fa-comments pr-3"></i></h3>
						<p class=" px-md-5">Email us with any questions or inquiries, we would be happy to answer your question. Caret property is place to connect you with prospective clients and professional in the Real Estate World</p>
					</div>
					<div class="col-3"></div>
					<div class="col-md-6">
						<?php if (!empty($_GET['stat'])){
							$stat=$_GET['stat'];
						?>
							<div class="row">
							<div class="col-12">
								<h5 class="text-center alert alert-success"><?php echo $stat ?></h5>
							</div>
						</div>
						<?php } ?>
						<form class="form" action=" " method="POST">
							<div class="row">
								<div class="col-md-6">
									First Name <span class="red">*</span> <br><input type="text" name="fname" class="form-control" required="">
								</div>
								<div class="col-md-6">
									Last Name <span class="red">*</span> <br><input type="text" name="lname" class="form-control" required="">
								</div>
								<div class="col-12">
									Email <span class="red">*</span> <br><input type="email" name="email" class="form-control" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									Subject <span class="red">*</span> <br> 
									<input type="text" name="subject"  class="form-control" required="">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									Detail <br> <textarea class="form-control" name="detail"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<button class="btn-block btn-dark mt-2">SEND</button>
								</div>
							</div>
						</form>
						
					</div>
					<div class="col-3"> </div>
				</div>
				<div class="row">
					<div class="col-12 text-center pt-4">
						<h3 class="alert alert-dark">CONTACT US <i class="fas fa-phone-square-alt pl-3"></i></h3>
						<p>you can also contact us via phone or email</p>
						<h3>01-23568392</h3>
						<h3>+234-8023568392</h3>
						<a href="#">caret.property@gmail.com</a>
					</div>
				</div>
				<?php require("footer.php"); ?>
			</div>
			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>		
		</body>
	</html>
