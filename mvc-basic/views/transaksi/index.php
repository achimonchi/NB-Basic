<?php
    require "./../../controllers/transaksi.controller.php";

    $transaksi = new TransaksiController();

    $data = $transaksi->getAll();
    $meja = $transaksi->getMeja();
    $makanan = $transaksi->getMakanan();

?>

<?php require './../templates/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Transaksi</h3>
            <hr/>

            <div class="row">
                <?php foreach($makanan['makanan'] as $makanan) : ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <?= $makanan['mk_nama'] ?>
                                <div>
                                    <b><?= $makanan['mk_harga'] ?></b>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="<?= $makanan['_id'] ?>" data-toggle="modal" data-target="#pesanMakanan" class="btn btn-block btn-warning btn-sm btn-pesan">Pesan</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



<?php require './../templates/footer.php' ?>


<div class="modal fade" id="pesanMakanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $(".btn-pesan").click(function(e){
            
        })
    })
</script>