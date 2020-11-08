<?php

require './../controllers/user.controller.php';
$user = new UserController();  
$data = $user->getAll();
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
        <?php foreach($data as $d): ?>
            <li><?= $d['a_nama'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>