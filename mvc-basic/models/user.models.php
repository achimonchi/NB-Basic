<?php

require './../models/Db.php';

class UserModel
{
    function __construct()
    {
        $this->db = new Db();
    }

    function get_all($table)
    {
        $data= $this->db->get($table);
        return $data;
    }

}