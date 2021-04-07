<?php
	include 'User.php';
	$use= new User;

	$result=$use->editDisplayListing($_POST,$_FILES,$_SESSION['pptyavid'],$_SESSION['pptyid'],$_SESSION['pptypicid'],$_SESSION['pptypicfile']);

	if ($result['error']!='') {
		$responses=$result['error'];
		header("Location:profile.php?error=$responses");
	}
	
	if ($result['status']!='') {
		$responses=$result['status'];
		header("location:profile.php?result=$responses");
	}

?>