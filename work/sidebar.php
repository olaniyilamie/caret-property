 <div class="sidebar-heading">
 	<h5 class="display-inline" style="font-size: 20px"> <i class="fas fa-house-damage"></i> CARET PROPERTY</h5>
 </div>
<div class="list-group list-group-flush">
	<a href="profile.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
	<a href="mydetail.php" class="list-group-item list-group-item-action bg-light">My detail</a>
	<a href="editpro.php" class="list-group-item list-group-item-action bg-light">Edit Profile</a>
	<?php
	 	if ($_SESSION['accountype']=='client') {
	?>
	   <a href="review.php" class="list-group-item list-group-item-action bg-light">Write Review</a>
	<?php
	  	}
	?>
	<?php
	   	if ($_SESSION['accountype']=='individual'||$_SESSION['accountype']=='account') {
	?>
		<a href="advertise.php" class="list-group-item list-group-item-action bg-light">Advertise</a>
	<?php
	   	}
	?>
	<?php
	 	if ($_SESSION['accountype']=='placement') {
	?>
	   <a href="placement.php" class="list-group-item list-group-item-action bg-light">Search for placement</a>
	<?php
	  	}
	?>
	<?php
	 	if ($_SESSION['accountype']=='nysc') {
	?>
		<a href="nysc.php" class="list-group-item list-group-item-action bg-light">Placement</a>
	   
	<?php
	  	}
	?>
	<?php
	 	if ($_SESSION['accountype']=='prof'){
	?>
	   <a href="portfolio.php" class="list-group-item list-group-item-action bg-light">Portfolio</a>
	<?php
	  	}
	?>
	<a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
	
</div>

