<?php
	class App{

		public $conn;

		public $url ;

		public function __construct(){
			$this->url= htmlspecialchars($_SERVER['HTTP_REFERER']);
			$this->conn= new mysqli("localhost","root","","caret_ppty");
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center ASAP!");
			}
			
		}

		public function displayListing(){
			$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
			$array=[];
			while($result=$res->fetch_assoc()){
				$array[]=$result;
				
			}return $array;
			
		}

		

		public function agent($id){
			$query="SELECT * FROM individual WHERE ID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
			$result=$res->fetch_assoc();				
			return $result;
		}

		public function company($id){
			$query="SELECT * FROM realestatecompany WHERE ID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
			$result=$res->fetch_assoc();				
			return $result;

		}

		public function displayPlacementAdvert(){
			$query="SELECT * FROM placement JOIN user_stu ON placement.user_id=user_stu.userID";
			
			$res=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
		
			$call=[];

			while ($col=$res->fetch_assoc()) {
				$call[]=$col;
			}
			return $call;


		}

		public function indexgallery(){
			$query="SELECT * FROM picture ORDER BY pictureID  DESC LIMIT 4 ";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
			$call=[];
			while ($col=$res->fetch_assoc()) {
				$call[]=$col;
			}
			return $call;
		}

		public function placementContactInfo($id){
			$query="SELECT * FROM user_stu JOIN placement ON user_stu.userID=placement.user_id  WHERE userID='$id'";
			$chk=$this->conn->query($query);
			$res=$chk->fetch_assoc();
			return $res;
		}

		public function placementSearchFliter(){
			$query="SELECT DISTINCT qualification FROM placement";
			$ress=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
			$res=[];
			while ($col=$ress->fetch_assoc()){
				$res[]=$col;
			}
			return $res;
			
		}
		public function placementSearchByFliter($course){
			$query="SELECT * FROM placement JOIN user_stu ON placement.user_id=user_stu.userID WHERE course='$course'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}	
			$call=[];
			while ($col=$res->fetch_assoc()) {
				$call[]=$col;
			}
			return $call;
		}
		public function placementSearchByFliter1($qualification){
			$query="SELECT * FROM placement JOIN user_stu ON placement.user_id=user_stu.userID WHERE qualification='$qualification'";
			$res=$this->conn->query($query);	
			if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}	
			$call=[];
			while ($col=$res->fetch_assoc()) {
				$call[]=$col;
			}
			return $call;
		}

		public function searchProperty($search){
			$catergory=$search['cat'];
			$searc=$search['search'];
			$pptytype=$search['pptytype'];
			$budget=$search['budget'];
			$bedroom=$search['bedroom'];
			
			if($catergory==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.type ='$pptytype' AND location LIKE '%$searc%' AND propertype.bedroom ='$bedroom'";
				$res=$this->conn->query($query);
				if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			if($searc==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.type ='$pptytype' AND propertype.category='$catergory' AND propertype.bedroom ='$bedroom'";
				$res=$this->conn->query($query);
				if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			if($pptytype==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.category='$catergory' AND location LIKE '%$searc%' AND propertype.bedroom ='$bedroom'";
				$res=$this->conn->query($query);
				if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			if($bedroom==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.category='$catergory' AND location LIKE '%$searc%' AND  propertype.type ='$pptytype'";
				$res=$this->conn->query($query);
				if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.category='$catergory' AND propertype.type ='$pptytype' AND location LIKE '%$searc%' AND propertype.bedroom ='$bedroom'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
			}
			
			$array=[];
			while($result=$res->fetch_assoc()){
			$array[]=$result;	
			}return $array;
		}
		public function searchByCat($cat){
			$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE category='$cat'";
			$res=$this->conn->query($query);
			if ($this->conn->error) {
				die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
			}
			$array=[];
			while($result=$res->fetch_assoc()){
				$array[]=$result;
				
			}return $array;
		}



		public function gallery(){
				$query="SELECT picturefile FROM picture";
				$galley=$this->conn->query($query);
				if ($this->conn->error) {
					die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go back</a></p>");
				}
				$pic=[];
				while ($all=$galley->fetch_assoc()) {
					$pic[]=$all;
				}return $pic;

		}

		public function eachListingInfo($id){
			$query="SELECT location,price,more_info,category,type,bedroom,companyID,individualID FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID WHERE availablepptyID = '$id'";
			$rquery=$this->conn->query($query);
			if ($this->conn->error) {
				die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back </a></p>");
			}
			$result=$rquery->fetch_assoc();
			return $result;
			

		}

		public function contactMessage($post){
			$fname=$post['fname'];
			$lname=$post['lname'];
			$email=$post['email'];
			$subject=$post['subject'];
			$detail=$post['detail'];

			$query="INSERT INTO contact_messages SET fname='$fname', lname='$lname', email='$email', subject='$subject', detail='$detail'";
			$rquery=$this->conn->query($query);
			if ($this->conn->error){
				//die(header("location:javascript://history.go(-1)"));
				die( "<h3 style=\"color:red;text-align:center;\">There is a connection error, contact the web assistant center !</h3><p style=\"text-align:center;\"><a href=\"$this->url\">Go Back</a></p>");
			}
			header("Location:contactus.php?stat=Received Successfully, We will get back to you shortly");
		}





		
	}

	
?>