<?php

require './../controllers/user.controller.php';
$user = new UserController();  
$data = $user->getAll();

$insert = $user->insertData();
$detail = [
    "detail" => [
        "_id" => "",
        "a_nama" => "",
        "a_password" => "",
        "a_username" => ""
    ]
];
if(isset($_GET['id'])){
    $detail = $user->detail($_GET['id']);
    if(isset($_GET['type'])){
        $type = $_GET['type'];
        if($type === "update"){
            if(isset($_POST['updateAdmin'])){
                $update = $user->update();
            }
        } else {
            $delete = $user->delete($_GET['id']);
        }
    }
}
?>
<?php require('./templates/header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Fluid jumbotron</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    <hr>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Form Tambah Data</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" placeholder="Masukkan nama kamu" class="form-control mb-3">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Username</label>
                                        <input class="form-control mb-3" type="text" name="username" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Password</label>
                                        <input class="form-control mb-3" type="password" name="password" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-sm" name="insertAdmin">Kirim</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-2">
                                <h3>Form Update Data</h3>
                                <div class="row">
                                    <input type="hidden" value="<?= $detail['detail']['_id'] ?>" name="_id">
                                    <div class="col-md-12">
                                        <label for="">Nama</label>
                                        <input type="text" name="namaUpdate" required value="<?= $detail['detail']['a_nama'] ?>" class="form-control mb-3">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Username</label>
                                        <input class="form-control mb-3" required value="<?= $detail['detail']['a_username'] ?>" type="text" name="usernameUpdate" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Password</label>
                                        <input class="form-control mb-3" required type="password" name="passwordUpdate" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-block btn-sm" name="updateAdmin">Ubah Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                    <?php foreach($data['admin'] as $d): ?>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <?= $d['a_nama'] ?>
                                    <div class="float-right">
                                        <a href="?id=<?= $d['_id'] ?>&type=update" class="btn btn-sm btn-success">Ubah</a>
                                        <a href="?id=<?= $d['_id'] ?>&type=delete" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require('./templates/footer.php') ?>