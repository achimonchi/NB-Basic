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

    function get($table)
    {
        $query = "SELECT * FROM $table";
        $data = $this->conn->query($query);
        foreach($data as $d){
            $rows[] = $d;
        }
        return $rows;
    }

    function get_where($query)
    {
        $data = $this->conn->query($query);
        foreach($data as $d){
            $row= $d;
        }
        return $row;
    }

    function insert($query)
    {
        $data = $this->conn->query($query);
        // var_dump($query);
        return $data;
    }

    function update($query)
    {
        $data = $this->conn->query($query);
        // var_dump($query);
        return $data;
    }
}