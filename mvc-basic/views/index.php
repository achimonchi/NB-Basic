<?php

require './../controllers/user.controller.php';
$user = new UserController();  
$data = $user->getAll();

$insert = $user->insertData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <ul>
        <?php foreach($data['admin'] as $d): ?>
            <li><?= $d['a_nama'] ?></li>
        <?php endforeach; ?>
    </ul>

    <br>
    <br>
    <form method="POST">
        <label for="">Nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">Username</label>
        <input type="text" name="username" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <br>
        <button type="submit" name="insertAdmin">Kirim</button>
    </form>
</body>
</html>