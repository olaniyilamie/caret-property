<?php 
    include 'App.php';
	$use= new App;
	$get=$use->placementContactInfo($_SESSION['id']);
    $pid=$get['placementID'];
   $name=$get['name'];
   $address=$get['address'];
   $course=$get['course'];
   $email=$get['email'];
   $qua=$get['qualification'];
   if(!empty($get['cgp'])){
    $cgp=$get['cgp'];};
   if(!empty($get['grade'])){
    $grade=$get['grade'];};
    $school=$get['school'];
    $date=$get['start_date'];
    $writeup=$get['selfwriteup'];
    $phonenumber=$get['phonenumber'];
    if(!empty($grade)){
   echo"
        <div class=\"row\" style=\"border: 4px solid #D6D8D9\" >
        <div class=\"col-12\" >
            <h5>Edit your CV information carefully</h5>
            <p style=\"font-size: 11px;color: red\" class=\"mt-0\"> NOTE : This will replace your profile information on <span style=\"color: black\">Caret Property,</span> so if you are about to do this on behalf of someone, create an account for them instead.</p>
            <form class=\"form-group\">
            <input type=\"text\" name=\"name\" value=\"$name\" class=\"form-control form-control-sm mb-2\">
            <input type=\"mail\" name=\"email\" value=\"$email\" class=\"form-control form-control-sm mb-2\">
            <input type=\"number\" name=\"phoneno\" value=\"$phonenumber\"class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"add\" value=\"$address\"  class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"school\" value=\"$school\" class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"course\" value=\"$course\" class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"grade\" value=\"$grade\" class=\"form-control form-control-sm mb-2\">      
        </div>	
        <div class=\"col-2\">
            <label for=\"date\" style=\" border: 1px solid #D6D8D9;font-size: 13px\"  class=\"p-1\">INTERNSHIP START DATE</label>
        </div>
        <div class=\"col-10\">
            <input type=\"date\" id=\"date\"name=\"date\" value=\"$date\" class=\"form-control form-control-sm mb-2\">
        </div>
        <div class=\"col-12\">
            <p class=\"mb-0\"style=\"font-size: 8px\"> <span class=\"red\">*</span>Convince your employer in few sentences on why they should employ you.</p>
            <textarea class=\"form-control form-control-sm mb-2\" name=\"write\" id=\"ddiv\">$writeup</textarea>
            <button class=\"btn btn-sm btn-dark btn-block\" type=\"button\" data-pid=\"$pid\" id=\"savit\"> SAVE CHANGES</button>
        </form>
        </div>
        </div>	
   ";
    }
    if(!empty($cgp)){
        echo"
        <div class=\"row\" style=\"border: 4px solid #D6D8D9\" >
        <div class=\"col-12\" >
            <h5>Edit your CV information carefully</h5>
            <p style=\"font-size: 11px;color: red\" class=\"mt-0\"> NOTE : This will replace your profile information on <span style=\"color: black\">Caret Property,</span> so if you are about to do this on behalf of someone, create an account for them instead.</p>
            <form class=\"form-group\">
            <input type=\"text\" name=\"name\" value=\"$name\" class=\"form-control form-control-sm mb-2\">
            <input type=\"mail\" name=\"email\" value=\"$email\" class=\"form-control form-control-sm mb-2\">
            <input type=\"number\" name=\"phoneno\" value=\"$phonenumber\"class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"add\" value=\"$address\"  class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"school\" value=\"$school\" class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"course\" value=\"$course\" class=\"form-control form-control-sm mb-2\">
            <input type=\"text\" name=\"grade\" value=\"$cgp\" class=\"form-control form-control-sm mb-2\">
            </div>	
        <div class=\"col-2\">
            <label for=\"date\" style=\" border: 1px solid #D6D8D9;font-size: 13px\"  class=\"p-1\">INTERNSHIP START DATE</label>
        </div>
        <div class=\"col-10\">
            <input type=\"date\" id=\"date\"name=\"date\" value=\"$date\" class=\"form-control form-control-sm mb-2\">
        </div>
        <div class=\"col-12\">
            <p class=\"mb-0\"style=\"font-size: 8px\"> <span class=\"red\">*</span>Convince your employer in few sentences on why they should employ you.</p>
            <textarea class=\"form-control form-control-sm mb-2\" name=\"write\" id=\"ddiv\">$writeup</textarea>
            <button class=\"btn btn-sm btn-dark btn-block\" type=\"button\" data-pid=\"$pid\" id=\"savit\"> SAVE CHANGES</button>
        </form>
        </div>
        </div>
        ";
        
    }

?>
