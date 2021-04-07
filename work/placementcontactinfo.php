<?php
include 'App.php';
$use= new App;
$get1=$use->placementContactInfo($_POST['id']);

$pic=$get1['profilepic'];
$name=$get1['name'];
$address=$get1['address'];
$email=$get1['email'];
$Phonenumber=$get1['phonenumber'];
$dis=$get1['course'];
$qua=$get1['qualification'];
$date=$get1['start_date'];
$school=$get1['school'];
$cgp=$get1['cgp'];
$grade=$get1['grade'];
$writeup=$get1['selfwriteup'];

if ($grade=="") {
echo "<div class=\"row\" >
		<div class=\" col-12\">
			<div class=\"card border-dark\" >
		<div class=\"card-header bg-transparent border-dark\">
			<div class=\"row\">
				<div class=\"col-10 text-dark\">
					<p >$writeup</p>
				</div>
				<div class=\"col-2\">
					<img src=\"profilepicture/$pic\" class=\"img-fluid\">
				</div>
			</div>
		</div>
		<div class=\"card-body text-dark\">
			<div class=\"row\">
				<div class=\"col-12 text-dark\">
					<table border-2>
						<tr>
							<th>Name</th><td>$name</td>
						</tr>
						<tr>
							<th>Address</th><td>$address</td>
						</tr>
						<tr>
							<th>Phonenumber</th><td>$Phonenumber</td>
						</tr>
						<tr>
							<th>Email</th><td>$email</td>
						</tr>
						<tr>
							<th>Discipline</th><td>$dis</td>
						</tr>
						<tr>
							<th>Qualification</th><td>$qua</td>
						</tr>
						<tr>
							<th>CGP</th><td>$cgp</td>
						</tr>
						<tr>
							<th>School</th><td>$school</td>
						</tr>
						<tr>
							<th>Commercement date</th><td>$date</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>";
}else{
	echo "<div class=\"row\" >
		<div class=\" col-12\">
			<div class=\"card border-dark\" >
		<div class=\"card-header bg-transparent border-dark\">
			<div class=\"row\">
				<div class=\"col-10 text-dark\">
					<p>$writeup</p>
				</div>
				<div class=\"col-2\">
					<img src=\"profilepicture/$pic\" class=\"img-fluid\">
				</div>
			</div>
		</div>
		<div class=\"card-body text-dark\">
			<div class=\"row\">
				<div class=\"col-12 text-dark\">
					<table border-2>
						<tr>
							<th>Name</th><td>$name</td>
						</tr>
						<tr>
							<th>Address</th><td>$address</td>
						</tr>
						<tr>
							<th>Phonenumber</th><td>$Phonenumber</td>
						</tr>
						<tr>
							<th>Email</th><td>$email</td>
						</tr>
						<tr>
							<th>Discipline</th><td>$dis</td>
						</tr>
						<tr>
							<th>Qualification</th><td>$qua</td>
						</tr>
						<tr>
							<th>Grade</th><td>$grade</td>
						</tr>
						<tr>
							<th>School</th><td>$school</td>
						</tr>
						<tr>
							<th>Commercement date</th><td>$date</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>";
}

// echo "<pre>";
// echo($get1);
// echo "</pre>";
// ?>
