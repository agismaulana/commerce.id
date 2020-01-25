<?php
$title = 'Admin';
include "../template/templateheaderadmin.php";
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
include "../template/templatesidebar.php";
include "../logic/logicproduk.php";
include "../logic/logicUbahProduk.php";
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
<?php

include "../template/navbar.php"

?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-center text-gray-800" style="font-size:40px;">Edit Produk</h1>

          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="kode">Kode Produk</label>
              <input type="text" value="<?= $fetchproduk['kode_produk']?>" name="kode" class="form-control col-md-4" disabled>
            </div>
            <div class="form-group">
              <label for="name">Nama Produk</label>
              <input type="text" name="nama" value="<?= $fetchproduk['nama_produk']?>" class="form-control col-md-4" disabled>
            </div>
            <div class="form-group">
              <label for="harga">Harga Produk</label>
              <input type="text" name="harga" value="<?= $fetchproduk['harga']?>" class="form-control col-md-4">
            </div>
            <div class="form-group">
              <label for="Stok">Stok Produk</label>
              <input type="number" name="stok" class="form-control col-md-4" value="<?= $fetchproduk['stok']?>">
            </div>
            <button name="tombol" class="btn btn-primary">Edit</button>
          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
    include "../template/footer.php";
    include "../template/modallogout.php";
    include "../template/templatefooter.php";      
      
?>