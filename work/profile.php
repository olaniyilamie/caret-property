<?php 
include 'User.php';
$obj=new User;

if (!isset($_SESSION['id'])) {
	header("Location:index.php");
}

if ($_SESSION['accountype']=='account'||$_SESSION['accountype']=='individual') {
	$display=$obj->displayUserListing($_SESSION['accountype'],$_SESSION['id']);
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
				<div class=" border-right sidebar mx-0" id="sidebar-wrapper " >
					<?php
						include 'sidebar.php';
					?>   
			    </div>
				
				<div class="col-sm-10 px-1 pl-md-2" id="page-content-wrapper"id="navbarSupportedContent">
				<div class="row">
					<div class="col-12 text-center  newfont">
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

					<?php if(!empty($_GET['status'])){
						$result=$_GET['status'];
					?>
					  <div class="col-12 alert alert-success text-center font-weight-bold"><?php echo $result?></div>
					<?php
					   }
					?>
					
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
							<div class="col-md-4">
								<div class="card" style="border: 2px solid rgb(218,218,218);">
							  <img class="card-img-top imging" src="listing/<?php echo $key['picturefile']; ?>" title="<?php echo $key['pictureID']?>" data-availablepptyid="<?php echo $key['availablepptyID']?>">
							  <div class="card-body fon">
							    <table class="card-text table-responsive table" border="1px">
							    	<tr >
							    		<th colspan="2" class="text-center">Property Details</th>
							    	</tr>
							    	<tr>
							    		<td class="py-0">Category</td><td class="py-0"><?php echo $key['category']; ?></td>
							    	</tr>
							    	<tr>
							    		<td class="py-0">Type</td><td class="py-0"><?php echo $key['type']; ?></td>
							    	</tr>
							    	<tr>
							    		<td class="py-0">Bedroom</td><td class="py-0"><?php echo $key['bedroom']; ?></td>
							    	</tr>
							    	<tr>
							    		<td class="py-0">Price</td><td class="py-0">&#8358;<?php echo number_format($key['price'],2); ?></td>
							    	</tr>
							    	<tr>
							    		<td class="py-0">Other information</td><td class="py-0"><?php echo $key['more_info']; ?></td>
							    	</tr>
							    	<?php $identity=$key['propertypeID'];
							    	
							    	?>
							    </table>
							   <div class="offset-2 offset-md-6 mt-1 " >
							   	 <a href="edituserlisting.php?comm=hahalhjk&poiuyt=<?php echo $identity;?>&jik=7hjs8ha3jhj6" class="btn btn-dark">EDIT </a>
							    <a href="#" class="btn btn-danger">DELETE</a>
							   </div>
							  </div>
							</div>
							</div>
							<?php } } ?>
							
							
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

		$('.imging').click(function(){
			let lastpptyid=$(this).attr('title');
			let availablepptyID=$(this).attr('data-availablepptyid');
			$(window).attr('location','propertyinfo.php?info='+lastpptyid+'&available='+availablepptyID);
		})
		
	})

		</script>

		</body>
	</html>

