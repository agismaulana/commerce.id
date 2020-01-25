<div class="jumbotron fluid-jumbotron" style="background:#111;margin-bottom:0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <h3 style="color:#fff;font-weight:bold;">Contact</h3>
                <ul class="text-left" style="list-style:none;">
                    <li>
                        <i class="">Kp.Ciledug Kec Cikeusal Kab Tasikmalaya</span></i>
                    </li>
                    <li>
                        <i class="fas fa-phone" aria-hidden="true"> ( +62 ) 852 208 938 28</i>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <h3 style="color:#fff;font-weight:bold;">Information</h3>
                <ul class="text-left" style="list-style:none;"> 
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;">About Us</a>
                        </i>
                    </li>
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;">Contact Us</a>
                        </i>
                    </li>
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;">FAQ's</a>
                        </i>
                    <li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <h3 style="color:#fff;font-weight:bold;">Category</h3>
                <ul class="text-left" style="list-style:none;">
                    <?php $kategoris = mysqli_query($conn,"SELECT * FROM kategori");?>
                    <?php foreach($kategoris as $kategori) :?>
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;"><?= $kategori['nama'];?></a>
                        </i>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <h3 style="color:#fff;font-weight:bold;">Profile</h3>
                <ul class="text-left" style="list-style:none;"> 
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;">My Cart</a>
                        </i>
                    </li>

                    <?php if(!isset($_SESSION['login'])) : ?>
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;">Login</a>
                        </i>
                    </li>
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;">Create Account</a>
                        </i>
                    </li>
                    <?php else : ?>
                    <li>
                        <i class="fa fa-arrow-right" aria-hidden="true" style="color:#fe9612;">
                            <a class="text-light" href="#" style="text-decoration:none;"><?= $datauser['nama'];?></a>
                        </i>
                    </li>
                    <?php endif;?>
                    <li>
                        <?php 
                            include "../template/social.php";
                        ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>