<?php
require_once './../../controllers/home.controller.php';
$user = new HomeController();
?>

<?php require './../templates/home/header.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-white">
                <h3 class="text-center">Login</h3>
                <form method="POST">
                    <label for="">username</label>
                    <input type="text" class="form-control mb-3" placeholder="username ..." name="username">
                    <label for="">password</label>
                    <input type="password" placeholder="*****" class="form-control mb-3" name="password">
                    <button class="btn btn-success btn-sm btn-block" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['login'])){
    $login = $user->login();
    // $hashPassword = '$2y$10$tvKfwko55.HoxB4w6SeZUuuTuOTTZ99.4DHkh3P2amMVtsrzZjOIq';
    // $password = $_POST['password'];
    // if(password_verify($password, $hashPassword)){
    //     echo "TRUE";
    // } else {
    //     echo "FALSE";
    // }
    // echo json_encode(array("username"=>$_POST['username'], "password"=>$_POST['password']));
}

?>

<?php require './../templates/home/footer.php' ?>