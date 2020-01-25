<?php 
    $title = "Admin";
    include "../template/templateheaderadmin.php";
    include "../template/templatesidebar.php";    
?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <?php
        include "../template/navbar.php";
      ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-center text-gray-800" style="font-size:40px;">Welcome Admin</h1>

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