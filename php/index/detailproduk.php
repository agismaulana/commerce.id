  <?php 

  $title = "Index";
  include "../logic/logickoneksi.php";
  include "../template/templateheader.php";
  // if(!isset($_SESSION['login'])){
  //   header('Location: ../index/index.php');
  // }
  ?>
    
  <?php 
  include "../template/templatelogin.php";
  include "../template/templatenavbar.php";
  include "../template/templatenav.php";
  include "../logic/logicdetail.php";
  ?>

  <div class="container mt-5">
    <div class="card mb-3" style="max-width: 1040px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="../../img/produk/<?= $produk['image'];?>" class="card-img" style="width:100%;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h1 class="card-title"><?= $produk['nama_produk']?></h1>
            <hr>
            <h2 class="card-text">Rp. <?= $produk['harga'];?></h2>
            <hr>
            <div class="card-text row" style="font-size:20px;">
              <div class="col-md-2">Stok <br><?= $produk['stok'];?></div>
              <div class="col-md-2">Kondisi <br><?= $produk['kondisi']?></div>
              <div class="col-md">Deskripsi <br><?= $produk['deskripsi']?></div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <?php 
  include "../template/jumbotron.php";
  include "../template/footer.php";
  include "../template/modallogout.php";

  ?>
    
  <?php 

  include "../template/templatefooter.php";

  ?>