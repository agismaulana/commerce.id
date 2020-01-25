<?php 
    $title = "Pesanan";
    include "../template/templateheaderprofile.php";
    include "../template/templatesidebarprofile.php";
    include "../logic/logicpesanan2.php";
    include "../logic/logicpembayaran.php";  
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <?php
            include "../template/navbar.php";
        ?>

        <div class="container">
            <h1>Pembayaran</h1>
            <p>Untuk Pembayaran Via Transfer Bank Silahkan Kolektipkan Foto Struktur Nya Disini</p>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="file" class="mb-3">
                <br>
                <button name="tombol" class="btn btn-primary mb-3">Kirim</button>
            </form>
            <p>Setelah Itu Tunggu Konfirmasi Admin</p>
        </div>

        <?php 
        
        include "../template/footer.php";
        
        ?>

    </div>
    <!-- End of Main Content -->
<?php
    include "../template/modallogout.php";
    include "../template/templatefooter.php";      
      
?>