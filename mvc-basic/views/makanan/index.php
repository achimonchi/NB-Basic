<?php 
require './../../controllers/makanan.controller.php';
$makanan = new MakananController();
$data = $makanan->getAll();
?>

<?php require('./../templates/header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Makanan</h2>
            <div class="row">
                <div class="col-md-12">
                    <a href="add.php" class="btn btn-sm btn-primary mb-3">Tambah</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        <?php foreach($data['makanan'] as $makanan) : ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <td><?= $makanan['mk_nama'] ?></td>
                                <td><?= $makanan['mk_harga'] ?></td>
                                <td><?= $makanan['mk_deskripsi'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL.'makanan/update.php?id='.$makanan['_id'] ?>" class="btn btn-sm btn-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('./../templates/footer.php') ?>