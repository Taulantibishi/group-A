<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $error_input=[];


        // Pershkrimi i detyres
        if(isset($_POST['pershkrimi'])&&!empty($_POST['pershkrimi'])){
            $pershkrimi=htmlspecialchars(strip_tags(trim($_POST['pershkrimi'])));
            if(mb_strlen($pershkrimi)<3){
               $error_input[]="Pershkrimi duhet te kete se paku 3 karaktere";
            }
           }
           else{
               $error_input[]="Fusha e pershlrimit duhet te plotesohet";
       
           }

           // data_fillimit
if(isset($_POST['data_fillimit']) && !empty($_POST['data_fillimit'])){
    $data_fillimit = htmlspecialchars(strip_tags(trim($_POST['data_fillimit'])));
    
    // kontrollo formatin YYYY-MM-DD
    if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $data_fillimit)){
    $error_input[] = "Data e fillimit nuk esht ne formatin e duhur (YYYY-MM-DD)";
    }
    }
    else{
    $error_input[] = "Fusha e dates se fillimit duhet te plotesohet";
    }

    // data_perfundimit
if(isset($_POST['data_perfundimit']) && !empty($_POST['data_perfundimit'])){
    $data_perfundimit = htmlspecialchars(strip_tags(trim($_POST['data_perfundimit'])));
    
    // kontrollo formatin YYYY-MM-DD
    if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $data_perfundimit)){
    $error_input[] = "Data e perfundimit nuk eshte ne formatin e duhur (YYYY-MM-DD)";
    }
    }
    else{
    $error_input[] = "Fusha e dates se perfundimit duhet te plotesohet";
    }


}





?>