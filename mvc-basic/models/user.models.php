<?php

require './../../models/Db.php';

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

    function get_data_id($table, $id)
    {
        $query = "SELECT * FROM $table WHERE _id='$id'";
        $data = $this->db->get_where($query);
        return $data;
    }

    function get_data_username($table, $username)
    {
        $query = "SELECT * FROM $table WHERE a_username='$username'";
        $data = $this->db->get_where($query);
        return $data;
    }

    function insert_data($table, $data)
    {
        $query = "INSERT INTO $table (a_nama, a_username, a_password) VALUES('$data[a_nama]','$data[a_username]','$data[a_password]')";
        return $this->db->insert($query);
    }

    function update_data($table, $data, $id)
    {
        $query = "UPDATE $table SET a_nama='$data[a_nama]', a_username='$data[a_username]', a_password='$data[a_password]'  WHERE _id='$id'";
        $update = $this->db->update($query);
        return $update;
    }

    function delete_data($table, $id)
    {
        $query = "DELETE FROM $table WHERE _id='$id'";
        $delete = $this->db->delete($query);
        return $delete;
    }

}