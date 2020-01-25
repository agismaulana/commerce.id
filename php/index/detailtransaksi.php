<?php
$title = "detailtransaksi";
include "../template/templateheaderprofile.php";
include "../template/templatesidebarprofile.php";
include "../logic/logictransaksi2.php";
    


?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <?php
        include "../template/navbar.php";
      ?>

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 1040px;">
                <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../../img/produk/<?= $transaksi['image'];?>" class="card-img" style="width:100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h1 class="card-title"><?= $transaksi['nama_produk']?></h1>
                    <hr>
                    <h2 class="card-text"><?= $transaksi['nama_user'];?></h2>
                    <hr>
                    <div class="card-text row" style="font-size:20px;">
                        <div class="col-md-2 mr-auto">Jumlah <?= $transaksi['jumlah']?></div>
                        <div class="col-md-4 ml-auto">Total Rp.<?= $transaksi['total']?></div>
                    </div>
                    <hr>
                    <?php if($transaksi['id_status'] == 1) : ?>
                    <div class="card-text" style="font-size:20px;">
                        <p><?= $transaksi['status']?></p>
                    </div>
                    <?php else : ?>
                    <div class="card-text" style="font-size:20px;">
                        <p><?= $transaksi['status']?></p>
                        <p>Tunggu Konfirmasi Admin!!!</p>
                    </div>
                    <?php endif; ?>
                    </div>
                </div>
                </div>
            </div>
        </div>       

        </div>
        <!-- /.container-fluid -->

        <!-- Main Content -->
        <div id="content"></div>

        <?php 

        include "../template/footer.php";

        ?>

        </div>
        <!-- End of Main Content -->
<?php
    include "../template/modallogout.php";
    include "../template/templatefooter.php";      

?>