<?php

include_once("Database.php");

class Detyra extends Database
{

    public function addTask($titulli, $pershkrimi, $data_fillimit, $data_perfundimit){

        // echo $titulli;
        // echo $pershkrimi;
        // echo $data_fillimit;
        // echo $data_perfundimit;


        $sql="INSERT into detyrat(titulli_detyres, pershkrimi_detyres, data_fillimit, data_perfundimit) values('$titulli', '$pershkrimi', '$data_fillimit', '$data_perfundimit')";

        $result=$this->conn->query($sql);

        if($result){

            echo "Te dhenat u ruajten me sukses </br>";
            echo "<a href='lista_detyrave.php'>Shiko Listen e Detyrave</a>";

        }else{
            // echo "nuk u rujten";
        }





    }

    public function getAllTasks(){

        $sql="SELECT * from detyrat";

        $result=$this->conn->query($sql);

        if($result->num_rows>0){

            return $result->fetch_all(MYSQLI_ASSOC);


        }



    }

    public function getTaskById($id){

        $sql="Select * from detyrat where id='$id'";

        $result=$this->conn->query($sql);

        if($result->num_rows>0){

            return $result->fetch_assoc();

        }


    }

        public function deleteDetyra($id);{
    
        $sql="delete  from detyrat  where id='$id' limit 1";
        $result=$this->conn->query($sql);
        if($result){
            echo'Te dhenat u fshin me sukeses';
        }
        else{
            echo"Te dhenat nuk u fshin !";
        }


    }




}