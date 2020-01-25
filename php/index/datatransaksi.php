<?php
$title = 'Admin';
include "../template/templateheaderprofile.php";
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
include "../template/templatesidebarprofile.php";
include "../logic/transaksi.php";
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
          <h1 class="h3 mb-4 text-center text-gray-800" style="font-size:40px;">Data Transaksi</h1>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    <?php foreach($produks as $produk) { ?>
                        <tr class="text-center">
                            <th scope="row"><?= $no++;?></th>
                            <td><?= $produk['nama_produk'];?></td>
                            <td><?= $produk['nama_user'];?></td>
                            <td><?= $produk["harga"];?></td>
                            <td><?= $produk['total']?></td>
                            <td>
                            <a class="btn btn-warning" href="detailtransaksi.php?id=<?= $produk['id_transaksi']?>">detail</a>
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