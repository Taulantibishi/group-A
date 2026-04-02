<?php

if($_SERVER['REQUEST_METHOD']=="POST"){


    $errors=[];

//emri
    if(isset($_POST['emri']) && !empty($_POST['emri'])){

        $emri=htmlspecialchars(strip_tags(trim($_POST['emri'])));

        if(strlen($emri)<3){
            $errors[]="Emri duhet te jete me i gjate se  2 shkronja";
        }

    }else{ 
        $errors[]="Fusha e emrit duhet jete e plotesuar dhe e rregullt";
    }

//pershkrimi
if(isset($_POST['pershkrimi']) && !empty($_POST['pershkrimi'])){

    $pershkrimi=htmlspecialchars(strip_tags(trim($_POST['pershkrimi'])));

    if(strlen($pershkrimi)<8){
        $errors[]="Pershkrimit duhet te jete me i gjate se 8 shkronja";
    }

}else{
    $errors[]="Fusha e pershkrimit duhet jete e plotesuar dhe e rregullt";
}

// data_fillimit

if(isset($_POST['data_fillimit']) && !empty($_POST['data_fillimit'])){

    $data_fillimit=htmlspecialchars(strip_tags(trim($_POST['data_fillimit'])));

}else{
    $errors[]="Data e fillimit duhet jete e zgjedhur korrektesisht";
}



// data_fillimit

if(isset($_POST['data_perfundimit']) && !empty($_POST['data_perfundimit'])){

    $data_perfundimit=htmlspecialchars(strip_tags(trim($_POST['data_perfundimit'])));

    if($data_perfundimit<$data_fillimit){

        $errors[]="Datat e perfundimit duhet te jete me e madhe se e fillimit";

    }


}else{
    $errors[]="Data e perfundimit duhet jete e zgjedhur korrektesisht";
}


if(count($errors)>0){

    foreach($errors as $error){
        echo "<p>$error</p>";
    }

}else{

    include_once("classes/Detyra.php");
    $detyra=new Detyra();
    $detyra->addTask($emri, $pershkrimi, $data_fillimit, $data_perfundimit);

}




}