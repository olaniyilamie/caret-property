<?php 
session_start();
if (!isset($_SESSION['id'])) {
	header("Location:index.php");
}
if ($_GET) {
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
					<?php
						if (!empty($_GET['feedback'])) {
							$feedback=$_GET['feedback'];
							echo "<div class=\"alert alert-danger text-center\"><h5>$feedback</h5></div>";
						}
					?>

				<div class="row">
				<div class="col-12" style="border: 4px solid #D6D8D9">
					<?php
						if ($_GET['information']) {
							$information=$_GET['information'];
							echo "<p class=\"alert alert-danger text-center\">$information</p>";
						}
					?>
						<p style="font-size: 10px"> <span class="red">* </span>Your information will display as shown below,if there's any mistake please click on placement to make corrections.</p>
							<table class="table table-striped table-bordered table-sm">
							<thead class="thead-dark">
								<tr>
									<th colspan="2" class="text-center">PLACEMENT INFORMATION</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-secondary">
								<td>FULLNAME</td><td> <?php echo(strtoupper($_SESSION['nname'])); ?> </td>
							</tr>
							<tr class="table-secondary">
								<td>EMAIL</td><td> <?php echo $_SESSION['eemail']; ?> </td>
							</tr>
							<tr>
								<td>PHONE-NUMBER</td><td> <?php echo(strtoupper($_SESSION['pphoneno'])); ?> </td>
							</tr>
							<tr>
								<td>ADDRESS</td><td> <?php echo(strtoupper($_SESSION['aade'])); ?> </td>
							</tr>
							<tr>
								<td>SCHOOL</td><td> <?php echo(strtoupper($_SESSION['sschool'])); ?> </td>
							</tr>
							<tr>
								<td>COURSE</td><td> <?php echo(strtoupper($_SESSION['ccourse'])); ?> </td>
							</tr>
							<?php
								if ($_SESSION['accountype']=='nysc') {
							?>
							<tr>
								<td>GRADE</td><td> <?php echo(strtoupper($_SESSION['ggrade'])); ?> </td>
							</tr>
							<?php
									
								}
							?>
							<?php
								if ($_SESSION['accountype']=='placement'){
							?>
							<tr>
								<td>CGP</td><td> <?php echo(strtoupper($_SESSION['ccgp'])); ?> </td>
							</tr>
							<?php	
								}
							?>
							<tr>
								<td>START DATE</td><td> <?php echo(strtoupper($_SESSION['ddate'])); ?> </td>
							</tr>
							<tr>
								<td>INFORMATION ABOUT YOURSELF</td><td> <?php echo($_SESSION['wwrite']); ?> </td>
							</tr>
							</tbody>

						</table>
						<div class="row">
							<div class="col-2 offset-8">
								<a href="nysc.php?infoedit=editing"><button class="btn-sm btn-danger">EDIT</button></a>		
							</div>
							<div class="col-2">
								<a href="nyscact.php"><button class="btn-sm btn-dark">SEND</button></a>
							</div>
						</div>

							<p class="mb-0"style="font-size: 8px"> <span class="red">*</span>Feel free to send a mail on authentication of anyone that reach out to you through Caret Property and we will reply in less than 48hours ...</p>
					</div>	
				</div>
			</div>

				</div>
			
				
				<?php require("footer.php"); ?>
			</div>

			 

		</body>
	</html>
	<?php
	}else{
		header("Location:index.php");
	}
	?>