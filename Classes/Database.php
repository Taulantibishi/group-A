<?php

class Database{

    protected $servername="localhost";
    protected $username="root";
    protected $password="";
    protected $db_name="to_do_list";
    public $conn;

    public function __construct(){

        $this->conn=new mysqli($this->servername, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){

            die('ka probleme');
        }else{
            // echo 'mire';
        }
  

    }

}






