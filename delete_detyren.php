<?php 

include_once("classes/Detyra.php");

$id=$_GET['id'];
$detyra= new Detyra();
$detyrat=$detyra->deleteDetyra($id);


?>

