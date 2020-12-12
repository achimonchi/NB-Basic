<?php

require './../../models/user.models.php';

class HomeController
{
    function __construct()
    {
        $this->user = new UserModel();
    }

    function login()
    {
        if(isset($_POST['login'])){
            $user = $this->user->get_data_username("admin",$_POST['username']);
            $hashPassword = $user['a_password'];
            $password = $_POST['password'];
            if(password_verify($password, $hashPassword)){
                var_dump($user);
            } else {
                echo "FALSE";
            }

        }
    }
}