<?php
include 'User.php';
	$call=new User;
	if (!isset($_SESSION['id'])) {
		header('Location:profile.php');
	}
		if ($_POST){
			$output=$call->editprofile($_SESSION['accountype'],$_POST,$_SESSION['id']);
				if ($output) {
					$_SESSION['name']=$_POST['name'];
					$_SESSION['address']=$_POST['address'];
					$_SESSION['phonenumber']=$_POST['phoneno'];
					$_SESSION['mail']=$_POST['mail'];
					$_SESSION['bio']=$_POST['bio'];
					header("Location:mydetail.php");
				}else {
					header("Location:editpro.php?feedback=Try Again !");
				}
		}else{
			header("Location:profile.php");
		}
	


?>