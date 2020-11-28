<?php

require './../../models/Db.php';

class MakananModel
{
    function __construct()
    {
        $this->db = new Db();
    }

    function get_all($table)
    {
        $data = $this->db->get($table);
        return $data;
    }

    function get_data_id($table, $id)
    {
        $query = "SELECT * FROM $table WHERE _id='$id'";
        $data = $this->db->get_where($query);
        return $data;
    }

    function insert_makanan($table, $data)
    {
        $query = "INSERT INTO $table (mk_nama, mk_harga, mk_deskripsi)
            VALUES('$data[mk_nama]', '$data[mk_harga]', '$data[mk_deskripsi]')
        ";

        return $this->db->insert($query);
    }
}