<?php
include 'App.php';
$use= new App;
if($_POST['search']!=''){
$get=$use->placementSearchByFliter($_POST['search']);

foreach ($get as $key) {
		$name=$key['name'];
		$qua=strtoupper($key['qualification']);
		$course=$key['course'];
		$idd=$key['user_id'];
		
	echo"	<tr>
			<td>$name</td>
			<td>$qua</td>
			<td>$course</td>					
			<td><button class=\"btn btn-outline-dark btn-block\" type=\"button\" 
				data-hire=\"$idd\" 
				id=\"use\" data-toggle=\"modal\" data-target=\"#exampleModal\">
				view</button>
				

			</td>
		</tr>
	";}
}else{
	$get=$use->displayPlacementAdvert();
	foreach ($get as $key) {
		$name=$key['name'];
		$qua=strtoupper($key['qualification']);
		$course=$key['course'];
		$idd=$key['user_id'];
		
	echo"	<tr>
			<td>$name</td>
			<td>$qua</td>
			<td>$course</td>					
			<td><button class=\"btn btn-outline-dark btn-block\" type=\"button\" 
				data-hire=\"$idd\" 
				id=\"use\" data-toggle=\"modal\" data-target=\"#exampleModal\">
				view</button>
				

			</td>
		</tr>
	";}

}
?>