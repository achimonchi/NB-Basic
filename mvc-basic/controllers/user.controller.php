<?php

require './../../models/user.models.php';
class UserController{

    function __construct(){
        $this->user = new UserModel();
    }
    
    function getAll(){
        $data['admin'] = $this->user->get_all('admin');

        return $data;
    }

    function insertData(){
        if(isset($_POST['insertAdmin'])){
            $value = array(
                "a_nama" => $_POST['nama'],
                "a_username" => $_POST['username'],
                "a_password" => $_POST['password'],
            );

            $data['insert'] = $this->user->insert_data("admin", $value);
            if($data['insert']){
                header("location:index.php");
            }
        }
    }

    function detail($id){
        $data['detail'] = $this->user->get_data_id("admin",$id);
        return $data;
    }

    function update(){
        if(isset($_POST['updateAdmin'])){
            $id = $_POST['_id'];
            $admin = [
                "a_nama" => $_POST['namaUpdate'],
                "a_username" => $_POST['usernameUpdate'],
                "a_password" => $_POST['passwordUpdate']
            ];

            $update = $this->user->update_data("admin", $admin, $id);
            if($update === true){
                header("location:index.php");
            } else {
                echo "<script>alert('Gagal Ubah Data')</script>";
            }
        }
    }

    function delete($id=""){
        if($id !== ""){
            $delete = $this->user->delete_data("admin", $id);
            if($delete){
                header("location:index.php");
            } else {
                echo "<script>alert('Gagal Ubah Data')</script>";
            }
        }
    }
}

?>