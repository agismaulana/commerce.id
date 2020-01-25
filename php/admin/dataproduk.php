<?php
$title = 'Admin';
include "../template/templateheaderadmin.php";
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
include "../template/templatesidebar.php";
include "../logic/logicproduk.php";
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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-center text-gray-800" style="font-size:40px;">Data Produk</h1>
            <a class="btn btn-primary my-2" href="addproduk.php">Tambah Data Produk</a>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Kode Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Image</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    <?php foreach($produks as $produk) { ?>
                        <tr class="text-center">
                            <th scope="row"><?= $no++;?></th>
                            <td><?= $produk['kode_produk'];?></td>
                            <td><?= $produk['nama_produk'];?></td>
                            <td><img src="../../img/produk/<?= $produk['image'];?>" style="width:100px;heigth:20px;"></td>
                            <td><?= $produk["harga"];?></td>
                            <td><?= $produk['stok']?></td>
                            <td>
                            <a class="btn btn-warning" href="ubahproduk.php?id=<?= $produk['id'];?>">Edit</a>
                            <a class="btn btn-danger" href="hapusproduk.php?id=<?= $produk['id'];?>" onclick="return confirm('yakin');">hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <?php 
            
            include "../template/templatepage.php";
            
            ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
    include "../template/footer.php";
    include "../template/modallogout.php";
    include "../template/templatefooter.php";      
      
?>