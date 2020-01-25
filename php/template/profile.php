<?php 
    $title = "Profile";
    include "../template/templateheaderprofile.php";
    include "../template/templatesidebarprofile.php";    
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <?php
        include "../template/navbar.php";
      ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card d-flex" style="width:512px;">
            <div class="card-title">
              <img src="../../img/profile/<?= $datauser['image'];?>" class="img-rounded-circle" style="width:50%;height:200px;">
            </div>
            <div class="card-body">
              <p><?= $datauser['nama']?></p>
              <p><?= $datauser['address']?></p>
              <?php if($datauser['role_id'] == 1) : ?>
                <a class="btn btn-primary" href="../admin/admin.php">Kembali Ke Admin</a>
              <?php endif; ?>
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