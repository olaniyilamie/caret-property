<?php
	include 'User.php';
	$call =new User;
	if (!isset($_SESSION['id'])) {
		header("Location:loginpae.php");
	}
	if ($_POST) {
		$_SESSION['nname']=$_POST['name'];
	    $_SESSION['eemail']=$_POST['email'];
	    $_SESSION['pphoneno']=$_POST['phoneno'];
	    $_SESSION['aade']=$_POST['add'];
	    $_SESSION['sschool']=$_POST['school'];
	    $_SESSION['ccourse']=$_POST['course'];
	    $_SESSION['ggrade']=$_POST['grade'];
	    $_SESSION['wwrite']=$_POST['write'];
	    $_SESSION['ddate']=$_POST['date'];
		$return=$call->placement($_SESSION['accountype'],$_POST,$_SESSION['id']);
		$_SESSION['placementid']=$return;
		if ($return>0) {
			header("Location:placementpost.php?information= Check information properly before submitting");
		}else{
			header("Location:placementpost.php?information=Your information was not saved, try again and becareful with the use of <b>'</b> ");
		}
	}else{
		header("Location:profile.php");
	}
?>
