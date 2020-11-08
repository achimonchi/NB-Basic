<?php

require './../config/db.php';

class Db{
    function __construct(){
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->conn->connect_error){
            echo "Failed to connect to MySQL: " . $this->conn->connect_error;
            exit();
        }
    }    
}