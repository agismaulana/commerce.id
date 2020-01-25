  <?php 

  $title = "Keranjang";
  include "../logic/logickoneksi.php";
  include "../template/templateheader.php";
  if(!@($_SESSION['login'])){
    header('Location: ../auth/login.php');
  }

  include "../logic/logickeranjang.php";
  ?>
    
  <?php 
  include "../template/templatelogin.php";
  include "../template/templatenavbar.php";
  include "../template/templatenav.php";
  ?>

  <div class="container">
      <div class="panel tab-panel my-5" style="background:#aaa;">
          <div class="text-center" style="background:#fe9612;">
              <p class="font" style="font-size:30px;color:#fff;">
                  My Cart
              </p>
          </div>

          <div class="container">
              <div class="row">
                  <?php foreach($keranjangs as $keranjang) : ?>
                  <div class="col-md-4 my-3">
                      <div class="card mx-2">
                          <div class="card-title">
                              <img src="../../img/produk/<?= $keranjang['image']; ?>" style="width:100%;height:200px;">
                          </div>
                          <div class="card-body">
                              <h4 class="text-center" style="color:#111;">
                                  <?= $keranjang['nama_produk'];?>
                              </h4>
                              <p class="text-center" style="font-size:20px;">
                                  Rp.<?= $keranjang['harga'];?>
                              </p>
                              <div class="text-center d-flex justify-content-center">
                                <a class="btn btn-success text-light mr-2" href="pemesanan.php?id=<?= $keranjang['id']?>">Pesan</a>
                                <a class="btn btn-warning text-light mr-2" href="detailproduk.php?id=<?= $keranjang['id'];?>">Detail</a>
                                <a class="btn btn-danger" href="hapuskeranjang.php?id=<?= $keranjang['id'];?>">Hapus</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php endforeach;?>
              </div>

              <!-- <?php 

                  include "../template/templatepage.php";
              
              ?> -->
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