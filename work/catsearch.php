<?php
include 'App.php';
$accesss=new App;
$access=$accesss->searchByCat($_POST['use']);

foreach($access as $value){
    $picname=$value['picturefile'];
    $cat=strtoupper($value['category']);
    $price= number_format($value['price'],2);
    $type=$value['type'];
    $comp=$value['companyID'];
    $indi=$value['individualID'];
    $title=$value['pictureID'];
    $data=$value['availablepptyID'];

    if($value['individualID']==''){
        echo"
        <div class=\"card col-md-3 pb-2\" style=\"width: 18rem;border: 1px solid black\">
        <img class=\"card-img-top img-fluid imging\" src=\"listing/$picname\" height=\"210px\" alt=\"property image\" title=\"$title\" data-availablepptyid=\"$data\">
        <h5 class=\"card-title text-center alert alert-dark\">$cat</h5>
        <p class=\"card-text font-weight-bold\">Price: &#8358;$price</p>
        <p class=\"card-text font-weight-bold\">Property type: $type</p>
        <a href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-comp=\"$comp\" data-ind=\"companyID\">POSTER INFORMATION</a>
        </div>
        ";
    }else{
        echo"        
        <div class=\"card col-md-3 pb-2\" style=\"width: 18rem;border: 1px solid black\">
        <img class=\"card-img-top img-fluid imging\" src=\"listing/$picname\" height=\"210px\" alt=\"property image\" title=\"$title\" data-availablepptyid=\"$data\">
        <h5 class=\"card-title text-center alert alert-dark\">$cat</h5>
        <p class=\"card-text font-weight-bold\">Price: &#8358;$price</p>
        <p class=\"card-text font-weight-bold\">Property type: $type</p>
        <a href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-comp=\"$indi\" data-ind=\"individualID\">POSTER INFORMATION </a>
        </div>
        ";
    }
}