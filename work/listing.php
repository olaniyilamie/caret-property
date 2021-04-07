<?php

include 'App.php';

$index=new App;

$list=$index->displayListing();

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

				<div class="row" id="show">
					<div class="col-12 px-0">
						<h3 class="text-center alert alert-dark ">AVAILABLE PROPERTY</h3>
					</div>
				
					<?php foreach ($list as $key) { ?>
					
					<div class="card col-3 pb-2" style="width: 18rem;border: 1px solid black" >
					  <img class="card-img-top" src="listing/<?php echo ($key['picturefile']);?>" height="210px" alt="property img">
					    <h5 class="card-title text-center alert alert-dark"><?php echo strtoupper($key['category']);?></h5>
					    <p class="card-text font-weight-bold">Price: &#8358;<?php echo number_format($key['price'],2);?></p>
					    <p class="card-text font-weight-bold">Property type: <?php echo $key['type'];?></p>
				    	<a href="" data-toggle="modal" data-target="#exampleModal"
			    	<?php if ($key['individualID']=='') { ?> 	
				    	data-comp=" <?php echo $key['companyID'];?>" 
				    	data-ind="companyID"
				    	<?php } else{ ?>
				    	data-comp="<?php echo $key['individualID'];?>"
				    	data-ind="individualID"
			   		<?php } ?>>	More information </a>   	
					</div>
				
					<?php		 }			?>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		           					<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
					      	<div class="modal-body">
					        
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
					      	</div>
				    	</div>
				  	</div>
				</div>
			</div>

			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){

					$('#exampleModal').on('show.bs.modal', function(e) {
					let one = $(e.relatedTarget).data('comp');
					let two = $(e.relatedTarget).data('ind');
					data2send={'id':one,'type':two}//id will be called where you are sending it to while userid is the value and data here
						$.ajax({
							url:'posterinfo.php',
							type:'post',
							data:data2send,
							dataType:'text',
							success:function(info){
							$(e.currentTarget).find('.modal-body').html(info);
							},
							error:function(error){
							console.log(error);
							}
						})
					})
				})
			</script>
		</body>