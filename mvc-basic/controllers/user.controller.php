<?php

require './../models/user.models.php';
class UserController{

    function __construct(){
        $this->user = new UserModel();
    }
    
    function getAll(){
        $data = $this->user->get_all('admin');

        return $data;
    }
}

?>