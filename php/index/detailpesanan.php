<?php 
    $title = "Detail Pesanan";
    include "../template/templateheaderprofile.php";
    include "../template/templatesidebarprofile.php";
    include "../logic/logicpesanan2.php"; 
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
                <img src="../../img/produk/<?= $pesan['image'];?>" class="card-img" style="width:100%;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title"><?= $pesan['nama_produk']?></h1>
                  <hr>
                  <h2 class="card-text">Rp. <?= $pesan['harga'];?></h2>
                  <hr>
                  <div class="card-text row" style="font-size:20px;">
                    <div class="col-md-2 mr-auto">Jumlah <?= $pesan['jumlah']?></div>
                    <div class="col-md-4 ml-auto">Total Rp.<?= $pesan['total']?></div>
                  </div>
                  <hr>
                  <div class="card-text" style="font-size:20px;">
                    <p><?= $pesan['status']?></p>
                  </div>
                  <hr>
                  <div class="card-button">
                    <a href="../index/hapuspesanan.php?id=<?= $pesan['id_pesan'];?>" class="btn btn-danger">Hapus</a>
                    <a href="../index/pembayaran.php?id=<?= $pesan['id_pesan'];?>" class="btn btn-primary">Bayar</a>
                  </div>
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