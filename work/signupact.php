<?php
	if($_POST){
		if( ($_POST['userpass'])!=($_POST['userpass2'])) {
			header("Location:signup.php?msg=password does not match !");
		}
		require 'User.php';
		$client= new User;
		$move=$client->signup($_POST);
		if ($move>0) {
			header("Location:loginpae.php?succmsg=You have successfully registered ! Please login with your username and password");
		}else{
			header("Location:signup.php?msg=Please try again! Email already in use");
		}
	}else{
		header("Location:signup.php?msg=you must register");
	}


?>