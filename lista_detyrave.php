<?php
include("header.php");
?>

<h3 class="h3 text-center mt-5">
    Lista Detyrave
</h3>

<div class="row mt-2">

<table class='table table-bordered'>

<thead>
    <tr>
        <th>#</th>  
        
        <th>Titulli Detyres</th>
        <th>Pershkrimi Detyres</th>
        <th>Data Fillimit</th>
        <th>Data Perfundmit</th>
        <th>Statusi</th>
        <th>Vepro</th>
    </tr>
</thead>

<tbody>
   <?php

include_once("classes/Detyra.php");

$detyra= new Detyra();
$detyrat=$detyra->getAllTasks();

foreach($detyrat as $det){
?>

<tr>
    <td><?php  echo $det['id']; ?></td>
    <td><?php echo  $det['titulli_detyres']; ?></td>
    <td><?php echo  $det['pershkrimi_detyres']; ?></td>
    <td><?php echo  $det['data_fillimit']; ?></td>
    <td><?php echo  $det['data_perfundimit']; ?></td>
    <td><span class=' btn btn-dark'><?php echo  $det['statusi']; ?></span></td>
    <td>
<a href="#" class="btn btn-outline-dark">Delete</a>
<a href="edit_detyren.php?id=<?php echo $det['id']; ?>" class="btn btn-dark">Edit</a>
    </td>
</tr>


<?php
}



?>
</tbody>


</table>


</div>

<?php
include("footer.php");
?>