<?php
include"App.php";
$use=new App;
$rtn=$use->searchProperty($_POST);
$one=$_POST['cat'];
$onee=$_POST['search'];
$oneee=$_POST['pptytype'];
$oneeee=$_POST['budget'];
$oneeeee=$_POST['bedroom'];

foreach($rtn as $value){
    
    $picname=$value['picturefile'];
    $cat=strtoupper($value['category']);
    $price= number_format($value['price'],2);
    $type=$value['type'];
    $comp=$value['companyID'];
    $indi=$value['individualID'];

    if($value['individualID']==''){
        echo"
        <div class=\"card col-3 pb-2 returnSearch\" style=\"width: 18rem;border: 1px solid black\">
        <img class=\"card-img-top\" src=\"listing/$picname\" height=\"210px\" alt=\"property img\">
        <h5 class=\"card-title text-center alert alert-dark\">$cat</h5>
        <p class=\"card-text font-weight-bold\">Price: &#8358;$price</p>
        <p class=\"card-text font-weight-bold\">Property type: $type</p>
        <a href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-comp=\"$comp\" data-ind=\"companyID\">More Information </a>
        </div>
        ";
    }else{
        echo"        
        <div class=\"card col-3 pb-2 returnSearch\" style=\"width: 18rem;border: 1px solid black\">
        <img class=\"card-img-top\" src=\"listing/$picname\" height=\"210px\" alt=\"property img\">
        <h5 class=\"card-title text-center alert alert-dark\">$cat</h5>
        <p class=\"card-text font-weight-bold\">Price: &#8358;$price</p>
        <p class=\"card-text font-weight-bold\">Property type: $type</p>
        <a href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-comp=\"$indi\" data-ind=\"individualID\">More Information </a>
        </div>
        ";
    }
}

?>