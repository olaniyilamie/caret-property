<?php
include 'User.php';
$cause_session=new User;
include 'App.php';
$index=new App;
$list=$index->displayListing();


$gall=$index->indexgallery();

?>
<!DOCTYPE html>
	<html lang="en">
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
				<?php include"nav.php" ?>
				
				<div class="row" id="bgpic">
					<div class="col-12 align-items-center" id="divwrite">
						<div class="row" style="margin-top: 14em;" id="b4write">
							<div class="col-12 text-center">
								<h2 class="text-light mb-md-5">Get a property that compliments you and not just a property.</h2>
							</div>	
						</div>
						<form action="" method="GET">
						<div class="row">	
							<div class="col-md-4 offset-md-4">
								<div class="row">
									<button class="col-4 btn btn-outline-light px-md-5 form-control" type="button" id="rentid" value="rental">RENTAL</button>
									<button class="col-4 btn btn-outline-light px-md-5 form-control" type="button" id="saleid" value="sale">SALE</button>
									<button class="col-4 btn btn-outline-light px-md-4 form-control" type="button" id="sletid" value="short-let">SHORT-LET</button>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-5 offset-md-3">
								<input type="text" name="search" placeholder="Select above and search by Address or Location e.g Lagos or Surulere" 
								class="form-control form-control-block bg-transparent text-white font-weight-bold" id="loc_search" >	
							</div>
							<div class="col-md-4 ">
								<select class="col-4 form-control bg-transparent text-white" name="cat" id="cat_search" required>
									<option value="">PLEASE SELECT</option>
									<option class="text-dark" value="rental">RENTAL</option>
									<option class="text-dark" value="sale">SALE</option>
									<option class="text-dark" value="short-let">SHORT-LET</option>
								</select>	
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-2 offset-md-2 display-inline mr-1 btn-outline ">
								<select class="form-control bg-transparent text-white" name="pptytype" id="pptype_search" required>
									<option value="">Property Type</option>
									<option class="text-dark" value="residential">Residential</option>
									<option class="text-dark" value="commercial">Commercial</option>
									<option class="text-dark" value="rawland">Raw Land</option>
								</select>
							</div>
							<div class="col-md-2 offset-md-1 display-inline" >
								<input type="number" name="budget" placeholder="What is your budget ?"  id="bud_search" 
								class="form-control bg-transparent text-white">
							</div>
							<div class="col-md-2 offset-md-1 display-inline ">
								<select class="form-control btn-block bg-transparent text-white" name="bedroom" id="bed_search" required>
									<option value=""> How many bedroom</option>
									<option class="text-dark" value="1">1-bedroom</option>
									<option class="text-dark" value="2">2-bedrooms</option>
									<option class="text-dark" value="3">3-bedrooms</option>
									<option class="text-dark" value="4">4-bedrooms</option>
									<option class="text-dark" value="5">5-bedrooms</option>
									<option class="text-dark" value="more">more-bedrooms</option>
								</select>										
							</div>
						</div>
						<div class="row justify-content-center mt-3 pb-2">
							<button class="btn btn-outline-light text-white font-weight-bold" type="button" id="searchppty">SEARCH</button>
						</div>
						</form>
					</div>								
				</div>
				<div class="row">
					<div class="col-12 px-0"  style="display:none" id="catstay">
						<h3 class="text-center alert alert-dark" id="catname"></h3>
					</div>
				</div>
				<div class="row" id="show" style="display:none">
					<div class="col-12 px-0">
						<h3 class="text-center alert alert-dark " ></h3>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12 text-center">
						<h3 class="alert alert-dark">GALLERY</h3>
					</div>
					<?php foreach ($gall as $value) { ?>
						<div class="col-md-3 card">
							<img src="listing/<?php echo $value['picturefile']?>" class="img-fluid mb-2" alt="picture from web gallery" title="picture from web gallery">
						</div>
					<?php } ?>
					<div class=" col-12 text-center">
						<button class="btn btn-dark mt-2"> <a href="gallery.php" class="textcol"><i class="far fa-images mr-2"></i> Visit our Gallery</a></button>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				    		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalLabel"><!-- Modal title --></h5>
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
				
				<?php require("footer.php"); ?>
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

				$('#rentid').click(function(){
					let ppty=document.getElementById('rentid').value;
					$.ajax({
						url:'catsearch.php',
						type:'post',
						data:{'use':ppty},
						dataType:'text',
						success:function(cat){
							$('#catstay').show();
							$('#show').show();
							document.getElementById('catname').innerHTML='PROPERTY AVAILABLE FOR RENT';
							document.getElementById('show').innerHTML=cat;
							if (cat=="") {
								document.getElementById('show').innerHTML = '<p style="color:red;">No property available for rent at the moment ! check back later.</p>';
							}
						},
						error:function(error){
							document.write(error);
						}
					})
				})

				$('#saleid').click(function(){
					let ppty=document.getElementById('saleid').value;
					$.ajax({
						url:'catsearch.php',
						type:'post',
						data:{'use':ppty},
						dataType:'text',
						success:function(cat){
							$('#catstay').show();
							$('#show').show();
							document.getElementById('catname').innerHTML='PROPERTIES AVAILABLE FOR SALE';
							document.getElementById('show').innerHTML=cat;
							if (cat=="") {
								document.getElementById('show').innerHTML = '<p style="color:red;">No property available for sales at the moment ! check back later.</p>';
							}
						},
						error:function(error){
							document.write(error);
						}
					})
				})

				$('#sletid').click(function(){
					let ppty=document.getElementById('sletid').value;
					$.ajax({
						url:'catsearch.php',
						type:'post',
						data:{'use':ppty},
						dataType:'text',
						success:function(cat){
							$('#catstay').show();
							$('#show').show();
							document.getElementById('catname').innerHTML='PROPERTIES AVAILABLE FOR SHORT-LET';
							document.getElementById('show').innerHTML=cat;
							if (cat=="") {
								document.getElementById('show').innerHTML = '<p style="color:red;">No property available for short-let at the moment ! check back later.</p>';
							}
						},
						error:function(error){
							document.write(error);
						}
					})
				})

				$('#searchppty').click(function(){
					let search1=document.getElementById('loc_search').value;
					let search2=document.getElementById('cat_search').value;
					let search3=document.getElementById('pptype_search').value;
					let search4=document.getElementById('bud_search').value;
					let search5=document.getElementById('bed_search').value;
					if(search1=='' && search2=='' && search3=='' && search4=='' && search5==''){
						alert('Please select and provide us with information to search with to serve you better');
					}else if((search1=='' && search2=='') || (search1=='' && search3=='')||(search1=='' && search4=='')||(search1=='' && search5=='')||
					(search2=='' && search3=='') || (search2=='' && search4=='') ||(search2=='' && search5=='') || (search3=='' && search4=='') || 
					(search3=='' && search5=='') ||(search4=='' && search5=='') ){
						alert('Please select and provide us with information to search with to serve you better');
					}
					else{
					$.ajax({
						url:'search.php',
						type:'post',
						data:{'cat':search2,'search':search1,'pptytype':search3,'budget':search4,'bedroom':search5},
						dataType:'text',
						success:function(search){
							$('#catstay').show();
							$('#show').show();
							$('#catname').html('THESE ARE THE PROPERTY THAT MATCH YOUR DESCRIPTION');
							$('#show').html(search);
							if ($(".returnSearch").html('')){
								$('#catname').html('NO MATCH AVAILABLE FOR CHOICE');
								$('#show').show();	
							}	
						},
						error:function(error){
							document.write(error);
						}
					})
				}
				})
					$.ajax({
						url:'https://newsapi.org/v2/everything?q=property&qInTitle=property&apiKey=7238a1f3631d41b3bc5b7abc4328faf0',
						type:'get',
						dataType:'json',
						success:function(news){
							console.log(news);
						},
						error:function(error){
							console.log(error);
						}
					})

					$(document).on('click','.imging',function(){
						let lastpptyid=$(this).attr('title');
						let availablepptyID=$(this).attr('data-availablepptyid');
						$(window).attr('location','propertyinfo.php?info='+lastpptyid+'&available='+availablepptyID);
					})


								
			})
		</script>
	</body>
</html>