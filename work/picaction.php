<?php
	if (!isset($_SESSION['id'])) {
			header("index.php");
		}
	if ($_POST||$_FILES) {
		
		require 'User.php';
		$pic=new User;
		$thank=$pic->uploadListing($_FILES,$_SESSION['id'],$_SESSION['accountype'],$_POST);
		// echo($thank['error']);
		// die();
		
		if ($thank['error']!=""){
			header("Location:advertise.php?error=".$thank['error']);
			
		}if ($thank['status']!="") {
			header("Location:advertise.php?status=".$thank['status']);
		}
		
	}

	

?>