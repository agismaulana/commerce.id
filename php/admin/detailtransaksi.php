<?php
$title = 'Admin';
include "../template/templateheaderadmin.php";
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
include "../template/templatesidebar.php";
include "../logic/logictransaksi2.php";
?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

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
                        <div class="col-md">Jumlah <?= $transaksi['jumlah']?></div>
                        <div class="col-md">Total <?= $transaksi['total'];?></div>
                    </div>
                    <hr>
                    <div class="card-text" style="font-size:20px;"><?= $transaksi['status']?></div>
                    <hr>
                    <?php if($transaksi['id_status'] == 2) : ?>
                        <a class="btn btn-primary" href="konfirmasiadmin.php?id=<?= $transaksi['id_transaksi'];?>" onclick="return confirm('yakin');">Konfirmasi Admin</a>
                    <?php endif; ?>
                </div>
                </div>
            </div>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
    include "../template/footer.php";
    include "../template/modallogout.php";
    include "../template/templatefooter.php";      
      
?>