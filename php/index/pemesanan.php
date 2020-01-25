<?php 

$title = "Index";
include "../logic/logickoneksi.php";
include "../template/templateheader.php";
if(!@($_SESSION['login'])){
  header('Location: ../index/index.php');
}
?>
  
<?php 
include "../template/templatelogin.php";
include "../template/templatenavbar.php";
include "../template/templatenav.php";
include "../logic/logickeranjang2.php";
include "../logic/logicpesanproduk.php";
?>

    <div class="container my-5 d-flex">        
        <img src="../../img/produk/<?= $keranjang['image'];?>" class="mr-5" style="width:400px;min-height:200px;">
        <form action="" method="post" class="col-md-7">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" Value="<?= $keranjang['nama_produk']?>" class="form-control col-md" disabled>
            </div>
            <div class="form-group">
                <label for="nama">Harga Barang</label>
                <input type="text" name="harga" value="<?= $keranjang['harga']?>" class="form-control col-md" disabled>
            </div>
            <div class="form-group">
                <label for="nama">Jumlah Beli</label>
                <input type="number" name="jumlah" class="form-control col-md">
            </div>
            <div class="form-group">
            <label for="metode">Metode Pembayaran</label>
              <select name="pembayaran" class="custom-select" id="kategori">
                <option selected>Pilih Metode Pembayaran</option>
                <option value="1">Transfer Bank</option>
                <option value="1">COD</option>
              </select>
            </div>
            <button name="tombol" class="btn btn-danger">Pesan</button>
        </form>
    </div>

  
<?php 
include "../template/jumbotron.php";
include "../template/footer.php";
include "../template/modallogout.php";

?>
  
<?php 

include "../template/templatefooter.php";

?>