<?php
	include 'User.php';

	$call=new User;
	if ($_FILES||$_POST){
		$return=$call->profilepic($_SESSION['accountype'],$_FILES,$_SESSION['id']);
		$error=$return['error'];
		if ($return['error']!='') {
			//die($return['error']);
			header("location:profilepic.php?msg=".$return['error']);
		}else{
		
		$_SESSION['profilepic']=$return['picname'];
			header("location:profilepic.php?msg=".$return['status']);
			//is it possible to pass variable as query string?	
		}
	}

?>