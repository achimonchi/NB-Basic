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

    function insert_data($table, $data)
    {
        $query = "INSERT INTO $table (a_nama, a_username, a_password) VALUES('$data[a_nama]','$data[a_username]','$data[a_password]')";
        return $this->db->insert($query);
    }

}