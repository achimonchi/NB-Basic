<?php

require './../../models/Db.php';

class TransaksiModel 
{
    function __construct()
    {
        $this->db = new Db();
    }

    function get_all($table)
    {

        $query = "SELECT * FROM $table  
        JOIN meja ON meja._id = $table.fk_meja
        JOIN makanan ON makanan._id = $table.fk_makanan";

        $data = $this->db->get_query($query);

        return $data;
    }

    function get_table($table)
    {
        return $this->db->get($table);
    }
}