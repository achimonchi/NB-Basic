<?php

require './../models/Db.php';
class UserController{

    function __construct(){
        $db = new Db();
        $this->db = $db->conn;
    }
    
    function getAll(){
        $query = "SELECT * FROM admin";
        $data = $this->db->query($query);
        $rows = [];
        foreach($data as $d){
            $rows[] = $d;
        }
        return $rows;
    }
}