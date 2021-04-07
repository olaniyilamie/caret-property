<?php 
include 'User.php';
$obj=new User;

if (!isset($_SESSION['id'])) {
	header("Location:index.php");
}

if ($_SESSION['accountype']=='account'||$_SESSION['accountype']=='individual') {
	$obj=new User;
	$display=$obj->displayUserListing($_SESSION['accountype'],$_SESSION['id']);
}
if ($_SESSION['accountype']=='nysc'||$_SESSION['accountype']=='placement') {
	include 'App.php';
	$use= new App;
	$get=$use->placementContactInfo($_SESSION['id']);
	
	
	
	echo "<pre>";
	print_r($get);
	echo "</pre>";
	
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
				<div class="row">
					<div class="col-12 text-center" style="font-size: 12px">
						<?php
							if($_SESSION['bio']!=""){
								echo $_SESSION['bio'];
							}else {
						?>
								<p><a href="editpro.php" class="text-danger">Complete your profile</a></p>
						<?php
						; }
						?>
					</div>
					
					<div class="col-12 mt-4">
						<?php if(!empty($_GET['result'])){
							  $result=$_GET['result'];
							  ?>
							  <div class="alert alert-success text-center font-weight-bold"><?php echo $result?></div>
							  <?php
							   }
							   ?>

						<?php if(!empty($_GET['error'])){
							  $result=$_GET['error'];
							  ?>
							  <div class="alert alert-danger text-center font-weight-bold"><?php echo $result?></div>
							  <?php 
								}
								?>
						<div class="row">
							<?php 
							if ($_SESSION['accountype']=='account'||$_SESSION['accountype']=='individual') {
							foreach ($display as $key) { ?>
							<div class="col-4">
								<div class="card" style="width: 25rem;border: 4px solid rgb(218,218,218);">
							  <img class="card-img-top" src="listing/<?php echo $key['picturefile']; ?>">
							  <div class="card-body">
							    <table class="card-text table-responsive" border="1px">
							    	<tr>
							    		<th colspan="2" class="text-center">Property Details</th>
							    	</tr>
							    	<tr>
							    		<td>Category</td><td><?php echo $key['category']; ?></td>
							    	</tr>
							    	<tr>
							    		<td>Type</td><td><?php echo $key['type']; ?></td>
							    	</tr>
							    	<tr>
							    		<td>Bedroom</td><td><?php echo $key['bedroom']; ?></td>
							    	</tr>
							    	<tr>
							    		<td>Price</td><td>&#8358;<?php echo number_format($key['price'],2); ?></td>
							    	</tr>
							    	<tr>
							    		<td>Other information</td><td><?php echo $key['more_info']; ?></td>
							    	</tr>
							    	<?php $identity=$key['propertypeID'];
							    	
							    	?>
							    </table>
							   <div class="offset-7 mt-1 " >
							   	 <a href="edituserlisting.php?comm=hahalhjk&poiuyt=<?php echo $identity;?>&jik=7hjs8ha3jhj6" class="btn btn-dark">EDIT </a>
							    <a href="#" class="btn btn-danger">DELETE</a>
							   </div>
							  </div>
							</div>
							</div>
							<?php } } ?>
							<?php if ($_SESSION['accountype']=='nysc'||$_SESSION['accountype']=='placement') {?>
								<div class="col-12" id="editcvdiv">
								<table class="table table-dark table-center table-hover" border="2px">
								<caption class="display-inline text-center"><button class="btn-dark btn-block btn-lg" id="editcv">EDIT CV</button> CV view </caption>
								
							    	<tr>
							    		<th colspan="2" class="text-center">Curriculum Vitae (CV)</th>
							    	</tr>
							    	<tr>
							    		<td>Name</td><td><?php echo $get['name']; ?></td>
							    	</tr>
							    	<tr>
							    		<td>Address</td><td><?php echo $get['address']; ?></td>
							    	</tr>
							    	<tr>
							    		<td>Email</td><td><?php echo $get['email']; ?></td>
							    	</tr>
									<tr>
							    		<td>Phone-Number</td><td><?php echo $get['phonenumber']; ?></td>
							    	</tr>
							    	<tr>
							    		<td>Discipline</td><td><?php echo $get['course']; ?></td>
							    	</tr>
									<tr>
							    		<td>Qualification</td><td><?php echo $get['qualification']; ?></td>
							    	</tr>
									<?php if (!empty($get['cgp'])){ ?>
									<tr>
							    		<td>CGP</td><td><?php echo $get['cgp']; ?></td>
							    	</tr>
									<?php } ?>

									<?php if (!empty($get['grade'])){ ?>
									<tr>
							    		<td>Grade</td><td><?php echo $get['grade']; ?></td>
							    	</tr>
									<?php } ?>
									<tr>
							    		<td>School</td><td><?php echo $get['school']; ?></td>
							    	</tr>
									<tr>
							    		<td>Commercement date</td><td><?php echo $get['start_date']; ?></td>
							    	</tr>
									</table>
								</div>

							<?php }?>
							
						</div>
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

		$('#editcv').click(function(){
			$.ajax({
				url:'editcv.php',
				dataType:'text',
				type:'post',
				success:function(ola){
					document.getElementById('editcvdiv').innerHTML=ola;
				},
				error:function(err){
					document.write(err)
				}
			})
			
		});

		$('#ddiv').mouseenter(function(){
			alert("you are in");
		})
		$('#savit').click(function(){
			let one = $this.attr('data-pid');
			alert(one);
			// $.ajax({
			// 	url:'savecvchanges.php',
			// 	data:{'id':one},
			// 	dataType:'text',
			// 	type:'post',
			// 	success:function(ola){
			// 		alert(one);
			// 		//document.getElementById('editcvdiv').innerHTML=ola;
			// 	},
			// 	error:function(err){
			// 		document.write(err)
			// 	}
			// })
			
		})
	})

		</script>

		</body>
	</html>

