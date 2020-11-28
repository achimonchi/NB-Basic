<?php
    require './../../controllers/makanan.controller.php';
    $makanan = new MakananController();

    $insert = $makanan->insertMakanan();
    if($insert){
        echo "<script>
            alert('Tambah berhasil !')
        </script>";
    } else {
        echo "<script>
            alert('Tambah Gagal !')
        </script>";
    }
?>

<?php require('./../templates/header.php') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3>Tambah Menu</h3>
            <div class="row">
                <div class="col-md-4">
                    <form method="POST">
                        <label for="">Nama Makanan</label>
                        <input type="text" class="form-control mb-3" name="mk_nama">
                        <label for="">Harga Makanan</label>
                        <input type="number" min="0" class="form-control mb-3" name="mk_harga">
                        <label for="">Deskripsi</label>
                        <textarea name="mk_deskripsi" class="form-control mb-3" id="" cols="30" rows="10"></textarea>
                        <button type="submit" name="tambahMakanan" class="btn btn-primary btn-block btn-sm">Tambah Makanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('./../templates/footer.php') ?>