<?php
	include 'App.php';
	$obj=new App;
	$result=$obj->displayPlacementAdvert();
	$get=$obj->placementSearchFliter();
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>JOB VACANCY</title>
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
				<?php include "nav.php" ;?>
				<div class="row">
					<div class="col-6 btn-dark">
						<select name="" id="search2" class="form-control my-3">
							<option value="">Search with Qualification</option>
							<?php foreach ($get as $fliter1 ) {
								foreach ($fliter1 as $value ){ ?>
									<option value="<?php echo $value?>">
									<?php echo strtoupper($value)?></option>
									<?php ;}							;} ?>
						</select>
					</div>
					<div class="col-6 btn-dark">
						<select name="" id="search1" class="form-control my-3">
							<option value="">Search with Discipline</option>
							<?php foreach ($result as $fliterd ) { ?>
							<option value="<?php echo $fliterd['course']?>" ><?php echo (strtoupper($fliterd['course']))?></option>
							<?php ;} ?>
						</select>
					</div>
				</div>
				<div class="row" id="search">
					<div class="col-12">			
						<table class="table table-bordered table-inverse table-hover">
							<thead>
								<tr>
									<th>Name</th><th>Qualification</th><th>Discipline</th><th>CV</th>
								</tr>
							</thead>
							<tbody id='filter1'>
								<?php foreach ($result as $key ) {
								 ?>
								<tr>
									<td><?php echo $key['name'];?></td>
									<td><?php echo (strtoupper( $key['qualification']));?></td>
									<td><?php echo $key['course'];?></td>
									
									<td><button class=" btn btn-outline-dark btn-block" type="button" data-hire=" 
									<?php echo $key['user_id'];?>" id="use" data-toggle="modal" data-target="#exampleModal">view</button>

									</td>
								</tr>

								
								<?php  ;} ?>
							</tbody>
						</table>
					</div>

				</div>
<div class="modal fade small-font" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
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
			<script src="../js/bootstrap.js"></script>
			<?php include"footer.php" ?>
		

<script type="text/javascript">
$(document).ready(function(){

	$('#exampleModal').on('shown.bs.modal', function(e) {
		var one = $(e.relatedTarget).data('hire');
		data2send={'id':one}//id will be called where you are sending it to while userid is the value and data here
			$.ajax({
			url:'placementcontactinfo.php',
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

	$('#search1').change(function(){
		let dis=document.getElementById('search1').value
		data2send={'search':dis}
		$.ajax({
			url:'searchfliter.php',
			type:'post',
			data:data2send,
			dataType:'text',
			success:function(info){
			document.getElementById('search2').value='';
			document.getElementById('filter1').innerHTML=info
			},
			error:function(error){
				console.log(error)
			},
		})
	})

	$('#search2').change(function(){
		let diss=document.getElementById('search2').value
		data2send={'search':diss}
		$.ajax({
			url:'searchfliter1.php',
			type:'post',
			data:data2send,
			success:function(info){
				//document.write(info)
			document.getElementById('search1').value='';
			document.getElementById('filter1').innerHTML=info	
			},
			error:function(error){
				console.log(error)
			},
		})
	})
})
			</script>
		</body>
	</html>

