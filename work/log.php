<?php
	require 'User.php';
	$using= new User;
	$chk=$using->login($_POST);

	
	
	if ($chk['chk']>0) {
		if ($_POST['company']=='account') {
		$_SESSION['id']=$chk['cut']['ID'];
		}
		if ($_POST['company']=='individual') {
			$_SESSION['id']=$chk['cut']['ID'];
		}
		if ($_POST['company']=='client') {
			$_SESSION['id']=$chk['cut']['clientID'];
		}
		$_SESSION['accountype']=$_POST['company'];
		$_SESSION['name']=$chk['cut']['name'];
		$_SESSION['address']=$chk['cut']['address'];
		$_SESSION['phonenumber']=$chk['cut']['phonenumber'];
		$_SESSION['username']=$chk['cut']['username'];
		$_SESSION['email']=$chk['cut']['email'];
		$_SESSION['bio']=$chk['cut']['bio'];
		$_SESSION['profilepic']=$chk['cut']['profilepic'];
			
		header("Location:profile.php");
	}else{
		header("Location:loginpae.php?msg=Invalid login ! Makesure your username and password is correct");
	}
	
?>
