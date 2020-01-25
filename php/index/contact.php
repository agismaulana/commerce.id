<?php 

$title = "Index";
include "../logic/logickoneksi.php";
include "../template/templateheader.php";
// if(!isset($_SESSION['login'])){
//   header('Location: ../index/index.php');
// }
?>
  
<?php 
include "../template/templatelogin.php";
include "../template/templatenavbar.php";
include "../template/templatenav.php";
?>

    <div class="container my-3">
        <h1 class="text-center">Our Team</h1>
        <div class="row" style="font-size:20px;">
            <div class="col-md text-center">
                <img src="../../img/contact/cindi.jpg" class="img-thumbnail" style="width:100%;height:70%;border-radius:50%;">
                <div class="text-dark">
                    <h1>Ai Cindi Rahayu</h1>
                    <P>System Analysist</P>
                </div>
            </div>
            <div class="col-md text-center">
                <img src="../../img/contact/agis.jpg" class="img-thumbnail" style="width:100%;height:70%;border-radius:50%;">
                <div class="text-dark">
                    <h1>Agis Maulana</h1>
                    <P>Project Leader</P>
                </div>
            </div>
            <div class="col-md text-center">
                <img src="../../img/contact/agis.jpg" class="img-thumbnail" style="width:100%;height:70%;border-radius:50%;">
                <div class="text-dark">
                    <h1>Abdul Malik Ramdani</h1>
                    <P>It Support</P>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container my-5" style="font-size:20px;">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-3">
                <img src="../../img/contact/marketing.png" style="width:100%;height:200px;">
                <p>Marketing Online</p>
            </div>
            <div class="col-md-3">
                <img src="../../img/contact/brand.jpg" style="width:100%;height:200px;">
                <p>Brand Marketing</p>
            </div>
            <div class="col-md-3">
                <img src="../../img/contact/marketingStrategi.jpg" style="width:100%;height:200px;">
                <p>Strategi Marketing</p>
            </div>
        </div>
    </div>
<?php 
include "../template/jumbotron.php";
include "../template/footer.php";
include "../template/modallogout.php";

?>
  
<?php 

include "../template/templatefooter.php";

?>