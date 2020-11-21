<?php

require './../models/user.models.php';
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
}

?>