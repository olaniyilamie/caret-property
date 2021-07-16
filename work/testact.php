<?php
	if ($_FILES) {
		include 'upload.php';
		$use =new User;
		$use-> uploadListing($_FILES,$_SESSION['id']);
	}else{
		header("Location:test2.php");
	}





?>