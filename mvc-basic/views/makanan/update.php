<?php
require './../../controllers/makanan.controller.php';
$makanan = new MakananController();

    if(isset($_GET['id'])){
        $detail = $makanan->detailMakanan($_GET['id']);
    } else {
        $detail = false;
    }
?>

<?php require('./../templates/header.php') ?>

<?php if($detail === false) : ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Harap masukkan ID terlebih dahulu</h3>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Update Menu</h3>
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST">
                            <label for="">Nama Makanan</label>
                            <input value="<?= $detail['detail']['mk_nama'] ?>" type="text" class="form-control mb-3" name="mk_nama">
                            <label for="">Harga Makanan</label>
                            <input value="<?= $detail['detail']['mk_harga'] ?>" type="number" min="0" class="form-control mb-3" name="mk_harga">
                            <label for="">Deskripsi</label>
                            <textarea name="mk_deskripsi" class="form-control mb-3" id="" cols="30" rows="10"><?= $detail['detail']['mk_deskripsi'] ?></textarea>
                            <button type="submit" name="tambahMakanan" class="btn btn-primary btn-block btn-sm">Tambah Makanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php require('./../templates/footer.php') ?>