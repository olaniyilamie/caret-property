<?php
	include 'User.php';
	$out=new User;
	$out->logout();
	header("Location:index.php");

?>