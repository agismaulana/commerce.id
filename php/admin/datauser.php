<?php
$title = 'Admin';
include "../template/templateheaderadmin.php";
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
}
include "../template/templatesidebar.php";
include "../logic/logicuser.php";
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
          <h1 class="h3 mb-4 text-center text-gray-800" style="font-size:40px;">Data User</h1>

            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">image</th>
                        <th scope="col">role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    <?php foreach($user as $uf) { ?>
                        <tr class="text-center">
                            <th scope="row"><?= $no++;?></th>
                            <td><?= $uf['nama'];?></td>
                            <td><?= $uf['email'];?></td>
                            <td><img src="../../img/profile/<?= $uf['image'];?>" style="width:100px;heigth:20px;"></td>
                            <td><?= $uf["namarole"];?></td>
                            <td>
                            <a class="btn btn-danger" href="hapususer.php">hapus</a>
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