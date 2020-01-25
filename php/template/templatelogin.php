<div class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="container">
        <div class="navbar-brand">
            <p class="navbar-nav"> Enjoy Shopping.
                <sub>
                    <small><a style="color:#fe9126;text-decoration:none;" href="../index/index.php">SHOP NOW</a></small>
                </sub>
            </p>
        </div>
            
        <div class="navbar-brand ml-auto">
            <ul class="navbar-nav">
                <?php if(!isset($_SESSION['login'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/register.php" style="color:#fff;"> Create Account </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/login.php" style="color:#fff;">Login</a>
                </li>
                <?php else : ?>
                <?php 
                    include "../template/user.php";
                    include "../logic/logickeranjang.php";
                    
                ?>
                <div class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px;color:#fff;">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <img class="img-profile rounded-circle" src="../../img/profile/<?= $datauser['image']?>" style="width:30px;">
                    <?= $datauser['nama'];?>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../template/profile.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                        </a>
                    </div>
                </div>
                <?php endif;?>
                <li class="nav-item">
                    <?php if(isset($_SESSION['login'])) : ?>
                    <a class="nav-link" href="../index/keranjang.php" style="color:#fff;"> <i class="fas fa-cart-arrow-down"><sup class="badge" style="background:#fe9126;"><?= $jumlahKeranjangs?></sup></i> </a>
                    <?php else : ?>
                    <a class="nav-link" href="../index/keranjang.php" style="color:#fff;"> <i class="fas fa-cart-arrow-down"><sup class="badge badge-danger">0</sup></i> </a>
                    <?php endif;?>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>