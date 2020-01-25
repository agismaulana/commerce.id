<?php 
    $title = "Pesanan";
    include "../template/templateheaderprofile.php";
    include "../template/templatesidebarprofile.php";
    include "../logic/logicpesanan.php"; 
?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <?php
        include "../template/navbar.php";
      ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="container">
      
      <h1>Data Pesanan</h1>

        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">Nama Barang</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            <!-- <th scope="col">Harga Barang</th>
            <th scope="col">Jumlah Pesanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Status</th> -->
          </tr>
          </thead>
          <tbody>
          <?php foreach($pesans as $pesan) : ?>
          <tr>
            <td><?= $pesan['nama_produk'];?></td>
            <td><?= $pesan['nama_user'];?></td>
            <td><?= $pesan['alamat'];?></td>
            <td>
              <a class="btn btn-warning" href="detailpesanan.php?id=<?= $pesan['id_pesan']?>">Detail</a>
              <a class="btn btn-danger" href="hapuspesanan.php?id=<?= $pesan['id_pesan']?>">Hapus</a>
            </td>
            <!-- <td><?= $pesan['harga'];?></td>
            <td><?= $pesan['jumlah'];?></td>
            <td><?= $pesan['total'];?></td>
            <td><?= $pesan['status'];?></td> -->
          </tr>
          <?php endforeach;?>
          </tbody>
        </table>
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