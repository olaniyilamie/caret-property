<?php 
	class User{
		public $conn;

	function __construct(){
		$this->conn= new mysqli('localhost','root','','caret_ppty');
		if ($this->conn->connect_error) {
			die("There is a connection error, contact the web assistant center !");
		}
		session_start();
	}
	function signup($form){
		$acctype=$form['company'];
		$name=$form['name'];
		$address=$form['address'];
		$reg=$form['reg'];
		$phoneno=$form['phoneno'];
		$username=$form['username'];
		$password=md5($form['userpass']);
		$email=$form['mail'];
			if ($acctype=='account') {
			$query="INSERT INTO realestatecompany SET name='$name',address='$address',niesvReg='$reg',phonenumber='$phoneno',username='$username',password='$password',email='$email'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				header("Location:signup.php?msg=Please try again! Email or Username already in use");
			}
			$chk=$this->conn->insert_id;
			if ($chk>0) {
				return $chk;
			}
			return $chk;
			}

			if ($acctype=='individual') {
				$query="INSERT INTO individual SET name='$name',address='$address',phonenumber='$phoneno',username='$username',password='$password',email='$email'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				header("Location:signup.php?msg=Please try again! Email or Username already in use");
			}
			$chk=$this->conn->insert_id;
			if ($chk>0) {
				return $chk;
			}
			return $chk;
			}

			if ($acctype=='prof') {
				$query="INSERT INTO professional SET name='$name',address='$address',phonenumber='$phoneno',username='$username',password='$password',email='$email'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				header("Location:signup.php?msg=Please try again! Email or Username already in use");
			}
			$chk=$this->conn->insert_id;
			if ($chk>0) {
				return $chk;
			}
			return $chk;
			}

			if ($acctype=='nysc'||$acctype=='placement') {
				$query="INSERT INTO user_stu SET name='$name',address='$address',phonenumber='$phoneno',username='$username',password='$password',email='$email'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				header("Location:signup.php?msg=Please try again! Email or Username already in use");
			}
			$chk=$this->conn->insert_id;
			if ($chk>0) {
				return $chk;
			}
			return $chk;
			}

			if ($acctype=='client') {
				$query="INSERT INTO client SET name='$name',address='$address',phonenumber='$phoneno',username='$username',password='$password',email='$email'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				header("Location:signup.php?msg=Please try again! Email or Username already in use");
			}
			$chk=$this->conn->insert_id;
			if ($chk>0) {
				return $chk;
			}
			return $chk;
			}
		}


		function login($use){
			$acctype=$use['company'];
			$username=$use['username'];
			$password=md5($use['password']);
			if ($acctype=='account') {
			$query="SELECT * FROM realestatecompany WHERE username='$username' AND password='$password'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$all=['chk','cut'];
			$all['chk']=$res->num_rows;
			if ($all['chk']>0) {
				$all['cut']=$res->fetch_assoc();
				return $all;
			}
			return $all['chk'];
			}

			if ($acctype=='individual') {
				$query="SELECT * FROM individual WHERE username='$username' AND password='$password'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$all=['chk','cut'];
			$all['chk']=$res->num_rows;
			if ($all['chk']>0) {
				$all['cut']=$res->fetch_assoc();
				return $all;
			}
			return $all['chk'];
			}

			if ($acctype=='prof') {
				$query="SELECT * FROM professional WHERE username='$username' AND password='$password'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$all=['chk','cut'];
			$all['chk']=$res->num_rows;
			if ($all['chk']>0) {
				$all['cut']=$res->fetch_assoc();
				return $all;
			}
			return $all['chk'];
			}

			if ($acctype=='nysc'|| $acctype=='placement') {
				$query="SELECT * FROM user_stu WHERE username='$username' AND password='$password'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$all=['chk','cut'];
			$all['chk']=$res->num_rows;
			if ($all['chk']>0) {
				$all['cut']=$res->fetch_assoc();
				return $all;
			}
			return $all['chk'];
			}

			if ($acctype=='client') {
				$query="SELECT * FROM client WHERE username='$username' AND password='$password'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$all=['chk','cut'];
			$all['chk']=$res->num_rows;
			if ($all['chk']>0) {
				$all['cut']=$res->fetch_assoc();
				return $all;
			}
			return $all['chk'];
			}

		}

		function logout(){
			session_destroy();
			header("Location:index.php");
		}

		function uploadListing($picarray,$id,$acctype,$form){
		$catergory=$form['category'];
		$propertype=$form['propertype'];
		$bedroom=$form['bedroom'];
		$price=$form['price'];
		$address=$form['address'];
		$detail=strip_tags(addslashes(trim($form['detail'])));
		
		
		$pictotal=count($picarray['image']['name']);
		for ($i=0; $i < $pictotal ; $i++) { 
			$type=$picarray['image']['type'][$i];
			$tmp=$picarray['image']['tmp_name'][$i];
			$size=$picarray['image']['size'][$i];
			$filename=$picarray['image']['name'][$i];
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$conve_ext=strtolower($extension);
			$newfilename=rand().time().'.'.$conve_ext;
			$destination="listing/$newfilename";
			$feedback=['error'=>'','status'=>''];
			
			 echo "<pre>";
			 print_r($filename);
			 echo "</pre>";
			// echo "<pre>";
			// print_r("this is ".$newfilename);
			// echo "</pre>";
			
			// $query="INSERT INTO picture SET picturefile='".$picarray['image']['name'][$i];.',companyID='$id'";
			// die($query);
			
			// foreach ($picarray as $key => $value) {
			// 	# code...
			// }

			// if ($conve_ext!='jpeg'  && $conve_ext!='png' && $conve_ext!='jfif' && $conve_ext!='jpg'){
			// $feedback['error']=$filename." is an unsupported file type, your image must be a jpeg, jfif, png or jpg";
			// if (!empty($feedback['error'])) {
			// 	return( $feedback);
			// 	}
			// }

			// if ($size>20000000) {
			// $feedback['error']="File ".$filename." is too large";
			// if(!empty($feedback['error'])){
			// 	return $feedback;
			// 	}
			// } 

			// if ($acctype=='account') {
			// move_uploaded_file($tmp,$destination);
			//$query="INSERT INTO picture SET picturefile='$newfilename',companyID='$id'";
			// echo "<pre>";
			// //print_r($filename);
			// print_r($newfilename);
			// echo "</pre>";
			//die($query);
			// $this->conn->query($query);
			// $pic_id=$this->conn->insert_id;

			// $query1="INSERT INTO propertype SET category='$catergory',type='$propertype',bedroom='$bedroom'";
			// $this->conn->query($query1);
			// $ppty_id=$this->conn->insert_id;
			
			// $query2="INSERT INTO availableproperty SET location='$address',price='$price',more_info='$detail',propertypeID='$ppty_id',pictureID='$pic_id',companyID='$id'";
			// $this->conn->query($query2);

			// $feedback['status']="That was successfully";
			// return $feedback;
			// }


			// echo("<pre>");
			// print_r($destination);
			// echo("</pre>");

			
			// foreach ($picarray as $key => $value) {
			// 	foreach ($value as $key1 => $val) {
			// 		echo("<pre>");
			// 		print_r($val[$i]);
			// 		echo("</pre>");
			// 		$type=$val
			// 	}
				
			// }
		}
		die("total pic name is".$pictotal);

		$type=$picarray['image']['type'];
		$tmp=$picarray['image']['tmp_name'];
		$size=$picarray['image']['size'];
		$filename=$picarray['image']['name'];
		$extension=pathinfo($filename,PATHINFO_EXTENSION);
		$conve_ext=strtolower($extension);
		$newfilename=rand().time().'.'.$conve_ext;
		$destination="listing/$newfilename";
		
		if ($conve_ext!='jpeg' && $conve_ext!='png' && $conve_ext!='gif' && $conve_ext!='jpg'){
			$feedback['error']="Unsupported file";
			return $feedback;
		}
		if ($size>20000000) {
			$feedback['error']="File too large";
			return $feedback;
		} 
			
		if ($acctype=='account') {
			move_uploaded_file($tmp,$destination);
			$query="INSERT INTO picture SET picturefile='$newfilename',companyID='$id'";
			$this->conn->query($query);
			$pic_id=$this->conn->insert_id;

			$query1="INSERT INTO propertype SET category='$catergory',type='$propertype',bedroom='$bedroom'";
			$this->conn->query($query1);
			$ppty_id=$this->conn->insert_id;
			
			$query2="INSERT INTO availableproperty SET location='$address',price='$price',more_info='$detail',propertypeID='$ppty_id',pictureID='$pic_id',companyID='$id'";
			$this->conn->query($query2);

			$feedback['status']="That was successfully";
			return $feedback;
		}
			if ($acctype=='individual') {
				move_uploaded_file($tmp,$destination);
				$query="INSERT INTO picture SET picturefile='$newfilename',individualID='$id'";
				$this->conn->query($query);
				$pic_id=$this->conn->insert_id;

				$query1="INSERT INTO propertype SET category='$catergory',type='$propertype',bedroom='$bedroom'";
				$this->conn->query($query1);
				$ppty_id=$this->conn->insert_id;
				
				$query2="INSERT INTO availableproperty SET location='$address',price='$price',more_info='$detail',propertypeid='$ppty_id',pictureID='$pic_id',individualID='$id'";
				$this->conn->query($query2);

				$feedback['status']="That was successfully";
				return $feedback;

			}

		}
		function displayUserListing($acctype,$id){
			if ($acctype=='individual') {
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE picture.individualID='$id'";
				$result=$this->conn->query($query);
				$array=[];
				while ($get=$result->fetch_assoc()) {
					$array[]=$get;
				}return $array;
			}
			if ($acctype=='account') {
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE picture.companyID='$id'";
				$result=$this->conn->query($query);
				$array=[];
				while ($get=$result->fetch_assoc()) {
					$array[]=$get;
				}return $array;
			}

		}

		function displayOldValue($acctype,$querystring,$posterid){
			if ($acctype=='individual') {
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.propertypeID='$querystring' AND availableproperty.individualID = '$posterid'";
						$res=$this->conn->query($query);
						if ($res->num_rows>0) {
							$val=$res->fetch_assoc();
							return $val;
							}
			}
			if ($acctype=='account') {
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.propertypeID='$querystring' AND availableproperty.companyID = '$posterid'";
						$res=$this->conn->query($query);
						if ($res->num_rows>0) {
							$val=$res->fetch_assoc();
							return $val;
							}
			}
		}

		function editDisplayListing($form,$picarray,$avaid,$pptyid,$picid,$oldfilename){
		$catergory=$form['category'];
		$propertype=$form['propertype'];
		$bedroom=$form['bedroom'];
		$price=$form['price'];
		$address=$form['address'];
		$detail=strip_tags(addslashes(trim($form['detail'])));

		$type=$picarray['image']['type'];
		$tmp=$picarray['image']['tmp_name'];
		$size=$picarray['image']['size'];
		$filename=$picarray['image']['name'];
		$extension=pathinfo($filename,PATHINFO_EXTENSION);
		$conve_ext=strtolower($extension);
		$newfilename=rand().time().'.'.$conve_ext;
		$destination="listing/$newfilename";

		$feedback=['error'=>'','status'=>''];
		
		if ($conve_ext!='jpeg' && $conve_ext!='png' && $conve_ext!='gif' && $conve_ext!='jpg'){
			$feedback['error']="Unsupported file, Try Again";
			return $feedback;
		}
		if ($size>20000000) {
			$feedback['error']="File too large";
			return $feedback;
		}
		if (!empty($tmp)) {
			@unlink("listing/$oldfilename");
			move_uploaded_file($tmp,$destination);
			
		}
			$query2="UPDATE availableproperty SET location='$address',price='$price',more_info='$detail' WHERE availablepptyID='$avaid'";
			$this->conn->query($query2);

			$query1="UPDATE propertype SET category='$catergory',type='$propertype',bedroom='$bedroom' WHERE propertypeID='$pptyid'";
			$this->conn->query($query1);

			$query="UPDATE picture SET picturefile='$newfilename' WHERE pictureID='$picid'";
			$this->conn->query($query);

			$feedback['status']="That was Successfully !";
			return $feedback;
		}

			function profilepic($session,$img,$id){
			$type=$img['profilepic']['type'];
			$tmp=$img['profilepic']['tmp_name'];
			$size=$img['profilepic']['size'];
			$filename=$img['profilepic']['name'];
			$extension=pathinfo($filename,PATHINFO_EXTENSION);
			$conve_ext=strtolower($extension);
			$newfilename=rand().time().'.'.$conve_ext;
			$destination="profilepicture/$newfilename";

			$feedback=['error'=>'','status'=>'','picname'=>''];
			
			if ($conve_ext!='jpeg' && $conve_ext!='png' && $conve_ext!='gif' && $conve_ext!='jpg') {
				$feedback['error']='File not supported, please select either a jpeg, png, gif or jpg file type!';
				return $feedback;
			}
			
			if ($size >500000000) {
				$feedback['error']='File too large, profile picture can not be more than 5mb !';
				return $feedback;
			}
			move_uploaded_file($tmp, $destination);

			if ($session=='account') {
				$query="UPDATE realestatecompany SET profilepic='$newfilename' WHERE ID='$id'";
					$ress=$this->conn->query($query);
					
					if ($this->conn->error) {
						die("Encounter error while trying to change your profile picture, please try again !");
					}
				}

			if ($session=='individual') {
				$query="UPDATE individual SET profilepic='$newfilename' WHERE ID='$id'";
				
				$ress=$this->conn->query($query);
			
				if ($this->conn->error) {
					die("Encounter error while trying to change your profile picture, please try again !");
					}
				}

			if ($session=='prof') {
				$query="UPDATE professional SET profilepic='$newfilename' WHERE ID='$id'";
				
				$ress=$this->conn->query($query);
			
				if ($this->conn->error) {
					die("Encounter error while trying to change your profile picture, please try again !");
					}
			}

			if ($session=='nysc' || $session=='placement') {
				$query="UPDATE user_stu SET profilepic='$newfilename' WHERE userID='$id'";
				
				$ress=$this->conn->query($query);
			
				if ($this->conn->error) {
					die("Encounter error while trying to change your profile picture, please try again !");
					}
				}
	
			if ($session=='client') {
				$query="UPDATE client SET profilepic='$newfilename' WHERE clientID='$id'";
				
				$ress=$this->conn->query($query);
			
				if ($this->conn->error) {
					die("Encounter error while trying to change your profile picture, please try again !");
					}
				}
				$feedback['status']='Picture uploaded successfully !';
				$feedback['picname']=$newfilename;
				return $feedback;
		}
			
			

		function editprofit($session,$form,$id){
			$name=$form['name'];
			$address=$form['address'];
			$phoneno=$form['phoneno'];
			$email=$form['mail'];
			$bio=$form['bio'];

		if ($session=='account') {
			$query="UPDATE realestatecompany SET name='$name',address='$address',phonenumber='$phoneno',email='$email',bio='$bio' WHERE ID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$chk=$this->conn->insert_id;
			if ($chk=true) {
				return $chk;
			}
			return $chk;
			}


			if ($session=='individual') {
			$query="UPDATE individual SET name='$name',address='$address',phonenumber='$phoneno',email='$email',bio='$bio' WHERE ID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$chk=$this->conn->row_count;
			if ($chk=true) {
				return $chk;
			}
			return $chk;
			}

			if ($session=='prof') {
			$query="UPDATE professional SET name='$name',address='$address',phonenumber='$phoneno',email='$email',bio='$bio' WHERE profID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$chk=$this->conn->insert_id;
			if ($chk=true) {
				return $chk;
			}
			return $chk;
			}

			if ($session=='nysc' || $session=='placement') {
			$query="UPDATE user_stu SET name='$name',address='$address',phonenumber='$phoneno',email='$email',bio='$bio' WHERE userID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !");
			}
			$chk=$this->conn->insert_id;
			if ($chk=true) {
				return $chk;
			}
			return $chk;
			}

			if ($session=='client') {
			$query="UPDATE client SET name='$name',address='$address',phonenumber='$phoneno',email='$email',bio='$bio' WHERE clientID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die("Encounter error while saving your information, please try again !".$this->conn->error);
			}
			$chk=$this->conn->insert_id;
			if ($chk=true) {
				return $chk;
			}
			return $chk;
			}
		}

		function placement($session,$form,$id){
			$name=$form['name'];
			$address=$form['add'];
			$phoneno=$form['phoneno'];
			$email=$form['email'];
			$school=$form['school'];
			$course=$form['course'];			
			$grade=$form['grade'];
			$write=$form['write'];
			$date=$form['date'];

			$query1="UPDATE user_stu SET name='$name',address='$address',phonenumber='$phoneno',email='$email' WHERE userID='$id'";
			$this->conn->query($query1);

			if ($session=='nysc') {

				$query2="INSERT INTO placement SET user_id='$id',course='$course',grade='$grade',selfwriteup='$write',school='$school',start_date='$date'";

				$res=$this->conn->query($query2);
				if ($this->conn->error) {
					die("Encounter error while saving your information, please try again !");
				}
				$chk=$this->conn->insert_id;
		
				if ($chk>0) {
					return $chk;
				}
				return $chk;
			
				}else{

				$query2="INSERT INTO placement SET user_id='$id',course='$course',cgp='$grade',selfwriteup='$write',school='$school',start_date='$date'";
				$res=$this->conn->query($query2);
				if ($this->conn->error) {
					die("Encounter error while saving your information, please try again !");
				}
				$chk=$this->conn->insert_id;
				if ($chk>0) {
					return $chk;
				}
				return $chk;	
			}
		}

		function editPlacement($session,$form,$id,$placeid){
			$name=$form['name'];
			$address=$form['add'];
			$phoneno=$form['phoneno'];
			$email=$form['email'];
			$school=$form['school'];
			$course=$form['course'];			
			$grade=$form['grade'];
			$write=$form['write'];
			$date=$form['date'];

			$query1="UPDATE user_stu SET name='$name',address='$address',phonenumber='$phoneno',email='$email' WHERE userID='$id'";
			$this->conn->query($query1);

			if (!empty($grade)) {

				$query2="UPDATE placement SET user_id='$id',course='$course',grade='$grade',selfwriteup='$write',school='$school',start_date='$date' WHERE placementID='$placeid'";

				$res=$this->conn->query($query2);
				if ($this->conn->error) {
					die("Encounter error while saving your information, please try again !");
				}
				$chk=$this->conn->insert_id;
			die("i dey here".$chk);
				if ($chk>0) {
					return $chk;
				}
				return $chk;
			
				}else{

				$query2="UPDATE placement SET user_id='$id',course='$course',grade='$grade',selfwriteup='$write',school='$school',start_date='$date' WHERE placementID='$placeid'";
				$res=$this->conn->query($query2);
				if ($this->conn->error) {
					die("Encounter error while saving your information, please try again !");
				}
				$chk=$this->conn->insert_id;
				if ($chk>0) {
					return $chk;
				}
				return $chk;	
			}
		}
	}

?>