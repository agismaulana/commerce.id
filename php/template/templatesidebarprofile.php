    
    <?php             
    include "../template/user.php";
    ?>

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#fe9612;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../template/profile.php">
        <div class="sidebar-brand-text mx-3">Profil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="../template/profile.php">
        <i class="fas fa-fw fa-user-tie"></i>
        <span><?= $datauser['nama'];?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-chart-area"></i>
        <span>Data User</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../index/pesanan.php">Data Pesan</a>
            <a class="collapse-item" href="../index/datatransaksi.php">Data Transaksi</a>
        </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->