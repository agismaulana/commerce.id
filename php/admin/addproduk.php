<?php
session_start();
$title = 'Admin';
include "../template/templateheaderadmin.php";
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
include "../template/templatesidebar.php";
include "../logic/logicaddproduk.php";
include "../template/navbar.php"
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-center text-gray-800" style="font-size:40px;">Tambah Produk</h1>

          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="kode">Kode Produk</label>
              <input type="text" name="kode" class="form-control col-md-4">
            </div>
            <div class="form-group">
              <label for="name">Nama Produk</label>
              <input type="text" name="nama" class="form-control col-md-4">
            </div>
            <div class="form-group">
              <label for="harga">Harga Produk</label>
              <input type="text" name="harga" class="form-control col-md-4">
            </div>
            <div class="form-group">
              <label for="Stok">Stok Produk</label>
              <input type="number" name="stok" class="form-control col-md-4">
            </div>
            <div class="form-group">
              <select name="kategori" class="custom-select col-md-4" id="kategori">
                <option selected>Pilih Kategori</option>
                <?php 
                
                $kategoris = mysqli_query($conn,"SELECT * FROM kategori");
                
                ?>
                <?php foreach ($kategoris as $kategori) : ?>
                <option value="<?= $kategori['id'];?>"><?= $kategori['nama'];?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="form-group">
              <select name="kondisi" class="custom-select col-md-4" id="kondisi">
                <option selected>Pilih Kondisi</option>
                <option value="baru">Baru</option>
                <option value="bekas">Bekas</option>
              </select>
            </div>
            <div class="form-group">
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group">
                  <textarea class="form-control col-md-4" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
            </div>
            <button name="tombol" class="btn btn-primary">Tambah</button>
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