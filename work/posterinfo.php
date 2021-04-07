<?php
 include 'App.php';
	$index=new App;
	
	if ($_POST['type']=='companyID') {
  	$get=$index->company($_POST['id']);
  	}else{
 	$get=$index->agent($_POST['id']);
	 }



echo "<table border=3>

		<tr >
			<th colspan=\"2\"> Get more information from".$get['name']."</th>
		</tr>
		<tr>
			<th>NAME</th>
			<td>".$get['name']."</td>
		</tr>
		<tr>
			<th>ADDRESS</th>
			<td>".$get['phonenumber']."</td>
		</tr>
		<tr>
			<th>PHONE NUMBER</th>
			<td>".$get['address']."</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>".$get['email']."</td>
		</tr>
	</table>";
	

?>