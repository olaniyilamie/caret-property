<?php
	class App{

		public $conn;

		public function __construct(){
			$this->conn= new mysqli("localhost","root","","caret_ppty");
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center ASAP!");
			}
			session_start();
		}

		public function displayListing(){
			$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID";
			$res=$this->conn->query($query);
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center !");
			}
			$array=[];
			while($result=$res->fetch_assoc()){
				$array[]=$result;
				
			}return $array;
			
		}

		public function agent($id){
			$query="SELECT * FROM individual WHERE ID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center !");
			}
			$result=$res->fetch_assoc();				
			return $result;
		}

		public function company($id){
			$query="SELECT * FROM realestatecompany WHERE ID='$id'";
			$res=$this->conn->query($query);
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center !");
			}
			$result=$res->fetch_assoc();				
			return $result;

		}

		public function displayPlacementAdvert(){
			$query="SELECT * FROM placement JOIN user_stu ON placement.user_id=user_stu.userID";
			
			$res=$this->conn->query($query);
		
			$call=[];

			while ($col=$res->fetch_assoc()) {
				$call[]=$col;
			}
			return $call;


		}

		public function indexgallery(){
			$query="SELECT * FROM `picture` LIMIT 4 OFFSET 8";
			$res=$this->conn->query($query);
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
			$res=[];
			while ($col=$ress->fetch_assoc()){
				$res[]=$col;
			}
			return $res;
			
		}
		public function placementSearchByFliter($course){
			$query="SELECT * FROM placement JOIN user_stu ON placement.user_id=user_stu.userID WHERE course='$course'";
			$res=$this->conn->query($query);		
			$call=[];
			while ($col=$res->fetch_assoc()) {
				$call[]=$col;
			}
			return $call;
		}
		public function placementSearchByFliter1($qualification){
			$query="SELECT * FROM placement JOIN user_stu ON placement.user_id=user_stu.userID WHERE qualification='$qualification'";
			$res=$this->conn->query($query);		
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
				if ($this->conn->connect_error) {
					die("There is a connection error, contact the web assistant center !");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			if($searc==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.type ='$pptytype' AND propertype.category='$catergory' AND propertype.bedroom ='$bedroom'";
				$res=$this->conn->query($query);
				if ($this->conn->connect_error) {
					die("There is a connection error, contact the web assistant center !");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			if($pptytype==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.category='$catergory' AND location LIKE '%$searc%' AND propertype.bedroom ='$bedroom'";
				$res=$this->conn->query($query);
				if ($this->conn->connect_error) {
					die("There is a connection error, contact the web assistant center !");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			if($bedroom==''){
				$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.category='$catergory' AND location LIKE '%$searc%' AND  propertype.type ='$pptytype'";
				$res=$this->conn->query($query);
				if ($this->conn->connect_error) {
					die("There is a connection error, contact the web assistant center !");
				}
				
				$array=[];
				while($result=$res->fetch_assoc()){
				$array[]=$result;	
				}return $array;
			}
			$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE propertype.category='$catergory' AND propertype.type ='$pptytype' AND location LIKE '%$searc%' AND propertype.bedroom ='$bedroom'";
			$res=$this->conn->query($query);
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center !");
			}
			
			$array=[];
			while($result=$res->fetch_assoc()){
			$array[]=$result;	
			}return $array;
		}
		public function searchByCat($cat){
			$query="SELECT * FROM availableproperty JOIN propertype ON availableproperty.propertypeID=propertype.propertypeID JOIN picture ON availableproperty.pictureID=picture.pictureID WHERE category='$cat'";
			$res=$this->conn->query($query);
			if ($this->conn->connect_error) {
				die("There is a connection error, contact the web assistant center !");
			}
			$array=[];
			while($result=$res->fetch_assoc()){
				$array[]=$result;
				
			}return $array;
		}



		public function gallery(){
				$query="SELECT picturefile FROM picture";
				$galley=$this->conn->query($query);
				$pic=[];
				while ($all=$galley->fetch_assoc()) {
					$pic[]=$all;
				}return $pic;

			}



		
	}

	
?>